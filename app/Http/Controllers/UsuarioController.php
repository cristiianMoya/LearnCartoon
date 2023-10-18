<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    
    public function index(){
        $usuarios =  usuario::orderBy('id', 'desc')->get();
       
        return view('usuarios.listarusuario', compact('usuarios'));
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
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
        $usuario->save();
        
        return redirect()->route('usuarios.index');
        // return view('usuarios.show', compact('usuario'));
    }
    public function show(usuario $usuario){
        //$temp=Curso::find($curso);
       return view('usuarios.show',compact('usuario'));
     }

     public function destroy (usuario $usuario){
      $usuario->delete();
      return redirect()->route('usuarios.index');
       
     }


    // public function show(){
    //     return view('usuarios.show');
    // }

}
