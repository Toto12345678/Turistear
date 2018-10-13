@extends('layouts.app')

@section('content')

<div class="container-fluid full-height">
    <div class="row">
        <div class="col-md-4 text-center pt-4">
            <div class="d-flex justify-content-center">
                <img class="img-thumbnail img-usuario" src="{{asset($agencia->foto_perfil)}}" alt="Card image cap">
            </div>
            <br>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre: </strong>{{$user->name}}</li>
                <li class="list-group-item"><strong>Correo: </strong>{{$user->email}}</li>
                <li class="list-group-item"><strong>Tel: </strong>{{$agencia->telefono}}</li>
                <li class="list-group-item"><strong>Dirección: </strong>{{$agencia->direccion}}</li>
                <li class="list-group-item"><strong>Descripción: </strong>{{$agencia->descripcion}}</li>
                <li class="list-group-item">
                    <form action="{{url('modDatosAgencia')}}" method="get"  enctype="multipart/form-data">
                        <input type="submit" class="form-control btn text-white" value="Editar Perfil" style="background:#18d26e;width:100%">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-md-8 card-columns pt-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 1</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 2</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 3</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 4</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 5</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/img/banner-bg.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paquete 6</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection