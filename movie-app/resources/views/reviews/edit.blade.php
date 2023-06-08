@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <label for="film">Film:</label><br>
                <input type="text" id="film" name="film" value="{{ $review->film }}" class="form-control"><br><br>

                <label for="user">User:</label><br>
                <input type="text" id="user" name="user" value="{{ $review->user }}" class="form-control"><br><br>
 
                <label for="rating">Rating:</label><br>
                <input type="float" id="rating" name="rating" value="{{ $review->rating }}" class="form-control"><br><br>

                <label for="review">Review:</label><br>
                <input type="text" id="review" name="review" value="{{ $review->review }}" class="form-control"><br><br>

                <label for="tanggal">Tanggal:</label><br>
                <input type="date" id="tanggal" name="tanggal" value="{{ $review->tanggal }}" class="form-control"><br><br>

                <button type="submit" class="btn btn-primary">Update Review</button>
            </form>
        </div>
    </div>
@endsection