<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use App\Models\Login;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Wisata;
use App\Models\Umkm;

class HomeController extends Controller
{
    public function index()
    {
        $produk                 = Produk::all();
        $umkm                   = Umkm::all();
        $wisata                 = Wisata::paginate(9);
        $kategori               = Kategori::all();
        $kategori_wisata        = Kategori::where('kategori_tipe', 'wisata')->get();
        $kategori_produk        = Kategori::where('kategori_tipe', 'produk')->get();
        return view('home.index', [
            'produk'            => $produk,
            'umkm'              => $umkm,
            'wisata'            => $wisata,
            'kategori'          => $kategori,
            'kategori_wisata'   => $kategori_wisata,
            'kategori_produk'   => $kategori_produk
        ]);
    }

    public function test()
    {
        return vieW('home.format-layout');
    }

    public function detail_wisata($id)
    {
        $wisata                 = Wisata::find($id);
        $umkm                   = Umkm::where('wisata_id', $wisata->id)->get();
        $arr_umkm               = [];
        $arr_produk             = [];

        // dump($arr_umkm);

        foreach ($umkm as $item) {
            $arr_umkm = Arr::prepend($arr_umkm, $item);
        }
        $countumkm = count($arr_umkm);

        for ($i=0; $i < $countumkm; $i++) {
            $product = Produk::where('umkm_id', $arr_umkm[$i]["id"])->get();
            foreach ($product as $val) {
                $arr_produk = Arr::prepend($arr_produk, $val);
            }
        }

        // $produk = collect($arr_produk)->paginate(5);
        // dd($produk);

        $produk = $arr_produk;

        return view('home.detail-wisata', [
            'wisata'            => $wisata,
            'produk'            => $produk
        ]);
    }

    public function daftar_produk()
    {
        $produk                 = Produk::paginate(6);
        return view('home.daftar-produk', [
            'produk'            => $produk
        ]);
    }

    public function daftar_umkm()
    {
        $umkm                 = Umkm::paginate(6);
        return view('home.daftar-ukm', [
            'umkm'            => $umkm
        ]);
    }

    // =========================================================

    // ENGLISH
    public function english_index()
    {
        $produk                 = Produk::all();
        $umkm                   = Umkm::all();
        $wisata                 = Wisata::paginate(9);
        $kategori               = Kategori::all();
        $kategori_wisata        = Kategori::where('kategori_tipe', 'wisata')->get();
        $kategori_produk        = Kategori::where('kategori_tipe', 'produk')->get();
        return view('home.english.index', [
            'produk'            => $produk,
            'umkm'              => $umkm,
            'wisata'            => $wisata,
            'kategori'          => $kategori,
            'kategori_wisata'   => $kategori_wisata,
            'kategori_produk'   => $kategori_produk
        ]);
    }

    public function english_detail_wisata($id)
    {
        $wisata                 = Wisata::find($id);
        return view('home.english.detail-wisata', [
            'wisata'            => $wisata
        ]);
    }

    public function english_daftar_produk()
    {
        $produk                 = Produk::paginate(6);
        return view('home.english.daftar-produk', [
            'produk'            => $produk
        ]);
    }

    public function english_daftar_umkm()
    {
        $umkm                 = Umkm::paginate(6);
        return view('home.english.daftar-ukm', [
            'umkm'            => $umkm
        ]);
    }

}
