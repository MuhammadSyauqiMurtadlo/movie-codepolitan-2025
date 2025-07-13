<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function index()
    {
        $movie = Movie::with('ratings')->get()->filter(function ($movie) {
            return $movie->ratings->avg('rating') > 4;
        })
            ->map(function ($movie) {
                return [
                    'name' => $movie->name,
                    'rating' => $movie->ratings->avg('rating'),
                ];
            })->values();
        return $movie;
    }
}
