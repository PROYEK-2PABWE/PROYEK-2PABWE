<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukPromoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
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
    Route::get('prosesLaporan', [LaporanController::class, 'proses']);

    // image
    Route::get('image', [ImageController::class, 'index']);

    // simpan image
    Route::post('image', [ImageController::class, 'store']);

    // hapus image by id
    Route::delete('image/{id}', [ImageController::class, 'destroy']);

    // upload image kategori
    Route::post('imageKategori',  [KategoriController::class, 'uploadImage']);

    // hapus image kategori
    Route::delete('imageKategori/{id}', [KategoriController::class, 'deleteImage']);

    // upload image produk
    Route::post('produkImage', [ProdukController::class, 'uploadImage']);

    // hapus image produk
    Route::delete('produkImage/{id}', [ProdukController::class, 'deleteImage']);

    // slideshow
    Route::resource('slideShow', SlideshowController::class);

    // produk promo
    Route::resource('promo', ProdukPromoController::class);

    // load async produk
    Route::get('loadProdukAsync/{id}', [ProdukController::class, 'loadAsync']);
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [BerandaController::class, 'index'])->name('home');

    Route::get('/kategori', [BerandaController::class, 'kategori'])->name('home.kategori');
    Route::get('/kategori/{slug}', [BerandaController::class, 'kategoriBySlug'])->name('home.kategoriBySlug');

    Route::get('/produk', [BerandaController::class, 'produk'])->name('home.produk');
    Route::get('/produk/{id}', [BerandaController::class, 'produkDetail'])->name('home.produkDetail');

    Route::get('/informasi',  [BerandaController::class, 'informasi'])->name('home.informasi');
    Route::get('/informasi/{informasi:id}',  [BerandaController::class, 'informasiDetail'])->name('home.informasiDetail');

    Route::get('/kirimResep', [BerandaController::class, 'kirimResep'])->name('home.kirimResep')->middleware('auth');
    Route::post('/simpanResep', [BerandaController::class, 'simpanResep'])->name('home.simpanResep');

    Route::get('/usulkanProduk', [BerandaController::class, 'usulkanProduk'])->name('home.usulkanProduk')->middleware('auth');
    Route::post('/simpanUsulanProduk', [BerandaController::class, 'simpanUsulanProduk'])->name('home.simpanUsulanProduk');

    Route::get('/keluhan', [BerandaController::class, 'keluhan'])->name('home.keluhan')->middleware('auth');
    Route::post('/simpanKeluhan', [BerandaController::class, 'simpanKeluhan'])->name('home.simpanKeluhan');
});

Auth::routes();
