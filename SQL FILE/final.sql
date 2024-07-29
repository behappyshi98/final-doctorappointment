-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 05:57 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `choose_doctor` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `contact_preference` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `doctor_id`, `patient_name`, `contact_number`, `email`, `choose_doctor`, `department`, `appointment_date`, `contact_preference`, `created_at`, `updated_at`) VALUES
(4, 1, 3, 'user', '0743467879', 'user@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-05-31', 'phone', '2024-05-26 02:59:36', '2024-05-26 02:59:36'),
(5, 1, 3, 'user', '0743467879', 'user@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-05-31', 'email', '2024-05-26 04:31:51', '2024-05-26 04:31:51'),
(6, 1, 3, 'user', '0743467879', 'user@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-05-31', 'email', '2024-05-26 04:32:17', '2024-05-26 04:32:17'),
(9, 1, 3, 'user', '0743467879', 'user@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-05-31', 'email', '2024-05-26 04:43:46', '2024-05-26 04:43:46'),
(10, 1, 1, 'user', '0773456789', 'user@gmail.com', 'fathima amra', 'Neurology', '2024-05-30', 'email', '2024-05-26 04:58:09', '2024-05-26 04:58:09'),
(11, 1, 1, 'user', '2345675465', 'user@gmail.com', 'fathima amra', 'Neurology', '2024-05-30', 'email', '2024-05-26 04:59:01', '2024-05-26 04:59:01'),
(13, 1, 3, 'shehan', '0756474577', 'slakmaligunasingha@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-07-02', 'email', '2024-06-01 03:18:53', '2024-06-01 03:18:53'),
(14, 1, 3, 'shehan', '0756474577', 'slakmaligunasingha@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-07-02', 'email', '2024-06-01 03:22:47', '2024-06-01 03:22:47'),
(15, 1, 3, 'shehan', '0754343544', 'slakmaligunasingha@gmail.com', 'Sudarshana Herath', 'Cardiology', '2024-07-02', 'email', '2024-06-01 05:17:05', '2024-06-01 05:17:05'),
(16, 1, 4, 'hg', '0743467879', 'slakmaligunasingha@gmail.com', 'Kalpana Munasinghe', 'Hepatology', '2024-07-02', 'email', '2024-06-01 05:58:13', '2024-06-01 05:58:13'),
(17, 1, 4, 'shehan', '0743467879', 'slakmaligunasingha@gmail.com', 'Kalpana Munasinghe', 'Cardiology', '2024-07-02', 'email', '2024-06-01 09:04:04', '2024-06-01 09:04:04'),
(18, 1, 1, 'hg', '0743467879', 'admffdfdfin@gmail.com', 'fathima amra', 'Neurology', '2024-06-30', 'email', '2024-06-01 09:06:53', '2024-06-01 09:06:53'),
(19, 1, 4, 'shehan', '0743467879', 'shehanrox185@gmail.com', 'Kalpana Munasinghe', 'Cardiology', '2024-07-02', 'email', '2024-06-01 09:14:38', '2024-06-01 09:14:38'),
(20, 1, 1, 'shiwanthi', '0773456789', 'slakmaligunasingha@gmail.com', 'fathima amra', 'Neurology', '2024-06-12', 'phone', '2024-06-01 10:18:10', '2024-06-01 10:18:10'),
(21, 1, 1, 'lakmali', '0773456789', 'slakmaligunasingha@gmail.com', 'fathima amra', 'Neurology', '2024-06-12', 'email', '2024-06-01 10:20:21', '2024-06-01 10:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` mediumtext DEFAULT NULL,
  `contact_number` varchar(10) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `maximum_appointment` int(25) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialist`, `gender`, `email`, `image`, `contact_number`, `hospital`, `room_number`, `appointment_date`, `maximum_appointment`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'fathima amra', 'Neurologist', 'female', 'dula@gmail.com', '/storage/photo/1715066353.jpg', '0755434235', 'kurunegala', '234ft', '2024-06-12', 2, '04:15:00', '18:20:00', '2024-04-15 02:49:35', '2024-06-01 10:05:09'),
(3, 'Sudarshana Herath', 'Hematologist', 'male', 'dsd@gmail.com', '/storage/photo/1715066373.jpg', '0377556566', 'kurunegala', 'yyy55', '2024-06-13', 4, '03:00:00', '17:00:00', '2024-04-15 03:03:00', '2024-06-01 10:05:58'),
(4, 'Kalpana Munasinghe', 'cardiologist', 'female', 'kal@gmail.com', '/storage/photo/1715059633.jpeg', '0782345558', 'dfdff', '5445g', '2024-06-14', 6, '04:14:00', '18:14:00', '2024-05-05 05:14:48', '2024-06-01 10:07:00');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_04_12_164912_create_doctors_table', 2),
(14, '2024_05_19_035511_create_feedback_table', 4),
(15, '2024_05_25_065039_add_contact_number_to_users_table', 4),
(20, '2024_05_26_025636_create_appointments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('la@gmail.com', '$2y$10$BHLPkq4wPb2qJH6fVz2ZRu510yY5mzJbS//VWaFYw4NMc4w4qOm0G', '2024-04-23 02:23:53');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `dateofbirth` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `contact_number`, `user_type`, `dateofbirth`, `gender`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', '', 'user', '1992-07-30', 'male', 'Wariyapola,kurunegala', 'user@gmail.com', NULL, '$2y$10$OafjO.5cnTtGdXVtj2xF1OXQutFrlfaD6SmFN7pcrxXpQOhF3Qrku', NULL, '2024-04-11 09:46:03', '2024-04-11 09:46:03'),
(2, 'admin', '', 'admin', NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$3k2gMz/e43kpZttY0IFgBuHYz1tGL/igClGZ4PrVnX4zGNxjzRNoC', NULL, '2024-04-11 09:47:28', '2024-04-11 09:47:28'),
(3, 'doctor', '', 'doctor', NULL, NULL, NULL, 'doctor@gmail.com', NULL, '$2y$10$2H6arvLDGAF.K95g6kaOVONFvfQyVJ8zZeqLFpkpTb6W/IyRxHRV6', NULL, '2024-04-11 10:24:05', '2024-04-11 10:24:05'),
(5, 'gayan', '', 'user', '1995-06-19', 'male', 'sdsdsd', 'gaya@gmail.com', NULL, '$2y$10$3eA8nSSLbmhVaSje5C0A1uYPOgDShDs1oUd0mvJriLxCbW6eqqBsm', NULL, '2024-04-17 03:56:40', '2024-04-17 03:56:40'),
(6, 'sathya', '', 'user', '2000-09-17', 'female', 'uyandana', 'sathya@gmail.com', NULL, '$2y$10$7bDD.C1Mg.E/mxUVNsEqYuPBeq3B8gnejOkS/E.nzhiLbiTqJaZSq', NULL, '2024-05-04 01:38:09', '2024-05-04 01:38:09'),
(7, 'dilshani hewage', '', 'user', '1996-01-22', 'female', 'wariyapola', 'dilshani@gmail.com', NULL, '$2y$10$8wIRVlwXcungDUmWfEADn.4rl72ZqFFx4Mo1YC/gK39Oayuy7SjjW', NULL, '2024-05-04 04:54:02', '2024-05-04 04:54:02'),
(9, 'himali wijesooriya', '', 'user', '1996-01-14', 'female', 'warakapola', 'himali@gmail.com', NULL, '$2y$10$RtIUd6KLg8GvZdJCri/GreFp625ZJwoH8sOstnl0vRHn.SC2hSOHq', NULL, '2024-05-18 05:05:34', '2024-05-18 05:05:34'),
(10, 'saduni', '', 'user', '2004-01-04', 'female', 'wariyapola', 'saduni@gmail.com', NULL, '$2y$10$L68wGFiVKnSpvr7nBxeEj.o.XJanp8EDBDzgucUxuiJlUE/ouhde.', NULL, '2024-05-21 08:02:14', '2024-05-21 08:02:14'),
(12, 'fathima naflia', '', 'user', '1989-05-24', 'female', 'wariyapola', 'fathima@gmail.com', NULL, '$2y$10$wta6cWWwfuZhmwJO1hmH/OX8Dhg6ZHou1ZagxgHnO5xFMjXU/PNmC', NULL, '2024-05-21 08:07:37', '2024-05-21 08:07:37'),
(13, 'gangula', '', 'user', '1992-10-19', 'male', 'malkaduwawa', 'gangula@gmail.com', NULL, '$2y$10$gRT.WyG7D/wgYFlbaiKYLOQeYkzrdupJmFf2yLW05NlRIoZb0PirS', NULL, '2024-05-21 08:10:27', '2024-05-21 08:10:27'),
(17, 'nathasha', '0785454477', 'user', '1999-10-03', 'female', 'wariyapola', 'nathasha@gmail.com', NULL, '$2y$10$MYc2T/ZeoaBwKOJlXKdF/.BZkA0xCvmSPqwZxprytyYLejqndbrhO', NULL, '2024-05-25 02:04:32', '2024-05-25 02:04:32'),
(18, 'gimhan', '0776554433', 'user', '1997-10-22', 'male', 'malkaduwawa', 'gim@gmail.com', NULL, '$2y$10$HxEgKNQ5Jb6IqdTF8UuWVOrjtB5WUVkzD51lkZiWrQ2akF.f7bUNm', NULL, '2024-05-25 21:37:38', '2024-05-25 21:37:38'),
(19, 'kalani', '0765454544', 'user', '1999-05-09', 'female', 'wariyapola', 'kalani@gmail.com', NULL, '$2y$10$ty9iCaf2C5wEwh.snjkwt.Kzqm7KtFy/aVrg72IErvBInZY.XIzw6', NULL, '2024-05-26 00:37:34', '2024-05-26 00:37:34'),
(20, 'viraj', '0754343544', 'user', '2001-10-21', 'male', 'wariyapola', 'viraj@gmail.com', NULL, '$2y$10$ffjlTqDR41.p/B06pbs07.c1YwYeJUwCzrkm7jR5oE3bZlg2pF2gS', NULL, '2024-05-26 02:24:53', '2024-05-26 02:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
