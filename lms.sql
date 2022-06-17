-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 07:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'IT', 'The IT department oversees the installation and maintenance of computer network systems within a company', '2022-04-18 00:12:32', '2022-04-24 09:44:37'),
(7, 'HR', 'Human resources', '2022-04-22 10:21:00', '2022-04-22 10:21:00'),
(8, 'Finance', 'The finance department ensures the adequate and timely provision of funds for the business\'s operations', '2022-04-24 09:40:29', '2022-04-24 09:40:29'),
(9, 'operations Management', 'administration of business practices to create the highest level of efficiency', '2022-04-24 09:42:47', '2022-04-24 09:42:47'),
(10, 'Marketing', 'Marketing and lead generation for IT companies', '2022-04-24 09:43:54', '2022-04-24 09:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IT Tech Lead', 'Leader of IT', '2022-04-08 03:59:56', '2022-04-08 03:59:56'),
(6, 'Jr Software Developer', 'entry-level software developers', '2022-04-22 10:20:04', '2022-04-22 10:20:04'),
(7, 'Recruiting Manager', 'Recruitment managers will work closely with our recruiters to manage sourcing, interviewing and employment processes', '2022-04-22 10:23:08', '2022-04-22 10:23:08'),
(8, 'Software Engineer', 'research, design and write new software programs', '2022-04-24 09:47:51', '2022-04-24 09:47:51'),
(9, 'Chief Architect', 'The Chief Architect designs technology architecture to align with enterprise standards, processes, procedures, and targets', '2022-04-24 09:49:01', '2022-04-24 09:49:01'),
(10, 'HR executive', 'HR Executive responsibilities include creating referral programs, updating HR policies and overseeing our hiring processes', '2022-04-24 09:49:51', '2022-04-24 09:49:51'),
(11, 'Account Executive', 'Elements of the account executive role include planning and coordination of account activity', '2022-04-24 10:00:23', '2022-04-24 10:00:23');

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
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Hold',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `e_id`, `name`, `email`, `leave_type_name`, `start_date`, `end_date`, `days`, `reason`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(10, '220005', 'Sakibur Rashid', 'sakibur@gmail.com', '10', '2022-04-15', '2022-04-20', 6, 'i need 5 days break for mental health as i earned this leave', 'ok take your leave', 'Approved', '2022-05-07 07:21:34', '2022-05-07 07:33:37'),
(11, '220004', 'Jubair hasan', 'jubair@gmail.com', '7', '2022-05-01', '2022-05-02', 2, 'i need 3 days leave for family purpose', 'Please try to adjust this week.Take it next week', 'Denied', '2022-05-07 08:00:21', '2022-05-07 08:02:03'),
(13, '220001', 'Toufik', 'toufikurrahman2@gmail.com', '3', '2022-05-06', '2022-05-09', 4, 'suffering from fever', 'ok take care', 'Approved', '2022-05-07 21:51:22', '2022-05-07 21:52:08'),
(23, '220004', 'Jubair hasan', 'jubair@gmail.com', '10', '2022-05-01', '2022-05-01', 1, NULL, NULL, 'Denied', '2022-05-10 11:55:11', '2022-05-10 11:57:57'),
(24, '220001', 'Toufik', 'toufikurrahman2@gmail.com', '7', '2022-05-08', '2022-05-11', 4, 'emergency', NULL, 'Approved', '2022-05-10 22:54:16', '2022-05-10 22:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `leaves_types`
--

CREATE TABLE `leaves_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves_types`
--

INSERT INTO `leaves_types` (`id`, `name`, `description`, `credit`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Sick Leave', 'Sick leave is paid time off from work that workers can use to stay home to address their health needs without losing pay', 15, 'Active', '2022-04-22 10:31:22', '2022-05-10 08:52:05'),
(5, 'Maternity Leave', 'Mothers are required to take four weeks’ leave after their baby is born', 120, 'Active', '2022-04-24 10:16:23', '2022-04-24 10:16:23'),
(7, 'Casual leave', 'Casual leave is taken by an employee for travel, vacation, rest, and family events', 10, 'Active', '2022-04-30 04:08:20', '2022-04-30 04:08:20'),
(8, 'Annual Leave', 'Every adult worker having after competition one year of continuous service in an establishment, shall able to claim annual leave', 14, 'Active', '2022-04-30 04:13:18', '2022-05-07 06:17:25'),
(9, 'Paternity Leave', 'The Paternity Leave is a leave offered to expectant fathers after a child is born', 30, 'Active', '2022-04-30 04:54:31', '2022-05-10 08:54:41'),
(10, 'Earn Leave', 'These are the leaves which are earned in the previous year and enjoyed in the preceding years', 10, 'Active', '2022-05-07 07:18:43', '2022-05-07 07:18:43');

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
(1, '2013_04_14_164617_create_leaves_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'employee',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `e_department`, `e_designation`, `dob`, `contact`, `address`, `email`, `email_verified_at`, `password`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2000-04-21', 1860447466, 'Uttara', 'admin@gmail.com', NULL, '$2y$10$T/jTUKonpjxjXJg6uE3Lw.ZuupaL9s.qvV1etIDY0S0ii7huq3dKm', '20220508030515.jpg', 'admin', NULL, '2022-05-05 15:30:57', '2022-05-07 21:50:15'),
(220001, 'Toufik', '4', '1', '1998-03-05', 1860447466, 'Khilkhet, Dhaka', 'toufikurrahman2@gmail.com', NULL, '$2y$10$xAmjwkMgR4FKsqc2SwPkhOrsWWg8b5x4ugAyxIO5.0G6hlRAsr9xG', '20220506050558.png', 'employee', NULL, '2022-05-05 23:59:58', '2022-05-05 23:59:58'),
(220002, 'Kabir', '7', '7', '2000-02-01', 1786320774, 'Uttara,Dhaka', 'rkabir8280@gmail.com', NULL, '$2y$10$Hl7bTOHWJpwtHQGRlXOsCeD/z7T5B/0Meh96x/g3HbXPjYCqYhfEW', '20220506060510.jpg', 'employee', NULL, '2022-05-06 00:03:49', '2022-05-06 00:04:10'),
(220003, 'Sania', '9', '11', '1996-06-06', 1786320774, 'Mirpur 1, Dhaka', 'sania@gmail.com', NULL, '$2y$10$EYNjhYSwP9FhudXJfdsIrO3xDUoEuKIv6bhVOu4w0adN/TO8VSNU2', '20220506040554.jpg', 'employee', NULL, '2022-05-06 10:30:54', '2022-05-06 10:30:54'),
(220004, 'Jubair hasan', '9', '8', '1999-05-07', 1748411476, 'Adabor,mohammadpur,dhaka', 'jubair@gmail.com', NULL, '$2y$10$49YG8LHANx/24kq6VQui8OjztKFJufYqxjz3MGHNX/lX88nLayQCG', '20220507010513.jpg', 'employee', NULL, '2022-05-07 07:14:13', '2022-05-07 07:56:53'),
(220005, 'Sakibur Rashid', '10', '11', '1996-06-07', 1718896606, 'Mirpur 1, Dhaka', 'sakibur@gmail.com', NULL, '$2y$10$aHWprtzW2Ip9ENd0ZRoj2eShsmVQUxFYKKnl1pPdW9F3AJHfFXGvC', '20220507010558.jpg', 'employee', NULL, '2022-05-07 07:17:12', '2022-05-07 07:57:58'),
(220006, 'Rabiul Haque', '4', '8', '1995-03-22', 1914553278, 'noddapara,kawla ,airport', 'rabiul@gmail.com', NULL, '$2y$10$5BShD00IF3LBMMi.NpZ62.XQTnBUanHTpllCD6R6UlXcvDtrpswaC', '20220510020514.png', 'employee', NULL, '2022-05-10 08:43:14', '2022-05-10 08:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `web_infos`
--

CREATE TABLE `web_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_infos`
--

INSERT INTO `web_infos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'Leave MS', '2022-05-10 13:31:20', '2022-05-10 13:33:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves_types`
--
ALTER TABLE `leaves_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leaves_types_name_unique` (`name`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_infos`
--
ALTER TABLE `web_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `leaves_types`
--
ALTER TABLE `leaves_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220007;

--
-- AUTO_INCREMENT for table `web_infos`
--
ALTER TABLE `web_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
