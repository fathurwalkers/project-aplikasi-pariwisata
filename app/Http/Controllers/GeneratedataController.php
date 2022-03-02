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
use App\Models\Mediaproduk;

class GeneratedataController extends Controller
{
    public function data_wisata()
    {
        $arr_wisata = [
            [
                "wisata_nama" => "Air Terjun Kandawundawuna",
                "wisata_deskripsi" => "<p>Salah satu air terjun yang terdapat di Kecamatan Bonetiro yang memiliki debet air yang cukup deras dengan air yang cukup luas dan lebar. Jarak dari jalan tani sekitar 60 menit dengan medan yang cukup datar dan agak berliku. Air terjun ini menjadi salah satu andalan Kabupaten Buton dan pernah diikutsertakan dalam Lomba Anugrah Pesona Indonesia Tahun 2020</p>",
                "wisata_kota" => "Waondowolio",
                "wisata_kecamatan" => "Kapontori",
                "wisata_kelurahan" => "Kapontori",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7001779519437!2d122.84900711399727!3d-5.151869796261357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3e91dd174b51d%3A0x90c867fd54e2bdc2!2sAir%20Terjun%20Kandawu%20Ndawuna!5e0!3m2!1sen!2sid!4v1646222896192!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata1.jpg"
            ],
            [
                "wisata_nama" => "Pulau Pendek Kapontori",
                "wisata_deskripsi" => "<p>Pulau dengan pasir putih yang sangat cocok untuk wisata keluarga, camping, diving, snorkeling. Memiliki danau dan situs di dalamnya. Saat air surut terdapat pasir timbul yang melengkung di ujung pulau. Untuk mencapai pulau ini dapat melalui Desa Barangka, Boneatiro dan Boneatiro Barat</p>",
                "wisata_kota" => "Boneatiro",
                "wisata_kecamatan" => "Kapuntori",
                "wisata_kelurahan" => "Boneatiro",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15893.591278216245!2d122.7212452146097!3d-5.199999839628539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3ecc7fae56a11%3A0x42e3c51261d07fb4!2sPulau%20Pendek!5e0!3m2!1sen!2sid!4v1646223095163!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata2.jpg"
            ],
            [
                "wisata_nama" => "Air Terjun Bumbula",
                "wisata_deskripsi" => "<p>Kawasan Air Terjun dengan akses yang mudah dan dapat ditempuh melalui bendungan, perkebunan kelapa dan persawahan. Air terjun ini bertingkat tingkat dengan debet air yang tidak pernah kering sekalipun pada musim kemarau. Bebatuan pada air ini tidak licin sehingga memudahkan pengunjung yang ingin mencapai puncak air terjun</p>",
                "wisata_kota" => "Wakangka",
                "wisata_kecamatan" => "Wakangka",
                "wisata_kelurahan" => "Wakangka",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127144.64604553726!2d122.7898050125146!3d-5.220183521049554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3efb18de890d9%3A0xd0f8ba29c008b340!2sWakangka%2C%20Kapontori%2C%20Buton%20Regency%2C%20South%20East%20Sulawesi!5e0!3m2!1sen!2sid!4v1646223256576!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata3.jpg"
            ],
            [
                "wisata_nama" => "Pasir Hitam",
                "wisata_deskripsi" => "<p>Terletak di sisi jalan utama menuju Lasalimu Selatan sekitar 12 Km dari Ibukota dengan pasir hitamnya yang menjadikan pantai ini selalu ramai setiap saat dan tempat istirahat bagi yang melewatinya. Saat air surut kawasan pasirnya membentuk gelombang aliran ombak sehingga cocok untuk tempat bersantai dan berekreasi. Pantai ini terkenal dengan acara tahunan menangkap ikan ikcel antamo dan hanya ada di tempat itu</p>",
                "wisata_kota" => "Pasarwajo",
                "wisata_kecamatan" => "Pasarwajo",
                "wisata_kelurahan" => "Wolowa",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1498267230654!2d122.97259861399868!3d-5.394127796087586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da40745b337c675%3A0xcf55a1b88c620471!2sPantai%20Pasir%20Hitam!5e0!3m2!1sen!2sid!4v1646223371325!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata4.jpg"
            ],
            [
                "wisata_nama" => "Air Terjun Kalata",
                "wisata_deskripsi" => "<p>Air Terjun ini sangat indah dan pernah dijadikan lokasi syuting My Trip My Adventure. Jarak tempuh dari Ibukota Kabupaten sekitar 10 Km. Debet air yang cukup deras sehingga menarik untuk dijadikan tempat mandi. Sepanjang jalan menuju tempat ini pengunjung akan menikmati pemandangan berupa pepohona dengan suasana hutan yang rindang</p>",
                "wisata_kota" => "Walompo",
                "wisata_kecamatan" => "Siantopina",
                "wisata_kelurahan" => "Walompo",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.27480030356!2d122.98161651399856!3d-5.375002896101305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3f8ac2d0c8715%3A0xcf9918cacf213e46!2sAir%20Terjun%20Kalata%2C%20Buton!5e0!3m2!1sen!2sid!4v1646223597391!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata5.jpg"
            ],
            [
                "wisata_nama" => "Kampung Bajo Bahari",
                "wisata_deskripsi" => "<p>Perkampungan Bajo dengan kondisi rumah, sarana umum dan bangunan pemerintah terapung. Ketika berada perkampungan ini kita akan merasakan kehidupan sosial suku BAjo. Ativitas masyarakat banyak dihabiskan di atas laut denga jembatan penghubung antara rumah yang satu dengan yang lain menggunakan papan dan balok kayu adalah pemandangan yang dapat kita saksikan ketika berada disini. Sempat popular dengan nama kampung pelangi ketika rumah dan bangunan sarana umum dicat berwarna pelangi</p>",
                "wisata_kota" => "Bajo",
                "wisata_kecamatan" => "Wabula",
                "wisata_kelurahan" => "Bahari",
                "wisata_provinsi" => "Buton",
                "wisata_url" => Str::random(10),
                "wisata_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0271042270783!2d122.89294221399972!3d-5.5630006959666485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da4107edb341965%3A0x544646e143996bbb!2sKampung%20Pelangi%20Bajo%20Bahari%20Buton!5e0!3m2!1sen!2sid!4v1646233399389!5m2!1sen!2sid",
                "wisata_header_foto" => "wisata6.jpg"
            ]
        ];

        for ($i=0; $i < count($arr_wisata); $i++) {
            $wisata = new Wisata;

            $save_wisata = $wisata->create([
                "wisata_nama" => $arr_wisata[$i]["wisata_nama"],
                "wisata_deskripsi" =>  $arr_wisata[$i]["wisata_deskripsi"],
                "wisata_kota" =>  $arr_wisata[$i]["wisata_kota"],
                "wisata_kecamatan" =>  $arr_wisata[$i]["wisata_kecamatan"],
                "wisata_kelurahan" =>  $arr_wisata[$i]["wisata_kelurahan"],
                "wisata_provinsi" =>  $arr_wisata[$i]["wisata_provinsi"],
                "wisata_url" =>  $arr_wisata[$i]["wisata_url"],
                "wisata_maps" =>  $arr_wisata[$i]["wisata_maps"],
                "wisata_header_foto" =>  $arr_wisata[$i]["wisata_header_foto"],
                "created_at" => now(),
                "updated_at" => now()
            ]);
            $save_wisata->kategori()->associate(1);
            $save_wisata->login()->associate(1);
            $save_wisata->save();
        }
    }

    public function data_user_ukm()
    {
        $arr_nama_ukm = ["Mawar", "Abon Tuna Kahomlimombono Buton", "Matteku", "Sarang Tenun Wabula", "Sarung Tenun Wasuemba", "Kripik Sukun Khas Wabula"];

        for ($i=0; $i < count($arr_nama_ukm); $i++) {
            $login = new Login;
            $save_login = $login->create([
                'login_foto'        => "default-user.png",
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
        }
    }

    public function data_ukm()
    {
        // $arr_nama_ukm = ["Mawar", "Abon Tuna Kahomlimombono Buton", "Matteku", "Sarang Tenun Wabula", "Sarung Tenun Wasuemba", "Kripik Sukun Khas Wabula"
        // ];
        // $arr_keterangan_ukm = [
        //     "Gule merupakan makanan tradisional Khas Buton dengan bahan dasar ubi kayu/singkong yang digiling (Kaopi). Masa Exp. 3 Bulan",
        //     "Produksi abon ini tidak menentu tergantung pesanan dan harga ikan.",
        //     "Jambu metteku terdapat pilihan rasa origina, balado, coklat, gula merah",
        //     "Sarung dibuat dengan benang halus. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu tergantung rumitnya motif",
        //     "Sarung dibuat dengan benang Biasa. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu",
        //     "Kripik di buat dari sukun yang masih mudah dan di goreng. Kripik sukun khas wabula 1 ini memiliki 3 pilihan rasa yaitu Original, pedas, dan manis. Masa Exp. 3 bulan"
        // ];

        // for ($i=0; $i < count($arr_nama_ukm); $i++) {

        //     $umkm = new Umkm;
        //     $save_umkm = $umkm->create([
        //         "umkm_nama" => $arr_nama_ukm[$i],
        //         "umkm_kode" => strtoupper(Str::random(5)),
        //         "umkm_info" => $arr_keterangan_ukm[$i],
        //         "umkm_foto" => "default-ukm-profile.jpg",
        //         "umkm_pemilik" => ,
        //         "created_at" => now(),
        //         "updated_at" => now()
        //     ]);

        // }
    }
}
