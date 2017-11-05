<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function glucose(){
        return view('layouts.glucose');
    }

    public function meds(){
        return view('layouts.meds');
    }
    public function menu(){
        return view('layouts.menu');
    }
    public function contacts(){
        return view('layouts.contacts');
    }
}
