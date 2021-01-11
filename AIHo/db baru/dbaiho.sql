-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 23.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaiho`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` int(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `usia` varchar(255) NOT NULL,
  `waktu` time NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `id_user`, `nama`, `alamat`, `no_telp`, `status`, `tanggal`, `usia`, `waktu`, `file`) VALUES
(2, 'cok', 'cokorda agung jaya laksmana prakasaa konsul', '123413', 813, 'asd', '2021-01-08', '123', '15:00:00', 'asd'),
(3, 'cok', 'asdasda asdasd', 'rumah', 123124, 'asdasd', '2021-01-15', '1354', '15:00:00', 'asda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id` int(255) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `kelas_vip` int(255) NOT NULL,
  `kelas_reguler` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id`, `nama_rs`, `kelas_vip`, `kelas_reguler`) VALUES
(1, 'pindad', 21000, 103),
(2, 'advent', 554, 12434);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testcovid`
--

CREATE TABLE `testcovid` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testcovid`
--

INSERT INTO `testcovid` (`id`, `nama`, `alamat`, `usia`, `no_telp`, `tanggal`, `waktu`, `status`, `file`, `id_user`) VALUES
(1, 'cokorda agung jaya laksmana prakasaa', 'alamatt', 123, 1234, '2021-01-21', '15:00:00', 'st', 'fi', '0'),
(2, 'cokorda agung jaya laksmana prakasaa konsul', '1234', 123, 813, '2021-01-08', '16:00:00', 'asd', 'asdas', '0'),
(3, 'cok', '1', 12, 123, '2021-01-13', '13:00:00', NULL, NULL, 'cok'),
(4, 'cok', 'rumah', 18, 813, '2021-01-29', '15:00:00', NULL, NULL, 'cok'),
(5, 'salah', 'alamat testt', 12, 1234, '2021-01-23', '13:00:00', 'sad', 'sad', 'cok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` bigint(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_hp`, `password`) VALUES
(17, 'rai', 'jay@gmail.com', 555, '$2y$10$kbiRPyP1wLCXuwDxsovYQ.00LdVbngO8ft9MbFs2sY4jU/XZncfgO'),
(18, '9rai6', 'rj@gmail.com', 866, '$2y$10$fhEQZqO3mbRc5j.RqlxPWesD6XnLwUyGUbvzyh5LCLNZMECLp0dN6'),
(19, 'raihan', 'raihan@gmail.com', 6555, '$2y$10$.NXVlyaMibkozyYSApATOuezJ9bk7wqWxDO9Lu.gZpMGanFuIBgwq'),
(20, 'admin', 'admin@aiho.com', 0, '$2y$10$EkiQTF63.g7z/retdHTLOeseYGkDKoChNi./r6xouerDHWvt57E/a'),
(21, 'vikry', 'vikrysurya48@gmail.com', 83159885039, '$2y$10$/xuH6TL6nUHDtDArw8SNC.hcLJ/JfdOiq63sIyRXhivKkAiRfcpV6'),
(22, 'vikrysurya', 'jhyuga36@gmail.com', 83159885039, '$2y$10$U7Vewvr7MOalE0GWRyYIIuctERQbmVlA.49UFVNIvcxgxOtykgyMa'),
(23, 'cokorda agung jaya laksmana prakasa', 'cokordagung1@gmail.com', 81313067554, '$2y$10$2fNq9CzhYN9i4ely9cKRd.IEbBgLGt0DiJh.kuCpXHbHgzSTMfX66'),
(24, 'cok', 'cokordasteam@gmail.com', 123, '$2y$10$dfvKZQ7QTaaIdDKZ/ifjl.osQu9XgaWw/ExYHJzaZACNNSfQpj6Hu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testcovid`
--
ALTER TABLE `testcovid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testcovid`
--
ALTER TABLE `testcovid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
