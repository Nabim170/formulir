-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2024 pada 09.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id`, `username`, `password`) VALUES
(1, 'aku', '18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_form`
--

CREATE TABLE `tb_form` (
  `nim` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `gender` enum('Laki-laki','perempuan') NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_form`
--

INSERT INTO `tb_form` (`nim`, `nama`, `fakultas`, `prodi`, `kelas`, `gender`, `saran`) VALUES
(1, 'Ak', 'Vokkasi', 'Dd', 'G', 'Laki-laki', 'Sq'),
(2, 'Ak', 'Vokkasi', 'Dd', 'G', 'Laki-laki', 'Sq'),
(3, 'Nanda Bima', 'Vokkasi', 'Dd', 'G', 'Laki-laki', 'Bb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
