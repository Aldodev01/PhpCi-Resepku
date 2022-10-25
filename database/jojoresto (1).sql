-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 07:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jojoresto`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(11) NOT NULL,
  `tipe` varchar(48) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `tipe`) VALUES
(1, 'French Cuisines'),
(2, 'Chinese Cuisines'),
(3, 'Indonesia Cuisines'),
(4, 'Japanese Cuisines'),
(5, 'Italian Cuisines');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `nama_resep` varchar(64) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(756) CHARACTER SET latin1 NOT NULL,
  `bahan` varchar(756) CHARACTER SET latin1 NOT NULL,
  `langkah_masak` varchar(756) CHARACTER SET latin1 NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `image`, `nama_resep`, `deskripsi`, `bahan`, `langkah_masak`, `link`) VALUES
(1, 'french-toast.jpg', 'French Toast', 'French Toast adalah roti panggang perancis yang dilapisi dengan telur, susu, krim kental dan bahan lainnya, kemudian dipanggang sampai garing. Rasanya manis, gurih, bertekstur garing dengan aroma yang harum. Cara membuat  terbilang mudah karena hanya butuh alat berupa teflon.\r\nBerikut resep French Toast dari Resto untuk hidangan sarapan praktis, mewah, dan enak', '- 5 lembar roti tawar tebal tanpa kulit\r\n- 2 butir telur\r\n- 1/4 sendok teh garam\r\n- 1/2 sendok makan gula pasir\r\n- 75 ml susu cair\r\n- 75 ml krim kental\r\n- 125 gram mentega\r\n- maple syrup sesuai selera', '1. Campur bahan pencelup, kocok telur, garam, dan gula pasir. Tambahkan susu cair dan krim kental sambil diaduk rata.\r\n2. Celupkan roti ke bahan pencampur. Panggang dengan wajan yang sudah dioleskan mentega. Balik sisinya agar matang sampai coklat keemasan.\r\n3. Hidangkan dengan olesan mentega dan sirup maple', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
