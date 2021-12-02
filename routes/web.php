<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;

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

Route::get('/KirimResep', [ApotekController::class, 'kirimResep']);

Route::post('/SimpanResep', [ApotekController::class, 'simpanResep']);

Route::post('/UsulkanProduk', function () {
    return view('usulkan_produk');
});
Route::get('/Keluhan', function () {
    return view('keluhan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
