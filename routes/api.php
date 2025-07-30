<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtPieceController;
use App\Http\Controllers\MovementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('artists')->controller(ArtistController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

Route::prefix('art-pieces')->controller(ArtPieceController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');

    Route::get('{id}', 'show');
});

Route::prefix('movements')->controller(MovementController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

Route::prefix('articles')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});
