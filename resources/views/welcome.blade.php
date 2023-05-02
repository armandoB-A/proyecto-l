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
        <a class="navbar-brand" href="#page-top">Mudanzas Santiago</a>
        <div class="offset-by-one six columns">
            <div class="twelve columns">
                <ul class="icon-contact">
                    <li class="icon-mail"><a href="#"> blasarcej@gmail.com</a></li>
                    <li class="icon-mobile"><a href="#"> 5535878129 - 5535878129</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<div class="contacto">
    <div class="container">
        <h2>CONTACTO</h2>
        <div class="line-letter"></div>
        <p>Contamos con un modelo estratégico, para su movimiento y almacenaminto de todas sus mercancías con el objetivo de realizar una actividad eficiente con un menor costo y un excelente servicio.</p>
        <h4>EMPAQUE, EMBALAJE, Y DESEMPAQUE DE MUEBLES.</h4>
        <a class="bottom" href="contacto.html">SOLICITA UNA COTIZACIÓN</a>
    </div>
</div>


<div class="footer__datos__contacto">
    <div class="container">
        <ul class="datos__footer">
            <li class="icon-map">&nbsp;&nbsp;xhixhata, Jilotepec, México</li>
            <li class="icon-mobile-2">&nbsp;&nbsp;5535878129 - 5535878129</li>
            <li class="icon-mail">
                <a href="mailto:blasarce@gmail.com"></a>&nbsp;&nbsp;blasarce@gmail.com</li>
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
