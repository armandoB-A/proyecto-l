<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/porcentajes.css') }}">

<div class="container">
    <form action="{{ route('handleForm', ['id'=>$mudanza->id_mudanza]) }}" method="POST">
        @csrf
        <div class="container">
            <h1 class="text-center">USUARIO: {{$mudanza->user->name}}</h1>
        </div>
        <div class="container">
            <h4 class="text-center">Origen: {{$mudanza->municipioO->nombre_municipio}}</h4>
            <h4 class="text-center">Destino: {{$mudanza->municipioD->nombre_municipio}}</h4>
            <h4 class="text-center">Presupuesto inicial: {{$mudanza->presupuesto}}</h4>
        </div>
        <div class="form-group">
            <label for="presior" class="form-label">Precio real</label>
            <input type="number" class="form-control" id="presior" name="presior" value="{{$mudanza->total}}">
        </div>
        <div class="container">
            <input type="radio" class="radio" name="progress" value="inicio" id="inicio" {{ $mudanza->status == 0 ? 'checked' : '' }}>
            <label for="inicio" class="label">Se está iniciando la mudanza</label>

            <input type="radio" class="radio" name="progress" value="camino" id="camino" {{ $mudanza->status == 1 ? 'checked' : '' }}>
            <label for="camino" class="label">Mudanza en camino</label>

            <input type="radio" class="radio" name="progress" value="pago" id="pago" {{ $mudanza->status == 2 ? 'checked' : '' }}>
            <label for="pago" class="label">Pago de la mudanza</label>

            <input type="radio" class="radio" name="progress" value="fin" id="fin" {{ $mudanza->status == 3 ? 'checked' : '' }}>
            <label for="fin" class="label">Fin de la mudanza</label>

            <div class="progress">
                <div class="progress-bar"></div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
