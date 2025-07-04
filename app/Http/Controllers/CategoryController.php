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

        // $category = DB::table('categories')->insert([
        //     ['name' => 'Komedi', 'slug' => Str::of('Komedi')->slug()],
        //     ['name' => 'Drama Jepang', 'slug' => Str::of('Drama Jepang')->slug()],
        //     ['name' => 'Drama Korea', 'slug' => Str::of('Drama Korea')->slug()],
        // ]);

        // ?Add data with Eloquent 1
        // $category = new Category();
        // $category->name = $request['name'];
        // $category->slug = Str::of($request['name'])->slug('-');
        // $category->save();

        // ?Add data with Eloquent 2
        $category = Category::create([
            'name' => $request['name'],
            'slug' => Str::of($request['name'])->slug('-'),
        ]);
        return $category;
    }

    public function update(Request $request, $id)
    {
        // ? Query Builder
        // $category = DB::table('categories')
        //     ->where('id', $id)
        //     ->update([
        //         'name' => $request['name'],
        //         'slug' => Str::of($request['name'])->slug('-'),
        //         'updated_at' => now()
        //     ]);

        // ? Eloquent 1
        // $category = Category::find($id);
        // if (!$category) {
        //     return response()->json(['message' => 'Category not found'], 404);
        // }
        // $category->name = $request['name'];
        // $category->slug = Str::of($request['name'])->slug('-');
        // $category->save();

        // ? Eloquent 2
        $category = Category::where('id', $id)->update([
            'name' => $request['name'],
            'slug' => Str::of($request['name'])->slug('-'),
            'updated_at' => now()
        ]);
        return $category;
    }
}
