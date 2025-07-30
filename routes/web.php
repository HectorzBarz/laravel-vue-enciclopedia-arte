<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtPieceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

// routes/web.php
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

