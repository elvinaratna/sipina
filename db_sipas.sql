-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 08:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mdari`
--

CREATE TABLE `mdari` (
  `id_dari` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdari`
--

INSERT INTO `mdari` (`id_dari`, `nama`) VALUES
(1, 'DIVISI ADMINISTRASI'),
(2, 'DIVISI PEMASYARAKATAN'),
(3, 'DIVISI IMIGRASI'),
(4, 'DIVISI PELAYANAN HUKUM DAN HAM');

-- --------------------------------------------------------

--
-- Table structure for table `mdivisi`
--

CREATE TABLE `mdivisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdivisi`
--

INSERT INTO `mdivisi` (`id_divisi`, `nama`) VALUES
(1, 'Kepegawaian, TU&RT'),
(2, 'Pengelolaan Keuangan dan BMN'),
(3, 'Program dan Pelaporan'),
(4, 'Humas, RB dan TI'),
(5, 'Pembinaan, TI, dan Kerja Sama'),
(6, 'Bimbingan dan Pengentasan Anak'),
(7, 'Pelayanan Tahanan, Per Kesehatan & Rehab'),
(8, 'Pengelolaan Benda Sitaan, BRN & Keamanan'),
(9, 'Perizinan Keimigrasian'),
(10, 'Informasi Keimigrasian'),
(11, 'Intelijen Keimigrasian'),
(12, 'Penindakan Keimigrasian'),
(13, 'Pelayanan AHU'),
(14, 'Pelayanan KI'),
(15, 'Penyuluhan Hukum, Bantuan Hukum & JDIH'),
(16, 'Pemajuan HAM'),
(17, 'Pengkajian, Penelitian,Pengembangan Hukum & HAM'),
(18, 'Fasilitasi Pembentukan Produk Hukum Daerah'),
(19, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `mjenisarsip`
--

CREATE TABLE `mjenisarsip` (
  `id_jenissurat` varchar(6) NOT NULL,
  `id_jenisarsip` varchar(6) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mjenisarsip`
--

INSERT INTO `mjenisarsip` (`id_jenissurat`, `id_jenisarsip`, `nama`) VALUES
('AH', 'AH.01', 'Badan Hukum'),
('AH', 'AH.02', 'Notariat'),
('AH', 'AH.03', 'Hukum Perdata Umum'),
('AH', 'AH.04', 'Wasiat'),
('AH', 'AH.05', 'Pendaftaran Fidusia'),
('AH', 'AH.06', 'Harta Peninggalan'),
('AH', 'AH.07', 'Pelayanan Hukum Pidana dan Grasi'),
('AH', 'AH.08', 'Sidik Jari/Daktiloskopi'),
('AH', 'AH.09', 'Penyidik Pegawai Negeri Sipil (PPNS)'),
('AH', 'AH.10', 'Hukum Tata Negara'),
('AH', 'AH.11', 'Partai Politik'),
('AH', 'AH.12', 'Otoritas Pusat dan Hukum Internasional '),
('AH', 'AH.13', 'Teknologi Informasi Administrasi Hukum Umum'),
('GR', 'GR.01', 'Perizinan Keimigrasian'),
('GR', 'GR.02', 'Izin Tinggal'),
('GR', 'GR.03', 'Pengendalian Keimigrasian'),
('GR', 'GR.04', 'Pengawasan dan Pendindakan Keimigrasian (WASDAKIM)'),
('GR', 'GR.05', 'Intelijen Keimigrasian'),
('GR', 'GR.06', 'Kerjasama Keimigrasian'),
('GR', 'GR.07', 'Informasi Keimigrasian'),
('GR', 'GR.08', 'Dokumen Keimigrasian Perwakilan Luar Negeri'),
('HA', 'HA.01', 'Pelayanan Komunikasi  Masyarakat'),
('HA', 'HA.02', 'Kerjasama Hak Asasi Manusia'),
('HA', 'HA.03', 'Diseminasi dan Penguatan HAM'),
('HA', 'HA.04', 'Instrumen HAM'),
('HH', 'HH.01', 'Informasi dan Komunikasi'),
('HH', 'HH.02', 'Dokumentasi'),
('HH', 'HH.03', 'Kepustakaan'),
('HH', 'HH.04', 'Penerbitan'),
('HH', 'HH.05', 'Hubungan Lembaga dan Organisasi Masyarakat/Kerjasama Luar Negeri'),
('HH', 'HH.06', 'Kerjasama Luar Negeri'),
('HH', 'HH.07', 'Fasilitasi dan Pengaduan Masalah Hukum/Layanan Advokasi Hukum'),
('HN', 'HN.01', 'Analisis dan Evaluasi'),
('HN', 'HN.02', 'Perencanaan Hukum Nasional'),
('HN', 'HN.03', 'Dokumentasi dan Jaringan Informasi Hukum'),
('HN', 'HN.04', 'Penyuluhan dan Bantuan Hukum'),
('KI', 'KI.01', 'Hak Cipta'),
('KI', 'KI.02', 'Desain Industri'),
('KI', 'KI.03', 'Desain Tata Letak Sirkuit Terpadu (DTLST)'),
('KI', 'KI.04', 'Rahasia Dagang'),
('KI', 'KI.05', 'Paten'),
('KI', 'KI.06', 'Merek'),
('KI', 'KI.07', 'Indikasi Geografis'),
('KI', 'KI.08', 'Penyidikan dan Penyelesaian Sengketa'),
('KI', 'KI.09', 'Kerjasama dan Pemberdayaan Kekayaan Intelektual (KI)'),
('KI', 'KI.10', 'Teknologi Informasi (TI)'),
('KP', 'KP.01', 'Formasi Pegawai'),
('KP', 'KP.02', 'Penerimaan/Pengadaan Pegawai'),
('KP', 'KP.03', 'Pengangkatan Pegawai'),
('KP', 'KP.04', 'Mutasi Pegawai'),
('KP', 'KP.05', 'Pembinaan Pegawai'),
('KP', 'KP.06', 'Pengembangan Pegawai'),
('KP', 'KP.07', 'Hukuman Disiplin'),
('KP', 'KP.08', 'Tata Usaha Kepegawaian '),
('KP', 'KP.09', 'Kesejahteraan Pegawai'),
('KP', 'KP.10', 'Pembinaan Jabatan Fungsional'),
('KP', 'KP.11', 'Pemberhentian Pegawai'),
('KP', 'KP.12', 'BERKAS Perorangan PNS/ASN'),
('KP', 'KP.13', 'Berkas Perseorangan Menteri, Wakil Menteri dan Pejabat Negara lainnya'),
('KP', 'KP.14', 'Organisasi Non Kedinasan '),
('KU', 'KU.01', 'Pelaksanaan Anggaran'),
('KU', 'KU.02', 'Penerimaan Negara'),
('KU', 'KU.03', 'Tata Usaha Keuangan'),
('KU', 'KU.04', 'Perbendaharaan'),
('KU', 'KU.05', 'Akuntansi dan Pelaporan '),
('LT', 'LT.01', 'Penelitian dan Pengembangan Hukum '),
('LT', 'LT.02', 'Penelitian dan Pengembangan HAM '),
('LT', 'LT.03', 'Pengkajian dan Pengembangan Kebijakan '),
('LT', 'LT.04', 'Pengembangan Data dan Informasi Hukum dan HAM '),
('OT', 'OT.01', 'Organisasi dan Tata Kerja'),
('OT', 'OT.02', 'Ketatalaksanaan'),
('OT', 'OT.03', 'Reformasi Birokrasi'),
('OT', 'OT.04', 'Instruksi Menteri'),
('PB', 'PB.01', 'Perencanaan Barang Milik Negara'),
('PB', 'PB.02', 'Pengadaan Barang Milik Negara'),
('PB', 'PB.03', 'Pendistribusian Barang Milik Negara'),
('PB', 'PB.04', 'Penetapan Status dan Pengamanan Barang Milik Negara (BMN)'),
('PB', 'PB.05', 'Penatausahaan Barang Milik Negara '),
('PB', 'PB.06', 'Pemindahtanganan dan Penghapusan'),
('PK', 'PK.01', 'LAPAS/RUTAN/BAPAS'),
('PK', 'PK.02', 'RUPBASAN'),
('PP', 'PP.01', 'Perancangan Peraturan Perundang-undangan'),
('PP', 'PP.02', 'Harmonisasi Peraturan Perundang-undangan I'),
('PP', 'PP.03', 'Harmonisasi Peraturan Perundang-undangan II'),
('PP', 'PP.04', 'Fasilitasi Perancangan Peraturan Daerah dan Pembinaan Perancang Peraturan Perundang-undangan'),
('PP', 'PP.05', 'Pengundangan, Penerjemahan dan Publikasi Peraturan Perundang-undangan'),
('PP', 'PP.06', 'Litigasi Peraturan Perundang-undangan'),
('PR', 'PR.01', 'Pokok-pokok Kebijakan dan Strategi Pembangunan'),
('PR', 'PR.02', 'Evaluasi'),
('PR', 'PR.03', 'Laporan Akuntabilitas Kinerja Instansi'),
('PR', 'PR.04', 'Pelaporan'),
('PR', 'PR.05', 'Rapat Kerja '),
('PR', 'PR.06', 'Sidang Kabinet'),
('PW', 'PW.01', 'Perencanaan'),
('PW', 'PW.02', 'Pelaksanaan Pengawasan'),
('PW', 'PW.03', 'Pelaporan'),
('PW', 'PW.04', 'Tindak Lanjut'),
('PW', 'PW.05', 'Reviu dan Tindak Lanjut Reviu'),
('PW', 'PW.06', 'Tindak Lanjut Pengaduan'),
('PW', 'PW.07', 'Tindak Lanjut Atensi dan Telaahan'),
('PW', 'PW.08', 'Kegiatan Pengawasan Lainnya'),
('SM', 'SM.01', 'Diklat Kepemimpinan '),
('SM', 'SM.02', 'Diklat Teknis'),
('SM', 'SM.03', 'Diklat  Fungsional dan HAM'),
('SM', 'SM.04', 'Bimbingan Teknis/Fokus Grup Diskusi (FGD)'),
('SM', 'SM.05', 'Pertemuan Ilmiah'),
('SM', 'SM.06', 'Penilaian Kompetensi'),
('SM', 'SM.07', 'Kerjasama Pengembangan SDM'),
('SM', 'SM.08', 'Data dan Informasi Pengembangan SDM'),
('SM', 'SM.09', 'Akademi/Politeknik Ilmu Pemasyarakatan'),
('SM', 'SM.10', 'Akademi/Politeknik Imigrasi '),
('TI', 'TI.01', 'Pengamanan Data'),
('TI', 'TI.02', 'Pengamanan Jaringan'),
('TI', 'TI.03', 'Standarisasi'),
('TI', 'TI.04', 'Kerjasama'),
('TI', 'TI.05', 'Perencanaan Pengembangan Teknologi Informasi '),
('TI', 'TI.06', 'Pengelolaan Sistem Teknologi Informasi'),
('TI', 'TI.07', 'Layanan Sistem Teknologi dan Informasi'),
('UM', 'UM.01', 'Ketatausahaan'),
('UM', 'UM.02', 'Kearsipan'),
('UM', 'UM.03', 'Kerumahtanggaan'),
('UM', 'UM.04', 'Keprotokolan'),
('UM', 'UM.05', 'Pengamanan'),
('UM', 'UM.06', 'Pembinaan Sikap dan Mental ');

-- --------------------------------------------------------

--
-- Table structure for table `mjenissurat`
--

CREATE TABLE `mjenissurat` (
  `id_jenissurat` varchar(6) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mjenissurat`
--

INSERT INTO `mjenissurat` (`id_jenissurat`, `nama`) VALUES
('AH', 'ADMINISTRASI HUKUM UMUM'),
('GR', 'KEIMIGRASIAN'),
('HA', 'HAK ASASI MANUSIA (HAM)'),
('HH', 'KEHUMASAN DAN HUKUM'),
('HN', 'PEMBINAAN HUKUM NASIONAL '),
('KI', 'KEKAYAAN INTELEKTUAL'),
('KP', 'KEPEGAWAIAN'),
('KU', 'KEUANGAN'),
('LT', 'PENELITIAN DAN PENGEMBANGAN '),
('OT', 'ORGANISASI DAN TATA LAKSANA'),
('PB', 'PENGELOLAAN BARANG MILIK NEGARA'),
('PK', 'PEMASYARAKATAN'),
('PP', 'PERATURAN PERUNDANG-UNDANGAN'),
('PR', 'PERENCANAAN'),
('PW', 'PENGAWASAN'),
('SM', 'SUMBER DAYA MANUSIA'),
('tes', 'tes'),
('TI', 'TEKNOLOGI DAN INFORMASI'),
('UM', 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `mklasifikasi`
--

CREATE TABLE `mklasifikasi` (
  `id_jenisarsip` varchar(6) NOT NULL,
  `kode_klasifikasi` varchar(6) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mklasifikasi`
--

INSERT INTO `mklasifikasi` (`id_jenisarsip`, `kode_klasifikasi`, `nama`) VALUES
('AH.01', '01', 'Pendirian Perseroan Terbatas '),
('AH.01', '02', 'Perubahan Perseroan Terbatas '),
('AH.01', '03', 'Pembubaran Perseroan Terbatas'),
('AH.01', '04', 'Pencabutan Surat Keputusan Perseroan Terbatas'),
('AH.01', '05', 'Pendirian Yayasan'),
('AH.01', '06', 'Perubahan Yayasan'),
('AH.01', '07', 'Pembubaran Yayasan'),
('AH.01', '08', 'Pencabutan Surat Keputusan Yayasan'),
('AH.01', '09', 'Pendirian Perkumpulan'),
('AH.01', '10', 'Perubahan Perkumpulan'),
('AH.01', '11', 'Pembubaran Perkumpulan'),
('AH.01', '12', 'Pencabutan Surat Keputusan Perkumpulan'),
('AH.02', '01', 'Pengangkatan Notaris (termasuk didalamnya pengangkatan Notaris Pengganti)'),
('AH.02', '02', 'Pindah Wilayah Kedudukan Notaris'),
('AH.02', '03', 'Perpanjangan Masa Jabatan Notaris'),
('AH.02', '04', 'Pemberhentian Notaris'),
('AH.02', '05', 'Sertifikat Cuti '),
('AH.02', '06', 'Penunjukan Pemegang Protokol'),
('AH.02', '07', 'Majelis Pengawas Pusat Notaris'),
('AH.03', '01', 'Legalisasi Spesimen Tanda Tangan Pejabat'),
('AH.03', '02', 'Surat Keputusan Ganti Nama'),
('AH.03', '03', 'Advokat Asing'),
('AH.03', '04', 'Pendapat Hukum (Legal Opinion) yang diminta oleh Pemerintah'),
('AH.03', '05', 'Pendapat Hukum (Legal Opinion) yang diminta oleh Masyarakat'),
('AH.03', '06', 'Data Base'),
('AH.04', '01', 'Surat Keterangan Wasiat'),
('AH.04', '02', 'Laporan Bulanan Wasiat'),
('AH.04', '03', 'Pendaftaran Kurator dan Pengurus'),
('AH.04', '04', 'Daftar Harta Peninggalan (Boedel op Wezig)'),
('AH.04', '05', 'Ijin Jual Boedel, Persetujuan, Penelitian dan Penelaahan'),
('AH.05', '01', 'Pendaftaran Sertifikat Jaminan Fidusia'),
('AH.05', '02', 'Perubahan Sertifikat Jaminan Fidusia'),
('AH.05', '03', 'Penghapusan/Pencoretan Sertifikat Jaminan Fidusia'),
('AH.05', '04', 'Sertifikat Pengganti Jaminan Fidusia'),
('AH.06', '01', 'Pendaftaran Wasiat'),
('AH.06', '02', 'Perwalian Pengawas'),
('AH.06', '03', 'Pengampu Pengawas'),
('AH.06', '04', 'Pengampu Anak Dalam Kandungan'),
('AH.06', '05', 'Pengampu Harta Peninggalan yang tidak ada kuasanya (onbeheerde Nalatenschap)'),
('AH.06', '06', 'Kurator Dalam Kepailitan'),
('AH.06', '07', 'Wali Sementara'),
('AH.06', '08', 'Pengurus Harta Kekayaan orang yang dinyatakan tidak hadir (afwijzig)'),
('AH.06', '09', 'Surat Keterangan Hak Waris'),
('AH.06', '10', 'Transfer Dana'),
('AH.07', '01', 'Pendapat Hukum tentang Pidana Umum '),
('AH.07', '02', 'Pendapat Hukum  tentang Pidana Khusus'),
('AH.07', '03', 'Grasi'),
('AH.07', '04', 'Saksi Ahli'),
('AH.07', '05', 'Kajian dan Telaah Perundang-undangan'),
('AH.08', '01', 'Sidik Jari '),
('AH.08', '02', 'Data dan Informasi Sidik Jari'),
('AH.09', '01', 'Seleksi Administrasi Calon PPNS'),
('AH.09', '02', 'Pengangkatan PPNS'),
('AH.09', '03', 'Pengangkatan Kembali PPNS'),
('AH.09', '04', 'Pelantikan PPNS'),
('AH.09', '05', 'Mutasi PPNS'),
('AH.09', '06', 'Pemberhentian Non teknis operasional'),
('AH.09', '07', 'Pemberhentian sebagai PPNS'),
('AH.09', '08', 'Pemberhentian atas permintaan sendiri'),
('AH.09', '09', 'Perpanjangan KTP'),
('AH.09', '10', 'Penerbitan KTP yang hilang/rusak'),
('AH.10', '01', 'Kewarganegaraan'),
('AH.10', '02', 'Pewarganegaraan'),
('AH.11', '01', 'Pendaftaran Badan Hukum Partai Politik, Permohonan Perubahan AD/RT dan Kepengurusan'),
('AH.11', '02', 'Sengketa dan Permasalahan Partai Politik'),
('AH.11', '03', 'Pembubaran Partai Politik '),
('AH.12', '01', 'Otoritas Pusat termasuk Ekstradisi dan Bantuan Hukum Timbal  Balik Dalam Pidana'),
('AH.12', '02', 'Hukum Ekonomi dan Lembaga Internasional'),
('AH.12', '03', 'Hukum Perdata Internasional'),
('AH.12', '04', 'Hukum Laut, Udara, Angkasa dan Lingkungan'),
('AH.12', '05', 'Hukum Humaniter'),
('AH.12', '06', 'Perpindahan Narapidana Antar Negara'),
('AH.13', '01', 'Perencanaan dan Pengembangan  Teknologi Informasi'),
('AH.13', '02', 'Pembangunan Aplikasi'),
('AH.13', '03', 'Implementasi dan Perubahan Sistem Teknologi Informasi'),
('AH.13', '04', 'Layanan Sistem Teknologi Informasi'),
('AH.13', '05', 'Pengelolaan dan Pemeliharaan Perangkat Keras dan Perangkat Lunak'),
('AH.13', '06', 'Monitoring dan Evaluasi'),
('GR.01', '01', 'Kebijakan Imigrasi'),
('GR.01', '02', 'Dokumen Perjalanan Republik Indonesia (DPRI)'),
('GR.01', '03', 'Pas Lintas Batas'),
('GR.01', '04', 'Fasilitas Keimigrasian'),
('GR.01', '05', 'Persetujuan Visa'),
('GR.01', '06', 'Bebas Visa Kunjungan (BVK)'),
('GR.01', '07', 'Tanda Masuk dan Tanda Keluar'),
('GR.01', '08', 'Rekomendasi Untuk Mendapatkan Work and Holiday Visa'),
('GR.01', '09', 'Pengelolaan Dokumen Blangko DPRI, Visa, dan Perdim'),
('GR.02', '01', 'Izin Tinggal Kunjungan (ITK)'),
('GR.02', '02', 'Izin Tinggal Terbatas (ITAS)'),
('GR.02', '03', 'Izin Tinggal Tetap (ITAP)'),
('GR.02', '04', 'Alih Status (Konversi) Izin Tinggal Termasuk Penolakannya'),
('GR.02', '05', 'Surat Keterangan Keimigrasian (SKIM)'),
('GR.02', '06', 'Penelaahan Status Keimigrasian'),
('GR.02', '07', 'Pengelolaan Dokumen Izin Tinggal Keimigrasian'),
('GR.03', '01', 'Pemantauan, Penyidikan, termasuk Surat Perintah dan Berita Acara Pemeriksaan (BAP)'),
('GR.03', '02', 'Deportasi dan Penolakan Tanda Masuk'),
('GR.03', '03', 'Pendetensian'),
('GR.03', '04', 'Pembatasan, Perubahan atau Pembatalan Izin Tinggal'),
('GR.03', '05', 'Larangan Untuk Berada Di Suatu atau Beberapa Tempat Tertentu di Wilayah Indonesia'),
('GR.03', '06', 'Pencegahan dan Penangkalan'),
('GR.03', '07', 'Imigran Ilegal'),
('GR.03', '08', 'Pencabutan, Pembatalan, Penahanan Doklan dan DOKIM termasuk Siar Paspor Yang Dibatalkan'),
('GR.04', '01', 'Pengawasan Terhadap WNI'),
('GR.04', '02', 'Pengawasan Terhadap WNA'),
('GR.04', '03', 'Kepatuhan Internal'),
('GR.04', '04', 'Penyidikan Keimigrasian'),
('GR.04', '05', 'Pelanggaran dan Penindakan Tindakan Administratif Keimigrasian'),
('GR.04', '06', 'Cegah Tangkal'),
('GR.04', '07', 'Pendetensian '),
('GR.05', '01', 'Operasi Intelijen Keimigrasian (Pengumpulan Bahan Keterangan/Pulbaket; Operasi Kewilayahan; Penggalangan)'),
('GR.05', '02', 'Pengamanan Keimigrasian (pengamanan perizinan keimigrasian; Pengamanan Personil, Material dan Dokumen; Pengamanan Kantor dan Instalasi Vital)'),
('GR.05', '03', 'Kerjasama Intelijen Keimigrasian'),
('GR.05', '04', 'Produk Intelijen Keimigrasian'),
('GR.06', '01', 'Kerjasama  Antar Lembaga (Dalam Negeri)'),
('GR.06', '02', 'Kerjasama Antar negara'),
('GR.06', '03', 'Kerjasama dengan Organisasi Internasional'),
('GR.06', '04', 'Pembinaan Perwakilan RI di Luar Negeri'),
('GR.07', '01', 'Lintas Informasi Internal termasuk Tukar Menukar Informasi dan Pelaporan Kegiatan Keimigrasian'),
('GR.07', '02', 'Lintas Informasi External termasuk Pertukaran Informasi dengan Institusi di Luar Imigrasi'),
('GR.07', '03', 'Data Keimigrasian'),
('GR.07', '04', 'Permohonan Data Keimigrasian'),
('GR.08', '01', 'Warga Negara Indonesia'),
('GR.08', '02', 'Warga Negara Asing'),
('HA.01', '01', 'Klarifikasi/Koordinasi'),
('HA.01', '02', 'Informasi/Pemberitahuan'),
('HA.01', '03', 'Telaah'),
('HA.01', '04', 'Rekomendasi'),
('HA.01', '05', 'Audiensi'),
('HA.01', '06', 'HAM Aktual'),
('HA.01', '07', 'Pemantauan, Evaluasi dan Pelaporan Yakomas'),
('HA.02', '01', 'Bahan Rumusan Teknis Kerjasama HAM Dalam Negeri dan RANHAM Kementerian/Lembaga'),
('HA.02', '02', 'Bahan Rumusan Teknis Kerjasama HAM Dalam Negeri dan RANHAM Pemerintah Provinsi/Kabupaten/Kota/Perangkat Daerah'),
('HA.02', '03', 'Bahan Rumusan Teknis Kerjasama HAM Dalam Negeri dan RANHAM Lembaga Pendidikan'),
('HA.02', '04', 'Bahan Rumusan Teknis Kerjasama HAM Dalam Negeri dan RANHAM Korporasi/Swasta'),
('HA.02', '05', 'Bahan Rumusan Teknis Kerjasama HAM Dalam Negeri dan RANHAM Organisasi Masyarakat Sipil Domestik'),
('HA.02', '06', 'Bahan Rumusan Teknis Kerjasama HAM Bilateral'),
('HA.02', '07', 'Bahan Rumusan Teknis Kerjasama HAM Regional'),
('HA.02', '08', 'Bahan Rumusan Teknis Kerjasama HAM Badan-badan Khusus PBB (UNDP, UNICEF, UNESCO, WHO, dll)'),
('HA.02', '09', 'Bahan Rumusan Teknis Kerjasama HAM Organisasi Masyarakat Internasional (IOM, HRWG, INFID, dll)'),
('HA.02', '10', 'Pemantauan, Evaluasi dan Pelaporan Kerja Sama HAM dan RANHAM'),
('HA.03', '01', 'Bahan Diseminasi HAM'),
('HA.03', '02', 'Modul dan Bahan Penguatan HAM'),
('HA.03', '03', 'Diseminasi HAM Bagi Aparatur'),
('HA.03', '04', 'Diseminasi HAM Bagi Masyarakat'),
('HA.03', '05', 'Penguatan HAM Bagi Aparatur'),
('HA.03', '06', 'Penguatan HAM Bagi Masyarakat'),
('HA.03', '07', 'Bimtek Pengembangan Tenaga Diseminasi dan Penguatan HAM'),
('HA.03', '08', 'Pemantauan, Evaluasi, dan Pelaporan Diseminasi dan Penguatan HAM serta Pengembangan Tenaga Diseminasi dan Penguatan HAM'),
('HA.04', '01', 'Analisis Peraturan Perundang-undangan dari Perspektif HAM '),
('HA.04', '02', 'Penyiapan Instrumen HAM'),
('HA.04', '03', 'Pemantauan, Evaluasi dan Pelaporan Implementasi HAM'),
('HH.01', '01', 'Pencitraan'),
('HH.01', '02', 'Kunjungan'),
('HH.01', '03', 'Media Massa (Cetak, Elektronik)'),
('HH.01', '04', 'Sosialisasi dan Diseminasi'),
('HH.01', '05', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID)'),
('HH.01', '06', 'Badan Koordinasi Hubungan Masyarakat (Bakomumas)'),
('HH.01', '07', 'Umbul-umbul'),
('HH.02', '01', 'Hasil Liputan (Media Cetak/Elektronik)'),
('HH.02', '02', 'Guntingan Berita/Kliping'),
('HH.02', '03', 'Analisa Media'),
('HH.02', '04', 'Film'),
('HH.03', '01', 'Pengumpulan'),
('HH.03', '02', 'Pengadaan'),
('HH.03', '03', 'Pendistribusian'),
('HH.03', '04', 'Pemanfaatan/Pelayanan'),
('HH.03', '05', 'Pengolahan (Inventarisasi, Pengklasifikasian)'),
('HH.03', '06', 'Pemeliharaan'),
('HH.03', '07', 'Penyiangan'),
('HH.03', '08', 'Pameran'),
('HH.04', '01', 'Redaksi'),
('HH.04', '02', 'Penulis'),
('HH.04', '03', 'Naskah Asli'),
('HH.04', '04', 'Master'),
('HH.04', '05', 'Pencetakan'),
('HH.04', '06', 'Distribusi'),
('HH.05', '01', 'Lembaga Tinggi Negara'),
('HH.05', '02', 'Lembaga Pemerintah'),
('HH.05', '03', 'Lembaga Swasta/Lembaga Swadaya Masyarakat'),
('HH.05', '04', 'Perguruan Tinggi/Sekolah'),
('HH.05', '05', 'Memorandum Of Understanding (MOU)'),
('HH.06', '01', 'Bilateral (Government/Non Government)'),
('HH.06', '02', 'Regional (Government/Non Government)'),
('HH.06', '03', 'Multirateral (Organisasi Internasional/Government/Non Government)'),
('HH.06', '04', 'Memorandum Of Understanding (MOU) '),
('HH.07', '01', 'Administrasi Litigasi / Non Litigasi'),
('HH.07', '02', 'Bantuan Hukum'),
('HH.07', '03', 'Pengaduan Masalah Hukum'),
('HH.07', '04', 'Advokasi Hukum'),
('HH.07', '05', 'Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR)'),
('HN.01', '01', 'Dokumen Analisis dan Evaluasi Hukum'),
('HN.01', '02', 'Dokumen Pembangunan Hukum Nasional'),
('HN.01', '03', 'Pedoman Analisis dan Evaluasi Hukum'),
('HN.01', '04', 'Seminar Pembangunan Hukum Nasional'),
('HN.01', '05', 'Jurnal Analisis dan Evaluasi Hukum'),
('HN.02', '01', 'Program Legislasi Nasional'),
('HN.02', '02', 'Program Legislasi Daerah'),
('HN.02', '03', 'Naskah Akademik Peraturan Perundang-undangan'),
('HN.02', '04', 'Penyelarasan Naskah Akademik'),
('HN.03', '01', 'Inventarisasi Peraturan Perundang-undangan dan Bahan Hukum Lainnya'),
('HN.03', '02', 'Pengolahan Peraturan Perundang-undangan'),
('HN.03', '03', 'Pengolahan Peraturan Perundang-undangan dan Bahan Hukum Lainnya Bentuk Offline dan Online'),
('HN.03', '04', 'Sosialisasi/Penyebarluasan Peraturan Perundang-undangan dan Bahan Hukum Lainnya'),
('HN.03', '05', 'Evaluasi dan Pemantauan Pengelola Jaringan Dokumentasi dan Informasi Hukum'),
('HN.03', '06', 'Publikasi Hasil Kegiatan Badan Pembinaan Hukum Nasional'),
('HN.03', '07', 'Bimbingan Teknis Pengelola Jaringan Dokumentasi dan Informasi Hukum'),
('HN.03', '08', 'Pertemuan Berkala Pengelola Jaringan Dokumentasi dan Informasi Hukum'),
('HN.04', '01', 'Penyusunan  Kebijakan Teknis Pembentukan Tenaga Fungsional Penyuluh Hukum'),
('HN.04', '02', 'Penyuluhan Hukum Melalui Media Elektronik dan Cetak'),
('HN.04', '03', 'Konsultasi dan Bantuan Hukum'),
('HN.04', '04', 'Pengelolaan dan Pengembangan Keluarga Sadar Hukum'),
('HN.04', '05', 'Forum Koordinasi Pelaksanaan Penyuluhan Hukum Seluruh Indonesia'),
('KI.01', '01', 'Proses Penyelesain Permohonan Pencatatan'),
('KI.01', '02', 'Sertifikat/Pencatatan Ciptaan'),
('KI.01', '03', 'Status Permohonan Pencatatan Ciptaan'),
('KI.01', '04', 'Permohonan Petikan Resmi'),
('KI.01', '05', 'Lisensi'),
('KI.01', '06', 'Pelanggaran/Penegakan Hukum '),
('KI.01', '07', 'Pendapat Hukum/Saksi Ahli'),
('KI.01', '08', 'Lembaga Manajemen Kolektif'),
('KI.01', '09', 'Evaluasi Manajemen Kolektif'),
('KI.01', '10', 'Data Hak Cipta atas Ekspresi Budaya Tradisional Yang Dipegang Oleh Negara'),
('KI.02', '01', 'Proses Penyelesain Permohonan Pendaftaran'),
('KI.02', '02', 'Sertifikat/Kutipan'),
('KI.02', '03', 'Bukti Prioritas'),
('KI.02', '04', 'Komisi Banding '),
('KI.02', '05', 'Keterangan Status Permohonan Pendaftaran'),
('KI.02', '06', 'Permohonan Petikan Resmi'),
('KI.02', '07', 'Lisensi'),
('KI.02', '08', 'Pelanggaran/Penegakan Hukum '),
('KI.02', '09', 'Pendapat hukum/saksi ahli'),
('KI.03', '01', 'Proses Penyelesaian Permohonan Pendaftaran'),
('KI.03', '02', 'Sertifikat/Kutipan'),
('KI.03', '03', 'Bukti Prioritas'),
('KI.03', '04', 'Keterangan Status Permohonan Pendaftaran'),
('KI.03', '05', 'Permohonan Petikan Resmi'),
('KI.03', '06', 'Lisensi'),
('KI.03', '07', 'Pelanggaran/Penegakan Hukum '),
('KI.03', '08', 'Pendapat Hukum/Saksi Ahli'),
('KI.04', '01', 'Pencatatan Lisensi Rahasia Dagang'),
('KI.04', '02', 'Pengalihan Hak'),
('KI.04', '03', 'Pendapat Hukum/Saksi Ahli'),
('KI.05', '01', 'Proses Penyelesain Permohonan Pendaftaran'),
('KI.05', '02', 'Sertifikat/Kutipan'),
('KI.05', '03', 'Bukti Prioritas'),
('KI.05', '04', 'Pemeliharaan Paten'),
('KI.05', '05', 'Penelusuran'),
('KI.05', '06', 'Keterangan Status Permohonan Pendaftaran'),
('KI.05', '07', 'Permohonan Petikan Resmi'),
('KI.05', '08', 'Lisensi'),
('KI.05', '09', 'Pelanggaran/Penegakan Hukum di Bidang Paten'),
('KI.05', '10', 'Pendapat Hukum/Saksi Ahli'),
('KI.05', '11', 'Komisi Banding'),
('KI.06', '01', 'Proses Penyelesain Permohonan Pendaftaran'),
('KI.06', '02', 'Sertifikat/Kutipan'),
('KI.06', '03', 'Bukti Prioritas'),
('KI.06', '04', 'Keterangan Status Permohonan Pendaftaran'),
('KI.06', '05', 'Permohonan Petikan Resmi'),
('KI.06', '06', 'Lisensi'),
('KI.06', '07', 'Pelanggaran/Penegakan Hukum '),
('KI.06', '08', 'Pendapat Hukum/Saksi Ahli'),
('KI.06', '09', 'Perpanjangan Merek'),
('KI.06', '10', 'Monitoring Merek Terdaftar'),
('KI.06', '11', 'Keterangan Tertulis '),
('KI.06', '12', 'Komisi Banding'),
('KI.07', '01', 'Proses Penyelesaian Permohonan Pendaftaran'),
('KI.07', '02', 'Sertifikat/Kutipan'),
('KI.07', '03', 'Keterangan Status Permohonan Pendaftaran'),
('KI.07', '04', 'Permohonan Petikan Resmi'),
('KI.07', '05', 'Pelanggaran/Penegakan Hukum '),
('KI.07', '06', 'Pendapat Hukum/Saksi Ahli'),
('KI.07', '07', 'Pengawasan Indikasi Geografis Terdaftar'),
('KI.07', '08', 'Keterangan Tertulis '),
('KI.07', '09', 'Pemakai Indikasi Geografis Terdaftar'),
('KI.07', '10', 'Komisi Banding'),
('KI.07', '11', 'Pertimbangan/Rekomendasi Tim Ahli Indikasi Geografis'),
('KI.08', '01', 'Pemberkasan'),
('KI.08', '02', 'Pemantauan'),
('KI.08', '03', 'Pencegahan dan Penyelesaian Sengketa Alternatif'),
('KI.08', '04', 'Seleksi Administrasi Calon PPNS Kekayaan Intelektual'),
('KI.08', '05', 'Pengangkatan PPNS Kekayaan Intelektual'),
('KI.08', '06', 'Pengangkatan Kembali PPNS Kekayaan Intelektual'),
('KI.08', '07', 'Pelantikan PPNS Kekayaan Intelektual'),
('KI.08', '08', 'Mutasi PPNS Kekayaan Intelektual'),
('KI.08', '09', 'Pemberhentian PPNS Non Teknis Operasional Kekayaan Intelektual'),
('KI.08', '10', 'Pemberhentian PPNS Atas Permintaan Sendiri Kekayaan Intelektual'),
('KI.08', '11', 'Perpanjangan Kartu Tanda Penyidik Kekayaan Intelektual'),
('KI.08', '12', 'Penerbitan Kartu Tanda Penyidik yang Hilang/Rusak PPNS Kekayaan Intelektual'),
('KI.09', '01', 'Konsultan Kekayaan Intelektual'),
('KI.10', '01', 'Standarisasi Bidang TI'),
('KI.10', '02', 'Data Base'),
('KP.01', '01', 'Inventarisasi Jabatan/Peta Jabatan'),
('KP.01', '02', 'Evaluasi Jabatan'),
('KP.01', '03', 'Usulan Formasi'),
('KP.01', '04', 'Alokasi Formasi'),
('KP.02', '01', 'Proses Penerimaan Pegawai'),
('KP.02', '02', 'Berkas Lamaran Yang Tidak Diterima'),
('KP.02', '03', 'Surat Keputusan  CPNS/PNS Kolektif'),
('KP.02', '04', 'Penerimaan Pegawai dari Politeknik Ilmu Pemasyarakatan  dan AIM'),
('KP.03', '01', 'Pengangkatan CPNS'),
('KP.03', '02', 'Pengangkatan PNS'),
('KP.03', '03', 'Pengangkatan Jabatan Struktural'),
('KP.03', '04', 'Pengangkatan Jabatan Fungsional'),
('KP.04', '01', 'Alih Tugas/Diperbantukan/Dipekerjakan/Pelaksana '),
('KP.04', '02', 'Pelaksana Harian/Pelaksana Tugas'),
('KP.04', '03', 'Mutasi Keluarga (Nikah, Anak, Cerai dan Kematian)'),
('KP.04', '04', 'Kenaikan Gaji Berkala (KGB)'),
('KP.04', '05', 'Kenaikan Pangkat/Golongan'),
('KP.04', '06', 'Peninjauan Masa Kerja'),
('KP.04', '07', 'Berkas Badan Pertimbangan Jabatan dan Kepangkatan (Baperjakat)'),
('KP.05', '01', 'Ujian Dinas, Ujian Penyesuaian Ijasah, dan Seleksi Diklat'),
('KP.05', '02', 'Penilaian pegawai (DP3, Uji Kelayakan dan Kepatutan)'),
('KP.05', '03', 'Sasaran Kinerja Pegawai'),
('KP.05', '04', 'Pemanggilan dan Pemeriksaan Pegawai'),
('KP.06', '01', 'Pengembangan Kompetensi Jabatan Pimpinan Tinggi dan Adminstrasi'),
('KP.06', '02', 'Pengembangan Kompetensi Fungsional'),
('KP.07', '01', 'Tingkat Ringan (Pernyataan Tidak Puas, Teguran Lisan, Teguran Tertulis)'),
('KP.07', '02', 'Tingkat Sedang (Penundaan KGB, KP dan Penurunan Gaji)'),
('KP.07', '03', 'Tingkat Berat (Penurunan Pangkat, Pembebasan Jabatan, Pemberhentian Dengan Hormat/Tidak Dengan Hormat)'),
('KP.08', '01', 'Data Pegawai'),
('KP.08', '02', 'Identitas Pegawai (Karpeg, Karsu, Karis)'),
('KP.08', '03', 'Izin Kepegawaian (Izin Belajar, Tugas Belajar Dalam Negeri dan Luar Negeri)'),
('KP.08', '04', 'Keanggotaan Pegawai Dalam Organisasi Sosial'),
('KP.08', '05', 'Tanda Penghargaan/Kehormatan'),
('KP.08', '06', 'Laporan Kekayaan (LP2P dan LHKPN)'),
('KP.08', '07', 'Daftar Hadir/Absensi Pegawai'),
('KP.09', '01', 'Kesehatan'),
('KP.09', '02', 'Perumahan (TAPERUM, Biaya Uang Muka)'),
('KP.09', '03', 'Taspen'),
('KP.09', '04', 'Cuti'),
('KP.09', '05', 'Uang Duka Tewas'),
('KP.09', '06', 'Tes Narkoba'),
('KP.09', '07', 'Pembekalan Purnabakti'),
('KP.10', '01', 'Jabatan Fungsional Umum'),
('KP.10', '02', 'Jabatan Fungsional Tertentu'),
('KP.11', '01', 'Pemberhentian Atas Permintaan Sendiri'),
('KP.11', '02', 'Pemberhentian Karena Batas Usia Pensiun'),
('KP.11', '03', 'Pemberhentian Karena Keuzuran/Kondisi Jasmani dan Rohani'),
('KP.11', '04', 'Pemberhentian Karena Hilang'),
('KP.11', '05', 'Pemberhentian Sementara'),
('KP.11', '06', 'Pemberhentian Dari Jabatan Organik'),
('KP.11', '07', 'Pensiun Janda/Duda dan Anak'),
('KP.12', ' ', ' '),
('KP.13', ' ', ' '),
('KP.14', '01', 'KORPRI'),
('KP.14', '02', 'Dharma Wanita'),
('KP.14', '03', 'Koperasi'),
('KP.14', '04', 'Yayasan'),
('KU.01', '01', 'Pedoman, Petunjuk, dan Administrasi Pelaksanaan Anggaran'),
('KU.01', '02', 'Daftar Isian Pelaksanaan Anggaran (DIPA)'),
('KU.01', '03', 'Penerimaan Negara Bukan Pajak (PNBP)'),
('KU.02', '01', 'Pajak'),
('KU.02', '02', 'Bukan Pajak'),
('KU.03', '01', 'Pedoman dan Petunjuk Administrasi Keuangan '),
('KU.03', '02', 'Penerimaan Hibah'),
('KU.03', '03', 'Pengelola Keuangan'),
('KU.03', '04', 'Penyelesaian Kerugian Negara'),
('KU.04', '01', 'Surat Permintaan Pembayaran dan Surat Perintah Membayar'),
('KU.04', '02', 'Buku Kas Umum dan Buku Pembantu'),
('KU.04', '03', 'LPJ Bendahara Pengeluaran'),
('KU.04', '04', 'LPJ Bendahara Penerimaan'),
('KU.05', '01', 'Laporan Keuangan'),
('KU.05', '02', 'Rekonsiliasi dan Data Laporan Keuangan'),
('LT.01', '01', 'Penelitian dan Pengembangan Substansi Hukum '),
('LT.01', '02', 'Penelitian dan Pengembangan Struktur Hukum '),
('LT.01', '03', 'Penelitian dan Pengembangan Masyarakat dan Budaya Hukum '),
('LT.02', '01', 'Pengkajian dan Pengembangan Hak Sipil dan Politik'),
('LT.02', '02', 'Penelitian dan Pengembangan Hak Ekonomi, Sosial dan Budaya'),
('LT.02', '03', 'Penelitian dan Pengembangan Resolusi Konflik '),
('LT.03', '01', 'Pengembangan  Pengkajian dan Pengembangan Kebijakan Kelembagaan dan Ketatalaksanaan  '),
('LT.03', '02', 'Pengkajian dan Pengembangan  Kebijakan Sumber Daya Manusia '),
('LT.03', '03', 'Pengembangan Transformasi Konflik'),
('LT.03', '04', 'Pengkajian dan Pengembangan Kebijakan Pelayanan Hukum, Hak Asasi Manusia, Pemasyarakatan dan Imigrasi '),
('LT.04', '01', 'Meta Analisis Data Penelitian Hukum dan Hak Asasi Manusia'),
('LT.04', '02', 'Pengembangan Teknologi dan Sistem Informasi Penelitian  Hukum dan Hak Asasi Manusia'),
('LT.04', '03', 'Fasilitasi Publikasi Penelitian Hukum dan Hak Asasi Manusia '),
('OT.01', '01', 'Organisasi dan Tata Kerja Kementerian'),
('OT.01', '02', 'Organisasi dan Tata Kerja Kantor Wilayah'),
('OT.01', '03', 'Organisasi dan Tata Kerja UPT'),
('OT.01', '04', 'Evaluasi Kelembagaan'),
('OT.02', '01', 'Standarisasi Sarana Kerja'),
('OT.02', '02', 'Sistem, Prosedur dan Metoda Kerja'),
('OT.02', '03', 'Analisa dan Uraian Jabatan'),
('OT.03', ' ', ' '),
('OT.04', ' ', ' '),
('PB.01', '01', 'Usulan Rencana Kebutuhan BMN'),
('PB.01', '02', 'Rencana Kebutuhan BMN Kementerian'),
('PB.01', '03', 'Hasil Analisis Kebutuhan BMN'),
('PB.01', '04', 'Rencana Kebutuhan Aset Berwujud'),
('PB.01', '05', 'Rencana Kebutuhan Aset tak Berwujud'),
('PB.02', '01', 'Pengadaan Barang persediaan (habis pakai)'),
('PB.02', '02', 'Pengadaan Barang Bukan Persediaan'),
('PB.02', '03', 'Pengadaan Jasa Lainnya'),
('PB.02', '04', 'Pengadaan Jasa Konsultansi'),
('PB.02', '05', 'Pengadaan Aset Tetap (Tanah)'),
('PB.02', '06', 'Pengadaan Aset Tidak Berwujud (Software)'),
('PB.02', '07', 'Pengadaan Sewa'),
('PB.02', '08', 'Pengadaan Modal Peralatan dan Mesin'),
('PB.02', '09', 'Pekerjaan Konstruksi (Bangunan)'),
('PB.02', '10', 'Unit Layanan Pengadaan (ULP)'),
('PB.03', ' ', ' '),
('PB.04', '01', 'Penggunaan Barang Milik Negara (BMN)'),
('PB.04', '02', 'Pemanfaatan Barang Milik Negara'),
('PB.04', '03', 'Pengamanan dan Pemeliharaan'),
('PB.04', '04', 'Rumah Negara'),
('PB.04', '05', 'Surat Ijin/Pembatalan Penghunian Rumah Negara'),
('PB.05', '01', 'Pencatataan Barang Milik Negara'),
('PB.05', '02', 'Inventarisasi'),
('PB.05', '03', 'Opname fisik'),
('PB.05', '04', 'Rekonsiliasi data Barang Milik Negara'),
('PB.05', '05', 'Konstruksi Dalam Pekerjaan (KDP)'),
('PB.05', '06', 'Laporan Barang Milik Negara'),
('PB.06', '01', 'Penjualan'),
('PB.06', '02', 'Tukar Menukar'),
('PB.06', '03', 'Hibah'),
('PB.06', '04', 'Penghapusan'),
('PK.01', '01', 'Registrasi'),
('PK.01', '01.01', 'Tahanan'),
('PK.01', '01.02', 'Narapidana'),
('PK.01', '02', 'Statistik'),
('PK.01', '03', 'Sidik Jari'),
('PK.01', '04', 'Bimbingan Kemasyarakatan dan Pengentasan Anak'),
('PK.01', '05', 'Pembinaan'),
('PK.01', '06', 'Perawatan Kesehatan dan Rehabilitas'),
('PK.01', '07', 'Kegiatan Kerja dan Tenaga Kerja'),
('PK.02', '01', 'Registrasi'),
('PK.02', '02', 'Penilaian dan Klasifikasi'),
('PK.02', '03', 'Statistik dan Pelaporan'),
('PK.02', '04', 'Keamanan dan Pengawasan'),
('PK.02', '05', 'Pemeliharaan dan Pemusnahan'),
('PK.02', '06', 'Klarifikasi dan Mutasi '),
('PK.02', '07', 'Keamanan dan Kepatuhan Internal'),
('PK.02', '08', 'Layanan Pengaduan'),
('PK.02', '09', 'Intelijen'),
('PK.02', '10', 'Pencegahan dan Pemeliharaan Keamanan'),
('PK.02', '11', 'Penindakan dan Penanggulangan'),
('PP.01', '01', 'Perencanaan dan Penyiapan Konsepsi Rancangan Peraturan Perundang-undangan'),
('PP.01', '02', 'Penyusunan Rancangan Undang-Undang, Rancangan Peraturan Pemerintah Pengganti Undang-Undang dan Rancangan Peraturan Pemerintah'),
('PP.01', '03', 'Penyusunan Rancangan Peraturan Presiden dan Rancangan Peraturan Menteri Hukum dan Hak Asasi Manusia'),
('PP.01', '04', 'Pembahasan Rancangan Undang-Undang '),
('PP.02', '01', 'Harmonisasi Bidang Politik dan Pemerintahan'),
('PP.02', '02', 'Harmonisasi Bidang Pertahanan dan Keamanan'),
('PP.02', '03', 'Harmonisasi Bidang Hukum dan Hak Asasi Manusia (HAM)'),
('PP.02', '04', 'Harmonisasi Bidang Sumber Daya Manusia (SDM), Kelembagaan dan Kesejahteraan Rakyat'),
('PP.03', '01', 'Harmonisasi Bidang Moneter, Jasa Keuangan, Badan Usaha Milik Negara (BUMN) dan Penanaman Modal'),
('PP.03', '02', 'Harmonisasi Bidang Perencanaan Pembangunan Nasional dan Fiskal'),
('PP.03', '03', 'Harmonisasi Bidang Sumber Daya Alam (SDA), Lingkungan hidup, Kehutanan, Prasarana, Agraria dan Tata Ruang'),
('PP.03', '04', 'Harmonisasi Bidang Perindustrian, Perdagangan, Riset dan Teknologi '),
('PP.04', '01', 'Perencanaan, Penyusunan Kebijakan Teknis dan Akreditasi '),
('PP.04', '02', 'Fasilitasi Perancangan Peraturan Daerah  '),
('PP.04', '03', 'Standardisasi dan Bimbingan Perancang Peraturan Perundang-undangan '),
('PP.04', '04', 'Sistem informasi, Manajemen dan Penilaian Angka Kredit Perancang Peraturan Perundang-undangan'),
('PP.05', '01', 'Pengundangan Peraturan Perundang-undangan'),
('PP.05', '02', 'Penerjemahan Peraturan Perundang-undangan'),
('PP.05', '03', 'Sistem Informasi Peraturan Perundang-undangan'),
('PP.06', '01', 'Penyiapan dan Pendampingan Persidangan Bidang Politik, Hukum, Hak Asasi Manusia dan Keamanan'),
('PP.06', '02', 'Penyiapan dan Pendampingan Persidangan Bidang Kesejahteraan Rakyat'),
('PP.06', '03', 'Penyiapan dan Pendampingan Persidangan Bidang Perekonomian'),
('PR.01', '01', 'Rencana Strategis'),
('PR.01', '02', 'Trilateral Meeting'),
('PR.01', '03', 'Rencana Kerja'),
('PR.01', '04', 'Rencana Kerja dan Anggaran'),
('PR.02', '01', 'Unit Utama'),
('PR.02', '02', 'Kantor Wilayah'),
('PR.03', ' ', ' '),
('PR.04', '01', 'Laporan Bulanan'),
('PR.04', '02', 'Laporan Triwulan'),
('PR.04', '03', 'Laporan Semester'),
('PR.04', '04', 'Laporan Tahunan'),
('PR.04', '05', 'Insidentil'),
('PR.05', '01', 'Dengan DPR'),
('PR.05', '02', 'Tingkat Kementerian'),
('PR.05', '03', 'Tingkat Unit Utama (RAKERNIS)'),
('PR.05', '04', 'Tingkat Kantor Wilayah'),
('PR.05', '05', 'Rapat Pimpinan dan Rapat Staf'),
('PR.06', '01', 'Sidang Kabinet Terbatas'),
('PR.06', '02', 'Sidang Kabinet Paripurna'),
('PW.01', '01', 'Kebijakan Pengawasan'),
('PW.01', '02', 'Perjanjian Kinerja'),
('PW.01', '03', 'Program Kerja Pengawasan Tahunan (PKPT)'),
('PW.01', '04', 'Program Kerja Administrasi Umum (PKAU)'),
('PW.01', '05', 'Rapat Koordinasi Pengawasan (RAKORWAS)'),
('PW.01', '06', 'Ikhtisar Hasil Pengawasan'),
('PW.02', '01', 'Audit Kinerja & Informasi, Reviu dan Evaluasi  '),
('PW.02', '02', 'Audit Tujuan Tertentu / Khusus'),
('PW.02', '03', 'Pemantauan / Monitoring'),
('PW.02', '04', 'Tindak Lanjut Audit Kinerja & Informasi, Reviu dan Evaluasi'),
('PW.02', '05', 'Tindak Lanjut Audit Tujuan Tertentu / Khusus '),
('PW.02', '06', 'Pendampingan, Sosialisasi, Pelatihan Kantor Sendiri (PKS) dan Rapat Dalam Kantor (RDK'),
('PW.03', '01', 'Laporan Hasil  Audit Kinerja (LHA/LHP), Informasi Data Pendukung Pemeriksaan '),
('PW.03', '02', 'Laporan Hasil Audit Tujuan Tertentu (Audit Khusus)'),
('PW.03', '03', 'Badan Pemeriksa Keuangan Republik Indonesia (BPK RI)'),
('PW.03', '04', 'Badan Pengawasan Keuangan dan Pembangunan Republik Indonesia (BPKP RI)'),
('PW.03', '05', 'Ombudsman Republik Indonesia (ORI)'),
('PW.03', '06', 'Inspektorat Jenderal'),
('PW.04', '01', 'Laporan Tindak Lanjut Hasil Audit Kinerja '),
('PW.04', '02', 'Laporan Tindak Lanjut Hasil Audit Khusus'),
('PW.04', '03', 'Tindak Lanjut Temuan Badan Pengawasan Keuangan dan Pembangunan Republik Indonesia (BPKP RI)'),
('PW.04', '04', 'Tindak Lanjut Temuan Badan Pemeriksa Keuangan Republik Indonesia (BPK RI)'),
('PW.04', '05', 'Tindak Lanjut Temuan Ombudsman Republik Indonesia (ORI)'),
('PW.04', '06', 'Tindak Lanjut Temuan Inspektorat Jenderal'),
('PW.05', '01', 'Reviu'),
('PW.05', '02', 'Tindak Lanjut Reviu '),
('PW.06', '01', 'Whistle Blowing System (WBS)'),
('PW.06', '02', 'Gratifikasi'),
('PW.06', '03', 'Pengaduan Tertulis'),
('PW.06', '04', 'Pengaduan Melalui Media Elektronik'),
('PW.06', '05', 'Pengaduan melalui aplikasi LAPOR (Layanan Pengaduan Secara Online Rakyat)'),
('PW.07', '01', 'Tanggapan/Telaahan Hukuman Disiplin Yang Tidak Ditindaklanjuti '),
('PW.07', '02', 'Tanggapan/Telaahan Hukuman Disiplin Yang Ditindaklanjuti '),
('PW.07', '03', 'Daftar nama Pegawai Kementerian Hukum dan HAM yang dikenakan sanksi Hukuman disiplin/kartu cela'),
('PW.08', '01', 'Pendampingan'),
('PW.08', '02', 'Sosialisasi'),
('PW.08', '03', 'Pelatihan Kantor Sendiri (PKS) '),
('PW.08', '04', 'Rapat Dalam Kantor (RDK)'),
('SM.01', '01', 'Perencanaan Program Diklat'),
('SM.01', '02', 'Kurikulum, Metode Standar/Mutu dan Pedoman Diklat'),
('SM.01', '03', 'Penyelenggaraan'),
('SM.01', '04', 'Evaluasi'),
('SM.02', '01', 'Perencanaan Program Diklat'),
('SM.02', '02', 'Kurikulum, Metode Standar/Mutu dan Pedoman Diklat'),
('SM.02', '03', 'Penyelenggaraan'),
('SM.02', '04', 'Evaluasi'),
('SM.03', '01', 'Perencanaan Program Diklat'),
('SM.03', '02', 'Kurikulum, Metode Standar/Mutu dan Pedoman Diklat'),
('SM.03', '03', 'Penyelenggaraan'),
('SM.03', '04', 'Evaluasi'),
('SM.04', '01', 'Fasilitatif'),
('SM.04', '02', 'Substantif'),
('SM.05', '01', 'Seminar'),
('SM.05', '02', 'Lokakarya'),
('SM.05', '03', 'Diskusi'),
('SM.05', '04', 'Simposium'),
('SM.05', '05', 'Temu Karya'),
('SM.05', '06', 'Bedah Buku'),
('SM.06', '01', 'Penyusunan Program'),
('SM.06', '02', 'Standarisasi Kompetensi'),
('SM.06', '03', 'Penilaian Kompetensi'),
('SM.06', '04', 'Evaluasi'),
('SM.07', '01', 'Internasional'),
('SM.07', '02', 'Institusi/Lembaga'),
('SM.07', '03', 'Universitas/Perguruan Tinggi'),
('SM.08', '01', 'Pengelolaan Data'),
('SM.08', '02', 'Pengelolaan Jaringan'),
('SM.09', '01', 'Perencanaan Program  Perkuliahan'),
('SM.09', '02', 'Kurikulum, Metode Standar/Mutu dan Pedoman Perkuliahan'),
('SM.09', '03', 'Penyelenggaraan'),
('SM.09', '04', 'Evaluasi'),
('SM.10', '01', 'Perencanaan Program  Perkuliahan'),
('SM.10', '02', 'Kurikulum, Metode Standar/Mutu dan Pedoman Perkuliahan'),
('SM.10', '03', 'Penyelenggaraan'),
('SM.10', '04', 'Evaluasi'),
('TI.01', ' ', ' '),
('TI.02', ' ', ' '),
('TI.03', '01', 'Standarisasi Teknologi dan Informasi'),
('TI.03', '02', 'Implementasi Aplikasi'),
('TI.03', '03', 'Implementasi Situs Internet, Portal Internet dan Surat Elektronik'),
('TI.03', '04', 'Ujicoba Infrastruktur'),
('TI.04', '01', 'Kerjasama Internal'),
('TI.04', '02', 'Kerjasama Eksternal'),
('TI.05', '01', 'Penyusunan Program Perencanaan Teknologi dan Informasi'),
('TI.05', '02', 'Pengembangan Infrastruktur Teknologi dan Informasi'),
('TI.05', '03', 'Pengembangan Aplikasi'),
('TI.05', '04', 'Pengembangan Database, Situs Internet dan Surat Elektronik'),
('TI.06', '01', 'Pengelolaan Jaringan '),
('TI.06', '02', 'Pengelolaan Jaringan Sistem Informasi '),
('TI.06', '03', 'Pengelolaan Database '),
('TI.06', '04', 'Pengelolaan Situs Internet, Portal Internet dan Surat Elektronik'),
('TI.06', '05', 'Pengelolaan Aplikasi '),
('TI.06', '06', 'Pengelolaan Alat Pendukung'),
('TI.07', '01', 'Layanan Keluhan LPSE (Layanan Pengadaan Secara Elektronik)'),
('TI.07', '02', 'Tindak Lanjut Keluhan'),
('TI.07', '03', 'Monitoring/Pemantauan Layanan Keluhan'),
('TI.07', '04', 'Evaluasi'),
('UM.01', '01', 'Persuratan'),
('UM.01', '02', 'Penggandaan dan Pencetakan'),
('UM.01', '03', 'Ucapan Terima Kasih/Ucapan Selamat'),
('UM.02', '01', 'Pemindahan Arsip'),
('UM.02', '02', 'Pemusnahan Arsip'),
('UM.02', '03', 'Penyerahan'),
('UM.02', '04', 'Layanan Kearsipan'),
('UM.02', '05', 'Pembinaan Kearsipan'),
('UM.03', '01', 'Penggunaan dan Pemeliharaan Ruang dan Peralatan Kantor'),
('UM.03', '02', 'Penggunaan dan Pemeliharaan Rumah Negara'),
('UM.03', '03', 'Penggunaan dan Pemeliharaan Kendaraan Dinas'),
('UM.03', '04', 'Penggunaan dan Pemeliharaan Fasilitas Jaringan Instalasi'),
('UM.03', '05', 'Penggunaan dan Pemeliharaan Barang Elektronik serta Mesin'),
('UM.03', '06', 'Penggunaan dan Pemeliharaan Gedung serta Area Kantor'),
('UM.03', '07', 'Pemeliharaan Alat Kesehatan'),
('UM.03', '08', 'Perjalanan Dinas (Dalam Negeri/Luar Negeri)'),
('UM.03', '09', 'Penghematan Energi'),
('UM.04', '01', 'Penyelenggaraan Upacara'),
('UM.04', '02', 'Pelayanan Tamu, Acara Kedinasan, Jamuan dan Ramah Tamah'),
('UM.04', '03', 'Daftar Nama Pejabat dan Alamat'),
('UM.05', '01', 'Pengamanan Personil  ( VVIP/VIP )'),
('UM.05', '02', 'Pengamanan Lingkungan, Fisik dan Instalasi'),
('UM.05', '03', 'Pengamanan Dokumen dan Informasi Rahasia'),
('UM.05', '04', 'Laporan Keamanan'),
('UM.05', '05', 'Laporan Kejadian'),
('UM.05', '06', 'Bantuan Pengamanan'),
('UM.06', '01', 'Perayaan Hari Besar Nasional dan Hari Bhakti di Lingkungan Kementerian Hukum dan  Hak  Asasi Manusia'),
('UM.06', '02', 'Pelayanan Sosial dan Keagamaan');

-- --------------------------------------------------------

--
-- Table structure for table `mpegawai`
--

CREATE TABLE `mpegawai` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpegawai`
--

INSERT INTO `mpegawai` (`nip`, `nama`, `id_divisi`, `password`, `user_level`) VALUES
('12345678', 'User Testing Vina', 1, '202cb962ac59075b964b07152d234b70', 2),
('197210181999031002', 'RUSMAN SANJAYA', 12, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198102152006042001', 'CITRA ANGGRAENI PUSPITASARI', 3, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198109172010121004', ' AGUS DEDY KRISBIANTO', 1, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198408032009121004', 'SUHERMAN', 2, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198411302009012002', 'NOVA WIJAYANTI', 17, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198506212009122007', 'FITRI HANDAYANI', 5, 'e10adc3949ba59abbe56e057f20f883e', 2),
('198707242012121001', 'SLAMET PRASETYA', 15, 'e10adc3949ba59abbe56e057f20f883e', 2),
('199109272010122002', 'DEWI RATNASARI', 15, 'e10adc3949ba59abbe56e057f20f883e', 2),
('199403262019012001', 'Elvina Ratna N', 1, 'd8578edf8458ce06fbc5bb76a58c5ca4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtujuan`
--

CREATE TABLE `mtujuan` (
  `id_tujuan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtujuan`
--

INSERT INTO `mtujuan` (`id_tujuan`, `nama`) VALUES
(1, 'SEKRETARIS JENDERAL'),
(2, 'BIRO PERENCANAAN'),
(3, 'BIRO KEPEGAWAIAN'),
(4, 'BIRO KEUANGAN'),
(5, 'BIRO PENGELOLAAN BMN'),
(6, 'BIRO HUMAS, HUKUM & KERJA SAMA'),
(7, 'BIRO UMUM'),
(8, 'PUSDATIN'),
(9, 'INSPEKTORAT JENDERAL'),
(10, 'DITJEN AHU'),
(11, 'DITJEN PAS'),
(12, 'DITJEN IMIGRASI'),
(13, 'DITJEN KI'),
(14, 'DITJEN PP'),
(15, 'DITJEN HAM'),
(16, 'BPHN'),
(17, 'BALITBANG'),
(18, 'BPSDM');

-- --------------------------------------------------------

--
-- Table structure for table `tagenda`
--

CREATE TABLE `tagenda` (
  `id_agenda` bigint(20) NOT NULL,
  `id_jenissurat` varchar(6) NOT NULL,
  `id_jenisarsip` varchar(6) NOT NULL,
  `kode_klasifikasi` varchar(10) NOT NULL,
  `tgl_agenda` datetime NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `no_sisipan` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `hal` varchar(100) NOT NULL,
  `isi_ringkas` varchar(200) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mdari`
--
ALTER TABLE `mdari`
  ADD PRIMARY KEY (`id_dari`);

--
-- Indexes for table `mdivisi`
--
ALTER TABLE `mdivisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `mjenisarsip`
--
ALTER TABLE `mjenisarsip`
  ADD PRIMARY KEY (`id_jenisarsip`),
  ADD KEY `id_jenissurat` (`id_jenissurat`);

--
-- Indexes for table `mjenissurat`
--
ALTER TABLE `mjenissurat`
  ADD PRIMARY KEY (`id_jenissurat`);

--
-- Indexes for table `mklasifikasi`
--
ALTER TABLE `mklasifikasi`
  ADD PRIMARY KEY (`id_jenisarsip`,`kode_klasifikasi`);

--
-- Indexes for table `mpegawai`
--
ALTER TABLE `mpegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `iddiv` (`id_divisi`);

--
-- Indexes for table `mtujuan`
--
ALTER TABLE `mtujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `tagenda`
--
ALTER TABLE `tagenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `jenissurat` (`id_jenissurat`),
  ADD KEY `jenisarsip` (`id_jenisarsip`),
  ADD KEY `klasifikasi` (`kode_klasifikasi`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mdari`
--
ALTER TABLE `mdari`
  MODIFY `id_dari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mdivisi`
--
ALTER TABLE `mdivisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mtujuan`
--
ALTER TABLE `mtujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tagenda`
--
ALTER TABLE `tagenda`
  MODIFY `id_agenda` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mpegawai`
--
ALTER TABLE `mpegawai`
  ADD CONSTRAINT `mpegawai_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `mdivisi` (`id_divisi`);

--
-- Constraints for table `tagenda`
--
ALTER TABLE `tagenda`
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `mpegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
