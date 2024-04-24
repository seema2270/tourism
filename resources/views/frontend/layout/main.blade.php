<!doctype html>
<html lang="en">

<head>
    <title>Tourism</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fancybox.min.css')}}">

    <link href="{{asset('frontend/assets/css/boxicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header>
        <div class="header-area header-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                        <div class="nav-logo d-flex justify-content-between align-items-center">
                            <a href="index.html"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo" width="80"></a>
                            <div class="d-flex align-items-center gap-4">
                                <div class="nav-right d-xl-none">
                                    <ul class="nav-actions">
                                        <li class="category-toggle">
                                            <i class="bx bx-category"></i>
                                        </li>
                                        <li class="search-toggle">
                                            <i class="bx bx-search-alt"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <nav class="main-nav float-end">
                            <div class="inner-logo d-xl-none text-center">
                                <a href="#"><img src="{{asset('frontend/assets/images/logo.png')}}" alt></a>
                            </div>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/packages">Packages</a></li>
                                <li><a href="/blogs">Blogs</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                @if(auth()->user())
                                @if(auth()->user()->role == 'admin')
                                <li><a href="/admin/booking">My Booking</a></li>
                                @else
                                <li><a href="/my-booking">My Booking</a></li>
                                @endif
                                @endif
                            </ul>

                        </nav>
                    </div>
                    <div class="col-xl-2">
                        <div class="nav-right float-end d-xl-flex d-none ">
                            <ul class="nav-actions">
                                @if(auth()->user())
                                <a href="/home">
                                    <li class="search-toggle">
                                        <i class="bx bx-home"></i>
                                    </li>
                                </a>
                                &nbsp;
                               
                                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <li class="search-toggle">
                                        <i class="bx bx-log-out"></i>
                                    </li>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                @else
                                <a href="/login">
                                    <li class="search-toggle">
                                        <i class="bx bx-user"></i>
                                    </li>
                                </a>
                                @endif

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <div class="footer-area mt-110">

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>Copyright 2024 Tourism | Design By <a href="#"> Seema Tamang</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/chain_fade.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>

    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>