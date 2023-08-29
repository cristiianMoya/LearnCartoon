<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audi extends Model
{
    protected $table = "audis";
    protected $fillable = ["nombre_audio"];
    use HasFactory;
    // relacion de uno a muchos polimorfica
    public function images(){
        return $this->morphMany('App\Models\image','imagetable');
    }
}
