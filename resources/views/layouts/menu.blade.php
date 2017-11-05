@extends('layouts.app')

@section('content')

<div class="medium-7 large-6 columns">
    <h1>Select an Action</h1>
 
    <button class="button"><a href="/glucose">Glucose</a></button>
    <button class="button"><a href="/meds">Meds</a></button>
    <button class="button"><a href="/contacts">Contact</a></button>
    </div>

  <div class="show-for-large large-3 columns">
    <img src="http://placehold.it/400x370&text=PSR1257 + 12 C" alt="picture of space">
  </div>


@endsection
