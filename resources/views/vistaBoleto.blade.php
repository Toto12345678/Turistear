@extends('layouts.app')

@section('content')

<div class="container">
    <p>Nombre: {{$datos->nombre}} {{$datos->apellidos}} </p>
    <p>Correo electrónico: {{$datos->correo}}</p>
    <p>Teléfono: {{$datos->telefono}}</p>
    <p>Número de boletos a comprar: {{$datos->opcion}}</p>
    <p>Precio de cada boleto: {{$datosPack->precio_min}}</p>
    <p>Punto de encuentro: {{$datosPack->ciudad_salida}}, {{$datosPack->estado_salida}}</p>
    <p>Descripción: {{$datosPack->descripcion}}</p>
    <p>Total a pagar: {{$pago}}</p>
    
</div>

@endsection