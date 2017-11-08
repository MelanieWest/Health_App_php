@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col align-self-start">
      </div>

      <div class="container col md-offset-2 align-self-center">


  <div class="card" style="width: 520px;">
  <img class="card-img-top" src="http://www.leeschools.net/_cache/files/8/0/806ec81d-205b-4536-a5af-ea21e1b43d29/8F36B42A0DDEDA184D6E5458FC919653.beano-myplate.png" alt="Card image cap">
  <div class="card-body">

    <h4 class="card-title"></h4>

    <h3 class="card-text">Where to?</h3>
 
    <div class="row md-offset-2">
                    
            <button class="button" style="margin: 10px; font-size:16px;"><a href="/glucose/create">Glucose</a></button>
            <button class="button" style="margin: 10px; font-size:16px;"><a href="/chart">Graph</a></button>
            <button class="button" style="margin: 10px; font-size:16px;"><a href="/glucose/show">Data</a></button>
            <button class="button" style="margin: 10px; font-size:16px;"><a href="/meds/show">Meds List</a></button>
            <button class="button" style="margin: 10px; font-size:16px;"><a href="/contacts">Contact</a></button>
            
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


