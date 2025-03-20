<?php

use App\Http\Controllers\MovieController;
use App\Http\Middleware\isAuth;
use App\Http\Middleware\CheckMembership;
use Illuminate\Support\Facades\Route;

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
