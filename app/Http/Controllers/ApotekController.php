<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Keluhan;
use App\Models\KirimResep;
use App\Models\UsulkanProduk;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class ApotekController extends Controller
{
    //KIRIM RESEP
    public function kirimResep()
    {
        return view('kirim_resep');
    }

    public function simpanResep(Request $request)
    {

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
        return view('usulkan_produk');
    }

    public function simpanUsulanProduk(Request $request)
    {

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
        return view('keluhan');
    }

    public function simpanKeluhan(Request $request)
    {

        Keluhan::create([
            'pesanKeluhan' => $request->input('pesanKeluhan')
        ]);

        Alert::success('Congrats', 'You\'ve Successfully Send You\'re Complaints');

        //kembali ke halaman sebelumnya
        return back();
    }

    // DETAIL PRODUK
    public function detailProduk() {
        $data = Produk::all();
        return view('produk', ['data' => $data]);
    }
}
