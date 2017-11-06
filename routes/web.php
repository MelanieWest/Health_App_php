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
 
Route::get('/glucose/create','HealthController@newhealth');

Route::resource('health','HealthController');
Route::post('/glucose','HealthController@store');

// Route::post('/glucose',function(Request $request){

//     $auth_user = Auth::user()->id;
//     dd($am_glucose);

//    // DB::insert()

//             DB::table('health')->save([
//                 'user_id' => $auth_user,
//                 'glucose' => $request->get('am_glucose'),
//             ]);

//     return view('layouts.menu');
// });


Route::get('/glucose/show',function() {
    $auth_user = Auth::user()->id;

    $sugars = DB::table('health')->where('user_id',$auth_user)->get();

    return view('layouts.glucose.show',compact('sugars'));
    });


Route::post('/meds/create',function() {
    $meds = DB::table('med_data')->get();
    //return $meds;
    return view('layouts.meds.create',compact('meds'));
    }

);

Route::get('/meds/show',function() {
    $meds = DB::table('med_data')->get();
    //return $meds;
    return view('layouts.meds.show',compact('meds'));
    }

);

Route::get('/contacts','HealthController@contacts');

Auth::routes();

