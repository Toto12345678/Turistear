<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    protected $fillable = [
        'id_paquete', 'dir_img',
    ];
}
