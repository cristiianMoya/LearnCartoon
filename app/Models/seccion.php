<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    use HasFactory;
    // relacion de uno a muchos
    public function usuarios (){
        return $this->belongsToMany(Usuario::class, 'usuario_seccion');

    }
   
    public function temas(){
        return $this->hasMany('App\Models\tema');
    }
    public function actividads(){
        return $this->hasMany('App\Models\actividad');
    }
    }
    
