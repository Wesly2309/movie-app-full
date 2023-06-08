<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

<<<<<<< HEAD
Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/[actor]', [ActorController::class, 'show'])->name('actors.show');
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tv}', [TvController::class, 'show'])->name('tv.show');
=======
Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tv}', [TvController::class, 'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/[actor]', [ActorController::class , 'show'])->name('actors.show');
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tv}', [TvController::class, 'show'])->name('tv.show');
>>>>>>> f515e74acf72739b84ec577db3114113b62530a6
