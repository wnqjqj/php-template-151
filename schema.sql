
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

use app;

DROP TABLE IF EXISTS `blog_members structure`;
CREATE TABLE `blog_members structure` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `blog_posts structure`;
CREATE TABLE `blog_posts structure` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-06-12 07:57:50
