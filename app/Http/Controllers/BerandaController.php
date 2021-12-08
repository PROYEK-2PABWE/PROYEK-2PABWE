<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Beranda;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{

    public function index()
    {
        return view('beranda', [
            'title' => 'Beranda',
            'beranda' => Beranda::all()
        ]);
    }

    public function kategori()
    {
        return view('kategori', [
            'title' => 'Kategori Produk'
        ]);
    }

    public function produkperkategori()
    {
        return view('kategori', [
            'title' => 'Kategori Produk'
        ]);
    }

    public function produk()
    {
        return view('produk', [
            'title' => 'Produk',
            'data' => Produk::all()
        ]);
    }
    public function produkDetail()
    {
        return view('produk', [
            'title' => 'Produk',
            'data' => Produk::all()
        ]);
    }
}
