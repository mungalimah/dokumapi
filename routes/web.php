<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/produk', function () {
    return view('produk.produk');
});

Route::get('/add', function () {
    return view('produk.add');
});

Route::get('/edit', function () {
    return view('produk.edit');
});

Route::get('/delete', function () {
    return view('produk.produk');
});

Route::get('/view', function () {
    return view('produk.view');
});
