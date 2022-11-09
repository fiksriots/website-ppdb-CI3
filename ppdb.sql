-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 07.12
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `id_datadiri` int(100) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_lampiran` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `id_datadiri`, `id_ujian`, `id_lampiran`, `nama`, `email`, `alamat`, `gender`, `no_telp`, `jurusan`, `password`, `role_id`, `bukti_pembayaran`, `status`, `active`) VALUES
(26, 18, 13, 2, 'Ahmad Dzakiyul Fikri', 'dzakiyul89@gmail.com', 'lamongan', 'Laki-laki', '085706555122', 'SMP N 2 Paciran', '5d4864249b21de08642aa6ff4178b346', 1, '46.jpeg', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id_datadiri` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `minat_jurusan` varchar(100) NOT NULL,
  `p_bantuan` varchar(100) NOT NULL,
  `status_anak` varchar(20) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `tinggi` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `no_skhun` varchar(100) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` varchar(50) NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `no_telp_ayah` varchar(50) NOT NULL,
  `hidup_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `no_telp_ibu` varchar(50) NOT NULL,
  `hidup_ibu` varchar(50) NOT NULL,
  `nilai_b_indo` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `nilai_b_inggris` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `slogan` int(100) NOT NULL,
  `alamat` int(100) NOT NULL,
  `yayasan` int(40) NOT NULL,
  `email` int(40) NOT NULL,
  `telp` int(20) NOT NULL,
  `no_rek` int(20) NOT NULL,
  `logo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_gelombang`
--

CREATE TABLE `info_gelombang` (
  `id_gelombang` int(11) NOT NULL,
  `gelombang` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `sampai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_gelombang`
--

INSERT INTO `info_gelombang` (`id_gelombang`, `gelombang`, `dari`, `sampai`) VALUES
(0, 'Gelombang 1', 'Maret', 'April'),
(0, '2', 'mei', 'juni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_jurusan`
--

CREATE TABLE `info_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `kode_jurusan` varchar(20) NOT NULL,
  `kuota_siswa` int(20) NOT NULL,
  `siswa_mendaftar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_jurusan`
--

INSERT INTO `info_jurusan` (`id_jurusan`, `nama_jurusan`, `kode_jurusan`, `kuota_siswa`, `siswa_mendaftar`) VALUES
(5, 'Teknik Komputer Jaringan', 'TKJ', 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pembayaran`
--

CREATE TABLE `info_pembayaran` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `harga_formulir` varchar(200) NOT NULL,
  `uang_pangkal` varchar(200) NOT NULL,
  `spp` varchar(200) NOT NULL,
  `dpps` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_pembayaran`
--

INSERT INTO `info_pembayaran` (`id`, `jurusan`, `harga_formulir`, `uang_pangkal`, `spp`, `dpps`) VALUES
(4, 'MM dan TKJ', '250000', '1500000', '6000000', '1250000'),
(5, 'OTKP dan AKL', '250000', '1500000', '550000', '1250000'),
(6, 'Perhotelan dan Tata Boga', '250000', '1500000', '650000', '1250000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_sekolah`
--

CREATE TABLE `info_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `Nama_sekolah` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_rek` varchar(40) NOT NULL,
  `motto` varchar(100) NOT NULL,
  `logo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_sekolah`
--

INSERT INTO `info_sekolah` (`id_sekolah`, `Nama_sekolah`, `alamat`, `no_telp`, `email`, `no_rek`, `motto`, `logo`) VALUES
(1, 'SMK Barunawati Biru', 'Surabaya', 1, 'sdddd', '22222', '2', 'logo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `lampiran_kk` varchar(100) NOT NULL,
  `lampiran_akta` varchar(100) NOT NULL,
  `lampiran_ktp` varchar(100) NOT NULL,
  `lampiran_ijazah` varchar(100) NOT NULL,
  `lampiran_rapot` varchar(100) NOT NULL,
  `lampiran_bantuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_akun`, `lampiran_kk`, `lampiran_akta`, `lampiran_ktp`, `lampiran_ijazah`, `lampiran_rapot`, `lampiran_bantuan`) VALUES
(2, 26, '15.jpeg', '141.jpeg', '29.jpeg', '41.jpeg', '19.jpeg', ''),
(3, 26, '18.jpeg', '142.jpeg', '291.jpeg', '42.jpeg', '191.jpeg', '211.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `e` varchar(300) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `jurusan` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `e`, `knc_jawaban`, `gambar`, `aktif`, `jurusan`) VALUES
(45, 'Account Receivable merupakan istilah dari', 'Piutang Dagang', 'Aktiva', 'Harta', 'Peralatan', '', 'a', '', 'Y', ''),
(44, 'Yang dimaksud dengan FAKTUR adalah', 'Bukti penjual', 'Bukti transaksi', 'Bukti kas masuk', 'Bukti penyediaan barang', '', 'b', '', 'Y', ''),
(43, 'Pemindahan catatan kedalam buku besar disebut', 'Posting', 'Buku Piutang', 'Buku Kas', 'Faktur', '', 'a', '', 'Y', ''),
(41, 'Akun aktiva dalam akuntans yaitu', 'Kas', 'Hutang', 'Aktifa', 'Infestasi', '', 'a', '', 'Y', ''),
(42, 'Berikut ini merupakan jenis buku transaksi, kecuali', 'Piutang', 'Hutang', 'Faktur', 'Kas', '', 'd', '', 'Y', ''),
(30, 'Kumpulan titik disebut', 'Intensitas', 'Pixcel', 'Layer', 'Contras', '', 'b', '', 'Y', ''),
(29, 'Untuk menutup program aplikasi photoshop bisa menggunakan shortcut', 'CTRL + S', 'CTRL + L', 'CTRL + A', 'CTRL + Q', '', 'd', '', 'Y', ''),
(28, 'Yang termasuk program berbasis vektor dalam kategori program modeling adalah', 'Layer', 'Autocad', '3D Studio MAX', 'Photosho', '', 'c', '', 'Y', ''),
(27, 'Dibawah ini software pengolah gambar vektor/digital illustrator adalah', 'Bitmap', 'Corel Draw', 'Macromedia ', 'Paint', '', 'a', '', 'Y', ''),
(26, 'RAM kepanjangan dari', 'Ready Acsess Memory', '', 'Read Acsess Modem', 'Random Acsess Memory', '', 'd', '', 'Y', ''),
(25, 'Default untuk penyimpanan file dari software Flash adalah', 'fla', 'Ard', 'Jpg', 'Avi', '', 'a', '', 'Y', ''),
(24, 'Salah satu software pengolah audio adalah', 'Adobe Photoshop', 'PIxcel', 'Adobe Audition', 'Swis Max', '', 'c', '', 'Y', ''),
(23, 'Software yang digunakan untuk membuat animasi teks adalah', 'Corel Draw', 'Rotate', 'Adobe Flash', 'Swish Max', '', 'd', '', 'Y', ''),
(22, 'Jika ingin memotong gambar hasil scan, maka digunakanlah ', 'Rotate', 'Brush', 'Crop', 'Zoom', '', 'c', '', 'Y', ''),
(21, 'Softwaware yang digunakan untuk membuat web design adalah', 'Dreamweaver', 'Macromedia Flash', 'Corel Draw', 'Adobe Photoshop', '', 'a', '', 'Y', ''),
(48, 'Program akuntansi berbasis komputer adalah', 'MYOB', 'RPL', 'Excel', 'Word', '', 'a', '', 'Y', ''),
(49, 'Nama lain dari rata tengah yaitu', 'Left', 'Right', 'Center', 'Justify', '', 'c', '', 'Y', ''),
(50, 'Nama lain dari akuntansi yaitu', 'Finance', 'Penulisan', 'Pembukuan', 'Looping', '', 'c', '', 'Y', ''),
(51, 'Alat yang berfungsi untuk menghubungkan 2 jaringan dengan segmen yang berbeda adalah', 'Router', 'Switch', 'AP', 'Kabel', '', 'a', '', 'Y', ''),
(52, 'Berikut adalah fungsi dari Firewall, yaitu ….', 'Penghubung antara 2 jaringan yang berbeda', 'Mengatur dan mengontrol lalu lintas jaringan', 'Penghubung antara 2 jaringan ke internet menggunakan 1 IP', 'Program yang melakukan request tehadap konten dari Internet/Intranet', '', 'b', '', 'Y', ''),
(53, 'Dalam Model OSI Layer, yang berfungsi untuk menerima data dari Session Layer adalah….', 'Network Layer', ' Data Link Layer', 'Transport Layer', 'Physical Layer', '', 'c', '', 'Y', ''),
(54, 'Subnet Mask yang dapat digunakan pada IP kelas B adalah….', '255.0.0.0', '255.255.0.0', '255.255.255.248', '255.255.255.0', '', 'b', '', 'Y', ''),
(55, 'Jenis topologi yang memiliki node tengah sebagai pusat penghubung dari suatu jaringan adalah topologi….', 'Topologi Bus', 'Topologi Ring', 'Topologi Tree', ' Topologi Star', '', 'd', '', 'Y', ''),
(56, 'Sebuah program tambahan yang berfungsi sebagai alat mempermudah penggunaan PC disebut….', 'Sistem Operasi', ' Program Paket', 'Bahasa Pemrograman', 'software Aplikasi', '', 'd', '', 'Y', ''),
(57, 'Dibawah ini merupakan salah satu contoh SOJ pure, kecuali….', 'Linux Debian', 'FreeBSD', 'Fedora', 'Windows', '', 'a', '', 'Y', ''),
(58, 'Berikut ini adalah contoh-contoh media transmisi yang menggunakan kabel, kecuali….', 'Fiber Optic', 'Wireless', 'STP', 'Coaxial/Coax/BNC', '', 'b', '', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `ujian` varchar(100) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `ujian`, `id_akun`) VALUES
(13, '27', 26),
(14, '27', 26),
(15, '27', 27),
(16, '27', 27),
(17, '35', 26),
(18, '20', 27),
(19, '35', 26),
(20, '35', 26),
(21, '35', 26),
(22, '0', 30),
(23, '0', 30),
(24, '4', 30),
(25, '4', 30),
(26, '0', 30),
(27, '27', 28),
(28, '31', 28);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_datadiri`);

--
-- Indeks untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `info_jurusan`
--
ALTER TABLE `info_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `info_pembayaran`
--
ALTER TABLE `info_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_sekolah`
--
ALTER TABLE `info_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_datadiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `info_jurusan`
--
ALTER TABLE `info_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `info_pembayaran`
--
ALTER TABLE `info_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
