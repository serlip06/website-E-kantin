-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2023 pada 16.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_produk`, `kategori`, `deskripsi_produk`, `harga_produk`, `stok`, `gambar`) VALUES
(1, 'Mi goreng', 'makanan', 'enak loh', 15000, 14, '099632200_1589527804-shutterstock_1455941861.webp'),
(2, 'Nasi goreng', 'makanan', 'enak nih nasi gorengnya', 15000, 31, '606e886b972ac.jpeg'),
(3, 'Risol', 'makanan', 'nih risol enak banget loh', 3000, 45, 'Resep-Risol-Mayo.jpg'),
(4, 'Bakwan', 'makanan', 'bakwan uwaw', 1000, 49, '88810-bakwan-sayur.jpg'),
(6, 'Telor sapi', 'makanan', 'uenak nih gayn', 12000, 49, 'telur-mata-sapi-foto-resep-utama.jpg'),
(7, 'Mi goyeng', 'makanan', 'mi goyeng enak tau', 100000, 37, '099632200_1589527804-shutterstock_1455941861.webp'),
(8, 'Es Teh', 'minuman', 'Segerrr', 5000, 40, '1855481479.jpg'),
(9, 'Es Jeruk', 'minuman', 'Seger juga', 5000, 43, 'es-jeruk-foto-resep-utama.jpg'),
(16, 'Soto', 'makanan', 'mantull', 15000, 15, 'd3cb3b7a-aa3a-4e0a-a0d4-83828a40b5d5_43.jpg'),
(17, 'Bakso', 'makanan', 'Bakso adalah makanan yang terbuat dari tepung', 20000, 50, '198851879.jpg'),
(18, 'Nasi kuning', 'makanan', 'Nasi, tapi kuning', 15000, 25, 'download.jpg'),
(19, 'Seblak', 'makanan', 'Seblaknya mas.. mba..', 15000, 25, 'download (1).jpg'),
(20, 'Telur Gulung', 'makanan', 'Telur, tapi digulung', 2000, 35, '046971800_1539840582-14642503_362088644181309_9036074491521823667_n.jpg'),
(21, 'Es Kopi', 'minuman', 'Seger nih, Kopi pake es', 7000, 19, '091589800_1540455590-thomas-vimare-126229-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `nama`, `menu`, `ulasan`) VALUES
(1, 'Davit', 'Mi goreng', 'Enak banget bikin nagihh'),
(2, 'Davit', 'Es Kopi', 'Seger kopinya kaya di cafe'),
(3, 'Davit', 'Telor sapi', 'Beneran telurnya sapi gaes enak bgt'),
(4, 'Yogi praditiya', 'Mi goreng', 'Beneran enak lho gaes'),
(5, 'Yogi praditiya', 'Risol', 'Mantap banget risolnya'),
(6, 'Yogi praditiya', 'Es Teh', 'Terlalu manis buat saya'),
(7, 'Ilham Nur Widodo', 'Mi goreng', 'mie nya enak, tapi tetep lebih enak indomie'),
(8, 'Ilham Nur Widodo', 'Bakwan', 'enak nih bakwan, apalagi pake sambel'),
(9, 'Fandika Ikhwanto', 'Mi goreng', 'Terlalu asinnn'),
(10, 'Fandika Ikhwanto', 'Es Jeruk', 'seger nih'),
(11, 'Muhammad Wahyudi', 'Mi goreng', 'mantull'),
(12, 'Muhammad Wahyudi', 'Es Teh', 'Es teh heula atuh'),
(13, 'Yudi Pratama', 'Mi goreng', 'best seller nih mie nya enak banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(70) NOT NULL,
  `balance` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `balance`, `name`, `username`, `email`, `password`) VALUES
(29, 'user', 0, 'Rayfan', 'Ryfan', 'rayfana09@gmail.com', '$2y$10$VyWmnH0rYuXZ1oHiRCJAuuQpu0d2KFnW4jTxMrFNuSsOogLZes5Be'),
(30, 'admin', 0, 'admin', 'admin', 'admin@gmail.com', '$2y$10$LL0NMxQe4HcCV94qnApMh.0q5OB6UpkfszyTzkBCaLyS8sln5N9qy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
