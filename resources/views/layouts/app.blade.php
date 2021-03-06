<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Health</title>

    <!-- Styles -->
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- {!! Charts::assets() !!} -->
    
    {!! Charts::styles() !!}

</head>
<body>

<div id="app">

 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                  
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                   
                    <a class="navbar-brand" style="float:left;" href="{{ url('/') }}">
                        Health
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse"style="font-size:20px;">

 
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }}</span>
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

                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container">
        <div class="row justify-content-md-center">

            <div class="col col-lg-2">
               
            </div>

                <div class="col-md-auto">
                    @yield('content')
                </div>

            <div class="col col-lg-2">
          
            </div>

        </div>
      </div>
    </div>
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>






