-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 04:36 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banana_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  `quantity` int(100) NOT NULL,
  `is_active` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES
(1, 'Tomates', 30, 'de belles tomates du jardin', 'https://www.hipp.de/fileadmin/_processed_/b/3/csm_zt_tomate_198e693f03.png', 200, 1),
(2, 'Bananes', 10, 'des bananes du jardin', 'https://www.hipp.de/fileadmin/_processed_/0/7/csm_zt_banane_fe43f71296.png', 200, 1),
(3, 'Fraises', 200, 'fraises fraichement cueilli du jardin', 'https://www.hipp.de/fileadmin/_processed_/c/0/csm_zt_erdbeere_1976b27929.png', 150, 1),
(4, 'Poires', 50, 'les meilleurs poires de la région', 'https://www.hipp.de/fileadmin/_processed_/1/4/csm_zt_birne_3f923be620.png', 80, 0),
(5, 'Pêches', 45, 'des pêches bien juteuses', 'https://www.hipp.de/fileadmin/_processed_/5/7/csm_zt_pfirsich_d518d378f9.png', 120, 1),
(6, 'Mangues', 100, 'La mangue préféré des dieux', 'https://www.hipp.de/fileadmin/_processed_/f/0/csm_zt_mango_5843fc49fd.png', 20, 0),
(7, 'Abricots', 20, 'ouistiti', 'https://www.hipp.de/fileadmin/_processed_/7/4/csm_zt_aprikose_3b8974d0c5.png', 50, 1),
(8, 'Courgettes', 10, 'Des courgettes vertes et ca c\'est bien', 'https://www.hipp.de/fileadmin/_processed_/f/e/csm_zt_zucchini_2a28b684e9.png', 12, 0),
(9, 'Pomme', 5, 'Une pomme comme une autre', 'https://www.hipp.de/fileadmin/_processed_/6/c/csm_zt_apfel_c5e51419dc.png', 400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`) VALUES
(1, 'monemail@gmail.com', 'monpassword', 'monfirstname', 'monlastname'),
(2, 'Jean@gmail.com', 'jean', 'Jean', 'Petit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
