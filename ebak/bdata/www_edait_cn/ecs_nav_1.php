<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2','','0','选购中心','0','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('3','','0','查看购物车','0','0','0','flow.php','top');");
E_D("replace into `ecs_nav` values('4','','0','团购商品','1','20','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('6','','0','标签云','0','5','6','tag_cloud.php','top');");
E_D("replace into `ecs_nav` values('7','','0','免责条款','0','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('8','','0','隐私保护','0','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('9','','0','咨询热点','0','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('10','','0','联系我们','0','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('11','','0','公司简介','0','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('12','','0','批发方案','0','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('14','','0','配送方式','0','7','0','myship.php','bottom');");
E_D("replace into `ecs_nav` values('18','c','4','眼部彩妆','1','14','0','category.php?id=5','middle');");
E_D("replace into `ecs_nav` values('23','','0','报价单','0','6','0','quotation.php','top');");
E_D("replace into `ecs_nav` values('26','c','3','彩妆套装','1','13','0','category.php?id=3','middle');");
E_D("replace into `ecs_nav` values('27','c','6','护肤','1','15','0','category.php?id=6','middle');");
E_D("replace into `ecs_nav` values('28','c','8','眼部护理','0','22','0','category.php?id=8','middle');");

require("../../inc/footer.php");
?>