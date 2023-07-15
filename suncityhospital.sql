-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 08:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suncityhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `SSN` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Username` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DOB` int(11) DEFAULT NULL,
  `Gender` varchar(5) NOT NULL,
  `TelephoneNo` int(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`SSN`, `Name`, `Username`, `Email`, `DOB`, `Gender`, `TelephoneNo`, `Password`) VALUES
(1, 'Julia Owens', '', 'jOwens@gmail.com', 1976, 'F', 721426780, 'Jowens1'),
(2, 'John Doe', '', 'jDoe@gmail.com', 1987, 'M', 776645280, 'Jdoe2'),
(3, 'Jessica Butcher', '', 'jButcher@gmail.com', 1977, 'F', 752782640, 'Jbutcher3'),
(4, 'Stanley Ndegwa', '', 'sNdegwa@gmail.com', 1985, 'M', 726778989, 'Sndegwa4'),
(5, 'Job Ngari', '', 'jNgari@gmail.com', 1980, 'B', 777426554, 'Jngari5');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `BillNo` int(11) NOT NULL,
  `PatientName` varchar(50) NOT NULL,
  `DoctorName` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`BillNo`, `PatientName`, `DoctorName`, `Amount`, `Date`) VALUES
(1, 'Jason Broucher', 'Nicholas Mugambi', 500, '2023-01-04'),
(2, 'Jason Bonbon', 'Hassan Omar', 2000, '2023-02-04'),
(3, 'Michael Njoroge', 'Michael Githogo', 4000, '2023-02-05'),
(4, 'Jason Bonbon', 'Victor Brown', 1000, '2023-02-09'),
(5, 'Sophia Ndirangu', 'James Walker', 5000, '2023-02-11'),
(6, 'Aimy Jeptoo', 'Hassan Omar', 3000, '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `SSN` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` int(11) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Specialty` varchar(15) NOT NULL,
  `Experience` int(5) NOT NULL,
  `TelephoneNo` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`SSN`, `Name`, `username`, `Email`, `DOB`, `Gender`, `Specialty`, `Experience`, `TelephoneNo`, `password`) VALUES
(123, 'Hassan Omar', '', 'hOmar@gmail.com', 1966, '0', '', 0, 712345789, 'Homar123'),
(124, 'jon', '', 'jon@gmail.com', 2004, 'male', '', 0, 789657896, 'jonte123'),
(345, 'Nicholas Mugambi', '', 'nMugambi@gmail.com', 1973, '0', '', 0, 745667988, 'Nmugambi456'),
(567, 'Michael Githogo', '', 'mGithogo@gmail.com', 1975, '0', '', 0, 776478791, 'Mgithogo789'),
(789, 'Victor Brown', '', 'vBrown@gmail.com', 1966, '0', '', 0, 712345789, 'Vbrown123'),
(912, 'James Walter', '', 'jWalter@gmail.com', 1966, '0', '', 0, 712345789, 'Jwalter456');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `SSN` int(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DOB` int(11) DEFAULT NULL,
  `Gender` varchar(5) NOT NULL,
  `TelephoneNo` int(11) DEFAULT NULL,
  `Pri_physician_Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`SSN`, `Name`, `Email`, `DOB`, `Gender`, `TelephoneNo`, `Pri_physician_Name`) VALUES
(1, 'Jason Broucher', 'jBroucher@gmail.com', 1986, 'M', 721426780, 'Jane'),
(2, 'Jason Bonbon', 'jBonbon@gmail.com', 1977, 'M', 2147483647, ''),
(3, 'Michael Njoroge', 'mNjoroge@gmail.com', 1996, 'M', 757778580, ''),
(4, 'Sophia Ndirangu', 'sNdirangu@gmail.com', 1972, 'F', 77448890, ''),
(5, 'Aimy Jeptoo', 'aJeptoo@gmail.com', 1980, 'F', 767677680, ''),
(6, 'deo', 'deomo@gmail.com', 2004, 'male', 89, 'janet');

-- --------------------------------------------------------

--
-- Table structure for table `patientdiagnosis`
--

CREATE TABLE `patientdiagnosis` (
  `DiagnosisNo` int(11) NOT NULL,
  `DiagnosisDetails` varchar(200) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientdiagnosis`
--

INSERT INTO `patientdiagnosis` (`DiagnosisNo`, `DiagnosisDetails`, `Remark`, `Date`, `PatientID`) VALUES
(1, 'Headache', 'Normal', '0000-00-00', 1),
(2, 'Stomachache', 'Gastroenteritis', '0000-00-00', 2),
(3, 'Burning urine', 'UTI', '0000-00-00', 3),
(2, 'See near', 'Myopia', '0000-00-00', 4),
(4, 'Heart attack', 'Blood Clot', '0000-00-00', 5),
(5, 'Fever', 'Malaria', '0000-00-00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `TradeName` varchar(10) DEFAULT NULL,
  `patient_SSN` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Presc_Date` date DEFAULT NULL,
  `Dosage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL,
  `UserType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`, `UserType`) VALUES
(1, 'deo', '123', 'deo@gmail.com', 'Doctor'),
(2, 'Moriasi', '$2y$10$wMUAjumxFj.Vl4yUfmBvQeFpa07DnYnzl4.cBZfYAOO.3CvZFsSYy', 'moriasi@gmail.com', 'Patient'),
(3, 'Admin', '$2y$10$uScZ2y/OLn8.evtcl.aVSuEl.Ls.oVw1nLW39o3SynoCcsCg21Mkm', 'admin@gmail.com', 'Admin'),
(4, 'owen', '$2y$10$g.foX5qQmEZd339Ky2Lvtu8weOS9eO/FRfMfFo5YB82o2EzDN29v2', 'owenmuchemi10@gmail.com', 'Doctor'),
(6, 'Mary', '$2y$10$VXIUbQw4Q5Hlpcnofp1eD.aJZa2EfzV0hvIl6Mkl1DM1nxXQ/57FG', 'Mary@gmail.com', 'Patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`BillNo`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `SSN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
