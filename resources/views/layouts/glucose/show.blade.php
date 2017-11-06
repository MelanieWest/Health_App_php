@extends('layouts.app')


@section('content')
<ul>
      @foreach ($sugars as $sugar)
    
        <li><h1>{{$sugar->glucose}}</h1></li>

      @endforeach
</ul>
@endsection