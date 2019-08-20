<?php

namespace App\Http\Controllers\Admin;

use App\AdminRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class adminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('Admin.dashboard');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    // public function signin(Request $request)
    // {
    //     $this->validate($request,[
    //         'email'=>'required',
    //         'password'=>'required'
    //     ]);

    //     if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
    //     {
    //         return redirect()->route('adminDashboard');
    //     }
    //     else
    //     {
    //         return back()->withInput()->withErrors(['email'=>'Invalid Username or Password']);
    //     }
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'uname'=>'required',
            'email'=>'required',
            'pwd'=>'required'
            ],[
            'uname.required'=>"First name is required",
            'email.required'=>"email is required",
            'pwd.required'=>"Password is required",
            ]);
        $register=new AdminRegister;
        $register->name=$request->uname;
        $register->address=$request->address;
        $register->email=$request->email;
        $register->contact=$request->cnt;
        $register->password=hash::make($request->pwd);
        $register->gender=$request->gender;
        $register->save();
        return redirect()->route('adminRegister');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminRegister  $adminRegister
     * @return \Illuminate\Http\Response
     */
    public function show(AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminRegister  $adminRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminRegister  $adminRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminRegister  $adminRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminRegister $adminRegister)
    {
        //
    }
}
