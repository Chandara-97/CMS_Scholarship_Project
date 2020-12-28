-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 06:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `view` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `content`, `category`, `status`, `view`, `image`, `created_at`, `updated_at`) VALUES
(1, 'First Post', 'Sophanon Chhoun', '<p><strong>ចក្ខុវិស័យ</strong></p><p>SmartEdu មានគោលដៅកសាងអ្នកដឹកនាំប្រកបដោយសមត្ថភាពសម្រាប់ប្រទេសកម្ពុជា។ យើងបានចូលរួមយ៉ាងសកម្មក្នុងការគាំទ្ររាជរដ្ឋាភិបាលកម្ពុជា ដើម្បីបង្កើតបុគ្គលដែលមានទេព្យកោសល្យ និង បំណងដ៏មោះមុតក្នុងការចូលរួមចំនែកអភិវឌ្ឍប្រទេសកម្ពុជានៅក្នុងយុគសម័យឌីជីថលនេះ។</p><p><strong>បេសកកម្ម</strong></p><p>នៅក្រុមហ៊ុន Smart Axiata យើងមានទស្សនៈវិស្ស័យដូចក្រុមហ៊ុនរបស់ក្រុម Axiata ក្នុងការកសាងអ្នកមានទេពកោសល្យ តាមរយៈកម្មវិធី SmartEdu។ យើងព្យាយាមរួមចំណែកក្នុងការងារនេះតាមរយៈទស្សនៈវិស័យរបស់យើង “អភិវឌ្ឍប្រទេសកម្ពុជាតាមរយៈការអប់រំ” ដែលជាមូលដ្ឋានគ្រឹះនៃការអប់រំ ការអភិវឌ្ឍន៍ និងភាពជាអ្នកដឹកនាំ ដែលស្ថិតនៅក្រោមម៉ាក ឈ្មោះថា SmartEdu ។</p><p>តាមរយៈកម្មវិធី SmartEdu យើងចង់ជម្រុញសិស្សវិទ្យាល័យប្រកបដោយភាពឆ្លាតវៃ បន្ដការសិក្សាថ្នាក់មហាវិទ្យាល័យ ហើយស្របពេលជាមួយគ្នានេះដែរផ្ដល់អោយបុគ្គលដែលមានទេពកោសល្យរបស់កម្ពុជានូវជំនាញ និងសម្ថភាពដែលយើងជឿថាជាតម្រូវការរបស់អ្នកដឹកនាំ និង CEO នាពេលអនាគត ដើម្បីប្រកួតប្រជែង និងដឹកនាំអាជីវកម្មទាំងក្នុងស្រុក និងក្រៅស្រុក។</p>', 'js', 'published', 126, 'RvaaRMzHjuL4T9Fkz9D3QHrceSJbEW5ripFRtiHg.png', '2020-07-21 19:28:03', '2020-07-22 03:01:12'),
(2, 'Smart Edu', 'Sophanon Chhoun', '<p>Following its launch in 2016, the SmartEdu Scholarship has provided over 50 Cambodian students with the opportunity to pursue a degree of their choosing, and you could be the next one.</p><p>The Scholarship Program is back and open for all Cambodian students who just completed their grade 12 examinations on 19 August 2019.</p><p>This year, Smart will provide scholarship for 20 top students nationwide. To show support for digital and ICT innovations, 10 places are reserved for students who want to pursue their studies at the National Institute of Posts, Telecoms and ICT.</p><p>The scholarships will cover university tuition fees until the students have finished their bachelor degrees. Successful applicants will receive a monthly allowance of 200USD for up to 5 years, as well as the opportunity to attend development programme and CSR outreach events.</p><p><strong>So who is eligible for the scholarship?</strong></p><p>Grade 12 students who just completed their examinations and plan to take up a degree at any of the universities recognized by the Ministry of Education, Youth and Sport (MoEYS) or the Ministry of Posts and Telecommunications of Cambodia (MPTC). The degree cannot take more than 5 years to complete.</p>', 'bootstrap', 'published', 11, 'cxQePsNM2sUqwW6kCih55Jgfv7tXFdAxH55m8teA.png', '2020-07-22 02:11:21', '2020-07-26 01:56:30'),
(3, 'Third', 'Sophanon Chhoun', '<p>Hello world</p>', 'bootstrap', 'published', 10, '4nssHAABifovrGNTmfM7fTvfikRXVf2a6A1DKPHj.jpeg', '2020-07-22 02:38:36', '2020-07-26 20:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_post_id` bigint(20) UNSIGNED NOT NULL,
  `comment_author` bigint(20) UNSIGNED NOT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_post_id`, `comment_author`, `comment_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hello world', 'approved', '2020-07-21 19:34:34', '2020-07-21 19:34:34'),
(2, 2, 1, 'Hello World', 'approved', '2020-07-26 01:56:30', '2020-07-26 01:56:30'),
(3, 3, 1, 'hi', 'approved', '2020-07-26 20:44:58', '2020-07-26 20:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_email` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello', 'World', '2020-07-21 19:34:55', '2020-07-21 19:34:55'),
(2, 1, 'hi', 'h', '2020-07-26 20:46:15', '2020-07-26 20:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `article_id`, `liked`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-07-22 03:01:12', '2020-07-22 03:01:12'),
(2, 1, 3, 0, '2020-07-22 03:01:17', '2020-07-22 03:01:26'),
(3, 1, 2, 1, '2020-07-26 01:56:10', '2020-07-26 01:56:10');

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
(4, '2020_07_19_144227_create_articles_table', 1),
(5, '2020_07_21_013357_create_contacts_table', 1),
(6, '2020_07_21_084704_create_likes_table', 1),
(7, '2020_04_04_000000_create_user_follower_table', 2),
(8, '2020_07_22_020724_create_comments_table', 3),
(9, '2020_07_22_033714_create_likes_table', 4),
(10, '2020_07_22_072145_create_likes_table', 5),
(11, '2020_07_22_094640_create_likes_table', 6),
(12, '2020_07_22_095918_create_likes_table', 7);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'subscriber',
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `image`, `dob`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sophanon Chhoun', 'chhounsophanon14@gmail.com', 'admin', 'CoAvO7ZJnwKrfdyzVSIqLO8marqEUDxdKRy7zif5.jpeg', '0000-00-00', NULL, '$2y$10$2ZbpcicgGzVJ6yPZnjEzA.5COFwDgmEG3nxHw9U8cM0B2XhSpqYIC', NULL, '2020-07-21 19:04:19', '2020-07-21 19:13:30'),
(2, 'dara', 'Dara@gmail.com', 'subscriber', 'YJV6I37wcGedQsvAPY5M7K3lGlQvRx72biGP9wA0.jpeg', '2020-07-22', NULL, '$2y$10$OdJI3xa5npHPpEFhLs6AGuPSuVu0ynP18eClajdCSnkBI9gQ.aVym', NULL, '2020-07-21 19:38:32', '2020-07-22 02:36:53'),
(3, 'david', 'david@gmail.com', 'subscriber', NULL, NULL, NULL, '$2y$10$P3Ydj8wclw4s1SgIrvkgxegRG2zEm5uLvVQnDmYsdJb57npvNOGAq', NULL, '2020-07-21 20:07:23', '2020-07-21 20:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `id` int(10) UNSIGNED NOT NULL,
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_comment_post_id_foreign` (`comment_post_id`),
  ADD KEY `comments_comment_author_foreign` (`comment_author`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_email_foreign` (`user_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`article_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_follower_following_id_index` (`following_id`),
  ADD KEY `user_follower_follower_id_index` (`follower_id`),
  ADD KEY `user_follower_accepted_at_index` (`accepted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_follower`
--
ALTER TABLE `user_follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_comment_author_foreign` FOREIGN KEY (`comment_author`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_comment_post_id_foreign` FOREIGN KEY (`comment_post_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_email_foreign` FOREIGN KEY (`user_email`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
