<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\StudentLogin as Authenticatable;

class StudentLogin extends Authenticatable
{
    protected $table="Student";
    protected $fillable=['email','password'];
    protected $guard = 'students';
    protected $hidden = [
        'password', 'remember_token',
    ];
}
