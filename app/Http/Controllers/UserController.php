<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htpp\Requests;
use Illuminate\Support\facades\Redirect;
use DB;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Registro(UserRequest $request){
        //(dd($request);
        $reg= new User;
        $reg->Nombre=$request->get('Nombre');
        $reg->SNombre=$request->get('SNombre');
        $reg->Apellido=$request->get('Apellido');
        $reg->SApellido=$request->get('SApellido');
        $reg->FechaNacimiento=$request->get('FechaNacimiento');
        $reg->Correo=$request->get('Correo');
        $reg->Documento=$request->get('Documento');
        $reg->IdDocumento=$request->get('IdDocumento');
        $reg->Contrasena = Hash::make($request->get('Contrasena'));
        $reg->save();



        return view('login');
    }
    //
}
