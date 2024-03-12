-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 09:07 AM
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
-- Database: `charlie_gotrip`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_04_000734_create_packages_table', 1),
(6, '2024_03_04_025453_create_services_table', 2),
(7, '2024_03_06_013111_create_testimonials_table', 3),
(8, '2024_03_06_013528_add_image_to_testimonials', 4),
(9, '2024_03_08_021854_create_tickets_table', 5),
(10, '2024_03_08_030534_add_slug_on_tickets', 6);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `place`, `language`, `people`, `duration`, `price`, `description`, `thumbnail`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Ulun Danu', 'Bali Indonesia', 'Balinese English Indonesia', 3, 2, 2000000, 'Pura Ulun Danu Bratan, Pura Ulun Danu Beratan atau Bratan Pura merupakan sebuah pura dan candi air besar di Bali, Indonesia - candi utama air lainnya menjadi Pura Ulun Danu Batur. Kompleks candi ini terletak di tepi barat laut Danau Bratan di pegunungan dekat Bedugul, Kabupaten Tabanan. Candi air memenuhi seluruh wilayah di daerah aliran; di tepi hilir ada banyak candi kecil air yang spesifik untuk setiap asosiasi irigasi (subak). Candi ini sebenarnya digunakan untuk upacara persembahan untuk dewi Dewi Danu, dewi air, danau dan sungai. Danau Bratan merupakan salah satu danau penting dalam hal irigasi. Danau Bratan dikenal sebagai danau \"gunung suci\", kawasan ini sangat subur, terletak pada ketinggian 1.200 meter, dan beriklim sangat dingin.', 'packages/ulun-danua.jpg', 'packages/article-ulun-danu.jpg', '2024-03-03 17:40:51', '2024-03-04 18:45:04'),
(2, 'Dubai', 'Uni Emirates Arab', 'Arabic English', 10, 7, 12000000, 'Dubai (Arab: دبي, translit. Dubayy  adalah kota terpadat di negara Uni Emirat Arab dan merupakan ibukota Emirat Dubai. Kota ini terletak di sepanjang pantai tenggara Jazirah Arab dan di selatan teluk Persia, Kotamadya Dubai disebut Kota Dubai untuk membedakannya dari Emirat Dubai. Dubai adalah salah satu tujuan pariwisata paling populer di dunia.[5] Kota ini memiliki hotel bintang lima terbanyak kedua di dunia[6] dan juga bangunan tertinggi di dunia, Burj Khalif', 'packages/dubai.jpg', 'packages/article-dubai.jpg', '2024-03-03 17:49:54', '2024-03-03 17:49:54'),
(4, 'Rialto Bridge', 'Venezia, Italy', 'Italy, English', 5, 4, 10000000, 'Jembatan Rialto (bahasa Italia: Ponte di Rialto; bahasa Venesia: Ponte de Rialto) adalah salah satu dari empat jembatan yang menyeberangi Kanal Besar Venesia di Italia. Jembatan ini merupakan jembatan tertua yang menyeberangi kanal tersebut dan memisahkan distrik San Marco dengan San Polo.Struktur yang menjadi sarana penyeberangan darat pertama di Kanal Besar adalah sebuah jembatan ponton yang didirikan pada tahun 1181 oleh Nicolò Barattieri. Jembatan tersebut dijuluki Ponte della Moneta karena adanya tempat pembuatan uang logam di dekat pintu masuk timurn', 'packages/rialto-bridge.jpg', 'packages/article-rialto-bridge.jpg', '2024-03-03 19:42:57', '2024-03-03 19:42:57'),
(5, 'Hurawalhi', 'Maldives', 'English, Maldives', 4, 5, 11000000, 'Hurawalhi Island Resort offers the quintessential island experience balancing barefoot bliss with enchanting adventures. A renowned culinary hotspot offering epic culinary journeys, which include the largest all-glass underwater restaurant, 5.8 Undersea Restaurant. Hurawalhi is the perfect destination to celebrate life’s special moments, leaving you seasoned with awe.', 'packages/hurawalhi.jpg', 'packages/article-hurawalhi.jpg', '2024-03-04 19:53:41', '2024-03-04 19:53:41');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(5, 'Tell us what you want to do', 'Fill out a 2-minute questionaire about how you like to travel like', 'services/tell-us-what-you-want-to-do.jpg', '2024-03-03 20:17:29', '2024-03-03 20:17:29'),
(6, 'Share your travel preference', 'It all happends online, We recommend everything to your vision', 'services/share-your-travel-preference.jpg', '2024-03-03 20:20:27', '2024-03-04 18:57:16'),
(7, 'We’ll give you recommendations', 'Once you’re happy with your final plan, We handle everything for you', 'services/well-give-you-recommendations.jpg', '2024-03-03 20:20:47', '2024-03-03 20:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profession`, `description`, `created_at`, `updated_at`, `thumbnail`) VALUES
(1, 'Alice Aganta', 'London Traveller', 'Travelious really helped me in finding the best location for my first outdoor adventure trip.\r\n                Their response was very fast and able to tell in detail about the ceita or the history of the\r\n                place I was going to visit', NULL, '2024-03-06 19:19:26', 'testimonials/alice-aganta.jpg'),
(2, 'Budiono Siregar', 'Jayapura Photo Hunter', 'Choosing Go Trip Travel was the best decision I made for my vacation! From start to finish, their team provided exceptional service and attention to detail. The itinerary they crafted for me was perfectly tailored to my preferences, ensuring every moment was filled with adventure and relaxation', NULL, NULL, 'testimonials/testi-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `people` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `destination`, `date`, `people`, `price`, `total`, `created_at`, `updated_at`, `slug`) VALUES
(21, 'Agung Prabowo', 'Dubai', '2024-03-27', 8, 12000000, 96000000, '2024-03-07 20:37:46', '2024-03-07 20:37:46', 'agung-prabowo-08-03-2024-033746'),
(22, 'Agung Prabowo', 'Ulun Danu', '2024-03-07', 10, 2000000, 20000000, '2024-03-07 20:46:35', '2024-03-07 20:46:35', 'agung-prabowo-08-03-2024-034635'),
(23, 'Agung Prabowo', 'Hurawalhi', '2024-03-06', 3, 11000000, 33000000, '2024-03-07 20:48:27', '2024-03-07 20:48:27', 'agung-prabowo-08-03-2024-034827'),
(24, 'Agung Prabowo', 'Rialto Bridge', '2024-03-21', 4, 10000000, 40000000, '2024-03-08 18:59:27', '2024-03-08 18:59:27', 'agung-prabowo-09-03-2024-015927'),
(25, 'Admin', 'Rialto Bridge', '2024-03-19', 5, 10000000, 50000000, '2024-03-08 21:39:38', '2024-03-08 21:39:38', 'admin-09-03-2024-043938'),
(26, 'Agung Prabowo', 'Hurawalhi', '2024-03-13', 2, 11000000, 22000000, '2024-03-11 02:39:08', '2024-03-11 02:39:08', 'agung-prabowo-11-03-2024-093907');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$CkWYVIuAn8ddgpZs2.65NuzSaO6cDytWcf.S2m5kVJ3kZ/YR0TBim', NULL, '2024-03-03 17:18:11', '2024-03-03 17:18:11'),
(2, 'Agung Prabowo', 'aguungprbw@gmail.com', NULL, '$2y$12$g94YZNSIzLNC042dGjKA8e2N8dhcxRxa13GvvkT02Rx3kkkL5JWDi', NULL, '2024-03-07 17:40:13', '2024-03-07 17:40:13');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
