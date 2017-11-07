@extends('layouts.app')

@section('content')

<!-- <div class="medium-5 large-3 columns">
  <div class="callout secondary">
    <div class="card" style="width: 350px;">

        <img class="card-img-top" src="http://www.fiftyisthenewfifty.com/wp-content/uploads/2015/12/Health500.jpg" alt="Card image cap">

        <div class="card-body"> -->

         <form method = "POST" action = "/meds"> 
            {{ csrf_field() }}

            <div class="col align-self-center">

                <div class="small-12 columns col align-self-center">
                    <label>
                        <h3>Add a Medication:<input type="text" placeholder="name"  name="new_med"></h3>
                        <!-- <h3>Doses per day:<input type="number" placeholder="daily"  name="new_dose"></h3>
                        <h3>Number of doses available:<input type="number" placeholder="total"  name="new_rem"></h3> -->
                    </label>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-primary" {font-size: 20px;}>Enter</button>
                    </div>

                </div> 

            </div>

          </form>


<!-- 
            <div>
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
    </div>
  </div> -->


@endsection


