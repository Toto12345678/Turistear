<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    //
    protected $fillable = [
        'id_agencia','estado_llegada','ciudad_llegada','estado_salida','ciudad_salida','nombre','precio_original', 'precio_max','precio_min', 'descripcion', 'fecha_fin', 'lugares',
    ];
}
