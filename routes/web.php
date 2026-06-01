<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// me volviste a fallar shell shockers
Route::resource('resources', ResourceController::class);

