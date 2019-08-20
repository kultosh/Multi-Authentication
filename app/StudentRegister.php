<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $table="Student";
    protected $fillable=['name','address','email','faculty','password','gender'];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
