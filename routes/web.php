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

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Home controller
Route::get('/home', 'HomeController@index')->name('home');


//
Route::resource('employees', 'EmployeeController');
Route::resource('positions', 'PositionController');
Route::resource('students','studentController');
Route::resource('teachers', 'teacherController');