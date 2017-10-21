<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NetDiscover</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo.png" class="logoImg">
                </a>
            </div>

            <div id="app-navbar-collapse" class="collapse navbar-collapse">
                @if (Route::has('login'))
                    @auth
                        <ul class="nav navbar-nav">
                            <li><a href="http://localhost:8000/heatmap">HeatMap</a></li>
                            <li><a href="http://localhost:8000/account">Account</a></li>
                            <li><a href="http://localhost:8000/tarif">Tariffs</a></li>
                            <li><a href="http://localhost:8000/payment">Payment</a></li>
                        </ul>
                        <li class="dropdown pull-right signOutDropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button"
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

    @yield('content')
</div>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
