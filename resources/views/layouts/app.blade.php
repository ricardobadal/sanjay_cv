<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sanjay CV') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container">
    <div id="app">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/sanjay_photo.png" alt="" width="150"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item"><a class="nav-link active nav-button" aria-current="page"
                        href="{{ route('home.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link nav-button" aria-current="page"
                        href="{{ route('home.profile') }}">Profiel</a>
                </li>
                <li class="nav-item"><a class="nav-link nav-button" aria-current="page"
                        href="{{ route('home.education') }}">Opleidingen</a>
                </li>
                <li class="nav-item"><a class="nav-link nav-button" aria-current="page"
                        href="{{ route('home.experience') }}">Werkervaring</a>
                </li>
                <li class="nav-item"><a class="nav-link nav-button" aria-current="page"
                        href="{{ route('home.knowledge') }}">Vaardigheden</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    @include('info')
                </div>
                <div class="col-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>