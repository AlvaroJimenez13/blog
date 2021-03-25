@extends("layouts.plantilla")
@section("title","Cursos create")

@section("content")

    <h1>En esta pagina podras crear un curso</h1>


    <form action="{{route("cursos.store")}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old("name")}}"/>
            <br>
        </label>
        @error("name")

        <small>*{{$message}}</small>
        <br>
        @enderror
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" row="5">{{old("descripcion")}}</textarea>
            <br>
        </label>
        @error("descripcion")
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old("categoria")}}"/>
            <br>
        </label>
        @error("categoria")
        <small>*{{$message}}</small>
        <br>
        @enderror
    <button type="submit" >Enviar Formulario</button>
    </form>
@endsection
