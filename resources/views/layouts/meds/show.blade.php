@extends('layouts.app')

@section('content')



<br>



<div class="row small-up-1 medium-up-2 large-up-3">

      <div class="row column">

       
        <ul>
          @foreach ($meds as $med)
        
            <li><h1>{{$med->med_name}}</h1></li>

          @endforeach
        </ul>

      </div>


    <div class="column">
      <div class="callout">
        <p>Pegasi B</p>
        <p><img src="http://placehold.it/400x370&text=Pegasi B" alt="image of a planet called Pegasi B"></p>
        <p class="lead">Copernican Revolution caused an uproar</p>
        <p class="subheader">Find Earth-like planets life outside the Solar System</p>
      </div>
    </div>
  
</div>



@endsection