<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meds;

use Auth;
use DB;

class MedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_user = Auth::user()->id;
        
        $meds = DB::table('meds')->where('user_id',$auth_user)->get();
        //return $meds;
        return view('layouts.meds.show',compact('meds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $auth_user = Auth::user()->id;
           
           $meds = new Meds;
        
           DB::table('meds')->insert([
               'user_id' => $auth_user,
               'name' => $request->get('new_med'),
               'dose' => $request->get('new_dose'),
               'rem' => $request->get('new_rem'),
               ]);
           return view('layouts.menu');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
            $med = Meds::find($id);

            $med->rem = 90;
            
            $med->save();
    
            return view('layouts.menu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request, $id)
    {
        $med = Meds::find($id);

        $med->delete();

        return view('layouts.menu');
        
    }

 
 
}
