@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">

    <div class="col align-self-start">
     
    </div>

    <div class="col align-self-center">


    <table>
        <thead>
          <tr>
            <th width="200">glucose</th>
          </tr>
        </thead>
        <tbody>


      @foreach ($sugars as $sugar)
      
        <tr>
          <td>{{$sugar->glucose}}</td>
        </tr>
        
        @endforeach

      </tbody>
    </table>
    <button class="button"><a href="/menu">Back</a></button>

    </div>

    <div class="col align-self-end">
     
    </div>

  </div>
</div>
 




@endsection






