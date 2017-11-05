@extends('layouts.app')

@section('content')


<ul>
      @foreach ($sugars as $sugar)
    
        <li><h1>{{$sugar->glucose}}</h1></li>

      @endforeach
</ul>

<div class="medium-5 large-3 columns">
    <div class="callout secondary">



      <form>
        <div class="row">

          <div class="small-12 columns">
            <label>Enter Your glucose
              <input type="text" placeholder="morning reading">
            </label>
          </div>

          <div class="small-12 columns">
            <label>date
              <input type="number" placeholder="Moons required">
            </label>
            <button type="submit" class="button">today</button>
          </div>
          
        </div>
      </form>
    </div>
  </div>


@endsection