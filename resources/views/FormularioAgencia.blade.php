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
        <form action="{{ url('registroPaquete') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Estado de llegada</label>
                <input type="text" class="form-control" name="estado_llegada" placeholder="Estado de llegada">
            </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ciudad de llegada</label>
            <input type="text" class="form-control" name="ciudad_llegada" placeholder="Ciudad de llegada">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Estado de Salida</label>
            <input type="text" class="form-control" name="estado_salida" placeholder="Estado de Salida">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ciudad de salida</label>
            <input type="text" class="form-control" name="ciudad_salida" placeholder="Ciudad de salida">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Original</label>
            <input type="text" class="form-control" name="precio_original" placeholder="Precio Original">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Máximo</label>
            <input type="text" class="form-control" name="precio_max" placeholder="Precio Máximo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Mínimo</label>
            <input type="text" class="form-control" name="precio_min" placeholder="Precio Mínimo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Descripción</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Descripción">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fecha Fin</label>
            <input type="text" class="form-control" name="fecha_fin" placeholder="Fecha Fin">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Número de lugares</label>
            <input type="text" class="form-control" name="lugares" placeholder="Número de lugares">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Inserta tus imagenes</label>
            <input type="file" name="dir_img">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
    </body>
</html>