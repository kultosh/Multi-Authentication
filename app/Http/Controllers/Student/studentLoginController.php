<?php

namespace App\Http\Controllers\Student;

use App\StudentLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Route;
use Auth;

class studentLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function __construct()
     {
     $this->middleware('guest:admin', ['except' => ['logout']]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::guard('students')->attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {
            return redirect()->route('studentDashboard');
        }
        else
        {
            return back();
        }
    }

    public function logout(){
        Auth::guard('students')->logout();
        return redirect()->route('login');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentLogin  $studentLogin
     * @return \Illuminate\Http\Response
     */
    public function show(StudentLogin $studentLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentLogin  $studentLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentLogin $studentLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentLogin  $studentLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentLogin $studentLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentLogin  $studentLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentLogin $studentLogin)
    {
        //
    }
}
