<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_keywords1`;");
E_C("CREATE TABLE `wxch_keywords1` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `is_start` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_keywords1` values('14','关注回复图文','关注回复图文','4','','2','1','0');");
E_D("replace into `wxch_keywords1` values('26','关注回复图文','关注回复图文','4','','0','1','0');");
E_D("replace into `wxch_keywords1` values('27','关注回复文本','关注回复文本','3','欢迎光临  甜心100.做最专业的技术支持和最完善的售后模式！','93','1','1');");

require("../../inc/footer.php");
?>