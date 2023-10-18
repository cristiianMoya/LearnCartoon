<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multimedia;

class MultimediaController extends Controller
{
    public function index(){
        $multimedias =  multimedia::orderBy('id', 'desc')->get();
       
        return view('multimedias.listarmultimedia', compact('multimedias'));
    }

    public function create(){
        return view('multimedias.create');
    }

    public function store(Request $request){
        $multimedia = new multimedia();
        $multimedia->url= $request->url;
        
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
        $multimedia->save();
        
        return redirect()->route('multimedias.index');
        // return view('usuarios.show', compact('usuario'));
    }
    public function show(multimedia $multimedia){
        //$temp=Curso::find($curso);
       return view('multimedias.show',compact('multimedia'));
     }

     public function destroy (multimedia $multimedia){
      $multimedia->delete();
      return redirect()->route('multimedias.index');
       
     }


    // public function show(){
    //     return view('usuarios.show');
    // }
}
