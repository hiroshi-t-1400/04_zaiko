<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Item\ItemController;

Route::get('/items/index', [ItemController::class, 'index'])->name('items.index');


Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

Route::post('/items/store', [ItemController::class, 'store'])->name('items.store');

