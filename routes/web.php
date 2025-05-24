<?php


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {;
//     return view('welcome');
// });



Route::get('/', fn () => view('home'))->name('home');
Route::get('/home', fn () => view('home'))->name('home');
