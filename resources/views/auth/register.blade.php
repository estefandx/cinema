@extends('layouts.master')

@section('contenido')

    <section id="registration" class="container">
        <form class="center" role="form"  method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="nombre" name="nombre" placeholder="nombre" class="form-control" value="{{ old('nombre') }}" required autofocus>
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="text" id="apellido" name="apellido" placeholder="apellido" class="form-control" value="{{ old('apellido') }}" required autofocus>
                    @if ($errors->has('apellido'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="text" id="telefono" name="telefono" placeholder="telefono" class="form-control" value="{{ old('telefono') }}" required autofocus>
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="password" class="form-control"  required autofocus>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="confirmar password" class="form-control"  required autofocus>

                </div>




                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Register</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

@endsection