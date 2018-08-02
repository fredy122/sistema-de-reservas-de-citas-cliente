<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\PanelSaveRequest;
use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function create()
    {
        return view ('accesos.frmRegister');
    }
    public function save(PanelSaveRequest $request)
    {

    	$user = new User();
    	$user->nombre=$request->Nombre;
    	$user->email=$request->Email;
    	$user->password=bcrypt($request->Contraseña);
    	$user->save();
    	return redirect('login')->with('message','save');
    }
}
