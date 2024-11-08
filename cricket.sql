-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 01:02 PM
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
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminUsername` varchar(20) NOT NULL,
  `adminPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminUsername`, `adminPassword`) VALUES
(1, 'adminUser1', 'password1'),
(2, 'adminUser2', 'password2'),
(3, 'adminUser3', 'password3'),
(4, 'adminUser4', 'password4'),
(5, 'adminUser5', 'password5'),
(6, 'adminUser6', 'password6'),
(7, 'adminUser7', 'password7'),
(8, 'adminUser8', 'password8'),
(9, 'adminUser9', 'password9'),
(10, 'adminUser10', 'password10');

-- --------------------------------------------------------

--
-- Table structure for table `authorizeduser`
--

CREATE TABLE `authorizeduser` (
  `userId` int(11) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `authorizedUsername` varchar(20) NOT NULL,
  `authorizedPassword` varchar(10) NOT NULL,
  `teamId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authorizeduser`
--

INSERT INTO `authorizeduser` (`userId`, `gmail`, `authorizedUsername`, `authorizedPassword`, `teamId`) VALUES
(24, 'userA@gmail.com', 'authUserA', 'authPassA', '1'),
(25, 'userB@gmail.com', 'authUserB', 'authPassB', '2'),
(26, 'userC@gmail.com', 'authUserC', 'authPassC', '3'),
(27, 'userD@gmail.com', 'authUserD', 'authPassD', '4'),
(28, 'userE@gmail.com', 'authUserE', 'authPassE', '5'),
(29, 'userF@gmail.com', 'authUserF', 'authPassF', '6'),
(30, 'userG@gmail.com', 'authUserG', 'authPassG', '7'),
(31, 'userH@gmail.com', 'authUserH', 'authPassH', '8'),
(32, 'userI@gmail.com', 'authUserI', 'authPassI', '9'),
(33, 'induwaramihisara@gmail.com', 'cs', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `matchId` int(11) NOT NULL,
  `organizerId` varchar(10) NOT NULL,
  `teamIdA` varchar(10) NOT NULL,
  `teamIdB` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` text NOT NULL,
  `scoreTeamA` int(10) DEFAULT NULL,
  `scoreTeamB` int(10) DEFAULT NULL,
  `winningTeam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchId`, `organizerId`, `teamIdA`, `teamIdB`, `date`, `time`, `venue`, `scoreTeamA`, `scoreTeamB`, `winningTeam`) VALUES
(11, '1', 'Team A', 'Team B', '2024-10-01', '10:00:00', 'Stadium A', 250, 245, 'Team A'),
(12, '2', 'Team A', 'Team C', '2024-10-02', '12:00:00', 'Stadium B', 200, 180, 'Team A'),
(13, '3', 'Team B', 'Team C', '2024-10-03', '14:00:00', 'Stadium C', 300, 310, 'Team B'),
(14, '4', 'Team A', 'Team D', '2024-10-04', '16:00:00', 'Stadium D', 220, 220, 'Draw'),
(15, '5', 'Team B', 'Team D', '2024-10-05', '18:00:00', 'Stadium E', 180, 190, 'Team B'),
(16, '6', 'Team C', 'Team D', '2024-10-06', '10:00:00', 'Stadium F', 150, 160, 'Team D'),
(17, '7', 'Team A', 'Team E', '2024-10-07', '12:00:00', 'Stadium G', 270, 260, 'Team A'),
(18, '8', 'Team B', 'Team E', '2024-10-08', '14:00:00', 'Stadium H', 220, 230, 'Team B'),
(19, '9', 'Team C', 'Team E', '2024-10-09', '16:00:00', 'Stadium I', 290, 295, 'Team E'),
(20, '10', 'Team D', 'Team E', '2024-10-30', '18:00:00', 'Stadium J', 210, 205, 'a'),
(21, '1', '2', '5', '2024-10-10', '17:31:00', 'sss', 224, 111, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `organizerId` int(11) NOT NULL,
  `organizerUsername` varchar(20) NOT NULL,
  `organizerPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizerId`, `organizerUsername`, `organizerPassword`) VALUES
(1, 'organizerA', 'passA123'),
(2, 'organizerB', 'passB123'),
(3, 'organizerC', 'passC123'),
(4, 'organizerD', 'passD123'),
(5, 'organizerE', 'passE123'),
(6, 'organizerF', 'passF123'),
(7, 'organizerG', 'passG123'),
(8, 'organizerH', 'passH123'),
(9, 'organizerI', 'passI123'),
(10, 'organizerJ', 'passJ123');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `playerId` int(11) NOT NULL,
  `playerName` text NOT NULL,
  `contactNumber` int(10) NOT NULL,
  `playerImage` varchar(100) DEFAULT NULL,
  `teamName` text NOT NULL,
  `role` text NOT NULL,
  `battingAverage` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `strikeRate` varchar(10) DEFAULT NULL,
  `wickets` varchar(10) DEFAULT NULL,
  `economy` varchar(10) DEFAULT NULL,
  `bowlingAverage` varchar(10) DEFAULT NULL,
  `matches` varchar(50) DEFAULT NULL,
  `battingStyle` varchar(50) DEFAULT NULL,
  `bowlingStyle` varchar(50) DEFAULT NULL,
  `age` varchar(50) NOT NULL,
  `cardBackgroundImage` varchar(255) DEFAULT NULL,
  `cardPlayersImages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`playerId`, `playerName`, `contactNumber`, `playerImage`, `teamName`, `role`, `battingAverage`, `country`, `strikeRate`, `wickets`, `economy`, `bowlingAverage`, `matches`, `battingStyle`, `bowlingStyle`, `age`, `cardBackgroundImage`, `cardPlayersImages`) VALUES
(1, 'Chamika Karunaratne', 771000001, 'Cricket-final/Players-Image/Colombo Strikers/CKarunarathne.jpeg', 'Colombo Strikers', 'All-rounder', '25.12', 'Sri Lanka', '80.21', '10', '7.12', '29.01', '12', 'Left-Arm', 'Right-Arm Fast', '29', 'http://localhost/Cricket-final/card-background-images/colombo/chamika-karunarathne.jpeg', 'http://localhost/Cricket-final/card-players-images/colombo/chamika-karunarathne.webp'),
(2, 'Thisara Perera', 771000002, 'Cricket-final/Players-Image/Colombo Strikers/TPerera.jpeg', 'Colombo Strikers', 'All-rounder', '30.12', 'Sri Lanka', '152.32', '18', '8.12', '30.20', '16', 'Right-Arm', 'Right-Arm Medium', '35', 'http://localhost/Cricket-final/card-background-images/colombo/thisara-perera.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/thisara-perera.jpg'),
(3, 'Sadeera Samarawickrama', 771000003, 'Cricket-final/Players-Image/Colombo Strikers/SSamarawickrama.jpeg', 'Colombo Strikers', 'Batsman', '35.63', 'Sri Lanka', '85.23', '-', '-', '-', '11', 'Right-Arm', '-', '25', 'http://localhost/Cricket-final/card-background-images/colombo/sadeera-samarawickrama.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/sadeera-samarawickrama.webp'),
(4, 'Nipun Dhananjaya', 771000004, 'Cricket-final/Players-Image/Colombo Strikers/NDhananjaya.jpeg', 'Colombo Strikers', 'All-rounder', '40.12', 'Sri Lanka', '96.23', '5', '10.23', '36.32', '11', 'Right-Arm', 'Right-Arm Off Spin', '22', 'http://localhost/Cricket-final/card-background-images/colombo/nipun-dhananjaya.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/nipun-dhananjaya.jpg'),
(5, 'Shadab Khan', 771000005, 'Cricket-final/Players-Image/Colombo Strikers/SKhan.jpeg', 'Colombo Strikers', 'All-rounder', '35.45', 'Pakistan', '92.01', '15', '12.12', '32.65', '10', 'Right-Arm', 'Left-Arm Leg Spin', '33', 'http://localhost/Cricket-final/card-background-images/colombo/shadab-khan.webp', 'http://localhost/Cricket-final/card-players-images/colombo/shadab-khan.jpg'),
(6, 'Glenn Phillips', 771000006, 'Cricket-final/Players-Image/Colombo Strikers/GPhilips.jpeg', 'Colombo Strikers', 'Batsman', '36.32', 'New Zealand', '120.21', '16', '10.23', '28.48', '6', 'Left-Arm', 'Left-Arm Leg Spin', '30', 'http://localhost/Cricket-final/card-background-images/colombo/glenn-phillips.webp', 'http://localhost/Cricket-final/card-players-images/colombo/glenn-phillips.jpeg'),
(7, 'Dunith Wellalage', 771000007, 'Cricket-final/Players-Image/Colombo Strikers/DWellalage.jpeg', 'Colombo Strikers', 'All-rounder', '25.32', 'Sri Lanka', '85.36', '20', '8.97', '22.10', '7', 'Left-Arm', 'Left-Arm Leg Spin', '22', 'http://localhost/Cricket-final/card-background-images/colombo/dunith-wellalage.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/dunith-wellalage.png'),
(8, 'Rahmanullah Gurbaz', 771000008, 'Cricket-final/Players-Image/Colombo Strikers/RGurbaz.png', 'Colombo Strikers', 'Wicketkeeper', '45.36', 'Afghanistan', '125.36', '-', '-', '-', '16', 'Left-Arm', '-', '25', 'http://localhost/Cricket-final/card-background-images/colombo/rahmanullah-gurbaz.png', 'http://localhost/Cricket-final/card-players-images/colombo/rahmanullah-gurbaz.webp'),
(9, 'Taskin Ahmed', 771000009, 'Cricket-final/Players-Image/Colombo Strikers/TAhmed.jpeg', 'Colombo Strikers', 'Bowler', '15.19', 'Bangladesh', '56.32', '25', '6.39', '20.12', '16', 'Right-Arm', 'Right-Arm Fast', '31', 'http://localhost/Cricket-final/card-background-images/colombo/taskin-ahmed.webp', 'http://localhost/Cricket-final/card-players-images/colombo/taskin-ahmed.webp'),
(10, 'Matheesha Pathirana', 771000010, 'Cricket-final/Players-Image/Colombo Strikers/MPathirana.jpg', 'Colombo Strikers', 'Bowler', '10.25', 'Sri Lanka', '50.12', '24', '8.32', '22.10', '16', 'Right-Arm', 'Right-Arm Fast', '21', 'http://localhost/Cricket-final/card-background-images/colombo/matheesha-pathirana.webp', 'http://localhost/Cricket-final/card-players-images/colombo/matheesha-pathirana.jpg'),
(11, 'Shevon Daniel', 771000011, 'Cricket-final/Players-Image/Colombo Strikers/SDaniel.jpeg', 'Colombo Strikers', 'Batsman', '35.69', 'Sri Lanka', '96.36', '-', '-', '-', '12', 'Right-Arm', '-', '21', 'http://localhost/Cricket-final/card-background-images/colombo/shevon-daniel.webp', 'http://localhost/Cricket-final/card-players-images/colombo/shevon-daniel.webp'),
(12, 'Isitha Wijesundara', 771000012, 'Cricket-final/Players-Image/Colombo Strikers/IWijesundara.webp', 'Colombo Strikers', 'Batsman', '45.02', 'Sri Lanka', '123.32', '-', '-', '-', '15', 'Right-Arm', '-', '24', 'http://localhost/Cricket-final/card-background-images/colombo/isitha-wijesundara.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/ishitha-wijesundara.jpg'),
(13, 'Angelo Perera', 771000013, 'Cricket-final/Players-Image/Colombo Strikers/APerera.jpeg', 'Colombo Strikers', 'Batsman', '56..12', 'Sri Lanka', '100.25', '-', '-', '-', '10', 'Left-Arm', '-', '30', 'http://localhost/Cricket-final/card-background-images/colombo/angelo-perera.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/anjelo-perera.jpg'),
(14, 'Shehan Fernando', 771000014, 'Cricket-final/Players-Image/Colombo Strikers/SFernando.jpg', 'Colombo Strikers', 'Batsman', '45.96', 'Sri Lanka', '89..35', '-', '-', '-', '5', 'Right-Arm', '-', '26', 'http://localhost/Cricket-final/card-background-images/colombo/shehan-fernandojpg.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/shehan-fernando.jpg'),
(15, 'Muhammed Waseem', 771000015, 'Cricket-final/Players-Image/Colombo Strikers/MWaseem.jpg', 'Colombo Strikers', 'Batsman', '55.52', 'Pakistan', '98.23', '-', '-', '-', '6', 'Left-Arm', '-', '33', 'http://localhost/Cricket-final/card-background-images/colombo/muhammad-waseem.jpg', 'http://localhost/Cricket-final/card-players-images/colombo/muhammad-waseem.webp'),
(16, 'Bhanuka Rajapaksa', 771000016, 'Cricket-final/Players-Image/Galle Marvels/BRajapaksas.jpg', 'Galle Marvels', 'Batsman', '31.25', 'Sri Lanka', '122.36', '-', '-', '-', '9', 'Left-Arm', '-', '34', 'http://localhost/Cricket-final/card-background-images/galle/bhanuka-rajapaksa.webp', 'http://localhost/Cricket-final/card-players-images/galle/bhanuka-rajapaksa.jpg'),
(17, 'Lasith Croospulle', 771000017, 'Cricket-final/Players-Image/Galle Marvels/LCroospulle.jpeg', 'Galle Marvels', 'Batsman', '34.14', 'Sri Lanka', '96.35', '-', '-', '-', '7', 'Right-Arm', '-', '25', 'http://localhost/Cricket-final/card-background-images/galle/lasith-croospulle.webp', 'http://localhost/Cricket-final/card-players-images/galle/lasith-croospulle.jpg'),
(18, 'Niroshan Dickwella', 771000018, 'Cricket-final/Players-Image/Galle Marvels/NDickwella.webp', 'Galle Marvels', 'Wicketkeeper', '41.36', 'Sri Lanka', '89.14', '-', '-', '-', '6', 'Right-Arm', '-', '31', 'http://localhost/Cricket-final/card-background-images/galle/niroshan-dickwella.webp', 'http://localhost/Cricket-final/card-players-images/galle/niroshan-dickwella.jpg'),
(19, 'Maheesh Theekshana', 771000019, 'Cricket-final/Players-Image/Galle Marvels/MTheekshana.jpeg', 'Galle Marvels', 'Bowler', '13.12', 'Sri Lanka', '35.12', '16', '6.36', '23.12', '10', 'Right-Arm', 'Right-Arm Off Spin', '26', 'http://localhost/Cricket-final/card-background-images/galle/maheesh-theekshana.webp', 'http://localhost/Cricket-final/card-players-images/galle/maheesh-theekshana.webp'),
(20, 'Tim Seifert', 771000020, 'Cricket-final/Players-Image/Galle Marvels/Tseifert.webp', 'Galle Marvels', 'Batsman', '33.33', 'New Zealand', '123.32', '-', '-', '-', '5', 'Right-Arm', '-', '32', 'http://localhost/Cricket-final/card-background-images/galle/tim-seifert.webp', 'http://localhost/Cricket-final/card-players-images/galle/tim-seifert.jpeg'),
(21, 'Alex Hales', 771000021, 'Cricket-final/Players-Image/Galle Marvels/AHales.jpeg', 'Galle Marvels', 'Batsman', '46.12', 'England', '96.36', '-', '-', '-', '-', 'Left-Arm', '-', '35', 'http://localhost/Cricket-final/card-background-images/galle/alex-hales.jpg', 'http://localhost/Cricket-final/card-players-images/galle/alex-hales.jpg'),
(22, 'Janith Liyanage', 771000022, 'Cricket-final/Players-Image/Galle Marvels/JLiyanage.jpg', 'Galle Marvels', 'All-rounder', '47.12', 'Sri Lanka', '112.45', '6', '8.25', '25.00', '10', 'Right-Arm', 'Right-Arm Off Spin ', '24', 'http://localhost/Cricket-final/card-background-images/galle/janith-liyanage.jpg', 'http://localhost/Cricket-final/card-players-images/galle/janith-liyanage.webp'),
(23, 'Dwaine Pretorius', 771000023, 'Cricket-final/Players-Image/Galle Marvels/DPretorius.jpeg', 'Galle Marvels', 'All-rounder', '39.12', 'South Africa', '105.66', '15', '8.45', '25.69', '10', 'Rigth-Arm', 'Right-Arm Fast', '31', 'http://localhost/Cricket-final/card-background-images/galle/dwaine-pretorius.jpg', 'http://localhost/Cricket-final/card-players-images/galle/dwaine-pretorius.jpg'),
(24, 'Lahiru Kumara', 771000024, 'Cricket-final/Players-Image/Galle Marvels/LKumara.jpg', 'Galle Marvels', 'Bowler', '11.10', 'Sri Lanka', '45.28', '22', '7.15', '25.36', '12', 'Right-Arm', 'Right-Arm Fast', '27', 'http://localhost/Cricket-final/card-background-images/galle/lahiru-kumara.jpg', 'http://localhost/Cricket-final/card-players-images/galle/lahiru-kumara.png'),
(25, 'Prabath Jayasuriya', 771000025, 'Cricket-final/Players-Image/Galle Marvels/PJayasuriya.jpeg', 'Galle Marvels', 'Bowler', '9.36', 'Sri Lanka', '36.36', '22', '7.65', '23.65', '11', 'Right-Arm', 'Left-Arm Leg Spin', '34', 'http://localhost/Cricket-final/card-background-images/galle/prabath-jayasuriya.webp', 'http://localhost/Cricket-final/card-players-images/galle/prabath-jayasuriya.webp'),
(26, 'Sean Williams', 771000026, 'Cricket-final/Players-Image/Galle Marvels/SWilliams.jpg', 'Galle Marvels', 'All-rounder', '36.69', 'Zimbabwe', '92.32', '12', '9.63', '29.36', '8', 'Right-Arm', 'Right-Arm Off Spin', '36', 'http://localhost/Cricket-final/card-background-images/galle/sean-williams.jpg', 'http://localhost/Cricket-final/card-players-images/galle/sean-williams.jpg'),
(27, 'Zahoor Khan', 771000027, 'Cricket-final/Players-Image/Galle Marvels/ZKhan.jpg', 'Galle Marvels', 'Bowler', '6.32', 'UAE', '25.48', '18', '7.47', '26.58', '12', 'Right-Arm', 'Right-Arm Medium', '31', 'http://localhost/Cricket-final/card-background-images/galle/zahoor-khan.jpeg', 'http://localhost/Cricket-final/card-players-images/galle/zahoor-khan.jpg'),
(28, 'Malsha Tharupathi', 771000028, 'Cricket-final/Players-Image/Galle Marvels/MTharupathi.jpeg', 'Galle Marvels', 'All-rounder', '36.36', 'Sri Lanka', '89.36', '8', '6.99', '20.14', '5', 'Right-Arm', 'Left-Arm Medium', '25', 'http://localhost/Cricket-final/card-background-images/galle/malsha-tharupathi.jpg', 'http://localhost/Cricket-final/card-players-images/galle/malsha-tharupathi.jpeg'),
(29, 'Isuru Udana', 771000029, 'Cricket-final/Players-Image/Galle Marvels/IUdana.jpg', 'Galle Marvels', 'Bowler', '33.23', 'Sri Lanka', '98.14', '21', '7.25', '25.25', '15', 'Right-Arm', 'Right-Arm Fast', '36', 'http://localhost/Cricket-final/card-background-images/galle/isuru-udana.jpg', 'http://localhost/Cricket-final/card-players-images/galle/isuru-udanajpg.jpg'),
(30, 'Wanindu Hasaranga', 771000030, 'Cricket-final/Players-Image/B-Love Kandy/WHasaranga.jpeg', 'B-Love Kandy', 'All-rounder', '31.12', 'Sri Lanka', '96.32', '18', '8.25', '22.35', '10', 'Right-Arm', 'Right-Arm Leg Spin', '26', 'http://localhost/Cricket-final/card-background-images/kandy/wanindu-hasaranga.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/wanindu-hasaranga.jpg'),
(31, 'Angelo Mathews', 771000031, 'Cricket-final/Players-Image/B-Love Kandy/AMathews.jpeg', 'B-Love Kandy', 'All-rounder', '32.15', 'Sri Lanka', '100.36', '15', '9.63', '19.78', '9', 'Right-Arm', 'Right-Arm Medium', '35', 'http://localhost/Cricket-final/card-background-images/kandy/angelo-mathews.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/angelo-mathews.webp'),
(32, 'Dushmantha Chameera', 771000032, 'Cricket-final/Players-Image/B-Love Kandy/DChameera.jpeg', 'B-Love Kandy', 'Bowler', '15.14', 'Sri Lanka', '45.54', '19', '6.98', '20.47', '8', 'Right-Arm', 'Right-Arm Fast', '33', 'http://localhost/Cricket-final/card-background-images/kandy/dushmantha-chameera.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/dushmantha-chameera.webp'),
(33, 'Kamindu Mendis', 771000033, 'Cricket-final/Players-Image/B-Love Kandy/KMendis.jpeg', 'B-Love Kandy', 'All-rounder', '41.12', 'Sri Lanka', '89.36', '14', '7.14', '16.39', '10', 'Right-Arm', 'Right-Arm Off Spin/Left-Arm Leg Spin', '28', 'http://localhost/Cricket-final/card-background-images/kandy/kamindu-mendis.webp', 'http://localhost/Cricket-final/card-players-images/kandy/kamindu-mendis.webp'),
(34, 'Andre Fletcher', 771000034, 'Cricket-final/Players-Image/B-Love Kandy/AFletcher.webp', 'B-Love Kandy', 'Batsman', '39.45', 'West Indies', '105.36', '-', '-', '-', '12', 'Right-Arm', '-', '31', 'http://localhost/Cricket-final/card-background-images/kandy/andre-fletcher.webp', 'http://localhost/Cricket-final/card-players-images/kandy/andre-fletcher.jpg'),
(35, 'Kyle Mayers', 771000035, 'Cricket-final/Players-Image/B-Love Kandy/KMayers.jpg', 'B-Love Kandy', 'All-rounder', '35.45', 'West Indies ', '112.58', '13', '8.14', '23.18', '6', 'Left-Arm', 'Left-Arm Medium', '32', 'http://localhost/Cricket-final/card-background-images/kandy/kyle-mayers.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/kyle-mayers.webp'),
(36, 'Dasun Shanaka', 771000036, 'Cricket-final/Players-Image/B-Love Kandy/DShanaka.jpg', 'B-Love Kandy', 'All-rounder', '33.36', 'Sri Lanka', '123.21', '15', '10.24', '25.14', '7', 'Right-Arm', 'Right-Arm Medium', '34', 'http://localhost/Cricket-final/card-background-images/kandy/dasun-shanaka.webp', 'http://localhost/Cricket-final/card-players-images/kandy/dasun-shanaka.webp'),
(37, 'Dimuth Karunaratne', 771000037, 'Cricket-final/Players-Image/B-Love Kandy/DKarunarathne.jpeg', 'B-Love Kandy', 'Batsman', '38.47', 'Sri Lanka', '118.12', '-', '-', '-', '8', 'Left-Arm', '-', '35', 'http://localhost/Cricket-final/card-background-images/kandy/dimuth-karunarathne.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/dimuth-karunaratne.webp'),
(38, 'Ramesh Mendis', 771000038, 'Cricket-final/Players-Image/B-Love Kandy/RMendis.jpg', 'B-Love Kandy', 'Bowler', '29.36', 'Sri Lanka', '45.32', '14', '8.32', '21.78', '8', 'Right-Arm', 'Right-Arm Off Spin', '26', 'http://localhost/Cricket-final/card-background-images/kandy/ramesh-mendis.webp', 'http://localhost/Cricket-final/card-players-images/kandy/ramesh-mendis.jpg'),
(39, 'Dinesh Chandimal', 771000039, 'Cricket-final/Players-Image/B-Love Kandy/DChandimal.jpg', 'B-Love Kandy', 'Wicketkeeper', '40.12', 'Sri Lanka', '96.38', '-', '-', '-', '7', 'Right-Arm', '-', '33', 'http://localhost/Cricket-final/card-background-images/kandy/dinesh-chandimal.webp', 'http://localhost/Cricket-final/card-players-images/kandy/dinesh-chandimal.jpg.crdownload'),
(40, 'Ashen Bandara', 771000040, 'Cricket-final/Players-Image/B-Love Kandy/ABandara.jpg', 'B-Love Kandy', 'Batsman', '38.47', 'Sri Lanka', '100.36', '-', '-', '-', '11', 'Right-Arm', '-', '25', 'http://localhost/Cricket-final/card-background-images/kandy/ashen-bandara.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/ashen-bandara.jpg'),
(41, 'Mohammed Hasnain', 771000041, 'Cricket-final/Players-Image/B-Love Kandy/MHasnain.jpeg', 'B-Love Kandy', 'Bowler', '15.12', 'Pakistan', '56.32', '18', '9.45', '30.12', '12', 'Right-Arm', 'Right-Arm Fast', '25', 'http://localhost/Cricket-final/card-background-images/kandy/mohammed-hasnain.jpeg', 'http://localhost/Cricket-final/card-players-images/kandy/muhammad-hasnain.jpg'),
(42, 'Lakshan Sandakan', 771000042, 'Cricket-final/Players-Image/B-Love Kandy/LSandakan.jpg', 'B-Love Kandy', 'Bowler', '11.14', 'Sri Lanka', '32.45', '11', '7.45', '25.47', '6', 'Left-Arm', 'Left Arm Chinaman', '26', 'http://localhost/Cricket-final/card-background-images/kandy/lakshan-sandakan.jpg', 'http://localhost/Cricket-final/card-players-images/kandy/lakshan-sandakan.jpg'),
(43, 'Kasun Rajitha', 771000043, 'Cricket-final/Players-Image/B-Love Kandy/KRajitha.jpeg', 'B-Love Kandy', 'Bowler', '10.45', 'Sri Lanka', '23.14', '18', '8.35', '25.96', '9', 'Right-Arm', 'Right-Arm Fast', '29', 'http://localhost/Cricket-final/card-background-images/kandy/kasun-Rajitha.webp', 'http://localhost/Cricket-final/card-players-images/kandy/kasun-rajitha.webp'),
(44, 'Dilshan Madushanka', 771000044, 'Cricket-final/Players-Image/Dambulla Thunders/DMadushanka.jpg', 'Dambulla Thunders', 'Bowler', '10.25', 'Sri Lanka', '45.47', '16', '6.28', '20.47', '8', 'Right-Arm', 'Left-Arm Fast', '26', 'http://localhost/Cricket-final/card-background-images/dambulla/dilshan-madushanka.webp', 'http://localhost/Cricket-final/card-players-images/dambulla/dilshan-madushanka.webp'),
(45, 'Nuwan Thushara', 771000045, 'Cricket-final/Players-Image/Dambulla Thunders/NThushara.jpg', 'Dambulla Thunders', 'Bowler', '8.47', 'Sri Lanka', '35.78', '19', '7.89', '18.69', '9', 'Rigth-Arm', 'Right-Arm Fast', '25', 'http://localhost/Cricket-final/card-background-images/dambulla/nuwan-thushara.webp', 'http://localhost/Cricket-final/card-players-images/dambulla/nuwan-thushara.webp'),
(46, 'Dushan Hemantha', 771000046, 'Cricket-final/Players-Image/Dambulla Thunders/DHemanthajpg.jpg', 'Dambulla Thunders', 'All-rounder', '38.96', 'Sri Lanka', '96.25', '12', '8.36', '25.14', '5', 'Right-Arm', 'Right-Arm Medium', '24', 'http://localhost/Cricket-final/card-background-images/dambulla/nuwan-thushara.webp', 'http://localhost/Cricket-final/card-players-images/dambulla/dushan-hemantha.jpg'),
(47, 'Praveen Jayawickrama', 771000047, 'Cricket-final/Players-Image/Dambulla Thunders/PJayawickrama.jpg', 'Dambulla Thunders', 'Bowler', '11.48', 'Sri Lanka', '45.17\n', '25', '7.45', '26.98', '12', 'Left-Arm', 'Left-Arm Leg Spin', '23', 'http://localhost/Cricket-final/card-background-images/dambulla/praveen-jayawickrama.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/praveen-jayawickrama.webp'),
(48, 'Mustafizur Rahman', 771000048, 'Cricket-final/Players-Image/Dambulla Thunders/MRahman.jpeg', 'Dambulla Thunders', 'Bowler', '12.36\n', 'Bangladesh', '36.15', '28', '7.77', '22.22', '14', 'Right-Arm', 'Right-Arm Fast', '31', 'http://localhost/Cricket-final/card-background-images/dambulla/mustafizur-rahman.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/mustafizur-rahman.jpg'),
(49, 'Akila Dananjaya', 771000049, 'Cricket-final/Players-Image/Dambulla Thunders/ADhananjaya.jpeg', 'Dambulla Thunders', 'Bowler', '14.25', 'Sri Lanka', '59.98', '25', '5.66', '18.47', '12', 'Right-Arm', 'Right-Arm Off Spin', '29', 'http://localhost/Cricket-final/card-background-images/dambulla/akila%20dhananjaya.webp', 'http://localhost/Cricket-final/card-players-images/dambulla/akila-dananjaya.jpg'),
(50, 'Danushka Gunathilaka', 771000050, 'Cricket-final/Players-Image/Dambulla Thunders/DGunathilaka.jpg', 'Dambulla Thunders', 'All-rounder', '45.24\n', 'Sri Lanka ', '102.55', '12', '8.88', '25.56', '10', 'Right-Arm', 'Right-Arm Off Spin', '30', 'http://localhost/Cricket-final/card-background-images/dambulla/danushka-gunathilaka.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/danushka-gunathilaka.webp'),
(51, 'Iftikhar Ahmed', 771000051, 'Cricket-final/Players-Image/Dambulla Thunders/IAhmed.jpg', 'Dambulla Thunders', 'All-rounder', '36.22', 'Pakistan', '98.21', '10', '7.14', '18.98', '5', 'Right-Arm', 'Rigth-Arm Off Spin', '35', 'http://localhost/Cricket-final/card-background-images/dambulla/iftikhar-ahmed.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/iftikhar-ahmed.jpg'),
(52, 'Nuwan Pradeep', 771000052, 'Cricket-final/Players-Image/Dambulla Thunders/NPradeep.jpg', 'Dambulla Thunders', 'Bowler', '10.25', 'Sri Lanka', '36.68', '29', '7.01', '26.36', '15', 'Right-Arm', 'Right-Arm Fast', '33', 'http://localhost/Cricket-final/card-background-images/dambulla/nuwan-pradeep.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/nuwan-pradeeep.jpeg'),
(53, 'Sohan de Livera', 771000053, 'Cricket-final/Players-Image/Dambulla Thunders/SLivera.webp', 'Dambulla Thunders', 'Wicketkeeper', '33.11', 'Sri Lanka', '102.25', '-', '-', '-', '6', 'Left-Arm', '-', '25', 'http://localhost/Cricket-final/card-background-images/dambulla/sohan-livera.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/sohan-livera.jpg'),
(54, 'Asela Gunaratne', 771000054, 'Cricket-final/Players-Image/Dambulla Thunders/AGunarathne.jpeg', 'Dambulla Thunders', 'All-rounder', '36.96', 'Sri Lanka', '111.12', '15', '6.99', '25.87', '6', 'Right-Arm', 'Right-Arm Medium', '35', 'http://localhost/Cricket-final/card-background-images/dambulla/asela-gunarathne.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/asela-gunaratne.webp'),
(55, 'Lahiru Madushanka', 771000055, 'Cricket-final/Players-Image/Dambulla Thunders/LMadushanka.jpg', 'Dambulla Thunders', 'All-rounder', '6.85', 'Sri Lanka', '55.25', '20', '7.45', '22.87', '10', 'Left-Arm', 'Left-Arm Fast', '25', 'http://localhost/Cricket-final/card-background-images/dambulla/lahiru-madushanka.jpg', 'http://localhost/Cricket-final/card-players-images/dambulla/lahiru-madushanka.webp'),
(56, 'Mithun Jayawickrama', 771000056, 'Cricket-final/Players-Image/Dambulla Thunders/MJayawickrama.webp', 'Dambulla Thunders', 'Bowler', '9.63', 'Sri Lanka', '66.36\n', '19', '8.01', '26.12', '8', 'Left-Arm', 'Left-Arm Leg Spin', '23', 'http://localhost/Cricket-final/card-background-images/dambulla/mithun-jayawickrama.webp', 'http://localhost/Cricket-final/card-players-images/colombo/shehan-fernando.jpg'),
(57, 'Kusal Mendis', 771000057, 'Cricket-final/Players-Image/Jaffna Kings/kmendis.jpg', 'Jaffna Kings', 'Wicketkeeper', '36.36', 'Sri Lanka', '105.36', '-', '-', '-', '9', 'Right-Arm', '-', '33', 'http://localhost/Cricket-final/card-background-images/jaffna/kusal-mendis.jpg', 'http://localhost/Cricket-final/card-players-images/jaffna/kusal-mendis.webp'),
(58, 'Avishka Fernando', 771000058, 'Cricket-final/Players-Image/Jaffna Kings/AFernando.jpg', 'Jaffna Kings', 'Batsman', '28.45', 'Sri Lanka', '102.25', '-', '-', '-', '10', 'Right-Arm', '-', '32', 'http://localhost/Cricket-final/card-background-images/jaffna/avishka-fernando.jpg', 'http://localhost/Cricket-final/card-players-images/jaffna/avishka-fernando.webp'),
(59, 'Charith Asalanka', 771000059, 'Cricket-final/Players-Image/Jaffna Kings/CAsalanka.jpeg', 'Jaffna Kings', 'Batsman', '45.12', 'Sri Lanka', '119.25', '-', '-', '-', '11', 'Right-Arm', '-', '30', 'http://localhost/Cricket-final/card-background-images/jaffna/charith-asalanka.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/charith-asalanka.jpg'),
(60, 'Vijayakanth Viyaskanth', 771000060, 'Cricket-final/Players-Image/Jaffna Kings/VViyaskanth.jpeg', 'Jaffna Kings', 'Bowler', '12.12', 'Sri Lanka', '39.99', '16', '6.36', '22.12', '6', 'Right-Arm', 'Right-Arm Off Spin', '25', 'http://localhost/Cricket-final/card-background-images/jaffna/vijayakanth-viyaskanth.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/vijayakanth-Viyaskanth.webp'),
(61, 'Noor Ahmad', 771000061, 'Cricket-final/Players-Image/Jaffna Kings/NAhmed.jpeg', 'Jaffna Kings', 'Bowler', '10.45', 'Afghanistan', '40.21', '17', '7.36', '24.16', '9', 'Left-Arm', 'Right-Arm Fast', '27', 'http://localhost/Cricket-final/card-background-images/jaffna/noor-ahmed.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/noor-ahmed.jpg'),
(62, 'Azmatullah Omarzai', 771000062, 'Cricket-final/Players-Image/Jaffna Kings/AOmarzai.jpg', 'Jaffna Kings', 'All-rounder', '33.64', 'Afghanistan', '99.36', '15', '6.66', '22.22', '8', 'Right-Arm', 'Right-Arm Fast', '28', 'http://localhost/Cricket-final/card-background-images/jaffna/azmatullah-omarzai.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/azmatullah-omarzai.jpeg'),
(63, 'Rilee Rossouw', 771000063, 'Cricket-final/Players-Image/Jaffna Kings/RRoossouw.jpg', 'Jaffna Kings', 'Batsman', '40.12', 'South Africa', '103.65', '-', '-', '-', '12', 'Left-Arm', '-', '35', 'http://localhost/Cricket-final/card-background-images/jaffna/rilee-rossouw.jpeg', 'http://localhost/Cricket-final/card-players-images/jaffna/rilee-rossouw.webp'),
(64, 'Fabian Allen', 771000064, 'Cricket-final/Players-Image/Jaffna Kings/FAllenjpg.jpg', 'Jaffna Kings', 'All-rounder', '36.36', 'West Indies', '125.14', '11', '7.25', '19.25', '5', 'Right-Arm', 'Right-Arm Medium', '32', 'http://localhost/Cricket-final/card-background-images/jaffna/fabian-allen.jpg', 'http://localhost/Cricket-final/card-players-images/jaffna/fabian-allen.jpg'),
(65, 'Dhananjaya de Silva', 771000065, 'Cricket-final/Players-Image/Jaffna Kings/DSilva.jpeg', 'Jaffna Kings', 'All-rounder', '29.31', 'Sri Lanka', '125.32', '15', '6.39', '25.41', '9', 'Right-Arm', 'Right-Arm Off Spin', '30', 'http://localhost/Cricket-final/card-background-images/jaffna/dhananjaya-silva.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/dhananjaya-silva.webp'),
(66, 'Jason Behrendorff', 771000066, 'Cricket-final/Players-Image/Jaffna Kings/JBehrendorff.webp', 'Jaffna Kings', 'Bowler', '15.47', 'Australia', '45.58', '19', '6.99', '22.41', '11', 'Right-Arm', 'Right-Arm Fast', '31', 'http://localhost/Cricket-final/card-background-images/jaffna/jason-behrendorff.jpg', 'http://localhost/Cricket-final/card-players-images/jaffna/jason-behrendorff.webp'),
(67, 'Binura Fernando', 771000067, 'Cricket-final/Players-Image/Jaffna Kings/BFernando.jpeg', 'Jaffna Kings', 'Bowler', '5.89', 'Sri Lanka', '33.69', '21', '7.15', '25.36', '12', 'Left-Arm', 'Left-Arm Fast', '26', 'http://localhost/Cricket-final/card-background-images/jaffna/binura-fernando.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/binura-fernando.jpg'),
(68, 'Asitha Fernando', 771000068, 'Cricket-final/Players-Image/Jaffna Kings/AsFernando.jpeg', 'Jaffna Kings', 'Bowler', '9.78', 'Sri Lanka', '65.45', '25', '7.96', '27.36', '13', 'Right-Arm', 'Right-Arm Fast', '26', 'http://localhost/Cricket-final/card-background-images/jaffna/asitha-fernando.webp', 'http://localhost/Cricket-final/card-players-images/jaffna/asitha-fernando.webp'),
(69, 'Pramod Madushan', 771000069, 'Cricket-final/Players-Image/Jaffna Kings/PMadushan.jpeg', 'Jaffna Kings', 'Bowler', '14.12', 'Sri Lanka', '45.21', '27', '7.36', '25.25', '14', 'Left-Arm', 'Left-Arm Fast', '25', 'http://localhost/Cricket-final/card-background-images/jaffna/pramod-madushan.jpg', 'http://localhost/Cricket-final/card-players-images/jaffna/pramod-madusudhan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamId` int(11) NOT NULL,
  `teamUsername` varchar(20) NOT NULL,
  `paymentStatus` tinyint(1) NOT NULL,
  `managerName` text NOT NULL,
  `teamLogo` varchar(255) DEFAULT NULL,
  `teamName` text NOT NULL,
  `color1` varchar(50) DEFAULT NULL,
  `color2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamId`, `teamUsername`, `paymentStatus`, `managerName`, `teamLogo`, `teamName`, `color1`, `color2`) VALUES
(1, 'cstrikers', 1, 'John Smith', 'Cricket-final/Team-Logos/colombo.webp', 'Colombo Strikers', 'rgb(46, 0, 78,0.7)', 'rgb(226, 3, 210,0.7)'),
(2, 'gmarvels', 1, 'Alex Johnson', 'Cricket-final/Team-Logos/galle.png', 'Galle Marvels', 'rgb(17, 18, 19,0.7)', 'rgb(151,252,1,0.7)'),
(3, 'blovekandy', 1, 'Emily Brown', 'Cricket-final/Team-Logos/kandy.png', 'B-Love Kandy', 'rgba(167, 99, 27, 0.7)\n', 'rgb(240, 131, 14,0.7)'),
(4, 'dthunders', 1, 'Michael Green', 'Cricket-final/Team-Logos/dambulla.webp', 'Dambulla Thunders', 'rgb(227, 59, 19,0.7)', 'rgb(255, 255, 0,0.7)'),
(5, 'jkings', 1, 'Olivia White', 'Cricket-final/Team-Logos/jaffna.webp', 'Jaffna Kings', 'rgb(0, 255, 127,0.7)', 'rgb(233, 192, 103,0.7)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `authorizeduser`
--
ALTER TABLE `authorizeduser`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `fk_teamId` (`teamId`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`matchId`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizerId`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `authorizeduser`
--
ALTER TABLE `authorizeduser`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `matchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `playerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
