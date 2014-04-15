-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2014 at 07:58 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodr`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `food_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic_link` text NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `pic_link`, `title`, `detail`, `timestamp`) VALUES
(1, 'http://www.oknation.net/blog/home/user_data/file_data/201309/29/5650683d6.jpg', 'ผัดกระเพรา', 'หากถามว่า อาหารจานเดียวยอดนิยมคืออะไร? ก็น่าจะได้คำตอบว่า ผัดกระเพรา ไข่ดาว เป็นแน่แท้ แต่ละคนอาจจะทำกันแตกต่างกันน่าดู บ้างอาจจะชื่นชอบใช้น้ำปลาให้ความเค็ม ก็ดูหอมไปอีกแบบ', '2014-03-22 12:26:31'),
(2, 'http://www.อาหารอร่อย.com/wp-content/uploads/2012/02/chili-pork-20-600x360.jpg', 'หมูผัดพริกเเกงถั่วฝักยาว', 'เป็นเมนูแสนอร่อยของใครหลายคนที่ชอบทานพริกแกง ด้วยรสชาติจัดจ้านและเข้มข้น ของเครื่องพริกแกง', '2014-03-22 12:25:47'),
(3, 'http://4.bp.blogspot.com/-K6pBVwe6dDw/UfziG42boeI/AAAAAAAAALw/0RBP4XpsyOQ/s1600/green+curry+chicken.jpg', 'แกงเขียวหวานไก่', 'เป็นอีกเมนูหนึ่งที่ได้รับความนิยมกันมาก ในหมู่ผู้บริโภคไม่ว่าจะเป็นข้าวราดแกง หรือรับประทานกับขนมจีนก็อร่อยไม่น้อย ซึ่งเนื้อสัตว์ที่จะนำมาทำแกงเขียวหวาน ก็สามารถทำเปลี่ยนไปได้เรื่อยๆไม่ว่าจะเป็น เนื้อวัว เนื้อหมู ไก่ ปลา กุ้ง ลูกชิ้นปลากราย หรือเมนูผักเพื่อสุขภาพก็ได้เช่นเดียวกัน แกงเขียวหวาน มีความหอมของพริกแกง และความหอมของเครื่องเทศ มีรสหวานมันของกะทิ นิยมรับประทานกับข้าวสวยหรือขนมจีนก็จะเพิ่มความอร่อยยิ่งขึ้น', '2014-03-22 12:27:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
