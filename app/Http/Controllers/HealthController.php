<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index(){
        return view('layouts.index');
    }



    public function glucose(){
        return view('layouts/glucose/create');
    }

    public function create(){
        return view('layouts/glucose/create');
    }

    public function store(){
   
        $glucose = new Health;

        $glucose->glucose = request('am_glucose');
        $glucose->user_id =Auth::user()->id;
        $glucose->save();
        Post::create([
            'glucose'=>request('am_glucose'),
            'user_id'=> Auth::user()->id]);
        return redirect('/menu');
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
