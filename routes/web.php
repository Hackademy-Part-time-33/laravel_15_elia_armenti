<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontcontroller;

Route::get('/', [Frontcontroller::class, 'homepage'])->name('pages.homepage');
Route::get('/profile', [Frontcontroller::class, 'profile'])->name('pages.profile');
Route::put('/update-profile', [Frontcontroller::class, 'update-profile'])->name('pages.update.profile');
Route::get('/detail/{slug}', [Frontcontroller::class, 'detail'])->name('pages.detail');

Route::resources('articles', ArticleController::class);