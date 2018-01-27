-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2018 at 03:40 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suratDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_peg` varchar(25) DEFAULT NULL,
  `nama_peg` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `jns_kelamin` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `level` enum('admin','user','','') DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `no_peg`, `nama_peg`, `jabatan`, `alamat`, `no_telp`, `jns_kelamin`, `level`, `username`, `password`) VALUES
(1, 'PEG0001', 'Aminudin', 'konduktor', 'kutabima rt 02/rw 02, kecamatan cimanggu', '082214899172', 'laki-laki', 'admin', 'admin', 'admin'),
(2, 'PEG0002', 'khoerul', 'kepala sekolah', 'jln mawar rt 03', '082214677891', 'laki-laki', 'user', 'user', 'user'),
(3, 'PEG003', 'Maula Akmal Alfikri Yusuf', 'Translator', 'jln melayang jauh', '082214788190', '', 'admin', 'akmal', 'akmal'),
(4, 'PEG004', 'alip m', 'kepsek ( kepala sengklek ', 'jln jauh banget', '0899190890', 'laki-laki', 'admin', 'alip', 'alip'),
(5, 'PEG005', 'jjjjjk', 'kk', 'kkk', '', 'laki-laki', 'admin', 'jjjj', 'jjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(25) NOT NULL,
  `untuk` varchar(25) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `dari`, `untuk`, `judul`, `isi`, `status`) VALUES
(11, 'admin', 'user', 'judul1', 'isi', '1'),
(12, 'admin', 'user', 'judul', 'isi', '1'),
(13, 'user', 'admin', 'judul', 'judul', '1'),
(14, 'user', 'admin', 'ini judul', 'ini isi', '1'),
(15, 'alip', 'admin', 'ini judul pesan dari alip', 'ini isi pesan dari alip', '1'),
(16, 'akmal', 'admin', 'ini judul pesan dari akmal', 'ini isi pesan dari akmal', '1'),
(17, 'admin', 'akmal', 'surat untuk akmal', 'isi surat untuk akmal', '1'),
(18, 'admin', 'akmal', 'waw', 'xxx', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
