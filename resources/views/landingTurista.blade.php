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
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1935.112 354.402">
				<defs>
					<linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
					<stop offset="0" stop-color="#efc143"/>
					<stop offset="1" stop-color="#786122"/>
					</linearGradient>
				</defs>
				<g transform="translate(0 -729.258)">
					<path class="a2" d="M2134.848-83s862.569-552.891,1935.112,0" transform="translate(-2134.848 1163)"/>
					<path class="b2" d="M1309,864.391l76.461-84.222,18.705,54.96,76.256-112.918,13.339,15.723,13.26-24.677L1536,923.641Z" transform="translate(43 16)"/>
					<path class="b2" d="M570.741,867.449l-65.423-59.885v35.625H466.253l-95.244-35.625L342.043,920.475v50.874S516.949,1014.476,570.741,867.449Z" transform="matrix(0.978, 0.208, -0.208, 0.978, 767.515, -117.388)"/>
					<path class="b2" d="M1649.675,1018.36l77.975-50.274,13.14,102.9S1621.23,1091.819,1649.675,1018.36Z" transform="translate(-25 -11)"/>
					<path class="b2" d="M676.029,876.4,597.4,777.377l-54.791,65.235-25.1-44.5-17.79,31.019H446.665L391.119,966.21Z" transform="matrix(0.998, -0.07, 0.07, 0.998, -383.513, 107.344)"/>
					<line class="c2" y1="48" x2="68" transform="translate(438.5 896.5)"/>
					<line class="c2" y1="80" x2="64" transform="translate(344.5 968.5)"/>
					<line class="c2" y1="8" x2="3" transform="translate(320.5 1072.5)"/>
					<line class="d2" x2="57" y2="46" transform="translate(747.5 850.5)"/>
					<line class="d2" x2="34" y2="4" transform="translate(1021.5 968.5)"/>
					<line class="d2" x1="42" y2="23" transform="translate(1220.5 873.5)"/>
					<line class="d2" x1="85" y2="41" transform="translate(1102.5 913.5)"/>
					<line class="d2" x2="30" y2="7" transform="translate(930.5 954.5)"/>
					<line class="d2" x1="49" y1="34" transform="translate(835.5 920.5)"/>
				</g>
			</svg>
		</div>
	</div>
 @endsection