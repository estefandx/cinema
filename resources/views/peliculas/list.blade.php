@extends('layouts.admin')

@section('contenido_admin')




    <section id="recent-works">
        <div class="container">
            <p><a class="btn btn-info" href="{{ url("/pelicula/create")}}" role="button">Crear pelicula </a></p>
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>nombre</th>
                    <th>sinopsis</th>
                    <th>genero</th>
                    <th>duracion</th>
                    <th>imagen</th>
                    <th>acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($peliculas as $pelicula)
                <tr>
                    <td>{{$pelicula->nombre}}</td>
                    <td>{{$pelicula->sinopsis}}</td>
                    <td>{{$pelicula->Genero->descripcion}}</td>
                    <td>{{$pelicula->duracion}}</td>
                    <td><img  src= "peliculas/{{$pelicula->url_imagen}}" alt="Generic placeholder image" width="200" height="260"></td>
                    <td>
                        <p><a class="btn btn-default" href="{{ url("/pelicula/{$pelicula->pelicula_id}/edit")}}" role="button">editar </a></p>
                        <form  role="form"  method="post" action="{{ url("/pelicula/{$pelicula->pelicula_id}") }}">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}

                            <input class="btn btn-danger" type="submit" value="eliminar" />
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <center>{!!  $peliculas->render() !!}</center>
        </div> <!-- div del conteiner -->
    </section><!--/#recent-works-->
@endsection