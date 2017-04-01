<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TipoUsuario extends Model
{
    use Notifiable;
    protected $table = 'Tipo_usuario';
    protected $primaryKey = "tipo_usuario_id";


    //relacion para  los usuarios de un tipo de perfil
    public function Usuarios()
    {
        return  $this->hasMany(Usuario::class,'Tipo_usuario_id');
    }
}
