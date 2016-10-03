-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 03 Okt 2016 pada 14.05
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_anivtelkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_attend_confirmation`
--

CREATE TABLE IF NOT EXISTS `tb_attend_confirmation` (
  `id_attend_confirmation` varchar(5) NOT NULL,
  `attend_confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`id_attend_confirmation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_attend_confirmation`
--

INSERT INTO `tb_attend_confirmation` (`id_attend_confirmation`, `attend_confirmation`) VALUES
('0', 'Belum Konfirmasi'),
('1', 'Hadir'),
('2', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_participant`
--

CREATE TABLE IF NOT EXISTS `tb_participant` (
  `id_participant` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `id_participant_type` varchar(5) NOT NULL,
  `id_attend_confirmation` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_participant`
--

INSERT INTO `tb_participant` (`id_participant`, `name`, `company`, `position`, `email`, `phone`, `id_participant_type`, `id_attend_confirmation`, `created_at`) VALUES
('1', 'Taufan Fadhilah Iskandaraaaa', 'SMK Telkom Malang', '555', 'tfi231097@gmail.com', '87781884330', '1', '1', '2016-10-03 09:32:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_participant_type`
--

CREATE TABLE IF NOT EXISTS `tb_participant_type` (
  `id_participant_type` varchar(5) NOT NULL,
  `participant_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id_participant_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_participant_type`
--

INSERT INTO `tb_participant_type` (`id_participant_type`, `participant_type`) VALUES
('1', 'Mentri'),
('2', 'Tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registration`
--

CREATE TABLE IF NOT EXISTS `tb_registration` (
  `id_registration` varchar(8) NOT NULL,
  `id_participant` varchar(8) NOT NULL,
  `id_staff` varchar(8) NOT NULL,
  `register_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_registration`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staff`
--

CREATE TABLE IF NOT EXISTS `tb_staff` (
  `id_staff` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `name`, `username`, `password`, `created_at`) VALUES
('staff_1', 'staff 1', 'staff_1', '5f4dcc3b5aa765d61d8327deb882cf99', '2016-10-03 07:00:13'),
('staff_2', 'staff 2', 'staff_2', '5f4dcc3b5aa765d61d8327deb882cf99', '2016-10-03 07:00:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
