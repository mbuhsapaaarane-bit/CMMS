<?php
/**
 * Hapus file-file yang tidak diperlukan dari proyek.
 *
 * Cara pakai (dari folder proyek):
 *   php cleanup.php
 *
 * Skrip ini hanya menghapus file dari daftar di bawah (whitelist), lalu
 * menghapus dirinya sendiri di akhir. File lain tidak akan tersentuh.
 */

// Pastikan skrip dijalankan dari root proyek (folder berisi file artisan).
if (!is_file(__DIR__ . '/artisan') || !is_dir(__DIR__ . '/app')) {
    echo "Jalankan dari folder proyek CMMS (folder yang berisi file artisan).\n";
    exit(1);
}

$junk = [
    // ---- Skrip debug / patch satu kali (sudah diterapkan) ----
    'bladecheck.php',
    'cfgcheck.php',
    'dbcheck.php',
    'extract_strings.php',
    'fix_suk.php',
    'fixblanks.php',
    'frontend_patch.php',
    'patch1.php',
    'resize_icons.php',
    'smoke_test.php',

    // ---- Seeder duplikat (password plain text) ----
    // Sudah ada versi resmi di database/seeders/DatabaseSeeder.php (bcrypt).
    'DatabaseSeeder.php',

    // ---- Panduan deploy lama (isi sudah digabung ke README.md) ----
    'DEPLOY.md',

    // ---- Output debug & file sisa dari perintah terminal ----
    'patch_err.txt',
    'patch_out.txt',
    'out.txt',
    'smoke_out.txt',
    'smoke_cookies.txt',
    'saveSuk_line.txt',
    'verify.txt',
    'workspace_test.txt',
    'name.PHP_EOL',
    "query('SELECT",
    'true])',
];

echo "== Menghapus file sisa ==\n";
foreach ($junk as $file) {
    $path = __DIR__ . '/' . $file;
    if (is_file($path)) {
        if (@unlink($path)) {
            echo "  hapus  $file\n";
        } else {
            echo "  GAGAL  $file (periksa izin tulis)\n";
        }
    } else {
        echo "  skip   $file (tidak ada)\n";
    }
}

// ---- Sisa file sesi lokal (dibuat ulang otomatis) ----
$sessionDir = __DIR__ . '/storage/framework/sessions';
if (is_dir($sessionDir)) {
    foreach (glob($sessionDir . '/*') as $path) {
        if (basename($path) === '.gitignore') {
            continue;
        }
        if (@unlink($path)) {
            echo "  hapus  $path\n";
        }
    }
}

// ---- Cache terkompilasi bootstrap (dibuat ulang otomatis oleh artisan) ----
foreach (glob(__DIR__ . '/bootstrap/cache/*.php') as $path) {
    if (@unlink($path)) {
        echo "  hapus  $path\n";
    }
}

// ---- Bersihkan .env.example dari baris pertama sisa (mis. '[TEMPLATE]') ----
// Baris pertama yang bukan komentar dan bukan KEY=VALUE akan dihapus
// (karakternya bisa membawa BOM/Unicode tersembunyi yang sulit dihapus manual).
$envExample = __DIR__ . '/.env.example';
if (is_file($envExample)) {
    $lines = file($envExample);
    $first = trim($lines[0] ?? '');
    if ($first !== '' && !str_starts_with($first, '#') && !str_contains($first, '=')) {
        array_shift($lines);
        file_put_contents($envExample, implode('', $lines));
        echo "  perbaiki .env.example (baris pertama bukan konfigurasi, dihapus)\n";
    }
}

echo "\nSELESAI. Proyek sudah bersih.\n";
echo "Jika perlu, regenerasi cache pakai: php artisan package:discover --ansi\n";
