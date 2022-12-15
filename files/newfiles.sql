-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2020 at 05:42 AM
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `newfiles`
--

CREATE TABLE `newfiles` (
  `id` int NOT NULL COMMENT 'ID for files',
  `filename` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `disposition` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expires` int NOT NULL,
  `cache` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pragma` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newfiles`
--

INSERT INTO `newfiles` (`id`, `filename`, `type`, `description`, `disposition`, `expires`, `cache`, `pragma`) VALUES
(0, 'kde-logo-white-blue-rounded-source.svg', 'File Transfer', 'File Transfer', 'attachment', 0, 'must-revalidate', 'public'),
(1, 'ubuntu_36_swirl_1312176857.svg', 'File Transfer', 'File Transfer', 'attachment', 0, 'must-revalidate', 'public'),
(2, 'UbuntuCoF.svg', 'File Transfer', 'File Transfer', 'attachment', 0, 'must-revalidate', 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newfiles`
--
ALTER TABLE `newfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
