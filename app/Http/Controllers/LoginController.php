<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(loginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retireveByCredentials($credentials);

        Auth::login($user);

        return $this->Authenticated($request, $user);
    }

    public function Authenticated(Request $request, $user){
        return view('authentic');
    }
}
