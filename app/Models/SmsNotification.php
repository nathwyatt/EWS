<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SmsNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number', 'message', 'status', 'from', 'channel'
    ];

    public $incrementing = false; // Important: this makes sure Eloquent doesn't expect auto-incrementing integer keys
    protected $keyType = 'string'; // Indicates that the primary key is a string

    protected static function boot()
    {
        parent::boot();

        // Automatically generate a UUID for the id attribute
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
