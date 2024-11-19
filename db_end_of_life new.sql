-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 08.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_end_of_life`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Manager','Staff') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin_user', 'admin@example.com', '$2y$10$uV0qjYX1SM5I3O97e9K8n.rgXZCOeZwoC/CdLkG1I0OsB8d8xGq1K', 'Admin', '2024-11-04 05:21:31'),
(2, 'manager_user', 'manager@example.com', '$2y$10$YvLS2Qmd.LC4ZkSB4LfWw.e8k5g7wBWmqOdNCXMCq1Na5wJhR28iK', '', '2024-11-04 05:21:31'),
(3, 'staff_user', 'staff@example.com', '$2y$10$Tm/7/TJ2cQzDPZyxW0cHseZ.bURJYKtI20LFp1H8zNbd5flsh9C4y', 'Staff', '2024-11-04 05:21:31'),
(5, 'admin', 'adminaja@example.com', '$2y$10$MHmxANcVsR8SCFJB5H2vxOVS4uHQsYDbE7oKohPp5ja6BDSL/iayO', 'Admin', '2024-11-03 21:27:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `manufaktur` varchar(20) NOT NULL,
  `durasi_lisensi` varchar(20) NOT NULL,
  `nomor_lisensi` varchar(50) NOT NULL,
  `instalasi_pertama` date NOT NULL,
  `tanggal_kadaluarsa` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `pengingat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `manufaktur`, `durasi_lisensi`, `nomor_lisensi`, `instalasi_pertama`, `tanggal_kadaluarsa`, `created_at`, `pengingat`) VALUES
(1, 'Autocad LT', 'Autodesk', '3 Years', '573-12120397', '2022-06-14', '2025-06-13', '2024-10-29 02:48:38', NULL),
(2, 'Windows 10 Pro ( GGWA )', 'Microsoft', 'Life-time', 'CO-22-11024-PCMAN-KMI', '0000-00-00', NULL, '2024-10-29 02:48:38', NULL),
(3, 'Windows 10 Pro ( VLSC )', 'Microsoft', 'Life-time', '75645292', '0000-00-00', NULL, '2024-10-29 02:48:38', NULL),
(4, 'Visio Standard 2021', 'Microsoft', 'Life-time', 'CO-22-11024-PCMAN-KMI', '0000-00-00', NULL, '2024-10-29 02:48:38', NULL),
(5, 'Office Professional 2019', 'Microsoft', 'Life-time', '74151888', '0000-00-00', NULL, '2024-10-29 02:48:38', NULL),
(6, 'Project 2019', 'Microsoft', 'Life-time', '87893579', '0000-00-00', NULL, '2024-10-29 02:48:38', NULL),
(7, 'Zoom One Pro ( 100 Participant )', 'Zoom', '1 Year', 'P-215473523', '2023-01-25', '2024-01-24', '2024-10-29 02:48:38', NULL),
(16, 'vs code', 'microsoft', '2 tahun', '123456', '2024-10-01', '2026-10-31', '2024-11-04 07:14:34', '7,3,1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
