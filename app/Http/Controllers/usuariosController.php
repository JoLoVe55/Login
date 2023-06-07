<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class usuariosController extends Controller
{
    //
    public function tabla(){

        $usuarios = usuario::paginate();
        
        return view('usuario.usuarios', compact('usuarios'));
    }

    public function show($id){
        
       $usuarios = usuario::find($id);
       
        return view('usuario.show', compact('usuarios'));
    }
    
    public function store(request $request){

        $request->validate([
            'nombre'=>'required',
            'usuario'=>'required',
            'pass'=>'required',
            'email'=>'required'

            
        ]);

        $usuario= new usuario;

        $usuario->nombre = $request->nombre;
        $usuario->username = $request->usuario;
        $usuario->password = hash::make($request->pass);
        $usuario->email = $request->email;
        $usuario->save();

            return redirect()->route('show',$usuario);
    }

    public function edit(usuario $id){

        return view('usuario.editar', compact('id'));
        
        

    }
    public function update(request $request, usuario $id){
        $request->validate([
            'nombre'=>'required',
            'usuario'=>'required',
            'pass'=>'required',
            'email'=>'required'
        ]);

        $id->nombre = $request->nombre;
        $id->email = $request->email;
        $id->username = $request->usuario;
        $usuario->password = hash::make($request->pass);

        $id->save();

        return redirect()->route('show',$id);

    }

    public function create(){

        return view('usuario.crear');
    }

}

