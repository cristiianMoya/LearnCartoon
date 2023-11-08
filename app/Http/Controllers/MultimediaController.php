<?php

namespace App\Http\Controllers;

use App\Models\multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function index(){
        $multimedias = multimedia::orderBy('id', 'desc')->get();
        return view('multimedias.listarmultimedia', compact('multimedias'));
    }

    public function create(){
        return view('multimedias.create');
    }

    public function store(Request $request){
        $multimedia = new multimedia();
        $multimedia->url = $request->url;
        $multimedia->save();
    }

    public function show(multimedia $multimedia){
        return view('multimedias.show', compact('multimedia'));
    }

    public function destroy(multimedia $multimedia){
        $multimedia->delete();
        return redirect()->route('multimedia.index');
    }
}
