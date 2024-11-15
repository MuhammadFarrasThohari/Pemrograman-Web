<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo "<h1>Apa kabar dunia</h1>";
    echo "tetep asik";
});


Route::get('/belajar', function () {
    echo "<h1>Apa kabar dunia</h1>";
    echo "tetep asik";
});

Route::get('/belajar/laravel', function () {
    echo "<h1>Apa kabar dunia</h1>";
    echo "tetep asik";
});

Route::get('/biodata/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {
    return "<h1>Nama saya adalah $namadepan $namabelakang</h1>";
});
