<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('/profile', function () {
    return view('pages.profile')->name('profile');
});
Route::get('/detail', function () {
    return view('pages.detail')->name('detail');
});