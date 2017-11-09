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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/menu','HomeController@menu');

Route::get('/contacts','ContactController@index');

Route::get('/glucose/create','HealthController@newhealth');
Route::get('/meds/create','MedsController@index');
Route::get('/chart', 'ChartController@index');

Route::get('/glucose/show','HealthController@index');
Route::post('/glucose','HealthController@store');
Route::resource('health','HealthController');


Route::get('/meds/show','MedsController@index');
Route::patch('/meds/{id}','MedsController@update');
Route::delete('/meds/{id}','MedsController@destroy');
Route::post('/meds','MedsController@store');
Route::resource('meds','MedsController');


// Route::delete('/meds/{med}',function(){
//     dd($med);
//     $med=find(1);
//     $med->delete();
//     return view('layouts.menu');
// });


// deleteScript: '/post/method',
// deleteMethod: 'POST',
// fileDeleteOptions: {
//        headers: {
//               'X-CSRF-TOKEN':  "{!! Session::getToken() !!}"
//        }
// },   This code is supposed to remove the token.  Where does it go?


Auth::routes();

