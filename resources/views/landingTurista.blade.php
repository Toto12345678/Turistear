@extends('layouts.app')

@section('content')
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">Viajes ahora
							</h1>
							<p class="pt-10 pb-10">
							Experiencias unicas, momentos Inolvidables
							</p>
						</div>
                        <div class="col-lg-12">
                        <form class="" action="{{url('verPaquetes')}}" method="post"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <button type="submit" class="genric-btn primary" style="float: right;">¡Empieza Ahora!</button>
                        </form>
					</div>
					</div>
                    
				</div>
			</section>	
 @endsection