<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
// protected $table = [
//     'community',
// ];
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
        'district_id',
        'sector_id',
        'cell_id',
        'village_id'
    ];
   
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id', 'id');
    }
    public function districts()
    {
        return $this->belongsTo(Districts::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function cell()
    {
        return $this->belongsTo(Cell::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

  
}
