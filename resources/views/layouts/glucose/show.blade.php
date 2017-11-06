@extends('layouts.app')


@section('content')

<div class="row small-up-1 medium-up-2 large-up-3">
  <div class="row column">

<div class ="col small-4">
</div>

<div class="col small-4">

<table class="hover">
  <thead>
    <tr>
      <h4><th width="200">glucose</th></h4>
    </tr>
  </thead>
  <tbody>


      @foreach ($sugars as $sugar)
      
    <tr>
      <h5><td>{{$sugar->glucose}}</td></h5>
    </tr>
    
        @endforeach

    </tbody>
</table>
</div>

<div class="col small-4">
</div>

  </div>
</div>

@endsection



 