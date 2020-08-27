-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 10:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `sisa_utang_jam_bulan_sebelumnya` int(50) NOT NULL,
  `utang_jam_bulan_ini` int(50) NOT NULL,
  `bayar_utang_jam_bulan_ini` int(50) NOT NULL,
  `sisa_utang_jam_bulan_ini` int(50) NOT NULL,
  `telat` int(50) NOT NULL,
  `sakit` int(50) NOT NULL,
  `total_hadir` int(50) NOT NULL,
  `gj_pokok` int(50) NOT NULL,
  `tj_tetap` int(50) NOT NULL,
  `tj_bpjs` int(50) NOT NULL,
  `lembur_mingguan` int(50) NOT NULL,
  `lembur_tgl_merah` int(50) NOT NULL,
  `pembayaran_bpjs` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `periode`, `sisa_utang_jam_bulan_sebelumnya`, `utang_jam_bulan_ini`, `bayar_utang_jam_bulan_ini`, `sisa_utang_jam_bulan_ini`, `telat`, `sakit`, `total_hadir`, `gj_pokok`, `tj_tetap`, `tj_bpjs`, `lembur_mingguan`, `lembur_tgl_merah`, `pembayaran_bpjs`, `total`) VALUES
(1, 'nolsatu', 'Agustus 2020', 30, 40, 10, 30, 5, 1, 28, 1500000, 100000, 50000, 5000, 2500, 10000, 0),
(101, 'Andi', 'Male', 1994, 0, 0, 0, 2345, 0, 0, 2017, 2000000, 111667, 33, 221667, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
