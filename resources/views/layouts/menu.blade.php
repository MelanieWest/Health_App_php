@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col align-self-start">
      </div>

      <div class="container col md-offset-2 align-self-center">


  <div class="card" style="width: 580px;">
  <img class="card-img-top" src="https://rlv.zcache.com/portion_control_melamine_plate-rfa5fb1afeb064f66a6ab9d20281b8ddf_ambb0_8byvr_324.jpg" alt="Card image cap" style="margin:20px; width:520px">
  <div class="card-body">

    <h4 class="card-title"></h4>

    <h3 class="card-text">Where to?</h3>
 
    <div class="row md-offset-2">
                    
            <button class="button" style="margin: 10px; font-size:22px;"><a href="/glucose/create">Glucose</a></button>
            <button class="button" style="margin: 10px; font-size:22px;"><a href="/chart">Graph</a></button>
            <button class="button" style="margin: 10px; font-size:22px;"><a href="/glucose/show">Data</a></button>
            <button class="button" style="margin: 10px; font-size:22px;"><a href="/meds/show">Meds List</a></button>
            <button class="button" style="margin: 10px; font-size:22px;"><a href="/contacts">Contact</a></button>
            
            <div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} 
        </a>

        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

    </div>

    </div>


  </div>
</div>


 




      </div>

      <div class="col align-self-end">
      </div>
 
</div>


@endsection


