@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    </nav>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Title:</label><br>
                <input type="text" id="judul" name="judul" value="{{ $movie->judul }}" class="form-control"><br><br>

                <label for="poster">Poster:</label><br>
                <input type="text" id="poster" name="poster" value="{{ $movie->poster }}" class="form-control"><br><br>

                <label for="genre_id">Genre:</label><br>
                <select id="genre_id" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" class="form-control" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="negara">Country:</label><br>
                <input type="text" id="negara" name="negara" value="{{ $movie->negara }}" class="form-control"><br><br>

                <label for="tahun">Year:</label><br>
                <input type="text" id="tahun" name="tahun" value="{{ $movie->tahun }}" class="form-control"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $movie->rating }}" class="form-control"><br><br>

                <button type="submit" class="btn btn-primary">Update Movies</button>
            </form>
        </div>
    </div>
@endsection