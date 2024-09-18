<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
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
    public function District()
    {
        return $this->hasMany(District::class);
    }
}
