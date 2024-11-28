<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/',[MovieController::class, 'home'])->name('movie.index');
Route::get('/inputmovie',[MovieController::class, 'inputMovie'])->name('movie.input');
Route::post('/store',[MovieController::class, 'store'])->name('movie.store');
Route::get('/delete/{id}', [MovieController::class, 'delete'])->name('movie.delete');