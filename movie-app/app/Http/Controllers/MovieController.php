<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        // upload the image
        if($request->hasfile('poster')) {
            // set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
      
            // save image to storage
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName;
        }

        Movie::create($validateData);
        return redirect('/movies')->with('success', 'Data berhasil ditambahkan');
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
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
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
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            // delete old image
            Storage::disk('public')->delete('assets/img/'.$movie->poster);

            // set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
       
            // save image to storage
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName;

        }

        $movie->update($validateData);
        return redirect('/movies')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Data berhasil dihapus');
    }
}
