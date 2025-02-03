-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 03:12 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dams_kersduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_ruang`
--

CREATE TABLE `booking_ruang` (
  `id` int(100) NOT NULL,
  `tempat` text NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `agenda` text NOT NULL,
  `subdit` varchar(100) NOT NULL,
  `peminjam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_ruang`
--

INSERT INTO `booking_ruang` (`id`, `tempat`, `tanggal_mulai`, `tanggal_selesai`, `agenda`, `subdit`, `peminjam`) VALUES
(1, 'Ruang Rapat Gijzeling', '2021-12-25 12:00:00', '2021-12-25 13:00:00', 'Pembahasan IKU Kersduk', '4', 'Rio'),
(4, 'Ruang Rapat Cakti', '2021-12-25 10:00:00', '2021-12-25 12:00:00', 'Pembahasan proker tahun depan', '7', 'Restu');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `sifat` varchar(30) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `validasi` int(1) NOT NULL,
  `subdit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `no_surat`, `tanggal_surat`, `title`, `start_event`, `end_event`, `tempat`, `status`, `sifat`, `pic`, `validasi`, `subdit`) VALUES
(8, 'UND-1/PJ.0442/2021', '2021-07-19', 'Membahas Peraturan Perpajakan', '2021-07-23 02:00:00', '2021-07-23 05:00:00', 'Ruang Rapat Direktur', 1, 'Biasa', 'Kepala SubDirektorat Perencanaan Pemeriksaan', 1, 'SubDirektorat Perencanaan Pemeriksaan'),
(9, 'UND-2/PJ.0442/2021', '2021-07-22', 'Rapat Rakorgab Penegakan Hukum', '2021-07-23 08:00:00', '2021-07-23 13:00:00', 'Ruang Rapat Direktur', 1, 'Sangat Penting', 'Kepala SubDirektorat Teknik dan Pengendalian Pemeriksaan', 1, 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(10, 'UND-3/PJ.0442/2021', '2021-07-22', 'ST ke Makasar sidang pajak', '2021-07-24 13:00:00', '2021-07-24 18:00:00', 'Ruang Rapat Cakti', 1, 'Sangat Penting', 'Kepala SubDirektorat Teknik dan Pengendalian Pemeriksaan', 1, 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(11, 'UND-4/PJ.0442/2021', '2021-07-17', 'Membahas ICBP Turun', '2021-07-22 09:00:00', '2021-07-22 12:00:00', 'Ruang Pantri Kersduk', 1, 'Sangat Penting', 'Kepala SubDirektorat Perencanaan Pemeriksaan', 1, 'SubDirektorat Perencanaan Pemeriksaan'),
(12, 'ST-10/PJ.0442/2021', '2021-07-23', 'Membahas Penurunan UNVR', '2021-07-23 05:00:00', '2021-07-23 11:00:00', 'Ruangan Pak Wishnu', 1, 'Biasa', 'Kepala SubDirektorat Penagihan', 1, 'SubDirektorat Penagihan'),
(13, 'ST-12/PJ.0442/2021', '2021-07-19', 'Membahas Pertumbuhan Berat Badan Saya', '2021-07-24 00:30:00', '2021-07-24 01:00:00', 'Ruang Pantri', 1, 'Penting', 'Kepala SubDirektorat Pemeriksaan Transaksi Khusus', 1, 'SubDirektorat Pemeriksaan Transaksi Khusus'),
(14, 'UND-5/PJ.0442/2021', '2021-07-16', 'Membahas Aplikasi Desktop Pemeriksaan', '2021-07-09 08:00:00', '2021-07-09 12:00:00', 'Ruang Rapat Cakti', 1, 'Sangat Penting', 'Kepala SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 1, 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(15, 'UND-9/PJ.0442/2022', '2021-07-19', 'Membahas Pandual ALPP', '2021-03-02 11:00:00', '2021-03-02 14:00:00', 'Ruangan Direktur', 1, 'Sangat Penting', 'SubDirektorat Perencanaan', 0, 'SubDirektorat Perencanaan Pemeriksaan'),
(16, 'ST-13/PJ.0442/2021', '2021-07-22', 'Membahas Aplikasi Dams P2', '2021-03-04 13:00:00', '2021-03-04 14:00:00', 'Ruangan Direktur', 1, 'Sangat Penting', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 0, ''),
(20, '', '0000-00-00', 'makan', '2021-02-16 07:30:00', '2021-02-16 08:00:00', 'pantri', 0, '', 'kersduk', 0, ''),
(21, 'UND-50/PJ.04/2021', '2021-03-22', 'Membahas Perkembangan Jadwal Direktur', '2021-07-21 12:00:00', '2021-07-21 14:50:00', 'Ruangan Cakti', 1, 'Sangat Penting', 'Seksi Dukungan Teknis Pemeriksaan', 1, 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(22, 'UND-51/PJ.04/2021', '2021-07-23', 'Rapat Mobile Aplikasi', '2021-07-23 13:00:00', '2021-07-23 14:50:00', 'Ruang Rapat Cakti', 1, 'Biasa', 'Kepala SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 1, 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(23, 'UND-52/PJ.04/2021', '2021-07-22', 'Rapat Pembahasan Aplikasi Morigas', '2021-07-22 13:00:00', '2021-07-22 17:00:00', 'Ruang Rapat Direktur', 1, 'Sangat Penting', 'Direktur Pemeriksaan dan Penagihan', 1, 'Direktur'),
(26, 'UND-52/PJ.04/2021', '2021-07-23', 'Monev Gabungan', '2021-07-23 15:00:00', '2021-07-23 17:00:00', 'Ruangan Cakti', 1, 'Penting', 'Kepala SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 0, 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan');

-- --------------------------------------------------------

--
-- Table structure for table `events_pegawai_p2`
--

CREATE TABLE `events_pegawai_p2` (
  `id` int(3) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `agenda` text NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `id_sie` int(2) NOT NULL,
  `jenis_st` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_pegawai_p2`
--

INSERT INTO `events_pegawai_p2` (`id`, `no_surat`, `tanggal_surat`, `agenda`, `mulai`, `selesai`, `tempat`, `status`, `id_sie`, `jenis_st`) VALUES
(1, 'ST-10/PJ.0442/2021', '2021-02-23', 'Rapat Rakorgab Penegakan Hukum', '2021-07-05', '2021-07-06', 'Ruangan Pak Wishnu', 1, 2, 'Lainnya'),
(6, 'ST-11/PJ.0442/2021', '2021-07-05', 'Membahas Prognosa Penerimaan', '2021-07-05', '2021-07-07', 'Ruang Rapat Cakti', 1, 2, 'Lainnya'),
(7, 'ST-12/PJ.0442/2021', '2021-07-05', 'Rapat Morigas Pembahasan Akhir', '2021-07-05', '2021-07-05', 'Ruang Pantri Kersduk', 1, 11, 'Lainnya'),
(8, 'ST-13/PJ.0442/2021', '2021-07-05', 'Rapat Aplikasi Tarsan', '2021-07-05', '2021-07-05', 'Ruang Pantri Perencanaan', 1, 4, 'e-learning'),
(9, 'ST-14/PJ.0442/2021', '2021-07-05', 'Rapat Monev Tahunan Teknik', '2021-07-05', '2021-07-05', 'Ruang Rapat Gijeling', 1, 7, 'Lainnya'),
(16, 'ST-16/PJ.0442/2021', '2021-07-06', 'Membahas Prognosa Penerimaan', '2021-07-06', '2021-07-06', 'Lantai 14 FPP', 1, 2, 'Lainnya'),
(17, 'ST-17/PJ.0442/2021', '2021-07-05', 'Monev Gabungan', '2021-07-05', '2021-07-05', 'KPP Pratama Denpasar', 1, 2, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `id_kegiatan`
--

CREATE TABLE `id_kegiatan` (
  `id_keg` int(1) NOT NULL,
  `kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_kegiatan`
--

INSERT INTO `id_kegiatan` (`id_keg`, `kegiatan`) VALUES
(1, 'Rutin'),
(2, 'Khusus'),
(3, 'Adhoc');

-- --------------------------------------------------------

--
-- Table structure for table `id_seksi`
--

CREATE TABLE `id_seksi` (
  `id_sie` int(1) NOT NULL,
  `seksi` varchar(255) NOT NULL,
  `subdit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_seksi`
--

INSERT INTO `id_seksi` (`id_sie`, `seksi`, `subdit`) VALUES
(0, 'Simulasi', ''),
(1, 'Seksi Kerjasama Pemeriksaan', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(2, 'Seksi Dukungan Teknis Pemeriksaan', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(3, 'Seksi Data dan Dukungan Pemeriksaan', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(4, 'Seksi Perencanaan Pemeriksaan Wajib Pajak Orang Pribadi\n', 'SubDirektorat Perencanaan Pemeriksaan'),
(5, 'Seksi Perencanaan Pemeriksaan Wajib Pajak Badan', 'SubDirektorat Perencanaan Pemeriksaan'),
(6, 'Seksi Strategi Pemeriksaan', 'SubDirektorat Perencanaan Pemeriksaan'),
(7, 'Seksi Teknik Pemeriksaan\n', 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(8, 'Seksi Pengendalian Mutu Pemeriksaan\r\n', 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(9, 'Seksi Evaluasi dan Kinerja Pemeriksaan\r\n', 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(10, 'Seksi Pemeriksaan Transaksi Perusahaan Grup\r\n', 'SubDirektorat Pemeriksaan Transaksi Khusus'),
(11, 'Seksi Pemeriksaan Wajib Pajak Sektor Sumber Daya Alam', 'SubDirektorat Pemeriksaan Transaksi Khusus'),
(12, 'Seksi Transfer Pricing dan Transaksi Khusus Lainnya', 'SubDirektorat Pemeriksaan Transaksi Khusus'),
(13, 'Seksi Strategi dan Dukungan Penagihan', 'SubDirektorat Penagihan'),
(14, 'Seksi Perencanaan dan Evaluasi Penagihan', 'SubDirektorat Penagihan'),
(15, 'Seksi Pengendalian Mutu dan Administrasi Penagihan\r\n', 'SubDirektorat Penagihan'),
(16, 'Direktur Pemeriksaan dan Penagihan', 'Direktur'),
(17, 'Kepala SubDirektorat Perencanaan Pemeriksaan', 'SubDirektorat Perencanaan Pemeriksaan'),
(18, 'Kepala SubDirektorat Teknik dan Pengendalian Pemeriksaan', 'SubDirektorat Teknik dan Pengendalian Pemeriksaan'),
(19, 'Kepala SubDirektorat Pemeriksaan Transaksi Khusus', 'SubDirektorat Pemeriksaan Transaksi Khusus'),
(20, 'Kepala SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan'),
(21, 'Kepala SubDirektorat Penagihan', 'SubDirektorat Penagihan\r\n'),
(22, 'SubBagian Tata Usaha', 'Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `id_sifat`
--

CREATE TABLE `id_sifat` (
  `id_prioritas` int(11) NOT NULL,
  `sifat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_sifat`
--

INSERT INTO `id_sifat` (`id_prioritas`, `sifat`) VALUES
(1, 'Sangat Penting'),
(2, 'Penting'),
(3, 'Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `jdl_rko`
--

CREATE TABLE `jdl_rko` (
  `id_rko` int(1) NOT NULL,
  `id_sie` int(1) NOT NULL,
  `id_keg` int(1) NOT NULL,
  `judul` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jdl_rko`
--

INSERT INTO `jdl_rko` (`id_rko`, `id_sie`, `id_keg`, `judul`, `status`) VALUES
(25, 2, 1, 'Pemeliharaan Aplikasi Pendukung Pemeriksaan', 0),
(26, 2, 1, 'Pengembangan Aplikasi Daily Activity Monitoring Systems lingkup Subdit', 0),
(27, 2, 1, 'Penyediaan Data dari aplikasi secara aktif', 1),
(28, 2, 1, 'Pengembangan Kapasitas Pegawai bagi e-Auditor dan pegawai Subdit ', 1),
(29, 2, 2, 'Manajemen Data Digitalisasi LHP dan Sengketa Pajak', 1),
(30, 2, 2, 'Tata Kelola TIK ', 1),
(31, 2, 2, 'Penyusunan Roadmap dan Implementasi Desktop Pemeriksaan', 1),
(32, 2, 2, 'Pengadaan Laboratorium e-Auditor', 1),
(33, 2, 2, 'Penyediaan Narasumber e-Auditor dan Dukungan Tenaga Ahli ', 1),
(34, 2, 2, 'Implementasi Rancang Bangun e-Auditor DJP', 1),
(35, 1, 1, 'Pemeliharaan Aplikasi Akses Informasi Keuangan', 1),
(36, 1, 1, 'Sekretariat Pemeriksaan Tim Optimalisasi Penerimaan Negara (TOPN)', 1),
(37, 1, 1, 'Permintaan Informasi dan/atau Bukti atau Keterangan (IBK)', 1),
(38, 1, 1, 'Penyelenggaraan IHT TOPN', 1),
(39, 1, 1, 'Administrasi Surat Masuk dan Surat Keluar', 1),
(40, 1, 1, 'Supporting SDM dan Data terkait Pemeriksaan', 1),
(41, 1, 2, 'Pengembangan Aplikasi Akses Informasi Keuangan', 1),
(42, 1, 2, 'Pemeriksaan Bersama Pajak dan PNBP', 1),
(43, 1, 2, 'Pemeriksaan Bersama Lembaga Keuangan dan OJK', 1),
(44, 1, 3, 'Bimbingan Teknis/Sosialisasi Permintaan IBK', 1),
(45, 1, 3, 'Konten Kreatif Pemeriksaan', 1),
(46, 1, 3, 'Co-sign Regulasi,', 1),
(47, 1, 3, 'Co-sign MoU, PKS', 1),
(48, 1, 3, 'Membuat Surat Penugasan untuk Acara Seksi Kerjasama Pemeriksaan', 1),
(49, 1, 3, 'Anggaran Seksi Kerjasama Pemeriksaan', 1),
(50, 3, 1, 'Merger ALPP ke dalam AMPP', 1),
(51, 3, 1, 'Pengembangan Kapasitas Pegawai', 1),
(52, 3, 1, 'Menyelenggarakan kegiatan Knowledge Management Pemeriksaan', 1),
(53, 3, 1, 'Menyusun atau memutakhirkan modul tentang proses bisnis WP di KPP LTO dan KPP Khusus', 1),
(54, 3, 1, 'Pemetaan WP KPP Pratama yang melaporkan transaksi dengan pihak berafiliasi dalam SPT Tahunan PPh nya', 1),
(55, 3, 1, 'Pemenuhan Permintaan Data', 1),
(56, 3, 2, 'Pengembangan Aplikasi Knowledge Pemeriksaan', 1),
(57, 3, 2, 'Penyusunan Kajian Akademis Jabatan Fungsional Pemeriksa Pajak Utama', 1),
(58, 3, 2, 'Revitalisasi Diklat Fungsional Pemeriksa Pajak', 1),
(59, 3, 2, 'Validasi data tunggakan melalui rekonsiliasi data SIDJP, ALPP, dan data di lapangan.', 1),
(60, 3, 3, 'Penyediaan Narasumber Diklat dan IHT bagi Pemeriksa Pajak ', 1),
(61, 2, 3, 'Rapat Pencegahan Wabah Virus Corona', 0),
(62, 2, 3, 'Rapat Pencegahan Wabah Virus Corona', 0),
(63, 4, 1, 'Test RKO', 1),
(64, 0, 2, 'Test RKI Double', 1),
(65, 4, 1, 'Tesstt RKO RKI yg sama', 1),
(66, 2, 1, 'Permintaan Data', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_peg` int(2) NOT NULL,
  `nip9` varchar(10) NOT NULL,
  `nip18` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `panggil` varchar(20) NOT NULL,
  `panggol` varchar(30) NOT NULL,
  `id_sie` int(2) NOT NULL,
  `motivasi` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `wa` text NOT NULL,
  `pass` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jenis_user` varchar(30) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nip9`, `nip18`, `nama`, `panggil`, `panggol`, `id_sie`, `motivasi`, `email`, `wa`, `pass`, `gambar`, `jabatan`, `jenis_user`, `status`) VALUES
(1, '060098920', '19800720 200002 2 001', 'WULANDARI YULI ASTUTI', '', 'Penata Muda/IIIa', 1, '', '', '', '060098920', '060098920.jpg', 'Pelaksana', '', '0'),
(2, '830200584', '19911225 201310 1 002', 'FAJAR SURYA PUTRA', 'Fajar', 'Penata Muda/IIIa', 1, '', 'pajar.putra9@gmail.com', '085295820260', '830200584', '830200584.jpg', 'Pelaksana', '', '1'),
(3, '830203420', '19920605 201411 1 002', 'MUCHAMMAD CHOLID MUTTAQIN', '', 'Pengatur Tk.I/Iid', 1, '', '', '', '830203420', '830203420.jpeg', 'Pelaksana', '', '1'),
(4, '830602440', '19910323 201411 1 001', 'FIKRIY AMRULLAH HAKIM', '', 'Pengatur Tk.I/Iid', 1, '', '', '', '830602440', '830602440.jpg', 'Pelaksana', '', '0'),
(5, '921002432', '19911111 201402 2 004', 'NOOR CHYTTA AMANDA PUTRYANZI', '', 'Pengatur Tk.I/Iid', 1, '', '', '', '921002432', '921002432.jpeg', 'Pelaksana', '', '1'),
(6, '810201587', '19931231 201310 1 002', 'NASIR SETIAWAN', '', 'Pengatur Muda Tk.I/IIb', 1, '', '', '', '810201587', '810201587.jpeg', 'Pelaksana', '', '1'),
(7, '060084828', '19720915 199403 1 002', 'DIYAS HERJATMIKO', '', 'Penata Muda Tk.I/IIIb', 3, '', '', '', '060084828', '060084828.jpeg', 'Pelaksana', '', '1'),
(8, '060116270', '19870601 200710 1 002', 'ARDIAN UNGGUL NURKUSUMA', '', 'Penata Muda Tk.I/IIIb', 3, '', '', '', '060116270', '060116270.jpg', 'Pelaksana', '', '1'),
(9, '060108904', '19851011 200412 1 002', 'IRHAMNI', '', 'Pengatur Tk.I/IId', 3, '', '', '', '060108904', '060108904.jpg', 'Pelaksana', '', '1'),
(10, '810201568', '19931219 201310 1 001', 'GALIH WISMOYO', '', 'Pengatur Muda Tk.I/IIb', 3, '', '', '', '810201568', '810201568.jpeg', 'Pelaksana', '', '1'),
(11, '910223143', '19940420 201502 2 002', 'ZESSYCA YASMIN ANGGRAINI', '', 'Pengatur Muda Tk.I/IIb', 3, '', '', '', '910223143', '910223143.jpeg', 'Pelaksana', 'admin_dir', '1'),
(12, '820006374', '19890709 201012 2 006', 'YULI SUSANTI', '', 'Penata Muda/IIIa', 2, '', '', '', '820006374', '820006374.jpg', 'Pelaksana', '', '0'),
(13, '060105285', '19820407 200312 1 001', 'IFANDI SYAMSIR', '', 'Pengatur Tk.I/IId', 2, '', '', '', '060105285', '060105285.jpeg', 'Pelaksana', '', '1'),
(14, '921101909', '19920923 201402 2 002', 'ADE ILHAMIA', 'ade', 'Pengatur Tk.I/IId', 2, 'Homebase Medan', 'ade.ilhamia@gmail.com', '081311762359', 'Aze121217', '921101909.jpg', 'Pelaksana', 'admin', '1'),
(15, '910222328', '19950104 201502 1 004', 'FAIZAL NUR ACHMAD FIRMANSYAH', 'icang', 'Pengatur Muda Tk.I/IIb', 2, 'Traveling keliling dunia gratis', 'firmansyah.faizalnur@gmail.com', '082257314411', '910222328', '910222328.jpg', 'Pelaksana', '', '1'),
(16, '910222988', '19950816 201502 1 003', 'EDWARD CORNELIUS BONKEY MANIK', 'Edu', 'Pengatur Muda Tk.I/IIb', 2, 'hidup sehat, mati masuk surga', 'eduardo.cbm@gmail.com', '082167628821', '910222988', '910222988.jpg', 'Pelaksana', 'admin_dir', '1'),
(17, '060079392', '197101281990121001	', 'ARIF WIBAWA', 'Arif', 'Penata Tk.I/IIId', 1, '-', '', '', '060079392', '060079392.jpeg', 'Kepala', '', '1'),
(18, '060103307', '198208062002121002	', 'WISHNU AGUNG BAROTO', 'Wishnu', 'Penata/IIIc', 2, '', '', '', '060103307', '060103307.jpg', 'Kepala', '', '1'),
(19, '060085412', '197303071994031003	', 'BUDIYANTA', 'Budi', 'Pembina/IVa', 3, '', '', '', '060085412', '060085412.jpg', 'Kepala', '', '1'),
(20, '000000001', '', 'Kasi Kersduk', 'Kasi', '', 4, 'Done is Better Than Perfect!', 'kdp@gmail.com', '081378494987', '123', '000000001.jpg', 'Kepala', '', '1'),
(21, '000000002', '', 'Pelaksana Kersduk _ 1', 'Pelaksana SImulasi _', '', 4, 'Homebase Medan', 'sie2@gmail.com', '081311762359', '123', '000000002.jpg', 'Pelaksana', '', '1'),
(22, '000000003', '', 'Pelaksana Kersduk _ 2', 'Pelaksana SImulasi', '', 4, 'Homebase Medan', 'sie2@gmail.com', '081311762359', '123', '000000002.jpg', 'Pelaksana', '', '1'),
(23, '830601272', '199108112013101003	', 'DAVID GILANG DWI LAKSONO', 'DAVID ', 'Pengatur Tk.I/IId', 2, '', 'davidgilang.dwi@pajak.go.id', '', '830601272', '', 'Pelaksana', 'user', '1'),
(24, '817930647', '199702212018012002 ', 'FIKA ASTRIA', '', 'Pengatur/IIc', 2, '', '', '', '817930647', '', 'Pelaksana', 'admin_dir', '1'),
(25, '817930435', '199608092018011002', 'ADITYA RANGGA PRASETYO', 'Angga', 'IIc', 2, 'Hidup adalah Perjuangan', 'adityarpras@gmail.com', '0823121225081', '817930435', '817930435.jpg', 'Pelaksana', 'admin', '1'),
(26, '917338436', '199508212018012001', 'RIZKA NADHILA AUZI', 'Auzi', '', 2, '', '', '', '917338436', 'avatar2.JPG', 'Pelaksana', '', '1'),
(27, '817932214', '199812162018012001', 'JIHAN ZAKIYATUL HUSNA', 'Jihan', '', 9, '', '', '', '817932214', '817932214.jpg', 'pelaksana', 'admin_dir', '1'),
(28, '060077795', '196802141989031001', 'FREDDY HASIHOLAN SIANIPAR', 'Freddy', '', 7, '', '', '', '060077795', '060077795.jpg', 'kepala', 'dir', '1'),
(29, '740002695', '196708221988031001', 'IRAWAN', 'IRAWAN', '', 16, '', '', '', '740002695', '740002695.jpg', 'kepala', 'dir', '1'),
(30, '830102981', '199009272015022009', 'BUNGA PUTRI PERTIWI', 'Bunga', '', 22, '', '', '', '830102981', '830102981.jpg', 'pelaksana', 'admin_dir', '1'),
(31, '060078021', '196406051989101001', 'ADE LILI', 'ADE LILI', '', 20, '', '', '', '060078021', '060078021.jpg', 'kepala', 'dir', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_events`
--

CREATE TABLE `pegawai_events` (
  `id` int(3) NOT NULL,
  `id_events_pgw` int(3) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nip18` varchar(30) NOT NULL,
  `id_sie` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_events`
--

INSERT INTO `pegawai_events` (`id`, `id_events_pgw`, `nama`, `nip18`, `id_sie`, `status`) VALUES
(1, 1, 'ARIF WIBAWA', '197101281990121001', 1, 1),
(7, 6, 'NASIR SETIAWAN', '19931231 201310 1 002', 1, 1),
(8, 6, 'NOOR CHYTTA AMANDA PUTRYANZI', '19911111 201402 2 004', 1, 1),
(9, 7, 'GALIH WISMOYO', '19931219 201310 1 001', 3, 1),
(10, 7, 'IFANDI SYAMSIR', '19820407 200312 1 001', 2, 1),
(11, 8, 'ADITYA RANGGA PRASETYO', '199608092018011002', 2, 1),
(12, 8, 'BUNGA PUTRI PERTIWI', '199009272015022009', 22, 1),
(13, 9, 'FREDDY HASIHOLAN SIANIPAR', '196802141989031001', 7, 1),
(14, 9, 'RIZKA NADHILA AUZI', '199508212018012001', 2, 1),
(15, 11, 'NASIR SETIAWAN', '19931231 201310 1 002', 1, 1),
(16, 11, 'NOOR CHYTTA AMANDA PUTRYANZI', '19911111 201402 2 004', 1, 1),
(24, 16, 'IRHAMNI', '19851011 200412 1 002', 3, 1),
(25, 16, 'ARDIAN UNGGUL NURKUSUMA', '19870601 200710 1 002', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_tugas`
--

CREATE TABLE `pegawai_tugas` (
  `id_pegst` int(5) NOT NULL,
  `id_st` int(5) NOT NULL,
  `id_peg` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_sie` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_tugas`
--

INSERT INTO `pegawai_tugas` (`id_pegst`, `id_st`, `id_peg`, `nama`, `nip`, `id_sie`, `status`) VALUES
(4, 1, 18, 'WISHNU AGUNG BAROTO', '198208062002121002	', '2', 1),
(14, 4, 18, 'WISHNU AGUNG BAROTO', '198208062002121002	', '2', 1),
(15, 4, 15, 'FAIZAL NUR ACHMAD FIRMANSYAH', '19950104 201502 1 00', '2', 1),
(16, 4, 24, 'FIKA ASTRIA', '199702212018012002 ', '2', 1),
(17, 5, 14, 'ADE ILHAMIA', '19920923 201402 2 00', '2', 1),
(18, 5, 16, 'EDWARD CORNELIUS BONKEY MANIK', '19950816 201502 1 00', '2', 1),
(19, 6, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(20, 2, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(21, 7, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(23, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(24, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(25, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(26, 3, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(27, 3, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(28, 4, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(29, 4, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(30, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(31, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(32, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(33, 3, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(34, 3, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(35, 3, 4, 'FIKRIY AMRULLAH HAKIM', '19910323 201411 1 00', '1', 1),
(36, 3, 3, 'MUCHAMMAD CHOLID MUTTAQIN', '19920605 201411 1 00', '1', 1),
(37, 0, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(39, 10, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(41, 9, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(42, 9, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(53, 10, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(60, 19, 0, 'WULANDARI YULI ASTUTI', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_tugas_direktur`
--

CREATE TABLE `pegawai_tugas_direktur` (
  `id_pegst_dir` int(5) NOT NULL,
  `id_st_dir` int(5) NOT NULL,
  `id_peg` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_sie` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_tugas_direktur`
--

INSERT INTO `pegawai_tugas_direktur` (`id_pegst_dir`, `id_st_dir`, `id_peg`, `nama`, `nip`, `id_sie`, `status`) VALUES
(1, 10, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(2, 10, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(6, 11, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(7, 11, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(8, 11, 5, 'NOOR CHYTTA AMANDA PUTRYANZI', '19911111 201402 2 00', '1', 1),
(11, 12, 17, 'ARIF WIBAWA', '197101281990121001	', '1', 1),
(12, 12, 2, 'FAJAR SURYA PUTRA', '19911225 201310 1 00', '1', 1),
(13, 10, 3, 'MUCHAMMAD CHOLID MUTTAQIN', '19920605 201411 1 00', '1', 1),
(17, 12, 4, 'FIKRIY AMRULLAH HAKIM', '19910323 201411 1 00', '1', 1),
(18, 12, 3, 'MUCHAMMAD CHOLID MUTTAQIN', '19920605 201411 1 00', '1', 1),
(19, 9, 25, 'ADITYA RANGGA PRASETYO', '199608092018011002', '2', 1),
(20, 12, 25, 'ADITYA RANGGA PRASETYO', '199608092018011002', '2', 1),
(22, 13, 24, 'FIKA ASTRIA', '199702212018012002 ', '2', 1),
(23, 13, 14, 'ADE ILHAMIA', '19920923 201402 2 00', '2', 1),
(24, 13, 23, 'DAVID GILANG DWI LAKSONO', '199108112013101003	', '2', 1),
(25, 14, 16, 'EDWARD CORNELIUS BONKEY MANIK', '19950816 201502 1 00', '2', 1),
(26, 14, 26, 'RIZKA NADHILA AUZI', '199508212018012001', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rapat_direktur`
--

CREATE TABLE `rapat_direktur` (
  `id_rp_dir` int(5) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `unit` varchar(50) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal_rapat` date NOT NULL,
  `tdklanjut` varchar(100) NOT NULL,
  `pic` int(1) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `sifat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapat_direktur`
--

INSERT INTO `rapat_direktur` (`id_rp_dir`, `nomor`, `tanggal`, `unit`, `agenda`, `tempat`, `tanggal_rapat`, `tdklanjut`, `pic`, `ket`, `status`, `waktu_mulai`, `waktu_selesai`, `sifat`) VALUES
(1, 'UND-01/PJ.04/2021', '2021-01-27', 'SubDirektorat Transaksi Khusus', 'Membahas Prosedur Pemeriksaan Transaksi Afiliasi', 'Ruang Rapat Direktur', '2021-02-15', 'Membahas Makan2', 15, '-', 1, '09:00:00', '11:00:00', 'Biasa'),
(2, 'UND-01/PJ.04/2021', '2021-01-28', 'SubDirektorat Transaksi Khusus', 'makan bareng', 'Ruang Rapat Direktur bersama', '2021-01-29', '', 11, '', 0, '11:00:00', '13:00:00', ''),
(3, 'UND-03/PJ.04/2021', '2021-02-02', 'SubDirektorat Perencanaan', 'Membahas Prosedur Pemeriksaan Transaksi Afiliasi', 'Ruang Rapat Direktur', '2021-02-08', 'makan', 13, '', 1, '01:00:00', '03:00:00', 'Sangat Penting'),
(4, 'UND-05/PJ.04/2021', '2021-02-03', 'SubDirektorat Penagihan', 'makan', 'Ruang Rapat Direktur', '2021-02-04', '', 8, '', 0, '10:00:00', '18:00:00', ''),
(5, 'UND-06/PJ.04/2021', '2021-02-04', 'SubDirektorat Teknis', 'Membahas Prosedur Pemeriksaan', 'Ruang Rapat Gitzjeling', '2021-02-05', 'Membahas Makan2', 15, '', 1, '18:00:00', '22:00:00', 'Sangat Penting'),
(6, 'ST-10/PJ.0442/2021', '2021-02-17', 'Subdirektorat Transaksi Khusus WP Badan', 'Membahas Teknik Pemeriksaan WP OP', 'Zoom Meeting (ID 894 7013 0257) Pass Kelas Derik', '2021-02-18', '', 0, '', 1, '09:00:00', '21:00:00', 'Penting'),
(7, 'UND-07/WPJ.04/2021', '2021-02-18', 'SubDirektorat Kerjasama dan Dukungan Pemeriksaan', 'Membahas Nasi Uduk', 'Ruang Pak Ade', '2021-02-22', '', 0, '', 1, '08:00:00', '10:00:00', 'Penting');

-- --------------------------------------------------------

--
-- Table structure for table `rapat_subdit`
--

CREATE TABLE `rapat_subdit` (
  `id_rp` int(5) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `unit` varchar(50) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `tdklanjut` varchar(100) NOT NULL,
  `pic` int(1) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapat_subdit`
--

INSERT INTO `rapat_subdit` (`id_rp`, `nomor`, `tanggal`, `unit`, `agenda`, `tempat`, `waktu`, `tdklanjut`, `pic`, `ket`, `status`) VALUES
(1, 'a', '0000-00-00', 'a', 'a', 'KPP Medan Kota', '2020-03-11', 'ya', 1, 'tidak ada', 0),
(2, 'Und 2', '2020-03-11', 'P2', 'a', 'Lantai 2', '2020-03-12', 'ya', 4, 'uy', 0),
(3, '1', '2020-03-11', 'P2', 'Sosialisasi Desktop Pemeriksaan', 'KPP Medan Kota', '2020-03-12', '', 9, '', 0),
(4, 'ND-123/PJ.00/2020', '2020-03-11', 'Kersduk', 'Rapat Pembinaan', 'Ruang Cakti Lt 15', '2020-03-13', '', 1, '', 0),
(5, 'UND-01/PJ.04/2021', '2021-01-27', 'SubDirektorat Transaksi Khusus', 'Membahas Prosedur Pemeriksaan Transaksi Afiliasi', 'Ruang Rapat Direktur', '2021-02-08', '', 10, 'Makan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realisasi_rki`
--

CREATE TABLE `realisasi_rki` (
  `id_realisasi` int(2) NOT NULL,
  `id_keg` int(2) NOT NULL,
  `id_rki` int(2) NOT NULL,
  `id_uraian` int(2) NOT NULL,
  `id_rko` int(2) NOT NULL,
  `id_peg` int(2) NOT NULL,
  `nama_realisasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `vol` int(2) NOT NULL,
  `val` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `reg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realisasi_rki`
--

INSERT INTO `realisasi_rki` (`id_realisasi`, `id_keg`, `id_rki`, `id_uraian`, `id_rko`, `id_peg`, `nama_realisasi`, `tanggal`, `vol`, `val`, `status`, `reg`) VALUES
(1, 4, 5, 222, 63, 21, 'Menu 1', '2020-01-12', 1, 0, 0, ''),
(2, 4, 5, 222, 63, 21, 'Menu 2', '2020-01-12', 1, 0, 0, ''),
(3, 4, 5, 222, 63, 21, 'Menu 3', '2020-01-12', 1, 0, 0, ''),
(4, 4, 5, 222, 63, 21, 'Mengubah Tampilan', '2020-01-12', 0, 0, 0, ''),
(5, 3, 3, 1, 25, 16, 'Memelihara Dams', '0000-00-00', 7, 1, 0, ''),
(6, 4, 5, 222, 63, 21, 'Realisasi 1 ', '2020-01-12', 1, 1, 1, ''),
(7, 4, 5, 222, 63, 21, 'Realisasi 2', '2020-01-12', 1, 1, 1, ''),
(8, 184, 453, 223, 65, 21, 'Realisasi 1 ', '2020-08-12', 1, 1, 1, ''),
(9, 185, 197, 222, 63, 22, 'ts', '2020-08-12', 1, 1, 1, ''),
(10, 186, 454, 52, 35, 2, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keua', '0000-00-00', 1, 1, 1, ''),
(11, 0, 0, 0, 0, 0, 'Membuat tabel untuk tampilan Dashboard Pemeriksaan', '2020-10-20', 1, 0, 1, ''),
(12, 4, 5, 222, 63, 21, 'test', '2020-12-23', 1, 0, 1, ''),
(13, 448, 544, 225, 66, 14, 'Tarikan data', '2021-01-08', 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `rki_pegawai`
--

CREATE TABLE `rki_pegawai` (
  `id_rkipeg` int(2) NOT NULL,
  `id_rko` int(2) NOT NULL,
  `id_uraian` int(2) NOT NULL,
  `id_rki` int(2) NOT NULL,
  `pic` int(2) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `input` varchar(100) NOT NULL,
  `output` varchar(100) NOT NULL,
  `outcome` varchar(100) NOT NULL,
  `volume` varchar(10) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jgk_waktu` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `ind` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `risiko` varchar(100) NOT NULL,
  `sistem` varchar(50) NOT NULL,
  `mitigasi` varchar(100) NOT NULL,
  `terkait` varchar(50) NOT NULL,
  `realisasi` int(2) NOT NULL,
  `validasi` int(1) NOT NULL,
  `status` int(11) NOT NULL,
  `reg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rki_pegawai`
--

INSERT INTO `rki_pegawai` (`id_rkipeg`, `id_rko`, `id_uraian`, `id_rki`, `pic`, `kegiatan`, `input`, `output`, `outcome`, `volume`, `satuan`, `jgk_waktu`, `waktu`, `ind`, `ket`, `risiko`, `sistem`, `mitigasi`, `terkait`, `realisasi`, `validasi`, `status`, `reg`) VALUES
(1, 25, 1, 1, 21, 'Menambah Menu Baru', 'a', 'a', 'a', '4', 'Menu', '12', 'Bulan', 'a', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, ''),
(2, 25, 1, 2, 21, 'Ubah Tampilab', 'a', 'a', 'a', '1', 'Kegiatan', '12', 'Bulan', 'a', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, ''),
(3, 25, 1, 3, 16, 'Memelihara', 'akaa', 'aka', 'aka', '15', 'Kegiatan', '2', 'Hari Kerja', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 0, ''),
(4, 63, 222, 5, 21, 'Kegiatan RKI User Simulasi', 'Input', 'output', 'outcome', '12', 'Kegiatan', '12', 'Bulan', 'Indikator', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 0, 1, 1, ''),
(5, 25, 5, 6, 15, 'Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Tambahan Menu/Update Data', 'Tersedianya data real-time sesuai dengan kebutuhan manajerial', '12', 'Kegiatan', '12', 'Hari Kerja', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Koordinasi aktif dengan Dit. DKB untuk melakukan pemutakhiran data hasil sengketa pajak', 'Dit. DKB', 0, 0, 0, ''),
(6, 25, 10, 7, 15, 'Penyusunan Laporan Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Laporan Berkala', 'Pertanggungjawaban pelaksanaan kegiatan', '4', 'Laporan', '10', 'Hari Kerja', 'Laporan dapat Terselesaikan tepat waktu', '-', 'Melewati batas waktu pelaporan', '-', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 0, ''),
(7, 28, 15, 8, 15, 'Membuat Training Need Analysis (TNA) atas kebutuhan penyelenggaraan kegiatan peningkatan kapasitas', 'Data penyelenggaraan diklat', 'Training Need Analysis (TNA)', 'Penyelenggaraan kegiatan peningkatan kapasitas sesuai dengan kebutuhan', '1', 'Naskah', '3', 'Bulan', 'Penyusunan naskah pelaksanaan secara tepat waktu', '-', 'Terdapat kegiatan peningkatan kapasitas pegawai yang tidak teridentifikasi yang dibutuhkan oleh pega', '-', 'Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen u', 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Paj', 0, 0, 0, ''),
(8, 29, 21, 9, 15, 'Penambahan menu clustering kekalahan hasil putusan sengketa pajak pada Aplikasi Databaase Sengketa Pajak secara bertahap', 'Clustering kekalahan atas putusan sengketa pajak', 'Menu baru pada Aplikasi Database Sengketa Pajak', 'Tercipta Knowledge Management hasil putusan sengketa pajak guna pemeriksaan selanjutnya', '1', 'Menu', '1', 'Bulan', 'Tersedia menu baru', '-', 'Tidak ada penambahan menu baru', '-', 'Pengembangan menu baru secara bertahap', 'Dukungan Teknis Pemeriksaan', 0, 0, 0, ''),
(9, 25, 2, 10, 14, 'Pemeliharaan Aplikasi Monitoring Tunggakan', 'Data Tunggakan dan Progres Pemeriksaan', 'Tambahan Menu/Update Data', 'Tersedianya data real-time sesuai dengan kebutuhan manajerial', '12', 'Kegiatan', '12', 'Hari Kerja', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Menginventarisasi permintaan pemutakhiran data dan menindaklanjutinya sesegera mungkin', 'Subdit Perencanaan', 0, 0, 0, ''),
(10, 25, 3, 11, 14, 'Pemeliharaan Aplikasi Manajemen Pemeriksaan Pajak', 'Dokumentasi Pemeriksaan', 'Tambahan Menu/Update Data', 'Tersedianya data real-time sesuai dengan kebutuhan manajerial', '12', 'Kegiatan', '12', 'Hari Kerja', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Berkoordinasi dengan Dit. TIK dan Dit. DIP jika ada masalah ketidaksamaan sumber data', 'Dit. DIP, Dit. TIK', 0, 0, 0, ''),
(11, 25, 4, 12, 14, 'Pemeliharaan Aplikasi Digitalisasi LHP', 'Dokumentasi Pemeriksaan', 'Tambahan Menu/Update Data', 'Tercapainya penatausahaan dokumen secara tertib administrasi', '12', 'Kegiatan', '12', 'Hari Kerja', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Kordinasi dengan Unit terkait', 'Fungsional Pemeriksa Pajak', 0, 0, 0, ''),
(12, 26, 12, 13, 14, 'Pengembangan Aplikasi Daily Activity Monitoring Systems lingkup Subdit', 'Rencana Kinerja Organisasi (RKO) dan Rencana Kerja Individu (RKI)', 'Aplikasi Daily Activity Monitoring Systems lingkup Subdit', 'Tersedianya monitoring pelaksanaan rencana kerja dan realisasinya (lingkup Subdit)', '1', 'Aplikasi', '3', 'Bulan', 'Tersedianya aplikasi sesuai kebutuhan', '-', 'Tidak terpenuhinya permintaan aplikasi sesuai kebutuhan', '-', 'Mengetahui kebutuhan aplikasi', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 0, ''),
(13, 27, 14, 14, 14, 'Penarikan dan pengolahan data serta penyajian data', 'ND Permintaan Data', 'Raw Data', 'Tersedia data yang valid guna kepentingan monitoring dan evaluasi kinerja pemeriksaan atau pengambil', '12', 'Raw Data', '12', 'Bulan', 'Terpenuhinya kebutuhan data secara tepat waktu', '-', 'Tidak terpenuhinya data secara tepat waktu', '-', 'Mendokumentasikan semua script penarikan data ', 'Semua Subdit', 0, 0, 0, ''),
(14, 29, 20, 16, 14, 'Penambahan menu clustering koreksi pemeriksaan pada Aplikasi Digitalisasi LHP secara bertahap', 'Clustering Koreksi pada LHP', 'Menu baru pada Aplikasi Digitalisasi LHP', 'Tercipta Knowledge Management atas hasil pemeriksaan', '1', 'Menu', '1', 'Bulan', 'Tersedia menu baru', '-', 'Tidak ada penambahan menu baru', '-', 'Pengembangan menu baru secara bertahap', 'Dukungan Teknis Pemeriksaan', 0, 0, 0, ''),
(15, 30, 24, 17, 14, 'Penyusunan Cetak biru tata kelola TIK pemeriksaan', 'Data Pemeriksaan', 'Cetak Biru Tata Kelola TIK Pemeriksaan', 'Tercipta tata kelola TIK Pemeriksaan yang rapi guna menghasilkan data yang valid berdasarkan satu su', '1', 'Cetak Biru', '6', 'Bulan', 'Tersusunnya cetak biru tepat waktu', '-', 'Tidak tersusunnya cetak biru tata kelola TIK sehingga data pemeriksaan masih belum satu sumber dan b', '-', 'Koordinasi dengan Direktorat TIK, Dit. DIP, dan UP2 tentang validitas sumber data yang digunakan', 'Dit. DIP, Dit. TIK, Subdit lain terkait', 0, 0, 0, ''),
(16, 31, 32, 18, 14, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas kegiatan', 'Kegiatan', 'Terselenggaranya kegiatan dengan baik', '1', 'Kegiatan', '2', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '-', 'Tidak terlaksananya launching dengan baik', '-', 'Berkoordinasi dengan pihak terkait', 'Kanwil, Organta, Subdit Perencanaan Pemeriksaan', 0, 0, 0, ''),
(17, 31, 35, 19, 14, 'Pengurusan korespondensi terkait pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya informasi  kegiatan', '1', 'Nota Dinas', '4', 'Bulan', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan ', '-', 'Berkoordinasi dengan pihak terkait', 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua ', 0, 0, 0, ''),
(18, 31, 36, 20, 14, 'Penyusunan Laporan Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi hasil kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban pelaksanaan kegiatan', '1', 'Laporan Ke', '10', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun konsep laporan dengan segera', '-', 0, 0, 0, ''),
(19, 31, 37, 21, 14, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'SPD', 'Terbayarkannya segala akomodasi dalam menjalankan perjalanan dinas', '1', 'Berkas', '10', 'Hari Kerja', 'Terbayarkan sesuai dengan bukti yang ada', '-', 'Biaya perjalanan dinas tidak tergantikan', '-', 'Berkoordinasi dengan pihak terkait', 'Pelaksana Kegiatan, Bendahara Dit. P2', 0, 0, 0, ''),
(20, 32, 40, 22, 14, 'Permintaan Sarana dan Prasarana Laboratorium e-Auditor', 'Kebutuhan Sarana dan Prasarana ', 'Nota Dinas', 'Tersedia Sarana dan Prasarana Lab e-Auditor', '1', 'Nota Dinas', '3', 'Bulan', 'Tersedianya sarana dan prasarana laboratorium', '-', 'Tidak tersedianya sarana dan prasarana Laboratorium e-Auditor', '-', 'Mengidentifikasi kebutuhan sarana dan prasarana Laboratorium dengan segera', 'Dit. TIK', 0, 0, 0, ''),
(21, 32, 42, 23, 14, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan baik', '1', 'Kegiatan', '3', 'Hari Kerja', 'Laboratorium berfungsi dengan baik', '-', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 0, ''),
(22, 34, 51, 24, 14, 'Penyusunan Modul terkait e-Audit', 'Materi e-Audit', 'Modul', 'Terdapat Panduan dalam Pelaksanaan e-Audit', '1', 'Modul', '2', 'Bulan', 'Tersusunnya Modul', '-', 'Tidak tersusunnya modul e-Audit', '-', 'Berkoordinasi dengan pihak terkait', 'Tim e-Auditor', 0, 0, 0, ''),
(23, 34, 50, 25, 16, 'Penyusunan draft Surat Edaran terkait Data Elektronik', 'Pengelolaan Data Elektronik', 'Konsep SE', 'Terdapat Kejelasan Dasar Hukum tentang Penanganan Data Elektronik', '1', 'Surat', '10', 'Bulan', 'Penetapan Surat Edaran', '-', 'Tidak ditetapkannya Surat Edaran tentang data elektronik', '-', 'Berkoordinasi dengan pihak terkait', 'Dit. Transformasi Proses Bisnis, Dit. Penegakan Hu', 0, 0, 0, ''),
(24, 33, 45, 26, 16, 'Permintaan Bantuan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Nota Dinas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya tenaga ahli', '-', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 0, ''),
(25, 33, 46, 27, 16, 'Pembuatan penugasan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Surat Tugas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', 'Surat Tuga', '12', 'Bulan', 'Tersedianya Tenaga Ahli', '-', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 0, ''),
(26, 32, 41, 28, 16, 'Penyusunan Naskah Akademis tentang Laboratorium e-Auditor', 'Konsep Laboratorium', 'Naskah Akademis tentang Laboratorium e-Auditor', 'Terdapat Kejelasan Konsep dan Standar Lab e-Auditor', '1', 'Naskah Aka', '3', 'Bulan', 'Tersedia konsep laboratorium', '-', 'Tidak ada konsep tentang Laboratorium e-Auditor yang jelas', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 0, ''),
(27, 31, 31, 29, 16, 'Pengurusan korespondensi terkait pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi Kegiatan', '1', 'Nota Dinas', '10', 'Hari Kerja', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan', '-', 'Berkoordinasi dengan pihak terkait', 'Kanwil, Organta, Subdit Perencanaan Pemeriksaan', 0, 0, 0, ''),
(28, 25, 5, 32, 15, 'Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Tambahan Menu/Update Data', 'Tersedianya Data Real-Time Sesuai dengan Kebutuhan Manajerial', '12', 'Kegiatan', '12', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Koordinasi aktif dengan Dit. DKB untuk melakukan pemutakhiran data hasil sengketa pajak', 'Dit. DKB', 0, 1, 1, ''),
(29, 25, 10, 33, 15, 'Penyusunan Laporan Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Laporan Berkala', 'Pertanggungjawaban pelaksanaan kegiatan', '4', 'Laporan', '10', 'Hari Kerja', 'Laporan dapat Terselesaikan tepat waktu', '-', 'Melewati batas waktu pelaporan', '-', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 1, 1, ''),
(30, 27, 14, 34, 15, 'Penarikan dan pengolahan data serta penyajian data', 'ND Permintaan Data', 'Raw Data', 'Tersedia Data yang Valid guna kepentingan monitoring dan evaluasi kinerja pemeriksaan atau pengambil', '12', 'Raw Data', '12', 'Bulan', 'Terpenuhinya kebutuhan data secara tepat waktu', '-', 'Tidak terpenuhinya data secara tepat waktu', '-', 'Mendokumentasikan semua script penarikan data', 'Semua Subdit', 0, 1, 1, ''),
(31, 28, 15, 35, 15, 'Membuat Training Need Analysis (TNA) atas kebutuhan penyelenggaraan kegiatan peningkatan kapasitas', 'Data penyelenggaraan diklat', 'Training Need Analysis (TNA)', 'Penyelenggaraan Kegiatan Peningkatan Kapasitas Sesuai dengan Kebutuhan', '1', 'Naskah', '3', 'Bulan', 'Penyusunan naskah pelaksanaan secara tepat waktu', '-', 'Terdapat kegiatan peningkatan kapasitas pegawai yang tidak teridentifikasi yang dibutuhkan oleh pega', '-', 'Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen u', 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Paj', 0, 0, 1, ''),
(32, 29, 21, 36, 15, 'Pembuatan Clustering Kekalahan Hasil Putusan Sengketa Pajak pada Aplikasi Database Sengketa Pajak Secara Bertahap', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Clustering Koreksi pada Laporan Hasil Pemeriksaan (LHP)', 'Tercipta Database Kekalahan dalam Sengketa Pajak', '1', 'Clustering', '12', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Tidak tercluster kekalahan hasil sengketa pajak dengan baik', '-', 'Clusterings secara berkala', 'Dukungan Teknis Pemeriksaan', 0, 1, 1, ''),
(33, 29, 23, 37, 15, 'Penambahan Menu Clustering Kekalahan Hasil Putusan Sengketa Pajak pada Aplikasi Database Sengketa Pajak secara Bertahap', 'Clustering Kekalahan atas Utusan Sengketa Pajak', 'Menu Baru pada Aplikasi Database Sengketa Pajak', 'Tercipta Knowledge Management Hasil Putusan Sengketa Pajak Guna Pemeriksaan Selanjutnya', '1', 'Menu', '1', 'Bulan', 'Tersedia menu baru', '-', 'Tidak ada penambahan menu baru', '-', 'Pengembangan menu baru secara bertahap', 'Dukungan Teknis Pemeriksaan', 0, 1, 1, ''),
(34, 30, 24, 38, 15, 'Penyusunan Cetak Biru Tata Kelola TIK Pemeriksaan', 'Data Pemeriksaan', 'Cetak Biru Tata Kelola TIK Pemeriksaan', 'Tercipta Tata kTelola TIK Pemeriksaan yang Rapi Guna Menghasilkan Data yang Valid Berdasarkan Satu S', '1', 'Cetak Biru', '6', 'Bulan', 'Tersusunnya cetak biru tepat waktu', '-', 'Tidak tersusunnya cetak biru tata kelola TIK sehingga data pemeriksaan masih belum satu sumber dan b', '-', 'Koordinasi dengan Direktorat TIK, Dit. DIP, dan UP2 tentang validitas sumber data yang digunakan ', 'Dit. DIP, Dit. TIK, Subdit lain terkait', 0, 1, 1, ''),
(35, 31, 28, 39, 15, 'Penyusunan Draft Surat Edaran terkait Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Draft Surat Edaran (SE)', 'Tercipta Dasar Hukum dan Panduan dalam Penggunaan Aplikasi', '1', 'Draft Sura', '9', 'Bulan', 'Penetapan Surat Edaran', '-', 'Tidak ditetapkannya SE Aplikasi Desktop Pemeriksaan', '-', 'Koordinasi dengan Dit. TPB', 'Dit. TPB, Staf Ahli', 0, 0, 1, ''),
(36, 31, 29, 40, 15, 'Penyusunan dan Pencetakan Manual Book Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Manual Book Aplikasi', 'Tercipta Panduan Penggunaan Aplikasi', '1', 'Manual Boo', '1', 'Bulan', 'Tercetaknya manual book', '-', 'Tidak tercetaknya Manual Book', '-', 'Pembentukan tim penyusun Manual Book dan melakukan pembagian tugas dengan baik', 'Dit. TIK, Fungsional Pemeriksa Pajak (FPP) yang te', 0, 0, 1, ''),
(37, 31, 32, 41, 15, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas Kegiatan', 'Kegiatan', 'Terselenggaranya Kegiatan dengan Baik ', '1', 'Kegiatan', '2', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '-', 'Tidak terlaksananya launching dengan baik', '-', 'Berkoordinasi dengan pihak terkait', 'Kantor Wilayah DJP, Dit. Organisasi dan Tatalaksan', 0, 1, 1, ''),
(38, 31, 35, 42, 15, 'Pengurusan Korespondensi Terkait Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya informasi  kegiatan', '1', 'Nota Dinas', '4', 'Bulan', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan', '-', 'Berkoordinasi dengan pihak terkait', 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua ', 0, 0, 1, ''),
(39, 31, 36, 43, 15, 'Penyusunan Laporan Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '1', 'Laporan Ke', '10', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun konsep laporan dengan segera', '-', 0, 0, 1, ''),
(40, 31, 37, 44, 15, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'Surat Perjalanan Dinas (SPD)', 'Terbayarkannya Segala Akomodasi dalam Menjalankan Perjalanan Dinas', '1', 'Berkas', '10', 'Bulan', 'Terbayarkan sesuai dengan bukti yang ada', '-', 'Biaya perjalanan dinas tidak tergantikan', '-', 'Berkoordinasi dengan pihak terkait', 'Pelaksana Kegiatan, Bendahara Dit. P2', 0, 0, 1, ''),
(41, 32, 42, 45, 15, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan Baik', '1', 'Kegiatan', '3', 'Bulan', 'Laboratorium berfungsi dengan baik', '-', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(42, 34, 49, 46, 15, 'Penyusunan Draft Surat Edaran Terkait e-Auditor', 'Proses Bisnis e-Audit', 'Konsep Surat Edaran (SE)', 'Terdapat Kejelasan Dasar Hukum dan Standardisasi Tugas Tenaga e-Auditor dalam Membantu Pelaksanaan e', '1', 'Surat', '10', 'Bulan', 'Penetapan Surat Edaran (SE)', '-', 'Tidak ditetapkannya SE terkait e-Auditor', 'SE-25/PJ/2013 tentang Pedoman E-Audit', 'Berkoordinasi dengan pihak terkait', 'Dit. TPB, Staff Ahli', 0, 0, 1, ''),
(43, 34, 51, 47, 15, 'Penyusunan Modul Terkait e-Audit', 'Materi e-Audit', 'Modul', 'Terdapat Panduan dalam Pelaksanaan e-Audit', '1', 'Modul Terk', '2', 'Bulan', 'Tersusunnya Modul', '-', 'Tidak tersusunnya modul e-Audit', '-', 'Berkoordinasi dengan pihak terkait', 'Tim e-Auditor', 0, 0, 1, ''),
(44, 25, 2, 49, 16, 'Pemeliharaan Aplikasi Monitoring Tunggakan', 'Data Tunggakan dan Progres Pemeriksaan', 'Tambahan Menu/Update Data', 'Tersedianya Data Real-Time Sesuai dengan Kebutuhan Manajerial', '12', 'Kegiatan', '12', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '-', 'Menginventarisasi permintaan pemutakhiran data dan menindaklanjutinya sesegera mungkin', 'Subdit Perencanaan', 0, 0, 1, ''),
(45, 28, 15, 50, 16, 'Membuat Training Need Analysis (TNA) atas kebutuhan penyelenggaraan kegiatan peningkatan kapasitas', 'Data Penyelenggaraan Diklat', 'Training Need Analysis (TNA)', 'Penyelenggaraan Kegiatan Peningkatan Kapasitas Sesuai dengan Kebutuhan', '1', 'Naskah', '3', 'Bulan', 'Penyusunan naskah pelaksanaan secara tepat waktu', '-', 'Terdapat kegiatan peningkatan kapasitas pegawai yang tidak teridentifikasi yang dibutuhkan oleh pega', '-', 'Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen u', 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Paj', 0, 0, 1, ''),
(46, 29, 20, 51, 16, 'Pembuatan clustering koreksi pemeriksaan dari Aplikasi Digitalisasi LHP secara bertahap', 'Laporan Hasil Pemeriksaan (LHP)', 'Clustering Koreksi pada LHP', 'Tercipta Database Koreksi Pemeriksaan per Wajib Pajak', '1', 'Clustering', '12', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Tidak tercluster koreksi pemeriksaan dengan baik', '-', 'Clustering secara berkala ', 'Dukungan Teknis Pemeriksaan', 0, 1, 1, ''),
(47, 31, 26, 52, 16, 'Pembuatan Cetak Biru Aplikasi Desktop Pemeriksaan', 'Konsep Pengembangan Aplikasi', 'Cetak Biru Aplikasi Desktop Pemeriksaan', 'Menyedikan Tools ntuk Membantu Pemeriksa Pajak dalam Rangka Mencapai Pemeriksaan yang Efektif', '1', 'Cetak Biru', '3', 'Bulan', 'Tersusunnya cetak biru tepat waktu', '-', 'Tidak tersusunnya cetak biru aplikasi Desktop Pemeriksaan', '-', 'Koordinasi dengan Subdit lain dan Direktorat terkait', 'UP2, Dit. TIK, Dit. DIP, SUBDIT Teknik dan Pengend', 0, 1, 1, ''),
(48, 31, 30, 53, 16, 'Penyusunan dan Pencetakan Modul FAQ Aplikasi Desktop Pemeriksaan', 'Daftar Pertanyaan User', 'Modul FAQ Aplikasi', 'Kemudahan User dalam Mencari Pemecahan Masalah Dalam Penggunaan Aplikasi', '1', 'Modul FAQ ', '1', 'Bulan', 'Tercetaknya modul FAQ', '-', 'Tidak tercetaknya modul FAQ', '-', 'Pembentukan tim penyusun modul FAQ dan melakukan pembagian tugas dengan baik', 'Dit. TIK, Fungsional Pemeriksa Pajak yang terlibat', 0, 1, 1, ''),
(49, 31, 31, 54, 16, 'Pengurusan Korespondensi Terkait Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi  Kegiatan', '1', 'Nota Dinas', '10', 'Hari Kerja', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan ', '-', 'Berkoordinasi dengan pihak terkait', 'Kantor Wilayah DJP, Dit. Organta, Subdit Perencana', 0, 0, 1, ''),
(50, 31, 32, 55, 16, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas Kegiatan', 'Kegiatan', 'Terselenggaranya Kegiatan dengan Baik ', '1', 'Kegiatan', '2', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '-', 'Tidak terlaksananya launching dengan baik', '-', 'Berkoordinasi dengan pihak terkait', 'Kantor Wilayah DJP, Dit. Organisasi dan Tatalaksan', 0, 0, 1, ''),
(51, 31, 35, 56, 16, 'Pengurusan Korespondensi Terkait Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi  Kegiatan', '1', 'Nota Dinas', '4', 'Bulan', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan ', '-', 'Berkoordinasi dengan pihak terkait', 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua ', 0, 0, 1, ''),
(52, 31, 33, 57, 16, 'Penyusunan Laporan Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '1', 'Laporan Ke', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun konsep laporan dengan segera', '-', 0, 0, 1, ''),
(53, 31, 37, 58, 16, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'Surat Perjalanan Dinas (SPD)', 'Terbayarkannya Segala Akomodasi dalam Menjalankan Perjalanan Dinas', '1', 'Berkas', '10', 'Bulan', 'Terbayarkan sesuai dengan bukti yang ada', '-', 'Biaya perjalanan dinas tidak tergantikan', '-', 'Berkoordinasi dengan pihak terkait', 'Pelaksana Kegiatan, Bendahara Dit. P2', 0, 0, 1, ''),
(54, 31, 38, 59, 16, 'Pelaksanaan Evaluasi Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Lembar Evaluasi', 'Terselenggaranya Kegiatan dengan Baik ', '3', 'Lembar Eva', '4', 'Bulan', 'Teridentifikasi masalah penggunaan aplikasi di lapangan', '-', 'Tidak ada evaluasi untuk perbaikan pengembangan aplikasi selanjutnya', '-', 'Berkoordinasi dengan pihak terkait untuk melaksanakan evaluasi sesegera mungkin', 'Dit.. TIK, Dit. DIP', 0, 0, 1, ''),
(55, 32, 41, 60, 16, 'Penyusunan Naskah Akademis tentang Laboratorium e-Auditor', 'Konsep Laboratorium', 'Naskah Akademis tentang Laboratorium e-Auditor', 'Terdapat Kejelasan Konsep dan Standar Lab e-Auditor ', '1', 'Naskah Aka', '3', 'Bulan', 'Tersedia konsep laboratorium', '-', 'Tidak ada konsep tentang Laboratorium e-Auditor yang jelas', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(56, 32, 42, 61, 16, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan Baik', '1', 'Kegiatan', '3', 'Bulan', 'Laboratorium berfungsi dengan baik', '-', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(57, 33, 45, 62, 16, 'Permintaan Bantuan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Nota Dinas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya tenaga ahli', '-', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(58, 33, 46, 63, 16, 'Pembuatan penugasan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Surat Tugas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', 'Surat Tuga', '12', 'Bulan', 'Tersedianya Tenaga Ahli', '-', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(59, 34, 50, 64, 16, 'Penyusunan draft Surat Edaran terkait Data Elektronik', 'Pengelolaan Data Elektronik', 'Konsep Surat Edaran (SE) ', 'Terdapat Kejelasan Dasar Hukum tentang Penanganan Data Elektronik', '1', 'Surat', '10', 'Bulan', 'Penetapan Surat Edaran', '-', 'Tidak ditetapkannya Surat Edaran tentang data elektronik', '-', 'Berkoordinasi dengan pihak terkait', 'Dit. Transformasi Proses Bisnis, Dit. Penegakan Hu', 0, 0, 1, ''),
(60, 34, 51, 65, 16, 'Penyusunan Modul Terkait e-Audit', 'Materi e-Audit', 'Modul', 'Terdapat Panduan dalam Pelaksanaan e-Audit', '1', 'Modul Terk', '2', 'Bulan', 'Tersusunnya Modul', '-', 'Tidak tersusunnya modul e-Audit', '-', 'Berkoordinasi dengan pihak terkait', 'Tim e-Auditor', 0, 0, 1, ''),
(61, 25, 6, 66, 16, 'Penyusunan Laporan Pemeliharaan Aplikasi Dashboard Pemeriksaan', 'Penerimaan', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', 'Laporan', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 1, ''),
(62, 25, 9, 85, 13, 'Penyusunan Laporan Pemeliharaan Aplikasi Digitalisasi LHP', 'Laporan Hasil Pemeriksaan (LHP)', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', 'Laporan', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 1, ''),
(63, 25, 11, 86, 13, 'Pemberitahuan Evaluasi Upload LHP pada Aplikasi Digitalisasi LHP', 'Data Penyelesaian Pemeriksaan', 'Nota Dinas', 'Terciptanya Ketertiban Dokumentasi Pemeriksaan', '4', 'Nota Dinas', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Keterlambatan pemberitahuan evaluasi upload LHP', '-', 'Melakukan monitoring secara berkala atas kegiatan upload LHP', 'Fungsional Pemeriksa Pajak', 0, 1, 1, ''),
(64, 27, 13, 87, 13, 'Pemetaan Kebutuhan Data ', 'Nota Dinas Permintaan Data', 'Laporan Berkala Laporan Insidentil', 'Tersedianya Kebutuhan Data yang Sering Diminta dan Tersajinya Data Sesuai dengan Kebutuhan', '12', 'Laporan/No', '12', 'Bulan', 'Terpenuhi semua permintaan data secara tepat waktu', '-', 'Tidak terpenuhinya permintaan data secara tepat waktu', '-', 'Aktif memetakan jenis data yang sering diminta oleh Subdit lain', 'Semua Subdit', 0, 0, 1, ''),
(65, 28, 15, 88, 13, 'Membuat Training Need Analysis (TNA) atas Kebutuhan Penyelenggaraan Kegiatan Peningkatan Kapasitas', 'Data Penyelenggaraan Diklat', 'Training Need Analysis (TNA)', 'Penyelenggaraan Kegiatan Peningkatan Kapasitas Sesuai dengan Kebutuhan', '1', 'Naskah', '3', 'Bulan', 'Penyusunan naskah pelaksanaan secara tepat waktu', '-', 'Terdapat kegiatan peningkatan kapasitas pegawai yang tidak teridentifikasi yang dibutuhkan oleh pega', '-', 'Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen u', 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Paj', 0, 1, 1, ''),
(66, 28, 19, 89, 13, 'Peningkatan Kualitas SDM Pegawai Lainnya.', 'Kebutuhan Peningkatan Kapasitas Bagi Pegawai', 'ND Usulan Penyelenggaraan Kegiatan', 'Tercipta Pelatihan Bagi Pegawai Subdit untuk Menunjang Peningkatan Kapasitas dan Kompetensi Pegawai', '3', 'Kegiatan', '9', 'Bulan', 'Terlaksana tepat waktu', '-', 'Tidak terselenggaranya kegiatan peningkatan kualitas SDM pegawai lainnya', '-', 'Berkoordinasi dengan pihak terkait', 'Semua seksi di subdit Kerjsama dan Dukungan Pemeri', 0, 0, 1, ''),
(67, 29, 20, 90, 13, 'Pembuatan Clustering Koreksi Pemeriksaan dari Aplikasi Digitalisasi LHP Secara Bertahap', 'Laporan Hasil Pemeriksaan (LHP)', 'Clustering Koreksi pada LHP', 'Tercipta Database Koreksi Pemeriksaan per Wajib Pajak', '1', 'Clustering', '12', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Tidak tercluster koreksi pemeriksaan dengan baik', '-', 'Clustering secara berkala', 'Dukungan Teknis Pemeriksaan', 0, 0, 1, ''),
(68, 31, 25, 91, 13, 'Pembuatan Analisis Kebutuhan Pengembangan Aplikasi Desktop Pemeriksaan Selanjutnya', 'Identifikasi Proses Bisnis Pemeriksaan', 'Lembar Identifikasi Kebutuhan Pengembangan Aplikasi', 'Teridenifikasinya Kebutuhan Pengembangan Aplikasi', '1', 'Lembar Ide', '3', 'Bulan', 'Tersusunnya lembar identifikasi', '-', 'Tidak teridentifikasinya kebutuhan user', '-', 'Menerima masukan dari UP2 pada saat sosialisasi aplikasi demi penyempurnaan lebih lanjut Koordinasi ', 'UP2, Dit. TIK, Dit. DIP, SUBDIT Teknik dan Pengend', 0, 0, 1, ''),
(69, 31, 30, 92, 13, 'Penyusunan dan Pencetakan Modul FAQ Aplikasi Desktop Pemeriksaan', 'Daftar Pertanyaan User', 'Modul FAQ Aplikasi', 'Kemudahan User dalam Mencari Pemecahan Masalah Dalam Penggunaan Aplikasi', '1', 'Modul FAQ ', '1', 'Bulan', 'Tercetaknya modul FAQ', '-', 'Tidak tercetaknya modul FAQ', '-', 'Pembentukan tim penyusun modul FAQ dan melakukan pembagian tugas dengan baik', 'Dit. TIK, Fungsional Pemeriksa Pajak yang terlibat', 0, 0, 1, ''),
(70, 31, 32, 93, 13, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas Kegiatan', 'Kegiatan', 'Terselenggaranya Kegiatan dengan Baik', '1', 'Kegiatan', '2', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '-', 'Tidak terlaksananya launching dengan baik', '-', 'Berkoordinasi dengan pihak terkait', 'Kantor Wilayah DJP, Dit. Organisasi dan Tatalaksan', 0, 0, 1, ''),
(71, 31, 35, 94, 13, 'Pengurusan Korespondensi Terkait Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi Kegiatan', '1', 'Nota Dinas', '4', 'Bulan', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan', '-', 'Berkoordinasi dengan pihak terkait', 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua ', 0, 0, 1, ''),
(72, 31, 37, 95, 13, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'Surat Perjalanan Dinas (SPD)', 'Terbayarkannya Segala Akomodasi dalam Menjalankan Perjalanan Dinas', '1', 'Berkas', '10', 'Bulan', 'Terbayarkan sesuai dengan bukti yang ada', '-', 'Biaya perjalanan dinas tidak tergantikan', '-', 'Berkoordinasi dengan pihak terkait', 'Pelaksana Kegiatan, Bendahara Dit. P2', 0, 0, 1, ''),
(73, 31, 38, 96, 13, 'Pelaksanaan Evaluasi Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Lembar Evaluasi', 'Terselenggaranya Kegiatan dengan Baik', '3', 'Lembar Eva', '4', 'Bulan', 'Teridentifikasi masalah penggunaan aplikasi di lapangan', '-', 'Tidak ada evaluasi untuk perbaikan pengembangan aplikasi selanjutnya', '-', 'Berkoordinasi dengan pihak terkait untuk melaksanakan evaluasi sesegera mungkin', 'Dit.. TIK, Dit. DIP', 0, 1, 1, ''),
(74, 32, 39, 97, 13, 'Permintaan Ruangan Laboratorium e-Auditor', 'Kebutuhan Ruangan', 'Nota Dinas', 'Tersedianya Ruangan Lab e-Auditor', '1', 'Nota Dinas', '3', 'Bulan', 'Tersedianya ruangan laboratorium', '-', 'Tidak tersedianya ruangan untuk Lab e-Auditor', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Sesditjen', 0, 1, 1, ''),
(75, 32, 42, 98, 13, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan Baik', '1', 'Kegiatan', '3', 'Bulan', 'Laboratorium berfungsi dengan baik', '-', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(76, 31, 28, 99, 13, 'Penyusunan Draft Surat Edaran Terkait Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Draft Surat Edaran (SE)', 'Tercipta Dasar Hukum dan Panduan dalam Penggunaan Aplikasi', '1', 'Draft Sura', '9', 'Bulan', 'Penetapan Surat Edaran', '-', 'Tidak ditetapkannya SE Aplikasi Desktop Pemeriksaan', '-', 'Koordinasi dengan Dit. TPB', 'Dit. TPB, Staf Ahli', 0, 0, 1, ''),
(77, 34, 51, 100, 13, 'Penyusunan Modul Terkait e-Audit', 'Materi e-Audit', 'Modul', 'Terdapat Panduan dalam Pelaksanaan e-Audit', '1', 'Modul Terk', '2', 'Bulan', 'Tersusunnya Modul', '-', 'Tidak tersusunnya modul e-Audit', '-', 'Berkoordinasi dengan pihak terkait', 'Tim e-Auditor', 0, 0, 1, ''),
(78, 25, 8, 101, 12, 'Penyusunan Laporan Pemeliharaan Aplikasi Manajemen Pemeriksaan Pajak', 'Dokumentasi Pemeriksaan', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', 'Laporan', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 'Subdit Kerjasama dan Dukungan Pemeriksaan', 0, 0, 1, ''),
(79, 28, 17, 102, 12, 'Pengurusan Korespondensi Terkait Pelaksanaan Kegiatan IHT, Lokakarya, Workshop Bagi e-Auditor', 'Rencana Kegiatan', 'Nota Dinas, Surat Tugas', 'Tersampaikannya Informasi Kegiatan', '5', 'Kegiatan', '5', 'Hari Kerja', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan peningkatan kapasitas pegawai kepada pihak terkait', '-', 'Berkoordinasi dengan pihak terkait', 'UP2, FPP Dit. P2 dan subdit lain', 0, 0, 1, ''),
(80, 28, 18, 103, 12, 'Penyusunan Laporan Pelaksanaan Kegiatan  IHT, Lokakarya, Workshop Bagi e-Auditor', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '10', 'Kegiatan', '10', 'Hari Kerja', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun laporan pelaksanaan kegiatan dengan segera', '-', 0, 0, 1, ''),
(81, 29, 21, 104, 12, 'Penambahan Menu Clustering Kekalahan Hasil Putusan Sengketa Pajak pada Aplikasi Database Sengketa Pajak secara Bertahap', 'Clustering Kekalahan atas Utusan Sengketa Pajak', 'Menu Baru pada Aplikasi Database Sengketa Pajak', 'Tercipta Knowledge Management Hasil Putusan Sengketa Pajak Guna Pemeriksaan Selanjutnya', '1', 'Menu', '1', 'Bulan', 'Tersedia menu baru', '-', 'Tidak ada penambahan menu baru', '-', 'Pengembangan menu baru secara bertahap', 'Dukungan Teknis Pemeriksaan', 0, 0, 1, ''),
(82, 31, 27, 105, 12, 'Pembentukan KEP Tim Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Nama Tim', 'KEP Tim Piloting dan Implementasi Aplikasi', 'Tercipta Pembagian Tugas Dalam Tim yang Jelas', '1', 'KEP Tim', '1', 'Bulan', 'Penetapan Tim', '-', 'Tidak terbentuknya Tim Piloting dan Implementasi', '-', 'Koordinasi dengan Subdit lain dan Direktorat terkait', 'Semua Subdit, Dit. TIK, Dit. DIP, Dit. TPB, Dit. K', 0, 0, 1, ''),
(83, 31, 28, 106, 12, 'Penyusunan Draft Surat Edaran terkait Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Draft Surat Edaran (SE)', 'Tercipta Dasar Hukum dan Panduan dalam Penggunaan Aplikasi', '1', 'Draft Sura', '9', 'Bulan', 'Penetapan Surat Edaran', '-', 'Tidak ditetapkannya SE Aplikasi Desktop Pemeriksaan', '-', 'Koordinasi dengan Dit. TPB', 'Dit. TPB, Staf Ahli', 0, 0, 1, ''),
(84, 31, 29, 107, 12, 'Penyusunan dan Pencetakan Manual Book Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Manual Book Aplikasi', 'Tercipta Panduan Penggunaan Aplikasi', '1', 'Manual Boo', '1', 'Bulan', 'Tercetaknya manual book', '-', 'Tidak tercetaknya Manual Book', '-', 'Pembentukan tim penyusun Manual Book dan melakukan pembagian tugas dengan baik', 'Dit. TIK, Fungsional Pemeriksa Pajak (FPP) yang te', 0, 0, 1, ''),
(85, 31, 32, 108, 12, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas Kegiatan', 'Kegiatan', 'Terselenggaranya Kegiatan dengan Baik', '1', 'Kegiatan', '2', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '-', 'Tidak terlaksananya launching dengan baik', '-', 'Berkoordinasi dengan pihak terkait', 'Kantor Wilayah DJP, Dit. Organisasi dan Tatalaksan', 0, 0, 1, ''),
(86, 31, 34, 109, 12, 'Penyusunan Timeline kegiatan Piloting dan Implementasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Timeline Piloting dan Implementasi Aplikasi', 'Kegiatan Piloting dan Implementasi Aplikasi Terencana Dengan Baik', '1', 'Timeline K', '1', 'Bulan', 'Pelaksanaan kegiatan secara tepat waktu dan terencana', '-', 'Perencanaan penyusunan kegiatan yang tidak baik', '-', 'Pihak terkait', 'Semua Subdit, Dit. TIK', 0, 0, 1, ''),
(87, 31, 35, 110, 12, 'Pengurusan Korespondensi Terkait Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi  Kegiatan', '1', 'Nota Dinas', '4', 'Bulan', 'Tersampaikan tepat waktu', '-', 'Tidak tersampaikannya pelaksanaan kegiatan ', '-', 'Berkoordinasi dengan pihak terkait', 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua ', 0, 0, 1, ''),
(88, 31, 36, 111, 12, 'Penyusunan Laporan Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '1', 'Laporan Ke', '10', 'Bulan', 'Terselesaikan tepat waktu', '-', 'Batas waktu pelaporan terlewati', '-', 'Menyusun konsep laporan dengan segera', '-', 0, 0, 1, ''),
(89, 31, 37, 112, 12, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'Surat Perjalanan Dinas (SPD)', 'Terbayarkannya Segala Akomodasi dalam Menjalankan Perjalanan Dinas', '1', 'Berkas', '10', 'Bulan', 'Terbayarkan sesuai dengan bukti yang ada', '-', 'Biaya perjalanan dinas tidak tergantikan', '-', 'Berkoordinasi dengan pihak terkait', 'Pelaksana Kegiatan, Bendahara Dit. P2', 0, 0, 1, ''),
(90, 32, 42, 113, 12, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan Baik', '1', 'Kegiatan', '3', 'Bulan', 'Laboratorium berfungsi dengan baik', '-', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '-', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(91, 33, 43, 114, 12, 'Permintaan Usulan Narasumber e-Auditor', 'Nota Dinas Permintaan', 'Nota Dinas', 'Tersedia Tenaga e-Auditor Baik Sebagai Narasumber Pelatihan Pengolahan Data', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya narasumber', '-', 'Tidak terpenuhi permintaan narasumber e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(92, 33, 44, 115, 12, 'Pembuatan Penugasan Narasumber e-Auditor', 'Nota Dinas Permintaan', 'Surat Tugas', 'Tersedia Tenaga e-Auditor Baik Sebagai Narasumber Pelatihan Pengolahan Data', '1', 'Surat Tuga', '12', 'Bulan', 'Tersedianya narasumber', '-', 'Tidak terpenuhi permintaan narasumber e-Auditor', '-', 'Berkoordinasi dengan pihak terkait', 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 0, 0, 1, ''),
(93, 51, 173, 171, 11, 'Kegiatan Diklat', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Diklat', 'Pemeriksaan yang efektif dan berkualitas', '1', 'Diklat', '12', 'Bulan', 'Terselenggaranya diklat', '-', 'Ketersediaan trainer tidak sesuai kebutuhan', 'Kerjasama penyelenggaraan pendidikan dan pelatihan', 'Pengajar dari Direktorat P2', 'Dit. Kitsda, Pusdiklat Pajak', 0, 0, 1, ''),
(94, 51, 174, 172, 11, 'Penyediaan narasumber', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Diklat', 'Pemeriksaan yang efektif dan berkualitas', '2', 'usulan nar', '12', 'Bulan', 'Terselenggaranya diklat', '-', 'Tidak terselenggaranya diklat', 'Koordinasi dengan Pudiklat', 'Rapat persiapan dengan Pusdiklat dan Dit. Kitsda', 'Dit. Kitsda, Pusdiklat Pajak', 0, 0, 1, ''),
(95, 51, 175, 173, 11, 'Usulan Peserta', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Diklat', 'Pemeriksaan yang efektif dan berkualitas', '2', 'usulan pes', '12', 'Bulan', 'Terselenggaranya diklat', '-', 'Kurang peserta diklat', 'Koordinasi dengan Pudiklat dan Ses', 'Rapat persiapan dengan Pusdiklat dan Dit. Kitsda', 'Dit. Kitsda, Pusdiklat Pajak, Ses', 0, 0, 1, ''),
(96, 50, 162, 174, 11, 'Mengundang rapat perwakilan Kasie Rik dan adbim Rik untuk finaslisasi menu- menu di ALPP.', 'Kebutuhan', 'LHR', 'Pemeriksaan yang efektif dan berkualitas', '1', 'LHR', '1', 'Bulan', 'Adanya masukan mengenai aplikasi yang dibutuhkan', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengena', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 'Perwakilan Kasie Rik dan Adbim Rik dari KPP LTO, K', 0, 0, 1, ''),
(97, 50, 163, 175, 11, 'Undang rapat TIK dan DIP untuk membahas kemungkinan pengalihan aplikasi ALPP ke AMPP dengan catatan flexibilitas aplikasi tetap dipertahankan', 'Kebutuhan', 'kesepakatan menu yang akan dipertahankan di ALPP/ AMPP', 'Pemeriksaan yang efektif dan berkualitas', '2', 'LHR', '1', 'Bulan', 'kesepakatan menu yang akan dipertahankan di ALPP/ AMPP', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengena', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 'Perwakilan Kasie Rik dan Adbim Rik dari KPP LTO, K', 0, 0, 1, ''),
(98, 51, 169, 176, 11, 'Rapat koordinasi Subdit terkait, KITSDA', 'Kebutuhan, surat dari Pusdiklat Pajak', '1. Usulan Diklat 2. Rencana topik IHT nasional', 'Pemeriksaan yang efektif dan berkualitas', '1', 'Usulan Dik', '1', 'Bulan', 'Terbentuknya usulan diklat/ rencana topik IHT nasional', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT 2. Materi IHT belum tersedia di aplikasi ANTARIKSA', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak 2. Berkoordinasi aktif dengan D', '1. KITSDA 2. Subdit terkait di P2', 0, 0, 1, ''),
(99, 51, 170, 177, 11, 'Koordinasi persiapan diklat dengan Pusdiklat Pajak ', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kesepakatan mengenai kurikulum, jamlat, peserta, metode diklat', 'Pemeriksaan yang efektif dan berkualitas', '2', 'Kurikulum ', '12', 'Bulan', 'Disepakatinya kurikulum, jamlat, peserta, metode diklat baru', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT 2. Materi IHT belum tersedia di aplikasi ANTARIKSA', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak 2. Berkoordinasi aktif dengan D', 'Pusdiklat Pajak', 0, 0, 1, ''),
(100, 58, 211, 178, 11, 'Mengumpulkan kurikulum DFD, DFM, DFA, DFT yang ada sekarang', 'hasil evaluasi pelaksanaan diklat', 'File kurikulum diklat', 'Pemeriksaan yang efektif dan berkualitas', '1', 'Kurikulum ', '1', 'Bulan', 'Terkumpulnya kurikulum', '-', 'Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum 2. Minimnya jumlah widyaiswara di', 'Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat', '1. Pusdiklat Pajak 2. Dit. KITSDA', 0, 0, 1, ''),
(101, 58, 212, 179, 11, 'Menelaah kurikulum yang ada terutama terkait kesesuaian kurikulum dengan kebutuhan kompetensi pemeriksa saat ini ', 'hasil evaluasi pelaksanaan diklat', 'Hasil telaahan yang disertai dengan penilaian awal tentang kesesuaian kurikulum dan usulan perubahan', 'Pemeriksaan yang efektif dan berkualitas', '1', 'Kurikulum ', '1', 'Bulan', 'kurikulum yang ada telah ditelaah terutama terkait kesesuaian kurikulum dengan kebutuhan kompetensi ', '-', 'Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum 2. Minimnya jumlah widyaiswara di', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat', '-', 0, 0, 1, ''),
(102, 58, 213, 180, 11, 'Rapat dengan perwakilan pejabat FPP dari berbagai tipe UP2 untuk membahas usulan revitalisasi diklat', 'hasil evaluasi pelaksanaan diklat', ' Kesepakatan hal- hal yang akan direvitalisasi', 'Pemeriksaan yang efektif dan berkualitas', '1', 'LHR', '1', 'Bulan', 'Diperolehnya kesepakatan hal- hal yang akan direvitalisasi', '-', 'Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum 2. Minimnya jumlah widyaiswara di', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat', '1. Kepala UP2 2. Perwakilan FPP', 0, 0, 1, ''),
(103, 35, 52, 154, 2, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', 'Pertanyaan user Aplikasi AsIK', 'Jawaban atas masalah user', 'Terselesaikannya masalah user pada Aplikasi AsIK', '3', 'Pertanyaan', '1', 'Hari Kerja', 'Terjawabnya pertanyaan user Aplikasi AsIK', '-', 'Tidak terjawabnya pertanyaan user', 'Kertas Kerja Pertanyaan Aplikasi AsIK yang dishari', 'Memastikan setiap pertanyaan pada PIC diinput pada Kertas Kerja Pertanyaan Aplikasi AsIK', 'Direktorat TTKI dan UP2', 0, 0, 0, ''),
(104, 36, 54, 155, 2, 'membuat Laporan Hasil Rapat pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli BPKP', 'rapat pembuatan konsep Kep Dirjen Tenaga Ahli', 'LHR', 'Tersedianya LHR atas pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Tenaga Ahli BPKP', '1', 'LHR/Notula', '5', 'Hari Kerja', 'Tersedianya LHR', '-', '-', 'Pengawasan melekat atasan ', '-', 'BPKP', 0, 0, 0, ''),
(105, 36, 59, 198, 2, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', 'Undangan rapat', 'Pelaksanaan rapat', 'kerjasama pemeriksaan yang optimal', '1', 'Pelaksanaa', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', 'Pengawasan melekat atasan ', '-', 'BPKP', 0, 0, 0, ''),
(106, 36, 61, 199, 2, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', 'Nota hitung hasi pemeriksaan TOPN', 'Nota hitung SIDJP', 'Terinputnya nota hitung hasil pemeriksaan TOPN pada SIDJP', '100', 'Nota Pengh', '5', 'Hari Kerja', 'Terinputnya nota hitung pada SIDJP', '-', '-', 'Pengawasan melekat atasan ', '-', 'BPKP', 0, 0, 0, ''),
(107, 36, 62, 200, 2, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', 'Surat permintaan IBK dari ketua harian TOPN', 'ND penerusan permintaan IBK', 'Terkirimnya permintaan IBK manual kepada Subdit Teknik dan Pengendalian Pemeriksaan', '6', 'ND Penerus', '1', 'Hari Kerja', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', 'Pengawasan melekat atasan ', '-', 'BPKP', 0, 0, 0, ''),
(108, 36, 63, 201, 2, 'menerbitkan Surat Perintah Pemeriksaan TOPN', 'Instruksi Pemeriksaan', 'SP2', 'Tersedianya konsep SP2 pemeriksaan TOPN', '2', 'SP2', '5', 'Hari Kerja', 'Terbitnya SP2', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(109, 36, 64, 202, 2, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', 'SP2', 'SPPL', 'Tersedianya konsep SPPL', '2', 'SPPL', '5', 'Hari Kerja', 'Terbitnya SPPL', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(110, 36, 65, 203, 2, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', 'SPPL', 'Sarana dan prasarana pemanggilan WP TOPN', 'Tersedianya sarana dan prasarana pemanggilan Wajib Pajak TOPN', '2', 'Sarana dan', '1', 'Hari Kerja', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(111, 36, 66, 204, 2, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', 'surat ketua harian TOPN BPKP', 'ND penerusan  ', 'Laporan Pemeriksaan TOPN yang berkualitas', '15', 'Nota Dinas', '1', 'Hari Kerja', '-', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(112, 36, 67, 205, 2, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', 'surat ketua harian TOPN BPKP', 'ND penerusan  ', 'Laporan Pemeriksaan TOPN yang berkualitas', '10', 'Surat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(113, 36, 69, 206, 2, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', 'Instruksi Pemeriksaan', 'ND Permintaan Wajib Pajak secara fisik/digital ke KPP', 'Pemeriksaan Pajak berkualitas', '3', 'ND Permint', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(114, 36, 72, 207, 2, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', 'ND laporan rutin', 'Pengawasan pemeriksaan TOPN', '2', 'Laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(115, 36, 73, 208, 2, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', 'Berita Acara', '2', 'Berita Aca', '10', 'Hari Kerja', '-', '-', '-', '-', '-', 'BPKP', 0, 0, 0, '');
INSERT INTO `rki_pegawai` (`id_rkipeg`, `id_rko`, `id_uraian`, `id_rki`, `pic`, `kegiatan`, `input`, `output`, `outcome`, `volume`, `satuan`, `jgk_waktu`, `waktu`, `ind`, `ket`, `risiko`, `sistem`, `mitigasi`, `terkait`, `realisasi`, `validasi`, `status`, `reg`) VALUES
(116, 36, 77, 209, 2, 'membuat nota dinas dan surat pemberitahuan subdit dan supervisor pengendali mutu pemeriksaan TOPN', '-', '-', '-', '2', 'Nota Dinas', '5', 'Hari Kerja', '-', '-', '-', '-', '-', 'BPKP', 0, 0, 0, ''),
(117, 36, 78, 210, 2, 'melakukan revisi SOP Pemeriksaan TOPN', '-', '-', '-', '1', 'Surat', '60', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(118, 36, 82, 211, 2, ' membuat soal untuk kepentingan assesment dan pemetaan kompetensi pemeriksa TOPN', '-', '-', '-', '30', 'Soal', '30', 'Hari Kerja', 'Tersedianya soal untuk assesment dan pemetaan kompetensi pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(119, 37, 86, 212, 2, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '14', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(120, 37, 87, 213, 2, 'SP', '-', '-', '-', '25', 'SP', '14', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(121, 37, 88, 214, 2, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input Sura', '10', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(122, 37, 92, 215, 2, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'Nota Dinas', '60', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(123, 37, 93, 216, 2, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '1', 'Nota Dinas', '10', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(124, 40, 104, 217, 2, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'Nota Dinas', '3', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(125, 38, 94, 218, 2, 'membuat laporan pelaksanaan kegiatan IHT', '-', '-', '-', '2', 'Laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(126, 41, 105, 219, 2, 'membuat laporan pelaksanaan kegiatan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(127, 41, 106, 220, 2, 'menyiapkan materi konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Materi', '3', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(128, 41, 109, 221, 2, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Pelaksanaa', '3', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(129, 41, 110, 222, 2, 'menyusun cetak biru pengembangan aplikasi Akses Informasi Keuangan', '-', '-', '-', '1', 'cetak biru', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(130, 41, 112, 223, 2, 'membuat usulan proses bisnis pemanfaatan IBK', '-', '-', '-', '1', 'Nota Dinas', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(131, 42, 113, 224, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Laporan', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(132, 42, 124, 226, 2, 'menghadiri rapat sekretariat pemeriksaan bersama Kemenkeu bersama seluruh stakeholder pemeriksaan bersama pajak dan PNBP', '-', '-', '-', '2', 'Rapat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(133, 43, 127, 227, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP tingkat internal DJP', '-', '-', '-', '1', 'laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(134, 43, 131, 228, 2, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Rapat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(135, 43, 132, 229, 2, 'membuat kajian akademis dasar hukum pelaksanaan pemeriksaan bersama OJK-DJP', '-', '-', '-', '1', 'Kajian', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(136, 43, 139, 230, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP antara DJP dan OJK', '-', '-', '-', '1', 'Laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(137, 43, 138, 231, 2, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Rapat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(138, 43, 144, 233, 2, 'membuat usulan addendum PKS atau perubahan MoU dengan OJK', '-', '-', '-', '1', 'ND Usulan', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(139, 43, 145, 234, 2, 'menyiapkan bahan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Bahan rapa', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(140, 44, 146, 235, 2, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'Bimbingan ', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(141, 44, 147, 236, 2, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'Bimbingan ', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(142, 45, 149, 237, 2, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(143, 45, 148, 238, 2, 'membuat nd permintaan konten kreatif', '-', '-', '-', '1', 'Nota Dinas', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(144, 45, 150, 239, 2, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten Kre', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(145, 46, 151, 240, 2, 'membuat co-sign regulasi atas permintaan direktorat/subdirektorat lain', '-', '-', '-', '5', 'Nota Dinas', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(146, 46, 152, 241, 2, 'membuat usulan terkait penyempurnaan regulasi IBK', '-', '-', '-', '1', 'Nota Dinas', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(147, 47, 156, 242, 2, 'menginventarisasi MoU dan PKS yang akan jatuh tempo', '-', '-', '-', '1', 'Kegiatan', '12', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(148, 48, 158, 243, 2, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'Surat Tuga', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(149, 35, 52, 244, 5, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '3', 'Pertanyaan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(150, 35, 53, 245, 5, 'Membuat Frequently Ask Question (FAQ) sehubungan permasalahan pada aplikasi IBK', '-', '-', '-', '2', 'FAQ', '2', 'Triwulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(151, 36, 58, 246, 5, 'menyiapkan konsumsi rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Nota Dinas', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(152, 36, 59, 247, 5, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Rapat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(153, 36, 61, 248, 5, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '90', 'Nota Pengh', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(154, 36, 62, 249, 5, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'ND Penerus', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(155, 36, 63, 250, 5, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(156, 36, 64, 251, 5, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SP2', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(157, 36, 65, 252, 5, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Sarana dan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(158, 36, 66, 253, 5, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(159, 36, 67, 254, 5, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(160, 36, 69, 255, 5, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(161, 36, 72, 257, 5, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Laporan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(162, 36, 73, 258, 5, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Berita Aca', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(163, 36, 83, 260, 5, 'mengolah hasil assesment dan membuat data base kompetensi pemeriksa TOPN', '-', '-', '-', '1', 'Basis Data', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(164, 37, 86, 261, 5, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '50', 'SR', '14', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(165, 37, 87, 262, 5, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '20', 'SP', '10', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(166, 37, 88, 263, 5, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '20', 'SP', '14', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(167, 37, 92, 264, 5, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'ND Monev', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(168, 37, 93, 265, 5, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '2', 'ND Evaluas', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(169, 40, 104, 266, 5, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND EoI', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(170, 38, 96, 267, 5, 'menyiapkan sarana dan prasarana IHT TOPN', '-', '-', '-', '2', 'Sarana dan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(171, 41, 107, 268, 5, 'memproses SPD peserta kegiatan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '1', 'Kegiatan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(172, 41, 109, 269, 5, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '1', 'Konsinyasi', '3', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(173, 42, 116, 270, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Kegiatan', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(174, 43, 130, 272, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Kegiatan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(175, 43, 131, 271, 5, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Kegiatan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(176, 43, 134, 273, 5, 'mengkompilasi kajian naskah akademis pelaksanaan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Kajian', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(177, 43, 138, 274, 5, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Rapat', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(178, 43, 142, 275, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK antara DJP dan OJK', '-', '-', '-', '1', 'Kegiatan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(179, 44, 146, 276, 5, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'Bahan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(180, 44, 147, 277, 5, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'Kegiatan', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(181, 45, 149, 278, 5, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(182, 45, 150, 279, 5, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten Kre', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(183, 48, 158, 280, 5, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', '-', '1', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 0, 0, ''),
(184, 65, 223, 453, 21, 'Test Uraian RKO User Simulasi', 'q', 'q', 'q', '1', 'kegiatan', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(185, 63, 222, 197, 22, 'qw', 'q', 'q', 'q', '1', 'Kegiatan', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(186, 35, 52, 454, 2, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', 'Pertanyaan user Aplikasi AsIK', 'Jawaban atas masalah user', 'Terselesaikannya masalah user pada Aplikasi AsIK', '2', 'Pertanyaan', '1', 'Hari Kerja', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(187, 36, 54, 455, 2, 'membuat Laporan Hasil Rapat pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli BPKP', 'rapat pembuatan konsep Kep Dirjen Tenaga Ahli', 'LHR', 'Tersedianya LHR atas pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Tenaga Ahli BPKP', '1', 'LHR', '5', 'Hari Kerja', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(188, 36, 59, 456, 2, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', 'Undangan rapat', 'Pelaksanaan rapat', 'kerjasama pemeriksaan yang optimal', '1', 'Rapat', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(189, 36, 61, 457, 2, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', 'Nota hitung hasi pemeriksaan TOPN', 'Nota hitung SIDJP', 'Terinputnya nota hitung hasil pemeriksaan TOPN pada SIDJP', '110', 'Nota Pengh', '3', 'Hari Kerja', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(190, 36, 62, 458, 2, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', 'Surat permintaan IBK dari ketua harian TOPN', 'ND penerusan permintaan IBK', 'Terkirimnya permintaan IBK manual kepada Subdit Teknik dan Pengendalian Pemeriksaan', '2', 'IBK', '3', 'Hari Kerja', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(191, 36, 63, 459, 2, 'menerbitkan Surat Perintah Pemeriksaan TOPN', 'Instruksi Pemeriksaan', 'SP2', 'Tersedianya konsep SP2 pemeriksaan TOPN', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(192, 36, 64, 460, 2, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', 'SP2', 'SPPL', 'Tersedianya konsep SPPL', '2', 'SPPL', '3', 'Hari Kerja', 'Terbitnya SPPL', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(193, 36, 65, 461, 2, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', 'SPPL', 'Sarana dan prasarana pemanggilan WP TOPN', 'Tersedianya sarana dan prasarana pemanggilan Wajib Pajak TOPN', '2', 'Nota Dinas', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(194, 36, 66, 462, 2, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', 'surat ketua harian TOPN BPKP', 'ND penerusan  ', 'Laporan Pemeriksaan TOPN yang berkualitas', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(195, 36, 67, 463, 2, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', 'ND jawaban subdit/FPP reviewer', 'Surat Penerusan', 'Laporan Pemeriksaan TOPN yang berkualitas', '10', 'Surat', '1', 'Hari Kerja', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(196, 36, 69, 464, 2, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', 'Instruksi Pemeriksaan', 'ND Permintaan Wajib Pajak secara fisik/digital ke KPP', 'Pemeriksaan Pajak berkualitas', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(197, 36, 72, 465, 2, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', 'ND laporan rutin', 'Pengawasan pemeriksaan TOPN', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(198, 36, 73, 466, 2, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', 'Konsep LHP', 'BA Pemdu', 'Kualitas Pemeriksaan TOPN', '2', 'Berita Aca', '12', 'Bulan', 'Tersedianya BA Pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(199, 36, 77, 467, 2, 'membuat nota dinas dan surat pemberitahuan subdit dan supervisor pengendali mutu pemeriksaan TOPN', '-', 'ND', '-', '2', 'Nota Dinas', '5', 'Hari Kerja', 'Tersedianya nota dinas penunjukan reviewer pemeriksaan TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(200, 36, 78, 468, 2, 'melakukan revisi SOP Pemeriksaan TOPN', '-', 'Surat Direktur', 'Peningkatan Kualitas Administrasi Pemeriksaan OPN', '1', 'Kegiatan', '30', 'Hari Kerja', 'Tersedianya SOP baru pemeriksaan TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(201, 36, 82, 469, 2, 'membuat soal untuk kepentingan assesment dan pemetaan kompetensi pemeriksa TOPN', '-', 'Soal Assesment', '-', '1', 'Paket Soal', '12', 'Bulan', 'tersedianya soal untuk assesment dan pemetaan kompetensi pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(202, 37, 86, 470, 2, 'melaksanakan pencetakan SR permintaan IBK', 'permintaan IBK FPP', 'SR', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(203, 37, 87, 471, 2, 'mencetak dan mengirimkan SP IBK', 'permintaan IBK FPP', 'SP', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(204, 37, 88, 472, 2, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', 'permintaan IBK FPP', 'Data IBK diterima terinput pada aplikasi', '-', '25', 'Input', '12', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(205, 37, 92, 473, 2, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', 'ND monev', '-', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(206, 37, 93, 474, 2, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', 'File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(207, 40, 104, 475, 2, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', 'ND Permintaan EoI', 'Permintaan EoI kepada Direktur PI', 'Peningkatan Kualitas Pemeriksaan', '1', 'ND', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(208, 38, 94, 476, 2, 'membuat laporan pelaksanaan kegiatan IHT', '-', 'Laporan Pelaksanaan Kegiatan', 'Peningkatan kapasitas Pemeriksa TOPN', '2', 'Laporan Pe', '2', 'Bulan', 'Tersedianya Laporan Pelaksanaan Kegiatan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(209, 41, 105, 477, 2, 'membuat laporan pelaksanaan kegiatan konsinyasi pengembangan aplikasi AsIK', '-', 'laporan', 'Peningkatan kualitas pemeriksaan pajak ', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan pelaksanaan kegiatan konsinyasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(210, 41, 106, 478, 2, 'menyiapkan materi konsinyasi pengembangan aplikasi AsIK', '-', 'bahan paparan', '-', '2', 'Bahan Papa', '12', 'Bulan', 'Tersedianya materi konsinyasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(211, 41, 109, 479, 2, 'konsinyasi pengembangan aplikasi AsIK', '-', 'Kegiatan', 'Perbaikan Aplikasi AsIK', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(212, 41, 110, 480, 2, 'menyusun cetak biru pengembangan aplikasi Akses Informasi Keuangan', '-', 'Cetak Biru', '-', '1', 'Cetak Biru', '12', 'Bulan', 'Cetak biru', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(213, 41, 112, 481, 2, 'membuat usulan proses bisnis pemanfaatan IBK', '-', 'ND', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya Usulan Proses Bisnis Komprehensif IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(214, 42, 113, 482, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama-internal DJP', 'pelaksanaan rapat', 'LHR', 'kerjasama pemeriksaan yang optimal', '1', 'LHR', '12', 'Bulan', 'Tersedianya LHR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(215, 42, 224, 501, 2, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', 'undangan rapat', 'rapat', 'kerjasama pemeriksaan yang optimal', '1', 'rapat', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(216, 42, 124, 483, 2, 'menghadiri rapat sekretariat pemeriksaan bersama Kemenkeu bersama seluruh stakeholder pemeriksaan bersama pajak dan PNBP', '-', 'laporan pelaksanaan tugas', '-', '2', 'laporan pe', '12', 'Bulan', 'Tersedianya laporan pelaksanaan tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(217, 43, 127, 484, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP tingkat internal DJP', 'pelaksanaan rapat', 'LHR', '"Kerjasama pemeriksaan yang optimal Peningkatan Kepatuhan LK"', '1', 'LHR', '12', 'Bulan', 'Tersedia LHR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(218, 43, 131, 485, 2, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', 'nd undangan rapat', 'Pelaksanaan rapat', '-', '1', 'Rapat', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 0, 1, ''),
(219, 43, 132, 486, 2, 'membuat kajian akademis dasar hukum pelaksanaan pemeriksaan bersama OJK-DJP', '-', 'Kajian akademis', '-', '1', 'Kajian', '12', 'Bulan', 'Tersedia Kajian akademis dasar hukum pelaksanaan pemeriksaan bersama', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(220, 43, 138, 487, 2, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK Bersama Kemenkeu', 'nd undangan rapat', 'Pelaksanaan rapat', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(221, 43, 139, 488, 2, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP antara DJP dan OJK', '-', 'LHR', '-', '1', 'LHR', '12', 'Bulan', 'Tersedia LHR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(222, 43, 143, 489, 2, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', 'nd undangan rapat', 'Pelaksanaan rapat', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(223, 43, 144, 490, 2, 'membuat usulan addendum PKS atau perubahan MoU dengan OJK', '-', 'ND usulan addendum PKS dan MoU', '-', '1', 'ND usulan ', '12', 'Bulan', 'Tersedia ND usulan addendum PKS atau perubahan MoU', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(224, 43, 145, 491, 2, 'menyiapkan bahan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', 'Bahan pembahasan', '-', '1', 'Bahan rapa', '12', 'Bulan', 'Tersedia bahan pemaparan pemeriksaan bersama DJP-OJK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(225, 44, 146, 492, 2, 'menyiapkan bahan bimbingan teknis permintaan IBK', 'permintaan bimbingan teknis permintaan IBK', 'bahan bimbingan', 'Peningkatan kepatuhan permintaan IBK', '2', 'Bimbingan ', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(226, 44, 147, 493, 2, 'melaksanakan bimbingan teknis permintaan IBK', 'permintaan bimbingan teknis permintaan IBK', 'pelaksanaan bimbingan', 'Peningkatan kepatuhan permintaan IBK', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(227, 45, 149, 494, 2, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', 'pelaksanaan diklat', '-', '1', 'IHT', '12', 'Bulan', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(228, 45, 150, 496, 2, 'membuat konten kreatif pemeriksaan', '-', 'Konten Kreatif Pemeriksaan', 'Seluruh Stakeholder di bidang pemeriksaan pajak mendapatkan pemahaman yang sama mengenai kebijakan p', '1', 'Konten Kre', '12', 'Bulan', 'Tersedianya Konten Kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(229, 46, 151, 497, 2, 'membuat co-sign regulasi atas permintaan direktorat/subdirektorat lain', 'ND permintaan co-sign', 'ND', 'regulasi perpajakan yang berkualitas', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya co-sign atas regulasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(230, 46, 152, 498, 2, 'membuat usulan terkait penyempurnaan regulasi IBK', '-', 'ND', 'regulasi IBK yang berkualitas', '1', 'ND', '12', 'Bulan', 'Tersedianya usulan penyempurnaan regulasi IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(231, 47, 156, 499, 2, 'menginventarisasi MoU dan PKS yang akan jatuh tempo', 'Portal P2Humas', 'Daftar MoU', 'Kerjasama Pemeriksaan yang optimal', '1', 'Daftar PKS', '12', 'Bulan', 'Tersedianya daftar MoU dan PKSA yang akan jatuh tempo', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(232, 48, 158, 500, 2, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', 'Konsep Surat Tugas', 'Tertib administrasi pekerjaan', '3', 'Surat Tuga', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(233, 45, 148, 495, 2, 'membuat nd permintaan konten kreatif', '-', 'ND', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya ND Permintaan Konten Kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(234, 35, 52, 371, 1, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '2', 'Pertanyaan', '12', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(235, 36, 55, 372, 1, 'membuat ND dan Surat Undangan Rapat pembuatan konsep Keputusan Dirketur Jenderal Pajak tentang Penunjukan Tenaga Ahli BPKP', '-', '-', '-', '1', 'Undangan', '3', 'Hari Kerja', 'Tersedianya Undangan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(236, 36, 59, 373, 1, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Pelaksanaa', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(237, 36, 61, 374, 1, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '110', 'Nota Pengh', '12', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(238, 36, 62, 375, 1, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'IBK', '12', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(239, 36, 63, 376, 1, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(240, 36, 64, 377, 1, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SPPL', '12', 'Bulan', 'Terbitnya SPPL', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(241, 36, 65, 378, 1, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(242, 36, 66, 379, 1, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(243, 36, 67, 380, 1, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat  ', '12', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(244, 36, 69, 381, 1, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(245, 36, 72, 383, 1, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(246, 36, 73, 384, 1, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Berita Aca', '12', 'Bulan', 'Tersedianya BA Pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(247, 36, 74, 385, 1, 'membuat ND dan Surat Undangan Rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Undangan', '2', 'Bulan', 'Tersedianya undangan pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(248, 36, 80, 386, 1, 'menyiapkan,menganalisis, dan menyajikan data untuk keperluan monitoring dan evaluasi hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Data Monev', '2', 'Bulan', 'Tersedianya data monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(249, 36, 81, 387, 1, 'menyelenggarakan Assesment dan pemetaan kompetensi pemeriksa TOPN (sebagai Tenaga Ahli)', '-', '-', '-', '1', 'pelaksanaa', '1', 'Bulan', 'terselenggaranya assesment pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(250, 36, 84, 388, 1, 'membuat peta pengembangan kompetensi berdasarkan hasil assesment', '-', '-', '-', '1', 'peta penge', '1', 'Bulan', 'tersedianya peta pengembangan kompetensi pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(251, 37, 86, 389, 1, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(252, 37, 87, 390, 1, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(253, 37, 88, 391, 1, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input', '12', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(254, 37, 92, 392, 1, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'ND Monev', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(255, 37, 93, 393, 1, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(256, 40, 104, 394, 1, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND Monev', '12', 'Bulan', 'Tersedianya ND permintaan EoI', '-', '-', '-', '-', '-', 0, 0, 1, ''),
(257, 38, 95, 395, 1, 'membuat surat permintaan data nama peserta IHT TOPN', '-', '-', '-', '2', 'Surat', '2', 'Bulan', 'Tersedianya surat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(258, 39, 100, 396, 1, 'menerima dan memindai surat masuk ke subdit kerjasama dan dukungan pemeriksaan yang belum tercover oleh NADINE', '-', '-', '-', '60', 'pindaian s', '12', 'Bulan', 'Tersedianya Pindaian Surat Masuk', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(259, 39, 101, 397, 1, 'menerima konsep surat keluar non Nadine (BA, Laporan, Notula, dan dokumen lain) untuk diserahkan kepada kasubdit kerjasama dan dukungan pemeriksaan', '-', '-', '-', '60', 'konsep sur', '12', 'Bulan', 'Tersedianya konsep surat keluar', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(260, 39, 102, 398, 1, 'menerima dan memberikan nomor atas konsep surat keluar non nadine (BA, Laporan, Notula, dan dokumen lain) yang telah ditandatangani kasubdit kerjasama dan dukungan pemeriksaan', '-', '-', '-', '30', 'konsep sur', '12', 'Bulan', 'Tersedianya konsep surat keluar yang telah dinomori', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(261, 39, 103, 399, 1, 'mengirimkan surat keluar non nadine sesuai dengan tujuan', '-', '-', '-', '45', 'konsep sur', '12', 'Bulan', 'Tersedianya surat keluar yang telah terkirim', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(262, 41, 108, 400, 1, 'menyiapkan sarana dan prasarana pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Permintaan', '12', 'Bulan', 'Tersedianya Sarana dan prasarana', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(263, 41, 109, 401, 1, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(264, 42, 116, 402, 1, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Undangan', '12', 'Bulan', 'Tersedianya undangan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(265, 42, 224, 502, 1, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(266, 43, 128, 403, 1, 'membuat ND dan surat undangan rapat pembahasan pemeriksaan bersama OJK-DJP  tingkat internal DJP', '-', '-', '-', '1', 'Undangan', '12', 'Bulan', 'Tersedia Undangan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(267, 43, 131, 404, 1, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(268, 43, 138, 405, 1, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK bERSAM', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(269, 43, 140, 406, 1, 'membuat ND dan surat undangan rapat pembahasan pemeriksaan bersama OJK-DJP antara DJP dan OJK', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Undangan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(270, 43, 143, 407, 1, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(271, 44, 146, 408, 1, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'bahan bimb', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(272, 44, 147, 409, 1, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(273, 45, 149, 410, 1, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '1', 'Hari Kerja', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(274, 45, 150, 411, 1, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten kre', '12', 'Bulan', 'Per 2 bulan 1 konten kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(275, 48, 158, 412, 1, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'ST', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(276, 35, 52, 503, 5, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '2', 'Pertanyaan', '12', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(277, 35, 53, 504, 5, 'Membuat Frequently Ask Question (FAQ) sehubungan permasalahan pada aplikasi IBK', '-', '-', '-', '4', 'FAQ', '12', 'Bulan', 'tersedianya FAQ Aplikasi AsIK yang dapat diakses oleh user', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(278, 36, 58, 505, 5, 'menyiapkan konsumsi rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Nota Dinas', '3', 'Hari Kerja', 'Tersedianya Nota Dinas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(279, 36, 59, 506, 5, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Pelaksanaa', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(280, 36, 61, 507, 5, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '110', 'Nota Pengh', '12', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(281, 36, 62, 508, 5, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'IBK', '12', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(282, 36, 63, 509, 5, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(283, 36, 64, 510, 5, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SPPL', '12', 'Bulan', 'Terbitnya SPPL', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(284, 36, 65, 511, 5, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(285, 36, 66, 512, 5, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(286, 36, 67, 513, 5, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat  ', '12', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(287, 36, 69, 514, 5, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(288, 36, 72, 515, 5, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(289, 36, 73, 516, 5, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Berita Aca', '12', 'Bulan', 'Tersedianya BA Pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(290, 36, 76, 517, 5, 'menyiapkan konsumsi rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '1', 'Konsumsi', '12', 'Bulan', 'Tersedianya paket konsumsi pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(291, 36, 83, 518, 5, 'mengolah hasil assesment dan membuat data base kompetensi pemeriksa TOPN', '-', '-', '-', '1', 'file data ', '12', 'Bulan', 'tersedianya informasi dari hasil assesment', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(292, 37, 86, 519, 5, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(293, 37, 87, 520, 5, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(294, 37, 88, 521, 5, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(295, 37, 92, 522, 5, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(296, 37, 93, 523, 5, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(297, 40, 104, 524, 5, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(298, 38, 96, 525, 5, 'menyiapkan sarana dan prasarana IHT TOPN', '-', '-', '-', '2', 'Sarpras', '12', 'Bulan', 'Tersedianya Sarpras', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(299, 41, 107, 526, 5, 'memproses SPD peserta kegiatan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '1', 'Kegiatan P', '12', 'Bulan', 'Pencairan dana SPD Fullboard peserta konsinyasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(300, 41, 109, 527, 5, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(301, 42, 116, 528, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Konsumsi r', '12', 'Bulan', 'Tersedianya Konsumsi rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(302, 42, 224, 529, 5, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(303, 43, 130, 530, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Paket kons', '12', 'Bulan', 'Tersedia Paket konsumsi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(304, 43, 131, 531, 5, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(305, 43, 134, 532, 5, 'mengkompilasi kajian naskah akademis pelaksanaan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'buku kajia', '12', 'Bulan', 'Tersedia buku kajian akademis pemeriksaan bersama DJP -OJK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(306, 43, 138, 533, 5, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(307, 43, 142, 534, 5, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK antara DJP dan OJK', '-', '-', '-', '1', 'Paket kons', '12', 'Bulan', 'Tersedia Paket konsumsi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(308, 43, 143, 535, 5, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(309, 44, 146, 536, 5, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'bahan bimb', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(310, 44, 147, 537, 5, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(311, 45, 149, 538, 5, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '12', 'Bulan', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(312, 45, 150, 539, 5, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten kre', '12', 'Bulan', 'Per 2 bulan 1 konten kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(313, 48, 158, 540, 5, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'Surat Tuga', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(314, 35, 52, 281, 6, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '2', 'Pertanyaan', '12', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(315, 36, 56, 282, 6, 'membuat konsep tanda pengenal tenaga ahli BPKP', '-', '-', '-', '1', 'Undangan', '3', 'Hari Kerja', 'Tersedianya Undangan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(316, 36, 59, 283, 6, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Pelaksanaa', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(317, 36, 60, 284, 6, 'membuat dan mengirimkan surat pengantar LHP, Nothit, dan KKP ke Kantor Pelayanan Pajak tempat Wajib Pajak terdaftar', '-', '-', '-', '15', 'Surat Peng', '12', 'Bulan', 'Terkirimnya LHP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(318, 36, 61, 285, 6, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '110', 'Nota Pengh', '12', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(319, 36, 62, 286, 6, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'IBK', '12', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(320, 36, 63, 287, 6, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(321, 36, 64, 288, 6, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SPPL', '12', 'Bulan', 'Terbitnya SPPL', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(322, 36, 65, 289, 6, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Sarana dan', '12', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(323, 36, 66, 290, 6, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(324, 36, 67, 291, 6, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat  ', '12', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(325, 36, 68, 292, 6, 'menyiapkan data pemeriksaan Wajib Pajak dalam bentuk Kertas Kerja Apiseta', '-', '-', '-', '12', 'File Apise', '12', 'Bulan', 'Tersedianya File Apiseta', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(326, 36, 69, 293, 6, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(327, 36, 70, 294, 6, 'mengadministrasikan konsep SPHP dan Undangan PAHP TOPN', '-', '-', '-', '5', 'Konsep SPH', '12', 'Bulan', 'Tersedianya Penomoran Konsep SPHP dan Undangan PAHP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(328, 36, 72, 296, 6, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(329, 36, 73, 297, 6, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Laporan', '12', 'Bulan', 'Tersedianya laporan pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(330, 36, 79, 298, 6, 'membuat konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli ', '-', '-', '-', '1', 'Kep Dirjen', '12', 'Bulan', 'Tersedianya Kep Dirjen', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(331, 36, 80, 299, 6, 'menyiapkan,menganalisis, dan menyajikan data untuk keperluan monitoring dan evaluasi hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Data', '12', 'Bulan', 'Tersedianya data monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(332, 36, 81, 300, 6, 'menyelenggarakan Assesment dan pemetaan kompetensi pemeriksa TOPN (sebagai Tenaga Ahli)', '-', '-', '-', '1', 'pelaksanaa', '12', 'Bulan', 'terselenggaranya assesment pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(333, 36, 82, 301, 6, 'membuat soal untuk kepentingan assesment dan pemetaan kompetensi pemeriksa TOPN', '-', '-', '-', '1', 'Paket Soal', '12', 'Bulan', 'Tersedianya Paket Soal', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(334, 36, 84, 302, 6, 'membuat peta pengembangan kompetensi berdasarkan hasil assesment', '-', '-', '-', '1', 'peta penge', '12', 'Bulan', 'tersedianya peta pengembangan kompetensi pemeriksa TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(335, 37, 86, 303, 6, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(336, 37, 87, 304, 6, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(337, 37, 88, 305, 6, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input', '12', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(338, 37, 92, 306, 6, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'ND Monev', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(339, 37, 93, 307, 6, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, '');
INSERT INTO `rki_pegawai` (`id_rkipeg`, `id_rko`, `id_uraian`, `id_rki`, `pic`, `kegiatan`, `input`, `output`, `outcome`, `volume`, `satuan`, `jgk_waktu`, `waktu`, `ind`, `ket`, `risiko`, `sistem`, `mitigasi`, `terkait`, `realisasi`, `validasi`, `status`, `reg`) VALUES
(340, 40, 104, 308, 6, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya ND permintaan EoI', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(341, 38, 95, 309, 6, 'membuat surat permintaan data nama peserta IHT TOPN', '-', '-', '-', '2', 'surat', '12', 'Bulan', 'Tersedianya surat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(342, 39, 100, 310, 6, 'menerima dan memindai surat masuk ke subdit kerjasama dan dukungan pemeriksaan yang belum tercover oleh NADINE', '-', '-', '-', '60', 'pindaian s', '12', 'Bulan', 'Tersedianya pindaian surat masuk', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(343, 39, 101, 311, 6, 'menerima konsep surat keluar non Nadine (BA, Laporan, Notula, dan dokumen lain) untuk diserahkan kepada kasubdit kerjasama dan dukungan pemeriksaan', '-', '-', '-', '60', 'konsep sur', '12', 'Bulan', 'Tersedianya konsep surat keluar', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(344, 39, 102, 312, 6, 'menerima dan memberikan nomor atas konsep surat keluar non nadine (BA, Laporan, Notula, dan dokumen lain) yang telah ditandatangani kasubdit kerjasama dan dukungan pemeriksaan', '-', '-', '-', '30', 'konsep sur', '12', 'Bulan', 'Tersedianya konsep surat keluar yang telah dinomori', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(345, 39, 103, 313, 6, 'mengirimkan surat keluar non nadine sesuai dengan tujuan', '-', '-', '-', '45', 'konsep sur', '12', 'Bulan', 'Tersedianya surat keluar yang telah terkirim', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(346, 41, 109, 314, 6, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(347, 41, 111, 315, 6, 'membuat ND permintaan penyelenggaraan konsinyasi pengembangan aplikasi AsIK dengan mekanisme Fullboard Meeting', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'ND', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(348, 42, 115, 316, 6, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Sarana dan', '12', 'Bulan', 'Tersedianya Sarana dan prasarana', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(349, 42, 224, 541, 6, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(350, 43, 131, 317, 6, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(351, 43, 138, 318, 6, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK Bersama Kemenkeu', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(352, 43, 143, 319, 6, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(353, 44, 146, 320, 6, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'bahan bimb', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(354, 44, 147, 321, 6, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(355, 45, 149, 322, 6, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '12', 'Bulan', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(356, 45, 150, 323, 6, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten kre', '12', 'Bulan', 'Per 2 bulan 1 konten kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(357, 48, 158, 324, 6, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'Surat Tuga', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(358, 49, 159, 325, 6, 'membuat revisi anggaran', '-', '-', '-', '1', 'ND', '1', 'Bulan', 'Tersedianya nota dinas revisi anggaran', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(359, 49, 160, 326, 6, 'melaksanakan rapat pembahasan usulan anggaran tahun 2021', '-', '-', '-', '1', 'melaksanak', '12', 'Bulan', 'Terakomodasinya anggaran Seksi Kerjasama Pemeriksaan pada saat rapat pembahasan usulan anggaran ', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(360, 49, 161, 327, 6, 'menyusun konsep anggaran tahun 2021', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya anggaran kerja TA 2021 Seksi Kerjasama Pemeriksaan', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(361, 35, 52, 328, 3, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '2', 'Pertanyaan', '12', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(362, 36, 59, 329, 3, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Pelaksanaa', '1', 'Hari Kerja', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(363, 36, 61, 330, 3, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '110', 'Nota Pengh', '12', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(364, 36, 62, 331, 3, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'IBK', '12', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(365, 36, 63, 332, 3, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(366, 36, 64, 333, 3, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SPPL', '12', 'Bulan', '-', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(367, 36, 65, 334, 3, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(368, 36, 66, 335, 3, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(369, 36, 67, 336, 3, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat  ', '12', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(370, 36, 69, 337, 3, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(371, 36, 72, 339, 3, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(372, 36, 73, 340, 3, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Berita Aca', '12', 'Bulan', 'Tersedianya BA Pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(373, 36, 75, 341, 3, 'menyiapkan sarana dan prasarana rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Sarpras', '12', 'Bulan', 'Tersedianya sarana dan prasarana pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(374, 36, 83, 342, 3, 'mengolah hasil assesment dan membuat data base kompetensi pemeriksa TOPN', '-', '-', '-', '1', 'file data ', '12', 'Bulan', 'tersedianya informasi dari hasil assesment', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(375, 37, 86, 343, 3, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(376, 37, 87, 344, 3, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(377, 37, 88, 345, 3, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input', '12', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(378, 37, 92, 346, 3, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'ND Monev', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(379, 37, 93, 347, 3, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(380, 40, 104, 348, 3, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya ND permintaan EoI', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(381, 38, 99, 349, 3, 'mengkoordinasikan narasumber dan membuat nota dinas narasumber IHT TOPN', '-', '-', '-', '2', 'ND', '12', 'Bulan', 'Tersedianya ND', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(382, 41, 105, 350, 3, 'membuat laporan pelaksanaan kegiatan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan pelaksanaan kegiatan konsinyasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(383, 41, 109, 351, 3, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(384, 42, 224, 543, 3, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(385, 43, 129, 352, 3, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama DJP dan OJK tingkat internal DJP', '-', '-', '-', '1', 'Sarpras', '12', 'Bulan', 'Tersedia Sarana dan Prasaran', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(386, 43, 131, 353, 3, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(387, 43, 133, 354, 3, 'membuat kajian akademis dampak hukum pelaksanaan pemeriksaan bersama OJK-DJP', '-', '-', '-', '1', 'Kajian aka', '12', 'Bulan', 'Tersedia Kajian akademis dampak hukum pelaksanaan pemeriksaan bersama', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(388, 43, 135, 355, 3, 'membuat konsep legal drafting RKMK Pemeriksaan Bersama DJP-OJK', '-', '-', '-', '1', 'Konsep RKM', '12', 'Bulan', 'Tersedia Konsep RKMK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(389, 43, 136, 356, 3, 'meminta co-sign atas konsep legal drafting RKMK Pemeriksaan Bersama DJP-OJK', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedia ND', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(390, 43, 137, 357, 3, 'memperbaiki konsep RKMK Pemeriksaan Bersama DJP-OJK berdasarkan jawaban co-sign direktorat terkait', '-', '-', '-', '1', 'Konsep RKM', '12', 'Bulan', 'Tersedia Konsep RKMK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(391, 43, 138, 358, 3, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK Bersama Kemenkeu', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(392, 43, 141, 359, 3, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama DJP-OJK antara DJP dan OJK', '-', '-', '-', '1', 'Sarana dan', '12', 'Bulan', 'Tersedia Sarana dan Prasarana', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(393, 43, 143, 360, 3, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(394, 44, 146, 361, 3, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'bahan bimb', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(395, 44, 147, 362, 3, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(396, 45, 149, 363, 3, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '12', 'Bulan', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(397, 45, 150, 364, 3, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten Kre', '12', 'Bulan', 'Per 2 bulan 1 konten kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(398, 46, 152, 365, 3, 'membuat usulan terkait penyempurnaan regulasi IBK', '-', '-', '-', '1', 'ND Co-sign', '12', 'Bulan', 'Tersedianya usulan penyempurnaan regulasi IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(399, 47, 153, 366, 3, 'membuat co-sign konsep MoU dan PKS atas permintaan direktorat/subdirektorat lain', '-', '-', '-', '2', 'Co-sign', '12', 'Bulan', 'Tersedianya ND co-sign atas konsep MoU dan PKS', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(400, 47, 154, 367, 3, 'menghadiri rapat pembahasan konsep MoU dan PKS ', '-', '-', '-', '2', 'Rapat', '12', 'Bulan', 'Terwakilinya kepentingan Direktorat P2 pada saat rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(401, 47, 155, 368, 3, 'membuat laporan penugasan rapat', '-', '-', '-', '2', 'ND Laporan', '12', 'Bulan', 'Tersedianya laporan atas pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(402, 47, 157, 369, 3, 'mengevaluasi efektivitas PKS dan MoU dengan ILAP terkait dengan kegiatan pemeriksaan dan penagihan', '-', '-', '-', '1', 'ND  ', '1', 'Bulan', 'Tersedianya ND evaluasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(403, 48, 158, 370, 3, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'ST', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(404, 35, 52, 413, 4, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', '-', '-', '-', '2', 'Pertanyaan', '12', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(405, 35, 53, 414, 4, 'Membuat Frequently Ask Question (FAQ) sehubungan permasalahan pada aplikasi IBK', '-', '-', '-', '2', 'FAQ', '12', 'Bulan', 'tersedianya FAQ Aplikasi AsIK yang dapat diakses oleh user', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(406, 36, 57, 415, 4, 'menyiapkan sarana dan prasarana rapat pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'LHR', '12', 'Bulan', 'Tersedianya LHR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(407, 36, 59, 416, 4, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(408, 36, 61, 417, 4, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', '-', '-', '-', '110', 'Nota Pengh', '12', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(409, 36, 62, 418, 4, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', '-', '-', '-', '2', 'IBK', '12', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(410, 36, 63, 419, 4, 'menerbitkan Surat Perintah Pemeriksaan TOPN', '-', '-', '-', '2', 'SP2', '12', 'Bulan', 'Terbitnya SP2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(411, 36, 64, 420, 4, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', '-', '-', '-', '2', 'SPPL', '12', 'Bulan', 'Terbitnya SPPL', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(412, 36, 65, 421, 4, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(413, 36, 66, 422, 4, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', '-', '-', '-', '10', 'Nota Dinas', '12', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(414, 36, 67, 423, 4, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', '-', '-', '-', '10', 'Surat  ', '12', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(415, 36, 69, 424, 4, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', '-', '-', '-', '2', 'Nota Dinas', '12', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(416, 36, 72, 426, 4, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', '-', '-', '2', 'laporan', '12', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(417, 36, 73, 427, 4, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', '-', '-', '-', '2', 'Berita Aca', '12', 'Bulan', 'Tersedianya BA Pemdu', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(418, 36, 82, 428, 4, 'membuat soal untuk kepentingan assesment dan pemetaan kompetensi pemeriksa TOPN', '-', '-', '-', '1', 'Paket Soal', '12', 'Bulan', 'Tersedianya nota dinas penunjukan reviewer pemeriksaan TOPN', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(419, 37, 85, 429, 4, 'melaksanakan batching permintaan IBK', '-', '-', '-', '120', 'batching d', '12', 'Bulan', 'SR terkelompokan sesuai dengan LJK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(420, 37, 86, 430, 4, 'melaksanakan pencetakan SR permintaan IBK', '-', '-', '-', '60', 'SR', '12', 'Bulan', 'Tersedianya SR', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(421, 37, 87, 431, 4, 'mencetak dan mengirimkan SP IBK', '-', '-', '-', '25', 'SP', '12', 'Bulan', 'Tersedianya SP', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(422, 37, 88, 432, 4, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', '-', '-', '-', '25', 'Input', '12', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(423, 37, 89, 433, 4, 'membuat data evaluasi permintaan IBK nasional', '-', '-', '-', '2', 'data evalu', '12', 'Bulan', 'Tersedianya File Data Evaluasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(424, 37, 90, 434, 4, 'membuat laporan rutin pengawasan dan pemanfaatan data IBK nasional', '-', '-', '-', '4', 'laporan', '12', 'Bulan', 'Tersedianya Laporan Rutin', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(425, 37, 91, 435, 4, 'membuat bahan pemaparan evaluasi permintaan IBK nasional', '-', '-', '-', '2', 'bahan papa', '12', 'Bulan', 'Tersedianya File Bahan Pemaparan evaluasi permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(426, 37, 92, 436, 4, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', '-', '-', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya ND Monev', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(427, 37, 93, 437, 4, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', '-', '-', '1', 'Nota Dinas', '12', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(428, 40, 104, 438, 4, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', '-', '-', '-', '1', 'ND', '12', 'Bulan', 'Tersedianya ND permintaan EoI', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(429, 38, 98, 439, 4, 'menyiapkan cenderamata IHT TOPN untuk narasumber dan peserta IHT TOPN', '-', '-', '-', '2', 'Cenderamat', '12', 'Bulan', 'Tersedianya Cenderamata', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(430, 41, 109, 440, 4, 'konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '2', 'Kegiatan', '12', 'Bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(431, 42, 224, 542, 4, 'melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Terselenggaranya rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(432, 43, 131, 441, 4, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', '-', '-', '1', 'Rapat', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(433, 43, 138, 442, 4, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(434, 43, 143, 443, 4, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', '-', '-', '1', 'Pelaksanaa', '12', 'Bulan', 'Tersedia Pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(435, 44, 146, 444, 4, 'menyiapkan bahan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'bahan bimb', '12', 'Bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(436, 44, 147, 445, 4, 'melaksanakan bimbingan teknis permintaan IBK', '-', '-', '-', '2', 'pelaksanaa', '12', 'Bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(437, 45, 149, 446, 4, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', '-', '-', '1', 'IHT', '12', 'Bulan', 'Terselenggaranya IHT', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(438, 45, 150, 447, 4, 'membuat konten kreatif pemeriksaan', '-', '-', '-', '1', 'Konten kre', '12', 'Bulan', 'Per 2 bulan 1 konten kreatif', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(439, 47, 153, 448, 4, 'membuat co-sign konsep MoU dan PKS atas permintaan direktorat/subdirektorat lain', '-', '-', '-', '2', 'Co-sign', '12', 'Bulan', 'Tersedianya ND co-sign atas konsep MoU dan PKS', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(440, 47, 154, 449, 4, 'menghadiri rapat pembahasan konsep MoU dan PKS ', '-', '-', '-', '2', 'Rapat', '12', 'Bulan', 'Terwakilinya kepentingan Direktorat P2 pada saat rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(441, 47, 155, 450, 4, 'membuat laporan penugasan rapat', '-', '-', '-', '2', 'ND Laporan', '12', 'Bulan', 'Tersedianya laporan atas pelaksanaan rapat', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(442, 47, 157, 451, 4, 'mengevaluasi efektivitas PKS dan MoU dengan ILAP terkait dengan kegiatan pemeriksaan dan penagihan', '-', '-', '-', '1', 'ND  ', '12', 'Bulan', 'Tersedianya ND evaluasi', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(443, 48, 158, 452, 4, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', '-', '-', '3', 'Konsep ST', '12', 'Bulan', 'Tersedianya Surat Tugas', '-', '-', '-', '-', '-', 0, 1, 1, ''),
(444, 25, 1, 67, 14, 'Membuat tabel untuk tampilan Dashboard Pemeriksaan', 'Tabel data dari ALPP', 'Tabel data Dashboard Pemeriksaan', 'Data dapat ditampilkan di Aplikasi Dashboard Pemeriksaan', '24', 'Tabel', '12', 'Bulan', 'tidak ada kendala dalam pembuatan tabel baru', '-', 'ada kendala dalam pembentukan tabel ', '-', 'Inventarisir tabel data yang akan dibentuk', 'Subdit Penagihan', 0, 1, 1, ''),
(445, 25, 1, 67, 14, 'Membuat tampilan Aplikasi Dashboard Pemeriksaan', 'Tabel Data', 'Tampilan Dashboard Pemeriksaan', 'Tersedianya aplikasi dashboard pemeriksaan', '22', 'Kertas kerja', '12', 'Bulan', 'Tidak ada kendala dalam penyajian tampilan aplikasi', '-', 'Tidak terbentuknya tampilan dashboard terutama bagian grafik', '-', 'Menggunakan sumber untuk penyajian data yang baik', '-', 0, 1, 1, ''),
(446, 25, 2, 68, 14, 'Pembaharuan menu ', 'Permintaan dari stakeholder', 'Menu baru', 'Terbentuknya menu baru sesuai dengan permintaan', '2', 'Kertas Kerja', '12', 'Bulan', 'tidak ada kendala dalam pengerjaan pembaharuan menu', '-', 'tidak terbentuknya menu baru', '-', 'Menginventarisasi permintaan pemutakhiran data dan menindaklanjutinya sesegera mungkin', 'Subdit Perencanaan, Subdit Teknik dan Pengendalian', 0, 1, 1, ''),
(447, 26, 12, 71, 14, 'Pembentukan database untuk mendukung Aplikasi DAMS', 'Rencana Kegiatan Organisasi Subdit Kersduk', 'Database pendukung Aplikasi DAMS', 'Terbentuknya Sistem Database Aplikasi DAMS', '1', 'Data', '3', 'Bulan', 'tersedianya aplikasi sesuai kebutuhan', '-', 'tidak terpenuhinya permintaan aplikasi sesuai kebutuhan', '-', 'mengetahui kebutuhan aplikasi', 'Subdit Kersduk', 0, 0, 1, ''),
(448, 66, 225, 544, 14, 'tarikdata', 'permintaan', 'data', 'ada data', '1', 'data', '1', 'Hari Kerja', 'a', 'a', 'a', 'a', 'a', 'kersduk', 0, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_st` int(5) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_st`, `nomor`, `tanggal`, `awal`, `akhir`, `tempat`, `agenda`, `status`) VALUES
(1, 'ST-194/PJ.04/2020', '2020-12-15', '2020-03-09', '2020-03-09', 'KPP di WIlayah Jakarta', 'Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 0),
(4, 'ST-193/PJ.04/2020', '2020-10-19', '2020-12-23', '2020-12-23', 'KPP Pratama Mampang Prapatan', 'Makan bersama dia', 1),
(9, 'ST-195/PJ.04/2020', '2021-01-21', '2021-01-28', '2021-01-28', 'KPDJBC', 'breakfast', 1),
(11, 'ST-196/PJ.04/2020', '2021-03-23', '2021-01-29', '2021-01-29', 'BPKP', 'rapat', 1),
(13, 'ST-198/PJ.04/2020', '2021-07-05', '2021-07-05', '2021-07-05', 'Rapat Direktur', 'Ruang Rapat Direktur', 1),
(19, 'ST-199/PJ.04/2020', '2021-07-05', '0000-00-00', '0000-00-00', '', '', 1),
(20, 'ST-17/PJ.0442/2021', '0000-00-00', '0000-00-00', '0000-00-00', 'Ruangan Pak Wishnu', 'Pertemuan Direktur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas_direktur`
--

CREATE TABLE `surat_tugas_direktur` (
  `id_st` int(5) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `sifat` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas_direktur`
--

INSERT INTO `surat_tugas_direktur` (`id_st`, `nomor`, `tanggal`, `awal`, `akhir`, `sifat`, `tempat`, `agenda`, `status`) VALUES
(9, '10/PJ.04/2021', '2021-01-21', '2021-02-01', '2021-02-03', 'Sangat Penting', 'jakarta', 'Rapat dengan Subdit', 0),
(10, 'ST-13/PJ.04/2030', '2021-01-27', '2021-01-27', '2021-01-29', 'Biasa', 'Jakarta Selatan', 'Rapat Pembinaan', 1),
(11, 'ST-12/PJ.04/2021', '2021-02-03', '2021-02-04', '2021-02-05', 'Penting', 'Ruang Rapat Direktur', 'Makan bersama dia', 0),
(12, 'ST-15/PJ.04/2021', '2021-02-08', '2021-02-09', '2021-02-09', 'Penting', 'Ruang Rapat Cakti', 'Rapat Gabungan Pemeriksaan', 1),
(13, 'ST-17/PJ.04/2021', '2021-02-04', '2021-02-15', '2021-02-18', 'Sangat Penting', 'Ruang Rapat Direktur', 'Membahas Prosedur Pemeriksaan Transaksi Afiliasi', 1),
(14, 'ST-20/PJ.04/2021', '2021-02-04', '2021-02-16', '2021-02-17', 'Biasa', 'Ruang Rapat Direktur', 'Membahas Prosedur Pemeriksaan Transaksi Afiliasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tugas_direktur`
--

CREATE TABLE `tugas_direktur` (
  `id_tgdirektur` int(5) NOT NULL,
  `tugas` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `tempat` text NOT NULL,
  `peserta` text NOT NULL,
  `pic` int(2) NOT NULL,
  `laporan` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `status` int(1) NOT NULL,
  `sifat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_direktur`
--

INSERT INTO `tugas_direktur` (`id_tgdirektur`, `tugas`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `tempat`, `peserta`, `pic`, `laporan`, `ket`, `status`, `sifat`) VALUES
(1, 'Membahas Perkembangan Aplikasi Desktop Pemeriksaan', '2021-02-05', '09:00:00', '12:00:00', 'tempat', 'Seluruh Pegawai Subdirektorat Transus', 2, 'Lap-10/PJ.04/2020', 'Rapat Pembahasanan Aplikasi', 0, 'Penting'),
(2, 'Membahas aturan baru PMK110/PJ.04/2020', '2021-02-06', '10:00:00', '12:00:00', 'Ruang Rapat Direktur', 'Seluruh Pegawai Subdirektorat Kersduk', 2, 'Lap-11/PJ.04/2020', 'Rapat Pembahasanan Aplikasi', 1, 'Biasa'),
(5, 'Membahas Perkembangan Aplikasi Desktop Pemeriksaan', '2021-02-05', '09:00:00', '12:00:00', 'Ruang Rapat Cakti', 'Seluruh Pegawai Subdirektorat Transus', 2, 'Lap-10/PJ.04/2020', 'Rapat Pembahasanan Aplikasi', 1, 'Sangat Penting'),
(6, 'Membahas Aturan SE-10', '2021-02-10', '09:00:00', '12:00:00', 'Ruang Rapat Direktur', 'Seluruh Pegawai Subdirektorat Transus', 2, 'Lap-13/PJ.04/2020', 'Rapat Pembahasanan Aplikasi', 1, 'Sangat Penting'),
(7, 'Membahas Raport FPP', '2021-02-09', '09:00:00', '12:00:00', 'Ruang Rapat Gitzjeling', 'Seluruh Pegawai Subdirektorat Transus', 3, 'Lap-12/PJ.04/2020', 'Rapat Pembahasanan Aplikasi', 1, 'Sangat Penting');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_subdit`
--

CREATE TABLE `tugas_subdit` (
  `id_tgsubdit` int(5) NOT NULL,
  `tugas` text NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` text NOT NULL,
  `peserta` text NOT NULL,
  `pic` int(2) NOT NULL,
  `laporan` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_subdit`
--

INSERT INTO `tugas_subdit` (`id_tgsubdit`, `tugas`, `tanggal`, `tempat`, `peserta`, `pic`, `laporan`, `ket`, `status`) VALUES
(1, 'Piloting dan Implementasi Aplikasi Desktop Pemeriksaan dan SIDUPAK', '2020-03-09', 'KPP di Wilayah Jakarta', 'FPP di KPP', 2, '-', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uraian_rki`
--

CREATE TABLE `uraian_rki` (
  `id_rki` int(3) NOT NULL,
  `id_rko` int(3) NOT NULL,
  `id_uraian` int(3) NOT NULL,
  `pic` int(3) NOT NULL,
  `id_peg` int(2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uraian_rki`
--

INSERT INTO `uraian_rki` (`id_rki`, `id_rko`, `id_uraian`, `pic`, `id_peg`, `status`) VALUES
(1, 25, 1, 14, 21, 0),
(2, 25, 6, 16, 21, 0),
(3, 25, 1, 14, 16, 0),
(4, 25, 1, 14, 15, 0),
(5, 63, 222, 21, 21, 1),
(6, 25, 5, 15, 15, 0),
(7, 25, 10, 15, 15, 0),
(8, 28, 15, 15, 15, 0),
(9, 29, 21, 12, 15, 0),
(10, 25, 2, 14, 14, 0),
(11, 25, 3, 14, 14, 0),
(12, 25, 4, 14, 14, 0),
(13, 26, 12, 14, 14, 0),
(14, 27, 14, 14, 14, 0),
(15, 28, 16, 14, 14, 0),
(16, 29, 20, 13, 14, 0),
(17, 30, 24, 14, 14, 0),
(18, 31, 32, 14, 14, 0),
(19, 31, 35, 14, 14, 0),
(20, 31, 36, 14, 14, 0),
(21, 31, 37, 14, 14, 0),
(22, 32, 40, 14, 14, 0),
(23, 32, 42, 14, 14, 0),
(24, 34, 51, 14, 14, 0),
(25, 34, 50, 16, 16, 0),
(26, 33, 45, 16, 16, 0),
(27, 33, 46, 16, 16, 0),
(28, 32, 41, 16, 16, 0),
(29, 31, 31, 16, 16, 0),
(30, 31, 30, 16, 16, 0),
(31, 31, 26, 16, 16, 0),
(32, 25, 5, 15, 15, 1),
(33, 25, 10, 15, 15, 1),
(34, 27, 14, 14, 15, 1),
(35, 28, 15, 15, 15, 1),
(36, 29, 21, 12, 15, 1),
(37, 29, 23, 15, 15, 1),
(38, 30, 24, 14, 15, 1),
(39, 31, 28, 12, 15, 1),
(40, 31, 29, 12, 15, 1),
(41, 31, 32, 14, 15, 1),
(42, 31, 35, 14, 15, 1),
(43, 31, 36, 14, 15, 1),
(44, 31, 37, 14, 15, 1),
(45, 32, 42, 14, 15, 1),
(46, 34, 49, 12, 15, 1),
(47, 34, 51, 14, 15, 1),
(48, 25, 1, 14, 16, 0),
(49, 25, 2, 14, 16, 1),
(50, 28, 15, 15, 16, 1),
(51, 29, 20, 13, 16, 1),
(52, 31, 26, 16, 16, 1),
(53, 31, 30, 16, 16, 1),
(54, 31, 31, 16, 16, 1),
(55, 31, 32, 14, 16, 1),
(56, 31, 35, 14, 16, 1),
(57, 31, 33, 12, 16, 1),
(58, 31, 37, 14, 16, 1),
(59, 31, 38, 13, 16, 1),
(60, 32, 41, 16, 16, 1),
(61, 32, 42, 14, 16, 1),
(62, 33, 45, 16, 16, 1),
(63, 33, 46, 16, 16, 1),
(64, 34, 50, 16, 16, 1),
(65, 34, 51, 14, 16, 1),
(66, 25, 6, 16, 16, 1),
(67, 25, 1, 14, 14, 1),
(68, 25, 2, 14, 14, 1),
(69, 25, 3, 14, 14, 1),
(70, 25, 4, 14, 14, 1),
(71, 26, 12, 14, 14, 1),
(72, 27, 14, 14, 14, 1),
(73, 28, 16, 14, 14, 1),
(74, 29, 20, 13, 14, 1),
(75, 29, 22, 14, 14, 1),
(76, 30, 24, 14, 14, 1),
(77, 31, 32, 14, 14, 1),
(78, 31, 35, 14, 14, 1),
(79, 31, 36, 14, 14, 1),
(80, 31, 37, 14, 14, 1),
(81, 32, 40, 14, 14, 1),
(82, 32, 42, 14, 14, 1),
(83, 34, 47, 12, 14, 1),
(84, 34, 51, 14, 14, 1),
(85, 25, 9, 13, 13, 1),
(86, 25, 11, 13, 13, 1),
(87, 27, 13, 13, 13, 1),
(88, 28, 15, 15, 13, 1),
(89, 28, 19, 13, 13, 1),
(90, 29, 20, 13, 13, 1),
(91, 31, 25, 13, 13, 1),
(92, 31, 30, 16, 13, 1),
(93, 31, 32, 14, 13, 1),
(94, 31, 35, 14, 13, 1),
(95, 31, 37, 14, 13, 1),
(96, 31, 38, 13, 13, 1),
(97, 32, 39, 13, 13, 1),
(98, 32, 42, 14, 13, 1),
(99, 31, 28, 12, 13, 1),
(100, 34, 51, 14, 13, 1),
(101, 25, 8, 12, 12, 1),
(102, 28, 17, 12, 12, 1),
(103, 28, 18, 12, 12, 1),
(104, 29, 21, 12, 12, 1),
(105, 31, 27, 12, 12, 1),
(106, 31, 28, 12, 12, 1),
(107, 31, 29, 12, 12, 1),
(108, 31, 32, 14, 12, 1),
(109, 31, 34, 12, 12, 1),
(110, 31, 35, 14, 12, 1),
(111, 31, 36, 14, 12, 1),
(112, 31, 37, 14, 12, 1),
(113, 32, 42, 14, 12, 1),
(114, 33, 43, 12, 12, 1),
(115, 33, 44, 12, 12, 1),
(116, 34, 47, 12, 12, 1),
(117, 34, 48, 12, 12, 1),
(118, 34, 49, 12, 12, 1),
(119, 34, 51, 14, 12, 1),
(120, 38, 99, 3, 1, 0),
(121, 50, 166, 8, 8, 1),
(122, 51, 168, 8, 8, 1),
(123, 51, 169, 11, 8, 1),
(124, 51, 171, 8, 8, 1),
(125, 51, 170, 11, 8, 1),
(126, 51, 177, 8, 8, 1),
(127, 51, 179, 8, 8, 1),
(128, 51, 183, 8, 8, 1),
(129, 51, 178, 8, 8, 1),
(130, 51, 182, 8, 8, 1),
(131, 51, 181, 8, 8, 1),
(132, 52, 185, 8, 8, 1),
(133, 52, 186, 10, 8, 1),
(134, 54, 197, 9, 8, 1),
(135, 54, 198, 9, 8, 1),
(136, 54, 199, 8, 8, 1),
(137, 58, 212, 11, 8, 1),
(138, 58, 214, 8, 8, 1),
(139, 58, 215, 8, 8, 1),
(140, 58, 216, 8, 8, 1),
(141, 51, 172, 10, 10, 1),
(142, 52, 184, 10, 10, 1),
(143, 52, 187, 10, 10, 1),
(144, 52, 188, 10, 10, 1),
(145, 52, 189, 10, 10, 1),
(146, 52, 190, 10, 10, 1),
(147, 52, 191, 10, 10, 1),
(148, 52, 192, 10, 10, 1),
(149, 53, 193, 10, 10, 1),
(150, 53, 194, 10, 10, 1),
(151, 53, 195, 10, 10, 1),
(152, 53, 196, 10, 10, 1),
(153, 60, 221, 10, 10, 1),
(154, 35, 52, 4, 2, 0),
(155, 36, 54, 2, 2, 0),
(156, 50, 162, 7, 9, 1),
(157, 50, 163, 7, 9, 1),
(158, 50, 164, 7, 9, 1),
(159, 50, 165, 7, 9, 1),
(160, 50, 166, 8, 9, 0),
(161, 50, 167, 7, 9, 1),
(162, 55, 200, 7, 9, 1),
(163, 55, 201, 7, 9, 1),
(164, 55, 202, 7, 9, 1),
(165, 55, 203, 7, 9, 1),
(166, 54, 198, 9, 9, 1),
(167, 59, 217, 9, 9, 1),
(168, 59, 220, 9, 9, 1),
(169, 59, 218, 9, 9, 1),
(170, 59, 219, 9, 9, 1),
(171, 51, 173, 11, 11, 1),
(172, 51, 174, 11, 11, 1),
(173, 51, 175, 11, 11, 1),
(174, 50, 162, 7, 11, 1),
(175, 50, 163, 7, 11, 1),
(176, 51, 169, 11, 11, 1),
(177, 51, 170, 11, 11, 1),
(178, 58, 211, 11, 11, 1),
(179, 58, 212, 11, 11, 1),
(180, 58, 213, 11, 11, 1),
(181, 50, 162, 7, 7, 1),
(182, 50, 163, 7, 7, 1),
(183, 50, 164, 7, 7, 1),
(184, 50, 165, 7, 7, 1),
(185, 50, 166, 8, 7, 1),
(186, 50, 167, 7, 7, 1),
(187, 54, 198, 9, 7, 1),
(188, 54, 197, 9, 7, 1),
(189, 54, 199, 8, 7, 1),
(190, 55, 200, 7, 7, 1),
(191, 55, 201, 7, 7, 1),
(192, 55, 202, 7, 7, 1),
(193, 55, 203, 7, 7, 1),
(194, 59, 217, 9, 7, 0),
(195, 59, 218, 9, 7, 0),
(196, 63, 222, 21, 20, 0),
(197, 63, 222, 21, 22, 1),
(198, 36, 59, 4, 2, 0),
(199, 36, 61, 4, 2, 0),
(200, 36, 62, 4, 2, 0),
(201, 36, 63, 4, 2, 0),
(202, 36, 64, 4, 2, 0),
(203, 36, 65, 4, 2, 0),
(204, 36, 66, 4, 2, 0),
(205, 36, 67, 4, 2, 0),
(206, 36, 69, 4, 2, 0),
(207, 36, 72, 4, 2, 0),
(208, 36, 73, 4, 2, 0),
(209, 36, 77, 2, 2, 0),
(210, 36, 78, 2, 2, 0),
(211, 36, 82, 2, 2, 0),
(212, 37, 86, 4, 2, 0),
(213, 37, 87, 4, 2, 0),
(214, 37, 88, 4, 2, 0),
(215, 37, 92, 4, 2, 0),
(216, 37, 93, 4, 2, 0),
(217, 40, 104, 4, 2, 0),
(218, 38, 94, 2, 2, 0),
(219, 41, 105, 2, 2, 0),
(220, 41, 106, 2, 2, 0),
(221, 41, 109, 4, 2, 0),
(222, 41, 110, 2, 2, 0),
(223, 41, 112, 2, 2, 0),
(224, 42, 113, 2, 2, 0),
(225, 42, 114, 1, 2, 0),
(226, 42, 124, 2, 2, 0),
(227, 43, 127, 2, 2, 0),
(228, 43, 131, 2, 2, 0),
(229, 43, 132, 2, 2, 0),
(230, 43, 139, 2, 2, 0),
(231, 43, 138, 2, 2, 0),
(232, 43, 143, 2, 2, 0),
(233, 43, 144, 2, 2, 0),
(234, 43, 145, 2, 2, 0),
(235, 44, 146, 4, 2, 0),
(236, 44, 147, 4, 2, 0),
(237, 45, 149, 4, 2, 0),
(238, 45, 148, 1, 2, 0),
(239, 45, 150, 4, 2, 0),
(240, 46, 151, 2, 2, 0),
(241, 46, 152, 2, 2, 0),
(242, 47, 156, 2, 2, 0),
(243, 48, 158, 4, 2, 0),
(244, 35, 52, 4, 5, 0),
(245, 35, 53, 5, 5, 0),
(246, 36, 58, 5, 5, 0),
(247, 36, 59, 4, 5, 0),
(248, 36, 61, 4, 5, 0),
(249, 36, 62, 4, 5, 0),
(250, 36, 63, 4, 5, 0),
(251, 36, 64, 4, 5, 0),
(252, 36, 65, 4, 5, 0),
(253, 36, 66, 4, 5, 0),
(254, 36, 67, 4, 5, 0),
(255, 36, 69, 4, 5, 0),
(256, 36, 71, 4, 5, 0),
(257, 36, 72, 4, 5, 0),
(258, 36, 73, 4, 5, 0),
(259, 36, 76, 5, 5, 0),
(260, 36, 83, 3, 5, 0),
(261, 37, 86, 4, 5, 0),
(262, 37, 87, 4, 5, 0),
(263, 37, 88, 4, 5, 0),
(264, 37, 92, 4, 5, 0),
(265, 37, 93, 4, 5, 0),
(266, 40, 104, 4, 5, 0),
(267, 38, 96, 5, 5, 0),
(268, 41, 107, 5, 5, 0),
(269, 41, 109, 4, 5, 0),
(270, 42, 116, 5, 5, 0),
(271, 43, 131, 2, 5, 0),
(272, 43, 130, 5, 5, 0),
(273, 43, 134, 5, 5, 0),
(274, 43, 138, 2, 5, 0),
(275, 43, 142, 5, 5, 0),
(276, 44, 146, 4, 5, 0),
(277, 44, 147, 4, 5, 0),
(278, 45, 149, 4, 5, 0),
(279, 45, 150, 4, 5, 0),
(280, 48, 158, 4, 5, 0),
(281, 35, 52, 4, 6, 1),
(282, 36, 56, 6, 6, 1),
(283, 36, 59, 4, 6, 1),
(284, 36, 60, 6, 6, 1),
(285, 36, 61, 4, 6, 1),
(286, 36, 62, 4, 6, 1),
(287, 36, 63, 4, 6, 1),
(288, 36, 64, 4, 6, 1),
(289, 36, 65, 4, 6, 1),
(290, 36, 66, 4, 6, 1),
(291, 36, 67, 4, 6, 1),
(292, 36, 68, 6, 6, 1),
(293, 36, 69, 4, 6, 1),
(294, 36, 70, 6, 6, 1),
(295, 36, 71, 4, 6, 1),
(296, 36, 72, 4, 6, 1),
(297, 36, 73, 4, 6, 1),
(298, 36, 79, 6, 6, 1),
(299, 36, 80, 6, 6, 1),
(300, 36, 81, 6, 6, 1),
(301, 36, 82, 2, 6, 1),
(302, 36, 84, 6, 6, 1),
(303, 37, 86, 4, 6, 1),
(304, 37, 87, 4, 6, 1),
(305, 37, 88, 4, 6, 1),
(306, 37, 92, 4, 6, 1),
(307, 37, 93, 4, 6, 1),
(308, 40, 104, 4, 6, 1),
(309, 38, 95, 1, 6, 1),
(310, 39, 100, 1, 6, 1),
(311, 39, 101, 1, 6, 1),
(312, 39, 102, 1, 6, 1),
(313, 39, 103, 1, 6, 1),
(314, 41, 109, 4, 6, 1),
(315, 41, 111, 6, 6, 1),
(316, 42, 115, 6, 6, 1),
(317, 43, 131, 2, 6, 1),
(318, 43, 138, 2, 6, 1),
(319, 43, 143, 2, 6, 1),
(320, 44, 146, 4, 6, 1),
(321, 44, 147, 4, 6, 1),
(322, 45, 149, 4, 6, 1),
(323, 45, 150, 4, 6, 1),
(324, 48, 158, 4, 6, 1),
(325, 49, 159, 6, 6, 1),
(326, 49, 160, 6, 6, 1),
(327, 49, 161, 6, 6, 1),
(328, 35, 52, 4, 3, 1),
(329, 36, 59, 4, 3, 1),
(330, 36, 61, 4, 3, 1),
(331, 36, 62, 4, 3, 1),
(332, 36, 63, 4, 3, 1),
(333, 36, 64, 4, 3, 1),
(334, 36, 65, 4, 3, 1),
(335, 36, 66, 4, 3, 1),
(336, 36, 67, 4, 3, 1),
(337, 36, 69, 4, 3, 1),
(338, 36, 71, 4, 3, 1),
(339, 36, 72, 4, 3, 1),
(340, 36, 73, 4, 3, 1),
(341, 36, 75, 3, 3, 1),
(342, 36, 83, 3, 3, 1),
(343, 37, 86, 4, 3, 1),
(344, 37, 87, 4, 3, 1),
(345, 37, 88, 4, 3, 1),
(346, 37, 92, 4, 3, 1),
(347, 37, 93, 4, 3, 1),
(348, 40, 104, 4, 3, 1),
(349, 38, 99, 3, 3, 1),
(350, 41, 105, 2, 3, 1),
(351, 41, 109, 4, 3, 1),
(352, 43, 129, 3, 3, 1),
(353, 43, 131, 2, 3, 1),
(354, 43, 133, 3, 3, 1),
(355, 43, 135, 3, 3, 1),
(356, 43, 136, 3, 3, 1),
(357, 43, 137, 3, 3, 1),
(358, 43, 138, 2, 3, 1),
(359, 43, 141, 3, 3, 1),
(360, 43, 143, 2, 3, 1),
(361, 44, 146, 4, 3, 1),
(362, 44, 147, 4, 3, 1),
(363, 45, 149, 4, 3, 1),
(364, 45, 150, 4, 3, 1),
(365, 46, 152, 2, 3, 1),
(366, 47, 153, 3, 3, 1),
(367, 47, 154, 3, 3, 1),
(368, 47, 155, 3, 3, 1),
(369, 47, 157, 3, 3, 1),
(370, 48, 158, 4, 3, 1),
(371, 35, 52, 4, 1, 1),
(372, 36, 55, 1, 1, 1),
(373, 36, 59, 4, 1, 1),
(374, 36, 61, 4, 1, 1),
(375, 36, 62, 4, 1, 1),
(376, 36, 63, 4, 1, 1),
(377, 36, 64, 4, 1, 1),
(378, 36, 65, 4, 1, 1),
(379, 36, 66, 4, 1, 1),
(380, 36, 67, 4, 1, 1),
(381, 36, 69, 4, 1, 1),
(382, 36, 71, 4, 1, 1),
(383, 36, 72, 4, 1, 1),
(384, 36, 73, 4, 1, 1),
(385, 36, 74, 1, 1, 1),
(386, 36, 80, 6, 1, 1),
(387, 36, 81, 6, 1, 1),
(388, 36, 84, 6, 1, 1),
(389, 37, 86, 4, 1, 1),
(390, 37, 87, 4, 1, 1),
(391, 37, 88, 4, 1, 1),
(392, 37, 92, 4, 1, 1),
(393, 37, 93, 4, 1, 1),
(394, 40, 104, 4, 1, 1),
(395, 38, 95, 1, 1, 1),
(396, 39, 100, 1, 1, 1),
(397, 39, 101, 1, 1, 1),
(398, 39, 102, 1, 1, 1),
(399, 39, 103, 1, 1, 1),
(400, 41, 108, 1, 1, 1),
(401, 41, 109, 4, 1, 1),
(402, 42, 116, 5, 1, 1),
(403, 43, 128, 1, 1, 1),
(404, 43, 131, 2, 1, 1),
(405, 43, 138, 2, 1, 1),
(406, 43, 140, 1, 1, 1),
(407, 43, 143, 2, 1, 1),
(408, 44, 146, 4, 1, 1),
(409, 44, 147, 4, 1, 1),
(410, 45, 149, 4, 1, 1),
(411, 45, 150, 4, 1, 1),
(412, 48, 158, 4, 1, 1),
(413, 35, 52, 4, 4, 1),
(414, 35, 53, 5, 4, 1),
(415, 36, 57, 4, 4, 1),
(416, 36, 59, 4, 4, 1),
(417, 36, 61, 4, 4, 1),
(418, 36, 62, 4, 4, 1),
(419, 36, 63, 4, 4, 1),
(420, 36, 64, 4, 4, 1),
(421, 36, 65, 4, 4, 1),
(422, 36, 66, 4, 4, 1),
(423, 36, 67, 4, 4, 1),
(424, 36, 69, 4, 4, 1),
(425, 36, 71, 4, 4, 1),
(426, 36, 72, 4, 4, 1),
(427, 36, 73, 4, 4, 1),
(428, 36, 82, 2, 4, 1),
(429, 37, 85, 4, 4, 1),
(430, 37, 86, 4, 4, 1),
(431, 37, 87, 4, 4, 1),
(432, 37, 88, 4, 4, 1),
(433, 37, 89, 4, 4, 1),
(434, 37, 90, 4, 4, 1),
(435, 37, 91, 4, 4, 1),
(436, 37, 92, 4, 4, 1),
(437, 37, 93, 4, 4, 1),
(438, 40, 104, 4, 4, 1),
(439, 38, 98, 4, 4, 1),
(440, 41, 109, 4, 4, 1),
(441, 43, 131, 2, 4, 1),
(442, 43, 138, 2, 4, 1),
(443, 43, 143, 2, 4, 1),
(444, 44, 146, 4, 4, 1),
(445, 44, 147, 4, 4, 1),
(446, 45, 149, 4, 4, 1),
(447, 45, 150, 4, 4, 1),
(448, 47, 153, 3, 4, 1),
(449, 47, 154, 3, 4, 1),
(450, 47, 155, 3, 4, 1),
(451, 47, 157, 3, 4, 1),
(452, 48, 158, 4, 4, 1),
(453, 65, 223, 22, 21, 1),
(454, 35, 52, 4, 2, 1),
(455, 36, 54, 2, 2, 1),
(456, 36, 59, 4, 2, 1),
(457, 36, 61, 4, 2, 1),
(458, 36, 62, 4, 2, 1),
(459, 36, 63, 4, 2, 1),
(460, 36, 64, 4, 2, 1),
(461, 36, 65, 4, 2, 1),
(462, 36, 66, 4, 2, 1),
(463, 36, 67, 4, 2, 1),
(464, 36, 69, 4, 2, 1),
(465, 36, 72, 4, 2, 1),
(466, 36, 73, 4, 2, 1),
(467, 36, 77, 2, 2, 1),
(468, 36, 78, 2, 2, 1),
(469, 36, 82, 2, 2, 1),
(470, 37, 86, 4, 2, 1),
(471, 37, 87, 4, 2, 1),
(472, 37, 88, 4, 2, 1),
(473, 37, 92, 4, 2, 1),
(474, 37, 93, 4, 2, 1),
(475, 40, 104, 4, 2, 1),
(476, 38, 94, 2, 2, 1),
(477, 41, 105, 2, 2, 1),
(478, 41, 106, 2, 2, 1),
(479, 41, 109, 4, 2, 1),
(480, 41, 110, 2, 2, 1),
(481, 41, 112, 2, 2, 1),
(482, 42, 113, 2, 2, 1),
(483, 42, 124, 2, 2, 1),
(484, 43, 127, 2, 2, 1),
(485, 43, 131, 2, 2, 1),
(486, 43, 132, 2, 2, 1),
(487, 43, 138, 2, 2, 1),
(488, 43, 139, 2, 2, 1),
(489, 43, 143, 2, 2, 1),
(490, 43, 144, 2, 2, 1),
(491, 43, 145, 2, 2, 1),
(492, 44, 146, 4, 2, 1),
(493, 44, 147, 4, 2, 1),
(494, 45, 149, 4, 2, 1),
(495, 45, 148, 1, 2, 1),
(496, 45, 150, 4, 2, 1),
(497, 46, 151, 2, 2, 1),
(498, 46, 152, 2, 2, 1),
(499, 47, 156, 2, 2, 1),
(500, 48, 158, 4, 2, 1),
(501, 42, 224, 2, 2, 1),
(502, 42, 224, 2, 1, 1),
(503, 35, 52, 4, 5, 1),
(504, 35, 53, 5, 5, 1),
(505, 36, 58, 5, 5, 1),
(506, 36, 59, 4, 5, 1),
(507, 36, 61, 4, 5, 1),
(508, 36, 62, 4, 5, 1),
(509, 36, 63, 4, 5, 1),
(510, 36, 64, 4, 5, 1),
(511, 36, 65, 4, 5, 1),
(512, 36, 66, 4, 5, 1),
(513, 36, 67, 4, 5, 1),
(514, 36, 69, 4, 5, 1),
(515, 36, 72, 4, 5, 1),
(516, 36, 73, 4, 5, 1),
(517, 36, 76, 5, 5, 1),
(518, 36, 83, 3, 5, 1),
(519, 37, 86, 4, 5, 1),
(520, 37, 87, 4, 5, 1),
(521, 37, 88, 4, 5, 1),
(522, 37, 92, 4, 5, 1),
(523, 37, 93, 4, 5, 1),
(524, 40, 104, 4, 5, 1),
(525, 38, 96, 5, 5, 1),
(526, 41, 107, 5, 5, 1),
(527, 41, 109, 4, 5, 1),
(528, 42, 116, 5, 5, 1),
(529, 42, 224, 2, 5, 1),
(530, 43, 130, 5, 5, 1),
(531, 43, 131, 2, 5, 1),
(532, 43, 134, 5, 5, 1),
(533, 43, 138, 2, 5, 1),
(534, 43, 142, 5, 5, 1),
(535, 43, 143, 2, 5, 1),
(536, 44, 146, 4, 5, 1),
(537, 44, 147, 4, 5, 1),
(538, 45, 149, 4, 5, 1),
(539, 45, 150, 4, 5, 1),
(540, 48, 158, 4, 5, 1),
(541, 42, 224, 2, 6, 1),
(542, 42, 224, 2, 4, 1),
(543, 42, 224, 2, 3, 1),
(544, 66, 225, 14, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uraian_rko`
--

CREATE TABLE `uraian_rko` (
  `id_uraian` int(5) NOT NULL,
  `id_rko` int(2) NOT NULL,
  `uraian` text NOT NULL,
  `input` text NOT NULL,
  `output` text NOT NULL,
  `outcomes` text NOT NULL,
  `volume` varchar(25) NOT NULL,
  `jgkwaktu` varchar(20) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jangka` varchar(20) NOT NULL,
  `indikator` text NOT NULL,
  `ket` text NOT NULL,
  `risiko` text NOT NULL,
  `sistem` text NOT NULL,
  `mitigasi` text NOT NULL,
  `pic` int(2) NOT NULL,
  `terkait` varchar(100) NOT NULL,
  `id_sie` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `reg` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uraian_rko`
--

INSERT INTO `uraian_rko` (`id_uraian`, `id_rko`, `uraian`, `input`, `output`, `outcomes`, `volume`, `jgkwaktu`, `satuan`, `jangka`, `indikator`, `ket`, `risiko`, `sistem`, `mitigasi`, `pic`, `terkait`, `id_sie`, `status`, `reg`) VALUES
(1, 25, 'Pemeliharaan Aplikasi Dashboard Pemeriksaan', 'Penerimaan ', 'Tambahan Menu/Update Data', 'Tersedianya dashboard kinerja pemeriksaan secara real-time', '12', '12', 'Kegiatan', 'Hari Kerja', 'tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Menginventarisasi permintaan pemutakhiran data dan menindaklanjutinya sesegera mungkin', 14, 'Subdit Penagihan', 2, 0, ''),
(2, 25, 'Pemeliharaan Aplikasi Monitoring Tunggakan', 'Data Tunggakan dan Progres Pemeriksaan', 'Tambahan Menu/Update Data', 'Tersedianya data real-time sesuai dengan kebutuhan manajerial', '12', '12', 'Kegiatan', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Menginventarisasi permintaan pemutakhiran data dan menindaklanjutinya sesegera mungkin', 14, 'Subdit Perencanaan', 2, 1, ''),
(3, 25, 'Pemeliharaan Aplikasi Manajemen Pemeriksaan Pajak', 'Dokumentasi Pemeriksaan', 'Tambahan Menu/Update Data', 'Tersedianya data real-time sesuai dengan kebutuhan manajerial', '12', '12', 'Kegiatan', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Berkoordinasi dengan Dit. TIK dan Dit. DIP jika ada masalah ketidaksamaan sumber data', 14, 'Dit. DIP, Dit. TIK', 2, 1, ''),
(4, 25, 'Pemeliharaan Aplikasi Digitalisasi LHP', 'Dokumentasi Pemeriksaan', 'Tambahan Menu/Update Data', 'Tercapainya penatausahaan dokumen secara tertib administrasi', '12', '12', 'Kegiatan', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Kordinasi dengan Unit terkait', 14, 'Fungsional Pemeriksa Pajak', 2, 1, ''),
(5, 25, 'Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Tambahan Menu/Update Data', 'Tersedianya Data Real-Time Sesuai dengan Kebutuhan Manajerial', '12', '12', 'Kegiatan', 'Bulan', 'Tidak ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Ada kendala dalam penyajian data dan informasi pemeriksaan', '', 'Koordinasi aktif dengan Dit. DKB untuk melakukan pemutakhiran data hasil sengketa pajak', 15, 'Dit. DKB', 2, 1, ''),
(6, 25, 'Penyusunan Laporan Pemeliharaan Aplikasi Dashboard Pemeriksaan', 'Penerimaan ', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', '10', 'Laporan', 'Hari Kerja', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 16, 'Subdit Kerjasama dan Dukungan Pemeriksaan', 2, 1, ''),
(7, 25, 'Penyusunan Laporan Pemeliharaan Aplikasi Monitoring Tunggakan ', 'Data Tunggakan dan Progres Pemeriksaan', 'Laporan Berkala', 'Pertanggungjawaban pelaksanaan kegiatan', '4', '10', 'Laporan', 'Hari Kerja', 'terselesaikan tepat waktu', '', 'batas waktu pelaporan terlewati', '', 'menyusun laporan pemeliharaan aplikasi dengan segera', 16, 'Subdit Kersduk', 2, 1, ''),
(8, 25, 'Penyusunan Laporan Pemeliharaan Aplikasi Manajemen Pemeriksaan Pajak', 'Dokumentasi Pemeriksaan', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', '10', 'Laporan', 'Hari Kerja', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 12, 'Subdit Kerjasama dan Dukungan Pemeriksaan', 2, 1, ''),
(9, 25, 'Penyusunan Laporan Pemeliharaan Aplikasi Digitalisasi LHP', 'Laporan Hasil Pemeriksaan (LHP)', 'Laporan Berkala', 'Pertanggungjawaban Pelaksanaan Kegiatan', '4', '10', 'Laporan', 'Hari Kerja', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 13, 'Subdit Kerjasama dan Dukungan Pemeriksaan', 2, 1, ''),
(10, 25, 'Penyusunan Laporan Pemeliharaan Aplikasi Database Sengketa Pajak', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Laporan Berkala', 'Pertanggungjawaban pelaksanaan kegiatan', '4', '10', 'Laporan', 'Hari Kerja', 'Laporan dapat Terselesaikan tepat waktu', '', 'Melewati batas waktu pelaporan', '', 'Menyusun laporan pemeliharaan aplikasi dengan segera', 15, 'Subdit Kerjasama dan Dukungan Pemeriksaan', 2, 1, ''),
(11, 25, 'Pemberitahuan Evaluasi Upload LHP pada Aplikasi Digitalisasi LHP', 'Data Penyelesaian Pemeriksaan', 'Nota Dinas', 'Terciptanya Ketertiban Dokumentasi Pemeriksaan', '4', '10', 'Nota Dinas', 'Hari Kerja', 'Terselesaikan tepat waktu', '', 'Keterlambatan pemberitahuan evaluasi upload LHP', '', 'Melakukan monitoring secara berkala atas kegiatan upload LHP', 13, 'Fungsional Pemeriksa Pajak', 2, 1, ''),
(12, 26, 'Pengembangan Aplikasi Daily Activity Monitoring Systems lingkup Subdit', 'Rencana Kinerja Organisasi (RKO) dan Rencana Kerja Individu (RKI)', 'Aplikasi Daily Activity Monitoring Systems lingkup Subdit', 'Tersedianya monitoring pelaksanaan rencana kerja dan realisasinya (lingkup Subdit)\r\n', '1', '3', 'Aplikasi', 'Bulan', 'Tersedianya aplikasi sesuai kebutuhan', '', 'Tidak terpenuhinya permintaan aplikasi sesuai kebutuhan', '', 'Mengetahui kebutuhan aplikasi', 14, 'Subdit Kerjasama dan Dukungan Pemeriksaan', 2, 1, ''),
(13, 27, 'Pemetaan Kebutuhan Data ', 'Nota Dinas Permintaan Data', 'Laporan Berkala Laporan Insidentil', 'Tersedianya Kebutuhan Data yang Sering Diminta dan Tersajinya Data Sesuai dengan Kebutuhan', '12', '12', 'Laporan/Nota Dinas', 'Bulan', 'Terpenuhi semua permintaan data secara tepat waktu', '', 'Tidak terpenuhinya permintaan data secara tepat waktu', '', 'Aktif memetakan jenis data yang sering diminta oleh Subdit lain', 13, 'Semua Subdit', 2, 1, ''),
(14, 27, 'Penarikan dan pengolahan data serta penyajian data', 'ND Permintaan Data', 'Raw Data', 'Tersedia data yang valid guna kepentingan monitoring dan evaluasi kinerja pemeriksaan atau pengambil', '12', '12', 'Raw Data', 'Bulan', 'Terpenuhinya kebutuhan data secara tepat waktu', '', 'tidak terpenuhinya data secara tepat waktu', '', 'Mendokumentasikan semua script penarikan data ', 14, 'Semua Subdit', 2, 1, ''),
(15, 28, 'Membuat Training Need Analysis (TNA) atas Kebutuhan Penyelenggaraan Kegiatan Peningkatan Kapasitas', 'Data Penyelenggaraan Diklat', 'Training Need Analysis (TNA)', 'Penyelenggaraan Kegiatan Peningkatan Kapasitas Sesuai dengan Kebutuhan', '1', '3', 'Naskah', 'Bulan', 'Penyusunan naskah pelaksanaan secara tepat waktu', '', 'Terdapat kegiatan peningkatan kapasitas pegawai yang tidak teridentifikasi yang dibutuhkan oleh pegawai', '', 'Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n', 15, 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Pajak', 2, 1, ''),
(16, 28, 'Membuat Nota Dinas Usulan diklat', 'TNA', 'ND Usulan penyelenggaraan kegiatan ', 'Tercipta pelatihan secara berjenjang dan berkesinambungan bagi Fungsional Pemeriksa Pajak maupun peg', '1', '3', 'Nota Dinas', 'Bulan', 'terselesaikan tepat waktu', '', 'tidak tersampaikannya kebutuhan diklat kepada pihak terkait', '', 'Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak', 14, 'Dit. KITSDA, SetDitjen, Subdit Lain, Pusdiklat Pajak', 2, 1, ''),
(17, 28, 'Pengurusan Korespondensi Terkait Pelaksanaan Kegiatan IHT, Lokakarya, Workshop Bagi e-Auditor', 'Rencana Kegiatan', 'Nota Dinas, Surat Tugas', 'Tersampaikannya Informasi Kegiatan', '5', '5', 'Kegiatan', 'Hari Kerja', 'Tersampaikan tepat waktu', '', 'Tidak tersampaikannya pelaksanaan kegiatan peningkatan kapasitas pegawai kepada pihak terkait', '', 'Berkoordinasi dengan pihak terkait', 12, 'UP2, FPP Dit. P2 dan subdit lain', 2, 1, ''),
(18, 28, 'Penyusunan Laporan Pelaksanaan Kegiatan  IHT, Lokakarya, Workshop Bagi e-Auditor', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '10', '10', 'Kegiatan', 'hari kerja sebelum p', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun laporan pelaksanaan kegiatan dengan segera', 12, '-', 2, 1, ''),
(19, 28, 'Peningkatan Kualitas SDM Pegawai Lainnya.', 'Kebutuhan Peningkatan Kapasitas Bagi Pegawai', 'ND Usulan Penyelenggaraan Kegiatan ', 'Tercipta Pelatihan Bagi Pegawai Subdit untuk Menunjang Peningkatan Kapasitas dan Kompetensi Pegawai', '3', '9', 'kegiatan', 'Bulan', 'Terlaksana tepat waktu', '', 'Tidak terselenggaranya kegiatan peningkatan kualitas SDM pegawai lainnya', '', 'Berkoordinasi dengan pihak terkait', 13, 'Semua seksi di subdit Kerjsama dan Dukungan Pemeriksaan', 2, 1, ''),
(20, 29, 'Pembuatan Clustering Koreksi Pemeriksaan dari Aplikasi Digitalisasi LHP Secara Bertahap', 'Laporan Hasil Pemeriksaan (LHP)', 'Clustering Koreksi pada LHP', 'Tercipta Database Koreksi Pemeriksaan per Wajib Pajak', '1', '12', 'Clustering', 'Bulan', 'Terselesaikan tepat waktu', '', 'Tidak tercluster koreksi pemeriksaan dengan baik', '', 'Clustering secara berkala ', 13, 'Dukungan Teknis Pemeriksaan', 2, 1, ''),
(21, 29, 'Pembuatan Clustering Kekalahan Hasil Putusan Sengketa Pajak pada Aplikasi Database Sengketa Pajak Secara Bertahap', 'Putusan Sengketa Pajak (Gugatan, Keberatan, Banding, Peninjauan Kembali)', 'Clustering Koreksi pada Laporan Hasil Pemeriksaan (LHP)', 'Tercipta Database Kekalahan dalam Sengketa Pajak', '1', '12', 'Clustering', 'Bulan', 'Terselesaikan tepat waktu', '', 'Tidak tercluster kekalahan hasil sengketa pajak dengan baik', '', 'Clusterings secara berkala', 12, 'Dukungan Teknis Pemeriksaan', 2, 1, ''),
(22, 29, 'Penambahan menu clustering koreksi pemeriksaan pada Aplikasi Digitalisasi LHP secara bertahap', 'Clustering Koreksi pada LHP', 'Menu baru pada Aplikasi Digitalisasi LHP', 'Tercipta Knowledge Management atas hasil pemeriksaan \r\n', '1', '1', 'menu', 'Bulan', 'Tersedia menu baru', '', 'Tidak ada penambahan menu baru', '', 'Pengembangan menu baru secara bertahap', 14, 'Dukungan Teknis Pemeriksaan', 2, 1, ''),
(23, 29, 'Penambahan Menu Clustering Kekalahan Hasil Putusan Sengketa Pajak pada Aplikasi Database Sengketa Pajak secara Bertahap', 'Clustering Kekalahan atas Utusan Sengketa Pajak', 'Menu Baru pada Aplikasi Database Sengketa Pajak ', 'Tercipta Knowledge Management Hasil Putusan Sengketa Pajak Guna Pemeriksaan Selanjutnya', '1', '1', 'Menu', 'Bulan', 'Tersedia menu baru', '', 'Tidak ada penambahan menu baru', '', 'Pengembangan menu baru secara bertahap', 15, 'Dukungan Teknis Pemeriksaan', 2, 1, ''),
(24, 30, 'Penyusunan Cetak Biru Tata Kelola TIK Pemeriksaan', 'Data Pemeriksaan', 'Cetak Biru Tata Kelola TIK Pemeriksaan', 'Tercipta Tata kTelola TIK Pemeriksaan yang Rapi Guna Menghasilkan Data yang Valid Berdasarkan Satu Sumber', '1', '6', 'Cetak Biru', 'Bulan', 'Tersusunnya cetak biru tepat waktu', '', 'Tidak tersusunnya cetak biru tata kelola TIK sehingga data pemeriksaan masih belum satu sumber dan berisiko berbeda', '', 'Koordinasi dengan Direktorat TIK, Dit. DIP, dan UP2 tentang validitas sumber data yang digunakan ', 14, 'Dit. DIP, Dit. TIK, Subdit lain terkait', 2, 1, ''),
(25, 31, 'Pembuatan Analisis Kebutuhan Pengembangan Aplikasi Desktop Pemeriksaan Selanjutnya', 'Identifikasi Proses Bisnis Pemeriksaan', 'Lembar Identifikasi Kebutuhan Pengembangan Aplikasi', 'Teridenifikasinya Kebutuhan Pengembangan Aplikasi', '1', '3', 'Lembar Identifikasi', 'Bulan', 'Tersusunnya lembar identifikasi', '', 'Tidak teridentifikasinya kebutuhan user', '', 'Menerima masukan dari UP2 pada saat sosialisasi aplikasi demi penyempurnaan lebih lanjut\r\nKoordinasi dengan Direktorat untuk pengembangan selanjutnya\r\n', 13, 'UP2, Dit. TIK, Dit. DIP, SUBDIT Teknik dan Pengendalian Pemeriksaan', 2, 1, ''),
(26, 31, 'Pembuatan Cetak Biru Aplikasi Desktop Pemeriksaan', 'Konsep Pengembangan Aplikasi', 'Cetak Biru Aplikasi Desktop Pemeriksaan', 'Menyedikan Tools ntuk Membantu Pemeriksa Pajak dalam Rangka Mencapai Pemeriksaan yang Efektif', '1', '3', 'Cetak Biru', 'Bulan', 'Tersusunnya cetak biru tepat waktu', '', 'Tidak tersusunnya cetak biru aplikasi Desktop Pemeriksaan', '', 'Koordinasi dengan Subdit lain dan Direktorat terkait', 16, 'UP2, Dit. TIK, Dit. DIP, SUBDIT Teknik dan Pengendalian Pemeriksaan', 2, 1, ''),
(27, 31, 'Pembentukan KEP Tim Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Nama Tim', 'KEP Tim Piloting dan Implementasi Aplikasi', 'Tercipta Pembagian Tugas Dalam Tim yang Jelas', '1', '1', 'KEP Tim', 'Bulan', 'Penetapan Tim ', '', 'Tidak terbentuknya Tim Piloting dan Implementasi', '', 'Koordinasi dengan Subdit lain dan Direktorat terkait', 12, 'Semua Subdit, Dit. TIK, Dit. DIP, Dit. TPB, Dit. KITSDA, Sdit. P2Humas', 2, 1, ''),
(28, 31, 'Penyusunan Draft Surat Edaran terkait Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Draft Surat Edaran (SE)', 'Tercipta Dasar Hukum dan Panduan dalam Penggunaan Aplikasi', '1', '9', 'Draft Surat', 'Bulan', 'Penetapan Surat Edaran', '', 'Tidak ditetapkannya SE Aplikasi Desktop Pemeriksaan', '', 'Koordinasi dengan Dit. TPB ', 12, 'Dit. TPB, Staf Ahli', 2, 1, ''),
(29, 31, 'Penyusunan dan Pencetakan Manual Book Aplikasi Desktop Pemeriksaan', 'Proses Bisnis dan Tampilan Aplikasi Desktop Pemeriksaan', 'Manual Book Aplikasi', 'Tercipta Panduan Penggunaan Aplikasi', '1', '1', 'Manual Book Aplikasi', 'Bulan', 'Tercetaknya manual book', '', 'Tidak tercetaknya Manual Book', '', 'Pembentukan tim penyusun Manual Book dan melakukan pembagian tugas dengan baik', 12, 'Dit. TIK, Fungsional Pemeriksa Pajak (FPP) yang terlibat', 2, 1, ''),
(30, 31, 'Penyusunan dan Pencetakan Modul FAQ Aplikasi Desktop Pemeriksaan', 'Daftar Pertanyaan User', 'Modul FAQ Aplikasi', 'Kemudahan User dalam Mencari Pemecahan Masalah Dalam Penggunaan Aplikasi', '1', '1', 'Modul FAQ Aplikasi', 'Bulan', 'Tercetaknya modul FAQ', '', 'Tidak tercetaknya modul FAQ', '', 'Pembentukan tim penyusun modul FAQ dan melakukan pembagian tugas dengan baik', 16, 'Dit. TIK, Fungsional Pemeriksa Pajak yang terlibat', 2, 1, ''),
(31, 31, 'Pengurusan Korespondensi Terkait Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi  Kegiatan', '1', '10', 'Nota Dinas', 'Hari Kerja', 'Tersampaikan tepat waktu', '', 'Tidak tersampaikannya pelaksanaan kegiatan ', '', 'Berkoordinasi dengan pihak terkait', 16, 'Kantor Wilayah DJP, Dit. Organta, Subdit Perencanaan', 2, 1, ''),
(32, 31, 'Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Nota Dinas Kegiatan', 'Kegiatan', 'Terselenggaranya Kegiatan dengan Baik ', '1', '2', 'Kegiatan', 'Bulan', 'Terselenggaranya kegiatan dengan baik', '', 'Tidak terlaksananya launching dengan baik', '', 'Berkoordinasi dengan pihak terkait', 14, 'Kantor Wilayah DJP, Dit. Organisasi dan Tatalaksana, Subdit Perencanaan Pemeriksaan', 2, 1, ''),
(33, 31, 'Penyusunan Laporan Pelaksanaan Launching Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '1', '10', 'Laporan Kegiatan', 'hari kerja', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun konsep laporan dengan segera', 12, '-', 2, 1, ''),
(34, 31, 'Penyusunan Timeline kegiatan Piloting dan Implementasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Timeline Piloting dan Implementasi Aplikasi', 'Kegiatan Piloting dan Implementasi Aplikasi Terencana Dengan Baik', '1', '1', 'Timeline kegiatan', 'Bulan', 'Pelaksanaan kegiatan secara tepat waktu dan terencana', '', 'Perencanaan penyusunan kegiatan yang tidak baik', '', 'Pihak terkait', 12, 'Semua Subdit, Dit. TIK', 2, 1, ''),
(35, 31, 'Pengurusan Korespondensi Terkait Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Rencana Kegiatan', 'Nota Dinas', 'Tersampaikannya Informasi  Kegiatan', '1', '4', 'Nota Dinas', 'Bulan', 'Tersampaikan tepat waktu', '', 'Tidak tersampaikannya pelaksanaan kegiatan ', '', 'Berkoordinasi dengan pihak terkait', 14, 'Unit Pelaksana Pemeriksaan (UP2), Dit. TIK, Semua Subdit', 2, 1, ''),
(36, 31, 'Penyusunan Laporan Pelaksanaan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Laporan Kegiatan', 'Pertanggunjawaban Pelaksanaan Kegiatan', '1', '10', 'Laporan Kegiatan', 'Bulan', 'Terselesaikan tepat waktu', '', 'Batas waktu pelaporan terlewati', '', 'Menyusun konsep laporan dengan segera', 14, '-', 2, 1, ''),
(37, 31, 'Pengurusan Biaya Perjalanan Dinas kegiatan Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Bukti Akomodasi', 'Surat Perjalanan Dinas (SPD)', 'Terbayarkannya Segala Akomodasi dalam Menjalankan Perjalanan Dinas', '1', '10', 'Berkas', 'Bulan', 'Terbayarkan sesuai dengan bukti yang ada', '', 'Biaya perjalanan dinas tidak tergantikan', '', 'Berkoordinasi dengan pihak terkait', 14, 'Pelaksana Kegiatan, Bendahara Dit. P2', 2, 1, ''),
(38, 31, 'Pelaksanaan Evaluasi Piloting dan Implementasi Aplikasi Desktop Pemeriksaan', 'Dokumentasi Hasil Kegiatan', 'Lembar Evaluasi', 'Terselenggaranya Kegiatan dengan Baik ', '3', '4', 'Lembar Evaluasi', 'Bulan', 'Teridentifikasi masalah penggunaan aplikasi di lapangan', '', 'Tidak ada evaluasi untuk perbaikan pengembangan aplikasi selanjutnya', '', 'Berkoordinasi dengan pihak terkait untuk melaksanakan evaluasi sesegera mungkin', 13, 'Dit.. TIK, Dit. DIP', 2, 1, ''),
(39, 32, 'Permintaan Ruangan Laboratorium e-Auditor', 'Kebutuhan Ruangan', 'Nota Dinas', 'Tersedianya Ruangan Lab e-Auditor', '1', '3', 'Nota Dinas', 'Bulan', 'Tersedianya ruangan laboratorium', '', 'Tidak tersedianya ruangan untuk Lab e-Auditor', '', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 13, 'Sesditjen', 2, 1, ''),
(40, 32, 'Permintaan Sarana dan Prasarana Laboratorium e-Auditor', 'Kebutuhan Sarana dan Prasarana ', 'Nota Dinas', 'Tersedia Sarana dan Prasarana Lab e-Auditor', '1', '3', 'Nota Dinas', 'Bulan', 'Tersedianya sarana dan prasarana laboratorium', '', 'Tidak tersedianya sarana dan prasarana Laboratorium e-Auditor', '', 'Mengidentifikasi kebutuhan sarana dan prasarana Laboratorium dengan segera ', 14, 'Dit. TIK', 2, 1, ''),
(41, 32, 'Penyusunan Naskah Akademis tentang Laboratorium e-Auditor', 'Konsep Laboratorium', 'Naskah Akademis tentang Laboratorium e-Auditor', 'Terdapat Kejelasan Konsep dan Standar Lab e-Auditor ', '1', '3', 'Naskah Akademis', 'Bulan', 'Tersedia konsep laboratorium', '', 'Tidak ada konsep tentang Laboratorium e-Auditor yang jelas', '', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 16, 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 2, 1, ''),
(42, 32, 'Pelaksanaan Uji Coba Laboratorium eAuditor', '-', 'Kegiatan Uji Coba', 'Berfungsinya Lab e-Auditor dengan Baik', '1', '3', 'Kegiatan', 'Bulan', 'Laboratorium berfungsi dengan baik', '', 'Tidak berfungsinya Laboratorium e-Auditor dengan baik', '', 'Melakukan koordinasi dengan pihak lain yang terkait secara intensif dan berkala', 14, 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 2, 1, ''),
(43, 33, 'Permintaan Usulan Narasumber e-Auditor', 'Nota Dinas permintaan', 'Nota Dinas', 'Tersedia tenaga e-auditor baik sebagai narasumber pelatihan pengolahan data', 'Semua', '12', 'Nota Dinas', 'Bulan', 'tersedianya narasumber', '', 'Tidak terpenuhi permintaan narasumber e-Auditor', '', 'Berkoordinasi dengan pihak terkait', 12, 'FPP Tim e-Auditor', 2, 1, ''),
(44, 33, 'Pembuatan Penugasan Narasumber e-Auditor', 'Nota Dinas Permintaan', 'Surat Tugas', 'Tersedia Tenaga e-Auditor Baik Sebagai Narasumber Pelatihan Pengolahan Data', '1', '12', 'Surat Tugas', 'Bulan', 'Tersedianya narasumber', '', 'Tidak terpenuhi permintaan narasumber e-Auditor', '', 'Berkoordinasi dengan pihak terkait', 12, 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 2, 1, ''),
(45, 33, 'Permintaan Bantuan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Nota Dinas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', '12', 'Nota Dinas', 'Bulan', 'Tersedianya tenaga ahli', '', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '', 'Berkoordinasi dengan pihak terkait', 16, 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 2, 1, ''),
(46, 33, 'Pembuatan penugasan Tenaga Ahli e-Auditor', 'Nota Dinas Permintaan', 'Surat Tugas', 'Tersedia Bantuan Tenaga Ahli Guna Menghasilkan Pemeriksaan yang Berkualitas', '1', '12', 'Surat Tugas', 'Bulan', 'Tersedianya Tenaga Ahli', '', 'Tidak terpenuhinya permintaan bantuan tenaga ahli e-Auditor', '', 'Berkoordinasi dengan pihak terkait', 16, 'Fungsional Pemeriksa Pajak (Tim e-Auditor)', 2, 1, ''),
(47, 34, 'Penyusunan Naskah Akademis tentang e-Auditor DJP', '-', 'Naskah Akademis tentang e-Auditor', 'Terdapat kejelasan dasar hukum dan standardisasi tugas tenaga e-Auditor dalam membantu pelaksanaan e', '1', '1', 'Naskah Akademis', 'Bulan', 'tersusunnya Naskah akademis sebagai dasar hukum e-Aauditor', '', 'tidak ada dasar hukum dan konsep e-Auditor yang jelas', 'SE-25/PJ/2013 tentang Pedoman E-Audit', 'Berkoordinasi dengan pihak terkait', 12, 'Tim e-Auditor', 2, 1, ''),
(48, 34, 'Penyusunan KEP tentang Penunjukan Tim e-Auditor', 'Nama Tim', 'KEP tentang Penunjukan Ttim e-Auditor', 'Tersedianya tenaga e-Auditor yang yang jelas', '1', '1', 'KEP tentang', 'Bulan', 'penetapan Tim', '', 'Tidak terbentuknya tim e-Auditor', '', 'Berkoordinasi dengan pihak terkait', 12, 'Setditjen, Organta, FPP terkait', 2, 1, ''),
(49, 34, 'Penyusunan Draft Surat Edaran Terkait e-Auditor', 'Proses Bisnis e-Audit', 'Konsep Surat Edaran (SE) ', 'Terdapat Kejelasan Dasar Hukum dan Standardisasi Tugas Tenaga e-Auditor dalam Membantu Pelaksanaan eAudit', '1', '10', 'Surat', 'Bulan', 'Penetapan Surat Edaran (SE)', '', 'Tidak ditetapkannya SE terkait e-Auditor', 'SE-25/PJ/2013 tentang Pedoman E-Audit', 'Berkoordinasi dengan pihak terkait', 12, 'Dit. TPB, Staff Ahli', 2, 1, ''),
(50, 34, 'Penyusunan draft Surat Edaran terkait Data Elektronik', 'Pengelolaan Data Elektronik', 'Konsep Surat Edaran (SE) ', 'Terdapat Kejelasan Dasar Hukum tentang Penanganan Data Elektronik', '1', '10', 'Surat', 'Bulan', 'Penetapan Surat Edaran', '', 'Tidak ditetapkannya Surat Edaran tentang data elektronik', '', 'Berkoordinasi dengan pihak terkait', 16, 'Dit. Transformasi Proses Bisnis, Dit. Penegakan Hukum, Dit Kepatuhan Internal dan Transformasi Sumbe', 2, 1, ''),
(51, 34, 'Penyusunan Modul Terkait e-Audit', 'Materi e-Audit', 'Modul ', 'Terdapat Panduan dalam Pelaksanaan e-Audit', '1', '2', 'Modul Terkait', 'Bulan', 'Tersusunnya Modul', '', 'Tidak tersusunnya modul e-Audit', '', 'Berkoordinasi dengan pihak terkait', 14, 'Tim e-Auditor', 2, 1, ''),
(52, 35, 'Menjawab pertanyaan dari stakeholder sehubungan dengan permasalahan di aplikasi Akses Informasi Keuangan', 'Pertanyaan user Aplikasi AsIK', 'Jawaban atas masalah user', 'Terselesaikannya masalah user pada Aplikasi AsIK', '18', '12', 'Pertanyaan', 'Bulan', 'terjawabnya pertanyaan user Aplikasi AsIK', ' - ', 'Tidak terjawabnya pertanyaan user', 'Kertas Kerja Pertanyaan Aplikasi AsIK yang disharing pada 10.254.134.145', 'Memastikan setiap pertanyaan pada PIC diinput pada Kertas Kerja Pertanyaan Aplikasi AsIK', 4, 'Direktorat TTKI', 1, 1, ''),
(53, 35, 'Membuat Frequently Ask Question (FAQ) sehubungan permasalahan pada aplikasi IBK', 'Pertanyaan user Aplikasi AsIK', 'FAQ', 'Tersedianya panduan penanganan masalah pada Aplikasi AsIK', '4', '1', 'FAQ', 'Bulan', 'tersedianya FAQ Aplikasi AsIK yang dapat diakses oleh user', ' FAQ diupload secara triwulanan dengan pembaharuan atas pertanyaan secara berkala ', 'FAQ tidak lengkap dan tidak update', 'Kertas Kerja Pertanyaan Aplikasi AsIK yang disharing pada 10.254.134.145', 'Memastikan setiap pertanyaan pada PIC diinput pada Kertas Kerja Pertanyaan Aplikasi AsIK', 5, 'Direktorat TTKI', 1, 1, ''),
(54, 36, 'membuat Laporan Hasil Rapat pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli BPKP', 'rapat pembuatan konsep Kep Dirjen Tenaga Ahli', 'LHR', 'Tersedianya LHR atas pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Tenaga Ahli BPKP', '1', '1', 'LHR', 'Bulan', 'Tersedianya LHR', '', 'Tidak Tersedianya LHR atas pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Tenaga Ahli BP', 'Pengawasan melekat atasan ', '-', 2, 'BPKP, Reviewer', 1, 1, ''),
(55, 36, 'membuat ND dan Surat Undangan Rapat pembuatan konsep Keputusan Dirketur Jenderal Pajak tentang Penunjukan Tenaga Ahli BPKP', '-', 'ND dan Surat Undangan Rapat', 'Tersedianya undangan rapat resmi', '1', '3', 'Undangan', 'Bulan', 'Tersedianya Undangan', '', 'Tidak Tersedianya undangan rapat resmi', '', '-', 1, 'BPKP, Reviewer', 1, 1, ''),
(56, 36, 'membuat konsep tanda pengenal tenaga ahli BPKP', 'Kep Dirjen tentang Penunjukan Tenaga Ahli', 'ND dan Tanda Pengenal', 'Tersedianya identitas pemeriksa pajak bagi tenaga ahli TOPN', '1', '1', 'Nota Dinas', 'Bulan', 'Tersedianya Nota Dinas', '', 'Tidak Tersedianya identitas pemeriksa pajak bagi tenaga ahli TOPN', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(57, 36, 'menyiapkan sarana dan prasarana rapat pembuatan konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli', '-', 'Buku peminjaman sarana dan prasarana rapat', 'Tersedianya sarpras rapat pembuatan konsep Kep Dirjen Tenaga Ahli', '1', '2', 'Sarpras', 'Bulan', 'Tersedianya Sarpras', '', 'Tidak Tersedianya sarpras rapat pembuatan konsep Kep Dirjen Tenaga Ahli', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(58, 36, 'menyiapkan konsumsi rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', '-', 'ND permintaan konsumsi', 'Tersedianya konsumsi bagi para peserta rapat', '1', '3', 'Nota Dinas', 'Bulan', 'Tersedianya Nota Dinas', '', 'Tidak Tersedianya konsumsi bagi para peserta rapat', '', '-', 5, 'BPKP, Reviewer', 1, 1, ''),
(59, 36, 'melaksanakan rapat pembuatan konsep Keputusan Dirjen tentang Penunjukan Tenaga Ahli', 'Undangan rapat', 'Pelaksanaan rapat', 'kerjasama pemeriksaan yang optimal', '1', '1', 'Pelaksanaan rapat', 'Bulan', 'Terselenggaranya rapat', '', 'Tidak kerjasama pemeriksaan yang optimal', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(60, 36, 'membuat dan mengirimkan surat pengantar LHP, Nothit, dan KKP ke Kantor Pelayanan Pajak tempat Wajib Pajak terdaftar', 'LHP, Nothit, dan KKP hasil pemeriksaan TOPN', 'Surat pengantar', 'Tertib administrasi hasil pemeriksaan TOPN', '15', '12', 'Surat Pengantar', 'Bulan', 'Terkirimnya Surat Pengantar', '', 'Tidak Tertib administrasi hasil pemeriksaan TOPN', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(61, 36, 'melakukan input nota hitung hasil pemeriksaan TOPN ke dalam aplikasi SIDJP', 'Nota hitung hasi pemeriksaan TOPN', 'Nota hitung SIDJP', 'Terinputnya nota hitung hasil pemeriksaan TOPN pada SIDJP', '180', '12', 'Nota Penghitungan', 'Bulan', 'Terinputnya nota hitung pada SIDJP', '', 'Tidak Terinputnya nota hitung hasil pemeriksaan TOPN pada SIDJP', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(62, 36, 'meneruskan permintaan IBK manual TOPN ke Subdit Teknik dan Pengendalian Pemeriksaan', 'Surat permintaan IBK dari ketua harian TOPN', 'ND penerusan permintaan IBK', 'Terkirimnya permintaan IBK manual kepada Subdit Teknik dan Pengendalian Pemeriksaan', '12', '12', 'IBK', 'Bulan', 'Tindaklanjut atas permintaan IBK manual telah terkirim pada Subdit Teknik dan Pengendalian Pemeriksa', '', 'Tidak Terkirimnya permintaan IBK manual kepada Subdit Teknik dan Pengendalian Pemeriksaan', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(63, 36, 'menerbitkan Surat Perintah Pemeriksaan TOPN', 'Instruksi Pemeriksaan', 'SP2', 'Tersedianya konsep SP2 pemeriksaan TOPN', '6', '12', 'SP2', 'Bulan', 'Terbitnya SP2', '', 'Tidak Tersedianya konsep SP2 pemeriksaan TOPN', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(64, 36, 'menerbitkan Surat Pemberitahuan Pemeriksaan Lapangan TOPN', 'SP2', 'SPPL', 'Tersedianya konsep SPPL', '6', '12', 'SPPL', 'Bulan', 'Terbitnya SPPL', '', 'Tidak Tersedianya konsep SPPL', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(65, 36, 'menyediakan sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', 'SPPL', 'Sarana dan prasarana pemanggilan WP TOPN', 'Tersedianya sarana dan prasarana pemanggilan Wajib Pajak TOPN', '1', '12', 'Nota Dinas', 'Bulan', 'Tersedianya sarana dan prasarana sehubungan dengan pemanggilan Wajib Pajak', '', 'Tidak Tersedianya sarana dan prasarana pemanggilan Wajib Pajak TOPN', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(66, 36, 'meneruskan konsep LHP TOPN ke Subdit Pengendali/FPP Anggota Reviewer', 'surat ketua harian TOPN BPKP', 'ND penerusan  ', 'Laporan Pemeriksaan TOPN yang berkualitas', '60', '12', 'Nota Dinas', 'Bulan', 'Tersampaikannya ND dari Tim Pemeriksa/Ketua Harian kepada Subdit Pengendali/FPP anggota reviewer', '', 'Tidak Laporan Pemeriksaan TOPN yang berkualitas', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(67, 36, 'Menerima dan meneruskan hasil reviu Subdit pengendali atas konsep LHP TOPN`dan mengirimkannya ke BPKP', 'ND jawaban subdit/FPP reviewer', 'Surat Penerusan', 'Laporan Pemeriksaan TOPN yang berkualitas', '60', '12', 'Surat  ', 'Bulan', 'Tersampaikannya ND/Surat Review dari Subdit Pengendali/FPP Reviewer kepada Tim Optimalisasi Penerima', '', 'Tidak Laporan Pemeriksaan TOPN yang berkualitas', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(68, 36, 'menyiapkan data pemeriksaan Wajib Pajak dalam bentuk Kertas Kerja Apiseta', 'Instruksi Pemeriksaan', 'Kertas Kerja Apiseta', 'Pemeriksaan Pajak berkualitas', '6', '12', 'Kertas Kerja Apiseta', 'Bulan', 'Tersedianya Kertas Kerja Apiseta yang akan digunakan oleh Pemeriksa TOPN', '', 'Tidak Pemeriksaan Pajak berkualitas', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(69, 36, 'meminta data Wajib Pajak secara fisik/digital ke KPP tempat Wajib Pajak terdaftar', 'Instruksi Pemeriksaan', 'ND Permintaan Wajib Pajak secara fisik/digital ke KPP', 'Pemeriksaan Pajak berkualitas', '3', '12', 'Nota Dinas', 'Bulan', 'Tersedianya dokumen kelengkapan profil Wajib Pajak', '', 'Tidak Pemeriksaan Pajak berkualitas', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(70, 36, 'mengadministrasikan konsep SPHP dan Undangan PAHP TOPN', '-', 'SPHP dan Undangan PAHP TOPN yang sudah diadministrasikan', 'Pemeriksaan Pajak berkualitas', '5', '12', 'Administrasi Konsep SPHP', 'Bulan', 'SPHP dan Undangan PAHP yang sudah dilengkapi dengan penomoran', '', 'Tidak Pemeriksaan Pajak berkualitas', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(71, 36, 'menyusun analisis risiko manual pemeriksaan TOPN', '-', 'Usulan DSPP dan Anrisk TOPN', 'Penerimaan Negara Optimal', '6', '12', 'Anrisk', 'Bulan', 'Tersedianya Anrisk untuk DSPP TOPN', '', 'Tidak Penerimaan Negara Optimal', '', '-', 4, 'BPKP, Reviewer', 1, 0, ''),
(72, 36, 'membuat laporan rutin perkembangan hasil pemeriksaan TOPN', '-', 'ND laporan rutin', 'Pengawasan pemeriksaan TOPN', '12', '12', 'laporan', 'Bulan', 'Tersedianya laporan rutin kepada Direktur P2', '', 'Tidak Pengawasan pemeriksaan TOPN', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(73, 36, 'membuat laporan pelaksanaan kegiatan pembahasan terpadu hasil pemeriksaan TOPN', 'Konsep LHP', 'BA Pemdu', 'Kualitas Pemeriksaan TOPN', '12', '12', 'Berita Acara', 'Bulan', 'Tersedianya BA Pemdu', '', 'Tidak Kualitas Pemeriksaan TOPN', '', '-', 4, 'BPKP, Reviewer', 1, 1, ''),
(74, 36, 'membuat ND dan Surat Undangan Rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', 'Undangan', '', '2', '2', 'Undangan', 'Bulan', 'Tersedianya undangan pemdu', '', 'Tidak Tersedianya undangan pemdu', '', '-', 1, 'BPKP, Reviewer', 1, 1, ''),
(75, 36, 'menyiapkan sarana dan prasarana rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', 'Sarana dan prasarana', '', '2', '2', 'Sarpras', 'Bulan', 'Tersedianya sarana dan prasarana pemdu', '', 'Tidak Tersedianya sarana dan prasarana pemdu', '', '-', 3, 'BPKP, Reviewer', 1, 1, ''),
(76, 36, 'menyiapkan konsumsi rapat pembahasan terpadu hasil pemeriksaan TOPN', '-', 'Paket Konsumsi', '', '2', '2', 'Konsumsi', 'Bulan', 'Tersedianya paket konsumsi pemdu', '', 'Tidak Tersedianya paket konsumsi pemdu', '', '-', 5, 'BPKP, Reviewer', 1, 1, ''),
(77, 36, 'membuat nota dinas dan surat pemberitahuan subdit dan supervisor pengendali mutu pemeriksaan TOPN', '-', 'ND', '', '1', '1', 'Nota Dinas', 'Bulan', 'Tersedianya nota dinas penunjukan reviewer pemeriksaan TOPN', '', 'Tidak Tersedianya nota dinas penunjukan reviewer pemeriksaan TOPN', '', '-', 2, 'BPKP, Reviewer', 1, 1, ''),
(78, 36, 'melakukan revisi SOP Pemeriksaan TOPN', '-', 'ND SOP', '', '1', '1', 'Nota Dinas', 'Bulan', 'Tersedianya SOP baru pemeriksaan TOPN', '', 'Tidak Tersedianya SOP baru pemeriksaan TOPN', '', '-', 2, 'BPKP, Reviewer', 1, 1, ''),
(79, 36, 'membuat konsep Keputusan Direktur Jenderal Pajak tentang Penunjukan Tenaga Ahli ', '-', 'ND dan Konsep KEP', '', '1', '3', 'Konsep Kep Dirjen', 'Bulan', 'Tersedianya Konsep Kep Dirjen Penunjukan Tenaga Ahli', '', 'Tidak Tersedianya Konsep Kep Dirjen Penunjukan Tenaga Ahli', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(80, 36, 'menyiapkan,menganalisis, dan menyajikan data untuk keperluan monitoring dan evaluasi hasil pemeriksaan TOPN', '-', 'Data Monev', '', '2', '2', 'Data Monev', 'Bulan', 'Tersedianya data monev', '', 'Tidak Tersedianya data monev', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(81, 36, 'menyelenggarakan Assesment dan pemetaan kompetensi pemeriksa TOPN (sebagai Tenaga Ahli)', '-', 'Pelaksanaan Assesment', '', '1', '1', 'pelaksanaan assesment', 'Bulan', 'terselenggaranya assesment pemeriksa TOPN', '', 'Tidak terselenggaranya assesment pemeriksa TOPN', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(82, 36, 'membuat soal untuk kepentingan assesment dan pemetaan kompetensi pemeriksa TOPN', '-', 'Soal Assesment', '', '1', '1', 'paket soal', 'Bulan', 'tersedianya soal untuk assesment dan pemetaan kompetensi pemeriksa TOPN', '', 'Tidak tersedianya soal untuk assesment dan pemetaan kompetensi pemeriksa TOPN', '', '-', 2, 'BPKP, Reviewer', 1, 1, ''),
(83, 36, 'mengolah hasil assesment dan membuat data base kompetensi pemeriksa TOPN', '-', 'Data Assesment', '', '1', '1', 'file data base pemeriksa TOPN', 'Bulan', 'tersedianya informasi dari hasil assesment', '', 'Tidak tersedianya informasi dari hasil assesment', '', '-', 3, 'BPKP, Reviewer', 1, 1, ''),
(84, 36, 'membuat peta pengembangan kompetensi berdasarkan hasil assesment', '-', 'Cetak Biru Pengembangan Kompetensi SDM TOPN', '', '1', '1', 'peta pengembangan', 'Bulan', 'tersedianya peta pengembangan kompetensi pemeriksa TOPN', '', 'Tidak tersedianya peta pengembangan kompetensi pemeriksa TOPN', '', '-', 6, 'BPKP, Reviewer', 1, 1, ''),
(85, 37, 'melaksanakan batching permintaan IBK', 'permintaan IBK FPP', 'permintaan yang sudah ter-batch sesuai dengan bank', 'Tersedianya bukti audit yang kompeten dan cukup', '6', '12', 'batching di aplikasi', 'Bulan', 'Tersedianya permintaan yang sudah ter-batch sesuai dengan bank', '', 'Tidak Tersedianya permintaan yang sudah ter-batch sesuai dengan bank', 'Notifikasi pada Aplikasi AsIK', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(86, 37, 'melaksanakan pencetakan SR permintaan IBK', 'permintaan IBK FPP', 'SR', '', '60', '12', 'SR', 'Bulan', 'Tersedianya SR', '', 'Tidak Tersedianya SR', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(87, 37, 'mencetak dan mengirimkan SP IBK', 'permintaan IBK FPP', 'SP', '', '18', '12', 'SP', 'Bulan', 'Tersedianya SP', '', 'Tidak Tersedianya SP', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(88, 37, 'menginput tanggal penerimaan SP IBK oleh LJK/LJK Lainnya/Entitas Lain', 'permintaan IBK FPP', 'Data IBK diterima terinput pada aplikasi', '', '60', '12', 'Input', 'Bulan', 'Tersedianya Data IBK diterima terinput pada aplikasi', '', 'Tidak Tersedianya Data IBK diterima terinput pada aplikasi', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(89, 37, 'membuat data evaluasi permintaan IBK nasional', '-', 'File Data Evaluasi', 'Peningkatan Kepatuhan Permintaan IBK', '2', '12', 'data evaluasi', 'Bulan', 'Tersedianya File Data Evaluasi', '', 'Tidak Tersedianya File Data Evaluasi', 'Pengawasan melekat', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(90, 37, 'membuat laporan rutin pengawasan dan pemanfaatan data IBK nasional', '-', 'Laporan Rutin', '', '4', '12', 'laporan', 'Bulan', 'Tersedianya Laporan Rutin', '', 'Tidak Tersedianya Laporan Rutin', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(91, 37, 'membuat bahan pemaparan evaluasi permintaan IBK nasional', '-', 'File Bahan Pemaparan evaluasi permintaan IBK', '', '2', '12', 'bahan paparan', 'Bulan', 'Tersedianya File Bahan Pemaparan evaluasi permintaan IBK', '', 'Tidak Tersedianya File Bahan Pemaparan evaluasi permintaan IBK', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(92, 37, 'membuat monitoring dan evaluasi terhadap UP2 yang tidak melaksanakan IBK', '-', 'ND monev', '', '1', '12', 'ND monev', 'Bulan', 'Tersedianya ND Monev', '', 'Tidak tersedianya ND monev', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(93, 37, 'membuat evaluasi permintaan IBK bagi Fungsional Pemeriksa Direktorat P2', '-', 'File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '', '6', '12', 'Nota Dinas', 'Bulan', 'Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '', 'Tidak Tersedianya File evaluasi permintaan IBK Fungsional Pemeriksaan Direktorat P2', '', '-', 4, 'FPP. Subdit Pengendali', 1, 1, ''),
(94, 38, 'membuat laporan pelaksanaan kegiatan IHT', '-', 'Laporan Pelaksanaan Kegiatan', 'Peningkatan kapasitas Pemeriksa TOPN', '2', '2', 'Laporan Pelaksanaan Kegiatan', 'bulan', 'Tersedianya Laporan Pelaksanaan Kegiatan', '', 'Tidak Tersedianya Laporan Pelaksanaan Kegiatan', 'Pengawasan melekat', '-', 2, 'BPKP', 1, 1, ''),
(95, 38, 'membuat surat permintaan data nama peserta IHT TOPN', '-', 'surat', '', '2', '2', 'surat', 'bulan', 'Tersedianya surat', '', 'Tidak Tersedianya surat', '', '-', 1, 'BPKP', 1, 1, ''),
(96, 38, 'menyiapkan sarana dan prasarana IHT TOPN', '-', 'Sarpras', '', '2', '2', 'Sarpras', 'bulan', 'Tersedianya Sarpras', '', 'Tidak Tersedianya Sarpras', '', '-', 5, 'BPKP', 1, 1, ''),
(97, 38, 'menyiapkan konsumsi IHT TOPN', '-', 'Permintaan Konsumsi', '', '2', '2', 'Permintaan Konsumsi', 'bulan', 'Tersedianya Permintaan Konsumsi', '', 'Tidak Tersedianya Permintaan Konsumsi', '', '-', 6, 'BPKP', 1, 1, ''),
(98, 38, 'menyiapkan cenderamata IHT TOPN untuk narasumber dan peserta IHT TOPN', '-', 'Cenderamata', '', '2', '2', 'Cenderamata', 'bulan', 'Tersedianya Cenderamata', '', 'Tidak Tersedianya Cenderamata', '', 'koordinasi dengan vendor dua minggu sebelum acara', 4, 'BPKP', 1, 1, ''),
(99, 38, 'mengkoordinasikan narasumber dan membuat nota dinas narasumber IHT TOPN', '-', 'ND', '', '2', '2', 'ND', 'bulan', 'Tersedianya ND', '', 'Tidak Tersedianya ND', '', 'koordinasi dengan narasumber dua minggu sebelum acara IHT', 3, 'BPKP', 1, 1, ''),
(100, 39, 'menerima dan memindai surat masuk ke subdit kerjasama dan dukungan pemeriksaan yang belum tercover oleh NADINE', 'surat masuk', 'pindaian surat masuk', 'Tertib administrasi hasil pemeriksaan', '120', '12', 'pindaian surat masuk', 'bulan', 'Tersedianya pindaian surat masuk', '', 'Tidak Tersedianya surat masuk yang terekam dalam aplikasi persuratan', 'Pengawasan melekat', '-', 1, 'Sekretaris Direktur P2', 1, 1, ''),
(101, 39, 'menerima konsep surat keluar non Nadine (BA, Laporan, Notula, dan dokumen lain) untuk diserahkan kepada kasubdit kerjasama dan dukungan pemeriksaan', 'surat masuk', 'konsep surat keluar', '', '120', '12', 'konsep surat keluar', 'bulan', 'Tersedianya konsep surat keluar', '', 'Tidak Tersedianya konsep surat keluar', '', '-', 1, 'Sekretaris Direktur P2', 1, 1, ''),
(102, 39, 'menerima dan memberikan nomor atas konsep surat keluar non nadine (BA, Laporan, Notula, dan dokumen lain) yang telah ditandatangani kasubdit kerjasama dan dukungan pemeriksaan', 'konsep surat keluar', 'konsep surat keluar yang telah dinomori', '', '60', '12', 'konsep surat keluar', 'bulan', 'Tersedianya konsep surat keluar yang telah dinomori', '', 'Tidak Tersedianya konsep surat keluar yang telah dinomori', '', '-', 1, 'Sekretaris Direktur P2', 1, 1, ''),
(103, 39, 'mengirimkan surat keluar non nadine sesuai dengan tujuan', 'surat keluar', 'surat keluar yang telah terkirim', '', '90', '12', 'konsep surat keluar', 'bulan', 'Tersedianya surat keluar yang telah terkirim', '', 'Tidak Tersedianya surat keluar yang telah terkirim', '', '-', 1, 'Sekretaris Direktur P2', 1, 1, ''),
(104, 40, 'melakukan permintaan EoI kepada Direktur PI berdasarkan usulan FPP Direktorat Pemeriksaan dan Penagihan', 'ND Permintaan EoI', 'Permintaan EoI kepada Direktur PI', 'Peningkatan Kualitas Pemeriksaan', '1', '12', 'ND', 'Bulan', 'Tersedianya ND permintaan EoI', '', 'tidak tersedianya ND permintaan EoI', '', '-', 4, 'Dit.PI', 1, 1, ''),
(105, 41, 'membuat laporan pelaksanaan kegiatan konsinyasi pengembangan aplikasi AsIK', '-', 'laporan', 'Peningkatan kualitas pemeriksaan pajak ', '2', '12', 'laporan', 'bulan', 'Tersedianya laporan pelaksanaan kegiatan konsinyasi', '', 'Tidak Tersedianya laporan pelaksanaan kegiatan konsinyasi', 'pengawasan melekat atasan langsung', '-', 2, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(106, 41, 'menyiapkan materi konsinyasi pengembangan aplikasi AsIK', '-', 'bahan paparan', '', '2', '12', 'bahan paparan', 'bulan', 'Tersedianya materi konsinyasi', '', 'Tidak Tersedianya materi konsinyasi', '', '-', 2, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(107, 41, 'memproses SPD peserta kegiatan konsinyasi pengembangan aplikasi AsIK', '-', 'Dokumen SPD', '', '40', '12', 'Dokumen SPD', 'bulan', 'Pencairan dana SPD Fullboard peserta konsinyasi', '', 'Tidak Pencairan dana SPD Fullboard peserta konsinyasi', '', '-', 5, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(108, 41, 'menyiapkan sarana dan prasarana pengembangan aplikasi AsIK', '-', 'Permintaan', '', '2', '12', 'Permintaan', 'bulan', 'Tersedianya Sarana dan prasarana', '', 'Tidak Tersedianya Sarana dan prasarana', '', '-', 1, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(109, 41, 'konsinyasi pengembangan aplikasi AsIK', '-', 'Kegiatan', '', '2', '12', 'Kegiatan', 'bulan', 'Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '', 'Tidak Pelaksanaan konsinyasi pengembangan aplikasi AsIK', '', '-', 4, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(110, 41, 'menyusun cetak biru pengembangan aplikasi Akses Informasi Keuangan', '-', 'Cetak Biru', '', '1', '12', 'Cetak Biru', 'bulan', 'Cetak biru', '', 'Tidak Cetak biru', '', '-', 2, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(111, 41, 'membuat ND permintaan penyelenggaraan konsinyasi pengembangan aplikasi AsIK dengan mekanisme Fullboard Meeting', '-', 'ND', '', '2', '12', 'ND', 'bulan', 'ND', '', 'Tidak tersedianya ND penyelanggaraan konsinyasi', '', '-', 6, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(112, 41, 'membuat usulan proses bisnis pemanfaatan IBK', '-', 'ND', '', '1', '12', 'ND', 'bulan', 'ND', '', 'Tidak tersedianya ND usulan proses bisnis pemanfaatan IBK', '', '-', 2, 'Dit.TTKI, Dit.DIP, Dit.PI', 1, 1, ''),
(113, 42, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama-internal P2', 'pelaksanaan rapat', 'LHR', 'Kerjasama pemeriksaan yang optimal\r\nPeningkatan Penerimaan Negara', '1', '12', 'LHR', 'Bulan', 'Tersedianya LHR', '', 'Tidak tersedianya LHR', 'Pengawasan melekat atasan langsung', '-', 2, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 1, ''),
(114, 42, 'membuat ND dan surat undangan rapat pembahasan pemeriksaan bersama -internal P2', '-', 'Undangan', '', '1', '12', 'Undangan', 'Bulan', 'Tersedianya Undangan', '', 'Tidak tersedianya Undangan', '', '-', 1, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 1, ''),
(115, 42, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama-internal P2', '-', 'Sarana dan prasarana', '', '1', '12', 'Sarana dan prasarana', 'Bulan', 'Tersedianya Sarana dan prasarana', '', 'Tidak tersedianya sarana dan prasarana', '', '-', 6, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 1, ''),
(116, 42, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama-internal P2', '-', 'Konsumsi rapat', '', '1', '12', 'Konsumsi rapat', 'Bulan', 'Tersedianya Konsumsi rapat', '', 'tidak tersedianya konsumsi', '', '-', 5, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 1, ''),
(117, 42, 'membuat kajian akademis dasar hukum pelaksanaan pemeriksaan bersama', '-', 'Kajian akademis dasar hukum', '', '1', '12', 'Kajian akademis dasar hukum', 'Bulan', 'Tersedianya Kajian akademis dasar hukum', '', 'tidak tersedianya kajian akademis', '', '-', 2, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(118, 42, 'membuat kajian akademis dampak hukum pelaksanaan pemeriksaan bersama', '-', 'Kajian akademis dampak hukum', '', '1', '12', 'Kajian akademis dampak hukum', 'Bulan', 'Tersedianya Kajian akademis dampak hukum', '', 'tidak tersedianya kajian akademis', '', '-', 2, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(119, 42, 'membuat kajian dampak ekonomi pelaksanaan pemeriksaan bersama', '-', 'Kajian akademis dampak ekonomi', '', '1', '12', 'Kajian akademis dampak ekonomi', 'Bulan', 'Tersedianya Kajian akademis dampak ekonomi', '', 'tidak tersedianya kajian akademis', '', '-', 3, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(120, 42, 'mengkompilasi kajian naskah akademis pelaksanaan pemeriksaan bersama', '-', 'Buku Kajian akademis', '', '1', '12', 'Buku Kajian akademis', 'Bulan', 'Tersedianya Buku Kajian akademis', '', 'tidak tersedianya kajian akademis', '', '-', 3, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(121, 42, 'membuat konsep legal drafting RKMK Pemeriksaan Bersama', '-', 'RKMK Pemeriksaan Bersama', '', '1', '12', 'RKMK Pemeriksaan Bersama', 'Bulan', 'Tersedianya RKMK Pemeriksaan Bersama', '', 'tidak tersedianya konsep KMK', '', '-', 2, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(122, 42, 'meminta co-sign atas konsep legal drafting RKMK Pemeriksaan Bersama', '-', 'ND Co-sign', '', '1', '12', 'ND Co-sign', 'Bulan', 'Tersedianya ND Co-sign', '', 'tidak tersedianya ND co-sign', '', '-', 1, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(123, 42, 'memperbaiki konsep RKMK Pemeriksaan Bersama berdasarkan jawaban co-sign', '-', 'RKMK Pemeriksaan Bersama', '', '1', '12', 'RKMK Pemeriksaan Bersama', 'Bulan', 'Tersedianya RKMK Pemeriksaan Bersama', '', 'tidak tersedianya konsep RKMK hasil perbaikan setelah co-sign', '', '-', 6, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(124, 42, 'menghadiri rapat sekretariat pemeriksaan bersama Kemenkeu bersama seluruh stakeholder pemeriksaan bersama pajak dan PNBP', '-', 'laporan pelaksanaan tugas', '', '2', '12', 'laporan pelaksanaan tugas', 'Bulan', 'Tersedianya laporan pelaksanaan tugas', '', 'tidak adanya perwakilan rapat', '', '-', 2, '', 1, 1, ''),
(125, 42, 'menyelenggarakan rapat bersama seluruh stakeholder pemeriksaan bersama pajak dan PNBP', '-', 'laporan hasil rapat', '', '1', '12', 'laporan hasil rapat', 'Bulan', 'Tersedianya laporan hasil rapat', '', 'tidak terselenggaranya rapat', '', '-', 4, '', 1, 0, ''),
(126, 42, 'mengusulkan addendum atas PKS dengan K/L pengelola atau pemeriksa PNBP', '-', 'ND usulan addendum PKS dan MoU', '', '1', '12', 'ND usulan addendum PKS dan MoU', 'Bulan', 'Tersedianya ND usulan addendum PKS dan MoU', '', 'tidak tersedianya usulan adendum', '', '-', 2, 'BPKP, P2Humas, PP1, TPB, PP2', 1, 0, ''),
(127, 43, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP tingkat internal DJP', 'pelaksanaan rapat', 'LHR', 'Kerjasama pemeriksaan yang optimal\r\nPeningkatan Kepatuhan LK', '1', '12', 'LHR', 'bulan', 'Tersedia LHR', '', 'Tidak Tersedia LHR', 'Pengawasan melekat atasan langsung', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(128, 43, 'membuat ND dan surat undangan rapat pembahasan pemeriksaan bersama OJK-DJP  tingkat internal DJP', '-', 'ND undangan', '', '1', '12', 'Undangan', 'bulan', 'Tersedia Undangan', '', 'Tidak Tersedia Undangan', '', '-', 1, 'PP1, Dit.P1, OJK', 1, 1, ''),
(129, 43, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama DJP dan OJK tingkat internal DJP', '-', 'Sarana dan prasarana', '', '1', '12', 'Sarana dan Prasaran', 'bulan', 'Tersedia Sarana dan Prasaran', '', 'Tidak Tersedia Sarana dan Prasaran', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(130, 43, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', '-', 'Konsumsi rapat', '', '1', '12', 'Paket konsumsi', 'bulan', 'Tersedia Paket konsumsi', '', 'Tidak Tersedia Paket konsumsi', '', '-', 5, 'PP1, Dit.P1, OJK', 1, 1, ''),
(131, 43, 'Melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK tingkat internal DJP', 'nd undangan rapat', 'Pelaksanaan rapat', '', '1', '12', 'Pelaksanaan rapat', 'bulan', 'Tersedia Pelaksanaan rapat', '', 'Tidak Tersedia Pelaksanaan rapat', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(132, 43, 'membuat kajian akademis dasar hukum pelaksanaan pemeriksaan bersama OJK-DJP', '-', 'Kajian akademis', '', '1', '12', 'Kajian akademis dasar hukum pelaksanaan pemeriksaa', 'bulan', 'Tersedia Kajian akademis dasar hukum pelaksanaan pemeriksaan bersama', '', 'Tidak Tersedia Kajian akademis dasar hukum pelaksanaan pemeriksaan bersama', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(133, 43, 'membuat kajian akademis dampak hukum pelaksanaan pemeriksaan bersama OJK-DJP', '-', 'Kajian akademis', '', '1', '12', 'Kajian akademis dampak hukum pelaksanaan pemeriksa', 'bulan', 'Tersedia Kajian akademis dampak hukum pelaksanaan pemeriksaan bersama', '', 'Tidak Tersedia Kajian akademis dampak hukum pelaksanaan pemeriksaan bersama', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(134, 43, 'mengkompilasi kajian naskah akademis pelaksanaan pemeriksaan bersama DJP-OJK', '-', 'Buku Kajian akademis', '', '1', '12', 'buku kajian akademis pemeriksaan bersama DJP -OJK', 'bulan', 'Tersedia buku kajian akademis pemeriksaan bersama DJP -OJK', '', 'Tidak Tersedia buku kajian akademis pemeriksaan bersama DJP -OJK', '', '-', 5, 'PP1, Dit.P1, OJK', 1, 1, '');
INSERT INTO `uraian_rko` (`id_uraian`, `id_rko`, `uraian`, `input`, `output`, `outcomes`, `volume`, `jgkwaktu`, `satuan`, `jangka`, `indikator`, `ket`, `risiko`, `sistem`, `mitigasi`, `pic`, `terkait`, `id_sie`, `status`, `reg`) VALUES
(135, 43, 'membuat konsep legal drafting RKMK Pemeriksaan Bersama DJP-OJK', '-', 'Konsep RKMK Pemeriksaan', '', '1', '12', 'Konsep RKMK', 'bulan', 'Tersedia Konsep RKMK', '', 'Tidak Tersedia Konsep RKMK', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(136, 43, 'meminta co-sign atas konsep legal drafting RKMK Pemeriksaan Bersama DJP-OJK', '-', 'ND Co-sign', '', '1', '12', 'ND', 'bulan', 'Tersedia ND', '', 'Tidak Tersedia ND', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(137, 43, 'memperbaiki konsep RKMK Pemeriksaan Bersama DJP-OJK berdasarkan jawaban co-sign direktorat terkait', '-', 'Konsep RKMK Pemeriksaan Fix', '', '1', '12', 'Konsep RPMK', 'bulan', 'Tersedia Konsep RPMK', '', 'Tidak Tersedia Konsep RPMK', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(138, 43, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK Bersama Kemenkeu', 'nd undangan rapat', 'Pelaksanaan rapat', '', '1', '12', 'Pelaksanaan rapat', 'bulan', 'Tersedia Pelaksanaan rapat', '', 'Tidak Tersedia Pelaksanaan rapat', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(139, 43, 'membuat laporan hasil rapat pembahasan pemeriksaan bersama OJK-DJP antara DJP dan OJK', '-', 'LHR', '', '1', '12', 'LHR', 'bulan', 'Tersedia LHR', '', 'Tidak Tersedia LHR', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(140, 43, 'membuat ND dan surat undangan rapat pembahasan pemeriksaan bersama OJK-DJP antara DJP dan OJK', '-', 'ND undangan', '', '1', '12', 'Undangan', 'bulan', 'Tersedia Undangan', '', 'Tidak Tersedia Undangan', '', '-', 1, 'PP1, Dit.P1, OJK', 1, 1, ''),
(141, 43, 'menyiapkan sarana dan prasarana rapat pembahasan pemeriksaan bersama DJP-OJK antara DJP dan OJK', '-', 'Sarana dan prasarana rapat', '', '1', '12', 'Sarana dan Prasaran', 'bulan', 'Tersedia Sarana dan Prasaran', '', 'Tidak Tersedia Sarana dan Prasaran', '', '-', 3, 'PP1, Dit.P1, OJK', 1, 1, ''),
(142, 43, 'menyiapkan konsumsi rapat pembahasan pemeriksaan bersama DJP-OJK antara DJP dan OJK', '-', 'Konsumsi rapat', '', '1', '12', 'Paket konsumsi', 'bulan', 'Tersedia Paket konsumsi', '', 'Tidak Tersedia Paket konsumsi', '', '-', 5, 'PP1, Dit.P1, OJK', 1, 1, ''),
(143, 43, 'melaksanakan rapat pembahasan pemeriksaan bersama DJP-OJK', 'nd undangan rapat', 'Pelaksanaan rapat', '', '1', '12', 'Pelaksanaan rapat', 'bulan', 'Tersedia Pelaksanaan rapat', '', 'Tidak Tersedia Pelaksanaan rapat', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(144, 43, 'membuat usulan addendum PKS atau perubahan MoU dengan OJK', '-', 'ND usulan addendum PKS dan MoU', '', '1', '12', 'ND usulan addendum PKS atau perubahan MoU', 'bulan', 'Tersedia ND usulan addendum PKS atau perubahan MoU', '', 'Tidak Tersedia ND usulan addendum PKS atau perubahan MoU', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(145, 43, 'menyiapkan bahan rapat pembahasan pemeriksaan bersama DJP-OJK', '-', 'Buku Bahan pembahasan', '', '1', '12', 'bahan pemaparan pemeriksaan bersama DJP-OJK', 'bulan', 'Tersedia bahan pemaparan pemeriksaan bersama DJP-OJK', '', 'Tidak Tersedia bahan pemaparan pemeriksaan bersama DJP-OJK', '', '-', 2, 'PP1, Dit.P1, OJK', 1, 1, ''),
(146, 44, 'menyiapkan bahan bimbingan teknis permintaan IBK', 'permintaan bimbingan teknis permintaan IBK', 'bahan bimbingan', 'Peningkatan kepatuhan permintaan IBK', '2', '12', 'bahan bimbingan', 'bulan', 'Tersedianya bahan bimbingan teknis permintaan IBK', '', 'Tidak tersedianya bahan bimbingan teknis permintaan IBK', 'Pengawasan melekat atasan langsung', '', 4, 'Dit.TTKI', 1, 1, ''),
(147, 44, 'melaksanakan bimbingan teknis permintaan IBK', 'permintaan bimbingan teknis permintaan IBK', 'pelaksanaan bimbingan', 'Peningkatan kepatuhan permintaan IBK', '2', '12', 'pelaksanaan bimbingan', 'bulan', 'Terlaksananya bimbingan teknis permintaan IBK', '', 'tidak terlaksanannya bimbingan teknis permintaan IBK', '', '', 4, 'UP2', 1, 1, ''),
(148, 45, 'membuat ND Permintaan Konten Kreatif Pemeriksaan dan Penagihan', '-', 'ND undangan', '', '1', '1', 'ND undangan', 'Bulan', '', '', 'Tidak tersedianya undangan rapat konten kreatif pemeriksaan', '', 'Koordinasi dengan seluruh Subdit di lingkungan Direktorat P2 terkait dengan kebutuhan publikasi konten kreatif', 1, 'Seluruh Subdit P2', 1, 1, ''),
(149, 45, 'mengikuti diklat dalam rangka pembuatan konten kreatif pemeriksaan', '-', 'pelaksanaan diklat', '', '1', '1 hari', 'diklat', 'Bulan', '', '', 'tidak terselenggaranya diklat konten kreatif pemeriksaan', '', 'Koordinasi dengan seluruh Subdit di lingkungan Direktorat P2 terkait dengan kebutuhan publikasi konten kreatif', 4, 'Seluruh Subdit P2', 1, 1, ''),
(150, 45, 'membuat konten kreatif pemeriksaan', '-', 'Konten Kreatif Pemeriksaan', 'Seluruh Stakeholder di bidang pemeriksaan pajak mendapatkan pemahaman yang sama mengenai kebijakan p', '6', '12', 'Konten kreatif pemeriksaan', 'Bulan', 'Per 2 bulan 1 konten kreatif', '', 'tidak adanya konten kreatif pemeriksaan', '', 'Koordinasi dengan seluruh Subdit di lingkungan Direktorat P2 terkait dengan kebutuhan publikasi konten kreatif', 4, 'Seluruh Subdit P2', 1, 1, ''),
(151, 46, 'membuat co-sign regulasi atas permintaan direktorat/subdirektorat lain', 'ND permintaan co-sign', 'ND', 'regulasi perpajakan yang berkualitas', '6', '12', 'ND Co-sign', 'Bulan', 'Tersedianya co-sign atas regulasi', '', '', 'Pengawasan melekat atasan langsung', '', 2, '', 1, 1, ''),
(152, 46, 'membuat usulan terkait penyempurnaan regulasi IBK', '-', 'ND', 'regulasi IBK yang berkualitas', '1', '1', 'ND Co-sign', 'Bulan', 'Tersedianya usulan penyempurnaan regulasi IBK', '', '', '', '', 2, '', 1, 1, ''),
(153, 47, 'membuat co-sign konsep MoU dan PKS atas permintaan direktorat/subdirektorat lain', 'ND permintaan co-sign', 'ND jawaban co-sign', 'Kerjasama Pemeriksaan yang optimal', '2', '12', 'Co-sign', 'bulan', 'Tersedianya ND co-sign atas konsep MoU dan PKS', '', 'Tidak tersedianya co-sign konsep MoU dan PKS', 'Pengawasan melekat atasan langsung', 'Koordinasi dengan Seksi Kerjasama Dalam Negeri Dit. P2 Humas', 3, 'P2Humas', 1, 1, ''),
(154, 47, 'menghadiri rapat pembahasan konsep MoU dan PKS ', 'Undangan rapat', 'Pelaksanaan rapat', 'Kerjasama Pemeriksaan yang optimal', '2', '12', 'Rapat', 'bulan', 'Terwakilinya kepentingan Direktorat P2 pada saat rapat', '', 'Tidak terwakilinya kepentingan Direktorat P2 pada saat rapat', '', 'Koordinasi dengan Seksi Kerjasama Dalam Negeri Dit. P2 Humas', 3, 'P2Humas', 1, 1, ''),
(155, 47, 'membuat laporan penugasan rapat', 'Pelaksanaan rapat', 'ND laporan penugasan rapat', 'Tertib administrasi pekerjaan ', '2', '12', 'ND Laporan Rapat', 'bulan', 'Tersedianya laporan atas pelaksanaan rapat', '', 'Tidak tersedianya laporan rapat', '', 'Koordinasi dengan Seksi Kerjasama Dalam Negeri Dit. P2 Humas', 3, 'P2Humas', 1, 1, ''),
(156, 47, 'menginventarisasi MoU dan PKS yang akan jatuh tempo', 'Portal P2Humas', 'Daftar MoU', 'Kerjasama Pemeriksaan yang optimal', '1', '1', 'Daftar PKS dan MoU ', 'bulan', 'Tersedianya daftar MoU dan PKSA yang akan jatuh tempo', '', 'Tidak tersedianya daftar MoU dan PKS yang akan jatuh tempo', '', 'Koordinasi dengan Seksi Kerjasama Dalam Negeri Dit. P2 Humas', 2, 'P2Humas', 1, 1, ''),
(157, 47, 'mengevaluasi efektivitas PKS dan MoU dengan ILAP terkait dengan kegiatan pemeriksaan dan penagihan', 'ND evaluasi MoU', 'ND Evaluasi', 'Kerjasama Pemeriksaan yang optimal', '1', '1', 'ND  ', 'bulan', 'Tersedianya ND evaluasi', '', 'Tidak tersedianya data evaluasi atas MoU dan PKS', '', 'Koordinasi dengan Seksi Kerjasama Dalam Negeri Dit. P2 Humas', 3, 'P2Humas', 1, 1, ''),
(158, 48, 'membuat konsep surat tugas terkait pelaksanaan kegiatan seksi kerjasama pemeriksaan', '-', 'Konsep Surat Tugas', 'Tertib administrasi pekerjaan', '18', '12', 'Konsep ST', 'bulan', 'Tersedianya Surat Tugas', '', 'Tidak tersedianya Surat Tugas', 'pengawasan melekat atasan langsung', '', 4, 'Subbag TU', 1, 1, ''),
(159, 49, 'membuat revisi anggaran', 'Permintaan revisi anggaran', 'ND revisi anggaran', 'penggunaan dan penyerapan anggaran secara optimal', '1', '1', 'ND', 'bulan', 'Tersedianya nota dinas revisi anggaran', '', 'Tidak tersedianya anggaran revisi', 'Review dan pengawasan melekat atasan langsung', 'koordinasi dengan PPK dan Subbag TU Direktorat P2', 6, 'Subbag TU', 1, 1, ''),
(160, 49, 'melaksanakan rapat pembahasan usulan anggaran tahun 2021', 'ND undangan pembahasan anggaran', 'Rapat', 'penggunaan dan penyerapan anggaran secara optimal', '1', '1', 'rapat', 'bulan', 'Terakomodasinya anggaran Seksi Kerjasama Pemeriksaan pada saat rapat pembahasan usulan anggaran ', '', 'Tidak adanya perwakilan Seksi Kerjasama pada saat rapat', '', 'koordinasi dengan PPK dan Subbag TU Direktorat P2', 6, 'Subbag TU', 1, 1, ''),
(161, 49, 'menyusun konsep anggaran tahun 2021', 'Permintaan usulan anggaran tahun 2021', 'ND Usulan anggaran', 'penggunaan dan penyerapan anggaran secara optimal', '1', '1', 'ND', 'bulan', 'Tersedianya anggaran kerja TA 2021 Seksi Kerjasama Pemeriksaan', '', 'Over/Under Budget', '', 'koordinasi dengan PPK dan Subbag TU Direktorat P2', 6, 'Subbag TU', 1, 1, ''),
(162, 50, 'Undang rapat perwakilan Kasie Rik dan adbim Rik untuk finaslisasi menu- menu di ALPP.\r\n', 'Kebutuhan', 'LHR', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Adanya masukan mengenai aplikasi yang dibutuhkan', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 7, 'Dit. TIK dan DIP', 3, 1, ''),
(163, 50, 'Undang rapat TIK dan DIP untuk membahas kemungkinan pengalihan aplikasi ALPP ke AMPP dengan catatan flexibilitas aplikasi tetap dipertahankan', 'Kebutuhan', 'Kesepakatan menu yang akan dipertahankan di ALPP/ AMPP', 'Pemeriksaan yang efektif dan berkualitas', '2', '1', 'LHR', 'Bulan', 'Terselenggaranya rapat', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 7, 'Dit. TIK dan DIP', 3, 1, ''),
(164, 50, 'Membentuk Tim untuk migrasi menu- menu di ALPP ke AMPP', 'Kebutuhan', 'Kesepakatan mengenai merger atau penggabungan ALPP ke dalam AMPP dan kesediaan TIK dan DIP untuk mengakomodasi usulan perubahan aplikasi dari Dir. P2', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'KEP Tim', 'Bulan', 'Terbentuknya Tim', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 7, 'Dit. TIK dan DIP', 3, 1, ''),
(165, 50, 'Menyediakan menu baru berupa data pemeriksaan yang bisa diambil sesuai kebutuhan masing- masing', 'Kebutuhan', 'Menu baru yang dapat memenuhi kebutuhan user secara lebih flexible', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Menu Baru', 'Bulan', 'Tersedianya menu baru', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 7, 'Dit. TIK dan DIP', 3, 1, ''),
(166, 50, 'Sosialisasi menu data yang dapat diolah sesuai kebutuhan masing', 'Kebutuhan', 'Kegiatan sosialisasi kepada Kasie Rik/ Adbim Rik dan 1 pelaksananya di KPDJP', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Sosialisasi', 'Bulan', 'Terselenggaranya sosialisasi', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 8, 'Dit. TIK dan DIP', 3, 1, ''),
(167, 50, 'Membentuk Tim LO untuk mengatasi permasalahan terkait aplikasi di masa transisi', 'Kebutuhan', 'Tim LO dan uraian tugas- tugasnya', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'KEP Tim LO', 'Bulan', 'Terbentuknya Tim LO', '-', 'Penggabungan ALPP ke AMPP tidak dapat dilakukan', 'Peraturan Direktur Jenderal Pajak Nomor PER-37/PJ/2010 tentang Kebijakan Tata Kelola Teknologi Informasi dan Komunikasi DJP\r\n2. Surat Edaran Nomor SE-30/PJ/2019 tentang Kebijakan Tata Kelola Kewenangan Akses Data Perpajakan DJP', 'Berkoordinasi dengan Dit. DIP dan Dit. TIK mengenai penggabungan ALPP ke AMPP', 7, 'Dit. TIK dan DIP', 3, 1, ''),
(168, 51, 'Mempelajari statistik sengketa pajak, laporan peer review, temuan BPK, masukan dari FPP.\r\n', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kebutuhan IHT wajib nasional', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Usulan tema IHT', 'Bulan', 'Diperolehnya topik  IHT sesuai dengan kebutuhan', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, 'Pusdiklat Pajak', 3, 1, ''),
(169, 51, 'Rapat koordinasi Subdit terkait, KITSDA', 'Kebutuhan, surat dari Pusdiklat Pajak', '1. Usulan Diklat\r\n2. Rencana topik IHT nasional', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Usulan Diklat/ Rencana topik IHT nasional', 'Bulan', 'Terbentuknya usulan diklat/ rencana topik IHT nasional', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, 'Pusdiklat Pajak', 3, 1, ''),
(170, 51, 'Koordinasi persiapan diklat dengan Pusdiklat Pajak ', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kesepakatan mengenai kurikulum, jamlat, peserta, metode diklat', 'Pemeriksaan yang efektif dan berkualitas', '2', '12', 'Kurikulum diklat', 'Bulan', 'Disepakatinya kurikulum, jamlat, peserta, metode diklat baru', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, 'Pusdiklat Pajak', 3, 1, ''),
(171, 51, 'Koordinasi persiapan IHT nasional dengan Subdit, Dit, dan UP2 terkait', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kesepakatan mengenai materi, peserta, waktu pelaksanaan IHT, narasumber', 'Pemeriksaan yang efektif dan berkualitas', '2', '1', 'Materi IHT nasional', 'Bulan', 'Disepakatinya materi, peserta, waktu pelaksanaan IHT, narasumber', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, 'Pusdiklat Pajak', 3, 1, ''),
(172, 51, 'Pelaksanaan IHT sesuai dengan hasil analisis pada butir 1\r\n', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kegiatan IHT', 'Pemeriksaan yang efektif dan berkualitas', '1', '2', 'IHT', 'Bulan', 'Terselenggaranya IHT', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 10, '1. Subdit terkait di P2\n2. Dit terkait\n3. UP2 terkait', 3, 1, ''),
(173, 51, 'Pelaksanaan Diklat :', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Kegiatan Diklat', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Diklat', 'Bulan', 'Terselenggaranya diklat', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(174, 51, 'Penyediaan narasumber', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Laporan', 'Bulan', '', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(175, 51, 'Usulan peserta', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Cetak biru SDM Pemeriksa Pajak', 'Bulan', '', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(176, 51, 'Evaluasi pasca pembelajaran', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'aturan terkait', 'Bulan', '', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 11, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(177, 51, 'Menyusun desain pengembangan kompetensi Pemeriksa Pajak ', 'Kebutuhan, surat dari Pusdiklat Pajak', 'Cetak biru SDM Pemeriksa Pajak', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'bahan/ konsep', 'Bulan', 'Tersusunnya cetak biru SDM Pemeriksa Pajak', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(178, 51, 'Mempelajari aturan terkait pengembangan kompetensi Pemeriksa Pajak', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Diperolehnya aturan terkait', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(179, 51, 'Menyiapkan bahan/ konsep pengembangan kompetensi Pemeriksa Pajak', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Tersusunnya bahan/ konsep', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(180, 51, 'Rapat dengan seluruh Subdit di Dit. P2', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Terselenggaranya rapat', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(181, 51, 'Rapat dengan Dit. KITSDA dan Sesditjen', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Cetak biru SDM Pemeriksa Pajak', 'Bulan', 'Terselenggaranya rapat', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(182, 51, 'Rapat dengan Pusdiklat Pajak', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Terselenggaranya rapat', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(183, 51, 'Finalisasi desain pengembangan kompetensi Pemeriksa Pajak', 'Kebutuhan, surat dari Pusdiklat Pajak', '', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Cetak biru SDM Pemeriksa Pajak', 'Bulan', 'Tersusunnya cetak biru SDM Pemeriksa Pajak', '-', '1. UP2 tidak mampu mengidentifikasi kebutuhan IHT\r\n2. Materi IHT belum tersedia di aplikasi ANTARIKSA\r\n3. Ketersediaan trainer tidak sesuai kebutuhan\r\n4. Desain pengembangan kompetensi Pemeriksa Pajak tidak sejalan dengan ketentuan yang telah berlaku', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. Nota Dinas Direktur Pemeriksaan dan Penagihan Nomor ND-304/PJ.04/2019 tentang Pelaksanaan Desentralisasi Peningkatan Kompetensi SDM Pemeriksa', '1. Sosialisasi buku pedoman Desentralisasi Pelatihan Pemeriksa Pajak\r\n2. Berkoordinasi aktif dengan Dit. KITSDA, Subdirektorat terkait di lingkungan Dit. P2, dan Setditjen untuk memberikan usulan diklat baik bagi FPP maupun pegawai lainnya\r\n3. Kerjasama penyelenggaraan pendidikan dan pelatihan (diklat) berjenjang tentang pemeriksaan (termasuk e-Audit) maupun materi pendukung lainnya dengan Pusdiklat Pajak\r\n4. Mempelajari ketentuan tentang pengembangan kompetensi pegawai DJP dan berkoordinasi dengan pihak- pihak terkait\r\n', 8, '1. KITSDA\r\n2. Subdit terkait di P2\r\n3. Sekretariat DJP\r\n4. BPPK', 3, 1, ''),
(184, 52, 'Monitoring kegiatan IHT di unit vertikal melalui aplikasi Antariksa untuk memastikan dokumentasi knowledge berjalan baik', 'Kebutuhan', 'Slide dan modul pemeriksaan\r\n', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Slide dan modul pemeriksaan', 'Bulan', 'Terkumpulnya slide dan modul pemeriksaan yang baru', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP2', 3, 1, ''),
(185, 52, 'Menyiapkan bahan dan kegiatan success story sharing', 'Kebutuhan', 'Buku success story pemeriksaan', 'Pemeriksaan yang efektif dan berkualitas', '1', '6', 'Buku ', 'Bulan', 'Tercetaknya buku success story pemeriksaan', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile', 8, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP3', 3, 1, ''),
(186, 52, 'Mendorong penulisan success story atau tips dan trick dalam pemeriksaan kemudian mengunggahnya di aplikasi Antariksa', 'Kebutuhan', 'Success story, tips dan trick pemeriksaan yang diunggah di aplikasi antariksa', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Success story, tips dan trick pemeriksaan ', 'Bulan', 'Terkumpulnya success story, tips dan trick pemeriksaan di aplikasi antariksa', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP4', 3, 1, ''),
(187, 52, 'Mengkaji pelaksanaan akuisisi knowledge melalui suatu forum diskusi online yang dirancang untuk dapat menggali, memvalidasi dan mendokumentasikan knowledge secara memadai', 'Kebutuhan', 'Hasil kajian', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Hasil kajian', 'Bulan', 'Terkajinya pelaksanaan akuisisi knowledge melalui suatu forum diskusi online', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP5', 3, 1, ''),
(188, 52, 'Validasi materi IHT dan modul yang ada di Aplikasi ANTARIKSA serta mengkonversi ke dalam format wiki', 'Kebutuhan', 'Materi IHT dan modul yang tervalidasi dan siap diunggah di Aplikasi KOMPATRIOT', 'Pemeriksaan yang efektif dan berkualitas', '1', '12', 'Materi IHT', 'Bulan', 'Materi IHT dan modul yang tervalidasi dan siap diunggah di Aplikasi KOMPATRIOT', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP6', 3, 1, ''),
(189, 52, 'Clustering materi IHT dan modul menjadi tiga level yaitu level basic, level intermediate, dan level spesialisasi/sektoral', 'Kebutuhan', 'Materi IHT dan Modul di Aplikasi Antariksa yang telah divalidasi dan diberi tag level', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Materi IHT', 'Bulan', 'Materi IHT dan Modul di Aplikasi Antariksa yang telah divalidasi dan diberi tag level', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP7', 3, 1, ''),
(190, 52, 'IHT wajib untuk FPP yang baru diangkat dengan tema yang ditentukan oleh Kantor Pusat dilaksanakan oleh kanwil atau masing- masing KPP', 'Kebutuhan', 'ND Dir P2 tentang instruksi IHT untuk FPP yang baru diangkat dengan topik yang ditentukan ', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'ND Dir P2', 'Bulan', 'Terselenggaranya IHT', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP8', 3, 1, ''),
(191, 52, 'IHT yang dilakukan oleh unit vertikal dengan topik wajib nasional dan topik tambahan sesuai dengan kebutuhan masing-masing unit kerja', 'Kebutuhan', 'Terselenggaranya IHT oleh unit vertikal sesuai kebutuhan masing- masing', 'Pemeriksaan yang efektif dan berkualitas', '8', '12', 'IHT', 'Bulan', 'Terselenggaranya IHT', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP9', 3, 1, ''),
(192, 52, 'Monitoring dan evaluasi pelaksanaan kegiatan IHT oleh unit vertikal', 'Kebutuhan', 'Laporan hasil monitoring', 'Pemeriksaan yang efektif dan berkualitas', '1', '4', 'Laporan', 'Bulan', 'Semua unit vertikal telah melaksanakan IHT dengan topik wajib dan topik tambahan', '-', '1. UP2 tidak melaksanakan IHT\r\n2. Dukungan dari Kepala UP2 kurang\r\n3. Partisipasi FPP rendah\r\n4. Kebiasaan dan kemampuan sharing knowledge belum terwujud\r\n5. Tingkat utilisasi Aplikasi ANTARIKSA masih rendah', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Penetapan pelaksanaan Desentralisasi Pelatihan SDM Pemeriksa sebagai IKU Kepala Seksi Pemeriksaan serta Kepala Seksi Administrasi dan Bimbingan Pemeriksaan\r\n2. Workshop penulisan sebagai bagian dari program penyusunan buku success story pemeriksaan\r\n3. Menunjuk dan membedayakan Pemeriksa Pajak tertentu sebagai champion dan motor untuk menggerakkan kebiasaan belajar dan sharing knowledge\r\n4. Mengenalkan dan memperluas penggunaan Aplikasi ANTARIKSA di Pemeriksa Pajak\r\n5. Membuat ANTARIKSA Mobile\r\n', 10, '1. Dit TPB (Penanggung jawab KM DJP)\r\n2. Seluruh UP10', 3, 1, ''),
(193, 53, 'Mapping KLU WP yang terdaftar di KPP LTO dan KPP Khusus', 'Kebutuhan', 'Laporan mapping KLU WP yang terdaftar di KPP LTO dan KPP Jakarta Khusus, jumlah WP setiap KLU, histori pemeriksaan setiap KLU, jumlah KPP tiap KLU', 'Pemeriksaan yang efektif dan berkualitas', '1', '2', 'Laporan', 'Bulan', 'Diperolehnya mapping KLU WP yang terdaftar di KPP LTO dan KPP Khusus', '-', 'Belum adanya metode yang baik dalam pemilihan FPP yang dinilai kompeten untuk menyusun modul tiap KLU', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Melibatkan kembali pengarang modul untuk memutakhirkan modul yang disusunnya\r\n2. Melakukan koordinasi dengan unit vertikal pengguna modul mengenai kesesuaian modul dengan keadaan di industry\r\n3. Membentuk Tim Penyusun Modul\r\n4. Mendorong pelaksanaan IHT dengan materi modul yang telah dimutakhirkan', 10, '1. Subdit Teknik dan Pengendalian Pemeriksaan\r\n2. Subdit Pemeriksaan Transaksi Khusus\r\n3. Kanwil DJP', 3, 1, ''),
(194, 53, 'Mengidentifikasi ketersediaan modul pemeriksaan atas KLU yang teridentifikasi', 'Kebutuhan', 'Daftar Modul Pemeriksaan untuk tiap KLU dan daftar KLU WP yang belum tersedia modulnya', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Daftar modul', 'Bulan', 'Teridentifikasinya ketersediaan modul pemeriksaan atas KLU hasil mapping', '-', 'Belum adanya metode yang baik dalam pemilihan FPP yang dinilai kompeten untuk menyusun modul tiap KLU', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Melibatkan kembali pengarang modul untuk memutakhirkan modul yang disusunnya\r\n2. Melakukan koordinasi dengan unit vertikal pengguna modul mengenai kesesuaian modul dengan keadaan di industry\r\n3. Membentuk Tim Penyusun Modul\r\n4. Mendorong pelaksanaan IHT dengan materi modul yang telah dimutakhirkan', 10, '1. Subdit Teknik dan Pengendalian Pemeriksaan\r\n2. Subdit Pemeriksaan Transaksi Khusus\r\n3. Kanwil DJP', 3, 1, '');
INSERT INTO `uraian_rko` (`id_uraian`, `id_rko`, `uraian`, `input`, `output`, `outcomes`, `volume`, `jgkwaktu`, `satuan`, `jangka`, `indikator`, `ket`, `risiko`, `sistem`, `mitigasi`, `pic`, `terkait`, `id_sie`, `status`, `reg`) VALUES
(195, 53, 'Rapat dengan Subdit Transus, Subdit Teknik, dan KPP terkait untuk menentukan tindak lanjut', 'Kebutuhan', 'Kesepakatan tindak lanjut atas KLU WP yang belum tersedia modulnya dan tindak lanjut atas modul yang perlu pemutakhiran', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Diperolehnya kesepakatan tindak lanjut atas KLU WP yang belum tersedia modulnya dan tindak lanjut atas modul yang perlu pemutakhiran', '-', 'Belum adanya metode yang baik dalam pemilihan FPP yang dinilai kompeten untuk menyusun modul tiap KLU', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Melibatkan kembali pengarang modul untuk memutakhirkan modul yang disusunnya\r\n2. Melakukan koordinasi dengan unit vertikal pengguna modul mengenai kesesuaian modul dengan keadaan di industry\r\n3. Membentuk Tim Penyusun Modul\r\n4. Mendorong pelaksanaan IHT dengan materi modul yang telah dimutakhirkan', 10, '1. Subdit Teknik dan Pengendalian Pemeriksaan\r\n2. Subdit Pemeriksaan Transaksi Khusus\r\n3. Kanwil DJP', 3, 1, ''),
(196, 53, 'Membuat atau memutakhirkan modul pemeriksaan sesuai dengan hasil rapat', 'Kebutuhan', 'Modul Pemeriksaan baru dan modul pemeriksaan yang telah termutakhirkan', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Modul', 'Bulan', 'Terbentuknya modul Pemeriksaan baru dan modul pemeriksaan yang telah termutakhirkan', '-', 'Belum adanya metode yang baik dalam pemilihan FPP yang dinilai kompeten untuk menyusun modul tiap KLU', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Melibatkan kembali pengarang modul untuk memutakhirkan modul yang disusunnya\r\n2. Melakukan koordinasi dengan unit vertikal pengguna modul mengenai kesesuaian modul dengan keadaan di industry\r\n3. Membentuk Tim Penyusun Modul\r\n4. Mendorong pelaksanaan IHT dengan materi modul yang telah dimutakhirkan', 10, '1. Subdit Teknik dan Pengendalian Pemeriksaan\r\n2. Subdit Pemeriksaan Transaksi Khusus\r\n3. Kanwil DJP', 3, 1, ''),
(197, 54, 'Koordinasi dengan Dit. DIP serta unduh data WP yang melaporkan transaksi afiliasi', 'Kebutuhan', 'Laporan WP yang melakukan transaksi afiliasi, nilai transaksi, jenis transaksi, pihak terafiliasi DN atau LN', 'Terpenuhinya permintaan data dari stakeholder', '1', '1', 'Laporan', 'Bulan', 'Diperolehnya data WP yang melakukan transaksi afiliasi, nilai transaksi, jenis transaksi, pihak terafiliasi DN atau LN', '-', '1. Lambatnya perolehan data dari Dir. DIP\r\n2.  Belum meratanya kompetensi SDM di KPP Pratama untuk menangani aspek perpajakan transaksi afiliasi', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Koordinasi dengan Subdirektorat Pemeriksaan Transaksi Khusus terkait tindak lanjut hasil pengolahan data\r\n2. Berkoordinasi secara informal dengan Dir. DIP\r\n3. Melakukan IHT untuk SDM KPP Pratama yang mengampu WP dengan transaksi afiliasi yang signifikan\r\n', 9, '1. Dit. DIP\r\n2. Subdit Transus', 3, 1, ''),
(198, 54, 'Pengolahan data yang telah diunduh', 'Kebutuhan', 'Laporan WP yang melakukan transaksi afiliasi, nilai transaksi, jenis transaksi, pihak terafiliasi DN atau LN', 'Terpenuhinya permintaan data dari stakeholder', '1', '1', 'Laporan', 'Bulan', 'Diperolehnya data WP yang melakukan transaksi afiliasi, nilai transaksi, jenis transaksi, pihak terafiliasi DN atau LN', '-', '1. Lambatnya perolehan data dari Dir. DIP\r\n2.  Belum meratanya kompetensi SDM di KPP Pratama untuk menangani aspek perpajakan transaksi afiliasi', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Koordinasi dengan Subdirektorat Pemeriksaan Transaksi Khusus terkait tindak lanjut hasil pengolahan data\r\n2. Berkoordinasi secara informal dengan Dir. DIP\r\n3. Melakukan IHT untuk SDM KPP Pratama yang mengampu WP dengan transaksi afiliasi yang signifikan\r\n', 9, '1. Dit. DIP\r\n2. Subdit Transus', 3, 1, ''),
(199, 54, 'Rapat pembahasan dengan Subdit Pemeriksaan Transaksi Khusus mengenai tindak lanjut yang dibutuhkan', 'Kebutuhan', 'Kesepakatan tindak lanjut', 'Terpenuhinya permintaan data dari stakeholder', '1', '1', 'LHR', 'Bulan', 'Diperolehnya kesepakatan tindak lanjut yang dibutuhkan', '-', '1. Lambatnya perolehan data dari Dir. DIP\r\n2.  Belum meratanya kompetensi SDM di KPP Pratama untuk menangani aspek perpajakan transaksi afiliasi', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Koordinasi dengan Subdirektorat Pemeriksaan Transaksi Khusus terkait tindak lanjut hasil pengolahan data\r\n2. Berkoordinasi secara informal dengan Dir. DIP\r\n3. Melakukan IHT untuk SDM KPP Pratama yang mengampu WP dengan transaksi afiliasi yang signifikan\r\n', 8, '1. Dit. DIP\r\n2. Subdit Transus', 3, 1, ''),
(200, 55, 'Menerima permintaan data dari internal dan eksternal DJP', 'permintaan data melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Permintaan data baik melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Terpenuhinya permintaan data dari stakeholder', '1', '12', 'surat, nota dinas, email, dan saluran komunikasi l', 'Bulan', 'Terpenuhinya permintaan data dari internal dan eksternal DJP', '-', 'Keterlambatan menjawab permintaan data', 'SOP Tata Cara Pelaksanaan Analisis Basis Data untuk Keperluan Pemeriksaan\r\n(KPD42-0001)', 'Membagi tugas untuk menjawab permintaan data', 7, '1. Pihak yang meminta data', 3, 1, ''),
(201, 55, 'Mengolah data permintaan', 'permintaan data melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Data yang telah diolah', 'Terpenuhinya permintaan data dari stakeholder', '1', '12', 'surat, nota dinas, email, dan saluran komunikasi l', 'Bulan', 'Terpenuhinya permintaan data dari internal dan eksternal DJP', '-', 'Keterlambatan menjawab permintaan data', 'SOP Tata Cara Pelaksanaan Analisis Basis Data untuk Keperluan Pemeriksaan\r\n(KPD42-0001)', 'Membagi tugas untuk menjawab permintaan data', 7, '1. Pihak yang meminta data', 3, 1, ''),
(202, 55, 'Menjawab permintaan data ', 'permintaan data melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Jawaban permintaan data baik melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Terpenuhinya permintaan data dari stakeholder', '1', '12', 'surat, nota dinas, email, dan saluran komunikasi l', 'Bulan', 'Terpenuhinya permintaan data dari internal dan eksternal DJP', '-', 'Keterlambatan menjawab permintaan data', 'SOP Tata Cara Pelaksanaan Analisis Basis Data untuk Keperluan Pemeriksaan\r\n(KPD42-0001)', 'Membagi tugas untuk menjawab permintaan data', 7, '1. Pihak yang meminta data', 3, 1, ''),
(203, 55, 'Membuat laporan pemenuhan permintaan data', 'permintaan data melalui surat, nota dinas, email, dan saluran komunikasi lainnya', 'Laporan pemenuhan permintaan data', 'Terpenuhinya permintaan data dari stakeholder', '4', '12', 'Laporan', 'Bulan', 'Terbentuknya laporan triwulanan', '-', 'Keterlambatan menjawab permintaan data', 'SOP Tata Cara Pelaksanaan Analisis Basis Data untuk Keperluan Pemeriksaan\r\n(KPD42-0001)', 'Membagi tugas untuk menjawab permintaan data', 7, '1. Pihak yang meminta data', 3, 1, ''),
(204, 56, 'Pembuatan SK Tim Pengembangan Aplikasi Antariksa', 'Kebutuhan', 'SK Tim', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '1', '1', 'SK Tim', 'Bulan', 'Terbentuknya SK Tim Pengembangan Aplikasi Antariksa', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 7, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(205, 56, 'Perbaikan menu Aplikasi Antariksa berbasis Web', 'Kebutuhan', 'Tampilan dan menu baru Aplikasi Antariksa', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '1', '2', 'Menu baru', 'Bulan', 'Terbentuknya tampilan dan menu baru Aplikasi Antariksa', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 7, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(206, 56, 'Pemisahan Server Antariksa dari ALPP', 'Kebutuhan', 'Alamat server baru Aplikasi Antariksa', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '1', '4', 'Alamat server baru', 'Bulan', 'Diperolehnya alamat server baru Aplikasi Antariksa', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 7, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(207, 56, 'Pengembangan Aplikasi Antariksa Mobile', 'Kebutuhan', ' Aplikasi Antariksa Mobile', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '1', '2', 'Aplikasi mobile', 'Bulan', 'Terbentuknya Aplikasi Antariksa Mobile', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 9, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(208, 56, 'Rapat dengan Subdit Penagihan terkait pengembangan kompetensi JSPN melalui Antariksa', 'Kebutuhan', 'Kejelasan tentang bentuk dukungan aplikasi Antariksa dalam pengembangan kompetensi JSPN', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '2', '1', 'LHR', 'Bulan', 'Diperolehnya kejelasan tentang bentuk dukungan aplikasi Antariksa dalam pengembangan kompetensi JSPN', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 9, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(209, 56, 'Penambahan menu untuk pengembangan jabatan JSPN', 'Kebutuhan', ' Menu baru untuk pengembangan kompetensi JSPN', 'Pemeriksaan dan penagihan yang efektif dan berkualitas', '1', '2', 'Menu baru', 'Bulan', 'Terbentuknya menu baru untuk pengembangan kompetensi JSPN', '-', '1. PIC pengembangan aplikasi memiliki kesibukan yang tinggi\r\n2. Tidak tersedia dana khusus untuk mengembankan ANTARIKSA Mobile', 'ND-1122/PJ.13/2019\r\ntentang Permohonan Dukungan terkait Konversi dan Manajemen Konten Pengetahuan Antariksa ke Portal Kompatriot', '1. Menggunakan turnkey software untuk aplikasi Antariksa versi mobile\r\n2. Ujicoba menu baru pada aplikasi Antariksa sebelum diluncurkan', 9, '1. Dit TIK\r\n2. Pengembang Aplikasi Antariksa', 3, 1, ''),
(210, 57, 'Rapat Tim Kajian akademis pengembangan jabatan FPP\r\n', 'Kebutuhan', '1. Rencana kerja Tim tahun 2020\r\n', 'Tersedianya pola karir jabatan FPP yang jelas dan menantang', '3', '1', 'LHR', 'Bulan', 'Diperolehnya rencana kerja Tim tahun 2020', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Melibatkan Fungsional Pemeriksa Pajak senior dan pejabat structural dalam pembahasan usulan\r\n2. Penjadwalan rencana kerja yang dilakukan jauh- jauh hari\r\n3. Melakukan studi banding ke instansi terkait ', 8, '1. Dit. KITSDA\r\n2. Sesditjen\r\n3. Tim Pengkajian Jenjang Jabatan Fungsional Pemeriksa Pajak Utama\r\n4.', 3, 1, ''),
(211, 58, 'Mengumpulkan kurikulum DFD, DFM, DFA, DFT yang ada sekarang', 'hasil evaluasi pelaksanaan diklat', 'File kurikulum diklat', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Kurikulum', 'Bulan', 'Terkumpulnya kurikulum', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 11, '1. Pusdiklat Pajak\r\n2. Dit. KITSDA', 3, 1, ''),
(212, 58, 'Menelaah kurikulum yang ada terutama terkait kesesuaian kurikulum dengan kebutuhan kompetensi pemeriksa saat ini ', 'hasil evaluasi pelaksanaan diklat', 'Hasil telaahan yang disertai dengan penilaian awal tentang kesesuaian kurikulum dan usulan perubahannya', 'Pemeriksaan yang efektif dan berkualitas', '1', '2', 'Kurikulum', 'Bulan', 'kurikulum yang ada telah ditelaah terutama terkait kesesuaian kurikulum dengan kebutuhan kompetensi pemeriksa saat ini', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 11, '1. Pusdiklat Pajak\r\n2. Dit. KITSDA', 3, 1, ''),
(213, 58, 'Rapat dengan perwakilan pejabat FPP dari berbagai tipe UP2 untuk membahas usulan revitalisasi diklat', 'hasil evaluasi pelaksanaan diklat', 'Kesepakatan hal- hal yang akan direvitalisasi', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'LHR', 'Bulan', 'Diperolehnya kesepakatan hal- hal yang akan direvitalisasi', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 11, '1. Kepala UP2\r\n2. Perwakilan FPP', 3, 1, ''),
(214, 58, 'Pembuatan ND Usulan Revitalisasi Kurikulum, Jamlat, Metode DFD, DFM, DFA, DFT.', 'hasil evaluasi pelaksanaan diklat', 'ND Direktur P2 tentang Usulan Kurikulum, Jamlat, dan Metode DFD', 'Pemeriksaan yang efektif dan berkualitas', '1', '2', 'ND Direktur P2', 'Bulan', 'Tersusunnya ND Usulan Revitalisasi Kurikulum, Jamlat, Metode DFD, DFM, DFA, DFT', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 8, '1. Dit. KITSDA\r\n2. Setditjen Pajak\r\n3. Pusdiklat Pajak\r\n4. FPP', 3, 1, ''),
(215, 58, 'Rapat dengan trainer untuk membahas permasalahan terkait penugasan trainer dalam diklat fungsional', 'hasil evaluasi pelaksanaan diklat', 'Kesepakatan tentang penugasan trainer dalam diklat FPP', 'Pemeriksaan yang efektif dan berkualitas', '1', '2', 'LHR', 'Bulan', 'Diperolehnya kesepakatan tentang penugasan trainer dalam diklat FPP', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 8, '1. Kepala UP2\r\n2. Perwakilan trainer', 3, 1, ''),
(216, 58, 'Pembuatan usulan pengaturan trainer Diklat FPP terkait dengan kriteria untuk menjadi trainer, Penugasan menjadi trainer, lingkup tugas trainer di Pusdiklat Pajak.  ', 'hasil evaluasi pelaksanaan diklat', 'ND Direktur P2 tentang Usulan pengaturan trainer Diklat Fungsional Pemeriksa Pajak', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'ND Direktur P2', 'Bulan', 'Tersusunnya ND Direktur P2 tentang Usulan pengaturan trainer Diklat Fungsional Pemeriksa Pajak', '-', '1. Keengganaan pihak PUSDIKLAT Pajak untuk melakukan revisi kurikulum\r\n2. Minimnya jumlah widyaiswara di Pusdiklat Pajak mengakibatkan Trainer DJP menjadi andalan dalam pelaksanaan Diklat FPP', 'a. PMK Nomor 133/PMK.03/2018\r\ntentang Petunjuk Teknis Jabatan Fungsional Pemeriksa Pajak\r\nb. Peraturan Menteri Pendayagunaan Aparatur Negara dan Refornasi Birokrasi Nomor 17 Tahun 2016 tentang Jabatan Fungsional Pemeriksa Pajak', '1. Koordinasi di level pimpinan dalam mengkomunikasikan dalam perlunya pemutakhiran kurikulum diklat FPP\r\n2. Melibatkan Fungsional Pemeriksa Pajak senior dalam pembahasan usulan\r\n3. Memperbanyak jumlah Trainer yang dapat mengajar diklat FPP', 8, '1. Dit. KITSDA\r\n2. Setditjen Pajak', 3, 1, ''),
(217, 59, 'Meminta data tunggakan per UP2 ke DIP', 'Data tunggakan yang tidak valid', 'File Data tunggakan (NP2 dan SP2) per UP2', 'Managemen pemeriksaan yang efektif', '1', '1', 'File', 'Bulan', 'Terkumpulnya data tunggakan per UP2', '-', '1. Lambatnya perolehan data tunggakan menurut SIDJP\r\n2. Banyaknya tunggakan instruksi maupun SP2 yang diterbitkan untuk tahun- tahun yang sudah lama sehingga sulit ditelusuri keberadaannya', 'Surat Edaran Direktur Jenderal Pajak Nomor SE-15/PJ/2018\r\ntentang Kebijakan Pemeriksaan', '1. Berkoordinasi secara informal dengan Dir. DIP\r\n2. Perlu terobosan untuk menhapuskan tunggakan yang sulit ditelusuri\r\n3. Melibatkan UP2 dalam validasi data tunggakan pemeriksaan ', 9, 'DIP', 3, 1, ''),
(218, 59, 'Mengunduh data tunggakan per UP2 menurut ALPP', 'Data tunggakan yang tidak valid', 'File Data tunggakan (NP2 dan SP2) per UP2 menurut ALPP', 'Managemen pemeriksaan yang efektif', '1', '1', 'File', 'Bulan', 'Terkumpulnya data tunggakan per UP2 menurut ALPP', '-', '1. Lambatnya perolehan data tunggakan menurut SIDJP\r\n2. Banyaknya tunggakan instruksi maupun SP2 yang diterbitkan untuk tahun- tahun yang sudah lama sehingga sulit ditelusuri keberadaannya', 'Surat Edaran Direktur Jenderal Pajak Nomor SE-15/PJ/2018\r\ntentang Kebijakan Pemeriksaan', '1. Berkoordinasi secara informal dengan Dir. DIP\r\n2. Perlu terobosan untuk menhapuskan tunggakan yang sulit ditelusuri\r\n3. Melibatkan UP2 dalam validasi data tunggakan pemeriksaan ', 9, 'DIP', 3, 1, ''),
(219, 59, 'Melakukan rekonsiliasi data tunggakan Pemeriksaan antara ALPP dan SIDJP\r\n', 'Data tunggakan yang tidak valid', 'Data tunggakan pemeriksaan menurut KPDJP', 'Managemen pemeriksaan yang efektif', '1', '2', 'Data', 'Bulan', 'Data tunggakan pemeriksaan yang telah direkonsiliasi antara ALPP dan SIDJP', '-', '1. Lambatnya perolehan data tunggakan menurut SIDJP\r\n2. Banyaknya tunggakan instruksi maupun SP2 yang diterbitkan untuk tahun- tahun yang sudah lama sehingga sulit ditelusuri keberadaannya', 'Surat Edaran Direktur Jenderal Pajak Nomor SE-15/PJ/2018\r\ntentang Kebijakan Pemeriksaan', '1. Berkoordinasi secara informal dengan Dir. DIP\r\n2. Perlu terobosan untuk menhapuskan tunggakan yang sulit ditelusuri\r\n3. Melibatkan UP2 dalam validasi data tunggakan pemeriksaan ', 9, '1. Subdit Perencanaan\r\n2. Seluruh UP2', 3, 1, ''),
(220, 59, 'Meminta UP2 melakukan validasi atas hasil rekonsiliasi data ALPP dan SIDJP dengan menggunakan data di lapangan sebagai pembanding', 'Data tunggakan yang tidak valid', 'Data tunggakan pemeriksaan yang valid', 'Managemen pemeriksaan yang efektif', '1', '3', 'Data', 'Bulan', 'Diperolehnya data tunggakan pemeriksaan yang valid', '-', '1. Lambatnya perolehan data tunggakan menurut SIDJP\r\n2. Banyaknya tunggakan instruksi maupun SP2 yang diterbitkan untuk tahun- tahun yang sudah lama sehingga sulit ditelusuri keberadaannya', 'Surat Edaran Direktur Jenderal Pajak Nomor SE-15/PJ/2018\r\ntentang Kebijakan Pemeriksaan', '1. Berkoordinasi secara informal dengan Dir. DIP\r\n2. Perlu terobosan untuk menhapuskan tunggakan yang sulit ditelusuri\r\n3. Melibatkan UP2 dalam validasi data tunggakan pemeriksaan ', 9, '1. Subdit Perencanaan\r\n2. Seluruh UP2', 3, 1, ''),
(221, 60, 'Mengkoordinasikan penunjukan narasumber untuk diklat dan IHT bagi pemeriksa pajak', 'Nota Dinas permintaan narasumber', 'Nota Dinas dan Surat Tugas', 'Pemeriksaan yang efektif dan berkualitas', '1', '1', 'Nota Dinas', 'Bulan', 'Terpenuhinya permintaan narasumber', '-', '1. Kurang memadainya jumlah narasumber\r\n2. Narasumber memiliki kesibukan yang tinggi\r\n3. Ketersediaan narasumber tidak merata di seluruh kanwil', '1. Peraturan Direktur Jenderal Pajak Nomor PER-18/PJ/2019 tentang Pengembangan Kompetensi Pegawai di Lingkungan DJP\r\n2. SOP Tata Cara Penyiapan Narasumber dan Referensi Ahli\r\n(KPD42-0003)', '1. Menyusun Kep Dirjen Pajak tentang Tim Fasilitator Internal Pemeriksa Pajak\r\n2. Menyelenggarakan pelatihan bagi para FI', 10, '1. Tim Trainer\r\n2. UP2 terkait\r\n3. Setditjen Pajak', 3, 1, ''),
(222, 63, 'Test Uraian RKO User Simulasi', 'input', 'output', 'outcome', '12', '12', 'Kegiatan', 'Bulan', 'Indikator', 'Keterangan', 'Risiko', 'Sistem', 'Mitigasi', 21, 'Subdit', 4, 1, ''),
(223, 65, 'Kegiatan Pelaksana dengan RKI sama', 'a', 'a', 'a', '12', '12', 'Kegiatan', 'Bulan', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 22, 'tidak ada', 4, 1, ''),
(224, 42, 'Melaksanakan rapat pembahasan pemeriksaan bersama-internal DJP', 'undangan rapat', 'LHR', 'kerjasama pemeriksaan yang optimal', '1', '1', 'Kegiatan', 'Hari Kerja', 'Tersedianya LHR', '-', '-', '-', '-', 2, 'Subdit Transus dan Subdit Teknik', 1, 1, ''),
(225, 66, 'Uraian', 'Input', 'Output', 'a', '1', '1', 'kerja', 'Bulan', 'a', 'a', 'a', 'a', 'a', 14, 'Kersduk', 2, 1, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pgw_st`
--
CREATE TABLE `v_pgw_st` (
`id` int(3)
,`no_surat` varchar(100)
,`tanggal_surat` date
,`agenda` text
,`mulai` date
,`selesai` date
,`tempat` varchar(200)
,`status` int(1)
,`id_sie` int(2)
,`jenis_st` varchar(100)
,`nama` varchar(150)
,`nip18` varchar(30)
,`seksi_pgw` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rpelaksana`
--
CREATE TABLE `v_rpelaksana` (
`id_keg` int(2)
,`id_uraian` int(2)
,`id_peg` int(2)
,`target` varchar(10)
,`realisasi` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rpel_prs`
--
CREATE TABLE `v_rpel_prs` (
`prs` double
,`id_peg` int(2)
,`id_uraian` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_pgw_st`
--
DROP TABLE IF EXISTS `v_pgw_st`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pgw_st`  AS  select `a`.`id` AS `id`,`a`.`no_surat` AS `no_surat`,`a`.`tanggal_surat` AS `tanggal_surat`,`a`.`agenda` AS `agenda`,`a`.`mulai` AS `mulai`,`a`.`selesai` AS `selesai`,`a`.`tempat` AS `tempat`,`a`.`status` AS `status`,`a`.`id_sie` AS `id_sie`,`a`.`jenis_st` AS `jenis_st`,`b`.`nama` AS `nama`,`b`.`nip18` AS `nip18`,`b`.`id_sie` AS `seksi_pgw` from (`events_pegawai_p2` `a` join `pegawai_events` `b`) where (`a`.`id` = `b`.`id_events_pgw`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_rpelaksana`
--
DROP TABLE IF EXISTS `v_rpelaksana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rpelaksana`  AS  select `a`.`id_keg` AS `id_keg`,`a`.`id_uraian` AS `id_uraian`,`a`.`id_peg` AS `id_peg`,`b`.`volume` AS `target`,sum(`a`.`vol`) AS `realisasi` from (`realisasi_rki` `a` join `rki_pegawai` `b`) where ((`a`.`id_keg` = `b`.`id_rkipeg`) and (`a`.`val` = '1') and (`a`.`status` = '1')) group by `a`.`id_keg`,`a`.`id_uraian`,`a`.`id_peg` ;

-- --------------------------------------------------------

--
-- Structure for view `v_rpel_prs`
--
DROP TABLE IF EXISTS `v_rpel_prs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rpel_prs`  AS  select ((`v_rpelaksana`.`realisasi` / `v_rpelaksana`.`target`) * 100) AS `prs`,`v_rpelaksana`.`id_peg` AS `id_peg`,`v_rpelaksana`.`id_uraian` AS `id_uraian` from `v_rpelaksana` group by `v_rpelaksana`.`id_peg`,`v_rpelaksana`.`id_uraian` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_ruang`
--
ALTER TABLE `booking_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_pegawai_p2`
--
ALTER TABLE `events_pegawai_p2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_seksi`
--
ALTER TABLE `id_seksi`
  ADD PRIMARY KEY (`id_sie`);

--
-- Indexes for table `jdl_rko`
--
ALTER TABLE `jdl_rko`
  ADD PRIMARY KEY (`id_rko`),
  ADD KEY `id_rko` (`id_rko`),
  ADD KEY `id_rko_2` (`id_rko`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`);

--
-- Indexes for table `pegawai_events`
--
ALTER TABLE `pegawai_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai_tugas`
--
ALTER TABLE `pegawai_tugas`
  ADD PRIMARY KEY (`id_pegst`);

--
-- Indexes for table `pegawai_tugas_direktur`
--
ALTER TABLE `pegawai_tugas_direktur`
  ADD PRIMARY KEY (`id_pegst_dir`);

--
-- Indexes for table `rapat_direktur`
--
ALTER TABLE `rapat_direktur`
  ADD PRIMARY KEY (`id_rp_dir`);

--
-- Indexes for table `rapat_subdit`
--
ALTER TABLE `rapat_subdit`
  ADD PRIMARY KEY (`id_rp`);

--
-- Indexes for table `realisasi_rki`
--
ALTER TABLE `realisasi_rki`
  ADD PRIMARY KEY (`id_realisasi`);

--
-- Indexes for table `rki_pegawai`
--
ALTER TABLE `rki_pegawai`
  ADD PRIMARY KEY (`id_rkipeg`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `surat_tugas_direktur`
--
ALTER TABLE `surat_tugas_direktur`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `tugas_direktur`
--
ALTER TABLE `tugas_direktur`
  ADD PRIMARY KEY (`id_tgdirektur`);

--
-- Indexes for table `tugas_subdit`
--
ALTER TABLE `tugas_subdit`
  ADD PRIMARY KEY (`id_tgsubdit`);

--
-- Indexes for table `uraian_rki`
--
ALTER TABLE `uraian_rki`
  ADD PRIMARY KEY (`id_rki`),
  ADD KEY `id_rko` (`id_rko`);

--
-- Indexes for table `uraian_rko`
--
ALTER TABLE `uraian_rko`
  ADD PRIMARY KEY (`id_uraian`),
  ADD KEY `id_rko` (`id_rko`),
  ADD KEY `id_rko_2` (`id_rko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_ruang`
--
ALTER TABLE `booking_ruang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `events_pegawai_p2`
--
ALTER TABLE `events_pegawai_p2`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jdl_rko`
--
ALTER TABLE `jdl_rko`
  MODIFY `id_rko` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_peg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pegawai_events`
--
ALTER TABLE `pegawai_events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pegawai_tugas`
--
ALTER TABLE `pegawai_tugas`
  MODIFY `id_pegst` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `pegawai_tugas_direktur`
--
ALTER TABLE `pegawai_tugas_direktur`
  MODIFY `id_pegst_dir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `rapat_direktur`
--
ALTER TABLE `rapat_direktur`
  MODIFY `id_rp_dir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rapat_subdit`
--
ALTER TABLE `rapat_subdit`
  MODIFY `id_rp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `realisasi_rki`
--
ALTER TABLE `realisasi_rki`
  MODIFY `id_realisasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `rki_pegawai`
--
ALTER TABLE `rki_pegawai`
  MODIFY `id_rkipeg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;
--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_st` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `surat_tugas_direktur`
--
ALTER TABLE `surat_tugas_direktur`
  MODIFY `id_st` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tugas_direktur`
--
ALTER TABLE `tugas_direktur`
  MODIFY `id_tgdirektur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tugas_subdit`
--
ALTER TABLE `tugas_subdit`
  MODIFY `id_tgsubdit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uraian_rki`
--
ALTER TABLE `uraian_rki`
  MODIFY `id_rki` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;
--
-- AUTO_INCREMENT for table `uraian_rko`
--
ALTER TABLE `uraian_rko`
  MODIFY `id_uraian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
