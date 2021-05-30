-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 09:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craft`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `forbidden` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'Administrator', 'Administrator', 'admin@gmail.com', '$2y$10$ase1lOsEePxm1MXjkmLMXOyhhgFqTrfbWXI8tx5uAcA7N1kd5.OAC', 'cki25990XgfYHmDAoF2OkJ11gYw4BtcqPugQG9Dfsul2NnCtc7Fr9gvKtoh4', 1, 0, 'en', NULL, '2021-01-20 04:16:39', '2021-01-20 04:36:22', '2021-01-20 04:36:15');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1, '9bc6daeb-81b9-47b1-b69d-a8d53921c150', 'avatar', 'avatar', 'avatar.png', 'image/png', 'media', 'media', 23924, '[]', '[]', '{\"thumb_200\":true,\"thumb_75\":true,\"thumb_150\":true}', '[]', 1, '2021-01-20 04:16:39', '2021-01-20 04:16:40');

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
(3, '2017_08_24_000000_create_activations_table', 1),
(4, '2017_08_24_000000_create_admin_activations_table', 1),
(5, '2017_08_24_000000_create_admin_password_resets_table', 1),
(6, '2017_08_24_000000_create_admin_users_table', 1),
(7, '2018_07_18_000000_create_wysiwyg_media_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table', 1),
(10, '2020_12_23_190338_create_media_table', 1),
(11, '2020_12_23_190338_create_permission_tables', 1),
(12, '2020_12_23_190343_fill_default_admin_user_and_permissions', 1),
(13, '2021_01_19_201629_create_translations_table', 2),
(14, '2021_01_19_203646_fill_permissions_for_role', 3),
(15, '2021_01_19_204007_fill_permissions_for_permission', 4),
(16, '2021_01_19_205003_create_table_geo_vars', 5),
(17, '2021_01_19_205133_fill_permissions_for_geo-var', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(2, 'admin.translation.index', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(3, 'admin.translation.edit', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(4, 'admin.translation.rescan', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(5, 'admin.admin-user.index', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(6, 'admin.admin-user.create', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(7, 'admin.admin-user.edit', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(8, 'admin.admin-user.delete', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(9, 'admin.upload', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(11, 'admin.role', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(12, 'admin.role.index', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(13, 'admin.role.create', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(14, 'admin.role.show', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(15, 'admin.role.edit', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(16, 'admin.role.delete', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(17, 'admin.role.bulk-delete', 'admin', '2021-01-20 04:36:49', '2021-01-20 04:36:49'),
(18, 'admin.permission', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(19, 'admin.permission.index', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(20, 'admin.permission.create', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(21, 'admin.permission.show', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(22, 'admin.permission.edit', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(23, 'admin.permission.delete', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(24, 'admin.permission.bulk-delete', 'admin', '2021-01-20 04:40:10', '2021-01-20 04:40:10'),
(25, 'admin.geo-var', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(26, 'admin.geo-var.index', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(27, 'admin.geo-var.create', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(28, 'admin.geo-var.show', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(29, 'admin.geo-var.edit', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(30, 'admin.geo-var.delete', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37'),
(31, 'admin.geo-var.bulk-delete', 'admin', '2021-01-20 04:51:37', '2021-01-20 04:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2021-01-20 04:16:39', '2021-01-20 04:16:39'),
(2, 'accountant', 'accountant', '2021-01-20 04:38:27', '2021-01-20 04:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`text`)),
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(4, '*', 'admin', 'admin-user.columns.first_name', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(5, '*', 'admin', 'admin-user.columns.last_name', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(6, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(7, '*', 'admin', 'admin-user.columns.password', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(8, '*', 'admin', 'admin-user.columns.password_repeat', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(9, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(10, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(11, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(12, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '[]', NULL, '2021-01-20 04:29:50', '2021-01-20 04:29:50', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(22, '*', 'admin', 'admin-user.columns.last_login_at', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(24, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(25, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(27, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(28, 'brackets/admin-ui', 'admin', 'btn.new', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(29, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(30, 'brackets/admin-auth', 'admin', 'profile_dropdown.profile', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(31, 'brackets/admin-auth', 'admin', 'profile_dropdown.password', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(32, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(33, 'brackets/admin-ui', 'admin', 'sidebar.content', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(34, 'brackets/admin-ui', 'admin', 'sidebar.settings', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(35, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(36, '*', 'admin', 'admin-user.actions.edit_profile', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(37, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(38, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(39, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(40, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(41, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(42, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(43, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(44, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(45, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(46, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(47, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(48, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(49, 'brackets/admin-auth', 'resets', 'email.line', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(50, 'brackets/admin-auth', 'resets', 'email.action', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(51, 'brackets/admin-auth', 'resets', 'email.notRequested', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(52, '*', 'auth', 'failed', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(53, '*', 'auth', 'throttle', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(54, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(55, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(56, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(57, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(58, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(59, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(60, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(61, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(62, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(63, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(64, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(65, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(66, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(67, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(68, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(69, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(70, '*', '*', 'Manage access', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(71, '*', '*', 'Translations', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL),
(72, '*', '*', 'Configuration', '[]', NULL, '2021-01-20 04:29:51', '2021-01-20 04:29:51', NULL);

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
-- Table structure for table `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indexes for table `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
