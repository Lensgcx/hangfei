<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1','','0','1','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('2','2','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1','','0','5','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('3','3','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1','','0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('4','4','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1','','0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('7','6','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','7','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('9','8','9','11','','雅诗兰黛第六代特润精华露50ml','雅诗兰黛','ECS000009','1','','0','3','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('10','9','17','6','','娇韵诗超V型纤容紧致瘦脸面膜75ml','','ECS000017','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('11','10','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','11','114','0','','思亲肤绿茶泡沫洁面摩丝160ml','思亲肤','ECS000114','1',NULL,'0','1','');");

require("../../inc/footer.php");
?>