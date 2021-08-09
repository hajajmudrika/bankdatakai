-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 15.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_inject`
--

CREATE TABLE `db_inject` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `file` varchar(258) NOT NULL,
  `bulan` varchar(258) NOT NULL,
  `tahun` varchar(258) NOT NULL,
  `format` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_inject`
--

INSERT INTO `db_inject` (`id`, `judul`, `file`, `bulan`, `tahun`, `format`, `tanggal`) VALUES
(49, 'kamera', 'UAS_ML_09021381823085_Feron_Sadana.docx', 'januari', '2021', '.docx', '2021-08-02'),
(50, 'kamera', 'Surat_izin_PT__Bukit_Asam.docx', 'januari', '2021', '.docx', '2021-08-02'),
(51, 'kamera', '', 'januari', '2021', '', '2021-08-02'),
(52, 'kamera', 'Surat_permohonan_KP_PT_Pusri.pdf', 'januari', '2021', '.pdf', '2021-08-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_stasiun_injection`
--

CREATE TABLE `db_stasiun_injection` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `keterangan` varchar(870) NOT NULL,
  `bulan` varchar(250) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `format` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_stasiun_injection`
--

INSERT INTO `db_stasiun_injection` (`id`, `judul`, `keterangan`, `bulan`, `tahun`, `format`) VALUES
(2, 'kuisioner', 'document/aerlimau/Excel/2021/januari/aerlimau.xlsx', 'januari', '2021', 'xlsx'),
(3, 'radio', '', 'november', '2021', ''),
(4, 'radio', '', 'november', '2021', ''),
(5, 'radio', '', 'november', '2021', ''),
(6, 'radio', '', 'november', '2021', ''),
(7, 'hajaj', '', 'januari', '2021', ''),
(8, 'hajaj', '', 'januari', '2021', ''),
(9, 'hajaj', '', 'januari', '2021', ''),
(10, 'hajaj', '', 'januari', '2021', ''),
(11, 'hajaj', '', 'januari', '2021', ''),
(12, 'hajaj', '', 'januari', '2021', ''),
(13, 'hajaj', '', 'januari', '2021', ''),
(14, 'hajaj', '', 'januari', '2021', ''),
(15, '2', '', 'januari', '2021', ''),
(16, '9', '', 'april', '2022', ''),
(17, '9', '', 'april', '2022', ''),
(18, '2', '', 'november', '2023', ''),
(19, '2', '', 'juni', '2023', ''),
(20, '2', '', 'juni', '2023', ''),
(21, 'kuisioner', '', 'november', '2023', ''),
(22, 'kuisioner', '', 'januari', '2021', ''),
(23, 'kuisioner', '', 'januari', '2021', ''),
(24, 'kuisioner', '', 'januari', '2021', ''),
(25, 'kuisioner', '', 'januari', '2021', ''),
(26, '2', '', 'november', '2023', ''),
(27, '9', '', 'april', '2022', ''),
(28, '2', '', 'januari', '2021', ''),
(29, 'radio', '', 'november', '2021', ''),
(30, 'hajaj', '', 'januari', '2021', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `pass`, `role_id`, `is_active`, `date_created`) VALUES
(39, 'feron sadana', 'feron1223@gmail.com', 'default.jpg', '$2y$10$0YotlR2jByncLf2ETbnLy.ociF4utZpJK4xKHw0WFdByrp7kVPyju', 2, 1, 1628251656);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(17, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(4, 3, 'Menu management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(13, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(14, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(15, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user', 1),
(16, 2, 'Joint Inspection', 'joint', 'fas fa-fw fa-check-square', 1),
(17, 2, 'Tampilan File', 'joint/kategori', 'fas fa-fw fa-file-alt', 1),
(19, 1, 'User Management', 'admin/user_management', 'fas fa-fw fa-user', 1),
(20, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(21, 2, 'Dashboard', 'admin', 'fas fa-fw fa-columns', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(85, 'feronsadana16@gmail.com', 'vF3vZhnCD1vtq9+A25G+X59rieiBhp9XTm0pbCZrZG0=', 1628256824),
(86, 'feron1223@gmail.com', 'b5cb93d894bb4b45639865b00fdf4d2adab39409cd5c7605d23295b2dc01be4d', 1628257045),
(87, 'feron1223@gmail.com', '1aea4932ea9a91a9e16b2e92f7b0733be382d6a507467628a93f53af62f2ae06', 1628257096),
(88, 'feron1223@gmail.com', '7ebfc5dfc10ddf8f873d36ddd71f8eca4d1ec145a552ba53431899c54c55de35', 1628257215),
(89, 'feron1223@gmail.com', 'e8c994cd553748b3e3629f693becdc5e856fd7c410bcd4131174a5a2808a7aba', 1628257306),
(90, 'feron1223@gmail.com', '2e6df3541ad92bea73ff6c80bd8e7d03a0f037073080d3fa71bbf4297609b248', 1628258035);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_inject`
--
ALTER TABLE `db_inject`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_stasiun_injection`
--
ALTER TABLE `db_stasiun_injection`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_inject`
--
ALTER TABLE `db_inject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `db_stasiun_injection`
--
ALTER TABLE `db_stasiun_injection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
