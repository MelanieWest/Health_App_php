<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\User;
use App\Health;
use Auth;
use DB;

class ChartController extends Controller
{
    public function index()
    {
    // 	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    //     ->get();
  
    //     //dd($users);              
        
    //     $chart = Charts::database($users, 'bar', 'highcharts')
	// 		      ->title("Monthly new Registered Users")
	// 		      ->elementLabel("Total Users")
	// 		      ->dimensions(1000, 500)
	// 		      ->responsive(false)
    // //    	      ->groupByMonth(date('Y'), true);
    //               ->groupBy('id');


        //$id     = DB::table('healths')->where('user_id',$auth_user)->get();
        //$sugars = Health::where(('user_id',$auth_user))->get();
//------------------------------------------------------------------------
        $auth_user = Auth::user()->id;
        
        $sugars = DB::table('healths')->where('user_id',$auth_user)->get();
        
        //dd($sugars);

        $chart=Charts::create('line','highcharts')
            ->title('Blood Sugar')
            ->elementLabel('Morning Glucose')
            ->labels($sugars->pluck('id'))
            ->values($sugars->pluck('glucose'))
            ->responsive(false)
            ->width(0);

         return view('layouts.chart',compact('chart'));
    }
}