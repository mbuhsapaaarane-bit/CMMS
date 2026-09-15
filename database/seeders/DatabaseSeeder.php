<<<<<<< HEAD
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insertOrIgnore([
            ['name' => 'Ahmad Supriadi', 'username' => 'ahmad', 'password' => Hash::make('manager1'), 'role' => 'manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Budi Santoso', 'username' => 'budi', 'password' => Hash::make('leader1'), 'role' => 'leader', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cahyo Wibowo', 'username' => 'cahyo', 'password' => Hash::make('op1'), 'role' => 'operator', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('vehicles')->insertOrIgnore([
            ['code' => 'SMJ-001', 'name' => 'Piaggio Ape City', 'year' => 2019, 'trips_per_day' => 8, 'last_service_date' => '2025-04-15', 'plate' => 'B 9871 UVW', 'service_count' => 7, 'total_cost' => 2450000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-002', 'name' => 'Piaggio Ape DX', 'year' => 2020, 'trips_per_day' => 6, 'last_service_date' => '2025-05-20', 'plate' => 'B 6543 XYZ', 'service_count' => 4, 'total_cost' => 1200000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-003', 'name' => 'TVS King Deluxe', 'year' => 2021, 'trips_per_day' => 10, 'last_service_date' => '2025-03-10', 'plate' => 'B 3210 ABC', 'service_count' => 12, 'total_cost' => 5800000, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('locations')->insertOrIgnore([
            ['name' => 'Gudang', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung A', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung B', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung C', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin A', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin B', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin C', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('schedules')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-003', 'job_type' => 'Servis Berat', 'scheduled_at' => '2025-07-05', 'note' => 'Overhaul mesin', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-007', 'job_type' => 'Penggantian Komponen', 'scheduled_at' => '2025-07-01', 'note' => 'Ganti CVT belt', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-005', 'job_type' => 'Servis Ringan', 'scheduled_at' => '2025-07-08', 'note' => 'Ganti oli', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('repairs')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-001', 'repair_type' => 'Ganti Oli', 'cost' => 150000, 'note' => 'Oli dan filter', 'repaired_at' => '2025-04-15', 'photo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-003', 'repair_type' => 'Overhaul Mesin', 'cost' => 1500000, 'note' => 'Ring piston', 'repaired_at' => '2025-03-10', 'photo' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tracks')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-001', 'operator_name' => 'Cahyo Wibowo', 'status' => 'digunakan', 'building' => 'Gedung A', 'machine' => 'Mesin B', 'started_at' => '2025-07-01 08:30:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-004', 'operator_name' => 'Dedi Kurniawan', 'status' => 'digunakan', 'building' => 'Gedung B', 'machine' => 'Mesin A', 'started_at' => '2025-07-01 09:00:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('spare_parts')->insertOrIgnore([
            ['name' => 'Oli Mesin 1L', 'qty' => 24, 'min_qty' => 6, 'unit' => 'botol', 'price' => 85000, 'note' => 'Untuk servis ringan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belt CVT', 'qty' => 8, 'min_qty' => 4, 'unit' => 'pcs', 'price' => 125000, 'note' => 'Piaggio Ape', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ban Luar 4.50-10', 'qty' => 3, 'min_qty' => 4, 'unit' => 'pcs', 'price' => 210000, 'note' => 'Stok menipis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Filter Oli', 'qty' => 12, 'min_qty' => 5, 'unit' => 'pcs', 'price' => 45000, 'note' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
=======
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insertOrIgnore([
            ['name' => 'Ahmad Supriadi', 'username' => 'ahmad', 'password' => Hash::make('manager1'), 'role' => 'manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Budi Santoso', 'username' => 'budi', 'password' => Hash::make('leader1'), 'role' => 'leader', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cahyo Wibowo', 'username' => 'cahyo', 'password' => Hash::make('op1'), 'role' => 'operator', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('vehicles')->insertOrIgnore([
            ['code' => 'SMJ-001', 'name' => 'Piaggio Ape City', 'year' => 2019, 'trips_per_day' => 8, 'last_service_date' => '2025-04-15', 'plate' => 'B 9871 UVW', 'service_count' => 7, 'total_cost' => 2450000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-002', 'name' => 'Piaggio Ape DX', 'year' => 2020, 'trips_per_day' => 6, 'last_service_date' => '2025-05-20', 'plate' => 'B 6543 XYZ', 'service_count' => 4, 'total_cost' => 1200000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-003', 'name' => 'TVS King Deluxe', 'year' => 2021, 'trips_per_day' => 10, 'last_service_date' => '2025-03-10', 'plate' => 'B 3210 ABC', 'service_count' => 12, 'total_cost' => 5800000, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('locations')->insertOrIgnore([
            ['name' => 'Gudang', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung A', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung B', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung C', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin A', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin B', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin C', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('schedules')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-003', 'job_type' => 'Servis Berat', 'scheduled_at' => '2025-07-05', 'note' => 'Overhaul mesin', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-007', 'job_type' => 'Penggantian Komponen', 'scheduled_at' => '2025-07-01', 'note' => 'Ganti CVT belt', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-005', 'job_type' => 'Servis Ringan', 'scheduled_at' => '2025-07-08', 'note' => 'Ganti oli', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('repairs')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-001', 'repair_type' => 'Ganti Oli', 'cost' => 150000, 'note' => 'Oli dan filter', 'repaired_at' => '2025-04-15', 'photo' => null, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-003', 'repair_type' => 'Overhaul Mesin', 'cost' => 1500000, 'note' => 'Ring piston', 'repaired_at' => '2025-03-10', 'photo' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tracks')->insertOrIgnore([
            ['vehicle_code' => 'SMJ-001', 'operator_name' => 'Cahyo Wibowo', 'status' => 'digunakan', 'building' => 'Gedung A', 'machine' => 'Mesin B', 'started_at' => '2025-07-01 08:30:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-004', 'operator_name' => 'Dedi Kurniawan', 'status' => 'digunakan', 'building' => 'Gedung B', 'machine' => 'Mesin A', 'started_at' => '2025-07-01 09:00:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('spare_parts')->insertOrIgnore([
            ['name' => 'Oli Mesin 1L', 'qty' => 24, 'min_qty' => 6, 'unit' => 'botol', 'price' => 85000, 'note' => 'Untuk servis ringan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belt CVT', 'qty' => 8, 'min_qty' => 4, 'unit' => 'pcs', 'price' => 125000, 'note' => 'Piaggio Ape', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ban Luar 4.50-10', 'qty' => 3, 'min_qty' => 4, 'unit' => 'pcs', 'price' => 210000, 'note' => 'Stok menipis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Filter Oli', 'qty' => 12, 'min_qty' => 5, 'unit' => 'pcs', 'price' => 45000, 'note' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
>>>>>>> bc60b796583544d0723aed639250b1377c2fca05
