<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeLoginController extends Controller
{
    public function index(){
    	return view('login_layout');
    }
}
