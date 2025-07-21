<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/{any}', function () {
    return view('welcome'); // o 'welcome', lo que estés usando
})->where('any', '.*');