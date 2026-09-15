<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedDemoData extends Command
{
    protected $signature = 'cmms:seed-demo';
    protected $description = 'Seed demo CMMS data';

    public function handle()
    {
        DB::table('users')->insert([
            ['name' => 'Ahmad Supriadi', 'username' => 'ahmad', 'password' => 'manager1', 'role' => 'manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Budi Santoso', 'username' => 'budi', 'password' => 'leader1', 'role' => 'leader', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cahyo Wibowo', 'username' => 'cahyo', 'password' => 'op1', 'role' => 'operator', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('vehicles')->insert([
            ['code' => 'SMJ-001', 'name' => 'Piaggio Ape City', 'year' => 2019, 'trips_per_day' => 8, 'last_service_date' => '2025-04-15', 'plate' => 'B 9871 UVW', 'service_count' => 7, 'total_cost' => 2450000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-002', 'name' => 'Piaggio Ape DX', 'year' => 2020, 'trips_per_day' => 6, 'last_service_date' => '2025-05-20', 'plate' => 'B 6543 XYZ', 'service_count' => 4, 'total_cost' => 1200000, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'SMJ-003', 'name' => 'TVS King Deluxe', 'year' => 2021, 'trips_per_day' => 10, 'last_service_date' => '2025-03-10', 'plate' => 'B 3210 ABC', 'service_count' => 12, 'total_cost' => 5800000, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('locations')->insert([
            ['name' => 'Gudang', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung A', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung B', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gedung C', 'type' => 'gedung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin A', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin B', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mesin C', 'type' => 'mesin', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('schedules')->insert([
            ['vehicle_code' => 'SMJ-003', 'job_type' => 'Servis Berat', 'scheduled_at' => '2025-07-05', 'note' => 'Overhaul mesin', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-007', 'job_type' => 'Penggantian Komponen', 'scheduled_at' => '2025-07-01', 'note' => 'Ganti CVT belt', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-005', 'job_type' => 'Servis Ringan', 'scheduled_at' => '2025-07-08', 'note' => 'Ganti oli', 'status' => 'menunggu', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('repairs')->insert([
            ['vehicle_code' => 'SMJ-001', 'repair_type' => 'Ganti Oli', 'cost' => 150000, 'note' => 'Oli dan filter', 'repaired_at' => '2025-04-15', 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-003', 'repair_type' => 'Overhaul Mesin', 'cost' => 1500000, 'note' => 'Ring piston', 'repaired_at' => '2025-03-10', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tracks')->insert([
            ['vehicle_code' => 'SMJ-001', 'operator_name' => 'Cahyo Wibowo', 'status' => 'digunakan', 'building' => 'Gedung A', 'machine' => 'Mesin B', 'started_at' => '2025-07-01 08:30:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_code' => 'SMJ-004', 'operator_name' => 'Dedi Kurniawan', 'status' => 'digunakan', 'building' => 'Gedung B', 'machine' => 'Mesin A', 'started_at' => '2025-07-01 09:00:00', 'ended_at' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);

        $this->info('Demo data seeded.');
    }
}
