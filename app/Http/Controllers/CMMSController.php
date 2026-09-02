<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CMMSController extends Controller
{
    public function index()
    {
        $content = file_get_contents(resource_path('views/welcome.blade.php'));
        $content = str_replace('{{ csrf_token() }}', csrf_token(), $content);

        return response($content, 200)
            ->header('Content-Type', 'text/html; charset=utf-8');
    }

    /* ------------------------------------------------------------------ */
    /* Auth                                                               */
    /* ------------------------------------------------------------------ */

    public function login(Request $request)
    {
        $username = trim((string) $request->input('username'));
        $password = (string) $request->input('password');

        if ($username === '' || $password === '') {
            return response()->json(['error' => 'Username dan password wajib diisi'], 422);
        }

        $user = DB::table('users')
            ->where('username', $username)
            ->first();

        if (!$user) {
            return response()->json(['error' => 'Username atau password salah'], 422);
        }

        // Dukung legacy plain text (data lama) sambil memprioritaskan bcrypt.
        if (!$this->passwordMatches($password, $user)) {
            return response()->json(['error' => 'Username atau password salah'], 422);
        }

        $request->session()->put('user', $user);
        $this->logActivity($request, 'login', 'Login sebagai ' . $user->role);

        return response()->json(['user' => $this->normalizeUser((array) $user)]);
    }

    public function logout(Request $request)
    {
        $this->logActivity($request, 'logout', 'Keluar dari aplikasi');
        $request->session()->forget('user');

        return response()->json(['ok' => true]);
    }

    public function updateProfile(Request $request)
    {
        $user = $this->currentUser($request);

        if (!$user) {
            return response()->json(['error' => 'Sesi berakhir, silakan login ulang'], 401);
        }

        $payload = $request->validate([
            'name' => 'nullable|string|max:255',
            'current_password' => 'nullable|string',
            'password' => 'nullable|string|min:4',
            'photo' => 'nullable|string',
        ]);

        $name = trim((string) ($payload['name'] ?? ''));
        $newPassword = (string) ($payload['password'] ?? '');
        $currentPassword = (string) ($payload['current_password'] ?? '');
        $photo = (string) ($payload['photo'] ?? '');

        if ($name === '' && $newPassword === '' && $photo === '') {
            return response()->json(['error' => 'Tidak ada perubahan yang dikirim'], 422);
        }

        $update = [];

        if ($name !== '') {
            $update['name'] = $name;
        }

        if ($newPassword !== '') {
            if ($currentPassword === '' || !$this->passwordMatches($currentPassword, $user)) {
                return response()->json(['error' => 'Password saat ini salah'], 422);
            }
            $update['password'] = Hash::make($newPassword);
        }

        if ($photo !== '') {
            $storedPhoto = $this->storeBase64Photo($photo);
            if ($storedPhoto) {
                $update['photo'] = $storedPhoto;
            }
        }

        $update['updated_at'] = now();
        DB::table('users')->where('id', $user->id)->update($update);

        $this->logActivity($request, 'ubah profil', 'Perbarui nama/password akun');

        $fresh = DB::table('users')->where('id', $user->id)->first();
        $request->session()->put('user', $fresh);

        return response()->json(['ok' => true, 'user' => $this->normalizeUser((array) $fresh)]);
    }

    /* ------------------------------------------------------------------ */
    /* Data utama                                                         */
    /* ------------------------------------------------------------------ */

    public function data(Request $request)
    {
        $user = $request->session()->get('user');

        $payload = [
            'user' => $user ? $this->normalizeUser((array) $user) : null,
            'users' => DB::table('users')->get()->map(fn($item) => $this->normalizeUser((array) $item)),
            'vehicles' => DB::table('vehicles')->get()->map(fn($item) => $this->normalizeVehicle((array) $item)),
            'locations' => DB::table('locations')->get()->map(fn($item) => $this->normalizeLocation((array) $item)),
            'tracks' => DB::table('tracks')->get()->map(fn($item) => $this->normalizeTrack((array) $item)),
            'schedules' => DB::table('schedules')->get()->map(fn($item) => $this->normalizeSchedule((array) $item)),
            'repairs' => DB::table('repairs')->get()->map(fn($item) => $this->normalizeRepair((array) $item)),
            'reports' => DB::table('reports')->orderByDesc('id')->get()->map(fn($item) => $this->normalizeReport((array) $item)),
            'logs' => DB::table('activity_logs')->orderByDesc('id')->limit(100)->get()->map(fn($item) => $this->normalizeActivityLog((array) $item)),
            'parts' => DB::table('spare_parts')->orderBy('name')->get()->map(fn($item) => $this->normalizePart((array) $item)),
        ];

        return response()->json($payload);
    }

    /* ------------------------------------------------------------------ */
    /* Laporan kondisi                                                    */
    /* ------------------------------------------------------------------ */

    public function report(Request $request)
    {
        $payload = $request->validate([
            'vehicle' => 'required|string',
            'issues' => 'required|string',
            'severity' => 'required|string',
            'notes' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $issues = json_decode($payload['issues'], true);
        if (!is_array($issues) || !count($issues)) {
            return response()->json(['error' => 'Masalah tidak valid'], 422);
        }

        $photo = $this->storeBase64Photo($payload['photo'] ?? null);

        $reportId = DB::table('reports')->insertGetId([
            'vehicle_code' => $payload['vehicle'],
            'issues' => json_encode($issues),
            'severity' => $payload['severity'],
            'notes' => $payload['notes'] ?? null,
            'photo' => $photo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'lapor kondisi', 'Laporan ' . $payload['severity'] . ' untuk ' . $payload['vehicle']);

        $report = DB::table('reports')->where('id', $reportId)->first();

        return response()->json(['ok' => true, 'report' => $this->normalizeReport((array) $report)]);
    }

    /* ------------------------------------------------------------------ */
    /* User                                                               */
    /* ------------------------------------------------------------------ */

    public function createUser(Request $request)
    {
        $current = $this->requireRole($request, ['manager', 'leader']);

        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:4',
            'role' => 'required|string|in:manager,leader,operator',
        ]);

        // Leader hanya boleh membuat operator.
        if ($current->role === 'leader' && $payload['role'] !== 'operator') {
            return response()->json(['error' => 'Leader hanya bisa menambahkan akun level Operator'], 403);
        }

        $userId = DB::table('users')->insertGetId([
            'name' => $payload['name'],
            'username' => $payload['username'],
            'password' => Hash::make($payload['password']),
            'role' => $payload['role'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'tambah user', 'User ' . $payload['username'] . ' (' . $payload['role'] . ')');

        $user = DB::table('users')->where('id', $userId)->first();

        return response()->json(['ok' => true, 'user' => $this->normalizeUser((array) $user)]);
    }

    public function deleteUser(Request $request, int $id)
    {
        $current = $this->requireRole($request, ['manager', 'leader']);

        $target = DB::table('users')->where('id', $id)->first();
        if (!$target) {
            return response()->json(['error' => 'User tidak ditemukan'], 404);
        }

        if ($current->role === 'leader' && $target->role !== 'operator') {
            return response()->json(['error' => 'Leader hanya bisa menghapus akun level Operator'], 403);
        }

        if ($target->id == ($current->id ?? null)) {
            return response()->json(['error' => 'Tidak bisa menghapus akun sendiri'], 422);
        }

        DB::table('users')->where('id', $id)->delete();

        $this->logActivity($request, 'hapus user', 'User ' . $target->username);

        return response()->json(['ok' => true]);
    }

    /* ------------------------------------------------------------------ */
    /* Lokasi                                                             */
    /* ------------------------------------------------------------------ */

    public function createLocation(Request $request)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:gedung,mesin',
        ]);

        $locationId = DB::table('locations')->insertGetId([
            'name' => $payload['name'],
            'type' => $payload['type'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'tambah lokasi', $payload['name'] . ' (' . $payload['type'] . ')');

        $location = DB::table('locations')->where('id', $locationId)->first();

        return response()->json(['ok' => true, 'location' => $this->normalizeLocation((array) $location)]);
    }

    public function deleteLocation(Request $request, int $id)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $target = DB::table('locations')->where('id', $id)->first();

        DB::table('locations')->where('id', $id)->delete();

        $this->logActivity($request, 'hapus lokasi', $target->name ?? '#' . $id);

        return response()->json(['ok' => true]);
    }

    /* ------------------------------------------------------------------ */
    /* Kendaraan                                                          */
    /* ------------------------------------------------------------------ */

    public function createVehicle(Request $request)
    {
        $this->requireRole($request, ['manager']);

        $payload = $request->validate([
            'code' => 'required|string|max:255|unique:vehicles,code',
            'name' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'trips_per_day' => 'required|integer|min:0',
            'last_service_date' => 'required|date',
            'plate' => 'nullable|string|max:255',
        ]);

        DB::table('vehicles')->insert([
            'code' => $payload['code'],
            'name' => $payload['name'],
            'year' => $payload['year'],
            'trips_per_day' => $payload['trips_per_day'],
            'last_service_date' => $payload['last_service_date'],
            'plate' => $payload['plate'],
            'service_count' => 0,
            'total_cost' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'tambah armada', $payload['code'] . ' - ' . $payload['name']);

        $vehicle = DB::table('vehicles')->where('code', $payload['code'])->first();

        return response()->json(['ok' => true, 'vehicle' => $this->normalizeVehicle((array) $vehicle)]);
    }

    public function updateVehicle(Request $request, string $code)
    {
        $this->requireRole($request, ['manager']);

        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'trips_per_day' => 'required|integer|min:0',
            'last_service_date' => 'required|date',
            'plate' => 'nullable|string|max:255',
        ]);

        DB::table('vehicles')->where('code', $code)->update([
            'name' => $payload['name'],
            'year' => $payload['year'],
            'trips_per_day' => $payload['trips_per_day'],
            'last_service_date' => $payload['last_service_date'],
            'plate' => $payload['plate'],
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'ubah armada', $code);

        $vehicle = DB::table('vehicles')->where('code', $code)->first();

        return response()->json(['ok' => true, 'vehicle' => $this->normalizeVehicle((array) $vehicle)]);
    }

    public function deleteVehicle(Request $request, string $code)
    {
        $this->requireRole($request, ['manager']);

        DB::table('vehicles')->where('code', $code)->delete();

        $this->logActivity($request, 'hapus armada', $code);

        return response()->json(['ok' => true]);
    }

    /* ------------------------------------------------------------------ */
    /* Jadwal servis                                                      */
    /* ------------------------------------------------------------------ */

    public function createSchedule(Request $request)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $payload = $request->validate([
            'vehicle_code' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'scheduled_at' => 'required|date',
            'note' => 'nullable|string',
        ]);

        $scheduleId = DB::table('schedules')->insertGetId([
            'vehicle_code' => $payload['vehicle_code'],
            'job_type' => $payload['job_type'],
            'scheduled_at' => $payload['scheduled_at'],
            'note' => $payload['note'] ?? null,
            'status' => 'menunggu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'buat jadwal', $payload['vehicle_code'] . ' - ' . $payload['job_type']);

        $schedule = DB::table('schedules')->where('id', $scheduleId)->first();

        return response()->json(['ok' => true, 'schedule' => $this->normalizeSchedule((array) $schedule)]);
    }

    public function completeSchedule(Request $request, int $id)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $payload = $request->validate([
            'cost' => 'required|integer|min:0',
            'note' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $schedule = DB::table('schedules')->where('id', $id)->first();
        if (!$schedule) {
            return response()->json(['error' => 'Jadwal tidak ditemukan'], 404);
        }

        DB::table('schedules')->where('id', $id)->update([
            'status' => 'selesai',
            'cost' => $payload['cost'],
            'updated_at' => now(),
        ]);

        $this->recordServiceCompletion(
            $schedule->vehicle_code,
            $payload['cost'],
            $payload['note'] ?? null,
            $this->storeBase64Photo($payload['photo'] ?? null),
            'Servis Selesai'
        );

        $this->logActivity($request, 'selesaikan servis', $schedule->vehicle_code . ' (biaya ' . number_format($payload['cost']) . ')');

        return response()->json(['ok' => true]);
    }


    public function completeService(Request $request, string $code)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $vehicle = DB::table('vehicles')->where('code', $code)->first();
        if (!$vehicle) {
            return response()->json(['error' => 'Motor tidak ditemukan'], 404);
        }

        $payload = $request->validate([
            'cost' => 'required|integer|min:0',
            'note' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $this->recordServiceCompletion(
            $code,
            $payload['cost'],
            $payload['note'] ?? null,
            $this->storeBase64Photo($payload['photo'] ?? null),
            'Servis Selesai'
        );

        $this->logActivity($request, 'selesaikan servis', $code . ' (biaya ' . number_format($payload['cost']) . ')');

        return response()->json(['ok' => true]);
    }

    public function usePart(Request $request, int $id)
    {
        $this->requireRole($request, ['manager', 'leader']);

        $payload = $request->validate([
            'vehicle_code' => 'required|string|max:255',
            'qty' => 'required|integer|min:1',
        ]);

        $part = DB::table('spare_parts')->where('id', $id)->first();
        if (!$part) {
            return response()->json(['error' => 'Suku cadang tidak ditemukan'], 404);
        }

        $vehicle = DB::table('vehicles')->where('code', $payload['vehicle_code'])->first();
        if (!$vehicle) {
            return response()->json(['error' => 'Motor tidak ditemukan'], 404);
        }

        if ($payload['qty'] > $part->qty) {
            return response()->json(['error' => 'Stok tidak mencukupi (tersisa ' . $part->qty . ' ' . $part->unit . ')'], 422);
        }

        $cost = $payload['qty'] * (int) $part->price;

        DB::table('spare_parts')->where('id', $id)->update([
            'qty' => $part->qty - $payload['qty'],
            'updated_at' => now(),
        ]);

        DB::table('part_usages')->insert([
            'part_id' => $part->id,
            'vehicle_code' => $payload['vehicle_code'],
            'qty' => $payload['qty'],
            'cost' => $cost,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->recordServiceCompletion(
            $payload['vehicle_code'],
            $cost,
            'Pemakaian ' . $part->name . ' x' . $payload['qty'],
            null,
            'Aplikasi Suku Cadang'
        );

        $this->logActivity($request, 'aplikasikan suku cadang', $part->name . ' x' . $payload['qty'] . ' ke ' . $payload['vehicle_code'] . ' (biaya ' . number_format($cost) . ')');

        return response()->json([
            'ok' => true,
            'part' => $this->normalizePart((array) DB::table('spare_parts')->where('id', $id)->first()),
        ]);
    }

    public function deleteSchedule(Request $request, int $id)
    {
        $this->requireRole($request, ['manager', 'leader']);

        DB::table('schedules')->where('id', $id)->delete();

        $this->logActivity($request, 'hapus jadwal', 'Jadwal #' . $id);

        return response()->json(['ok' => true]);
    }

    /* ------------------------------------------------------------------ */
    /* Tracking                                                           */
    /* ------------------------------------------------------------------ */

    public function startTrack(Request $request)
    {
        $this->requireRole($request, ['manager', 'leader', 'operator']);

        $payload = $request->validate([
            'vehicle_code' => 'required|string|max:255',
            'building' => 'required|string|max:255',
            'machine' => 'nullable|string|max:255',
        ]);

        $operator = $request->session()->get('user')->name ?? '';

        $trackId = DB::table('tracks')->insertGetId([
            'vehicle_code' => $payload['vehicle_code'],
            'operator_name' => $operator,
            'status' => 'digunakan',
            'building' => $payload['building'],
            'machine' => $payload['machine'] ?? null,
            'started_at' => now(),
            'ended_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'mulai tracking', $payload['vehicle_code'] . ' ke ' . $payload['building']);

        $track = DB::table('tracks')->where('id', $trackId)->first();

        return response()->json(['ok' => true, 'track' => $this->normalizeTrack((array) $track)]);
    }

    public function endTrack(Request $request, int $id)
    {
        $this->requireRole($request, ['manager', 'leader', 'operator']);

        DB::table('tracks')->where('id', $id)->update([
            'status' => 'selesai',
            'ended_at' => now(),
            'updated_at' => now(),
        ]);

        $track = DB::table('tracks')->where('id', $id)->first();

        $this->logActivity($request, 'selesai tracking', $track->vehicle_code ?? '#' . $id);

        return response()->json(['ok' => true, 'track' => $track ? $this->normalizeTrack((array) $track) : null]);
    }

    /* ------------------------------------------------------------------ */
    /* Suku cadang                                                        */
    /* ------------------------------------------------------------------ */

    public function createPart(Request $request)
    {
        $this->requireRole($request, ['manager']);

        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'min_qty' => 'required|integer|min:0',
            'unit' => 'nullable|string|max:50',
            'price' => 'required|integer|min:0',
            'note' => 'nullable|string|max:255',
        ]);

        $partId = DB::table('spare_parts')->insertGetId([
            'name' => $payload['name'],
            'qty' => $payload['qty'],
            'min_qty' => $payload['min_qty'],
            'unit' => $payload['unit'] ?? 'pcs',
            'price' => $payload['price'],
            'note' => $payload['note'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'tambah suku cadang', $payload['name']);

        $part = DB::table('spare_parts')->where('id', $partId)->first();

        return response()->json(['ok' => true, 'part' => $this->normalizePart((array) $part)]);
    }

    public function updatePart(Request $request, int $id)
    {
        $this->requireRole($request, ['manager']);

        $payload = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'min_qty' => 'required|integer|min:0',
            'unit' => 'nullable|string|max:50',
            'price' => 'required|integer|min:0',
            'note' => 'nullable|string|max:255',
        ]);

        DB::table('spare_parts')->where('id', $id)->update([
            'name' => $payload['name'],
            'qty' => $payload['qty'],
            'min_qty' => $payload['min_qty'],
            'unit' => $payload['unit'] ?? 'pcs',
            'price' => $payload['price'],
            'note' => $payload['note'] ?? null,
            'updated_at' => now(),
        ]);

        $this->logActivity($request, 'ubah suku cadang', $payload['name']);

        $part = DB::table('spare_parts')->where('id', $id)->first();

        return response()->json(['ok' => true, 'part' => $this->normalizePart((array) $part)]);
    }

    public function deletePart(Request $request, int $id)
    {
        $this->requireRole($request, ['manager']);

        $target = DB::table('spare_parts')->where('id', $id)->first();

        DB::table('spare_parts')->where('id', $id)->delete();

        $this->logActivity($request, 'hapus suku cadang', $target->name ?? '#' . $id);

        return response()->json(['ok' => true]);
    }

    /* ------------------------------------------------------------------ */
    /* Helper                                                             */
    /* ------------------------------------------------------------------ */


    private function recordServiceCompletion(string $vehicleCode, int $cost, ?string $note, ?string $photo, string $type = 'Servis Selesai')
    {
        DB::table('repairs')->insert([
            'vehicle_code' => $vehicleCode,
            'repair_type' => $type,
            'cost' => $cost,
            'note' => $note,
            'photo' => $photo,
            'repaired_at' => now()->toDateString(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $vehicle = DB::table('vehicles')->where('code', $vehicleCode)->first();
        if ($vehicle) {
            DB::table('vehicles')->where('code', $vehicleCode)->update([
                'service_count' => (int) $vehicle->service_count + 1,
                'total_cost' => (int) $vehicle->total_cost + $cost,
                'last_service_date' => now()->toDateString(),
                'updated_at' => now(),
            ]);
        }
    }

    private function currentUser(Request $request)
    {
        return $request->session()->get('user');
    }

    private function requireRole(Request $request, array $roles)
    {
        $user = $this->currentUser($request);

        if (!$user || !in_array($user->role, $roles)) {
            abort(response()->json(['error' => 'Anda tidak memiliki akses untuk aksi ini'], 403));
        }

        return $user;
    }

    private function passwordMatches(string $password, $user): bool
    {
        if (Hash::check($password, $user->password)) {
            return true;
        }

        if ($user->password === $password) {
            // Password lama masih plain text — migrasi ke bcrypt otomatis.
            DB::table('users')->where('id', $user->id)->update([
                'password' => Hash::make($password),
                'updated_at' => now(),
            ]);

            return true;
        }

        return false;
    }

    private function logActivity(Request $request, string $action, ?string $details = null)
    {
        $user = $this->currentUser($request);

        DB::table('activity_logs')->insert([
            'user_id' => $user->id ?? null,
            'username' => $user->username ?? ($user->name ?? 'system'),
            'action' => $action,
            'details' => $details,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function storeBase64Photo(?string $dataUrl): ?string
    {
        if (!$dataUrl || !str_starts_with($dataUrl, 'data:image')) {
            return null;
        }

        $raw = base64_decode(substr($dataUrl, strpos($dataUrl, ',') + 1), true);
        if ($raw === false || !$raw) {
            return null;
        }

        $info = @getimagesizefromstring($raw);
        if ($info === false) {
            return null;
        }

        $ext = [
            'image/jpeg' => '.jpg',
            'image/png' => '.png',
            'image/gif' => '.gif',
            'image/webp' => '.webp',
        ][$info['mime'] ?? ''] ?? '.jpg';
        $dir = public_path('uploads/photos');
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $name = 'photo_' . time() . '_' . bin2hex(random_bytes(4)) . $ext;
        file_put_contents($dir . '/' . $name, $raw);

        return 'uploads/photos/' . $name;
    }

    /* ------------------------------------------------------------------ */
    /* Normalisasi                                                        */
    /* ------------------------------------------------------------------ */

    private function normalizeUser(array $user): array
    {
        return [
            'id' => $user['id'] ?? null,
            'nama' => $user['name'] ?? $user['nama'] ?? '',
            'username' => $user['username'] ?? '',
            'role' => $user['role'] ?? '',
            'photo' => $user['photo'] ?? '',
        ];
    }

    private function normalizeVehicle(array $vehicle): array
    {
        return [
            'id' => $vehicle['code'] ?? $vehicle['id'] ?? '',
            'mk' => $vehicle['name'] ?? $vehicle['mk'] ?? '',
            'th' => $vehicle['year'] ?? $vehicle['th'] ?? now()->year,
            'tr' => $vehicle['trips_per_day'] ?? $vehicle['tr'] ?? 0,
            'ls' => $vehicle['last_service_date'] ?? $vehicle['ls'] ?? '',
            'np' => $vehicle['plate'] ?? $vehicle['np'] ?? '',
            'ts' => $vehicle['service_count'] ?? $vehicle['ts'] ?? 0,
            'tb' => $vehicle['total_cost'] ?? $vehicle['tb'] ?? 0,
        ];
    }

    private function normalizeSchedule(array $schedule): array
    {
        return [
            'id' => $schedule['id'] ?? null,
            'aid' => $schedule['vehicle_code'] ?? $schedule['aid'] ?? '',
            'jn' => $schedule['job_type'] ?? $schedule['jn'] ?? '',
            'tg' => $schedule['scheduled_at'] ?? $schedule['tg'] ?? '',
            'ct' => $schedule['note'] ?? $schedule['ct'] ?? '',
            'cost' => (int) ($schedule['cost'] ?? 0),
            'st' => $schedule['status'] ?? $schedule['st'] ?? 'menunggu',
        ];
    }

    private function normalizeRepair(array $repair): array
    {
        return [
            'id' => $repair['id'] ?? null,
            'aid' => $repair['vehicle_code'] ?? $repair['aid'] ?? '',
            'tg' => $repair['repaired_at'] ?? $repair['tg'] ?? '',
            'jn' => $repair['repair_type'] ?? $repair['jn'] ?? '',
            'bz' => $repair['cost'] ?? $repair['bz'] ?? 0,
            'kt' => $repair['note'] ?? $repair['kt'] ?? '',
            'photo' => $repair['photo'] ?? '',
        ];
    }

    private function normalizeTrack(array $track): array
    {
        return [
            'id' => $track['id'] ?? null,
            'mid' => $track['vehicle_code'] ?? $track['mid'] ?? '',
            'op' => $track['operator_name'] ?? $track['op'] ?? '',
            'st' => $track['status'] ?? $track['st'] ?? '',
            'gd' => $track['building'] ?? $track['gd'] ?? '',
            'ms' => $track['machine'] ?? $track['ms'] ?? '',
            'mu' => $track['started_at'] ?? $track['mu'] ?? '',
            'se' => $track['ended_at'] ?? $track['se'] ?? null,
        ];
    }

    private function normalizeReport(array $report): array
    {
        return [
            'id' => $report['id'] ?? null,
            'vehicle_code' => $report['vehicle_code'] ?? $report['vehicle'] ?? '',
            'issues' => isset($report['issues']) ? json_decode($report['issues'], true) ?? $report['issues'] : [],
            'severity' => $report['severity'] ?? '',
            'notes' => $report['notes'] ?? '',
            'photo' => $report['photo'] ?? '',
            'created_at' => $report['created_at'] ?? '',
        ];
    }

    private function normalizeLocation(array $location): array
    {
        return [
            'id' => $location['id'] ?? null,
            'name' => $location['name'] ?? '',
            'type' => $location['type'] ?? '',
        ];
    }

    private function normalizeActivityLog(array $log): array
    {
        return [
            'id' => $log['id'] ?? null,
            'username' => $log['username'] ?? '',
            'action' => $log['action'] ?? '',
            'details' => $log['details'] ?? '',
            'created_at' => $log['created_at'] ?? '',
        ];
    }

    private function normalizePart(array $part): array
    {
        return [
            'id' => $part['id'] ?? null,
            'name' => $part['name'] ?? '',
            'qty' => (int) ($part['qty'] ?? 0),
            'min_qty' => (int) ($part['min_qty'] ?? 0),
            'unit' => $part['unit'] ?? 'pcs',
            'price' => (int) ($part['price'] ?? 0),
            'note' => $part['note'] ?? '',
        ];
    }
}
