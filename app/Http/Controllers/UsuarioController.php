<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    
    public function index(){
        return view('usuarios.index');
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $usuario = new usuario();
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contraseña;
        $usuario->rol = $request->rol;

        $usuario->save();
        return view('usuarios.show', compact('usuario'));
    }

    // public function show(){
    //     return view('usuarios.show');
    // }

}
