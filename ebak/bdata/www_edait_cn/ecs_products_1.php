<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','32','163','','100');");
E_D("replace into `ecs_products` values('2','24','167','','100');");
E_D("replace into `ecs_products` values('3','23','175','','100');");
E_D("replace into `ecs_products` values('4','21','188','','20');");
E_D("replace into `ecs_products` values('5','20','194','','13');");
E_D("replace into `ecs_products` values('6','17','201','','999');");
E_D("replace into `ecs_products` values('7','14','213','','4');");
E_D("replace into `ecs_products` values('8','13','217','','8');");
E_D("replace into `ecs_products` values('9','10','239','','6');");
E_D("replace into `ecs_products` values('10','10','240','','12');");
E_D("replace into `ecs_products` values('11','9','227','','9');");
E_D("replace into `ecs_products` values('12','9','226','','3');");
E_D("replace into `ecs_products` values('13','8','231','','17');");
E_D("replace into `ecs_products` values('14','1','237','','995');");
E_D("replace into `ecs_products` values('15','16','319','ECS000016g_p15','1000');");
E_D("replace into `ecs_products` values('16','16','320','ECS000016g_p16','1000');");
E_D("replace into `ecs_products` values('17','16','318','ECS000016g_p17','1000');");
E_D("replace into `ecs_products` values('18','12','322','ECS000012g_p18','1000');");
E_D("replace into `ecs_products` values('19','12','323','ECS000012g_p19','1000');");
E_D("replace into `ecs_products` values('20','12','321','ECS000012g_p20','1000');");

require("../../inc/footer.php");
?>