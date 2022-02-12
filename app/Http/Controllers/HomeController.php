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

class HomeController extends Controller
{
    public function index()
    {
        $produk             = Produk::all();
        $umkm               = Umkm::all();
        $wisata             = Wisata::paginate(9);
        $kategori           = Kategori::all();
        $kategori_wisata    = Kategori::where('kategori_tipe', 'wisata')->get();
        $kategori_produk    = Kategori::where('kategori_tipe', 'produk')->get();
        return view('home.index', [
            'produk' => $produk,
            'umkm' => $umkm,
            'wisata' => $wisata,
            'kategori' => $kategori,
            'kategori_wisata' => $kategori_wisata,
            'kategori_produk' => $kategori_produk
        ]);
    }

    public function test()
    {
        return vieW('home.format-layout');
    }

    public function detail_wisata($id)
    {
        $wisata     = Wisata::find($id);
        return view('home.detail-wisata', [
            'wisata' => $wisata
        ]);
    }

    public function daftar_produk()
    {
        $produk = Produk::paginate(6);
        return view('home.daftar-produk', [
            'produk' => $produk
        ]);
    }
}
