-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 02:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fourchonlng`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `password` varchar(64) NOT NULL DEFAULT '',
  `usertype` varchar(10) NOT NULL DEFAULT '',
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`, `fullname`) VALUES
(1, 'admin@gold.com', '7bb0edd98f22430a03b67f853e83c2ca', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `subscriber_email` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `subscriber_email`) VALUES
(41, 'slaaash.dc@gmail.com'),
(43, 'asd@gmail.com'),
(44, 'q@gmail.com'),
(45, 'ash.dc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_about`
--

CREATE TABLE `webcontent_about` (
  `position_id` int(10) NOT NULL,
  `position_description` text NOT NULL,
  `position_order` int(11) NOT NULL,
  `position_status` enum('0','1') NOT NULL,
  `webpage_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_about`
--

INSERT INTO `webcontent_about` (`position_id`, `position_description`, `position_order`, `position_status`, `webpage_name`) VALUES
(12, 'q', 1, '1', 'GOLD');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_contactus`
--

CREATE TABLE `webcontent_contactus` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `project_name` longtext NOT NULL,
  `project_location` longtext NOT NULL,
  `proj_director_name` varchar(45) NOT NULL DEFAULT '',
  `proj_director_email` longtext NOT NULL,
  `admin_outreach_name` varchar(45) NOT NULL DEFAULT '',
  `admin_outreach_email` longtext NOT NULL,
  `webpage_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_contactus`
--

INSERT INTO `webcontent_contactus` (`contact_id`, `project_name`, `project_location`, `proj_director_name`, `proj_director_email`, `admin_outreach_name`, `admin_outreach_email`, `webpage_name`) VALUES
(1, 'Fourchon LNG LLC.', '2223 S 25th Street  Fort Pierce, Florida  34986, USA ', 'Graham Elliott', 'grahame@fourchonLNG.net ', 'Chris Pope', 'outreach@fourchonLNG.net', 'GOLD'),
(2, 'Fourchon LNG LLC.', '2223 S 25th Street  Fort Pierce, Florida  34986, USA ', 'Graham Elliott', 'grahame@fourchonLNG.net ', 'Chris Pope', 'outreach@fourchonLNG.net', 'EWG');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_desc`
--

CREATE TABLE `webcontent_desc` (
  `desc_id` int(10) NOT NULL,
  `desc_description` text NOT NULL,
  `desc_order` int(11) NOT NULL,
  `desc_status` enum('0','1') DEFAULT NULL,
  `webpage_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_desc`
--

INSERT INTO `webcontent_desc` (`desc_id`, `desc_description`, `desc_order`, `desc_status`, `webpage_name`) VALUES
(21, 'q', 21, '1', 'GOLD'),
(28, 'q', 28, '1', 'GOLD'),
(26, 'qwe', 24, '1', 'GOLD'),
(23, 'eeee', 23, '1', 'GOLD');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_desc_bullet`
--

CREATE TABLE `webcontent_desc_bullet` (
  `bullet_id` int(10) NOT NULL,
  `bullet_title` varchar(120) NOT NULL DEFAULT '',
  `bullet_description` text NOT NULL,
  `webpage_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_desc_bullet`
--

INSERT INTO `webcontent_desc_bullet` (`bullet_id`, `bullet_title`, `bullet_description`, `webpage_name`) VALUES
(14, 'q', 'q', 'GOLD'),
(11, 'qwe', 'qwe', 'GOLD'),
(16, '1', '1', 'GOLD');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_home`
--

CREATE TABLE `webcontent_home` (
  `position_id` int(10) NOT NULL,
  `position_description` text NOT NULL,
  `position_order` int(11) NOT NULL,
  `position_status` enum('0','1') NOT NULL,
  `webpage_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_home`
--

INSERT INTO `webcontent_home` (`position_id`, `position_description`, `position_order`, `position_status`, `webpage_name`) VALUES
(1, 'Please note:- this website is under development and will be updated on a regular basis as the project moves forward.', 1, '1', 'GOLD'),
(2, 'Fourchon LNG is an exciting new project which will see the development of up to 5 million tons of Liquified Natural Gas (LNG) production per annum with associated storage and shipping facilities.', 2, '1', 'GOLD'),
(22, 'LNG from the Fourchon LNG project will serve the American Domestic market first and then be available for Export. Fourchon LNG is committed to providing local employment and sourcing of USA manufactured equipment.', 3, '1', 'EWG');

-- --------------------------------------------------------

--
-- Table structure for table `webcontent_process`
--

CREATE TABLE `webcontent_process` (
  `position_id` int(10) NOT NULL,
  `position_description` text NOT NULL,
  `position_order` int(11) NOT NULL,
  `position_status` enum('0','1') NOT NULL,
  `webpage_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcontent_process`
--

INSERT INTO `webcontent_process` (`position_id`, `position_description`, `position_order`, `position_status`, `webpage_name`) VALUES
(1, '1', 1, '1', 'GOLD'),
(2, '2', 2, '1', 'GOLD'),
(3, '3', 3, '1', 'GOLD'),
(4, '4', 4, '1', 'GOLD'),
(5, '5', 5, '1', 'GOLD'),
(6, '6', 6, '1', 'GOLD');

-- --------------------------------------------------------

--
-- Table structure for table `webpage_info`
--

CREATE TABLE `webpage_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `webpage_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpage_info`
--

INSERT INTO `webpage_info` (`id`, `webpage_name`) VALUES
(1, 'GOLD'),
(2, 'EWC'),
(3, 'EWI');

-- --------------------------------------------------------

--
-- Table structure for table `web_images`
--

CREATE TABLE `web_images` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `proj_desc_image` longblob,
  `about_image` longblob,
  `process_image` longblob,
  `safety_image` longblob,
  `outreach_image` longblob,
  `link_image` longblob,
  `webpage_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_themes`
--

CREATE TABLE `web_themes` (
  `theme_id` int(10) UNSIGNED NOT NULL,
  `theme_color` varchar(45) NOT NULL DEFAULT '',
  `webpage_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_themes`
--

INSERT INTO `web_themes` (`theme_id`, `theme_color`, `webpage_name`) VALUES
(5, 'AB2567', 'GOLD'),
(6, '47FFAA', 'EWG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webcontent_about`
--
ALTER TABLE `webcontent_about`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `webcontent_contactus`
--
ALTER TABLE `webcontent_contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `webcontent_desc`
--
ALTER TABLE `webcontent_desc`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indexes for table `webcontent_desc_bullet`
--
ALTER TABLE `webcontent_desc_bullet`
  ADD PRIMARY KEY (`bullet_id`);

--
-- Indexes for table `webcontent_home`
--
ALTER TABLE `webcontent_home`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `webcontent_process`
--
ALTER TABLE `webcontent_process`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `webpage_info`
--
ALTER TABLE `webpage_info`
  ADD PRIMARY KEY (`id`,`webpage_name`);

--
-- Indexes for table `web_images`
--
ALTER TABLE `web_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `web_themes`
--
ALTER TABLE `web_themes`
  ADD PRIMARY KEY (`theme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `webcontent_about`
--
ALTER TABLE `webcontent_about`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `webcontent_contactus`
--
ALTER TABLE `webcontent_contactus`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webcontent_desc`
--
ALTER TABLE `webcontent_desc`
  MODIFY `desc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `webcontent_desc_bullet`
--
ALTER TABLE `webcontent_desc_bullet`
  MODIFY `bullet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `webcontent_home`
--
ALTER TABLE `webcontent_home`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `webcontent_process`
--
ALTER TABLE `webcontent_process`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `webpage_info`
--
ALTER TABLE `webpage_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_images`
--
ALTER TABLE `web_images`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_themes`
--
ALTER TABLE `web_themes`
  MODIFY `theme_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
