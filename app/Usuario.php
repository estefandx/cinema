<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table = 'Usuarios';
    protected $primaryKey = "usuario_id";
    /**
     * The attributes that are mass assignabldde.
     *
     * @var array
     */
    // Se deben llenar estos tambien "ciudad_id", "perfil_id"
    protected $fillable = [
        "nombre", "apellido", "email","tipo_documento_id","Tipo_usuario_id",
        "password", "telefono",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // relacion para saber el tipo de perfil del usuario
    public function Perfil()
    {
        return  $this->belongsTo(TipoUsuario::class);
    }

    public function Documento()
    {
        return  $this->belongsTo(TipoDocumento::class);
    }

    //reservas que a hecho el usuario
    public function Reservas(){
        return $this->belongsToMany(Funcion::class,'Usuario_funciones','usuario_id','funcion_id')
            ->withPivot('Numero_reservas');
    }
}
