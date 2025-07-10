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
        $movies = [
            ['name' => 'Inception', 'slug' => 'inception'],
            ['name' => 'The Dark Knight', 'slug' => 'the-dark-knight'],
            ['name' => 'Interstellar', 'slug' => 'interstellar'],
            ['name' => 'The Matrix', 'slug' => 'the-matrix'],
            ['name' => 'Pulp Fiction', 'slug' => 'pulp-fiction'],
            ['name' => 'Forrest Gump', 'slug' => 'forrest-gump'],
            ['name' => 'The Shawshank Redemption', 'slug' => 'the-shawshank-redemption'],
            ['name' => 'Fight Club', 'slug' => 'fight-club'],
            ['name' => 'The Godfather', 'slug' => 'the-godfather'],
            ['name' => 'Schindler\'s List', 'slug' => 'schindlers-list']
        ];

        DB::table('movies')->insert(array_map(function ($movie) {
            return array_merge($movie, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $movies));
    }
}
