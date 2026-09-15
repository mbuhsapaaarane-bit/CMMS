#!/usr/bin/env bash
# ==========================================================
#   CMMS - Auto Installer Lokal (Linux / macOS)
#   Laravel 10 + SQLite
#   Cara pakai:  bash install.sh   (atau  ./install.sh)
# ==========================================================
set -euo pipefail
cd "$(dirname "$0")"

echo "=========================================================="
echo "  CMMS - Auto Installer Lokal (Linux / macOS)"
echo "  Laravel 10 + SQLite"
echo "=========================================================="
echo

# ---------- 1. Cek prasyarat ----------
echo "[1/5] Memeriksa prasyarat..."
if ! command -v php >/dev/null 2>&1; then
    echo
    echo "[GAGAL] PHP tidak ditemukan."
    echo "        Install PHP 8.1+ : sudo apt install php-cli php-mbstring php-sqlite3"
    echo
    exit 1
fi
echo "        PHP $(php -r 'echo PHP_VERSION;') ditemukan."

if ! command -v composer >/dev/null 2>&1; then
    echo
    echo "[GAGAL] Composer tidak ditemukan. Install dari: https://getcomposer.org/download/"
    echo
    exit 1
fi
echo "        Composer ditemukan."

# ---------- 2. Install dependency ----------
echo
echo "[2/5] Menginstall dependency (composer install)..."
if [ -f vendor/autoload.php ]; then
    echo "        vendor/ sudah ada, dilewati."
else
    composer install --no-interaction
fi

# ---------- 3. Buat .env ----------
echo
echo "[3/5] Menyiapkan file .env..."
if [ ! -f .env ]; then
    if [ -f .env_sqlite ]; then
        cp .env_sqlite .env
        echo "        .env dibuat dari .env_sqlite (SQLite)."
    else
        echo
        echo "[GAGAL] .env_sqlite tidak ditemukan."
        echo
        exit 1
    fi
    php artisan key:generate --force
else
    echo "        .env sudah ada, dilewati (tidak menimpa konfigurasi Anda)."
fi
php artisan config:clear >/dev/null 2>&1 || true

# ---------- 4. Database ----------
echo
echo "[4/5] Menyiapkan database..."
if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
    echo "        database.sqlite dibuat."
fi
php artisan migrate --seed --force
echo "        Migrasi + seed selesai."

# ---------- 5. Jalankan server ----------
echo
echo "[5/5] Menjalankan server..."
echo
echo "  Buka di browser : http://127.0.0.1:8000"
echo "  Jika port 8000 sibuk, jalankan: php artisan serve --port=8080"
echo "  Akun demo       : ahmad / manager1   (Manager)"
echo "                    budi / leader1     (Leader)"
echo "                    cahyo / op1        (Operator)"
echo
echo "  Tekan Ctrl+C untuk menghentikan server."
echo "=========================================================="
php artisan serve
