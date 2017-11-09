
@extends('layouts.app')


@section('content')

<div class="card">


    <div class="view overlay hm-white-slight">

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Blood Sugar Trends</h3></div>

                <div class="panel-body">
                    <!-- {!! $chart->render() !!} -->
                    {!! $chart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}



    </div>

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title">Morning Readings</h4>
        <!--Text-->
        <p class="card-text"></p>
        <button style="float: right;"><a href="/menu" >Back</a></button>


        <div style="font-size:18px;">
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




@endsection