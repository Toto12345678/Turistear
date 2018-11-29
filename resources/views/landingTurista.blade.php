@extends('layouts.app')

@section('content')
	<div class="bg-sky">
		<h3 class="title-top-content">Experiencias únicas instantes inolvidables</h3>
		<div class="top-content">
			<form class="form-inline"  action="{{ url('consultaRes') }}" method="get">
				<div class="form-group mx-sm-3 mb-2">
					<label for="inputPassword2" class="sr-only">Password</label>
					<input type="text" class="form-control" name="name" placeholder="Busca tu viaje inolvidable">
				</div>
				<button type="submit" class="btn btn-primary mb-2">Ir</button>
			</form>
		</div>
		<div class="bottom-content">
			<img class="world" src="{{asset('./svg/world.svg')}}" alt="mundo">
		</div>
	</div>
 @endsection