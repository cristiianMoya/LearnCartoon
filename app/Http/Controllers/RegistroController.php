<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class RegistroController extends Controller
{
    public function create(){
        return view('auth.registro');
    }
    public function store(){
        $usuario=usuario::create(request(['nombre_usuario','correo','contraseña']));
        auth()->sesion($usuario);
        return redirect()->to('/');


    }
}
