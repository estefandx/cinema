<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sala extends Model
{
    use Notifiable;
    protected $table = 'Salas';
    protected $primaryKey = "sala_id";
    public     $timestamps = false;

    //relacion para  los usuarios de un tipo de perfil
    public function Salas()
    {
        return  $this->hasMany(Funcion::class,'sala_id');
    }
}
