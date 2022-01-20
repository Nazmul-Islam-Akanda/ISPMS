-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 04:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `category_id`, `asset_name`, `quantity`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'AC-Net F-90X Optical Fiber Splicer Machine', 2, '2', 'Active', '2021-12-31 04:04:37', '2021-12-31 04:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `assets_categories`
--

CREATE TABLE `assets_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets_categories`
--

INSERT INTO `assets_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Splicer Machine', '2021-12-04 02:46:41', '2021-12-04 02:46:41'),
(4, 'ONU', '2021-12-04 03:20:49', '2021-12-04 03:20:49'),
(5, 'Ledger Light', '2021-12-04 03:22:29', '2021-12-04 03:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `info`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sector-10', 'All sector', '1', '2021-11-27 09:40:58', '2021-11-27 09:40:58'),
(2, 'Sector-11', 'All sector', '2', '2021-11-27 09:56:01', '2021-11-27 09:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolver_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Hold',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `customer_id`, `resolver_id`, `complain`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nazmul@gmail.com', '2', 'Network Slow', 'Hold', '2022-01-01 06:39:31', '2022-01-01 06:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `customer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lineman_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `block_id`, `customer_name`, `address`, `contact_no`, `email`, `customer_id`, `date`, `customer_type`, `bill_type`, `package_id`, `charge`, `service_charge`, `department_id`, `lineman_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Nazmul', 'House-4,Road-12/B,Sector-10', 1683674237, 'nazmul@gmail.com', 'nazmul@gmail.com', '2021-12-30', 'Home', 'Prepaid', '1', NULL, '1000', '1', '2', 'Active', '20211230091206.jpg', '2021-12-30 03:06:06', '2021-12-30 03:06:06'),
(5, '2', 'Nazmul Naeem', 'House-4, Road-13/B, Sector-11', 1725893585, 'nazmulnaeem@gmail.com', 'nazmulnaeem@gmail.com', '2022-01-05', 'Office', 'Post paid', '2', NULL, NULL, '22', '16', 'Active', '20220105010120.jpg', '2022-01-05 07:51:20', '2022-01-05 07:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers_i_p_m_a_c_s`
--

CREATE TABLE `customers_i_p_m_a_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_i_p_m_a_c_s`
--

INSERT INTO `customers_i_p_m_a_c_s` (`id`, `customer_name_id`, `customer_id_id`, `connection_type`, `ip`, `mac`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Dedicated', '127.16.1.0', NULL, '2021-12-15 12:37:40', '2021-12-15 12:37:40'),
(4, '5', '5', 'Shared', '127.16.1.1', '128.24.0.1', '2022-01-05 07:59:54', '2022-01-05 07:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Technical', '2021-11-27 09:39:52', '2021-11-27 09:39:52'),
(2, 'Account', '2021-11-27 09:39:56', '2021-11-27 09:39:56'),
(22, 'Admin', '2022-01-05 05:06:40', '2022-01-05 05:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `employees_salaries`
--

CREATE TABLE `employees_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees_salaries`
--

INSERT INTO `employees_salaries` (`id`, `employee_id`, `date`, `paid`, `advance`, `bonus`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '2021-12-31', '10000', NULL, NULL, 'Active', '2021-12-31 07:53:20', '2021-12-31 07:53:20'),
(2, '2', '2021-12-31', '150000', NULL, NULL, 'Active', '2021-12-31 07:53:29', '2021-12-31 07:53:29');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_16_053620_create_departments_table', 1),
(6, '2021_11_27_121058_create_blocks_table', 1),
(7, '2021_11_27_181343_create_packages_table', 2),
(10, '2021_12_03_112116_create_mobile_bankings_table', 4),
(12, '2021_11_30_091218_create_site_infos_table', 5),
(13, '2021_12_04_083113_create_assets_categories_table', 6),
(18, '2021_12_15_172220_create_customers_i_p_m_a_c_s_table', 8),
(32, '2014_10_12_000000_create_users_table', 9),
(41, '2021_12_12_175406_create_customers_table', 10),
(45, '2021_12_30_093833_create_payments_table', 11),
(47, '2021_12_31_093414_create_assets_table', 12),
(49, '2021_12_31_133716_create_employees_salaries_table', 13),
(56, '2022_01_01_120215_create_complains_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_bankings`
--

CREATE TABLE `mobile_bankings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_bankings`
--

INSERT INTO `mobile_bankings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'bKash', '2021-12-03 05:48:34', '2021-12-03 05:48:34'),
(3, 'Rocket', '2021-12-03 05:51:22', '2021-12-03 05:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, '3mb', 500, '2021-11-27 12:17:47', '2021-11-27 12:17:47'),
(2, '10mb', 800, '2021-11-27 12:20:38', '2021-11-27 12:20:38');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collector_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_banking_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txnid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_name_id`, `customer_id_id`, `due`, `advance`, `payment`, `month`, `year`, `collector_id`, `discount`, `reason`, `mobile_banking_id`, `number`, `txnid`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL, 400, 'December', '2021', '1', '100', '1st service', NULL, NULL, NULL, '2021-12-30 09:17:10', '2021-12-30 09:17:10'),
(2, 'nz', 'nz@gmail.com', NULL, NULL, 800, 'January', '2021', NULL, NULL, NULL, '2', '01683674237', '124567', '2021-12-30 09:17:50', '2021-12-30 09:17:50');

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
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_banking_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `company_name`, `contact_info`, `company_email`, `company_address`, `business_area`, `mobile_banking_info`, `opening_hours`, `logo`, `created_at`, `updated_at`) VALUES
(4, 'Catch Net Ltd.', 'Gp: 01735674896 Airtel:01689674984', 'CatchNet&U@gmail.com', 'House-4, Road-13/B, Sector-10', 'Uttara, Dhaka-1230', 'bKash Personal: 01683675478', 'Saturday-Thursday: 9:00 AM- 6:00 PM', '20211203021258.jpg', '2021-12-03 08:47:58', '2021-12-03 08:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_varified_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact_no`, `email`, `email_varified_at`, `user_id`, `password`, `department_id`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nazmul Islam Akanda', 1725869365, '18103192nazmul@gmail.com', NULL, '18103192nazmul@gmail.com', '$2y$10$cDxA0w0sR96xBSH3GdbJ8.gknU9Xn6wDDRyC6c99IcNMVpJ09ypyC', '1', 'Technician', '20211227071258.jpg', NULL, '2021-12-27 13:23:58', '2021-12-27 13:23:58'),
(3, 'Nazmul Islam', 1683594525, 'nazmulislam@gmail.com', NULL, 'nazmulislam@gmail.com', '$2y$10$AiUyqGHRu6pJoWVfs1eLsOV8zb5/B2dDl2Ue/NwzYiD/.Yqpofnem', '2', 'Accountant', '20211227071244.jpg', NULL, '2021-12-27 13:24:44', '2021-12-27 13:24:44'),
(4, 'Nazmul', 1683674237, 'nazmul@gmail.com', NULL, 'nazmul@gmail.com', '$2y$10$c0nMsqVL3iG/hlnEgEDhkuZ4qDvuMv5WEjTZ8gZMrWd5odU5nr7F.', NULL, 'Customer', '20220102090107.jpg', NULL, '2022-01-02 03:21:07', '2022-01-05 06:43:03'),
(16, 'Admin', 1683674237, 'admin@gmail.com', NULL, 'admin@gmail.com', '$2y$10$ifWDTJkI3OJ3p0X7x8LYdeQ4AQqCTZQgMuDrw.SB.TQ2gQlSEv2ZG', '22', 'Admin', '20220105010100.jpg', NULL, '2022-01-05 07:46:33', '2022-01-05 07:47:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets_categories`
--
ALTER TABLE `assets_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_i_p_m_a_c_s`
--
ALTER TABLE `customers_i_p_m_a_c_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_salaries`
--
ALTER TABLE `employees_salaries`
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
-- Indexes for table `mobile_bankings`
--
ALTER TABLE `mobile_bankings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_categories`
--
ALTER TABLE `assets_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers_i_p_m_a_c_s`
--
ALTER TABLE `customers_i_p_m_a_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employees_salaries`
--
ALTER TABLE `employees_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `mobile_bankings`
--
ALTER TABLE `mobile_bankings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
