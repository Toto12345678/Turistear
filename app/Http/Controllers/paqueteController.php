<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\img;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class paqueteController extends Controller
{
    //
    public function crear(Request $request)
    {
      $idPack = Paquete::create([
        'id_agencia' => Auth::user()->id,
        'estado_llegada' =>$request->estado_llegada,
        'ciudad_llegada' => $request->ciudad_llegada,
        'estado_salida' => $request->estado_salida,
        'ciudad_salida' => $request->ciudad_salida,
        'nombre' => $request->nombre,
        'precio_original' => $request->precio_original,
        'precio_max' => $request->precio_max,
        'precio_min' => $request->precio_min,
        'descripcion'=> $request ->descripcion,
        'fecha_fin' => $request ->fecha_fin,
        'lugares' => $request ->lugares,
       ]);

       $nameImgPerfil = $_FILES['dir_img']['name'];
       $perfilName=  $idPack->id.$nameImgPerfil;
       $rutaPerfil= 'imgPacks/'.$perfilName;
       Image::make($request->file('foto_perfil'))
       ->resize(1080,720)
       ->save($rutaPerfil);
       img::create([
            'id_paquete' => $idPack->id,
            'dir_img' => $rutaPerfil, 
       ]);

      
        


      
    }
}
