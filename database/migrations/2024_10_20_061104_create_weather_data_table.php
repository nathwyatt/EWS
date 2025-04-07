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
        Schema::create('weather_data', function (Blueprint $table) {
            $table->id(); 
            $table->float('air_pressure'); 
            $table->float('air_humidity'); 
            $table->float('barometric_pressure'); 
            $table->float('wind_speed'); 
            $table->string('wind_direction'); 
            $table->float('light_intensity'); 
            $table->float('rain_intensity'); 
            $table->decimal('latitude', 10, 7); 
            $table->decimal('longitude', 10, 7); 
            $table->float('battery_level');
            $table->date('date');
            $table->unsignedBigInteger('station_id'); 
            $table->timestamps(); 

            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_data');
    }
};
