-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 10.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absens`
--

CREATE TABLE `absens` (
  `idAbsen` bigint(20) UNSIGNED NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `tglAbsen` date DEFAULT NULL,
  `tglMulai` datetime DEFAULT NULL,
  `tglHabis` datetime DEFAULT NULL,
  `jmlAbsen` int(11) DEFAULT NULL,
  `perihalAbsen` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isiAbsen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusAbsen` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksess`
--

CREATE TABLE `aksess` (
  `idAkses` bigint(20) UNSIGNED NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `idBrief` int(11) DEFAULT NULL,
  `host_id` bigint(20) UNSIGNED DEFAULT NULL,
  `domainAkses` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userAkses` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passAkses` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunads`
--

CREATE TABLE `akunads` (
  `idAkun` bigint(20) UNSIGNED NOT NULL,
  `namaAkun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalAkun` int(11) DEFAULT NULL,
  `jumlahAds` int(11) DEFAULT NULL,
  `sisaPpn` int(11) DEFAULT NULL,
  `antriTF` int(11) DEFAULT NULL,
  `totalSemua` int(11) DEFAULT NULL,
  `sisaAkun` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akunads`
--

INSERT INTO `akunads` (`idAkun`, `namaAkun`, `totalAkun`, `jumlahAds`, `sisaPpn`, `antriTF`, `totalSemua`, `sisaAkun`, `created_at`, `updated_at`) VALUES
(1, 'Akun A', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:03:52', '2021-08-13 17:03:52'),
(2, 'Akun B', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:03:52', '2021-08-13 17:03:52'),
(3, 'JasterAds', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:04:25', '2021-08-13 17:04:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `briefs`
--

CREATE TABLE `briefs` (
  `idBrief` bigint(20) UNSIGNED NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `idComp` int(11) DEFAULT NULL,
  `logoBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paketBrief` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colorBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `igBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passGramBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telfBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reqBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `targetBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `companys`
--

CREATE TABLE `companys` (
  `idComp` bigint(20) UNSIGNED NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idBrief` int(11) DEFAULT NULL,
  `brandComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addrComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hosts`
--

CREATE TABLE `hosts` (
  `idHost` bigint(20) UNSIGNED NOT NULL,
  `domHost` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userHost` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passHost` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hosts`
--

INSERT INTO `hosts` (`idHost`, `domHost`, `userHost`, `passHost`, `created_at`, `updated_at`) VALUES
(1, 'sukafotoproduk.com', 'sukafoto', '1f5JvzXI', '2022-01-14 09:13:06', '2022-01-14 09:13:06'),
(2, 'website1juta.com', 'u7143870', '2RgMtZJa', '2022-01-14 09:13:06', '2022-01-14 09:13:06'),
(3, 'jasawebsidoarjo.com', 'u6728999', 'uHfyQ88r2m', '2022-01-14 09:13:06', '2022-01-14 09:13:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklans`
--

CREATE TABLE `iklans` (
  `idAds` bigint(20) UNSIGNED NOT NULL,
  `namaAds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldoAds` decimal(8,0) NOT NULL,
  `akunAds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulaiAds` date NOT NULL,
  `selesaiAds` date NOT NULL,
  `nowAds` decimal(10,0) DEFAULT NULL,
  `sisaAds` decimal(10,0) DEFAULT NULL,
  `totalAds` decimal(10,0) DEFAULT NULL,
  `statAds` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `noteAds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `iklans`
--

INSERT INTO `iklans` (`idAds`, `namaAds`, `saldoAds`, `akunAds`, `mulaiAds`, `selesaiAds`, `nowAds`, `sisaAds`, `totalAds`, `statAds`, `noteAds`, `created_at`, `updated_at`) VALUES
(23, 'Antika', '1000000', 'JasterAds', '2021-11-15', '2021-12-14', '6872910', '-872910', NULL, 'on', NULL, '2021-08-22 12:08:57', '2021-11-15 06:06:46'),
(24, 'Iklantop', '3000', 'Akun B', '2021-06-18', '2021-08-31', '1500', '1500', NULL, 'off', NULL, '2021-08-22 12:09:54', '2021-09-26 20:41:51'),
(25, 'ArtaExpress', '500000', 'Akun B', '2021-08-23', '2021-08-31', '455000', '45000', NULL, 'off', NULL, '2021-08-22 12:10:38', '2021-09-21 04:04:24'),
(26, 'MultiTeknik', '3000000', 'JasterAds', '2021-08-20', '2021-08-27', '3017364', '-17364', NULL, 'off', NULL, '2021-08-22 12:11:25', '2021-10-02 08:57:37'),
(27, 'Bismillah', '14640000', 'Akun A', '2021-01-04', '2021-09-30', '14635140', '4860', NULL, 'off', NULL, '2021-09-21 03:04:22', '2021-11-09 19:49:23'),
(28, 'Nawwis', '30000000', 'Akun B', '2021-04-25', '2021-09-30', '27282324', '2717676', NULL, 'on', NULL, '2021-09-21 03:08:55', '2021-11-06 03:07:42'),
(29, 'Robelin', '2000000', 'Akun B', '2021-08-14', '2021-09-30', '2679762', '-679762', NULL, 'on', NULL, '2021-09-21 03:10:22', '2021-11-06 03:07:54'),
(30, 'SIPA', '2550000', 'Akun B', '2021-05-09', '2021-09-30', '2575901', '-25901', NULL, 'on', NULL, '2021-09-21 03:11:30', '2021-11-06 03:08:35'),
(31, 'Wijaya', '65050000', 'Akun B', '2019-07-09', '2021-09-30', '63129548', '1920452', NULL, 'on', NULL, '2021-09-21 03:13:00', '2021-11-06 03:08:47'),
(32, 'Purwojoyo', '6800000', 'JasterAds', '2021-03-15', '2021-09-30', '6795983', '4017', NULL, 'on', NULL, '2021-09-21 03:14:16', '2021-11-06 03:10:35'),
(33, 'Fawwaz', '3000000', 'JasterAds', '2021-06-29', '2021-09-30', '3284988', '-284988', NULL, 'on', NULL, '2021-09-21 03:15:17', '2021-11-06 03:09:44'),
(34, 'Mitrajaya', '1000000', 'JasterAds', '2021-10-04', '2021-10-11', '1907616', '-907616', NULL, 'on', NULL, '2021-09-21 03:16:19', '2021-11-05 02:15:42'),
(35, 'Wahana', '6058000', 'JasterAds', '2021-08-05', '2021-09-30', '7322875', '-1264875', NULL, 'on', NULL, '2021-09-21 03:17:12', '2021-11-06 03:11:09'),
(36, 'Sasaskincare', '500000', 'JasterAds', '2021-09-02', '2021-09-30', '1483546', '-983546', NULL, 'on', NULL, '2021-09-21 03:18:40', '2021-10-23 06:19:23'),
(37, 'Pireki', '500000', 'JasterAds', '2021-09-30', '2021-10-30', '490784', '9216', NULL, 'on', NULL, '2021-09-30 05:06:30', '2021-11-05 02:16:13'),
(38, 'Dwiputri', '1000000', 'Akun B', '2021-10-13', '2021-11-13', '718295', '281705', NULL, 'on', NULL, '2021-10-13 02:27:31', '2021-11-06 03:07:29'),
(39, 'RizkyJaya', '500000', 'JasterAds', '2021-10-15', '2021-11-14', '323495', '176505', NULL, 'on', NULL, '2021-10-15 11:55:01', '2021-11-06 03:10:53'),
(40, 'MobilTua', '1650000', 'JasterAds', '2021-10-23', '2021-11-21', '779470', '870530', NULL, 'on', NULL, '2021-10-23 14:39:48', '2021-11-06 03:10:02'),
(41, 'MukriMobil', '1500000', 'JasterAds', '2021-11-13', '2021-12-11', NULL, NULL, NULL, 'on', NULL, '2021-11-13 09:11:03', '2021-11-13 09:11:03'),
(42, 'SKCAdv', '1000000', 'JasterAds', '2021-11-28', '2021-12-26', NULL, NULL, NULL, 'on', NULL, '2021-11-27 16:47:14', '2021-11-27 16:47:14'),
(43, 'EldaAsri', '800000', 'JasterAds', '2021-12-05', '2022-01-03', NULL, NULL, NULL, 'on', NULL, '2021-12-05 10:24:06', '2021-12-05 10:24:06'),
(44, 'Seabright', '500000', 'JasterAds', '2022-01-06', '2022-02-04', NULL, NULL, NULL, 'on', NULL, '2022-01-05 19:04:21', '2022-01-05 19:04:21'),
(45, 'ArtaExNew', '700000', 'JasterAds', '2022-01-06', '2022-02-04', NULL, NULL, NULL, 'on', NULL, '2022-01-06 03:22:32', '2022-01-06 03:22:32');

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
(4, '2021_08_12_201218_create_iklans_table', 2),
(5, '2021_08_13_170252_create_akunads_table', 3),
(6, '2021_08_13_214549_create_topups_table', 4),
(10, '2021_09_23_092256_create_hosts_table', 6),
(13, '2021_08_14_202018_create_jwebs_table', 8),
(17, '2022_01_11_160021_create_absens_table', 10),
(18, '2021_09_23_091314_create_trxs_table', 11),
(19, '2022_01_11_160518_create_briefs_table', 12),
(20, '2022_01_11_2_create_domain_table', 13),
(21, '2022_01_11_160240_create_companys_table', 14),
(22, '2022_01_11_160649_create_orders_table', 15),
(23, '2021_09_23_091342_create_aksess_table', 16),
(24, '2021_09_23_1_create_hosts_table', 17),
(25, '2021_09_23_2_create_aksess_table', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 13),
(5, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `idOrder` bigint(20) UNSIGNED NOT NULL,
  `nomerOrder` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idBrief` int(11) DEFAULT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idComp` int(11) DEFAULT NULL,
  `dpTrx` int(11) DEFAULT NULL,
  `renew` int(11) DEFAULT NULL,
  `pmOrder` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglOrder` date DEFAULT NULL,
  `deadlineOrder` date DEFAULT NULL,
  `fromTrx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenisOrder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalOrder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusWeb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(2, '2', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(3, '3', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(4, '4', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(5, '5', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topups`
--

CREATE TABLE `topups` (
  `idTop` bigint(20) UNSIGNED NOT NULL,
  `idAds` int(11) NOT NULL,
  `saldoTop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglTop` date NOT NULL,
  `doneTop` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `topups`
--

INSERT INTO `topups` (`idTop`, `idAds`, `saldoTop`, `tglTop`, `doneTop`, `created_at`, `updated_at`) VALUES
(14, 23, '1000000', '2021-03-19', 'ya', NULL, '2021-09-21 04:25:47'),
(15, 24, '300000', '2021-06-18', 'ya', NULL, '2021-09-21 04:26:02'),
(16, 25, '500000', '2021-08-23', 'ya', NULL, '2021-08-29 14:14:17'),
(17, 26, '1500000', '2021-08-20', 'ya', NULL, '2021-09-21 04:26:27'),
(18, 23, '700000', '2021-08-21', 'ya', '2021-08-22 19:14:48', '2021-09-21 04:26:32'),
(19, 27, '88717', '2021-01-04', 'ya', NULL, '2021-09-21 04:25:36'),
(20, 28, '2400000', '2021-04-25', 'ya', NULL, '2021-09-21 04:25:52'),
(21, 29, '2000000', '2021-08-14', 'ya', NULL, '2021-09-21 04:26:23'),
(22, 30, '2550000', '2021-05-09', 'ya', NULL, '2021-09-21 04:25:57'),
(23, 31, '57550000', '2019-07-09', 'ya', NULL, '2021-09-21 04:24:24'),
(24, 32, '5800000', '2021-03-15', 'ya', NULL, '2021-09-21 04:25:42'),
(25, 33, '1500000', '2021-06-29', 'ya', NULL, '2021-09-21 04:26:06'),
(26, 34, '7100000', '2021-07-08', 'ya', NULL, '2021-09-21 04:26:11'),
(27, 35, '4558000', '2021-08-05', 'ya', NULL, '2021-09-21 04:26:18'),
(28, 36, '500000', '2021-09-02', 'ya', NULL, '2021-09-21 04:23:29'),
(29, 27, '480000', '2021-09-26', 'ya', '2021-09-26 07:30:57', '2021-09-26 07:37:43'),
(30, 28, '3000000', '2021-09-27', 'ya', '2021-09-27 04:41:38', '2021-09-29 04:19:05'),
(31, 33, '1500000', '2021-09-27', 'ya', '2021-09-27 05:08:01', '2021-09-29 04:19:10'),
(32, 37, '500000', '2021-09-30', 'ya', NULL, '2021-09-30 05:06:52'),
(33, 32, '1000000', '2021-10-01', 'ya', '2021-10-01 06:59:42', '2021-10-02 09:28:49'),
(34, 35, '1500000', '2021-10-02', 'ya', '2021-10-02 01:46:55', '2021-10-02 09:29:56'),
(35, 27, '2000000', '2021-10-02', 'ya', '2021-10-02 08:38:55', '2021-10-02 09:30:12'),
(36, 31, '7500000', '2021-10-03', 'ya', '2021-10-03 01:35:48', '2021-10-06 02:37:38'),
(37, 34, '1000000', '2021-10-03', 'ya', '2021-10-03 22:01:59', '2021-10-06 02:43:01'),
(38, 36, '1000000', '2021-10-05', 'ya', '2021-10-05 08:05:00', '2021-10-06 02:43:06'),
(39, 38, '1000000', '2021-10-13', 'ya', NULL, '2021-10-14 01:24:28'),
(40, 23, '1000000', '2021-10-13', 'ya', '2021-10-13 10:01:26', '2021-10-14 01:19:10'),
(41, 29, '1000000', '2021-10-13', 'ya', '2021-10-13 10:01:43', '2021-10-14 01:24:31'),
(42, 26, '1500000', '2021-10-13', 'ya', '2021-10-14 00:34:20', '2021-10-14 00:51:35'),
(43, 34, '920000', '2021-10-15', 'ya', '2021-10-15 06:11:23', '2021-10-15 06:19:56'),
(44, 39, '500000', '2021-10-15', 'ya', NULL, '2021-10-16 20:52:52'),
(45, 35, '1500000', '2021-10-22', 'ya', '2021-10-22 08:21:32', '2021-10-23 15:57:39'),
(46, 40, '1650000', '2021-10-23', 'ya', NULL, '2021-10-23 15:43:59'),
(47, 33, '1500000', '2021-11-28', 'ya', '2021-10-28 07:59:09', '2021-10-28 08:51:23'),
(48, 28, '3000000', '2021-10-31', 'ya', '2021-10-31 16:07:04', '2021-11-02 08:23:11'),
(49, 31, '8300000', '2021-11-02', 'ya', '2021-11-02 08:18:57', '2021-11-02 08:23:13'),
(50, 30, '750000', '2021-11-03', 'ya', '2021-11-03 06:43:09', '2021-11-05 12:26:28'),
(51, 32, '1000000', '2021-11-05', 'ya', '2021-11-05 12:15:11', '2021-11-05 12:24:13'),
(52, 37, '500000', '2021-11-10', 'ya', '2021-11-10 03:29:58', '2021-11-13 22:58:08'),
(53, 35, '1500000', '2021-11-10', 'ya', '2021-11-11 07:08:50', '2021-11-11 07:15:57'),
(54, 41, '1500000', '2021-11-13', 'ya', NULL, '2021-11-13 22:59:15'),
(55, 23, '1000000', '2021-11-15', 'ya', '2021-11-15 03:41:22', '2021-11-15 07:40:05'),
(56, 29, '1000000', '2021-11-15', 'ya', '2021-11-15 03:41:53', '2021-11-27 17:31:22'),
(57, 42, '1000000', '2021-11-28', 'ya', NULL, '2021-11-27 17:28:38'),
(58, 33, '1000000', '2021-11-30', 'ya', '2021-11-30 02:55:18', '2021-12-01 20:22:34'),
(59, 35, '1500000', '2021-12-03', 'ya', '2021-12-04 03:44:26', '2021-12-04 03:51:38'),
(60, 43, '800000', '2021-12-05', 'ya', NULL, '2021-12-05 11:38:41'),
(61, 32, '1000000', '2021-12-06', 'ya', '2021-12-06 04:04:38', '2021-12-07 12:13:27'),
(62, 28, '3000000', '2021-12-07', 'ya', '2021-12-07 11:40:23', '2021-12-07 12:13:25'),
(63, 24, '300000', '2021-12-08', 'ya', '2021-12-08 06:19:39', '2021-12-12 20:46:07'),
(64, 23, '1000000', '2021-12-10', 'ya', '2021-12-09 20:03:32', '2021-12-12 20:33:54'),
(65, 29, '1000000', '2021-12-10', 'ya', '2021-12-09 20:03:45', '2021-12-12 20:46:11'),
(66, 41, '1500000', '2021-12-13', 'ya', '2021-12-13 06:19:52', '2021-12-20 06:56:23'),
(67, 33, '1000000', '2021-12-20', 'ya', '2021-12-20 06:58:11', '2021-12-22 01:47:56'),
(68, 30, '750000', '2021-12-21', 'ya', '2021-12-21 02:54:45', '2021-12-22 01:47:59'),
(69, 28, '3000000', '2021-12-27', 'ya', '2022-01-01 02:36:28', '2022-01-01 02:42:09'),
(70, 42, '1500000', '2021-12-29', 'ya', '2022-01-01 02:39:15', '2022-01-01 02:44:12'),
(71, 31, '8300000', '2022-01-01', 'ya', '2022-01-02 04:46:15', '2022-01-02 17:15:03'),
(72, 23, '1000000', '2022-01-02', 'ya', '2022-01-02 16:41:22', '2022-01-02 17:11:15'),
(73, 29, '1000000', '2022-01-02', 'ya', '2022-01-02 16:41:47', '2022-01-02 17:14:35'),
(74, 27, '2000000', '2022-01-02', 'ya', '2022-01-02 16:53:52', '2022-01-02 17:08:50'),
(75, 32, '1300000', '2022-01-05', 'ya', '2022-01-05 03:18:51', '2022-01-05 19:27:13'),
(76, 38, '1000000', '2022-01-05', 'ya', '2022-01-05 04:04:56', '2022-01-05 19:18:52'),
(77, 44, '500000', '2022-01-06', 'ya', NULL, '2022-01-05 19:09:29'),
(78, 45, '700000', '2022-01-06', 'ya', NULL, '2022-01-06 04:46:48'),
(79, 35, '1500000', '2022-01-07', 'ya', '2022-01-07 08:09:09', '2022-01-07 15:41:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trxs`
--

CREATE TABLE `trxs` (
  `idTrx` bigint(20) UNSIGNED NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `paketTrx` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qtyTrx` int(11) DEFAULT NULL,
  `hargaTrx` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usrn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatUser` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglUser` date DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi',
  `telpUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoUser` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addrUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kotaUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUser`, `nama`, `email`, `usrn`, `jabatUser`, `tglUser`, `lastLogin`, `password`, `telpUser`, `fotoUser`, `addrUser`, `kotaUser`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@superadmin.com', 'superadmin', 'superadmin', NULL, '2022-01-14 09:05:45', '$2y$10$2xc2Cj3yHqaYSfZbF5jGEOBMiCJvrLs10LZE8EtS0PyXU8MkRGgT2', '1111', '', 'addr superadmin', 'kota superadmin', NULL, '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(2, 'jaster', 'jaster@superadmin.com', 'jaster', 'jaster', NULL, '2022-01-16 06:58:41', '$2y$10$B1H0bz/2VAI0YI47hHOnJuK./rCEKEiiwJHBBEhG0zui1gr5AdZv.', '1111', '', 'addr jaster', 'kota jaster', NULL, '2022-01-14 09:05:46', '2022-01-16 06:58:41'),
(3, 'admin', 'admin@admin.com', 'admin', 'admin', NULL, '2022-01-14 09:05:46', '$2y$10$.p.arIgfv7U4WkoxLHf7eOmMFkF1O0l1gu6PzU4oGtj9QLhAtViES', '1111', '', 'addr admin', 'kota admin', NULL, '2022-01-14 09:05:46', '2022-01-14 09:05:46'),
(4, 'team', 'team@team.com', 'team', 'team', NULL, '2022-01-18 01:52:12', '$2y$10$JKt4rXlh90mSjjfgls2MI.nXyLLcCpplpsij6wFXwyPwLEimobAw2', '1111', '', 'addr team', 'kota team', NULL, '2022-01-14 09:05:46', '2022-01-18 01:52:12'),
(5, 'client', 'client@client.com', 'client', 'client', NULL, '2022-01-14 09:05:46', '$2y$10$6.dqrfo3l/0JaBnRvdPk/.dVQ4HcUP46GcRNK/hIEt64zYEZ0.Upe', '1111', '', 'addr client', 'kota client', NULL, '2022-01-14 09:05:46', '2022-01-14 09:05:46'),
(6, 'magang', 'magang@magang.com', 'magang', 'magang', NULL, '2022-01-14 09:05:46', '$2y$10$a193YWSj.vU82rXDr2iyKO/FQ.MgqPoxKuFeuHjfGcpQ94xd1S7VS', '1111', '', 'addr magang', 'kota magang', NULL, '2022-01-14 09:05:46', '2022-01-14 09:05:46'),
(10, 'GustiML', 'gustimardi@gmail.com', 'gustiml', 'Owner', '1999-02-28', '2022-01-17 22:15:32', '$2y$10$hD2VvyQ9543kGTY5ecXmj.o1M8r5bmxwUqr0nsZDW1i6oBshr5Rjm', '82223332840', NULL, 'Jl Kampar no 7B', 'Surabaya', NULL, '2022-01-16 08:36:46', '2022-01-17 22:15:32'),
(11, 'Muhamad Rikza Saputro', 'rikzasaputro1995@gmail.com', NULL, 'Khodimul Ma\'had', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '85641554248', NULL, NULL, NULL, NULL, '2022-01-17 22:30:25', '2022-01-17 22:30:25'),
(13, 'Nopal', 'noval@gmail.com', NULL, 'Programmer', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '8952145612', NULL, NULL, NULL, NULL, '2022-01-18 03:05:36', '2022-01-18 03:05:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`idAbsen`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `aksess`
--
ALTER TABLE `aksess`
  ADD PRIMARY KEY (`idAkses`),
  ADD KEY `aksess_host_id_foreign` (`host_id`);

--
-- Indeks untuk tabel `akunads`
--
ALTER TABLE `akunads`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indeks untuk tabel `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`idBrief`);

--
-- Indeks untuk tabel `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`idComp`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`idHost`);

--
-- Indeks untuk tabel `iklans`
--
ALTER TABLE `iklans`
  ADD PRIMARY KEY (`idAds`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `topups`
--
ALTER TABLE `topups`
  ADD PRIMARY KEY (`idTop`);

--
-- Indeks untuk tabel `trxs`
--
ALTER TABLE `trxs`
  ADD PRIMARY KEY (`idTrx`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absens`
--
ALTER TABLE `absens`
  MODIFY `idAbsen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `aksess`
--
ALTER TABLE `aksess`
  MODIFY `idAkses` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `akunads`
--
ALTER TABLE `akunads`
  MODIFY `idAkun` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `briefs`
--
ALTER TABLE `briefs`
  MODIFY `idBrief` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `companys`
--
ALTER TABLE `companys`
  MODIFY `idComp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hosts`
--
ALTER TABLE `hosts`
  MODIFY `idHost` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `iklans`
--
ALTER TABLE `iklans`
  MODIFY `idAds` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `topups`
--
ALTER TABLE `topups`
  MODIFY `idTop` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `trxs`
--
ALTER TABLE `trxs`
  MODIFY `idTrx` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aksess`
--
ALTER TABLE `aksess`
  ADD CONSTRAINT `aksess_host_id_foreign` FOREIGN KEY (`host_id`) REFERENCES `hosts` (`idHost`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
