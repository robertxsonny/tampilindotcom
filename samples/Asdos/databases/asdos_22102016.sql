-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 12:42 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdos`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `roomid`, `message`, `sender`, `time`) VALUES
(1, 7, 'Halo kamu!', 1, '2016-09-07 13:00:00'),
(2, 7, 'Halo juga, kamu!', 3, '2016-09-07 13:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user1id` int(11) NOT NULL,
  `user2id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `user1id`, `user2id`) VALUES
(7, 'room 1', 1, 3),
(8, 'room x', 1, 2),
(9, 'room tutor dan siswa', 4, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rooms_with_users`
--
CREATE TABLE `rooms_with_users` (
`roomid` int(11)
,`roomname` text
,`user1id` int(11)
,`user1fullname` text
,`user1username` text
,`user1password` text
,`user1institution` text
,`user1field` text
,`user1type` int(11)
,`user2id` int(11)
,`user2fullname` text
,`user2username` text
,`user2password` text
,`user2institution` text
,`user2field` text
,`user2type` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Kakak'),
(2, 'Adik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `institution` text NOT NULL,
  `field` text NOT NULL,
  `type` int(11) NOT NULL,
  `lastupdate` datetime NOT NULL,
  `md5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `institution`, `field`, `type`, `lastupdate`, `md5`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'UGM', 'Teknik Elektro', 1, '2016-10-22 09:21:03', 'e80b5017098950fc58aad83c8c14978e'),
(2, 'Adik SMA', 'adik', '74fac68143274d0c9d5f452ff0451075', 'UGM', 'Teknik Elektro', 2, '0000-00-00 00:00:00', ''),
(3, 'Kakak Asisten Dosen', 'kakak', '237922b3d03c24e2f178e522180c167c', 'ITB', 'Teknik Informatika', 1, '0000-00-00 00:00:00', ''),
(4, 'tutor baru banget', 'tutor', '1f6f42334e1709a4e0f9922ad789912b', 'x', 'y', 1, '2016-10-22 17:34:49', 'e80b5017098950fc58aad83c8c14978e'),
(5, 'tutor baru banget', 'tutor', '1f6f42334e1709a4e0f9922ad789912b', 'x', 'y', 1, '2016-10-15 06:24:10', ''),
(6, 'tutor baru banget', 'tutor', '1f6f42334e1709a4e0f9922ad789912b', 'x', 'y', 1, '2016-10-15 07:13:08', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_with_types`
--
CREATE TABLE `users_with_types` (
`userid` int(11)
,`username` text
,`password` text
,`institution` text
,`field` text
,`typeid` int(11)
,`type` text
,`lastupdate` bigint(17)
,`fullname` text
,`md5` text
);

-- --------------------------------------------------------

--
-- Structure for view `rooms_with_users`
--
DROP TABLE IF EXISTS `rooms_with_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rooms_with_users`  AS  select `rooms`.`id` AS `roomid`,`rooms`.`name` AS `roomname`,`user1`.`id` AS `user1id`,`user1`.`fullname` AS `user1fullname`,`user1`.`username` AS `user1username`,`user1`.`password` AS `user1password`,`user1`.`institution` AS `user1institution`,`user1`.`field` AS `user1field`,`user1`.`type` AS `user1type`,`user2`.`id` AS `user2id`,`user2`.`fullname` AS `user2fullname`,`user2`.`username` AS `user2username`,`user2`.`password` AS `user2password`,`user2`.`institution` AS `user2institution`,`user2`.`field` AS `user2field`,`user2`.`type` AS `user2type` from ((`rooms` left join `users` `user1` on((`user1`.`id` = `rooms`.`user1id`))) left join `users` `user2` on((`user2`.`id` = `rooms`.`user2id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `users_with_types`
--
DROP TABLE IF EXISTS `users_with_types`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_with_types`  AS  select `users`.`id` AS `userid`,`users`.`username` AS `username`,`users`.`password` AS `password`,`users`.`institution` AS `institution`,`users`.`field` AS `field`,`users`.`type` AS `typeid`,`types`.`type` AS `type`,unix_timestamp(`users`.`lastupdate`) AS `lastupdate`,`users`.`fullname` AS `fullname`,`users`.`md5` AS `md5` from (`users` left join `types` on((`users`.`type` = `types`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
