-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 11:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthq`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `idAnalisa` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL,
  `tglAnalisa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'asdfas', 'asdfa', '2021-06-09 01:34:08', '2021-06-09 01:34:08'),
(4, 'adfasdf', 'asdfasdfadsf', '2021-06-09 01:34:18', '2021-06-09 01:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'cat 1'),
(2, 'Cat 2'),
(7, 'Cat 4');

-- --------------------------------------------------------

--
-- Table structure for table `cats_pro`
--

CREATE TABLE `cats_pro` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cats_pro`
--

INSERT INTO `cats_pro` (`id`, `cat_id`, `pro_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_latih`
--

CREATE TABLE `data_latih` (
  `id` int(10) NOT NULL,
  `idJenisPenyakit` int(10) NOT NULL,
  `idSuasanaHati` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL,
  `nilaiBobotLatig` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_latih`
--

INSERT INTO `data_latih` (`id`, `idJenisPenyakit`, `idSuasanaHati`, `idMenu`, `nilaiBobotLatig`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 2, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 3, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 4, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 1, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 2, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 3, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 4, 4, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 4, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 4, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 4, 1, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, 2, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 4, 3, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 4, 4, 5, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 4, 1, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 4, 2, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 4, 3, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 4, 4, 6, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 4, 1, 7, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 4, 2, 7, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 4, 3, 7, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 4, 4, 7, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 3, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 3, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 3, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 3, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 3, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 3, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 3, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 3, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 3, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 3, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 3, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 3, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 3, 1, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 3, 2, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 3, 3, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 3, 4, 5, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 3, 1, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 3, 2, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 3, 3, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 3, 4, 6, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 3, 1, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 3, 2, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 3, 3, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 3, 4, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 1, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 1, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 1, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 1, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 1, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 1, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 1, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 1, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 1, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 1, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 1, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 1, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 1, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 1, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 1, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 1, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 1, 1, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 1, 2, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 1, 3, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 1, 4, 5, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 1, 1, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 1, 2, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 1, 3, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 1, 4, 6, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 1, 1, 7, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 1, 2, 7, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 1, 3, 7, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 1, 4, 7, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 5, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 5, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 5, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 5, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 5, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 5, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 5, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 5, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 5, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 5, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 5, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 5, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 5, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 5, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 5, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 5, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 5, 1, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 5, 2, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 5, 3, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 5, 4, 5, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 5, 1, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 5, 2, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 5, 3, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 5, 4, 6, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 5, 1, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 5, 2, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 5, 3, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 5, 4, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 6, 1, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 6, 2, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 6, 3, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 6, 4, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 6, 1, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 6, 2, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 6, 3, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 6, 4, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 6, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 6, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 6, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 6, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 6, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 6, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 6, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 6, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 6, 1, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 6, 2, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 6, 3, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 6, 4, 5, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 6, 1, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 6, 2, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 6, 3, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 6, 4, 6, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 6, 1, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 6, 2, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 6, 3, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 6, 4, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 7, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 7, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 7, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 7, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 7, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 7, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 7, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 7, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 7, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 7, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 7, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 7, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 7, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 7, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 7, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 7, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 7, 1, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 7, 2, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 7, 3, 5, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 7, 4, 5, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 7, 1, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 7, 2, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 7, 3, 6, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 7, 4, 6, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 7, 1, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 7, 2, 7, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 7, 3, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 7, 4, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `history_pesanan`
--

CREATE TABLE `history_pesanan` (
  `idHistory` int(10) NOT NULL,
  `idPesan` int(10) NOT NULL,
  `idPengguna` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_pesanan`
--

INSERT INTO `history_pesanan` (`idHistory`, `idPesan`, `idPengguna`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penyakit`
--

CREATE TABLE `jenis_penyakit` (
  `id` int(10) NOT NULL,
  `namaJenisPenyakit` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_penyakit`
--

INSERT INTO `jenis_penyakit` (`id`, `namaJenisPenyakit`, `created_at`, `updated_at`) VALUES
(1, 'Obesitas', '2021-06-09 17:18:22', '2021-06-18 02:00:39'),
(3, 'Jantung', '2021-06-09 10:18:24', '2021-06-18 02:00:34'),
(4, 'Diabetes', '2021-06-18 02:00:20', '2021-06-18 02:00:20'),
(5, 'Asam Lambung', '2021-06-18 02:00:47', '2021-06-18 02:00:47'),
(6, 'Asam Urat', '2021-06-18 02:00:53', '2021-06-18 02:00:53'),
(7, 'Darah tinggi', '2021-06-18 02:00:59', '2021-06-18 02:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `jenis_kelamin`, `tanggal_lahir`, `no_hp`, `email`, `password`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Syah Al Hafid', 'Manager', 'L', '1999-06-10', '082269578547', 'syahalhafidnugroho@gmail.com', '$2y$10$lu6K2LCK/hbbalblhFXZMONwzMwO0kRuplOS.egmRv5obMSBbIG9e', 'Bekasi', '2021-06-07 23:22:40', '2021-06-07 23:26:06'),
(2, 'Win', 'Barista', 'L', '2021-06-23', '082269578547', 'win@gmail.com', '$2y$10$lu6K2LCK/hbbalblhFXZMONwzMwO0kRuplOS.egmRv5obMSBbIG9e', 'Jakarta Barat', '2021-06-07 23:24:46', '2021-06-07 23:26:44'),
(3, 'Thoriq', 'Kasir', 'L', '2021-06-30', '082269578547', 'thoriqzihni@gmail.com', '$2y$10$lu6K2LCK/hbbalblhFXZMONwzMwO0kRuplOS.egmRv5obMSBbIG9e', 'Jakarta Timur', '2021-06-07 23:27:18', '2021-06-20 09:44:30'),
(4, 'nyoba', 'kasir', 'L', '1999-06-10', '082269578547', 'nyoba@gmail.com', '$2y$10$lu6K2LCK/hbbalblhFXZMONwzMwO0kRuplOS.egmRv5obMSBbIG9e', 'Jakarta', '2021-06-25 17:04:22', '2021-06-25 17:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `idMenu` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `idMenu`, `qty`, `harga`, `id_user`, `total`) VALUES
(3, 13, 1, 20000, 5, 20000),
(15, 1, 1, 20000, 10, 20000),
(17, 2, 1, 25000, 1, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_hidangan`
--

CREATE TABLE `menu_hidangan` (
  `id` int(10) NOT NULL,
  `namaMenu` varchar(30) NOT NULL,
  `gambarMenu` text NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_hidangan`
--

INSERT INTO `menu_hidangan` (`id`, `namaMenu`, `gambarMenu`, `keterangan`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Americano', 'americano.jpg', '-', 20000, '2021-06-20 16:10:56', '2021-06-20 16:10:56'),
(2, 'Capucino', '90cce17d-d5e5-4a70-a7ec-d463f38bab8b.jpeg', '-', 25000, '2021-06-20 16:11:21', '2021-06-28 09:44:00'),
(3, 'Green Tea', 'greentea.jpg', '-', 30000, '2021-06-20 16:12:43', '2021-06-20 16:12:43'),
(4, 'Dark Chocho', 'darkchoco.png', '-', 25000, '2021-06-20 16:14:35', '2021-06-20 16:14:35'),
(5, 'Taro', 'taro.jpe', '-', 19000, '2021-06-20 16:13:21', '2021-06-20 16:13:21'),
(6, 'Manggo', 'manggo.jpg', '-', 22000, '2021-06-20 16:13:50', '2021-06-20 16:13:50'),
(7, 'Expresso', 'expresso.jpg', '-', 23000, '2021-06-20 16:11:54', '2021-06-20 16:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `menu_jenis_penyakit`
--

CREATE TABLE `menu_jenis_penyakit` (
  `id` int(10) NOT NULL,
  `idJenisPenyakit` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL,
  `idSuasanaHati` int(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_jenis_penyakit`
--

INSERT INTO `menu_jenis_penyakit` (`id`, `idJenisPenyakit`, `idMenu`, `idSuasanaHati`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 2, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 3, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 4, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 1, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 2, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 3, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 4, 4, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 4, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 4, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 3, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 3, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 3, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 3, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 3, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 3, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 3, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 3, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 3, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 3, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 3, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 3, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 1, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 1, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 1, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 1, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 1, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 1, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 1, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 1, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 1, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 1, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 1, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 1, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 1, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 1, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 1, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 1, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 5, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 5, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 5, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 5, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 5, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 5, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 5, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 5, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 5, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 5, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 5, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 5, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 5, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 5, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 5, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 5, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 6, 1, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 6, 2, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 6, 3, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 6, 4, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 6, 1, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 6, 2, 2, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 6, 3, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 6, 4, 2, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 6, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 6, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 6, 3, 3, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 6, 4, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 6, 1, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 6, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 6, 3, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 6, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 7, 1, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 7, 2, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 7, 3, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 7, 4, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 7, 1, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 7, 2, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 7, 3, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 7, 4, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 7, 1, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 7, 2, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 7, 3, 3, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 7, 4, 3, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 7, 1, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 7, 2, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 7, 3, 4, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 7, 4, 4, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu_suasana_hati`
--

CREATE TABLE `menu_suasana_hati` (
  `id` int(10) NOT NULL,
  `idSuasanaHati` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_suasana_hati`
--

INSERT INTO `menu_suasana_hati` (`id`, `idSuasanaHati`, `idMenu`, `created_at`, `updated_at`) VALUES
(2, 2, 3, '2021-06-17 05:18:51', '2021-06-17 05:22:34');

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2021_06_09_074324_create_articles_table', 1),
(3, '2021_05_29_201201_create_karyawan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `nomorTelpon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `namaLengkap`, `nomorTelpon`, `email`, `password`) VALUES
(1, 'wadaw', 'wadaw', 'bahri@gmail.com', 'wadaw');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL,
  `idPengguna` int(10) NOT NULL,
  `tanggalPesan` datetime NOT NULL,
  `jumlahPesan` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `totalharga` int(10) NOT NULL,
  `catatan` varchar(250) DEFAULT NULL,
  `orderno` varchar(50) NOT NULL,
  `mejano` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Belum Diproses','Sedang Diproses','Selesai','Selesai Pembayaran') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `idMenu`, `idPengguna`, `tanggalPesan`, `jumlahPesan`, `harga`, `totalharga`, `catatan`, `orderno`, `mejano`, `created_at`, `updated_at`, `status`) VALUES
(21, 4, 4, '2021-06-18 06:06:46', 1, 10000, 10000, '', '0', 0, '2021-06-18 13:06:46', '2021-06-18 13:06:46', 'Belum Diproses'),
(24, 1, 4, '2021-06-18 11:43:42', 1, 250000, 250000, 'tambah sambal ', '24', 2, '2021-06-18 18:43:42', '2021-06-18 18:43:42', NULL),
(25, 2, 4, '2021-06-18 11:46:36', 1, 25200, 25200, 'Kasih Gula', '25', 5, '2021-06-18 18:46:36', '2021-06-18 18:46:36', NULL),
(26, 3, 4, '2021-06-18 11:46:36', 1, 14000, 14000, 'Kasih Gula', '25', 5, '2021-06-18 18:46:36', '2021-06-18 18:46:36', NULL),
(27, 1, 1, '2021-06-18 17:55:38', 1, 250000, 250000, '', '27', 1, '2021-06-19 00:55:38', '2021-06-19 00:55:38', NULL),
(35, 5, 10, '2021-06-27 09:15:58', 1, 19000, 19000, '', '35', 1, '2021-06-27 16:15:58', '2021-06-27 16:15:58', 'Sedang Diproses'),
(36, 7, 1, '2021-06-27 12:06:02', 1, 23000, 23000, '', '36', 1, '2021-06-27 19:06:02', '2021-06-27 19:06:02', NULL),
(37, 1, 1, '2021-06-27 12:10:16', 1, 20000, 20000, '', 'CFG1D36', 1, '2021-06-27 19:10:16', '2021-06-27 19:10:16', 'Selesai Pembayaran'),
(38, 2, 1, '2021-06-27 12:15:08', 2, 25000, 50000, '', 'CFG1X37', 1, '2021-06-27 19:15:08', '2021-06-27 19:15:08', 'Selesai'),
(39, 3, 1, '2021-06-27 12:15:08', 1, 30000, 30000, '', 'CFG1X37', 1, '2021-06-27 19:15:08', '2021-06-27 19:15:08', NULL),
(40, 7, 4, '2021-06-27 19:17:37', 2, 23000, 46000, '', 'CFG4H39', 3, '2021-06-28 02:17:37', '2021-06-28 02:17:37', NULL),
(41, 1, 4, '2021-06-23 00:00:00', 3, 20000, 60000, NULL, 'CFG1S0', 4, '2021-06-28 07:10:20', '2021-06-28 07:10:20', NULL),
(42, 1, 1, '2021-06-28 07:13:30', 1, 20000, 20000, '', 'CFG1O41', 1, '2021-06-28 14:13:30', '2021-06-28 14:13:30', NULL),
(43, 1, 4, '2021-06-28 00:00:00', 2, 20000, 40000, '', 'CFG4L42', 1, '2021-06-28 16:24:16', '2021-06-28 09:25:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`) VALUES
(1, 1, 'pro 1'),
(2, 1, 'pro 2'),
(3, 1, 'pro 1'),
(6, 2, 'pro 1'),
(7, 2, 'pro 2'),
(9, 2, 'pro 2 3'),
(16, 0, 'test'),
(17, 1, 'test2'),
(18, 2, 'testing'),
(19, 7, 'Test 1 product...'),
(20, 0, 'download_(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suasana_hati`
--

CREATE TABLE `suasana_hati` (
  `id` int(10) NOT NULL,
  `namaSuasanaHati` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suasana_hati`
--

INSERT INTO `suasana_hati` (`id`, `namaSuasanaHati`, `created_at`, `updated_at`) VALUES
(1, 'Semangat', '2021-06-09 17:19:12', '2021-06-18 02:01:26'),
(2, 'Optimis', '2021-06-09 10:37:55', '2021-06-18 02:01:33'),
(3, 'Relaksasi', '2021-06-18 02:01:43', '2021-06-18 02:01:43'),
(4, 'Segar', '2021-06-18 02:01:46', '2021-06-18 02:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`, `description`, `status`) VALUES
(3, 'test', '', 0),
(4, 'test', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED DEFAULT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `role`) VALUES
(1, '127.0.0.1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'bontanksakti84@gmail.com', '', NULL, NULL, NULL, 1268889823, 1622647029, 1, 'Admin', 'istrator', 'ADMIN', '0', 'admin'),
(3, NULL, 'asdf', '912ec803b2ce49e4a541068d495ab570', NULL, 'asdf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdf', NULL, NULL, '123', 'user'),
(4, NULL, 'syah', '418a0cdf69bde721880aa171d2d79d40', NULL, 'syahalhafidnugroho@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', NULL, NULL, '082269578547', 'user'),
(9, NULL, 'fani', 'ee61d621f12489791ce28b31409daee4', NULL, 'fani@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fani', NULL, NULL, '0829881', 'user'),
(10, NULL, 'fani', 'ee61d621f12489791ce28b31409daee4', NULL, 'fani@a.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fani', NULL, NULL, '0898182', 'user'),
(11, NULL, 'bahri', '846c25ead0e84f2d7ccf10922f682278', NULL, 'bahri@bahri.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bahri', NULL, NULL, '091828128', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_tabel`
--

CREATE TABLE `users_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`idAnalisa`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats_pro`
--
ALTER TABLE `cats_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_pesanan`
--
ALTER TABLE `history_pesanan`
  ADD PRIMARY KEY (`idHistory`);

--
-- Indexes for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_hidangan`
--
ALTER TABLE `menu_hidangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_jenis_penyakit`
--
ALTER TABLE `menu_jenis_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_suasana_hati`
--
ALTER TABLE `menu_suasana_hati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suasana_hati`
--
ALTER TABLE `suasana_hati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `users_tabel`
--
ALTER TABLE `users_tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `idAnalisa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cats_pro`
--
ALTER TABLE `cats_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_latih`
--
ALTER TABLE `data_latih`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_pesanan`
--
ALTER TABLE `history_pesanan`
  MODIFY `idHistory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_hidangan`
--
ALTER TABLE `menu_hidangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_jenis_penyakit`
--
ALTER TABLE `menu_jenis_penyakit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `menu_suasana_hati`
--
ALTER TABLE `menu_suasana_hati`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `suasana_hati`
--
ALTER TABLE `suasana_hati`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_tabel`
--
ALTER TABLE `users_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
