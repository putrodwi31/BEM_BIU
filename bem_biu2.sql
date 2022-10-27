-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 06.17
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem_biu2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_ekskul`
--

CREATE TABLE `absen_ekskul` (
  `id` int(11) NOT NULL,
  `id_user` varchar(128) NOT NULL,
  `tanggal_absen` varchar(128) NOT NULL,
  `tanda_tangan` text NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `isi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `tag` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `rand_id` varchar(128) NOT NULL,
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `suka` int(11) NOT NULL DEFAULT 0,
  `tidak_suka` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `slug`, `gambar`, `isi`, `kategori`, `tag`, `tanggal`, `rand_id`, `dilihat`, `suka`, `tidak_suka`, `status`) VALUES
(18, 'Liga Futsal Mahasiswa di LIFUMA', '1', 'liga-futsal-mahasiswa-di-lifuma', '18196962381910640843futsal.jpg', '<p>UKM futsal bina insani mengikuti liga LIIFUMA 2022 yang diadakan di STIE</p>\n', 1, 'futsal, BiU, Liga Futsal Mahasiswa', '2022-08-10', 'T5FaBg', 1, 0, 0, 1),
(19, 'Program Kerja Divisi Kominfo x Minat Bakat', '1', 'program-kerja-divisi-kominfo-x-minat-bakat', '151768481pameran.jpg', '<p>Program kerja yang akan dilaksanakan oleh divisi Kominfo dan Minat Bakat di bulan april 2022 nanti</p>\r\n', 2, 'Proker, BEM, bina insani university', '2022-08-10', 'uXbfbg', 1, 0, 0, 1),
(20, 'Sertijab Angkatan 2022/2023', '1', 'sertijab-angkatan-2022/2023', '1747618980876964702paslon-1-1.jpg', '<p>Badan Eksekutif Mahasiswa Bina Insani University akan melaksanakan sertijab setelah melakukan Pemira</p>\r\n', 1, 'Sertijab, BEM, bina insani university', '2022-08-10', 'AAwi53', 0, 0, 0, 1),
(21, 'Cek dmkmdskamd00sdms_+', '1', 'Cek-dmkmdskamd00sdms_+', 'bali.jpg', '<p>skmkmsdsmsmxksmxksmxkss</p>\r\n', 1, 'Php', '2022-09-30', 'QGuGtx', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_kategori`
--

CREATE TABLE `blog_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog_kategori`
--

INSERT INTO `blog_kategori` (`id`, `nama`) VALUES
(1, 'Berita'),
(2, 'Program Kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_komentar`
--

CREATE TABLE `blog_komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `komen` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `is_reply` int(11) NOT NULL,
  `id_reply_comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog_komentar`
--

INSERT INTO `blog_komentar` (`id`, `id_artikel`, `name`, `email`, `komen`, `tanggal`, `status`, `is_reply`, `id_reply_comment`) VALUES
(1, 12, 'Putro Dwi', 'putrodwi05@gmail.com', 'Sangat menarik, terus kembangkan web ini', '1621522086', '1', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bph`
--

CREATE TABLE `bph` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `ig` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bph`
--

INSERT INTO `bph` (`id`, `nama`, `ig`, `jabatan`, `image`) VALUES
(10, 'Bagas Adji Priantomo', 'bagas', 'Ketua BEM', 'BAGAS1.jpg'),
(11, 'Leliana Eka Fauziah', 'Leliana', 'Wakil Ketua BEM', 'LELIANA.jpg'),
(12, 'Nabila Rodhatul Jannah', '-', 'Sekretaris 1', 'default.jpg'),
(13, 'Annisa Nurhalisa', '-', 'Sekretaris 2', 'default.jpg'),
(14, 'Vinki Cecilian Maulana', '-', 'Bendahara 1', 'default.jpg'),
(15, 'Putri Barinda Shofiani', '-', 'Bendahara 2', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `ukm` int(11) NOT NULL,
  `kementerian` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `angkatan` varchar(128) NOT NULL,
  `divisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `nis` varchar(128) NOT NULL,
  `nomor` varchar(128) NOT NULL,
  `sekolah` varchar(128) NOT NULL,
  `moto` varchar(256) NOT NULL,
  `pengalaman` varchar(256) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `alasan` varchar(256) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `id_kem` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kementerian`
--

CREATE TABLE `kementerian` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kementerian`
--

INSERT INTO `kementerian` (`id`, `nama`, `desk`, `logo`) VALUES
(1, 'PSDO & PSDM', 'PSDO & PSDM merupakan bidang yang bertujuan untuk mewadahi kegiatan-kegiatan penelitian dan Pengembangan organisasi yang dilakukan oleh mahasiswa di lingkungan Universitas Bina Insani. Bidang ini juga bertujuan untuk mewadahi pemberdayaan sumber daya manusia untuk mendukung pengembangan sumber daya yang dimiliki mahasiswa dalam meningkatkan kemampuan berorganisasi, kemampuan berkomunikasi, dan kemampuan softskill lainnya.', 'default.jpg'),
(2, 'Sosial Politik', 'Berfokus pada meningkatkan daya kritis, daya nalar, dan kepedulian mahasiswa terhadap isu-isu nasional maupun internasional, serta forum diskusi dan aksi mahasiswa. Bidang ini juga bisa mewujudkan mahasiswa yang mampu berperan aktif dan berwawasan luas dalam hal pengabdian masyarakat, dan mewadahi kegiatan - kegiatan sosial dari mahasiswa ke masyarakat sekitar.', 'default.jpg'),
(3, 'Kemahasiswaan', 'Kementerian kemahasiswaan merupakan wadah bagi mahasiswa untuk mengembangkan kapasitas kemahasiswaannya berupa aspirasi, inisiasi, atau gagasan-gagasan positif dan kreatif melalui berbagai kegiatan yang relefan dengan tujuan pendidikan nasional serta visi dan misi perguruan tinggi itu sendiri yang bekerja secara organisatoris serta dapat menaungi kebutuhan substansu aktivitas kemahasiswaan', 'default.jpg'),
(4, 'Minat dan Bakat', 'Bidang ini bertujuan untuk mewadahi pengembangan potensi dalam hal kegiatan - kegiatan akademik, Seni, dan Olahraga dari mahasiswa Universitas Bina Insani. Fokus utama dari divisi ini mengacu pasa softskill dan hardskill dengan harapan mampu membentuk mahasiswa Universitas Bina Insani dengan potensi unggul dalam bidang minat dan bakat.', 'default.jpg'),
(5, 'Komunikasi dan Informasi', 'Kementerian Komunikasi dan Informasi bertugas untuk menyebarkan pada mahasiswa di kampus, menjalin hubungan baik dengan BEM Fakultas atu BEM Universitas lain, Menjalin pppartisipasi aktif para pengurus BEM, dan bertugas menyebarkan dokumentasi sebuah event. Komunikas dan Informasi juga merupakan bidang yang bertujuan untuk mewadahi hal - hal yang berhubungan dengan informasi di lingkungan kampus Universitas Bina Insani, perlombaan dan informasi- informasi lainnnya. Dengan harapan agar dapat membentuk mahasiswa yang mampu menyikapi secara cerdas dan tanggap terhadap informasi yang beredar dilingkungan sekitar.', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `isi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `subject`, `isi`) VALUES
(1, 'Putro Dwi', 'putrodwi31@gmail.com', 'security', 'Tingkatkan lagi keamanan web ini agar kedepannya user lebih percaya terhadapweb ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `angkatan` varchar(128) NOT NULL,
  `status` varchar(10) NOT NULL,
  `started` varchar(128) NOT NULL,
  `end` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `angkatan`, `status`, `started`, `end`) VALUES
(2, 'Angkatan XIV', '1', '1659869820', '1661943420');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prof_org`
--

CREATE TABLE `prof_org` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_kabinet` varchar(50) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `desk` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `jam` varchar(128) NOT NULL,
  `no1` varchar(128) NOT NULL,
  `no2` varchar(128) NOT NULL,
  `ig` varchar(128) NOT NULL,
  `yt` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prof_org`
--

INSERT INTO `prof_org` (`id`, `nama`, `nama_kabinet`, `logo`, `alamat`, `desk`, `email`, `hari`, `jam`, `no1`, `no2`, `ig`, `yt`) VALUES
(1, 'BEM Universitas Bina Insani', 'Catrawiyasa', 'logo-kabinet1.png', 'Jl. Raya Siliwangi No.6, RT.001/RW.004, Sepanjang Jaya, Kec. Rawalumbu, Kota Bks, Jawa Barat 17114', 'Badan Eksekutif Mahasiswa Universitas Bina Insani Didirikan pada tanggal 4 Feruari 2021, diketuai oleh Bagas Adji Priantomo dan wakilnya, Leliana Eka Fauziah.', 'bem@binainsani.ac.id', 'Selasa & Kamis', '15:00 - 17:00', '080', '080', 'bem.binainsani', 'bem.binainsani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukm`
--

INSERT INTO `ukm` (`id`, `nama`, `logo`, `desk`) VALUES
(1, 'Computer Club', 'cc.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Computer atau Komputer.'),
(2, 'Bulu Tangkis', 'bultang.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Olahraga Bulutangkis.'),
(3, 'Language Club', 'language_club.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Language atau Bahasa.'),
(4, 'Lembaga Dakwah Kampus', 'ldk.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Kegiatan Agama Islam.'),
(5, 'Paraswara', 'paraswara.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan kegiatan seperti Paduan Suara.'),
(6, 'Seni Tari', 'seni-tari.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Tari atau Kegiatan seperti Menari.'),
(7, 'Bina Insani Pecinta Alam', 'binapala.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Alam.'),
(8, 'Futsal', 'futsal-l.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Olahraga Futsal.'),
(9, 'Accounting Club', 'accounting.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Accounting atau Akuntansi.'),
(10, 'Personal Development', 'pd.jpg', 'UKM ini bergerak di bidang yang berkaitan dengan Pengembangan diri seperti Soft Skill.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `deskripsi`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'admin@admin.com', 'default.jpg', 'Bigger, Better, Higher', '$2y$10$63TPiTe7OrU79KsiMz6sh.rQI4E1YeGGElEfCoN13HpycnKWbUdJa', 1, 1, 1593866389);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 1, 3),
(8, 1, 6),
(9, 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_anggota`
--

CREATE TABLE `user_anggota` (
  `id` int(11) NOT NULL,
  `id_log` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `divisi` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Blog'),
(7, 'Absensi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(0, 1, 'Data Anggota', 'admin/anggota', 'fas fa-fw fa-list', 1),
(1, 1, 'Data Pendaftar', 'admin', 'fas fa-fw fa-list', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 6, 'My Blog', 'admin/myblog', 'fab fa-fw fa-slack', 1),
(9, 6, 'Postingan', 'admin/post', 'fas fa-fw fa-newspaper', 1),
(10, 6, 'Buat Postingan', 'admin/addpost', 'fas fa-fw fa-plus-square', 1),
(11, 6, 'Buat Kategori', 'admin/addkategori', 'fas fa-fw fa-stream', 1),
(12, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(18, 7, 'Absen', 'user/absen', 'fas fa-fw fa-edit', 1),
(19, 7, 'Rekap Absensi', 'user/rekap', 'fas fa-fw fa-chart-pie\"', 1),
(20, 1, 'Pendaftaran', 'admin/pendaftaran', 'fas fa-fw fa-file-alt', 1),
(21, 1, 'Home Profile', 'admin/profile', 'fas fa-fw fa-hotel', 1),
(22, 1, 'Contact Us', 'admin/message', 'fas fa-fw fa-comment-alt', 1),
(24, 1, 'Kementerian & UKM', 'admin/kandu', 'fas fa-fw fa-object-group', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(5, 'hacker200502@gmail.com', 'tvuKndx2GmggBBAqwI64Uiwi/wVdlo01MM6Ix9wCF/U=', 1594967444);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen_ekskul`
--
ALTER TABLE `absen_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog_kategori`
--
ALTER TABLE `blog_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog_komentar`
--
ALTER TABLE `blog_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bph`
--
ALTER TABLE `bph`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kementerian`
--
ALTER TABLE `kementerian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prof_org`
--
ALTER TABLE `prof_org`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ukm`
--
ALTER TABLE `ukm`
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
-- Indeks untuk tabel `user_anggota`
--
ALTER TABLE `user_anggota`
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
-- AUTO_INCREMENT untuk tabel `absen_ekskul`
--
ALTER TABLE `absen_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `blog_kategori`
--
ALTER TABLE `blog_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `blog_komentar`
--
ALTER TABLE `blog_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bph`
--
ALTER TABLE `bph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `kementerian`
--
ALTER TABLE `kementerian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prof_org`
--
ALTER TABLE `prof_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_anggota`
--
ALTER TABLE `user_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
