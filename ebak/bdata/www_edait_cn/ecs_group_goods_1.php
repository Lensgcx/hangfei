<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配件分组',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('9','4','58.00','1','0');");
E_D("replace into `ecs_group_goods` values('9','3','68.00','1','0');");
E_D("replace into `ecs_group_goods` values('9','7','100.00','1','0');");
E_D("replace into `ecs_group_goods` values('14','5','20.00','1','0');");
E_D("replace into `ecs_group_goods` values('14','6','42.00','1','0');");
E_D("replace into `ecs_group_goods` values('14','7','100.00','1','0');");
E_D("replace into `ecs_group_goods` values('123','55','159.00','1','2');");
E_D("replace into `ecs_group_goods` values('123','48','459.00','1','1');");
E_D("replace into `ecs_group_goods` values('123','51','209.00','1','1');");
E_D("replace into `ecs_group_goods` values('123','49','179.00','1','1');");
E_D("replace into `ecs_group_goods` values('123','53','679.00','1','2');");

require("../../inc/footer.php");
?>