<?php
namespace App\Http\Controllers;

use App\agencyData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class perfilController extends Controller{
   
	public function __construct(){
		$this->middleware('auth');
	}

	function getPerfil(){
        $user=Auth::user();
        $agencia= agencyData::find($user->id);
        return view('perfilAgencia')->with('user', $user)->with('agencia', $agencia);
	}

}