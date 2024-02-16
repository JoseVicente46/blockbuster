<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;


class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::paginate(5);
        return view('index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $peliculas = new Pelicula();
        $peliculas->title = $request->get('title');
        $peliculas->year = $request->get('year');
        $peliculas->director = $request->get('director');
        $peliculas->poster = $request->get('poster');
        $peliculas->rented = 0;
        $peliculas->synopsis = $request->get('synopsis');
        $peliculas->save();
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peliculas = Pelicula::findOrFail($id);
        $peliculas->delete();
        return redirect()->route('peliculas.index');
    }
}
