-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasi_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alur`
--

CREATE TABLE `tbl_alur` (
  `kd_alur` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_alur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alur`
--

INSERT INTO `tbl_alur` (`kd_alur`, `judul`, `deskripsi`, `gambar_alur`) VALUES
(1, 'Registerasi AKun', 'Sebelum Melakukan Pendaftaran silahkan Lakukan Registerasi Akun Terlebih Dahulu Supaya Memiliki Akun', 'alur-26012022da48f06eb9.png'),
(2, 'Lengkapi Berkas', 'Setelah Melengkapi Berkas Silahkan Untuk Melengkapi Berkas Yang Ada Supaya Dapat Melanjutkan Ke Proses Selanjutnya', 'alur-2601202268e28289f3.png'),
(3, 'Lengkapi berkas', 'Setelah Melengkapi Biodata Silahkan Untuk Melakukan Proses Melengkapi Berkas Yang Ada Untuk Dapat Melanjutkan Proses Pnedaftaran Yang Ada', 'alur-260120220846cd95ad.png'),
(4, 'Daftar Sekolah', 'Setelah Berkas Lengkap Silahkan Melakuka Pendaftaran dan Pilih Jurusan Yang Anda Minati, Terdapat Berbagai Jurusan Yang Dapat Anda Pilih', 'alur-26012022ae6d25274d.png'),
(5, 'Menunggu Hasil', 'Setelah Mendaftar, Tunggu Hasil dan Cek Secara Berkala Pada Menu Daftar Berkas Yang Ada Pada Sub Menu Profil', 'alur-260120227dc482823b.png'),
(6, 'Selesai', 'Semua Proses Wajib Di Ikuti Secara Urut Untuk Dapat Mendaftar Pada Sekolahan Kami, Terimakasih dan Semoga Diterima', 'alur-260120228d907c820f.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(11) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `no_rek`, `atas_nama`, `nama_bank`) VALUES
(1, '0937272332', 'Muhammad', 'BRI'),
(3, '20398213', 'Muhammad', 'BCA'),
(4, '954395435', 'coko kran', 'BRI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pemesanan_karcis`
--

CREATE TABLE `tbl_detail_pemesanan_karcis` (
  `id_detail_pemesanan_karcis` int(11) NOT NULL,
  `id_karcis` int(11) NOT NULL,
  `id_pemesanan_karcis` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_pemesanan_karcis`
--

INSERT INTO `tbl_detail_pemesanan_karcis` (`id_detail_pemesanan_karcis`, `id_karcis`, `id_pemesanan_karcis`, `subtotal`, `qty`) VALUES
(1, 1, 1, 12000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pemesanan_kuliner`
--

CREATE TABLE `tbl_detail_pemesanan_kuliner` (
  `id_detail_pemesanan_kuliner` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL,
  `id_pemesanan_kuliner` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_pemesanan_kuliner`
--

INSERT INTO `tbl_detail_pemesanan_kuliner` (`id_detail_pemesanan_kuliner`, `id_kuliner`, `id_pemesanan_kuliner`, `subtotal`, `qty`) VALUES
(3, 1, 2, 23000, 1),
(4, 2, 2, 6000, 3),
(5, 1, 3, 23000, 1),
(6, 1, 4, 23000, 1),
(7, 2, 4, 6000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pemesanan_souvenir`
--

CREATE TABLE `tbl_detail_pemesanan_souvenir` (
  `id_detail_pemesanan_souvenir` int(11) NOT NULL,
  `id_souvenir` int(11) NOT NULL,
  `id_pemesanan_souvenir` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_pemesanan_souvenir`
--

INSERT INTO `tbl_detail_pemesanan_souvenir` (`id_detail_pemesanan_souvenir`, `id_souvenir`, `id_pemesanan_souvenir`, `subtotal`, `qty`) VALUES
(1, 1, 1, 2000, 1),
(2, 3, 1, 400, 2),
(3, 4, 1, 40000, 4),
(4, 1, 2, 2000, 1),
(5, 3, 2, 400, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `kd_galeri` int(11) NOT NULL,
  `galeri_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`kd_galeri`, `galeri_gambar`) VALUES
(13, 'galeri-1909202333356643e2.jpeg'),
(14, 'galeri-190920230872533e31.jpeg'),
(15, 'galeri-19092023b16e214237.jpeg'),
(16, 'galeri-190920231347351a3e.jpeg'),
(17, 'galeri-1909202325b9371932.jpeg'),
(18, 'galeri-19092023f56c49020d.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_stay`
--

CREATE TABLE `tbl_home_stay` (
  `id_home_stay` int(11) NOT NULL,
  `nama_home_stay` varchar(255) NOT NULL,
  `harga_home_stay` int(11) NOT NULL,
  `maximal_home_stay` int(11) NOT NULL,
  `deskripsi_home_stay` varchar(255) NOT NULL,
  `gambar_home_stay` varchar(255) NOT NULL,
  `alamat_home_stay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_stay`
--

INSERT INTO `tbl_home_stay` (`id_home_stay`, `nama_home_stay`, `harga_home_stay`, `maximal_home_stay`, `deskripsi_home_stay`, `gambar_home_stay`, `alamat_home_stay`) VALUES
(2, 'tstvsdfds dsf dsf sd', 120000, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'homestay-19082023a44d98178a.jpg', 'fssdf'),
(3, 'Home Stay 3', 20000, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'homestay-19082023e1ce6d7b9e.jpg', 'prindavan sana sini');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `kd_informasi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar_informasi` varchar(200) NOT NULL,
  `tgl_informasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`kd_informasi`, `judul`, `deskripsi`, `penulis`, `gambar_informasi`, `tgl_informasi`) VALUES
(2, 'Kunjungan Industri Anak Siswa SMA 1 Pekan Baru', 'Sebanyak 15 orang guru dari SMA NEGERI 1 mengunjungi SMA Negeri 41Pekanbaru, Rombongan ini dipimpin langsung oleh Kepala Sekolah Bapak RAFLES, S.Pd. Kunjungan ini sebagai wadah silaturrahmi dan juga berbagi informasi tentang berbagai program sekolah khususnya program LITERASI sekaligus penanda tangani perjanjian kerjasama antar sekolah tentang pengembangan Perpustakaan \"Lentera Hati\" SMA Negeri 1 Pekanbaru dengan Perpustakaan SMA Negeri 1 Dumai agar bisa saling bekerjasama dalam peningkatan mutu dan kualitas pendidikan dimasing-masing sekolah khususnya dibidang perpustakaan dan literasi sekolah.\r\n\r\nDalam kesempatan tersebut, kedatangan rombongan dari SMA Negeri 1 Dumai tersebut langsung disambut oleh kepala SMA Negeri 4 Pekanbaru bersama dengan guru, tenaga kependidikan dan beberapa orang peserta didik SMA Negeri 4 Pekanbaru dan tetap menerapkan SOP Penanganan Covid-19 dan selalu mematuhi protokol kesehatan\r\n\r\nKepala SMA Negeri 4 Pekanbaru Ibu Hj. YAN KHORIANA, M.Pd menyampaikan apresiasinya terhadap kunjungan SMA NEGERI 1 DUMAI. Beliau berharap kunjungan ini bisa membuat masing-masing sekolah termotivasi untuk meningkatkan prestasinya. “Budaya literasi harus ditanamkan sejak dini kepada peserta didik, karena dengan literasi mereka akan menguasai informasi dan ilmu pengetahuan” terangnya.\r\n\r\nPada kesempatan ini, Kepala SMA NEGERI 4 PEKANBARU juga memberikan pemaparannya terkait profil sekolah secara singkat, dan juga menampilkan berbagai prestasi peserta didik baik dibidang akademik maupun non akademik.(RP)', 'Ratih', 'informasi-270120224ac8de8527.jpg', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karcis`
--

CREATE TABLE `tbl_karcis` (
  `id_karcis` int(11) NOT NULL,
  `nama_karcis` varchar(255) NOT NULL,
  `stok_karcis` int(11) NOT NULL,
  `harga_karcis` int(11) NOT NULL,
  `deskripsi_karcis` varchar(255) NOT NULL,
  `gambar_karcis` varchar(255) NOT NULL,
  `alamat_karcis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karcis`
--

INSERT INTO `tbl_karcis` (`id_karcis`, `nama_karcis`, `stok_karcis`, `harga_karcis`, `deskripsi_karcis`, `gambar_karcis`, `alamat_karcis`) VALUES
(1, 'Paket Wisata', 12, 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'karcis-1908202350f5ce4b6a.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuliner`
--

CREATE TABLE `tbl_kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(255) NOT NULL,
  `harga_kuliner` int(11) NOT NULL,
  `gambar_kuliner` varchar(225) NOT NULL,
  `deskripsi_kuliner` varchar(255) NOT NULL,
  `alamat_kuliner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kuliner`
--

INSERT INTO `tbl_kuliner` (`id_kuliner`, `nama_kuliner`, `harga_kuliner`, `gambar_kuliner`, `deskripsi_kuliner`, `alamat_kuliner`) VALUES
(1, 'Rasa Ayam', 23000, 'kuliner-1908202380ec1c79f1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'sana'),
(2, 'Kuliner', 2000, 'kuliner-190820232f708429c1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `username_member` varchar(255) NOT NULL,
  `password_member` varchar(255) NOT NULL,
  `no_hp_member` varchar(255) NOT NULL,
  `email_member` varchar(255) NOT NULL,
  `alamat_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `username_member`, `password_member`, `no_hp_member`, `email_member`, `alamat_member`) VALUES
(2, 'sayasdf dsf', 'saya', '20c1a26a55039b30866c9d0aa51953ca', '54235235', 'saya@gmail.com', 'sadadasdas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `id_pemesanan_homestay` int(11) DEFAULT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pemesanan_kuliner` int(11) DEFAULT NULL,
  `id_pemesanan_souvenir` int(11) DEFAULT NULL,
  `id_pemesanan_karcis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `pembayaran`, `bukti_bayar`, `id_bank`, `kategori`, `id_pemesanan_homestay`, `tanggal_pembayaran`, `id_pemesanan_kuliner`, `id_pemesanan_souvenir`, `id_pemesanan_karcis`) VALUES
(2, 120000, 'pembayaran-31082023e9ce531c83.jpg', 3, 'Pembayaran Homestay', 2, '2023-08-31 14:40:28', NULL, NULL, NULL),
(4, 58000, 'pembayaran-120920231847e2ee26.jpg', 3, 'Pembayaran Kuliner', NULL, '2023-09-12 15:54:13', 2, NULL, NULL),
(5, 84800, 'pembayaran-130920234e5345dc3d.jpg', 1, 'Pembayaran Souvenir', NULL, '2023-09-13 14:21:56', NULL, 1, NULL),
(6, 24000, 'pembayaran-13092023bae0ae6120.jpg', 3, 'Pembayaran Karcis', NULL, '2023-09-13 15:05:30', NULL, NULL, 1),
(7, 46000, 'pembayaran-14092023a816282530.jpg', 3, 'Pembayaran Kuliner', NULL, '2023-09-14 16:01:29', 3, NULL, NULL),
(8, 58000, 'pembayaran-16092023bc9a002bfc.jpg', 3, 'Pembayaran Kuliner', NULL, '2023-09-16 12:21:59', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_home_stay`
--

CREATE TABLE `tbl_pemesanan_home_stay` (
  `id_pemesanan_homestay` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp_pemesan` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `id_home_stay` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal_pemesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_pemesanan` enum('lakukan pembayaran','lunas','menunggu konfirmasi') NOT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `jumlah_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan_home_stay`
--

INSERT INTO `tbl_pemesanan_home_stay` (`id_pemesanan_homestay`, `nama_pemesan`, `no_telp_pemesan`, `email_pemesan`, `check_in`, `check_out`, `keterangan_tambahan`, `id_home_stay`, `id_member`, `tanggal_pemesan`, `status_pemesanan`, `total_harga`, `jumlah_hari`) VALUES
(2, 'saya', '54235235', 'saya@gmail.com', '2023-08-30', '2023-08-31', 'tests', 2, 2, '2023-09-14 15:20:23', 'lunas', 120000, 1),
(3, 'saya', '54235235', 'saya@gmail.com', '2023-09-14', '2023-09-15', 'sadsad', 2, 2, '2023-09-14 15:16:23', 'lakukan pembayaran', 120000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_karcis`
--

CREATE TABLE `tbl_pemesanan_karcis` (
  `id_pemesanan_karcis` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp_pemesan` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `keterangan_tambahan` varchar(255) DEFAULT NULL,
  `status_pemesanan` enum('lakukan pembayaran','lunas','menunggu konfirmasi') NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan_karcis`
--

INSERT INTO `tbl_pemesanan_karcis` (`id_pemesanan_karcis`, `id_member`, `nama_pemesan`, `no_telp_pemesan`, `total_harga`, `keterangan_tambahan`, `status_pemesanan`, `tanggal_pemesanan`) VALUES
(1, 2, 'saya', '54235235', 24000, 'dsfdsf', 'lunas', '2023-09-14 16:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_kuliner`
--

CREATE TABLE `tbl_pemesanan_kuliner` (
  `id_pemesanan_kuliner` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp_pemesan` varchar(20) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `status_pemesanan` enum('lakukan pembayaran','lunas','menunggu konfirmasi') NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan_kuliner`
--

INSERT INTO `tbl_pemesanan_kuliner` (`id_pemesanan_kuliner`, `id_member`, `nama_pemesan`, `no_telp_pemesan`, `total_harga`, `keterangan_tambahan`, `status_pemesanan`, `tanggal_pemesanan`) VALUES
(2, 2, 'saya', '54235235', 58000, 'gvdgfdg', 'lunas', '2023-09-12 15:56:48'),
(3, 2, 'saya', '54235235', 46000, '', 'lunas', '2023-09-14 16:02:09'),
(4, 2, 'saya', '54235235', 58000, 'dfgdfgdfg', 'lunas', '2023-09-16 12:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_souvenir`
--

CREATE TABLE `tbl_pemesanan_souvenir` (
  `id_pemesanan_souvenir` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp_pemesan` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `status_pemesanan` enum('lakukan pembayaran','lunas','menunggu konfirmasi') NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan_souvenir`
--

INSERT INTO `tbl_pemesanan_souvenir` (`id_pemesanan_souvenir`, `id_member`, `nama_pemesan`, `no_telp_pemesan`, `total_harga`, `keterangan_tambahan`, `status_pemesanan`, `tanggal_pemesanan`) VALUES
(1, 2, 'saya', '54235235', 84800, 'dsfsdfs', 'lunas', '2023-09-14 15:55:01'),
(2, 2, 'saya', '54235235', 4800, '', 'lakukan pembayaran', '2023-09-14 15:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `kd_pengumuman` int(11) NOT NULL,
  `subyek_pengumuman` text NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `kd_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kd_pesan` int(11) NOT NULL,
  `subyek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kd_pesan`, `subyek`, `pesan`, `email`, `nama`) VALUES
(1, 'ban bocor', 'safsd', 'imam12@gmail.com', 'haha'),
(2, 'sd', 'sadsa', 'sdsa@gmail.com', 'sad'),
(3, 'ban bocorfd', 'hfhgjh', 'saya@gmail.com', 'ahha'),
(4, 'dsf', 'dsf', 'saya@gmail.com', 'imam zunaidi'),
(5, 'sad', 'sadsa', 'sad@gmail.com', 'imam zunaidi'),
(6, 'sad', 'sad', 'sad@gmail.com', 'imam zunaidi'),
(7, 'ban bocor', 'saf', 'restikadian00@gmail.com', 'imam zunaidi'),
(8, 'sad', 'dfsdsf', 'sad@gmail.com', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id_profile`, `nama`, `deskripsi`, `visi`, `misi`, `no_hp`, `facebook`, `email`, `instagram`, `gambar`, `alamat`) VALUES
(1, 'RA Plus Rabbani', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '0852131231232', 'hihi', 'paketwisata@gmail.com', 'hihi', 'profile-19092023f51b062e02.jpeg', 'Jl. Sultan Syarif Qasim No.159, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28156');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_souvenir`
--

CREATE TABLE `tbl_souvenir` (
  `id_souvenir` int(11) NOT NULL,
  `nama_souvenir` varchar(255) NOT NULL,
  `harga_souvenir` int(11) NOT NULL,
  `deskripsi_souvenir` varchar(255) NOT NULL,
  `stok_souvenir` int(11) NOT NULL,
  `gambar_souvenir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_souvenir`
--

INSERT INTO `tbl_souvenir` (`id_souvenir`, `nama_souvenir`, `harga_souvenir`, `deskripsi_souvenir`, `stok_souvenir`, `gambar_souvenir`) VALUES
(1, 'Gantungan Mobil', 2000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 12, 'souvenir-19082023d19711a081.jpg'),
(3, 'Gantungan Kunci', 200, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 12, 'souvenir-190820239ed391496d.jpg'),
(4, 'Gantungan', 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 10, 'souvenir-1908202354db737720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `hak_akses` enum('admin','desa') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama_admin`, `username`, `password`, `alamat`, `email`, `no_hp`, `hak_akses`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', '08232132112', 'admin'),
(5, 'desa desa', 'desa', 'e54cc06625bbadf12163b41a3cb92bf8', 'desa', 'desa@gmail.com', '4324324', 'desa'),
(6, 'desa', 'desa', 'e54cc06625bbadf12163b41a3cb92bf8', 'desaaa', 'desa@gmail.com', '3432432', 'desa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alur`
--
ALTER TABLE `tbl_alur`
  ADD PRIMARY KEY (`kd_alur`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tbl_detail_pemesanan_karcis`
--
ALTER TABLE `tbl_detail_pemesanan_karcis`
  ADD PRIMARY KEY (`id_detail_pemesanan_karcis`);

--
-- Indexes for table `tbl_detail_pemesanan_kuliner`
--
ALTER TABLE `tbl_detail_pemesanan_kuliner`
  ADD PRIMARY KEY (`id_detail_pemesanan_kuliner`);

--
-- Indexes for table `tbl_detail_pemesanan_souvenir`
--
ALTER TABLE `tbl_detail_pemesanan_souvenir`
  ADD PRIMARY KEY (`id_detail_pemesanan_souvenir`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`kd_galeri`);

--
-- Indexes for table `tbl_home_stay`
--
ALTER TABLE `tbl_home_stay`
  ADD PRIMARY KEY (`id_home_stay`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`kd_informasi`);

--
-- Indexes for table `tbl_karcis`
--
ALTER TABLE `tbl_karcis`
  ADD PRIMARY KEY (`id_karcis`);

--
-- Indexes for table `tbl_kuliner`
--
ALTER TABLE `tbl_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_pemesanan_home_stay`
--
ALTER TABLE `tbl_pemesanan_home_stay`
  ADD PRIMARY KEY (`id_pemesanan_homestay`);

--
-- Indexes for table `tbl_pemesanan_karcis`
--
ALTER TABLE `tbl_pemesanan_karcis`
  ADD PRIMARY KEY (`id_pemesanan_karcis`);

--
-- Indexes for table `tbl_pemesanan_kuliner`
--
ALTER TABLE `tbl_pemesanan_kuliner`
  ADD PRIMARY KEY (`id_pemesanan_kuliner`);

--
-- Indexes for table `tbl_pemesanan_souvenir`
--
ALTER TABLE `tbl_pemesanan_souvenir`
  ADD PRIMARY KEY (`id_pemesanan_souvenir`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`kd_pengumuman`),
  ADD KEY `tbl_pengumuman_ibfk_1` (`kd_admin`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tbl_souvenir`
--
ALTER TABLE `tbl_souvenir`
  ADD PRIMARY KEY (`id_souvenir`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alur`
--
ALTER TABLE `tbl_alur`
  MODIFY `kd_alur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail_pemesanan_karcis`
--
ALTER TABLE `tbl_detail_pemesanan_karcis`
  MODIFY `id_detail_pemesanan_karcis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_detail_pemesanan_kuliner`
--
ALTER TABLE `tbl_detail_pemesanan_kuliner`
  MODIFY `id_detail_pemesanan_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_detail_pemesanan_souvenir`
--
ALTER TABLE `tbl_detail_pemesanan_souvenir`
  MODIFY `id_detail_pemesanan_souvenir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `kd_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_home_stay`
--
ALTER TABLE `tbl_home_stay`
  MODIFY `id_home_stay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `kd_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_karcis`
--
ALTER TABLE `tbl_karcis`
  MODIFY `id_karcis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kuliner`
--
ALTER TABLE `tbl_kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_home_stay`
--
ALTER TABLE `tbl_pemesanan_home_stay`
  MODIFY `id_pemesanan_homestay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_karcis`
--
ALTER TABLE `tbl_pemesanan_karcis`
  MODIFY `id_pemesanan_karcis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_kuliner`
--
ALTER TABLE `tbl_pemesanan_kuliner`
  MODIFY `id_pemesanan_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_souvenir`
--
ALTER TABLE `tbl_pemesanan_souvenir`
  MODIFY `id_pemesanan_souvenir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `kd_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kd_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_souvenir`
--
ALTER TABLE `tbl_souvenir`
  MODIFY `id_souvenir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD CONSTRAINT `tbl_pengumuman_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `tbl_users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
