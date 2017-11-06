<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Health;

use Auth;
use DB;

class HealthController extends Controller

{



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
        
        $glucose = new Health;
     
        DB::table('health')->insert([
            'user_id' => $auth_user,
            'glucose' => $request->get('am_glucose'),
        ]);
        return view('layouts.glucose.show');
     }  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


// page routing from here on down
    
    public function index(){
        return view('layouts.index');
    }


    public function glucose(){
        return view('layouts/glucose/create');
    }

    public function newhealth(){
        return view('layouts/glucose/create');
    }

 
    public function meds(){
        return view('layouts/meds/show');
    }

    public function menu(){ 
        return view('layouts.menu');
    }

    public function contacts(){
        return view('layouts.contacts');
    }
}
