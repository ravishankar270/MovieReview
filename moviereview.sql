-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_id`, `admin_email`, `admin_password`) VALUES
('Ravi', 0, 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `theory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `likes` int(255) NOT NULL DEFAULT 1,
  `dislikes` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `theory_id`, `user_id`, `comments`, `likes`, `dislikes`) VALUES
(1, 2, 1, 'Love it', 6, -1),
(2, 2, 2, 'i love it too so good', 1, 0),
(3, 2, 2, 'The car integrates signals from a variety of sensors like video, weather monitor, anti-collision etc. it also has an automatic navigation system in case of emergency. The car works on the asynchronous mechanism of artificial intelligence. It\'s a great advance of technology which will make the disabled, able.', 1, 0),
(4, 2, 1, '$desc', 23, 26),
(5, 2, 1, '<p>yess</p>', 20, 30),
(6, 2, 1, '<p>yess</p>', 20, 30),
(7, 2, 1, '<p>harsh jain</p>', 21, 28),
(8, 2, 1, '<p>hello agin</p><p>&nbsp;</p>', 23, 28),
(49, 2, 1, '&nbsp;&nbsp;&nbsp;ll', 3, -1),
(50, 2, 1, 'hello again correct', 1, 0),
(51, 2, 1, 'hello Again 2', 0, 0),
(52, 2, 1, 'hekk', 0, 0),
(53, 2, 1, 'heeli', 0, 0),
(55, 3, 1, 'hello', 0, 0),
(56, 3, 1, 'hell', 0, 0),
(57, 3, 1, 'kk', 0, 0),
(58, 3, 1, 'jj', 0, 0),
(59, 3, 1, 'kk', 1, 0),
(60, 3, 1, 'jjajajaj', 0, 0),
(61, 3, 1, 'heell o again', 0, 0),
(62, 4, 1, 'hello', 0, 0),
(63, 3, 1, 'kkk', 0, 0),
(64, 6, 1, 'yes it is&nbsp;', 0, 0),
(65, 2, 1, 'jjjjj', 1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `Director` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E_id` int(11) NOT NULL,
  `MPPA` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`Director`, `Name`, `E_id`, `MPPA`, `genre`, `images`, `rating`, `description`, `admin_id`) VALUES
('Josh', 'Joker', 1, '12', 'thriller', '', 4.5, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fan theory`
--

CREATE TABLE `fan theory` (
  `theory_id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Views` bigint(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fan theory`
--

INSERT INTO `fan theory` (`theory_id`, `question`, `user_id`, `Views`) VALUES
(2, 'What is your Favourite movie', 1, 0),
(3, 'what is that?', 2, 0),
(4, 'harry potter and the voldermont stone?', 1, 0),
(5, 'hello all welocome?', 2, 0),
(6, 'Ben 10 is the best?', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `runtime` float NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `review_likes` int(11) NOT NULL,
  `Spoiler_tag` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `description`, `review_likes`, `Spoiler_tag`, `user_id`, `E_id`, `username`) VALUES
(2, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ', 0, 'yes', 1, 1, 'ravishankar'),
(3, '\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum offici', 0, 'yes', 2, 1, 'ravishankar'),
(4, 'POST', 0, 'yes', 2, 1, 'Shankar'),
(5, '', 0, 'yes', 2, 1, 'Shankar'),
(6, 'hello', 0, 'yes', 2, 1, 'Shankar'),
(7, 'kk', 0, 'yes', 2, 1, 'Shankar'),
(8, 'kk', 0, 'yes', 2, 1, 'Shankar'),
(9, 'kk', 0, 'yes', 2, 1, 'Shankar'),
(10, 'kkk', 0, 'yes', 2, 1, 'Shankar'),
(11, 'kkk', 0, 'yes', 2, 1, 'Shankar'),
(12, 'kkk', 0, 'yes', 2, 1, 'Shankar'),
(13, 'kkk', 0, 'yes', 2, 1, 'Shankar'),
(14, 'kkk', 0, 'yes', 2, 1, 'Shankar'),
(15, 'kkk', 0, 'yes', 2, 1, 'Shankar');

-- --------------------------------------------------------

--
-- Table structure for table `tv shows`
--

CREATE TABLE `tv shows` (
  `no_of_seasons` int(11) NOT NULL,
  `no_of_episodes` int(11) NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Phone_no` float NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `cliend_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `Phone_no`, `Email_id`, `cliend_id`) VALUES
(1, 'ravishankar', '123', 1233460, 'harrypotter27082000@gmail.com', ''),
(2, 'Shankar', '123', 8291070000, 'r@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `watch_list`
--

CREATE TABLE `watch_list` (
  `user_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `Comments_fk0` (`theory_id`),
  ADD KEY `Comments_fk1` (`user_id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`E_id`),
  ADD KEY `Entertainment_fk0` (`admin_id`);

--
-- Indexes for table `fan theory`
--
ALTER TABLE `fan theory`
  ADD PRIMARY KEY (`theory_id`),
  ADD KEY `fan theory_fk0` (`user_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`runtime`,`E_id`),
  ADD KEY `Movie_fk0` (`E_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`user_id`,`E_id`),
  ADD KEY `rating_fk1` (`E_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `Reviews_fk0` (`user_id`),
  ADD KEY `Reviews_fk1` (`E_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tv shows`
--
ALTER TABLE `tv shows`
  ADD PRIMARY KEY (`no_of_seasons`,`E_id`),
  ADD KEY `TV shows_fk0` (`E_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD PRIMARY KEY (`user_id`,`E_id`),
  ADD KEY `watch_list_fk1` (`E_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fan theory`
--
ALTER TABLE `fan theory`
  MODIFY `theory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_fk0` FOREIGN KEY (`theory_id`) REFERENCES `fan theory` (`theory_id`),
  ADD CONSTRAINT `Comments_fk1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD CONSTRAINT `Entertainment_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `fan theory`
--
ALTER TABLE `fan theory`
  ADD CONSTRAINT `fan theory_fk0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `Movie_fk0` FOREIGN KEY (`E_id`) REFERENCES `entertainment` (`E_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_fk0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rating_fk1` FOREIGN KEY (`E_id`) REFERENCES `entertainment` (`E_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `Reviews_fk0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `Reviews_fk1` FOREIGN KEY (`E_id`) REFERENCES `entertainment` (`E_id`),
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `tv shows`
--
ALTER TABLE `tv shows`
  ADD CONSTRAINT `TV shows_fk0` FOREIGN KEY (`E_id`) REFERENCES `entertainment` (`E_id`);

--
-- Constraints for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD CONSTRAINT `watch_list_fk0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `watch_list_fk1` FOREIGN KEY (`E_id`) REFERENCES `entertainment` (`E_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
