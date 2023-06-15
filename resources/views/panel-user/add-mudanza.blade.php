@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrom.css')}}">
    <div class="container">
        <h1 class="text-center">COTIZACION MUDANZA</h1>
    </div>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="{{ route('cotizacion-mudanza') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>
                    ORIGEN DE LA MUDANZA
                    <select class="form-control" id="id_municipio_o" name="id_municipio_o" required>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre_municipio }}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    DESTINO DE LA MUDANZA
                    <select class="form-control" id="id_municipio_d" name="id_municipio_d" required>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre_municipio }}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    TIEMPO DE MUDANZAS
                    <select class="form-control" id="id_tipo_p" name="id_tipo_p" required>
                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id_peso_mercancia }}">{{ $tipo->cantidad_peso }}</option>
                        @endforeach
                    </select>
                </label>

                <button>login</button>
            </form>
        </div>
    </div>
@endsection
