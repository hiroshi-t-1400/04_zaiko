<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Item\ItemController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

// Route::get('/items/create', []
//     view('items.create')->name('items.create')
// });

// Route::post('/ItemsRegister', function ())

