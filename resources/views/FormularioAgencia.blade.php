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
        <form action="{{ action('formularioAgenciaController@prueba') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Estado de llegada</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Estado de llegada">
            </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ciudad de llegada</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ciudad de llegada">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Estado de Salida</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Estado de Salida">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ciudad de salida</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ciudad de salida">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Original</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Precio Original">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Máximo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Precio Máximo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Precio Mínimo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Precio Mínimo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Descripción</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Descripción">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fecha Fin</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Fecha Fin">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Número de lugares</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Número de lugares">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </body>
</html>