-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 05:01 AM
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
(1, 'Andi', 'Male', '1994-09-22', 'Jalan Senopati No .2', 'Bandung', 'Jawa Barat', '2345', 'Andi@gmail.com', 'www.facebook.com', '2017-10-26', 2000000, 11833.3, 29, 21500),
(102, 'Maharani', 'female', '1994-04-04', 'Kebun Raya', 'Semarang', 'Jawa Tengah', '12453', 'maharani@gmail.com', 'www.facebook.com', '2017-10-26', 3000000, 1675000, 8, 33250),
(105, 'Guntur', 'male', '1994-09-23', 'Jalan Mangga Dua', 'Jakarta', 'Jakarta', '12651', 'guntur@gmail.co', 'www.snapchat.com', '2017-10-10', 1000000, 6166.67, 26, 10500),
(106, 'Veri ', 'Male', '22/09/1994', 'Kampung Aquarium', 'Jawa Timur', 'Surabaya', '567754', 'veri@gmail.com', 'www.snap.cpm', '22/11/2017', 4440000, 24790, 33, 49210),
(109, 'Tejo', 'Male', '1995/09/22', 'Waringin Barat', 'Sumatera Utara', 'Waringin', '675443', 'tejo@gmail.com', 'jot.com', '2017/09/24', 3000000, 16749.9, 33, 33249.9),
(123, 'Sumarsih', 'female', '1994-10-09', 'Jalan Bulu Ayam', 'Denpasar', 'Bali', '456335', 'sumarsih@gmail.com', 'fb.co.id', '2017-10-31', 3000000, 16750, 33, 33250),
(124, 'Yuri', 'Female', '1994/09/08', 'Jalan Gajah Mada', 'Sleman', 'Yogyakarta', 'm7g65f', 'yuri@gmail.com', 'gmail.com', '1994/09/8', 4000000, 223333, 33, 443333);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `Pokok` int(11) NOT NULL,
  `Tj.Tetap` int(11) NOT NULL,
  `Tj.BPJS` int(11) NOT NULL,
  `Lembur Mingguan` int(11) NOT NULL,
  `Lembur Tgl Merah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `honorarium`
--

CREATE TABLE `honorarium` (
  `Honor` int(11) NOT NULL,
  `Insentif Performa Harian` int(11) NOT NULL,
  `Honor Leader` int(11) NOT NULL,
  `Bonus Closing` int(11) NOT NULL,
  `Bonus % Peningkatan Closing` int(11) NOT NULL,
  `Bonus Tgl Merah` int(11) NOT NULL
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
  `Terlamabat` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
