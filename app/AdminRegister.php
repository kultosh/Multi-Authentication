<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRegister extends Model
{
    protected $table="register";
    protected $fillable=['name','address','email','password','gender'];
    protected $guard = 'admin';
    protected $hidden = [
        'password', 'remember_token',
    ];
}
