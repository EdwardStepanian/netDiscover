<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/fav.png')}}">

    <title>NetDiscover</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top welcomeNavbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a href="http://localhost:8000" class="navbar-brand">
                <img src="http://localhost:8000/images/logo.png" alt="Logo.png" class="logoImg">
            </a>
        </div>
        <div id="app-navbar-collapse" class="collapse navbar-collapse">
            @if (Route::has('login'))
                @auth
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost:8000/heatmap">HeatMap</a></li>
                        <li><a href="http://localhost:8000/account">Account</a></li>
                        <li><a href="http://localhost:8000/tariffs">Tariffs</a></li>
                        <li><a href="http://localhost:8000/payment">Payment</a></li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://localhost:8000/login">Login</a></li>
                            <li><a href="http://localhost:8000/register">Sign Up</a></li>
                        </ul>
                        @endauth
                    @endif
        </div>
    </div>
</nav>

<div class="content">
    <div class="sliderContainer">
        <!-- Set up your HTML -->
        <div class="owl-carousel">
            <div>
                <div class="owl-text-overlay hidden-xs">
                    <h2 class="owl-title"> CALL CHEAP <br> ENJOY YOUR JOURNEY</h2>
                    <a href="/register" class="startNow">START NOW</a>
                </div>
                <img src="{{asset('images/bg2.jpg')}}" alt="second slide">
            </div>
            <div>
                <div class="owl-text-overlay-sec hidden-xs">
                    <h2 class="owl-title"> PARTICIPATE IN GREAT EVENTS</h2>
                    <a href="/register" class="startNow">START NOW</a>
                </div>
                <img src="{{asset('images/bg5.jpg')}}" alt="first slide"></div>
            <div>
                <div class="owl-text-overlay-third hidden-xs">
                    <h2 class="owl-title"> TRAVEL IN ANY LOCATION <br> USE ONE SIM</h2>
                    <a href="/register" class="startNow">START NOW</a>
                </div>
                <img src="{{asset('images/bg3.jpg')}}" alt="third slide"></div>
        </div>
    </div>

    <div class="sectionContainer">
        <h2 class="text-center">Coverage Map</h2>
    </div>

    <div class="mapCover" id="map-canvas">

    </div>

</div>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
{{--<script src="{{ asset('js/custom.js') }}"></script>--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB72qv_GuZVo7oBUUOGc_APkbRGGA4iHlc&sensor=false"
        async defer></script>
<script src="{{ asset('js/buildHeatmap.js') }}"></script>
<script src="{{ asset('js/gmaps-heatmap.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.3/jquery.autocomplete.min.js"> </script>
<script src="{{ asset('js/heatMap.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 500,
            items: 1,
            singleItem: true,
            autoPlay : 4000
        });
    });
</script>
</body>
</html>
