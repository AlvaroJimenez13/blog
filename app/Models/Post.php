<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relacion 1 a muchos (inversa)
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
    public function categoria(){
        return $this->belongsTo("App\Models\Categoria");
    }
    // Relacion 1:1 polimorfica
    public function image(){
        return $this->morphOne("App/Models/Image","imagiable");
    }
}
