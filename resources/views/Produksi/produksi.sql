-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 11:39 AM
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
-- Database: `produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `panel_detail`
--

CREATE TABLE `panel_detail` (
  `id` int(11) NOT NULL,
  `panel_seri` varchar(255) NOT NULL,
  `panel_spv` varchar(255) NOT NULL,
  `panel_wiring` varchar(255) NOT NULL,
  `panel_mekanik` varchar(255) NOT NULL,
  `panel_deadline` varchar(255) NOT NULL,
  `panel_qcpass` varchar(255) NOT NULL,
  `panel_status_komponen` varchar(255) NOT NULL,
  `panel_cell` int(4) UNSIGNED ZEROFILL NOT NULL,
  `panel_FW` varchar(255) NOT NULL,
  `panel_LM` varchar(255) NOT NULL,
  `panel_aktual_produksi` varchar(255) NOT NULL,
  `panel_aktual_qc` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_detail`
--

INSERT INTO `panel_detail` (`id`, `panel_seri`, `panel_spv`, `panel_wiring`, `panel_mekanik`, `panel_deadline`, `panel_qcpass`, `panel_status_komponen`, `panel_cell`, `panel_FW`, `panel_LM`, `panel_aktual_produksi`, `panel_aktual_qc`, `created_at`, `updated_at`) VALUES
(2, '220400021FL', 'Agus Prianto', 'APR, AAZ', 'APR', '2022-04-15T12:59', '2022-04-09T12:59', 'Kurang', 0001, 'F', 'L', '2022-04-14T16:34', '', '', ''),
(4, '220400121FL', 'Abdul Azis', 'APR', 'AAZ', '2022-02-01T10:19', '2022-04-29T10:19', 'Kurang', 0001, 'F', 'L', '', '', '', ''),
(5, '220400131FL', 'Abdul Azis', 'APR, AAZ', 'AAZ', '2022-01-01T08:48', '2022-04-09T08:50', 'Lengkap', 0001, 'F', 'L', '', '', '', ''),
(6, '22040014123FL', 'Agus Prianto', 'APR, AAZ', 'APR', '2022-01-01T08:54', '2022-03-04T08:54', 'Lengkap', 0123, 'F', 'L', '', '', '', ''),
(7, '220400152FM', 'Abdul Azis', 'APR', 'AAZ', '2022-04-18T08:55', '2022-04-18T08:55', 'Kurang', 0002, 'F', 'M', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `panel_header`
--

CREATE TABLE `panel_header` (
  `id` int(11) NOT NULL,
  `panel_nomor` int(4) UNSIGNED ZEROFILL NOT NULL,
  `panel_seri` varchar(255) NOT NULL,
  `panel_nama` varchar(255) NOT NULL,
  `panel_pelanggan` varchar(255) NOT NULL,
  `panel_proyek` varchar(255) NOT NULL,
  `panel_status_pekerjaan` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_header`
--

INSERT INTO `panel_header` (`id`, `panel_nomor`, `panel_seri`, `panel_nama`, `panel_pelanggan`, `panel_proyek`, `panel_status_pekerjaan`, `created_at`, `updated_at`) VALUES
(2, 0002, '220400021FL', 'PANEL B', 'WISWIS', 'JEKARTE', 'Selesai', '', ''),
(7, 0007, '220400072WM', 'SQIO', 'WAG', 'WSIO', 'Waspada', '', ''),
(8, 0008, '220400082WM', 'SQIO', 'WAG', 'WSIO', 'Waspada', '', ''),
(9, 0009, '220400092WM', 'SQIO', 'WAG', 'WSIO', 'Waspada', '', ''),
(10, 0010, '220400102WM', 'SQIO', 'WAG', 'WSIO', 'Waspada', '', ''),
(11, 0011, '220400112WM', 'SQIO', 'WAG', 'WSIO', 'Waspada', '', ''),
(12, 0012, '220400121FL', 'PANEL B', 'WISWIS', 'WSIO', 'Progress', '', ''),
(13, 0013, '220400131FL', '123', 'WISWIS', '123', 'Selesai', '', ''),
(14, 0014, '22040014123FL', 'SQIO', 'SRILANG', 'JEKARTE', 'Selesai', '', ''),
(15, 0015, '220400152FM', 'PANEL A', 'SWIFT', 'WSIO', 'Progress', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `tim_id` varchar(11) NOT NULL,
  `tim_nama` varchar(30) NOT NULL,
  `tim_alias` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `tim_id`, `tim_nama`, `tim_alias`) VALUES
(1, '1', 'SUEB', 'GUN'),
(2, '2', 'SUEA', 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_detail`
--
ALTER TABLE `panel_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_header`
--
ALTER TABLE `panel_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panel_nomor` (`panel_nomor`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_id` (`tim_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_detail`
--
ALTER TABLE `panel_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `panel_header`
--
ALTER TABLE `panel_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
