<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Studentusers extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password','mobile','gender',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
     protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
