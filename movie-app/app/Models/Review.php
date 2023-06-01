<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['film', 'user', 'rating', 'review', 'tanggal'];

=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
