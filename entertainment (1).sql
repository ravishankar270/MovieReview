-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 10:56 AM
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
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `Director` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E_id` int(11) NOT NULL,
  `MPPA` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `images1` varchar(255) NOT NULL,
  `images2` varchar(255) NOT NULL,
  `images3` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'Movie',
  `trailer` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`Director`, `Name`, `E_id`, `MPPA`, `genre`, `images`, `images1`, `images2`, `images3`, `rating`, `description`, `admin_id`, `Type`, `trailer`) VALUES
('Josh', 'Joker', 1, '12', 'thriller', '', '', '', '', 4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ', 0, 'Movie', 'https://www.youtube.com/watch?v=zAGVQLHvwOY'),
(' Bong Joon-ho', 'Parasite', 31, '', 'Action/Thriller', '../Movies_images/Parasite/Parasiteh.jpg', '../Movies_images/Parasite/parasite1.jpg', '../Movies_images/Parasite/Parasite2.jpg', '../Movies_images/Parasite/Parasite3.jpg', 5, 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', 0, 'Movie', 'https://www.youtube.com/watch?v=5xH0HfJHsaY'),
('James Wan', 'Aquaman', 32, '', 'Sci-Fi', '../Movies_images/Aquaman/Aquamanh.jpg', '../Movies_images/Aquaman/Aquaman1.jpg', '../Movies_images/Aquaman/Aquaman2.jpg', '../Movies_images/Aquaman/Aquaman3.jpg', 5, 'Half-human, half-Atlantean Arthur is born with the ability to communicate with marine creatures. He goes on a quest to retrieve the legendary Trident of Atlan and protect the water world', 0, 'Movie', 'https://www.youtube.com/watch?v=WDkg3h8PCVU&t=5s'),
('Synder', 'Batman Vs Superman', 33, '', 'Sci-Fi', '../Movies_images/Batman Vs Superman/BatmanVsSupermanh.jpg', '../Movies_images/Batman Vs Superman/BatmanVsSuperman1.jpg', '../Movies_images/Batman Vs Superman/BatmanVsSuperman2.jpg', '../Movies_images/Batman Vs Superman/BatmanVsSuperman3.jpg', 3, 'Bruce Wayne, a billionaire, believes that Superman is a threat to humanity after his battle in Metropolis. Thus, he decides to adopt his mantle of Batman and defeat him once and for all.', 0, 'Movie', 'https://www.youtube.com/watch?v=0WWzgGyAH6Y'),
('Joe Johnston', 'Captain America', 34, '', 'Sci-Fi', '../Movies_images/Captain America/CaptainAmericah.jpg', '../Movies_images/Captain America/CaptainAmerica.jpg', '../Movies_images/Captain America/CaptainAmerica1.jpg', '../Movies_images/Captain America/CaptainAmerica2.jpg', 5, 'During World War II, Steve Rogers decides to volunteer in an experiment that transforms his weak body. He must now battle a secret Nazi organisation headed by Johann Schmidt to defend his nation.', 0, 'Movie', 'https://www.youtube.com/watch?v=JerVrbLldXw'),
('John Lasseter', 'Cars', 35, '', 'Action/Thriller', '../Movies_images/Cars/Carsh.jpg', '../Movies_images/Cars/Cars1.jpg', '../Movies_images/Cars/Cars2.jpg', '../Movies_images/Cars/Cars3.jpg', 4, '\r\nLightning McQueen, a racing car, learns a hard lesson in life when he damages a lot of property in Radiator Springs. His task is to repair the damage done before he can get back on the road.', 0, 'Movie', 'https://www.youtube.com/watch?v=SbXIj2T-_uk'),
('James Wan', 'Conjuring', 36, '', 'Horror', '../Movies_images/Conjuring/Conjuringh.jpg', '../Movies_images/Conjuring/Conjuring1.jpg', '../Movies_images/Conjuring/Conjuring2.jpg', '../Movies_images/Conjuring/Conjuring3.jpg', 5, 'The Perron family moves into a farmhouse where they experience paranormal phenomena. They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them', 0, 'Movie', 'https://www.youtube.com/watch?v=k10ETZ41q5o'),
('Christopher Nolan', 'Dark Knight Rises', 37, '', 'Sci-Fi', '../Movies_images/Dark Knight Rises/DarkKnightRisesh.jpg', '../Movies_images/Dark Knight Rises/D.jpg', '../Movies_images/Dark Knight Rises/DarkKnightRises2.jpg', '../Movies_images/Dark Knight Rises/DarkKnightRises3.jpg', 5, 'Bane, an imposing terrorist, attacks Gotham City and disrupts its eight-year-long period of peace. This forces Bruce Wayne to come out of hiding and don the cape and cowl of Batman again', 0, 'Movie', 'https://www.youtube.com/watch?v=g8evyE9TuYk'),
('Rob Cohen', 'Fast and Furious', 38, '', 'Action/Thriller', '../Movies_images/Fast and Furious/Fast and Furioush.jpg', '../Movies_images/Fast and Furious/Fast and Furious1.jpg', '../Movies_images/Fast and Furious/Fast and Furious2.jpg', '../Movies_images/Fast and Furious/Fast and Furious3.jpg', 5, 'A spate of high-speed robberies in LA brings street racer Dominic Toretto and his crew under the LAPD scanner. FBI agent Brian goes undercover and befriends Toretto in a bid to investigate the matter.', 0, 'Movie', 'https://www.youtube.com/watch?v=2TAOizOnNPo'),
('Chris Buck', 'Frozen', 39, '', 'Comedy', '../Movies_images/Frozen/Frozenh.jpg', '../Movies_images/Frozen/Frozen1.jpg', '../Movies_images/Frozen/Frozen2.jpg', '../Movies_images/Frozen/Frozen3.jpg', 5, 'Anna sets out on a journey with an iceman, Kristoff, and his reindeer, Sven, in order to find her sister, Elsa, who has the power to convert any object or person into ice.', 0, 'Movie', 'https://www.youtube.com/watch?v=TbQm5doF_Uc'),
('Jon Favreau', 'Iron Man', 40, '', 'Sci-Fi', '../Movies_images/Iron Man/Iron Manh.jpg', '../Movies_images/Iron Man/Iron Man1.jpg', '../Movies_images/Iron Man/Iron Man2.jpg', '../Movies_images/Iron Man/Iron Man3.jpg', 5, 'When Tony Stark, an industrialist, is captured, he constructs a high-tech armoured suit to escape. Once he manages to escape, he decides to use his suit to fight against evil forces to save the world.', 0, 'Movie', 'https://www.youtube.com/watch?v=8ugaeA-nMTc&t=1s'),
('Shane Black', 'Iron Man 3', 41, '', 'Sci-Fi', '../Movies_images/Iron Man 3/Iron Man 3h.jpg', '../Movies_images/Iron Man 3/Iron Man 31.jpg', '../Movies_images/Iron Man 3/Iron Man 32.jpg', '../Movies_images/Iron Man 3/Iron Man 33.jpg', 5, 'Tony Stark encounters a formidable foe called the Mandarin. After failing to defeat his enemy, Tony embarks on a journey of self-discovery as he fights against the powerful Mandarin.', 0, 'Movie', 'https://www.youtube.com/watch?v=Ke1Y3P9D0Bc&t=3s'),
('Zack Snyder', 'Man of Steel', 42, '', 'Comedy', '../Movies_images/Man of Steel/Man of Steelh.jpg', '../Movies_images/Man of Steel/Man of Steel1.jpg', '../Movies_images/Man of Steel/Man of Steel2.jpg', '../Movies_images/Man of Steel/Man of Steel3.jpg', 5, 'Clark learns about the source of his abilities and his real home when he enters a Kryptonian ship in the Artic. However, an old enemy follows him to Earth in search of a codex and brings destruction.', 0, 'Movie', 'https://www.youtube.com/watch?v=T6DJcgm3wNY'),
('David F. Sandberg', 'Shazam', 43, '', 'Comedy', '../Movies_images/Shazam/Shazamh.jpg', '../Movies_images/Shazam/Shazam1.jpg', '../Movies_images/Shazam/Shazam2.jpg', '../Movies_images/Shazam/Shazam3.jpg', 5, 'After being abandoned at a fair, Billy constantly searches for his mother. His life, however, takes a huge turn when he inherits the superpowers of a powerful wizard.', 0, 'Movie', 'https://www.youtube.com/watch?v=go6GEIrcvFY'),
('James Wan', 'The Nun', 44, '', 'Horror', '../Movies_images/The Nun/The Nunh.jpg', '../Movies_images/The Nun/The Nun1.jpg', '../Movies_images/The Nun/The Nun2.jpg', '../Movies_images/The Nun/The Nun3.jpg', 5, 'When a young nun at a cloistered abbey in Romania takes her own life, a priest with a haunted past and a novitiate on the threshold of her final vows are sent by the Vatican to investigate. Together, they uncover the order\'s unholy secret. Risking not only their lives but their faith and their very souls, they confront a malevolent force in the form of a demonic nun', 0, 'Movie', 'https://www.youtube.com/watch?v=pzD9zGcUNrw'),
('Zach snyder', 'Justice League', 45, '', 'Sci-Fi', '../Movies_images/Justice League/Justice Leagueh.jpg', '../Movies_images/Justice League/Justice League1.jpg', '../Movies_images/Justice League/Justice League2.jpg', '../Movies_images/Justice League/Justice League3.jpg', 5, 'Steppenwolf and his Parademons return after eons to capture Earth. However, Batman seeks the help of Wonder Woman to recruit and assemble Flash, Cyborg and Aquaman to fight the powerful new enemy.', 0, 'Movie', 'https://www.youtube.com/watch?v=3cxixDgHUYw'),
('Zach snyder', 'Justice League', 46, '', 'Sci-Fi', '../Movies_images/Justice League/Justice Leagueh.jpg', '../Movies_images/Justice League/Justice League1.jpg', '../Movies_images/Justice League/Justice League2.jpg', '../Movies_images/Justice League/Justice League3.jpg', 5, 'Steppenwolf and his Parademons return after eons to capture Earth. However, Batman seeks the help of Wonder Woman to recruit and assemble Flash, Cyborg and Aquaman to fight the powerful new enemy.', 0, 'Movie', 'https://www.youtube.com/watch?v=3cxixDgHUYw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`E_id`),
  ADD KEY `Entertainment_fk0` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD CONSTRAINT `Entertainment_fk0` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
