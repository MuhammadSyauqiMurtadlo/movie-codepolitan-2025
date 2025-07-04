<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // $categories = DB::table('categories')
        //     ->select('id', 'name')
        //     ->get();
        // $categories = DB::table('categories')
        //     ->select('slug')
        //     ->whereIn('id', [1, 8, 14])
        //     ->get();
        // $categories = DB::table('categories')
        //     ->whereIn('id', [1])
        //     ->first();

        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        // $category =  DB::table('categories')->insert([
        //     'name' => $request['name'],
        //     'slug' => Str::of($request['name'])->slug(),
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        $category = DB::table('categories')->insert([
            ['name' => 'Komedi', 'slug' => Str::of('Komedi')->slug()],
            ['name' => 'Drama Jepang', 'slug' => Str::of('Drama Jepang')->slug()],
            ['name' => 'Drama Korea', 'slug' => Str::of('Drama Korea')->slug()],
        ]);
        return $category;
    }
}
