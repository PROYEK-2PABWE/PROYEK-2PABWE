<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('kategori.index', [
            'title' => 'Kategori Produk',
            'itemkategori' =>  Kategori::orderBy('created_at', 'desc')->paginate(20)
        ])->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create', [
            'title' => 'Form Kategori'
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
            'kode_kategori' => ['required', 'unique:kategori'],
            'nama_kategori' => ['required'],
            'slug_kategori' => ['required'],
            'deskripsi_kategori' => ['required'],
        ]);

        Kategori::create([
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi_kategori' => $request->deskripsi_kategori,
            'user_id' => $request->user()->id,
            'slug_kategori' => Str::slug($request->slug_kategori),
            'status' => 'publish'
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kategori.edit', [
            'title' => 'Form Edit Kategori',
            'itemkategori' => Kategori::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => ['required'],
            'slug_kategori' => ['required'],
            'deskripsi_kategori' => ['required'],
        ]);

        $slug = Str::slug($request->slug_kategori); //slug kita gunakan nanti pas buka produk per kategori
        $validasislug = Kategori::where('id', '!=', $id) //yang id-nya tidak sama dengan $id
            ->where('slug_kategori', $slug) //slug kita gunakan nanti pas buka produk per kategori
            ->first();


        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            Kategori::findOrFail($id)->update([
                'kode_kategori' => $request->kode_kategori,
                'nama_kategori' => $request->nama_kategori,
                'slug_kategori' => $request->slug_kategori,
                'deskripsi_kategori' => $request->deskripsi_kategori,
                'slug' => $slug
            ]);
            return redirect()->route('kategori.index')->with('success', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemkategori = Kategori::findOrFail($id); //cari berdasarkan id = $id, 
        // kalo ga ada error page not found 404
        if (count([$itemkategori->produk]) > 0) {
            // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
            return back()->with('error', 'Hapus dulu produk di dalam kategori ini, proses dihentikan');
        } else {
            if ($itemkategori->delete()) {
                return back()->with('success', 'Data berhasil dihapus');
            } else {
                return back()->with('error', 'Data gagal dihapus');
            }
        }
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'kategori_id' => ['required'],
        ]);

        $itemkategori = Kategori::where('user_id', $request->user()->id)
            ->where('id', $request->kategori_id)
            ->first();

        if ($itemkategori) {
            $path = $request->file('image')->store('public/images');
            $itemkategori->update([
                'foto' => $path
            ]);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }

    public function deleteImage(Request $request, $id)
    {
        $itemkategori = Kategori::where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();
        if ($itemkategori) {
            // kita cari dulu database berdasarkan url gambar
            $itemgambar = Image::where('url', $itemkategori->foto)->first();
            // hapus imagenya
            if ($itemgambar) {
                Storage::delete($itemgambar->url);
                $itemgambar->delete();
            }
            // baru update foto kategori
            $itemkategori->update(['foto' => null]);
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
}
