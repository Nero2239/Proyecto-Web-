<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CommentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CRUD de Recursos
Route::resource('resources', ResourceController::class);

//Esta ruta es parte del integrante 2 
Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

// Ruta para guardar comentarios 
// Esto es para el integrante no. 4(?) al parecer 
Route::post('resources/{resource}/comments', [CommentController::class, 'store'])->name('comments.store');