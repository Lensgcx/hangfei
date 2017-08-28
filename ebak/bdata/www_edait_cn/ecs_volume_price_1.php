<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_volume_price`;");
E_C("CREATE TABLE `ecs_volume_price` (
  `price_type` tinyint(1) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `volume_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `volume_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`price_type`,`goods_id`,`volume_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_volume_price` values('1','1','5','1366.00');");
E_D("replace into `ecs_volume_price` values('1','9','5','2100.00');");
E_D("replace into `ecs_volume_price` values('1','9','3','2200.00');");
E_D("replace into `ecs_volume_price` values('1','13','3','1200.00');");
E_D("replace into `ecs_volume_price` values('1','13','5','1150.00');");

require("../../inc/footer.php");
?>