<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceData extends Model
{
    use HasFactory;
    protected $table = 'device_statuses';

    protected $fillable = [
        'timestamp',
        'signal_strength',
        'pressure',
        'battery_voltage',
        'temperature',
        'illuminance',
        'humidity',
        'device_Id',
        'status',
    ];
}
