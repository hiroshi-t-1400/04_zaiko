<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ItemsRegister', fn () => view('items.item-register'))->name('items.register');

// Route::post('/ItemsRegister', function ())

