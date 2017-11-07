@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">

    <div class="col align-self-start">
     
    </div>

    <div class="col align-self-center">


      <div class="card border-success mb-3" style="max-width: 20rem;">
        <div class="card-header bg-transparent border-success">
          Blood Glucose History
        </div>
        <div class="card-body text-success">

              <table>
              <thead>
                <tr>
                  <th width="200">glucose</th>
                </tr>
              </thead>
              <tbody>


              @foreach ($sugars as $sugar)

                <tr>
                  <td>{{$sugar->glucose}}</td>
                </tr>
                
              @endforeach

            </tbody>
            </table>
        </div>
        <div class="card-footer bg-transparent border-success">
          <button class="button"><a href="/menu">Back</a></button>
        </div>

      </div>


    </div>

    <div class="col align-self-end">
     
    </div>

  </div>
</div>
 




@endsection



