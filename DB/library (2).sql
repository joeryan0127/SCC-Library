-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 02:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_user` varchar(100) NOT NULL,
  `a_pass` varchar(100) NOT NULL,
  `a_address` varchar(100) NOT NULL,
  `a_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`a_id`, `a_name`, `a_email`, `a_user`, `a_pass`, `a_address`, `a_status`) VALUES
(1, 'rya ', 'rya', 'rya', '$2y$10$0ljkm5PA.e1LLxatXasjV.2mx8zNcCpcbL5XkEhxWMhNqF6ZMGWLi', 'mayana', 'Active'),
(2, 'Joe Ryan Victorillo', 'joerayan.victorillo@gmail.com', 'ryan', '$2y$10$uLuR9H7AQYE2/Vk20hdDUecz.uxEEKMe9QxU57v34pKYRJs0MNWNK', 'mayana', 'Active'),
(3, 'asd', 'vive@mailinator.com', 'ryan3', '$2y$10$PtFK6dWW2CPy6F6XhLtxmu3pgbKgUNDsJHDzli/AOf3EcPYzOwBSu', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `b_isbn` int(10) NOT NULL,
  `b_image` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_description` varchar(1000) NOT NULL,
  `b_publish` varchar(100) NOT NULL,
  `b_quantity` int(10) NOT NULL,
  `b_author` varchar(100) NOT NULL,
  `b_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`b_isbn`, `b_image`, `b_name`, `b_description`, `b_publish`, `b_quantity`, `b_author`, `b_status`) VALUES
(1, 'Screenshot 2023-12-06 175752.png', 'fsdd', 'dsf', 'fdsfs', 11, '', 'Deleted'),
(2, 'source355x388_cn_0044.jpg', 'Fallon Valencia', 'Sit ut qui animi ea', 'Expedita soluta aspe', 0, '', 'Deleted'),
(4, 'Capture1.png', 'math', 'Test', 'date', 4, 'ry\n', ''),
(5, 'Capture1.png', 'math', 'Test', 'date', 4, 'ry', ''),
(6, 'Capture.png', 'programming', 'Test', 'date', 5, 'rya', ''),
(7, 'Capture1.png', 'math', 'Test', 'date', 5, 'ry', ''),
(8, 'Capture.png', 'programming', 'Test', 'date', 5, 'rya', ''),
(9, 'Capture1.png', 'math', 'Test', 'date', 5, 'ry', ''),
(10, 'Capture.png', 'programming', 'Test', 'date', 5, 'rya', ''),
(11, 'Screenshot 2023-12-06 175731.png', 'fsddf', 'dsf', 'fdsfs', 0, '', ''),
(12, 'Screenshot 2024-01-15 133940.png', 'fsddf', 'dsf', 'fdsfs', 0, '', ''),
(13, '', '', '', '', 0, '', ''),
(14, '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issuebook`
--

CREATE TABLE `tbl_issuebook` (
  `i_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `i_date` varchar(100) NOT NULL,
  `i_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_issuebook`
--

INSERT INTO `tbl_issuebook` (`i_id`, `s_id`, `book_id`, `i_date`, `i_status`) VALUES
(2, 3, 2, '2024-01-09 07:07:13', 'RETURNED'),
(3, 2, 1, '2024-01-09 07', 'RETURNED'),
(4, 2, 1, '2024-01-09 07:08:52', 'RETURNED'),
(5, 3, 1, '2024-01-09 07:12:17', 'Borrowed'),
(6, 2, 1, '2024-01-09 14:14:18', 'Borrowed'),
(7, 2, 1, '2024-01-09 15:21:12', 'Borrowed'),
(8, 2, 1, '2024-01-10 13:58:33', 'Borrowed'),
(9, 1, 2, '2024-01-11 09:41:55', 'Borrowed'),
(10, 2, 2, '2024-01-11 09:42:33', 'Borrowed'),
(13, 1, 3, '2024-01-11 10:37:51', 'Borrowed'),
(14, 2, 3, '2024-01-11 11:22:38', 'Borrowed'),
(15, 2, 3, '2024-01-11 11:23:00', 'RETURNED'),
(17, 3, 1, '2024-01-11 15:41:55', 'RETURNED'),
(18, 3, 3, '2024-01-12 15:07:46', 'Borrowed'),
(19, 5, 5, '2024-02-15 10:07:31', 'Borrowed'),
(20, 3, 4, '2024-02-15 14:09:39', 'Borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `s_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `schoolyear` varchar(100) NOT NULL,
  `s_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`s_id`, `firstname`, `lastname`, `s_address`, `email`, `gender`, `department`, `yearlevel`, `birthdate`, `status`, `schoolyear`, `s_status`) VALUES
(1, 'ryan', 'victorillo', 'Mayana City of naga Cebu', 'joerayan.victorillo@gmail.com', 'Male', 'BSED', '2nd year', '2023-09-05', 'single', '2022-2023', ''),
(2, 'Alec Pugh', 'Abel Rich', 'Dolore alias id ipsu', 'javot@mailinator.com', 'Female', 'Voluptate rerum et q', '1971', '2020-07-06', 'Aperiam perspiciatis', '2012', ''),
(3, 'ryan1', 'victorillo', 'Mayana City of naga Cebu', 'joerayan.victorillo@gmail.com', 'Male', 'BSIT', '2nd year', '2023-09-05', 'single', '2022-2023', ''),
(5, 'Tara Joyner', 'Tamekah Duncan', 'Eum facere ullam vol', 'vive@mailinator.com', 'Male', 'Architecto ut offici', '1983', '2003-05-06', 'Sint hic culpa est', '1972', ''),
(6, 'Malik Hurley', 'Amena Ware', 'Deserunt et ipsa ev', 'suwy@mailinator.com', 'Male', 'Vel sequi Nam assume', '2013', '1999-11-17', 'Exercitation volupta', '2009', ''),
(7, 'Penelope Whitehead', 'Illiana Mcguire', 'Ea est repellendus ', 'muju@mailinator.com', 'Male', 'Elit praesentium no', '1991', '2018-09-03', 'Nostrum ut sit ex qu', '1993', ''),
(8, 'Hall Hoffman', 'Tobias Pace', 'Quaerat qui ea quaer', 'pirini@mailinator.com', 'Male', 'Qui ad hic in repreh', '2006', '1978-08-03', 'Id reprehenderit tot', '2007', ''),
(9, 'Perry Key', 'Tanek Carney', 'Laborum Quos placea', 'qatuqy@mailinator.com', 'Male', 'Mollitia maiores qui', '1998', '2005-05-27', 'Incididunt consequat', '1972', ''),
(10, 'Talon Roberson', 'Branden Bullock', 'Dignissimos ea conse', 'sikocu@mailinator.com', 'Male', 'Minima voluptates ma', '1985', '1983-03-02', 'Consequatur minima ', '1990', ''),
(11, 'mike', 'oyy1', 'lutopan', 'joe@gmail.com', 'male', 'BSIT', '1st Year', '1999-01-27', 'single', '2022-2023', 'Active'),
(12, 'mike1', 'oyy2', 'lutopan', 'joe@gmail.com', 'male', 'BSIT', '2nd Year', '1999-01-28', 'single', '2022-2024', 'Active'),
(13, 'mike2', 'oyy3', 'lutopan', 'joe@gmail.com', 'male', 'BSIT', '3rd Year', '1999-01-29', 'single', '2022-2025', 'Active'),
(14, '', '', '', '', 'Male', '', '', '', '', '', ''),
(15, 'Ivor', 'Dejesus', 'vukabecy', 'zonahys', 'Female', 'BSIT', '2nd Year', '2013-05-14', '10-Jun-1985', '2023-2024', ''),
(16, 'ryan2', 'victorillo', 'Mayana City of naga Cebu', 'joerayan.victorillo@gmail.com', 'Male', 'BSED', '2nd year', '2023-09-05', 'single', '2022-2023', ''),
(17, 'ryan2', 'victorillo', 'Mayana City of naga Cebu', 'joerayan.victorillo@gmail.com', 'Male', 'BSED', '2nd year', '2023-09-05', 'single', '2022-2023', ''),
(18, 'ryan', 'victorillo', 'Mayana City of naga Cebu', 'joerayan.victorillo@gmail.com', 'Male', 'BSED', '2nd year', '2023-09-05', 'single', '2022-2023', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`b_isbn`);

--
-- Indexes for table `tbl_issuebook`
--
ALTER TABLE `tbl_issuebook`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `b_isbn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_issuebook`
--
ALTER TABLE `tbl_issuebook`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
