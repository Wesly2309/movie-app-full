<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/', 'app');
Route::view('/movie', 'layouts.show');

Route::get('/', [HomeController::class , 'index']);

