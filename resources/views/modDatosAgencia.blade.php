@extends('layouts.app')

@section('content')
<h5 class="pl-2 pb-3">Edita tu perfil</h5>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 266" preserveAspectRatio="xMidYMid meet", width="150" height="150">
                <g transform="translate(-778 -154)">
                    <g class="a" transform="translate(778 154)">
                        <circle class="d" cx="120" cy="120" r="120"/>
                        <circle class="e" cx="120" cy="120" r="119.5"/>
                    </g>
                    <g class="b" transform="translate(825 189)">
                        <circle class="d" cx="73.5" cy="73.5" r="73.5"/>
                        <circle class="e" cx="73.5" cy="73.5" r="73"/>
                    </g>
                    <rect class="c" width="120" height="98" rx="40" transform="translate(837 322)"/>
                </g>
            </svg>
            <br>
            <h5 class="black">Toto Gómez</h5>
            <p>toto@yopmail.com</p>
        </div>
        <div class="col-md-8">
            <form class="" action="{{url('modificarDatosAgencia')}}" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text-black"><span class="fas fa-phone"></span><b> Teléfono:</b></label>
                    <input type="number" name="telefono" class="form-control">
                </div>

                <div class="form-group">
                    <label for="text-black"><span class="fas fa-camera"></span><b> Foto de perfil:</b></label>
                    <input type="file" name="foto_perfil" class="form-control">
                </div>

                <div class="form-group">
                    <label for="text-black"><span class="fas fa-map-marker-alt"></span><b> Direccion:</b></label>
                    <input type="text" name="direccion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="text-black"><b>Descripcion:</b></label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="text-black"><span class="far fa-credit-card"></span><b> Número de cuenta:</b></label>
                    <input type="number" name="num_cuenta" class="form-control">
                </div>

                    <input type="submit" class="form-control" value="Guardar Cambios">
            {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
 @endsection