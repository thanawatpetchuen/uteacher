--
-- Table structure for table `uteacher`
--

CREATE TABLE `uteacher` (
  `UteacherID` int NOT NULL AUTO_INCREMENT,
  `UteacherNAME` varchar(20) DEFAULT NULL,
  `RANK` varchar(20) DEFAULT NULL,
  `Education` varchar(20) DEFAULT NULL,
  `FacultyID` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;