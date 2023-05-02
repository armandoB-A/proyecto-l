@extends('welcome')
@section('content')
    <!--Carrusel-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images-carr/m3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                    <h5>Mudanzas Santiago</h5>
                    <p>La mejor de las opciones en mudanzas.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images-carr/m3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                    <h5>Mudanzas Santiago</h5>
                    <p>La mejor de las opciones en mudanzas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images-carr/m3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark fw-bold">
                    <h5>Mudanzas Santiago</h5>
                    <p>La mejor de las opciones en mudanzas.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Cuerpo-->
    <div class="feature">
        <div class="container">
            <div class="four columns">
                <img class="icon-transporte" src="images/icon-transporte.png" alt="">
                <h2>TRANSPORTE</h2>
                <p>Mudanzas pronto ofrece a sus clientes una flota de vehículos en optimas condiciones de funcionamiento con capacidad...</p>
                <a class="ver-mas" href="transporte.html">
                    <p>VER MÁS</p>
                </a>
            </div>

            <div class="four columns">
                <img class="icon-empaque" src="images/icon-empaque.png" alt="">
                <h2>EMPAQUE</h2>
                <p>Contamos con un modelo estratégico, para su movimiento y almacenamiento de todas sus mercancías con el objetivo...</p>
                <a class="ver-mas" href="empaque.html">
                    <p>VER MÁS</p>
                </a>
            </div>

            <div class="four columns">
                <img class="icon-bodega" src="images/icon-bodega.png" alt="">
                <h2>BODEGA</h2>
                <p>Usted puede guardar en su mini bodega/bodega personal, muebles y enseres que no se necesitan, pero que posiblemente...</p>
                <a class="ver-mas" href="bodega.html">
                    <p>VER MÁS</p>
                </a>
            </div>
        </div>
    </div>

    <div class="mudanzas">
        <div class="container">
            <h2>MUDANZAS</h2>
            <div class="line-letter"></div>
        </div>

        <div class="container">
            <div class="three columns">
                <img class="twelve columns" src="images/mudanzas-locales.jpg" alt="">
                <h3>MUDANZAS LOCALES</h3>
                <p>Contamos con camiones de multiples tamaños con estacas ...</p>
                <a href="mudanzas-locales.html">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/mudanzas-empresas.jpg" alt="">
                <h3>MUDANZAS EMPRESAS</h3>
                <p>Mundamos desde pequeñas hasta grandes empresas y entidades ...</p>
                <a href="mudanzas-empresas.html">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/mudanzas-hogares.jpg" alt="">
                <h3>MUDANZAS HOGARES</h3>
                <p>Nuestros profesionales se encargarán de realizar todo el trabajo ...</p>
                <a href="mudanzas-hogares.html">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/transporte-mercancias.jpg" alt="">
                <h3>TRANSPORTE MERCANCÍAS</h3>
                <p>Transporte de carga: local, nacional e internacional, de exportaciones ...</p>
                <a href="transporte-mercancias.html">Más información >></a>
            </div>
        </div>
    </div>

    <div class="cinta__cubrimos">
        <div class="container">
            <a href="transporte.html">
                <p>CUBRIMOS LAS SIGUIENTES RUTAS <img src="images/icon-cubrimos.png" alt=""></p>
            </a>
        </div>
    </div>

@endsection
