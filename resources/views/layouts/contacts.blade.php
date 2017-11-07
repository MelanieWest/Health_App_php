@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

  <div class="col align-self-start">
   
  </div>

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
      
      <div class="col align-self-end">
      
     </div>
 
   </div>
 </div>
  
@endsection
