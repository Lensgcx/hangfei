<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_nav`;");
E_C("CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','cat_all.php','icon_indexn_01.png','middle');");
E_D("replace into `ecs_touch_nav` values('2',NULL,'0','帮助中心','1','0','0','article_cat.php?id=3','icon_indexn_02.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','个人中心','1','0','0','user.php','icon_indexn_03.png','middle');");
E_D("replace into `ecs_touch_nav` values('4',NULL,'0','分享','1','0','0','ectouch.php?act=share','icon_indexn_04.png','middle');");
E_D("replace into `ecs_touch_nav` values('5',NULL,'0','联系我们','1','0','0','ectouch.php?act=contact','icon_indexn_05.png','middle');");
E_D("replace into `ecs_touch_nav` values('6','','0','团购','1','0','0','group_buy.php','icon_indexn_06.png','middle');");
E_D("replace into `ecs_touch_nav` values('7','','0','积分商城','1','0','0','exchange.php','icon_indexn_07.png','middle');");
E_D("replace into `ecs_touch_nav` values('8','','0','电脑版','1','0','0','../?computer=1','icon_indexn_08.png','middle');");

require("../../inc/footer.php");
?>