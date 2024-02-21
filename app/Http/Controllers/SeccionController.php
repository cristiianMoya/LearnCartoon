<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seccion;
use App\Models\multimedia;

class SeccionController extends Controller
{
   
    
        
        public function index(){
            $multimedia = multimedia::all();
            return view('seccions.home', compact('multimedia'));
        }
    
        public function create(){
            return view('seccions.create');
        }
    
        public function store(Request $request){
            $seccion = new seccion();
            $seccion->nombre_seccion= $request->nombre_seccion;
            
            // $file=$request->file("urlPdf");
            // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
            // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
            // $usuario->urlPdf = $nombreArchivo;
            $seccion->save();
            
            return redirect()->route('seccions.index');
            // return view('usuarios.show', compact('usuario'));
        }
        public function show(seccion $seccion){
            $seccions =  seccion::orderBy('id', 'desc')->get();
           
            return view('seccions.listarseccion', compact('seccions'));
         }
    
         public function destroy (seccion $seccion){
          $seccion->delete();
          return redirect()->route('seccions.index');
           
         }
    
    
        // public function show(){
        //     return view('usuarios.show');
        // }
    
    }

