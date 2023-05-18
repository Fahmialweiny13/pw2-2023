<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
    [
        'no' => 1,
        'nama genre' => 'Action',
        'deskripsi' => 'Genre aksi atau action adalah genre film yang biasanya sangat menegangkan saat ditonton.',
    ],
    [
        'no' => 2,
        'nama genre' => 'Comedy',
        'deskripsi' => 'Genre comedy adalah genre film di mana penekanan utama adalah pada kelucuan.',
    ],
    [
        'no' => 3,
        'nama genre' => 'Horor',
        'deskripsi' => 'Genre horor adalah sebuah genre film yang berusaha untuk memancing emosi berupa ketakutan atau rasa jijik dari penontonnya.',
    ],
    [
        'no' => 4,
        'nama genre' => 'Romance',
        'deskripsi' => 'Genre romance adalah kisah cinta yang berfokus pada gairah, emosi, dan keterlibatan kasih sayang dari karakter utama dan perjalanan yang benar-benar kuat.',
    ],
    [
        'no' => 5,
        'nama genre' => 'Thriller',
        'deskripsi' => 'Genre thriller adalah jenis genre yang dibuat untuk membuat <br> penonton merasakan ketegangan.',
    ]
];

    public function getAllGenres()
    {
        return $this->genres;
    }
    
}
