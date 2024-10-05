-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 03:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data`
--

CREATE TABLE `tabel_data` (
  `id_data` int(11) NOT NULL,
  `istilah` varchar(20) NOT NULL,
  `arti` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_data`
--

INSERT INTO `tabel_data` (`id_data`, `istilah`, `arti`) VALUES
(1, 'Abstrak', 'ringkasan suatu pernyataan, laporan, karangan, dan sebagainya yang di susun secara sistematis dan menyeluruh (abstract)'),
(2, 'abstraksi dana bank', 'pengambilan dana bank secara tidak sah (misalnya berupa penggelapan atau penyalahgunaan otorisasi) dan kas, rekening eskro, rekening trust, atau rekening lain (abstraction of bank funds)'),
(3, 'acara - pengacara', 'ahli hukum atau orang yang diberi kuasa berdasarkan hukum oleh orang lain untuk melakukan transaksi bisnis; selain itu, dapat juga mewakili orang lain dalam berperkara di pengadilan (attorney)'),
(4, 'ad valorem', 'lazim digunakan berkenaan dengan pembebanan pajak impor, yang berarti menurut nilai, tidak menurut timbangan, ukuran, atau satuan; bea ad valorem adalah bea yang ditetapkan menurut nilai (uang), tidak menurut timbangan, ukuran atau satuan, misalnya provisi kredit ditetapkan sebesar 1% dan jumlah yang tercantum dalam perjanjian kredit yang bersangkutan (ad valorem)'),
(5, 'adjudikasi', 'putusan yang dltetapkan oleh pengadilan yang berwenang untuk menangani masalah yang diperselisihkan; penyelesaian perselisihan ini berbeda dengan arbitrase (adjudication)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_data`
--
ALTER TABLE `tabel_data`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_data`
--
ALTER TABLE `tabel_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
