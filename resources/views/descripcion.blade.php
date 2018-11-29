@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="full-height">
        <div class="row">
            <div class="col-12">
                <p class="font-weight-bold title-lg pl-1">{{$paquete->nombre}}</p>
            </div>
            <div class="col-12 col-sm-6">
                <img class="package-img" src="{{asset($imagen->dir_img)}}" alt="Imagen del paquete">
            </div>
            <div class="col-12 col-sm-6">
                <p class="font-weight-bold mb-0">Salida:</p>
                <p>{{$paquete->ciudad_salida}}, {{$paquete->estado_salida}}</p>
                <p class="font-weight-bold mb-0">Llegada:</p>
                <p>{{$paquete->ciudad_llegada}}, {{$paquete->estado_llegada}}</p>
                <p class="font-weight-bold mb-0">Sobre el paquete:</p>
                <p class="text-truncate">{{$paquete->descripcion}}</p>
                <p><strong class="font-weight-bold">Precio: </strong>{{$paquete->precio_original}}</p>
                <p><strong class="font-weight-bold">Lugares disponibles: </strong>{{$paquete->lugares}}</p>
                <p class="text-danger"><strong class="font-weight-bold">Esta oferta acaba en: </strong>{{$paquete->fecha_fin}}</p>
                
                <form action="{{url('comprar')}}" method="get">
                    <input type="submit" class="btn btn-primary btn-block" value="Adquirir oferta">
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection