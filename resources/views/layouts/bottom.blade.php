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
        @yield('footer')
<div class="container-fluid" style="margin-bottom:30px;">

        <div class="parallax">
            
        </div>     
         

</div>
<div class="container">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            <img src="/images/bottom-1.jpg" height="129" width="129">
            </div>    
            <div class="col-lg-2">
                <img src="/images/bottom-2.jpg" height="129" width="129">
            </div>
            <div class="col-lg-2">
                <img src="/images/bottom-3.jpg" height="129" width="129">
            </div>
            <div class="col-lg-2">
                <img src="/images/bottom-4.jpg" height="129" width="129">
            </div>
            <div class="col-lg-2">
                <img src="/images/bottom-5.jpg" height="129" width="129">
            </div>
            <div class="col-lg-2">
                <img src="/images/bottom-6.jpg" height="129" width="129">
            </div>                                  
        </div>
    </div>    
</div>
    <div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col-lg-4">
                <div style="line-height:1.0;">
                    <h3><u>Customer Care</u></h3>
                    <p>Contac Us</p>
                    <p>FAQ's</p>
                    <p>The story</p>
                    <p>Store Location</p>
                    <p>Carrers</p>
                </div>   
            </div>    
            <div class="col-lg-4">
                <div>
                    <h3><u>About Us</u></h3>
                    <p>Hebe is a destination for local style seekers and shoppers from abroad. Located in Masterton's boutique Kuripuni Village, Hebe is lovingly and carefully curated by Owner and Buyer Dani Burkhart. For all women, all sizes, </p>
                </div>   
            </div>    
            <div class="col-lg-4">
                    <div>
                            <h3><u>Newsletter</u></h3>
                            <p>Join our mailing list</p>
                            <div>
                                <form class="form-inline"   >
                                    <div class="mb-2 mr-sm-2">
                                    <input type="email" class="form-control mb-2 mr-sm-2" name="email" placeholder="Your@email.com " style="margin-top:8px;"><button class="btn btn-dark">Subscribe</button>
                                    </div>
                                </form>    
                            </div>
                        </div>
            </div>    
        </div>   
    </div>   
  


</body>
</html>    