<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Beranda', function () {
    return view('beranda');
});
Route::get('/Kategori', function () {
    return view('kategori');
});
Route::get('/Produk', function () {
    return view('produk');
});
Route::get('/Informasi', function () {
    return view('informasi');
});
Route::get('/Informasi/berita1', function () {
    return view('informasi/berita1');
});
Route::get('/KirimResep', function () {
    return view('kirim_resep');
});
Route::get('/UsulkanProduk', function () {
    return view('usulkan_produk');
});
Route::get('/Keluhan', function () {
    return view('keluhan');
});