@extends('layouts.app')


@section('content')

  <div class="card border-success mb-3" style="max-width: 920px;">
  <div class="card-header bg-transparent border-success">
    <h4> Welcome to your health management app!  Please login.</h4>
  </div>
  

  <div class="card-body text-success">
  
  <img src="https://i.pinimg.com/originals/68/fa/19/68fa199b5c60522571ede9f7452efc17.jpg" alt="happy people" height="600px">

  </div>

  <div class="card-footer bg-transparent border-success">
    <button><a href="{{ route('login') }}">Login</a></button>
    <button><a href="{{ route('register') }}">Register</a></button>
  </div>
</div>



@endsection


