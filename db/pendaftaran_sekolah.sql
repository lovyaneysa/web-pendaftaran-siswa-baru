-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 05.55
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `password`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'lovya', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`, `status`) VALUES
(1, 4, 'raden defi', 'BCA Raden defi megantari', 'img/bukti_transfer/cara transfer uang melalui internet banking bca sesama bca4.jpg', 0),
(2, 17, 'hasbi', 'hasbii', 'img/bukti_transfer/Strength comes with the Team (1).png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email_ortu` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ortu` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_orangtua`
--

INSERT INTO `data_orangtua` (`id`, `nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`, `status`) VALUES
(15, 'hasbi', 17, 'hasbi', 'gumay', 'hasbi gumay', 'Jl. Situ Mangga Bolong no.551 Rt.05/016 Srengseng Sawah, Jagakarsa, Jakarta Selatan', 'kalimantantimur', 'Depok', 'jagakarsa', '12640', '085771009396', 'hasbigumay@gmail.com', 'sd', 'sd', 'pns', 'swasta', 'under 1jt', 1),
(17, 'lila', 16, 'dwi', 'nana', '', 'asas', 'sulawesiutara', 'Jakarta', 'asa', '12640', '085771009396', 'lila@gmail.com', 'sma', 'sma', 'pns', 'pns', '3-5jt', 1),
(18, 'rohyuwati', 18, 'jaya', 'rohyuwati', '', 'Jl. Situ Mangga Bolong no.551 Rt.05/016 Srengseng Sawah, Jagakarsa, Jakarta Selatan', 'sumaterautara', 'Jakarta', 'asa', '12640', '085771009396', 'lovya@gmail.com', 'sma', 'sma', 'pns', 'swasta', '1-3jt', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_akte` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama_pendaftar`, `id_pendaftar`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_akte`, `agama`, `alamat_siswa`, `transportasi`, `kelas`, `status`) VALUES
(8, 'hasbi', 17, 'hasbi gumay', 'laki-laki', 'Bekasi', '2021-05-06', '1223112', 'katholik', 'ew', 'Kendaraan Umum', 'A', 3),
(10, 'lila', 16, 'lillaa', 'perempuan', 'Depok', '2021-05-01', '1223112', 'islam', 'asasas', 'Kendaraan Pribadi', 'A', 2),
(11, 'rohyuwati', 18, 'lovya', 'perempuan', 'Depok', '2021-05-07', '1223112', 'islam', 'jalan setu mangga bolong', 'Jalan Kaki', 'B', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_pendaftar`, `nama_pendaftar`, `foto`, `ktp`, `akte`, `kk`, `status`) VALUES
(5, 17, 'hasbi', 'img/dokumen/foto/Twibbon member.png', 'img/dokumen/ktp/Logo_UPNVJ.png', 'img/dokumen/akte/LOGO TFK AMATI.png', 'img/dokumen/kk/b8a3fcd1-0227-4697-b2cb-def0906d7422.jpg', 1),
(6, 18, 'rohyuwati', 'img/dokumen/foto/Logo_UPNVJ.png', 'img/dokumen/ktp/Logo_UPNVJ.png', 'img/dokumen/akte/Logo_UPNVJ.png', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_mhs`
--

CREATE TABLE `formulir_mhs` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir_mhs`
--

INSERT INTO `formulir_mhs` (`id`, `nama_lengkap`, `email`, `password`, `tgl_daftar`) VALUES
(13, 'andhini', 'admin@gmail.com', '12345', '2024-05-21'),
(16, 'lila', 'lila@gmail.com', '12345', '2021-05-24'),
(17, 'hasbi', 'hasbigumay@gmail.com', '12345', '2021-05-24'),
(18, 'rohyuwati', 'lovya@gmail.com', '12345', '2021-05-27'),
(19, 'neysa', 'neysa@gmail.com', '12345', '2021-05-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pendaftar_2` (`id_pendaftar`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
