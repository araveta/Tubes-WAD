-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 07:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_wad`
--

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_order` int(5) NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `nama_foto`, `id_order`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Foto Pantai', 2, '1641846886.sinovac.jpg', '2022-01-10 13:34:46', '2022-01-10 13:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `grapher_profiles`
--

CREATE TABLE `grapher_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tmpt_lahir` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp` int(11) NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_layanan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` int(11) NOT NULL,
  `deskripsi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama_layanan`, `tarif`, `deskripsi`, `cover`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Photographer', 100000, 'sesf', '1641885120.galerix.jpg', 'Aktif', '2021-12-31 20:23:50', '2022-01-11 00:12:00'),
(2, 'VideoGrapher', 200000, 'Membuat video grafi', '1641885135.sinovac.jpg', 'Non Aktif', '2022-01-06 05:00:14', '2022-01-11 00:12:15'),
(3, 'Edit Photo', 150000, 'Ini adalah layanan edit photo', '1641476821.galerix.jpg', 'Aktif', '2022-01-06 06:47:01', '2022-01-06 06:47:01'),
(4, 'Edit Video', 150000, 'Ini adalah layanan edit video terbaik di Indonesia', '1641486625.astrazeneca2.jpg', 'Aktif', '2022-01-06 09:30:25', '2022-01-06 09:30:25'),
(5, 'Jual Telor', 100000, 'Jual Telor Ayam', '1641542996.astrazeneca2.jpg', 'Aktif', '2022-01-07 01:09:56', '2022-01-07 01:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_orders`
--

CREATE TABLE `member_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tmpt` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(92, '2014_10_12_000000_create_users_table', 1),
(93, '2014_10_12_100000_create_password_resets_table', 1),
(94, '2019_08_19_000000_create_failed_jobs_table', 1),
(95, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(96, '2021_12_23_103058_create_photographers_table', 1),
(97, '2021_12_23_104842_create_members_table', 1),
(98, '2021_12_24_120111_create_orders_table', 1),
(99, '2021_12_24_123922_create_layanans_table', 1),
(100, '2021_12_30_043640_create_galleries_table', 1),
(101, '2021_12_30_074828_create_member_orders_table', 1),
(102, '2022_01_01_022722_create_profiles_table', 2),
(103, '2022_01_02_091722_create_grapher_profiles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_grapher` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `tgl_kerja` date NOT NULL,
  `waktu_kerja` time NOT NULL,
  `lokasi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_order` int(11) NOT NULL,
  `tarif_grapher` int(11) NOT NULL,
  `laba` int(11) NOT NULL,
  `status_order` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `id_user`, `id_grapher`, `id_layanan`, `tgl_kerja`, `waktu_kerja`, `lokasi`, `harga_order`, `tarif_grapher`, `laba`, `status_order`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'XW5RT', 2, 3, 1, '2022-01-11', '23:30:00', 'palembang', 100000, 90000, 10000, '1', 'ptc', '2022-01-02 05:27:15', '2022-01-06 03:40:34'),
(3, '3XICP', 2, 3, 1, '2022-01-20', '20:24:00', 'Bandar Lampung', 100000, 90000, 10000, '1', 'tes', '2022-01-06 02:21:06', '2022-01-06 07:04:12'),
(4, 'GJLXH', 2, 3, 1, '2022-02-02', '19:23:00', 'Bandung', 100000, 90000, 10000, '1', 'tes', '2022-01-06 02:21:45', '2022-01-10 13:13:10'),
(5, 'VMSPA', 2, 3, 1, '2022-01-14', '20:30:00', 'Jakarta', 100000, 90000, 10000, '1', 'tes', '2022-01-06 02:26:38', '2022-01-10 13:33:02'),
(6, 'J4BH8', 2, 0, 1, '2022-01-20', '20:31:00', 'Jakarta', 100000, 90000, 10000, '0', 'tes', '2022-01-06 02:27:24', '2022-01-06 02:27:24'),
(7, 'VGLLY', 2, 0, 1, '2022-01-13', '19:37:00', 'Solo', 100000, 90000, 10000, '0', 'tes', '2022-01-06 02:35:38', '2022-01-06 02:35:38'),
(8, 'OZVWG', 2, 8, 1, '2022-01-04', '19:05:00', 'Malang', 100000, 90000, 10000, '1', 'tes', '2022-01-06 03:04:07', '2022-01-06 04:14:39'),
(9, 'PM00O', 2, 7, 1, '2022-01-06', '18:07:00', 'Malang', 100000, 90000, 10000, '1', 'tes', '2022-01-06 03:06:11', '2022-01-06 04:09:26'),
(10, 'RDYQG', 2, 3, 2, '2022-01-14', '21:13:00', 'Solo', 200000, 180000, 20000, '1', 'Tes', '2022-01-06 05:11:34', '2022-01-06 05:12:51'),
(11, 'S0FBP', 2, 3, 1, '2022-01-07', '21:54:00', 'Malang', 100000, 90000, 10000, '1', 'Jl.Bromo', '2022-01-06 06:54:03', '2022-01-06 07:07:08'),
(12, 'G7VPK', 2, 0, 1, '2022-01-06', '01:40:00', 'Malang', 100000, 90000, 10000, '0', 'Jl. Bromo', '2022-01-06 09:39:04', '2022-01-06 09:39:04'),
(13, '69QDA', 2, 3, 4, '2022-01-07', '01:47:00', 'Bandung', 150000, 135000, 15000, '1', 'Telkom', '2022-01-06 09:45:48', '2022-01-06 09:48:17'),
(14, '9KJXX', 9, 0, 4, '2022-01-21', '16:01:00', 'Bandar Lampung', 150000, 135000, 15000, '0', 'Tes', '2022-01-06 23:59:04', '2022-01-06 23:59:04'),
(15, 'VRAS7', 2, 0, 4, '2022-01-21', '18:32:00', 'Malang', 150000, 135000, 15000, '0', 'Photo', '2022-01-07 00:27:23', '2022-01-07 00:27:23'),
(17, 'UNA7W', 2, 0, 5, '2022-01-07', '15:11:00', 'Bandar Lampung', 100000, 90000, 10000, '0', 'Beli telor', '2022-01-07 01:11:08', '2022-01-07 01:11:08'),
(18, 'KZJ1W', 2, 0, 1, '2022-01-14', '19:59:00', 'Bandung', 100000, 90000, 10000, '0', 'Tes', '2022-01-07 04:58:25', '2022-01-07 04:58:25'),
(20, 'CYU0K', 2, 0, 1, '2022-01-12', '19:33:00', 'as', 100000, 90000, 10000, '0', 'as', '2022-01-07 05:31:11', '2022-01-07 05:31:11'),
(21, '2IPO1', 2, 0, 5, '2021-12-29', '19:35:00', 'as', 100000, 90000, 10000, '0', 'as', '2022-01-07 05:33:39', '2022-01-07 05:33:39'),
(22, 'MVWYP', 2, 0, 5, '2022-01-19', '02:23:00', 'tes', 100000, 90000, 10000, '0', 'tes', '2022-01-07 07:18:39', '2022-01-07 07:18:39'),
(24, 'HUWGY', 2, 0, 1, '2022-01-05', '00:01:00', '5 diamond', 100000, 90000, 10000, '0', 'sadf', '2022-01-08 10:59:46', '2022-01-08 10:59:46'),
(25, 'MBVJS', 2, 3, 3, '2022-01-07', '16:30:00', 'lknl', 150000, 135000, 15000, '1', 'lm', '2022-01-10 02:30:05', '2022-01-10 02:32:51');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pg` int(11) NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tmpt_lahir` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp` int(11) NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `tmpt_lahir`, `tgl_lahir`, `tlp`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Palembang', '2022-01-20', 292121331, 'aaefjnawef', '1641113825.sinovac.jpg', '2021-12-31 20:14:10', '2022-01-02 01:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `status`, `password`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `foto`, `deskripsi`, `tlp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', NULL, 1, '0', '$2y$10$eH5SCPp2.TIHpFFsfM431OH1HmUoAJw1T2HJvB4OAc0ORUgtNvgR.', '', NULL, '', '', '', '', NULL, '2021-12-31 15:23:05', '2021-12-31 15:23:05'),
(2, 'Joko', 'user@mail.com', NULL, 0, '0', '$2y$10$3RfDb0VB/0RDzB/qiHIj3eWUOLsDepiMLB11AsE9S2RjMjsdRzepe', 'Malang', '2022-01-13', 'Tanah Sereal, Bogor', '1641487432.galerix.jpg', '', '0812345678', NULL, '2021-12-31 15:23:05', '2022-01-06 09:43:52'),
(3, 'Aji', 'grapher@mail.com', NULL, 2, '0', '$2y$10$kM82Brirg.3eT3ZvYOuc7OT9hr8mqLorzbqtsQBemqxMphx6U/XRW', 'Bali', '2022-01-21', 'Malang', '1641487741.sinovac.jpg', '', '0812345678', NULL, '2021-12-31 15:23:05', '2022-01-06 09:49:01'),
(4, 'Dhafin', 'dhafinfaza@gmail.com', NULL, 2, '0', '$2y$10$VT1sXPmH7BlhmXQXvAnZz.lGMMozkI5ynK7CoPOefO9mM8RB4eoum', '', NULL, '', '', '', '', NULL, '2021-12-31 15:23:13', '2021-12-31 15:23:13'),
(5, 'dhafin', 'dhafin1@gmail.com', NULL, 2, '0', '$2y$10$ApvEo1f5CQPnutcwfSa/hOF7OKG8cHXVyFpgEZ5LXmnKC/JxqK46C', '', NULL, '', '', '', '', NULL, '2021-12-31 15:32:30', '2021-12-31 15:32:30'),
(6, 'dhafin', '1@gmail.com', NULL, 0, '0', '$2y$10$Vmz8ep3LWo8yHHNrvfWGWuHjLV4X.gi92GUgMzPgJPoKqcnBvt2.O', '', NULL, '', '', '', '', NULL, '2021-12-31 15:40:26', '2021-12-31 15:40:26'),
(7, 'Dhafin', '0@gmail.com', NULL, 2, '1', '$2y$10$ZeD1XSotP4oxYPuaSR1dIu2xSCS2lvAimIo38tYWsCaII98aWmWPS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-06 04:09:16', '2022-01-06 04:09:16'),
(8, 'Aji', 'aji@gmail.com', NULL, 2, NULL, '$2y$10$fF.lEvjLo7lSx2HiUEmSZOkMZV/Fk9RqBqQteHo6PJToA6IUsI75a', 'Solo', '2022-01-06', 'Malang', '1641467579.galerix.jpg', NULL, '0812345678', NULL, '2022-01-06 04:12:05', '2022-01-06 04:12:59'),
(9, 'Joki', 'joki@gmail.com', NULL, 0, NULL, '$2y$10$tG7hjshsePQeOODfrhYQ3uwKEKrTG1KZNJtCjuRXGlglq8AK.X6y6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-06 23:58:19', '2022-01-06 23:58:19'),
(10, 'Didi', 'didi@gmail.com', NULL, 2, NULL, '$2y$10$byH0yuOpmren/fa3cXkSiupJZt5F3Y/QPm25dOtw/gB0.XyC3ijAi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 00:01:12', '2022-01-07 00:01:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grapher_profiles`
--
ALTER TABLE `grapher_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_orders`
--
ALTER TABLE `member_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grapher_profiles`
--
ALTER TABLE `grapher_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_orders`
--
ALTER TABLE `member_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
