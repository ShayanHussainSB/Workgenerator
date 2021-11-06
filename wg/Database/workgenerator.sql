-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workgenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `Resume` varchar(100) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `images` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`user_id`, `name`, `email`, `Contact`, `username`, `password`, `images`) VALUES
(1, 'mustafa', 'mustafa@gmail.com', '03332395017', 'mustafahere_', '1', 'candidateimg/thumb-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profile`
--

CREATE TABLE `candidate_profile` (
  `user_id` int(11) NOT NULL,
  `Skills` varchar(300) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Resume` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `salary` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_profile`
--

INSERT INTO `candidate_profile` (`user_id`, `Skills`, `Experience`, `Resume`, `Description`, `salary`, `category`, `Status`) VALUES
(1, 'html,css,php', '3 years', 'Resume/Document.pdf', 'I\'m a developer', '30k-40k', 'Engineering and technology', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `EIN` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Num_of_emp` varchar(100) NOT NULL,
  `Type_of_org` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`EIN`, `Name`, `Email_ID`, `Contact`, `Username`, `Password`, `Company_name`, `Address`, `Num_of_emp`, `Type_of_org`, `image`) VALUES
(1, 'Shayan', 'shayan@gmail.com', '03332395017', '@shayan', '1', 'Genetics', 'California', '2', 'Software House', 'uploads/company-logo-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `Skills` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `job_role` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `EIN` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `Title`, `Category`, `Salary`, `Skills`, `Experience`, `job_role`, `description`, `EIN`, `images`, `status`) VALUES
(1, 'UX/UI Designer', 'Engineering and Technology', '30k-50k', 'html,css,php', '2 years', 'manager', 'We need a greate UX/UI Designer', 1, 'jobsimg/company-logo-3.png', 'Full time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`EIN`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `EIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
