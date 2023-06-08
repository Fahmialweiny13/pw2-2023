@extends('layouts.main')

@section('content')
    <div class="mb-4">
    <h1 class="mt-4">Reviews Data</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </nav>
    </div>
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
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div class="card mb-4">
                    <label for="film">Film:</label>
                    <input type="text" id="film" name="film" class="form-control"> 
                </div>
                <div class="card mb-4">
                    <label for="user">User:</label>
                    <input type="text" id="user" name="user" class="form-control">
                </div>
                <div class="card mb-4">
                    <label for="rating">Rating:</label>
                    <input type="float" id="rating" name="rating" class="form-control">
                </div>
                <div class="card mb-4">
                    <label for="review">Review:</label>
                    <input type="text" id="review" name="review" class="form-control">
                </div>
                <div class="card mb-4">
                    <label for="tanggal">Date:</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection