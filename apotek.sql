-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2024 pada 04.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplies`
--

CREATE TABLE `supplies` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_category` enum('Over-the-counter drugs','Limited over-the-counter drugs','Hard drugs') NOT NULL,
  `item_total` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplies`
--

INSERT INTO `supplies` (`item_id`, `item_name`, `item_category`, `item_total`, `price`) VALUES
(1, 'Paracetamol', 'Over-the-counter drugs', 100, 5000),
(2, 'Amoxil ', 'Over-the-counter drugs', 100, 20000),
(3, 'Panadol', 'Over-the-counter drugs', 80, 20000),
(4, 'Paramex', 'Over-the-counter drugs', 80, 20000),
(5, 'Oskadon', 'Over-the-counter drugs', 80, 5000),
(6, 'Panadol Regular', 'Over-the-counter drugs', 20, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_on` datetime NOT NULL DEFAULT current_timestamp(),
  `transaction_item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`transaction_on`, `transaction_item_id`, `item_name`, `total_item`, `total_price`) VALUES
('2024-06-03 23:03:30', 1, 'Paracetamol', 9, 56600000),
('2024-06-03 23:03:37', 2, 'Amoxil ', 9, 7900000),
('2024-06-03 23:03:45', 2, 'Amoxil ', 6, 7720000),
('2024-06-03 23:03:52', 1, 'Paracetamol', 7, 54800000),
('2024-06-04 09:16:05', 1, 'Paracetamol', 20, 600000),
('2024-06-04 09:16:52', 6, 'Panadol Regular', 60, 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin`, `create_at`) VALUES
(1, 'Lantern', 'victoria04_', 1, '2024-05-30 00:30:20'),
(2, 'Victoria', 'lantern03_', 0, '2024-05-30 00:49:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD UNIQUE KEY `transaction on` (`transaction_on`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `supplies`
--
ALTER TABLE `supplies`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
