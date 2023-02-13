-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 11:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deploy`
--

-- --------------------------------------------------------

--
-- Table structure for table `duta_divisi`
--

CREATE TABLE `duta_divisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `div_unique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duta_divisi`
--

INSERT INTO `duta_divisi` (`id`, `div_unique`, `div_category`, `div_name`, `created_at`, `updated_at`) VALUES
(1, 'div9c49c9c6dad4', 'KEUANGAN', 'ACC, TAX, AUDIT', NULL, NULL),
(2, 'div8d1d39a6696c', 'SALES', 'ADMIN PROJECT', NULL, NULL),
(3, 'div52b3b6bf8abc', 'SALES', 'AREA 2', NULL, NULL),
(4, 'div35069609cc9f', 'MARKETING SUPPORT', 'BDMCSS', NULL, NULL),
(5, 'div493dc2b88a99', 'SALES', 'BJS', NULL, NULL),
(6, 'div18a04d69309d', 'BOD', 'BOD, DIREKTORAT, KOM', NULL, NULL),
(7, 'div872de0fe1658', 'KEUANGAN', 'COLLECTION', NULL, NULL),
(8, 'div7ab4761581f1', 'KEUANGAN', 'COST CONTROL', NULL, NULL),
(9, 'div38233b7bb6ee', 'MARKETING SUPPORT', 'CRO', NULL, NULL),
(10, 'div875f60f9fac3', 'PRODIV', 'DATA CENTER (UPS)', NULL, NULL),
(11, 'divb504072596b1', 'SALES', 'DEALER (DISTRIBUTOR)', NULL, NULL),
(12, 'div27c6f5d73d52', 'ENGENEERING', 'DESAIN & ENGENEERING', NULL, NULL),
(13, 'div590d53d7397b', 'EDP', 'EDP', NULL, NULL),
(14, 'divc8dfe34d5eef', 'MARKETING SUPPORT', 'ELEC SYS PARTNERSHIP', NULL, NULL),
(15, 'div7919de4f1727', 'ENGENEERING', 'ESTIMASI', NULL, NULL),
(16, 'dive4eab7316ce4', 'ENGENEERING', 'ETS', NULL, NULL),
(17, 'dive449e9ebd4ac', 'SALES', 'EXSISTING BUILDING', NULL, NULL),
(18, 'divae3f9e1bf94f', 'LEGOK', 'FACTORY LEGOK', NULL, NULL),
(19, 'div65fe55e3801a', 'KEUANGAN', 'FINANCE', NULL, NULL),
(20, 'divc6e8f33ea16f', 'HRGA', 'GENERAL AFFAIR', NULL, NULL),
(21, 'divfd4c638da5f8', 'HRGA', 'HR', NULL, NULL),
(22, 'divd9c89e6459f4', 'IMPORT', 'IMPORT', NULL, NULL),
(23, 'divd5f269ae4fe6', 'MANUFACTURE', 'INVENTORY PEC', NULL, NULL),
(24, 'div9f7d9b615a4b', 'SALES', 'JF SALES', NULL, NULL),
(25, 'div2c729497d917', 'PM', 'K3', NULL, NULL),
(26, 'div17a1ea773fa7', 'SALES', 'KOREAN PROJECT', NULL, NULL),
(27, 'divd0a9ee5f30a7', 'SALES', 'MBD', NULL, NULL),
(28, 'divf19808781cf9', 'SALES', 'MCBU', NULL, NULL),
(29, 'div446f6e9d0d55', 'SALES', 'MINING & ES', NULL, NULL),
(30, 'dive448c005700d', 'SALES', 'NEW BUILDING 1', NULL, NULL),
(31, 'divb78ccd9d3734', 'SALES', 'NEW BUILDING 2', NULL, NULL),
(32, 'divf6217fd6430f', 'SALES', 'NEW BUILDING 3', NULL, NULL),
(33, 'dive4d641356acc', 'MARKETING SUPPORT', 'PANEL MAKER', NULL, NULL),
(34, 'divae9c8ff8b039', 'MANUFACTURE', 'PEC', NULL, NULL),
(35, 'divf394b0b72dbf', 'MANUFACTURE', 'PPIC & LOGISTIC', NULL, NULL),
(36, 'dive27df350f4d7', 'SALES', 'PRJ FE', NULL, NULL),
(37, 'divb8405905479c', 'SALES', 'PRJ LS', NULL, NULL),
(38, 'div98e1091ef696', 'PROCUREMENT', 'PROCUREMENT', NULL, NULL),
(39, 'divfacaa84f8bd0', 'PRODIV', 'PRODIV FE', NULL, NULL),
(40, 'div581d0762c2a9', 'PRODIV', 'PRODIV LS', NULL, NULL),
(41, 'div7f063a7ada65', 'MANUFACTURE', 'PRODUKSI PANEL', NULL, NULL),
(42, 'div1c150d49bbb8', 'PM', 'PROJECT MANAGEMENT', NULL, NULL),
(43, 'div74391c6b53d9', 'MANUFACTURE', 'QUALITY CONTROL', NULL, NULL),
(44, 'divbe22a9ea571a', 'CABANG', 'REP. BALIKPAPAN', NULL, NULL),
(45, 'div199a17f147f8', 'CABANG', 'REP. BANDUNG', NULL, NULL),
(46, 'div37e513eba0d0', 'CABANG', 'REP. BEKASI', NULL, NULL),
(47, 'div36c06f06cff9', 'CABANG', 'REP. CIBINONG', NULL, NULL),
(48, 'divff41f170bba1', 'CABANG', 'REP. MEDAN', NULL, NULL),
(49, 'divb6cce5d9f508', 'CABANG', 'REP. PONTIANAK', NULL, NULL),
(50, 'div3301ad522dd5', 'CABANG', 'REP. SEMARANG', NULL, NULL),
(51, 'div224635c3cdb8', 'CABANG', 'REP. SURABAYA', NULL, NULL),
(52, 'divbbdbe7250da5', 'SALES', 'SALES PEMERINTAH', NULL, NULL),
(53, 'div24df16294235', 'SALES', 'SALES SWASTA 1', NULL, NULL),
(54, 'div6f15c9a794f2', 'SALES', 'SALES SWASTA 2', NULL, NULL),
(55, 'div57d95c44360a', 'SALES', 'SALES SWASTA 3', NULL, NULL),
(56, 'div1de353d593ac', 'SALES', 'SALES SWASTA 4', NULL, NULL),
(57, 'dive491c6c27d5f', 'HRGA', 'SECRETARIAT', NULL, NULL),
(58, 'divc6606d89838a', 'SALES', 'SGU', NULL, NULL),
(59, 'div9e3434270277', 'SALES', 'SJP', NULL, NULL),
(60, 'div924053789ce6', 'SMD', 'SMD', NULL, NULL),
(61, 'div301dfebd08ff', 'SNI', 'SNI', NULL, NULL),
(62, 'div54b02ae91c8c', 'SALES', 'T3', NULL, NULL),
(63, 'div4b01351da2eb', 'HRGA', 'WAREHOUSE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `duta_lokasi`
--

CREATE TABLE `duta_lokasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loc_unique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duta_lokasi`
--

INSERT INTO `duta_lokasi` (`id`, `loc_unique`, `loc_name`, `created_at`, `updated_at`) VALUES
(1, 'loc456693', 'HO LT 1F', NULL, NULL),
(2, 'loc202068', 'HO LT 1FA', NULL, NULL),
(3, 'loc310523', 'HO LT 1J', NULL, NULL),
(4, 'loc313912', 'HO LT 1JA', NULL, NULL),
(5, 'loc354551', 'HO LT 2F', NULL, NULL),
(6, 'loc302013', 'HO LT 2FA', NULL, NULL),
(7, 'loc326910', 'HO LT 2J', NULL, NULL),
(8, 'loc354089', 'HO LT 2JA', NULL, NULL),
(9, 'loc254779', 'HO LT 3F', NULL, NULL),
(10, 'loc495546', 'HO LT 3FA', NULL, NULL),
(11, 'loc341307', 'HO LT 3J', NULL, NULL),
(12, 'loc388511', 'HO LT 3JA', NULL, NULL),
(13, 'loc350184', 'HO LT 4F', NULL, NULL),
(14, 'loc220007', 'HO LT 4FA', NULL, NULL),
(15, 'loc229658', 'HO LT 4J', NULL, NULL),
(16, 'loc263393', 'HO LT 4JA', NULL, NULL),
(17, 'loc371352', 'LEGOK LT 1', NULL, NULL),
(18, 'loc289690', 'LEGOK LT 2', NULL, NULL),
(19, 'loc296236', 'LEGOK LT 3', NULL, NULL),
(20, 'loc470258', 'LEGOK LT 4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hard_fix_detail`
--

CREATE TABLE `hard_fix_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hard_fix_general_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_vendor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hard_fix_detail`
--

INSERT INTO `hard_fix_detail` (`id`, `hard_fix_general_unique`, `hard_fix_kind`, `hard_fix_desc`, `hard_fix_price`, `hard_fix_vendor`, `hard_fix_date`, `created_at`, `updated_at`) VALUES
(1, 'phs9531b1c9ff63cb3c7fdeed', 'Spare Part', 'SSD Vgen 512Gb', '740.000', 'TD', '2022-01-21', '2022-01-21 08:18:38', '2022-01-21 08:18:38'),
(2, 'phs9531b1c9ff63cb3c7fdeed', 'Jasa', 'Jasa Pasang', '50.000', 'TD', '2022-01-21', '2022-01-21 08:19:08', '2022-01-21 08:19:08'),
(3, 'phs4b1bd79c823ae67b581707', 'Spare Part', 'RAM DDR3 4 Gb VGEN', '300.000', 'TD', '2022-01-24', '2022-01-21 08:23:57', '2022-01-21 08:23:57'),
(4, 'phs81fcc7422dec002f705c29', 'Spare Part', 'Roller M200', '300000', 'EDP', '2022-01-21', '2022-01-21 09:45:27', '2022-01-21 09:45:27'),
(5, 'phs81fcc7422dec002f705c29', 'Jasa', 'Jasa Pasang', '50000', 'EDP', '2022-01-21', '2022-01-21 09:45:47', '2022-01-21 09:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `hard_fix_general`
--

CREATE TABLE `hard_fix_general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hard_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_general_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_user_id` tinyint(4) NOT NULL,
  `hard_fix_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_hardware_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_hardware_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_uraian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_fix_analisa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hard_fix_penyelesaian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hard_fix_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hard_fix_general`
--

INSERT INTO `hard_fix_general` (`id`, `hard_urut`, `hard_fix_general_unique`, `hard_fix_number`, `hard_fix_user`, `hard_fix_user_id`, `hard_fix_divisi`, `hard_fix_location`, `hard_fix_hardware_unique`, `hard_fix_hardware_name`, `hard_fix_uraian`, `hard_fix_analisa`, `hard_fix_penyelesaian`, `hard_fix_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'phs9531b1c9ff63cb3c7fdeed', '001/EDP-PHS/01/2022', 'Muhammad Wahyu', 2, 'BDMCSS', 'HO LT 1J', 'Kosong', 'PC - Wahyu', 'Tidak berjalan dengan baik', 'HDD Rusak', 'Ganti SSD', 'Selesai', '2022-01-21 07:18:13', '2022-01-21 08:22:41'),
(2, '2', 'phs4b1bd79c823ae67b581707', '002/EDP-PHS/01/2022', 'Administrator', 1, 'AREA 2', 'LEGOK LT 3', 'pc19dd25ec7f6f9be06b14530', 'PC - Wahyu', 'Hang lagi,, ga mau hidup samsek', 'Ram kebakar', 'Ganti RAM', 'Progress', '2022-01-21 08:21:00', '2022-01-21 08:23:15'),
(3, '3', 'phsa2f37c1ad7c391437850ff', '003/EDP-PHS/01/2022', 'Administrator', 1, 'BOD, DIREKTORAT, KOM', 'HO LT 1J', 'pc19dd25ec7f6f9be06b14530', 'PC - Wahyu', 'RUsakkkk', NULL, NULL, 'Progress', '2022-01-21 08:26:47', '2022-01-21 08:26:47'),
(4, '4', 'phs81fcc7422dec002f705c29', '004/EDP-PHS/01/2022', 'Administrator', 1, 'BDMCSS', 'HO LT 1F', 'prnt2606922bd731f72f893bb', 'Epson M100 - HO LT 4F', 'Macett printnya', 'Roller rusak', 'ganti roller', 'Progress', '2022-01-21 09:44:08', '2022-01-21 09:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `hard_req`
--

CREATE TABLE `hard_req` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hard_req_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hard_req_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_user_id` tinyint(4) NOT NULL,
  `hard_req_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_referensi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_mainboard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_processor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_memory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_hdd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_ssd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_casing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_vga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_keyboard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_mouse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_printer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_monitor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_alasan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_req_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `hard_req_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Progress',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hard_req`
--

INSERT INTO `hard_req` (`id`, `hard_req_unique`, `hard_req_urut`, `hard_req_name`, `hard_req_number`, `hard_req_user`, `hard_req_user_id`, `hard_req_divisi`, `hard_req_location`, `hard_req_referensi`, `hard_req_mainboard`, `hard_req_processor`, `hard_req_memory`, `hard_req_hdd`, `hard_req_ssd`, `hard_req_casing`, `hard_req_vga`, `hard_req_keyboard`, `hard_req_mouse`, `hard_req_printer`, `hard_req_monitor`, `hard_req_other`, `hard_req_alasan`, `hard_req_price`, `hard_req_status`, `created_at`, `updated_at`) VALUES
(1, 'pph33702f52506cf7c54bbfd1', '1', NULL, '001/EDP-PPH/01/2022', 'Administrator', 1, 'AREA 2', 'HO LT 1FA', 'Kosong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MK-120', 'tidak ada', NULL, 'Tidak Ada', 'asds', NULL, 'Progress', '2022-01-21 03:50:41', '2022-01-21 03:50:41'),
(2, 'pphb59ee3f5b40eed1970415f', '2', NULL, '002/EDP-PPH/01/2022', 'Muhammad Wahyu', 2, 'AREA 2', 'HO LT 1JA', 'Kosong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tidak ada', NULL, 'Tidak Ada', 'asdasd', NULL, 'Progress', '2022-01-21 04:15:46', '2022-01-21 04:15:46'),
(3, 'pphdc526de90717f9ff25ad09', '3', 'PC STANDARD ADMIN', '003/EDP-PPH/01/2022', 'Administrator', 1, 'MBD', 'HO LT 1FA', 'Ref 1', 'Asus', 'i3-4170 3.7 ghz', '4 Gb DDR 4', '-', '256 Gb Vgen', 'Simbada Sim V', '-', 'Logitech MK 120', 'Logitech MK 120', NULL, 'LED LG 19 Inch', NULL, 'Untuk orang baru', NULL, 'Progress', '2022-01-21 08:11:25', '2022-01-21 08:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_ink`
--

CREATE TABLE `inventaris_ink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ink_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_ink`
--

INSERT INTO `inventaris_ink` (`id`, `ink_unique`, `ink_code`, `ink_name`, `ink_qty`, `created_at`, `updated_at`) VALUES
(1, 'ink98454be78903cb2349b019', 'Epson-774', 'Epson 774 75 ml', '3', '2022-01-21 09:40:01', '2022-01-21 09:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_ink_log`
--

CREATE TABLE `inventaris_ink_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ink_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_old_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_old_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_new_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_new_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_old_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_new_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_ink_report`
--

CREATE TABLE `inventaris_ink_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ink_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_qty_old` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_qty_new` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_printer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_printer_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_ink_report`
--

INSERT INTO `inventaris_ink_report` (`id`, `ink_unique`, `ink_user`, `ink_code`, `ink_name`, `ink_qty_old`, `ink_qty_new`, `ink_printer`, `ink_printer_unique`, `ink_desc`, `ink_status`, `created_at`, `updated_at`) VALUES
(1, 'ink98454be78903cb2349b019', 'Darma', 'Epson-774', 'Epson 774 75 ml', '4', '3', 'Epson M100', 'prnt2606922bd731f72f893bb', 'Bocor', 'Request', '2022-01-21 09:42:39', '2022-01-21 09:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_laptop`
--

CREATE TABLE `inventaris_laptop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laptop_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laptop_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_laptop`
--

INSERT INTO `inventaris_laptop` (`id`, `laptop_urut`, `laptop_unique`, `laptop_user`, `laptop_name`, `laptop_old_number`, `laptop_number`, `laptop_serial_number`, `laptop_price`, `laptop_status`, `laptop_condition`, `laptop_processor`, `laptop_vga`, `laptop_ram`, `laptop_hdd`, `laptop_ssd`, `laptop_os`, `laptop_buy_date`, `created_at`, `updated_at`) VALUES
(1, '1', 'lapfc647178cf1d02c07d3ca0', 'Endik', 'Lenovo Ndyik', 'Kosong', '001/LGK/LPT/2022', '8831432rffdsf', '9400000', 'NOP', 'Performa Sempurna', 'AMD Ryzen 7 5700u 8 Core16 thread 1.8 Ghz', 'Nvidia GT 930mx 2Gb', '8 GB DDR4', '0', '512', 'Windows 11 64bit', '2022-01-21', '2022-01-21 09:52:14', '2022-01-21 09:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_laptop_log`
--

CREATE TABLE `inventaris_laptop_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laptop_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_old_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laptop_new_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_monitor`
--

CREATE TABLE `inventaris_monitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monitor_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_monitor_log`
--

CREATE TABLE `inventaris_monitor_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monitor_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_old_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor_new_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_pc`
--

CREATE TABLE `inventaris_pc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pc_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_mainboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_pc`
--

INSERT INTO `inventaris_pc` (`id`, `pc_urut`, `pc_unique`, `pc_user`, `pc_old_number`, `pc_number`, `pc_price`, `pc_location`, `pc_condition`, `pc_mainboard`, `pc_processor`, `pc_vga`, `pc_ram`, `pc_hdd`, `pc_ssd`, `pc_os`, `pc_buy_date`, `created_at`, `updated_at`) VALUES
(1, '1', 'pc19dd25ec7f6f9be06b14530', 'Wahyu', 'Kosong', '001/LGK/PC/2022', '7000000', 'HO LT 3J', 'Performa Sempurna', 'H561', 'Intel Core I7', 'intergrated', '8 GB DDR3', '512', '0', 'Windows 7 64bit', '2022-01-21', '2022-01-21 07:16:35', '2022-01-21 07:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_pc_log`
--

CREATE TABLE `inventaris_pc_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pc_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_mainboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_old_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_mainboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_new_os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_printer`
--

CREATE TABLE `inventaris_printer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `printer_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_old_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_printer`
--

INSERT INTO `inventaris_printer` (`id`, `printer_urut`, `printer_unique`, `printer_name`, `printer_old_number`, `printer_number`, `printer_serial_number`, `printer_price`, `printer_location`, `printer_condition`, `printer_kind`, `printer_type`, `printer_buy_date`, `created_at`, `updated_at`) VALUES
(1, '1', 'prnt2606922bd731f72f893bb', 'Epson M100', 'Kosong', '001/HO/PRINT/2022', 'ABNDDEM100', '2000000', 'HO LT 4F', 'Performa Sempurna', 'Printer', 'All in One', '2022-01-21', '2022-01-21 09:38:45', '2022-01-21 09:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_printer_ink_pair`
--

CREATE TABLE `inventaris_printer_ink_pair` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `printer_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ink_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_printer_ink_pair`
--

INSERT INTO `inventaris_printer_ink_pair` (`id`, `printer_unique`, `ink_unique`, `created_at`, `updated_at`) VALUES
(1, 'prnt2606922bd731f72f893bb', 'ink98454be78903cb2349b019', '2022-01-21 09:41:05', '2022-01-21 09:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_printer_log`
--

CREATE TABLE `inventaris_printer_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `printer_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_old_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_old_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_old_kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_old_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_new_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_new_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_new_kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_new_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_23_043528_create_laptop_table', 1),
(6, '2021_12_23_044601_create_pc_table', 1),
(7, '2021_12_23_045601_create_printer_table', 1),
(8, '2021_12_23_064119_create_monitor_table', 1),
(9, '2021_12_23_081907_create_ink_table', 1),
(10, '2021_12_23_081926_create_ink_log_table', 1),
(11, '2021_12_23_085411_create_monitor_log_table', 1),
(12, '2021_12_23_085430_create_printer_log_table', 1),
(13, '2021_12_23_085450_create_pc_log_table', 1),
(14, '2021_12_23_085512_create_laptop_log_table', 1),
(15, '2021_12_23_092631_create_ink_report_table', 1),
(16, '2021_12_26_142411_create_hard_fix_detail_table', 1),
(17, '2021_12_26_142435_create_hard_fix_general_table', 1),
(18, '2021_12_28_033635_create_inventaris_ink_pair_table', 1),
(19, '2022_01_03_024211_create_soft_req_table', 1),
(20, '2022_01_03_052030_create_duta_divisi_table', 1),
(21, '2022_01_03_063539_create_duta_lokasi_table', 1),
(22, '2022_01_10_074451_create_pc_template', 1),
(23, '2022_01_10_075824_create_hard_req', 1);

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
-- Table structure for table `pc_template`
--

CREATE TABLE `pc_template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_mainboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_processor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_memory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_hdd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_ssd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_vga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_casing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_keyboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_mouse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pc_template`
--

INSERT INTO `pc_template` (`id`, `template_name`, `template_mainboard`, `template_processor`, `template_memory`, `template_hdd`, `template_ssd`, `template_vga`, `template_casing`, `template_keyboard`, `template_mouse`, `created_at`, `updated_at`) VALUES
(1, 'PC STANDARD ADMIN', 'Asus', 'i3-4170 3.7 ghz', '4 Gb DDR 4', '-', '256 Gb Vgen', '-', 'Simbada Sim V', 'Logitech MK 120', 'Logitech MK 120', '2022-01-21 08:09:54', '2022-01-21 08:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soft_req`
--

CREATE TABLE `soft_req` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soft_urut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_unique` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_user_id` tinyint(4) NOT NULL,
  `soft_req_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_email_forward` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_akses_fina` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_akses_server` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_akses_internet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_req_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_req_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soft_req`
--

INSERT INTO `soft_req` (`id`, `soft_urut`, `soft_req_unique`, `soft_req_number`, `soft_req_user`, `soft_req_user_id`, `soft_req_divisi`, `soft_req_location`, `soft_req_email`, `soft_req_email_forward`, `soft_req_akses_fina`, `soft_req_akses_server`, `soft_req_akses_internet`, `soft_req_other`, `soft_req_reason`, `soft_req_status`, `soft_req_date`, `created_at`, `updated_at`) VALUES
(1, '1', 'pps38c26ce6271ba8ec6f3acf', '001/EDP-PPS/01/2022', 'Administrator', 1, 'ADMIN PROJECT', 'HO LT 1FA', 'Kosong@example.com', 'kosong@example.com', 'Kosong', 'Tidak', 'Tidak', 'Tidak Ada', 'Keraj', 'Progress', '21/01/2022', '2022-01-21 03:51:09', '2022-01-21 03:51:09'),
(2, '2', 'pps537aa999406748d138ba60', '002/EDP-PPS/01/2022', 'Administrator', 1, 'AREA 2', 'HO LT 1JA', 'Kosong@example.com', 'kosong@example.com', 'Kosong', 'Tidak', 'Tidak', 'Tidak Ada', 'Kerja', 'Selesai', '21/01/2022', '2022-01-21 03:51:35', '2022-01-21 03:51:48'),
(3, '3', 'pps7f78fdef484797dd7cb216', '003/EDP-PPS/01/2022', 'Muhammad Wahyu', 2, 'ADMIN PROJECT', 'HO LT 1J', 'Kosong@example.com', 'kosong@example.com', 'Kosong', '', '', '', 'Kerja', 'Progress', '21/01/2022', '2022-01-21 04:17:16', '2022-01-21 04:17:16'),
(4, '4', 'ppsc293e0d86c9962670f54dc', '004/EDP-PPS/01/2022', 'test', 3, 'AREA 2', 'HO LT 1J', 'Kosong@example.com', 'kosong@example.com', 'Kosong', '', '', '', 'test', 'Progress', '21/01/2022', '2022-01-21 04:23:18', '2022-01-21 04:23:18'),
(5, '5', 'pps3e169c79944a54fbb4c60a', '005/EDP-PPS/01/2022', 'Administrator', 1, 'HR', 'HO LT 1JA', 'hendrarudianto@ptduta.com', '-', 'Kosong', '', 'Iya', 'kosong', 'Untuk email2an', 'Progress', '21/01/2022', '2022-01-21 08:39:55', '2022-01-21 08:41:34'),
(6, '6', 'ppsc181c43a2d388d0f0ea256', '006/EDP-PPS/01/2022', 'Administrator', 1, 'BDMCSS', 'HO LT 2FA', NULL, NULL, 'Hendra akses DO', '', '', NULL, 'Akses FINA', 'Progress', '21/01/2022', '2022-01-21 08:43:56', '2022-01-21 08:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isRole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isCreate` tinyint(1) NOT NULL DEFAULT '1',
  `isRead` tinyint(1) NOT NULL DEFAULT '1',
  `isUpdate` tinyint(1) NOT NULL DEFAULT '0',
  `isDelete` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `isRole`, `isCreate`, `isRead`, `isUpdate`, `isDelete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'edp@ptduta.com', NULL, '$2y$10$mbmtsOXWxwMEUOqrAOHPbeK3REY6tOxOACoLVYIu/QkERxX.AUSa2', 1, '1', 1, 1, 1, 1, 'uPCEAKWHjxVndyHYeBLOiCOAIdfrxkPbIcUxCmwsaTnPuxXGX3PLLSDOKJ1u', '2022-01-21 03:16:25', '2022-01-21 03:16:25'),
(2, 'Muhammad Wahyu', 'wahyu@ptduta.com', NULL, '$2y$10$EC4WIIdnYpiXUU.e/9al1O8IS4HtQLjO/ki9JTdGuyxb72jC.Ep9.', 0, NULL, 1, 1, 0, 0, 'Eu9imCXxI5rKcDFspFmVuXuDBKa4n54JJwoHJTAt1qPaUwTAFuRJCB75jusH', '2022-01-21 04:15:13', '2022-01-21 04:15:13'),
(3, 'test', 'test@test.com', NULL, '$2y$10$aMSxEHSIVY9IbCtm/SNt/OA3baUpwr6qMHO1EklZSo/wzQ2TE.QZS', 0, NULL, 1, 1, 0, 0, 'XJGWK4eVf8TquAV63uFgBhSWRESKs136T9oVp7XeNmFl8aHRFQGaS9Z8NU19', '2022-01-21 04:22:40', '2022-01-21 04:22:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duta_divisi`
--
ALTER TABLE `duta_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duta_lokasi`
--
ALTER TABLE `duta_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hard_fix_detail`
--
ALTER TABLE `hard_fix_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hard_fix_general`
--
ALTER TABLE `hard_fix_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hard_req`
--
ALTER TABLE `hard_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_ink`
--
ALTER TABLE `inventaris_ink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_ink_log`
--
ALTER TABLE `inventaris_ink_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_ink_report`
--
ALTER TABLE `inventaris_ink_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_laptop`
--
ALTER TABLE `inventaris_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_laptop_log`
--
ALTER TABLE `inventaris_laptop_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_monitor`
--
ALTER TABLE `inventaris_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_monitor_log`
--
ALTER TABLE `inventaris_monitor_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_pc`
--
ALTER TABLE `inventaris_pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_pc_log`
--
ALTER TABLE `inventaris_pc_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_printer`
--
ALTER TABLE `inventaris_printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_printer_ink_pair`
--
ALTER TABLE `inventaris_printer_ink_pair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_printer_log`
--
ALTER TABLE `inventaris_printer_log`
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
-- Indexes for table `pc_template`
--
ALTER TABLE `pc_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `soft_req`
--
ALTER TABLE `soft_req`
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
-- AUTO_INCREMENT for table `duta_divisi`
--
ALTER TABLE `duta_divisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `duta_lokasi`
--
ALTER TABLE `duta_lokasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hard_fix_detail`
--
ALTER TABLE `hard_fix_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hard_fix_general`
--
ALTER TABLE `hard_fix_general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hard_req`
--
ALTER TABLE `hard_req`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventaris_ink`
--
ALTER TABLE `inventaris_ink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_ink_log`
--
ALTER TABLE `inventaris_ink_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_ink_report`
--
ALTER TABLE `inventaris_ink_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_laptop`
--
ALTER TABLE `inventaris_laptop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_laptop_log`
--
ALTER TABLE `inventaris_laptop_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_monitor`
--
ALTER TABLE `inventaris_monitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_monitor_log`
--
ALTER TABLE `inventaris_monitor_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_pc`
--
ALTER TABLE `inventaris_pc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_pc_log`
--
ALTER TABLE `inventaris_pc_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_printer`
--
ALTER TABLE `inventaris_printer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_printer_ink_pair`
--
ALTER TABLE `inventaris_printer_ink_pair`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_printer_log`
--
ALTER TABLE `inventaris_printer_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pc_template`
--
ALTER TABLE `pc_template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soft_req`
--
ALTER TABLE `soft_req`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
