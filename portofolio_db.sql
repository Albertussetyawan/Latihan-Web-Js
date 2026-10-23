-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2026 pada 04.53
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
-- Database: `portofolio_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart_data`
--

CREATE TABLE `chart_data` (
  `id` int(11) NOT NULL,
  `label_data` varchar(100) NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chart_data`
--

INSERT INTO `chart_data` (`id`, `label_data`, `nilai`, `created_at`) VALUES
(5, 'Semester 1', 2.00, '2026-10-21 06:58:48'),
(6, 'Semester 2', 3.00, '2026-10-21 06:58:48'),
(7, 'Semester 3', 5.00, '2026-10-21 06:58:48'),
(8, 'Semester 4', 4.00, '2026-10-21 06:58:48'),
(9, 'Semester 5', 7.00, '2026-10-21 06:58:48'),
(10, 'Semester 6', 6.00, '2026-10-21 06:58:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `pesan`, `created_at`) VALUES
(1, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:14:06'),
(2, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:14:15'),
(3, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:15:24'),
(4, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:15:44'),
(5, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:23:13'),
(6, 'albert', 'albertus.20242004@student.atmi.ac.id', 'haloo', '2026-10-21 07:24:06'),
(7, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:24:16'),
(8, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:24:24'),
(9, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:26:10'),
(10, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaaaa', '2026-10-21 07:30:03'),
(11, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaaa', '2026-10-21 07:33:07'),
(12, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:35:29'),
(13, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:36:27'),
(14, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:40:26'),
(15, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaaa', '2026-10-21 07:41:18'),
(16, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:42:48'),
(17, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaaa', '2026-10-21 07:43:01'),
(18, 'albert', 'albertus.20242004@student.atmi.ac.id', 'aaa', '2026-10-21 07:43:41'),
(19, 'aaaa', 'albertus.20242004@student.atmi.ac.id', 'aaaa', '2026-10-21 07:44:06'),
(20, 'aaaa', 'albertussetyawan@gmail.com', 'aaaaaa', '2026-10-22 06:11:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`) VALUES
(1, 'GPS Meter', 'Sistem pengukuran jarak menggunakan GPS dan mikrokontroler.'),
(2, 'Automatic Feeder', 'Sistem pemberian pakan otomatis menggunakan sensor dan motor.'),
(3, 'IoT', 'Sistem monitoring menggunakan mikrokontroler dan website.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chart_data`
--
ALTER TABLE `chart_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
