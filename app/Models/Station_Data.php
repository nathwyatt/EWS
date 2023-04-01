<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station_Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'water_level', 'temperature','hummidity','soil_moisture','station_id'
    ];
    public function Station()
    {
     return $this->belongsTo(Station::class);
    }
}
