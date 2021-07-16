-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 08:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uapsig`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cord` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `cord`, `jam`, `harga`, `telp`, `alamat`, `gambar`) VALUES
(2, 'Lembah Hijau', '-5.415785, 105.230726', '08.00 - 17.00 WIB', 'Rp15.000 - Rp55.000', '(0721) 8050000', 'Jl. Raden Imba Kesuma Ratu, Sukadana Ham Tanjung Karang Barat, Bandar Lampung', 'lembahhijau.jpg'),
(3, 'Teropong Kota Bukit Sindy', '-5.404585, 105.253401', '08.00 - 22.00 WIB', 'Rp10.000', '813123123', 'Jl. Tamin, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121', 'teropongkota1.jpg'),
(4, 'Air Terjun Batu Putu', '-5.427303, 105.218291', '07.00 - 17.00 WIB', 'Rp. 5.000', '083168152462', 'Jl. Wan Abdul Rahman, Desa Batu Putu, Kecamatan Teluk Betung Barat, Kota Bandar Lampung', 'arter1.jpg'),
(5, 'Lengkung Langit', '-5.399817, 105.191280 ', '09.00 - 21.00 WIB', 'Rp10.000', '0721 268523', 'Pinang Jaya, Kemiling, Kota Bandar Lampung ', 'lengkunglangit1.jpg'),
(6, 'Alam Wawai', '-5.421992, 105.231711', '11.00 - 17.00 WIB', 'Rp20.000', '0811-7233-366', 'Jl. H. Hasan Rais, Sukadana Ham, Kec. Tj. Karang Barat, Kota Bandar Lampung, Lampung 35116', 'alamwawai1.jpg'),
(7, 'Bumi Kedaton', '-5.434868, 105.226211', '10.00 - 18.00 WIB', 'Rp8.000 - Rp25.000', '(0721) 7488047', 'Jalan W.A Rahman Ni 1,2,3, Batu Putuk, Kec. Tlk. Betung Utara,<br>Kota Bandar Lampung, Lampung 35238', 'bumikedaton1.jpg'),
(9, 'Bukit Sakura', '-5.404374, 105.222797', '10.00 - 17.30 WIB', 'Rp10.000', '0813-4908-0755', 'Jl. Melati Raya, Langkapura, Kota Bandar Lampung,Lampung, 35115', 'bukitsakura1.jpg'),
(10, 'Lampung Walk', '-5.389866, 105.276447', '11.00 - 18.00 WIB', 'Rp30.000 - Rp40.000', '0853-8109-9988', 'Way Halim Permai, Way Halim, Bandar Lampung City, Lampung 35133', 'lpgwalk2.jpg'),
(11, 'Taman Kelinci', '-5.409035, 105.210874', '09.00 - 17.00 WIB', 'Rp7.000 - Rp10.000', '0857-8988-8088', 'Jalan Moh. Ali No.10, Kelurahan Kedaung, Kecamatan Kemiling, Kota Bandar Lampung, 35156', 'tmnkelinci1.PNG'),
(12, 'Taman Wisata Hutan Kera', '-5.432434, 105.269535', '10.00 - 17.00 WIB', '-', '24 Jam', 'Jalan Dr Cipto Mangunkusumo, Sumur Batu, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35212', 'monkeyforest1.jpg'),
(13, 'Puncak Mas', '-5.420491, 105.228482', '10.00 - 17.30 WIB', 'Rp20.000', '0821-8115-5115', 'Jl. PB. Marga, Sukadana Ham, Kec. Tj. Karang Barat, Kota Bandar Lampung, Lampung 35215', 'puncakmas1.jpg'),
(14, 'Taman Kupu - Kupu Gita Persada', '-5.420949, 105.188573', '08.00 - 17.00 WIB', 'Rp10.000', '0857-6464-7399', 'Jl. Wan Abdurrahman, Hutan, Kec. Hutan, Lampung, 35158', 'tmnkpukpu1.jpg'),
(15, 'Kampoeng Vietnam ', '-5.415870, 105.193297', '09.00 - 17.30 WIB', 'Rp5.000', '-', 'Jl. Teuku Cik Ditiro, Sumber Agung, Kec. Kemiling,  Kota Bandar Lampung, Lampung 35156', 'kampungviet1.jpg'),
(16, 'Seven Selfie', '-5.424727, 105.195003', '11.00 - 18.00 WIB', 'Rp5.000', '0812-7258-6468', 'Jl. Wan Abdurrahman, Batu Putuk, Kec. Telukbetung Barat,  Kota Madya, Lampung 35239', 'sevenselfie1.png'),
(17, 'DMermaid Tirtayasa Waterpark', '-5.405627, 105.311925', '10.00 - 18.00 WIB', 'Rp25.000 - Rp40.000', '-', 'Perumahan Villa Bukit Tirtayasa, Campang Raya, Tanjung Karang Timur, Campang Raya, Kota Bandar Lampung, 35122', 'dmermaid1.jpg'),
(18, 'Pantai Puri Gading', '-5.470805, 105.250216', '07.00 - 18.00 WIB', 'Rp5.000', '-', 'Jl. Laksamana R.E.Martadinata, Sukamaju, Tlk. Betung Barat, Kota Bandar Lampung, Lampung 35231', 'pantaipuri1.jpg'),
(19, 'Pantai Duta Wisata', '-5.476821, 105.252593', '07.00 - 18.00 WIB', 'Rp10.000', '-', 'Jl. Laksamana R.E.Martadinata, Teluk Betung Barat., Kota Bandar Lampung, Lampung 35236', 'dutawisata1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
