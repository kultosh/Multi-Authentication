<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class studentController extends Controller
{
     public function __construct()
    {

        $this->middleware('auth:students');

    }

      public function index()
    {
        return view('Student.dashboard');
    }
}
