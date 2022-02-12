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

class UmkmController extends Controller
{
    public function tambah_umkm()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $cek_umkm       = Umkm::where('login_id', $users->id)->first();
        if (!$cek_umkm == null) {
            return redirect()->route('dashboard')->with('status', 'Maaf, UKM untuk pengguna ini telah terdaftar!');
        } else {
            return view('umkm.tambah-umkm', [
                'users' => $users
            ]);
        }
    }

    public function profile_umkm()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        $umkm           = Umkm::where('login_id', $users->id)->first();
        return view('admin.profile-umkm', [
            'umkm' => $umkm
        ]);
    }
}
