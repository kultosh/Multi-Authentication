<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/','homeLoginController@index')->name('login');//->name('adminout');

Route::get('/superadmins','Admin\superAdminController@index');
Route::post('/superadmin','Admin\superAdminController@store')->name('superAdmin_login');

Route::middleware(['auth'])->group(function(){

Route::get('/super_Admin_Dashboard','Admin\superAdminController@superDashboard')->name('superAdminDashboard');

Route::get('/admin_Register','Admin\superAdminController@show')->name('adminRegister');
Route::post('/admin_Register','Admin\adminRegisterController@store')->name('adminRegisterPost');




});

//Admin

Route::prefix('admin')->group(function(){

Route::post('/adminLogin','Admin\adminLoginController@signin')->name('adminSignIn');
Route::get('/admin_dashboard','Admin\adminController@index')->name('adminDashboard');

Route::get('/student_Register','Student\studentRegisterController@index')->name('studentRegister');
Route::post('/student_Register','Student\studentRegisterController@store')->name('studentRegisterPost');
});


//Student
Route::prefix('student')->group(function(){
	Route::post('/studentLogin','Student\studentLoginController@signin')->name('studentSignIn');
	Route::get('/student_dashboard','Student\studentController@index')->name('studentDashboard');
});

Route::get('/logout','Admin\SuperAdminController@logout')->name('superAdmin_logout');

Route::get('/logouts','Admin\adminLoginController@logout')->name('Admin_logout');

Route::get('/studentlogouts','Student\studentLoginController@logout')->name('Student_logout');