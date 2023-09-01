

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CAL` ()  NO SQL
update control
 set reserved=(inflow)-(outflow)$$

DELIMITER ;



CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `mess` (
  `day` varchar(8) NOT NULL,
  `lunch` varchar(45) NOT NULL,
  `dinner` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `breakfast` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `orderid` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `bfast` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `scomplaint` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `floor` int(2) NOT NULL,
  `room` int(3) NOT NULL,
  `cfor` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `sleave` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `floor` int(2) NOT NULL,
  `room` int(3) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL,
  `place` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffname` varchar(45) NOT NULL,
  `work` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `mobile` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `students` (
  `sname` varchar(45) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `college` varchar(30) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `state` varchar(15) DEFAULT NULL,
  `mobile` text,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `number` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `mess`
  ADD PRIMARY KEY (`day`);
  
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`orderid`);

ALTER TABLE `scomplaint`
  ADD PRIMARY KEY (`usn`);


ALTER TABLE `sleave`
  ADD PRIMARY KEY (`usn`);

ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `students`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `name_2` (`usn`),
  ADD UNIQUE KEY `name_3` (`usn`),
  ADD UNIQUE KEY `name_4` (`usn`),
  ADD KEY `name` (`usn`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
