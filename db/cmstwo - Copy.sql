-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 06:58 AM
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
-- Database: `cmstwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_title` varchar(255) NOT NULL,
  `cat_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_title`, `cat_id`) VALUES
('Book', 25),
('Bike', 26),
('Cloths ', 27),
('Female', 28),
('Male ', 29),
('Health Care ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(32, 13, 'Sami', 'reton21@gmail.com', 'nice ', 'approved', '2019-05-16'),
(33, 13, 'Sami', 'reton21@gmail.com', 'content ', 'approved', '2019-05-16'),
(34, 13, 'Sami', 'reton21@gmail.com', 'content ', 'approved', '2019-05-16'),
(35, 13, 'Sami', 'reton21@gmail.com', 'content ', 'approved', '2019-05-16'),
(36, 18, 'Sami', 'reton21@gmail.com', 'dsfdsfds', 'approved', '2019-05-23'),
(37, 24, 'Bangladesh ', 'reton21@gmail.com', 'Samiyousuf', 'approved', '2019-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(20, 29, 'EXAMPLE 1000', 'sami', '2019-05-25', '03.jpg', 'sgfdfdfsdfsd', 'Bangladesh,Dhaka', '', 'published'),
(23, 34, 'EXAMPLE 1000', 'Diaz', '2019-05-25', '06.jpg', 'reeeeeeeeeeeeeeeeeeeegfdddddd', 'Bangladesh,Dhaka', '', 'published'),
(24, 25, 'python', 'Diaz', '2019-05-25', '01.jpg', 'fgdsdfasdddddddddd', 'bangladesh', '1', ' draft'),
(25, 27, 'cloth', 'Big', '2019-07-12', '07.jpg', 'website  nice ', 'nice', '', 'male'),
(26, 25, 'cloth', 'Big', '2019-07-12', '02.jpg', 'hfghgfhgfhfghfhf', 'nice', '', 'male'),
(27, 26, 'TVS', 'bike', '2019-07-13', 'rtr-200-right-side-view_600x300.jpg', 'TVS Apache RTR 200 Fi E100\r\nRate this bike\r\nRs. 1.20 lakh Ex-showroom Price, Delhi\r\n\r\n\r\n\r\nSpecifications Summary of Apache RTR 200 Fi E100\r\nEngine Displacement (CC) : 197.75 cc No Of Gears : 5 Speed Fuel Type : Petrol ABS : Dual Channel Wheels Type (Pressed Steel/ Alloy) : Alloy Tyre Type : Tubeless Engine Displacement : 197 CC', 'bike', '', 'published'),
(28, 37, 'Luicca', 'Sami', '2019-07-28', '', '', '', '', 'Anikar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(10, 'Samiyousuf', '$1$dUo/LF6J$p0ydrpZMZC5rBzvN1Nfj2/', 'Firstname', 'fasdfsad', 'fasdfsdfsd@gmail.com', '', 'admin', ''),
(13, 'Samiyousuf', '$1$dUo/LF6J$p0ydrpZMZC5rBzvN1Nfj2/', 'Firstname', 'fasdfsad', 'fasdfsdfsd@gmail.com', '', 'admin', ''),
(14, 'new', 'asdkfsaksdlfsa', 'fasffkdsafk', 'dskfjasjfasf', 'aassaf@gamil.com', '', 'admin', ''),
(15, 'reco', '1234', 'Sami Yousuf', 'Yousuf', 'bd@gmail.com', '', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
