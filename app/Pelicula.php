<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pelicula extends Model
{
    use Notifiable;
    protected $table = 'Peliculas';
    protected $primaryKey = "pelicula_id";

    public function Genero()
    {
        return  $this->belongsTo(Genero::class);
    }

    public function Funciones()
    {
        return  $this->hasMany(Funcion::class,'pelicula_id');
    }
}
