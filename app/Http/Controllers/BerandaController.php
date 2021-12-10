<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Beranda;
use App\Models\Kategori;
use App\Models\Slideshow;
use App\Models\ProdukPromo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{

    public function index()
    {
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();
        $itempromo = ProdukPromo::orderBy('created_at', 'desc')->limit(6)->get();
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->limit(6)->get();
        $itemslide = Slideshow::get();

        return view('beranda.index', [
            'title' => 'Beranda',
            'beranda' => Beranda::all(),
            'itemproduk' => $itemproduk,
            'itempromo' => $itempromo,
            'itemkategori' => $itemkategori,
            'itemslide' => $itemslide,
        ]);
    }

    public function kategori()
    {
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->limit(6)->get();
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();

        return view('kategori', [
            'title' => 'Kategori Produk',
            'itemkategori' => $itemkategori,
            'itemproduk' => $itemproduk,
            'kategoris' => Kategori::all()
        ]);
    }

    public function kategoribyslug(Request $request, $slug)
    {
        $itemproduk = Produk::orderBy('nama_produk', 'desc')
            ->where('status', 'publish')
            ->whereHas('kategori', function ($q) use ($slug) {
                $q->where('slug_kategori', $slug);
            })
            ->paginate(18);
        $listkategori = Kategori::orderBy('nama_kategori', 'asc')
            ->where('status', 'publish')
            ->get();
        $itemkategori = Kategori::where('slug_kategori', $slug)
            ->where('status', 'publish')
            ->first();
        if ($itemkategori) {
            return view('homepage.produk', [
                'title' => $itemkategori->nama_kategori,
                'itemproduk' => $itemproduk,
                'listkategori' => $listkategori,
                'itemkategori' => $itemkategori
            ])->with('no', ($request->input('page') - 1) * 18);
        } else {
            return abort('404');
        }
    }

    public function produkperkategori(Kategori $kategori)
    {
        return view('kategori', [
            'title' => 'Kategori Produk',
            'kategori' => $kategori
        ]);
    }

    public function produk(Request $request)
    {
        $itemproduk = Produk::orderBy('nama_produk', 'desc')
            ->where('status', 'publish')
            ->paginate(18);
        $listkategori = Kategori::orderBy('nama_kategori', 'asc')
            ->where('status', 'publish')
            ->get();
        return view('homepage.produk', [
            'title' => 'Produk',
            'itemproduk' => $itemproduk,
            'listkategori' => $listkategori
        ])->with('no', ($request->input('page') - 1) * 18);
    }

    public function produkdetail($id)
    {
        $itemproduk = Produk::where('slug_produk', $id)
            ->where('status', 'publish')
            ->first();

        if ($itemproduk) {
            return view('beranda.produkdetail', [
                'title' => $itemproduk->nama_produk,
                'data' => Produk::all(),
                'itemproduk' => $itemproduk,
            ]);
        } else {
            // kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
            return abort('404');
        }
    }
}
