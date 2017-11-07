@extends('layouts.app')

@section('content')



<br>


<div class="container">
<div class="row top-buffer">

  <div class="col align-self-start">
   
  </div>

  <div class="col col-grid align-self-center">

 
  <div class="card border-success mb-3" style="max-width: 500px;">
  <div class="card-header bg-transparent border-success">
    List of Medicines


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
  <div class="card-body text-success">

  
    <table>
    <thead>
        <tr>
        <th width="200"><h3>Med name</h3></th>
        <th width="150"><h3>remaining</h3></th>
        </tr>
    </thead>


  
          @foreach ($meds as $med)
           <tr>
            <td><h3>{{$med->name}}</h3></td>
            <td><h3>{{$med->rem}}</h3> </td>
          </tr>
          @endforeach
 
          <form method = "POST" action = "/meds"> 
            {{ csrf_field() }}
            <label>
                <h3>Add a Medication:<input type="text" placeholder="name"  name="new_med"></h3>
                <!-- <h3>Doses per day:<input type="number" placeholder="daily"  name="new_dose"></h3>
                <h3>Number of doses available:<input type="number" placeholder="total"  name="new_rem"></h3> -->
            </label>
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-primary" {font-size: 20px;}>Enter</button>
            </div>
            </form>

        </tbody>
      </table>


    
    </div>
        <div class="card-footer bg-transparent border-success">
            <button class="button" style="margin: 10px;"><a href="/menu">Back</a></button>

        </div>
    </div>


      </div>
      
      <div class="col align-self-end">
      
     </div>
 
   </div>
 </div>
  


@endsection


