-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 10:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holland_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'd3d87289c0764c84f27d37409005d24f', '2022-08-17 10:53:53'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'f5038f89d1b158017cc972083c064c6c', '2022-08-17 23:51:26'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'f5038f89d1b158017cc972083c064c6c', '2022-08-17 23:59:51'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'f5038f89d1b158017cc972083c064c6c', '2022-08-18 00:00:28'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '99ce15dd194475f0d45c7d3e0016d262', '2022-08-18 00:00:38'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'eefb479b3249b3493253d932dc96ae91', '2022-08-18 00:06:30'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'eefb479b3249b3493253d932dc96ae91', '2022-08-19 02:14:00'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '1d66ca1f010b3e500b4e82624a89292d', '2022-08-19 02:14:08'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '1e98708da16585af2dbea478daa43ce8', '2022-08-31 01:38:02'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'a5fed76f73b92262f4f56a295ab8f8a6', '2022-09-02 05:13:00'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'f240d76a9481c4cd86366809d92902c6', '2022-09-05 03:45:01'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'f425a87f0599d84e6539ab3d51c34944', '2022-09-05 04:11:21'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '203503bce5624d85828a3b04507fdaf9', '2022-09-05 12:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site Administrator'),
(2, 'mahasiswa', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 1),
(2, 56);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', '1800018276', 1, '2022-08-17 10:29:59', 0),
(2, '::1', '1800018276', NULL, '2022-08-17 10:31:00', 0),
(3, '::1', '1800018276', 1, '2022-08-17 10:31:09', 0),
(4, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:31:16', 1),
(5, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:34:26', 1),
(6, '::1', '1800018275', NULL, '2022-08-17 10:38:54', 0),
(7, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:40:14', 1),
(8, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:42:14', 1),
(9, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:42:37', 1),
(10, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:49:39', 1),
(11, '::1', '1800018275', NULL, '2022-08-17 10:52:16', 0),
(12, '::1', 'rahmat@gmail.com', 1, '2022-08-17 10:52:22', 0),
(13, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 10:52:29', 1),
(14, '::1', 'rahmat1800018276@webmail.uad.ac.id', 3, '2022-08-17 10:54:06', 1),
(15, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 11:01:12', 1),
(16, '::1', 'rahmat1800018276@webmail.uad.ac.id', 3, '2022-08-17 11:04:16', 1),
(17, '::1', 'rahmat1800018276@webmail.uad.ac.id', 3, '2022-08-17 11:17:08', 1),
(18, '::1', '1800018276', 1, '2022-08-17 11:26:01', 0),
(19, '::1', '1800018275', NULL, '2022-08-17 11:26:08', 0),
(20, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 11:26:14', 1),
(21, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 11:36:21', 1),
(22, '::1', '1800018276', 1, '2022-08-17 13:10:51', 0),
(23, '::1', '1800018276', NULL, '2022-08-17 13:11:12', 0),
(24, '::1', '1800018276', NULL, '2022-08-17 13:11:20', 0),
(25, '::1', 'rahmat@gmail.com', 1, '2022-08-17 13:11:26', 1),
(26, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 22:53:04', 1),
(27, '::1', 'asdfasdfsd', NULL, '2022-08-17 23:29:05', 0),
(28, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-17 23:46:13', 1),
(29, '::1', 'rahmatdrive61@gmail.com', 4, '2022-08-17 23:51:33', 1),
(30, '::1', 'rahmatdrive61@gmail.com', 47, '2022-08-18 07:17:43', 1),
(31, '::1', '1800018271', NULL, '2022-08-19 02:12:40', 0),
(32, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-19 02:14:39', 1),
(33, '::1', 'rahmat9b23@gmail.com', NULL, '2022-08-19 04:42:28', 0),
(34, '::1', 'rahmat9b23@gmail.com', NULL, '2022-08-19 04:42:36', 0),
(35, '::1', 'rahmat9b23@gmail.com', NULL, '2022-08-19 04:42:46', 0),
(36, '::1', '1800018275', NULL, '2022-08-19 04:42:58', 0),
(37, '::1', '1800018276', NULL, '2022-08-19 04:43:04', 0),
(38, '::1', 'rahmat9b23@gmail.com', 2, '2022-08-19 04:44:42', 1),
(39, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-19 04:50:23', 1),
(40, '::1', '1800018275', NULL, '2022-08-21 10:05:05', 0),
(41, '::1', '1800018276', NULL, '2022-08-21 10:05:14', 0),
(42, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-21 10:06:15', 1),
(43, '::1', '1800018275', NULL, '2022-08-22 01:23:54', 0),
(44, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-22 01:23:59', 1),
(45, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-22 01:24:46', 1),
(46, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-23 00:49:25', 1),
(47, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-24 00:10:46', 1),
(48, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-24 21:14:15', 1),
(49, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-25 03:45:59', 1),
(50, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-28 01:33:11', 1),
(51, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-29 02:29:51', 1),
(52, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-29 06:30:19', 1),
(53, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-29 19:41:22', 1),
(54, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-31 01:06:36', 1),
(55, '::1', '1800018275', NULL, '2022-08-31 01:36:05', 0),
(56, '::1', 'rahmat9b23@gmail.com', NULL, '2022-08-31 01:36:11', 0),
(57, '::1', 'rahmat1800018276@webmail.uad.ac.id', 3, '2022-08-31 01:36:29', 1),
(58, '::1', 'rahmat1800018276@webmail.uad.ac.id', 49, '2022-08-31 01:38:14', 1),
(59, '::1', 'rahmat1800018276@webmail.uad.ac.id', 49, '2022-08-31 04:30:12', 1),
(60, '::1', 'rahmatdrive61@gmail.com', 48, '2022-08-31 08:57:05', 1),
(61, '::1', 'rahmat1800018276@webmail.uad.ac.id', 50, '2022-09-02 05:13:12', 1),
(62, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-03 13:05:03', 1),
(63, '::1', '1800018271', NULL, '2022-09-03 15:17:12', 0),
(64, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-03 15:17:18', 1),
(65, '::1', '1800018275', NULL, '2022-09-03 19:16:19', 0),
(66, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-03 19:16:24', 1),
(67, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-04 08:19:01', 1),
(68, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-04 11:29:09', 1),
(69, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-04 12:16:28', 1),
(70, '::1', 'rahmat1800018276@webmail.uad.ac.id', 50, '2022-09-04 14:10:57', 1),
(71, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-04 16:26:16', 1),
(72, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-05 02:18:57', 1),
(73, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-05 03:19:18', 1),
(74, '::1', '1800018271', NULL, '2022-09-05 03:21:45', 0),
(75, '::1', 'rahmat1800018276@webmail.uad.ac.id', 50, '2022-09-05 03:21:54', 1),
(76, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-05 03:23:55', 1),
(77, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-05 03:24:45', 1),
(78, '::1', 'rahmatdrive61@gmail.com', 48, '2022-09-05 03:24:54', 1),
(79, '::1', 'rahmat1800018276@webmail.uad.ac.id', 51, '2022-09-05 03:46:13', 1),
(80, '::1', 'rahmat1800018276@webmail.uad.ac.id', 51, '2022-09-05 03:47:21', 1),
(81, '::1', 'rahmat1800018276@webmail.uad.ac.id', 51, '2022-09-05 03:48:33', 1),
(82, '::1', 'rahmat1800018276@webmail.uad.ac.id', 54, '2022-09-05 04:11:29', 1),
(83, '::1', '1800018271', NULL, '2022-09-05 04:24:26', 0),
(84, '::1', '1800018271', NULL, '2022-09-05 04:24:36', 0),
(85, '::1', 'rahmat1800018276@webmail.uad.ac.id', 54, '2022-09-05 04:24:43', 1),
(86, '::1', '1800018271', NULL, '2022-09-05 09:20:38', 0),
(87, '::1', '1800018270', NULL, '2022-09-05 09:20:43', 0),
(88, '::1', 'rahmat1800018276@webmail.uad.ac.id', 54, '2022-09-05 09:22:30', 1),
(89, '::1', '1800018271', NULL, '2022-09-05 12:10:49', 0),
(90, '::1', '1800018270', NULL, '2022-09-05 12:10:54', 0),
(91, '::1', '1800018271', NULL, '2022-09-05 12:17:41', 0),
(92, '::1', '1800018270', NULL, '2022-09-05 12:17:46', 0),
(93, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-05 12:18:03', 1),
(94, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-05 12:38:03', 1),
(95, '::1', '1800018271', NULL, '2022-09-05 15:25:32', 0),
(96, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-05 15:25:37', 1),
(97, '::1', '1800018270', NULL, '2022-09-06 07:24:44', 0),
(98, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 07:24:48', 1),
(99, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:27:06', 1),
(100, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:27:33', 1),
(101, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:38:51', 1),
(102, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:41:55', 1),
(103, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:42:40', 1),
(104, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:44:25', 1),
(105, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:44:44', 1),
(106, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:45:21', 1),
(107, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 08:47:13', 1),
(108, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 11:05:36', 1),
(109, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 11:17:51', 1),
(110, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 11:20:07', 1),
(111, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 11:35:01', 1),
(112, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 12:06:55', 1),
(113, '::1', '1800018270', NULL, '2022-09-06 12:08:22', 0),
(114, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 12:10:25', 1),
(115, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 12:14:13', 1),
(116, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 13:02:22', 1),
(117, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 13:50:49', 1),
(118, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-06 16:56:40', 1),
(119, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-07 06:43:17', 1),
(120, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-08 11:46:06', 1),
(121, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-08 16:37:37', 1),
(122, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-08 17:10:21', 1),
(123, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-09 05:22:23', 1),
(124, '::1', '1800018275', NULL, '2022-09-09 11:36:10', 0),
(125, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 11:36:47', 1),
(126, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 11:40:02', 1),
(127, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 11:41:22', 1),
(128, '::1', '1800018271', NULL, '2022-09-09 11:41:36', 0),
(129, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-09 11:41:41', 1),
(130, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 11:42:02', 1),
(131, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-09 12:04:09', 1),
(132, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 12:04:30', 1),
(133, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 12:09:21', 1),
(134, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-09 12:10:58', 1),
(135, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 12:11:24', 1),
(136, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-09 16:17:43', 1),
(137, '::1', '1800018270', NULL, '2022-09-10 02:54:37', 0),
(138, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-10 02:54:44', 1),
(139, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-11 09:16:34', 1),
(140, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-11 13:00:23', 1),
(141, '::1', '1800018271', NULL, '2022-09-11 14:41:58', 0),
(142, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-11 14:42:29', 1),
(143, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-11 14:43:07', 1),
(144, '::1', 'rahmat1800018276@webmail.uad.ac.id', 56, '2022-09-11 15:26:23', 1),
(145, '::1', 'rahmat9b23@gmail.com', 2, '2022-09-11 15:26:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-mahasiswa', 'mengelola semua data mahasiswa'),
(2, 'manage-profile', 'mahasiswa dapat mengelola profilenya');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'rahmat9b23@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '5614e3d5c172de7354cbb9ca1a26ae64', '2022-08-17 23:45:47'),
(2, 'rahmat9b23@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '5614e3d5c172de7354cbb9ca1a26ae64', '2022-08-17 23:46:06'),
(3, 'rahmat9b23@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '6992cd3a36caee4d7623d7bf00d819a3', '2022-08-19 04:44:35'),
(4, 'rahmat1800018276@webmail.uad.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '6acc5c84dfaae0e64825351cce8e4f88', '2022-09-05 04:24:18'),
(5, 'rahmat9b23@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'ecbcd779a4125c58855668b81cc3bd5a', '2022-09-09 11:36:41'),
(6, 'rahmat9b23@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '73cd21ada332403536d4478df24c9f40', '2022-09-11 14:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1660743333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sds-holland`
--

CREATE TABLE `sds-holland` (
  `B1-R` text NOT NULL,
  `B1-I` text NOT NULL,
  `B1-A` text NOT NULL,
  `B1-S` text NOT NULL,
  `B1-E` text NOT NULL,
  `B1-C` text NOT NULL,
  `B2-R` text NOT NULL,
  `B2-I` text NOT NULL,
  `B2-A` text NOT NULL,
  `B2-S` text NOT NULL,
  `B2-E` text NOT NULL,
  `B2-C` text NOT NULL,
  `B3-R` text NOT NULL,
  `B3-I` text NOT NULL,
  `B3-A` text NOT NULL,
  `B3-S` text NOT NULL,
  `B3-E` text NOT NULL,
  `B3-C` text NOT NULL,
  `SE1-R` text NOT NULL,
  `SE1-I` text NOT NULL,
  `SE1-A` text NOT NULL,
  `SE1-S` text NOT NULL,
  `SE1-E` text NOT NULL,
  `SE1-C` text NOT NULL,
  `SE2-R` text NOT NULL,
  `SE2-I` text NOT NULL,
  `SE2-A` text NOT NULL,
  `SE2-S` text NOT NULL,
  `SE2-E` text NOT NULL,
  `SE2-C` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sds-holland`
--

INSERT INTO `sds-holland` (`B1-R`, `B1-I`, `B1-A`, `B1-S`, `B1-E`, `B1-C`, `B2-R`, `B2-I`, `B2-A`, `B2-S`, `B2-E`, `B2-C`, `B3-R`, `B3-I`, `B3-A`, `B3-S`, `B3-E`, `B3-C`, `SE1-R`, `SE1-I`, `SE1-A`, `SE1-S`, `SE1-E`, `SE1-C`, `SE2-R`, `SE2-I`, `SE2-A`, `SE2-S`, `SE2-E`, `SE2-C`) VALUES
('Memperbaiki alat-alat listrik (setrika, dll)', 'Membaca buku atau majalah ilmiah', 'Membuat sketsa, menggambar atau melukis', 'Bertemu dengan pengamat masalah sosial atau pendidikan', 'Mempengaruhi orang lain', 'Mengisi formulir daftar isian yang panjang', 'Saya telah menggunakan peralatan mesin untuk pertukangan kayu(gergaji) kayu listrik, mesin bubut, dll)', 'Saya dapat menggunakan prinsip aljabar untuk memecahkan masalah matematika', 'Saya dapat memainkan alat musik', 'Saya mudah berbicara dengan semua orang', 'Saya memenangkan penghargaan sebagai tenaga penjual atau pemimpin', 'Saya dapat mengetik sepuluh jari dengan cepat', 'Mekanik pesawat terbang', 'Ahli meteorologi (ilmu cuaca)', 'Penulis puisi', 'Sosiologi', 'Spekulator bisnis', 'Ahli pembukuan', 'Kemampuan Mekanik', 'Kemampuan Sains', 'Kemampuan Artistik', 'Kemampuan Mengajar', 'Kemampuan Menjual', 'Kemampuan Administratif', 'Keterampilan Manual', 'Kemampuan Matematika', 'Kemampuan Musik', 'Keramahtamahan', 'Keterampilan Manajerial', 'Keterampilan Perkantoran'),
('Memperbaiki Mobil', 'Bekerja di laboratorium', 'Menjadi pemain dalam komedi atau sandiwara', 'Membaca artikel atau buku mengenai masalah sosial', 'Menjual suatu produk', 'Mengetik sendiri makalah atau surat-surat', 'Saya dapat membuat gambar dengan skala', 'Saya dapat melakukan percobaan atau penelitian ilmiah', 'Saya dapat menyanyi suara dua atau suara empat dalam paduan suara', 'Saya dapat memimpin diskusi kelompok', 'Saya tahu bagaimana menjadi pemimpin yang berhasil/sukses', 'Saya dapat menjalankan mesin duplikator/ mesin penjumlah', 'Penanggung Jawab keamanan', 'Ahli biologi (ilmu hayat)', 'Dirigen simponi', 'Guru sekolah lanjutan', 'Eksekutif pembelian', 'Guru bisnis/ilmu dagang', '', '', '', '', '', '', '', '', '', '', '', ''),
('Membuat benda dari kayu', 'Mengerjakan suatu proyek ilmiah', 'Merancang perabotan,pakaian atau poster', 'Bekerja untuk Palang Merah', 'Mempelajari strategi untuk keberhasilan bisnis', 'Melakukan operasi matematika (+,-,X dan :) dalam bisnis atau pembukuan', 'Saya dapat mengganti minyak mesin mobil atau ban mobil', 'Saya dapat mengerti tentang \'waktu paruh\' elemen radioaktif', 'Saya dapat menyajikan pemain musik tunggal', 'Saya pandai dalam menjelaskan sesuatu kepada orang lain', 'Saya seorang pembicara di depan umum yang baik', 'Saya dapat menulis steno', 'Mekanik/montir mobil', 'Ahli astronomi (ilmu bintang)', 'Pemain musik', 'Pakar kenakalan remaja', 'Eksekutif periklanan', 'Pemeriksa anggaran', '', '', '', '', '', '', '', '', '', '', '', ''),
('Memperbaiki alat-alat mekanik (sepeda, dll)', 'Mempelajari suatu teori ilmiah', 'Bermain dalam suatu band, kelompok atau orchestra', 'Membantu orang lain dengan masalah pribadinya', 'Berwiraswasta', 'Mengoperasikan berbagai jenis alat kantor', 'Saya dapat menggunakan peralatan mesin, misal bor listrik atau mesin jahit', 'Saya dapat menggunakan tabel logaritma', 'Saya dapat bermain dalam sandiwara', 'Saya telah berpartisipasi dalam pencarian dana atau amal', 'Saya dapat mengelola usaha kecil', 'Saya dapat mengarsip surat dan berkas-berkas lain', 'Pengrajin kayu', 'Teknisi laboratorium medis', 'Penulis novel', 'Terapi bicara', 'Wakil perusahaan produksi', 'Akuntan publik bersertifikat', '', '', '', '', '', '', '', '', '', '', '', ''),
('Beternak ayam, bebek atau angsa', 'Melakukan percobaan kimia', 'Memainkan alat musik', 'Menjaga/mengurus dan mengawasi anak-anak', 'Mengikuti ceramah mengenai penjualan', 'Membuat catatan pengeluaran yang terperinci', 'Saya dapat membaca cetak biru (blue prints)', 'Saya dapat menggunakan kalkulator atau mistar hitung ?', 'Saya dapat menginterpretasikan cerita atau bahan bacaan', 'Saya dapat bekerja sebagai pengurus RT/RW', 'Saya dapat membuat kelompok sosial atau kelompok kerja berjalan dengan baik', 'Saya pernah melakukan pekerjaan administrasi kantor', 'Spesialis perikanan & margasatwa', 'Ahli antropologi', 'Aktor/aktris', 'Konselor pernikahan', 'Penjual asuransi jiwa', 'Penyelidik kredit', '', '', '', '', '', '', '', '', '', '', '', ''),
('Mengikuti kursus kerajinan kayu', 'Dibaca mengenai topik-topik khusus atas keinginan sendiri', 'Menulis untuk suatu majalah atau koran', 'Mempelajari kenakalan remaja', 'Mengambil kursus singkat administrasi dan kepemimpinan', 'Menyusun sistem pengarsipan (Filing)', 'Saya dapat melakukan perbaikan kecil pada alat listrik', 'Saya dapat menggunakan mikroskop.', 'Saya dapat menulis laporan berita atau laporan teknis', 'Saya dapat mengajar anak-anak dengan mudah', 'Saya dikenal dapat berbicara dengan orang yang sulit/keras kepala', 'Saya dapat menggunakan program pembukuan', 'Ahli tanaman', 'Ahli ilmu hewan', 'Penulis lepas', 'Kepala sekolah', 'Penyiar radio-TV', 'Pencatat steno di pengadilan', '', '', '', '', '', '', '', '', '', '', '', ''),
('Membudidayakan tanaman hias', 'Menerapkan matematika dalam masalah praktis', 'Membuat lukisan atau foto orang', 'Mengajar di perguruan tinggi', 'Menjadi pemimpin dalam kelompok', 'Mengikuti kursus bisnis', 'Saya dapat memperbaiki perabotan', 'Saya dapat memprogram komputer untuk mempelajari masalah ilmiah', 'Saya dapat membuat sketsa orang sehingga ia dapat dikenali', 'Saya dapat mengajar orang dewasa dengan mudah', 'Saya dapat mengelola kampanye penjualan', 'Saya dapat melakukan tugas administratif dalam waktu singkat', 'Operator alat-alat berat', 'Ahli kimia', 'Pi?ata musik', 'Fisioterapis', 'Eksekutif bisnis', 'Kasir bank', '', '', '', '', '', '', '', '', '', '', '', ''),
('Mengikuti kursus perbengkelan', 'Mengambil kursus pelajaran fisika', 'Menulis novel atau sandiwara', 'Membaca buku-buku psikologi (pergaulan, dll)', 'Mengawasi pekerjaan orang lain', 'Mengikuti kursus pembukuan (akuntansi)', 'Saya dapat menggunakan hampir semua alat pertukangan kayu', 'Saya dapat menjelaskan fungsi sel darah putih', 'Saya dapat melukis atau membuat patung', 'Saya pandai dalam menolong orang lain yang sedang bingung atau bermasalah', 'Saya dapat mengatur pekerjaan orang lain', 'Saya dapat menggunakan mesin penghitung (kalkulator)', 'Peninjau kelayakan (surveyor)', 'Ilmuwan peneliti', 'Wartawan', 'Psikologi klinis', 'Manajer restoran', 'Ahli pajak', '', '', '', '', '', '', '', '', '', '', '', ''),
('Mengikuti kursus menggambar keteknikan', 'Mengambil kursus pelajaran kimia', 'Membaca atau menulis puisi', 'Membantu orang-orang cacat', 'Bertemu dengan tokoh eksekutif', 'Mengikuti kursus hitung dagang', 'Saya dapat melakukan perbaikan kecil pada TV atau radio', 'Saya dapat menginterpretasikan rumus kimia sederhana', 'Saya dapat menata atau mengubah musik', 'Saya dapat merencanakan acara hiburan untuk pesta dalam lingkungan terbatas(keluarga,teman,dll)', 'Saya seorang yang berambisi dan cenderung berbicara apa adanya (tidak secara agresif)', 'Saya dapat menggunakan alat pemroses data yang sederhana seperti computer', 'Pengawas konstruksi bangunan', 'Penulis artikel ilmiah', 'Seniman', 'Guru ilmu sosial', 'Pembawa acara (MC)', 'Pengawas barang inventaris', '', '', '', '', '', '', '', '', '', '', '', ''),
('Mengikuti kursus montir mobil', 'Mengambil kursus pelajaran matematika', 'Mengikuti kursus kesenian', 'Mengambil kursus hubungan masyarakat', 'Memimpin kelompok dalam meraih tujuan tertentu', 'Mengoperasikan komputer', 'Saya dapat melakukan kecil pada pipa air, keran, dll', 'Saya mengerti mengapa satelit buatan manusia tidak jatuh ke bumi', 'Saya dapat merancang pakaian,poster atau perabotan', 'Saya mampu/kompeten dalam menghibur dan menemani orang yang lebih tua dari saya', 'Saya pandai mempengaruhi orang untuk melakukan sesuatu menurut cara saya', 'Saya dapat menempatkan kredit dan debet', 'Operator radio', 'Penyunting majalah ilmiah', 'Penyanyi', 'Direktur LSM', 'Eksekutif penjualan', 'Operator alat listrik kantor', '', '', '', '', '', '', '', '', '', '', '', ''),
('Menggunakan perkakas bengkel dan mesin-mesin', 'Mengambil kursus pelajaran biologi', 'Menata atau menggubah musik', 'Mengajar di sekolah lanjutan(SLTP,SLTA,dIl)', 'Menjadi penanggung jawab dalam kampanye politik', 'Membuat daftar inventaris dari persediaan atau produk', 'Saya dapat menghaluskan dan memplitur perabotan atau barang-barang dari kayu', 'Saya dapat menyebutkan tiga makanan yang memiliki protein tinggi', 'Saya dapat menulis cerita atau puisi dengan baik', 'Orang mencari saya untuk menceritakan masalah mereka', 'Saya seorang tenaga penjual yang baik', 'Saya dapat mencatat dengan cermat pembayaran/penjualan', 'Pengemudi bis', 'Ahli geologi', 'Penggubah musik', 'Direktur lembaga rehabilitasi', 'Eksekutif penjual real estate?', 'Analisis keuangan', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', 'Insinyur otomotif', 'Ahli botani (ilmu tumbuh-tumbuhan)', 'Pemahat patung', 'Konselor masalah pribadi', 'Pemandu wisata', 'Penaksir biaya', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', 'Ahli mesin', 'Pekerja riset ilmiah', 'Penulis sandiwara', 'Pekerja sosial', 'Manajer tokoserba ada', 'Pembayar gaji', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', 'Ahli listrik', 'Ahli fisika', 'Kartunis', 'Konselor kejur & pekerjaan', 'Manajer penjualan', 'Pemeriksa dari bank', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(11) NOT NULL,
  `nim` varchar(30) DEFAULT NULL,
  `tanggal` varchar(255) NOT NULL,
  `skor` int(5) NOT NULL,
  `record_jawaban` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`record_jawaban`)),
  `skor_RIASEC` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`skor_RIASEC`)),
  `tiga_skor_kode` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tiga_skor_kode`)),
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `nim`, `tanggal`, `skor`, `record_jawaban`, `skor_RIASEC`, `tiga_skor_kode`, `created_at`, `updated_at`) VALUES
(39, '1800018270', '07 September 2022', 9, '{\"B1-R\":[\"S\",\"S\",\"S\",\"TS\",\"TS\",\"TS\",null,null,null,null,null],\"B1-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-R\":[\"T\",\"T\",\"T\",\"Y\",\"Y\",\"Y\",null,null,null,null,null],\"B2-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B3-R\":[\"Y\",\"Y\",\"Y\",null,null,null,null,null,null,null,null,null,null,null],\"B3-I\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-A\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-S\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-E\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-C\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"SE1-R\":[null],\"SE1-I\":[null],\"SE1-A\":[null],\"SE1-S\":[null],\"SE1-E\":[null],\"SE1-C\":[null],\"SE2-R\":[null],\"SE2-I\":[null],\"SE2-A\":[null],\"SE2-S\":[null],\"SE2-E\":[null],\"SE2-C\":[null]}', '{\"R\":9,\"I\":0,\"A\":0,\"S\":0,\"E\":0,\"C\":0}', '[\"R\"]', NULL, NULL),
(40, '1800018270', '07 September 2022', 19, '{\"B1-R\":[\"S\",\"S\",\"S\",\"TS\",\"TS\",\"TS\",\"TS\",\"TS\",\"S\",\"S\",\"S\"],\"B1-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-R\":[\"T\",\"T\",\"T\",\"Y\",\"Y\",\"Y\",\"T\",\"T\",\"T\",\"Y\",\"Y\"],\"B2-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B3-R\":[\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"T\",\"T\",\"T\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"T\"],\"B3-I\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-A\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-S\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-E\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-C\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"SE1-R\":[null],\"SE1-I\":[null],\"SE1-A\":[null],\"SE1-S\":[null],\"SE1-E\":[null],\"SE1-C\":[null],\"SE2-R\":[null],\"SE2-I\":[null],\"SE2-A\":[null],\"SE2-S\":[null],\"SE2-E\":[null],\"SE2-C\":[null]}', '{\"R\":19,\"I\":0,\"A\":0,\"S\":0,\"E\":0,\"C\":0}', '[\"R\"]', NULL, NULL),
(41, '1800018270', '07 September 2022', 7, '{\"B1-R\":[\"S\",\"TS\",\"TS\",\"S\",\"S\",\"S\",\"TS\",\"S\",\"TS\",\"S\",\"S\"],\"B1-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-R\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B3-R\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-I\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-A\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-S\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-E\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-C\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"SE1-R\":[null],\"SE1-I\":[null],\"SE1-A\":[null],\"SE1-S\":[null],\"SE1-E\":[null],\"SE1-C\":[null],\"SE2-R\":[null],\"SE2-I\":[null],\"SE2-A\":[null],\"SE2-S\":[null],\"SE2-E\":[null],\"SE2-C\":[null]}', '{\"R\":7,\"I\":0,\"A\":0,\"S\":0,\"E\":0,\"C\":0}', '[\"R\"]', NULL, NULL),
(42, '1800018270', '07 September 2022', 6, '{\"B1-R\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B1-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-R\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-I\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-A\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-S\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-E\":[null,null,null,null,null,null,null,null,null,null,null],\"B2-C\":[null,null,null,null,null,null,null,null,null,null,null],\"B3-R\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-I\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-A\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-S\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-E\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"B3-C\":[null,null,null,null,null,null,null,null,null,null,null,null,null,null],\"SE1-R\":[\"6\"],\"SE1-I\":[null],\"SE1-A\":[null],\"SE1-S\":[null],\"SE1-E\":[null],\"SE1-C\":[null],\"SE2-R\":[null],\"SE2-I\":[null],\"SE2-A\":[null],\"SE2-S\":[null],\"SE2-E\":[null],\"SE2-C\":[null]}', '{\"R\":6,\"I\":0,\"A\":0,\"S\":0,\"E\":0,\"C\":0}', '[\"R\"]', NULL, NULL),
(43, '1800018270', '07 September 2022', 198, '{\"B1-R\":[\"TS\",\"S\",\"TS\",\"S\",\"S\",\"TS\",\"S\",\"TS\",\"TS\",\"TS\",\"S\"],\"B1-I\":[\"S\",\"TS\",\"S\",\"S\",\"TS\",\"S\",\"TS\",\"TS\",\"TS\",\"TS\",\"TS\"],\"B1-A\":[\"S\",\"S\",\"TS\",\"S\",\"S\",\"S\",\"TS\",\"S\",\"S\",\"S\",\"S\"],\"B1-S\":[\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\"],\"B1-E\":[\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\",\"S\"],\"B1-C\":[\"TS\",\"TS\",\"TS\",\"TS\",\"S\",\"S\",\"S\",\"TS\",\"S\",\"TS\",\"S\"],\"B2-R\":[\"Y\",\"T\",\"T\",\"Y\",\"Y\",\"T\",\"Y\",\"T\",\"T\",\"T\",\"Y\"],\"B2-I\":[\"Y\",\"Y\",\"T\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"Y\"],\"B2-A\":[\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\"],\"B2-S\":[\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\"],\"B2-E\":[\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\"],\"B2-C\":[\"T\",\"T\",\"T\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"Y\",\"Y\",\"Y\"],\"B3-R\":[\"T\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"T\",\"Y\",\"T\",\"T\",\"T\",\"T\"],\"B3-I\":[\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"Y\",\"T\",\"Y\",\"Y\",\"T\",\"T\"],\"B3-A\":[\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"T\",\"Y\",\"Y\",\"Y\",\"T\",\"T\",\"T\"],\"B3-S\":[\"Y\",\"Y\",\"Y\",\"T\",\"Y\",\"Y\",\"T\",\"T\",\"Y\",\"T\",\"Y\",\"Y\",\"Y\",\"Y\"],\"B3-E\":[\"Y\",\"Y\",\"Y\",\"T\",\"T\",\"T\",\"Y\",\"Y\",\"Y\",\"Y\",\"Y\",\"T\",\"T\",\"T\"],\"B3-C\":[\"T\",\"Y\",\"Y\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\",\"T\"],\"SE1-R\":[\"4\"],\"SE1-I\":[\"3\"],\"SE1-A\":[\"5\"],\"SE1-S\":[\"6\"],\"SE1-E\":[\"7\"],\"SE1-C\":[\"2\"],\"SE2-R\":[\"5\"],\"SE2-I\":[\"3\"],\"SE2-A\":[\"7\"],\"SE2-S\":[\"6\"],\"SE2-E\":[\"2\"],\"SE2-C\":[\"4\"]}', '{\"R\":26,\"I\":29,\"A\":40,\"S\":44,\"E\":39,\"C\":20}', '[\"S\",\"A\",\"E\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
  `umur` varchar(255) DEFAULT '-',
  `jenis_kelamin` varchar(255) DEFAULT '-',
  `pendidikan` varchar(255) DEFAULT '-',
  `jurusan` varchar(255) DEFAULT '-',
  `pekerjaan_ayah` varchar(255) DEFAULT '-',
  `pekerjaan_ibu` varchar(255) DEFAULT '-',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nim`, `nama_lengkap`, `user_image`, `umur`, `jenis_kelamin`, `pendidikan`, `jurusan`, `pekerjaan_ayah`, `pekerjaan_ibu`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rahmat@gmail.com', '1800018276', NULL, 'default.svg', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kBRilI8wFJppScxcLnvSH.hQ7Ws3bmoE93EPPK..2FgQMAo9d22h2', NULL, NULL, NULL, 'f0d470e65f66e23c72f6f49399f7033c', NULL, NULL, 1, 0, '2022-08-17 10:08:49', '2022-08-17 10:08:49', NULL),
(2, 'rahmat9b23@gmail.com', '1800018275', 'rahmat juniardi', '1800018275.png', '', '', '', ' ', '', '', '$2y$10$2fbfd1ZtoJHaWKlzeSVt1efiSUPbccjQ07TBXYiUIYiR.Nzug8Lka', NULL, '2022-09-11 14:39:17', NULL, NULL, NULL, NULL, 1, 0, '2022-08-17 10:30:28', '2022-09-11 14:39:17', NULL),
(56, 'rahmat1800018276@webmail.uad.ac.id', '1800018270', 'Handi Kurniawan', '1800018270.jpeg', '20', 'Laki-laki', 'Mahasiswa', 'Informatika', 'Guru', 'Pegawai Negeri', '$2y$10$UxxM6XIAZ/KkJihmHJTOSeaAuMBugGg2Ap1JSctJMcohsCgTFveby', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-09-05 12:17:08', '2022-09-05 12:17:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
