<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Genre;
=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
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
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        Movie::create($validateData);
        return redirect('/movies')->with('success', 'Data berhasil ditambahkan');
=======
        //
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
<<<<<<< HEAD
        $movie->delete();
        return redirect('/movies')->with('success', 'Data berhasil dihapus');
=======
        //
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }
}
