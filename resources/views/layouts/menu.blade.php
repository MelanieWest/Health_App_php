@extends('layouts.app')

@section('content')

<div class="medium-7 large-6 columns">



    <h3>Select an Action</h3>
 
    <button class="button"><a href="/glucose/create">Glucose</a></button>
    <button class="button"><a href="/glucose/show">Graph</a></button>
    <button class="button"><a href="/meds/show">Meds</a></button>
    <button class="button"><a href="/contacts">Contact</a></button>
    </div>

  <div class="show-for-large large-3 columns">
    <img src="http://www.leeschools.net/_cache/files/8/0/806ec81d-205b-4536-a5af-ea21e1b43d29/8F36B42A0DDEDA184D6E5458FC919653.beano-myplate.png" alt="healthy meal">
  </div>


@endsection
