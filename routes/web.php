<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApotekController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

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

Route::group(['prefix' => 'admins'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    // route kategori
    Route::resource('kategori', KategoriController::class);

    // route produk
    Route::resource('produk', ProdukController::class);

    // route customer
    Route::resource('customer', CustomerController::class);

    // route transaksi
    Route::resource('transaksi', TransaksiController::class);

    // profil
    Route::get('profil', [UserController::class, 'index']);

    // setting profil
    Route::get('setting', [UserController::class, 'setting']);

    // form laporan
    Route::get('laporan', [LaporanController::class, 'index']);

    // proses laporan
    Route::get('proseslaporan', [LaporanController::class, 'proses']);
});

Route::get('/Beranda', [BerandaController::class, 'index'])->name('beranda');

Route::get('/Kategori', [BerandaController::class, 'kategori'])->name('beranda.kategori');
Route::get('/Kategori/{slug}', [BerandaController::class, 'produkPerKategori'])->name('beranda.produkPerKategori');

Route::get('/Produk', [BerandaController::class, 'produk'])->name('produk');
Route::get('/Produk/{slug}', [BerandaController::class, 'produkDetail'])->name('beranda.produkDetail');

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
