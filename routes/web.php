<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de recursos académicos para que todo luzca natural.
Route::resource('resources', ResourceController::class);

Route::post('resources/{resource}/comments', [CommentController::class, 'store'])->name('comments.store');
