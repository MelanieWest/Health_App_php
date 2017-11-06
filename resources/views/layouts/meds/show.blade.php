@extends('layouts.app')

@section('content')



<br>


<div class="container">
<div class="row">

  <div class="col align-self-start">
   
  </div>

  <div class="col align-self-center">


  <table>
  <thead>
    <tr>
      <th width="200">Med name</th>
      <th width="150">remaining doses</th>
    </tr>
  </thead>

       
 
          @foreach ($meds as $med)
           <tr>
            <td>{{$med->med_name}}</td>
            <td>  doses remaining </td>
          </tr>
          @endforeach
 

        </tbody>
      </table>

      <button class="button"><a href="/menu">Back</a></button>

      </div>
      
      <div class="col align-self-end">
      
     </div>
 
   </div>
 </div>
  


@endsection



