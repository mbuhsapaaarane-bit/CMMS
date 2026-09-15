<?php

use Illuminate\Foundation\Application;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->register(
    Illuminate\Routing\RoutingServiceProvider::class
);

$app->booted(function () use ($app) {
    $app->make('router')->getRoutes()->refreshNameLookups();
});

// Cookie sesi tidak boleh bertanda "secure" saat koneksi masih HTTP
// (mis. uji coba lokal memakai .env produksi yang mengaktifkan
// SESSION_SECURE_COOKIE=true). Kalau tidak, browser menolak cookie,
// sesi hilang, dan login tampak gagal meski kredensial benar.
$app->booted(function () use ($app) {
    if (!$app->runningInConsole() && !request()->secure() && config('session.secure')) {
        config(['session.secure' => false]);
    }
});

$app->booted(function () use ($app) {
    require __DIR__.'/../routes/web.php';
});

return $app;
