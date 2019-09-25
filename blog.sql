-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2019 at 04:44 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

DROP TABLE IF EXISTS `blogger`;
CREATE TABLE IF NOT EXISTS `blogger` (
  `blogger_id` int(10) NOT NULL,
  `blogger_name` varchar(50) NOT NULL,
  `blogger_password` varchar(50) NOT NULL,
  `blogger_catagory` varchar(50) NOT NULL,
  PRIMARY KEY (`blogger_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`blogger_id`, `blogger_name`, `blogger_password`, `blogger_catagory`) VALUES
(1, 'Esaaj', 'hello', 'Sports'),
(2, 'Karthick', 'hello123', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `story_id` int(10) NOT NULL AUTO_INCREMENT,
  `story_title` varchar(100) NOT NULL,
  `story_tags` varchar(50) NOT NULL,
  `short_story` varchar(500) NOT NULL,
  `blogger_username` varchar(50) NOT NULL,
  `blogger_id` int(10) NOT NULL,
  `story_para1` varchar(5000) NOT NULL,
  `story_para2` varchar(5000) NOT NULL,
  `story_photo1` varchar(150) NOT NULL,
  `story_photo2` varchar(150) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `story_title`, `story_tags`, `short_story`, `blogger_username`, `blogger_id`, `story_para1`, `story_para2`, `story_photo1`, `story_photo2`, `cdate`) VALUES
(1, 'Flaws in Indian cricket team selection', 'cricket', 'Indian cricket think tank seems to be a very confused lot of late.', 'Esaaj', 1, 'Indian cricket think tank seems to be a very confused lot of late. The question of who should bat at number four in the shorter formats seems to have overwhelmed most of them and therefore the resultant confusion in team compositions in recent times including the recently concluded World Cup in England. The muddled thinking is glaringly obvious in the team selected for the just concluded T 20 series against South Africa at home where both batting and bowling combinations were glaringly inadequate.\r\n\r\nInternational sport is all about national pride, honour and winning as far as possible. No quarters are given and none expected from the opposition. There is no scope for complacency or classifying the opposition as weak or strong. Therefore, it is imperative that the nation fields the best available talent available at any given point. Did we do that against South Africa in the two T 20 matches played? Any cricket pundit worth his salt would say ‘no, we did not’. International matches like these cannot be used to experiment or hold trials or in Captain Kohli’s words ‘to challenge perceived comfort zones’. To resolve these issues, one has to make use of domestic tournaments and other non-official matches played with visiting sides.', 'We erred in the World Cup in England with over reliance on first four batsmen. The team against South Africa once again had only four batsmen including Suresh Iyer. It is still too early to classify Rishabh Pant as a top order batsman who can deliver. Neither his numbers nor his temperament exude that confidence. Four all-rounders, Pandya brothers, Jadeja and Washington Sunder, were supposed to provide batting depth but came a cropper when their time came to deliver in the last match. Two fast bowlers, both new to international cricket, and the four all-rounders completed the make shift bowling attack which never looked like a winning combination. Why both Chahal and Kuldeep Yadav, proven performers in this form of cricket were not selected is difficult to fathom. It will be ludicrous to assume they were rested. If Rahul and Manish made the cut why was one of them not played ahead of either Krunal or Washington Sunder to increase batting depth?\r\n\r\nKrunal Pandya and Washington Sunder are only ‘bits and pieces’ cricketers. Both are neither international level bowlers nor batsmen. Their individual sum total of batting and bowling prowess is not adequate to qualify them for a berth in the team. Hardik Pandya’s flamboyance has yet to translate into a genuine all-rounder talent that performs consistently. One hopes he comes of age sooner than later since a fast bowling all-rounder does make the team more balanced. Jadeja is perhaps the only one who merits a place in the team, particularly in absence of any genuine world class spinner in the squad. The reason given for this bizarre team selection was the need to try some new players for next year’s World T 20 cup in Australia. That event is still more than a year away and who knows who will make the team in October 2020. As things stand, subject to physical fitness, only Virat, Rohit and Bumrah can be considered as certainties for the World cup next year. All other spots are up for grabs and will go to players who are in form at the time of selection.\r\n\r\nSo, what should have been the team composition for the T 20 matches? A more balanced team would have been Rohit, Shikhar, Virat, Iyer, Manish Pandey (or Shubham Gill), Pant, Hardik Pandya, Jadeja, Chahal (or Kuldeep), Rahul Chahar and Saini. Presence of one experienced pacer like Bhuvneshwar Kumar or Shami would have helped a lot. Shubham Gill would have been a good choice as a reserve batsman ahead of Rahul. Whatever be the format of cricket, a team must have six batsmen and at least four genuine bowlers apart from a bowling all-rounder. In absence of an effective bowling all-rounder it may be prudent to go for a genuine fifth bowler. In recent times India has not had the luxury of a top order batsman who can also deliver a few overs of spin or pace if required in the mold of Sehwag, Yuvraj or Saurav Ganguly who invariably chipped in as the sixth bowling option. This perhaps makes things difficult for India but to include marginal all-rounders to boost bowling at the cost of batting is a losing proposition and best avoided. Two all-rounders, each being half bowler and half batsman, can never add up to one complete bowler and one complete batsman.', 'stored_image/indiateam.jpg', 'stored_image/bcci.jpg', '2019-09-25'),
(2, 'Podcast: Ferrari the favourites for the Belgium win?', 'sports', 'With the characteristics of the Spa-Francorchamps circuit theoretically benefiting Ferrari, could they finally get off the mark at the 2019 Belgian Grand Prix?', 'Esaaj', 1, 'With the highly-anticipated Mercedes vs Ferrari championship fight gradually fading over the first half of the season, the onus is on Ferrari to salvage race victories from their stuttering 2019 campaign.\r\n\r\nTheir early-season missed opportunities, coupled with Mercedes producing a car capable of challenging for victories at all venues, means that Ferrari are closer to finishing behind Red Bull in constructors championship than they are to the runaway leaders.', 'But with summer break over, Ferrari will be focusing on the next two races which could, in theory, suit the characteristics of their car. However, Mercedes will be bringing an upgraded power unit to Belgium, which the Silver Arrows are saying will bring improved performance and reliability.\r\n\r\nWith Sebastian Vettel still chasing his first win since last seasons Belgian Grand Prix, and Charles Leclerc still seeking his first Formula 1 victory, theres plenty of incentives for the two Ferrari drivers at Spa-Francorchamps.', 'stored_image/sebastian-vettel-ferrari-sf90-.jpg', 'stored_image/formual 1 sticker decal-550x550.jpg', '2019-09-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
