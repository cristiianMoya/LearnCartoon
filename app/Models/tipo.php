<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    use HasFactory;

    public function actividad(){
        return $this->hasMany('App\Models\actividad');
       }

}
