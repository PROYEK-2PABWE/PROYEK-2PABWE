<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/Beranda', [ApotekController::class, 'beranda'])->name('beranda');

Route::get('/Kategori', [ApotekController::class, 'kategori'])->name('beranda');

Route::get('/Produk', [ApotekController::class, 'detailProduk'])->name('produk');

Route::get('/Informasi',  [ApotekController::class, 'informasi'])->name('informasi');

Route::get('/Informasi/{informasi:id}',  [ApotekController::class, 'detailInformasi']);

Route::get('/KirimResep', [ApotekController::class, 'kirimResep'])->name('kirimResep');
Route::post('/SimpanResep', [ApotekController::class, 'simpanResep'])->name('simpanResep');

Route::get('/UsulkanProduk', [ApotekController::class, 'usulkanProduk'])->name('usulkanProduk');
Route::post('/SimpanUsulanProduk', [ApotekController::class, 'simpanUsulanProduk'])->name('simpanUsulanProduk');

Route::get('/Keluhan', [ApotekController::class, 'keluhan'])->name('keluhan');
Route::post('/SimpanKeluhan', [ApotekController::class, 'simpanKeluhan'])->name('simpanKeluhan');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Keranjang', function () {
    return view('keranjang');
});
