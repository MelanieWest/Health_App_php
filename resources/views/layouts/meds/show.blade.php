@extends('layouts.app')

@section('content')

     
    <div class="card border-success mb-3" style="max-width: 500px;">


        <div class="card-header bg-transparent border-success">
               <h3> List of Medicines 
                <button class="button" style="margin: 10px;"><a href="/home">Back</a></button></h3>

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
                        <th style="width:200px;"><h3>Med name</h3></th>
                        <th style="padding-left: 40px;"><h3>doses left</h3></th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($meds as $med)
                    <tr style="width: 540px;">
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

                            <div class="container">
                                {{ csrf_field() }}
                                {{ method_field('PATCH')}}

                                <div class="row">
                                    <div class="col-sm-1">
                                        <h3 style="padding-left: 20px;">{{$med->rem}}</h3>
                                    </div>
                                    <div class="col-sm-1">
                                        <h3><input type="number" style="width: 68px;" placeholder="refill"  name="refill"></h3>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="submit" style="margin-top:25px">Add doses</button>
                                    </div>
                                </div>
                            </div>

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


