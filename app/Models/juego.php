<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    use HasFactory;
    // recion de uno a muchos polimorfica
    public function images(){
        return $this->morphMany('App\Models\image','imagetable');
    }
}
