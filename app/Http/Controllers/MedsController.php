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
        date_default_timezone_set('EST');
        $auth_user = Auth::user()->id;
        $today = date("Y-m-d H:i:s");

        $meds = DB::table('meds')->where('user_id',$auth_user)->get();

         foreach($meds as $med){

                $now = time(); // or your date as well
                $lastUpdate = strtotime($med->updated_at);
                $datediff = $now - $lastUpdate;
                $days = floor($datediff /(60 * 60 * 24));

                //this is working!! how to send data down...
                $doses_remaining = ($med->rem)-$days*($med->dose);
                if($doses_remaining<0){
                    $doses_remaining = 0;
                }
                $med->rem = $doses_remaining;

//              dd ( $now,$lastUpdate, floor($datediff / (60 * 60 * 24)),$med);
                
        }
        
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
           return view('/home');
    
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
            $refill = $request->get('refill');
            $rem    = $med->rem;

            $rem = $rem + $refill;
            $med->rem = $rem;
            
            $med->save();
    
            return view('/home');

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

        return view('/home');
        
    }

    public function datetimeDiff($dt1, $dt2)
    {
        $today = date("Y-m-d H:i:s");
        $t1 = strtotime($dt1);
        $t2 = strtotime($dt2);
    
        $dtd = new stdClass();
        $dtd->interval = $t2 - $t1;
        $dtd->total_sec = abs($t2-$t1);
        $dtd->total_min = floor($dtd->total_sec/60);
        $dtd->total_hour = floor($dtd->total_min/60);
        $dtd->total_day = floor($dtd->total_hour/24);
    
        $dtd->day = $dtd->total_day;
        $dtd->hour = $dtd->total_hour -($dtd->total_day*24);
        $dtd->min = $dtd->total_min -($dtd->total_hour*60);
        $dtd->sec = $dtd->total_sec -($dtd->total_min*60);
        return $dtd;
    }


 
}
