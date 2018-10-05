-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 03:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almaqraa_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_date` datetime NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `post_date`, `created_at`, `updated_at`) VALUES
(1, 'Aviation Videography Forum', '2018-06-07 07:00:00', '2018-06-04', '2018-06-08'),
(2, 'Aviation Discussion Forum', '2018-06-08 02:12:00', '2018-06-05', '2018-06-08'),
(3, 'Digital Photo Processing Forum', '2018-06-05 11:00:00', '2018-06-04', '2018-06-08'),
(4, 'Off Topic Forum', '2018-06-03 14:16:28', '2018-06-05', '2018-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `content` text,
  `detail` text,
  `img_url` varchar(255) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `fav_count` int(11) DEFAULT NULL,
  `comment_count` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `title`, `sub_title`, `content`, `detail`, `img_url`, `view_count`, `fav_count`, `comment_count`, `created_at`, `updated_at`) VALUES
(1, 'Orlando Suarez', 'N370NW', 'Airbus A320-212', 'Originally delivered to Northwest Airlines on 28/07/1999...', 'https://cdn.jetphotos.com/400/5/23739_1492804909.jpg', 444, 0, 0, '2018-06-05', '2018-06-08'),
(2, 'Jon Melo', '3B-NBM', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/50141_1492823870.jpg', 300, 0, 1, '2018-06-03', '2018-06-07'),
(3, 'Vyacheslav Firsov', 'P4-KCE', 'P4-KCE', 'Originally delivered to Northwest Airlines on 28/07/1999...', 'https://cdn.jetphotos.com/400/6/39032_1492845486.jpg', 55, 2, 0, '2018-06-05', '2018-06-08'),
(4, 'Daniel Nagy', 'G-GDFU', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/17992_1492851258.jpg', 555, 0, 1, '2018-06-03', '2018-06-07'),
(5, 'panda', 'G-GDFU', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/17992_1492851258.jpg', 777, 0, 1, '2018-06-03', '2018-06-07'),
(6, 'Tiger', 'G-GDFU', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/17992_1492851258.jpg', 300, 0, 1, '2018-06-03', '2018-06-07'),
(7, 'Bear', 'G-GDFU', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/17992_1492851258.jpg', 300, 0, 1, '2018-06-03', '2018-06-07'),
(8, 'Victory', 'G-GDFU', 'Airbus A330-202', 'Originally delivered to Northwest Airlines on ', 'https://cdn.jetphotos.com/400/6/17992_1492851258.jpg', 300, 0, 1, '2018-06-03', '2018-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `category_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'TUI Airlines Belgium | Embraer ERJ-190STD | Landing and Take-Off at Antwerp Airport', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-06-05', '2018-06-07'),
(2, 2, 'DL Registration?', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2018-06-04', '2018-06-08'),
(3, 1, 'DeavesPhotography - Rejection advice', 'ccccccccccccccccccccccccccccccccccccc', '2018-06-05', '2018-06-07'),
(4, 2, 'Help with rejection', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2018-06-04', '2018-06-08'),
(5, 1, 'Antonov An-22 takes-off', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2018-06-05', '2018-06-07'),
(6, 2, 'Einzelwolf Prescreen', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2018-06-04', '2018-06-08'),
(7, 3, 'Wrong location', 'dsfsdfsdfsdfsdfsdfs', '2018-06-05', '2018-06-07'),
(8, 4, 'New Airbus A330 from LEVEL (TLS)', 'sfgsfdgsfhsdfgsdfgfgsdfgsfgsdfgsfdg', '2018-06-04', '2018-06-08'),
(9, 2, 'question about theTaxi speed ?', 'tttttttttttttttttttttttttttttt', '2018-06-05', '2018-06-07'),
(10, 4, 'Exporting Images from RAW files to Jpeg', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2018-06-04', '2018-06-08'),
(11, 1, 'How to upload replicas?', 'kkkkkkkkkkkkkkkkkkkkkkk', '2018-06-05', '2018-06-07'),
(12, 3, 'Jack Prebble - rejection help', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2018-06-04', '2018-06-08'),
(13, 3, 'Changing the photo date', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2018-06-05', '2018-06-07'),
(14, 3, 'Damp China Eastern A330 landing, YVR', 'llllllllllllllllllllllllllllllllllllll', '2018-06-04', '2018-06-08'),
(15, 1, 'Aircraft crash off New York coast', 'wwwwwwwwwwwwwwwwwwwwwwddddddddddddddddd', '2018-06-05', '2018-06-07'),
(16, 2, 'pandaadfadsf, YVR', '888888888888888888888888888888888888888888888', '2018-06-04', '2018-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'jinping', 'jinping1110@gmail.com', '$2y$10$GZ2Mi8FTNqNyuQz4qRN1x.Wed3X9Le1KOoj/0BMPx.nRZeZZ0wjIu', 'OFf1iHpTfCtZtJyUAMstlSMSp1utHrzxTsuLe1dHoHcEPbwzG6r9KH1fMye9', NULL, NULL),
(8, 'Kostya', 'shiningdeveloper@hotmail.com', '$2y$10$GGARfk6wwoBs0mc6MVvqCupOoJ7.wfDgTfrrnfuB84lqtn.b8jFKa', 'jhuos019hgZXtswNrwN9F2aDS7xANI7skQsw7IrAYv5Mzqh9WDoF2vN5RrwR', '2018-06-09 05:54:46', '2018-06-09 05:54:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
