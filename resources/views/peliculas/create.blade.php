@extends('layouts.master')

@section('contenido')

    <section id="registration" class="container">
        <form  role="form"  method="POST" action="{{ url('/pelicula') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

                <div class="form-group col-lg-7" >
                    <input type="text" id="nombre" name="nombre" placeholder="nombre" class="form-control" value="{{ old('nombre') }}" required autofocus>

                </div>

                <div class="form-group col-lg-7">
                    <input type="text" id="duracion" name="duracion" placeholder="duracion(minutos)" class="form-control" value="{{ old('duracion') }}" required autofocus>

                </div>



                <div class="form-group col-lg-7">
                    <textarea type="text" id="sinopsis" name="sinopsis" placeholder="sinopsis" class="form-control" value="{{ old('sinopsis') }}" required autofocus></textarea>

                </div>

            <div class="form-group col-lg-7">
                <input type="file" id="imagen" name="imagen" placeholder="duracion(minutos)" class="form-control"  required autofocus>

            </div>


                <div class="form-group col-lg-7">
                    <select  class="form-control" name="genero_id" id="genero_id">
                        @foreach($generos as $genero)
                        <option value="{{$genero->genero_id}}">{{$genero->descripcion}}</option>
                        @endforeach
                    </select>

                </div>






                <div class="form-group col-lg-7">
                    <button class="btn btn-success btn-md btn-block">Registrarme</button>
                </div>

        </form>
    </section><!--/#registration-->

@endsection