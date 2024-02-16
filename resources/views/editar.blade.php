@extends('plantilla')
@section('titulo', 'Peliculas')
@section('contenido')
<h1>Listado de peliculas</h1>
    <table class="table">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Director</th>
            <th scope="col">Poster</th>
            <th scope="col">Modificar</th>
            <th scope="col">Borrar</th>
        </tr>
        <tr>
            <td>{{$pelicula->title}}</td>
            <td>{{$pelicula->year}}</td>
            <td>{{$pelicula->director}}</td>
            <td><img style="width: 150px; height: 200px;" src="{{$pelicula->poster}}"></td>
            <td><a href="#" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('peliculas.destroy', $pelicula->id )}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
    </table>
@endsection