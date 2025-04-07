<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station_Data extends Model
{
    use HasFactory;
    protected $table =('station_data');
    protected $fillable = [
        'timestamp',
        'air_temperature',
        'air_humidity',
        'barometric_pressure',
        'light_intensity',
        'wind_direction',
        'wind_speed',
        'rainfall_accumulated',
        'rainfall_hourly',
        'soil_temperature',
        'soil_volumetric_water_content',
        'water_level',
        'station_id',
    ];
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id', 'id');
    }
}
