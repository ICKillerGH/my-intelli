<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class)->except(['create', 'edit']);
Route::resource('authors', AuthorController::class)->except(['create', 'edit']);
Route::resource('books', BookController::class)->except(['create', 'edit']);