<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
-->
<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset ( 'assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset ( 'assets/css/style.css') }}">
   </head>
<body>
    <div id="app">
        <header>
            <!-- Header Start -->
           <div class="header-area header-transparrent">
               <div class="headder-top header-sticky">
                    <div class="container">
                        @guest
                        <div class="row align-items-center">
                            <div class="col-xs-7 col-sm-6 col-lg-8">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="/"><img src="{{ asset ('assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-6 col-lg-4">
                                <div class="menu-wrapper">
                                    <!-- Main-menu -->
                                    <div class="main-menu">
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-btn d-none f-right d-lg-block">
                                        <a href="/registerindex" class="genric-btn primary radius">Register</a>
                                        <a href="/login" class="genric-btn danger-border radius">Login</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                        @endguest

                        @auth
                        <div class="row align-items-center">
                            <div class="col-xs-7 col-sm-6 col-lg-10">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="/"><img src="{{ asset ('assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="col-xs-5 col-sm-6 col-lg-2">

                                <div class="dropdown">
                                    <button class="genric-btn primary circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{auth()->user()->fn}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="/jobs">Jobs you apply</a>
                                      <a class="dropdown-item" href="#">Favorite</a>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                       </a>
                                    </div>
                                  </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                        @endauth

                    </div>
               </div>
           </div>
            <!-- Header End -->
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>




      <!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset ('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset ('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/popper.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset ('./assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset ('./assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/slick.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/price_rangs.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset ('./assets/js/wow.min.js')}}"></script>
		<script src="{{ asset ('./assets/js/animated.headline.js')}}"></script>
        <script src="{{ asset ('./assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset ('./assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{ asset ('./assets/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{ asset ('./assets/js/contact.js')}}"></script>
        <script src="{{ asset ('./assets/js/jquery.form.js')}}"></script>
        <script src="{{ asset ('./assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset ('./assets/js/mail-script.js')}}"></script>
        <script src="{{ asset ('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset ('./assets/js/plugins.js')}}"></script>
        <script src="{{ asset ('./assets/js/main.js')}}"></script>
</body>
</html>
