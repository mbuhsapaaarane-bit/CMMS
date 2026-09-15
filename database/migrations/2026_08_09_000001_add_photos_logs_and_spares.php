<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('notes');
        });

        Schema::table('repairs', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('note');
        });

        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('username');
            $table->string('action');
            $table->string('details')->nullable();
            $table->timestamps();
        });

        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('qty')->default(0);
            $table->integer('min_qty')->default(5);
            $table->string('unit')->default('pcs');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spare_parts');
        Schema::dropIfExists('activity_logs');
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
};
