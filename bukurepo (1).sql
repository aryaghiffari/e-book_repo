-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2024 pada 15.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukurepo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`, `file`) VALUES
(63, 'Bootstrap Tutorial', 'bootstrap-tutorial', '', '', 'bootstrap-tutorial-sampul.png', '2024-02-03 23:19:19', '2024-02-03 23:19:19', 'bootstrap-tutorial-file.pdf'),
(64, 'Python Programming', 'python-programming', 'Fatos Morina', '', 'python-programming-sampul.png', '2024-02-15 12:06:12', '2024-02-15 12:06:12', 'python-programming-file.pdf'),
(65, 'How You Can Become a Great Software Engineer', 'how-you-can-become-a-great-software-engineer', 'Fatos Morina', '', 'how-you-can-become-a-great-software-engineer-sampul.png', '2024-02-15 12:08:29', '2024-02-15 12:08:51', 'how-you-can-become-a-great-software-engineer-file.pdf'),
(66, 'Pengantar Filsafat', 'pengantar-filsafat', 'Dr. Raja Oloan Tumanggor dan Carolus Sudaryanto', '', 'pengantar-filsafat-sampul.png', '2024-02-15 12:10:15', '2024-02-15 12:11:12', 'pengantar-filsafat-file.pdf'),
(67, 'Buku ajar Teori Bahasa dan Automata', 'buku-ajar-teori-bahasa-dan-automata', 'Sumarno, Hindarto dan Suhendro Busono', 'UMSIDA PRESS', 'buku-ajar-teori-bahasa-dan-automata-sampul.png', '2024-02-15 12:12:57', '2024-02-15 12:14:39', 'buku-ajar-teori-bahasa-dan-automata-file.pdf'),
(68, 'Pengantar Teori-Teori Filsafat', 'pengantar-teori-teori-filsafat', 'Ferry Hidayat ', '', 'pengantar-teori-teori-filsafat-sampul.png', '2024-02-15 12:16:16', '2024-02-15 12:17:24', 'pengantar-teori-teori-filsafat-file.pdf'),
(69, 'Psikologi Perkembangan', 'psikologi-perkembangan', 'Yudrik Jahja', 'PRENADAMEDIA GROUP', 'psikologi-perkembangan-sampul.png', '2024-02-15 12:18:29', '2024-02-15 12:19:04', 'psikologi-perkembangan-file.pdf'),
(71, 'Web Programming', 'web-programming', ' Ani Oktarini Sari; Ari Abdilah; Sunarti', 'Graha Ilmu', 'web-programming-sampul.png', '2024-02-15 12:24:19', '2024-02-15 12:25:11', 'web-programming-file.pdf'),
(72, 'Menyelam & Menaklukkan Samudera PHP', 'menyelam-menaklukkan-samudera-php', 'Loka Dwiartara', '', 'menyelam-menaklukkan-samudera-php-sampul.png', '2024-02-15 12:27:28', '2024-02-15 12:27:59', 'menyelam-menaklukkan-samudera-php-file.pdf'),
(73, 'HTML & CSS dari Akar ke Daun', 'html-css-dari-akar-ke-daun', 'Adi Hadisaputra', '', 'html-css-dari-akar-ke-daun-sampul.png', '2024-02-15 12:30:10', '2024-02-15 12:30:10', 'html-css-dari-akar-ke-daun-file.pdf'),
(74, 'Bootstrap 4: Belajar CRUD Menggunakan PHP dan MySQ', 'bootstrap-4-belajar-crud-menggunakan-php-dan-mysq', 'Miftahul Huda', 'AE Publishing', 'bootstrap-4-belajar-crud-menggunakan-php-dan-mysq-sampul.png', '2024-02-15 12:32:57', '2024-02-15 12:32:57', 'bootstrap-4-belajar-crud-menggunakan-php-dan-mysq-file.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','pengguna') NOT NULL DEFAULT 'pengguna',
  `foto` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `foto`, `fullname`) VALUES
(16, 'aryaghiffari', 'aryaghiffari254@gmail.com', '$2y$10$M63hLoaEJ6NX5VUt.PPFYeFbW7CcSpzu.kL/KtVTeruzVw66fFJVW', 'admin', NULL, ''),
(17, 'nafisa_nurul', 'nafisanurul@gmail.com', '$2y$10$CG2Y4HnG/VZhZcoqJXCfuuG1bgdV0YEVakvhjGhIA2Ze6ODOT64.S', 'pengguna', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
