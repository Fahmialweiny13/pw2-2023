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
    }
}
