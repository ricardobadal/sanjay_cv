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
            <h4>Ricardo Sanjay Badal</h4>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary shadow" data-toggle="modal" data-target="#myModal">
                Persoonlijke Gegevens
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Ricardo Sanjay Badal</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body shadow">
                            <dl>
                                <dd>Roepnaam: Sanjay</dd>
                                <br>
                                <dd>Toppingaheerd 19</dd>
                                <dd>9737 TR Groningen</dd>
                                <dd></i>
                                <dd><i><a href="mailto:ricardobadal@gmail.com">Email</a></i></dd>
                                <br>
                                <dd>Geboren: 25-Mei-1978 te Paramaribo</dd>
                                <dd>Nationaliteit: Nederlandse</dd>
                                <dd>Rijbewijs: Geen</dd>
                                <br>
                                <dd><i><a href="https://www.linkedin.com/in/rsbadal/">LinkedIn</a></i></dd>
                                <dd><i><a href="https://github.com/ricardobadal/">Git</a></i></dd>
                            </dl>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card" style="width:100%">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>