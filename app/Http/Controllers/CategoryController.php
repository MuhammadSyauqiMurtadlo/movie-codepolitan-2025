<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        //     ->whereIn('id', [1, 3, 5])
        //     ->get();
        $categories = DB::table('categories')
            ->whereIn('id', [1])
            ->first();
        return response()->json($categories);
    }
}
