@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form class="" action="{{url('crearDatosAgencia')}}" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="text-black"><b>Teléfono:</b></label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="form-group">
            <label for="text-black"><b>Foto de perfil:</b></label>
            <input type="file" name="foto_perfil" class="form-control">
        </div>

        <div class="form-group">
            <label for="text-black"><b>Direccion:</b></label>
            <input type="text" name="direccion" class="form-control">
        </div>

        <div class="form-group">
            <label for="text-black"><b>Descripcion:</b></label>
            <input type="text" name="descripcion" class="form-control">
        </div>

        <div class="form-group">
            <label for="text-black"><b>Número de cuenta:</b></label>
            <input type="text" name="num_cuenta" class="form-control">
        </div>

               <input type="submit" class="form-control" value="Guardar Cambios">
    {{ csrf_field() }}
    </form>
    </div>
</div>
 @endsection