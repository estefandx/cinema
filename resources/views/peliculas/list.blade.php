@extends('layouts.master')

@section('contenido')



    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @foreach($peliculas as $pelicula)
                    <div class="row">
                        <div class="col-lg-4">
                            <img  src="{{$pelicula->url_imagen}}" alt="Generic placeholder image" width="200" height="260">
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-8">

                            <h2>{{$pelicula->nombre}}</h2>
                            <p>{{$pelicula->sinopsis}}</p>
                            <p><strong>Genero: </strong>{{$pelicula->Genero->descripcion}}</p>
                            <p><strong>Duración: </strong>{{$pelicula->duracion}} minutos</p>
                            <p><a class="btn btn-default" href="#" role="button">Ver Funciones &raquo;</a></p>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    @endforeach
                        <center>{!!  $peliculas->render() !!}</center>

                </div>
                <div class="col-lg-3">
                    <div class="block-section-body">
                        <strong>Sala 2D</strong><br>Lunes (no festivos): $ 9.300<br>Martes y Jueves (no festivos): $ 7.800<br>Miércoles (no festivos): $ 5.500<br>Viernes a Domingo y Festivos: $ 11.300<br>Niños menores de 12 años y adultos mayores de 60 años: $ 9.300<br>Personas en condición de discapacidad: $ 8.400<br><br><strong>Sala 2D</strong> - <em>Tarjeta Elite Gold</em><br>Todos los días (excepto Miércoles) antes de las 5:00 pm: $ 5.500<br>Todos los días (excepto Miércoles) después de las 5:00 pm: $ 6.400<br><br><strong>Sala 2D-XD</strong><br>Lunes (no festivos): $ 11.200<br>Martes y Jueves (no festivos): $ 9.700<br>Miércoles (no festivos): $ 7.400<br>Viernes a Domingo y Festivos: $ 13.200<br>Niños menores de 12 años y adultos mayores de 60 años: $ 11.200<br>Personas en condición de discapacidad: $ 9.800<br><br><strong>Sala 2D-XD</strong> - <em>Tarjeta Elite Gold</em><br>Todos los días (excepto Miércoles) antes de las 5:00 pm: $ 6.500<br>Todos los días (excepto Miércoles) después de las 5:00 pm: $ 9.200<br><br><strong>Sala 3D</strong><br>Lunes (no festivos): $ 13.300<br>Martes y Jueves (no festivos): $ 11.300<br>Miércoles (no festivos): $ 7.500<br>Viernes a Domingo y Festivos: $ 16.300<br>Niños menores de 12 años y adultos mayores de 60 años: $ 13.200<br>Personas en condición de discapacidad: $ 12.100<br><br><strong>Sala 3D</strong> - <em>Tarjeta Elite Gold</em><br>Todos los días (excepto Miércoles) antes de las 5:00 pm: $ 8.000<br>Todos los días (excepto Miércoles) después de las 5:00 pm: $ 10.600<br><br><strong>Sala 3D-XD</strong><br>Lunes (no festivos): $ 15.300<br>Martes y Jueves (no festivos): $ 12.800<br>Miércoles (no festivos): $ 9.000<br>Viernes a Domingo y Festivos: $ 18.300<br>Niños menores de 12 años y adultos mayores de 60 años: $ 15.300<br>Personas en condición de discapacidad: $ 13.600<br><br><strong>Sala 3D-XD</strong> - <em>Tarjeta Elite Gold</em><br>Todos los días (excepto Miércoles) antes de las 5:00 pm: $ 9.000<br>Todos los días (excepto Miércoles) después de las 5:00 pm: $ 12.300
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#recent-works-->
@endsection