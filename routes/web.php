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


Route::get('/Beranda', [ApotekController::class, 'beranda']);

Route::get('/Kategori', function () {
    return view('kategori');
});

Route::get('/Produk', [ApotekController::class, 'detailProduk']);

Route::get('/Informasi',  [ApotekController::class, 'informasi']);

Route::get('/Informasi/{informasi:id}',  [ApotekController::class, 'detailInformasi']);

Route::get('/Informasi/top1', function () {
    return view('top1');
});
Route::get('/Informasi/top2', function () {
    return view('top2');
});
Route::get('/Informasi/top3', function () {
    return view('top3');
});
Route::get('/Informasi/top4', function () {
    return view('top4');
});

Route::get('/KirimResep', [ApotekController::class, 'kirimResep']);

Route::post('/SimpanResep', [ApotekController::class, 'simpanResep']);


Route::get('/UsulkanProduk', [ApotekController::class, 'usulkanProduk']);

Route::post('/SimpanUsulanProduk', [ApotekController::class, 'simpanUsulanProduk']);


Route::get('/Keluhan', [ApotekController::class, 'keluhan']);

Route::post('/SimpanKeluhan', [ApotekController::class, 'simpanKeluhan']);


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
