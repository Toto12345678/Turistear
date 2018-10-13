@extends('layouts.app')

@section('content')

<form class="" action="{{url('verPaquetes')}}" method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <button type="submit">¡Empieza Ahora!</button>
</form>

 @endsection