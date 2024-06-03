-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 08:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`) VALUES
(1, '50% discount on Basic Membership on the occasion of dashain, 2023', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime.', '1.jpg'),
(2, 'Zumbastic Membership being popular at Gurus of Fitness', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iste, quos sapiente aperiam rem ab. Modi non sunt, nulla omnis ex quis aut in? Fuga aliquid ea maiores voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex vero qui facilis dolore necessitatibus error, minima voluptas fugiat eaque, nihil ad odio cumque vel ea in et ipsum modi maxime.', '2.jpg'),
(3, 'Providing private trainer for yoga from today, 05/10/2023', 'With global sales contracting only slightly in 2022, much of this reduction in sales is due to rivals taking sales and market share. The march towards EV cars is clear in most Western countries and China. While the US remains keen on large pickups, it is also shifting its buying patterns towards more efficient models. We’ve ranked the top 30 best-selling cars in the world in ascending order.', '6.jpg'),
(4, 'Sauna/Steam facility being lunch at Fitness of Guru Center ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sit cumque iusto dolores mollitia iure ex voluptatum obcaecati numquam sed, optio soluta at, atque sunt quae, explicabo quas illum laborum.', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `address`, `city`, `country`, `phone`, `email`, `booking`) VALUES
(9, 'Syaron', 'Mahato', 'Tandi', 'Chitwan', 'Nepal', '9865088603', 'syaron@gmail.com', 'Basic Membership');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'rupaky', 'chaudhary', 'rupak', 'd9b1d7db4cd6e70935368a1efb10e377'),
(2, 'Rajendra', 'Mahato', 'rajendra', '202cb962ac59075b964b07152d234b70'),
(5, 'Syaron', 'Mahato', 'syaron', 'bcbe3365e6ac95ea2c0343a2395834dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
