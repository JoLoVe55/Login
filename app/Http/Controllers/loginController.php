<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class loginController extends Controller
{
    
    public function index(request $usuario){


        return view('login.login');
    }
    

    public function signin(){

        return view('login.signin');
    }

    public function register(request $request){
        
        $usuario= new usuario;

        $request->validate([
            'nombre'=>'required',
            'usuario'=>'required',
            'pass'=>'required',
            'confirmacion'=>'required|same:pass',
            'email'=>'required'

            
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->username = $request->usuario;
        $usuario->password = hash::make($request->pass);
        $usuario->email = $request->email;

        $usuario->save();
        Auth::login($usuario);
        

            return redirect()->route('show',$usuario);
    }

    public function logout(request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regeneratetoken();

        return redirect()->route('login.login');


    }

public function login(request $request){

    $request->validate([
        'usuario'=>'required',
        'contrasena'=>'required'      
    ]);

        $credentials=[
            'username'=> $request->usuario,
            'password'=> $request->contrasena
        ];
        
        $remember = ($request->has('remenber') ? true : false);

       if(Auth::attempt($credentials,$remember)){
        $request->session()->regenerate();

        return redirect()->intended(route('usuarios'));

       }else{
           return redirect()->route('login.login');
       }
       



    }



}
