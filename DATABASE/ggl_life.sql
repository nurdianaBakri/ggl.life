-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 14.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggl.life`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_barang`
--

CREATE TABLE `table_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `gambar_barang` varchar(255) DEFAULT NULL,
  `harga` float(255,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_barang`
--

INSERT INTO `table_barang` (`id`, `kode_barang`, `nama_barang`, `gambar_barang`, `harga`) VALUES
(3, 'b003', 'kali', 'w', 20000),
(4, 'd0001', 'antimo', 'w', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_stok`
--

CREATE TABLE `table_stok` (
  `id` int(11) NOT NULL,
  `id_barang` int(255) DEFAULT NULL,
  `total_barang` int(255) DEFAULT NULL,
  `jenis_stok` enum('In','Out') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_stok`
--

INSERT INTO `table_stok` (`id`, `id_barang`, `total_barang`, `jenis_stok`) VALUES
(1, 1, 20, 'In');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `tgl_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(255) NOT NULL,
  `status_pelunasan` int(1) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sub_total` float(255,0) DEFAULT NULL,
  `id_barang` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`tgl_order`, `id`, `status_pelunasan`, `jumlah`, `sub_total`, `id_barang`) VALUES
('2022-01-21 06:05:28', 12, 1, 11, 220000, NULL),
('2022-01-21 06:08:24', 13, 1, 12, 24000, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_barang`
--
ALTER TABLE `table_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_stok`
--
ALTER TABLE `table_stok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_barang`
--
ALTER TABLE `table_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `table_stok`
--
ALTER TABLE `table_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
