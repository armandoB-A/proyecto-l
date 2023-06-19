<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link href="css/styles.css" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css2/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css2/skeleton.css')}}">
    <link rel="stylesheet" href="{{asset('css2/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css2/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css2/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css2/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{route('inicio')}}">Mudanzas Santiago</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">INICIAR SESION</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">REGISTRAR</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    </div>
    <div class="contacto">
        <div class="container">
            <h2>CONTACTO</h2>
            <div class="line-letter"></div>
            <p>Contamos con un modelo estratégico, para su movimiento y almacenaminto de todas sus mercancías con el objetivo de realizar una actividad eficiente con un menor costo y un excelente servicio.</p>
            <h4>EMPAQUE, EMBALAJE, Y DESEMPAQUE DE MUEBLES.</h4>
        </div>
    </div>
    <div class="footer__datos__contacto">
        <div class="container">
            <ul class="datos__footer">
                <li class="icon-map">&nbsp;&nbsp;Ciudad de México</li>
                <li class="icon-mobile-2">&nbsp;&nbsp;+1 (702) 439-4432</li>
                <li class="icon-mail">
                    <a href="mailto:mudanzassantiago4@gmail.com"></a>&nbsp;&nbsp;mudanzassantiago4@gmail.com
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
