-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 11.55
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspskd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `tgl`, `alamat`, `nomor`) VALUES
(14, 'Mika Abigael', 'ptjsfqOo+grIgQ==', '+Y26L+A=', 'pdrtfb2r8BQ='),
(16, 'Jeremy Coln', 'ptjvfKOp8QrJgQ==', '3om1L/zsog==', 'pNDnd7eu8RXI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginsiswa`
--

CREATE TABLE `loginsiswa` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginsiswa`
--

INSERT INTO `loginsiswa` (`id`, `username`, `password`) VALUES
(0, 'mika', '202cb962ac59075b964b07152d234b70'),
(0, 'jacob', '736b19f69aaca691fecd8400294cc383'),
(0, 'desi', '069e2dd171f61ecffb845190a7adf425'),
(0, 'roni', 'd78b154c99fe7f06ebc02ebd63d1c87c'),
(0, 'siswa', 'bcd724d15cde8c47650fda962968f102'),
(0, 'jeni', 'e8c9c132d620617aadef4ec5f51afa1d');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
