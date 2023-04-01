<?php

namespace App\Models;

  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'details','district','user_id'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Station_Data()
    {
        return $this->hasMany(User::class);
    }
    public function Community()
    {
        return $this->hasMany(User::class);
    }
}
