-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2024 pada 06.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbudaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sabtu budaya`
--

CREATE TABLE `sabtu budaya` (
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Kesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sabtu budaya`
--

INSERT INTO `sabtu budaya` (`Nama`, `Email`, `Kesan`) VALUES
('Nindya', 'ninndyaa@gmail.com', 'Sangat berpengaruh dalam mengenalkan budaya kita'),
('Nindya', 'ninndyaa@gmail.com', 'Sangat berpengaruh dalam mengenalkan budaya kita'),
('Dwi', 'dwiiaul@gmail.com', 'Mantap betoelll'),
('Dwi', 'dwiiaul@gmail.com', 'Mantap betoelll'),
('Paniw', 'elppnii@gmail.com', 'so happy'),
('Paniw', 'elppnii@gmail.com', 'so happy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
