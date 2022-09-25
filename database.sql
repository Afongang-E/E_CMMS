-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2022 at 08:25 AM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comain`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `asset_id` int(11) NOT NULL,
  `type_id` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Detailed description of the asset name, type, characteristics';

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `e_id` int(11) NOT NULL,
  `SN` bigint(100) NOT NULL DEFAULT 0,
  `name` varchar(1000) NOT NULL,
  `picture` varbinary(2000) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `manufacturer` varchar(100) DEFAULT NULL,
  `attatchments` varchar(100) DEFAULT NULL,
  `characteristics` varchar(50) DEFAULT NULL,
  `parentequipment` varchar(200) NOT NULL DEFAULT 'main'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL DEFAULT '',
  `part_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `frequency` int(11) NOT NULL DEFAULT 0,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='give all that is required for a defined maintenance and its frequency per year';

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `part_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `part_n` int(11) NOT NULL,
  `serial_n` int(11) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table is a record for spare parts which are refferenced to the parent equipment';

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(6) UNSIGNED NOT NULL,
  `sec_name` varchar(30) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tool_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `char` varchar(50) DEFAULT NULL,
  `use` varchar(50) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` char(50) DEFAULT NULL,
  `sname` char(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `role` char(20) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `sname`, `uname`, `role`, `pass`) VALUES
(73, 'AFONGANGff', 'ERNEST', 'ernestly', 'administrator', 'pass'),
(79, 'Happy', 'Estelle', 'ernestly', 'technician', 'aaa'),
(81, 'Chiambom', 'dklj', 'ernestly', 'technician', 'df'),
(82, 'Chiambom', 'Estelle', 'ernestly3', 'administrator', 'ff'),
(83, 'kdkf', 'Estelle', 'ernestly3', 'technician', 'dd'),
(84, 'Chiambom', 'ERNESTLY', 'ernestly', 'technician', 'pass'),
(85, 'afongang ernestly', 'Estelle', 'd', 'technician', 's'),
(86, 'Chiambom', 'Estelle', 'ernestly3', 'technician', 'fd'),
(87, 'jdc', 'nx', 'Bdbb', 'administrator', 'd'),
(88, 'dnd', 'ndnd', 'nd', 'technician', 'd'),
(89, 'h', 'Estelle', 'ernestly3', 'technician', 'm'),
(90, 'Chiambom', 'Estelle', 'ernestly3', 'technician', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `wo_id` int(11) NOT NULL,
  `tittle` char(50) DEFAULT NULL,
  `maintenance_id` int(11) DEFAULT NULL,
  `procedure` varchar(50) DEFAULT NULL,
  `assignedTo` int(11) DEFAULT NULL,
  `dueDate` varchar(50) DEFAULT NULL,
  `asset` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`e_id`) USING BTREE;

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`) USING BTREE,
  ADD KEY `e_id` (`e_id`),
  ADD KEY `tools` (`tool_id`),
  ADD KEY `parts` (`part_id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`wo_id`),
  ADD KEY `assignedTo` (`assignedTo`),
  ADD KEY `maintenance_id` (`maintenance_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `tool_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `equipments` (`e_id`),
  ADD CONSTRAINT `maintenance_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`tool_id`),
  ADD CONSTRAINT `maintenance_ibfk_3` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`);

--
-- Constraints for table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`e_id`);

--
-- Constraints for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD CONSTRAINT `work_orders_ibfk_1` FOREIGN KEY (`assignedTo`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `work_orders_ibfk_2` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenance` (`maintenance_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
