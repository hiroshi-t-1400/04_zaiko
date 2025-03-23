<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Item\ItemController;

Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

Route::post('/items/store', [ItemController::class, 'store'])->name('items.store');
// Route::post('/items/store', function (Request $request) {
//     dd($request);
//     return view('home');
// })->name('items.store');

// Route::post('/ItemsRegister', function ())

