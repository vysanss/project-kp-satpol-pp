-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2025 at 05:45 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satpolpp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Admin',
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'admin@admin.com',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '$2y$12$2m.WSX5m4oTk05PPJ52KDOuGDhikJRr3lnLb5v7UaQwChYZwbBxeq',
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mimin 1', 'admin@admin.com', '$2y$12$2m.WSX5m4oTk05PPJ52KDOuGDhikJRr3lnLb5v7UaQwChYZwbBxeq', NULL, NULL, NULL),
(2, 'mimin 2', 'admin2@admin.com', '$2y$12$34/uhMgkeBT42IObq0hAku5AfRHiAX9sXkFatN4Vc2WgLIRCevE8m', NULL, NULL, '2025-08-21 03:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `category`, `excerpt`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'artikel', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'img/pimpinanpolpp.png\r\n', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Satuan Polisi Pamong Praja',
  `sub_judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Menjaga Ketertiban dan Keamanan Masyarakat',
  `deskripsi` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Satuan Polisi Pamong Praja bertugas membantu Kepala Daerah dalam menegakkan Peraturan Daerah dan penyelenggaraan ketertiban umum serta ketenteraman masyarakat.',
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'img/logo-Pol-PP-png.webp',
  `logo_alt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Logo Satpol PP',
  `show_logo` tinyint NOT NULL DEFAULT '1' COMMENT '1=true, 0=false',
  `show_navigation` tinyint NOT NULL DEFAULT '1' COMMENT '1=true, 0=false',
  `show_stats` tinyint NOT NULL DEFAULT '1' COMMENT '1=true, 0=false',
  `tahun_melayani` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '20+',
  `personil_aktif` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '150+',
  `kecamatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '10',
  `kelurahan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '70',
  `navigation_items` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `judul`, `sub_judul`, `deskripsi`, `logo`, `logo_alt`, `show_logo`, `show_navigation`, `show_stats`, `tahun_melayani`, `personil_aktif`, `kecamatan`, `kelurahan`, `navigation_items`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'SATPOL-PP', 'Kota Tasikmalaya', 'Satuan Polisi Pamong Praja bertugas membantu Kepala Daerah dalam menegakkan Peraturan Daerah dan penyelenggaraan ketertiban umum serta ketenteraman masyarakat.', 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 1, 1, 1, '20+', '150+', '10', '70', NULL, 1, NULL, '2025-08-21 03:42:39'),
(2, 'Tentang Kami', NULL, NULL, 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 0, 1, 0, '20+', '150+', '10', '70', NULL, 1, NULL, '2025-08-27 20:58:47'),
(3, 'Struktur Organisasi', '', '', 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 0, 1, 0, '20+', '150+', '10', '70', NULL, 1, NULL, NULL),
(4, 'Tupoksi', '', '', 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 0, 1, 0, '20+', '150+', '10', '70', NULL, 1, NULL, NULL),
(5, 'Maklumat Pelayanan', '', '', 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 0, 1, 0, '20+', '150+', '10', '70', NULL, 1, NULL, NULL),
(6, 'Profil Pimpinan', '', '', 'img/logo-Pol-PP-png.webp', 'Logo Satpol PP', 0, 1, 0, '20+', '150+', '10', '70', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `category`, `content`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(5, 'ppppppppp', 'Berita', '<h2>asdacserf</h2><ul><li>asdasd<img src=\"http://project-kp.test/storage/berita-ckeditor/68a830e29fa1f.jpg\"></li><li>adsgg<img src=\"http://project-kp.test/storage/berita-ckeditor/68a832a09df15.png\"></li></ul>', 'berita/sciDIhHT6AVZDVyPkmxdLp3HVTWLZ4LFsjXzDdyC.png', '2025-08-21 17:00:00', '2025-08-22 01:09:07', '2025-08-22 08:47:30'),
(6, 'sefsef', 'Berita', '<p>sgdshrdth</p>', 'berita/8l67sxK08uY1yDpGDyvzDBzpac0R1WPh4aOfws0R.jpg', '2025-08-04 17:00:00', '2025-08-22 01:16:30', '2025-08-22 02:14:45'),
(7, 'asdsafe', 'Artikel', '<h2>sfdsesef</h2><ol><li>asfsfdf</li><li>adsfa</li><li>&nbsp;</li><li>sadgdsg</li></ol>', 'berita/HRxF3QPFIsmC0Cz7mOW4bB27bcij9R7aiyCyQTX9.png', '2025-08-15 17:00:00', '2025-08-22 01:25:37', '2025-08-22 02:14:31'),
(8, 'fsdfgsdf', 'Artikel', '<p>asdfasdf</p>', 'berita/mHX5lLHuT6EnEMyiKalQ1rje9B3ryBw0o2dwe0H1.jpg', '2025-08-17 17:00:00', '2025-08-22 02:19:08', '2025-08-22 02:19:08'),
(9, 'sdsdf', 'Artikel', '<p>sadfsdf</p>', 'berita/wge7dRfejjLzmJwNIJJWXRe2bFxCnQt7OMLe5tuS.png', '2025-08-21 17:00:00', '2025-08-22 03:21:17', '2025-08-22 03:21:17'),
(12, 'pppppkkpku', 'Berita', '<h4><strong>kusdgfk</strong></h4><ul><li><i><strong>sfakew</strong></i></li></ul><p>&nbsp;</p><blockquote><p><i><strong>swfefkhwlfhoiewhipw</strong></i></p><figure class=\"table\"><table><tbody><tr><td>;;;;;ghjkl;</td><td>bnm,</td></tr><tr><td>nm,.</td><td>ghjkl;</td></tr><tr><td>ghjkl</td><td>&nbsp;</td></tr></tbody></table></figure></blockquote><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img src=\"http://project-kp.test/storage/berita-ckeditor/68afd5ea0fbd6.png\"></figure><p>&nbsp;</p>', 'berita/TW6XwEjdjiZ0imJKe3tZdtyJGmuViTmBY7gSnQly.png', '2025-08-29 17:00:00', '2025-08-27 21:07:38', '2025-08-27 21:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `connection` text COLLATE utf8mb4_general_ci NOT NULL,
  `queue` text COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `layanan` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `deskripsi`, `layanan`, `created_at`, `updated_at`) VALUES
(1, 'Satuan Polisi Pamong Praja bertugas membantu Kepala Daerah dalam menegakkan Peraturan Daerah dan penyelenggaraan ketertiban umum serta ketenteraman masyarakat.', '<h2><strong>Hubungi</strong></h2><p>(admin)082135541584<br><strong>Daftar Pelayanan</strong></p><p>www.loremipsum.com</p><h2><strong>Email</strong></h2><p>admin@admin.com</p>', NULL, '2025-08-23 07:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_general_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Hubungi', '(admin)082135541584', 'fa-solid fa-phone', NULL, '2025-08-23 06:27:30'),
(2, 'Daftar Pelayanan', 'www.loremipsum.com', 'fa-solid fa-book', NULL, '2025-08-23 06:28:17'),
(3, 'Email', 'admin@admin.com', 'fa-solid fa-envelope', NULL, '2025-08-23 06:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_01_01_000000_create_admins_table', 1),
(11, '2024_01_01_000000_create_banners_table', 2),
(14, '2025_08_12_071054_create_tentangkami_table', 3),
(15, '2024_01_01_000000_create_profilpimpinan_table', 4),
(16, '2024_06_09_000000_create_layanans_table', 5),
(18, '2024_06_09_000000_create_berita_table', 6),
(19, '2024_06_09_000000_create_artikel_table', 7),
(20, '2025_08_20_102624_create_pdfs_table', 8),
(22, '2024_06_10_000000_create_s_organisasi_table', 9),
(23, '2024_06_07_000000_create_tupoksi_table', 10),
(24, '2024_06_07_000001_create_tupoksis_table', 11),
(25, '2024_06_07_000000_create_m_pelayanan_table', 12),
(27, '2024_06_09_000000_create_footers_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `m_pelayanan`
--

CREATE TABLE `m_pelayanan` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `poin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_pelayanan`
--

INSERT INTO `m_pelayanan` (`id`, `kategori`, `poin`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Jenis', 'Perizinan', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL),
(2, 'Jenis', 'ketertiban', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL),
(3, 'Standar Pelayanan', 'Persyaratan Pelayanan', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\ntyuiop', NULL, '2025-08-27 21:16:23'),
(5, 'Informasi Pelayanan', 'Biaya', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL),
(6, 'Informasi Pelayanan', 'Jam Pelayanan', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL),
(7, 'Jenis', 'Pendukung', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2025-08-22 10:05:31', '2025-08-22 10:05:31'),
(8, 'Standar Pelayanan', 'Prosedur Pelayanan', 'iervbwogweiruvgwoeiugvbirgvbiuvgskgfvkgsvkurgvbiehrboiughvbigsrgweregrtttyj5yjbrtjr', '2025-08-22 10:13:35', '2025-08-22 10:31:47'),
(11, 'Standar Pelayanan', 'Persyaratan Pelayanan', 'poiugf', '2025-08-27 21:16:58', '2025-08-27 21:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`id`, `nama_file`, `path`, `kategori`, `created_at`, `updated_at`) VALUES
(17, 'tes bro', 'pdfs/1755705842_tespdf.pdf', 'dokumen_evaluasi', '2025-08-20 09:04:02', '2025-08-27 20:59:27'),
(18, 'struktur organisasi', 'pdfs/1755705895_20-SATUAN POLISI PAMONG PRAJA.pdf', 'dokumen_evaluasi', '2025-08-20 09:04:55', '2025-08-20 09:05:27'),
(19, '20-SATUAN POLISI PAMONG PRAJA.pdf', 'pdfs/1755705902_20-SATUAN POLISI PAMONG PRAJA.pdf', 'dokumen_perencanaan', '2025-08-20 09:05:02', '2025-08-20 09:05:02'),
(25, 'tespdf.pdf', 'pdfs/1755766847_tespdf.pdf', 'dokumen_perencanaan', '2025-08-21 02:00:47', '2025-08-21 02:00:47'),
(26, 'tespdf.pdf', 'pdfs/1755776152_tespdf.pdf', 'dokumen_evaluasi', '2025-08-21 04:35:52', '2025-08-21 04:35:52'),
(27, 'tespdf.pdf', 'pdfs/1755776166_tespdf.pdf', 'produk_hukum', '2025-08-21 04:36:06', '2025-08-21 04:36:06'),
(28, 'tespdf.pdf', 'pdfs/1755776709_tespdf.pdf', 'produk_hukum', '2025-08-21 04:45:09', '2025-08-21 04:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `profilpimpinan`
--

CREATE TABLE `profilpimpinan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `urutan` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profilpimpinan`
--

INSERT INTO `profilpimpinan` (`id`, `nama`, `gelar_depan`, `gelar_belakang`, `jabatan`, `pesan`, `foto`, `is_active`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'lorem ipsum', 'Dr.', 'S.H., M.H.', 'Kepala Satuan Polisi Pamong Praja Kota Tasikmalaya', '<p>“Satuan Polisi Pamong Praja Kota Tasikmalaya berkomitmen untuk terus meningkatkan pelayanan kepada masyarakat dengan menjunjung tinggi nilai-nilai integritas, profesionalisme, dan dedikasi dalam menegakkan ketertiban umum dan ketentraman masyarakat.”</p>', 'profilpimpinan/PJv2hsfxUkrB8v9e2zNn1u3wKAaYWjje3iSIQIUr.png', 1, 1, '2025-08-12 04:36:25', '2025-08-25 01:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_general_ci,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ApNdsLRGNOzoh7jVeI3ZmCmcQyrdB3NTJsWWG4IK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiemtIZE9tbUFxck81WkRqNHNEdGFRWFdYZ3EyTXliTjRXM1FFcVRsQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9wcm9qZWN0LWtwLnRlc3QvYmVyaXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTU6ImFkbWluX2xvZ2dlZF9pbiI7YjoxO30=', 1757502182),
('UeS3ap7isVUwphciyjnDvK5PD46jE4zqoNbcvOvR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3F3UFBJMXRsYjVSYkxPU2VkMFRTZWZxWjFMOW55eGlsUEFUdWg5ZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9wcm9qZWN0LWtwLnRlc3QvYWRtaW4vbG9naW4iO319', 1756355804);

-- --------------------------------------------------------

--
-- Table structure for table `s_organisasi`
--

CREATE TABLE `s_organisasi` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_organisasi`
--

INSERT INTO `s_organisasi` (`id`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 's_organisasi/zowMsF4HwC6I1xiQwy65VUVmDw8UMBuGJoZqTFKl.jpg', 'asdasdawqsadasdasd', '2025-08-22 07:04:55', '2025-08-22 07:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_2` text COLLATE utf8mb4_general_ci,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `visi` text COLLATE utf8mb4_general_ci NOT NULL,
  `misi` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`id`, `judul`, `deskripsi_1`, `deskripsi_2`, `gambar`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Profil Organisasi', '<p>Satuan Polisi Pamong Praja Kota Tasikmalaya adalah perangkat daerah yang bertugas dalam penegakan Peraturan Daerah dan Peraturan Kepala Daerah, penyelenggaraan ketertiban umum dan ketentraman, serta perlindungan masyarakat.</p>', '<p>Kami berkomitmen memberikan pelayanan terbaik dengan mengedepankan integritas, profesionalisme, dan dedikasi tinggi untuk menciptakan lingkungan yang aman, tertib, dan nyaman bagi seluruh masyarakat Kota Tasikmalaya.</p>', 'tentangkami/3CQMwfXTtRSAxFcNJhK0gH2irfTEOF8XIu8m4gvq.jpg', '<p>Terwujudnya Kota Tasikmalaya yang aman, tertib, dan tentram melalui penegakan Perda yang konsisten dan pelayanan prima kepada masyarakat.</p>', '<p>Terwujudnya Kota Tasikmalaya yang aman, tertib, dan tentram melalui penegakan Perda yang konsisten dan pelayanan prima kepada masyarakat.</p>', NULL, '2025-08-22 05:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `tupoksis`
--

CREATE TABLE `tupoksis` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `poin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tupoksis`
--

INSERT INTO `tupoksis` (`id`, `kategori`, `poin`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Tugas', 'tugas 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(2, 'Tugas', 'Tugas 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'', NULL, NULL),
(3, 'Fungsi', 'Fungsi Utama', 'waduh Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', NULL, NULL),
(4, 'Fungsi', 'Fungsi Pendukung', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', NULL, NULL),
(5, 'Fungsi', 'Fungsi Utama', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', NULL, NULL),
(6, 'Bidang Kerja', 'Perizinan', 'lorem ipsum', NULL, NULL),
(7, 'Bidang Kerja', 'Ketertiban', 'ipsum lorem', NULL, NULL),
(9, 'Fungsi', 'Fungsi Pendukung', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2025-08-22 08:58:15', '2025-08-22 08:58:15'),
(10, 'Tugas', 'Tugas 3', 'pppppppppp', '2025-08-27 21:13:41', '2025-08-27 21:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pelayanan`
--
ALTER TABLE `m_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilpimpinan`
--
ALTER TABLE `profilpimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `s_organisasi`
--
ALTER TABLE `s_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tupoksis`
--
ALTER TABLE `tupoksis`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `m_pelayanan`
--
ALTER TABLE `m_pelayanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `profilpimpinan`
--
ALTER TABLE `profilpimpinan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_organisasi`
--
ALTER TABLE `s_organisasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tupoksis`
--
ALTER TABLE `tupoksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
