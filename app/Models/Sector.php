<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    public function district()
{
    return $this->belongsTo(District::class);
}

public function cells()
{
    return $this->hasMany(Cell::class);
}
public function Station()
{
    return $this->hasMany(Station::class);
}
public function Community()
{
    return $this->hasMany(Community::class);
}
}
