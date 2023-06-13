-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 17.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fik_sneak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id_brand`, `id_produk`, `nama_brand`) VALUES
(999, 890, 'Air Jordan 3'),
(1569, 299, 'Nike Air Max 97'),
(111224, 899, 'Air Jordan 3'),
(232678, 894, 'Air Jordan 3'),
(453211, 291, 'Nike Air Max 97'),
(675544, 292, 'Nike Air Max 97'),
(865434, 898, 'Air Jordan 3'),
(887666, 893, 'Air Jordan 3'),
(889976, 293, 'Nike Air Max 97'),
(976547, 295, 'Nike Air Max 97');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `ukuran_produk` int(11) DEFAULT NULL,
  `stock_produk` int(11) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `jumlah_produk` int(11) DEFAULT NULL,
  `total_harga_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_cart` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_user`, `id_produk`, `id_cart`, `jenis_pembayaran`) VALUES
(11927279, 'M211', 894, '677UI00', 'Dana'),
(23141517, 'O911', 291, '789BX66', 'OVO'),
(35361771, 'T411', 893, '089DE99', 'Dana'),
(54478995, 'I112', 898, '778YT77', 'OVO'),
(55643374, 'N998', 292, '589BX66', 'OVO'),
(65433789, 'X220', 295, '689BX66', 'Dana'),
(77889900, 'F455', 899, '832HU44', 'Dana'),
(88866890, 'C321', 299, '789XX69', 'OVO'),
(99900811, 'B001', 293, '989BX66', 'Dana'),
(99977776, 'D443', 890, '991XC88', 'OVO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_cart` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `ukuran_produk` int(11) NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_cart`, `nama_produk`, `ukuran_produk`, `stock_produk`, `harga_produk`) VALUES
(291, '789BX66', 'Nike Air Max 97', 13, 0, 1799),
(292, '589BX66', 'Nike Air Max 97', 12, 5, 1799),
(293, '989BX66', 'Nike Air Max 97', 10, 3, 1799),
(295, '689BX66', 'Nike Air Max 97', 11, 5, 1799),
(299, '789XX69', 'Nike Air Max 97', 9, 8, 1799),
(890, '991XC88', 'Air Jordan 3', 10, 21, 3000),
(893, '089DE99', 'Air Jordan 3', 11, 5, 3000),
(894, '677UI00', 'Air Jordan 3', 12, 5, 3000),
(898, '778YT77', 'Air Jordan 3', 13, 7, 3000),
(899, '832HU44', 'Air Jordan 3', 9, 8, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`) VALUES
('B001', 'johndoe@gmail.com', 'John Doe', 'johndoe12'),
('C321', 'bowanthony@gmail.com', 'Bow Anthony', 'bowanthony12'),
('D443', 'kingtom@gmail.com', 'King Tom', 'kingtom12'),
('F455', 'nishimami@gmail.com', 'Nishi Mami', 'nishimami12'),
('I112', 'fixterandy@gmail.com', 'Fixter Andy', 'fixterandy12'),
('M211', 'pattersonmarry@gmail.com', 'Patterson Marry', 'pattersonmarry12'),
('N998', 'jonesbarry@gmail.com', 'Jones Barry', 'jonesbarry12'),
('O911', 'bondurgerard@gmail.com', 'Bondur Gerard', 'bondurgerard12'),
('T411', 'bottlarry@gmail.com', 'Bott Larry', 'bottlarry12'),
('X220', 'murphydiane@gmail.com', 'Murphy Diane', 'murphydiane12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `fk_brand_produk` (`id_produk`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `fk_cart_produk` (`id_produk`),
  ADD KEY `fk_cart_pembayaran` (`id_pembayaran`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_pembayaran_user` (`id_user`),
  ADD KEY `fk_pembayaran_produk` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fk_brand_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `fk_cart_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `fk_pembayaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
