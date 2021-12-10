<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        return view('image.index', [
            'title' => 'Data Image',
            'itemgambar' => Image::where('user_id', $request->user()->id)->paginate(20)
        ])->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $path = $request->file('image')->store('public/images');

        Image::create([
            'url' => $path,
            'user_id' => $request->user()->id
        ]);

        return back()->with('success', 'Image berhasil diupload');
    }

    public function destroy(Request $request, $id)
    {
        $itemgambar = Image::where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();
        if ($itemgambar) {
            Storage::delete($itemgambar->url);
            $itemgambar->delete();
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
}
