@extends('layouts.app')

@section('content')
    <div>
    <div class=row>
        <div class="col-md-12 text-center">
            <h1>Compra tu paquete</h1>
        </div>
    </div>
        <form action="{{ url('comprarpaquete') }}" method="get">
        {{ csrf_field() }}
            <div class="col-xs-4 col-lg-6 centrar-form">
                <label>Número de boletos</label>
                <select class="form-control" name="opcion">
                @for ($i = 1; $i <= $paquete->lugares; $i++)
                    <option>
                        {{$i}}
                    </option>
                @endfor
                </select>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label >Nombre(s)</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <label >Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label >Correo electronico</label>
                        <input type="email" class="form-control" name="correo" placeholder="Correo electronico">
                    </div>

                    <div class="col">
                        <label for="exampleFormControlInput1">Telefono</label>
                        <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                    <label >Numero de tarjeta</label>
                    <input type="number" class="form-control" name="tarjeta" placeholder="Numero de tarjeta">
                </div>

                <div class="col">
                    <label for="exampleFormControlInput1">MM/AA</label>
                    <input type="text" class="form-control" name="mmaa" placeholder="MM/AA">
                </div>
                </div>
                <div class="col-xs-4 col-lg-6 centrar-form">
                    <label>CVV</label>
                    <input type="number" class="form-control" name="cvv" placeholder="CVV">
                </div> 
                <br>
                <div  class="col-xs-4 col-lg-4 centrar-form">
                    <input type="hidden" name="id" value="{{$paquete->id}}">   
                    <button type="submit" class="btn btn-primary col-md-6 col-lg-6 centrar-form" >Comprar</button>
                </div>
            </div>
        </form>
    </div>

@endsection('content')