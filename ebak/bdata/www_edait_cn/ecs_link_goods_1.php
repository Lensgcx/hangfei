<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_double` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('12','9','0','1');");
E_D("replace into `ecs_link_goods` values('12','10','0','1');");
E_D("replace into `ecs_link_goods` values('12','11','0','1');");
E_D("replace into `ecs_link_goods` values('9','13','1','1');");
E_D("replace into `ecs_link_goods` values('13','9','1','1');");
E_D("replace into `ecs_link_goods` values('14','9','0','1');");
E_D("replace into `ecs_link_goods` values('14','13','0','1');");
E_D("replace into `ecs_link_goods` values('23','9','0','1');");
E_D("replace into `ecs_link_goods` values('13','23','1','1');");
E_D("replace into `ecs_link_goods` values('23','13','1','1');");
E_D("replace into `ecs_link_goods` values('123','52','1','1');");
E_D("replace into `ecs_link_goods` values('123','55','1','1');");
E_D("replace into `ecs_link_goods` values('52','123','1','1');");
E_D("replace into `ecs_link_goods` values('55','123','1','1');");
E_D("replace into `ecs_link_goods` values('123','49','1','1');");
E_D("replace into `ecs_link_goods` values('123','51','1','1');");
E_D("replace into `ecs_link_goods` values('51','123','1','1');");
E_D("replace into `ecs_link_goods` values('49','123','1','1');");
E_D("replace into `ecs_link_goods` values('123','53','1','1');");
E_D("replace into `ecs_link_goods` values('123','48','1','1');");
E_D("replace into `ecs_link_goods` values('53','123','1','1');");
E_D("replace into `ecs_link_goods` values('48','123','1','1');");
E_D("replace into `ecs_link_goods` values('16','80','0','1');");
E_D("replace into `ecs_link_goods` values('16','82','0','1');");
E_D("replace into `ecs_link_goods` values('16','85','0','1');");
E_D("replace into `ecs_link_goods` values('16','88','0','1');");
E_D("replace into `ecs_link_goods` values('16','90','0','1');");
E_D("replace into `ecs_link_goods` values('16','91','0','1');");

require("../../inc/footer.php");
?>