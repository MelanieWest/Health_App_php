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
Route::get('/contacts','HealthController@contacts');
Route::get('/glucose/create','HealthController@newhealth');
Route::get('/meds/create','MedsController@index');
Route::get('/chart', 'ChartController@index');

Route::post('/glucose','HealthController@store');
Route::resource('health','HealthController');

Route::get('/meds/show',function() {
    $auth_user = Auth::user()->id;
    
    $meds = DB::table('meds')->where('user_id',$auth_user)->get();
    //return $meds;
    return view('layouts.meds.show',compact('meds'));
    }

);

Route::get('/meds/id','MedsController@update');
Route::delete('meds/id','MedsController@destroy');
Route::post('/meds','MedsController@store');
Route::resource('meds','MedsController');


Route::get('/glucose/show',function() {
    $auth_user = Auth::user()->id;

    $sugars = DB::table('healths')->where('user_id',$auth_user)->get();

    return view('layouts.glucose.show',compact('sugars'));
    });





Auth::routes();

