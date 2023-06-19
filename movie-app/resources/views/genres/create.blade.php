@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
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
            Genres Data
        </div>
        
        <div class="card-body">
            <form method="POST" action="/genres">
                @csrf
                <div>
                    <label for="nama">Genre Name:</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                </div>
                <br>
                <div>
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                </div>
                <br>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection