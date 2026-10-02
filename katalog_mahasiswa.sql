-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2026 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kuliner & Minuman', 'kuliner-minuman', '2026-10-01 09:26:14', '2026-10-01 09:26:14'),
(2, 'Jasa & Kreatif', 'jasa-kreatif', '2026-10-01 09:26:14', '2026-10-01 09:26:14'),
(3, 'Fashion & Merch', 'fashion-merch', '2026-10-01 09:26:14', '2026-10-01 09:26:14'),
(4, 'Teknologi & Servis', 'teknologi-servis', '2026-10-01 09:26:14', '2026-10-01 09:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_30_141259_create_categories_table', 1),
(5, '2026_09_30_141335_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_prodi` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `seller_name`, `seller_prodi`, `whatsapp_number`, `title`, `slug`, `price`, `description`, `image`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andi Pratama (MB)', 'Manajemen Informatika', '6289508721206', 'Risol Mayo Lumer Smoked Beef', 'risol-mayo-lumer-smoked-beef-isi-5', 15000, 'Risol mayo hangat dengan isian telur, smoked beef, dan saus mayo rahasia yang melumer di mulut. Dibuat fresh setiap pagi.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq0Ja9mY1m7AGjYnkyWkgfUUuAfCH7xkADmyVby2O9qA&s=10', 1, '2026-10-01 09:26:14', '2026-10-01 09:44:23'),
(2, 1, 'Siti Nurhaliza (MI)', 'Bisnis Digital', '6289508721206', 'Kopi Susu Aren', 'kopi-susu-aren-convergence-250ml', 10000, 'Espresso house blend dipadu dengan susu segar cair dan gula aren murni. Rasanya creamy dan pas untuk teman nugas.', 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=600&auto=format&fit=crop&q=80', 1, '2026-10-01 09:26:14', '2026-10-02 01:23:29'),
(3, 2, 'Budi Santoso (TRMG)', 'Manajemen Informatika', '6289508721206', 'Jasa Desain Poster Event & Feeds IG', 'jasa-desain-poster-event-feeds-ig', 45000, 'Melayani pembuatan UI/UX, poster kegiatan HMPS/Ormawa, serta desain Microblog Instagram dengan gaya modern & estetik.', 'https://down-id.img.susercontent.com/file/id-11134207-7r990-ly05qiw06v8sa9', 1, '2026-10-01 09:26:14', '2026-10-01 09:45:42'),
(4, 1, 'Citra Dewi (AB)', 'Bisnis Digital', '6289508721206', 'Cappucino Dingin', 'tote-bag-kanvas-custom-estetik-mi', 8000, 'Minuman cappuccino dengan perpaduan kopi, susu creamy, dan foam lembut yang pas, cocok dinikmati untuk menemani aktivitas sehari-hari.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShf5gigtXSKtrhB9GQ6R-fnripZU1XjuvIplvW19sl4A&s=10', 0, '2026-10-01 09:26:14', '2026-10-01 09:47:44'),
(5, 4, 'Rian Hidayat (CE)', 'Manajemen Informatika', '6289508721206', 'Jasa Servis  Laptop Campus', 'jasa-servis-optimalisasi-laptop-campus', 50000, 'Jasa install ulang OS Windows, pembersihan debu hardware, ganti pasta thermal, serta konsultasi upgrade SSD/RAM.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeHzoeV6QI0cFRAIPCmeliNwEmy9fuRCGeQh5acM5kOw&s=10', 0, '2026-10-01 09:26:14', '2026-10-01 09:49:13'),
(6, 1, 'Dina Rosita (AB)', 'Bisnis Digital', '6289508721206', 'Dessert Box Matcha & Cadbury', 'dessert-box-matcha-cadbury', 25000, 'Dessert box kekinian dengan lapisan cake lembut, cream matcha premium, dan topping cokelat Cadbury melimpah.', 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600&auto=format&fit=crop&q=80', 0, '2026-10-01 09:26:14', '2026-10-01 09:49:28'),
(7, 2, 'Farhan Zaki (MI)', 'Manajemen Informatika', '6289508721206', 'Jasa Pembuatan Landing Page & Web Portofolio', 'jasa-pembuatan-landing-page-web-portofolio', 150000, 'Bantu mahasiswa dan UMKM membuat website portofolio atau katalog produk profesional menggunakan Tailwind CSS & Laravel.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIKMCCrM-ooOIJgl5T4lOklERf19Ts2oVejmaHgeW7oQ&s=10', 1, '2026-10-01 09:26:14', '2026-10-01 09:50:50'),
(8, 3, 'Gilang Ramadhan (MB)', 'Bisnis Digital', '6289508721206', 'Ganci', 'kaos-oversize-streetwear-code-craft', 30000, 'Gantungan kunci custom dengan desain unik dan bahan berkualitas, cocok untuk mempercantik tas, kunci, atau sebagai aksesori sehari-hari.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb8J1AhsHwcDMcWXfRaLOkN1wt0jKvYl6NcTw1w2PVCw&s=10', 0, '2026-10-01 09:26:14', '2026-10-01 09:53:33'),
(9, 1, 'Hania Putri (AB)', 'Manajemen Informatika', '6289508721206', 'Dimsum Ayam Udang', 'dimsum-ayam-udang-mix-isi-10', 22000, 'Dimsum olahan daging ayam & udang segar bertabur topping wortel, keju, dan jamur. Dilengkapi saus merah pedas asam manis.', 'https://img.lazcdn.com/g/p/7ab44d951ef6f1697e8ba8f39468be4d.png_720x720q80.png', 0, '2026-10-01 09:26:14', '2026-10-01 09:55:10'),
(10, 1, 'Irfan Hakim (TRPL)', 'Manajemen Informatika', '6289508721206', 'Es Buah', 'cetak-3d-model-keychain-custom', 15000, 'Es buah segar dengan perpaduan berbagai buah, kuah manis dan menyegarkan, cocok dinikmati saat cuaca panas.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1-pt5pO7WWaAcxKWhDSgE3zOCmS8fSF7_TpknRHE5tw&s=10', 0, '2026-10-01 09:26:14', '2026-10-01 09:57:47'),
(11, 2, 'Jasmine Aulia (CE)', 'Bisnis Digital', '6289508721206', 'Jasa Olah Data Statistik SPSS & Excel', 'jasa-olah-data-statistik-spss-excel', 75000, 'Bantuan analisis data kuantitatif, uji validitas, rekapitulasi data Excel, dan penyajian grafik untuk keperluan tugas akhir/riset.', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&auto=format&fit=crop&q=80', 0, '2026-10-01 09:26:14', '2026-10-02 01:24:03'),
(13, 1, 'Serendira (AK)', NULL, '6289508721206', 'Es Teh', NULL, 7000, 'Es teh segar dengan rasa manis yang pas dan sensasi dingin menyegarkan, cocok untuk menemani aktivitas sehari-hari.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOvC61kyQHNQZqVzjhWSNVxbbEoZaY160PPbMct-THAA&s=10', 0, '2026-10-01 10:00:48', '2026-10-01 10:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0GDIywWrhAJbxVrUUZB0JEiYXisGpoB5Ciu4nKKw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXhEamlMcmFpNktGNzdPcHlrZFpCMjhRc1NRMXV2aURpU0FzVW90ZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9fQ==', 1790874668),
('8wZdZoun4nvuNlIRNLZn5FeUAWZoHIvDbqSbL6EP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.139.1 Chrome/150.0.7871.250 Electron/43.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFZTTnJHMnh4eXlQbTBWT1VSSzZvZm9XVm9wWHR6Y3VsNG4zWWF5TyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790875362),
('BOpL5cWcEUisKFLFDU44ghablm4fkL1Kbccpkkok', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.140.0 Chrome/150.0.7871.250 Electron/43.7.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHhHQjVQZ29pUHJWdVFJTE1sSXdqQWtBdThzcE15b1ZMNEY1ek1hcyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790911813),
('ftwagjQHN4XOGzZE41E38pdJIEPiqzxkIDa9GVVW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36 Edg/154.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoick11UmlyVkRBNGFyeXNSOEZ2QmJ6dTF5MXd1aXg2dDdFVGVGSWhIUCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiMzUzODVmMGUwY2EzNGJkMDFmNDk1YTc5MmE5ZTZmZmM3YTAxNTk5ZjgwZjRhODcyNThmMGU4ODEwNWFhNDNkZCI7fQ==', 1790930354),
('xF4caFgtS36oXCMXPVXe8nZw9ccZZ3AuV4fopK82', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36 Edg/154.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidE1hUTNiUGhqR2xUVjI3RHJIaW1BTnRpdkNKU3pPZHBGY0JuV2ZQbyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6IjM1Mzg1ZjBlMGNhMzRiZDAxZjQ5NWE3OTJhOWU2ZmZjN2EwMTU5OWY4MGY0YTg3MjU4ZjBlODgxMDVhYTQzZGQiO30=', 1790912343);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin BD HMPS MI', 'admin@hmpsmi.or.id', NULL, '$2y$12$z3g0RVrMlZkcJSRluuTNCOuvxUGdUrrUBtd9WCsh3cghkzQn.sn1a', NULL, '2026-10-01 09:26:14', '2026-10-01 09:26:14'),
(2, 'Admin Polmed', 'admin@polmed.ac.id', NULL, '$2y$12$m6uJgtLnho5rEMPmAlccoeaPRp4B4Pb.oLgKvtQZ89qMLROz3890G', NULL, '2026-10-01 10:04:44', '2026-10-01 10:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
