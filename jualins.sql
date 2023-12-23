-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2022 pada 05.27
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualins`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_konsumens`
--

CREATE TABLE `claim_konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kuantitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pengembalian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barangs`
--

CREATE TABLE `kategori_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_barangs`
--

INSERT INTO `kategori_barangs` (`id`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(14, 'Sepatu', '1635779869.PNG', '2021-11-01 08:17:49', '2021-11-01 08:17:49'),
(15, 'Kemeja', '1635779883.jpg', '2021-11-01 08:18:03', '2021-11-01 08:18:03'),
(16, 'Makanan', '1635779926.jpg', '2021-11-01 08:18:46', '2021-11-01 08:18:46'),
(17, 'Topi', '1635845285.JPG', '2021-11-02 02:28:05', '2021-11-02 02:28:05'),
(18, 'Minuman', '1636097675.JPG', '2021-11-05 00:34:35', '2021-11-05 00:34:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_umkm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `user_id`, `produk_id`, `produk_qty`, `nama_umkm`, `created_at`, `updated_at`) VALUES
(3, '2', '25', '1', 'Toko Bagus', '2013-01-09 11:50:51', '2013-01-09 11:50:51'),
(5, '2', '23', '1', 'Toko Kucing', '2021-12-23 00:52:13', '2021-12-23 00:52:13'),
(6, '2', '22', '1', 'Toko Bagus', '2021-12-23 01:03:48', '2021-12-23 01:03:48'),
(7, '8', '24', '1', '', '2022-01-04 03:10:06', '2022-01-04 03:10:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sebagai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_incomes`
--

CREATE TABLE `laporan_incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laba_kotor` int(11) NOT NULL,
  `laba_operasi` int(11) NOT NULL,
  `laba_sebelum_pajak` int(11) NOT NULL,
  `laba_operasis` int(11) NOT NULL,
  `laba_operasi_berjalan` int(11) NOT NULL,
  `laba_bersih` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_jumlah_produks`
--

CREATE TABLE `laporan_jumlah_produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stock` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `status_verifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_jumlah_transaksis`
--

CREATE TABLE `laporan_jumlah_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_beli` int(11) NOT NULL,
  `total_pendapatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_jumlah_umkms`
--

CREATE TABLE `laporan_jumlah_umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_produk` int(11) NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_izin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `metode`, `logo`, `created_at`, `updated_at`) VALUES
(6, 'LinkAja', 'LinkAja.png', '2022-01-04 21:22:52', '2022-01-04 21:22:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_09_18_070555_create_user_penggunas_table', 1),
(6, '2021_09_19_031343_create_notifikasis_table', 1),
(7, '2021_09_19_031429_create_pengajuan_iklan_produks_table', 1),
(8, '2021_09_19_031458_create_pengajuan_akun_pro_umkms_table', 1),
(9, '2021_09_19_031623_create_verifikasi_pembelians_table', 1),
(10, '2021_09_19_031655_create_verifikasi_produks_table', 1),
(11, '2021_09_20_055124_create_pengajuan_pencairans_table', 1),
(12, '2021_09_20_055241_create_review_kurirs_table', 1),
(13, '2021_09_20_055300_create_review_produks_table', 1),
(14, '2021_09_20_055319_create_claim_konsumens_table', 1),
(15, '2021_09_20_055349_create_laporan_incomes_table', 1),
(16, '2021_09_20_055408_create_laporan_jumlah_transaksis_table', 1),
(17, '2021_09_20_055452_create_laporan_jumlah_produks_table', 1),
(18, '2021_09_20_055854_create_laporan_jumlah_umkms_table', 1),
(19, '2021_09_28_023131_create_verifikasi_umkms_table', 1),
(20, '2021_09_28_030540_create_tampung_files_table', 1),
(21, '2021_09_30_083401_add_nomor_hp_to_user_penggunas_table', 2),
(22, '2013_01_09_190412_add_foto_produk_to_verifikasi_produks_table', 3),
(23, '2013_01_09_172827_create_kontak_table', 4),
(24, '2013_01_09_184220_add_foto_to_kontak_table', 5),
(25, '2013_01_09_190002_create_pesans_table', 6),
(26, '2021_10_19_071538_add_kolom_to_user_penggunas_table', 7),
(27, '2021_10_25_133417_add_kolom_to_verifikasi_produks', 8),
(28, '2013_01_09_171312_add_foto_to_verifikasi_produk_table', 9),
(29, '2021_10_27_025716_add_nama_umkm_to_verifikasi_umkms', 9),
(30, '2021_10_27_031209_add_kolom_to_verifikasi_umkms_table', 10),
(31, '2021_10_27_061522_add_bukti_verifikasi_umkms_table', 11),
(32, '2021_10_27_152647_add_foto_to_verifikasi_produks_table', 12),
(33, '2021_10_27_154156_create_kategori_barangs_table', 13),
(34, '2021_10_27_154252_add_kategori_to_verifikasi_produks_table', 13),
(35, '2021_10_27_154443_create_kategori_barangs_table', 14),
(36, '2021_10_29_085346_add_kolom_to_pengajuan_iklan_produks_table', 15),
(37, '2021_10_29_085816_add_kolom_to_pengajuan_iklan_produks_table', 16),
(38, '2021_10_29_092332_add_kolom_to_pengajuan_akun_pro_umkms_table', 16),
(39, '2021_10_29_223052_add_kolom_to_pengajuan_pencairans_table', 17),
(40, '2013_01_09_171742_add_foto_kategori_to_kategori_barangs_table', 18),
(41, '2013_01_10_002218_add_tambah_kolom_to_user_penggunas_table', 19),
(42, '2012_11_06_025935_add_kolom_id_pembeli_to_table_verifikasi_pembelians', 20),
(43, '2013_01_09_205614_create_keranjang_belanjas_table', 21),
(44, '2013_01_09_220830_create_keranjang_belanjas_table', 22),
(45, '2011_11_09_082854_create_verifikasi_pembelian_2_table', 23),
(46, '2011_11_09_085612_create_verifikasi_pembelian_2_table', 24),
(47, '2010_11_10_164507_add_id_produk_to_verifikasi_produks_table', 25),
(48, '2011_11_10_165104_add_id_produk_to_verifikasi_pembelians_table', 26),
(49, '2011_11_11_035033_add_id_produk_to_verifikasi_pembelians_table', 27),
(50, '2009_11_12_042429_create_tentang_jualins_table', 28),
(51, '2009_11_12_072758_create_sliders_table', 28),
(52, '2009_08_20_064712_create_keranjang_table', 29),
(53, '2009_08_21_064712_create_keranjang_table', 30),
(54, '2009_08_20_071236_create_keranjang_table', 31),
(55, '2008_01_10_002922_create_pesanans_table', 32),
(56, '2008_01_10_025240_create_pesan_barangs_table', 33),
(57, '2008_01_04_132226_create_metode_pembayaran_table', 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dari` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `dari`, `pemberitahuan`, `status`, `jabatan`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'umkm', 'Menunggu anda verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:45:02', '2013-01-09 11:45:02'),
(2, 'umkm', 'Menunggu anda verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:45:30', '2013-01-09 11:45:30'),
(3, 'umkm', 'Menunggu anda Verifikasi pembayaran Iklan Produk', 'belum aksi', NULL, 'verifikasi iklan produk', NULL, '2013-01-09 11:49:30', '2013-01-09 11:49:30'),
(4, 'umkm', 'Menunggu anda Verifikasi pembayaran Iklan Produk', 'belum aksi', NULL, 'verifikasi iklan produk', NULL, '2013-01-09 11:55:33', '2013-01-09 11:55:33'),
(5, 'TokoKu', 'Menunggu ada Verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', 'umkm', 'verifikasi premium umkm', NULL, '2013-01-09 11:56:34', '2013-01-09 11:56:34'),
(6, ' ', 'Menunggu Anda anda Verifikasi UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pendaftaran UMKM', NULL, '2021-11-16 02:37:12', '2021-11-16 02:37:12'),
(7, 'umkm', 'Menunggu anda Verifikasi pembayaran Iklan Produk', 'belum aksi', NULL, 'verifikasi iklan produk', NULL, '2021-11-16 03:24:56', '2021-11-16 03:24:56'),
(8, 'umkm', 'Menunggu Anda anda Verifikasi Iklan Produk UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pengajuan Iklan Produk', NULL, '2013-01-09 10:53:37', '2013-01-09 10:53:37'),
(9, 'umkm', 'Menunggu Anda anda Verifikasi Iklan Produk UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pengajuan Iklan Produk', NULL, '2013-01-09 10:58:27', '2013-01-09 10:58:27'),
(10, 'umkm', 'Menunggu Anda anda Verifikasi Iklan Produk UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pengajuan Iklan Produk', NULL, '2013-01-09 11:15:56', '2013-01-09 11:15:56'),
(11, 'umkm', 'Menunggu Anda anda Verifikasi Iklan Produk UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pengajuan Iklan Produk', NULL, '2013-01-09 11:18:10', '2013-01-09 11:18:10'),
(12, 'umkm', 'Menunggu Anda anda Verifikasi Iklan Produk UMKM mohon di periksa sebelum memverifikasinya', 'belum aksi', NULL, 'Pengajuan Iklan Produk', NULL, '2013-01-09 11:18:28', '2013-01-09 11:18:28'),
(13, 'TokoKu', 'Menunggu anda untuk Verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', 'umkm', 'verifikasi premium umkm', NULL, '2013-01-09 11:23:50', '2013-01-09 11:23:50'),
(14, 'TokoKu', 'Menunggu anda untuk Verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', 'umkm', 'verifikasi premium umkm', NULL, '2013-01-09 11:26:52', '2013-01-09 11:26:52'),
(15, 'TokoKu', 'Menunggu ada Verifikasi Produk , Mohon diperiksa teliti sebelum memverifikasinya', 'belum aksi', 'umkm', 'verifikasi produk umkm', NULL, '2013-01-09 11:41:34', '2013-01-09 11:41:34'),
(16, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:47:02', '2013-01-09 11:47:02'),
(17, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:55:05', '2013-01-09 11:55:05'),
(18, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:57:26', '2013-01-09 11:57:26'),
(19, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 11:57:45', '2013-01-09 11:57:45'),
(20, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 12:00:07', '2013-01-09 12:00:07'),
(21, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 12:01:19', '2013-01-09 12:01:19'),
(22, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 12:06:28', '2013-01-09 12:06:28'),
(23, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 12:07:38', '2013-01-09 12:07:38'),
(24, 'umkm', 'Produk telah di Update oleh UMKM', 'belum aksi', NULL, 'Edit produk umkm', NULL, '2013-01-09 12:09:26', '2013-01-09 12:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_akun_pro_umkms`
--

CREATE TABLE `pengajuan_akun_pro_umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengajukan_tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diverifikasi_tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_notifikasi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_bukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan_akun_pro_umkms`
--

INSERT INTO `pengajuan_akun_pro_umkms` (`id`, `umkm`, `mengajukan_tanggal`, `diverifikasi_tanggal`, `total_pembayaran`, `metode_pembayaran`, `status_pembayaran`, `status_notifikasi`, `foto_bukti`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(11, 'Toko Bagus', ' ', ' ', '50000', ' ', 'Telah Di Verifikasi', 'belum aksi', '60cac46e87e96.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2021-12-03 17:38:43', '2021-12-03 17:38:43'),
(14, 'Toko Anto', ' ', ' ', '50000', ' ', 'Telah Di Verifikasi', 'belum aksi', '19cb7a88-8a3b-4d4b-a1fb-c8f13abbaabf.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2021-12-24 16:23:55', '2021-12-24 16:46:45'),
(15, 'TES', ' ', ' ', '50000', ' ', 'Telah Di Verifikasi', 'belum aksi', 'Tulips.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2022-01-03 19:31:04', '2022-01-03 19:31:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_iklan_produks`
--

CREATE TABLE `pengajuan_iklan_produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_di_rentan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_notifikasi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_bukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan_iklan_produks`
--

INSERT INTO `pengajuan_iklan_produks` (`id`, `umkm`, `nama_produk`, `deskripsi`, `iklan_di_rentan`, `total_pembayaran`, `status_pembayaran`, `status_notifikasi`, `foto_bukti`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(14, 'Toko Bagus', 'Sepatu Sport', 'Beli 2 ongkir cuma 1\r\njadi 1 kilo gram muat 2 pcs 2 box\r\nharga termurah\r\nkualitas terbaik', 'NULL', '50000', 'Belum DI Verifikasi', 'belum aksi', 'H2ae0889f880042c28294e2b36c5f34bfK.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2021-12-03 17:39:31', '2021-12-03 17:39:31'),
(15, 'Toko Anto', 'Sepatu Sport', 'Baik', 'NULL', '50000', 'Telah Di Verifikasi', 'belum aksi', '6051e37f0b348.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2021-12-24 16:24:26', '2021-12-24 16:46:27'),
(16, 'Toko Bagus', 'Kemeja', 'Baik', 'NULL', '50000', 'Telah Di Verifikasi', 'belum aksi', 'kemeja.JPG', 'menunggu ada memverifikasikan iklan Produknya', '2021-12-25 00:28:20', '2021-12-25 00:30:43'),
(17, 'TES', 'Sepatu', 'Sanga Baik', 'NULL', '50000', 'Telah Di Verifikasi', 'belum aksi', 'Koala.jpg', 'menunggu ada memverifikasikan iklan Produknya', '2022-01-03 19:43:25', '2022-01-03 19:44:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pencairans`
--

CREATE TABLE `pengajuan_pencairans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengajuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `total_ppencairan` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_transfer_dana` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_notifikasi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan_pencairans`
--

INSERT INTO `pengajuan_pencairans` (`id`, `nama_umkm`, `tanggal_pengajuan`, `total_penjualan`, `total_ppencairan`, `status`, `bukti_transfer_dana`, `status_notifikasi`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(13, 'TokoKu', 'NULL', 2790000, 2790000, 'Belum Di Verifikasi', '', 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2013-01-09 13:08:46', '2013-01-09 13:08:46'),
(15, 'umkm', 'NULL', 10000, 10000, 'Telah Di Verifikasi', 'Lighthouse.jpg', 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2021-11-25 00:55:47', '2022-01-03 20:35:03'),
(20, 'Toko Bagus', '2022-01-04 04:27:49', 73000, 73000, 'Belum Di Verifikasi', '', 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2013-01-09 12:12:14', '2013-01-09 12:12:14'),
(22, 'Toko Bagus', '2022-01-04 04:27:49', 46000, 46000, 'Telah Di Verifikasi', 'Chrysanthemum.jpg', 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2022-01-03 21:05:30', '2022-01-03 21:07:34'),
(23, 'Toko Bagus', '2022-01-04 04:27:49', 46000, 46000, 'Belum Di Verifikasi', NULL, 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2022-01-03 21:27:57', '2022-01-03 21:27:57'),
(24, 'Toko Bagus', '2022-01-04 09:08:52', 46000, 46000, 'Telah Di Verifikasi', 'Tulips.jpg', 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2022-01-04 02:09:23', '2022-01-04 02:11:10'),
(25, 'Toko Bagus', '2022-01-04 13:16:26', 46000, 46000, 'Belum Di Verifikasi', NULL, 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2022-01-04 06:16:31', '2022-01-04 06:16:31'),
(26, 'Toko Bagus', '2022-01-04 13:42:12', 46000, 46000, 'Belum Di Verifikasi', NULL, 'belum aksi', 'UMKM Melakukan Pengajuan Pencairan Data', '2022-01-04 06:42:17', '2022-01-04 06:42:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `nama`, `email`, `alamat`, `telpon`, `tracking_nomor`, `total_bayar`, `status`, `created_at`, `updated_at`) VALUES
(12, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '62522', '40000', '0', '2013-01-09 10:55:33', '2013-01-09 10:55:33'),
(13, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '22853', '40000', '0', '2013-01-09 10:58:07', '2013-01-09 10:58:07'),
(14, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '56741', '40000', '0', '2013-01-09 10:59:12', '2013-01-09 10:59:12'),
(15, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '25941', '40000', '0', '2013-01-09 11:00:50', '2013-01-09 11:00:50'),
(16, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '44221', '0', '0', '2013-01-09 11:00:52', '2013-01-09 11:00:52'),
(17, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '74387', '7000', '0', '2013-01-09 11:03:03', '2013-01-09 11:03:03'),
(18, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '73533', '100000', '0', '2013-01-09 11:05:54', '2013-01-09 11:05:54'),
(19, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '46074', '37000', '0', '2013-01-09 11:07:45', '2013-01-09 11:07:45'),
(20, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '79978', '56000', '0', '2013-01-09 11:09:48', '2013-01-09 11:09:48'),
(21, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '50031', '56000', '0', '2013-01-09 11:12:11', '2013-01-09 11:12:11'),
(22, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '47714', '56000', '0', '2013-01-09 11:14:55', '2013-01-09 11:14:55'),
(23, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '35723', '0', '0', '2013-01-09 11:14:57', '2013-01-09 11:14:57'),
(24, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '32997', '100000', '0', '2013-01-09 11:15:42', '2013-01-09 11:15:42'),
(25, '8', 'Mas Pure', 'pur@gmail.com', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', '0895704043815', '93004', '300000', '0', '2022-01-03 20:06:38', '2022-01-03 20:06:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `subjek`, `no_hp`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'lkjlkjlk', 'kjlkj@gmail.com', 'jlkjlk', 'gjhghjg', 'hjgjhg', '2013-01-09 12:37:06', '2013-01-09 12:37:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_barangs`
--

CREATE TABLE `pesan_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `pesanan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `status_verifikasi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_barangs`
--

INSERT INTO `pesan_barangs` (`id`, `umkm`, `user_id`, `pesanan_id`, `produk_id`, `kuantitas`, `harga_produk`, `status`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
(15, 'Toko Bagus', 8, '22', '24', '1', '56000', 'Dalam Proses Pengemasan', 'Telah Di Verifikasi', '2013-01-09 11:14:55', '2021-12-28 20:15:44'),
(16, 'Toko Anto', 8, '24', '27', '1', '100000', 'Dalam Proses Pengemasan', 'Belum Di Verifikasi', '2013-01-09 11:15:42', '2013-01-09 11:15:42'),
(17, 'TES', 8, '25', '29', '3', '100000', 'Dalam Proses Pengemasan', 'Belum Di Verifikasi', '2022-01-03 20:06:39', '2022-01-03 20:06:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_kurirs`
--

CREATE TABLE `review_kurirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kurir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjual` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_motor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `review_dari_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_produks`
--

CREATE TABLE `review_produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kuantitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `isi_review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `review_produks`
--

INSERT INTO `review_produks` (`id`, `umkm`, `id_produk`, `id_user`, `kuantitas`, `rating`, `isi_review`, `foto_produk`, `created_at`, `updated_at`) VALUES
(7, 'Toko Bagus', 24, 8, '1', 5, 'Kalitas Baik', 'kemeja.JPG', '2021-12-28 20:33:47', '2021-12-28 20:33:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_slider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `nama_slider`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1357783751.jpg', 'active', 'active', '2013-01-09 19:09:11', '2013-01-09 19:09:11'),
(2, '1357784285.jpg', 'Tes2', '', '2013-01-09 19:18:05', '2013-01-09 19:18:05'),
(3, '1357784305.jpg', 'Tes3', '', '2013-01-09 19:18:25', '2013-01-09 19:18:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampung_files`
--

CREATE TABLE `tampung_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat_01` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat_02` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat_03` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat_04` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nib` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tampung_files`
--

INSERT INTO `tampung_files` (`id`, `email`, `syarat_01`, `syarat_02`, `syarat_03`, `syarat_04`, `no_nib`, `created_at`, `updated_at`) VALUES
(50, 'umkm@gmail.com', 'Desert.jpg', 'Chrysanthemum.jpg', 'Koala.jpg', 'Tulips.jpg', '444333', '2013-01-09 11:10:40', '2013-01-09 11:10:41'),
(51, 'tokonew@gmail.com', 'b2c.drawio', 'bab 2.drawio', 'bab2.drawio', 'dc2.drawio', '1212', '2013-01-09 15:08:39', '2013-01-09 15:08:39'),
(52, 't@gmail.com', 'Penguins.jpg', 'Lighthouse.jpg', 'Koala.jpg', 'Koala.jpg', '334', '2022-01-03 02:46:23', '2022-01-03 02:46:24'),
(53, 'a@gmail.com', 'Koala.jpg', 'Lighthouse.jpg', 'Penguins.jpg', 'Tulips.jpg', '22222', '2013-01-09 10:17:16', '2013-01-09 10:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_jualins`
--

CREATE TABLE `tentang_jualins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_jualin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_penggunas`
--

CREATE TABLE `user_penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomor_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_penggunas`
--

INSERT INTO `user_penggunas` (`id`, `username`, `email`, `tgl_lahir`, `alamat_rumah`, `jenis_kelamin`, `no_ktp`, `jabatan`, `status`, `umkm`, `status_profil`, `foto`, `password`, `created_at`, `updated_at`, `nomor_hp`) VALUES
(1, 'Tese', 'tes@gmail.com', '', '', '', '', 'superadmin', 'belum mendaftar', '', '', '', '$2y$10$glErQ.KoQCdS81bLAi4h/OuTVBWIzZNLj7FGx5pxvYGAv2/auU8su', '2021-09-28 23:42:52', '2021-10-14 23:48:59', '8098'),
(2, 'umkm', 'umkm@gmail.com', '', '', '', '', 'umkm', 'telah mendaftar', 'Toko Bagus', '1', 'Koala.jpg', '$2y$10$RqOcOXPitvKXRUlQy.7HcOWSHIPb3EAZtoSXtRLu0oFK1w1rt5Oya', '2021-09-28 23:51:32', '2013-01-09 11:53:03', '1567576'),
(3, 'admin', 'admin@gmail.com', '', '', '', '', 'admin', 'belum mendaftar', '', '', '', '$2y$10$AI5TlWE8NOzddCcxQFMzg.6xWVUPuGnxdvWt1X9J/2DE/hoQprify', '2021-09-29 00:05:16', '2021-09-29 00:05:16', ''),
(5, 'umkm2', 'umkm2@gmail.com', '', '', '', '', 'umkm', 'belum mendaftar', 'TokoApp', '', '', '$2y$10$MOlrdgHhzZHxJ5j1to7/JeSu3spqDKSS0h3w7B0kRfkbeArKXkGLy', '2021-09-30 11:47:14', '2021-09-30 11:47:14', '08961786217'),
(6, 'super', 'supertadmin1@gmail.com', '', '', '', '', 'superadmin', 'Sudah Mendaftar', '', '', '', '$2y$10$xoTDtIl6BH4zuu5.v0dOpuEAY8lPd7vAJ6LRXkeUqbDUEX7FKML6G', '2021-10-29 18:33:03', '2021-10-29 18:33:03', ''),
(8, 'Mas Pure', 'pur@gmail.com', '2021-11-18', 'Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal', 'Laki-laki', '6162627888989999', 'user_pengguna', 'belum mendaftar', '', '', 'ppt.PNG', '$2y$10$6xjo3/G/m.DQuel4qcz/fe02LL7eu7S.ELqk7Ejev7sTVKZdvQWOW', '2021-11-04 04:22:31', '2021-11-08 02:10:43', '0895704043815'),
(9, 'Mo', 'mo@gmail.com', NULL, NULL, NULL, NULL, 'umkm', 'belum mendaftar', 'TokoKu', '', '', '$2y$10$AA4Mx06QBIIDwZrB/rZHDelNffQ6UHNCsTozJZ4krbqCErfOvWsVu', '2021-11-16 01:26:47', '2021-11-16 01:26:47', ''),
(10, 'NewUser', 'kucing@gmail.com', NULL, NULL, NULL, NULL, 'umkm', 'belum mendaftar', 'Toko Kucing', '1', 'Hydrangeas.jpg', '$2y$10$RjoTec1TFA4CM09iaUpu.ua0mi5DIFeRI3en7kyZ/pyAA8fp3LNNi', '2013-01-09 10:38:59', '2021-11-16 20:57:37', '087678687687678'),
(11, 'TehManis', 'tesmanis@gmail.com', '2013-01-16', 'Pontianak', 'Laki-Laki', '7182718216726', 'umkm', 'belum mendaftar', 'Toko Teh', '1', '', '$2y$10$A1xSTMPs4tN8L2slV1bwQ.P54RejsZvt8IkEriOf79ThxsJh1IRjm', '2013-01-09 11:11:29', '2021-11-23 01:46:23', '0789798787897'),
(12, 'boing', 'umkm1@gmail.com', '2021-11-17', 'hshaa', 'laki-laki', '18288281', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$6lQsZZhQ7obDDxfbkZAyg.v91bBJXHFi7SQDYOfHhKRiWxkVztGyK', '2021-11-30 00:28:00', '2021-11-30 00:28:00', '0282828'),
(13, 'Joko', 'joko@gmail.com', '2017-02-01', 'koko', 'Laki-Laki', '323121212212', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$YklfAwpz1HWxkDnfvDg7ieIEn12RdMNmPpB6v/v5LtWXCb5SNKP9m', '2021-12-03 16:45:38', '2021-12-03 16:45:38', '8901892798'),
(14, 'Toko New', 'tokonew@gmail.com', '2013-01-01', 'tes', 'Laki-Laki', '121212323232', 'umkm', 'belum mendaftar', 'Toko Anto', '1', 'Desert.jpg', '$2y$10$hjgFU3GoRzunSDpSaG/Tg.ohi1GZnyC2oKW03xdB3HZCR54PMEIRK', '2013-01-09 15:06:44', '2021-12-24 13:54:09', '0895704043815'),
(15, 'Toko Tes', 'tes123@gmail.com', '1999-08-05', 'Jl.Merdeka', 'laki-laki', '8787987898', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$fdh9BQewOnXgTlrG53GOpOPFx9sq2sJYu76z68/T3lr5yqR/c/lkK', '2022-01-03 00:57:36', '2022-01-03 00:57:36', '08967678677'),
(16, 'Tes', 'tes1@gmail.com', '2017-02-04', 'asas', 'laki-laki', '686287162816', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$XK69zveDMjlDIOFRqbIIBOORbAlXFMckxJsMGT9tvLgqIwwoeWHo6', '2022-01-03 02:26:31', '2022-01-03 02:26:31', '233323'),
(17, 'yuyi', 'yu@gmail.com', '2016-02-04', 't', 'laki-laki', '879878', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$v6F7Ld0bZcHqQ/3TQovRqebxW8qO5Kc2HtTH7IpMtHtL.tuOzgUSi', '2022-01-03 02:28:10', '2022-01-03 02:28:10', '121212'),
(18, 'yy', 'yy@gmail.com', '2013-09-02', 'qwqw', 'laki-laki', '6787687', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$X.Spru9MUfBNoBoi6djl6OebZ6m21mpF3cI.nubVtqOQHQH5d1F2K', '2022-01-03 02:31:03', '2022-01-03 02:31:03', '121212'),
(19, 'Tes', 'gg@gmail.com', '2004-09-04', 'tyty', 'laki-laki', '8789798', 'umkm', 'belum mendaftar', '', '', '', '$2y$10$/al3SoDY6sYVVXnCZrOPR.4ZXjE0Uvo/p/G9BbP1wSiOW6jdMOtQK', '2022-01-03 02:37:32', '2022-01-03 02:37:32', '12122'),
(20, 'Toko T', 't@gmail.com', '2005-09-25', 'tes', 'laki-laki', '8888888', 'umkm', 'belum mendaftar', 'TES', '1', 'Penguins.jpg', '$2y$10$ch/brJtO7VUT2MbvWxGkveIKj09MZ20Y8klg62m2Ro/raaydOxa2K', '2022-01-03 02:39:11', '2022-01-03 19:25:31', '222222'),
(21, 'Toko A', 'a@gmail.com', '2008-06-07', 'a', 'laki-laki', '6876876876', 'umkm', 'belum mendaftar', 'Toko AA', '1', 'Jellyfish.jpg', '$2y$10$OgDeZ4OYxfUX/Ej9UA4fQu5dgxW0QeAlZWCnczkWdToIrfzVd4UT.', '2013-01-09 10:16:31', '2013-01-09 10:19:36', '1212122121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_pembelians`
--

CREATE TABLE `verifikasi_pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantitas` int(100) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_pembelian_2`
--

CREATE TABLE `verifikasi_pembelian_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembeli_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembelian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_produks`
--

CREATE TABLE `verifikasi_produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_stok` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `ukuran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_verifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_notifikasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `verifikasi_produks`
--

INSERT INTO `verifikasi_produks` (`id`, `umkm`, `nama_produk`, `kategori`, `deskripsi_produk`, `total_stok`, `harga_produk`, `ukuran`, `berat`, `status_verifikasi`, `status_notifikasi`, `pemberitahuan`, `foto_produk1`, `foto_produk2`, `foto_produk3`, `foto_produk4`, `foto_produk5`, `created_at`, `updated_at`) VALUES
(22, 'Toko Bagus', 'Sepatu Sport', 'Sepatu', 'Beli 2 ongkir cuma 1\r\njadi 1 kilo gram muat 2 pcs 2 box\r\nharga termurah\r\nkualitas terbaik', 2, 400000, '15x8', '0,6 kg', 'Telah Di Verifikasi', 'belum aksi', 'Produk telah di tambah oleh umkm', '441e5f68-cf5d-4176-94ef-b5844b3b8a87.jpg', '949f0088-3e50-4b86-a99c-519ed3f8c07a.jpg', '73221e2229b2257d88695f49981bdd41.jpg', '19cb7a88-8a3b-4d4b-a1fb-c8f13abbaabf.jpg', 'data.jpeg', '2021-12-03 16:33:58', '2013-01-09 10:36:54'),
(23, 'Toko Kucing', 'Sosis', 'Makanan', 'Champ Sosis Ayam\r\nBerat : 1kg\r\nIsi : 40 pcs\r\nExp date : 2023\r\nRating produk: sudah tentu Enakkkk dan Terjangkau\r\nDigoreng / Direbus / DIY', 19, 37000, '15 x 8', '1 kg', 'Telah Di Verifikasi', 'aksi', 'Produk telah di tambah oleh umkm', 'bfee16a0959978f0f9fe7790fec84554.jpg', 'unnamed (1).jpg', 'unnamed.jpg', 'unnamed (1).jpg', 'bfee16a0959978f0f9fe7790fec84554.jpg', '2021-12-04 00:28:11', '2013-01-09 11:07:46'),
(24, 'Toko Bagus', 'Kemeja Jumbo Flanel XXL', 'Kemeja', '1 KG MUAT 4PCS KEMEJA\r\nKEMEJA FANEL LENGAN PANJANG PRIA\r\n\r\nTERSEDIA UKURAN  L,XL                   \r\nBahan dari FLANEL PREMIUM\r\n\r\nTersedia M  Size L dan XL (standar indonesia).', 0, 56000, '2', '0,1 kg', 'Telah Di Verifikasi', 'aksi', 'Produk telah di tambah oleh umkm', 'kemeja1.JPG', 'kemeja2.JPG', 'kemeja3.JPG', 'kemeja2.JPG', 'kemeja3.JPG', '2021-12-04 00:52:35', '2013-01-09 11:14:55'),
(25, 'Toko Bagus', 'Fanta Strawberry Can 330 Ml', 'Minuman', 'Fanta Strawberry Can 330 ml Minuman berkarbonasi dengan rasa yang menyegarkan cocok diminum untuk menemani aktifitas anda sehari hari', -1, 7000, '2', '0,5 kg', 'Telah Di Verifikasi', 'belum aksi', 'Produk telah di tambah oleh umkm', 'fanta.JPG', 'fanta.JPG', 'fanta.JPG', 'fanta.JPG', 'fanta.JPG', '2021-12-04 00:58:25', '2013-01-09 11:03:04'),
(26, 'Toko Bagus', 'Topi Baseball Bordir Kaktus', 'Topi', 'Collection Hadir dengan Topi Baseball Bordir Kaktus Kualitas Premium\r\nTopi Bordir Kaktus dengan Kualitas Premium, Namun dengan Kualitas Topi yang Bagus', 1, 10000, '0', '0,2 kg', 'Belum Di Verifikasi', 'aksi', 'Produk telah di tambah oleh umkm', 'topi.JPG', 'topi2.JPG', 'topi3.JPG', 'topi.JPG', 'topi3.JPG', '2021-12-04 01:33:18', '2013-01-09 11:36:37'),
(27, 'Toko Anto', 'Sepatu Sport', 'Sepatu', 'Baik', 17, 100000, '32', '3', 'Telah Di Verifikasi', 'belum aksi', 'Produk telah di update oleh umkm', '6051e37f0b348.jpg', '73221e2229b2257d88695f49981bdd41.jpg', '6579774_9357e4bb-db2b-4efd-9067-7b92e65b0dd5_960_960.jpg', '19cb7a88-8a3b-4d4b-a1fb-c8f13abbaabf.jpg', '949f0088-3e50-4b86-a99c-519ed3f8c07a.jpg', '2021-12-24 15:49:04', '2013-01-09 11:15:42'),
(28, 'Toko Bagus', 'Kemeja', 'Kemeja', 'Baik', 19, 40000, 'L', '0,2', 'Telah Di Verifikasi', 'aksi', 'Produk telah di tambah oleh umkm', 'kemeja.JPG', 'kemeja.JPG', 'kemeja.JPG', 'kemeja.JPG', 'kemeja.JPG', '2013-01-09 10:39:27', '2013-01-09 11:00:51'),
(29, 'TES', 'Sepatu', 'Sepatu', 'Sanga Baik', 18, 100000, '41', '2', 'Telah Di Verifikasi', 'belum aksi', 'Produk telah di update oleh umkm', 'kl;.PNG', 'Koala.jpg', 'Hydrangeas.jpg', 'Penguins.jpg', 'Tulips.jpg', '2022-01-03 19:28:30', '2022-01-03 20:06:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_umkms`
--

CREATE TABLE `verifikasi_umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_umkm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_wa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_bayar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_bukti` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_notifikasi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemberitahuan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `verifikasi_umkms`
--

INSERT INTO `verifikasi_umkms` (`id`, `username`, `nama_umkm`, `email`, `jabatan`, `kontak_wa`, `alamat`, `nominal_bayar`, `foto_bukti`, `status`, `status_notifikasi`, `pemberitahuan`, `created_at`, `updated_at`) VALUES
(23, 'umkm', NULL, 'umkm@gmail.com', 'umkm', ' ', ' ', '60000', 'Chrysanthemum.jpg', 'Telah Di Verifikasi', 'belum aksi', 'menunggu ada memverifikasikan pendaftaran umkm', '2013-01-09 18:50:18', '2013-01-09 11:50:18'),
(24, 'Toko New', NULL, 'tokonew@gmail.com', 'umkm', ' ', ' ', '60000', 'd9d84e15-b5ff-47d2-a660-ec5ddda5f494.jpg', 'Telah Di Verifikasi', 'belum aksi', 'menunggu ada memverifikasikan pendaftaran umkm', '2021-12-24 23:16:57', '2021-12-24 23:16:57'),
(25, 'Toko T', NULL, 't@gmail.com', 'umkm', ' ', ' ', '60000', 'Koala.jpg', 'Telah Di Verifikasi', 'belum aksi', 'menunggu ada memverifikasikan pendaftaran umkm', '2022-01-03 10:02:18', '2022-01-03 03:02:18'),
(26, 'Toko A', NULL, 'a@gmail.com', 'umkm', ' ', ' ', '60000', 'Desert.jpg', 'Telah Di Verifikasi', 'belum aksi', 'menunggu ada memverifikasikan pendaftaran umkm', '2013-01-09 17:18:41', '2013-01-09 10:18:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `claim_konsumens`
--
ALTER TABLE `claim_konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori_barangs`
--
ALTER TABLE `kategori_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_incomes`
--
ALTER TABLE `laporan_incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_jumlah_produks`
--
ALTER TABLE `laporan_jumlah_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_jumlah_transaksis`
--
ALTER TABLE `laporan_jumlah_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_jumlah_umkms`
--
ALTER TABLE `laporan_jumlah_umkms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengajuan_akun_pro_umkms`
--
ALTER TABLE `pengajuan_akun_pro_umkms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan_iklan_produks`
--
ALTER TABLE `pengajuan_iklan_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan_pencairans`
--
ALTER TABLE `pengajuan_pencairans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_barangs`
--
ALTER TABLE `pesan_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review_kurirs`
--
ALTER TABLE `review_kurirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review_produks`
--
ALTER TABLE `review_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tampung_files`
--
ALTER TABLE `tampung_files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang_jualins`
--
ALTER TABLE `tentang_jualins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_penggunas`
--
ALTER TABLE `user_penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `verifikasi_pembelians`
--
ALTER TABLE `verifikasi_pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `verifikasi_pembelian_2`
--
ALTER TABLE `verifikasi_pembelian_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `verifikasi_produks`
--
ALTER TABLE `verifikasi_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `verifikasi_umkms`
--
ALTER TABLE `verifikasi_umkms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `claim_konsumens`
--
ALTER TABLE `claim_konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_barangs`
--
ALTER TABLE `kategori_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_incomes`
--
ALTER TABLE `laporan_incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_jumlah_produks`
--
ALTER TABLE `laporan_jumlah_produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_jumlah_transaksis`
--
ALTER TABLE `laporan_jumlah_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_jumlah_umkms`
--
ALTER TABLE `laporan_jumlah_umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_akun_pro_umkms`
--
ALTER TABLE `pengajuan_akun_pro_umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_iklan_produks`
--
ALTER TABLE `pengajuan_iklan_produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_pencairans`
--
ALTER TABLE `pengajuan_pencairans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_barangs`
--
ALTER TABLE `pesan_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `review_kurirs`
--
ALTER TABLE `review_kurirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `review_produks`
--
ALTER TABLE `review_produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tampung_files`
--
ALTER TABLE `tampung_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tentang_jualins`
--
ALTER TABLE `tentang_jualins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_penggunas`
--
ALTER TABLE `user_penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `verifikasi_pembelians`
--
ALTER TABLE `verifikasi_pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `verifikasi_pembelian_2`
--
ALTER TABLE `verifikasi_pembelian_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `verifikasi_produks`
--
ALTER TABLE `verifikasi_produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `verifikasi_umkms`
--
ALTER TABLE `verifikasi_umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
