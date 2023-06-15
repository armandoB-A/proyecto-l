@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/statuslm.css')}}">
    <style>
        .containers {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            text-align: center;
            margin: 30px;
        }

        .cards-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
        }

        .card-title {
            color: red;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-content {
            text-align: left;
            color: #1a1a1a;
        }

        .custom-div {
            flex-basis: 50%;
            background-color: #2c2c2c;
            padding: 20px;
        }
    </style>
    <div class="container">
        <div class="card-title text-center"><h2>MUDANZA</h2></div>
    </div>
    <div class="containers">
        <div class="cards-container">


            <div class="card">
                <div class="card-content">
                    <div class="card-title">USUARIO MUDANZA:</div>
                    <p>{{ Auth::user()->name }}</p>

                    <div class="card-title">DOMICILIO:</div>
                    <p>{{ $mudanza->municipioO->nombre_municipio }}</p>

                    <div class="card-title">DESTINO:</div>
                    <p>{{ $mudanza->municipioD->nombre_municipio }}</p>

                    <div class="card-title">PRESUPUESTO INICIAL</div>
                    <p>${{ $mudanza->presupuesto }}</p>

                    <div class="card-title">COSTO TOTAL</div>
                    <p>${{ $mudanza->total }}</p>
                </div>
            </div>
        </div>

        <div class="custom-div card">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

            <div class="progress">
                <div class="circle {{ $mudanza->status >= 0 ? 'done' : '' }}" >
                    <span class="label">1</span>
                    <span class="title">inicio la mudanza</span>
                </div>
                <span class="bar {{ $mudanza->status >= 1 ? 'done' : '' }}" style="margin-top: 50px"></span>
                <div class="circle {{ $mudanza->status >= 1 ? 'done' : '' }}">
                    <span class="label">2</span>
                    <span class="title">la mudanza se esta realizando </span>
                </div>
                <span class="bar {{ $mudanza->status >= 1 ? 'done' : '' }}" style="margin-top: 50px"></span>
                <div class="circle {{ $mudanza->status >= 1 ? 'done' : '' }}">
                    <span class="label">3</span>
                    <span class="title">Pago la mudanza</span>
                </div>
                <span class="bar {{ $mudanza->status >= 2 ? 'done' : ($mudanza->status == 1 ? 'half' : '') }}" style="margin-top: 50px"></span>
                <div class="circle {{ $mudanza->status >= 2 ? 'active' : '' }}">
                    <span class="label">4</span>
                    <span class="title">se finalizo la mudanza</span>
                </div>
            </div>

        </div>
    </div>

@endsection
