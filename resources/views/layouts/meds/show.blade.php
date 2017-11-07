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
      <th width="200"><h2>Med name</h2></th>
      <th width="150"><h2>remaining</h2></th>
    </tr>
  </thead>

       
 
          @foreach ($meds as $med)
           <tr>
            <td><h2>{{$med->name}}</h2></td>
            <td><h2>{{$med->rem}}</h2> </td>
          </tr>
          @endforeach
 

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



