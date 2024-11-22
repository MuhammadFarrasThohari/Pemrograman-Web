<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/web', function () {
    return view('home');
})->name('home');

Route::get('/web/about', function () {
    return view('about');
})->name('about');

Route::get('/web/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/new', [PageController::class, 'home'])->name('home');
Route::get('/new/about', [PageController::class, 'about'])->name('about');
Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');
