<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/uye', [App\Http\Controllers\App::class, 'bilinmeyen_uye']);

Route::get('/uye/{slug}', [App\Http\Controllers\App::class, 'uye']);

Route::get('/uye/{slug}/paylasimlar', [App\Http\Controllers\App::class, 'paylasimlar']);


Route::get('/uye/{slug}/paylasim/{id}', [App\Http\Controllers\App::class, 'paylasim']);