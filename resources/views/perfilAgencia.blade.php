@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div >
            <li class="list-group-item no-border"><strong>Nombre: </strong> {{$user->name}}</li>
        </div>
        <div>
        <li class="list-group-item no-border"><strong>Email: </strong> {{$user->email}}</li>
        </div>
        <div>
        <li class="list-group-item no-border"><strong>Telefono: </strong> {{$agencia->telefono}}</li>
        </div>
        <div>
        <li class="list-group-item no-border"><strong>Direccion: </strong> {{$agencia->direccion}}</li>
        </div>
        <div>
        <li class="list-group-item no-border"><strong>Descripcion: </strong> {{$agencia->descripcion}}</li>
        </div>
        <div class="col-sm-6 center">
          <form action="{{url('modDatosAgencia')}}" method="get"  enctype="multipart/form-data">
              <input type="submit" class="form-control btn text-white" value="Editar Perfil" style="background:#18d26e;width:100%">
              {{ csrf_field() }}
          </form>
        </div>
    </div>
</div>

 @endsection