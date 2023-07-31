<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'event_name',
        'description',
        'start_date',
        'end_date',
        'location',
        'amount',
        'remember_token',
    ];

    protected $casts = [
        'amount' => 'float',
    ];
}
