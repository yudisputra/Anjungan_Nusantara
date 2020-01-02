-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 04:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anjungan_nusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_nama` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_nama`, `no_rekening`, `atas_nama`) VALUES
(1, 'BRI', '12345678', 'AnjunganBankBRI'),
(3, 'BNI', '8888888', 'AnjunganBNI');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pembelian`
--

CREATE TABLE `daftar_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pembelian`
--

INSERT INTO `daftar_pembelian` (`id_pembelian`, `id_produk`, `jumlah`, `subtotal`) VALUES
(5, 1, 2, 16000),
(5, 10, 1, 8000),
(6, 1, 2, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Suvenir'),
(2, 'Makanan'),
(4, 'Oleh-oleh'),
(5, 'Alat rumah tangga'),
(6, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `list_gambar_produk`
--

CREATE TABLE `list_gambar_produk` (
  `list_produk_id` int(11) NOT NULL,
  `list_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_gambar_produk`
--

INSERT INTO `list_gambar_produk` (`list_produk_id`, `list_gambar`) VALUES
(1, '1_1.jpg'),
(1, '1_2.jpg'),
(1, '1_3.jpg'),
(1, '1_4.jpg'),
(2, '2_1.png'),
(2, '90754_view_512x512.ico'),
(2, '2_3.jpg'),
(2, '2_4.png'),
(3, '3_1.jpg'),
(3, '3_2.jpg'),
(3, '3_3.jpg'),
(4, '4_1.jpg'),
(4, '4_2.jpg'),
(5, '5_1.jpg'),
(5, '5_2.jpg'),
(6, '6_11.jpg'),
(6, '6_2.jpg'),
(7, '7_12.jpg'),
(7, '7_2.jpg'),
(8, '8_11.jpg'),
(8, '8_2.jpg'),
(9, '9_11.jpg'),
(9, '9_2.jpg'),
(10, '10_11.jpg'),
(10, '10_2.jpg'),
(11, '11_11.jpg'),
(11, '11_2.jpg'),
(11, '11_3.jpg'),
(11, '11_4.jpg'),
(12, '12_11.jpg'),
(13, '13_1.png'),
(14, '14_11.jpg'),
(14, '14_2.jpg'),
(15, '15_11.jpg'),
(15, '15_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_level` varchar(255) NOT NULL,
  `login_status` varchar(255) NOT NULL,
  `login_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `e_mail`, `password`, `login_level`, `login_status`, `login_profile_id`) VALUES
(1, 'admin', 'admin', 'Admin', 'Terverifikasi', 1),
(2, 'andi@gmail.com', '12345678', 'Penjual', 'Terverifikasi', 2),
(3, 'andrea.dian@gmail.com', '12345678', 'Penjual', 'Terverifikasi', 3),
(4, 'rani@gmail.com', '12345678', 'Penjual', 'Terverifikasi', 4),
(5, 'afi@yahoo.com', 'abcd1234', 'Pembeli', 'Terverifikasi', 5),
(6, 'diana@gmail.com', '12345678', 'Penjual', 'Terverifikasi', 6),
(7, 'dinda@gmail.com', '12345678', 'Pembeli', 'Terverifikasi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama_tujuan` varchar(255) NOT NULL,
  `hape_tujuan` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `kode_tujuan` varchar(255) NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status_pembelian` varchar(255) NOT NULL,
  `total_pembayaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pembeli`, `nama_tujuan`, `hape_tujuan`, `alamat_tujuan`, `kode_tujuan`, `tanggal_pembelian`, `bukti_pembayaran`, `status_pembelian`, `total_pembayaran`) VALUES
(5, 5, 'Andi', '08888', 'Halo', 'BRI714568720', '2019-12-20 09:14:00', '', 'Belum Ada Bukti', 24000),
(6, 7, 'Dinda', '08888888888', 'Jl. Kesumba Barat No 50, Kecamatan Klojen , Kota Malang, Jawa Timur.', 'BRI1205415856', '2019-12-21 16:36:00', '', 'Belum Ada Bukti', 16000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_stock` int(11) NOT NULL,
  `produk_terjual` int(11) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_foto_depan` varchar(255) NOT NULL,
  `produk_status` varchar(255) NOT NULL,
  `produk_diupload` timestamp NOT NULL DEFAULT current_timestamp(),
  `produk_rilis` timestamp NULL DEFAULT NULL,
  `produk_terakhir_dibeli` timestamp NULL DEFAULT NULL,
  `produk_subkategori_id` int(11) NOT NULL,
  `produk_usaha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_stock`, `produk_terjual`, `produk_deskripsi`, `produk_foto_depan`, `produk_status`, `produk_diupload`, `produk_rilis`, `produk_terakhir_dibeli`, `produk_subkategori_id`, `produk_usaha_id`) VALUES
(1, 'Gantungan Kunci Owl', 8000, 12, 5, 'Gantungan kunci gambar Owl terbuat dari kayu', '1_1.jpg', 'Disetujui', '2019-11-06 19:26:41', '2019-11-06 19:29:32', '2019-11-14 01:07:00', 5, 1),
(3, 'Mug Dmoni', 12000, 20, 4, 'mug gambar karakter', '3_1.jpg', 'Disetujui', '2019-11-08 11:11:58', '2019-11-08 11:13:39', '2019-11-14 01:07:00', 6, 1),
(6, 'Kopi Malang', 30000, 123, 0, 'kopi khas Malang', '6_11.jpg', 'Menunggu', '2019-11-08 11:18:04', NULL, NULL, 0, 1),
(7, 'Kopi Malang', 30000, 123, 0, 'kopi khas Malang', '7_12.jpg', 'Menunggu', '2019-11-08 11:18:10', NULL, NULL, 0, 1),
(8, 'kopi enak', 13000, 12, 0, 'kopi enak poll', '8_11.jpg', 'Menunggu', '2019-11-08 11:23:06', NULL, NULL, 0, 1),
(9, 'kopi khas malang ', 34000, 30, 3, 'Kopi khas malang.', '9_11.jpg', 'Disetujui', '2019-11-08 11:42:11', '2019-11-08 11:42:44', '2019-11-14 01:07:00', 9, 1),
(10, 'kripik tempe rasa original', 8000, 120, 2, 'Kripik tempe renyah khas Malang.', '10_11.jpg', 'Disetujui', '2019-11-08 11:46:43', '2019-11-08 11:49:15', '2019-11-14 01:07:00', 7, 1),
(11, 'Talenan Kayu', 8000, 300, 2, 'Telenan terbuat dari kayu', '11_11.jpg', 'Disetujui', '2019-11-08 12:09:34', '2019-11-08 12:10:49', '2019-11-14 01:07:00', 8, 1),
(12, 'Keranjang Rotan', 12000, 120, 0, 'Keranjang dari Rotan', '12_11.jpg', 'Menunggu', '2019-11-08 12:12:37', NULL, NULL, 5, 1),
(13, 'www', 13, 12, 0, 'www', '13_1.png', 'Menunggu', '2019-11-08 13:12:46', NULL, NULL, 3, 1),
(14, 'Keranjang Lucu', 12000, 120, 0, 'Keranjang Kayu', '14_11.jpg', 'Menunggu', '2019-12-05 03:48:32', NULL, NULL, 5, 3),
(15, 'Keranjang Lucu', 10000, 100, 0, 'Keranjang Kayu', '15_11.jpg', 'Menunggu', '2019-12-05 03:48:54', NULL, NULL, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_nama` varchar(255) NOT NULL,
  `profile_no_hp` varchar(255) NOT NULL,
  `profile_alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_nama`, `profile_no_hp`, `profile_alamat`) VALUES
(1, 'Yudistira', '0812345678', ''),
(2, 'andi', '0812345678', ''),
(3, 'Andrea Dian', '081234567891', ''),
(4, 'Rani Nadya', '08222444555777', ''),
(5, 'afirsta', '123', ''),
(6, 'diana', '08888888', ''),
(7, 'dinda', '08888888', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_produk_id` int(11) NOT NULL,
  `rating_profile_id` int(11) NOT NULL,
  `rating_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_produk_id`, `rating_profile_id`, `rating_nilai`) VALUES
(3, 98, 3),
(3, 99, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `subkategori_nama` varchar(255) NOT NULL,
  `subkategori_kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`subkategori_id`, `subkategori_nama`, `subkategori_kategori_id`) VALUES
(1, 'Mug', 1),
(2, 'Kipas', 1),
(3, 'Camilan', 2),
(4, 'Kripik', 2),
(5, 'Suvenir kayu', 1),
(6, 'Peralatan Makan', 5),
(7, 'Oleh - oleh Khas Malang', 4),
(8, 'Peralatan dapur', 5),
(9, 'Kopi', 6),
(11, 'Herbal', 6),
(12, 'Minuman Segar', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`nama`) VALUES
('aa'),
('bb'),
('cc'),
('cc'),
('cc'),
('cc'),
('dd'),
('bb'),
('tt'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `usaha_id` int(11) NOT NULL,
  `usaha_nama` varchar(255) NOT NULL,
  `usaha_alamat` varchar(255) NOT NULL,
  `usaha_no_telp` varchar(255) NOT NULL,
  `usaha_email` varchar(255) NOT NULL,
  `usaha_foto` varchar(255) NOT NULL,
  `usaha_keterangan` text NOT NULL,
  `usaha_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`usaha_id`, `usaha_nama`, `usaha_alamat`, `usaha_no_telp`, `usaha_email`, `usaha_foto`, `usaha_keterangan`, `usaha_profile_id`) VALUES
(1, 'Sumber Makmur Batu', 'Jl. Alun-alun Batu', '0812345678', 'sumbermakmu@gmail.com', '1.png', 'Toko Kami Menjual Segala Macam macam oleh-oleh.', 2),
(2, 'Dian Souvenir', 'Jl. Soekarno Hatta No 126', '081234567891', 'dian.suvenir@gmail.com', '2.png', 'Halo Selamat Datang Di Toko Kami Silahkan Berbelanja Souviner Untuk Oleh - oleh terbaik anda.', 3),
(3, 'Toko Diana', 'Malang', '088888888', 'tokodiana@gmail.com', '3.png', 'Toko Diana', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_ibfk_1` (`login_profile_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkategori_id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`usaha_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `usaha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
