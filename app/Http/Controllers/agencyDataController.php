<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

use App\agencyData;
class agencyDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function crear(Request $request)
    {
        $file = $request->file('foto_perfil');
        agencyData::create([
            'id_user' =>Auth::user()->id,
            'telefono' =>$request->telefono,
            'foto_perfil' =>$file->getClientOriginalName(),
            'direccion' => $request->direccion,
            'descripcion' => $request->descripcion,
            'num_cuenta'=>$request->num_cuenta,

        ]);
    }
}