<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public function seccions(){
        return $this->belongsToMany(Seccion::class, 'usuario_seccion');
    }
    
   public function actividads(){
    return $this->hasMany('App\Models\actividad');
   }
}
