@extends('layouts.master')

@section('contenido')

    <section id="registration" class="container">
        <form class="center" role="form"  method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <fieldset class="registration-form">






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
                    <button class="btn btn-success btn-md btn-block">Register</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

@endsection