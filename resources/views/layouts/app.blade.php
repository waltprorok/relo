<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
{{--    <title>Relo Solutions</title>--}}
    <title>
        @if(View::hasSection('title'))
            @yield('title') | {{ config('app.name', 'Relo Agent Connect') }}
        @else
            {{ config('app.name', 'Relo Agent Connect') }}
        @endif
    </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="generator" content="Theme">
    <meta name="description" content="Relo Agent Connect Ready to make your move? Let our relocation experts guide you home—contact us today and start your stress-free journey!.">
    <meta name="author" content="Walter Prorok">
    <meta name="keywords" content="relocation agent, moving to another state, help finding a real estate agent for moving, relocation expert, relocation experts">
    <meta name="robots" content="index, follow, max-image-preview:standard">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('marketing/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('marketing/plugins/animate-css/animate.css') }}">
    <!-- Icon Font css -->
    <link rel="stylesheet" href="{{ asset('marketing/plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing/plugins/fonts/Pe-icon-7-stroke.css') }}">
    <!-- Themify icon Css -->
    <link rel="stylesheet" href="{{ asset('marketing/plugins/themify/css/themify-icons.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('marketing/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/marketing/css/style.css') }}">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>
<body id="top-header">

<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top site-navigation main-nav navbar-togglable trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <h3>{{ config('app.name') }}</h3>
        </a>
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
            <!-- Links -->
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a href="{{ url('/#who-we-are') }}" class="nav-link js-scroll-trigger">
                        Who We Are
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/#what-we-do') }}" class="nav-link js-scroll-trigger">
                        What We Do
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/#what-to-expect') }}" class="nav-link js-scroll-trigger">
                        What To Expect
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ url('/#success-stories') }}" class="nav-link js-scroll-trigger">
                        Success Stories
                    </a>
                </li>
            </ul>

            <ul class="ml-lg-auto list-unstyled m-0 nav-btn">
                <li><a href="{{ route('contact.create') }}" class="btn btn-trans-white btn-circled">Contact Us</a></li>
            </ul>
        </div> <!-- / .navbar-collapse -->
    </div> <!-- / .Container -->
</nav>

@yield('content')

<footer class="section " id="footer">
    <div class="overlay footer-overlay"></div>
    <!--Content -->
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-4 col-sm-12">
                <div class="footer-widget">
                    <!-- Brand -->
                    <a href="{{ route('home') }}" class="footer-brand text-white">
                        {{ config('app.name') }}
                    </a>
                    <p>Moving can be tricky, whether is up the road or across the country it helps to have a professional by your side.</p>
                </div>
            </div>

            <div class="col-lg-3 ml-lg-auto col-sm-12">
                <div class="footer-widget">
                    <h3>Account</h3>
                    <!-- Links -->
                    <ul class="footer-links ">
                        <li>
                            <a href="{{ route('terms-and-conditions') }}">
                                Terms and conditions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy-policy') }}">
                                Privacy policy
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                Affiliate services
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                Help and support
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                Frequently Asked Question
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 ml-lg-auto col-sm-12">
                <div class="footer-widget">
                    <h3>Links</h3>
                    <!-- Links -->
                    <ul class="footer-links">
                        <li>
                            <a href="{{ url('/#who-we-are') }}">
                                Who We Are
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/#what-we-do') }}">
                                What We Do
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/#what-to-expect') }}">
                                What To Expect
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/#success-stories') }}">
                                Success Stories
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact.create') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget">
                    <h3>Socials</h3>
                    <!-- Links -->
                    <ul class="list-unstyled footer-links">
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a></li>
{{--                        <li>--}}
{{--                            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i>Twitter--}}
{{--                            </a></li>--}}
{{--                        <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i>Pinterest--}}
{{--                            </a></li>--}}
                        <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i>linkedin
                            </a></li>
{{--                        <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="fab fa-youtube"></i>YouTube--}}
{{--                            </a></li>--}}
                    </ul>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row text-right pt-5">
            <div class="col-lg-12">
                <div class="overflow-hidden">
                    <!-- Copyright -->
                    <p class="footer-copy">
                        Copyright &copy; <script>const CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>. Developed by <a class="current-year" href="https://www.linkedin.com/in/walter-prorok/" target="_blank">Artemis</a>
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>


<!--  Page Scroll to Top  -->

<a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
    <i class="fa fa-angle-up"></i>
</a>

<!-- jQuery -->
<script src="{{ asset('marketing/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('marketing/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('marketing/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<!-- Google Map -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>--}}
{{--<script src="{{ asset('marketing/plugins/google-map/gmap.js') }}"></script>--}}

<script src="{{ asset('marketing/js/script.js') }}"></script>

</body>
</html>
