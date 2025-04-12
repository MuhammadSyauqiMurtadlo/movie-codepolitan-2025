<?php

use App\Http\Controllers\MovieController;
use App\Http\Middleware\isAuth;
use App\Http\Middleware\CheckMembership;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];

Route::group(
    [
        // 'middleware' => ['IsAuth'],
        'prefix' => 'movie',
        'as' => 'movie.',
    ],
    function () {
        Route::get('/', [MovieController::class, 'index']);
        Route::get('/{id}', [MovieController::class, 'show']);
        // Route::get('/{id}', [MovieController::class, 'show'])->middleware(['isMember']);
        Route::post('/', [MovieController::class, 'store']);
        Route::put('/{id}', [MovieController::class, 'update']);
        Route::delete('/{id}', [MovieController::class, 'destroy']);
    }
);

// test middleware
Route::get('/pricing', function () {
    return 'Please, buy a membership to access this route';
});

Route::get('/login', function () {
    return 'Login page';
})->name('login');

// Route::get('/request', function (Request $request) {
//     if ($request->is('request')) {
//         return true;
//     }
// });

// Route::get('/request', function (Request $request) {
//     $user = $request->all();
//     return $user;
// });

// ?process data from request
// Route::get('/request', function (Request $request) {
//     $filterd = $request->collect()->map(function ($value, $key) {
//         return strtoupper($value);
//     });
//     return $filterd;
// });

Route::post('/request', function (Request $request) {
    $input = $request->input();
    return $input;

    // $query = $request->query();
    // return $query;
});
