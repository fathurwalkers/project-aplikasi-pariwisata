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

    public function profile()
    {
        $session_users  = session('data_login');
        $users          = Login::findOrFail($session_users->id);
        return view('admin.profile', [
            'users' => $users
        ]);
    }

    public function lihat_profil_pengguna(Request $request, $id)
    {
        $pengguna = Login::find($id);
        return view('admin.profil-pengguna', [
            'pengguna' => $pengguna
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

    public function format_layout()
    {
        return view('admin.format-layout');
    }
}
