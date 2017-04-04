<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Genero extends Model
{
    use Notifiable;
    protected $table = 'Generos';
    protected $primaryKey = "genero_id";
    public     $timestamps = false;

  //relacion para  los usuarios de un tipo de perfil
    public function Peliculas()
    {
        return  $this->hasMany(Pelicula::class,'pelicula_id');
    }
}
