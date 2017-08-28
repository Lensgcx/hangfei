<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','1','0','2','0','1','1387156893');");
E_D("replace into `ecs_order_action` values('2','1','admin','5','5','2','0','','1387156897');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','1','2','1','','1387156904');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','0','2','0','1','1387157036');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','5','2','0','','1387157039');");
E_D("replace into `ecs_order_action` values('6','2','admin','1','1','2','1','','1387157046');");
E_D("replace into `ecs_order_action` values('7','4','admin','1','0','2','0','gvhdtjdtyj','1390267814');");
E_D("replace into `ecs_order_action` values('8','4','admin','1','3','2','0','','1390267846');");
E_D("replace into `ecs_order_action` values('9','4','admin','5','5','2','0','tyi76','1390267854');");
E_D("replace into `ecs_order_action` values('10','4','admin','1','1','2','1','','1390267904');");
E_D("replace into `ecs_order_action` values('11','6','admin','1','0','0','0','','1390413159');");
E_D("replace into `ecs_order_action` values('12','6','admin','1','0','2','0','ityiu','1390413165');");
E_D("replace into `ecs_order_action` values('13','6','admin','5','5','2','0','','1390413171');");
E_D("replace into `ecs_order_action` values('14','6','admin','1','1','2','1','','1390413197');");
E_D("replace into `ecs_order_action` values('15','7','admin','1','0','0','0','','1390413526');");
E_D("replace into `ecs_order_action` values('16','7','admin','1','0','2','0','dftuftu','1390413531');");
E_D("replace into `ecs_order_action` values('17','7','admin','5','5','2','0','','1390413539');");
E_D("replace into `ecs_order_action` values('18','7','admin','1','1','2','1','','1390413545');");
E_D("replace into `ecs_order_action` values('19','8','admin','1','0','0','0','','1390413603');");
E_D("replace into `ecs_order_action` values('20','8','admin','1','0','2','0','r6ir','1390413608');");
E_D("replace into `ecs_order_action` values('21','8','admin','5','5','2','0','e58u68','1390413615');");
E_D("replace into `ecs_order_action` values('22','8','admin','1','1','2','1','','1390413621');");
E_D("replace into `ecs_order_action` values('23','9','admin','1','0','0','0','','1390413724');");
E_D("replace into `ecs_order_action` values('24','9','admin','1','0','2','0','e5r8uer568','1390413730');");
E_D("replace into `ecs_order_action` values('25','9','admin','5','5','2','0','rt6','1390413735');");
E_D("replace into `ecs_order_action` values('26','9','admin','1','1','2','1','','1390413742');");
E_D("replace into `ecs_order_action` values('27','10','admin','1','0','0','0','','1390413805');");
E_D("replace into `ecs_order_action` values('28','10','admin','1','0','2','0','e5r6ue4','1390413810');");
E_D("replace into `ecs_order_action` values('29','10','admin','5','5','2','0','','1390413815');");
E_D("replace into `ecs_order_action` values('30','10','admin','1','1','2','1','','1390413820');");
E_D("replace into `ecs_order_action` values('31','50','tianxin100','1','0','0','0','','1422254764');");
E_D("replace into `ecs_order_action` values('32','50','tianxin100','1','0','2','0','w','1422254788');");
E_D("replace into `ecs_order_action` values('33','50','tianxin100','5','5','2','0','erw','1422254795');");
E_D("replace into `ecs_order_action` values('34','50','tianxin100','1','1','2','1','erw','1422254795');");
E_D("replace into `ecs_order_action` values('35','50','买家','5','2','2','0','','1422255168');");
E_D("replace into `ecs_order_action` values('36','52','tianxin100','1','0','0','0','','1422255751');");
E_D("replace into `ecs_order_action` values('37','52','tianxin100','1','0','2','0','77','1422255761');");
E_D("replace into `ecs_order_action` values('38','52','tianxin100','5','5','2','0','','1422255765');");
E_D("replace into `ecs_order_action` values('39','52','tianxin100','1','1','2','1','','1422255765');");
E_D("replace into `ecs_order_action` values('40','53','tianxin100','1','0','0','0','','1422256629');");
E_D("replace into `ecs_order_action` values('41','53','tianxin100','1','0','2','0','o','1422256636');");
E_D("replace into `ecs_order_action` values('42','53','tianxin100','5','5','2','0','','1422256639');");
E_D("replace into `ecs_order_action` values('43','53','tianxin100','1','1','2','1','','1422256640');");
E_D("replace into `ecs_order_action` values('44','53','买家','5','2','2','0','','1422256659');");

require("../../inc/footer.php");
?>