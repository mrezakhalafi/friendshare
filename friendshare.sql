-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2019 pada 15.30
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendshare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `post` int(5) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `komentar`, `post`, `profil`, `username`) VALUES
(46, 'Namira KN', 'Anjing', 413, 'foto/IMG_20150808_162803.jpg', 'namirakn5'),
(47, 'M Reza Khalafi', 'dsdfsdf', 418, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(53, 'Namira KN', 'dfgdfg', 423, 'foto/IMG_20150808_162803.jpg', 'namirakn5'),
(57, 'M Reza Khalafi', 'c', 338, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(58, 'M Reza Khalafi', 'Bisa?', 440, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(59, 'M Reza Khalafi', 'asasda', 440, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(60, 'M Reza Khalafi', 'asdasd', 440, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(61, 'M Reza Khalafi', '123', 440, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(62, 'M Reza Khalafi', '456', 440, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(63, 'M Reza Khalafi', 'asdasdasd', 444, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(65, 'M Reza Khalafi', 'asdasd', 445, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(66, 'M Reza Khalafi', 'asdasd', 446, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(67, 'M Reza Khalafi', 'asdasd', 447, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(69, 'Henry Septian', 'asdasd', 448, 'foto/rerr.png', 'Henryds'),
(70, 'Henry Septian', 'asdasd', 447, 'foto/rerr.png', 'Henryds'),
(71, 'Henry Septian', 'asasd', 449, 'foto/rerr.png', 'Henryds'),
(72, 'Henry Septian', 'Bos', 364, 'foto/rerr.png', 'Henryds'),
(73, 'Henry Septian', 'asdasd', 449, 'foto/rerr.png', 'Henryds'),
(74, 'Henry Septian', 'asadasd', 450, 'foto/rerr.png', 'Henryds'),
(75, 'Fandi Setiadi', 'Wihhh wkwk', 451, 'foto/1451489489655 (1).jpg', 'fandisetiadi'),
(76, 'M Reza Khalafi', 'Napa bang? :v', 451, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(77, 'Henry Septian', 'Kuy lagi lah', 455, 'foto/rerr.png', 'Henryds'),
(78, 'M Reza Khalafi', 'Asik juga -.-', 411, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(79, 'M Reza Khalafi', 'Yooo', 456, 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(82, 'Namira KN', 'Iya betul', 460, 'foto/IMG_20150808_162803.jpg', 'namirakn5'),
(83, 'Namira KN', 'Iya betul tuh', 461, 'foto/IMG_20150808_162803.jpg', 'namirakn5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `music`
--

CREATE TABLE `music` (
  `id` int(5) NOT NULL,
  `song` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `music`
--

INSERT INTO `music` (`id`, `song`, `cover`) VALUES
(1, 'Loren Allred - Never Enough(playvk.com).mp3', 'artworks-000366691971-m8fbfw-t500x500.jpg'),
(2, '!Rihana - Take a bow!.mp3', '41Hc8hTY0LL._SX355_.jpg'),
(3, 'A thousand years - Christina Perri.mp3', 'CPERRI_athousandyears.jpg'),
(4, 'Carly Rae Jepsen - Call Me Maybe.mp3', 'R-4225865-1359058239-7981.jpeg.jpg'),
(5, 'Katty Perry - Roar.mp3', '9704684051_6dbab15c37_b.jpg'),
(6, 'Britney Spears - 08 - Baby One More Time.mp3', '51TssQ9UrCL._SX342_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `postingan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profil` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `nama`, `postingan`, `foto`, `video`, `date`, `profil`, `username`) VALUES
(334, 'Fandi Setiadi', 'Baru ni', 'foto/', '', '2019-01-24 18:21:51', 'foto/1451489489655 (1).jpg', 'fandisetiadi'),
(338, 'Namira KN', 'Hujan kaka :(', 'foto/', '', '2019-01-24 18:33:43', 'foto/IMG_20150808_162803.jpg', 'namirakn5'),
(339, 'Fandi Setiadi', 'Random', 'foto/', '', '2019-01-24 18:34:15', 'foto/1451489489655 (1).jpg', 'fandisetiadi'),
(344, 'M Reza Khalafi', 'Together', 'foto/WIN_20181108_16_44_14_Pro.jpg', '', '2019-01-24 18:40:57', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(345, 'M Reza Khalafi', 'Ye aye', 'foto/PhotoGrid_1493467727278.jpg', '', '2019-01-24 18:41:53', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(355, 'M Reza Khalafi', 'Mantab wkwk', 'foto/', '', '2019-01-25 08:06:02', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(361, 'Leonardo Halasantua', 'Hola amigos', 'foto/', '', '2019-01-25 08:47:18', 'foto/1501689050471.jpg', 'Leonardo'),
(364, 'Fandi Setiadi', 'Ahoy', 'foto/1514014693300.jpg', '', '2019-01-25 09:12:34', 'foto/1451489489655 (1).jpg', 'fandisetiadi'),
(411, 'Namira KN', 'Ini nih yang lagi hits', 'foto/', 'foto/SUMMER HITS 2017 - Mashup  60 Songs - T10MO.mp4', '2019-01-25 16:09:48', 'foto/IMG_20150808_162803.jpg', 'namirakn5'),
(455, 'M Reza Khalafi', 'Hello there ._.', 'foto/DSC_0063.JPG', 'foto/', '2019-01-26 12:55:55', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(461, 'Henry Septian', 'Debat presiden gaada abisnya', 'foto/', 'foto/', '2019-01-26 13:15:58', 'foto/rerr.png', 'Henryds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `story`
--

CREATE TABLE `story` (
  `id` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `story`
--

INSERT INTO `story` (`id`, `foto`, `profil`, `username`) VALUES
(26, 'foto/987b3a56-d165-49b7-bf5b-472f5956580d.jpg', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(27, 'foto/IMG_2192.JPG', 'foto/IMG_2726.jpg', 'mrezakhalafi'),
(31, 'foto/IMG_3651.JPG', 'foto/IMG_2726.jpg', 'mrezakhalafi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE `suka` (
  `id` int(5) NOT NULL,
  `post` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id`, `post`, `nama`, `username`) VALUES
(150, '413', 'M Reza Khalafi', 'mrezakhalafi'),
(151, '413', 'M Reza Khalafi', 'mrezakhalafi'),
(152, '355', 'M Reza Khalafi', 'mrezakhalafi'),
(153, '411', 'Namira KN', 'namirakn5'),
(154, '418', 'M Reza Khalafi', 'mrezakhalafi'),
(155, '420', 'M Reza Khalafi', 'mrezakhalafi'),
(156, '421', 'Namira KN', 'namirakn5'),
(157, '423', 'Namira KN', 'namirakn5'),
(158, '424', 'Namira KN', 'namirakn5'),
(159, '429', 'Namira KN', 'namirakn5'),
(160, '429', 'Namira KN', 'namirakn5'),
(161, '430', 'Namira KN', 'namirakn5'),
(162, '411', 'M Reza Khalafi', 'mrezakhalafi'),
(163, '364', 'Fandi Setiadi', 'fandisetiadi'),
(164, '434', 'M Reza Khalafi', 'mrezakhalafi'),
(165, '339', 'Fandi Setiadi', 'fandisetiadi'),
(166, '334', 'Fandi Setiadi', 'fandisetiadi'),
(167, '435', 'Namira KN', 'namirakn5'),
(168, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(169, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(170, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(171, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(172, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(173, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(174, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(175, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(176, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(177, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(178, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(179, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(180, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(181, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(182, '436', 'Namira KN', 'namirakn5'),
(183, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(184, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(185, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(186, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(187, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(188, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(189, '436', 'Namira KN', 'namirakn5'),
(190, '436', 'Namira KN', 'namirakn5'),
(191, '436', 'Namira KN', 'namirakn5'),
(192, '436', 'Namira KN', 'namirakn5'),
(193, '436', 'Namira KN', 'namirakn5'),
(194, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(195, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(196, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(197, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(198, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(199, '436', 'M Reza Khalafi', 'mrezakhalafi'),
(200, '439', 'Namira KN', 'namirakn5'),
(201, '439', 'Namira KN', 'namirakn5'),
(202, '439', 'Namira KN', 'namirakn5'),
(203, '440', 'M Reza Khalafi', 'mrezakhalafi'),
(204, '364', 'M Reza Khalafi', 'mrezakhalafi'),
(205, '361', 'M Reza Khalafi', 'mrezakhalafi'),
(206, '338', 'M Reza Khalafi', 'mrezakhalafi'),
(207, '440', 'M Reza Khalafi', 'mrezakhalafi'),
(208, '441', 'M Reza Khalafi', 'mrezakhalafi'),
(209, '442', 'M Reza Khalafi', 'mrezakhalafi'),
(210, '443', 'M Reza Khalafi', 'mrezakhalafi'),
(211, '444', 'M Reza Khalafi', 'mrezakhalafi'),
(212, '445', 'M Reza Khalafi', 'mrezakhalafi'),
(213, '446', 'M Reza Khalafi', 'mrezakhalafi'),
(214, '447', 'M Reza Khalafi', 'mrezakhalafi'),
(215, '440', 'Henry Septian', 'Henryds'),
(216, '449', 'Henry Septian', 'Henryds'),
(217, '450', 'Henry Septian', 'Henryds'),
(218, '451', 'Fandi Setiadi', 'fandisetiadi'),
(219, '451', 'M Reza Khalafi', 'mrezakhalafi'),
(220, '454', 'M Reza Khalafi', 'mrezakhalafi'),
(221, '455', 'Henry Septian', 'Henryds'),
(222, '455', 'M Reza Khalafi', 'mrezakhalafi'),
(223, '456', 'M Reza Khalafi', 'mrezakhalafi'),
(224, '457', 'Namira KN', 'namirakn5'),
(225, '458', 'M Reza Khalafi', 'mrezakhalafi'),
(226, '459', 'M Reza Khalafi', 'mrezakhalafi'),
(227, '460', 'M Reza Khalafi', 'mrezakhalafi'),
(228, '461', 'M Reza Khalafi', 'mrezakhalafi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamatrumah` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `datee` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `alamatrumah`, `email`, `gender`, `datee`, `month`, `year`, `tempat`, `telepon`, `foto`) VALUES
(1, 'mrezakhalafi', '$2y$10$kkVITiVLcqosY5YBFZbbWuVGEQMbLW4F4pxiO2VC9mJR1gHolzJfa', 'M Reza Khalafi', 'Jl. Cipinang Elok 1 Blok.C No.13 Rt.002/Rw.010', 'mrezakhalafi@yahoo.com', 'Laki-Laki', '23', 'Jun', '1998', 'Jakarta Timur', '081293291580', 'foto/IMG_2726.jpg'),
(5, 'namirakn5', '$2y$10$PeWvsbDeVgTJaHheB4c6jeciZHrFf5vPIjoiNxp7Im8Wj7ef2pSoG', 'Namira KN', 'Jl. Pulomas Raya deket RS Omni', 'namira@yahoo.com', 'Perempuan', '5', 'Nov', '1999', 'Jakarta', '08823424', 'foto/IMG_20150808_162803.jpg'),
(6, 'Henryds', '$2y$10$DQlX3kI62gP9fWeqfb7FEOCynk5M6uOs5rJ7xT2x61PXwXZwgHgPG', 'Henry Septian', 'Cipinang Elok', 'henrycuber@gmail.com', 'Laki-Laki', '11', 'Jul', '1998', 'Jakarta', '0218195855', 'foto/rerr.png'),
(7, 'fandisetiadi', '$2y$10$L7I8JlyJdvNwkZTM6NREsemwde.zTYB28RhbgHccuTYzn21kH17Zy', 'Fandi Setiadi', 'Apartment Mediterania Boulevard', 'fandids@gmail.com', 'Laki-Laki', '21', 'Aug', '1998', 'Jakarta', '0842342423', 'foto/1451489489655 (1).jpg'),
(9, 'Leonardo', '$2y$10$upg6BamFkApOLQwk0GVoGeKZJeEw857BLTfZ15vzTc1a6Lun/TT.C', 'Leonardo Halasantua', 'Pulau pari barat No.13 Bekasi', 'Leoleo@gmail.com', 'Laki-Laki', '26', 'Jan', '1997', 'Bekasi', '5435464564', 'foto/1501689050471.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suka`
--
ALTER TABLE `suka`
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
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT untuk tabel `story`
--
ALTER TABLE `story`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
