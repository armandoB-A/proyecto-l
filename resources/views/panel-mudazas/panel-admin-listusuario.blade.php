@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{asset('css/cardsmudanzas.css')}}">
    <div class="container text-center mt-5">
        <a class="btn btn-primary" style="font-size: x-large;" href="{{route('solicitar-mudanza')}}">solicitar cotizacion</a>
    </div>
    <div class="container">
        <div class="row">
            @foreach($mudanzas as $mudanza)
                @php
                    $color = '';
                    switch ($mudanza->status) {
                        case 0:
                            $color = '#ff0000'; // Rojo
                            break;
                        case 1:
                            $color = '#ffff00'; // Amarillo
                            break;
                        case 2:
                            $color = '#ffa500'; // Naranja
                            break;
                        case 3:
                            $color = '#008000'; // Verde
                            break;
                    }
                @endphp

                <div class=" col-md-12">
                    <div class="color-block-wrapper">
                        <div class="color-block color-block-icon-list" style="background-color: {{ $color }}">
                            <div class="color-block-head">
                                Mudanza #{{ $mudanza->id_mudanza }}
                            </div>
                            <div class="color-block-text">
                                Origen: {{ $mudanza->municipioO->nombre_municipio }} <br>
                                Destino: {{ $mudanza->municipioD->nombre_municipio }}
                            </div>
                        </div>
                        <div class="color-block-bottom">
                            <a href="{{route("adm-descripcion-mudanza",['id'=>$mudanza->id_mudanza])}}" class="btn btn-transparent-lblue">Ver detalles</a>
                            @if($mudanza->status == 3)
                                <a href="{{route("enviar-factura",['id_m'=>$mudanza->id_mudanza,'id_u'=>$mudanza->id_user])}}" class="btn btn-transparent-lblue">Mandar factura</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
