-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Okt 2017 pada 11.57
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a`
--

CREATE TABLE `a` (
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_boq`
--

CREATE TABLE `list_boq` (
  `no` int(11) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `aanw` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jum_mat` varchar(255) NOT NULL,
  `jum_jas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_boq`
--

INSERT INTO `list_boq` (`no`, `id_project`, `designator`, `uraian`, `satuan`, `plan`, `aanw`, `material`, `jasa`, `keterangan`, `jum_mat`, `jum_jas`) VALUES
(3, '0', 'DD-V5-1 #diedit', 'Pemasangan Pipa Duct dengan selubung pasir dia 100 mm dengan ketebalan 5,5 mm, 1 pipa ( crossing ) #ini sudah diedit', 'meter', '10', '10', '54514', '54514', '', '545140', '545140'),
(4, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123'),
(5, '123', '123', '123', '123', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe'),
(6, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'weq', 'qwe', 'qwe', 'qwe', 'qwe'),
(7, '123', 'DD-V5-2', 'Idem, 2 pipa', 'meter', '2', '2', '72685', '72685', '', '145370', '145370'),
(8, '12', 'DD-V5-1 #diedit', 'Pemasangan Pipa Duct dengan selubung pasir dia 100 mm dengan ketebalan 5,5 mm, 1 pipa ( crossing ) #ini sudah diedit', 'meter', '1', '1', '54514', '54514', '', '54514', '54514'),
(9, '1', 'MH-HH1', 'Pekerjaan Pembuatan Handhole Type HH1 ukuran dimensi dalam (P X L X T = 170x150x165) cor beton 1 : 2 : 3 ', 'pcs', '1', '1', '2440933', '2440933', '', '2440933', '2440933');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_boq_mitra`
--

CREATE TABLE `list_boq_mitra` (
  `no` int(255) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `no_sp` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_boq_mitra`
--

INSERT INTO `list_boq_mitra` (`no`, `id_project`, `no_sp`, `no_kontrak`, `tanggal_input`, `deadline`) VALUES
(1, 'a', '', '', '', ''),
(2, 'a', '', '', '', ''),
(3, 'a', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_boq_telkom_b`
--

CREATE TABLE `list_boq_telkom_b` (
  `no` int(10) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `aanw` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `jum_mat` varchar(255) NOT NULL,
  `jum_jas` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_boq_telkom_b`
--

INSERT INTO `list_boq_telkom_b` (`no`, `id_project`, `designator`, `uraian`, `satuan`, `plan`, `aanw`, `material`, `jasa`, `jum_mat`, `jum_jas`, `keterangan`) VALUES
(18, '1', 'qwe', 'qwe', '123', '1', '1', 'qwe', 'qwe', '0', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_boq_telkom_c`
--

CREATE TABLE `list_boq_telkom_c` (
  `no` int(10) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `aanw` varchar(255) NOT NULL,
  `jum_mat` varchar(255) NOT NULL,
  `jum_jas` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_boq_telkom_c`
--

INSERT INTO `list_boq_telkom_c` (`no`, `id_project`, `designator`, `uraian`, `satuan`, `material`, `jasa`, `plan`, `aanw`, `jum_mat`, `jum_jas`, `ket`) VALUES
(1, '1', 'qwe', 'qwe', '123', 'qwe', 'qwe', '2', '2', '0', '0', ''),
(2, '1', 'qwe', 'qwe', '123', 'qwe', 'qwe', '1', '1', '0', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pekerjaan`
--

CREATE TABLE `list_pekerjaan` (
  `no` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `no_sp` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `dateline` varchar(255) NOT NULL,
  `up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_pekerjaan`
--

INSERT INTO `list_pekerjaan` (`no`, `id_project`, `nama_project`, `no_sp`, `no_kontrak`, `tanggal_input`, `dateline`, `up_date`) VALUES
(5, 0, 'Bayu', 'Bayu', 'Bayu', 'ayu', 'Bayu', '0000-00-00'),
(6, 7, 'Bayu', 'Bayu', 'Bayu', 'Bayu', 'Bayu', '0000-00-00'),
(4, 123, '123', '123', '123', '123', '123', '2017-10-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pekerjaan_mitra`
--

CREATE TABLE `list_pekerjaan_mitra` (
  `no` int(25) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `no_sp` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `dateline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_pekerjaan_mitra`
--

INSERT INTO `list_pekerjaan_mitra` (`no`, `id_project`, `nama_project`, `no_sp`, `no_kontrak`, `tanggal_input`, `dateline`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tma`
--

CREATE TABLE `tma` (
  `no` int(10) NOT NULL,
  `designator` varchar(25) NOT NULL,
  `uraian` text NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `material` varchar(25) NOT NULL,
  `jasa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tma`
--

INSERT INTO `tma` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(2, 'ini nyoba ', 'bro', 'bro', 'bro', 'bro'),
(3, '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmb`
--

CREATE TABLE `tmb` (
  `no` int(10) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` text NOT NULL,
  `satuan` text NOT NULL,
  `material` float NOT NULL,
  `jasa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmb`
--

INSERT INTO `tmb` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(5, 'HH-PIT-P-ODC', 'Pekerjaan Pembuatan HH Pit Portable ODC beserta aksesorisnyaasd', 'pcs', 7986000, 450000),
(6, 'MH-CA', 'Pekerjaan Peninggian Tutup Manhole/Handhole', 'pcs', 683800, 623580),
(7, 'CO-OF', 'Pekerjaan Cut Over Kabel Serat Optik', 'core', 0, 51820),
(209, 'ini b', 'ini basd', 'ini b', 2000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmc`
--

CREATE TABLE `tmc` (
  `no` int(11) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` text NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmc`
--

INSERT INTO `tmc` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(6, 'nova', 'hariya', 'kusuma', 'wardana', 'NHKW'),
(7, 'alfan', 'hibban', 'intiyas', 'ah', 'i'),
(9, 'asdasda', 'asdasdasd', '', 'asdasdasd', 'asdasdasd'),
(10, 'bbnvvnbBayu', 'bnvbnbv', 'Meter', 'bvbnvbnv', 'bnvnbbn'),
(11, 'asd', 'asdasdsad', '', 'asdasdsad', 'asdasd'),
(12, 'gfgf', 'fghhf', '', 'fhghf', 'gfgh'),
(13, 'bvnb', 'bnbv', '', 'bv', 'bnvb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tta`
--

CREATE TABLE `tta` (
  `no` int(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tta`
--

INSERT INTO `tta` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(101, 'DD-V5-1 #diedit', 'Pemasangan Pipa Duct dengan selubung pasir dia 100 mm dengan ketebalan 5,5 mm, 1 pipa ( crossing ) #ini sudah diedit', 'meter', '57055', '54514'),
(102, 'DD-V5-2', 'Idem, 2 pipa', 'meter', '114741', '72685'),
(103, 'DD-DA-S1', 'Pengadaan dan pemasangan pipa Duct menempel pada  jembatan existing menggunakan Pipa Galvanis diamenter 100 mm, tebal 3,65 mm, 1 pipa', 'meter', '310122', '218056'),
(104, 'DD-DA-S2', 'idem, 2 pipa', 'meter', '620246', '436110'),
(105, 'DD-DA-S4', 'idem, 4 pipa', 'meter', '1240492', '872220'),
(106, 'DD-BSS-S1', 'Pengadaan dan pemasangan pipa Duct pada jembatan dengan self support berpenguatan menggunakan Pipa besi Galv 1 pipa, bentang 6 - 12 meter', 'meter', '399525', '218056'),
(107, 'DD-BSS-S2', 'Idem, 2 pipa', 'meter', '798978', '436110'),
(108, 'DD-BTS-S1', 'Pengadaan dan pemasangan pipa Duct pada jembatan menggunakan Pipa besi Galv 1 pipa, bentang 6 - 12 meter', 'meter', '397975', '218056'),
(109, 'DD-BTS-S2', 'idem, 2 pipa', 'meter', '795949', '436110'),
(110, 'DD-BTS-S4', 'idem, 4 pipa', 'meter', '1582577', '661115'),
(111, 'HB-PS-1', 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 1 tiang besi, bentang s/d 40 meter', 'meter', '139218', '34760'),
(112, 'HB-PS-2', 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 2 tiang besi, bentang s/d 100 meter', 'meter', '286570', '41712'),
(113, 'HB-PS-4', 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 4 tiang besi, bentang ? 100 meter', 'meter', '554683', '48664'),
(114, 'HB-PC-2', 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 2 tiang beton, bentang s/d 100 meter', 'meter', '471367', '41712'),
(115, 'HB-PC-4', 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 4 tiang beton, bentang ? 100 meter', 'meter', '923701', '48664'),
(116, 'DD-BMR-1', 'Pengadaan dan Pemasangan Boring pada Lintasan Kereta Api menggunakan 1 pipa Galvanis diameter 100 mm tebal 3,65 mm', 'track', '930368', '20021587'),
(117, 'DD-BMR-2', 'idem, 2 pipa', 'track', '1860738', '30032380'),
(118, 'DD-BMR-4', 'idem, 4 pipa', 'track', '3721474', '40043173'),
(119, 'DC-SD-28-1', 'Pengadaan dan Pemasangan 1 Subduct 28/32 mm pada polongan route Duct', 'meter', '8916', '1478'),
(120, 'DC-SD-28-3', 'idem, 3 pipa', 'meter', '26747', '1929'),
(121, 'DC-SD-33-1', 'Pengadaan dan Pemasangan 1 Subduct 40/33 pada polongan route Duct', 'meter', '9582', '1478'),
(122, 'DC-SD-33-2', 'idem, 2 pipa', 'meter', '19439', '1921'),
(123, 'DC-SD-43-1', 'Pengadaan dan Pemasangan 1 Subduct 50/42 pada polongan route Duct', 'meter', '21191', '1478'),
(124, 'DC-SD-43-2', 'idem, 2 pipa', 'meter', '42382', '1921'),
(125, 'DCD-PVC-1', 'Pengadaan dan Pemasangan Duct Cable Penanggal diameter pipa PVC 2 inch (Class AW) 1  pipa', 'meter', '13083', '1460'),
(126, 'DD-BM-100-1', 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 100 mm dan ketebalan 3,65 mm dengan cara boring manual /mesin   1 pipa dengan kedalaman minimal 150 cm', 'meter', '310122', '64467'),
(127, 'DD-BM-100-2', 'Idem, 2 pipa', 'meter', '620246', '66875'),
(128, 'DD-BM-50-1', 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 50 mm dan ketebalan 2,7 mm cara boring manual /mesin 1 pipa dengan kedalaman minimal 150 cm', 'meter', '180898', '33195'),
(129, 'DD-BM-50-2', 'Idem, 2 pipa', 'meter', '359449', '33195'),
(130, 'DD-BM-HDPE-40-1', 'Pekerjaan Boring manual (rojok) HDPE  40/33 mm 1 pipa dengan kedalaman 1,5 meter ', 'meter', '0', '33313'),
(131, 'DD-BM-HDPE-40-2', 'Idem, 2 pipa', 'meter', '0', '33219'),
(132, 'DD-BM-HDPE-50-1', 'Pekerjaan Boring manual (rojok)  HDPE  50/42 mm 1 pipa dengan kedalaman 1,5 meter', 'meter', '0', '33313'),
(133, 'DD-BM-HDPE-50-2', 'Idem, 2 pipa', 'meter', '0', '33195'),
(134, 'DD-HDPE-40-1', 'Pengadaan dan pemasangan pipa  HDPE  40/33 mm 1 pipa dengan kedalaman 1,5 meter', 'meter', '12045', '1407'),
(135, 'DD-HDPE-40-2', 'Idem 2 pipa', 'meter', '24090', '1702'),
(136, 'DD-HDPE-50-1', 'Pengadaan dan pemasangan pipa HDPE  50/42 mm 1 pipa dengan kedalaman 1,5 meter', 'meter', '20467', '1407'),
(137, 'DD-HDPE-50-2', 'Idem 2 pipa', 'meter', '40935', '1702'),
(138, 'DD-HDPE-40-1C', 'Pengadaan dan pemasangan pipa HDPE 40/33 mm 1 pipa dengan kedalaman 1,5 meter sudah termasuk connector HDPE tipe compression fitting', 'meter', '12534', '1407'),
(139, 'DD-HDPE-40-2C', 'idem, 2 pipa', 'meter', '24895', '1702'),
(140, 'DD-ROD', 'Pekerjaan Pembersihan pada route Duct yang kosong / Rodding Duct Existing.', 'meter', '0', '1817'),
(141, 'DD-RV-1', 'Pekerjaan Perbaikan Route Duct / HDPE, 1 pipa.', 'meter', '36229', '72685'),
(142, 'DD-RV-CONCRETE', 'Pekerjaan bobok dinding MH / HH termasuk perbaikan kembali', 'm3', '1061775', '654166'),
(143, 'DD-DS-S1', 'Pengadaan dan pemasangan duct baru dengan cara melakukan boring dibawah dasar parit/sungai dengan kedalaman 1,5 M dengan menggunakan PVC diamater 100 mm dan ketebalan 5,5 mm 1 pipa', 'meter', '257175', '152639'),
(144, 'DD-DS-COD1-M', 'Pengadaan dan pemasangan duct  baru type COD, dengan mesin pengeboran (borring) dibawah parit, pada kedalaman 1,50 m di bawah dasar selokan, tanpa perlindungan PVC, 1 pipa', 'meter', '24756', '428020'),
(145, 'Klem HDPE', 'Pengkleman HDPE di dinding beton dengan klem ketebalan 2mm lebar 2,5 cm menggunakan dynabolt termasuk rekondisi atau perbaikan kerusakan', 'pcs', '11500', '2300'),
(146, 'BC-TR-0.4', 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung kedalaman 0.4 meter', 'meter', '0', '12042'),
(147, 'BC-TR-0.6', 'idem, kedalaman 0,6 meter', 'meter', '0', '15398'),
(148, 'BC-TR-1', 'idem, kedalaman 1 meter', 'meter', '0', '23308'),
(149, 'BC-TR-2', 'idem, kedalaman 1,2 meter', 'meter', '0', '27464'),
(150, 'BC-TR-3', 'idem, kedalaman 1,3 meter', 'meter', '0', '29240'),
(151, 'BC-TR-4', 'idem, kedalaman 1,4 meter', 'meter', '0', '31347'),
(152, 'BC-TR-5', 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung kedalaman 1,5 meter ', 'meter', '0', '33313'),
(153, 'BCTR-ROCK', 'Pengadaan galian batu masif kedalaman 1,5 meter, panjang minimum 5 m, termasuk pengadaan marking post', 'meter', '0', '192613'),
(154, 'BC-MTR-0.4', 'Pekerjaan galian pada permukaan jalan aspal dengan lebar galian 8 cm dan kedalaman 40 cm, termasuk pemetaan utility eksisting dengan metode Geo Penetrating Radar, perbaikan, pengurugan (backfilling) menggunakan concrete type K225 dan pengaspalan', 'meter', '-', '184572'),
(155, 'BD-SK', 'Pekerjaan bobokan dan perbaikan Dinding Chamber / BTS / STO untuk lubang Sparing Kabel', 'Titik', '53089', '72685'),
(156, 'SMD-ABS-2A', 'Pengadaan dan pemasangan Alat Sambung Micro Duct cabang / lurus 2 cabang,termasuk gas block (seal).', 'pcs', '250855', '142347'),
(157, 'SMD-ABS-3A', 'idem 3 cabang ', 'pcs', '273971', '153763'),
(158, 'SMD-ABS-4A', 'idem 4 cabang ', 'pcs', '764843', '169142'),
(159, 'SMD-ABS-6A', 'idem 6 cabang ', 'pcs', '640334', '186057'),
(160, 'DD-MDSC-5/3.5', 'Pengadaan dan Pemasangan Straight Connector 5/3,5 mm ', 'pcs', '22531', '468'),
(161, 'DD-MDSC-10/8', 'Pengadaan dan Pemasangan Straight Connector 10/8 mm ', 'pcs', '23716', '468'),
(162, 'DD-MDSC-12/10', 'Pengadaan dan Pemasangan Straight Connector 12/10 mm ', 'pcs', '25021', '468'),
(163, 'DD-MDDI-1A', 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '5402', '1673'),
(164, 'DD-MDDI-2A', 'Idem 2 way', 'meter', '7346', '2203'),
(165, 'DD-MDDI-4A', 'Idem 4 way', 'meter', '11610', '2522'),
(166, 'DD-MDDI-7A', 'Idem 7 way', 'meter', '16467', '2543'),
(167, 'DD-MDDI-12A', 'Idem 12 way', 'meter', '24760', '2923'),
(168, 'DD-MDDI-19A', 'Idem 19 way', 'meter', '34505', '3403'),
(169, 'DD-MDDI-24A', 'Idem 24 way', 'meter', '42159', '3885'),
(170, 'DD-MDDI-1B', 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '10947', '2162'),
(171, 'DD-MDDI-2B', 'Idem 2 way', 'meter', '15638', '2522'),
(172, 'DD-MDDI-4B', 'Idem 4 way', 'meter', '27840', '2883'),
(173, 'DD-MDDI-7B', 'Idem 7 way', 'meter', '40754', '3324'),
(174, 'DD-MDDI-1C', 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '12936', '2723'),
(175, 'DD-MDDI-2C', 'Idem 2 way', 'meter', '18643', '3124'),
(176, 'DD-MDDI-4C', 'Idem 4 way', 'meter', '33408', '3886'),
(177, 'DD-MDDI-7C', 'Idem 7 way', 'meter', '49164', '4164'),
(178, 'DD-MDDI-1D', 'Pengadaan dan Pemasangan Micro Duct 16/14mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '15643', '2880'),
(179, 'DD-MDDI-2D', 'Idem 2 way', 'meter', '22544', '3304'),
(180, 'DD-MDDB-1A', 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '13468', '2455'),
(181, 'DD-MDDB-2A', 'Idem 2 way', 'meter', '15922', '3230'),
(182, 'DD-MDDB-4A', 'Idem 4 way', 'meter', '22746', '3700'),
(183, 'DD-MDDB-7A', 'Idem 7 way', 'meter', '29456', '3730'),
(184, 'DD-MDDB-12A', 'Idem 12 way', 'meter', '43786', '4287'),
(185, 'DD-MDDB-19A', 'Idem 19 way', 'meter', '56337', '4992'),
(186, 'DD-MDDB-24A', 'Idem 24 way', 'meter', '67100', '5697'),
(187, 'DD-MDDB-1B', 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '22741', '3172'),
(188, 'DD-MDDB-2B', 'Idem 2 way', 'meter', '29456', '3700'),
(189, 'DD-MDDB-4B', 'Idem 4 way', 'meter', '52202', '4229'),
(190, 'DD-MDDB-7B', 'Idem 7 way', 'meter', '69601', '4874'),
(191, 'DD-MDDB-1C', 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', 'meter', '26523', '3993'),
(192, 'DD-MDDB-2C', 'Idem 2 way', 'meter', '34687', '4581'),
(193, 'DD-MDDB-4C', 'Idem 4 way', 'meter', '61755', '5653'),
(194, 'DD-MDDB-7C', 'Idem 7 way', 'meter', '82794', '6108'),
(195, 'DD-MDEC-5/3.5', 'Pengadaan dan Pemasangan End Cap 5/3,5 mm ', 'pcs', '13044', '468'),
(196, 'DD-MDEC-10/8', 'Pengadaan dan Pemasangan End Cap 10/8 mm ', 'pcs', '13044', '468'),
(197, 'DD-MDEC-12/10', 'Pengadaan dan Pemasangan End Cap 12/10 mm ', 'pcs', '13044', '468'),
(198, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttb`
--

CREATE TABLE `ttb` (
  `no` int(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttb`
--

INSERT INTO `ttb` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(1, 'MH-HH1', 'Pekerjaan Pembuatan Handhole Type HH1 ukuran dimensi dalam (P X L X T = 170x150x165) cor beton 1 : 2 : 3 ', 'pcs', '5995460', '2440933'),
(2, 'MH-HH2', 'Pekerjaan Pembuatan Handhole Type HH2 ukuran dimensi dalam (P X L X T = 120x130x165) cor beton 1 : 2 : 3', 'pcs', '4194639', '1858250'),
(3, 'HH-PIT-P-HA', 'Pekerjaan Pembuatan HH Pit Portable Home Access  beserta aksesorisnya', 'pcs', '790388', '164830'),
(4, 'HH-PIT-P-ODP', 'Pekerjaan Pembuatan HH Pit Portable ODP beserta aksesorisnya', 'pcs', '2584250', '245863'),
(5, 'HH-PIT-P-ODC', 'Pekerjaan Pembuatan HH Pit Portable ODC beserta aksesorisnya', 'pcs', '9799476', '463918'),
(6, 'MH-CA', 'Pekerjaan Peninggian Tutup Manhole/Handhole', 'pcs', '839029', '642872'),
(7, 'CO-OF', 'Pekerjaan Cut Over Kabel Serat Optik', 'core', '0', '53425'),
(8, 'aa', 'aaa', '345', '11', '111'),
(9, 'bayu', 'bayu', 'bayu', 'bayu', 'bayu'),
(10, '1', '1', '1', '1', '1'),
(11, '123', '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttc`
--

CREATE TABLE `ttc` (
  `no` int(255) NOT NULL,
  `designator` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttc`
--

INSERT INTO `ttc` (`no`, `designator`, `uraian`, `satuan`, `material`, `jasa`) VALUES
(1, 'qwe', 'qwe', '123', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `username`, `nik`, `password`) VALUES
(11, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808'),
(12, 'adminNyan', '0071025', '980d0a694cf2c6147b7d5ddc8a75120d'),
(13, 'Alf', '2708', '3a492c0b90b1637377810ff5f02fa3e0'),
(14, 'aa', 'aa', '594f803b380a41396ed63dca39503542'),
(15, '123', '123', '202cb962ac59075b964b07152d234b70'),
(16, 'iniAkun', 'akun', '3d342d6e0c524dd57f1728a053eedff3'),
(17, 'bayu', 'bayu', 'a430e06de5ce438d499c2e4063d60fd6'),
(18, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b'),
(19, '2', '3', 'a87ff679a2f3e71d9181a67b7542122c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`b`);

--
-- Indexes for table `list_boq`
--
ALTER TABLE `list_boq`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `list_boq_mitra`
--
ALTER TABLE `list_boq_mitra`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `list_boq_telkom_b`
--
ALTER TABLE `list_boq_telkom_b`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `list_boq_telkom_c`
--
ALTER TABLE `list_boq_telkom_c`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `list_pekerjaan`
--
ALTER TABLE `list_pekerjaan`
  ADD PRIMARY KEY (`id_project`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `list_pekerjaan_mitra`
--
ALTER TABLE `list_pekerjaan_mitra`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tma`
--
ALTER TABLE `tma`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tmb`
--
ALTER TABLE `tmb`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tmc`
--
ALTER TABLE `tmc`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tta`
--
ALTER TABLE `tta`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ttb`
--
ALTER TABLE `ttb`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ttc`
--
ALTER TABLE `ttc`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_boq`
--
ALTER TABLE `list_boq`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `list_boq_mitra`
--
ALTER TABLE `list_boq_mitra`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `list_boq_telkom_b`
--
ALTER TABLE `list_boq_telkom_b`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `list_boq_telkom_c`
--
ALTER TABLE `list_boq_telkom_c`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `list_pekerjaan`
--
ALTER TABLE `list_pekerjaan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `list_pekerjaan_mitra`
--
ALTER TABLE `list_pekerjaan_mitra`
  MODIFY `no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tma`
--
ALTER TABLE `tma`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tmb`
--
ALTER TABLE `tmb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `tmc`
--
ALTER TABLE `tmc`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tta`
--
ALTER TABLE `tta`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `ttb`
--
ALTER TABLE `ttb`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ttc`
--
ALTER TABLE `ttc`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
