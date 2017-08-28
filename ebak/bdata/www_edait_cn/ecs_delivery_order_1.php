<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20131216172137633','2013121684882','1','','1387156881','5','申通快递','0','admin','111','111','1','4','55','541','','222@qq.com','111','111','11','','','等待所有商品备齐后再发','0.00','15.00','1387156897','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20131216172394315','2013121628773','2','','1387157023','5','申通快递','0','admin','111','333','1','7','101','902','','222@qq.com','444','5655','','','','等待所有商品备齐后再发','0.00','15.00','1387157039','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20140121173059551','2014012127768','4','','1390267776','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390267853','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20140123095230972','2014012383197','6','','1390413144','5','申通快递','0','admin','111111','agagqarygsae','1','5','65','626','','123456@qq.com','235645','12345678944','','','','等待所有商品备齐后再发','0.00','15.00','1390413171','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20140123095866393','2014012386380','7','','1390413515','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413539','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20140123100066729','2014012362771','8','','1390413591','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413615','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20140123100215181','2014012338692','9','','1390413714','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413735','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20140123100344414','2014012367996','10','','1390413797','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413815','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20150126224652626','2015012676129','50','2015012676129','1422252566','6','邮局平邮','123','tianxin100','uut','甘肃嘉峪关嘉峪关市yjjh','1','5','66','633','','','','12668','','','','等待所有商品备齐后再发','0.00','3.50','1422254795','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20150126230276594','2015012666048','52','2015012666048','1422255608','6','邮局平邮','0','tianxin100','cs1','北京北京东城区time','1','2','52','500','','','','123654','','','','等待所有商品备齐后再发','0.00','3.50','1422255765','0','0','0');");
E_D("replace into `ecs_delivery_order` values('11','20150126231792785','2015012674208','53','2015012674208','1422256613','7','运费到付','125','tianxin100','q','广东佛山顺德区qw','1','6','80','748','','','','12','','','','等待所有商品备齐后再发','0.00','0.00','1422256639','0','0','0');");

require("../../inc/footer.php");
?>