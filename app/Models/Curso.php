<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $guarded = ["status"];
    /*
     * Mientras en el $guarded, no se guarda tal campo, porque es un campo protegido
     *
     * Aquí se guarda los campos que vamos a rellenar
     * protected $fillable = ["name","descripcion","categoria"]
     */
    public function getRouteKeyName()
    {

        return "slug";
    }
}
