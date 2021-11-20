-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 04.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(8, 'JIZI BLOUSE', 'Blouse Kekinian untuk melengkapi OOTD harian, bahan tidak nerawang, dilengkapi puring\r\n\r\n#Tersedia Warna\r\nUngu\r\nPutih\r\n\r\n#Tersedia Ukuran\r\nL\r\nXL\r\nXXL', 'pakaianwanita', 70000, 7, '1.jpeg'),
(11, 'KEMEJA KURTA', 'Kemeja yang cocok digunakan untuk acara formal, informal atau semiformal, bahan yang adem dan nayaman dipakai\r\n\r\n#Terdapat Warna\r\nHitam\r\nPutih\r\n\r\n#Terdapat UKuran\r\nL\r\nXL\r\nXXL', 'pakaianpria', 40000, 8, ''),
(13, 'SENDAL DAMELIA', 'Sendal Wanita yang cocok digunakan untuk acara apapun, nyaman dan model yang bagus\r\n\r\n#Tersedia warna\r\nPlum\r\nwhite\r\n\r\n#Ukuran\r\n37\r\n39\r\n40\r\n41', 'sendal', 58000, 15, ''),
(14, 'TAS WAISTBAG', 'Tas selempang laki-laki untuk melengkapi ootd harian\r\n\r\n#Tersedia Warna :\r\nArmy\r\nHitam', 'tas', 37000, 3, ''),
(15, 'JAM CURREN', 'Jam dengan desain elegan cocok digunakan untuk bepergian, tahan air.\r\n\r\n#Terdapat Warna\r\n\r\nHitam\r\nPutih', 'jam', 200000, 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'aisyah', 'aisyah', 'aisyah', 1),
(2, 'fizi', 'fizi', 'fizi', 2),
(3, '', '', '', 2),
(4, '', '', '', 2),
(5, '', '', '', 2),
(6, '', '', '', 2),
(7, '', '', '', 2),
(8, '', '', '', 2),
(9, '', '', '', 2),
(10, 'kdcnkdnc', 'ekdnke', 'e,knkd', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
