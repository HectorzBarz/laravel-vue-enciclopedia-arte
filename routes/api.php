<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistMovementController;
use App\Http\Controllers\ArtPieceController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\SearchController;
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

Route::get('/artists/{id}/movements', [ArtistMovementController::class, 'getMovementsByArtist']);

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

Route::prefix('articles')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'home');
    Route::get('{id}', 'show');
});

