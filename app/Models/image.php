<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = "images";
    protected $fillable = ["nombre_imagen"];
    use HasFactory;
    // relacion polimorfica
    public function imagetable(){
        return $this->morphTo();
    }
    // relacion de muchos a uno polimorfica inversa
    public function actividad(){
        return $this->belongsTo('App\Models\actividad');
    }
    
    
}
