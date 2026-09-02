<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->timestamps();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->year('year');
            $table->unsignedSmallInteger('trips_per_day');
            $table->date('last_service_date');
            $table->string('plate')->nullable();
            $table->unsignedSmallInteger('service_count')->default(0);
            $table->unsignedBigInteger('total_cost')->default(0);
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_code');
            $table->string('job_type');
            $table->date('scheduled_at');
            $table->text('note')->nullable();
            $table->string('status')->default('menunggu');
            $table->timestamps();
        });

        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_code');
            $table->string('repair_type');
            $table->unsignedBigInteger('cost');
            $table->text('note')->nullable();
            $table->date('repaired_at');
            $table->timestamps();
        });

        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_code');
            $table->string('operator_name');
            $table->string('status');
            $table->string('building');
            $table->string('machine')->nullable();
            $table->dateTime('started_at');
            $table->dateTime('ended_at')->nullable();
            $table->timestamps();
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_code');
            $table->json('issues');
            $table->string('severity');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
        Schema::dropIfExists('tracks');
        Schema::dropIfExists('repairs');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('users');
    }
};
