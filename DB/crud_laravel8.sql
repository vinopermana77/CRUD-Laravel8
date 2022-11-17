-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 09:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` bigint(20) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_religions` int(11) DEFAULT NULL,
  `tgllahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nama`, `jk`, `telp`, `foto`, `created_at`, `updated_at`, `id_religions`, `tgllahir`) VALUES
(1, 'Alvino Permana', 'Pria', 81212121212, '1.jpg', '2022-11-15 00:36:39', '2022-11-17 00:57:04', 1, '2001-06-04 00:00:00'),
(2, 'Safitri', 'Wanita', 81219191919, '2022_08_13_17_15_IMG_2416.JPG', '2022-11-15 00:37:23', '2022-11-17 00:50:09', 1, '2003-11-30 00:00:00'),
(16, 'John Doe', 'Pria', 8276534532, 'KILLERCAM_20210306_161034_1 - Copy.jpg', '2022-11-15 01:59:51', '2022-11-17 00:58:02', 1, '1996-01-30 00:00:00'),
(17, 'Jane Doe', 'Wanita', 8212701921, '278182159_486308693216038_2016986024018539269_n.jpg', '2022-11-15 02:00:26', '2022-11-17 00:58:26', 2, '1999-10-12 00:00:00'),
(18, 'Brian', 'Pria', 34324324324, 'KILLERCAM_20210306_161034_1.jpg', '2022-11-15 02:01:05', '2022-11-17 00:50:56', 3, '2004-02-11 00:00:00'),
(19, 'Clara Chow', 'Pria', 81211821012, 'wallpaper notes.jpg', '2022-11-15 02:01:31', '2022-11-17 00:56:48', 2, '2005-02-09 00:00:00'),
(20, 'Milos', 'Pria', 4343432434, 'Milos.jpg', '2022-11-15 02:01:50', '2022-11-17 00:51:29', 2, '1990-11-06 00:00:00'),
(21, 'Jono', 'Pria', 43234234324, 'Alvino.jpg', '2022-11-15 02:30:03', '2022-11-17 00:51:56', 2, '2000-10-15 00:00:00'),
(22, 'Breach', 'Pria', 534253245453, 'Alvino.jpg', '2022-11-15 02:30:43', '2022-11-17 00:52:12', 1, '1998-06-10 00:00:00'),
(24, 'Kratos', 'Pria', 86544356343, 'KILLERCAM_20210501_190645 (2).jpg', '2022-11-15 21:40:16', '2022-11-17 00:58:48', 1, '1995-07-03 00:00:00'),
(25, 'Saghagha', 'Wanita', 891891, 'IMG_20210827_094549.jpg', '2022-11-15 23:36:56', '2022-11-17 00:52:45', 1, '1994-12-06 00:00:00'),
(26, 'Jono', 'Pria', 82733667431, 'KILLERCAM_20210306_161034_1 - Copy.jpg', '2022-11-16 21:25:45', '2022-11-17 00:51:43', 1, '2000-07-29 00:00:00'),
(29, 'Dennis', 'Pria', 82736226376, 'KILLERCAM_20210501_190645 (2).jpg', '2022-11-16 23:59:32', '2022-11-16 23:59:32', 1, '2006-10-26 00:00:00');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_15_032753_create_employees_table', 1),
(6, '2022_11_17_044852_create_religions_table', 2),
(7, '2022_11_17_045833_add_idagama_and_tgllahir_to_employees_table', 3),
(8, '2022_11_17_072045_add_role_to_users_table', 4);

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
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2022-11-16 22:31:34', '2022-11-16 22:31:34'),
(2, 'Kristen', '2022-11-16 22:34:49', '2022-11-16 22:34:49'),
(3, 'Katolik', '2022-11-16 22:36:40', '2022-11-16 22:36:40'),
(4, 'Hindu', '2022-11-16 22:36:46', '2022-11-16 22:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Alvino', 'vinopermana13@gmail.com', NULL, '$2y$10$NjR17/TPSrrQcha7cz037ed8CG28h7G6R8ygAmWXHoTDIa8Djoit6', NULL, '2022-11-16 20:39:24', '2022-11-16 20:39:24', 'admin'),
(2, 'user1', 'user1@gmail.com', NULL, '$2y$10$20K/fsoWFCl7D2m0gwwbPu0xabKKunQuGsvcgO88nX87uo8qc/O/K', NULL, '2022-11-16 21:11:44', '2022-11-16 21:11:44', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
