-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 05:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothingpallette`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb-_mainpage`
--

CREATE TABLE `tb-_mainpage` (
  `header` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `institution` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb-_mainpage`
--

INSERT INTO `tb-_mainpage` (`header`, `image`, `name`, `designation`, `institution`) VALUES
('', '24.jpg', '<h4>Allan Donald</h4>', '<p>CEO & Founder of Example</p>', '	<p>Harvard University</p>'),
('', '23.jpg', '<h4>John Doe</h4>', '<p>Chief executive manager of Example</p>', '<p>Cambridge University</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Child'),
(4, 'Summer'),
(5, 'Winter'),
(6, 'Jersey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `Date`) VALUES
(1, 'Mahmudul Hasan', 'Robin', 'amirobin@baust.gmail.com', 'This a sample text.', 0, '2018-09-01 19:00:42'),
(2, 'Nazmul Alam', 'Nowfel', 'nowfel@gmail.com', 'There are some errors in the delete page option.', 0, '2018-09-01 06:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(1, 'Test Page', '<p>This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.</p>\r\n<p>This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.This is a demo page.This page&nbsp; contains nothing.</p>'),
(2, 'Demo', '<p>Demo page contains&nbsp; nothing</p>'),
(3, 'Demo', '<p>Demo page contains&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tag`, `date`) VALUES
(1, 1, 'Men Category Product', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'm1.jpg', 'Mahmudul Hasan', 'Men,T-Shirt', '2018-06-09 13:51:34'),
(2, 4, 'Summer Category Product', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 's2.jpg', 'Nazmul Alam', 'Summer', '2018-06-09 13:51:34'),
(3, 4, 'Summer Ctegory Product-2', '<p>This product is summer season friendly.Made for only nazmul\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 's1.jpg', 'Nilaya Kumar Ghosh', 'summer ', '2018-06-09 13:56:21'),
(4, 2, 'Women Category Product-2', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', '210.jpg', 'Afsara Afia', 'women,comfort', '2018-06-09 14:39:53'),
(5, 3, 'Child Category Product', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'child1.jpg', 'Mahmudul Hasan', 'Child,Infant', '2018-06-09 14:44:40'),
(6, 5, 'Winter Category Product', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', '212.jpg', 'Nazmul Alam Nowfel', 'Winter,Hot', '2018-06-09 14:44:40'),
(7, 1, 'Men Category Product-2', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'm2.jpg', 'Nilaya Kumar Ghosh', 'Men', '2018-06-09 14:46:48'),
(8, 2, 'Women Category Product', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily.There are some reasons.\r\n\r\n\r\n </p>', '214.jpg', 'Afsara Afia', 'Women,Data', '2018-06-09 14:46:48'),
(9, 3, 'Child Category Product-2', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'child2.jpg', 'Rifat', 'practise', '2018-06-11 20:13:19'),
(10, 6, 'Jersey Category Product', '<p>This product is summer season friendly.Made for only adults with 100% Polyester material.This is breathable,durable and waterproof. Sanitation Workers, Security Staff, Road Administration can use it easily. The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily. The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'j1.jpg', 'Mahmudul hasan', 'Jersey', '2018-06-13 13:41:49'),
(11, 6, 'Jersey Category Product-2', '<p>This product is summer season friendly.Made for only adults with 100% Polyester material.This is breathable,durable and waterproof. Sanitation Workers, Security Staff, Road Administration can use it easily. The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily. The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'j2.jpg', 'Nilaya Kumar Ghosh', 'jersey-2', '2018-06-13 13:41:49'),
(12, 5, 'Winter Category Product-2', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'winter1.jpg', 'Nazmul Alam', 'winter', '2018-06-13 14:10:11'),
(13, 5, 'Winter Category Product-3', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'winter2.jpg', 'Afasara Afia', 'winter', '2018-06-13 14:10:11'),
(14, 6, 'Jersey Category Product-3', '<p><p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p></p>', 'j3.jpg', 'Nilaya Kumar Ghosh', 'jersey', '2018-06-13 14:19:11'),
(15, 4, 'Summer Category Products-3', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 's3.jpg', 'Afsara Afia', 'summer', '2018-06-13 14:25:39'),
(16, 1, 'Men Category Product-3', '<p>This product is summer season friendly.Made for only adults\r\n					with 100% Polyester material.This is breathable,durable and waterproof.\r\n					Sanitation Workers, Security Staff, Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Sanitation Workers, Security Staff, Road Administration can use it easily.Road Administration can use it easily.\r\n					The type is reflective pants & trousers.Road Administration can use it easily.Road Administration can use it easily.Road Administration can use it easily. </p>', 'm3.jpg', 'Nilaya Kumar Ghosh', 'men,boys', '2018-06-13 14:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'robin', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 0),
(2, 'nazmul', 'a0e2a2c563d57df27213ede1ac4ac780', '', '', 2),
(3, 'nilaya', 'd736bb10d83a904aefc1d6ce93dc54b8', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Clothing Pallette', 'Clothing at its best', 'upload/123.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
