<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\ProdukImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('produk.index', [
            'title' => 'Produk',
            'itemproduk' => Produk::orderBy('created_at', 'desc')->paginate(20)
        ])->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create', [
            'title' => 'Form Produk Baru',
            'itemkategori' => Kategori::orderBy('nama_kategori', 'asc')->get()
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
            'kode_produk' => ['required', 'unique:produk'],
            'nama_produk' => ['required'],
            'slug_produk' => ['required'],
            'deskripsi_produk' => ['required'],
            'kategori_id' => ['required'],
            'qty' => ['required', 'numeric'],
            'satuan' => ['required'],
            'harga' => ['required', 'numeric'],
        ]);

        Produk::create([
            'slug_produk' => Str::slug($request->slug_produk),
            'user_id' =>  $request->user()->id,
            'status' => 'publish',
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => $request->kategori_id,
            'qty' => $request->qty,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
        ]);

        return redirect()->route('produk.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('produk.show', [
            'title' => 'Foto Produk',
            'itemproduk' => Produk::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('produk.edit', [
            'title' => 'Form Edit Produk',
            'itemproduk' => Produk::findOrFail($id),
            'itemkategori' => Kategori::orderBy('nama_kategori', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_produk' => 'required|unique:produk,id,' . $id,
            'nama_produk' => 'required',
            'slug_produk' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required',
            'qty' => 'required|numeric',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);

        // kalo ga ada error page not found 404
        $slug = Str::slug($request->slug_produk); //slug kita gunakan nanti pas buka produk
        // kita validasi dulu, biar tidak ada slug yang sama
        $validasislug = Produk::where('id', '!=', $id) //yang id-nya tidak sama dengan $id
            ->where('slug_produk', $slug)
            ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            Produk::findOrFail($id)->update([
                'kode_produk' => $request->kode_produk,
                'nama_produk' => $request->nama_produk,
                'slug_produk' => Str::slug($request->slug_produk),
                'deskripsi_produk' => $request->deskripsi_produk,
                'kategori_id' => $request->kategori_id,
                'qty' => $request->qty,
                'satuan' => $request->satuan,
                'harga' => $request->harga,
                'user_id' =>  $request->user()->id,
                'status' => 'publish',
            ]);
            return redirect()->route('produk.index')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // kalo ga ada error page not found 404
        if (Produk::findOrFail($id)->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }


    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'produk_id' => ['required'],
        ]);

        $itemproduk = Produk::where('user_id', $request->user()->id)
            ->where('id', $request->produk_id)
            ->first();
        if ($itemproduk) {
            $path = $request->file('image')->store('public/images/produk');
            ProdukImage::create([
                'foto' => $path,
                'produk_id' => $request->produk_id
            ]);
            $itemproduk->update(['foto' => $path]);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }

    public function deleteImage(Request $request, $id)
    {
        // ambil data produk image by id
        $itemprodukimage = ProdukImage::findOrFail($id);
        // ambil produk by produk_id kalau tidak ada maka error 404
        $itemproduk = Produk::findOrFail($itemprodukimage->produk_id);
        // kita cari dulu database berdasarkan url gambar
        $itemgambar = Image::where('url', $itemprodukimage->foto)->first();
        // hapus imagenya
        if ($itemgambar) {
            Storage::delete($itemgambar->url);
            $itemgambar->delete();
        }
        // baru update hapus produk image
        $itemprodukimage->delete();
        //ambil 1 buah produk image buat diupdate jadi banner produk
        $itemsisaprodukimage = ProdukImage::where('produk_id', $itemproduk->id)->first();
        if ($itemsisaprodukimage) {
            $itemproduk->update(['foto' => $itemsisaprodukimage->foto]);
        } else {
            $itemproduk->update(['foto' => null]);
        }
        //end update jadi banner produk
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function loadAsync($id)
    {
        $respon = [
            'status' => 'success',
            'msg' => 'Data ditemukan',
            'itemproduk' => Produk::findOrFail($id)
        ];
        return response()->json($respon, 200);
    }
}
