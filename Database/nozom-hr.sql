-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 11:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nozom-hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `assetName` varchar(200) NOT NULL,
  `assetId` varchar(200) NOT NULL,
  `PurchaseDate` date NOT NULL,
  `PurchaseFrom` varchar(200) NOT NULL,
  `Manufacturer` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Status` int(10) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `AssetCondition` varchar(255) NOT NULL,
  `Warranty` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `AssetUser` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `assetName`, `assetId`, `PurchaseDate`, `PurchaseFrom`, `Manufacturer`, `Model`, `Status`, `Supplier`, `AssetCondition`, `Warranty`, `Price`, `AssetUser`, `Description`, `DateTime`) VALUES
(1, 'Macbook Book', '#AST-031256', '2020-09-23', 'Amazon', 'Apple Inc.', '2020', 1, 'Amazon', 'In good shape', '12 Months', 1900, 'Mushe abdul-Hakim', 'This is the description of the laptop', '2020-09-23 23:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ClientId` varchar(225) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Status`, `Picture`, `date`) VALUES
(1, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$xU1zDRigag7ZMGs0Egcqoei0SrtZJRX/p425h4qOi5OMKFz32k0UC', 'CLT-613498', '233209229025', 'Microsoft Inc', 'Live from home', 1, 'd41d8cd98f00b204e9800998ecf8427e1601112041', '2020-09-26'),
(2, 'Vendetta', 'Alkaline', 'alkaline', 'musheabdulhakim99@gmail.com', '$2y$10$qUL2APr762X.vvJuNQvqludvabDa.Y3TRHOa.M/qq8WFoeoh7IaWG', 'CLT-217594', '233209229025', 'Falcon Systems', 'Live from home', 1, 'd41d8cd98f00b204e9800998ecf8427e1601112339', '2020-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `Department`, `Date`) VALUES
(2, 'Marketing', '2020-09-26'),
(3, 'IT Department', '2020-09-26'),
(4, 'Web Development', '2020-09-27'),
(5, 'AI', '2024-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `Designation`, `Department`, `Date`) VALUES
(1, 'Web Designer', 'Web Development', '2020-09-27'),
(2, 'Web Developer', 'Web Development', '2020-09-27'),
(3, 'Python ', 'AI', '2024-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Joining_Date` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Employee_Id`, `Phone`, `Department`, `Designation`, `Joining_Date`, `Picture`, `DateTime`) VALUES
(4, 'wael', 'alamaireh', 'wael2', 'wael2@gmail.ch', '$2y$10$E8FuYrk8eyA2s5bccuUNk.bTFXPHjzgbzhgJzIFfZHmevYT6Z41k6', 'EMP-743619', '0791554762', 'Web Development', 'Web Developer', '2024-01-28', 'wael.jpg', '2024-01-28 00:04:29'),
(5, 'wael', 'alamaireh', 'wael3', 'wael3@gmail.ch', '$2y$10$fBLIUiJ3HTgxW5RcEdfi0O3NEUN.Sn8mdfBC5GckdTJdOTsSJRNBW', 'EMP-186249', '0791554763', 'Web Development', 'Web Developer', '2024-01-28', 'wael.jpg', '2024-01-28 00:14:44'),
(6, 'wael', 'alamaireh', 'wael4', 'wael4@gmail.com', '$2y$10$FnUSMHaMzaAZVYYn1faLAuOfJ4d5tzEcCY0mfSfEmLh3zFrvITGWe', 'EMP-570482', '0791554764', 'Web Development', 'Web Developer', '2024-01-28', 'wael.jpg', '2024-01-28 22:07:11'),
(7, 'wael', 'alamaireh', 'wael5', 'wael5@gmail.com', '$2y$10$WRsGVEfhrDfuivcILsU4/.Xe4AkacKvq28aGKP5QO0o/FzjLSGVV.', 'EMP-712836', '0791554765', 'IT Department', 'Web Designer', '2024-01-28', 'wael.jpg', '2024-01-28 22:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Target` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Description` text NOT NULL,
  `Status` int(11) NOT NULL,
  `Progress` varchar(200) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `Type`, `Subject`, `Target`, `StartDate`, `EndDate`, `Description`, `Status`, `Progress`, `dateTime`) VALUES
(1, 'Another One', 'Coding', 'Code till time infinity ', '2020-09-25', '2020-10-10', 'This is the thing i always want to do and am doing it for the rest of my life now friend.', 1, '80', '2020-09-25 00:13:34'),
(2, 'Another One', 'this is a test', 'Code till time infinity ', '2020-09-25', '2020-10-10', 'This is a test', 1, '50', '2020-09-25 00:39:34'),
(3, 'Invoice Goal', 'This is another test', 'Code till thy kingdom come.', '2020-09-25', '2048-09-10', 'this is another one of the wierdest thing that i have ever done. I having alot of the shit not working but i got this.', 0, '0', '2020-09-25 01:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `goal_type`
--

CREATE TABLE `goal_type` (
  `id` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Status` int(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goal_type`
--

INSERT INTO `goal_type` (`id`, `Type`, `Description`, `Status`, `Date`) VALUES
(1, 'Invoice Goal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti laudantium animi fuga hic nobis culpa, sapiente numquam quaerat quisquam eveniet dolorum soluta harum eligendi praesentium corporis error quo inventore suscipit?', 1, '2020-09-24'),
(3, 'Another One', 'This is another test for the type section. Just testing it and seeing it work makes me smile with joy. Thats the power of programming for humans and especially to me .It makes me more happy to see my code run without troubles or bugs.', 1, '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `Holiday_Name` varchar(200) NOT NULL,
  `Holiday_Date` date NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `Holiday_Name`, `Holiday_Date`, `DateTime`) VALUES
(1, 'Christmas', '2020-12-25', '2020-09-26 19:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Starting_At` date NOT NULL,
  `Ending_On` date NOT NULL,
  `Days` int(200) NOT NULL,
  `Reason` text NOT NULL,
  `Time_Added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `Employee`, `Starting_At`, `Ending_On`, `Days`, `Reason`, `Time_Added`) VALUES
(1, 'Goerge Merchason', '2020-09-01', '2020-10-01', 10, 'This is a test to the leaving system', '2020-10-04 01:50:34'),
(2, 'Mushe Abdul-Hakim', '2020-09-01', '2020-10-16', 10, 'this is another reason why he going home for number of days', '2020-10-04 01:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `OverTime_Date` date NOT NULL,
  `Hours` varchar(20) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `Employee`, `OverTime_Date`, `Hours`, `Type`, `Description`, `dateTime`) VALUES
(1, 'Mushe Abdul-Hakim', '2020-09-29', '5', '	Normal ex.5', 'This extra minutes are spent on trying to improve my knowledge on programming everyday.', '2020-09-29 00:38:26'),
(2, 'Goerge Merchason', '2020-09-29', '5', '	Normal ex.5', 'This was just to help the ceo with his presentation prep for tomorrow\'s big event.', '2020-09-29 09:20:37'),
(3, 'Yahuza Abdul-Hakim', '2020-09-10', '3', 'Normal ex.5', 'This is another test of the overtime of employees', '2020-09-29 09:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Pro_id` int(11) NOT NULL,
  `Pro_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pro_desc` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Pro_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pro_start` date DEFAULT NULL,
  `Pro_end` date DEFAULT NULL,
  `Pro_duration` int(11) DEFAULT NULL,
  `Pro_priority` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) DEFAULT NULL,
  `Pro_status` varchar(255) NOT NULL DEFAULT 'In progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Pro_id`, `Pro_Name`, `Pro_desc`, `Pro_type`, `Pro_start`, `Pro_end`, `Pro_duration`, `Pro_priority`, `Pro_price`, `Pro_status`) VALUES
(16, 'Project 1', '', 'EA', '0000-00-00', '0000-00-00', 1, 'High', 0, 'In progress'),
(17, 'Project 2', '', 'EA', '0000-00-00', '0000-00-00', 1, 'High', 0, 'In progress');

-- --------------------------------------------------------

--
-- Table structure for table `projects_managers`
--

CREATE TABLE `projects_managers` (
  `id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Emp_id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Created_by` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `project_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `project_type`) VALUES
(2, 'EA'),
(3, 'Qias'),
(5, 'EA & Qias');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Phone`, `Address`, `Picture`, `dateTime`) VALUES
(6, 'Wael', 'Alamaireh', 'Wael', 'wael@nozomtechs.com', '$2y$10$zb2ibzzBKJHQaMeMoMZqTuRxERFAZl0LZUya8yJkxKa8JM6yzQEXy', '9876543210', 'Los Angeles, California', 'wael.jpg', '2020-09-21 19:04:47'),
(7, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$f3acNJ/slpOfQvZy.u6OfOM6GOLTTjz3IYUIbMMQuixXjmgeRQ0Ga', '233209229025', 'San Francisco Bay Area', 'my-passport-photo.jpg', '2020-09-21 19:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `date`) VALUES
(1, 'admin\r\n', '2020-09-21'),
(2, 'employee', '2020-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assetId` (`assetId`),
  ADD UNIQUE KEY `assetId_2` (`assetId`),
  ADD UNIQUE KEY `assetId_3` (`assetId`),
  ADD UNIQUE KEY `assetId_4` (`assetId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClientId` (`ClientId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Department` (`Department`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_type`
--
ALTER TABLE `goal_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Type` (`Type`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Pro_id`);

--
-- Indexes for table `projects_managers`
--
ALTER TABLE `projects_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goal_type`
--
ALTER TABLE `goal_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `projects_managers`
--
ALTER TABLE `projects_managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
