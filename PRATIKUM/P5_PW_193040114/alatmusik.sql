-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 12.23
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040114`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alatmusik`
--

CREATE TABLE `alatmusik` (
  `id` int(11) NOT NULL,
  `gambar` char(20) NOT NULL,
  `harga` char(30) NOT NULL,
  `asal` char(20) NOT NULL,
  `nama` char(20) NOT NULL,
  `cara` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alatmusik`
--

INSERT INTO `alatmusik` (`id`, `gambar`, `harga`, `asal`, `nama`, `cara`) VALUES
(1, '1.jpeg', 'Rp300000', 'Jabar', 'Angklung', 'Digoyang'),
(2, '2.jpeg', 'Rp600000', 'Eropa', 'Biola', 'Digesek'),
(3, '3.jpeg', 'Rp.500000', 'Eropa', 'Gitar', 'Dipetik'),
(4, '4.jpeg', 'Rp250000', 'Jabar', 'Suling', 'Ditiup'),
(5, '5.jpeg', 'Rp100000', 'China', 'Pianika', 'Ditiup'),
(6, '6.jpeg', 'Rp400000', 'Jamaika', 'Jimbe', 'Dipukul'),
(7, '7.jpeg', 'Rp500000', 'Arab', 'Rebana', 'Dipukul'),
(8, '8.jpeg', 'Rp400000', 'Jateng', 'Gong', 'Dipukul'),
(9, '11.jpg', 'Rp300000', 'Jateng', 'Rebab', 'Digesek'),
(10, '10.jpeg', 'Rp2000000', 'Jateng', 'Gamelan', 'Dipukul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
