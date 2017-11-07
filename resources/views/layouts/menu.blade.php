@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col align-self-start">
      </div>

      <div class="container col md-offset-2 align-self-center">

          <div class="row md-offset-2">
            
            <h3>Where to? </h3>
        
            <button class="button" style="margin: 10px;"><a href="/glucose/create">Glucose</a></button>
            <button class="button" style="margin: 10px;"><a href="/glucose/show">Data</a></button>
            <button class="button" style="margin: 10px;"><a href="/meds/show">Meds</a></button>
            <button class="button" style="margin: 10px;"><a href="/contacts">Contact</a></button>
        
          </div>
    

          <div class="row col-grid" style="margin: 20px;">
             
            <img src="http://www.leeschools.net/_cache/files/8/0/806ec81d-205b-4536-a5af-ea21e1b43d29/8F36B42A0DDEDA184D6E5458FC919653.beano-myplate.png" alt="healthy meal">

          </div>

      </div>

      <div class="col align-self-end">
      </div>
 
</div>


@endsection





