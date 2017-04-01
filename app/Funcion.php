<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Funcion extends Model
{
    use Notifiable;
    protected $table = 'Funciones';
    protected $primaryKey = "Funcion_id";

    // relacion para saber  la pelicula de la funcion
    public function Pelicula()
    {
        return  $this->belongsTo(Pelicula::class);
    }


    // relacion para saber  la sala de la funcion
    public function Sala()
    {
        return  $this->belongsTo(Sala::class);
    }

    //usuaros que an realizado reserva en la funcion
    public function Usuarios(){
        return $this->belongsToMany(Funcion::class,'Usuario_funciones','usuario_id','funcion_id')
            ->withPivot('Numero_reservas');
    }
}
