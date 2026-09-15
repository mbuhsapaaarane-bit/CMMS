<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->unsignedBigInteger('price')->default(0)->after('unit');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('cost')->nullable()->after('status');
        });

        Schema::create('part_usages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');
            $table->string('vehicle_code');
            $table->unsignedInteger('qty');
            $table->unsignedBigInteger('cost');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn('cost');
        });

        Schema::dropIfExists('part_usages');
    }
};
=======
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->unsignedBigInteger('price')->default(0)->after('unit');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('cost')->nullable()->after('status');
        });

        Schema::create('part_usages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');
            $table->string('vehicle_code');
            $table->unsignedInteger('qty');
            $table->unsignedBigInteger('cost');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn('cost');
        });

        Schema::dropIfExists('part_usages');
    }
};
>>>>>>> bc60b796583544d0723aed639250b1377c2fca05
