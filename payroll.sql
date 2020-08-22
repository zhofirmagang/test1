-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 06:00 AM
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
  `gender` varchar(30) NOT NULL,
  `birth_date` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL,
  `annual_basic_pay` float NOT NULL,
  `monthly_pay` float NOT NULL,
  `tax` float NOT NULL,
  `tax_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `gender`, `birth_date`, `address`, `city`, `province`, `postal_code`, `email`, `website`, `join_date`, `annual_basic_pay`, `monthly_pay`, `tax`, `tax_amount`) VALUES
(101, 'Andi', 'Male', '1994-09-22', 'Jalan Senopati No .2', 'Bandung', 'Jawa Barat', '2345', 'Andi@gmail.com', 'www.facebook.com', '2017-10-26', 2000000, 11833.3, 29, 21500),
(102, 'Maharani', 'female', '1994-04-04', 'Kebun Raya', 'Semarang', 'Jawa Tengah', '12453', 'maharani@gmail.com', 'www.facebook.com', '2017-10-26', 3000000, 1675000, 8, 33250),
(105, 'Guntur', 'male', '1994-09-23', 'Jalan Mangga Dua', 'Jakarta', 'Jakarta', '12651', 'guntur@gmail.co', 'www.snapchat.com', '2017-10-10', 1000000, 6166.67, 26, 10500),
(106, 'Veri ', 'Male', '22/09/1994', 'Kampung Aquarium', 'Jawa Timur', 'Surabaya', '567754', 'veri@gmail.com', 'www.snap.cpm', '22/11/2017', 4440000, 24790, 33, 49210),
(109, 'Tejo', 'Male', '1995/09/22', 'Waringin Barat', 'Sumatera Utara', 'Waringin', '675443', 'tejo@gmail.com', 'jot.com', '2017/09/24', 3000000, 16749.9, 33, 33249.9),
(123, 'Sumarsih', 'female', '1994-10-09', 'Jalan Bulu Ayam', 'Denpasar', 'Bali', '456335', 'sumarsih@gmail.com', 'fb.co.id', '2017-10-31', 3000000, 16750, 33, 33250),
(124, 'Yuri', 'Female', '1994/09/08', 'Jalan Gajah Mada', 'Sleman', 'Yogyakarta', 'm7g65f', 'yuri@gmail.com', 'gmail.com', '1994/09/8', 4000000, 223333, 33, 443333),
(167, 'Jaya Sentosa', 'Male', '1997-06-17', 'Jalan Muja Muju', 'Bantul', 'Yogyakarta', '55657', 'jaya@gmail.com', 'www.facebook.com', '2017-10-20', 890000, 5830, 20.5, 8836.67);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `periode` varchar(25) NOT NULL,
  `sisa_utang_jam_bulan_sebelumnya` int(11) NOT NULL,
  `utang_jam_bulan_ini` int(11) NOT NULL,
  `bayar_utang_jam_bulan_ini` int(11) NOT NULL,
  `sisa_utang_jam_bulan_ini` int(11) NOT NULL,
  `telat` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `total_hadir` int(11) NOT NULL,
  `pokok` float NOT NULL,
  `tj_tetap` int(11) NOT NULL,
  `tj_bpjs` int(11) NOT NULL,
  `lembur_mingguan` int(11) NOT NULL,
  `lembur_tgl_merah` int(11) NOT NULL,
  `pembayaran_bpjs` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `periode`, `sisa_utang_jam_bulan_sebelumnya`, `utang_jam_bulan_ini`, `bayar_utang_jam_bulan_ini`, `sisa_utang_jam_bulan_ini`, `telat`, `sakit`, `total_hadir`, `pokok`, `tj_tetap`, `tj_bpjs`, `lembur_mingguan`, `lembur_tgl_merah`, `pembayaran_bpjs`, `total`) VALUES
(101, 'Andi', 'Juli 2020', 0, 0, 0, 0, 1, 2, 31, 10, 1500, 12, 0, 0, 0, 0),
(105, 'Guntur', 'Agustus 2020', 0, 0, 0, 0, 1, 2, 28, 1500000, 100000, 50000, 5000, 10000, 25000, 0),
(105, 'Guntur', 'Agustus 2020', 0, 0, 0, 0, 1, 2, 28, 1500000, 100000, 50000, 5000, 10000, 25000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `honor`
--

CREATE TABLE `honor` (
  `nama` varchar(50) NOT NULL,
  `periode` varchar(25) NOT NULL,
  `sisa_utang_jam_bulan_sebelumnya` int(11) NOT NULL,
  `utang_jam_bulan_ini` int(11) NOT NULL,
  `bayar_utang_jam_bulan_ini` int(11) NOT NULL,
  `sisa_utang_jam_bulan_ini` int(11) NOT NULL,
  `telat` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `total_hadir` int(11) NOT NULL,
  `honor` int(11) NOT NULL,
  `insentif_harian` int(11) NOT NULL,
  `leader` int(11) NOT NULL,
  `bonus_closing` int(11) NOT NULL,
  `bonus_peningkatan` int(11) NOT NULL,
  `bonus_tgl_merah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurangan`
--

CREATE TABLE `pengurangan` (
  `Pembayaran BPJS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `Sakit` int(11) NOT NULL,
  `Telat` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `sisa utang jam bulan sebelumnya` int(11) NOT NULL,
  `utang jam bulan ini` int(11) NOT NULL,
  `bayar utang jam bulan ini` int(11) NOT NULL,
  `sisa utang jam bulan ini` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `name` (`name`),
  ADD KEY `annual_basic_pay` (`annual_basic_pay`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD KEY `id` (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `pokok` (`pokok`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `employee` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
