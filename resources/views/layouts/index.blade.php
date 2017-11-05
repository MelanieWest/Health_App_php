@extends('layouts.app')


@section('content')
  <h1> start page </h1>
  <button><a href="{{ route('login') }}">Login</a></button>
  <button><a href="{{ route('register') }}">Register</a></button>



@endsection


