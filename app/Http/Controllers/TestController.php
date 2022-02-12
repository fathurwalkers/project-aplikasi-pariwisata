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

class TestController extends Controller
{
    public function testMultipleUploadImages()
    {
        return view('test.multiple-upload-images');
    }

    public function testpostmultipleimages(Request $request)
    {
        dd($request->images);
    }
}
