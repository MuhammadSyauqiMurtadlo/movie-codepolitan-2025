<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

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

        $categories = Category::where('id', 5)
            ->select('name', 'slug')
            ->first();

        return response()->json($categories);
    }
}
