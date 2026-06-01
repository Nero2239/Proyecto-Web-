<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// me volviste a fallar shell shockers
Route::resource('resources', ResourceController::class);
Route::post('resources/{resource}/comments', [CommentController::class, 'store'])->name('comments.store');
