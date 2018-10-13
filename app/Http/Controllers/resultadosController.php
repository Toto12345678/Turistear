<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\fotos;

use Illuminate\Http\Request;

class resultadosController extends Controller
{

    public function buscar(Request $request){
        $paquetes = Paquete::all();
        $paquetes = Paquete::get();


        foreach ($paquetes as $paquete) {
                if($paquete->nombre == $request->name){
                    $pack=$paquete;
                }
        }

        $fotos = fotos::all();
        $fotos = fotos::get();

        foreach ($fotos as $foto) {
            if($foto->id_paquete == $pack->id){
                $imagen = $foto;
            }
        }
        
        return view('resultados')->with('paquete',$pack)
                ->with('foto',$imagen);

    }
}