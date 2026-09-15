<?php

use App\Http\Controllers\CMMSController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/', [CMMSController::class, 'index']);
    Route::post('/login', [CMMSController::class, 'login']);
    Route::post('/logout', [CMMSController::class, 'logout']);
    Route::put('/profile', [CMMSController::class, 'updateProfile']);
    Route::get('/data', [CMMSController::class, 'data']);
    Route::post('/report', [CMMSController::class, 'report']);

    Route::post('/users', [CMMSController::class, 'createUser']);
    Route::delete('/users/{id}', [CMMSController::class, 'deleteUser']);

    Route::post('/locations', [CMMSController::class, 'createLocation']);
    Route::delete('/locations/{id}', [CMMSController::class, 'deleteLocation']);

    Route::post('/vehicles', [CMMSController::class, 'createVehicle']);
    Route::put('/vehicles/{code}', [CMMSController::class, 'updateVehicle']);
    Route::delete('/vehicles/{code}', [CMMSController::class, 'deleteVehicle']);
    Route::post('/vehicles/{code}/complete', [CMMSController::class, 'completeService']);

    Route::post('/schedules', [CMMSController::class, 'createSchedule']);
    Route::post('/schedules/{id}/complete', [CMMSController::class, 'completeSchedule']);
    Route::delete('/schedules/{id}', [CMMSController::class, 'deleteSchedule']);

    Route::post('/tracks', [CMMSController::class, 'startTrack']);
    Route::post('/tracks/{id}/end', [CMMSController::class, 'endTrack']);

    Route::post('/parts', [CMMSController::class, 'createPart']);
    Route::put('/parts/{id}', [CMMSController::class, 'updatePart']);
    Route::delete('/parts/{id}', [CMMSController::class, 'deletePart']);
    Route::post('/parts/{id}/use', [CMMSController::class, 'usePart']);

    Route::get('/icon.png', function () {
        $path = base_path('icon.png');

        return file_exists($path)
            ? response()->file($path, ['Content-Type' => 'image/png'])
            : abort(404);
    });

    Route::get('/manifest.webmanifest', function () {
        return response()->file(public_path('manifest.webmanifest'), [
            'Content-Type' => 'application/manifest+json',
        ]);
    });

    Route::get('/service-worker.js', function () {
        return response()->file(public_path('service-worker.js'), [
            'Content-Type' => 'application/javascript',
        ]);
    });

    // Bantuan deploy: jalankan migrasi + seeder via web untuk hosting tanpa SSH.
    // Akses: /setup?token=ISI_TOKEN_DARI_ENV  ->  lalu kosongkan SETUP_TOKEN.
    Route::get('/setup', function (Request $request) {
        $token = (string) config('app.setup_token', '');

        if ($token === '' || !hash_equals($token, (string) $request->query('token', ''))) {
            abort(404);
        }

        try {
            Artisan::call('migrate', [
                '--force' => true,
                '--seed' => true,
            ]);

            $output = Artisan::output();
        } catch (\Throwable $e) {
            return response('<pre>GAGAL:\n' . e($e->getMessage()) . '</pre>', 500);
        }

        return response(
            '<pre>' . e($output) . "</pre><p style='color:green;font-weight:bold'>" .
            'Setup selesai. Segera kosongkan SETUP_TOKEN di .env!</p>'
        );
    });
});
