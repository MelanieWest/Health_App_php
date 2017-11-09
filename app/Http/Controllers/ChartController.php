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