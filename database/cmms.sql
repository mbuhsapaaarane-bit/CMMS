-- ======================================================================
-- CMMS - PT. Sumber Masanda Jaya
-- Struktur database MySQL + data awal (sesuai migrasi & seeder Laravel)
-- Cara pakai: import lewat phpMyAdmin di InfinityFree (tab Import)
-- ======================================================================
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------
-- Hapus tabel lama (jika ada) agar import bersih
-- ----------------------------------------------------------------------
DROP TABLE IF EXISTS `spare_parts`;
DROP TABLE IF EXISTS `activity_logs`;
DROP TABLE IF EXISTS `reports`;
DROP TABLE IF EXISTS `tracks`;
DROP TABLE IF EXISTS `repairs`;
DROP TABLE IF EXISTS `schedules`;
DROP TABLE IF EXISTS `locations`;
DROP TABLE IF EXISTS `vehicles`;
DROP TABLE IF EXISTS `users`;

-- ----------------------------------------------------------------------
-- users
-- ----------------------------------------------------------------------
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`name`, `username`, `password`, `role`, `photo`, `created_at`, `updated_at`) VALUES
('Ahmad Supriadi', 'ahmad', 'manager1', 'manager', NULL, NOW(), NOW()),
('Budi Santoso',   'budi',  'leader1', 'leader',   NULL, NOW(), NOW()),
('Cahyo Wibowo',   'cahyo', 'op1',     'operator', NULL, NOW(), NOW());

-- ----------------------------------------------------------------------
-- vehicles
-- ----------------------------------------------------------------------
CREATE TABLE `vehicles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` year NOT NULL,
  `trips_per_day` smallint unsigned NOT NULL,
  `last_service_date` date NOT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `service_count` smallint unsigned NOT NULL DEFAULT '0',
  `total_cost` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vehicles_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vehicles` (`code`, `name`, `year`, `trips_per_day`, `last_service_date`, `plate`, `service_count`, `total_cost`, `created_at`, `updated_at`) VALUES
('SMJ-001', 'Piaggio Ape City', 2019, 8,  '2025-04-15', 'B 9871 UVW', 7,  2450000, NOW(), NOW()),
('SMJ-002', 'Piaggio Ape DX',   2020, 6,  '2025-05-20', 'B 6543 XYZ', 4,  1200000, NOW(), NOW()),
('SMJ-003', 'TVS King Deluxe',  2021, 10, '2025-03-10', 'B 3210 ABC', 12, 5800000, NOW(), NOW());

-- ----------------------------------------------------------------------
-- locations
-- ----------------------------------------------------------------------
CREATE TABLE `locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `locations` (`name`, `type`, `created_at`, `updated_at`) VALUES
('Gudang',   'gedung', NOW(), NOW()),
('Gedung A', 'gedung', NOW(), NOW()),
('Gedung B', 'gedung', NOW(), NOW()),
('Gedung C', 'gedung', NOW(), NOW()),
('Mesin A',  'mesin',  NOW(), NOW()),
('Mesin B',  'mesin',  NOW(), NOW()),
('Mesin C',  'mesin',  NOW(), NOW());

-- ----------------------------------------------------------------------
-- schedules
-- ----------------------------------------------------------------------
CREATE TABLE `schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_code` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `scheduled_at` date NOT NULL,
  `note` text,
  `status` varchar(255) NOT NULL DEFAULT 'menunggu',
  `cost` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `schedules` (`vehicle_code`, `job_type`, `scheduled_at`, `note`, `status`, `cost`, `created_at`, `updated_at`) VALUES
('SMJ-003', 'Servis Berat',            '2025-07-05', 'Overhaul mesin',     'menunggu', NULL, NOW(), NOW()),
('SMJ-007', 'Penggantian Komponen',    '2025-07-01', 'Ganti CVT belt',     'menunggu', NULL, NOW(), NOW()),
('SMJ-005', 'Servis Ringan',           '2025-07-08', 'Ganti oli',          'menunggu', NULL, NOW(), NOW());

-- ----------------------------------------------------------------------
-- repairs
-- ----------------------------------------------------------------------
CREATE TABLE `repairs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_code` varchar(255) NOT NULL,
  `repair_type` varchar(255) NOT NULL,
  `cost` bigint unsigned NOT NULL,
  `note` text,
  `photo` varchar(255) DEFAULT NULL,
  `repaired_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `repairs` (`vehicle_code`, `repair_type`, `cost`, `note`, `photo`, `repaired_at`, `created_at`, `updated_at`) VALUES
('SMJ-001', 'Ganti Oli',      150000,  'Oli dan filter', NULL, '2025-04-15', NOW(), NOW()),
('SMJ-003', 'Overhaul Mesin', 1500000, 'Ring piston',    NULL, '2025-03-10', NOW(), NOW());

-- ----------------------------------------------------------------------
-- tracks
-- ----------------------------------------------------------------------
CREATE TABLE `tracks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_code` varchar(255) NOT NULL,
  `operator_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `machine` varchar(255) DEFAULT NULL,
  `started_at` datetime NOT NULL,
  `ended_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tracks` (`vehicle_code`, `operator_name`, `status`, `building`, `machine`, `started_at`, `ended_at`, `created_at`, `updated_at`) VALUES
('SMJ-001', 'Cahyo Wibowo',     'digunakan', 'Gedung A', 'Mesin B', '2025-07-01 08:30:00', NULL, NOW(), NOW()),
('SMJ-004', 'Dedi Kurniawan',   'digunakan', 'Gedung B', 'Mesin A', '2025-07-01 09:00:00', NULL, NOW(), NOW());

-- ----------------------------------------------------------------------
-- reports
-- ----------------------------------------------------------------------
CREATE TABLE `reports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_code` varchar(255) NOT NULL,
  `issues` json NOT NULL,
  `severity` varchar(255) NOT NULL,
  `notes` text,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------------------------------------------------
-- activity_logs
-- ----------------------------------------------------------------------
CREATE TABLE `activity_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------------------------------------------------
-- spare_parts
-- ----------------------------------------------------------------------
CREATE TABLE `spare_parts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `qty` int NOT NULL DEFAULT '0',
  `min_qty` int NOT NULL DEFAULT '5',
  `unit` varchar(255) NOT NULL DEFAULT 'pcs',
  `price` bigint unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `spare_parts` (`name`, `qty`, `min_qty`, `unit`, `price`, `note`, `created_at`, `updated_at`) VALUES
('Oli Mesin 1L',        24, 6, 'botol', 85000,  'Untuk servis ringan',  NOW(), NOW()),
('Belt CVT',            8,  4, 'pcs',   125000, 'Piaggio Ape',          NOW(), NOW()),
('Ban Luar 4.50-10',    3,  4, 'pcs',   210000, 'Stok menipis',         NOW(), NOW()),
('Filter Oli',          12, 5, 'pcs',   45000,  NULL,                   NOW(), NOW());

SET FOREIGN_KEY_CHECKS = 1;

-- ======================================================================
-- CATATAN PASSWORD:
-- Password di file ini sengaja PLAIN TEXT (manager1 / leader1 / op1)
-- karena aplikasi punya dukungan login password lama: pada login pertama,
-- password otomatis di-upgrade ke bcrypt oleh aplikasi (lihat
-- CMMSController::passwordMatches). Setelah semua orang login sekali,
-- password di database sudah aman (bcrypt).
-- Opsional: ganti password lewat aplikasi di menu Profil.
-- ======================================================================
