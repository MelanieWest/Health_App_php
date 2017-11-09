@extends('.layouts.app')

@section('content')

<div class="medium-5 large-3 columns">
    <div class="callout secondary">
    <div class="card" style="width: 500px;">
  <img class="card-img-top" src="http://www.fiftyisthenewfifty.com/wp-content/uploads/2015/12/Health500.jpg" alt="Card image cap">

  <div class="card-body">


        <div class="col align-self-center">

          <div class="small-12 columns col align-self-center">

          <form method="POST" action="/glucose">

                {{ csrf_field() }}
                <label><h2>Morning Reading:</h2></label>
                <div class = "form-group">
                    <input type="number" class="form-control input-lg" placeholder=""  name="am_glucose">
                </div>
                <div class="row justify-content-md-center">
                    <button type="submit" class="btn btn-primary" style="font-size: 24px;">Enter</button>
                </div>

                <button style="float: right; margin:10px; font-size:22px;"><a href="/home" >Back</a></button>

            </form>

          </div> 
 
        </div>





      <div style="font-size:20px;">
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
  </div>

@endsection


