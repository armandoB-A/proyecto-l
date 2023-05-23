@extends('welcome')
@section('content')
    <div class="text-center" style="margin-top: 30px; margin-bottom: 40px">
        @guest
        @else
            <h1>Bienvenido {{Auth::user()->name}}</h1>
            @if(Auth::user()->id_rol=='2')
                <a href="{{route('usuarios.index')}}" class="btn btn-primary" ><h6>PANEL DE ADMIN</h6></a>
            @endif
            <a href="/" class="btn btn-primary" ><h6>PANEL DE USUARIO</h6></a>
        @endguest
    </div>
    <div class="text-center" style="margin-top: 30px">
        <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
            style=" max-width: 1300px; margin: 0 auto"
        >
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="images-carr/m3.png"
                        class="d-block w-100"
                        alt="Slide 1"
                        style="max-height: 400px"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="images-carr/m3.png"
                        class="d-block w-100"
                        alt="Slide 2"
                        style=" max-height: 400px"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="images-carr/m3.png"
                        class="d-block w-100"
                        alt="Slide 3"
                        style=" max-height:400px"
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--Cuerpo-->
    <div class="feature">
        <div class="container">
            <div class="four columns">
                <img class="icon-transporte" src="images/icon-transporte.png" alt="">
                <h2>TRANSPORTE</h2>
                <p>Mudanzas pronto ofrece a sus clientes una flota de vehículos en optimas condiciones de funcionamiento
                    con capacidad...</p>
                <a class="ver-mas" href="{{route('transporte')}}">
                    <p>VER MÁS</p>
                </a>
            </div>

            <div class="four columns">
                <img class="icon-empaque" src="images/icon-empaque.png" alt="">
                <h2>EMPAQUE</h2>
                <p>Contamos con un modelo estratégico, para su movimiento y almacenamiento de todas sus mercancías con
                    el objetivo...</p>
                <a class="ver-mas" href="{{route('empaque')}}">
                    <p>VER MÁS</p>
                </a>
            </div>

            <div class="four columns">
                <img class="icon-bodega" src="images/icon-bodega.png" alt="">
                <h2>BODEGA</h2>
                <p>Usted puede guardar en su mini bodega/bodega personal, muebles y enseres que no se necesitan, pero
                    que posiblemente...</p>
                <a class="ver-mas" href="{{route('bodega')}}">
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
                <a href="{{route('mudanzaslocales')}}">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/mudanzas-empresas.jpg" alt="">
                <h3>MUDANZAS EMPRESAS</h3>
                <p>Mundamos desde pequeñas hasta grandes empresas y entidades ...</p>
                <a href="{{route('mudanzasempresas')}}">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/mudanzas-hogares.jpg" alt="">
                <h3>MUDANZAS HOGARES</h3>
                <p>Nuestros profesionales se encargarán de realizar todo el trabajo ...</p>
                <a href="{{route('mudanzashogares')}}">Más información >></a>
            </div>
            <div class="three columns">
                <img class="twelve columns" src="images/transporte-mercancias.jpg" alt="">
                <h3>TRANSPORTE MERCANCÍAS</h3>
                <p>Transporte de carga: local, nacional e internacional, de exportaciones ...</p>
                <a href="{{route('mudanzasmercancia')}}">Más información >></a>
            </div>
        </div>
    </div>

    <div class="cinta__cubrimos">
        <div class="container">
            <a href="{{route('transporte')}}">
                <p>CUBRIMOS LAS SIGUIENTES RUTAS <img src="images/icon-cubrimos.png" alt=""></p>
            </a>
        </div>
    </div>
@endsection
