<?php

namespace App\Http\Controllers;

use App\Models\KirimResep;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use RealRashid\SweetAlert\Facades\Alert;

class ApotekController extends Controller
{
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
}
