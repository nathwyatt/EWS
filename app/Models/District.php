<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    public function sectors()
{
    return $this->hasMany(Sector::class);
}
public function Station()
{
    return $this->hasMany(Station::class);
}
public function Community()
{
    return $this->hasMany(Community::class);
}
public function Province()
{
    return $this->belongsTo(Province::class);
}
}
