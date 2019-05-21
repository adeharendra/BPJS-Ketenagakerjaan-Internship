-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2019 pada 02.44
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spsk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip`
--

CREATE TABLE `tbl_arsip` (
  `id_arsip` int(11) NOT NULL,
  `k_arsip` varchar(30) NOT NULL,
  `p_arsip` varchar(30) NOT NULL,
  `bk_arsip` varchar(30) NOT NULL,
  `kd_arsip` varchar(30) NOT NULL,
  `bt_arsip` date NOT NULL,
  `nv_arsip` varchar(30) NOT NULL,
  `box_arsip` varchar(5) NOT NULL,
  `rak_arsip` varchar(5) NOT NULL,
  `tgl_upload` varchar(30) NOT NULL,
  `files` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id_arsip`, `k_arsip`, `p_arsip`, `bk_arsip`, `kd_arsip`, `bt_arsip`, `nv_arsip`, `box_arsip`, `rak_arsip`, `tgl_upload`, `files`, `status`) VALUES
(1, 'WILAYAH JATENG & DIY', 'CILACAP', 'JAMINAN', 'TITIPAN CABANG', '1999-07-01', '001 - 090', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(2, 'WILAYAH JATENG & DIY', 'PURWOKERTO', 'JAMINAN', 'TITIPAN CABANG', '1999-09-01', '001 - 123', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(3, 'WILAYAH JATENG & DIY', 'PURWOKERTO', 'JAMINAN', 'TITIPAN CABANG', '1999-10-01', '001 - 200', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(4, 'WILAYAH JATENG & DIY', 'KLATEN', 'JAMINAN', 'TITIPAN CABANG', '1998-04-01', '001 - 023', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(5, 'WILAYAH JATENG & DIY', 'PURWOKERTO', 'JAMINAN', 'TITIPAN CABANG', '2019-02-05', '001 - 200', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(6, 'WILAYAH JATENG & DIY', 'CILACAP', 'VOUCHER UMUM', 'TITIPAN CABANG', '1998-06-11', '001 - 023', '', '', '0000-00-00', 'BOX-17-JUNI-99-20.xls', '1'),
(7, 'WILAYAH JATENG & DIY', 'CILACAP', 'VOUCHER UMUM', 'TITIPAN CABANG', '2018-06-01', '013 - 375', '8', '25', '17-03-2019 00:30:49', 'BOX 8 013-375.xls', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `jenis_voucher` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `jenis_voucher`) VALUES
(1, 'VOUCHER UMUM'),
(2, 'JAMINAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjam` int(11) NOT NULL,
  `npp_user` int(32) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `jenis_voucher` varchar(32) NOT NULL,
  `box` int(10) NOT NULL,
  `rak` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjam`, `npp_user`, `nama_user`, `jabatan`, `email`, `tgl_peminjaman`, `jenis_voucher`, `box`, `rak`, `status`) VALUES
(1, 123456789, 'user2', 'Manager Tata Usaha', '', '2019-03-26', 'VOUCHER UMUM', 55, 21, 1),
(2, 123456789, 'user2', 'Manager Tata Usaha', '', '2019-03-15', 'VOUCHER UMUM', 23, 56, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_quotes`
--

CREATE TABLE `tbl_quotes` (
  `id` int(3) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `sumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_quotes`
--

INSERT INTO `tbl_quotes` (`id`, `quote`, `sumber`) VALUES
(1, 'Saya hanya bekerja tak peduli penilaian orang. Mau jelek, mau gagal, mau berhasil, yang penting saya bekerja', 'Joko Widodo'),
(2, 'Orang yang tak pernah melakukan kesalahan adalah orang yang tak pernah mencoba sesuatu yang baru', 'Albert Einstein'),
(3, 'Kunci kegagalan adalah berusaha menyenangkan semua orang', 'Ed Sheeran'),
(4, 'Sukses selalu bersumber dari perbuatan. Orang yang sukses terus berusaha. Mereka mungkin membuat kesalahan, tetapi mereka tidak menyerah', 'Conrad Hilton'),
(5, 'Pilihlah pekerjaan yang Anda sukai, dan Anda tidak akan perlu bekerja seumur hidup Anda. Karena Anda menikmati apa yang anda lakukan', 'Confucius'),
(6, 'Persiapan terbaik untuk pekerjaan yang baik esok hari adalah melakukan pekerjaan baik hari ini', 'Elbert Hubbard'),
(7, 'Tidak ada yang bisa menggantikan kerja keras untuk mencapai kesuksesan dalam hidup', 'Thomas Alva Edison'),
(8, 'Bekerja keras dan bekerja cerdas terkadang menjadi dua hal yang berbeda', 'Bryon Dorgan'),
(9, 'Tidak ada kesuksesan yang mau mendatangi Anda yang tidak mau bekerja', 'Vince Lombardi'),
(10, 'Pekerjaan bukanlah makhluk hidup, tetapi pekerjaan adalah hal yang membuat seseorang hidup', 'Maya Angelou'),
(11, 'Anda tidak bisa mengharapkan pekerjaan menyelesaikan masalah dirinya sendiri', 'Maya Angelou');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `npp_user` varchar(30) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto_user` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `nama_user`, `npp_user`, `jabatan`, `email`, `foto_user`, `password`, `created_at`, `level`) VALUES
(1, 'user1', 'User 1 Dummy Test aja', '12345678999', 'Direktur', 'akusiapa@gmail.com', 'blank.png', 'caf1a3dfb505ffed0d024130f58c5cfa', '0000-00-00 00:00:00', 2),
(4, 'root', 'Administrator', '321654', 'Admin', 'testing@dunia.com', 'blank.png', 'caf1a3dfb505ffed0d024130f58c5cfa', '2019-03-04 00:00:00', 1),
(6, 'cardinal', 'user2', '123456789', 'Manager Tata Usaha', 'cardina@cardinal.com', 'blank.png', 'caf1a3dfb505ffed0d024130f58c5cfa', '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
