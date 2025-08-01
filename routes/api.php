<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistMovementController;
use App\Http\Controllers\ArtPieceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovementController;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/auth-status', function () {
    return response()->json([
        'authenticated' => auth()->check()
    ]);
});




Route::prefix('user')->controller(UserController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::post('/store', 'store');
    Route::delete('/{id}/destroy', 'destroy');
});

Route::post('/register', action: [AuthController::class, 'register']);
Route::post('/logout', action: [AuthController::class, 'logout']);
Route::post('/login', action: [AuthController::class, 'login']);




Route::prefix('artists')->controller(ArtistController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

Route::get('/artists/{id}/movements', [ArtistMovementController::class, 'getMovementsByArtist']);
Route::get('/artists/{id}/artpieces', [ArtistController::class, 'getArtPieces']);

Route::prefix('artpieces')->controller(ArtPieceController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

Route::get('/artpieces/{id}/artist', [ArtPieceController::class, 'getArtistByArtPiece']);

Route::prefix('movements')->controller(MovementController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

Route::get('/movements/{id}/artpieces', [MovementController::class, 'getArtPieces']);

Route::prefix('articles')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

