-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2019 at 02:26 PM
-- Server version: 5.7.24-27-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `30826962_form_info`
--
CREATE DATABASE IF NOT EXISTS `30826962_form_info` DEFAULT CHARACTER SET latin2 COLLATE latin2_general_ci;
USE `30826962_form_info`;

-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

CREATE TABLE `form_info` (
  `ID_puppy` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `LifeSpan` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `Popularity` int(11) NOT NULL,
  `Intelligence` int(11) NOT NULL,
  `SensitivityLevel` int(11) NOT NULL,
  `EasyToGroom` int(11) NOT NULL,
  `DroolingPotential` int(11) NOT NULL,
  `GeneralHealth` int(11) NOT NULL,
  `ToleratesBeingAlone` int(11) NOT NULL,
  `EasyToTrain` int(11) NOT NULL,
  `PreyDrive` int(11) NOT NULL,
  `WanderlustPotential` int(11) NOT NULL,
  `TendencyToBark` int(11) NOT NULL,
  `PotentialForMouthiness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `form_info`
--

INSERT INTO `form_info` (`ID_puppy`, `Weight`, `LifeSpan`, `Size`, `Popularity`, `Intelligence`, `SensitivityLevel`, `EasyToGroom`, `DroolingPotential`, `GeneralHealth`, `ToleratesBeingAlone`, `EasyToTrain`, `PreyDrive`, `WanderlustPotential`, `TendencyToBark`, `PotentialForMouthiness`) VALUES
(0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(0, 2, 4, 4, 3, 3, 5, 4, 4, 5, 5, 2, 2, 3, 3, 1),
(0, 1, 3, 5, 3, 1, 1, 3, 5, 3, 1, 1, 3, 5, 3, 1),
(0, 2, 4, 2, 4, 2, 4, 2, 4, 2, 4, 1, 4, 2, 4, 2),
(0, 4, 5, 4, 2, 5, 4, 1, 1, 5, 4, 4, 4, 3, 1, 1),
(0, 5, 5, 5, 1, 5, 5, 5, 1, 5, 5, 4, 4, 5, 1, 3),
(0, 5, 5, 4, 4, 5, 5, 4, 1, 5, 5, 2, 4, 3, 1, 3),
(0, 3, 5, 3, 1, 2, 4, 4, 1, 4, 5, 3, 3, 2, 2, 1),
(0, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 2, 3, 3, 3, 2),
(0, 3, 5, 4, 2, 5, 5, 4, 1, 5, 3, 5, 4, 5, 2, 3),
(0, 3, 4, 3, 2, 5, 4, 3, 1, 4, 4, 4, 4, 3, 2, 3),
(0, 4, 1, 4, 3, 5, 5, 5, 1, 5, 4, 2, 5, 5, 5, 5),
(0, 1, 2, 2, 3, 5, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 1, 2, 2, 3, 5, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 5, 5, 3, 2, 4, 5, 2, 5, 2, 5, 2, 3, 2, 2, 5),
(0, 4, 4, 3, 3, 5, 4, 4, 1, 4, 4, 5, 3, 3, 1, 2),
(0, 5, 5, 5, 3, 5, 4, 5, 1, 5, 3, 5, 3, 3, 1, 2),
(0, 1, 1, 3, 2, 3, 2, 2, 3, 2, 2, 2, 2, 2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `puppers`
--

CREATE TABLE `puppers` (
  `1` varchar(23) DEFAULT NULL,
  `2` varchar(5) DEFAULT NULL,
  `3` varchar(13) DEFAULT NULL,
  `4` varchar(9) DEFAULT NULL,
  `5` varchar(9) DEFAULT NULL,
  `6` varchar(9) DEFAULT NULL,
  `7` varchar(24) DEFAULT NULL,
  `8` varchar(14) DEFAULT NULL,
  `9` varchar(15) DEFAULT NULL,
  `10` varchar(15) DEFAULT NULL,
  `11` varchar(12) DEFAULT NULL,
  `12` varchar(18) DEFAULT NULL,
  `13` varchar(6) DEFAULT NULL,
  `14` varchar(7) DEFAULT NULL,
  `15` varchar(14) DEFAULT NULL,
  `16` varchar(10) DEFAULT NULL,
  `17` varchar(17) DEFAULT NULL,
  `18` varchar(16) DEFAULT NULL,
  `19` varchar(6) DEFAULT NULL,
  `20` varchar(30) DEFAULT NULL,
  `21` varchar(50) DEFAULT NULL,
  `22` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `puppers`
--

INSERT INTO `puppers` (`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`) VALUES
('BreedName', 'Akita', 'Border Collie', 'Chihuahua', 'Dachshund', 'Dalmatian', 'English Springer Spaniel', 'French Bulldog', 'German Shepherd', 'Golden Retriver', 'Irish Setter', 'Labrador Retriever', 'Poodle', 'Samoyed', 'Siberian Husky', 'Weimaraner', 'Yorkshire Terrier', 'Belgian Sheepdog', 'Collie', 'Shetland Sheepdog', 'Nova Scotia Duck Tolling Retriever', 'Pug'),
('Weight ', '5', '3', '1', '2', '4', '3', '2', '5', '5', '5', '5', '4', '5', '4', '5', '1', '5', '5', '2', '4', '2'),
('LifeSpan', '3', '5', '4', '5', '5', '3', '4', '3', '3', '4', '2', '5', '5', '5', '4', '5', '4', '5', '4', '4', '4'),
('Size', '4', '3', '1', '2', '3', '2', '2', '4', '4', '4', '4', '4', '3', '3', '4', '1', '4', '3', '1', '3', '2'),
('Popularity ', '2', '3', '3', '3', '1', '3', '2', '4', '5', '2', '5', '1', '2', '3', '1', '4', '1', '2', '2', '4', '4'),
('Intelligence ', '3', '5', '4', '4', '4', '5', '3', '5', '5', '5', '5', '5', '3', '3', '5', '3', '5', '4', '5', '5', '2'),
('SensitivityLevel ', '5', '5', '5', '4', '4', '4', '3', '5', '5', '4', '5', '4', '4', '4', '5', '5', '5', '5', '5', '3', '3'),
('EasyToGroom ', '1', '3', '5', '3', '5', '2', '5', '5', '2', '3', '5', '1', '1', '2', '5', '1', '3', '2', '2', '5', '5'),
('DroolingPotential ', '5', '1', '1', '1', '1', '1', '2', '1', '4', '2', '3', '1', '2', '3', '4', '1', '1', '1', '1', '1', '1'),
('GeneralHealth ', '4', '2', '2', '2', '4', '2', '2', '4', '2', '2', '3', '2', '3', '4', '3', '4', '3', '3', '4', '4', '1'),
('ToleranceBeingAlone ', '1', '1', '1', '3', '3', '1', '1', '2', '1', '2', '2', '1', '2', '1', '1', '2', '3', '2', '2', '2', '1'),
('EasyToTrain ', '2', '5', '4', '2', '4', '5', '4', '5', '5', '4', '5', '5', '3', '2', '4', '3', '5', '4', '5', '4', '3'),
('PreyDrive ', '4', '3', '3', '5', '2', '5', '2', '4', '3', '5', '2', '2', '5', '3', '5', '2', '5', '4', '3', '5', '3'),
('WanderlustPotential ', '4', '3', '2', '5', '4', '4', '2', '2', '2', '5', '3', '3', '4', '5', '5', '3', '4', '1', '2', '3', '2'),
('TendencyToBark ', '5', '2', '4', '5', '2', '3', '3', '4', '3', '4', '4', '2', '3', '5', '2', '4', '1', '4', '1', '4', '2'),
('PotentialForMouthiness ', '3', '3', '3', '4', '2', '3', '3', '5', '5', '5', '5', '4', '3', '4', '5', '2', '2', '3', '1', '5', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
