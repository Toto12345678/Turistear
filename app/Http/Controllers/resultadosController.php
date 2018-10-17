<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\fotos;

use Illuminate\Http\Request;

class resultadosController extends Controller
{

    public function buscar(Request $request){
        $paquete = Paquete::where('nombre',$request->name)->first();
        if($paquete){
        $fotos = fotos::all();
        $fotos = fotos::get();

        foreach ($fotos as $foto) {
            if($foto->id_paquete == $paquete->id){
                $imagen = $foto;
            }
        }

        return view('resultados')->with('paquete',$paquete)
                ->with('foto',$imagen);
        }else{
            return view('landingTurista'); 
        }

    }
}