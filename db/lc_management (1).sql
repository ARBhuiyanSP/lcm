-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 06:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `status`) VALUES
(2, 'Dhaka Bank', 1),
(3, 'UCB Bank', 1),
(4, 'NCC Bank', 1),
(5, 'City bank', 1),
(6, 'Premier Bank', 1),
(7, 'National Bank Limited', 1),
(8, 'One Bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `status`) VALUES
(1, 'China', 1),
(2, 'Srilanka', 1),
(3, 'India', 1),
(4, 'Turkey', 1),
(5, 'Finland', 1),
(6, 'Germany', 1),
(7, 'Austria', 1),
(8, 'Netherland', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lc_commercial`
--

CREATE TABLE `lc_commercial` (
  `id` int(11) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `lcaf_no` varchar(100) NOT NULL,
  `importer_name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `irc_no` varchar(100) NOT NULL,
  `year_of_renewal` year(4) NOT NULL,
  `share_basis_amount` float NOT NULL,
  `lc_amount` varchar(100) NOT NULL,
  `sof_cash` varchar(50) NOT NULL,
  `sof_barter` varchar(50) NOT NULL,
  `sof_loan` varchar(50) NOT NULL,
  `sof_credit` varchar(50) NOT NULL,
  `sof_other` varchar(50) NOT NULL,
  `description_of_item_imported` longtext NOT NULL,
  `itc_number` varchar(100) NOT NULL,
  `description_of_items` longtext NOT NULL,
  `itc_no` varchar(100) NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` varchar(1000) NOT NULL,
  `openers_name` varchar(100) NOT NULL,
  `openers_address` varchar(1000) NOT NULL,
  `draft_amount` varchar(100) NOT NULL,
  `at_sight` varchar(50) NOT NULL,
  `days_da_dp` varchar(50) NOT NULL,
  `cif` varchar(50) NOT NULL,
  `cfr` varchar(50) NOT NULL,
  `fob` varchar(50) NOT NULL,
  `drawn_on_us` varchar(50) NOT NULL,
  `drawn_on_them` varchar(50) NOT NULL,
  `country_origin` varchar(50) NOT NULL,
  `commodities` longtext NOT NULL,
  `hs_code` varchar(50) NOT NULL,
  `shipment_from` varchar(100) NOT NULL,
  `shipment_to` varchar(100) NOT NULL,
  `insurance_cover_no` varchar(50) NOT NULL,
  `ins_date` varchar(100) NOT NULL,
  `ins_amount` varchar(100) NOT NULL,
  `ins_part_shipment` varchar(50) NOT NULL,
  `ins_allowed` varchar(50) NOT NULL,
  `ins_prohibited` varchar(50) NOT NULL,
  `last_shipment_date` varchar(100) NOT NULL,
  `name_of_ins` varchar(100) NOT NULL,
  `ins_address` varchar(1000) NOT NULL,
  `ins_co_transhipment` varchar(50) NOT NULL,
  `ins_co_allowed` varchar(50) NOT NULL,
  `ins_co_prohibited` varchar(50) NOT NULL,
  `last_neg_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lc_commercial`
--

INSERT INTO `lc_commercial` (`id`, `sl_no`, `bank`, `lcaf_no`, `importer_name`, `address`, `irc_no`, `year_of_renewal`, `share_basis_amount`, `lc_amount`, `sof_cash`, `sof_barter`, `sof_loan`, `sof_credit`, `sof_other`, `description_of_item_imported`, `itc_number`, `description_of_items`, `itc_no`, `beneficiary_name`, `beneficiary_address`, `openers_name`, `openers_address`, `draft_amount`, `at_sight`, `days_da_dp`, `cif`, `cfr`, `fob`, `drawn_on_us`, `drawn_on_them`, `country_origin`, `commodities`, `hs_code`, `shipment_from`, `shipment_to`, `insurance_cover_no`, `ins_date`, `ins_amount`, `ins_part_shipment`, `ins_allowed`, `ins_prohibited`, `last_shipment_date`, `name_of_ins`, `ins_address`, `ins_co_transhipment`, `ins_co_allowed`, `ins_co_prohibited`, `last_neg_date`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(22, 'LCM-004', 'Dhaka Bank', '113811', 'E-ENGINEERING Limited', '95, Mohakhali, C/A, Khawza Tower- 13th Floor, Dhaka-1212', '260326110976720', 2021, 0, '698000.00', '', '', '', '', '', 'Construction Materials Crane Rail &amp; Accessories', '7302.10.00', 'Construction Materials Crane Rail &amp; Accessories ', '7302.10.00', 'MARKSAN CO. LTD', 'Unit-B, Lot 49, 1st Floor, Block F, Lazenda Warehous 3, Jalan Rancha-Rancha, 87000 WP Labuan. Malaysia.', 'E-ENGINEERING Limited', '95, Mohakhali, C/A, Khawza Tower- 13th Floor, Dhaka-1212', '698000.00', 'on', '', '', '', '', '', '', 'China', 'Quality, Quantity, Unit Price, Total Price and all other Details as Per Proforma Invoice. PI No: EEL/CLIK/MARKSAN/PI-01, Date: 28-12-2020', '7302.10.00', 'Any Sea Port of China', 'Chittagong Sea Port', 'EIC/DHA/NP/MC-00027/01/2021', '2021-01-17', '', '', '', 'on', '2021-02-28', 'EastLand Insurance Company Limited', '', '', 'on', '', '2021-03-21', '', NULL, '', NULL, ''),
(23, 'LCM-002', 'UCB Bank', '229357', 'SAIF POWERTEC LIMITED', '72, Mohakhali, C/A Rupayan Center 8th Floor, Dhaka-1212', '260326111622820', 2021, 0, '51470.64', '', '', '', '', '', 'Steel Wire Rope', '7312.10.00', 'Steel Wire Rope ', '7312.10.00', 'USHA MARTIN LIMITED', '2A, Shakespeare Sarani, Kolkata-700071, India.', 'SAIF POWERTEC LIMITED', '95, Mohakhali, C/A Rupayan Center 8th Floor, Dhaka-1212', '51470.64', 'on', '', '', '', '', '', '', 'India', '<p><br></p><p>Quality, Quantity, Unit Price, Total Price and all other details as per Proforma Invoice.</p><p>PI No: PI-01-SAIF POWERTEC_DEC 2020, Dated: 29-12-2020</p>', '7312.10.00', 'Any Sea Port of India', 'Chittagong Sea Port ', '', '0000-00-00', '', '', '', 'on', '0000-00-00', '', '', '', 'on', '', '', '', NULL, '', NULL, ''),
(24, 'LCM-003', 'NCC Bank', 'LCAF-00000', 'Importer Name', 'Importer Address', 'IRC-0000', 2020, 164000, '164000', 'on', 'on', 'on', 'on', 'on', 'sleel Wire Rope', 'ITC-00000', '<span style=\"font-weight: 700;\">Description of Items</span> ', 'ITC-00000', 'Beneficiary Name', 'Beneficiary Address', 'Opener Name', 'Openers Address', '164000', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'China', 'Quality, Quantity, Unit Price, Total Price and all other Details as Per Proforma Invoice. PI No: EEL/CLIK/MARKSAN/PI-01, Date: 28-12-2020', 'H.S-0000', 'Any Sea port of China', 'Chottagong Sea Port', 'ins-0000', '0000-00-00', '10000', 'on', 'on', 'on', '0000-00-00', 'Insurance Name', 'Insurance Address', 'on', 'on', 'on', '', '', NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `lc_industrial`
--

CREATE TABLE `lc_industrial` (
  `id` int(11) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `lcaf_no` varchar(100) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `applicant_address` varchar(1000) NOT NULL,
  `irc_no` varchar(100) NOT NULL,
  `year_of_renewal` year(4) NOT NULL,
  `lc_amount` float NOT NULL,
  `sof_cash` varchar(50) NOT NULL,
  `sof_barter` varchar(50) NOT NULL,
  `sof_loan` varchar(50) NOT NULL,
  `sof_credit` varchar(50) NOT NULL,
  `sof_other` varchar(50) NOT NULL,
  `description_of_item_imported` longtext NOT NULL,
  `restricted_items` longtext NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` varchar(1000) NOT NULL,
  `openers_name` varchar(100) NOT NULL,
  `openers_address` varchar(1000) NOT NULL,
  `draft_amount` varchar(100) NOT NULL,
  `at_sight` varchar(50) NOT NULL,
  `days_da_dp` varchar(50) NOT NULL,
  `cif` varchar(50) NOT NULL,
  `cfr` varchar(50) NOT NULL,
  `fob` varchar(50) NOT NULL,
  `drawn_on_us` varchar(50) NOT NULL,
  `drawn_on_them` varchar(50) NOT NULL,
  `country_origin` varchar(50) NOT NULL,
  `commodities` longtext NOT NULL,
  `hs_code` varchar(50) NOT NULL,
  `shipment_from` varchar(100) NOT NULL,
  `shipment_to` varchar(100) NOT NULL,
  `insurance_cover_no` varchar(50) NOT NULL,
  `ins_date` varchar(100) DEFAULT NULL,
  `ins_amount` varchar(100) NOT NULL,
  `ins_part_shipment` varchar(50) NOT NULL,
  `ins_allowed` varchar(50) NOT NULL,
  `ins_prohibited` varchar(50) NOT NULL,
  `last_shipment_date` varchar(100) NOT NULL,
  `name_of_ins` varchar(100) NOT NULL,
  `ins_address` varchar(1000) NOT NULL,
  `ins_co_transhipment` varchar(50) NOT NULL,
  `ins_co_allowed` varchar(50) NOT NULL,
  `ins_co_prohibited` varchar(50) NOT NULL,
  `last_neg_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lc_industrial`
--

INSERT INTO `lc_industrial` (`id`, `sl_no`, `bank`, `lcaf_no`, `applicant_name`, `applicant_address`, `irc_no`, `year_of_renewal`, `lc_amount`, `sof_cash`, `sof_barter`, `sof_loan`, `sof_credit`, `sof_other`, `description_of_item_imported`, `restricted_items`, `beneficiary_name`, `beneficiary_address`, `openers_name`, `openers_address`, `draft_amount`, `at_sight`, `days_da_dp`, `cif`, `cfr`, `fob`, `drawn_on_us`, `drawn_on_them`, `country_origin`, `commodities`, `hs_code`, `shipment_from`, `shipment_to`, `insurance_cover_no`, `ins_date`, `ins_amount`, `ins_part_shipment`, `ins_allowed`, `ins_prohibited`, `last_shipment_date`, `name_of_ins`, `ins_address`, `ins_co_transhipment`, `ins_co_allowed`, `ins_co_prohibited`, `last_neg_date`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(34, 'LCI-001', 'UCB Bank', '231293', 'SAIF Powertec Limited', '72, Mohakhali, C/A, Rupayan Center 8 th Floor, Dhaka-1212', 'L-40051411045-H</br>Dated:17/11/2014\r\n', 2020, 318000, '', '', '', '', '', 'Reach Stacker', '8426.41.90', 'SHANGHAI ZHENHUA HEAVY INDUSTRIES CO, LTD.', '3470 Pudong Nan-Lu, Shanghai 200125, PA China.', 'SAIF Powertec Limited', '72, Mohakhali, C/A, Rupayan Center 8 th Floor, Dhaka-1212', '318000.00', '', 'on', '', '', '', '', '', 'China', '<p><br></p><p>Quality, Quantity, Unit Price, Total Price and all other details as per Proforma Invoice.</p><p>PI NO: ZP21-RS-IV001, Dated: 13-01-2021</p>', '8426.41.90', 'Any Sea Port in China', 'Chittagong Sea Port ', '', NULL, '', '', '', 'on', '2021-03-31', '', '', '', 'on', '', '2021-04-21', '', NULL, '', NULL, ''),
(37, 'LCI-002', 'NCC Bank', 'LCAF-00000', 'Applicant Name', 'Applicant Address', 'IRC-0000', 2020, 164000, 'on', 'on', 'on', 'on', 'on', '<span style=\"font-weight: 700;\">Description of items to be imported</span> ', '<span style=\"font-weight: 700;\">Restricted items showing individual share</span> ', 'Beneficiary Name', 'Beneficiary Address', 'Opener Name', 'Openers Address', '164000', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'China', '<span style=\"font-weight: 700;\">Commodities</span> ', 'H.S-0000', 'Any Sea port of China', 'Chottagong Sea Port', 'ins-0000', '0000-00-00', '10000', 'on', 'on', 'on', '0000-00-00', 'Insurance Name', 'Insurance Address', 'on', 'on', 'on', '01/24/2021', '', NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE `tt` (
  `id` int(11) NOT NULL,
  `sl_no` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `lcaf_no` varchar(100) NOT NULL,
  `importer_name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `irc_no` varchar(100) NOT NULL,
  `year_of_renewal` year(4) NOT NULL,
  `share_basis_amount` float NOT NULL,
  `lc_amount` varchar(100) NOT NULL,
  `sof_cash` varchar(50) NOT NULL,
  `sof_barter` varchar(50) NOT NULL,
  `sof_loan` varchar(50) NOT NULL,
  `sof_credit` varchar(50) NOT NULL,
  `sof_other` varchar(50) NOT NULL,
  `description_of_item_imported` longtext NOT NULL,
  `itc_number` varchar(100) NOT NULL,
  `description_of_items` longtext NOT NULL,
  `itc_no` varchar(100) NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_address` varchar(1000) NOT NULL,
  `openers_name` varchar(100) NOT NULL,
  `openers_address` varchar(1000) NOT NULL,
  `draft_amount` varchar(100) NOT NULL,
  `at_sight` varchar(50) NOT NULL,
  `days_da_dp` varchar(50) NOT NULL,
  `cif` varchar(50) NOT NULL,
  `cfr` varchar(50) NOT NULL,
  `fob` varchar(50) NOT NULL,
  `drawn_on_us` varchar(50) NOT NULL,
  `drawn_on_them` varchar(50) NOT NULL,
  `country_origin` varchar(50) NOT NULL,
  `commodities` longtext NOT NULL,
  `hs_code` varchar(50) NOT NULL,
  `shipment_from` varchar(100) NOT NULL,
  `shipment_to` varchar(100) NOT NULL,
  `insurance_cover_no` varchar(50) NOT NULL,
  `ins_date` varchar(100) NOT NULL,
  `ins_amount` varchar(100) NOT NULL,
  `ins_part_shipment` varchar(50) NOT NULL,
  `ins_allowed` varchar(50) NOT NULL,
  `ins_prohibited` varchar(50) NOT NULL,
  `last_shipment_date` varchar(100) NOT NULL,
  `name_of_ins` varchar(100) NOT NULL,
  `ins_address` varchar(1000) NOT NULL,
  `ins_co_transhipment` varchar(50) NOT NULL,
  `ins_co_allowed` varchar(50) NOT NULL,
  `ins_co_prohibited` varchar(50) NOT NULL,
  `last_neg_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id2` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `is_term_accept` tinyint(1) NOT NULL DEFAULT 0 COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id2`, `first_name`, `last_name`, `user_type`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `is_term_accept`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'LCM', 'admin', 'admin@admin.com', 'bfb1e4e7ace6d70c18b69a2a6cf4a415', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'PCgsDtfHhHDhADntGcj7D97A9e4U0gtx0hlLn2heuaMyQBq5Gaa2sP55BPGr', 1, 1, '2019-01-14 00:17:02', '2019-01-20 20:36:38', NULL),
(4, 4, 'Super', 'Admin', 'superAdmin', 'superadmin@admin.com', 'be05977add575832dc52655d4ad5c42e', 1, 'b1970adb3f301c8440c81e45b526060c', 1, 0, 'PCgsDtfHhHDhADntGcj7D97A9e4U0gtx0hlLn2heuaMyQBq5Gaa2sP55BPGr', 4, 4, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_commercial`
--
ALTER TABLE `lc_commercial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_industrial`
--
ALTER TABLE `lc_industrial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt`
--
ALTER TABLE `tt`
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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lc_commercial`
--
ALTER TABLE `lc_commercial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lc_industrial`
--
ALTER TABLE `lc_industrial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tt`
--
ALTER TABLE `tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
