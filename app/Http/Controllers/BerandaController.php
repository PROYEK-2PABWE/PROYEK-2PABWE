<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Beranda;
use App\Models\Keluhan;
use App\Models\Kategori;
use App\Models\Informasi;
use App\Models\Slideshow;
use App\Models\KirimResep;
use App\Models\ProdukPromo;
use Illuminate\Http\Request;
use App\Models\UsulkanProduk;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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

        return view('beranda.kategori', [
            'title' => 'Kategori Produk',
            'itemkategori' => $itemkategori,
            'itemproduk' => $itemproduk,
            'kategoris' => Kategori::all()
        ]);
    }

    public function kategoriBySlug(Request $request, $slug)
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
            return view('beranda.produk', [
                'title' => $itemkategori->nama_kategori,
                'itemproduk' => $itemproduk,
                'listkategori' => $listkategori,
                'itemkategori' => $itemkategori
            ])->with('no', ($request->input('page') - 1) * 18);
        } else {
            return abort('404');
        }
    }

    public function produkPerKategori(Kategori $kategori)
    {
        return view('beranda.kategori', [
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
        return view('beranda.produk', [
            'title' => 'Produk',
            'itemproduk' => $itemproduk,
            'listkategori' => $listkategori
        ])->with('no', ($request->input('page') - 1) * 18);
    }

    public function produkDetail($id)
    {
        $itemproduk = Produk::where('slug_produk', $id)
            ->where('status', 'publish')
            ->first();

        if ($itemproduk) {
            return view('beranda.produk_detail', [
                'title' => $itemproduk->nama_produk,
                'data' => Produk::all(),
                'itemproduk' => $itemproduk,
            ]);
        } else {
            // kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
            return abort('404');
        }
    }

    // INFORMASI
    public function informasi()
    {
        return view('beranda.informasi', [
            'title' => 'Informasi Kesehatan',
            'info' => Informasi::all()
        ]);
    }

    // DETAIL INFORMASI
    public function detailInformasi(Informasi $informasi)
    {
        return view('beranda.detail_informasi', [
            'title' => 'Informasi Kesehatan',
            'informasi' => $informasi
        ]);
    }

    //KIRIM RESEP
    public function kirimResep()
    {
        return view('beranda.kirim_resep', [
            'title' => 'Kirim Resep'
        ]);
    }

    public function simpanResep(Request $request)
    {
        $data = array('title' => 'Simpan Resep');
        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('berkasKirimResep', $file->getClientOriginalName());


        KirimResep::create([
            'file' => $nama_file,
            'ket' => $request->input('ket')
        ]);

        Alert::success('Congrats', 'You\'ve Successfully Upload File');

        //kembali ke halaman sebelumnya
        return back();
    }

    //USULKAN PRODUK
    public function usulkanProduk()
    {
        return view('beranda.usulkan_produk', [
            'title' => 'Usulkan Produk'
        ]);
    }

    public function simpanUsulanProduk(Request $request)
    {
        $data = array('title' => 'Simpan Usulan');
        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('berkasUsulkanProduk', $file->getClientOriginalName());


        UsulkanProduk::create([
            'file' => $nama_file,
            'ket' => $request->input('ket')
        ]);

        Alert::success('Congrats', 'You\'ve Successfully Upload File');

        //kembali ke halaman sebelumnya
        return back();
    }

    //KELUHAN
    public function keluhan()
    {
        return view('beranda.keluhan', [
            'title' => 'Keluhan'
        ]);
    }

    public function simpanKeluhan(Request $request)
    {
        $data = array('title' => 'Simpan Keluhan');
        Keluhan::create([
            'pesanKeluhan' => $request->input('pesanKeluhan')
        ]);

        Alert::success('Congrats', 'You\'ve Successfully Send You\'re Complaints');

        //kembali ke halaman sebelumnya
        return back();
    }
}
