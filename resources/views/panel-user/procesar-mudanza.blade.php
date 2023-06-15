@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{asset('css/contisasion.css')}}">
    <div class="video-container-container">
        <div class="videobanner-devider"></div>
        <div class="videobanner-overlay"></div>
        <div class="videobanner-content-container">
            <div class="videobanner-content">
                <h1>COTIZACIONES SANTIAGO</h1>
                <p class="text-center">SU COTIZACION {{$origen->nombre_municipio}} HACIA {{$destino->nombre_municipio}}
                    TIENE UN COSTO INICIAL DE: $<span class="bannerbold">{{$tipo->presio}}</span></p>
                <div class="videobannerbtncontainer">
                    <div class="navigatiebuttoncontianerinfo">
                        <a class="navigatiebutton text-center" id="advies"
                           href="{{route('exito-mudanza', ['id_mun'=>$tipo->id_peso_mercancia,'id_ori'=>$origen->id_municipio,'id_dest'=>$destino->id_municipio])}}">
                            procesar mudanza</a>
                    </div>
                    <div class="navigatiebuttoncontianerinfo"><a class="navigatiebutton" id="advies"
                                                                 href="{{route('inicio')}}">volver al inicio</a></div>

                </div>
            </div>
        </div>
    </div>
@endsection
