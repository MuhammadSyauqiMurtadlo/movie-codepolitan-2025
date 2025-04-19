<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class MovieController extends Controller
{
    public $movies;

    public function __construct()
    {

        for ($i = 0; $i < 10; $i++) {
            $this->movies[] = [
                'title' => 'Movie Controller ' . $i,
                'year' => 2025,
                'genre' => 'Action',
            ];
        }
    }

    public static function middleware()
    {
        return [
            'isAuth',
            new Middleware('IsMember', only: ['show']),
            // new Middleware('IsMember', except: ['show']),
        ];
    }

    public function index()
    {
        // return $this->movies;
        // return response()->json([
        //     'data' => $this->movies,
        //     'message' => 'List of movies',
        // ], 200);

        return view('movies.index');
    }

    public function show($id)
    {
        return view('movies.show');
    }

    public function store()
    {
        $this->movies[] = [
            'title' => request('title'),
            'year' => request('year'),
            'genre' => request('genre'),
        ];

        return $this->movies;
    }

    public function update(Request $request, $id)
    {
        // $this->movies[$id]['title'] = request('title');
        // $this->movies[$id]['year'] = request('year');
        // $this->movies[$id]['genre'] = request('genre');
        // return $this->movies;

        return $request->all();
    }

    public function destroy($id)
    {
        unset($this->movies[$id]);

        return $this->movies;
    }
}
