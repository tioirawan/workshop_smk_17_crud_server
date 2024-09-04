<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "halo";
});

/**
 * get /items -> untuk membaca item yang telah dibuat
 * post /items -> untuk membuat item baru
 * put /items/[item_id] -> untuk mengedit item
 * delete /items/[item_id] -> untuk menghapus item
 */
Route::get('/items', function() {
    return "ini items";
});

Route::post('/items', function() {
    return "ini items";
});

Route::put('/items', function() {
    return "ini items";
});

Route::delete('/items', function() {
    return "ini items";
});
