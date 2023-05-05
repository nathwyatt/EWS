<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Station_Data extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table =('station_data');
    protected $fillable = [
    'water_level',
    'temperature',
    'hummidity',
    'soil_moisture',
    'station_id',
    ];
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id', 'id');
    }
    public function routeNotificationForDatabase()
    {
        return $this->station->user_id;
    }
}
