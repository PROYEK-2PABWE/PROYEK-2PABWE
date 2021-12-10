<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ApotekController;
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
    Route::get('proseslaporan', [LaporanController::class, 'proses']);

    // image
    Route::get('image', [ImageController::class, 'index']);

    // simpan image
    Route::post('image', [ImageController::class, 'store']);

    // hapus image by id
    Route::delete('image/{id}', [ImageController::class, 'destroy']);

    // upload image kategori
    Route::post('imagekategori',  [KategoriController::class, 'uploadimage']);

    // hapus image kategori
    Route::delete('imagekategori/{id}', [KategoriController::class, 'deleteimage']);

    // upload image produk
    Route::post('produkimage', [ProdukController::class, 'uploadimage']);

    // hapus image produk
    Route::delete('produkimage/{id}', [ProdukController::class, 'deleteimage']);

    // slideshow
    Route::resource('slideshow', SlideshowController::class);

    // produk promo
    Route::resource('promo', ProdukPromoController::class);

    // load async produk
    Route::get('loadprodukasync/{id}', [ProdukController::class, 'loadasync']);
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');

    Route::get('/Kategori', [BerandaController::class, 'kategori'])->name('beranda.kategori');
    Route::get('/Kategori/{kategori:slug_kategori}', [BerandaController::class, 'produkPerKategori'])->name('beranda.produkPerKategori');

    Route::get('/Produk', [BerandaController::class, 'produk'])->name('produk');
    Route::get('/Produk/{produk:slug_produk}', [BerandaController::class, 'produkDetail'])->name('beranda.produkDetail');

    Route::get('/Informasi',  [ApotekController::class, 'informasi'])->name('informasi');
    Route::get('/Informasi/{informasi:id}',  [ApotekController::class, 'detailInformasi']);

    Route::get('/KirimResep', [ApotekController::class, 'kirimResep'])->name('kirimResep')->middleware('auth');
    Route::post('/SimpanResep', [ApotekController::class, 'simpanResep'])->name('simpanResep');

    Route::get('/UsulkanProduk', [ApotekController::class, 'usulkanProduk'])->name('usulkanProduk')->middleware('auth');
    Route::post('/SimpanUsulanProduk', [ApotekController::class, 'simpanUsulanProduk'])->name('simpanUsulanProduk');

    Route::get('/Keluhan', [ApotekController::class, 'keluhan'])->name('keluhan')->middleware('auth');
    Route::post('/SimpanKeluhan', [ApotekController::class, 'simpanKeluhan'])->name('simpanKeluhan');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Login1', function () {
    return view('login1', [
        'title' => 'login'
    ]);
});

Route::get('/Register1', function () {
    return view('register1', [
        'title' => 'login'
    ]);
});

Route::get('/Keranjang', function () {
    return view('keranjang');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
