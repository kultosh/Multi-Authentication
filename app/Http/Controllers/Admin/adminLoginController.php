<?php

namespace App\Http\Controllers\Admin;

use App\AdminLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class adminLoginController extends Controller
{
   

     public function __construct()
     {
     $this->middleware('guest:admin', ['except' => ['logout']]);
     }

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {
            return redirect()->route('adminDashboard');
        }
        else
        {
            return back()->withInput()->withErrors(['email'=>'Invalid Username or Password']);
        }
    }


      public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
