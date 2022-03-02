-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Mar 2022 pada 15.49
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_nama`, `kategori_kode`, `kategori_tipe`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Alam', 'B12Tt', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(2, 'Wisata Religi', 'WQ5FY', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(3, 'Wisata Belanja', 'HT6w0', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(4, 'Wisata Kuliner', 'qIl92', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(5, 'Wisata Edukasi', 'P4d7e', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(6, 'Wisata Budaya', 'nXHza', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(7, 'Wisata Berburu', 's0bAr', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(8, 'Wisata Politik', 'cDmmC', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(9, 'Konvensi', 'saXwg', 'wisata', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(10, 'Bahan Pangan', 'DNWJG', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(11, 'Kuliner', 'FqDpn', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(12, 'Aksesoris', '6JGhE', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(13, 'Minuman', '116jq', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(14, 'Buah-buahan', 'SrxwP', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(15, 'Sayuran', 'TDco5', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(16, 'Survenir', 'Uz2gH', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(17, 'Sembako', 'x0AFm', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(18, 'Alat', 'z1S56', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(19, 'Bahan Masak', 'Ti1Sa', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(20, 'Makanan', 'L2puO', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(21, 'Hasil Pangan', 'QTGKB', 'produk', '2022-03-02 23:37:31', '2022-03-02 23:37:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_foto` text COLLATE utf8mb4_unicode_ci,
  `login_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_token` text COLLATE utf8mb4_unicode_ci,
  `login_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `login_foto`, `login_nama`, `login_username`, `login_password`, `login_email`, `login_telepon`, `login_token`, `login_level`, `login_status`, `created_at`, `updated_at`) VALUES
(1, 'foto/default-user.png', 'citra', 'citra', '$2y$12$PnyTzsETlyjU49q1dUQhP.hhtelbHYyihtz3f0Xnfx/RdeMEvrN8a', 'citra@gmail.com', '0812820932323', '$2y$12$hKMwmJXvCW1C/3/hadBTFO0GNOEtV6wNywf2Trr5BKVI8iMPvrOoC', 'admin', 'verified', '2022-03-02 23:37:29', '2022-03-02 23:37:29'),
(2, 'foto/default-user.png', 'Administrator', 'admin', '$2y$12$wUpEzrPa1cbi1yF8Zy2Wa.b.KA2W2OhHjgvfRAmcg2p3VVb069e6i', 'administrator@gmail.com', '0812820932323', '$2y$12$MtJ4JTL/DfaWmCutY6HaX.psIcjb6im5HYDu9OU/PLg4R7bEOI0AC', 'admin', 'verified', '2022-03-02 23:37:30', '2022-03-02 23:37:30'),
(3, 'foto/default-user.png', 'Petugas 1', 'petugas_umkm', '$2y$12$0YYSG8607ZCZ5qjlWD2mdeJNGKlCE2fh.qAdEuG3FpdRuegnSc/2G', 'petugas_umkm@gmail.com', '08233413932', '$2y$12$7boFBRMjZDN3uTPLXeTbluwWosVPx7lxCMvjcOhMQLGAkCqbxF54C', 'umkm', 'verified', '2022-03-02 23:37:30', '2022-03-02 23:37:30'),
(4, 'foto/default-user.png', 'User 1', 'user1', '$2y$12$9DTJVKiQ5DjFQo3zmVtaE.BjD.CjXf70YsWJRak2xHEmOU9o5dWmS', 'user1@gmail.com', '0822824232', '$2y$12$gYQc8TPUEXcAAo.oMtyEcumoLyQSj8i66nNzpnlOrztq0FfFPV/bm', 'user', 'verified', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(5, 'foto/default-user.png', 'User 2', 'user2', '$2y$12$RWKodI1//qy/G49TS5TzdOVVrtiuo9X43HsoKzhKdbaszh3337cRq', 'user2@gmail.com', '0840820932', '$2y$12$Dfw1fDcw1OvOf8QN2JMxDOF40SNgcuxiLaFmmxXZ7YAvEG6TE/u9q', 'user', 'verified', '2022-03-02 23:37:31', '2022-03-02 23:37:31'),
(6, 'default-user.png', 'Mawar', 'user0N22MB', '$2y$12$.MhJWOMfn3.Vk9TgU2ikZ.gmIYyi6x4uWAgDH9gY5ArW0po2ZQqWS', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$aLlVs/tMqHwvzDWw7NAeDuu43sALySgmbh7tKHJ7lRjbWkELGYFe2', 'umkm', 'verified', '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(7, 'default-user.png', 'Abon Tuna Kahomlimombono Buton', 'user1RLHGJ', '$2y$12$oXTi3gB88eDldrpdpZ10Pugbnst0O.J40RazUzN6BJ6EIDbWlcmdm', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$2AGlzxrrKJinkFGR8G4OZeCp4JGajDS1UDFvOYR0x3j7QZw50cPUO', 'umkm', 'verified', '2022-03-02 23:37:47', '2022-03-02 23:37:47'),
(8, 'default-user.png', 'Matteku', 'user2UZVOO', '$2y$12$jAIXrF0kpYDmACI/EArNgevSUNAFY8pmU44kKPN3EK2NmNCNNIhGG', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$cLkJBsxiqkL0FD9QBxU1L.a/Ale8nMW.xxvJpxYCu7SQW4z7lMK9a', 'umkm', 'verified', '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(9, 'default-user.png', 'Sarang Tenun Wabula', 'user31XJYT', '$2y$12$pYSWEfFEg6mguPgxuAn/POiL.9EbfdRfuFYg9sPozhGI3BNMGbB9O', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$24ZW8huJsmNpZ.840UcYouj1b7oPOZch4Gdyqgme7j/3mpsNdn1Ui', 'umkm', 'verified', '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(10, 'default-user.png', 'Sarung Tenun Wasuemba', 'user4THEGG', '$2y$12$2gZlzsUdWE0QuEbc0JU8betpuVH0xKioptZm17Si1sQO4UAlZBN2O', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$4W4VxhIc0eVuABxX2q6haeSlTkIb/nphPMltRZksgumfFoDEoc67G', 'umkm', 'verified', '2022-03-02 23:37:49', '2022-03-02 23:37:49'),
(11, 'default-user.png', 'Kripik Sukun Khas Wabula', 'user5TMV8G', '$2y$12$tBrvfdtRWG72INQEt8kBreDp9CbIczNq2ExbuEDiYZWBcE0CQucfu', 'TIDAK ADA', 'TIDAK ADA', '$2y$12$GUiKgntCdoDfkhWSxB6mmeYrCpnMsW3OZ2g7pI0thRq4VqjFaUiEC', 'umkm', 'verified', '2022-03-02 23:37:49', '2022-03-02 23:37:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_path` text COLLATE utf8mb4_unicode_ci,
  `media_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_produk`
--

CREATE TABLE `media_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_produk_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_wisata`
--

CREATE TABLE `media_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `wisata` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_26_120045_create_logins_table', 1),
(6, '2021_11_22_171404_create_kategoris_table', 1),
(7, '2021_11_22_173053_create_media_table', 1),
(8, '2021_11_22_183555_create_wisatas_table', 1),
(9, '2021_11_22_195602_create_media_wisatas_table', 1),
(10, '2021_11_24_113537_create_umkms_table', 1),
(11, '2021_11_24_113602_create_produks_table', 1),
(12, '2022_03_02_105543_create_mediaproduks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_headergambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `produk_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `umkm_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `produk_headergambar`, `produk_nama`, `produk_kode`, `produk_keterangan`, `produk_harga`, `media_id`, `kategori_id`, `umkm_id`, `created_at`, `updated_at`) VALUES
(1, 'data-gambar-produk1.jpg', 'Gule', 'PRODUK-g8UUc', 'Gule merupakan makanan tradisional Khas Buton dengan bahan dasar ubi kayu/singkong yang digiling (Kaopi). Masa Exp. 3 Bulan', '2500', NULL, 16, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(2, 'data-gambar-produk2.jpg', 'Abon Tuna', 'PRODUK-Qz0Gz', 'Produksi abon ini tidak menentu tergantung pesanan dan harga ikan.', '25000', NULL, 16, 2, '2022-03-02 23:37:47', '2022-03-02 23:37:47'),
(3, 'data-gambar-produk3.jpg', 'Olahan Jambu Mette', 'PRODUK-fZga3', 'Jambu metteku terdapat pilihan rasa origina, balado, coklat, gula merah', '100000', NULL, 16, 3, '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(4, 'data-gambar-produk4.jpg', 'Sarung Tenun Motif', 'PRODUK-8K0HI', 'Sarung dibuat dengan benang halus. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu tergantung rumitnya motif', '350000', NULL, 16, 4, '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(5, 'data-gambar-produk5.jpg', 'Saring Tenun Perempuan', 'PRODUK-aiA8q', 'Sarung dibuat dengan benang Biasa. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu', '350000', NULL, 16, 5, '2022-03-02 23:37:49', '2022-03-02 23:37:49'),
(6, 'data-gambar-produk6.jpg', 'Kripik Sukun', 'PRODUK-2n0Pm', 'Kripik di buat dari sukun yang masih mudah dan di goreng. Kripik sukun khas wabula 1 ini memiliki 3 pilihan rasa yaitu Original, pedas, dan manis. Masa Exp. 3 bulan', '25000', NULL, 16, 6, '2022-03-02 23:37:49', '2022-03-02 23:37:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umkm_kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umkm_info` longtext COLLATE utf8mb4_unicode_ci,
  `umkm_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default-profile-ukm.png',
  `umkm_pemilik` text COLLATE utf8mb4_unicode_ci,
  `wisata_id` bigint(20) UNSIGNED DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `login_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id`, `umkm_nama`, `umkm_kode`, `umkm_info`, `umkm_foto`, `umkm_pemilik`, `wisata_id`, `media_id`, `login_id`, `created_at`, `updated_at`) VALUES
(1, 'Mawar', 'UKM-IZ7JV', 'Gule merupakan makanan tradisional Khas Buton dengan bahan dasar ubi kayu/singkong yang digiling (Kaopi). Masa Exp. 3 Bulan', 'default-ukm-profile.png', 'Mawar', 5, NULL, 6, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(2, 'Abon Tuna Kahomlimombono Buton', 'UKM-TDP6N', 'Produksi abon ini tidak menentu tergantung pesanan dan harga ikan.', 'default-ukm-profile.png', 'Abon Tuna Kahomlimombono Buton', 4, NULL, 7, '2022-03-02 23:37:47', '2022-03-02 23:37:47'),
(3, 'Matteku', 'UKM-FSWUN', 'Jambu metteku terdapat pilihan rasa origina, balado, coklat, gula merah', 'default-ukm-profile.png', 'Matteku', 5, NULL, 8, '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(4, 'Sarang Tenun Wabula', 'UKM-MLPYY', 'Sarung dibuat dengan benang halus. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu tergantung rumitnya motif', 'default-ukm-profile.png', 'Sarang Tenun Wabula', 6, NULL, 9, '2022-03-02 23:37:48', '2022-03-02 23:37:48'),
(5, 'Sarung Tenun Wasuemba', 'UKM-OHK5A', 'Sarung dibuat dengan benang Biasa. Dan dapat dibuat sesuai pesanan. Pengerjaan satu sarung dilakukan selama 1 minggu', 'default-ukm-profile.png', 'Sarung Tenun Wasuemba', 2, NULL, 10, '2022-03-02 23:37:49', '2022-03-02 23:37:49'),
(6, 'Kripik Sukun Khas Wabula', 'UKM-BDBXF', 'Kripik di buat dari sukun yang masih mudah dan di goreng. Kripik sukun khas wabula 1 ini memiliki 3 pilihan rasa yaitu Original, pedas, dan manis. Masa Exp. 3 bulan', 'default-ukm-profile.png', 'Kripik Sukun Khas Wabula', 5, NULL, 11, '2022-03-02 23:37:49', '2022-03-02 23:37:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wisata_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `wisata_kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wisata_maps` text COLLATE utf8mb4_unicode_ci,
  `wisata_header_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `login_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `wisata_nama`, `wisata_deskripsi`, `wisata_kota`, `wisata_kecamatan`, `wisata_kelurahan`, `wisata_provinsi`, `wisata_url`, `wisata_maps`, `wisata_header_foto`, `kategori_id`, `login_id`, `created_at`, `updated_at`) VALUES
(1, 'Air Terjun Kandawundawuna', '<p>Salah satu air terjun yang terdapat di Kecamatan Bonetiro yang memiliki debet air yang cukup deras dengan air yang cukup luas dan lebar. Jarak dari jalan tani sekitar 60 menit dengan medan yang cukup datar dan agak berliku. Air terjun ini menjadi salah satu andalan Kabupaten Buton dan pernah diikutsertakan dalam Lomba Anugrah Pesona Indonesia Tahun 2020</p>', 'Waondowolio', 'Kapontori', 'Kapontori', 'Buton', 'h367oEoOqS', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7001779519437!2d122.84900711399727!3d-5.151869796261357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3e91dd174b51d%3A0x90c867fd54e2bdc2!2sAir%20Terjun%20Kandawu%20Ndawuna!5e0!3m2!1sen!2sid!4v1646222896192!5m2!1sen!2sid', 'wisata1.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(2, 'Pulau Pendek Kapontori', '<p>Pulau dengan pasir putih yang sangat cocok untuk wisata keluarga, camping, diving, snorkeling. Memiliki danau dan situs di dalamnya. Saat air surut terdapat pasir timbul yang melengkung di ujung pulau. Untuk mencapai pulau ini dapat melalui Desa Barangka, Boneatiro dan Boneatiro Barat</p>', 'Boneatiro', 'Kapuntori', 'Boneatiro', 'Buton', '8suR1dhHFP', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15893.591278216245!2d122.7212452146097!3d-5.199999839628539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3ecc7fae56a11%3A0x42e3c51261d07fb4!2sPulau%20Pendek!5e0!3m2!1sen!2sid!4v1646223095163!5m2!1sen!2sid', 'wisata2.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(3, 'Air Terjun Bumbula', '<p>Kawasan Air Terjun dengan akses yang mudah dan dapat ditempuh melalui bendungan, perkebunan kelapa dan persawahan. Air terjun ini bertingkat tingkat dengan debet air yang tidak pernah kering sekalipun pada musim kemarau. Bebatuan pada air ini tidak licin sehingga memudahkan pengunjung yang ingin mencapai puncak air terjun</p>', 'Wakangka', 'Wakangka', 'Wakangka', 'Buton', 'gpauFTmJRl', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127144.64604553726!2d122.7898050125146!3d-5.220183521049554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3efb18de890d9%3A0xd0f8ba29c008b340!2sWakangka%2C%20Kapontori%2C%20Buton%20Regency%2C%20South%20East%20Sulawesi!5e0!3m2!1sen!2sid!4v1646223256576!5m2!1sen!2sid', 'wisata3.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(4, 'Pasir Hitam', '<p>Terletak di sisi jalan utama menuju Lasalimu Selatan sekitar 12 Km dari Ibukota dengan pasir hitamnya yang menjadikan pantai ini selalu ramai setiap saat dan tempat istirahat bagi yang melewatinya. Saat air surut kawasan pasirnya membentuk gelombang aliran ombak sehingga cocok untuk tempat bersantai dan berekreasi. Pantai ini terkenal dengan acara tahunan menangkap ikan ikcel antamo dan hanya ada di tempat itu</p>', 'Pasarwajo', 'Pasarwajo', 'Wolowa', 'Buton', 'R5dKoT95GQ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1498267230654!2d122.97259861399868!3d-5.394127796087586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da40745b337c675%3A0xcf55a1b88c620471!2sPantai%20Pasir%20Hitam!5e0!3m2!1sen!2sid!4v1646223371325!5m2!1sen!2sid', 'wisata4.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(5, 'Air Terjun Kalata', '<p>Air Terjun ini sangat indah dan pernah dijadikan lokasi syuting My Trip My Adventure. Jarak tempuh dari Ibukota Kabupaten sekitar 10 Km. Debet air yang cukup deras sehingga menarik untuk dijadikan tempat mandi. Sepanjang jalan menuju tempat ini pengunjung akan menikmati pemandangan berupa pepohona dengan suasana hutan yang rindang</p>', 'Walompo', 'Siantopina', 'Walompo', 'Buton', 'keNTheWaw4', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.27480030356!2d122.98161651399856!3d-5.375002896101305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3f8ac2d0c8715%3A0xcf9918cacf213e46!2sAir%20Terjun%20Kalata%2C%20Buton!5e0!3m2!1sen!2sid!4v1646223597391!5m2!1sen!2sid', 'wisata5.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46'),
(6, 'Kampung Bajo Bahari', '<p>Perkampungan Bajo dengan kondisi rumah, sarana umum dan bangunan pemerintah terapung. Ketika berada perkampungan ini kita akan merasakan kehidupan sosial suku BAjo. Ativitas masyarakat banyak dihabiskan di atas laut denga jembatan penghubung antara rumah yang satu dengan yang lain menggunakan papan dan balok kayu adalah pemandangan yang dapat kita saksikan ketika berada disini. Sempat popular dengan nama kampung pelangi ketika rumah dan bangunan sarana umum dicat berwarna pelangi</p>', 'Bajo', 'Wabula', 'Bahari', 'Buton', 'VY6s5JZ3mR', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0271042270783!2d122.89294221399972!3d-5.5630006959666485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da4107edb341965%3A0x544646e143996bbb!2sKampung%20Pelangi%20Bajo%20Bahari%20Buton!5e0!3m2!1sen!2sid!4v1646233399389!5m2!1sen!2sid', 'wisata6.jpg', 1, 1, '2022-03-02 23:37:46', '2022-03-02 23:37:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `media_produk`
--
ALTER TABLE `media_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_produk_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `media_wisata`
--
ALTER TABLE `media_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_wisata_media_id_foreign` (`media_id`),
  ADD KEY `media_wisata_wisata_foreign` (`wisata`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_media_id_foreign` (`media_id`),
  ADD KEY `produk_kategori_id_foreign` (`kategori_id`),
  ADD KEY `produk_umkm_id_foreign` (`umkm_id`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `umkm_wisata_id_foreign` (`wisata_id`),
  ADD KEY `umkm_media_id_foreign` (`media_id`),
  ADD KEY `umkm_login_id_foreign` (`login_id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_kategori_id_foreign` (`kategori_id`),
  ADD KEY `wisata_login_id_foreign` (`login_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `media_produk`
--
ALTER TABLE `media_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `media_wisata`
--
ALTER TABLE `media_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `media_produk`
--
ALTER TABLE `media_produk`
  ADD CONSTRAINT `media_produk_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `media_wisata`
--
ALTER TABLE `media_wisata`
  ADD CONSTRAINT `media_wisata_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `media_wisata_wisata_foreign` FOREIGN KEY (`wisata`) REFERENCES `wisata` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produk_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produk_umkm_id_foreign` FOREIGN KEY (`umkm_id`) REFERENCES `umkm` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD CONSTRAINT `umkm_login_id_foreign` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `umkm_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `umkm_wisata_id_foreign` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wisata_login_id_foreign` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
