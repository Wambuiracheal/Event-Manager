<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'event';
    protected $fillable = [
        'event_name',
        'time',
        'location',
        'amount',
        'payment',
        'remember_token',
    ];

    protected $casts = [
        'amount' => 'float',
    ];
}
