<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light m-10">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/sanjay_photo.png" alt="" width="100"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class=" nav-item"><a class="nav-link active nav-button" aria-current="page" href="{{ route('home.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link nav-button" href="{{ route('home.profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link nav-button" href="{{ route('home.education') }}">Education</a></li>
                    <li class="nav-item"><a class="nav-link nav-button" href="{{ route('home.experience') }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link nav-button" href="{{ route('home.knowledge') }}">Knowledge</a></li>
                </ul>
            </div>
        </nav>

        <div class="py-4 container">
        <header>
    <pre>
        <h3>Ricardo Sanjay Badal</h3>
        Roepnaam: Sanjay

        Toppingaheerd 19
        9737 TR Groningen
        ricardobadal@gmail.com

        Geboren: 25-Mei-1978 te Paramaribo
        Nationaliteit: Nederlandse
        Rijbewijs: Geen
   
        <a href="https://www.linkedin.com/in/rsbadal/">LinkedIn</a>
        <a href="https://github.com/ricardobadal/">Git</a>

    </pre>
</header>
            @yield('content')
        </div>
    </div>
</body>
</html>
