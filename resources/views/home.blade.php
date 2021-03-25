@extends("layouts.plantilla")

@section("title", "Home")

@section("content")
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<h1>Bienvenido a la página principal de mi página</h1>

<div class="container mx-auto">
    <x-alert color="blue">
        <x-slot name="title">
            Titulo 1
        </x-slot>
        lorem ipsum dolor
    </x-alert>
    <x-alert>
        <x-slot name="title">
            Titulo 2
        </x-slot>
        Hola Mundo
    </x-alert>
</div>
@endsection
