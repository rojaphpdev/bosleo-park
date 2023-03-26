-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 01:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cultivar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harvesting_date` datetime NOT NULL,
  `weight` int(11) NOT NULL,
  `auction_started` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`id`, `seller_id`, `cultivar`, `origin_country`, `harvesting_date`, `weight`, `auction_started`, `starting_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Red Dacca', 'Costa Rica', '2018-06-14 00:00:00', 500, 'true', '10', '2023-03-26 05:20:33', '2023-03-26 05:43:49');

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
(3, '2023_03_25_171801_create_usersapi_table', 2),
(4, '2023_03_26_091554_create_lots_table', 3);

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usersapi`
--

CREATE TABLE `usersapi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersapi`
--

INSERT INTO `usersapi` (`id`, `gender`, `title`, `first_name`, `last_name`, `street`, `city`, `state`, `country`, `postcode`, `email`, `phone`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'female', 'Miss', 'Vickie', 'Banks', 'Eason Rd', 'Busselton', 'Northern Territory', 'Australia', '3660', 'vickie.banks@example.com', '03-2140-6054', 'https://randomuser.me/api/portraits/women/13.jpg', '2023-03-26 00:18:11', '2023-03-26 00:18:11'),
(2, 'female', 'Miss', 'Lidia', 'Gutiérrez', 'Calle del Barquillo', 'Gandía', 'Asturias', 'Spain', '99255', 'lidia.gutierrez@example.com', '930-096-025', 'https://randomuser.me/api/portraits/women/26.jpg', '2023-03-26 00:23:34', '2023-03-26 00:23:34'),
(3, 'male', 'Mr', 'Deniz', 'Tütüncü', 'Filistin Cd', 'Ordu', 'Eskişehir', 'Turkey', '16825', 'deniz.tutuncu@example.com', '(882)-125-3758', 'https://randomuser.me/api/portraits/men/40.jpg', '2023-03-26 00:24:29', '2023-03-26 00:24:29'),
(4, 'female', 'Miss', 'Ranjani', 'Naik', 'Gandhi Maidan Marg', 'Sambalpur', 'Uttarakhand', 'India', '55212', 'ranjani.naik@example.com', '9497523707', 'https://randomuser.me/api/portraits/women/24.jpg', '2023-03-26 00:24:56', '2023-03-26 00:24:56'),
(5, 'female', 'Ms', 'Jackie', 'Hudson', 'Fairview St', 'Wichita', 'Delaware', 'United States', '31835', 'jackie.hudson@example.com', '(435) 383-2386', 'https://randomuser.me/api/portraits/women/73.jpg', '2023-03-26 00:59:32', '2023-03-26 02:11:04'),
(6, 'male', 'Mr', 'Tristan', 'Curtis', 'Frances Ct', 'Atlanta', 'Connecticut', 'United States', '10417', 'tristan.curtis@example.com', '(394) 459-9907', 'https://randomuser.me/api/portraits/men/46.jpg', '2023-03-26 01:24:22', '2023-03-26 01:24:22'),
(7, 'female', 'Ms', 'Gabrielle', 'Tremblay', 'Balmoral St', 'Oakville', 'Yukon', 'Canada', 'C2S 0S3', 'gabrielle.tremblay@example.com', 'R16 H72-4440', 'https://randomuser.me/api/portraits/women/51.jpg', '2023-03-26 01:47:51', '2023-03-26 01:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersapi`
--
ALTER TABLE `usersapi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersapi`
--
ALTER TABLE `usersapi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
