-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 03:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb_pelnus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ayah_kandung`
--

CREATE TABLE `data_ayah_kandung` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `berkebutuhan_khusus` varchar(128) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `penghasilan_bulanan` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu_kandung`
--

CREATE TABLE `data_ibu_kandung` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `berkebutuhan_khusus` varchar(128) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `penghasilan_bulanan` int(11) DEFAULT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_periodik`
--

CREATE TABLE `data_periodik` (
  `tinggi_badan` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `jarak_kesekolah` varchar(10) NOT NULL,
  `waktu_tempuh_kesekolah` varchar(15) NOT NULL,
  `jumlah_saudara_kandung` int(2) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id` int(11) NOT NULL,
  `jenis_prestasi` varchar(128) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `nama_prestasi` varchar(128) NOT NULL,
  `tahun` date NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `nisn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `penghasilan` varchar(20) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_keahlian`
--

CREATE TABLE `kompetensi_keahlian` (
  `id` int(11) NOT NULL,
  `nama_kompetensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `no_seri_ijazah_smp` varchar(20) NOT NULL,
  `no_seri_shun` varchar(20) NOT NULL,
  `no_un_smp_mts` varchar(20) NOT NULL,
  `nik_siswa` int(20) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `berkebutuhan_khusus` varchar(50) NOT NULL,
  `alamat_tempat_tinggal` text NOT NULL,
  `dusun` varchar(128) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kelurahan_desa` varchar(50) NOT NULL,
  `kd_pos` int(10) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten_kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `alat_transportasi` varchar(25) NOT NULL,
  `jenis_tinggal` varchar(50) NOT NULL,
  `no_telp_rumah` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `penerima_kps` varchar(5) NOT NULL,
  `no_kps` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_name`, `password`, `no_hp`, `role_id`, `is_active`, `image`, `date_created`) VALUES
(3, 'Mustafa Muchtar', 'adminppdb2020', '$2y$10$dD2Bvp5ABacEAuLnVLnuHeKGK0fPdEziA6C7EUuNjniX9F0zqPDoS', '', 1, 1, 'default.png', 0),
(9, 'Nurul Hotimah', '0048471370', '$2y$10$NK5KfAFJQPuppav2y0hApe8FtgzzkBwTSLSTp//G9.1htk38vZhVW', '083872929016', 3, 1, 'default.png', 1609307218);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(1) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'kepsek'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ayah_kandung`
--
ALTER TABLE `data_ayah_kandung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_ibu_kandung`
--
ALTER TABLE `data_ibu_kandung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_periodik`
--
ALTER TABLE `data_periodik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `kompetensi_keahlian`
--
ALTER TABLE `kompetensi_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_ayah_kandung`
--
ALTER TABLE `data_ayah_kandung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ibu_kandung`
--
ALTER TABLE `data_ibu_kandung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_periodik`
--
ALTER TABLE `data_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetensi_keahlian`
--
ALTER TABLE `kompetensi_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
