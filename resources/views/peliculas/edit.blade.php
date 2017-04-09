@extends('layouts.master')

@section('contenido')

    <section id="editar_pelicula" class="container">
        <div class="row">
        <div class="col-lg-6">
        <form  role="form"  method="post" action="{{ url("/pelicula/{$pelicula->pelicula_id}") }}" enctype="multipart/form-data">
            {{ method_field('put') }}
            {{ csrf_field() }}

            <div class="form-group col-lg-7" >
                <input type="text" id="nombre" name="nombre" placeholder="nombre" class="form-control" value="{{$pelicula->nombre}}" required autofocus>

            </div>

            <div class="form-group col-lg-7">
                <input type="text" id="duracion" name="duracion" placeholder="duracion(minutos)" class="form-control" value="{{$pelicula->duracion}}" required autofocus>

            </div>



            <div class="form-group col-lg-7">
                <textarea type="text" id="sinopsis" name="sinopsis" placeholder="sinopsis" class="form-control"  required autofocus>{{$pelicula->sinopsis}}</textarea>

            </div>

            <div class="form-group col-lg-7">
                <input type="file" id="imagen" name="imagen"  class="form-control">

            </div>


            <div class="form-group col-lg-7">
                <select  class="form-control" name="genero_id" id="genero_id">

                    @foreach($generos as $genero)


                            <option  value="{{$genero->genero_id}}"
                            @if(isset($genero) && $genero->genero_id == $pelicula->genero_id) selected @endif>{{$genero->descripcion}}</option>


                    @endforeach
                </select>

            </div>


            <div class="form-group col-lg-7">
                <button class="btn btn-success btn-md btn-block">actualizar</button>
            </div>

        </form>
        </div> <!--col-6 -->
            <div class="col-lg-6">
                <img  src= "{{ url("/peliculas/{$pelicula->url_imagen}") }}" width="200" height="260">
            </div>
        </div> <!--row -->
    </section><!--/#registration-->

@endsection