<?php

namespace App\Http\Controllers;
use App\Paquete;
use App\fotos;

use Illuminate\Http\Request;

class listarPaquetesController extends Controller
{

    public function consultar(){
        $paquetes = Paquete::all();
        $paquetes = Paquete::get();

        $fotos = fotos::all();
        $fotos = fotos::get();

        return view('verViajes')->with('paquetes',$paquetes)
                ->with('fotos',$fotos);
    }

    public function describirPaquete(Request $request){
        $paquetes = Paquete::all();
        $paquetes = Paquete::get();

        $fotos = fotos::all();
        $fotos = fotos::get();

        foreach ($paquetes as $paquete) {
            if($paquete->id == $request->usuario){
                $pack=$paquete;
                foreach ($fotos as $foto) {
                    if($foto->id_paquete == $request->usuario)
                    $imagen = $foto;
                }
            }
        }


        return view('descripcion')->with('paquete',$pack)
              ->with('imagen',$imagen);
    }

    public function adquirirPaquete(Request $request){
        
        $pack = $request;
        
        return view('formularioCompras')->with('paquete',$pack);
    }

    public function comprarPaquete(Request $request){
        $paquetes = Paquete::all();
        $paquetes = Paquete::get();

        foreach ($paquetes as $paquete) {
            if($paquete->id == $request->id){
                $pack=$paquete;
            }
        }

        $totalPago = $pack->precio_min * $request->opcion;



        $user = Paquete::find($request->id);
        $user->lugares = ($pack->lugares) - ($request->opcion);
        $user->save();
        return view('vistaBoleto')->with('datos',$request)
             ->with('pago',$totalPago)
             ->with('datosPack',$pack);

    }



}
