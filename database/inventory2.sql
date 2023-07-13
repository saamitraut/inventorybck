-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

--
-- Dumping data for table `material_master`
--

INSERT INTO `material_master` (`id`, `name`, `status`, `unit`, `created_at`, `updated_at`, `GST`) VALUES
(1, 'RG 11 CONNECTOR..', '0', '1', NULL, '2022-12-21 08:21:48', '0'),
(2, 'RG 11 Wire Finolex', '0', '2', NULL, NULL, '0'),
(3, 'RG 6 Wire Copper Compact', '0', '', NULL, NULL, '0'),
(4, 'RG 6 Wire Copper Euro', '0', '', NULL, NULL, '0'),
(5, 'RG 6 Wire Copper Compact coli', '0', '', NULL, NULL, '0'),
(6, 'RG 6 Wire Steel', '0', '', NULL, NULL, '0'),
(7, 'RG 6 CONN', '0', '', NULL, NULL, '0'),
(8, 'RG 6 ring', '0', '', NULL, NULL, '0'),
(9, 'RG 11 ring', '0', '', NULL, NULL, '0'),
(11, 'JOINTER', '0', '', NULL, NULL, '0'),
(12, 'EDFA', '0', '', NULL, NULL, '0'),
(13, '1TAP OFF', '0', '', NULL, NULL, '0'),
(14, '2 TAP OFF', '0', '', NULL, NULL, '0'),
(15, '3 TAP OFF', '0', '', NULL, NULL, '0'),
(16, '4 TAP OFF', '0', '', NULL, NULL, '0'),
(17, '2 WAY SPILTER', '0', '', NULL, NULL, '0'),
(18, '3 WAY SPILTER', '0', '', NULL, NULL, '0'),
(19, '4 WAY SPILTER', '0', '', NULL, NULL, '0'),
(20, 'NODE 752', '0', '', NULL, NULL, '0'),
(21, 'AMP  30 DB', '0', '', NULL, NULL, '0'),
(22, 'POWER  INJECTOR  1.5 AMP', '0', '', NULL, NULL, '0'),
(23, 'POWER  INJECTOR  2  AMP', '0', '', NULL, NULL, '0'),
(24, 'POWER  INJECTOR   3 AMP', '0', '', NULL, NULL, '0'),
(25, 'POWER  INJECTOR   6 AMP', '0', '', NULL, NULL, '0'),
(26, 'POWER  INJECTOR   10 AMP', '0', '', NULL, NULL, '0'),
(27, 'Node Ac Super Jenex', '0', '', NULL, NULL, '0'),
(28, 'POWER  INJECTOR   15 AMP', '0', '', NULL, NULL, '0'),
(29, 'BATTARY 220 AMP', '0', '', NULL, NULL, '0'),
(30, 'INVERTOR GENIUS', '0', '', NULL, NULL, '0'),
(31, 'PATCH CODE', '0', '', NULL, NULL, '0'),
(32, 'PATCH PANAL', '0', '', NULL, NULL, '0'),
(33, 'SLIVE', '0', '', NULL, NULL, '0'),
(34, 'CUPPLER  50/50', '0', '', NULL, NULL, '0'),
(35, 'CUPPLER  70/30', '0', '', NULL, NULL, '0'),
(36, 'CUPPLER   60/40', '0', '', NULL, NULL, '0'),
(37, 'CUPPLER   90/10', '0', '', NULL, NULL, '0'),
(38, 'CUPPLER   65/35', '0', '', NULL, NULL, '0'),
(39, 'CUPPLER   95/5', '0', '', NULL, NULL, '0'),
(40, 'CUPPLER   80/20', '0', '', NULL, NULL, '0'),
(41, 'FIBER  4 CORE', '0', '', NULL, NULL, '0'),
(42, 'FIBER  6 CORE ', '0', '', NULL, NULL, '0'),
(43, 'FIBER 24 CORE', '0', '', NULL, NULL, '0'),
(44, 'FIBER 12 CORE', '0', '', NULL, NULL, '0'),
(45, 'ROPE WIRE 4-MM', '0', '', NULL, NULL, '0'),
(46, 'Cutter', '0', '', NULL, NULL, '0'),
(47, 'CUPPLER   55/45', '0', '', NULL, NULL, '0'),
(48, 'CUPPLER   85/15', '0', '', NULL, NULL, '0'),
(49, 'CUPPLER   25/75', '0', '', NULL, NULL, '0'),
(50, 'BOIC KGN', '0', '', NULL, NULL, '0'),
(51, '888 IC ', '0', '', NULL, NULL, '0'),
(52, 'preset', '0', '', NULL, NULL, '0'),
(53, 'AMP TRANSFORMER', '0', '', NULL, NULL, '0'),
(54, 'Battery Node w', '0', '', NULL, NULL, '0'),
(55, 'Battery amp', '0', '', NULL, NULL, '0'),
(56, 'NODE TRANSFORMER', '0', '', NULL, NULL, '0'),
(57, 'PVC Small R', '0', '', NULL, NULL, '0'),
(58, '3.5 MM ROPE PVC', '0', '', NULL, NULL, '0'),
(59, 'FC TO FC Adt ', '0', '', NULL, NULL, '0'),
(60, 'Power Inserter', '0', '', NULL, NULL, '0'),
(61, 'Patch Cord Blue', '0', '', NULL, NULL, '0'),
(62, 'Repaired Ups', '0', '', NULL, NULL, '0'),
(63, 'Node 724 Battery Sharp', '0', '', NULL, NULL, '0'),
(64, 'Node Dc 4 Out Battery Jx', '0', '', NULL, NULL, '0'),
(65, '2CORE FIBER(INTERNET)', '0', '', NULL, NULL, '0'),
(66, 'FujiCore Electrode', '0', '', NULL, NULL, '0'),
(67, 'SHARP 40 DC SMPS', '0', '', NULL, NULL, '0'),
(68, 'PSP', '0', '', NULL, NULL, '0'),
(69, 'Repaired Amplifer', '0', '', NULL, NULL, '0'),
(70, 'Repaired Node', '0', '', NULL, NULL, '0'),
(71, 'LC - SC G', '0', '', NULL, NULL, '0'),
(72, 'LC - LC', '0', '', NULL, NULL, '0'),
(73, 'NS-1Node', '0', '', NULL, NULL, '0'),
(74, 'Moso Adt ', '0', '', NULL, NULL, '0'),
(75, 'Gospell Lripl Black Remote', '0', '', NULL, NULL, '0'),
(76, 'Gospell White Remote', '0', '', NULL, NULL, '0'),
(77, 'POLYCAB DC CU 1 CORE CABLE', '0', '', NULL, NULL, '0'),
(78, '1*4', '0', '', NULL, NULL, '0'),
(79, '1*2', '0', '', NULL, NULL, '0'),
(80, 'Laddar', '0', '', NULL, NULL, '0'),
(81, 'DBC Amp', '0', '', NULL, NULL, '0'),
(82, 'Jenex Super Amp', '0', '', NULL, NULL, '0'),
(83, 'SF Sonic Solar UPS 625', '0', '', NULL, NULL, '0'),
(84, 'UPS UTL C-475 Combo', '0', '', NULL, NULL, '0'),
(85, 'Solar Charge Controller 10 Amp ', '0', '', NULL, NULL, '0'),
(86, '70Z Auto Battery ', '0', '', NULL, NULL, '0'),
(87, 'Solar Pannel 100Wt M.Tek', '0', '', NULL, NULL, '0'),
(88, '857 Sharp Switch', '0', '', NULL, NULL, '0'),
(89, '6 AMP P.I', '0', '', NULL, NULL, '0'),
(90, '4 AMP P.I', '0', '', NULL, NULL, '0'),
(91, 'Jenex AC 4 OUT NODE', '0', '', NULL, NULL, '0'),
(93, 'Splicing machine repair', '0', '0', NULL, NULL, '0');

--
-- Dumping data for table `outward_master`
--

INSERT INTO `outward_master` (`id`, `material_id`, `material_description`, `opening_stock`, `issued`, `closing_stock`, `unit_id`, `status`, `issuedon`, `created_at`, `updated_at`, `branch_id`, `required_for`, `purpose`, `aa`, `customer_name`, `mobile`, `area`, `issued_to_staff`, `responsible_person`, `receipt_no`, `transportation`, `inward_id`, `rate`, `amount`, `customerid`) VALUES
(1, 1, 'xxxx', NULL, '10', NULL, NULL, '0', '2022-12-21 23:27:36', '2022-12-13 05:42:32', '2022-12-16 04:07:18', 2, 1, 1, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(2, 1, 'Material Description', NULL, '120', NULL, NULL, '0', '2022-12-21 23:27:40', '2022-12-13 05:43:44', '2022-12-13 06:05:49', 3, 2, 1, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(3, 2, 'Material Description', NULL, '100', NULL, 'Select Unit', '0', '2022-12-21 23:18:32', '2022-12-13 05:46:55', NULL, 2, 3, 2, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(4, 2, 'Material Description', NULL, '50', NULL, 'Select Unit', '0', '2022-12-21 23:18:40', '2022-12-13 06:06:53', NULL, 3, 1, 2, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(5, 3, 'Material Description', NULL, '60', NULL, 'Select Unit', '0', '2022-12-19 11:01:08', '2022-12-13 06:07:45', NULL, 2, 2, 2, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(6, 3, 'Material Description', NULL, '23', NULL, 'Select Unit', '0', '2022-12-21 23:15:36', '2022-12-15 04:45:56', NULL, 3, 2, 2, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(7, 1, 'some description', '240', '12', '228', NULL, '0', '2022-12-23 12:16:50', '2022-12-23 06:46:49', NULL, 2, 2, 1, 'xxx', 'xxx', '1234567890', 'xxx', 'xxx', 'xxx', NULL, '', NULL, NULL, NULL, NULL),
(8, 2, 'some description', '150', '23', '127', NULL, '0', '2022-12-23 12:16:50', '2022-12-23 06:46:50', NULL, 2, 2, 1, 'xxx', 'xxx', '1234567890', 'xxx', 'xxx', 'xxx', NULL, '', NULL, NULL, NULL, NULL),
(9, 3, 'some description', '117', '36', '81', NULL, '0', '2022-12-23 12:16:50', '2022-12-23 06:46:50', NULL, 2, 2, 1, 'xxx', 'xxx', '1234567890', 'xxx', 'xxx', 'xxx', NULL, '', NULL, NULL, NULL, NULL),
(10, 1, 'some description', '1565', '100', '1465', NULL, '0', '2023-04-24 18:30:00', '2023-04-25 01:54:04', NULL, 2, 9, 6, 'check', 'Sangli Media Communication', '7722099919', 'SMC Control Room', '3', '2', '123456', '0', '10', '12', '1200', 'SMC0000001'),
(11, 4, 'some description', '100', '10', '90', NULL, '0', '2023-04-27 07:40:27', '2023-04-27 02:10:27', NULL, 2, 1, 6, 'check', 'Sangli Media Communication', '7722099919', 'SMC Control Room', '17', '4', '1234567', '0', '11', '100', '1000', 'SMC0000001');

--
-- Dumping data for table `purpose_master`
--

INSERT INTO `purpose_master` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'New Connection', '0', NULL, NULL),
(4, 'Transfer Connection', '0', NULL, NULL),
(5, 'RC Connection', '0', NULL, '2022-12-30 23:00:43'),
(6, 'Maintenance', '0', NULL, NULL);

--
-- Dumping data for table `requiredfor_master`
--

INSERT INTO `requiredfor_master` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PP Main Line', '0', NULL, '2022-12-21 02:01:09'),
(2, 'JV Main Line', '0', NULL, NULL),
(3, 'LCO Main Line', '0', NULL, NULL),
(4, 'MG Main Line', '0', NULL, NULL),
(5, 'PP Line', '0', NULL, NULL),
(6, 'MG Line', '0', NULL, NULL),
(7, 'JV Line AMOL U', '0', NULL, NULL),
(8, 'JV Line', '0', NULL, NULL),
(9, 'GovT Colony PP', '0', NULL, NULL),
(10, 'Maha Nagar Palika Work', '0', NULL, NULL),
(11, 'Trunk Line', '0', NULL, NULL);

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `material_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 2000, '0', NULL, '2023-04-28 05:52:17'),
(3, '3', 206, '0', NULL, '2023-04-28 04:06:38'),
(4, '7', 70, '0', NULL, NULL),
(5, '20', 20, '0', NULL, NULL),
(6, '6', 700, '1', NULL, '2023-05-05 07:35:34'),
(7, '7', 256, '0', NULL, '2023-06-13 05:58:51'),
(8, '2', 226, '0', NULL, NULL);

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'A Admin User', '2023-02-23 04:10:38', '2023-02-23 04:10:38'),
(2, 'MIS User', 'A MIS User', '2023-02-23 04:10:38', '2023-02-23 04:10:38'),
(3, 'Physical Stock Auditor User', 'A Physical Stock Auditor User', '2023-02-23 04:10:38', '2023-02-23 04:10:38'),
(4, 'Main Stock Keeper User', 'A Main Stock Keeper User', '2023-02-23 04:10:39', '2023-02-23 04:10:39'),
(5, 'Sub Stock Keeper User', 'A Sub Stock Keeper User', '2023-02-23 04:10:39', '2023-02-23 04:10:39');

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 5, 1),
(2, 6, 2),
(3, 7, 3),
(4, 8, 4),
(5, 9, 5);

--
-- Dumping data for table `sms_view_subscribers`
--

INSERT INTO `sms_view_subscribers` (`id`, `customerid`, `SubscriberName`, `MobileNo`, `Area`, `Address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SMC0000001', 'Sangli Media Communication', '7722099919', 'SMC Control Room', 'address1', 1, NULL, NULL),
(2, 'SMC0000002', 'Netaji Datta Patil', '9423267362', 'PPS Amba Chowk', 'address2', 1, NULL, NULL),
(3, 'SMC0000003', 'Shobha Ravindra mane', '9767749001', 'PPM Kaman Ves  Isapure Galli', 'address3', 1, NULL, NULL),
(4, 'SMC0000004', 'Kumar Sitaram Koli', '7798977083', 'ANKALI Old Dhamani', 'address4', 1, NULL, NULL),
(5, 'SMC0000005', 'Bhimaji Mulaji Bhadra', '9822620345', 'SNG OP Suryakant Mali', 'address5', 1, NULL, NULL),
(6, 'SMC0000006', 'MAHADEV  MALI', '7722099920', 'SMC Control Room', 'address6', 1, NULL, NULL),
(7, 'SMC0000007', 'media services sangli', '8484983036', 'Sangli Media Services', NULL, 0, NULL, NULL),
(8, 'SMC0000008', 'Ramesh Vyanket Munagal', '9975953202', 'PPS Gosavi Galli Abhijit Inmadar', NULL, 0, NULL, NULL),
(9, 'SMC0000009', 'Ankush Bhiva Navali', '8177861746', 'PPS Gosavi Galli Abhijit Inmadar', NULL, 0, NULL, NULL),
(10, 'SMC0000010', 'Mallinath Pavankumar Jamage', '9075767802', 'PPS Nagraj Datt Abhijit Inamdar', NULL, NULL, NULL, NULL),
(11, 'SMC0000011', 'Sham Govindram Poptani', '9404287711', 'PPS Nagraj Datt Abhijit Inamdar', NULL, NULL, NULL, NULL);

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ACTIVE', NULL, NULL),
(2, 'PENDING', NULL, NULL);

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `number`, `address`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Supplier4', NULL, NULL, '0', NULL, NULL),
(5, 'Shree Vision', NULL, 'Madhav Nagar Sangli', '0', NULL, NULL),
(6, 'SP electronics', NULL, 'Kolhapur', '0', NULL, NULL);

--
-- Dumping data for table `unit_master`
--

INSERT INTO `unit_master` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MTR', '0', NULL, '2023-04-26 02:05:29'),
(2, 'Nos', '1', NULL, '2022-09-18 06:40:21'),
(4, 'Tunitterm', '0', NULL, '2023-04-25 01:05:38');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `branch_id`, `status`, `role_id`) VALUES
(1, 'saamit', 'saamitraut@gmail.com', '$2y$10$2BsT5rsROVhWXHrUxFEg4u.xpaiIFwEU/OzETJcLSW3x6ZsN38Efe', 'JUwvQ1qWXyetGIAZ3PAOIJqVBvtgCe6XGjWCDgqTUVgdxpxcRQ5DPu9VNVum', '2022-12-12 06:00:48', '2023-05-03 00:50:52', 2, '1', 1),
(2, 'Numan', 'numan@gmail.com', '$2y$10$1pba23QMhd4cFDu5gk2Ah.EonBDTWTVNG8PbV.sNZCG2wxpSNDeEy', NULL, '2022-12-30 21:57:05', '2023-04-26 05:22:03', NULL, '1', 1),
(3, 'avinash', 'avinash@gmail.com', '$2y$10$2ApULr269GCJ9xpQk0QHyu8gZwldTLZTxl0Gx34i9vuhOzHBx1yiW', 'mzkAR9e7dVDDGLRLZ2Gka5LJ6nc6DppV9oRDbxayvcouhDtZgU3XTKXk0UZD', '2023-01-27 07:31:26', '2023-04-26 05:22:14', NULL, '1', 1),
(5, 'sadmin', 'sadmin@gmail.com', '$2y$10$GeIhNTaOPtGjr2C/PO85IuGBUOgrNTQ30JK4Q5Qlj92ql6Hh3FMUu', 'l0V0eMLsIc9gxWK9Ych7qllyOHY5N7LFQoCk5ViyDPudow3rC7NPP6fnj4IE', '2022-12-12 06:00:48', '2023-05-03 07:23:12', NULL, '1', 1),
(6, 'misuser2', 'misuser@gmail.com', '$2y$10$GIuaIMliWdMSb9D0LfR/L.DKkwFmdrpKP.Jp7XloOfK/UXjbX9hym', 'ix1BolL8ze9DH2C38XQ6DIeCVEdUsWWdEnYeZEMCdxqlOWjLNjKeiLF30mhJ', '2022-12-12 06:00:48', '2023-05-03 07:30:49', 0, '1', 2),
(7, 'stockauditor', 'stockauditor@gmail.com', '$2y$10$e120U6nUFCLPGiCfVe8rFuIacaMofIeE6St2X8ohDNZ4Kp.BbTjaW', 'KOyn1eLT9hro5Jnig11Ff5dBPZStKh5VbEFSeQJ377ISBsoL3sUZ8X3KRwhm', '2022-12-12 06:00:48', '2023-04-26 07:47:46', 4, '1', 4),
(8, 'mainstock', 'mainstock@gmail.com', '$2y$10$YvPPtjDuRnXXCC3WxomASuHfxTPqBkCSdFC5mTRuAgV5qOj3TcfNu', 'RTZQu3II9GAvmPB67vQTeHvpTGSaXR6Jhk5avVWSRlpoK3n1P4htgGDv3kuB', '2022-12-12 06:00:48', '2023-04-26 07:49:11', 4, '1', 4),
(9, 'substock', 'substock@gmail.com', '$2y$10$MMKC.Ic.rZg.OtHojmeuUutvIrrtmvoC/RkXAd.gMncuFoB/QPiju', 'HLgxxqe1scP0KVDfrllqePop75oSRjWunjwyqzYJ5HsKN2UNUOJKQK4TLkkE', '2022-12-12 06:00:48', '2023-04-26 07:49:49', 5, '1', 5),
(10, 'miraj01', 'miraj01@gmail.com', '$2y$10$PqmwkL0.uz6ji82gONrjwuiBFH3mXlokWbkYiJzPzV3a9HMeFO0CW', 'DNWVwiDjGruM69qrm45qwnPmJjl05A9TXiNd23pJNT72LGVMFGJumdVoAduj', '2022-12-12 06:00:48', '2023-05-03 01:18:09', 2, '0', 2),
(12, 'branch 2', 'branch2@gmail.com', '$2y$10$AZXnDHJbhBo8dkJKcDkssOtz/qX9yHDQDzEKDRr57OPPLSexnGKva', '2qkcHpsgY5urJSOiR6SkuxCJZzEkwEgutPTFrse7YMtkvDFuaTu26sSAbEak', NULL, '2023-05-03 01:30:48', 2, '0', 3),
(14, 'Tbranch', 'branch264@gmail.com', '$2y$10$u4rH3QakxrHyIbzGPftDlOANDx05lTpGMGJPrc1zXHgsJmNx4W9sy', 'O1LvOZVPh37N3bBxi1ejreFlokHzehQ0zbQERBZgdy2BhEecLTyL7sVC6ph7', NULL, '2023-04-26 07:09:00', 2, '0', 4),
(16, 'branch2664', 'branch2664@gmail.com', '$2y$10$IClfEvuiqWJc/lrB8Z9DpOeMAcFn09vNCxipz2Pl8RgQKNtB.tmI.', 'FtHm2mf0tjAf5jLjkjs7njd93KHyGh7x62U9HUWaPvztXIUmJTSzzBHvDXAD', NULL, '2023-04-26 05:36:45', 14, '0', 5),
(19, 'TMISBRANCH246', 'tmisbranch2@gmail.com', '$2y$10$3gLKRTQ8kOfzyzVvE0HjW./0ISyeabiEudHUddtJSVGH8fzvTHSHy', 'DLq8cXwAKQG8yTcbTGAyaKRr7XfWfmuoPZFfJBgBaspMzjiC4vDCyUjJhdTH', NULL, '2023-04-26 05:37:20', 3, '1', 2),
(21, 'sangliwadi user', 'sangliwadiuser@gmail.com', '$2y$10$6J9TjG1Nv53Co6K01Ic/SucpuCeeAhjn3YFAPU5Xj9Xt5SLpptjDu', '6FUiXfVsVSU4hfVqJXzBsvsUGZlQ1HACRrTVT6bFBZiSoGam3RvgKS2XQzrK', NULL, '2023-07-07 00:18:05', 14, '1', 2),
(22, 'tuserterm', 'tuserterm@gmail.com', '$2y$10$6W9dFtaInCQxMSJlRh5kCeu0R74sHiZYB8cv6O0ssOQ1yV5w6zzcW', NULL, NULL, NULL, NULL, '0', 1),
(23, 'branchuser06', 'branchuser06@gmail.com', '$2y$10$GUB/KVNQrJ9dZMDPrZT1ousC2VcnKkQjoMMAL6ILkVRsbkWVHJqZe', 'vsTknFauxXe7X11vOzaBEOfZ6W3C9pWz08sSevjN3hd1tsPjQZeXf90nllBn', NULL, '2023-05-03 01:00:21', 3, '0', 4),
(24, 'branchuser08', 'branchuser08@gmail.com', '$2y$10$3ZabJAEfIVFAdeKN9DIR7.jYIm0ZWjzYNVMdOwKZmPr2HOV.eiltW', NULL, NULL, '2023-04-26 06:37:35', 18, '0', 2),
(25, 'adminuser', 'adminuser@gmail.com', '$2y$10$Takw8pvUYmGcGbu9LPDpU.T7qqJIRxg142zkIKsYNfkVsgXWTaQgq', 'L1y26tntxEmd3Eb2uJSr7cIZAqVBLx6eEjtWsk4NqJk2Q9uXV0uLNahNOgel', NULL, '2023-04-26 06:38:30', NULL, '0', 1),
(26, 'pmedia', 'pmedianucleus@gmail.com', '$2y$10$IdV/FYw6Liqmrbf6JqtUnOZp.c0DuJxIAE.1qQ2CzYWXg2hGwcvdO', NULL, NULL, NULL, NULL, '0', 1),
(28, 'termterm', 'termterm@gmail.com', '$2y$10$E5jBMnMhgjG4Qz35YU3Tg.lXlBQ.h3mdoOm68INPy4XLFvvnuoN2e', NULL, NULL, '2023-04-26 08:16:59', 0, '0', 1),
(29, 'misuser06', 'misadmin@gmail.com', '$2y$10$Qk1uGVkOx2JOtGnJWVZnU.mp5DPyG5cwux5lYX38qcVYtEktMS.EC', 'WnXfvV4VWKvd93TdTcILBjW2Tp58XH7zL5o2bnLEvkWJZKYwNEL6YifzfHxI', NULL, '2023-05-03 01:15:48', 0, '0', 2);

-- --------------------------------------------------------

--
-- Structure for view `stock`
--
DROP TABLE IF EXISTS `stock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stock`  AS SELECT `inward_master`.`material_id` AS `material_id`, `inward_master`.`received` AS `credit`, '' AS `debit`, `inward_master`.`receivedon` AS `date` FROM `inward_master` WHERE 1 union all select `outward_master`.`material_id` AS `material_id`,'' AS `credit`,`outward_master`.`issued` AS `debit`,`outward_master`.`issuedon` AS `date` from `outward_master` where 1  ;

-- --------------------------------------------------------

--
-- Structure for view `stockreport`
--
DROP TABLE IF EXISTS `stockreport`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockreport`  AS SELECT `stock`.`material_id` AS `material_id`, sum(`stock`.`credit`) AS `credit`, sum(`stock`.`debit`) AS `debit`, sum(`stock`.`credit`) - sum(`stock`.`debit`) AS `availableStock` FROM `stock` GROUP BY `stock`.`material_id` ORDER BY `stock`.`date` ASC  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
