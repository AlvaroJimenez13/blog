@extends("layouts.plantilla")
@section("title","Cursos edit")

@section("content")

    <h1>En esta pagina podras editar el curso </h1>


    <form action="{{route("cursos.update", $curso)}}" method="POST">

        @csrf
        @method("put")


        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old("name",$curso->name)}}"/>
            <br>
        </label>
        @error("name")
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" row="5">{{old("descripcion",$curso->descripcion)}}</textarea>
            <br>
        </label>
        @error("descripcion")
        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old("categoria",$curso->categoria)}}"/>
            <br>
        </label>
        @error("categoria")
        <small>*{{$message}}</small>
        <br>
        @enderror
        <button type="submit" >Actualizar Formulario</button>
    </form>
@endsection
