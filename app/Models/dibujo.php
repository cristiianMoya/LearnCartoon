<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dibujo extends Model
{
    use HasFactory;
    public function actividad(){
        return $this->belongsTo('App\Models\actividad');
    }
}