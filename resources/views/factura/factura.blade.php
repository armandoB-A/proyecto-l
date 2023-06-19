<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/factura.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Factura</title>
</head>

<body>
<div class="container">
    <div class="invoice">
        <div class="row">
            <div class="col-7">
            </div>
            <div class="col-5">
                <h1 class="document-type display-4">FACTURA</h1>
                <p class="text-right"><strong></strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <p>
                    <strong>mudanzas satiago sa.cv</strong><br> Teléfono: 55358781<br> Correo:
                    mudanzassatiago@gmail.com
                </p>
            </div>
            <div class="col-5">
                <br><br><br>
                <p>
                    <strong>Domicilio</strong><br>Col. calculalpan. <br> lejitos S/N<br>
                </p>
            </div>
        </div>
        <br>
        <br>
        <h6>Factura </h6>
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $mudanza->id_mudanza }}</td>
                <td>{{$mudanza->user->name}}</td>
                <td class="text-right">{{$mudanza->municipioO->nombre_municipio}}</td>
                <td class="text-right">{{$mudanza->municipioD->nombre_municipio}}</td>
                <td class="text-right"> {{$mudanza->presupuesto}}</td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
                <table class="table table-sm text-right">
                    <tr>
                        <td><strong>Total</strong></td>
                        <td class="text-right">{{$mudanza->total}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <br>
        <br>

        <p class="bottom-page text-right">
            <strong>Domicilio</strong><br>Col. calculalpan. <br> lejitos S/N<br>
        </p>

    </div>
</div>
</body>

</html>
