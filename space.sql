-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 09:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

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
-- Table structure for table `absens`
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
-- Table structure for table `aksess`
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

--
-- Dumping data for table `aksess`
--

INSERT INTO `aksess` (`idAkses`, `idOrder`, `idBrief`, `host_id`, `domainAkses`, `userAkses`, `passAkses`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 'kangrikza.com', 'admrikza', 'jurnalrikza', '2022-01-19 13:10:49', '2022-01-19 13:10:49'),
(2, 2, 2, 9, 'daihatsumobilku.com', 'admdaihatsu', 'passnya', '2022-01-19 13:56:50', '2022-01-19 13:56:50'),
(3, 3, 3, 9, 'perwiramultijaya.com', 'admperwira', 'passnya', '2022-01-19 14:03:30', '2022-01-19 14:03:31'),
(4, 4, 4, 9, 'hkpi.co.id', 'admhkpi', 'passnya', '2022-01-19 14:08:38', '2022-01-19 14:08:39'),
(5, 5, 5, 9, 'abisatyaabadimining.com', 'admabisatya', 'passnya', '2022-01-19 14:11:56', '2022-01-19 14:11:57'),
(10, 10, 10, 9, 'www.lawangagung.com', 'admlawang', 'kurmasegar', '2022-01-21 09:58:05', '2022-01-21 09:58:05'),
(11, 11, 11, 9, 'smaiannuuru.net', 'admannuuru', 'sekolahislam', '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(12, 12, 12, 9, 'tanest.co.id', 'admtanest', 'sarangburungwalet', '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(13, 13, 13, 9, 'pojokbukunadhira.com', 'admpojok', 'sumberilmu', '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(14, 14, 14, 45, 'Mjkliquor.com', 'admmjkliquor', 'anggurmerah', '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(15, 15, 15, 9, 'vaksinoral-imuniti.com', 'admpravitna', 'imunsehat', '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(16, 16, 16, 1, 'ptmbslogistics.com', 'admmbs', 'jalurlaut', '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(17, 17, 17, 9, 'bushangresindo.com', 'admbushan', 'kompresorangin', '2022-01-27 09:29:30', '2022-01-27 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `akunads`
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
-- Dumping data for table `akunads`
--

INSERT INTO `akunads` (`idAkun`, `namaAkun`, `totalAkun`, `jumlahAds`, `sisaPpn`, `antriTF`, `totalSemua`, `sisaAkun`, `created_at`, `updated_at`) VALUES
(1, 'Akun A', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:03:52', '2021-08-13 17:03:52'),
(2, 'Akun B', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:03:52', '2021-08-13 17:03:52'),
(3, 'JasterAds', NULL, NULL, 0, 0, 0, NULL, '2021-08-13 17:04:25', '2021-08-13 17:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `briefs`
--

CREATE TABLE `briefs` (
  `idBrief` bigint(20) UNSIGNED NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `idComp` int(11) DEFAULT NULL,
  `logoBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paketBrief` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colorBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waBrief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `igBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passGramBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telfBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reqBrief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `targetBrief` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progressBrief` int(11) DEFAULT 0,
  `nilaiBrief` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglProgress` datetime DEFAULT NULL,
  `progressBy` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastStatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateStatus` datetime DEFAULT NULL,
  `updatedBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briefs`
--

INSERT INTO `briefs` (`idBrief`, `idAkses`, `idOrder`, `idComp`, `logoBrief`, `paketBrief`, `colorBrief`, `waBrief`, `emailBrief`, `igBrief`, `passGramBrief`, `fbBrief`, `sosBrief`, `telfBrief`, `mpBrief`, `reqBrief`, `postBrief`, `targetBrief`, `progressBrief`, `nilaiBrief`, `tglProgress`, `progressBy`, `lastStatus`, `dateStatus`, `updatedBy`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, 'Basic', '#4ea03e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'Artikel', 'WA atau Telepon', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-19 13:10:49', '2022-01-19 13:10:50'),
(2, 2, 2, 2, NULL, 'Basic', '#dd3333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Artikel', 'WA atau Telepon', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-19 13:56:50', '2022-01-19 13:56:50'),
(3, 3, 3, 3, NULL, 'Business', '#2d3192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Produk', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Skip, Tidak perlu FU', '2022-01-28 18:40:39', 'GustiML', '2022-01-19 14:03:31', '2022-01-19 14:03:31'),
(4, 4, 4, 4, NULL, 'Basic', '#2a2a2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Artikel', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Packing', '2022-01-28 13:37:10', 'GustiML', '2022-01-19 14:08:38', '2022-01-19 14:08:39'),
(5, 5, 5, 5, NULL, 'Basic', '#2a2a2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'D', 'Artikel', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Send Email, Backup delete', '2022-01-28 00:33:42', 'GustiML', '2022-01-19 14:11:56', '2022-01-19 14:11:57'),
(10, 10, 10, 8, NULL, 'Basic', 'Kuning, Hitam dan Putih', 'Outlet Nyamplungan SBY (089521428242) \r\nOutlet Gayungsari SBY (082139395290) \r\nOutlet Malang (082245247473) \r\nOutlet Sidoarjo (082139091395)', NULL, NULL, NULL, NULL, 'lawangagung_pusatkurma', NULL, NULL, '1', 'Produk', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Siapkan Packing', '2022-01-28 15:24:02', 'GustiML', '2022-01-21 09:58:05', '2022-01-21 09:58:05'),
(11, 11, 11, 9, NULL, 'Basic', 'Hijau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'V', 'Service', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Nunggu Revisi', '2022-01-28 15:33:14', 'GustiML', '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(12, 12, 12, 10, NULL, 'Business', 'Hitam, gold, marun', '081357836640', NULL, NULL, NULL, NULL, NULL, '031 37391999', NULL, 'K', 'Service', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Gusti aja yg Build Home', '2022-01-27 11:10:04', 'GustiML', '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(13, 13, 13, 11, NULL, 'Basic', 'Putih, pink fanta', '081389359113', NULL, NULL, NULL, NULL, NULL, 'pojokbukunadhira', NULL, NULL, 'Produk', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Mba fina cari logo penerbitnya cek grup', '2022-01-29 05:31:40', 'GustiML', '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(14, 14, 14, 12, NULL, 'Premium', 'Hitam', '085864592599', NULL, 'Mjkliquor', NULL, 'https://www.facebook.com/jackmjkadmin', 'Instagram : mjkofficial2021', '082239168093', NULL, 'R', 'Produk', 'Checkout', 0, NULL, NULL, NULL, 'Upload Produknya', '2022-01-29 05:43:04', 'GustiML', '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(15, 15, 15, 13, NULL, 'Luxury', 'Hijau Utamanya', '+995 571 78 55 32(Owner Ukraina), +62 812 89536633(Staff Lab Indonesia)', NULL, '-', NULL, '-', '-', '+380 (97) 415 52 28(Nomor Ukraina)\r\n+62 812 89536633(Staff L', '-', 'Website bisa call nomor kantor, bisa email kantor, bisa chat whatsapp. Bentuk website elegant dan bisa dipercaya customer(tidak abal-abal)', 'Produk', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Terapkan Konsepnya', '2022-01-28 18:42:39', 'GustiML', '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(16, 16, 16, 14, NULL, 'Luxury', 'Army - White', '081252856700', NULL, '@mbslogistics', NULL, NULL, NULL, '081252856700', NULL, 'N', 'Artikel', 'WA atau Telepon', 0, NULL, NULL, NULL, 'Buat Compro PDF dulu (Rafi) Nunggu info aku', '2022-01-28 06:23:03', 'GustiML', '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(17, 17, 17, 15, NULL, 'Luxury', 'Biru merah', '082133027879', NULL, NULL, NULL, NULL, NULL, '031-7914164', NULL, NULL, 'Service', 'WA atau Telepon', 45, 'abcdefg', '2022-02-03 15:42:02', 'GustiML', 'Belikan Domain', '2022-01-28 02:21:14', 'GustiML', '2022-01-27 09:29:30', '2022-01-27 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `idComp` bigint(20) UNSIGNED NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idBrief` int(11) DEFAULT NULL,
  `brandComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kotaComp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addrComp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companys`
--

INSERT INTO `companys` (`idComp`, `idUser`, `idBrief`, `brandComp`, `namaComp`, `kotaComp`, `addrComp`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'KangRikza', 'KangRikza', NULL, 'Ponpes Askhabul Kahfi\r\nJl. Raya Cangkiran-Gunungpati Km.3 Polaman Kec. Mijen Kota Semarang - Jawa Tengah, 50217', '2022-01-19 13:10:49', '2022-01-19 13:10:49'),
(2, 10, 2, 'DaihatsuMobilku', 'PT Astra internasional .tbk', NULL, 'Jl. Jayanegara No.30D, Gatul, Banjaragung,\r\nKec. Puri, Kabupaten Mojokerto, Jawa Timur 61363', '2022-01-19 13:56:49', '2022-01-19 13:56:50'),
(3, 11, 3, 'Perwira Multi', 'PT. Perwiramulti Jaya Kencana', 'Surabaya', 'Jl. Simpang Darmo Permai Selatan IV no. 84, Surabaya - Jawa Timur 60226', '2022-01-19 14:03:30', '2022-01-19 14:03:31'),
(4, 12, 4, 'HKPI', 'Himpunan Kuliner & Pariwisata Indonesia', 'Surabaya', 'JI. Joyoboyo No. 10, Sawunggaling, Kec. Wonokromo Kota Surabaya, Jawa Timur 60243', '2022-01-19 14:08:38', '2022-01-19 14:08:39'),
(5, 13, 5, 'Abisatya Abadi', 'PT Abisatya Abadi Mining', 'Pontianak', 'Jl. PH Husin 2 Komplek Imigrasi no. 15/16 Pontianak, Kalimantan Barat. 78111', '2022-01-19 14:11:56', '2022-01-19 14:11:56'),
(8, 14, 10, 'Lawang Agung', 'Lawang Agung Pusat Kurma', 'Surabaya', 'Danakarya No.37-39, Ampel, Kec. Semampir, Surabaya 60151', '2022-01-21 09:58:05', '2022-01-21 09:58:05'),
(9, 15, 11, 'An-Nuuru', 'SMAS Islam An-Nuuru Tirtoyudo', 'Malang', 'Jl. Pesantren no 21 Tirtoyudo kec. Tirtoyudo kab. Malang, 65182', '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(10, 16, 12, 'Tanest', 'PT Tanest Bird Nest', 'Surabaya', 'Jl. Kedung Cowek No. 129, Surabaya 60134', '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(11, 17, 13, 'Pojok Buku Nadhira', 'Pojok Buku Nadhira', 'Tuban', 'Perumahan Mondokan Santoso Jalan Bali Blok FF 20, Tuban;62315', '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(12, 18, 14, 'Mjkliquor', 'Mjkliquor', 'Majalengka', 'Jl. Jatitujuh, Majalengka 45458', '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(13, 19, 15, 'Vaksinoral', 'PT Pravitna Nano Teknologi', 'Bekasi', 'Indonesia  : Gedung D Perkasa Kawasan Industri INKOPAU - SATRUDAl P 87 Pondok Gede Jakarta. Alamat Ukraina : Volodymirskyai 82 A Kyiv  Ukraine 01033 Europe, Bekasi 17411', '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(14, 20, 16, 'MBS Logistik', 'PT. Maju Bersama Selamanya Logistics', 'Surabaya', 'Jl Darmohill Pakis Bukit Cempaka No R50. Surabaya - Jawa Timur, 60255', '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(15, 21, 17, 'Bushan Gresindo', 'PT Bushan Gresindo Sejahtera', 'Gresik', 'Jl Raya Menganti Laban Wetan No 11 Gang Sumber No 11, Gresik, Jawa Timur 61174', '2022-01-27 09:29:30', '2022-01-27 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noOrder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `noOrder`, `email`, `gd`, `created_at`, `updated_at`) VALUES
(1, 'JW434', 'yusuf.purnamalab@gmail.com', 'https://drive.google.com/drive/folders/1_Nzz2OhXUArsi-8JMRCwCyyG2Qk4weLz?usp=sharing', '2022-01-27 02:49:59', '2022-01-27 02:49:59'),
(2, 'JW459', 'meivenvanessa@gmail.com', 'https://drive.google.com/drive/folders/1RZ5qfzo1V70YGAZ6eR8KkMpv9k1Gvr2J?usp=sharing', '2022-01-28 02:01:18', '2022-01-28 02:01:18'),
(3, 'JW458', 'hkpi.info@gmail.com', 'https://drive.google.com/drive/folders/1aOuRxmjTog5W6TkWIxdRgGObyuwTgHZL?usp=sharing', '2022-01-29 03:42:29', '2022-01-29 03:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hosts`
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
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`idHost`, `domHost`, `userHost`, `passHost`, `created_at`, `updated_at`) VALUES
(1, 'kelolasosialmedia.com', 'u3759828', '266bxyjwQJ', '2022-01-01 00:24:35', '2022-01-21 00:30:48'),
(2, 'jasaolshop.com', 'jaster', 'odSuyumwBj', '2022-01-02 00:24:48', '2022-01-21 00:23:17'),
(3, 'jastergram.com', 'u6122678', 'gpEmubcaAW', '2022-01-03 00:25:06', '2022-01-21 00:23:43'),
(4, 'jastercomp.com', 'u4482717', 'FlHja4NOAp', '2022-01-04 09:13:06', '2022-01-21 00:24:35'),
(5, 'jasterpro.com', 'u6984906', '0dc1aCZ7ei', '2022-01-05 09:13:06', '2022-01-21 00:24:48'),
(6, 'jasterads.com', 'u5234554', '8PUve6MZCI', '2022-01-06 09:13:06', '2022-01-21 00:25:06'),
(7, 'jasawebsidoarjo.com', 'u6728999', 'uHfyQ88r2m', '2022-01-07 00:23:43', '2022-01-14 09:13:06'),
(8, 'website1juta.com', 'u7143870', '2RgMtZJa', '2022-01-08 00:24:48', '2022-01-14 09:13:06'),
(9, 'sukafotoproduk.com', 'sukafoto', '1f5JvzXI', '2022-01-09 00:24:35', '2022-01-14 09:13:06'),
(45, 'Hosting Luar', NULL, NULL, '2022-01-22 02:02:13', '2022-01-22 02:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `iklans`
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
-- Dumping data for table `iklans`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 9),
(4, 'App\\Models\\User', 10),
(4, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 14),
(4, 'App\\Models\\User', 15),
(4, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 17),
(4, 'App\\Models\\User', 18),
(4, 'App\\Models\\User', 19),
(4, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `isiPesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `pengirim`, `penerima`, `isiPesan`, `created_at`, `updated_at`) VALUES
(1, '1', '2', 'Tes, anda pea', '2022-02-03 06:53:06', '2022-02-03 06:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
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
  `statusOrder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idOrder`, `nomerOrder`, `idBrief`, `idAkses`, `idUser`, `idComp`, `dpTrx`, `renew`, `pmOrder`, `tglOrder`, `deadlineOrder`, `fromTrx`, `jenisOrder`, `totalOrder`, `statusOrder`, `created_at`, `updated_at`) VALUES
(1, 'JW455', 1, 1, 9, 1, 1000000, 1100000, 'bni', '2022-01-13', '2022-01-20', 'Instagram', 'Website', '1450000', '2', '2022-01-19 13:10:49', '2022-01-19 13:10:49'),
(2, 'JW456', 2, 2, 10, 2, 850000, 700000, 'bca', '2022-01-14', '2022-01-21', 'Instagram', 'Website', '1530000', '2', '2022-01-19 13:56:50', '2022-01-19 13:56:50'),
(3, 'JW457', 3, 3, 11, 3, 2550000, 1650000, 'bca', '2022-01-17', '2022-01-24', 'Teman ??', 'Website', '4550000', '1', '2022-01-19 14:03:31', '2022-01-19 14:03:31'),
(4, 'JW458', 4, 4, 12, 4, 1700000, 950000, 'bca', '2022-01-17', '2022-01-24', 'Teman - Luqman SHS', 'Website', '1670000', '2', '2022-01-19 14:08:39', '2022-01-19 14:08:39'),
(5, 'JW459', 5, 5, 13, 5, 1700000, 700000, 'bca', '2022-01-18', '2022-01-25', 'Instagram', 'Website', '1530000', '2', '2022-01-19 14:11:57', '2022-01-19 14:11:57'),
(10, 'JW460', 10, 10, 14, 8, 775000, 600000, 'bca', '2022-01-21', '2022-02-04', 'instagram', 'Website', '1550000', '1', '2022-01-21 09:58:05', '2022-01-21 09:58:05'),
(11, 'JW461', 11, 11, 15, 9, 800000, 700000, 'bca', '2022-01-21', '2022-02-04', 'website', 'Website', '1530000', '1', '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(12, 'JW462', 12, 12, 16, 10, 2325000, 1250000, 'bca', '2022-01-21', '2022-02-04', 'google', 'Website', '4650000', '1', '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(13, 'JW463', 13, 13, 17, 11, 850000, 700000, 'bca', '2022-01-21', '2022-02-04', 'instagram', 'Website', '1700000', '1', '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(14, 'JW464', 14, 14, 18, 12, 2000000, 1500000, 'bca', '2022-01-22', '2022-02-05', 'instagram', 'Website', NULL, '1', '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(15, 'JW465', 15, 15, 19, 13, 3, 2, 'bca', '2022-01-25', '2022-02-08', 'instagram', 'Website', '5830000', '1', '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(16, 'JW466', 16, 16, 20, 14, 3100000, 1500000, 'bca', '2022-01-26', '2022-02-02', 'teman', 'Website', '6030000', '1', '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(17, 'JW467', 17, 17, 21, 15, 2875000, 1500000, 'bca', '2022-01-27', '2022-02-10', 'google', 'Website', '5530000', '1', '2022-01-27 09:29:30', '2022-01-27 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(2, '2', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(3, '3', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(4, '4', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45'),
(5, '5', 'web', '2022-01-14 09:05:45', '2022-01-14 09:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topups`
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
-- Dumping data for table `topups`
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
(79, 35, '1500000', '2022-01-07', 'ya', '2022-01-07 08:09:09', '2022-01-07 15:41:38'),
(80, 28, '3000000', '2022-01-13', 'ya', '2022-01-19 17:20:47', '2022-01-12 17:24:03'),
(81, 43, '800000', '2022-01-18', 'ya', '2022-01-19 17:22:23', '2022-01-19 17:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `trxs`
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

--
-- Dumping data for table `trxs`
--

INSERT INTO `trxs` (`idTrx`, `idOrder`, `paketTrx`, `qtyTrx`, `hargaTrx`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Company Profile', 1, 2000000, '2022-01-19 13:10:50', '2022-01-19 13:10:50'),
(2, 1, 'Beli Hosting', 1, -550000, '2022-01-19 13:10:50', '2022-01-19 13:10:50'),
(3, 2, 'Web Sales', 1, 1700000, '2022-01-19 13:56:50', '2022-01-19 13:56:50'),
(4, 2, 'Beli Domain', 1, -170000, '2022-01-19 13:56:50', '2022-01-19 13:56:50'),
(5, 3, 'Web Toko Online', 1, 5100000, '2022-01-19 14:03:31', '2022-01-19 14:03:31'),
(6, 3, 'Beli Hosting', 1, -550000, '2022-01-19 14:03:31', '2022-01-19 14:03:31'),
(7, 4, 'Web Company Profile', 1, 1970000, '2022-01-19 14:08:39', '2022-01-19 14:08:39'),
(8, 4, 'Beli Domain', 1, -300000, '2022-01-19 14:08:39', '2022-01-19 14:08:39'),
(9, 5, 'Web Company Profile', 1, 1700000, '2022-01-19 14:11:57', '2022-01-19 14:11:57'),
(10, 5, 'Beli Domain', 1, -170000, '2022-01-19 14:11:57', '2022-01-19 14:11:57'),
(19, 10, 'Beli Hosting', 1, 1550000, '2022-01-21 09:58:06', '2022-01-21 09:58:06'),
(20, 11, 'Web Dinas / Instansi', 1, 1700000, '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(21, 11, 'Beli Domain', 1, -170000, '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(22, 12, 'Web Company Profile', 1, 4650000, '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(23, 13, 'Web Toko Online', 1, 1700000, '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(24, 14, 'Web Toko Online', 1, 4000000, '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(25, 15, 'Web Toko Online', 1, 6000000, '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(26, 16, 'Web Company Profile', 1, 6200000, '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(27, 16, 'Beli Domain', 1, -170000, '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(28, 14, 'Beli Hosting', 1, -550000, '2022-01-26 18:51:02', '2022-01-26 18:51:02'),
(29, 15, 'Beli Domain', 1, -170000, '2022-01-26 18:52:13', '2022-01-26 18:52:13'),
(30, 17, 'Web Company Profile', 1, 5700000, '2022-01-27 09:29:30', '2022-01-27 09:29:30'),
(31, 17, 'Beli Domain', 1, -170000, '2022-01-27 17:16:20', '2022-01-27 17:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `fotoUser` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT 'placeholder.jpg',
  `addrUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kotaUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `nama`, `email`, `usrn`, `jabatUser`, `tglUser`, `lastLogin`, `password`, `telpUser`, `fotoUser`, `addrUser`, `kotaUser`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'GustiML', 'cs@jaster.co.id', 'gustiml', 'Superman', '2022-01-19', '2022-02-03 05:29:13', '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '89601965565', '/tmp/phpvodgeK', 'Jl Kampar no 7B', 'Surabaya', NULL, '2022-01-19 12:18:26', '2022-02-03 05:29:13'),
(2, 'AjengDwi', 'ajengd543@gmail.com', 'ajeng', NULL, NULL, '2022-01-24 02:12:13', '$2y$10$NUSsXx4.vXF7NjdzXiC3feplilUj3ElOkRv2ZxCK8nnHWujkN0FLu', NULL, NULL, NULL, 'Surabaya', NULL, '2022-01-19 12:40:06', '2022-01-24 02:12:13'),
(3, 'Finaillis', 'sfinailis@gmail.com', 'fina', NULL, NULL, '2022-01-29 01:45:09', '$2y$10$Unr1f1sX1mQsrCUME7G7W.Sxr7xhNY93dFvtCFJC0khg9mjgw/6sO', NULL, NULL, NULL, 'Mojokerto', NULL, '2022-01-19 12:40:24', '2022-01-29 01:45:09'),
(4, 'Yunda', 'dewinurayundari.dnaaa@gmail.com', 'yunda', NULL, NULL, '2022-02-03 01:40:53', '$2y$10$J9vHiTT.rPOX.UZsNMl4X.lIfZplS/LNfHjFGu.6E/hZgBlN/.jm2', NULL, NULL, NULL, 'Pasuruan', NULL, '2022-01-19 12:40:45', '2022-02-03 01:40:53'),
(5, 'Dinda Aditama', 'dinda.aditamaa@gmail.com', 'dinda', NULL, NULL, '2022-01-28 08:08:25', '$2y$10$SwlSXmYZ5B0VU82IwxSFfO5MbLY6mlHh.4D8tDHLuV254/Xk9SUB6', NULL, '3132_png-transparent-sparkling-emoji-iph', NULL, 'Surabaya', NULL, '2022-01-19 12:41:16', '2022-01-28 08:08:25'),
(6, 'Gilang Valdi', 'gilangvaldip@gmail.com', 'gilang', NULL, NULL, '2022-01-29 01:49:30', '$2y$10$5Sx0mDx1oTFErgXJzRcRtundQoKknPDRsJA6fKgB2GFx0Rj3fsRx2', '81239345293', '/tmp/php591e64', NULL, 'Sidoarjo', NULL, '2022-01-19 12:43:19', '2022-01-29 01:49:30'),
(7, 'Rafi Arrazak', 'rafirazah@gmail.com', 'Rafi', NULL, NULL, '2022-01-29 03:07:29', '$2y$10$fNabXA9CeQSRwPZoazG6y.MUx3Fe7U5PZ7FGt3al8EnUhpdSGP60y', NULL, NULL, NULL, 'Jombang', NULL, '2022-01-19 12:43:55', '2022-01-29 03:07:29'),
(8, 'Naufal', 'nopalmdev@gmail.com', 'naufal', 'check', '1999-03-11', '2022-01-29 01:43:54', '$2y$10$P6S0nmKHH8.TeLQE1.tIEO4IoMIDPtNfk3X1MtldUFaD1OIZpKW5O', '8817967926', '2309_Profile-Avatar-PNG.png', 'Jl. Mutiara 6.3 No.12 KBD', 'Gresik', NULL, '2022-01-19 12:44:22', '2022-01-29 01:43:54'),
(9, 'Muhamad Rikza Saputro', 'rikzasaputro1995@gmail.com', NULL, 'Khodimul Ma\'had', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '85641554248', NULL, NULL, NULL, NULL, '2022-01-19 13:10:49', '2022-01-19 13:10:49'),
(10, 'Yoyok widodo', 'widodoyoyok98@gmail.com', NULL, 'Sales Executive', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '81232811040', NULL, NULL, NULL, NULL, '2022-01-19 13:56:49', '2022-01-19 13:56:49'),
(11, 'Citra', 'perwira_kencana51a@yahoo.com', NULL, 'Staff', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '81259008542', NULL, NULL, NULL, NULL, '2022-01-19 14:03:30', '2022-01-19 14:03:30'),
(12, 'Deasy Feronica', 'hkpi.info@gmail.com', NULL, 'Sekretaris', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '81906077880', NULL, NULL, NULL, NULL, '2022-01-19 14:08:38', '2022-01-19 14:08:38'),
(13, 'Meiven', 'meivenvanessa@gmail.com', NULL, 'Komisaris', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '811568997', NULL, NULL, NULL, NULL, '2022-01-19 14:11:56', '2022-01-19 14:11:56'),
(14, 'Abdurrohim Nur', 'lawangagung.officer@gmail.com', NULL, 'Manajer Marketing', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '895352215883', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-21 09:58:05', '2022-01-21 09:58:05'),
(15, 'Joko Triono', 'smaiannuuru@gmail.com', NULL, 'Wakil KS', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '081252707579', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-24 02:54:37', '2022-01-24 02:54:37'),
(16, 'Michael', 'charlie.tanuwijayaa@gmail.com', NULL, 'Direktur', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '081357836640', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-25 06:52:09', '2022-01-25 06:52:09'),
(17, 'Nindy', 'anindyacipta2002@gmail.com', NULL, 'Owner', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '081389359113', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-25 06:54:31', '2022-01-25 06:54:31'),
(18, 'Angga', 'pratamaangga580@gmail.com', NULL, 'owner', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '085864592599', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-25 06:57:08', '2022-01-25 06:57:08'),
(19, 'Brilliant Kevin', 'imunitytechnology@gmail.com', NULL, 'Project Manager', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '081211708815', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-26 03:22:38', '2022-01-26 03:22:38'),
(20, 'Jimmy', 'mbsgroup@mbslogs.com', NULL, 'CEO', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '81252856700', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-26 17:50:33', '2022-01-26 17:50:33'),
(21, 'Dani', 'mkt.bushan.gresindo@gmail.com', NULL, 'Marketing', NULL, NULL, '$2y$10$KnrGw3LGvU5nRsaXPkyDy.0WvnEy3FbCi7q5kab9IwgTQPg9i5Zmi', '082133027879', 'placeholder.jpg', NULL, NULL, NULL, '2022-01-27 09:29:30', '2022-01-27 09:29:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`idAbsen`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `aksess`
--
ALTER TABLE `aksess`
  ADD PRIMARY KEY (`idAkses`),
  ADD KEY `aksess_host_id_foreign` (`host_id`);

--
-- Indexes for table `akunads`
--
ALTER TABLE `akunads`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`idBrief`);

--
-- Indexes for table `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`idComp`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`idHost`);

--
-- Indexes for table `iklans`
--
ALTER TABLE `iklans`
  ADD PRIMARY KEY (`idAds`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `topups`
--
ALTER TABLE `topups`
  ADD PRIMARY KEY (`idTop`);

--
-- Indexes for table `trxs`
--
ALTER TABLE `trxs`
  ADD PRIMARY KEY (`idTrx`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `users_usrn_unique` (`usrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `idAbsen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `aksess`
--
ALTER TABLE `aksess`
  MODIFY `idAkses` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `akunads`
--
ALTER TABLE `akunads`
  MODIFY `idAkun` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `idBrief` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `companys`
--
ALTER TABLE `companys`
  MODIFY `idComp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `idHost` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `iklans`
--
ALTER TABLE `iklans`
  MODIFY `idAds` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `topups`
--
ALTER TABLE `topups`
  MODIFY `idTop` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `trxs`
--
ALTER TABLE `trxs`
  MODIFY `idTrx` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aksess`
--
ALTER TABLE `aksess`
  ADD CONSTRAINT `aksess_host_id_foreign` FOREIGN KEY (`host_id`) REFERENCES `hosts` (`idHost`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
