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

Route::get('/', function () {
    return view('student');
});
Route::get("student/create",'StudentController@index');
Route::post("student",'StudentController@store');
Route::get("student",'StudentController@show');
Route::get("student/edit/{id}",'StudentController@edit');
Route::post("student/update/{id}",'StudentController@update');
Route::delete("student/delete/{id}",'StudentController@delete');
