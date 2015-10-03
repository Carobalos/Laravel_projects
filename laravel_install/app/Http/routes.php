<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies',function() {
    return \App\Movie::all();
});
Route::get('/students',function(){
	//$students= \App\Student::where('first_name','=','Nancy')->get();
    //return $students;
    $students=\App\Student::all();
    return view('students',['students'=>$students]);
    //return \App\Student::all();
});




