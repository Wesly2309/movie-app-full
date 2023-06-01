<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

<<<<<<< HEAD
Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tv}', [TvController::class, 'show'])->name('tv.show');

=======
>>>>>>> 521bfb37a1ac7a120c881c7758415b32dc040524
Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);

Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');
