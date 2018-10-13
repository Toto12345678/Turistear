<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agencyData extends Model
{
    protected $fillable = [
        'id_user','telefono','foto_perfil','direccion','descripcion','num_cuenta',
    ];
}
