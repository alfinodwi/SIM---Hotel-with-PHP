-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 20.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `check_in`
--

CREATE TABLE `check_in` (
  `idcheck_in` int(11) NOT NULL,
  `jumlah` tinyint(4) NOT NULL,
  `biaya` int(11) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `idpelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `check_in`
--

INSERT INTO `check_in` (`idcheck_in`, `jumlah`, `biaya`, `tgl_check_in`, `idpelanggan`) VALUES
(1, 5, 2500000, '2018-11-11', 24),
(2, 3, 750000, '2018-08-20', 12),
(3, 3, 3000000, '2018-07-07', 9),
(5, 1, 500000, '2022-10-08', 14),
(6, 1, 500000, '2022-12-08', 1),
(7, 1, 800000, '2001-10-08', 9),
(8, 1, 500000, '2022-10-08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `check_in_kamar`
--

CREATE TABLE `check_in_kamar` (
  `idcheck_in` int(11) NOT NULL,
  `idruang_kamar` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `check_in_kamar`
--

INSERT INTO `check_in_kamar` (`idcheck_in`, `idruang_kamar`, `created_at`) VALUES
(1, 6, '2018-05-01 15:34:09'),
(1, 7, '2018-05-01 15:34:09'),
(1, 8, '2018-05-01 15:34:09'),
(1, 9, '2018-05-01 15:34:09'),
(1, 10, '2018-05-01 15:34:09'),
(2, 1, '2018-05-01 15:36:37'),
(2, 2, '2018-05-01 15:36:37'),
(2, 3, '2018-05-01 15:36:37'),
(3, 18, '2018-05-01 15:42:42'),
(3, 19, '2018-05-01 15:42:42'),
(3, 20, '2018-05-01 15:42:42'),
(5, 2, '2022-06-04 21:17:17'),
(6, 2, '2022-06-04 21:18:56'),
(7, 7, '2022-06-04 23:34:43'),
(8, 5, '2022-06-05 01:13:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `check_out`
--

CREATE TABLE `check_out` (
  `idcheck_out` int(11) NOT NULL,
  `tgl_check_out` date NOT NULL,
  `biaya_lain` int(11) DEFAULT 0,
  `idcheck_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `check_out`
--

INSERT INTO `check_out` (`idcheck_out`, `tgl_check_out`, `biaya_lain`, `idcheck_in`) VALUES
(1, '2018-12-11', 0, 1),
(2, '2018-08-18', 0, 2),
(3, '2018-07-12', 0, 3),
(8, '2022-11-09', 0, 8);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `histori_order`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `histori_order` (
`status_order` enum('baru','lunas','selesai','batal')
,`idorder` int(11)
,`nama` varchar(45)
,`no_ktp` varchar(18)
,`tgl_check_in` date
,`tgl_check_out` date
,`biaya` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `lihat_bayar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lihat_bayar` (
`idorder` int(11)
,`nama` varchar(45)
,`no_ktp` varchar(18)
,`tgl_check_in` date
,`tgl_check_out` date
,`biaya` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `status_order` enum('baru','lunas','selesai','batal') NOT NULL,
  `idcheck_in` int(11) NOT NULL,
  `tgl_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`idorder`, `status_order`, `idcheck_in`, `tgl_order`) VALUES
(1, 'selesai', 1, '2018-05-01 08:34:09'),
(2, 'selesai', 2, '2018-05-01 08:36:37'),
(3, 'selesai', 3, '2018-05-01 08:42:42'),
(8, 'baru', 8, '2022-06-04 18:13:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_ktp` varchar(18) NOT NULL,
  `telepon` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `alamat`, `no_ktp`, `telepon`) VALUES
(1, 'Bobby', 'Jogja', '332500912978707140', '085743411430'),
(9, 'Ega', 'Kpg. M.T. Haryono No. 823', '074096221694508498', '088497160440'),
(12, 'Oni', 'Jln. Suprapto No. 727', '704680373747099244', '089077961464'),
(14, 'Zelda', 'Gg. Babadan No. 510', '911163535155446622', '084743670446'),
(16, 'Daliman', 'Jln. Bah Jaya No. 306', '781335778174348194', '089593419485'),
(24, 'Satyaa', 'Jln. Baan No. 987', '862670698655440768', '085368162451');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_kamar`
--

CREATE TABLE `ruang_kamar` (
  `idruang_kamar` int(11) NOT NULL,
  `id_tipe_kamar` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ruang_kamar`
--

INSERT INTO `ruang_kamar` (`idruang_kamar`, `id_tipe_kamar`, `status`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 3, 1),
(5, 1, 0),
(6, 2, 1),
(7, 2, 0),
(8, 2, 1),
(9, 2, 1),
(10, 2, 1),
(18, 4, 1),
(19, 4, 1),
(20, 4, 1),
(26, 0, 1),
(27, 2, 1),
(28, 0, 1),
(29, 1, 1),
(30, 3, 1),
(31, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `idtipe_kamar` tinyint(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `singkatan` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`idtipe_kamar`, `nama`, `singkatan`, `harga`) VALUES
(1, 'Standard Room', 'ST', 500000),
(2, 'Superior Room', 'SP', 800000),
(3, 'Deluxe Room', 'DR', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur untuk view `histori_order`
--
DROP TABLE IF EXISTS `histori_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `histori_order`  AS SELECT `o`.`status_order` AS `status_order`, `o`.`idorder` AS `idorder`, `p`.`nama` AS `nama`, `p`.`no_ktp` AS `no_ktp`, `ci`.`tgl_check_in` AS `tgl_check_in`, `co`.`tgl_check_out` AS `tgl_check_out`, `ci`.`biaya` AS `biaya` FROM (((`order` `o` join `pelanggan` `p`) join `check_in` `ci`) join `check_out` `co`) WHERE `o`.`idcheck_in` = `ci`.`idcheck_in` AND `ci`.`idpelanggan` = `p`.`idpelanggan` AND `co`.`idcheck_in` = `ci`.`idcheck_in` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lihat_bayar`
--
DROP TABLE IF EXISTS `lihat_bayar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lihat_bayar`  AS SELECT `o`.`idorder` AS `idorder`, `p`.`nama` AS `nama`, `p`.`no_ktp` AS `no_ktp`, `ci`.`tgl_check_in` AS `tgl_check_in`, `co`.`tgl_check_out` AS `tgl_check_out`, `ci`.`biaya` AS `biaya` FROM (((`order` `o` join `pelanggan` `p`) join `check_in` `ci`) join `check_out` `co`) WHERE `o`.`idcheck_in` = `ci`.`idcheck_in` AND `ci`.`idpelanggan` = `p`.`idpelanggan` AND `co`.`idcheck_in` = `ci`.`idcheck_in` AND `o`.`status_order` = 'baru' ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`idcheck_in`),
  ADD KEY `fk_check_in_pelanggan_idx` (`idpelanggan`);

--
-- Indeks untuk tabel `check_in_kamar`
--
ALTER TABLE `check_in_kamar`
  ADD KEY `fk_check_in_kamar_ruang_kamar_idx` (`idruang_kamar`),
  ADD KEY `fk_check_in_kamar_check_in` (`idcheck_in`);

--
-- Indeks untuk tabel `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`idcheck_out`),
  ADD KEY `fk_check_out_check_in_idx` (`idcheck_in`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_order_check_in_idx` (`idcheck_in`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indeks untuk tabel `ruang_kamar`
--
ALTER TABLE `ruang_kamar`
  ADD PRIMARY KEY (`idruang_kamar`);

--
-- Indeks untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`idtipe_kamar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `check_in`
--
ALTER TABLE `check_in`
  MODIFY `idcheck_in` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `check_out`
--
ALTER TABLE `check_out`
  MODIFY `idcheck_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `ruang_kamar`
--
ALTER TABLE `ruang_kamar`
  MODIFY `idruang_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `idtipe_kamar` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `check_in`
--
ALTER TABLE `check_in`
  ADD CONSTRAINT `fk_check_in_pelanggan` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `check_in_kamar`
--
ALTER TABLE `check_in_kamar`
  ADD CONSTRAINT `fk_check_in_kamar_check_in` FOREIGN KEY (`idcheck_in`) REFERENCES `check_in` (`idcheck_in`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_check_in_kamar_ruang_kamar` FOREIGN KEY (`idruang_kamar`) REFERENCES `ruang_kamar` (`idruang_kamar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `check_out`
--
ALTER TABLE `check_out`
  ADD CONSTRAINT `fk_check_out_check_in` FOREIGN KEY (`idcheck_in`) REFERENCES `check_in` (`idcheck_in`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_check_in` FOREIGN KEY (`idcheck_in`) REFERENCES `check_in` (`idcheck_in`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
