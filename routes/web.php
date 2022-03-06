<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\GeneratedataController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MediaController;

// Test Controller
Route::get('/test/test-multiple-upload-images', [TestController::class, 'testMultipleUploadImages'])->name('test-multiple-upload-images');
Route::post('/test/post-images', [TestController::class, 'testpostmultipleimages'])->name('post-multiple-images');

// Home Route
Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/test', [HomeController::class, 'test'])->name('format-layout');
    Route::get('/home/detail-wisata/{id}', [HomeController::class, 'detail_wisata'])->name('detail-wisata');
    Route::get('/home/detail-produk/{id}', [HomeController::class, 'detail_produk'])->name('detail-produk');
    Route::get('/home/daftar-produk', [HomeController::class, 'daftar_produk'])->name('home-daftar-produk');
    Route::get('/home/daftar-ukm', [HomeController::class, 'daftar_umkm'])->name('home-daftar-ukm');

    Route::get('/english', [HomeController::class, 'english_index'])->name('home-english');
    Route::get('/home/english/detail-wisata/{id}', [HomeController::class, 'english_detail_wisata'])->name('english-detail-wisata');
    Route::get('/home/english/daftar-produk', [HomeController::class, 'english_daftar_produk'])->name('english-home-daftar-produk');
    Route::get('/home/english/daftar-ukm', [HomeController::class, 'english_daftar_umkm'])->name('english-home-daftar-ukm');
});

// Dashboard Route
Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {

    // Index Route
    Route::get('/', [BackController::class, 'index'])->name('dashboard');

    // Wisata Route
    Route::get('/daftar-wisata', [WisataController::class, 'daftar_wisata'])->name('daftar-wisata');
    Route::get('/lihat-wisata/wisata/{id}', [WisataController::class, 'lihat_wisata'])->name('lihat-wisata');
    Route::get('/tambah-wisata', [WisataController::class, 'tambah_wisata'])->name('tambah-wisata');
    Route::get('/update-wisata/wisata/{id}', [WisataController::class, 'update_wisata'])->name('update-wisata');
    Route::post('/post-tambah-wisata', [WisataController::class, 'post_tambah_wisata'])->name('post-tambah-wisata');
    Route::post('/post-update-wisata/update/{id}', [WisataController::class, 'post_update_wisata'])->name('post-update-wisata');
    Route::post('/hapus-wisata/wisata/hapus/{id}', [WisataController::class, 'hapus_wisata'])->name('hapus-wisata');

    // UMKM Route
    Route::get('/pendaftaran-ukm', [UmkmController::class, 'pendaftaran_ukm'])->name('pendaftaran-ukm');
    Route::get('/tambah-umkm/tambah', [UmkmController::class, 'tambah_umkm'])->name('tambah-umkm');
    Route::get('/profile-umkm', [UmkmController::class, 'profile_umkm'])->name('profile-umkm');
    Route::get('/daftar-umkm', [UmkmController::class, 'daftar_umkm'])->name('daftar-umkm');
    Route::post('/hapus-umkm/umkm/hapus/{id}', [UmkmController::class, 'hapus_umkm'])->name('hapus-umkm');

    // Produk Route
    Route::get('/daftar-produk', [ProdukController::class, 'daftar_produk'])->name('daftar-produk');
    Route::get('/lihat-produk/produk/{id}', [ProdukController::class, 'lihat_produk'])->name('lihat-produk');
    Route::get('/tambah-produk', [ProdukController::class, 'tambah_produk'])->name('tambah-produk');
    Route::get('/update-produk/produk/{id}', [ProdukController::class, 'update_produk'])->name('update-produk');
    Route::post('/post-tambah-produk', [ProdukController::class, 'post_tambah_produk'])->name('post-tambah-produk');
    Route::post('/post-update-produk/produk/{id}', [ProdukController::class, 'post_update_produk'])->name('post-update-produk');
    Route::post('/hapus-produk/produk/hapus/{id}', [ProdukController::class, 'hapus_produk'])->name('hapus-produk');

    // Kategori Route
    Route::get('/daftar-kategori/wisata', [KategoriController::class, 'daftar_kategori_wisata'])->name('daftar-kategori-wisata');
    Route::get('/daftar-kategori/produk', [KategoriController::class, 'daftar_kategori_produk'])->name('daftar-kategori-produk');
    Route::get('/daftar-kategori', [KategoriController::class, 'daftar_kategori'])->name('daftar-kategori');
    Route::get('/tambah-kategori', [KategoriController::class, 'tambah_kategori'])->name('tambah-kategori');
    Route::get('/update-kategori/kategori/{id}', [KategoriController::class, 'update_kategori'])->name('update-kategori');
    Route::post('/kategori/tambah/post', [KategoriController::class, 'post_tambah_kategori'])->name('post-tambah-kategori');
    Route::post('/post-update-kategori/kategori/{id}', [KategoriController::class, 'post_update_kategori'])->name('post-update-kategori');
    Route::post('/hapus-kategori-produk/kategori/hapus/{id}', [KategoriController::class, 'hapus_kategori_produk'])->name('hapus-kategori-produk');
    Route::post('/hapus-kategori-wisata/kategori/hapus/{id}', [KategoriController::class, 'hapus_kategori_wisata'])->name('hapus-kategori-wisata');

    // Gallery Controller
    Route::get('/daftar-gallery', [MediaController::class, 'daftar_gallery'])->name('daftar-gallery');

    // Miscellenaous
    Route::get('/format-layout', [BackController::class, 'format_layout'])->name('format-layout');
    Route::get('/profile', [BackController::class, 'profile'])->name('profile');

    // Lihat Route
    Route::post('/lihat-pengguna/user/{id}', [BackController::class, 'lihat_profil_pengguna'])->name('lihat-pengguna');

    // Daftar Route
    Route::get('/daftar-pengguna', [BackController::class, 'daftar_pengguna'])->name('daftar-pengguna');

    // Generate Route
    Route::get('/generate-media', [GenerateController::class, 'generate_media'])->name('generate-media');
    Route::get('/generate-user', [GenerateController::class, 'generate_user'])->name('generate-user');
    Route::get('/generate-user-umkm', [GenerateController::class, 'generate_user_umkm'])->name('generate-user-umkm');
    Route::get('/generate-wisata', [GenerateController::class, 'generate_wisata'])->name('generate-wisata');
    Route::get('/generate-umkm', [GenerateController::class, 'generate_umkm'])->name('generate-umkm');
    Route::get('/generate-produk', [GenerateController::class, 'generate_produk'])->name('generate-produk');
    Route::get('/generate-media-produk', [GenerateController::class, 'generate_media_produk'])->name('generate-media-produk');
    Route::get('/chained-generate', [GenerateController::class, 'chained_generate'])->name('chained-generate');
});

// Authentication Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/post-login', [LoginController::class, 'post_login'])->name('post-login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/post-register', [LoginController::class, 'post_register'])->name('post-register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/generate/chained-data-generate', [GeneratedataController::class, 'chained_data_generate'])->name('chained-data-generate');
