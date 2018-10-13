@extends('layouts.app')

@section('content')

<div class="container">
    <div class="main" style="width:100%">
        <h1> {{$paquete->nombre}}</h1>
        <img class="card-img-top" src="{{asset($imagen->dir_img)}}" alt="Imagen de perfil" style="width:100%">
        <h3>Hora de salida:</h3>    
        <h2><b>{{$paquete->fecha_fin}}</b></h2>
        <h2><b>${{$paquete->precio_min}}</b></h2>
        <h3><b>Acerca del tour:</b></h3>   
        <h2>{{$paquete->descripcion}}</h2>
        <form action="{{url('comprar')}}" method="get">
            <input type="hidden" name="lugares" value="{{$paquete->lugares}}">
            <input type="hidden" name="id" value="{{$paquete->id}}">
            <input type="hidden" name="precio" value="{{$paquete->precio_min}}">
            <input type="submit" class="btn boton" value="Adquirir oferta" style="background:#18d26e;width: 100%">
            {{csrf_field()}}
        </form>
    </div>
</div>

@endsection