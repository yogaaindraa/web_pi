-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2015 at 12:31 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_pi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE IF NOT EXISTS `cekout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cekout`
--

INSERT INTO `cekout` (`id`, `judul`, `isi`) VALUES
(6, 'fara : ', 'bagus'),
(7, 'azizatul : ', 'baik ');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `nama`, `email`, `komentar`) VALUES
(1, 'e', 'w', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `pasangiklan`
--

CREATE TABLE IF NOT EXISTS `pasangiklan` (
  `noid` int(30) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `iklansebagai` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `teksiklan` text NOT NULL,
  `hrg` varchar(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pasangiklan`
--

INSERT INTO `pasangiklan` (`noid`, `tanggal`, `email`, `iklansebagai`, `kategori`, `nohp`, `judul`, `teksiklan`, `hrg`, `gambar`) VALUES
(1, '21 Juli 2014', 'azizatul20@ymail.com', 'pribadi', 'elektronik', '089765435655', 'lokal', 'barang bagus dan murah', '5000000', '1.jpeg'),
(2, '12 januari 2014', '', 'pilih', 'pilih', '', '', '', '', ''),
(3, 'tanggal', 'email', 'pribadi', 'kendaraan', '087834655015', 'hp', 'oke', '12000000', '1.jpeg'),
(4, '14 Mei 2014', 'aziza30@gmail.com', 'profesional', 'kendaraan', '089765456778', 'llaallalalaa', 'okay okay siiiip', '20.000.000', '2z7g9ir.jpg'),
(5, 'dfe', 'wfff', 'profesional', 'pilih', 'df', '', '', '', ''),
(6, 'adfa', 'zsfeff', 'pilih', 'pilih', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `detile` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `tipe`, `harga`, `detile`, `gambar`) VALUES
(1, 'h1', '50000', 'warna merah', ''),
(2, 'h2', '12000000', 'sepatu olah raga', ''),
(3, 'a', 'z', 's', ''),
(4, 'a1', '32000', 'dededed', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
