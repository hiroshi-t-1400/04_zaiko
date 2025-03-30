<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Item\ItemController;

Route::get('/items/index', [ItemController::class, 'index'])->name('items.index');

Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items/create', [ItemController::class, 'store'])->name('items.store');
Route::put('/items/edit', [ItemController::class, 'update'])->name('items.update');
Route::post('/items/edit', [ItemController::class, 'edit'])->name('items.edit');

Route::get('/items/{$id}/', [ItemController::class, 'show'])->name('items.show');
// Route::delete('/items/destroy/{$id}', [ItemController::class, 'delete'])->name('items.destroy');

Route::get('/cindex', function () {
    return view('items.cindex');
});

