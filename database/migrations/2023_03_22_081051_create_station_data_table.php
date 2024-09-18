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
        Schema::create('station_data', function (Blueprint $table) {
            $table->id();
            $table->double('water_level');
            $table->double('temperature');
            $table->double('hummidity');
            $table->double('soil_moisture');
            $table->bigInteger('station_id')->unsigned();
            $table->timestamps();
            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_data');
    }
};
