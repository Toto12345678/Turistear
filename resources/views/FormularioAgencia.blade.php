@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('registroPaquete') }}" method="post"  enctype="multipart/form-data">
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
            <label>Inserta tus imagenes</label>
            <input type="file" name="img" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fecha Fin</label>
            <input type="text" class="form-control" name="fecha_fin" placeholder="Fecha Fin">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Número de lugares</label>
            <input type="text" class="form-control" name="lugares" placeholder="Número de lugares">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection