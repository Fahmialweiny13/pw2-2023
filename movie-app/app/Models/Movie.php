<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['judul', 'poster', 'genre_id', 'negara', 'tahun', 'rating'];

=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
<<<<<<< HEAD

=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
}
