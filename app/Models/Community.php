<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $fillable = [
        'station_id', 'fname','lname','email','phone'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Station()
    {
     return $this->belongsTo(Station::class);
    }
}
