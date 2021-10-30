-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 10:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malabon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `barangay`) VALUES
(1, 'admin_acacia', 'admin1111', 'acacia'),
(2, 'admin_baritan', 'admin1111', 'baritan'),
(3, 'admin_bayanbayanan', 'admin1111', 'bayanbayanan'),
(4, 'admin_catmon', 'admin1111', 'catmon'),
(5, 'admin_concepcion', 'admin1111', 'concepcion'),
(6, 'admin_dampalit', 'admin1111', 'dampalit'),
(7, 'admin_flores', 'admin1111', 'flores'),
(8, 'admin_hulongduhat', 'admin1111', 'hulongduhat'),
(9, 'admin_ibaba', 'admin1111', 'ibaba'),
(10, 'admin_longos', 'admin1111', 'longos'),
(11, 'admin_maysilo', 'admin1111', 'maysilo'),
(12, 'admin_muzon', 'admin1111', 'muzon'),
(13, 'admin_niugan', 'admin1111', 'niugan'),
(14, 'admin_panghulo', 'admin1111', 'panghulo\r\n'),
(15, 'admin_potrero', 'admin1111', 'potrero'),
(16, 'admin_sanagustin', 'admin1111', 'sanagustin'),
(17, 'admin_santulan', 'admin1111', 'santulan'),
(18, 'admin_tanong', 'admin1111', 'tanong'),
(19, 'admin_tinajeros', 'admin1111', 'tinajeros'),
(20, 'admin_tonsuya', 'admin1111', 'tonsuya'),
(21, 'admin_tugatog', 'admin1111', 'tugatog');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(255) NOT NULL,
  `barangay_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `barangay_name`) VALUES
(1, 'acacia'),
(2, 'baritan'),
(3, 'bayan-bayanan'),
(4, 'catmon'),
(5, 'concepcion'),
(6, 'dampalit'),
(7, 'flores'),
(8, 'hulong-duhat'),
(9, 'ibaba'),
(10, 'longos'),
(11, 'maysilo'),
(12, 'muzon'),
(13, 'niugan'),
(14, 'panghulo'),
(15, 'potrero'),
(16, 'san_agustin'),
(17, 'santulan'),
(18, 'tanyong'),
(19, 'tinajeros'),
(20, 'tonsuya'),
(21, 'tugatog');

-- --------------------------------------------------------

--
-- Table structure for table `certification_table`
--

CREATE TABLE `certification_table` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` int(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `spouse_age` int(255) NOT NULL,
  `year_stay` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `voters_number` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `name_company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certification_table`
--

INSERT INTO `certification_table` (`first_name`, `middle_name`, `last_name`, `date`, `age`, `gender`, `address`, `birthday`, `birthplace`, `contact_number`, `status`, `spouse`, `spouse_age`, `year_stay`, `voter`, `voters_number`, `house`, `occupation`, `name_company`) VALUES
('hahahaha', 'ahahahaha', 'hahahaha', 12, 12, 'Male', 'yvkyubuk', 2021, 'hahahah', 56789, 'Single', 'hahaha', 12, 'hahaha', 'Yes', 'hahaha', 'Owner', 'hahaha', 'ahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `clearance_table`
--

CREATE TABLE `clearance_table` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` int(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `spouse_age` int(255) NOT NULL,
  `year_stay` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `voters_number` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `name_company` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance_table`
--

INSERT INTO `clearance_table` (`first_name`, `middle_name`, `last_name`, `date`, `age`, `gender`, `address`, `birthday`, `birthplace`, `contact_number`, `status`, `spouse`, `spouse_age`, `year_stay`, `voter`, `voters_number`, `house`, `occupation`, `name_company`, `id`) VALUES
('vkubiub', 'ibibhuj', 'buvbu', 23, 23, 'Male', 'uyvbubu', 2021, 'kibib', 34, 'Single', 'vukyvy', 345, 'vghk', 'Yes', 'sample11', 'Owner', 'ugbvu', 'buhj ', 1),
('vkubiub', 'ibibhuj', 'buvbu', 23, 23, 'Male', 'uyvbubu', 2021, 'kibib', 34, 'Single', 'vukyvy', 345, 'vghk', 'Yes', 'hgv gg', 'Owner', 'ugbvu', 'buhj ', 2),
('ghiogiuyguujn', 'hniuyg', 'biuygunjvu', 45687, 2021, 'Male', 'ungugiu', 2021, 'jkgngi', 345678, 'Single', 'viybuyb', 4567, 'ugbkujb', 'Yes', 'tvbuyb', 'Owner', 'ugtvbybu', 'uybunm', 3);

-- --------------------------------------------------------

--
-- Table structure for table `permit_table`
--

CREATE TABLE `permit_table` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `number_storey` int(255) NOT NULL,
  `name_building_business` varchar(255) NOT NULL,
  `sunken_amount` int(255) NOT NULL,
  `square_meters` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permit_table`
--

INSERT INTO `permit_table` (`first_name`, `middle_name`, `last_name`, `date`, `address`, `contact_number`, `amount`, `number_storey`, `name_building_business`, `sunken_amount`, `square_meters`, `location`) VALUES
('hzhahahah', 'hshahah', 'hahahaha', 2021, 'haahhaha', 56789, 678, 678, 'hahahaha', 678, ' hahahah', '7689');

-- --------------------------------------------------------

--
-- Table structure for table `purpose_table`
--

CREATE TABLE `purpose_table` (
  `id` int(255) NOT NULL,
  `purpose_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purpose_table`
--

INSERT INTO `purpose_table` (`id`, `purpose_name`) VALUES
(1, 'bank_transaction'),
(2, 'loan_purpose'),
(3, 'motor_loan'),
(4, 'pedicab_tricycle_regist'),
(5, 'TIN_Requirements'),
(6, 'internet_application'),
(7, 'maynilad_application'),
(8, 'meralco_application'),
(9, 'postalid_application'),
(10, 'local_epmloyment'),
(11, 'residency'),
(12, 'travel_abroad'),
(13, 'death_claim'),
(14, 'legal_purpose'),
(15, 'burial_assistance'),
(16, 'financial_assistance'),
(17, 'medical_assistance'),
(18, 'public_atty_assistance'),
(19, 'bir_requirements'),
(20, 'philhealth_requirements'),
(21, 'pwd_requirements'),
(22, 'school_requirements'),
(23, 'senior_citizen_requirements'),
(24, 'solo_parent_requirements'),
(25, 'sss_requirements'),
(26, 'building_permit'),
(27, 'business_permit'),
(28, 'demolition_permit'),
(29, 'excavation_permit'),
(30, 'fencing_permit'),
(31, 'renovation_permit'),
(32, 'sunken_permit'),
(33, 'wiring_permit'),
(34, 'travel_permit');

-- --------------------------------------------------------

--
-- Table structure for table `travelpermit_table`
--

CREATE TABLE `travelpermit_table` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelpermit_table`
--

INSERT INTO `travelpermit_table` (`first_name`, `middle_name`, `last_name`, `age`, `address`, `location`, `date`) VALUES
('buybgu', 'guigyui', 'uuyby', 4567, 'ytvbyvby', 'yvyvyuhj', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `password`) VALUES
('admin', 'admin', 'admin'),
('admin1111', 'admin1111', 'admin1111'),
('admin_acacia', 'admin_acacia', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `votersid_table`
--

CREATE TABLE `votersid_table` (
  `id` int(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votersid_table`
--

INSERT INTO `votersid_table` (`id`, `voters_id`) VALUES
(1, 'sample11'),
(2, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance_table`
--
ALTER TABLE `clearance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose_table`
--
ALTER TABLE `purpose_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votersid_table`
--
ALTER TABLE `votersid_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clearance_table`
--
ALTER TABLE `clearance_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purpose_table`
--
ALTER TABLE `purpose_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `votersid_table`
--
ALTER TABLE `votersid_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
