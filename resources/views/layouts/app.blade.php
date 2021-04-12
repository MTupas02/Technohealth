<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TECHNOHEALTH') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
   <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
   <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" defer></script>
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}
   <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> --}}
   <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">
   {{-- <link href="/css/print.css" rel="stylesheet" media="print" type="text/css"> --}}

   <style>
    .custom-select:disabled {
        background-color: #e9ecef; 
        opacity: 1;
    }
    .loading-bar{
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://i.stack.imgur.com/FhHRx.gif');
        background-position: 50% 50%;
        background-color: rgba(255, 255, 255, 0.8);
        background-repeat: no-repeat;
    }
    body.loading{
        overflow: hidden;
    }
    body.loading .loading-bar{
        display: block;
    }
    body{
        height: 100%;
        font-size: 12px;
        /* background-image: url('/img/bg-body.jpg'); background-size: 100%; width: 100%; height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; */
    }
    th { font-size: 11px; }
    td { font-size: 11px; }
    .form-control { font-size: 12px; }
    .nav-tabs .nav-link {
        color: #495057;
        background-color: #f8fafc;
        border-color: #dee2e6 #dee2e6 #f8fafc;
    }
    .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
        color: #f8fafc;
        background-color: #1e6f5c;
        border-color: #1e6f5c #1e6f5c;
    }
    .custom-select { font-size: 12px; }
    .footer {
        /* position: absolute; */
        left: 0;
        bottom: 0;
        right:0;
        /* bottom: 0; */
        width: 100%;
        height: 30%;
        /* line-height: 60px; */
        background-color: #1e6f5c;
        text-align: center;
        color: white;
        
    }
</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm text-white" style="background-color: #1e6f5c !important;height: 10%">
            <div class="container  px-1">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/techno-logo.png" style="height: 50px; width: 40px">
                    {{ config('app.name', 'TECHNOHEALTH') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size: 15px">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('About Us') }}</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/product">{{ __('Our Products') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <main class="py-4">
        @yield('content')
    </main>
    {{-- <footer class="footer">
        <h3 class="footer-text">
            Hello
        </h3>
    </footer> --}}
    <footer class="footer">
        <div class="col-md-12">
            <div class="container pt-5">
                <h2 style="text-spacing: 10px !important">TECHNOHEALTH</h2>
                <h4 style="text-shadow:  1px 1px #ddffbc;">“EMPOWERING PEOPLE IMPROVING LIVES”</h4>
            </div>
            <small><span>Copyright 2021 ©  Technohealth International Marketing Corporation</span></small>
            <br>
            <a href="{{ route('login') }}">{{ __('Login') }}</a> | 
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@stack('scripts')
</body>
</html>
