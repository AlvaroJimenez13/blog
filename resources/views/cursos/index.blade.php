@extends("layouts.plantilla")
    @section("title","Cursos")

@section("content")

    <h1>Bienvenido al index de nuestro blog</h1>
    <a href="{{route("cursos.create")}}">Crear Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li>
                <a href="{{route("cursos.show", $curso)}}"> {{$curso->name}}</a>
                <br>
                {{route("cursos.show", $curso)}}
                <hr>

            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection
