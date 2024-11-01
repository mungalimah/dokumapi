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

Route::get('/pendapatan', function () {
    return view('pendapatan.pendapatan');
});

Route::get('/akun', function () {
    return view('customer.akunPelanggan');
});

Route::get('/pesanan', function () {
    return view('pesanan.pesanan');
});

Route::get('/hapus', function () {
    return view('pesanan.pesanan');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/reset', function () {
    return view('auth.resetPW');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/remove', function () {
    return view('customer.akunPelanggan');
});


