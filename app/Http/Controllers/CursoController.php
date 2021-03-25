<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    //Metodo de mostrar la pgina ppal
    public function index(){
        $cursos = Curso::OrderBy("id","desc")->paginate();

        return view('cursos.index', compact("cursos"));
    }

    //Metodo para mostrar un formulario para crear un curso
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        //StoreCurso para validacion

        //$curso = Curso::create($request->all());
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->slug = Str::slug($request->name,'-');
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();

        return redirect()->route("cursos.show",$curso->slug);


    }
    //Metodo mostrar un elemento en particular
    public function show(Curso $curso){
        //compact($curso);
        /*
         * Compact es como un extract
         * y te devuelve un array con los mismos nombres que se recoge
         * ["curso"=>$curso]
         *
         */

        return view("cursos.show",compact("curso"));

    }
    public function edit(Curso $curso){
        $intento = compact("curso");
        return $intento;
        return view("cursos.edit", compact("curso"));
    }
    public function update(StoreCurso $request, Curso $curso){
        //StoreCurso para validacion

        //Asignacion masiva
        $curso->update($request->all());
        return redirect()->route("cursos.show",$curso->id);
    }
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route("cursos.index");
    }

}
