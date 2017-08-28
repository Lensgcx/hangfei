<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_cat`;");
E_C("CREATE TABLE `ecs_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_cat` values('8','2');");
E_D("replace into `ecs_goods_cat` values('8','5');");
E_D("replace into `ecs_goods_cat` values('16','3');");
E_D("replace into `ecs_goods_cat` values('16','5');");

require("../../inc/footer.php");
?>