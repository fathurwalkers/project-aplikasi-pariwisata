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

class WisataController extends Controller
{
    public function lihat_wisata($id)
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $wisata         = Wisata::find($id);
        return view('admin.lihat-wisata', [
            'users' => $users,
            'wisata' => $wisata
        ]);
    }

    public function daftar_wisata()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $wisata         = Wisata::all();
        return view('admin.daftar-wisata', [
            'users' => $users,
            'wisata' => $wisata
        ]);
    }

    public function tambah_wisata()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.tambah-wisata', [
            'users' => $users
        ]);
    }

    public function update_wisata($id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $wisata         = Wisata::find($id);
        return view('admin.update-wisata', [
            'users' => $users,
            'wisata' => $wisata
        ]);
    }

    public function post_update_wisata(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $wisata         = Wisata::find($id);
        $gambar_cek     = $request->file('wisata_header_foto');
        if (!$gambar_cek) {
            $gambar     = $wisata->wisata_header_foto;
        } else {
            $randomNamaGambar = Str::random(10) . '.jpg';
            $savegambar = $request->file('wisata_header_foto')->move(public_path('foto'), strtolower($randomNamaGambar));
            $gambar     = $savegambar->getFileName();
        }
        $updateWisata = $wisata->update([
            'wisata_nama'           => $request->wisata_nama,
            'wisata_deskripsi'      => $request->wisata_deskripsi,
            'wisata_kota'           => $request->wisata_kota,
            'wisata_kecamatan'      => $request->wisata_kecamatan,
            'wisata_kelurahan'      => $request->wisata_kelurahan,
            'wisata_provinsi'       => $request->wisata_provinsi,
            'wisata_url'            => $wisata->wisata_url,
            'wisata_maps'           => $request->wisata_maps,
            'wisata_header_foto'    => $gambar,
            'updated_at'            => now()
        ]);
        return redirect()->route('daftar-wisata')->with('status', 'Berhasil update wisata!');
    }

    public function post_tambah_wisata(Request $request)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $validatedData = $request->validate([
            'wisata_nama' => 'required',
            'wisata_deskripsi' => 'required',
            'wisata_kota' => 'required',
            'wisata_kecamatan' => 'required',
            'wisata_kelurahan' => 'required',
            'wisata_provinsi' => 'required',
            'wisata_maps' => 'required'
        ]);

        $gambar_cek = $request->file('wisata_header_foto');
        if (!$gambar_cek) {
            $gambar = null;
        } else {
            $randomNamaGambar = Str::random(10) . '.jpg';
            $gambar = $request->file('wisata_header_foto')->move(public_path('foto'), strtolower($randomNamaGambar));
        }

        $wisata = new Wisata;
        $wisata_url = Str::random(10);
        $saveWisata = $wisata->create([
            'wisata_nama'           => $validatedData["wisata_nama"],
            'wisata_deskripsi'      => $validatedData["wisata_deskripsi"],
            'wisata_kota'           => $validatedData["wisata_kota"],
            'wisata_kecamatan'      => $validatedData["wisata_kecamatan"],
            'wisata_kelurahan'      => $validatedData["wisata_kelurahan"],
            'wisata_provinsi'       => $validatedData["wisata_provinsi"],
            'wisata_url'            => $wisata_url,
            'wisata_maps'           => $validatedData["wisata_maps"],
            'wisata_header_foto'    => $gambar->getFileName(),
            'created_at'            => now(),
            'updated_at'            => now()
        ]);
        $saveWisata->login()->associate($users->id);
        $saveWisata->save();
        return redirect()->route('daftar-wisata')->with('status', 'Berhasil tambah wisata!');
    }

    public function hapus_wisata(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $wisata         = Wisata::find($id);
        $wisata->forceDelete();
        $cekhapus       = Wisata::find($wisata->id);
        if (!$cekhapus == null) {
            return redirect()->route('daftar-wisata')->with('status', 'Gagal menghapus Wisata!');
        } else {
            return redirect()->route('daftar-wisata')->with('status', 'Berhasil menghapus Wisata!');
        }
    }
}
