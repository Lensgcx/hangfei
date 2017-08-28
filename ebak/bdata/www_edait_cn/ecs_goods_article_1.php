<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_article`;");
E_C("CREATE TABLE `ecs_goods_article` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `article_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`article_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_article` values('1','27','1');");
E_D("replace into `ecs_goods_article` values('8','28','0');");
E_D("replace into `ecs_goods_article` values('9','8','1');");
E_D("replace into `ecs_goods_article` values('13','29','0');");
E_D("replace into `ecs_goods_article` values('14','29','0');");
E_D("replace into `ecs_goods_article` values('14','31','0');");
E_D("replace into `ecs_goods_article` values('23','8','1');");
E_D("replace into `ecs_goods_article` values('23','30','0');");
E_D("replace into `ecs_goods_article` values('23','31','0');");
E_D("replace into `ecs_goods_article` values('32','8','1');");
E_D("replace into `ecs_goods_article` values('32','30','0');");

require("../../inc/footer.php");
?>