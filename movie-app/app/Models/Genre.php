<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['nama', 'deskripsi'];

=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
