<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthController;
//user
Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('user.articles.show');

Route::get('/search', [SearchController::class, 'search'])->name('user.articles.search');

Route::get('/categories', [CategoryController::class, 'index'])->name('user.categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('user.categories.show');


Route::get('/articles', [ArticleController::class, 'index'])->name('user.articles.index');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
