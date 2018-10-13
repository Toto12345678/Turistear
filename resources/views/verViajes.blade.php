@extends('layouts.app')

@section('content')

 <div class="row">
        @foreach($paquetes as $paquete)
          <div class="col-md-4">
            <div class="card" style="width:100%;">
              @foreach ($fotos as $foto)
                @if ($paquete->id == $foto->id_paquete)
                  @if($foto->dir_img != "")
                    <img class="card-img-top" src="{{asset($foto->dir_img)}}" alt="Imagen de perfil" style="width:100%">
                  @else
                    <img class="card-img-top" src="{{asset('imagenes/avatar-default.png')}}" alt="Imagen de perfil" style="width:100%">
                  @endif
                @endif
              @endforeach
              <div class="card-body">
                <div class="card-text">
                <p style="text-align:left;margin-top:0;margin-bottom:0;"><strong style="text-align:right;">Viaja por: </strong>{{$paquete->nombre}}</p>
                <p style="text-align:left;margin-top:0;margin-bottom:0;"><strong style="text-align:right;">Lugares disponibles: </strong>{{$paquete->lugares}}</p>
                <p style="text-align:left;margin-top:0;margin-bottom:0;"><strong style="text-align:right;">Precio:(c/u) </strong>{{$paquete->precio_min}}</p>
                <p style="text-align:justify;margin-top:0;margin-bottom:0;"><strong style="text-align:left;">Tiempo restante: </strong>{{$paquete->created_at}}</p>
                </div>
                <form action="{{url('perfilTransporte')}}" method="get">
                  <input type="hidden" name="usuario" value="{{$paquete->id}}">
                  <input type="submit" class="btn boton" value="Ver perfil" style="background:#18d26e;width: 100%">
                  {{csrf_field()}}
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>

 @endsection