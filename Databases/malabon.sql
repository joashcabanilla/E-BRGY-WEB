-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 09:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
(3, 'admin_bayanbayanan', 'admin1111', 'bayan-bayanan'),
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
(21, 'admin_tugatog', 'admin1111', 'tugatog'),
(22, 'admin_malabon', 'admin1234', 'malabon'),
(30, 'admin', 'admin', 'malabon');

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
(21, 'tugatog'),
(22, 'malabon');

-- --------------------------------------------------------

--
-- Table structure for table `certification_table`
--

CREATE TABLE `certification_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(500) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `spouse_age` varchar(255) NOT NULL,
  `year_stay` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `voter_number` varchar(255) NOT NULL,
  `house` varchar(500) NOT NULL,
  `occupation` varchar(500) NOT NULL,
  `companyname` varchar(500) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `print` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certification_table`
--

INSERT INTO `certification_table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `age`, `gender`, `address`, `birthday`, `birthplace`, `contact_number`, `status`, `spouse`, `spouse_age`, `year_stay`, `voter`, `voter_number`, `house`, `occupation`, `companyname`, `purpose`, `barangay`, `print`) VALUES
(2, 'aaaaa', 'sdasda', 'asdasdasa', '2021-10-31', 2, 'Female', '2asdasa', '2021-10-03', 'dasdasa', 1, 'Single', 'asdasa', '2', 'asdassaa', 'Yes', '2312asda', 'Owner', 'adassda', 'asdasa', 'Death Claim', 'baritan', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `clearance_table`
--

CREATE TABLE `clearance_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(500) NOT NULL,
  `contact_number` bigint(12) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `spouse_age` varchar(255) NOT NULL,
  `year_stay` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `voter_number` varchar(255) NOT NULL,
  `house` varchar(500) NOT NULL,
  `occupation` varchar(500) NOT NULL,
  `companyname` varchar(500) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `print` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance_table`
--

INSERT INTO `clearance_table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `age`, `gender`, `address`, `birthday`, `birthplace`, `contact_number`, `status`, `spouse`, `spouse_age`, `year_stay`, `voter`, `voter_number`, `house`, `occupation`, `companyname`, `purpose`, `barangay`, `print`) VALUES
(5, 'nba', 'middlename', 'lastname', '2021-10-12', 1, 'Female', 'address1', '2021-11-02', 'birthplacea', 1, 'Separated', 'spousea', '1', 'when did1', 'No', '1', 'Rental', 'occu', 'com', 'Bank Transaction', 'baritan', 'pending'),
(6, 'aswe', 'aswe', 'asdasd', '2021-10-31', 22, 'Male', 'asdas', '2021-10-07', 'asdasd', 213213, 'Single', 'asdas', '22', 'dasdas', 'Yes', 'asdasd222', 'Owner', 'asdsa', 'asdasdas', 'Motor Loan Pupose', 'baritan', 'pending'),
(7, 'qweasdas', 'asdasd', 'asdasdas', '2021-10-31', 22, 'Male', 'asdas', '2021-10-07', 'asdasd', 21312, 'Single', 'asdasda', '40', 'asdasd', 'Yes', '23213', 'Owner', 'asdas', 'dasdas', 'Pedicab/Tricycle Registration', 'acacia', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `permit_table`
--

CREATE TABLE `permit_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `storey_number` bigint(20) NOT NULL,
  `business_name` varchar(500) NOT NULL,
  `amount2` bigint(20) NOT NULL,
  `square_meters` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `barangay` varchar(500) NOT NULL,
  `print` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permit_table`
--

INSERT INTO `permit_table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `address`, `contact_number`, `amount`, `storey_number`, `business_name`, `amount2`, `square_meters`, `location`, `purpose`, `barangay`, `print`) VALUES
(3, 'a', 'k', 'o', '2021-10-31', 'a', 2, 2, 2, 'a', 2, '2', 'a', 'Excavation Permit', 'baritan', 'pending'),
(4, 'asdasfirstname', 'middlename', 'lastname', '2021-10-31', 'address', 1, 2, 3, 'business_name', 4, 'squareMeter', 'location', 'Business Permit', 'baritan', 'pending'),
(5, 'q', 'w', 'e', '2021-11-01', 'r', 5, 4, 2, 't', 1, '21', 'cac', 'Business Permit', 'baritan', 'pending');

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
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `print` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelpermit_table`
--

INSERT INTO `travelpermit_table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `age`, `address`, `location`, `purpose`, `barangay`, `print`) VALUES
(3, 'firstname', 'middlename', 'lastname', '2021-10-31', 1, 'address', 'location', 'Travel Permit', 'baritan', 'pending'),
(4, 'asdasd', 'asdsa', 'asdsa', '2021-10-31', 22, 'adssa', 'asdas', 'Travel Permit', 'baritan', 'pending');

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
  `voters_id` varchar(255) NOT NULL,
  `brgy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votersid_table`
--

INSERT INTO `votersid_table` (`id`, `voters_id`, `brgy`) VALUES
(1, 'sample11', 'acacia'),
(2, '123456', 'baritan'),
(3, '432', 'acacia'),
(4, '567', 'bayan-bayanan'),
(5, '2310293', 'baritan'),
(17, '2222', 'baritan'),
(36, '4444', 'baritan'),
(37, '12345', 'baritan'),
(38, '332151443', 'baritan'),
(39, '3333', 'baritan'),
(40, '7777', 'baritan'),
(41, '5555', 'baritan');

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
-- Indexes for table `certification_table`
--
ALTER TABLE `certification_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance_table`
--
ALTER TABLE `clearance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit_table`
--
ALTER TABLE `permit_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose_table`
--
ALTER TABLE `purpose_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelpermit_table`
--
ALTER TABLE `travelpermit_table`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `certification_table`
--
ALTER TABLE `certification_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clearance_table`
--
ALTER TABLE `clearance_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permit_table`
--
ALTER TABLE `permit_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purpose_table`
--
ALTER TABLE `purpose_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `travelpermit_table`
--
ALTER TABLE `travelpermit_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votersid_table`
--
ALTER TABLE `votersid_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
