-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2012 at 07:15 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_keluar`
--

CREATE TABLE IF NOT EXISTS `tbl_barang_keluar` (
  `kode_barang_keluar` int(3) NOT NULL AUTO_INCREMENT,
  `nama_barang` text NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah` int(4) NOT NULL,
  PRIMARY KEY (`kode_barang_keluar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_barang_keluar`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_barang_masuk` (
  `kode_barang_masuk` int(3) NOT NULL AUTO_INCREMENT,
  `nama_barang` text NOT NULL,
  `tgl_masuk` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  PRIMARY KEY (`kode_barang_masuk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_barang_masuk`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_faktur`
--

CREATE TABLE IF NOT EXISTS `tbl_faktur` (
  `no_faktur` int(3) NOT NULL AUTO_INCREMENT,
  `tgl_faktur` date NOT NULL,
  `nama_barang` text NOT NULL,
  `jumlah_barang` int(4) NOT NULL,
  PRIMARY KEY (`no_faktur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_faktur`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE IF NOT EXISTS `tbl_file` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`no`, `nama`, `tanggal`, `file`) VALUES
(15, 'Pemograman_Visual_Basic.pdf', '26-09-2012 | 08:02:48', 'Pemograman_Visual_Basic.pdf'),
(13, 'DasarBelajarPHP.docx', '26-09-2012 | 08:00:26', 'DasarBelajarPHP.docx'),
(14, 'SyntaxCSS.pdf', '26-09-2012 | 08:01:30', 'SyntaxCSS.pdf'),
(17, 'PemrogramanC++.doc', '26-09-2012 | 08:09:32', 'PemrogramanC++.doc'),
(19, 'Algoritma_Dasar.pptx', '26-09-2012 | 08:13:17', 'Algoritma_Dasar.pptx'),
(20, 'Belajar_Pemrograman_Delphi_1.pdf', '26-09-2012 | 08:15:06', 'Belajar_Pemrograman_Delphi_1.p'),
(21, 'Belajar_Pemrograman_Delphi_2.pdf', '26-09-2012 | 08:15:10', 'Belajar_Pemrograman_Delphi_2.p'),
(22, 'Belajar_Pemrograman_Delphi_3.pdf', '26-09-2012 | 08:15:13', 'Belajar_Pemrograman_Delphi_3.p'),
(23, 'Pengenalan_FreeBSD.pdf', '26-09-2012 | 08:17:00', 'Pengenalan_FreeBSD.pdf'),
(24, 'Gerbang_Logika.pdf', '26-09-2012 | 08:17:28', 'Gerbang_Logika.pdf'),
(25, 'Pemrograman_Pascal.pdf', '26-09-2012 | 08:18:38', 'Pemrograman_Pascal.pdf'),
(26, 'Belajar_ASP.pdf', '26-09-2012 | 08:20:03', 'Belajar_ASP.pdf'),
(27, 'Mengolah_Pembelajaran_Dengan_Javascript.pdf', '26-09-2012 | 08:21:27', 'Mengolah_Pembelajaran_Dengan_J'),
(32, 'JQuery.doc', '26-09-2012 | 08:39:24', 'JQuery.doc'),
(29, 'Belajar_Mengenal_Pemrograman_Python.pdf', '26-09-2012 | 08:23:50', 'Belajar_Mengenal_Pemrograman_P');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
  `nik` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_karyawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id`, `nama`, `email`, `isi`, `waktu`) VALUES
(13, 'Firdam', 'syndrom2211@hackermail.com', 'good', '21-09-2012 | 20:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_persediaan`
--

CREATE TABLE IF NOT EXISTS `tbl_persediaan` (
  `no_faktur` int(3) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(30) NOT NULL,
  `stok` int(4) NOT NULL,
  `harga` varchar(30) NOT NULL,
  PRIMARY KEY (`no_faktur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_persediaan`
--

INSERT INTO `tbl_persediaan` (`no_faktur`, `nama_barang`, `stok`, `harga`) VALUES
(29, 'PC Aspire Komputer', 55, 'Rp.4.500.000'),
(7, 'Mesin Cuci', 33, 'Rp.2.100.000'),
(8, 'AC', 12, 'Rp.320.000'),
(34, 'FlashDisk 8GB', 33, 'Rp.70.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `site_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `site_name`, `email`, `password`) VALUES
('admin', 'Firdam Mitulz', 'http://damz.asia/', 'syndrom2211@hackermail.com', '5faffde5a5dc715374d21afbdb3738eb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
