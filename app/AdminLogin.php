<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\AdminLogin as Authenticatable;


class AdminLogin extends Authenticatable
{

	use Notifiable;
    protected $table="register";
    protected $fillable=['email','password'];
    protected $guard = 'admin';
    protected $hidden = [
        'password', 'remember_token',
    ];
}
