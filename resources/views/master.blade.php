<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from www.madebydesignesia.com/themes/seaside/index-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 12:14:18 GMT -->
<head>
        <meta charset="utf-8">
        <title>Seaside Hotel</title>
        <link rel="icon" href="{{ asset('assets/frontend/images/icon.png') }}" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" id="bootstrap">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/color.css') }}" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/colors/brown.css') }}" type="text/css" id="colors">
    </head>

    <body>

                <!-- float text begin -->
                <div class="float-text">
                    <div class="de_social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                    <span><a href="#">Book Now</a></span>
                </div>
                <!-- float text close -->

        <div id="wrapper">
            <!-- header begin -->
            <header class="header-fullwidth menu-expand transparent">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="index.html">
                                    <img class="logo" src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- small button begin -->
                            <div id="mo-button-open" class="mo-bo-s1">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <!-- small button close -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- header close -->

            <!-- menu overlay begin -->
            <div id="menu-overlay" class="slideDown">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="mo-button-close">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="pt80 pb80">
                                <div class="mo-nav text-center">
                                    <a href="index.html">
                                        <img class="logo" src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                                    </a>

                                    <div class="spacer-single"></div>

                                    <!-- mainmenu begin -->
                                    <ul id="mo-menu">
                                        <li>
                                            Home
                                            <ul>
                                                <li><a href="index-full-page.html">Full Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('about')}}">About</a></li>

                                        <li><a href="{{route('rooms')}}">Rooms</a></li>

                                        <li><a href="{{route('booking')}}">Booking</a></li>
                                        <li><a href="{{route('offer')}}">Offers</a></li>
                                        <li><a href="{{route('blog')}}">Blog</a></li>
                                        <li><a href="{{route('galary')}}">Gallery</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                    <!-- mainmenu close -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu overlay close -->

    @yield('content')

    <footer class="no-top pl20 pr20">
                <div class="subfooter">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">&copy; Copyright 2023 - Seaside Hotel by <span class="id-color">Designesia</span></div>
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>

        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/designesia.js') }}"></script>

    </body>

<!-- Mirrored from www.madebydesignesia.com/themes/seaside/index-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 12:14:27 GMT -->
</html>
