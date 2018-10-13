<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\fotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class paqueteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
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
       $nameImgPerfil = $_FILES['img']['name'];
       $perfilName= $idPack->id.$nameImgPerfil;
       $rutaImg= 'imgAgencia/'.$perfilName;
       Image::make($request->file('img'))
       ->resize(1080,720)
       ->save($rutaImg);
       fotos::create([
            'id_paquete' => $idPack->id,
            'dir_img' => $rutaImg, 
       ]);

      
        


      
    }
}
