@extends('layouts.app')

@section('content')



<br>



<div class="row small-up-1 medium-up-2 large-up-3">

      <div class="row column">


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



      </div>


  
</div>



@endsection



