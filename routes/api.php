<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'login')->name('login');
});

Route::resource('users', UserController::class)->except(['create', 'edit']);
Route::resource('authors', AuthorController::class)->except(['create', 'edit']);
Route::resource('books', BookController::class)->except(['create', 'edit']);