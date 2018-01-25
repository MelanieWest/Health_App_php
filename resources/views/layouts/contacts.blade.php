@extends('layouts.app')

@section('content')



<div class="card" style="width: 400px;">

 <div>
  <img class="card-img-top rounded mx-auto d-block" src="https://p.apk4fun.com/1a/5b/e9/naveen.oldphonedialer-logo.jpg" style="width:250px; margin:10px;" alt="Card image cap">
 </div>

  <div class="card-block">

    <div>
      <h3 class="card-title text-center">Contacts</h3>
    </div>

  </div>

  <div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center"><h3>{{$contact->friend}}</h3></li>
        <li class="list-group-item text-center"><h3>{{$contact->doc}}</h3></li>
        <li class="list-group-item text-center"><h3>{{$contact->pharm}}</h3></li>
      </ul>
  </div>

  <div class="card-block">

    <button class="button" style="margin: 20px; float:right; font-size: 20px;"><a href="/home">Back</a></button>

    <div style="font-size:18px; padding:20px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
              {{ Auth::user()->name }} 
          </a>

          <ul class="dropdown-menu">
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>

    </div>

  </div>
</div>




@endsection


