@extends("layouts.plantilla")

@section("title", "Contactanos")

@section("content")

    <h1>Dejanos un mensaje</h1>

    <form action="{{route("contactanos.store")}}" method="post">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old("name")}}"/>
        </label>
        <br>
        @error("name")
        <p><strong>{{$message}}</strong></p>
        @enderror
        <label>
            Correo:
            <br>
            <input type="text" name="correo" value="{{old("correo")}}"/>
        </label>
        <br>
        @error("correo")
        <p><strong>{{$message}}</strong></p>
        @enderror
        <label>
            Mensaje:
            <br>
            <textarea rows="4" name="mensaje">{{old("mensaje")}}</textarea>
        </label>
        @error("mensaje")
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    @if (session('info'))
    <script>alert("{{session('info')}}")</script>
    @endif
@endsection
