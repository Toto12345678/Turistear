@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center">{{ __('Empieza a ofertar tus paquetes') }}</h4>
            <div class="card-img-top text-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 266" preserveAspectRatio="xMidYMid meet", width="150" height="150">
                    <g transform="translate(-778 -154)">
                        <g class="a" transform="translate(778 154)">
                            <circle class="d" cx="120" cy="120" r="120"/>
                            <circle class="e" cx="120" cy="120" r="119.5"/>
                        </g>
                        <g class="b" transform="translate(825 189)">
                            <circle class="d" cx="73.5" cy="73.5" r="73.5"/>
                            <circle class="e" cx="73.5" cy="73.5" r="73"/>
                        </g>
                        <rect class="c" width="120" height="98" rx="40" transform="translate(837 322)"/>
                    </g>
                </svg>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mb-0">
                    <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nombre') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" placeholder="Nombre de usuario" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group mb-0">
                    <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Correo Electrónico') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" placeholder="toto@yopmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group mb-0">
                    <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Contraseña') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-12 col-form-label text-md-left">{{ __('Confirmar Contraseña') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" placeholder="Confirme Contraseña" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
