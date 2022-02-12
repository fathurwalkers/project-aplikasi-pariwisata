<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Wisata;
use App\Models\Umkm;

class KategoriController extends Controller
{
    public function daftar_kategori()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.daftar-kategori', [
            'users' => $users
        ]);
    }

    public function daftar_kategori_wisata()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $kategori_wisata = Kategori::where('kategori_tipe', 'wisata')->get();
        return view('admin.daftar-kategori-wisata', [
            'users' => $users,
            'kategori_wisata' => $kategori_wisata
        ]);
    }

    public function daftar_kategori_produk()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $kategori_produk = Kategori::where('kategori_tipe', 'produk')->get();
        return view('admin.daftar-kategori-produk', [
            'users' => $users,
            'kategori_produk' => $kategori_produk
        ]);
    }

    public function tambah_kategori()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.tambah-kategori', [
            'users' => $users
        ]);
    }

    public function post_tambah_kategori(Request $request)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $validatedData = $request->validate([
            'kategori_nama' => 'required',
            'kategori_tipe' => 'required|filled',
        ]);
        $kategori_kode = Str::random(5);
        $kategori = new Kategori;
        $saveKategori = $kategori->create([
            'kategori_nama'     => $validatedData["kategori_nama"],
            'kategori_kode'     => strtoupper($kategori_kode),
            'kategori_tipe'     => $validatedData["kategori_tipe"],
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
        $saveKategori->save();
    }

    public function update_kategori($id)
    {
        $session_users      = session('data_login');
        $users              = Login::find($session_users->id);
        $kategori           = Kategori::find($id);
        $kategori_tipe      = $kategori->kategori_tipe;
        return view('admin.update-kategori', [
            'users' => $users,
            'kategori' => $kategori,
            'kategori_tipe' => $kategori_tipe
        ]);
    }

    public function post_update_kategori(Request $request, $id)
    {
        $session_users      = session('data_login');
        $users              = Login::find($session_users->id);
        $kategori           = Kategori::find($id);
        $validatedData      = $request->validate([
            'kategori_nama' => 'required',
            'kategori_tipe' => 'required|filled',
        ]);
        $kategori->update([
            'kategori_nama' => $validatedData["kategori_nama"],
            'kategori_tipe' => $validatedData["kategori_tipe"],
            'updated_at'    => now()
        ]);
        return redirect()->route('daftar-kategori-produk')->with('status', 'Berhasil update kategori!');
    }

    public function hapus_kategori_produk(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $kategori       = Kategori::find($id);
        $kategori->forceDelete();
        $cekhapus       = Kategori::find($kategori->id);
        if (!$cekhapus == null) {
            return redirect()->route('daftar-kategori-produk')->with('status', 'Gagal menghapus Kategori Produk!');
        } else {
            return redirect()->route('daftar-kategori-produk')->with('status', 'Berhasil menghapus Kategori Produk!');
        }
    }

    public function hapus_kategori_wisata(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $kategori       = Kategori::find($id);
        $kategori->forceDelete();
        $cekhapus       = Kategori::find($kategori->id);
        if (!$cekhapus == null) {
            return redirect()->route('daftar-kategori-wisata')->with('status', 'Gagal menghapus Kategori Wisata!');
        } else {
            return redirect()->route('daftar-kategori-wisata')->with('status', 'Berhasil menghapus Kategori Wisata!');
        }
    }
}
