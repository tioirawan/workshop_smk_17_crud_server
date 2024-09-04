<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * get /items -> untuk membaca item yang telah dibuat
 * post /items -> untuk membuat item baru
 * put /items/[item_id] -> untuk mengedit item
 * delete /items/[item_id] -> untuk menghapus item
 */
Route::get('/items', [ItemController::class, 'getItems']);

Route::post('/items', [ItemController::class, 'addItem']);

Route::put('/items/{id}', [ItemController::class, 'editItem']);

Route::delete('/items/{id}', [ItemController::class, 'deleteItem']);
