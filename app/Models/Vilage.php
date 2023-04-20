<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Vilage
 */
class Vilage extends Model
{
    use HasFactory;
    public function cell()
{
    return $this->belongsTo(Cell::class);
}
/**
 * Summary of Station
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function Station()
{
    return $this->hasOne(Station::class);
}
public function Community()
{
    return $this->hasMany(Community::class);
}
}
