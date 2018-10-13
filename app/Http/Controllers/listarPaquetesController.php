<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\fotos;

use Illuminate\Http\Request;

class listarPaquetesController extends Controller
{
    //
    public function consultar(){
        $paquetes = Paquete::all();
        $paquetes = Paquete::get();

        $fotos = fotos::all();
        $fotos = fotos::get();

        return view('verViajes')->with('paquetes',$paquetes)
                ->with('fotos',$fotos);
    }
}
