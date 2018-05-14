-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2018 pada 08.19
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `tanggal_blog` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `lokasi_penulis` varchar(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `tanggal_blog`, `content`, `image`, `penulis`, `sumber`, `lokasi_penulis`, `id_cat`) VALUES
(8, 'Busana Indonesia Modern', '2018-04-10', 'Pada tahun 2000-an nama-nama baru lebih memperkaya daftar panjang desainer berbakat Indonesia yang memiliki karakteristik tersendiri dan gaya independen seperti Adrian Gan, Obin, Kiata Kwanda, Sally Koeswanto, Tri Handoko dan Irsan. Sementara yang lain membuat desain gaya barat, Edward Hutabarat dan Anne Avantie mendedikasikan kreasi mereka dengan mendesign kostum tradisional \"Blus Kebaya\" dengan sentuhan modern. Sehingga membuat busana tradisional Indonesia terlahir kembali dan dicintai oleh kalangan muda sehingga mereka lebih menghargai seni tradisional.  Demikian Rangkuman Sejarah Perkembangan Dunia Fashion di Indonesia dengan nama-nama Fashion Desainer yang terlibat didalamnya. Semoga dapat menjadikan inspirasi bagi perkembangan dunia fashion yang lebih maju.', 'fas21.jpg', '', '', '', 0),
(9, 'Trend Dunia Fashion', '2018-04-10', 'Meskipun termasuk negara yang sedang berkembang, tetapi di bidang fashion para wanita Indonesia memiliki selera dan wawasan fashion bertaraf internasional. Hadirnya berbagai produk dengan merk-merk internasional di pasar fashion mengindikasikan bahwa setidaknya wanita Indonesia memiliki selera yang sama dengan konsumen dari negeri asal produk tersebut. Trend fashion tersebut tidak hanya menjangkiti para wanita kalangan atas, bahkan kalangan bawah pun juga mengkonsumsi produk serupa. Tetapi, tentu saja tak sama karena berupa reproduksi yang dibuat oleh para perajin lokal, misalnya sepatu atau tas. Ironisnya, banyak perajin yang memiliki kemampuan dan ketrampilan untuk menghasilkan kualitas setara produk aslinya.', 'fas3.jpg', '', '', '', 0),
(10, 'Dunia fashion di Indonesia mengkreasikan bahan daur ulang menjadi busana', '2018-04-10', 'Sementara itu gejolak fashion di dalam negeri juga ditandai oleh gencarnya Pemerintah Kabupaten Banyuwangi menggelar berbagai fashion show. Mulai dari fashion yang memperagakan busana berbahan batik khas Banyuwangi sampai yang paling unik Green & Recycle Fashion, yakni fashion show yang menampilkan busana dari bahan daur ulang. Fenomena yang belum pernah ada selama ini mengindikasikan tumbuhnya kepedulian dan kesadaran masyarakat di daerah terhadap fashion.', 'fas4.jpg', '', '', '', 0),
(13, 'Busana Batik', '2018-04-10', 'Batik Indonesia', 'fas5.jpg', 'rr', '90in', 'jakarta', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_cat`, `cat_name`, `cat_description`, `date_created`) VALUES
(1, 'isna', 'adalah', '2018-04-30 07:56:44'),
(4, 'fifi', 'ff', '2018-04-30 09:07:09'),
(9, 'hh', 'looo', '2018-04-30 10:54:34'),
(10, 'Baju Modern', 'Fashion Batik', '2018-04-30 14:41:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
