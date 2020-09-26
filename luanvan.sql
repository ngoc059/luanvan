-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 26, 2020 lúc 07:54 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `luanvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint(20) DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_corred` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id`, `name`, `type`, `question_id`, `description`, `path`, `is_corred`, `created_at`, `updated_at`) VALUES
(5, '红色', NULL, 6, 'Màu sắc cơ bản trong bảng màu', NULL, '1', '2020-06-11 12:23:19', '2020-06-11 12:23:19'),
(6, '黑色', NULL, 6, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:23:20', '2020-06-11 12:23:20'),
(7, '黄色', NULL, 6, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:23:20', '2020-06-11 12:23:20'),
(8, '黄色', NULL, 6, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:23:20', '2020-06-11 12:23:20'),
(9, '白色', NULL, 7, 'Màu sắc cơ bản trong bảng màu', NULL, '1', '2020-06-11 12:25:29', '2020-06-11 12:25:29'),
(10, '黑色', NULL, 7, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:25:29', '2020-06-11 12:25:29'),
(11, '黄色', NULL, 7, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:25:29', '2020-06-11 12:25:29'),
(12, '黄色', NULL, 7, 'Màu sắc cơ bản trong bảng màu', NULL, '0', '2020-06-11 12:25:29', '2020-06-11 12:25:29'),
(13, '粉色', NULL, 17, 'Màu hồng', NULL, '1', '2020-07-13 02:20:18', '2020-07-13 02:20:18'),
(14, '黑色', NULL, 17, 'Màu hồng', NULL, '0', '2020-07-13 02:20:18', '2020-07-13 02:20:18'),
(15, '黄色', NULL, 17, 'Màu hồng', NULL, '0', '2020-07-13 02:20:18', '2020-07-13 02:20:18'),
(16, '棕色', NULL, 17, 'Màu hồng', NULL, '0', '2020-07-13 02:20:18', '2020-07-13 02:20:18'),
(17, '黑色', NULL, 18, 'Màu đen', NULL, '1', '2020-07-13 02:21:35', '2020-07-13 02:21:35'),
(18, '绿色', NULL, 18, 'Màu đen', NULL, '0', '2020-07-13 02:21:35', '2020-07-13 02:21:35'),
(19, '黄色', NULL, 18, 'Màu đen', NULL, '0', '2020-07-13 02:21:35', '2020-07-13 02:21:35'),
(20, '紫色', NULL, 18, 'Màu đen', NULL, '0', '2020-07-13 02:21:35', '2020-07-13 02:21:35'),
(21, '粉色', NULL, 29, 'Màu hồng', NULL, '1', '2020-07-13 09:03:29', '2020-07-13 09:03:29'),
(22, '黃色', NULL, 29, 'Màu hồng', NULL, '0', '2020-07-13 09:03:29', '2020-07-13 09:03:29'),
(23, '棕色', NULL, 29, 'Màu hồng', NULL, '0', '2020-07-13 09:03:29', '2020-07-13 09:03:29'),
(24, '棕色', NULL, 29, 'Màu hồng', NULL, '0', '2020-07-13 09:03:29', '2020-07-13 09:03:29'),
(25, '二', NULL, 31, 'Số 2', NULL, '1', '2020-07-13 09:26:59', '2020-07-13 09:26:59'),
(26, '六', NULL, 31, 'Số 6', NULL, '0', '2020-07-13 09:26:59', '2020-07-13 09:26:59'),
(27, '九', NULL, 31, 'Số 9', NULL, '0', '2020-07-13 09:26:59', '2020-07-13 09:26:59'),
(28, '一', NULL, 31, 'Số 6', NULL, '0', '2020-07-13 09:26:59', '2020-07-13 09:26:59'),
(29, '九', NULL, 32, 'Số 9', NULL, '1', '2020-07-13 09:27:47', '2020-07-13 09:27:47'),
(30, '二', NULL, 32, 'Số 9', NULL, '0', '2020-07-13 09:27:47', '2020-07-13 09:27:47'),
(31, '九', NULL, 32, 'Số 9', NULL, '0', '2020-07-13 09:27:47', '2020-07-13 09:27:47'),
(32, '九', NULL, 32, 'Số 9', NULL, '0', '2020-07-13 09:27:47', '2020-07-13 09:27:47'),
(33, '六', NULL, 43, 'Số 6', NULL, '1', '2020-07-13 11:29:05', '2020-07-13 11:29:05'),
(34, '七', NULL, 43, 'Số 6', NULL, '0', '2020-07-13 11:29:05', '2020-07-13 11:29:05'),
(35, '八', NULL, 43, 'Số 6', NULL, '0', '2020-07-13 11:29:05', '2020-07-13 11:29:05'),
(36, '八', NULL, 43, 'Số 6', NULL, '0', '2020-07-13 11:29:05', '2020-07-13 11:29:05'),
(37, '十一', NULL, 44, 'Số 11', NULL, '1', '2020-07-13 11:30:09', '2020-07-13 11:30:09'),
(38, '十', NULL, 44, 'Số 11', NULL, '0', '2020-07-13 11:30:09', '2020-07-13 11:30:09'),
(39, '六', NULL, 44, 'Số 11', NULL, '0', '2020-07-13 11:30:09', '2020-07-13 11:30:09'),
(40, '六', NULL, 44, 'Số 11', NULL, '0', '2020-07-13 11:30:10', '2020-07-13 11:30:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `users_id`, `lesson_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 1, 5, 'hay', '2020-06-25 19:08:08', '2020-06-25 19:08:08'),
(4, 1, 23, 'd', '2020-07-13 07:19:13', '2020-07-13 07:19:13'),
(5, 1, 23, 'asd', '2020-07-13 07:19:30', '2020-07-13 07:19:30'),
(6, 1, 23, 'sad', '2020-07-13 07:19:34', '2020-07-13 07:19:34'),
(7, 1, 23, 'dd', '2020-07-13 07:30:06', '2020-07-13 07:30:06'),
(8, 1, 23, 'dsv', '2020-07-13 07:30:22', '2020-07-13 07:30:22'),
(9, 1, 23, 'sa', '2020-07-13 07:30:36', '2020-07-13 07:30:36'),
(10, 1, 24, 'dsa', '2020-07-13 07:52:03', '2020-07-13 07:52:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL DEFAULT 50,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indexLesson` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `theme_id`, `description`, `is_finish`, `experience`, `created_at`, `updated_at`, `indexLesson`) VALUES
(5, 'Bài 1', 18, 'Màu sắc cơ bản trong bảng màu', '0', 50, '2020-06-11 12:18:21', '2020-07-10 09:01:02', 1),
(10, 'Bài 1', 17, 'Số lượng', '0', 50, '2020-06-26 02:46:10', '2020-06-26 02:46:10', 1),
(12, 'Bài 2', 17, 'Số lượng', '0', 50, '2020-06-26 02:54:39', '2020-07-12 07:39:35', 1),
(23, 'Bài 1', 22, 'Màu sắc cơ bản trong bảng màu', '0', 50, '2020-07-12 07:40:10', '2020-07-12 07:40:10', 0),
(24, 'Bài 2', 22, 'Màu sắc cơ bản trong bảng màu', '0', 50, '2020-07-12 07:41:00', '2020-07-12 07:41:00', 1),
(25, 'Bài 1', 23, 'Các thành viên trong gia đình', '0', 50, '2020-07-12 07:42:24', '2020-07-12 07:42:24', 0),
(26, 'Bài 1', 24, 'Cây cỏ thiên nhiên', '0', 50, '2020-07-12 07:51:22', '2020-07-12 07:51:22', 0),
(34, 'Bài 2', 24, 'Thiên Nhiên', '0', 50, '2020-07-12 08:17:32', '2020-07-12 08:17:32', 1),
(35, 'Bài 2', 23, 'Gia đình', '0', 50, '2020-07-12 08:21:56', '2020-07-12 08:21:56', 1),
(36, 'Bài 1', 25, 'Con vật', '0', 50, '2020-07-12 08:22:39', '2020-07-12 08:22:39', 0),
(37, 'Bài 2', 25, 'Con vật', '0', 50, '2020-07-12 08:23:13', '2020-07-12 08:23:13', 1),
(38, 'Bài 3', 25, 'Con vật', '0', 50, '2020-07-12 08:23:54', '2020-07-12 08:23:54', 1),
(39, 'Bài 1', 26, 'Quốc gia', '0', 50, '2020-07-12 08:25:28', '2020-07-12 08:25:28', 0),
(40, 'Bài 2', 26, 'Quốc gia', '0', 50, '2020-07-12 08:25:54', '2020-07-12 08:25:54', 1),
(41, 'Bài 3', 26, 'Quốc gia', '0', 50, '2020-07-12 08:26:23', '2020-07-12 08:26:23', 1),
(42, 'Bài 1', 27, 'Mua sắm', '0', 50, '2020-07-12 08:26:50', '2020-07-12 08:26:50', 0),
(43, 'Bài 2', 27, 'Mua sắm', '0', 50, '2020-07-12 08:27:24', '2020-07-12 08:27:24', 1),
(44, 'Bài 3', 27, 'Mua sắm', '0', 50, '2020-07-12 08:28:07', '2020-07-12 08:28:07', 1),
(45, 'Bài 1', 28, 'Các ngày lễ trong năm', '0', 50, '2020-07-12 08:28:50', '2020-07-12 08:28:50', 0),
(46, 'Bài 2', 28, 'Các ngày lễ trong năm', '0', 50, '2020-07-12 08:29:21', '2020-07-12 08:29:21', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`id`, `level`, `users_id`, `percent`, `created_at`, `updated_at`) VALUES
(2, '9', 1, '100', '2020-06-11 12:57:33', '2020-07-13 11:44:55'),
(3, '0', 4, '50', '2020-07-10 08:57:40', '2020-07-10 08:59:38'),
(4, '0', 5, '100', '2020-07-13 06:50:39', '2020-07-13 06:57:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_28_155031_create_sessions_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_02_02_085338_type_vocabulary', 1),
(6, '2020_02_12_160600_create_types_table', 1),
(7, '2020_02_12_161234_create_tests_table', 1),
(8, '2020_02_12_161702_create_vocabularies_table', 1),
(9, '2020_02_12_161812_create_themes_table', 1),
(10, '2020_02_12_161915_create_lessons_table', 1),
(11, '2020_03_29_151227_question', 1),
(12, '2020_03_29_151254_answer', 1),
(13, '2020_03_29_151938_level', 1),
(14, '2020_05_22_195706_user_lesson', 2),
(15, '2020_06_05_143633_commemt', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocabularyId` bigint(20) NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `name`, `vocabularyId`, `lesson_id`, `type_id`, `description`, `question`, `created_at`, `updated_at`) VALUES
(6, '红色', 1, 5, 1, 'Màu sắc cơ bản trong bảng màu', NULL, '2020-06-11 12:23:19', '2020-06-11 12:23:19'),
(7, '白色', 1, 5, 1, 'Màu sắc cơ bản trong bảng màu', NULL, '2020-06-11 12:25:28', '2020-06-11 12:25:28'),
(8, '红色', 1, 5, 2, 'Màu sắc cơ bản trong bảng màu', NULL, '2020-06-11 12:31:10', '2020-06-11 12:31:10'),
(9, 'Màu Sắc Cơ Bản', 0, 5, 4, 'Màu sắc cơ bản trong bảng màu', '红色', '2020-06-11 12:32:26', '2020-06-11 12:32:26'),
(10, '白色', 0, 5, 3, 'Màu sắc cơ bản trong bảng màu', '白色', '2020-06-11 12:32:56', '2020-06-11 12:32:56'),
(11, '黄色', 0, 5, 4, 'Màu sắc cơ bản trong bảng màu', '黄色', '2020-06-11 12:37:33', '2020-06-11 12:37:33'),
(12, 'Màu Sắc Cơ Bản', 0, 5, 4, 'Màu sắc cơ bản trong bảng màu', '绿色', '2020-06-11 13:14:22', '2020-06-11 13:14:22'),
(13, 'Màu đỏ', 0, 23, 3, 'Màu đỏ', '红色', '2020-07-13 02:15:04', '2020-07-13 02:15:04'),
(14, 'Màu trắng', 0, 23, 3, 'Màu trắng', '白色', '2020-07-13 02:16:19', '2020-07-13 02:16:19'),
(15, 'Màu xanh lá cây', 6, 23, 2, 'Màu xanh lá cây', NULL, '2020-07-13 02:17:39', '2020-07-13 02:17:39'),
(16, 'Màu đỏ', 0, 23, 4, '红色', '红色', '2020-07-13 02:18:52', '2020-07-13 02:18:52'),
(17, 'Màu hồng', 1, 23, 1, 'Màu hồng', NULL, '2020-07-13 02:20:17', '2020-07-13 02:20:17'),
(18, 'Màu đen', 1, 23, 1, 'Màu đen', NULL, '2020-07-13 02:21:35', '2020-07-13 02:21:35'),
(19, 'Anh ấy thích màu đỏ', 0, 23, 3, '他喜欢红色', '他喜欢红色', '2020-07-13 02:22:37', '2020-07-13 02:22:37'),
(21, 'Anh ấy thích màu vàng', 0, 23, 4, 'Anh ấy thích màu vàng', '他喜欢黄色', '2020-07-13 02:24:18', '2020-07-13 02:24:18'),
(24, 'Chị ấy thích màu đen', 0, 24, 3, 'Chị ấy thích màu đen', '她喜歡黑色', '2020-07-13 08:58:37', '2020-07-13 08:58:37'),
(25, 'Màu trắng', 0, 24, 3, 'Màu trắng', '白色', '2020-07-13 08:59:21', '2020-07-13 08:59:21'),
(26, 'Màu vàng', 4, 24, 2, 'Màu vàng', NULL, '2020-07-13 09:00:20', '2020-07-13 09:00:20'),
(27, 'Màu vàng', 0, 24, 4, '黄色', '黄色', '2020-07-13 09:01:38', '2020-07-13 09:01:38'),
(28, 'Màu cam', 8, 24, 2, 'Màu cam', NULL, '2020-07-13 09:01:57', '2020-07-13 09:01:57'),
(29, 'Màu hồng', 1, 24, 1, 'Màu hồng', NULL, '2020-07-13 09:03:29', '2020-07-13 09:03:29'),
(30, 'Số 2', 0, 10, 3, 'Số 2', '二', '2020-07-13 09:25:22', '2020-07-13 09:25:22'),
(31, 'Số 6', 1, 10, 1, 'Số 6', NULL, '2020-07-13 09:26:59', '2020-07-13 09:26:59'),
(32, 'Số 9', 1, 10, 1, 'Số 9', NULL, '2020-07-13 09:27:47', '2020-07-13 09:27:47'),
(33, 'Số 5', 14, 10, 2, 'Số 5', NULL, '2020-07-13 09:28:12', '2020-07-13 09:28:12'),
(34, 'Số 3', 12, 10, 2, 'Số 3', NULL, '2020-07-13 09:28:24', '2020-07-13 09:28:24'),
(35, 'Số 6', 15, 10, 2, 'Số 6', NULL, '2020-07-13 09:28:44', '2020-07-13 09:28:44'),
(36, 'Số 3', 0, 10, 4, '三', '三', '2020-07-13 09:29:10', '2020-07-13 09:29:10'),
(37, 'Số 2', 0, 10, 3, '二', '二', '2020-07-13 09:29:31', '2020-07-13 09:29:31'),
(38, 'Số 10', 0, 12, 3, '十', '十', '2020-07-13 11:24:46', '2020-07-13 11:24:46'),
(39, '八', 0, 12, 3, '八', 'Số 8', '2020-07-13 11:26:23', '2020-07-13 11:26:23'),
(40, 'Số 7', 16, 12, 2, 'Số 7', NULL, '2020-07-13 11:26:53', '2020-07-13 11:26:53'),
(41, 'Số 9', 18, 12, 2, 'Số 9', NULL, '2020-07-13 11:27:21', '2020-07-13 11:27:21'),
(42, 'Số 6', 0, 12, 4, 'Số 6', '六', '2020-07-13 11:28:03', '2020-07-13 11:28:03'),
(43, 'Số 7', 1, 12, 1, 'Số 7', NULL, '2020-07-13 11:29:05', '2020-07-13 11:29:05'),
(44, 'Số 11', 1, 12, 1, 'Số 11', NULL, '2020-07-13 11:30:09', '2020-07-13 11:30:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `index_theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `themes`
--

INSERT INTO `themes` (`id`, `name`, `description`, `created_at`, `updated_at`, `index_theme`) VALUES
(17, 'Số Lượng', 'Số lượng', '2020-06-18 22:30:16', '2020-06-18 22:30:16', 2),
(18, 'Đồ Ăn', 'Đồ ăn', '2020-06-18 22:30:31', '2020-06-18 22:30:31', 3),
(22, 'Màu sắc', 'màu sắc cơ bản', NULL, NULL, 1),
(23, 'Gia Đình', 'gia đình', NULL, NULL, 6),
(24, 'Thiên Nhiên', 'Thiện nhiên', NULL, NULL, 4),
(25, 'Động Vật', 'Con vật', NULL, NULL, 5),
(26, 'Quốc Gia', 'quốc gia', NULL, NULL, 7),
(27, 'Mua Sắm', 'mua sắm', NULL, NULL, 9),
(28, 'Ngày Lễ', 'CÁc ngày lễ', NULL, NULL, 10),
(29, 'Ngôn Ngữ', 'Ngôn ngữ', '2020-07-10 22:55:30', '2020-07-10 22:55:30', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'trac nghiem', NULL, NULL),
(2, 'hoc theo hinh anh', NULL, NULL),
(3, 'nghe viet lai', NULL, NULL),
(4, 'nghe noi lai', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_vocabulary`
--

CREATE TABLE `type_vocabulary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_vocabulary`
--

INSERT INTO `type_vocabulary` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Màu Sắc Cơ Bản', '2020-06-10 08:10:38', '2020-06-10 08:10:38'),
(2, 'Số Lượng', '2020-07-13 08:06:21', '2020-07-13 08:06:21'),
(3, 'Đồ ăn', '2020-07-13 08:11:51', '2020-07-13 08:11:51'),
(4, 'Thiên nhiên', '2020-07-13 08:12:26', '2020-07-13 08:12:26'),
(5, 'Động vật', '2020-07-13 08:12:52', '2020-07-13 08:12:52'),
(6, 'Gia đình', '2020-07-13 08:13:04', '2020-07-13 08:13:04'),
(7, 'Quốc gia', '2020-07-13 08:13:15', '2020-07-13 08:13:15'),
(8, 'Ngôn ngữ', '2020-07-13 08:13:31', '2020-07-13 08:13:31'),
(9, 'Mua sắm', '2020-07-13 08:13:37', '2020-07-13 08:13:37'),
(10, 'Ngày lễ', '2020-07-13 08:13:43', '2020-07-13 08:13:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `remember_token`, `password`, `permission`, `birthday`, `gender`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0000-00-00 00:00:00', 'admin', '0', '15-06-1997', 1, '2020-06-10 07:32:17'),
(4, 'a', 'thengoc@gmail.com', '0000-00-00 00:00:00', '123', '1', '12-01-1997', 0, '2020-07-10 08:21:15'),
(5, 'CTV', 'congtacvien@gmail.com', '0000-00-00 00:00:00', '123', '2', '12-01-1997', 0, NULL),
(6, 'aaa', 'phamngoc@gmail.com', '0000-00-00 00:00:00', '123', '1', '12-01-1997', 1, '2020-07-13 10:15:17'),
(7, 'ff', 'ngocngoc@gmail.com', '0000-00-00 00:00:00', '123', '1', '12-01-1997', 1, '2020-07-13 11:46:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_lesson`
--

CREATE TABLE `user_lesson` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_lesson`
--

INSERT INTO `user_lesson` (`id`, `users_id`, `lesson_id`, `created_at`, `updated_at`) VALUES
(9, 1, 23, '2020-07-13 08:43:14', '2020-07-13 08:43:14'),
(10, 1, 24, '2020-07-13 09:20:45', '2020-07-13 09:20:45'),
(11, 1, 10, '2020-07-13 11:34:32', '2020-07-13 11:34:32'),
(12, 1, 12, '2020-07-13 11:44:53', '2020-07-13 11:44:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vocabularies`
--

CREATE TABLE `vocabularies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_vocabulary_id` bigint(20) UNSIGNED NOT NULL,
  `chinese` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinyin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vietnamese` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdTQ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdTV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `type_vocabulary_id`, `chinese`, `pinyin`, `vietnamese`, `vdTQ`, `vdTV`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, '红色', 'Hóngsè', 'Màu đỏ', '他喜欢红色', 'Anh ấy thích màu đỏ', 'images/maudo.png', '2020-06-10 09:05:36', '2020-06-10 09:05:36'),
(4, 1, '黄色', 'Huángsè', 'Màu vàng', '她喜欢黄色', 'Chị ấy thích màu vàng', 'images/mauvang.png', '2020-06-11 13:01:19', '2020-06-11 13:01:19'),
(6, 1, '绿色', 'Lǜsè', 'Màu xanh lá cây', '他喜欢绿色', 'Anh ấy thích  màu xanh lá cây', 'images/mauxanhla.png', '2020-06-11 13:06:26', '2020-06-11 13:06:26'),
(7, 1, '粉色', 'Fěnsè', 'Màu hồng', '她喜欢粉红色', 'Cô ấy thích màu hồng', 'images/mauhong.png', '2020-07-02 22:55:52', '2020-07-02 22:55:52'),
(8, 1, '橙色', 'Chéngsè', 'Màu cam', '她喜欢橙色', 'Cô ấy thích màu cam', 'images/maucam.png', '2020-07-02 23:01:14', '2020-07-02 23:01:14'),
(9, 1, '白色', 'Báisè', 'Màu trắng', '她喜歡白色', 'Cô ấy thích màu trắng', 'images/bangmau.png', '2020-07-13 08:10:17', '2020-07-13 08:10:17'),
(10, 2, '一', 'yī', 'Số một', '我有一朵花', 'Tôi có một bông hoa', 'images/1.jpg', '2020-07-13 08:16:22', '2020-07-13 08:16:22'),
(11, 2, '二', 'Èr', 'Hai', '我有兩朵花', 'Tôi có hai bông hoa', 'images/2.jpg', '2020-07-13 08:17:39', '2020-07-13 08:17:39'),
(12, 2, '三', 'Sān', 'Ba', '我有三條魚', 'Tôi có ba con cá', 'images/3.jpg', '2020-07-13 08:19:29', '2020-07-13 08:19:29'),
(13, 2, '四', 'Sì', 'Bốn', '她有四本書', 'Cô ấy có bốn cuốn sách', 'images/4.jpg', '2020-07-13 08:21:02', '2020-07-13 08:21:02'),
(14, 2, '五', 'Wǔ', 'Năm', '我有五把椅子', 'Tôi có năm cái ghế', 'images/5.jpg', '2020-07-13 08:22:24', '2020-07-13 08:22:24'),
(15, 2, '六', 'Liù', 'Sáu', '我有六本書', 'Tôi có sáu cuốn sách', 'images/6.jpg', '2020-07-13 08:23:29', '2020-07-13 08:23:29'),
(16, 2, '七', 'Qī', 'Bảy', '我有七本書', 'Tôi có bảy quyển sách', 'images/7.jpg', '2020-07-13 10:32:20', '2020-07-13 10:32:20'),
(17, 2, '八', 'Bā', 'Tám', '我有八條魚', 'Tôi có tám con cá', 'images/8.jpg', '2020-07-13 10:34:11', '2020-07-13 10:34:11'),
(18, 2, '九', 'Jiǔ', 'Chín', '我有九本書', 'Tôi có chín cuốn sách', 'images/9.jpg', '2020-07-13 10:35:33', '2020-07-13 10:35:33'),
(19, 2, '十', 'Shí', 'Mười', '她有十個蛋糕', 'Cô ấy có mười cái bánh', 'images/10.jpg', '2020-07-13 10:36:47', '2020-07-13 10:36:47'),
(20, 3, '酒', 'Jiǔ', 'rượu', '他喝酒', 'Anh ấy uống rượu', 'images/rượu.jpg', '2020-07-13 10:54:31', '2020-07-13 10:54:31'),
(21, 3, '白飯', 'Báifàn', 'Cơm', '我們吃米飯', 'Chúng tôi ăn cơm', 'images/cơm.jpg', '2020-07-13 10:56:15', '2020-07-13 10:56:15'),
(22, 3, '豬肉', 'Zhūròu', 'Thịt heo', '我們吃豬肉飯', 'Chúng tôi ăn cơm với thịt heo', 'images/thịt heo.jpg', '2020-07-13 11:05:41', '2020-07-13 11:05:41'),
(23, 3, '麵條', 'Miàntiáo', 'Mì', '我們吃麵條喝水', 'Chúng tôi ăn mì và uống nước', 'images/mì.jpg', '2020-07-13 11:09:13', '2020-07-13 11:09:13'),
(24, 4, '竹', 'Zhú', 'Cây trúc', '我砍了竹子', 'Tôi chặt cây trúc', 'images/truc.jpg', '2020-07-13 11:11:16', '2020-07-13 11:11:16'),
(25, 4, '月亮', 'Yuèliàng', 'Mặt trăng', '我看著月亮', 'Tôi ngắm mặt trăng', 'images/trăng.png', '2020-07-13 11:12:58', '2020-07-13 11:12:58'),
(26, 4, '樹', 'Shù', 'Cây', '我砍樹', 'Tôi chặt cây', 'images/cây.png', '2020-07-13 11:14:12', '2020-07-13 11:14:12'),
(27, 4, '水', 'Shuǐ', 'Nước uống', '我喝水', 'Tôi uống nước', 'images/nước.png', '2020-07-13 11:15:41', '2020-07-13 11:15:41'),
(28, 5, '狗', 'Gǒu', 'Con chó', '她有一隻狗', 'Chị ấy có nuôi một con chó', 'images/cho.jpg', '2020-07-13 11:17:08', '2020-07-13 11:17:08'),
(29, 5, '貓', 'Māo', 'Con mèo', '他有三隻貓', 'Anh ấy có 3 con mèo', 'images/meo.jpg', '2020-07-13 11:18:45', '2020-07-13 11:18:45'),
(30, 5, '熊', 'Xióng', 'Con gấu', '熊很大', 'Con gấu rất to', 'images/gau.jpg', '2020-07-13 11:19:56', '2020-07-13 11:19:56'),
(31, 1, '豬 Zhū', 'Zhū', 'Con heo', '豬很胖', 'Con heo rất mập', 'images/heo.jpg', '2020-07-13 11:21:11', '2020-07-13 11:21:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_question_id_foreign` (`question_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_users_id_foreign` (`users_id`),
  ADD KEY `comment_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_theme_id_foreign` (`theme_id`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_users_id_foreign` (`users_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_lesson_id_foreign` (`lesson_id`),
  ADD KEY `question_type_id_foreign` (`type_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Chỉ mục cho bảng `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_vocabulary`
--
ALTER TABLE `type_vocabulary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_lesson`
--
ALTER TABLE `user_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_lesson_users_id_foreign` (`users_id`),
  ADD KEY `user_lesson_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vocabularies_type_vocabulary_id_foreign` (`type_vocabulary_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_vocabulary`
--
ALTER TABLE `type_vocabulary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_lesson`
--
ALTER TABLE `user_lesson`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`),
  ADD CONSTRAINT `comment_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`);

--
-- Các ràng buộc cho bảng `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `level_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`),
  ADD CONSTRAINT `question_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Các ràng buộc cho bảng `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_lesson`
--
ALTER TABLE `user_lesson`
  ADD CONSTRAINT `user_lesson_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`),
  ADD CONSTRAINT `user_lesson_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD CONSTRAINT `vocabularies_type_vocabulary_id_foreign` FOREIGN KEY (`type_vocabulary_id`) REFERENCES `type_vocabulary` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
