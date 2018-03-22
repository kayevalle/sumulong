<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="text/css" href="{{ asset('images/JSMJC.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >@yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/fontawesome-all.js') }}" defer></script>
    <script src="{{ asset('js/custom-js.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-css.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
   
            <nav class="navbar navbar-expand-md fixed-top navbar-dark navbar-bg navbar-transparent">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/JSMJC.png') }}" height="80" style="padding-right: 20px;">
                        <span class="text-uppercase">Juan Sumulong Memorial Junior College</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Admissions</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Branches</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        {{-- <ul class="navbar-nav ml-auto" >
                            <li class="nav-item">
                                <div class="socmed-links d-flex justify-content-around" style="width: 150px">
                                    <a href="https://www.facebook.com/Juan-Sumulong-Memorial-Junior-College-JSMJC-106300889480976/"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/iamsumulong"><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                                    <a href="http://www.youtube.com/channel/UCYf9vGsRtirUa-DebvkNRBw"><i class="fab fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul> --}}

                        <!-- Right Side Of Navbar -->
                        {{-- <ul class="navbar-nav ml-auto">
                          
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                          
                        </ul> --}}
                    </div>
                </div>
            </nav>

            {{-- header text --}}
            <div class="page-header page-header-small nav-bg-img">
                <div class="filter"></div>
                <div class="motto">
                    {{-- <h2 class="title-uppercase text-center">In this <span >School</span></h2>
                    <h2 class="title-uppercase text-center">You are <span >Loved</span></h2> --}}
                    {{-- <small class="text-center">Lorem ipsum</small> --}}
                    
                </div>
            </div>

       
        <main>
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer-row">
              <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: left;">
                    <h4 style="color: #2C8437;">
                    JUAN SUMULONG MEMORIAL JUNIOR COLLEGE<br>
                    </h4>
                    <hr>

                    <p>
                        Copyright 2018<br><br>

                        D., Espiritu, Taytay, 01920 Rizal<br>
                       
                    </p>
                    
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: left;">
                    <h4 style="color: #2C8437;">
                    Contact Us<br><hr>
                    </h4>
                    Telephone number: 658-6561<br>
                    Fax number: 658-6561

                    {{-- <h4 style="color: #8d1437;">
                    <br>Social Media<br>
                    </h4> --}}
                    <br>

                    <div class="socmed-links">
                        <br>
                        <a href="https://www.facebook.com/Juan-Sumulong-Memorial-Junior-College-JSMJC-106300889480976/"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/iamsumulong"><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                        <a href="http://www.youtube.com/channel/UCYf9vGsRtirUa-DebvkNRBw"><i class="fab fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                    </div>

                </div> 
                <div class="col-lg-2 col-md-2 col-sm-12 quick-links" style="text-align: left;">
                    <h4 style="color: #2C8437;">
                    Quick Links<br><hr>
                    </h4>
                    <p><a href="#">Home</a></p>
                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Admissions</a></p>
                </div>

                </div>
              </div>
            </div>
        </footer>
    </div>
</body>
</html>
