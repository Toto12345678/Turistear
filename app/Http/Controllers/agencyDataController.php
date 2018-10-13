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
        $id=Auth::user()->id;
        $nameImgPerfil = $_FILES['foto_perfil']['name'];
        $perfilName= $id.$nameImgPerfil;
        $rutaPerfil= 'imgAgencia/'.$perfilName;
        Image::make($request->file('foto_perfil'))
        ->resize(1080,720)
        ->save($rutaPerfil);
        agencyData::create([
            'id_user' =>$id,
            'telefono' =>$request->telefono,
            'foto_perfil' =>$rutaPerfil,
            'direccion' => $request->direccion,
            'descripcion' => $request->descripcion,
            'num_cuenta'=>$request->num_cuenta,

        ]);
    }
}