<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = DB::table('movies')->pluck('id')->toArray();

        $users = DB::table('users')->pluck('id')->toArray();

        $ratings = [];
        foreach ($movies as $movieId) {
            foreach ($users as $userId) {
                $ratings[] = [
                    'movie_id' => $movieId,
                    'user_id' => $userId,
                    'rating' => rand(1, 5), // Random rating between 1 and 5
                ];
            }
        }
        DB::table('ratings')->insert($ratings);
    }
}
