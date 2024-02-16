@extends('plantilla')
@section('titulo', 'Peliculas')
@section('contenido')
<form action="{{ route('peliculas.store') }}" method="POST">
    @csrf
    @method('POST')
    <table class="table">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Director</th>
            <th scope="col">Poster</th>
            <th scope="col">synopsis</th>
            <th scope="col">Enviar</th>
        </tr>
        <tr>
            <td><input type="text" name="title"></td>
            <td><input type="text" name="year"></td>
            <td><input type="text" name="director"></td>
            <td><input type="text" name="poster"></td>
            <td><input type="text" name="synopsis"></td>
            <td><button type="submit">Enviar</button></td>
        </tr>
    </table>
</form>
@endsection