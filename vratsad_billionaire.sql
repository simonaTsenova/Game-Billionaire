-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2015 at 04:35 PM
-- Server version: 5.5.38-35.2-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vratsad_billionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficultylevels`
--

CREATE TABLE IF NOT EXISTS `difficultylevels` (
  `difficulty` varchar(100) NOT NULL,
  `money` int(11) NOT NULL,
  PRIMARY KEY (`difficulty`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `difficultylevels`
--

INSERT INTO `difficultylevels` (`difficulty`, `money`) VALUES
('1', 50),
('10', 2500),
('11', 5000),
('12', 10000),
('13', 25000),
('14', 50000),
('15', 100000),
('2', 100),
('3', 150),
('4', 200),
('5', 250),
('6', 500),
('7', 1000),
('8', 1500),
('9', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `answerA` varchar(200) NOT NULL,
  `answerB` varchar(200) NOT NULL,
  `answerC` varchar(200) NOT NULL,
  `answerD` varchar(200) NOT NULL,
  `correctAnswer` varchar(20) NOT NULL,
  `difficulty` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `difficulty` (`difficulty`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answerA`, `answerB`, `answerC`, `answerD`, `correctAnswer`, `difficulty`) VALUES
(1, 'What do fishermen hope to catch with their fishing rod?', 'Mermaid', 'Fish', 'Worms', 'Rocks', 'answerB', '1'),
(2, 'Какво бижу подарява младежът на избраницата си в знак на най-сериозните си брачни намерения?', 'Брошка', 'Пръстен', 'Гривна', 'Обеци', 'answerB', '2'),
(3, 'Кой събужда с целувка спящата красавица от едноименната приказка?', 'Красивият принц', 'Мистър Бийн', 'Хълк', 'Шрек', 'answerA', '3'),
(4, 'Коя от думите има по-малко срички?', 'Мура', 'Състезател', 'Хрян', 'Дантела', 'answerC', '4'),
(5, 'How many days are there in a leap-year?', '456', '365', '368', '366', 'answerD', '5'),
(6, 'What material is made of plants?', 'Cotton', 'Wool', 'Nylon', 'Glass', 'answerA', '6'),
(7, 'Кой от културните паметници не е построен след Освобождението?', 'Паметникът на свободата на връх Шипка', 'Руски паметник', 'Мадарският конник', 'Паметникът на връх Околчица', 'answerC', '7'),
(8, 'От каква националност е първият човек, излязъл в открития космос извън космическия апарат?', 'Американец', 'Руснак', 'Французин', 'Ирландец', 'answerB', '8'),
(9, 'Which logical game was invented by a hungarian engineer?', 'Tetris', 'Rubic''s Cube', 'Picture Puzzle', 'Chess', 'answerB', '9'),
(10, 'Кой град е известен като "Кралицата на Адриатика"?', 'Рим', 'Истанбул', 'Мадрид', 'Венеция', 'answerD', '10'),
(11, 'На кой герой от гръцката митология е наречено сухожилие на крака?', 'Херакъл', 'Персей', 'Ахил', 'Тезей', 'answerC', '11'),
(12, 'В кое японско бойно изкуство противниците се сражават с бамбукови мечове?', 'Карате', 'Джиу-Джицу', 'Кендо', 'Айкидо', 'answerC', '12'),
(13, 'Коя певица е собственик на звукозаписната компания "Маверик"?', 'Мадона', 'Бритни Спиърс', 'Уитни Хюстън', 'Марая Кери', 'answerA', '13'),
(14, 'Who''s made the first jeans?', 'Levi Strauss', 'Ethan Lee', 'Will Vrangler', 'Kevin Clain', 'answerA', '14'),
(15, 'Кой произнася фразата: "Имам една мечта" в една знаменита своя реч?', 'Уинстън Чърчил', 'Мартин Лутър Кинг', 'Владимир Илич Ленин', 'Шарл дьо Гол', 'answerB', '15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_levels` FOREIGN KEY (`difficulty`) REFERENCES `difficultylevels` (`difficulty`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
