-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 17.02
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
  `status` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(22, 'vikrysurya', 'jhyuga36@gmail.com', 83159885039, '$2y$10$U7Vewvr7MOalE0GWRyYIIuctERQbmVlA.49UFVNIvcxgxOtykgyMa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminlogin`
--
ALTER TABLE `adminlogin`
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
-- AUTO_INCREMENT untuk tabel `testcovid`
--
ALTER TABLE `testcovid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
