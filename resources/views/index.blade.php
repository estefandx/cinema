@extends('layouts.master')

@section('contenido')

    <div class="header">

    <div class="header-info">
        <h1>BIG HERO 6</h1>


    @if (Auth::guest())
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
                    <button class="btn btn-success btn-md btn-block">Iniciar</button>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Olvidates tu Password?
                    </a><br>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                        registrarse
                    </a>
                </div>
            </fieldset>
        </form>
        <li><a href="{{ url('/login') }}">Iniciar sesion</a></li>
        <li><a href="{{ url('/register') }}">Registrarme</a></li>
    @else
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Salir
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->nombre }} <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li><a href="blog-item.html">Editar perfil</a></li>

            </ul>
        </li>

    @endif


    </div>
    </div>
@endsection