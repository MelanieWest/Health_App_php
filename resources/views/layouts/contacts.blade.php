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
        <li class="list-group-item text-center"><h3>Friend:   (407)-340-6899</h3></li>
        <li class="list-group-item text-center"><h3>Doctor:   (407)-221-9696</h3></li>
        <li class="list-group-item text-center"><h3>Pharmacy: (321)-851-3214</h3></li>
      </ul>
    </div>

  <div class="card-block">

    <button class="button" style="margin: 20px; float:right; font-size: 20px;"><a href="/menu">Back</a></button>

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




@endsection






<!-- <div class="container">
<div class="row">

  <div class="col align-self-center">


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

  <table>
  <thead>
    <tr>
      <th width = "220px"><h3>Contact</h3></th>
      <th width = "220px"><h3>Phone</h3></th>
    </tr>
        </thead>
  
           <tr>
            <td><h3> Friend</h3></td>
            <td><h3> (407)-340-6988 </h3></td>
          </tr>

          <tr>
            <td><h3> Doctor </h3></td>
            <td><h3> (407)-221-9696 </h3></td>
          </tr>

          <tr>
            <td><h3> Pharmacy </h3></td>
            <td><h3> (321)-851-3214 </h3></td>
          </tr>
 
        </tbody>
      </table>


      <button class="button" style="margin: 20px;"><a href="/menu">Back</a></button>

      </div>
    </div>
 </div>
   -->








