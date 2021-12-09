<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Register;

use App\Models\Informasi;
use App\Models\KirimResep;
use Illuminate\Http\Request;
use App\Models\UsulkanProduk;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ApotekController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Register
    public function register()
    {
        return view('register', [
            'title' => 'Register',
            'register' => Register::all()
        ]);
    }

    //Beranda
    public function beranda()
    {
        return view('beranda', [
            'title' => 'Beranda',
            'beranda' => Beranda::all()
        ]);
    }

    // INFORMASI
    public function kategori()
    {
        return view('kategori', [
            'title' => 'Kategori Produk',
        ]);
    }

=======
>>>>>>> f6432d218a45d7e766696e674b3a2121fc35fa44
    // INFORMASI
    public function informasi()
    {
        return view('informasi', [
            'title' => 'Informasi Kesehatan',
            'info' => Informasi::all()
        ]);
    }

    // DETAIL INFORMASI
    public function detailInformasi(Informasi $informasi)
    {
        return view('detailInformasi', [
            'title' => 'Informasi Kesehatan',
            'informasi' => $informasi
        ]);
    }

    //KIRIM RESEP
    public function kirimResep()
    {
        return view('kirim_resep', [
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
        return view('usulkan_produk', [
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
        return view('keluhan', [
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
