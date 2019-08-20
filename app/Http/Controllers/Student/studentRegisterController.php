<?php

namespace App\Http\Controllers\Student;

use App\StudentRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class studentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.student_register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        $register=new StudentRegister;
        $register->name=$request->uname;
        $register->address=$request->address;
        $register->email=$request->email;
        $register->contact=$request->cnt;
        $register->faculty=$request->fclt;
        $register->password=hash::make($request->pwd);
        $register->gender=$request->gender;
        $register->save();
        return redirect()->route('studentRegister');
    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentRegister  $studentRegister
     * @return \Illuminate\Http\Response
     */
    public function show(StudentRegister $studentRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentRegister  $studentRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentRegister $studentRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentRegister  $studentRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentRegister $studentRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentRegister  $studentRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentRegister $studentRegister)
    {
        //
    }
}
