<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['uses'=>'HomeController@index','as'=>'home']);
Route::get('/admin_login',['uses'=>'LoginController@admin_login','as'=>'admin_login']);
Route::post('/login_admin',['uses'=>'LoginController@login_admin','as'=>'login_admin']);
Route::get('/register/{token}/continue',['uses'=>'HomeController@continueRegistration','as'=>'continue_registration']);
Route::post('/send-student-confirmation',['uses'=>'HomeController@sendStudentConfirmation','as'=>'send_student_confirmation']);
/* Save Students Form */
Route::post('/student/save-personal-form',['uses'=>'HomeController@saveStudentPersonalData','as'=>'save_student_personal_data']);
/* eof student form */


/**
 * ====================================
 * ADMIN ROUTES
 * ====================================
 */
Route::group(['prefix' => 'admin','middleware' => 'admin','namespace'=>'Admin'], function (){
  Route::get('/dashboard',['uses'=>'AdminHomeController@index','as'=>'admin.index']);
});


/** =================================== */