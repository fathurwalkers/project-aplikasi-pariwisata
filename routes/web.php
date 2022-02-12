<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\TestController;

// Test Controller
Route::get('/test/test-multiple-upload-images', [TestController::class, 'testMultipleUploadImages'])->name('test-multiple-upload-images');
Route::post('/test/post-images', [TestController::class, 'testpostmultipleimages'])->name('post-multiple-images');

// Home Route
Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/test', [HomeController::class, 'test'])->name('format-layout');
    Route::get('/home/detail-wisata/{id}', [HomeController::class, 'detail_wisata'])->name('detail-wisata');
    Route::get('/home/daftar-produk', [HomeController::class, 'daftar_produk'])->name('home-daftar-produk');
});

// Dashboard Route
Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {

    // UMKM Route
    Route::get('/tambah-umkm/tambah', [UmkmController::class, 'tambah_umkm'])->name('tambah-umkm');
    Route::get('/profile-umkm', [UmkmController::class, 'profile_umkm'])->name('profile-umkm');

    // Kategori
    Route::get('/daftar-kategori/wisata', [BackController::class, 'daftar_kategori_wisata'])->name('daftar-kategori-wisata');
    Route::get('/daftar-kategori/produk', [BackController::class, 'daftar_kategori_produk'])->name('daftar-kategori-produk');

    // Miscellenaous
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/format-layout', [BackController::class, 'format_layout'])->name('format-layout');
    Route::get('/profile', [BackController::class, 'profile'])->name('profile');

    // Lihat Route
    Route::post('/lihat-pengguna/user/{id}', [BackController::class, 'lihat_profil_pengguna'])->name('lihat-pengguna');
    Route::get('/lihat-wisata/wisata/{id}', [BackController::class, 'lihat_wisata'])->name('lihat-wisata');
    Route::get('/lihat-produk/produk/{id}', [BackController::class, 'lihat_produk'])->name('lihat-produk');

    // Daftar Route
    Route::get('/daftar-pengguna', [BackController::class, 'daftar_pengguna'])->name('daftar-pengguna');
    Route::get('/daftar-produk', [BackController::class, 'daftar_produk'])->name('daftar-produk');
    Route::get('/daftar-wisata', [BackController::class, 'daftar_wisata'])->name('daftar-wisata');
    Route::get('/daftar-gallery', [BackController::class, 'daftar_gallery'])->name('daftar-gallery');
    Route::get('/daftar-kategori', [BackController::class, 'daftar_kategori'])->name('daftar-kategori');
    Route::get('/daftar-umkm', [BackController::class, 'daftar_umkm'])->name('daftar-umkm');

    // Tambah Route
    Route::get('/tambah-wisata', [BackController::class, 'tambah_wisata'])->name('tambah-wisata');
    Route::get('/tambah-produk', [BackController::class, 'tambah_produk'])->name('tambah-produk');
    Route::get('/tambah-kategori', [BackController::class, 'tambah_kategori'])->name('tambah-kategori');

    // Update Route
    Route::get('/update-wisata/wisata/{id}', [BackController::class, 'update_wisata'])->name('update-wisata');
    Route::get('/update-produk/produk/{id}', [BackController::class, 'update_produk'])->name('update-produk');
    Route::get('/update-kategori/kategori/{id}', [BackController::class, 'update_kategori'])->name('update-kategori');

    // Post Route
    Route::post('/kategori/tambah/post', [BackController::class, 'post_tambah_kategori'])->name('post-tambah-kategori');
    Route::post('/post-update-wisata/update/{id}', [BackController::class, 'post_update_wisata'])->name('post-update-wisata');
    Route::post('/post-update-kategori/kategori/{id}', [BackController::class, 'post_update_kategori'])->name('post-update-kategori');
    Route::post('/post-tambah-produk', [BackController::class, 'post_tambah_produk'])->name('post-tambah-produk');
    Route::post('/post-tambah-wisata', [BackController::class, 'post_tambah_wisata'])->name('post-tambah-wisata');
    Route::post('/post-update-produk/produk/{id}', [BackController::class, 'post_update_produk'])->name('post-update-produk');

    // Hapus Route
    Route::post('/hapus-wisata/wisata/hapus/{id}', [BackController::class, 'hapus_wisata'])->name('hapus-wisata');
    Route::post('/hapus-produk/produk/hapus/{id}', [BackController::class, 'hapus_produk'])->name('hapus-produk');
    Route::post('/hapus-umkm/umkm/hapus/{id}', [BackController::class, 'hapus_umkm'])->name('hapus-umkm');
    Route::post('/hapus-kategori-produk/kategori/hapus/{id}', [BackController::class, 'hapus_kategori_produk'])->name('hapus-kategori-produk');
    Route::post('/hapus-kategori-wisata/kategori/hapus/{id}', [BackController::class, 'hapus_kategori_wisata'])->name('hapus-kategori-wisata');

    // Generate Route
    Route::get('/generate-media', [GenerateController::class, 'generate_media'])->name('generate-media');
    Route::get('/generate-user', [GenerateController::class, 'generate_user'])->name('generate-user');
    Route::get('/generate-user-umkm', [GenerateController::class, 'generate_user_umkm'])->name('generate-user-umkm');
    Route::get('/generate-wisata', [GenerateController::class, 'generate_wisata'])->name('generate-wisata');
    Route::get('/generate-umkm', [GenerateController::class, 'generate_umkm'])->name('generate-umkm');
    Route::get('/generate-produk', [GenerateController::class, 'generate_produk'])->name('generate-produk');
    Route::get('/chained-generate', [GenerateController::class, 'chained_generate'])->name('chained-generate');
});

// Misc Route
Route::get('/login', [BackController::class, 'login'])->name('login');
Route::post('/post-login', [BackController::class, 'post_login'])->name('post-login');
Route::get('/register', [BackController::class, 'register'])->name('register');
Route::post('/post-register', [BackController::class, 'post_register'])->name('post-register');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');
