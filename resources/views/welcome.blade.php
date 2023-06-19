<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
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
    <link rel="stylesheet" href="css2/normalize.css">
    <link rel="stylesheet" href="css2/skeleton.css">
    <link rel="stylesheet" href="css2/owl.carousel.css">
    <link rel="stylesheet" href="css2/owl.theme.css">
    <link rel="stylesheet" href="css2/meanmenu.css">
    <link rel="stylesheet" href="css2/style.css">
</head>
<body id="page-top">


<!--HEADER-->
<div class="navbar navbar-expand-lg text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('inicio')}}">Mudanzas Santiago</a>
        <div class="offset-by-one six columns">
            <div class="twelve columns">
                <ul class="icon-contact">
                    <li class="nav-item "><a href="#">| +1 (702) 439-4432 - +1 (702) 439-4432 | </a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}">INICIAR SESION |</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <li class="nav-item "><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div>
    @yield('content')
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


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
