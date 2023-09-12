<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
    public function index(){
        
        $logins =  Login::orderBy('id', 'desc')->get();
       
       return view('logins.listarlogin', compact('logins'));
  
    }


    public function create(){
        return view('logins.create');
    }

    public function store(Request $request){
        
        $login=new Login();
        $login->name=$request->name;
        $login->descripcion=$request->descripcion;
        //ADJUNTAR EL PDF
        $file=$request->file("urlPdf");
        $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        $login->urlPdf = $nombreArchivo;
        $login->save();
       
        return redirect()->route('logins.index');
       // return view('cursos.show',compact('curso'));
     
      }


      public function show(Login $login){
        //$temp=Curso::find($curso);
       return view('logins.show',compact('login'));
     }

     public function destroy (Login $login){
      $login->delete();
      return redirect()->route('logins.index');
       
     }
}
