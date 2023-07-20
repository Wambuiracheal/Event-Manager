<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userreg extends Model
{
    protected $table = 'userreg';
        protected $fillable = [
            'fname',
            'lname',
            'email',
            'email_verified_at',
            'id_num',
            'phone_num',
            'password',
            'confirm_password',
            'remember_token',
    ];

        protected $hidden = [
            'password',
            'confirm_password',
            'remember_token',
    ];

        protected $cast = [
            'email_verified_at' => 'datetime',
    ];
}
