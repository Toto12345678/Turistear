@extends('layouts.app')

@section('content')
    <h4 class="text-secondary">Nuevo paquete turístico</h4>
    <div class="container">
        <form action="{{ url('registroPaquete') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1" class="text-primary">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-plane-departure"></span> Estado de Salida</label>
                    <input type="text" class="form-control" name="estado_salida" placeholder="Estado de Salida">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-plane-departure"></span> Ciudad de salida</label>
                    <input type="text" class="form-control" name="ciudad_salida" placeholder="Ciudad de salida">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-plane-arrival"></span> Estado de llegada</label>
                    <input type="text" class="form-control" name="estado_llegada" placeholder="Estado de llegada">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-plane-arrival"></span> Ciudad de llegada</label>
                    <input type="text" class="form-control" name="ciudad_llegada" placeholder="Ciudad de llegada">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-dollar-sign"></span> Precio Original</label>
                    <input type="number" class="form-control" name="precio_original" placeholder="Precio Original">
                </div>

                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-long-arrow-alt-up"></span> Precio Máximo</label>
                    <input type="number" class="form-control" name="precio_max" placeholder="Precio Máximo">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-long-arrow-alt-down"></span> Precio Mínimo</label>
                    <input type="number" class="form-control" name="precio_min" placeholder="Precio Mínimo">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1" class="text-primary">Descripción</label>
                    <textarea type="text" class="form-control" name="descripcion" placeholder="Descripción"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label class="text-primary"><span class="far fa-images"></span> Inserta tus imagenes</label>
                    <input type="file" name="img" class="form-control-file">
                    <small class="text-muted">Máximo 5 imágenes</small>
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="far fa-calendar-alt"></span> Fecha Fin</label>
                    <input type="date" class="form-control" name="fecha_fin" placeholder="Fecha Fin">
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlInput1" class="text-primary"><span class="fas fa-chair"></span> Número de lugares</label>
                    <input type="number" class="form-control" name="lugares" placeholder="Número de lugares">
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 mx-auto">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Enviar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection