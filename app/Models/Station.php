<?php

namespace App\Models;

  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'details',
        'province_id',
        'district_id',
        'sector_id',
        'cell_id',
        'village_id',
        'user_id'
    ];
    
    public function Community()
    {
        return $this->hasMany(Community::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function cell()
    {
        return $this->belongsTo(Cell::class);
    }

    public function Vilage()
    {
        return $this->belongsTo(Vilage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Province()
    {
        return $this->belongsTo(Province::class);
    }
}
