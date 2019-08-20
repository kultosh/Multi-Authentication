<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class superAdminController extends Controller
{

	public function index(){
    	return view('superAdmin.superAdminLogin');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {
            return redirect()->route('superAdminDashboard');
        }
        else
        {
            return back()->withInput()->withErrors(['email'=>'Invalid Username or Password']);
        }
    }

     public function superDashboard(){
    	return view('superAdmin.superadmin_dashboard');
    }

    public function show(){
        return view('superAdmin.admin_register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
