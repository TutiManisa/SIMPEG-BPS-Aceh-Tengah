-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2018 pada 05.19
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsiku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawas`
--

CREATE TABLE `pengawas` (
  `id` int(11) NOT NULL,
  `p1` varchar(30) NOT NULL DEFAULT '',
  `p2` varchar(30) NOT NULL,
  `p3` varchar(30) NOT NULL,
  `p4` varchar(40) NOT NULL,
  `p5` varchar(30) NOT NULL,
  `p6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengawas`
--

INSERT INTO `pengawas` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
(1, 'aku', 'kamu', 'aku', 'aku', 'tes', 'aku'),
(2, 'aku', 'kamu', 'aku', 'tes', 'xx', 'aku'),
(3, 'aku', 'aku', 'tes', 'kamu', 'kamu', 'aku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nm_guru` varchar(60) NOT NULL,
  `tp` varchar(60) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `materi` text NOT NULL,
  `absen` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `nm_guru`, `tp`, `mapel`, `tgl`, `kelas`, `materi`, `absen`, `ket`) VALUES
(3, 'Mahmud aziz', '2014/2015', 'B.INGRRIS', '2018-01-02', 'TKJ/XII', 'Pencernaa', 'nabilla,dedi,irfan    ', 'cukup'),
(4, 'Abdul yamin', '2013/2014', 'ALQURAN HADIST', '2018-01-02', 'TKJ/X', 'Pernapasan', 'dedi matiso, nabilla ', 'tuntas '),
(5, 'Mahmud aziz', '2015/2016', 'BAHASA ARAB', '2018-01-02', 'TKJ/XI', 'Maktabun', 'cukup', 'Batas'),
(6, 'Muahammad Abduh', '2013/2014', 'ALQURAN HADIST', '2018-01-02', 'TKJ/X', 'Pencernaa ', 'cukup  ', 'Pas  '),
(7, 'Poppy yendriani', '2013/2014', 'ALQURAN HADIST', '2018-01-02', 'TKJ/X', 'Pencernaa  ', 'cukup   ', 'Pas   '),
(8, 'Ade Irawan, ST', '2014/2015', 'PRAKARYA', '2018-02-13', 'TKJ/XI', '----', '---', '---'),
(9, 'Devi erliza', '2013/2014', 'B.INGRRIS', '2018-02-23', 'TKJ/X', 'jn', 'cukup', 'njnkn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diklat`
--

CREATE TABLE `tb_diklat` (
  `id_diklat` int(6) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_diklat` varchar(20) NOT NULL,
  `nama_diklat` varchar(50) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `tahun` int(10) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_diklat`
--

INSERT INTO `tb_diklat` (`id_diklat`, `nip`, `jenis_diklat`, `nama_diklat`, `penyelenggara`, `tahun`, `tingkat`, `waktu`) VALUES
(3, '00109009090', 'pernah', '---', 'PEMERINTAH', 2017, 'SMK', '3 Bulan'),
(4, '004098909887667', 'Startup', 'Tes', 'Pemerintah', 2017, 'Nasional', '4 bulan'),
(6, '090980099988', 'Sertifikasi Guru', 'Pelatihan Komputer', 'PEMKOT Bukittinggi', 2016, 'Nasional', '3 jam'),
(7, '196412102008012002', '---', '----', '----', 1989, '----', '-----'),
(8, '195907261983031006', '----', '-----', '----', 1989, '---', '-----'),
(9, '195904121988032001', '---', '----', '----', 1989, '---', '----'),
(10, '197804122003121005', '---', '---', '----', 1989, '----', '----'),
(11, '196609152008012002', '', '', '', 1989, '', ''),
(12, '99999000012344', 'SERTIFIKASI', 'JUNIOR WEBROGRAMMIN', 'LSP', 2014, 'SMK', '3 HARI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `tmp_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` varchar(50) DEFAULT NULL,
  `agama` varchar(30) NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `mapel` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nama`, `jk`, `tmp_lhr`, `tgl_lhr`, `agama`, `jabatan`, `mapel`, `alamat`, `telepon`, `gambar`) VALUES
('00098866756', 'Devi erliza ', 'Laki-laki', 'Sibak', '2017-12-31', 'Islam', 'Pustakawan', 'SEJARAH', 'Padang', '098999xxxx', 'atomix_user31.png'),
('009', 'Ade Irawan, ST', 'Laki-laki', 'Sibak', '2017-12-04', 'Islam', 'Guru Kelas', 'KKPI', 'Jalan melati', '08234445', '9.png'),
('09000878', 'Mahmud aziz  ', 'Laki-laki', 'Desa tinggal', '2017-12-30', 'Islam', 'Guru Mata Pelajaran', 'KKPI', 'desa tinggal', '08221455', 'atomix_user31.png'),
('09009888655', 'Poppy yendriani ', 'Perempuan', 'Balingka', '2017-12-31', 'Islam', 'Guru Mata Pelajaran', 'MISOBGUITEXT', 'Jambu Air', '08223455', 'tafsir.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` varchar(6) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('J001', 'Guru Kelas'),
('J002', 'Guru Mata Pelajaran'),
('J004', 'Guru Inklusi'),
('J005', 'Tenaga Administrasi '),
('J006', 'Guru Pendamping'),
('J007', 'Guru Magang'),
('J008', 'Guru TIK'),
('J009', 'Kepala Sekolah'),
('J010', 'Laboran'),
('J011', 'Pustakawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `id_jenjang` varchar(6) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
('S001', 'SD'),
('S002', 'SMP'),
('S003', 'SMA'),
('S004', 'D1'),
('S005', 'D2'),
('S006', 'D3'),
('S007', 'S1'),
('S008', 'S2'),
('S009', 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lbg_pengangkat`
--

CREATE TABLE `tb_lbg_pengangkat` (
  `id_pengangkat` varchar(6) NOT NULL,
  `nama_lembaga` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lbg_pengangkat`
--

INSERT INTO `tb_lbg_pengangkat` (`id_pengangkat`, `nama_lembaga`) VALUES
('L001', 'Pemerintah Pusat'),
('L002', 'Pemerintah Provinsi'),
('L003', 'Pemerintah Kota'),
('L004', 'Pemerintah Kabupaten'),
('L005', 'Ketua Yayasan'),
('L006', 'Kepala Sekolah'),
('L007', 'Komite Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kkm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama`, `kkm`) VALUES
('B.ING', 'B.INGRRIS', '75'),
('BI', 'BAHASA INDONESIA', '73'),
('BIO', 'BIOLOGI', '73'),
('DG', 'DG', '75'),
('FQH', 'FIQIH', '70'),
('IPA', 'ILMU PENGETAHUAN ALAM', '70'),
('IPS', 'ILMU PENGETAHUAN SOSIAL', '70'),
('IS', 'ISOS', '75'),
('KOM', 'KOMJARDAS', '75'),
('KPI', 'KKPI', '75'),
('MIJ', 'MIJPL', '75'),
('MISOB', 'MISOBGUITEXT', '75'),
('MP', 'PPPWAN', '75'),
('MPS', 'MPSKJ', '75'),
('MTK', 'MATEMATIKA', '65'),
('PKR', 'PRAKARYA', '75'),
('SEB', 'SEBUD', '65'),
('SIMK', 'SIMKOMDIG', '75'),
('SJH', 'SEJARAH', '72');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nis` varchar(8) NOT NULL,
  `smt` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nm_siswa` varchar(60) NOT NULL,
  `nm_guru` varchar(60) NOT NULL,
  `tp` varchar(30) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `uh` double NOT NULL,
  `mid` double NOT NULL,
  `uas` double NOT NULL,
  `rata` int(11) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`nis`, `smt`, `jurusan`, `nm_siswa`, `nm_guru`, `tp`, `mapel`, `kelas`, `uh`, `mid`, `uas`, `rata`, `ket`) VALUES
('S001', 'Genap', 'TKJ', 'mARTA Iwan zuanda', 'Devi erliza', '2013/2014', 'ALQURAN HADIST', 'TKJ/X', 97, 49, 62, 81, 'TUNTAS'),
('S002', 'Genap', 'TKJ', 'Dedi Matison', 'Mahmud aziz', '2016/2017', 'BIOLOGI', 'TKJ/XI', 47, 20, 30, 32, 'TIDAK TUNTAS'),
('S003', 'Genap', 'TKJ', 'deni khairani', 'Mahmud aziz', '2017/2018', 'B.INGRRIS', 'TKJ/X', 70, 80, 90, 80, 'TUNTAS'),
('S004', 'Ganjil', 'TKJ', 'Afriyanti', 'Abdul yamin', '2016/2017', 'TAFSIR', 'TKJ/XII', 60, 70, 80, 70, 'TUNTAS'),
('S005', 'Ganjil', 'TKJ', 'yamin', 'Devi erliza', '2013/2014', 'ALQURAN HADIST', 'TKJ/X', 86, 95, 94, 92, 'TUNTAS'),
('S007', 'Ganjil', 'TKJ', 'Dedi', 'Devi erliza', '2013/2014', 'ALQURAN HADIST', 'TKJ/X', 80, 90, 88, 86, 'TUNTAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `id_pangkat` varchar(6) NOT NULL,
  `nama_golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`id_pangkat`, `nama_golongan`) VALUES
('P001', 'I/a'),
('P002', 'I/b'),
('P004', 'I/d'),
('P005', 'II/a'),
('P006', 'II/b'),
('P007', 'II/c'),
('P008', 'II/d'),
('P009', 'III/a'),
('P010', 'III/b'),
('P011', 'III/c'),
('P012', 'III/d'),
('P013', 'IV/a'),
('P014', 'IV/b'),
('P015', 'IV/c'),
('P016', 'IV/d'),
('P017', 'IV/e'),
('P018', 'Lainya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `no_urut` int(6) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_pangkat` varchar(30) NOT NULL,
  `id_jabatan` varchar(30) NOT NULL,
  `id_status` varchar(30) NOT NULL,
  `id_pengangkat` varchar(30) NOT NULL,
  `id_sumbergaji` varchar(30) NOT NULL,
  `nama_pegawai` varchar(60) NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_kawin` varchar(30) NOT NULL,
  `ibu` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `hp` int(12) NOT NULL,
  `no_sk` int(18) NOT NULL,
  `tmt_pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`no_urut`, `nip`, `id_pangkat`, `id_jabatan`, `id_status`, `id_pengangkat`, `id_sumbergaji`, `nama_pegawai`, `tempat`, `tanggal_lahir`, `jk`, `agama`, `status_kawin`, `ibu`, `alamat`, `email`, `hp`, `no_sk`, `tmt_pangkat`) VALUES
(3, '00109009090', 'III/b', 'Guru Mata Pelajaran', 'Tenaga Honor Sekolah', 'Ketua Yayasan', 'Yayasan', 'Nolla Novita, S.Pd', 'Talang Arah', '2017-12-09', 'Laki-laki', 'Islam', '', 'ASnawati', 'Desa Sibak', 'ocikyamin93@gmail.com', 8223, 909002, '2017-12-26'),
(4, '004098909887667', 'II/c', 'Guru Mata Pelajaran', 'PNS', 'Pemerintah Provinsi', 'APBD Provinsi', 'Muahammad Fadhli Suarlis', 'Bukittinggi', '2017-12-10', 'Laki-laki', 'Islam', '', 'Suarni', 'Guguak Tinggi', 'fadli@gmail.com', 822, 90988, '2017-12-28'),
(6, '090980099988', 'I/a', 'Guru Mata Pelajaran', 'PNS', 'Pemerintah Pusat', 'APBN', 'Poppy Yendriani', 'Jakarta', '2018-01-27', 'Perempuan', 'Islam', 'Belum Menikah', 'Isdawati', 'Balingka, Agam', 'poppy@gmail.com', 2147483647, 90098998, '2018-01-18'),
(7, '196412102008012002', 'II/a', 'Guru Mata Pelajaran', 'PNS DEPAG', 'Pemerintah Provinsi', 'APBD Provinsi', 'Dra. Dahniar', 'Pesisir', '1964-12-10', 'Perempuan', 'Islam', 'Menikah', 'Asnawati', 'Guguak Randah', 'dahniar890@gmai.com', 81300, 0, '2015-08-04'),
(8, '195907261983031006', 'II/a', 'Guru Mata Pelajaran', 'PNS', 'Pemerintah Provinsi', 'APBD Provinsi', 'Drs. Refdertia Helmi', 'Koto Lamo', '1959-07-26', 'Laki-laki', 'Islam', 'Menikah', 'Yusnidariani', 'Koto salayan', 'helmi@gmail.com', 2147483647, 0, '2010-10-10'),
(9, '195904121988032001', 'II/a', 'Guru Mata Pelajaran', 'PNS', 'Pemerintah Kota', 'APBD/KAB/KOTA', 'Yurnita Linda, BA', 'Padang Panjang', '1959-04-12', 'Perempuan', 'Islam', 'Menikah', 'Yurnalis ALM', '---', 'yurnitalinda51@gmail.com', 2147483647, 0, '2008-11-10'),
(10, '197804122003121005', 'III/c', 'Guru Mata Pelajaran', 'PNS', 'Pemerintah Pusat', 'APBN', 'Suheri, S.Pd', 'Sungai Pinang', '1978-04-12', 'Laki-laki', 'Islam', 'Menikah', 'Sunarni', 'Sungai Pinang', 'suheri@gmail.com', 2147483647, 0, '2008-12-28'),
(11, '196609152008012002', 'II/a', 'Guru Mata Pelajaran', ' ', '-- Pilih Lembaga --', '-- Pilih Sumber --', 'Erdaneli, S.Pd', 'Padang Panjang', '1966-09-15', 'Perempuan', 'Islam', 'Menikah', 'Rosalina', 'Padang panjang', 'nelli_erda21@gmail.com', 2147483647, 0, '2010-06-16'),
(12, '99999000012344', 'Lainya', 'Guru Mata Pelajaran', 'Guru Honor Sekolah', 'Pemerintah Provinsi', 'Yayasan', 'Abdul yamin', 'Bengkulu', '1994-01-13', 'Laki-laki', 'Islam', 'Belum Menikah', 'Hamiatul Asmawati', 'sibak', 'emaial@gmail.com', 82214555, 0, '2017-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pend` int(6) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `satuan_pendidikan` varchar(32) NOT NULL,
  `tahun_masuk` varchar(20) NOT NULL,
  `tahun_lulus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pend`, `nip`, `jenjang`, `satuan_pendidikan`, `tahun_masuk`, `tahun_lulus`) VALUES
(3, '00109009090', 'S1', 'PTAIN', '2013', '2017'),
(4, '004098909887667', 'D2', 'UNIVERSITAS', '1982', '1985'),
(6, '090980099988', 'SMA', 'SMA', '1991', '1998'),
(7, '196412102008012002', 'SMA', 'SMA', '1989', '1991'),
(8, '195907261983031006', 'SMA', '----', '1989', '1991'),
(9, '195904121988032001', 'SMA', '---', '1989', '1991'),
(10, '197804122003121005', 'S1', 'PTN', '1996', '1998'),
(11, '196609152008012002', '-- Pilih J', '', '1989', '1989'),
(12, '99999000012344', 'S1', 'ptn', '2013', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kab` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `nokk` varchar(30) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `namaibu` varchar(30) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nik`, `nama`, `kelas`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `provinsi`, `kab`, `kec`, `desa`, `nokk`, `namaayah`, `namaibu`, `gambar`) VALUES
('0001140745', '1306106704000001', 'Welni Wenita', '9.2', 'P', 'Lurah Dalam', '27/04/2000', 'Pasia Laweh', 'Sumatera Barat', 'Agam', 'Palupuh', 'Pasia Laweh', '1306102402081260', 'Amrizal', 'Symsuarni', ''),
('0003169670', '1312052312000004', 'Faisal Fernandes', '9.3', 'L', 'BKT.Tinggi', '23/12/2000', 'Rambah', 'Sumatera Barat', 'Pasaman Barat', 'Kinali', 'Kinali', '1312051308090005', 'Kasiman', 'Desli Murni', ''),
('0004379156', '1306104902000001', 'Melia Revita', '9.3', 'P', 'Palimbatan', '09/02/2000', 'Belok Palimbatan Jorong Age Palibatan', 'Sumatera Barat', 'Agam', 'Palupuh', 'Pasia Laweh', '1306102402080779', 'Edrin', 'Erna Wati', ''),
('0004860644', '1306096306000002', 'Dewi Permatasari', '9.3', 'P', 'Pekan Kamis', '23/06/2000', 'Jorong Aur', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402081877', 'Erizon', 'Lisnawati', ''),
('0006619336', '1306094211000001', 'Nadia Suci Indah Sari', '9.2', 'P', 'Batam', '02/11/2000', 'Anduring Minggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083480', 'Ahmat Yanti', 'Reni Yanti', ''),
('0006634698', '1306094901000001', 'Putri', '9.1', 'P', 'Bukittinggi', '19/01/2000', 'Mata Air Jrg Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092907090005', 'Darwis', 'Nurlaili', ''),
('0006634714', '1306090911000001', 'Rolan Raulian', '9.1', 'L', 'Koto Laweh', '09/11/2000', 'Mata Air Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083097', 'Syarifuddin', 'Wati Kristian', ''),
('0006634733', '1306094210000001', 'Lira Fiani', '9.3', 'P', 'Gadut', '03/10/2000', 'Jorong PGRM', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Gaduik', '1306090701090018', 'Amril', 'Zulhelmi', ''),
('0006634748', '', 'Chelvin Yansatya ,SU', '9.2', 'L', 'Batam', '18/02/2000', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '', 'Adhel Satrya', 'Handry Riyanthi', ''),
('0006634762', '1306091708000002', 'Dicky Agustian', '9.3', 'L', 'Koto Laweh', '17/08/2000', 'Jorog Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083188', 'Nurdiana', 'Nurlisma Yanti', ''),
('0006634765', '1306091910000001', 'Muhammad Nakzifu Bilhaq', '9.3', 'L', 'Situmbuk', '19/10/2000', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402084451', 'Murni', 'Safniati', ''),
('0006634768', '1306090312000003', 'Rahma Danil', '9.3', 'L', 'Koto Laweh', '13/12/2000', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084043', 'Yulisar', 'Yusmanidar', ''),
('0008761296', '1306091504000001', 'Ahmad Sofyan', '9.2', 'L', 'Bukittinggi', '15/04/2000', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083998', 'Nitra', 'Maryati', ''),
('0010500105', '1302040201010002', 'Ahmad Fauzi', '9.1', 'L', 'Air Dingin', '02/01/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302042404120083', 'Nurhaman', 'Wasni', ''),
('0010500150', '1302046309010001', 'Hardina Eka Putri', '9.2', 'P', 'Air Dingin', '23/09/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040606082084', 'Suhardi', 'Fitrianis', ''),
('0010500151', '1302044107030006', 'Nike Juseprita', '9.2', 'P', 'Air Dingin', '23/09/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Agam', 'Lembah Gumanti', 'Aie Dingin', '1302042404120020', 'Tafrizal', 'Surya Wati', ''),
('0010613783', '1306154710010001', 'Putri Nur Aini', '9.1', 'P', 'Aia Tabik', '07/10/2001', 'Kampung Tapi Jorong Aia Tabik', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083342', 'Mohd Sukri', 'Elya Putri', ''),
('0011782174', '1312052210010002', 'Syaipul Ihkwan', '8.2', 'L', 'Rambah', '10/10/2001', 'Durian Batu', 'Sumatera Barat', 'Pasaman Barat', 'Kinali', 'Kinali', '1312050405100016', 'Firmansyah', 'Eliya Fitri', ''),
('0012259830', '', 'Alan Perdana Putra Hidayat', '8.2', 'L', 'Batam', '25/05/2001', 'Anduring Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '2171103001080862', 'Chairul Hidayat', 'Lulu Wita Anggraini', ''),
('0012326776', '1306092811010001', 'Ridho Rizki Ramadhan', '9.1', 'L', 'Bukittinggi', '28/11/2001', 'Ranggo Malai Jorong PGRM', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Gaduik', '1306092402084945', 'Elfiski', 'Sesnareti(alm)', ''),
('0012398879', '1306091701010002', 'Rivo Armando', '8.2', 'L', 'Koto Laweh', '17/01/2001', 'Jamiak Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080439', 'Yuharmen', 'Asni ', ''),
('0012412152', '1306090502020002', 'Muhammad Fredi', '9.3', 'L', 'Koto Laweh', '05/02/2001', 'Jamiak Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083191', 'M.Jaa\'far', 'Yusniar', ''),
('0012412154', '1306092002010002', 'Ifzul Fikri', '8.3', 'L', 'Pincuran', '20/02/2001', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083235', 'Adnan', 'Refdi', ''),
('0012412156', '1306090803010001', 'Irwansyah', '8.1', 'L', 'Pekan Kamis', '18/03/2001', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080454', 'Zulnafri', 'Delinar', ''),
('0012412390', '1306096507010001', 'Trisa Rasyada', '9.3', 'P', 'Gadut', '25/07/2001', 'Bukit Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083009', 'Mukhlis', 'Elpita', ''),
('0012412783', '1306096609010003', 'Isnaini Aulia', '9.1', 'P', 'Pekan Kamis', '26/09/2001', 'Jorong Aur', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '', 'Erizon', 'Lisnawati', ''),
('0012541555', '1306161708010003', 'Muhammad Teguh Aryagustama', '8.2', 'L', 'Bandar Lampung', '17/08/2001', 'Kayu IV Jorong Pakan Sinayan', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150712110001', 'Asril Amin', 'Irma Suryani', ''),
('0014038046', '1508074607010001', 'Dina Putri Yurizal', '9.2', 'P', 'Bukit tinggi', '06/07/2001', 'Rantau Tipu', 'Jambi', 'Bungo', 'Limbur Lubuk Mengkuang', 'Rantau Tipu', '1508072206110020', 'Asrizal', 'Yurnita A.M Kep', ''),
('0014311356', '13060944010100004', 'Mira Daniati', '9.2', 'P', 'Bangkinang', '04/01/2001', 'Jrg Situmbuak', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1309091406120003', 'Dasril', 'Sri Hartati', ''),
('0014784602', '1302044111010002', 'Putri Handayani', '8.2', 'P', 'koto baru', '01/11/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302042404120087', 'Parius', 'Sri Dewi', ''),
('0015493358', '1306100207010001', 'Syahrul Idris', '9.2', 'L', 'Batang Palupuh', '02/07/2001', 'Dusun Alang Lawas', 'Sumatera Barat', 'Agam', 'Palupuh', 'Koto Tantang', '1306102402080520', 'Abdul Muis', 'Yurneli', ''),
('0015935765', '1306092112010003', 'Fauzan Normansyah. S', '9.1', 'L', 'Bukittinggi', '21/12/2001', 'Mato Air Joong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084359', 'Carles', 'Yuni Eka Wanti', ''),
('0015938457', '1376022607010001', 'Muhammad Hafizi', '7.2', 'L', 'Bukittinggi', '25/07/2001', 'Puhun Tembok', 'Sumatera Barat', 'Kota Bukittinggi', 'Mandiangin Koto Selayan', 'Puhun Tembok', '1375021503086686', 'Afrizal', 'Ratna Dewi', ''),
('0016012096', '1306094411010002', 'Kasih Zukhruf Hayati', '9.3', 'P', 'Kepala Hilalang', '04/11/2001', 'Pakokan Jrg Aro Kendikir', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Gaduik', '1306092402086282', 'Andi Sikumbang', 'Nurmalis', ''),
('0016327861', '1306111406010001', 'Khairul Hamda', '7.2', 'L', 'Bukittinggi', '14/07/2001', 'Kampung Aneh Jorong Silungkang', 'Sumatera Barat', 'Agam', 'Palembayan', 'Tigo Koto Silungkang', '1306112402083123', 'Bahri Padal', 'Pirnawati', ''),
('0016445836', '1302041607010004', 'Muhammad Idris', '7.1', 'L', 'Koto Baru', '16/07/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302042104120031', 'Asriyanto', 'Jumatni', ''),
('0016831721', '1306092004010001', 'Rian Adi Candra', '7.1', 'L', 'Depok', '20/04/2001', 'Mata Air Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082921', 'Suhardiko', 'Roza Nelfianti', ''),
('0016832084', '1306094210010001', 'Zakia Oktavia', '9.1', 'P', 'Koto Laweh', '02/10/2001', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306090701090018', 'Mulziondri', 'Zulhelmi', ''),
('0016834293', '1306095111010001', 'Nurhalimah', '9.1', 'P', 'Bukittinggi', '08/01/2001', 'Sei.Dareh Jrg Pauah', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150801140003', 'Nasriadi', 'Reflinda', ''),
('0016836974', '1306096708010002', 'Arsya Gusnita', '9.1', 'P', 'Koto Laweh', '27/08/2001', 'Mata Air Jrg Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402084403', 'Asrul', 'Jusmaniar', ''),
('0016836992', '1306094708010001', 'Fauziah Rachmawati', '8.3', 'P', 'Cianjur', '07/08/2001', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083315', 'Herzon', 'Erna', ''),
('0016836996', '1306096609010005', 'Hersa Ulfiya Husna', '9.3', 'P', 'Bukittinggi', '26/09/2001', 'Jorong Situmbuk', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080428', 'Limra', 'Zuarna', ''),
('0016837085', '1306095405010004', 'Intan Wahyuni', '9.1', 'P', 'Pekan Kamis', '14/05/2001', 'Bukik Gadang Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084463', 'Zulasmi', 'Elmaziar', ''),
('0016837103', '1306091610010001', 'Azmi Hakim Bin Muhammad Adar', '9.1', 'L', 'Sonsang', '16/10/2001', 'Jorong kaluang Tapi', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402080467', 'Muhammad Adar', 'Zulbaidah', ''),
('0016864228', '1302040608010001', 'Aditiawarman', '9.1', 'L', 'Air Dingin', '06/08/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1306152402083684', 'Muspar', 'Sansidar', ''),
('0017144232', '1306096303010004', 'Ade Sri Adinda', '9.1', 'P', 'Batam', '23/03/2001', 'Surau Usang Jrg Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083664', 'Indra Agam', 'Sanimar', ''),
('0017207507', '1306153007010002', 'Farhan Ahmad', '9.2', 'L', 'Koto Laweh', '30/07/2001', 'Kayu Ampek Jorong Pakan Sinayan', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083965', 'Dede Irawan', 'Zulkhairina', ''),
('0017665970', '1306151509010003', 'Abdul Aziz', '7.1', 'L', 'Pauh', '15/09/2001', 'Jorong Pauh', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150306090006', 'Khairul Fatihin', 'Yetriyanis', ''),
('0017829001', '1306094409010002', 'Yenita Harmen', '9.3', 'P', 'Koto Tangah', '04/09/2001', 'Anduring Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto tangah', '1306091401100001', 'Harmen', 'Nisma Hayati', ''),
('0018083126', '1302042705010004', 'Ilham Yoga Pratama', '8.2', 'L', 'Air Dingin', '27/05/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302040606081665', 'Saparudin', 'Ernita', ''),
('0018127366', '1302044707010005', 'Widia Permata Sari', '9.2', 'P', 'Koto Baru', '07/07/2001', 'Jorong Koto Baru', 'Sumatera Barat', 'Agam', 'Lembah Gumanti', 'Aie Dingin', '1302040406110005', 'Zul Efendi', 'Yeni', ''),
('0018155180', '', 'Ike Nurjanah', '9.1', 'P', 'Durian', '28/08/2001', 'Jorong Pauh', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402084106', 'Zulkifli', 'Asneliati', ''),
('0018155484', '1306152811010001', 'Syahrul Huda', '8.1', 'L', 'Kamang', '28/11/2001', 'Dusun Tabik Jorong Aia Tabik', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150707100001', 'Saldin Syah', 'Endri Gusnita', ''),
('0018155506', '1306156409010001', 'Nirma Sebtia', '9.1', 'P', 'Anduring', '24/09/2001', 'Tabing Jrong Pauah', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152910090012', 'Jubasril', 'Jerneli', ''),
('0018322571', '1306092606010001', 'Joni Saputra', '9.2', 'L', 'Pk.Kamis', '10/06/2001', 'Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '', 'Janewar', 'Rani', ''),
('0018334225', '', 'Thivvana Dwi F.B', '9.3', 'P', 'Batam', '16/08/2001', 'Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '', 'Adhel Satrya', 'Handry Riyanthi', ''),
('0018879792', '1375020210010004', 'Muhammad Adibyan Altra', '9.1', 'L', 'Bukittinggi', '02/10/2001', 'Puhun Pintu Kabun', 'Sumatera Barat', 'Kota Bukittinggi', 'Mandiangin Koto Selayan', 'Puhun Pintu Kabun', '1375021503088894', 'Afrizal Aries', 'Wenny Rahmitri', ''),
('0019519606', '1302041006010004', 'Adri Saputra', '9.2', 'L', 'Air Dingin', '10/06/2001', 'Lampariak Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aia Dingin', '1302040812100003', 'Syahrul Amini', 'Ermina', ''),
('0019695132', '1305095901020001', 'Meisy Mustika Rani', '9.2', 'P', 'Bukit Tinggi', '19/01/2002', 'Durian Jantung', 'Sumatera Barat', 'Padang Pariaman', 'IV Koto Aur Malintang', 'III Koto Aur Malintang', '1305091202100016', 'Letter', 'Husnaini', ''),
('0020651891', '3175031507020003', 'Farhan Fadillah', '9.1', 'L', 'Jakarta', '15/07/2002', 'Jln.Blakang Psar Jti Negara RT 013 RW 005', 'DKI Jakarta', 'Jakarta Timur', 'Jati Negara', 'Bali Meter', '3175030601096697', 'Risman', 'Choirulnisa Fitria', ''),
('0021384839', '1306042007020001', 'Yutra Islami', '9.1', 'L', 'Aia Taganang', '20/07/2002', 'Jorong Aia Taganang', 'Sumatera Barat', 'Agam', 'Matur', 'Matur Hilia', '1306041111100001', 'Samsudin', 'Sriniati', ''),
('0022153437', '1306120902020001', 'Muhammad Hanif', '9.3', 'L', 'Bukittinggi', '09/02/2002', 'jorong Batagak', 'Sumatera Barat', 'Agam', 'Sungai Pua', 'Batagak', '1306120505080449', 'H.Abdul Wahab', 'Irsoiliyah', ''),
('0022184104', '1302040206020002', 'Doni Vernado', '8.3', 'L', 'Air Dingin', '02/06/2002', 'Jr Koto Baru ', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302042404120084', 'Jalisan', 'warnita', ''),
('0022690316', '2102031505020002', 'Zuhall Rayyan', '9.3', 'L', 'Sonsang', '15/05/2002', 'Jln. Teluk Air', 'Kepulauan Riau', 'Karimun', 'Karimun', 'Teluk Air', '2102030811070009', 'Syamsul Bahri', 'Linda', ''),
('0022710028', '1302041410020004', 'Wisanggeni Esa Pahlawan', '8.1', 'L', 'Bukittinggi', '10/11/2002', 'Ilia JorongPatangahan', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092008130002', 'Eko Purnomo', 'Betrina Fatmi', ''),
('0023067291', '1375020307020001', 'Fikrian Aulia', '8.2', 'L', 'Bukittinggi', '03/07/2002', 'Jl. Mandiangin', 'Sumatera Barat', 'Bukittinggi', 'Mandiangin Koto Salayan', 'Campago Ipuah', '1375021503081614', 'Asrizal', 'Yurnita', ''),
('0023165321', '1302041306020004', 'Muhammad Dani', '8.3', 'L', 'Aie Dingin', '13/06/2002', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302041802090005', 'Muhammad Bakri', 'Kartini', ''),
('0023195679', '1306090901020002', 'Ihsan Arif Saputra', '8.3', 'L', 'Pekan Kamis', '09/01/2002', 'Jorong Andarung Munnggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083598', 'Sismanto', 'Yusmanita', ''),
('0023195683', '1306091702020002', 'Alfan Firmansyah', '7.2', 'L', 'Pekan Kamis', '17/02/2002', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083355', 'Jalaludin', 'Nelwati', ''),
('0023195687', '1306095204020001', 'Ulfa Wahyuni Putri', '9.2', 'P', 'Sonsang', '12/04/2002', 'Jorong Anduring Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083609', 'Abdul Rodin', 'Lisna', ''),
('0023198131', '1306091302020001', 'Syarif Hidayatul Qadri', '7.2', 'L', 'Koto Laweh', '13/02/2002', 'Jorong Pauh', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150801140003', 'Nasriadi', 'Raflinda', ''),
('0023198134', '1306091805020004', 'Ali Imran', '9.2', 'L', 'Sonsang', '18/05/2002', 'Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402081478', 'Dedi Efendi', 'Asni ', ''),
('0023210248', '1306091408020001', 'M.Farhan', '8.1', 'L', 'Koto Laweh', '14/08/2002', 'Kunto Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082959', 'Erman', 'Silvia Dewi', ''),
('0023210288', '1306095201020002', 'Annisa Lufiah Safitri', '9.3', 'P', 'Dumai', '12/01/2002', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083328', 'Hermanto', 'Enitriyana', ''),
('0023210289', '1306094202020003', 'Siti Nur Anisa', '9.1', 'P', 'Pekan Kamis', '02/02/2002', 'Koto Laweh Hilir', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082030', 'Elzendri', 'Desi Handayani', ''),
('0023210290', '1306095602020002', 'Suci Rahmawati', '9.3', 'P', 'Gadut', '16/02/2002', 'Jorong Anduriang Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084466', 'Agusman', 'Rosdar', ''),
('0023210294', '1306096004020002', 'Qurata \'Aina', '8.2', 'P', 'Pekan Kamis', '20/04/2002', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084451', 'Murni', 'Syafniati', ''),
('0023210298', '1306090907020001', 'Arasy Jamil', '9.2', 'L', 'Koto Laweh', '09/07/2002', 'Jrong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083259', 'Armaili', 'Ernita', ''),
('0023210299', '1306096303020001', 'Khairunnisa', '9.1', 'L', 'Bukittinggi', '23/08/2002', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084225', 'Andrizal', 'Itrawati', ''),
('0023210300', '1306096908020003', 'Dinda Tifanie Syahril Agusti', '9.1', 'P', 'Bukittinggi', '29/08/2002', 'Jrg Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1306092402083323', 'Muhammad Syahril', 'Irawati', ''),
('0023210465', '1306091806020002', 'M.Habib Abyan', '9.3', 'L', 'Duri', '18/06/2002', 'Jorong Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092403090006', 'A.Makmun Arsyad', 'Zurni', ''),
('0023210466', '1306092306020001', 'Dio Ilham', '9.3', 'L', 'Sonsang', '23/06/2002', 'Jorong Sosang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080200', 'Yon toadi', 'Eni Hendri', ''),
('0023210467', '1702094408020001', 'Silvi Ahadeani', '8.1', 'P', 'Curup', '04/08/2002', 'jalan baru', 'Sumatera Barat', 'rejang lebong', 'curup', 'jalan baru', '1702090207130003', 'Syamsul Bahri', 'setiawati', ''),
('0023241155', '1306091604030003', 'Ferro Aprilian Andalas', '8.3', 'L', 'Koto Malintang', '16/04/2003', 'Kunto Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082795', 'Medi wendri', 'Rita Hayati', ''),
('0023386636', '1302045103020003', 'Dwi Yulianti', '8.3', 'P', 'Air Dingin', '11/03/2002', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040912090007', 'Mukhlis', 'Syafrida Yanti', ''),
('0023431118', '1403011412027627', 'Taufiq Ally Putra', '9.3', 'L', 'Bengkalis', '14/12/2002', 'Jln.Jendral Sudirman', 'Riau', 'Bengkalis', 'Bengkalis', 'Damun', '1403011103070050', 'Aldi Satria', 'Lily Elvia', ''),
('0024233229', '1302094202020003', 'Nova Aliza', '9.3', 'P', 'Indudur', '02/02/2002', 'Jorong Anduriang Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1302092010100005', 'Rusli', 'Sanimar', ''),
('0024456709', '1308131302020001', 'Abdul Zul Bahri', '8.2', 'L', 'Bukittinggi', '13/02/2002', 'Maringging Jorong Bunga Tanjung', 'Sumatera Barat', 'Pasaman ', 'Tigo Nagari', 'Malampah', '1308131805090005', 'Saparudin', 'Misrawati', ''),
('0024512920', '1301086110020001', 'Fadillah Saputra', '7.2', 'L', 'Taratak', '21/10/2002', 'Bendang Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1301083011090022', 'Abu Nasar', 'Era.', ''),
('0024553798', '2171060608029002', 'Muhammad Harist Gusnaini', '8.3', 'L', 'Batam', '06/08/2002', 'Jorong Aia Tabik', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152608130003', 'Muhammad Sadri', 'Erni Yusnita', ''),
('0024856365', '1306150911020003', 'Rahma Dhani', '8.1', 'L', 'Pauh', '09/11/2002', 'Tabing Jorong Pauh', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152804110001', 'Afrizal', 'Hariati', ''),
('0024857936', '1306154609020001', 'Rani Septia Wulandari', '9.2', 'P', 'Koto Laweh', '06/09/2002', 'Kayu Ampek Jorong Pakan Sinayan', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083684', 'Sahril', 'Sansidar', ''),
('0024858891', '1306155111020001', 'Elzi Novita Rahni', '8.3', 'P', 'Durian', '11/11/2002', 'Aur Jorong Durian', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083178', 'Syafrizal', 'Elva Yetti', ''),
('0024859214', '1306151508020001', 'Teguh Putra Aitama', '9.3', 'L', 'Kamang Hilir', '15/08/2002', 'Simpang Aia Tabik Jrg Aia Tabik', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083269', 'Ali Fuadi', 'Hasneli Oktari siska', ''),
('0024859255', '1306156203020003', 'Fauzyah', '9.3', 'P', 'Durian', '22/03/2002', 'Tabing Jrg Pauah', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306151903100015', 'Kasni', 'Ratna Yulis', ''),
('0024859635', '1306152403020001', 'Kharisma Fikri Ananda', '9.2', 'L', 'Joho', '24/03/2002', 'Kampung Tanggah Jorong Pakan Sinayan', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402084659', 'Indra Jaya', 'Yulia Safrida', ''),
('0025274958', '1306096311020001', 'Latifah Hanum N', '7.2', 'P', 'Situmbuak', '23/11/2002', 'Situmbuak', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080443', 'Abdul Latif Nasution', 'Ermis', ''),
('0025274964', '1306095610020001', 'Maya Heriyanti', '8.1', 'P', 'Agam', '16/10/2002', 'Tapi Kalung Jorong Tapi Kalung', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082279', 'Heriaman', 'Irmayanti', ''),
('0025275005', '1306095806020001', 'Rozi Wulandari', '8.3', 'P', 'Pekan Kamis', '18/06/2002', 'Jorong Tambuo', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402081032', 'Armen', 'Frima Mega Yanti', ''),
('0025275049', '1306096911020001', 'Bulan Safitri', '8.2', 'P', 'Sonsang', '29/11/2002', 'Jorong Songsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402081477', 'Zainal Akhiyar', 'Elmi Yenti', ''),
('0025277767', '1471120501020004', 'Muhammad Bima Suhendra', '9.1', 'L', 'Pekanbaru', '05/01/2002', 'Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tanggah', '1471122001120012', 'Zulhendra', 'Susrianti', ''),
('0025822313', '1308070835020003', 'Randi Septian', '7.2', 'L', 'Pangkalan Berandan', '09/05/2002', 'Ampang Gadang', 'Sumatera Barat', 'Pasaman ', 'Panti', 'Panti', '1308031203080085', 'Yusbar', 'Yesmawati', ''),
('0025973169', '1307065305080001', 'Handika Ananda Defki', '8.1', 'L', 'Bangkinang', '07/09/2002', 'Mudiak Pasar', 'Sumatera Barat', 'Lima Puluh Kota', 'Pangkalan Koto Baru', 'Manggilang', '1307062501080094', 'Deski Andri', 'Delfitri Surya Diana', ''),
('0027991533', '1471080705020024', 'Alfianto Anggara', '8.2', 'L', 'Pekan Baru', '05/07/2002', 'Jl. Cipta Karya', 'Riau', 'Kota Pekan Baru', 'Tampan', 'Tuah Karya', '1471081504150040', 'Hanafi', 'Yelnita Gustifa', ''),
('0029108382', '1302044101020008', 'Tiayu Linda', '7.1', 'P', 'Aie Dingin', '01/01/2002', 'Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302040606081027', 'Zainul Padri', 'Mawarnis', ''),
('0029405813', '1302041410020004', 'Afrizal', '8.1', 'L', 'Air Dingin', '14/10/2002', 'Bendang Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040606081708', 'Pardi', 'Syafrida Yanti', ''),
('0029979732', '1302041207020004', 'Wahyudi Ilham', '9.2', 'L', 'Koto Baru', '12/07/2002', 'Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040606081303', 'Zaidul Bakrizal', 'Misdafarmi', ''),
('0030071327', '1201022011030001', 'Kakasih Firdianda Adzkia Fatah', '9.1', 'L', 'Sipea pea', '20/11/2003', 'Kelurahan Sorkam', 'Sumatera Barat', 'Agam', 'Sorkam', 'Sorkam', '1302040406110005', 'Firdiansyah', 'Yeni', ''),
('0030594994', '1301082807030005', 'Rahmat Afandi', '8.3', 'L', 'Langgai', '28/07/2003', 'Ganting Mudiak Utara Surantih', 'Sumatera Barat', 'Pesisir Selatan', 'Sutera', 'Ganting Mudik Utara Surantih', '1301082308070008', 'Andri', 'Nia Sulastri', ''),
('0030956187', '2172010303030004', 'Yudha Maharramsyah', '8.3', 'L', 'Tanjung Pinang', '03/03/2003', 'Mata Air Jorong Koto Malintang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '', 'Edison', 'Yenti Syahfitri', ''),
('0031037659', '1306155807030001', 'Anita Fatmawati', '7.2', 'P', 'Bukittinggi', '18/07/2003', 'Jalan Kayu Jorong Durian', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306150808090009', 'Edy Erman', 'Fatimah', ''),
('0031050833', '1306155204030001', 'Nida Aulia', '8.1', 'P', 'Durian', '12/04/2003', 'Tabing Jorong Pauh', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402082858', 'Edi Sofyan', 'Widya Susanti', ''),
('0031233177', '3401014208030002', 'Putri Bunga Anggraeni', '8.1', 'P', 'Kolon Progo', '02/08/2003', 'Jorong Songsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306091510140005', 'Sudaryono', 'Lindawati', ''),
('0031618474', '1306095601030003', 'Khairiyati Wazaki', '8.2', 'P', 'Bukittinggi', '16/01/2003', 'Jorong Situmbuak', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306090408100008', 'Muhammad Fitra', 'Yusneti', ''),
('0031618499', '1306096508030001', 'Shindy Yohanda', '8.1', 'P', 'Pekan Kamis', '25/08/2003', 'Jorong Situmbuak', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080433', 'Yosrawendi', 'Harmawati', ''),
('0031650230', '1306092401030001', 'Fuzeno Kahar', '8.1', 'L', 'Koto Laweh', '24/01/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083228', 'Miftar', 'Yerti', ''),
('0031650236', '1306095105030003', 'Rizka Eriza', '8.3', 'P', 'Koto Laweh', '11/05/2003', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083152', 'Suwirman', 'Emtasni', ''),
('0031650238', '1306092206030002', 'Muhammad Yunanda Pratama', '7.1', 'L', 'Bukittinggi', '22/06/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402084031', 'Muhammad Syukur', 'Desriyati', ''),
('0031650239', '1306092206030001', 'Radja Irfan Ritonga', '8.2', 'L', 'Pincuran', '22/06/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083348', 'Hispan Safri Ritonga', 'Ratna Zet', ''),
('0031650448', '1306091001030002', 'Diky Randika', '8.3', 'L', 'Bukittinggi', '10/01/2003', 'Jl. Surau Gadang Mandiangin', 'Sumatera Barat', 'Bukittinggi', 'Mandiangin Koto Selayan', 'Campago Ipuah', '1306092402083506', 'Joni', 'Ernida', ''),
('0031650451', '1306092206030004', 'Muhammad Reyhan', '8.2', 'L', 'Bukittinggi', '22/06/2003', 'Andarung Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092004100006', 'Epison', 'Juerni', ''),
('0031650542', '1306091201030001', 'M.Fikri', '8.2', 'L', 'Koto Laweh', '12/01/2003', 'Koto Laweh Tanah Sirah', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083340', 'Paiman', 'Ratna Dewi', ''),
('0031650545', '1306091705030001', 'Faisal Maulana', '7.2', 'L', 'Koto Laweh', '17/05/2003', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402081059', 'Gasril', 'Neldawati ', ''),
('0031650547', '1306094907030001', 'Laili Rahmawati', '8.3', 'P', 'Situmbuak', '09/07/2003', 'Jorong Koto Laweh Hilir', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082205', 'Jon Eka Putra', 'Yurneli', ''),
('0031650662', '1306092604030001', 'Ilhamdi Sabbril', '8.1', 'L', 'Pakan Sinayan', '26/04/2003', 'Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080157', 'Iswandi', 'Elfi Wahyuni', ''),
('0031650668', '1306090407030001', 'Andre Rizaldo', '8.1', 'L', 'Sonsang', '04/07/2003', 'Jorong Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080196', 'Zalkasri', 'Nazratul Hasanah', ''),
('0031690708', '3172024507030012', 'Gifta Antomi Mycawa', '7.2', 'P', 'Jakarta', '05/07/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '3171031302141015', 'Mujiyati', 'Mujiyati', ''),
('0031733144', '1306066303030005', 'Anita Marza Witri', '8.2', 'P', 'Bukittinggi', '23/03/2003', 'Jorong Sungai Buluah', 'Sumatera Barat', 'Agam', 'Banuhampu', 'Cingkariang', '1306061807077174', 'Andra Putra', 'Liza Neliwita', ''),
('0031946476', '1302045810030001', 'Eka Putri', '8.3', 'P', 'Air Dingin', '18/10/2003', 'Lampariak Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302040812100003', 'Syahrul Amini', 'Ermina', ''),
('0032261796', '1302041711030005', 'Rasyid Rama Dano', '8.2', 'L', 'Air Dingin', '17/11/2003', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302041904120021', 'Ahlimar', 'Murni', ''),
('0032287729', '1302040703030003', 'Azma Yulia', '7.1', 'P', 'Air Dingin', '27/03/2003', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040606081665', 'Saparudin', 'Ernita', ''),
('0032632041', '1306094410030001', 'Rabbiatul Rafi\'ah Salamah', '8.1', 'P', 'Bukittinggi', '04/10/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083270', 'Syamsir', 'Elfitriati', ''),
('0032790921', '', 'Yani Fatma Ningsih', '8.1', 'P', 'Pekanbaru', '10/01/2003', 'jl.Hang Tuah', 'Riau', 'Pekanbaru', 'Tenayan Raya', 'Sail', '', 'Tumpal', 'Indri Yeni', ''),
('0033858289', '2171062211029005', 'Fajri Yunda Ramadhan', '8.2', 'L', 'Batam', '22/11/2002', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '2171061003110026', 'Emi Suardi', 'Yasven Novriza', ''),
('0034388672', '1302114305030001', 'Hanifah Yusdian', '7.2', 'P', 'Padang Belimbing', '05/03/2003', 'Sawah Jariang Jorong Padang Belimbing', 'Sumatera Barat', 'Solok', 'X Koto Singkarak', 'Koto Sani', '1302110606083284', 'Irawadi', 'Yusni', ''),
('0036638046', '1306152206030001', 'Ali Imran El Badri', '7.1', 'L', 'Durian', '22/06/2003', 'Jorong Durian', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083431', 'Zul Badri', 'Elwirdawati', ''),
('0036675468', '1306094311030002', 'Putri Ramadani', '7.1', 'P', 'Durian', '03/11/2003', 'Koto Laweh Sabanda', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402082158', 'Syeftrimon', 'Nani Syafri Yenti', ''),
('0036675469', '1306090511030001', 'Abdul Hadi', '7.1', 'L', 'Koto Laweh', '05/11/2003', 'Jorong pincuran Tilatang kamang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083310', 'Amri', 'Vivi', ''),
('0036675473', '1306096111030001', 'Alfi Khairina', '7.2', 'P', 'Koto Laweh', '21/11/2003', 'Jorong Anduring', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080477', 'Sifi Hendri', 'Fitriah', ''),
('0036676407', '1306091406030001', 'M. Farhan', '7.1', 'L', 'Ngungun', '14/06/2003', 'Jorong NGungun ', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402080646', 'Fakinuddin Siregar', 'Teti Hidayati', ''),
('0036676996', '1306095809030001', 'Suci Fatmawati', '7.1', 'P', 'Bukittinggi', '18/09/2003', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083239', 'Agusmar', 'Suhelmi', ''),
('0037392751', '3275081405130008', 'M.Amar Azikra', '7.1', 'L', 'Bandung', '07/03/2003', 'Kayu IV Jorong Pakan Sinayan', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '3275081405130008', 'Refli Hendra', 'Nurdiana', ''),
('0037975385', '1312050208031008', 'Hidayat', '7.2', 'L', 'Padang Rajo', '02/08/2003', 'Padang Rajo Jorong IV Koto', 'Sumatera Barat', 'Pasaman Barat', 'Kinali', 'Kinali', '1312052601100021', 'Safrul', 'MIsdawati', ''),
('0037979918', '1302044906030006', 'Widia Rahmayuni', '7.1', 'P', 'Aie Dingin', '09/06/2003', 'Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302040606081259', 'Mawardi', 'Rosmaniar', ''),
('0037983433', '1302045410030002', 'Febri Syahputri', '8.2', 'P', 'Air Dingin', '14/10/2003', 'Jorong Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302040606081795', 'Adril Fauzi', 'Yel Pendri', ''),
('0038118801', '1312050512030002', 'Jimi Maulana', '7.2', 'L', 'Rambah', '05/12/2003', 'Rambah', 'Sumatera Barat', 'Pasaman Barat', 'Kinali', 'Kinali', '1312052010150001', 'Kasiman', 'Desli Murni', ''),
('0038564498', '1302046403830001', 'Hidayatullah', '8.1', 'L', 'Air Dingin', '24/04/2003', 'Koto Baru', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Air Dingin', '1302041507100003', 'Mahlil', 'Weni Marlina', ''),
('0039190899', '1307080706070002', 'Rendi Saputra', '7.2', 'L', 'Ikan Banyak', '03/03/2003', 'Kampuang Patai', 'Sumatera Barat', 'Lima Puluh Kota', 'Gunuang Omeh', 'Pandam Gadang', '1307082812070048', 'Amri Suhardi', 'Tuti Sumarni', ''),
('0041160015', '1306154411040002', 'Salsabila Nurhaliza', '7.2', 'P', 'Duri', '04/11/2004', 'Jorong Durian', 'Sumatera Barat', 'Agam', 'Kamang Magek', 'Kamang Mudiak', '1306152402083703', 'Muhammad Nurhadi', 'Elmida', ''),
('0042099939', '1401066204040003', 'Maidatul Sholeha', '7.1', 'P', 'Terantang', '22/04/2004', 'Jorong Sonsang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1401062112150002', 'Husni', 'Husni', ''),
('0042279432', '1405025305040003', 'Aisya Na\'ilussalamah', '7.2', 'P', 'Koto Laweh', '13/05/2004', 'Jorong Koto Laweh', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306091607140003', 'Budi', 'Delfitri', ''),
('0042374603', '1306106105040001', 'Navira Mayanti', '7.1', 'P', 'Palupuh', '21/05/2004', 'Jorong Muaro', 'Sumatera Barat', 'Agam', 'Palupuh', 'Koto Rantang', '1306102402080110', 'Nurhayati', 'Nurhayati', ''),
('0042898689', '13060916160604001', 'M.Arifil Ma\'ruf', '7.1', 'L', 'Koto Laweh', '16/06/2004', 'Jorong Anduriang Munggu Gadang', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092402083481', 'Anhar', 'Erni', ''),
('0044512173', '1471104804040021', 'Annisa Aprilia', '7.1', 'P', 'Pekanbaru', '08/04/2004', 'Jorong Pincuran', 'Sumatera Barat', 'Agam', 'Tilatang Kamang', 'Koto Tangah', '1306092502150004', 'Armon', 'Susiyanti', ''),
('0049905931', '13020426030400001', 'Afdika Rahman', '7.1', 'L', 'Air Dingin Timur', '26/03/2004', 'Jorong Kayu Aro', 'Sumatera Barat', 'Solok', 'Lembah Gumanti', 'Aie Dingin', '1302042304100008', 'Syafrizal', 'Yosma Derita', ''),
('0050393156', '1201022307050002', 'Bagus Firdianda Hujatul Islami', '7.2', 'L', 'Sipea-pea', '23/07/2005', 'Sorkam', 'Sumatera Utara', 'Tapanuli Tengah', 'Sorkam', 'Sorkam', '1201022910070039', 'Firdiansyah', 'Nurzakiah Simbolon', ''),
('9992020882', '1306041404990002', 'Dafit Afrizal', '9.2', 'L', 'Andaleh', '14/04/1999', 'Jorong Andaleh', 'Sumatera Barat', 'Agam', 'Matur', 'Tigo Balai', '1306042402082999', 'Samsurizal', 'Besmawati', ''),
('9992949763', '1307013005990002', 'Trismon', '9.3', 'L', 'Padang', '30/05/1999', 'Tanah Tingkah', 'Sumatera Barat', 'Lima Puluh Kota', 'Suliki', 'Tanah Tingkah', '1307011810100019', 'Eriyono', 'Nurhayati', ''),
('9996618772', '1508114706000002', 'Idia Juliana', '9.2', 'P', 'Air Gemuruh', '07/06/2000', 'Jln.Tanah tumbuh Lamo', 'Jambi', 'Bungo', 'Bathin III', 'Air Gemuruh', '1508112403110027', 'Maskur', 'Syapriani', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` varchar(6) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `nama_status`) VALUES
('S001', 'PNS'),
('S002', 'PNS Diperbantukan'),
('S003', 'PNS DEPAG'),
('S004', 'TY/PTY'),
('S005', 'GTT/PTT Provinsi'),
('S006', 'GTT/PTT Kabupaten/Ko'),
('S007', 'Guru Bantu Pusat'),
('S008', 'Guru Honor Sekolah'),
('S009', 'Tenaga Honor Sekolah'),
('S010', 'CPNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sumber_gaji`
--

CREATE TABLE `tb_sumber_gaji` (
  `id_sumbergaji` varchar(6) NOT NULL,
  `sumber_gaji` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sumber_gaji`
--

INSERT INTO `tb_sumber_gaji` (`id_sumbergaji`, `sumber_gaji`) VALUES
('G001', 'APBN'),
('G002', 'APBD Provinsi'),
('G003', 'APBD/KAB/KOTA'),
('G004', 'Yayasan'),
('G005', 'Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama`, `username`, `password`, `pass`, `level`, `img`) VALUES
('U004', 'Abdul Yamin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', 'admin.jpg'),
('U010', 'Darnizam Fetrima, S.Sos', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', 'Guru', 'atomix_user31.png'),
('U012', 'Poppy yendriani, S.Pd', 'poppy', 'ae3919d8dd892062fc176023ff389f49', 'poppy', 'Guru', 'IMG_20180206_162949_886.jpg'),
('U013', 'Irna Yenti, S.Pd', 'irna', '75fa7119f59eabc074c91ab2e81a0308', 'irna', 'Pegawai', '27709350_178416269585145_6432242794020892403_o.jpg'),
('U014', 'Ade Irawan, ST', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai', 'Pegawai', 'atomix_user31.png'),
('U015', 'Yusneli, BA', 'yusneli', '41af34ca6cbdb89cc06ad6894b68191e', 'yusneli', 'Administrator', 'tafsir.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tb_diklat`
--
ALTER TABLE `tb_diklat`
  ADD PRIMARY KEY (`id_diklat`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `tb_lbg_pengangkat`
--
ALTER TABLE `tb_lbg_pengangkat`
  ADD PRIMARY KEY (`id_pengangkat`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tb_sumber_gaji`
--
ALTER TABLE `tb_sumber_gaji`
  ADD PRIMARY KEY (`id_sumbergaji`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_diklat`
--
ALTER TABLE `tb_diklat`
  MODIFY `id_diklat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `no_urut` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pend` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
