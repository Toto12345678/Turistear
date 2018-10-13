<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
    </head>
    <body>
    <div class="container">
        <form action="{{ url('comprarpaquete') }}" method="get">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Número de boletos</label>
            <select class="form-control" name="opcion">
            @for ($i = 1; $i <= $paquete->lugares; $i++)
            <option>
                {{$i}}
            </option>
            @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Correo electronico</label>
            <input type="email" class="form-control" name="correo" placeholder="Correo electronico">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Telefono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Numero de tarjeta</label>
            <input type="number" class="form-control" name="tarjeta" placeholder="Numero de tarjeta">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">MM/AA</label>
            <input type="text" class="form-control" name="mmaa" placeholder="MM/AA">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">CVV</label>
            <input type="number" class="form-control" name="cvv" placeholder="CVV">
        </div> 
        <input type="hidden" name="id" value="{{$paquete->id}}">   
        <button type="submit" class="btn btn-primary">Comprar</button>
    </form>
</div>
    </body>
</html>