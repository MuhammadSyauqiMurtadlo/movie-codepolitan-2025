<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class RatingController extends Controller
{
    public function index()
    {
        $movie = Movie::with('ratings')->find(1);

        return $movie;
    }
}
