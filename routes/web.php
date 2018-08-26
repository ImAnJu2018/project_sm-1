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
    return view('front_end.front_layout');
});


Route::get('/admin/students_table', function () {
    return view('back_end.pages.students_table');
});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'],function ()
{
    Route::get('dashboard', function () {
        return view('back_end.pages.dashboard');
    });
    Route::resource('student','StudentController');
});
