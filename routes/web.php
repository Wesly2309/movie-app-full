<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app');
Route::view('/movie', 'layouts.show');

Route::get('/', [HomeController::class , 'index']);
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');


