<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Models\Movie;
use App\Models\Category;

class MovieController extends Controller
{
    private $movies = [];

    public function __construct()
    {
        $this->movies = [
            [
                'title' => 'Oppenheimer',
                'description' => 'A historical drama following the life of J. Robert Oppenheimer, the physicist who helped develop the atomic bomb during World War II.',
                'releaseDate' => '2023-07-21',
                'cast' => ['Cillian Murphy', 'Emily Blunt', 'Matt Damon', 'Robert Downey Jr.', 'Florence Pugh'],
                'genres' => ['Drama', 'History', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg',
            ],
            [
                'title' => 'Barbie',
                'description' => 'Barbie suffers a crisis that leads her to question her world and her existence, taking her on a journey to the real world.',
                'releaseDate' => '2023-07-21',
                'cast' => ['Margot Robbie', 'Ryan Gosling', 'Simu Liu', 'America Ferrera', 'Kate McKinnon'],
                'genres' => ['Comedy', 'Fantasy'],
                'image' => 'https://image.tmdb.org/t/p/w500/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg',
            ],
            [
                'title' => 'Mission: Impossible - Dead Reckoning Part One',
                'description' => 'Ethan Hunt and his IMF team must track down a terrifying new weapon that threatens all of humanity if it falls into the wrong hands.',
                'releaseDate' => '2023-07-12',
                'cast' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames', 'Simon Pegg', 'Rebecca Ferguson'],
                'genres' => ['Action', 'Adventure', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/NNxYkU70HPurnNCSiCjYAmacwm.jpg',
            ],
            [
                'title' => 'Spider-Man: Across the Spider-Verse',
                'description' => 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its existence.',
                'releaseDate' => '2023-06-02',
                'cast' => ['Shameik Moore', 'Hailee Steinfeld', 'Oscar Isaac', 'Jake Johnson', 'Issa Rae'],
                'genres' => ['Animation', 'Action', 'Adventure'],
                'image' => 'https://image.tmdb.org/t/p/w500/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg',
            ],
            [
                'title' => 'John Wick: Chapter 4',
                'description' => 'With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table.',
                'releaseDate' => '2023-03-24',
                'cast' => ['Keanu Reeves', 'Donnie Yen', 'Bill Skarsgård', 'Laurence Fishburne', 'Ian McShane'],
                'genres' => ['Action', 'Crime', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg',
            ],
            [
                'title' => 'Guardians of the Galaxy Vol. 3',
                'description' => 'The Guardians embark on a mission to protect one of their own and face new challenges as they unravel the mysteries of the universe.',
                'releaseDate' => '2023-05-05',
                'cast' => ['Chris Pratt', 'Zoe Saldana', 'Dave Bautista', 'Bradley Cooper', 'Karen Gillan'],
                'genres' => ['Action', 'Adventure', 'Comedy'],
                'image' => 'https://image.tmdb.org/t/p/w500/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
            ],
            [
                'title' => 'The Flash',
                'description' => 'Barry Allen uses his super speed to change the past, but his attempt to save his family creates a world without superheroes.',
                'releaseDate' => '2023-06-16',
                'cast' => ['Ezra Miller', 'Michael Keaton', 'Sasha Calle', 'Ben Affleck', 'Ron Livingston'],
                'genres' => ['Action', 'Adventure', 'Fantasy'],
                'image' => 'https://image.tmdb.org/t/p/w500/3GrRgt6CiLIUXUtoktcv1g2iwT5.jpg',
            ],
            [
                'title' => 'Fast X',
                'description' => 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes, Dante, who seeks to destroy everything Dom loves.',
                'releaseDate' => '2023-05-19',
                'cast' => ['Vin Diesel', 'Michelle Rodriguez', 'Jason Momoa', 'Tyrese Gibson', 'Ludacris'],
                'genres' => ['Action', 'Crime', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
            ],
            [
                'title' => 'Indiana Jones and the Dial of Destiny',
                'description' => 'Archaeologist Indiana Jones races against time to retrieve a legendary artifact that can change the course of history.',
                'releaseDate' => '2023-06-30',
                'cast' => ['Harrison Ford', 'Phoebe Waller-Bridge', 'Mads Mikkelsen', 'Boyd Holbrook', 'Antonio Banderas'],
                'genres' => ['Adventure', 'Action'],
                'image' => 'https://image.tmdb.org/t/p/w500/Af4bXE63pVsb2FtbW8uYIyPBadD.jpg',
            ],
            [
                'title' => 'Transformers: Rise of the Beasts',
                'description' => 'During the 1990s, the Autobots encounter a new faction of Transformers known as the Maximals, who join them as allies in the battle for Earth.',
                'releaseDate' => '2023-06-09',
                'cast' => ['Anthony Ramos', 'Dominique Fishback', 'Peter Cullen', 'Ron Perlman', 'Peter Dinklage'],
                'genres' => ['Action', 'Science Fiction', 'Adventure'],
                'image' => 'https://image.tmdb.org/t/p/w500/gPbM0MK8CP8A174rmUwGsADNYKD.jpg',
            ]
        ];
    }

    public static function middleware()
    {
        return [
            'isAuth',
            new Middleware('IsMember', only: ['show']),
        ];
    }

    public function index()
    {
        $movies = $this->movies;
        return view('movies.index', [
            'movies' => $movies,
        ])->with([
            'title' => 'List of Movies'
        ]);
    }

    public function show($id)
    {
        $movie = $this->movies[$id];
        return view('movies.show', [
            'movie' => $movie,
            'movieId' => $id
        ]);
    }

    public function edit($id)
    {
        $movie = $this->movies[$id];
        $movie['cast'] = implode(',', $movie['cast']);
        $movie['genres'] = implode(',', $movie['genres']);
        return view('movies.edit', [
            'movie' => $movie,
            'movieId' => $id,
        ]);
    }

    public function store(StoreMovieRequest $request)
    {
        $newMovie = [
            'title' => $request['title'],
            'description' => $request['description'],
            'releaseDate' => $request['releaseDate'],
            'cast' => explode(',', $request['cast']),
            'genres' => explode(',', $request['genres']),
            'image' => $request['image'],
        ];
        $this->movies[] = $newMovie;
        return $this->index();
    }

    public function create()
    {
        return view('movies.create');
    }

    public function update(Request $request, $id)
    {
        $this->movies[$id] = [
            'title' => $request['title'],
            'description' => $request['description'],
            'releaseDate' => $request['releaseDate'],
            'cast' => explode(',', $request['cast']),
            'genres' => explode(',', $request['genres']),
            'image' => $request['image'],
        ];
        return $this->show($id);
    }

    public function destroy($id)
    {
        unset($this->movies[$id]);
        return $this->index();
    }

    public function attachCategory()
    {
        $movie = Movie::find(1);
        // $movie->categories()->attach([1, 2, 3]);

        $category = Category::find(3);
        $category->movies()->attach([1]);

        return response()->json([
            'message' => 'Category attached to movie successfully.',
            'movie' => $movie->load('categories'),
            // 'category' => $category->load('movies')
        ]);
    }

    public function detachCategory()
    {
        $movie = Movie::find(1);
        // $movie->categories()->detach([1, 2]);

        $category = Category::find(5);
        $category->movies()->detach([1]);
        // return $movie->with('categories')->first();

        return response()->json([
            'message' => 'Category detached from movie successfully.',
            'movie' => $movie->load('categories'),
            // 'category' => $category->load('movies')
        ]);
    }

    public function syncCategory()
    {
        $movie = Movie::find(1);
        $movie->categories()->sync([1, 4, 5]);

        // $category = Category::find(3);
        // $category->movies()->sync([1]);

        return response()->json([
            'message' => 'Category synced with movie successfully.',
            'movie' => $movie->load('categories'),
        ]);
    }

    public function getMovieWithCategories()
    {
        $movie = Movie::with('categories')->find(6);

        return response()->json([
            'movie' => $movie
        ]);
    }

    public function getCategoryWithMovies()
    {
        $category = Category::with('movies')->find(4);

        return response()->json([
            'category' => $category
        ]);
    }

    public function getAllMoviesWithCategories()
    {
        $movies = Movie::with('categories')->get();

        return response()->json([
            'movies' => $movies
        ]);
    }
}
