-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 02:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_intermedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_siswa`
--

CREATE TABLE `absensi_siswa` (
  `id_absen` int(5) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_siswa`
--

INSERT INTO `absensi_siswa` (`id_absen`, `nisn`, `nama_siswa`, `tanggal`, `kegiatan`, `status`) VALUES
(1, '9965265887', 'Nico Chrisandy', '2018-02-21 05:31:48', 'blablabla', ''),
(2, '9965265887', 'Nico Chrisandy', '2018-02-21 17:22:08', 'Membuat tabel baru pada database', 'Terdaftar'),
(3, '9965265887', 'Nico Chrisandy', '2018-02-23 18:23:34', 'Memperbarui tampilan layout di sisi user', 'Belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('bara@gmail.com', '1234'),
('\0', 'nico96'),
('chrisandy@gmail.com', 'nico96');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(10) NOT NULL,
  `nama_bulan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_pkl`
--

CREATE TABLE `data_siswa_pkl` (
  `id_registrasi` int(5) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` text NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `program_keahlian` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `social_media` varchar(40) NOT NULL,
  `awal_magang` varchar(20) NOT NULL,
  `selesai_bulan` varchar(20) NOT NULL,
  `sakit_dialami` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `no_hp_ortu` varchar(15) NOT NULL,
  `nama_pembimbing_sekolah` varchar(30) NOT NULL,
  `no_hp_pembimbing` varchar(12) NOT NULL,
  `materi_disekolah` varchar(50) NOT NULL,
  `kemampuan` varchar(50) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `setelah_lulus` varchar(10) NOT NULL,
  `memiliki_laptop` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa_pkl`
--

INSERT INTO `data_siswa_pkl` (`id_registrasi`, `nisn`, `nama_siswa`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `no_hp`, `agama`, `alamat`, `nama_sekolah`, `alamat_sekolah`, `program_keahlian`, `email`, `social_media`, `awal_magang`, `selesai_bulan`, `sakit_dialami`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_hp_ortu`, `nama_pembimbing_sekolah`, `no_hp_pembimbing`, `materi_disekolah`, `kemampuan`, `hobi`, `setelah_lulus`, `memiliki_laptop`, `status`, `username`, `password`) VALUES
(24, '9965265890', 'Aji', 'Karangsong', '2000-05-10', 'Laki-laki', '089745612323', 'Islam', 'Karangsong', 'AMIK', 'Indramayu', 'Mobile', 'ajikpn2@gmail.com', 'Santhosho 2', 'Maret', 'Juli', 'Ambien', 'Alif', 'Muna', 'Buruh', 'Pedagang', '087234567098', 'Ahmad', '087659235123', 'Mobile Programming', 'Mobile', 'Ngupil', 'Bekerja', 'Ya', 'Selesai Magang', '9965265890', 'bpMj5'),
(21, '9965265880', 'Safitri', 'Indramayu', '1997-04-01', 'Perempuan', '087828653123', 'Islam', 'Indramayu', 'POLINDRA', 'Indramayu', 'IT', 'safitri@gmail.com', 'Di', 'Juli', 'November', 'Tidak ada', 'coba', 'dikit', 'Wiraswasta', 'IRT', '085224663251', 'Miin', '085664712345', 'Programming desktop', 'VB', 'Pecinta Alam', 'Kuliah', 'Ya', 'Selesai Magang', '9965265880', '239Ct'),
(8, '9965265886', 'Nadia S', 'Haurgeulis', '1999-09-30', 'Perempuan', '087828653123', 'Islam', 'Anjatan, Indramayu', 'SMANJA', 'Kopyah Anjatan', 'IT', 'chrisandy@gmail.com', 'cobauhuy', 'Februari', 'Juni', 'Tidak ada', 'aris', 'iis', 'Wiraswasta', 'IRT', '085224663251', 'Ahmad', '089667812762', 'Programming desktop', 'VB', 'Olahraga', 'Kuliah', 'Ya', 'Selesai Magang', '9965265886', 'SXyAM'),
(22, '9965265881', 'Aghi Setiawan', 'Tempel', '2007-08-01', 'Laki-laki', '089876345121', 'Islam', 'Tempel Kulon', 'SMK 2 INDRAMAYU', 'Pabean Udik', 'Multimedia', 'setia1.aghi@gmail.com', 'Aghi Setiawan', 'Januari', 'Maret', 'Maag', 'Wawan', 'Dila', 'PNS', 'Ibu RT', '089654789123', 'Hendro', '087234567098', 'Desain', 'Desain', 'Sepak Bola', 'Kuliah', 'Ya', 'Selesai Magang', '9965265881', '97dgP'),
(23, '9965265889', 'Riswanti', 'Indramayu', '1997-03-12', 'Perempuan', '081234567890', 'Islam', 'Amis', 'POLINDRA', 'Lohbener', 'Teknik Informatika', 'riswanti3@gmail.com', 'Riswanti', 'Januari', 'April', 'Pusing', 'Aa', 'Wati', 'PNS', 'Ibu RT', '087123456098', 'Lathiif', '087645789123', 'Web Programming', 'Web Programming', 'Karate', 'Bekerja', 'Ya', 'Selesai Magang', '9965265889', 'gyqAR'),
(19, '9965265887', 'Nico Chrisandy', 'Indramayu', '1996-09-23', 'Laki-laki', '082315448523', 'Kristen', 'Anjatan, Indramayu', 'POLINDRA', 'Lohbener', 'IT', 'chrisandy@gmail.com', 'nicochrisandy', 'Agustus', 'Desember', 'Tidak ada', 'Budi', 'Christin', 'Wiraswasta', 'IRT', '085224663251', 'Miin', '085664712345', 'Web Programming', 'Membuat website menggunakan framework', 'Olahraga', 'Kuliah', 'Ya', 'Selesai Magang', '9965265887', 'nico96'),
(20, '9965265888', 'Uus', 'Indramayu', '1997-10-19', 'Perempuan', '087828653123', 'Islam', 'Desa Amis ', 'POLINDRA', 'Lohbener', 'IT', 'bara@gmail.com', 'uus riswanti', 'Juni', 'Oktober', 'Tidak ada', 'aris', 'iis', 'Wiraswasta', 'IRT', '085224663251', 'Ahmad', '089667812762', 'Web Programming', 'Web Programming', 'Pecinta Alam', 'Kuliah', 'Ya', 'Selesai Magang', '9965265888', 'Pc4j9'),
(25, '9965265891', 'Tio', 'Indramayu', '1999-03-09', 'Laki-laki', '081234987456', 'Islami', 'Indramayu', 'SAYU', 'Indramayu', 'Mobile', 'tioaza@gmail.com', 'Tiooooo', 'Februari', 'Maret', 'Pilek', 'Ayana', 'Minaya', 'Polisi', 'PNS', '0879658765', 'Aji', '08765439876', 'Mobile Programming', 'Mobile', 'Ngupil', 'Kuliah', 'Ya', 'Aktif Magang', '9965265891', '4B722'),
(26, '9965265892', 'A. Rohmanuddin', 'Indramayu', '1998-09-06', 'Laki-laki', '08765430987', 'Islam', 'Jatisawit', 'SMK 1 LOSARANG', 'Losarang', 'Jaringan', 'r.ahmad@gmail.com', 'Ahmad', 'Mei', 'Agustus', 'Pusing', 'Abdul', 'Mila', 'PNS', 'PNS', '089123098734', 'Aji', '0891234789', 'Jaringan Komputer', 'Jaringan', 'Sepak Bola', 'Kuliah', 'Ya', 'Selesai Magang', '9965265892', 'gMw7r'),
(27, '9965265893', 'Liha Maratus', 'Bangkaloa', '1996-12-26', 'Perempuan', '083824567123', 'Islam', 'Bangkaloa, Jatibarang', 'SAYU', 'Indramayu', 'Mobile', 'lihacauntik@gmail.com', 'Liha Aza', 'Februari', 'Juni', 'Pilek', 'Fulan', 'Tirsem', 'PNS', 'Ibu RT', '08976540987', 'Aji', '08976548901', 'Mobile Programming', 'Mobile', 'Shopping', 'Kuliah', 'Ya', 'Terdaftar', '9965265893', 'ZCnpa'),
(28, '9965265894', 'Dayati', 'Indramayu', '1999-10-09', 'Perempuan', '08912308023', 'Islam', 'Sukaurip', 'GATSU', 'Indramayu', 'Multimedia', 'dayatioke@gmail.com', 'Dayati Havri', 'Januari', 'April', 'Maag', 'Walan', 'Bulan', 'Pedagang', 'Ibu RT', '089765098123', 'Aji', '08976452334', 'Desain', 'Desain', 'Makan', 'Kuliah', 'Ya', 'Terdaftar', '9965265894', 'rgh1Z'),
(29, '9965265895', 'Faozyah Musryani', 'Anjatan', '1997-06-14', 'Perempuan', '081234789345', 'Islam', 'Anjatan, Indramayu', 'SMANJA', 'Anjatan', 'Mobile', 'r.faozyah@gmail.com', 'Faozyah M', 'Januari', 'April', 'Pusing', 'Ali', 'Fatimah', 'PNS', 'PNS', '081234987123', 'Abdul', '087234098123', 'Mobile Programming', 'Mobile', 'Main', 'Kuliah', 'Ya', 'Terdaftar', '9965265895', 'R3mFt'),
(30, '9965265896', 'Riaka', 'Sindang', '1997-12-12', 'Perempuan', '082345123987', 'Islam', 'Sindang', 'SAYU', 'Indramayu', 'Web', 'riaka@gmail.com', 'Riaka', 'Januari', 'Februari', 'Pilek', 'Qamar', 'Isti', 'Pedagang', 'Penjahit', '08712345098', 'Abi', '089712345987', 'Web Programming', 'Web Programming', 'Baca', 'Kuliah', 'Ya', 'Terdaftar', '9965265896', 'xQBAa'),
(31, '9965265897', 'Mubarok Uye', 'Gabus Wetan', '1995-03-25', 'Laki-laki', '083824876543', 'Islam', 'Gabus Wetan', 'SMK 1 LOSARANG', 'Losarang', 'Mobile', 'uye678@gmail.com', 'Mubarok Uyeeee', 'Januari', 'Februari', 'Mencret', 'Aan', 'Warsem', 'Buruh', 'Pedagang', '089654789123', 'Abdul', '08976452334', 'Mobile Programming', 'Mobile', 'foto alay', 'Kuliah', 'Ya', 'Terdaftar', '9965265897', 'KS9BD'),
(32, '9965265898', 'Jeha Nurjana', 'Jatisawit', '1996-09-12', 'Laki-laki', '082315448503', 'Islam', 'Jatisawit', 'GATSU', 'Indramayu', 'Web', 'jehalay123@gmail.com', 'Jeha Nurjana Alay pake Banget', 'Januari', 'Maret', 'Mencret', 'Ahmad', 'Cila', 'PNS', 'IRT', '089123098734', 'Abi', '089712345987', 'Web Programming', 'Web Programming', 'Ngupil', 'Kuliah', 'Ya', 'Diterima', '9965265898', 'f6Gq1'),
(33, '995524617889', 'jajal', 'ningendibae', '1994-08-12', 'Laki-laki', '082315448530', 'Islam', 'Anjatan, Indramayu', 'SMANJA', 'Kopyah Anjatan', 'Multimedia', 'jajal@gmail.com', 'Riswanti', 'Februari', 'Juli', 'Tidak ada', 'Budi', 'Bulan', 'PNS', 'IRT', '085224663251', 'Ahmad', '089667812762', 'Desain', 'Mobile', 'Olahraga', 'Kuliah', 'Ya', 'Selesai Magang', '995524617889', 'Qx6wq'),
(34, '123456789', 'khusnulk', 'bandung', '2018-12-14', 'Perempuan', '675435668908', 'islam', 'cibiru', 'man 2', 'cibiru', 'maskan mie', 'kkhitimah@gmail.com', '-', 'Februari', 'Maret', 'diare', 'sukiman', 'sukijan', 'tani', 'bu rt', '875743604398', 'agus', '089999999999', 'web', 'android', 'makan', 'Kuliah', 'Ya', 'Selesai Magang', '123456789', 'anjatan1'),
(35, '1234567', 'dijah', 'bandung', '2013-10-28', 'Perempuan', '7549379823542', 'islam', 'cibiru', 'man 2', 'cibiru', 'maskan mie', 'dijah@gmail.com', '-', 'Maret', 'Juni', 'diare', 'sukiman', 'sukijan', 'tani', 'bu rt', '875743604398', 'agus', '089999999999', 'web', 'android', 'makan', 'Kuliah', 'Ya', 'Terdaftar', '1234567', 'TahET');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_gambar` int(3) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_gambar`, `foto`, `keterangan`) VALUES
(5, '55img.jpg', 'fghjkk'),
(6, '66img.jpg', 'ujk'),
(4, '88img.jpg', 'iuyhgf');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(3) NOT NULL,
  `konten` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_aktif_magang`
--

CREATE TABLE `siswa_aktif_magang` (
  `nisn` varchar(25) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `program_keahlian` varchar(35) NOT NULL,
  `awal_bulan_pkl` varchar(20) NOT NULL,
  `selesai_bulan_pkl` varchar(20) NOT NULL,
  `nama_pembimbing_sekolah` varchar(40) NOT NULL,
  `nama_pembimbing_perusahaan` varchar(40) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_aktif_magang`
--

INSERT INTO `siswa_aktif_magang` (`nisn`, `nama_siswa`, `asal_sekolah`, `program_keahlian`, `awal_bulan_pkl`, `selesai_bulan_pkl`, `nama_pembimbing_sekolah`, `nama_pembimbing_perusahaan`, `tahun`) VALUES
('9965265891', 'Tio', 'SAYU', '', 'Februari', 'Maret', 'Aji', 'Abdul', '2017'),
('995524617889', 'jajal', 'SMANJA', 'Multimedia', 'Februari', 'Juli', 'Ahmad', 'Abdul', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_selesai_magang`
--

CREATE TABLE `siswa_selesai_magang` (
  `nisn` varchar(12) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `program_keahlian` varchar(30) NOT NULL,
  `selesai_magang_bulan` varchar(12) NOT NULL,
  `tahun_magang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_selesai_magang`
--

INSERT INTO `siswa_selesai_magang` (`nisn`, `nama_siswa`, `program_keahlian`, `selesai_magang_bulan`, `tahun_magang`) VALUES
('2147483647', '', 'Desain Grafis', 'Januari', '2017'),
('2147483647', 'Nadia S', 'Desktop Programming', 'Januari', '2018'),
('9965265887', 'Nico Chrisandy', 'Web Developer', 'Juni', '2017'),
('9965265890', 'Aji', 'Desktop Programming', 'Maret', '2017'),
('995524617889', 'jajal', 'Multimedia', 'September', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_registrasi` int(3) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_registrasi`, `username`, `password`, `nama_lengkap`, `asal_sekolah`, `no_hp`) VALUES
(11, 'chrisandy@gmail.com', 'b9b29473f6102c1a19784e4e6156eb38', 'Nico Chrisandy', 'POLITEKNIK NEGERI INDRAMAYU', ''),
(12, 'coba@gmail.com', 'c3ec0f7b054e729c5a716c8125839829', 'coba aja', 'coba coba', 'no_hp'),
(13, 'andi@gmail.com', 'ce0e5bf55e4f71749eade7a8b95c4e46', 'andi nurfadilah', 'stempert', '089872233090'),
(14, 'uus@gmail.com', 'a6e8c26fdaeff2c0230f864ccbc610d2', 'uus riswanti', 'POLINDRA', '083824567890'),
(15, 'safitri@gmail.com', '69506b30694abfc7fe7a43b197188180', 'safitri', 'polindra', '085234167815'),
(16, 'diah@gmail.com', 'b1980b34d5180cf2051d0fe400cb86e0', 'diah', 'POLINDRA', '0897653142'),
(17, 'diaysafitri@gmail.com', '3765ccd4cc4bb220350dcf0835e643f2', 'diah', 'polindra', '089234876123'),
(18, 'jajal@gmail.com', '0ce39f78d16cab3888366d5f4f5485eb', 'jajal', 'maning', '08988190121'),
(19, 'chrisandy', 'b9b29473f6102c1a19784e4e6156eb38', 'nico chrisandy', 'POLINDRA', '082315448523'),
(20, 'jajal', 'e38bc0c01153c01f7c503191d3a7722f', 'jajalbae', 'smanj', '083913102731');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `data_siswa_pkl`
--
ALTER TABLE `data_siswa_pkl`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_siswa_pkl`
--
ALTER TABLE `data_siswa_pkl`
  MODIFY `id_registrasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_gambar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_registrasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
