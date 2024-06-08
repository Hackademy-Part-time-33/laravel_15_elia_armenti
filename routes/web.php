<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontcontroller;
use App\Models\Category;

Route::get('/', [Frontcontroller::class, 'homepage'])->name('pages.homepage');
Route::get('/profile', [Frontcontroller::class, 'profile'])->name('pages.profile');
Route::put('/update-profile', [Frontcontroller::class, 'update-profile'])->name('pages.update.profile');
Route::get('/detail/{slug}', [Frontcontroller::class, 'detail'])->name('pages.detail');

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);