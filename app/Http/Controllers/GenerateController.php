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
use App\Models\Media;

class GenerateController extends Controller
{
    public function generate_media()
    {
        $media                          = new Media;
        for ($i = 0; $i < 35; $i++) {
            $kodeMedia                  = strtoupper(Str::random(5));
            $saveMedia                  = $media->create([
                'media_path'            => 'foto/default-wisata-foto.jpg',
                'media_url'             => url('homepage') . 'foto/default-wisata-foto.jpg',
                'media_kode'            => $kodeMedia,
                'media_tipe'            => strtoupper('png'),
                'media_kategori'        => 'wisata',
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveMedia->save();
        }

        for ($i = 0; $i < 35; $i++) {
            $kodeMedia                  = strtoupper(Str::random(5));
            $saveMedia                  = $media->create([
                'media_path'            => 'foto/default-wisata-foto.jpg',
                'media_url'             => url('homepage') . 'foto/default-wisata-foto.jpg',
                'media_kode'            => $kodeMedia,
                'media_tipe'            => strtoupper('jpg'),
                'media_kategori'        => 'produk',
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveMedia->save();
        }

        for ($i = 0; $i < 35; $i++) {
            $kodeMedia                  = strtoupper(Str::random(5));
            $saveMedia                  = $media->create([
                'media_path'            => 'foto/default-produk.png',
                'media_url'             => url('homepage') . 'foto/default-produk.png',
                'media_kode'            => $kodeMedia,
                'media_tipe'            => strtoupper('png'),
                'media_kategori'        => 'umkm',
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveMedia->save();
        }

        for ($i = 0; $i < 35; $i++) {
            $kodeMedia                  = strtoupper(Str::random(5));
            $saveMedia                  = $media->create([
                'media_path'            => 'foto/default-ukm-profile.png',
                'media_url'             => url('homepage') . 'foto/default-ukm-profile.png',
                'media_kode'            => $kodeMedia,
                'media_tipe'            => strtoupper('png'),
                'media_kategori'        => 'user',
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveMedia->save();
        }
    }

    public function generate_user()
    {
        $media                      = Media::where('media_kategori', 'user')->get()->toArray();
        for ($i = 0; $i < 15; $i++) {
            $faker                  = Faker::create('id_ID');
            $randomMedia            = Arr::random($media);
            $login_model            = new Login;
            $password               = '12345';
            $hashPassword           = Hash::make($password, [
                'rounds' => 12,
            ]);
            $token_raw              = Str::random(16);
            $token                  = Hash::make($token_raw, [
                'rounds' => 12,
            ]);
            $level                  = "user";
            $login_status           = "verified";
            $login_data = $login_model->create([
                'login_foto'        => $randomMedia["media_path"],
                'login_nama'        => $faker->name,
                'login_username'    => 'user' . $i . strtoupper(Str::random(5)),
                'login_password'    => $hashPassword,
                'login_email'       => $faker->email,
                'login_telepon'     => $faker->phoneNumber,
                'login_token'       => $token,
                'login_level'       => $level,
                'login_status'      => $login_status,
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $login_data->save();
        }
    }

    public function generate_user_umkm()
    {
        $media                      = Media::where('media_kategori', 'user')->get()->toArray();
        for ($i = 0; $i < 45; $i++) {
            $faker                  = Faker::create('id_ID');
            $randomMedia            = Arr::random($media);
            $login_model            = new Login;
            $password               = '12345';
            $hashPassword           = Hash::make($password, [
                'rounds' => 12,
            ]);
            $token_raw              = Str::random(16);
            $token                  = Hash::make($token_raw, [
                'rounds' => 12,
            ]);
            $level                  = "umkm";
            $login_status           = "verified";
            $login_data = $login_model->create([
                'login_foto'        => $randomMedia["media_path"],
                'login_nama'        => $faker->name,
                'login_username'    => 'user_umkm' . $i . strtoupper(Str::random(5)),
                'login_password'    => $hashPassword,
                'login_email'       => $faker->email,
                'login_telepon'     => $faker->phoneNumber,
                'login_token'       => $token,
                'login_level'       => $level,
                'login_status'      => $login_status,
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $login_data->save();
        }
    }

    public function generate_wisata()
    {
        $faker                          = Faker::create('id_ID');
        $kecamatan                      = ['Kabaena Tengah', 'Kabaena Selatan', 'Kabaena Utara', 'Kabaena', 'Wolio', 'Wameo', 'Pos 1', 'Pos 2', 'Pos 3', 'Pos 4', 'Pos 5'];
        $kategori_wisata                = Kategori::where('kategori_tipe', 'wisata')->get()->toArray();
        $kelurahan                      = [
            'Wakonti',
            'Bukit Wolio Indah',
            'Kelurahan 1',
            'Kelurahan 2',
            'Kelurahan 3',
            'Kelurahan 4',
            'Kelurahan 5'
        ];
        $kota                           = [
            'Kendari',
            'Baubau',
            'Buton Tengah',
            'Buton Selatan',
            'Buton Utara',
            'Pasarwajo',
            'Unaha',
        ];
        $randomInt                      = $faker->randomDigitNot(0);
        $userId                         = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
        $provinsi                       = 'Sulawesi Tenggara';
        $media                          = Media::where('media_kategori', 'wisata')->get()->toArray();
        for ($i = 0; $i < 15; $i++) {
            $randomMedia                = Arr::random($media);
            $randomUserId               = Arr::random($userId);
            $randomKategori             = Arr::random($kategori_wisata);
            $wisata                     = new Wisata;
            $wisata_url                 = Str::random(10);
            $saveWisata = $wisata->create([
                'wisata_nama'           => $faker->words($randomInt, true),
                'wisata_deskripsi'      => $faker->paragraph(6),
                'wisata_kota'           => Arr::random($kota),
                'wisata_kecamatan'      => Arr::random($kecamatan),
                'wisata_kelurahan'      => Arr::random($kelurahan),
                'wisata_provinsi'       => $provinsi,
                'wisata_url'            => $wisata_url,
                'wisata_maps'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.412434682302!2d122.6657515144868!3d-5.505623756329678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da473ab8de166a7%3A0x6727688990902ac1!2sAir%20Terjun%20Samparona!5e0!3m2!1sen!2sid!4v1637613289949!5m2!1sen!2sid',
                'wisata_header_foto'    => $randomMedia["media_path"],
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveWisata->login()->associate($randomUserId);
            $saveWisata->kategori()->associate($randomKategori["id"]);
            $saveWisata->save();
        }
    }

    public function generate_umkm()
    {
        $user_umkm                  = Login::where('login_level', 'umkm')->get()->toArray();
        $media                      = Media::where('media_kategori', 'umkm')->get()->toArray();
        $wisata                     = Wisata::all()->toArray();
        $faker                      = Faker::create('id_ID');
        $umkm                       = new Umkm;
        foreach ($user_umkm as $usr_ukm) {
            $randomMedia            = Arr::random($media);
            $randomWisata           = Arr::random($wisata);
            $saveUmkm = $umkm->create([
                'umkm_nama'         => $faker->company(),
                'umkm_kode'         => strtoupper(Str::random(5)),
                'umkm_info'         => $faker->paragraph(5),
                'umkm_foto'         => $randomMedia["media_path"],
                'umkm_pemilik'      => $usr_ukm["login_nama"],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $saveUmkm->login()->associate($usr_ukm["id"]);
            $saveUmkm->wisata()->associate($randomWisata["id"]);
            $saveUmkm->save();
        }
    }

    public function generate_produk()
    {
        $produk                         = new Produk;
        $faker                          = Faker::create('id_ID');
        $randomDigitWord                = [1, 2, 3, 4];
        $randomDigitParagraph           = [4, 5, 6, 7, 8];
        $randomDigitHarga               = [5, 6, 7, 8];
        $kategori_produk                = Kategori::where('kategori_tipe', 'produk')->get()->toArray();
        $umkm                           = Umkm::all()->toArray();
        $produk_header_gambar           = 'foto/default-wisata-foto.jpg';
        $media                          = Media::where('media_kategori', 'produk')->get()->toArray();
        for ($i = 0; $i < 100; $i++) {
            $randomMedia                = Arr::random($media);
            $kode_produk                = Str::random(5);
            $randomKategori             = Arr::random($kategori_produk);
            $randomUmkm                 = Arr::random($umkm);
            $keterangan_produk          = $faker->paragraphs(Arr::random($randomDigitParagraph), true);
            $produk_nama                = $faker->words(Arr::random($randomDigitWord), true);
            $produk_harga               = $faker->randomNumber(Arr::random($randomDigitHarga));
            $saveProduk                 = $produk->create([
                'produk_headergambar'   => $randomMedia["media_path"],
                'produk_nama'           => $produk_nama,
                'produk_kode'           => $kode_produk,
                'produk_keterangan'     => $keterangan_produk,
                'produk_harga'          => $produk_harga,
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveProduk->kategori()->associate($randomKategori["id"]);
            $saveProduk->umkm()->associate($randomUmkm["id"]);
            $saveProduk->save();
        }
    }

    public function chained_generate()
    {
        $this->generate_media();
        $this->generate_user();
        $this->generate_user_umkm();
        $this->generate_wisata();
        $this->generate_umkm();
        $this->generate_produk();
        return redirect()->route('dashboard');
    }
}
