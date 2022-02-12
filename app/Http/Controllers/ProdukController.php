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

class ProdukController extends Controller
{
    public function daftar_produk()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $produk_admin   = Produk::all();
        // $produk_umkm    = Produk::where('umkm_id', $umkm->id)->get();
        switch ($users->login_level) {
            case 'admin':
                return view('admin.daftar-produk-admin', [
                    'users' => $users,
                    'produk_admin' => $produk_admin,
                ]);
                break;
            case 'umkm':
                $umkm           = Umkm::where('login_id', $users->id)->first();
                $produk_umkm    = Produk::where('umkm_id', $umkm->id)->get();
                return view('admin.daftar-produk-umkm', [
                    'users' => $users,
                    'produk_umkm' => $produk_umkm,
                ]);
                break;
        }
    }

    public function lihat_produk($id)
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $produk         = Produk::find($id);
        return view('admin.lihat-produk', [
            'users' => $users,
            'produk' => $produk
        ]);
    }

    public function tambah_produk()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $kategori_produk    = Kategori::where('kategori_tipe', 'produk')->get();
        return view('admin.tambah-produk', [
            'users' => $users,
            'kategori_produk' => $kategori_produk
        ]);
    }

    public function post_tambah_produk(Request $request)
    {
        $users              = session('data_login');
        $login_id           = Login::find($users->id);
        $umkm               = Umkm::where('login_id', $login_id->id)->first();
        $kategori_produk    = Kategori::find(intval($request->kategori_tipe));
        if ($umkm == null) {
            return back()->with('status', 'Maaf, anda tidak memiliki Toko');
        }

        $validatedProduk = $request->validate([
            'produk_nama'               => 'required',
            'produk_harga'              => 'required',
            'produk_keterangan'         => 'required',
        ]);

        $gambar_cek = $request->file('produk_headergambar');
        if (!$gambar_cek) {
            $gambar = null;
            $randomNamaGambar = null;
        } else {
            $randomNamaGambar = Str::random(10) . '.jpg';
            $gambar = $request->file('produk_headergambar')->move(public_path('gambarProduk'), strtolower($randomNamaGambar));
        }

        $produk_kode    = Str::random(5) . "-" . Str::random(5);
        $saveProduk     = new Produk;
        $saveProduk     = Produk::create([
            "produk_headergambar" => $randomNamaGambar,
            "produk_nama" => $validatedProduk["produk_nama"],
            "produk_kode" => strtoupper($produk_kode),
            "produk_keterangan" => $validatedProduk["produk_keterangan"],
            "produk_harga" => $validatedProduk["produk_harga"],
            // "produk_rating" => 0,
            // "produk_terjual" => 0,
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $saveProduk->umkm()->associate($umkm->id);
        $saveProduk->kategori()->associate($kategori_produk->id);
        $saveProduk->save();
        return redirect()->route('dashboard')->with('berhasil_tambah_produk', 'Produk telah berhasil ditambahkan!');
    }

    public function update_produk($id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $produk         = Produk::find($id);
        $kategori_produk    = Kategori::where('kategori_tipe', 'produk')->get();
        return view('admin.update-produk', [
            'users' => $users,
            'produk' => $produk,
            'kategori_produk' => $kategori_produk
        ]);
    }

    public function post_update_produk(Request $request, $id)
    {
        $users              = session('data_login');
        $login_id           = Login::find($users->id);
        $produk             = Produk::find($id);
        $umkm               = Umkm::where('login_id', $login_id->id)->first();
        $kategori_produk    = Kategori::find(intval($request->kategori_tipe));
        $gambar_cek         = $request->file('produk_headergambar');

        if (!$gambar_cek) {
            $gambar         = $produk->produk_headergambar;
        } else {
            $randomNamaGambar = Str::random(10) . '.jpg';
            $savegambar     = $request->file('produk_headergambar')->move(public_path('foto'), strtolower($randomNamaGambar));
            $gambar         = $savegambar->getFileName();
        }

        $produk->update([
            "produk_headergambar"       => $gambar,
            "produk_nama"               => $request->produk_nama,
            "produk_keterangan"         => $request->produk_keterangan,
            "produk_harga"              => $request->produk_harga,
            // "produk_rating"          => 0,
            // "produk_terjual"         => 0,
            "updated_at"                => now()
        ]);
        $produk->kategori()->dissociate($produk->kategori_id);
        $produk->save();
        $produk->kategori()->associate($kategori_produk->id);
        $produk->save();
        return redirect()->route('daftar-produk')->with('status', 'Data produk telah berhasil diubah!');
    }

    public function hapus_produk(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $produk         = Produk::find($id);
        $produk->forceDelete();
        $cekhapus       = Produk::find($produk->id);
        if (!$cekhapus == null) {
            return redirect()->route('daftar-produk')->with('status', 'Gagal menghapus Produk!');
        } else {
            return redirect()->route('daftar-produk')->with('status', 'Berhasil menghapus Produk!');
        }
    }
}
