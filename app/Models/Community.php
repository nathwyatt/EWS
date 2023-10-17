<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

protected $table = 'communities';
    protected $fillable = [
        'station_id', 
        'fname',
        'lname',
        'gender',
        'birth_date',
        'email',
        'profession',
        'phone',
        'province_id',
        'district_id',
        'sector_id',
        'cell_id',
        'village_id'
    ];
   
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id', 'id');
    }
    public function Province()
    {
        return $this->belongsTo(Province::class);
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

    public function vilage()
    {
        return $this->belongsTo(Vilage::class);
    }

  
}
