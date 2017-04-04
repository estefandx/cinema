<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TipoDocumento extends Model
{
    use Notifiable;
    protected $table = 'Tipo_documento';
    protected $primaryKey = "tipo_documento_id";
    public     $timestamps = false;
}
