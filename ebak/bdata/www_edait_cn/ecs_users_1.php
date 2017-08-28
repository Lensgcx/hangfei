<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `wxid` char(28) NOT NULL,
  `wxch_bd` char(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('140','','','tianxin140','63069bf52ae5a4eb4dcfa45cebe3001b','','','0','0000-00-00','0.00','0.00','0','0','0','0','1422282989','0000-00-00 00:00:00','122.198.61.26','15','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'oog1Yt0AlBCuOEdUMr5AFyst05cM','ok');");
E_D("replace into `ecs_users` values('139','','','111111','a907957b6ff6aa6097c60426af253810','','','0','0000-00-00','0.00','0.00','0','0','41','0','1422283260','0000-00-00 00:00:00','183.34.95.80','3','0','0','3405','0','0','0','','','','','','','0','0.00',NULL,NULL,'','');");
E_D("replace into `ecs_users` values('138','','','tianxin138','63069bf52ae5a4eb4dcfa45cebe3001b','','','0','0000-00-00','0.00','0.00','0','0','0','0','0','0000-00-00 00:00:00','','0','99','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'oog1Yty-35BxI97HN2hSDoS-Dyiw','ok');");
E_D("replace into `ecs_users` values('137','','','tianxin137','63069bf52ae5a4eb4dcfa45cebe3001b','','','0','0000-00-00','0.00','0.00','10','0','0','0','1422284809','0000-00-00 00:00:00','183.34.95.80','4','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'oog1Yt9spi8jRGx92QJ-qUkuOhBQ','ok');");

require("../../inc/footer.php");
?>