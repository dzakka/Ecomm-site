<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->

    <link href="'https://fonts.googleapis.com/css?family=Hepta+Slab|Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>
<body>
<div id="app">
     <!--- This is top black bar-->
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark"style="height:29px;">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Create an Account</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container-fluid">
    <nav class="navbar sticky-top navbar-expand-lg bg-light navbar-light">     
            <a class="navbar-brand my-auto" href="#">
             <!-- <img class="rounded-circle" src="https://images.pexels.com/photos/462118/pexels-photo-462118.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="30" height="30" alt=""> -->
              <span class="font-weight-bold" style="font-size:38px;">Dannie's Store</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbars">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse navbars" id="navbar2">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home </a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Disabled</a>
                        </li>
                </ul>   
              </div>    
    </nav>

        </div>  
  </div>
  </div>    
</div>     

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
