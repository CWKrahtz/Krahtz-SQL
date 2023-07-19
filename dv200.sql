-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dv200`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `receptionist_id`, `doctor_id`, `Date`) VALUES
(1, 36, 3, 5, '2024-06-26'),
(3, 3, 1, 3, '2023-08-24'),
(5, 36, 2, 8, '2023-06-24'),
(6, 16, 3, 6, '2023-06-22'),
(12, 4, 3, 8, '2023-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name_surename` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL,
  `profile_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name_surename`, `age`, `gender`, `email`, `password`, `phone_number`, `specialisation`, `room_id`, `profile_img`) VALUES
(1, 'Harry Engelbrecht', 38, 'Male', 'harry.e@krahtzclinic.co.za', 'Harry@1234', '0733460810', 'Ear, Nose and Throught', 0, 'man1.png'),
(2, 'Carlos Dos Santos', 28, 'Male', 'carlos.ds@krahtzclinic.co.za', 'Carlos@1234', '0716114364', 'Ear, Nose and Throught', 0, 'man2.png'),
(3, 'Ilana Joubert', 29, 'Female', 'ilana.j@krahtzclinic.co.za', 'Ilana@1234', '0629173302', 'General Practitioner', 0, '6492fde106972.png'),
(4, 'Hugo De Vries', 32, 'Male', 'hugo.dv@krahtzclinic.co.za', 'Hugo@1234', '0713833780', 'Dentist', 0, 'man3.png'),
(5, 'Solly Nkhumeleni', 42, 'Male', 'solly.n@krahtzclinic.co.za', 'Solly@1234', '0616701270', 'Orthodontist', 0, 'man4.png'),
(6, 'Angela Hayworth', 32, 'Female', 'angela.h@krahtzclinic.co.za', 'Angela@1234', '0662320355', 'Physiotherapy', 0, 'woman2.png'),
(7, 'Althea Jacobs', 43, 'Female', 'althea.j@krahtzclinic.co.za', 'Althea@1234', '0717399694', 'Physiotherapy', 0, 'woman3.png'),
(8, 'John Wick', 52, 'Male', 'john.w@gmail.com', 'John.w@1234', '0609641125', 'Physiotherapy', 3, '6492fd9eeec27.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name_surename` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `medical_aid_number` int(11) NOT NULL,
  `profile_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name_surename`, `age`, `gender`, `email`, `password`, `phone_number`, `medical_aid_number`, `profile_img`) VALUES
(1, 'Julius Krahtz', 63, 'Male', 'julius@krahtz.co.za', 'Julius@1234', '0609640125', 77319810, '64948887bdaed.jpeg'),
(2, 'Johan Jansen van Rensburg', 23, 'Male', 'johan.jvr@gmail.co.za', 'Johan@1234', '0845749913', 77319810, 'man2.png'),
(3, 'Christian Krahtz', 22, 'Male', 'christian@krahtz.co.za', 'Christian@1234', '0748050149', 77319810, 'man3.png'),
(4, 'Lindy Van den Berg', 42, 'Female', 'lindy.vdb@gmail.co.za', 'Lindy@1234', '0609125640', 98107731, 'woman1.png'),
(5, 'Marco Pollo', 76, 'Male', 'marco.p@gmail.com', 'Marco@1234', '0842848051', 80911157, 'man4.png'),
(6, 'Daleen Van Wyk', 54, 'Female', 'daleen.vw@gmail.com', 'Daleen@1234', '0826227370', 94538091, 'woman2.png'),
(7, 'Janet Krahtz', 51, 'Female', 'janet@krahtz.com', 'Janet@1234', '0832090734', 77319810, 'woman3.png'),
(8, 'JD Oosthuizen', 30, 'Male', 'jd.oosthuizen@gmail.com', 'JanDavid@1234', '0793650138', 24681357, 'man5.png'),
(9, 'Kaneki Ken', 20, 'Male', 'ken.kaneki@gmail.com', 'Kaneki@1234', '0823706227', 80919453, 'man6.png'),
(10, 'Yuno Ren', 21, 'Male', 'yuno.ren@gmail.com', 'Yuno@1234', '0853719462', 34952183, 'man1.png'),
(11, 'Rene Besuidenhout', 35, 'Female', 'rene.b@gmail.com', 'Yuno@1234', '0853946271', 21833495, 'woman5.png'),
(12, 'George Russel', 32, 'Male', 'george.r@gmail.com', 'George@1234', '0827153946', 88384389, 'man2.png'),
(13, 'Willem Oorendal', 48, 'Male', 'willem.o@gmail.com', 'Willem@1234', '0715823946', 43898838, 'man3.png'),
(14, 'Andre Bos', 67, 'Male', 'andre.b@gmail.com', 'Andre@1234', '0123946715', 7623928, 'man4.png'),
(16, 'Tess Du Press', 33, 'Female', 'tess.db@gmail.com', 'Tess@1234', '0825417121', 2147483647, 'woman4.png'),
(36, 'Power Wolf', 35, 'Male', 'powerwolf@gmail.com', 'power.w@1234', '0842848051', 77319810, '6492f1a199cef.jpeg'),
(40, 'Julius Krahtz Jr', 22, 'Male', 'julius.jr@gmail.com', 'Juliusjr@1234', '0192577777', 123456789, '64944b89c7f2f.png'),
(42, 'Christian', 23, 'Male', 'christian@krahtz.co.za', 'Chris@1234', '0748050149', 123456789, '6494886e737b4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(11) NOT NULL,
  `name_surename` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `name_surename`, `age`, `gender`, `phone_number`, `email`, `password`, `rank`) VALUES
(1, 'Inaldi Uys', 21, 'female', 823081939, 'inaldi.uys@krahtzclinic.co.za', 'Inaldi@1234', 'Head Receptionist'),
(2, 'Zane Van Antwerp', 23, 'female', 646859198, 'zanevaw@krahtzclinic.co.za', 'Zane@1234', 'Receptionist'),
(3, 'Jani Cronje', 26, 'female', 718982711, 'jnai.cronje@krahtzclinic.co.za', 'Jani@1234', 'Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `floor_num` int(11) NOT NULL,
  `room_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `doctor_id`, `floor_num`, `room_number`) VALUES
(1, 2, 2, 12),
(2, 1, 1, 4),
(3, 3, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `receptionist_id` (`receptionist_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionists` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
