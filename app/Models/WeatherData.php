<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model
{
    use HasFactory;
      // Define which columns are mass assignable
      protected $fillable = [
        'air_pressure',
        'air_humidity',
        'barometric_pressure',
        'wind_speed',
        'wind_direction',
        'light_intensity',
        'rain_intensity',
        'latitude',
        'longitude',
        'battery_level',
        'date',
        'station_id', 
    ];

    /**
     * Relationship with the Station model (assuming each weather_data entry belongs to a station)
     */
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
