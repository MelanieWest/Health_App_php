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


Route::get('/', 'HealthController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu','HealthController@menu');
 

Route::get('/glucose',function() {
    $sugars = DB::table('health')->get();
    //return $meds;
    return view('layouts.glucose',compact('sugars'));
    });


Route::get('/meds',function() {
    $meds = DB::table('med_data')->get();
    //return $meds;
    return view('layouts.meds',compact('meds'));
    }

);
Route::get('/contacts','HealthController@contacts');

Auth::routes();

