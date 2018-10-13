@extends('layouts.app')

@section('content')


    
<div class="container col-md-4 pt-3">
    <div class="card">
    <div class="card-header">
        Datos de pago
    </div>
    <div class="card-body" style="align-items:center;">
        <h5 class="card-title">Viaje a {{$datosPack->ciudad_llegada}}</h5>
        <p  class="card-text">Nombre: {{$datos->nombre}} {{$datos->apellidos}} </p>
        <p class="card-text">Correo electrónico: {{$datos->correo}}</p>
        <p class="card-text">Teléfono: {{$datos->telefono}}</p>
        <p class="card-text">Número de boletos a comprar: {{$datos->opcion}}</p>
        <p class="card-text">Precio de cada boleto: {{$datosPack->precio_min}}</p>
        <p class="card-text">Punto de encuentro: {{$datosPack->ciudad_salida}}, {{$datosPack->estado_salida}}</p>
        <p class="card-text">Descripción: {{$datosPack->descripcion}}</p>
        <p class="card-text">Total a pagar: {{$pago}}</p>
        <a href="#" class="btn btn-primary col-xl-8">Generar recibo</a>
    </div>   
    </div>
</div>

@endsection