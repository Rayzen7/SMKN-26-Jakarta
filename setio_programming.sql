-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Jan 2025 pada 09.00
-- Versi server: 8.0.30
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setio_programming`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `name`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Pj Gubernur Tinjau Uji Coba MBG di SMKN 26 Jakarta', 'berita/xm21rhZ5XYy10lnS4VopBbP8DVsuon7HI1gwEjpO.jpg', 'Penjabat (Pj) Gubernur DKI Jakarta, Teguh Setyabudi meninjau pelaksanaan uji coba Makan Bergizi Gratis (MBG) di SMKN 26 Rawamangun, Jakarta Timur, pada Senin (21/10).  Dalam uji coba tersebut, sebanyak 1.600 paket makanan disediakan Corporate Social Responsibility (CSR) PT Food Station Tjipinang Jaya bekerja sama dengan PT Jakarta Tourisindo seharga Rp 25.000 per porsi.', '2025-01-18 01:27:17', '2025-01-18 01:27:17'),
(2, 'Pemprov DKI Luncurkan Produk Teaching Factory SMK', 'berita/w6iVSvDLciRxTkqLeYVuyV864GBywsKbMGVhQMon.jpg', 'Pemerintah Provinsi (Pemprov) DKI Jakarta meluncurkan produk Teaching Factory (Tefa) Sekolah Menengah Kejuruan (SMK) DKI Jakarta dari SMK Negeri 26, SMK Negeri 1 Jakarta, dan SMK Strada Jakarta. Pengembangan Tefa di SMK DKI ini ditujukan sebagai upaya peningkatan mutu Sumber Daya Manusia (SDM) berkualitas, serta iklim ekonomi, sosial, dan budaya yang kondusif untuk pembangunan kota.', '2025-01-18 01:36:43', '2025-01-18 01:36:43'),
(3, 'Festival Pelajar Anti Korupsi Berintegritas di SMKN 26 Jakarta', 'berita/LCCcjMUmSKppBZfOG2P0PEzReNqhzRGWNeYPyyso.jpg', 'KBRN, Jakarta : Inspektorat Pembantu Wilayah Kota Administrasi Jakarta Timur menggelar Festival Pelajar Berintegritas, gerakan membangun budaya berintegritas dan anti korupsi di kalangan pelajar menuju Jakarta Kota Global. Festival untuk wilayah Kecamatan Pulogadung, dilaksanakan di SMKN 26 Jakarta, Kelurahan Rawamangun, Kecamatan Pulogadung, Jakarta Timur, Jumat (29/11/2024).', '2025-01-18 01:38:04', '2025-01-18 01:38:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulirs`
--

CREATE TABLE `formulirs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ask` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `formulirs`
--

INSERT INTO `formulirs` (`id`, `name`, `email`, `no`, `ask`, `created_at`, `updated_at`) VALUES
(1, 'Setio Nugraha', 'test@gmail.com', '0818723291', 'Bagaimana cara mendaftar sekolah di SMKN 26 Jakarta?', '2025-01-18 01:49:13', '2025-01-18 01:49:13'),
(2, 'Khadafi', 'khadafi@email.com', '081238712313', 'Apakah Di Sekolah SMKN 26 jakarta memiliki banyak ekskul?', '2025-01-18 01:54:50', '2025-01-18 01:54:50'),
(4, 'Rasya', 'rasya@email.com', '0818723291', 'Kenapa SMKN 26 Jakarta menjadi sekolah terfavorit di Jakarta?', '2025-01-18 01:57:48', '2025-01-18 01:57:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_18_025349_create_sejarahs_table', 2),
(6, '2025_01_18_025844_sejarah', 3),
(7, '2025_01_18_031746_create_visi__misis_table', 4),
(8, '2025_01_18_063616_create_beritas_table', 5),
(9, '2025_01_18_073839_sejarah', 5),
(10, '2025_01_18_075233_create_beritas_table', 6),
(11, '2025_01_18_082637_berita', 7),
(13, '2025_01_18_083935_create_formulirs_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint UNSIGNED NOT NULL,
  `sejarah_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `sejarah_1`, `sejarah_2`, `sejarah_3`, `created_at`, `updated_at`) VALUES
(1, 'SMK Negeri 26 Jakarta awalnya bernama STM Negeri Pembangunan Jakarta. SMK Negeri 26 Jakarta merupakan lembaga pendidikan kejuruan yang bertugas meningkatkan Sumber Daya Manusia (SDM) yang sesuai dengan kebutuhan Industri dan Masyarakat. Pembangunan Indonesia yang dimulai pada tahun 1969-1970 yang dikenal dengan PELITA I, memberikan pemikiran untuk mengadakan pembaharuan pada sistem pendidikan nasional, khususnya pembaharuan pada Sekolah Teknologi Menengah (STM) dengan jenjang pendidikan 3-4 tahun mulai dirintis', 'Pada tahun 1970-1971 Menteri Pendidikan menetapkan untuk menyelesaikan 12 instalasi Pendidikan Teknik secara bertahap. Intalasi pendidikan di Jakarta dan Semarang telah diselesaikan sekaligus sebagai proyek perintis sekolah teknologi menengah pembangunan dengan lama belajar 4 (empat) tahun yang diresmikan oleh Presiden RI, Jenderal Besar TNI (Purn.) H. M. Soeharto di Jakarta pada 1 Juli 1971 dan di Semarang pada 7 Juli 1971 disusul di Yogyakarta pada 29 Juli 1972.', 'Pada tahun 1973 selesai dibangun 5 (lima) Proyek Perintis STM Pembangunan di Surabaya, Ujung Pandang, Bandung, Pekalongan dan Temanggung. Sedangkan pada tahun 1974 selesai 4 (empat) Instalasi Pendidikan Teknik Lainnya yaitu di Jember, Boyolali, Tanggeang dan Metro, yang disebut dengan Sekolah Menengah Teknologi Pertanian dengan lama belajar 3 (tiga) tahun. Dengan demikian hanya ada 8 (delapan) Proyek Perintis STM Pembangunan di Indonesia', NULL, '2025-01-18 02:00:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('R1CJrJ0aREdhH3fuItKvZDI9oa6VArbGL8CQux31', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmRFN09Jd2JxWFk2QmYxRld1d3luV3YzWlQ0VHh5STlBcjZuZ1BsSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737190809);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi__misis`
--

CREATE TABLE `visi__misis` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi__misis`
--

INSERT INTO `visi__misis` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Terbentuknya Sumber Daya Manusia yang Berakhlak Mulia, Siap Kerja, Mandiri, dan Kompeten Dalam Memanfaatkan Teknologi Dengan Berwawasan Lingkungan', '1. Meningkatkan Keimanan Dan ketaqwaanKepada Tuhan Yang Maha Esa Bagi Seluruh Warga Sekolah,2. Meningkatkan Kompetensi Pendidik Dan Tenaga Kependidikan,3. Menyelenggarakan Pendidikan DanPelatihan Berbasis Kompetensi DenganMemanfaatkan Teknologi Informasi DanKomunikasi,4. Menjalin Kerjasama Dengan Dunia Usaha/Industri Dan Masyarakat Umum,5. Memanfaatkan Pola Hidup Bersih Dan sehat bagi seluruh warga Sekolah,6. Menanamkan Kemandirian Dan Jiwa Juang yang Tinggi Bagi Peserta Didik Yang Optimal', NULL, '2025-01-18 00:51:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `formulirs`
--
ALTER TABLE `formulirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi__misis`
--
ALTER TABLE `visi__misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formulirs`
--
ALTER TABLE `formulirs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visi__misis`
--
ALTER TABLE `visi__misis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
