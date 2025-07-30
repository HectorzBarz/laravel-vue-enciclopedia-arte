<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('artists')->controller(ArtistController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{id}', 'show');
});
