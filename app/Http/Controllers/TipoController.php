<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo;

class TipoController extends Controller
{
    public function index(){
        $tipos =  tipo::orderBy('id', 'desc')->get();
       
        return view('tipos.listartipo', compact('tipos'));
    }

    public function create(){
        return view('tipos.create');
    }

    public function store(Request $request){
        $tipo = new tipo();
        $tipo->nombre_tipo= $request->nombre_tipo;
        $tipo->url= $request->url;
        
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
        $tipo->save();
        
        return redirect()->route('tipos.index');
        // return view('usuarios.show', compact('usuario'));
    }
    public function show(tipo $tipo){
        //$temp=Curso::find($curso);
       return view('tipos.show',compact('tipo'));
     }

     public function destroy (tipo $tipo){
      $tipo->delete();
      return redirect()->route('tipos.index');
       
     }


    // public function show(){
    //     return view('usuarios.show');
    // }
}
