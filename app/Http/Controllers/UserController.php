<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('user.index', [
            'title' => 'User Profil',
            'itemprofil' => User::where('id', $request->user()->id)->first()
        ]);
    }

    public function setting(Request $request)
    {
        return view('user.setting', [
            'title' => 'Setting Profil',
            'itemprofil' => User::where('id', $request->user()->id)->first()
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'profil_id' => ['required'],
        ]);

        $itemprofil = User::where('id', $request->user()->id)
            ->where('id', $request->profil_id)
            ->first();

        if ($itemprofil) {
            $path = $request->file('image')->store('public/images/profil');
            $itemprofil->update([
                'foto' => $path
            ]);
            return back()->with('success', 'Image berhasil diupload');
        } else {
            return back()->with('error', 'Kategori tidak ditemukan');
        }
    }

    public function deleteImage(Request $request)
    {
        $itemprofil = User::where('id', $request->user()->id)
            ->first();
        if ($itemprofil) {
            // kita cari dulu database berdasarkan url gambar
            $itemgambar = Image::where('url', $itemprofil->foto)->first();
            // hapus imagenya
            if ($itemgambar) {
                Storage::delete($itemgambar->url);
                $itemgambar->delete();
            }
            // baru update foto kategori
            $itemprofil->update(['foto' => null]);
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
}
