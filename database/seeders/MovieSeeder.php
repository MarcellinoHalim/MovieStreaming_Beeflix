<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $movies = [
            [
                'title' => 'The Way I Love You ',
                'photo' => 'images/movies/mov1.jpg',
                'publish_date' => '20-01-2000',
                'description' => 'Ini film romance ke 1',
                'genre_id' => 1
            ],
            [
                'title' => 'Galih & Ratna',
                'photo' => 'images/movies/mov2.jpg',
                'publish_date' => '05-10-2002',
                'description' => 'Ini film romance ke 2',
                'genre_id' => 1
            ],
            [
                'title' => 'Gangster',
                'photo' => 'images/movies/mov3.jpg',
                'publish_date' => '13-06-2001',
                'description' => 'Ini film action ke 1',
                'genre_id' => 2
            ],
            [
                'title' => 'The Raid 2',
                'photo' => 'images/movies/mov4.jpg',
                'publish_date' => '24-02-2004',
                'description' => 'Ini film action ke 2',
                'genre_id' => 2
            ],
            [
                'title' => 'UP',
                'photo' => 'images/movies/mov5.jpg',
                'publish_date' => '15-032008',
                'description' => 'Ini film cartoon ke 1',
                'genre_id' => 3
            ],
            [
                'title' => 'Luca',
                'photo' => 'images/movies/mov6.jpg',
                'publish_date' => '07-05-2010',
                'description' => 'Ini film cartoon ke 2',
                'genre_id' => 3
            ]
        ];

        DB::table('movies')->insert($movies);
    }
}
