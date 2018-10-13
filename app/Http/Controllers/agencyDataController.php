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
        return view('landingTurista');
    }

    public function modificar(Request $request)
    {
        $id=Auth::user()->id;
        $agencia= agencyData::find($id);
        if($request->telefono!="")
            $agencia->telefono = $request->telefono;
        else
            $agencia->telefono = $agencia->telefono;
        if($request->foto_perfil!="") {  
            $nameImgPerfil = $_FILES['foto_perfil']['name'];
            $perfilName= $id.$nameImgPerfil;
            $rutaPerfil= 'imgAgencia/'.$perfilName;
            Image::make($request->file('foto_perfil'))
            ->resize(1080,720)
            ->save($rutaPerfil);
            $agencia->foto_perfil = $rutaPerfil;
        }else
            $agencia->foto_perfil = $agencia->foto_perfil;
        if($request->direccion!="")   
            $agencia->direccion = $request->direccion;
        else
            $agencia->direccion = $agencia->direccion;
        if($request->descripcion!="")   
            $agencia->descripcion = $request->descripcion;
        else
            $agencia->descripcion = $agencia->descripcion;
        if($request->num_cuenta!="")   
            $agencia->num_cuenta= $request->num_cuenta;
        else
            $agencia->num_cuenta= $agencia->num_cuenta;

            $agencia->save();

            $user=Auth::user();
            $agencia= agencyData::find($user->id);
            return view('perfilAgencia')->with('user', $user)->with('agencia', $agencia);

    }
}