<?php

namespace App\Http\Controllers;

use App\Models\KirimResep;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApotekController extends Controller
{
    public function kirimResep()
    {
        return view('kirim_resep');
    }

    public function simpanResep(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'ket' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // nama file
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: ' . $file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'berkasKirimResep';

        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        KirimResep::create([
            'file' => $request->file,
            'ket' => $request->ket
        ]);
    }
}
