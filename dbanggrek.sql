-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2015 pada 05.34
-- Versi Server: 5.1.22-rc-community
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbanggrek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalahama`
--

CREATE TABLE IF NOT EXISTS `gejalahama` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(11) DEFAULT NULL,
  `idjenis` int(11) NOT NULL,
  `pertanyaangejala` varchar(250) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `gejalahama`
--

INSERT INTO `gejalahama` (`noid`, `no`, `idjenis`, `pertanyaangejala`) VALUES
(1, 2, 12, 'Menempel pada pelepah daun berwarna kemerahan jumlahnya banyak'),
(2, 2, 12, 'Bekas serangan berupa bercak hitam dan merusak daun'),
(3, 2, 13, 'Pinggiran daun rusak dengan luka bergerigi tidak beraturan'),
(4, 2, 14, 'Merusak akar dan tunas muda yang disebabkan oleh cendawan'),
(5, 2, 15, 'Menempel pada buku-buku batang dan daun muda'),
(6, 2, 15, 'Menimbulkan bercak abu-abu dipermukaan daun dan merusak bunga hingga bentuk bunga tidak menarik'),
(7, 2, 16, 'Menyerang lembaran daun anggrek'),
(8, 2, 17, 'Kerusakan yang ditimbulkan seperti akibat semut,tapi tidak menyerang tunas daun'),
(9, 2, 18, 'Yang terserang akan berlubang di tengah batang dan tidak nampak dari luar'),
(10, 2, 18, 'Larva yang menetas dari telur merusak daun anggrek'),
(11, 2, 19, 'Bercak putih di bagian bawah daun'),
(12, 2, 19, 'Permukaan atas menjadi kuning dan lama kelamaan daun mati'),
(13, 2, 20, 'Menyerang daun ,kuncup bunga,tunas daun maupun bunga yang sedang mekar'),
(14, 2, 21, 'Daun menjadi kuning,tidak sehat lalu berwarna coklat dan mati'),
(15, 2, 22, 'Menghisap cairan daun tanaman anggrek,sehingga menyebabkan bintik putih atau kuning'),
(16, 2, 22, 'Tanaman yang diserang lama kelamaan akan gundul dan tidak berhijau daun lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalapenyakit`
--

CREATE TABLE IF NOT EXISTS `gejalapenyakit` (
  `noid` int(11) NOT NULL DEFAULT '0',
  `no` int(11) DEFAULT NULL,
  `idjenis` int(11) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejalapenyakit`
--

INSERT INTO `gejalapenyakit` (`noid`, `no`, `idjenis`, `pertanyaan`) VALUES
(1, 1, 1, 'Biji Anggrek tidak mampu berkecamba dan persemaian dalam botol akan gagal'),
(2, 1, 1, 'Kecambang yang sedang tumbuh kalau diserang cendawan ini akan mati/layu'),
(3, 1, 2, 'Bercak kecil bening pada pucuk daun'),
(4, 1, 2, 'Daun kecambah anggrek menjadi rusak dan mati'),
(5, 1, 3, 'Berupa bercak kecil bening pada permukaan daun, lalu melebar'),
(6, 1, 3, 'Menulari ke atas sampai pada titik tumbuh pada tunas serta ke bawah hingga ujung akar'),
(7, 1, 4, 'Timbul warna coklat kehitaman pada bagian tanaman yang terserang '),
(8, 1, 4, 'Tanaman terlambat tumbuh,kerdil dan mengakibatkan kematian'),
(9, 1, 5, 'Akar leher membusuk mencapai Rhizoma dan umbi batang, daun'),
(10, 1, 5, 'Umbi batang menguning,berkeriput,tipis dan bengkok'),
(11, 1, 6, 'Mirip serangan penyakit busuk akar,namun pada Rhizoma terdapat garis-garis,atau lingkaran berwarna ungu'),
(12, 1, 6, 'Pada serangan berat,seluruh Rhizoma menjadi ungu,diikuti pembusukan pada umbi batang'),
(13, 1, 7, 'Terdapat bintil-bintil kecil berwarna coklat pada bagian tanaman yang terkena penyakit'),
(14, 1, 8, 'timbul lingkaran atau garis-garis kekuningan pada permukaan daun'),
(15, 1, 9, 'Daun dan akar membusuk serta berbau'),
(16, 1, 9, 'Penyakit ini cepat sekali meluas khusus pada rhizoma dan umbi batang, penyebarannya agak lambat'),
(17, 1, 10, 'Semula berupa bercak kekuningan lalu muncul jaringan mati berbintik,bergaris atau lingkaran'),
(18, 1, 10, 'Daun tua banyak sekali menunjukan adanya bintik jaringan yang mati'),
(19, 1, 11, 'Muncul warna kehitaman pada pangkal daun '),
(20, 1, 11, 'Daun melunak dan busuk,akhirnya daun mati'),
(21, 1, 2, 'Bercak coklat pada permukaan daun, lalu menyebar ke seluruh bagian tanaman'),
(22, 1, 3, 'Kecambah anggrek akan membusuk dan mati'),
(23, 1, 5, 'Tanaman kerdil dan tidak sehat'),
(24, 1, 6, 'Tanaman sangat tidak sehat'),
(25, 1, 10, 'Bercak berwarna coklat atau hitam cekung'),
(26, 1, 10, 'Ada gejala kematian jaringan di tengah daun yang dilingkari jaringan normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `idjenis` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(11) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`idjenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`idjenis`, `no`, `keterangan`, `nilai`) VALUES
(1, 1, 'Penyakit Buluk', 0.8),
(2, 1, 'Penyakit Bercak Coklat', 0.6),
(3, 1, 'Penyakit Rebah Kecambah', 0.8),
(4, 1, 'Penyakit Bercak Hitam', 0.8),
(5, 1, 'Penyakit Busuk Akar', 0.6),
(6, 1, 'Penyakit Layu', 0.6),
(7, 1, 'Penyakit Busuk', 0.8),
(8, 1, 'Penyakit Bercak Bercincin', 0.8),
(9, 1, 'Penyakit Busuk Lunak', 0.6),
(10, 1, 'Penyakit Cymbidium', 0.8),
(11, 1, 'Penyakit Busuk Hitam', 0.6),
(12, 2, 'Tungau/Kutu Perisai', 0.6),
(13, 2, 'Belalang', 0.6),
(14, 2, 'Semut', 0.8),
(15, 2, 'Trips', 0.6),
(16, 2, 'Keong', 0.6),
(17, 2, 'Kutu Babi', 0.6),
(18, 2, 'Kumbang', 0.8),
(19, 2, 'Red Spinder', 0.6),
(20, 2, 'Ulat Daun', 0.8),
(21, 2, 'Kutu Tudung', 0.6),
(22, 2, 'Kepik', 0.8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`no`, `nama`) VALUES
(1, 'Penyakit'),
(2, 'Hama');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
