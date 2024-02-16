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
        </tr>
        
            @foreach($peliculas as $pelicula)
            <tr>
                <td>{{$pelicula->title}}</td>
                <td>{{$pelicula->year}}</td>
                <td>{{$pelicula->director}}</td>
                <td><img style="width: 150px; height: 200px;" src="{{$pelicula->poster}}"></td>
                <td><a href=" {{ route('peliculas.show', $pelicula->id)}}" class="btn btn-primary">Editar</a></td>
            </tr>
            @endforeach
        
    </table>
{{ $peliculas->links() }}
@endsection