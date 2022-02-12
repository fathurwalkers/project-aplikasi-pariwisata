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

class BackController extends Controller
{
    public function index()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);

        $produk         = Produk::all()->count();
        $wisata         = Wisata::all()->count();
        $user           = Login::all()->count();
        $umkm           = Umkm::all()->count();

        return view('admin.index', [
            'users'     => $users,
            'produk'    => $produk,
            'wisata'    => $wisata,
            'user'      => $user,
            'umkm'      => $umkm
        ]);
    }

    public function login()
    {
        $users  = session('data_login');
        if ($users !== null) {
            return redirect('dashboard')->with('gagal_beralih', 'Anda telah login, tidak dapat beralih ke halaman login!');
        }
        return view('login');
    }

    public function register()
    {
        $users  = session('data_login');
        if ($users !== null) {
            return redirect('dashboard')->with('gagal_beralih', 'Anda telah login, tidak dapat beralih ke halaman register!');
        }
        return view('register');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['data_login']);
        $request->session()->flush();
        return redirect()->route('login')->with('berhasil_logout', 'Anda telah logout!');
    }

    public function profile()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        return view('admin.profile', [
            'users' => $users
        ]);
    }

    // LIHAT METHOD ================================================================
    public function lihat_profil_pengguna(Request $request, $id)
    {
        $pengguna = Login::find($id);
        return view('admin.profil-pengguna', [
            'pengguna' => $pengguna
        ]);
    }

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
    // END LIHAT METHOD ============================================================

    // DAFTAR METHOD ===============================================================
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

    public function daftar_umkm()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $umkm           = Umkm::with('login')->get();
        return view('admin.daftar-umkm', [
            'users' => $users,
            'umkm' => $umkm
        ]);
    }

    public function daftar_pengguna()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        $pengguna = Login::where('login_level', 'user')->get();
        return view('admin.daftar-pengguna', [
            'users' => $users,
            'pengguna' => $pengguna,
        ]);
    }

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

    public function daftar_gallery()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.daftar-gallery', [
            'users' => $users
        ]);
    }

    public function daftar_kategori()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.daftar-kategori', [
            'users' => $users
        ]);
    }

    // END DAFTAR METHOD ===============================================================

    // TAMBAH ROUTE ====================================================================
    public function tambah_kategori()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.tambah-kategori', [
            'users' => $users
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
    // END TAMBAH ROUTE ========================================================

    // UBAH ROUTE ==============================================================
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
    // END UBAH ROUTE ==========================================================

    public function format_layout()
    {
        return view('admin.format-layout');
    }

    // POST Route ==============================================================
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

    public function post_login(Request $request)
    {
        $cariUser = Login::where('login_username', $request->login_username)->firstOrFail();
        if ($cariUser->count() == 0) {
            return back()->with('status_fail', 'Maaf username atau password salah!')->withInput();
        }
        $data_login = Login::find($cariUser->id);
        switch ($data_login->login_level) {
            case 'admin':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard')->with('berhasil_login', 'Anda berhasil Login!');
                    }
                }
                break;
            case 'umkm':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard')->with('berhasil_login', 'Anda berhasil Login!');
                    }
                }
                break;
            case 'user':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard')->with('berhasil_login', 'Anda berhasil Login!');
                    }
                }
                break;
        }
        return back()->with('status_fail', 'Maaf username atau password salah!')->withInput();
    }

    public function post_register(Request $request)
    {
        $login_data = new Login;
        $validatedLogin = $request->validate([
            'login_nama'        => 'required',
            'login_username'    => 'required',
            'login_password'    => 'required',
            'login_email'       => 'required',
            'login_telepon'     => 'required'
        ]);
        $hashPassword = Hash::make($validatedLogin["login_password"], [
            'rounds' => 12,
        ]);
        $token = Str::random(16);
        $level = "user";
        $login_status = "verified";
        $login_data = Login::create([
            'login_nama'        => $validatedLogin["login_nama"],
            'login_username'    => $validatedLogin["login_username"],
            'login_password'    => $hashPassword,
            'login_email'       => $validatedLogin["login_email"],
            'login_telepon'     => $validatedLogin["login_telepon"],
            'login_token'       => $token,
            'login_level'       => $level,
            'login_status'      => $login_status,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
        $login_data->save();
        return redirect()->route('login')->with('berhasil_register', 'Berhasil melakukan registrasi!');
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
    // END POST METHOD =========================================================

    // HAPUS METHOD ============================================================ 
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

    public function hapus_umkm(Request $request, $id)
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $umkm           = Umkm::find($id);
        // $umkm->login()->dissociate();
        // $umkm->media()->detach();
        // $umkm->produk()->dissociate();
        $umkm->forceDelete();
        return redirect()->route('daftar-umkm')->with('status', 'Berhasil hapus umkm!');
    }
    // END HAPUS METHOD ======================================================== 
}
