<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/admin/', function() {
    return view('admin/dashboard');
});

Route::get('/admin/daftar_pengelola', function() {
    return view('admin/daftar_pengelola');
});

Route::get('/pengelola/', function() {
    return view('pengelola/dashboard');
});

Route::get('/pengelola/daftar_buku', function() {
    return view('pengelola/daftar_buku');
});

Route::get('/pengelola/daftar_inventaris', function() {
    return view('pengelola/daftar_inv');
});

Route::get('/pengelola/cari_inventaris', function() {
    return view('pengelola/hasilcari_inv');
});

Route::get('/pengelola/cari_buku', function() {
    return view('pengelola/hasilcari_buku');
});