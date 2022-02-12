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

class MediaController extends Controller
{
    public function daftar_gallery()
    {
        $session_users  = session('data_login');
        $users          = Login::find($session_users->id);
        return view('admin.daftar-gallery', [
            'users' => $users
        ]);
    }
}
