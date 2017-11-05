@extends('layouts.app')


@section('content')
  <h1> start page </h1>
  <button><a href="{{ route('login') }}">Login</a></button>
  <button><a href="{{ route('register') }}">Register</a></button>
  <img src="https://i.pinimg.com/originals/68/fa/19/68fa199b5c60522571ede9f7452efc17.jpg" alt="happy people" height="600px">


@endsection


