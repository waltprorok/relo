<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(View::hasSection('title'))
            @yield('title') | {{ config('app.name', 'Relo') }}
        @else
            {{ config('app.name', 'Relo') }}
        @endif
    </title>

    <link rel="stylesheet" href="{{ asset('webapp/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('webapp/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webapp/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('webapp/css/stylesheet.css') }}">

    @vite(['resources/js/app.js'])  {{--    'resources/sass/app.scss'--}}

</head>
<body class="sidebar-fixed header-fixed">
<div id="app">
    <div class="page-wrapper">
        <nav class="navbar page-header">
            <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
                <i class="fa fa-bars"></i>
            </a>

            <a class="navbar-brand" href="#">
                <img src="{{ asset('webapp/imgs/logo-1.png') }}" alt="logo">
            </a>

            <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
                <i class="fa fa-bars"></i>
            </a>

            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item d-md-down-none">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-bell"></i>--}}
{{--                        <span class="badge badge-pill badge-danger">0</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item d-md-down-none">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-envelope-open"></i>--}}
{{--                        <span class="badge badge-pill badge-danger">0</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="small ml-1 d-md-down-none"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('user.account.show') }}">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>Account
                        </a>

                        <a id="logout-link" class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt" aria-hidden="true"></i>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        {{--                    <div class="dropdown-header">Account</div>--}}

                        {{--                    <a href="#" class="dropdown-item">--}}
                        {{--                        <i class="fa fa-user"></i> Profile--}}
                        {{--                    </a>--}}

                        {{--                    <a href="#" class="dropdown-item">--}}
                        {{--                        <i class="fa fa-envelope"></i> Messages--}}
                        {{--                    </a>--}}

                        {{--                    <div class="dropdown-header">Settings</div>--}}

                        {{--                    <a href="#" class="dropdown-item">--}}
                        {{--                        <i class="fa fa-bell"></i> Notifications--}}
                        {{--                    </a>--}}

                        {{--                    <a href="#" class="dropdown-item">--}}
                        {{--                        <i class="fa fa-wrench"></i> Settings--}}
                        {{--                    </a>--}}
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-container">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <p></p>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                               class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                                <i class="icon icon-speedometer "></i>Dashboard
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ route('contacts') }}"
                               class="nav-link {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}">
                                <i class="fa fa-paper-plane"></i>Contacts
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="content">
                @include('partials.alerts')
                <div class="container-fluid">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('webapp/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('webapp/vendor/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('webapp/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('webapp/vendor/chart.js/chart.min.js') }}"></script>--}}
<script src="{{ asset('webapp/js/carbon.js') }}"></script>
{{--<script src="{{ asset('webapp/js/demo.js') }}"></script>--}}
</body>
</html>
