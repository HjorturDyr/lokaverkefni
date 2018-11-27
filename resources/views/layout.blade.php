<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MMDB - Marvel Cinematic Movies</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    MMDB
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/films">
                                Films
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/timeline">
                                Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/login">
                                Login
                            </a>
                        </li>
                    </ul>

                    
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
</body>
</html>