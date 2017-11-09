@extends('layouts.app')

@section('content')

     
    <div class="card border-success mb-3" style="max-width: 500px;">


        <div class="card-header bg-transparent border-success">
               <h3> List of Medicines 
                <button class="button" style="margin: 10px;"><a href="/menu">Back</a></button></h3>

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
                        <th width="280"><h3>Med name</h3></th>
                        <th width="200"><h3>doses left</h3></th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($meds as $med)
                    <tr >
                        <td>
                        
                        <form method = "POST" action ="/meds/{{$med->id}}/">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                            <h3>{{$med->name}}</h3>
                           <button type="submit" id="{{$med->id}}">Remove</button>
                        </form>        


                        </td>

                        <td>

                        <form method = "POST" action ="/meds/{{$med->id}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                            <h3>{{$med->rem}}</h3>
                            <h3><input type="number" style="width: 70px;" placeholder="refill"  name="refill"></h3>
                            <button type="submit">Add</button>
                        </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>

            <div class="card-footer bg-transparent border-success">

            <form method = "POST" action = "/meds"> 
            {{ csrf_field() }}

            <div class="col align-self-center">

                <div class="small-12 columns col align-self-center">
                    <label>
                        <h3>Add a Medication:<input type="text" placeholder="name"  name="new_med"></h3>
                        <h3>Doses per day:<input type="number" placeholder="daily"  name="new_dose"></h3>
                        <h3>Number of doses available:<input type="number" placeholder="total"  name="new_rem"></h3>
                    </label>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-primary" {font-size: 20px;}>Enter</button>
                    </div>

                </div> 

            </div>

     </form>

    </div>

</div>




    

      

@endsection


