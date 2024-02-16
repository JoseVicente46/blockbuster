@extends('plantilla')
@section('titulo', 'Peliculas')
@section('contenido')
<h1>Inicio</h1>
        
        <p>Selecciona un usuario</p>
        <select class="form-select">
        @foreach($users as $user)
       
            <option value="">{{$user->name}}</option>
       
        @endforeach 
        </select>
        <a class="btn btn-primary" href="{{ route('peliculas.index') }}">Entrar</a>
        
@endsection