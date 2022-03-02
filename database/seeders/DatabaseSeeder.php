<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Login;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // ADMIN
        // $token = Str::random(16);
        // $role = "admin";
        // $hashPassword = Hash::make('jancok', [
        //     'rounds' => 12,
        // ]);
        // $hashToken = Hash::make($token, [
        //     'rounds' => 12,
        // ]);
        // Login::create([
        //     'login_foto' => 'foto/default-user.png',
        //     'login_nama' => 'FathurWalkers',
        //     'login_username' => 'fathurwalkers',
        //     'login_password' => $hashPassword,
        //     'login_email' => 'fathurwalkers44@gmail.com',
        //     'login_telepon' => '085342072185',
        //     'login_token' => $hashToken,
        //     'login_level' => $role,
        //     'login_status' => "verified",
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('citra', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_foto' => 'foto/default-user.png',
            'login_nama' => 'citra',
            'login_username' => 'citra',
            'login_password' => $hashPassword,
            'login_email' => 'citra@gmail.com',
            'login_telepon' => '0812820932323',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);


        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('admin', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_foto' => 'foto/default-user.png',
            'login_nama' => 'Administrator',
            'login_username' => 'admin',
            'login_password' => $hashPassword,
            'login_email' => 'administrator@gmail.com',
            'login_telepon' => '0812820932323',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // Petugas
        $token = Str::random(16);
        $role = "umkm";
        $hashPassword = Hash::make('petugas_umkm', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_foto' => 'foto/default-user.png',
            'login_nama' => 'Petugas 1',
            'login_username' => 'petugas_umkm',
            'login_password' => $hashPassword,
            'login_email' => 'petugas_umkm@gmail.com',
            'login_telepon' => '08233413932',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // User Pertama
        $token = Str::random(16);
        $role = "user";
        $hashPassword = Hash::make('user1234', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_foto' => 'foto/default-user.png',
            'login_nama' => 'User 1',
            'login_username' => 'user1',
            'login_password' => $hashPassword,
            'login_email' => 'user1@gmail.com',
            'login_telepon' => '0822824232',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // User Kedua
        $token = Str::random(16);
        $role = "user";
        $hashPassword = Hash::make('user1234', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_foto' => 'foto/default-user.png',
            'login_nama' => 'User 2',
            'login_username' => 'user2',
            'login_password' => $hashPassword,
            'login_email' => 'user2@gmail.com',
            'login_telepon' => '0840820932',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);


        // SEEDER KATEGORI WISATA -----------------------------------------------------
        $kategori = new Kategori;
        $array_kategori_wisata = [
            'Wisata Alam',
            'Wisata Religi',
            'Wisata Belanja',
            'Wisata Kuliner',
            'Wisata Edukasi',
            'Wisata Budaya',
            'Wisata Berburu',
            'Wisata Politik',
            'Konvensi'
        ];

        $array_kategori_produk = [
            'Bahan Pangan', 'Kuliner', 'Aksesoris', 'Minuman', 'Buah-buahan', 'Sayuran', 'Survenir', 'Sembako', 'Alat', 'Bahan Masak', 'Makanan', 'Hasil Pangan'
        ];
        foreach ($array_kategori_wisata as $kategoriWisata) {
            $saveKategoriWisata  = $kategori->create([
                'kategori_nama'     => $kategoriWisata,
                'kategori_kode'     => Str::random(5),
                'kategori_tipe'     => 'wisata',
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        }

        foreach ($array_kategori_produk as $kategori_produk) {
            $saveKategoriWisata  = $kategori->create([
                'kategori_nama'     => $kategori_produk,
                'kategori_kode'     => Str::random(5),
                'kategori_tipe'     => 'produk',
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        }
        //
    }
}
