-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 06:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tx_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `client_id`, `room_id`, `tx_id`, `status`, `date`, `created_at`, `updated_at`) VALUES
(18, '18', '9', '53653q7', '1', '2018-10-20', '2018-10-20 09:46:33', '2018-10-20 12:17:35'),
(19, '19', '9', '333355y', '1', '2018-10-20', '2018-10-20 09:49:04', '2018-10-20 12:17:41'),
(20, '20', '13', 'we647457', '0', '2018-10-20', '2018-10-20 12:10:48', '2018-10-20 12:10:48'),
(21, '21', '13', '3567537h64', '0', '2018-10-20', '2018-10-20 12:11:10', '2018-10-20 12:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'taiser', 'admin@admin.com', 'test', '2018-10-13 08:03:11', '2018-10-13 08:03:11'),
(2, 'taiser', 'admin@admin.com', 'test', '2018-10-13 08:35:03', '2018-10-13 08:35:03'),
(3, 'taiser', 'taiser@email.com', 'test', '2018-10-13 08:50:19', '2018-10-13 08:50:19'),
(4, 'taiser', 'taiser@email.com', 'test', '2018-10-14 13:32:53', '2018-10-14 13:32:53'),
(5, 'taiser', 'sm@gmail.com', 'test', '2018-10-14 13:33:13', '2018-10-14 13:33:13'),
(6, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:43:39', '2018-10-14 13:43:39'),
(7, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:44:04', '2018-10-14 13:44:04'),
(8, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:44:57', '2018-10-14 13:44:57'),
(9, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:46:04', '2018-10-14 13:46:04'),
(10, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:46:30', '2018-10-14 13:46:30'),
(11, 'taiser', 'taiser@gmail.com', 'test', '2018-10-14 13:48:04', '2018-10-14 13:48:04'),
(12, 'taiser', 'smt@email.com', 'test', '2018-10-14 13:51:31', '2018-10-14 13:51:31'),
(13, 'rahim', 'it@epichcl.com', 'test', '2018-10-14 13:56:39', '2018-10-14 13:56:39'),
(14, 'taiser', 'admin@admin.com', 'test', '2018-10-20 07:39:20', '2018-10-20 07:39:20'),
(15, 'taiser', 'admin@admin.com', 'test', '2018-10-20 07:46:19', '2018-10-20 07:46:19'),
(16, 'taiser', 'admin@admin.com', 'test', '2018-10-20 08:20:55', '2018-10-20 08:20:55'),
(17, 'taiser', 'admin@admin.com', 'gg', '2018-10-20 08:37:12', '2018-10-20 08:37:12'),
(18, 'taiser', 'smt@email.com', 'test', '2018-10-20 09:46:33', '2018-10-20 09:46:33'),
(19, 'taiser', 'taiser@gmail.com', 'test', '2018-10-20 09:49:04', '2018-10-20 09:49:04'),
(20, 'taiser', 'admin@admin.com', 'test', '2018-10-20 12:10:48', '2018-10-20 12:10:48'),
(21, 'taiser', 'taiser@email.com', 'test', '2018-10-20 12:11:10', '2018-10-20 12:11:10'),
(22, 'taiser', 'taiser@email.com', 'test', '2018-10-20 12:20:00', '2018-10-20 12:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Safina', '2018-10-07 11:34:03', '2018-10-07 11:34:03'),
(2, 'Dream', '2018-10-08 11:56:53', '2018-10-08 11:56:53'),
(3, 'Comfort', '2018-10-08 11:57:04', '2018-10-08 11:57:04'),
(4, 'University hostel', '2018-10-14 11:13:00', '2018-10-14 11:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_23_100526_create_customers_table', 1),
(4, '2018_10_06_172144_create_rooms_table', 2),
(5, '2018_10_07_164631_create_hotels_table', 3),
(6, '2018_10_12_171605_create_clients_table', 4),
(7, '2018_10_12_171728_create_bookings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `details`, `hotel_id`, `image`, `price`, `number_of_room`, `created_at`, `updated_at`) VALUES
(9, 'Double room', 'test', '4', 'public/image/153954293330772173_1549105201865019_1601390699_o.png', '1000', '2', '2018-10-14 12:48:53', '2018-10-14 13:42:11'),
(13, 'Single room', 'test', '1', 'public/image/1540057299img_5.jpg', '1000', '2', '2018-10-20 11:41:39', '2018-10-20 11:41:39'),
(14, 'Family room', 'test', '1', 'public/image/1540059503img_1.jpg', '1000', '1', '2018-10-20 12:18:23', '2018-10-20 12:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SM Taiser', 'smtaiser123@gmail.com', '$2y$10$7/HWzaWVbWH6BL1EYLJow.KBr5fBLOTEH5.3FipWCQ8sKQJX5ehlu', NULL, '2018-05-04 05:54:56', '2018-05-04 05:54:56'),
(2, 'taiser', 'admin@admin.com', '$2y$10$v9hodQzM.9xELWVuKvtl/.WgCLBZCEMQLw4ZzjcueqSDkJ3Lxtmvi', 'G6LSaK8ithDQCYS5ZmC2D4bLxWsiAk3dQVG5isiC1lAgLDLzmPQfnKZrIb74', '2018-10-05 00:15:33', '2018-10-05 00:15:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
