@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{asset('css/mudanzaexitosa.css')}}">
    <div id="container">
        <div id="success-box">
            <div class="dot"></div>
            <div class="dot two"></div>
            <div class="face">
                <div class="eye"></div>
                <div class="eye right"></div>
                <div class="mouth happy"></div>
            </div>
            <div class="shadow scale"></div>
            <div class="message"><h1 class="alert">EXITO!</h1><p>su mudanza esta siendo tramitada, en breve se pondran en contacto con usted.</p></div>
            <button class="button-box"><a class="green" href="{{route('panel-user')}}">continuar</a></button>
        </div>
    </div>
@endsection
