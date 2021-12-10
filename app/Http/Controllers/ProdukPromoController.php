<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukPromo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdukPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('promo.index', [
            'title' => 'Produk Promo',
            'itempromo' => ProdukPromo::orderBy('id', 'desc')->paginate(20)
        ])->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // kita ambil data produk
        $itemproduk = Produk::orderBy('nama_produk', 'desc')
            ->where('status', 'publish')
            ->get();

        return view('promo.create', [
            'title' => 'Form Produk Promo',
            'itemproduk' => $itemproduk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'harga_awal' => 'required',
            'harga_akhir' => 'required',
            'diskon_persen' => 'required',
            'diskon_nominal' => 'required'
        ]);
        // cek dulu apakah sudah ada, produk hanya bisa masuk 1 promo
        $cekpromo = ProdukPromo::where('produk_id', $request->produk_id)->first();
        if ($cekpromo) {
            return back()->with('error', 'Data sudah ada');
        } else {
            ProdukPromo::create([
                'produk_id' => $request->produk_id,
                'harga_awal' => $request->harga_awal,
                'harga_akhir' => $request->harga_akhir,
                'diskon_persen' => $request->diskon_persen,
                'diskon_nominal' => $request->diskon_nominal,
                'user_id' => $request->user()->id
            ]);
            return redirect()->route('promo.index')->with('success', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukPromo  $produkPromo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukPromo  $produkPromo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('promo.edit', [
            'title' => 'Detail Produk',
            'itempromo' => ProdukPromo::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukPromo  $produkPromo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_id' => 'required',
            'harga_awal' => 'required',
            'harga_akhir' => 'required',
            'diskon_persen' => 'required',
            'diskon_nominal' => 'required'
        ]);

        // cek dulu apakah sudah ada, produk hanya bisa masuk 1 promo
        $cekpromo = ProdukPromo::where('produk_id', $request->produk_id)
            ->where('id', '!=', ProdukPromo::findOrFail($id)->id)
            ->first();
        if ($cekpromo) {
            return back()->with('error', 'Data sudah ada');
        } else {
            ProdukPromo::findOrFail($id)->update([
                'produk_id' => $request->produk_id,
                'harga_awal' => $request->harga_awal,
                'harga_akhir' => $request->harga_akhir,
                'diskon_persen' => $request->diskon_persen,
                'diskon_nominal' => $request->diskon_nominal,
                'user_id' => $request->user()->id
            ]);
            return redirect()->route('promo.index')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukPromo  $produkPromo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (ProdukPromo::findOrFail($id)->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
