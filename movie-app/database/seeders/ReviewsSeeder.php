<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'film' => 'Godzilla vs. kong',
            'user' => 'Alexander Skarsgård',
            'rating' => 9.5,
            'review' => 'In a time when monsters walk the Earth, humanity’s fight for its future sets Godzilla and Kong on a collision course that will see the two most powerful forces of nature on the planet collide in a spectacular battle for the ages.',
            'tanggal' => '2021-03-24',
        ]);

        Review::create([
            'film' => 'Avatar: The Way of Water',
            'user' => 'Sam Worthington',
            'rating' => 9.4,
            'review' => 'Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.',
            'tanggal' => '2022-12-14',
        ]);

        Review::create([
            'film' => 'Evil Dead Rise',
            'user' => 'Lily Sullivan',
            'rating' => 8.6,
            'review' => 'Two sisters find an ancient vinyl that gives birth to bloodthirsty demons that run amok in a Los Angeles apartment building and thrusts them into a primal battle for survival as they face the most nightmarish version of family imaginable.',
            'tanggal' => '2023-04-12',
        ]);

        Review::create([
            'film' => 'Mad Max: Fury Road',
            'user' => 'Tom Hardy',
            'rating' => 8.4,
            'review' => 'An apocalyptic story set in the furthest reaches of our planet, in a stark desert landscape where humanity is broken, and most everyone is crazed fighting for the necessities of life. Within this world exist two rebels on the run who just might be able to restore order.',
            'tanggal' => '2015-05-13',
        ]);

        Review::create([
            'film' => 'Top Gun: Maverick',
            'user' => 'Tom Cruise',
            'rating' => 9.7,
            'review' => 'After more than thirty years of service as one of the Navy’s top aviators, and dodging the advancement in rank that would ground him, Pete “Maverick” Mitchell finds himself training a detachment of TOP GUN graduates for a specialized mission the likes of which no living pilot has ever seen. Facing an uncertain future and confronting the ghosts of his past, Maverick is drawn into a confrontation with his own deepest fears, culminating in a mission that demands the ultimate sacrifice from those who will be chosen to fly it.',
            'tanggal' => '2022-05-24',
        ]);
    }
}
