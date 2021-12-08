<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index', [
            'title' => 'Form Laporan Penjualan'
        ]);
    }

    public function proses()
    {
        return view('laporan.proses', [
            'title' => 'Laporan Penjualan'
        ]);
    }
}
