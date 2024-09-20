<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stations', function (Blueprint $table) {
          
            $table->bigInteger('province_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->bigInteger('sector_id')->unsigned();
            $table->bigInteger('cell_id')->unsigned();
            $table->bigInteger('village_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->double('latitude');
            $table->double('longitude');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('cell_id')->references('id')->on('cells')->onDelete('cascade');
            $table->foreign('village_id')->references('id')->on('vilages')->onDelete('cascade');
        
        });
        Schema::table('communities', function (Blueprint $table) {

            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('cell_id');
            $table->unsignedBigInteger('village_id');
            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('cell_id')->references('id')->on('cells')->onDelete('cascade');
            $table->foreign('village_id')->references('id')->on('vilages')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stations', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('district_id');
            $table->dropColumn('sector_id');
            $table->dropColumn('cell_id');
            $table->dropColumn('village_id');
        });

        Schema::table('communities', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('district_id');
            $table->dropColumn('sector_id');
            $table->dropColumn('cell_id');
            $table->dropColumn('village_id');
        });
    }
};
