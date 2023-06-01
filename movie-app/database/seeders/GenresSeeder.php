<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Action-packed movies',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Genre horor adalah sebuah genre film yang berusaha untuk memancing emosi berupa ketakutan atau rasa jijik dari penontonnya.',
        ]);
    
        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Genre comedy adalah genre film di mana penekanan utama adalah pada kelucuan',
        ]);
<<<<<<< HEAD

        Genre::create([
            'nama' => 'Thriller',
            'deskripsi' => 'Genre thriller adalah genre film yang lebih mengarah ke menegangkan',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'deskripsi' => 'Genre romance adalah genre film di mana lebih ke arah percintaan',
        ]);
=======
>>>>>>> 4fa5fe5a0d8d649ab2359b0d6db79c61c414a205
    }
}
