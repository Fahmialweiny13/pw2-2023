<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();

        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $genres = Genre::all();

        return view('genres.create', compact('genres'));
=======
        //
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $validateData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Genre::create($validateData);
        return redirect('/genres')->with('success', 'Data berhasil ditambahkan');
=======
        //
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
<<<<<<< HEAD
    $genre->delete();

    return redirect('/genres')->with('success', 'Data berhasil dihapus');
=======
        //
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }
}
