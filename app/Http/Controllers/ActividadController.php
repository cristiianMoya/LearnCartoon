<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actividad;

class ActividadController extends Controller
{
    public function index(){
        $actividads =  actividad::orderBy('id', 'desc')->get();
       
        return view('actividads.listaractividad', compact('actividads'));
    }

    public function create(){
        return view('actividads.create');
    }

    public function store(Request $request){
        $actividad = new actividad();
        $actividad->nombre_actividad= $request->nombre_actividad;
        
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
        $actividad->save();
        
        return redirect()->route('actividads.index');
        // return view('usuarios.show', compact('usuario'));
    }
    public function show(actividad $actividad){
        //$temp=Curso::find($curso);
       return view('actividads.show',compact('actividad'));
     }

     public function destroy (actividad $actividad){
      $actividad->delete();
      return redirect()->route('actividads.index');
       
     }


    // public function show(){
    //     return view('usuarios.show');
    // }
}
