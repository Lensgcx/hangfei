<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','夺宝奇兵之诺基亚N96','新一轮的夺宝开始了\n本期是 诺基亚n96','0','23','0','诺基亚N96','1242107580','1242193980','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('2','夺宝奇兵之夏新N7','本期的夺宝奖品是 夏新N7','0','17','0','夏新N7','1242107820','1250661420','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('11','P806','','1','24','0','P806','1384848000','1826956800','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:8;s:5:\"price\";d:55;}}s:15:\"restrict_amount\";i:50;s:13:\"gift_integral\";i:60;s:7:\"deposit\";d:60;}');");
E_D("replace into `ecs_goods_activity` values('12','KD876','','1','1','0','KD876','1384848000','1921651200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:9;s:5:\"price\";d:80;}}s:15:\"restrict_amount\";i:9;s:13:\"gift_integral\";i:90;s:7:\"deposit\";d:90;}');");
E_D("replace into `ecs_goods_activity` values('4','拍卖活动——索爱C702c','','2','10','0','索爱C702c','1242144000','1242403200','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:0;s:9:\"end_price\";i:0;s:9:\"amplitude\";d:20;s:6:\"no_top\";i:1;}');");
E_D("replace into `ecs_goods_activity` values('5','摩托罗拉E8 大礼包','礼包大优惠','4','31','0','摩托罗拉E8 ','1242110400','1252046400','0','a:1:{s:13:\"package_price\";s:4:\"1430\";}');");
E_D("replace into `ecs_goods_activity` values('6','诺基亚N85大礼包','诺基亚N85超值大礼包','4','32','0','诺基亚N85','1242110760','1248936360','0','a:1:{s:13:\"package_price\";s:4:\"3150\";}');");
E_D("replace into `ecs_goods_activity` values('19','希思黎轻柔护肤','希思黎轻柔护肤 希思黎轻柔护肤 希思黎轻柔护肤 希思黎轻柔护肤','2','1','14','希思黎轻柔护肤西柚柔肤水250ml','1388908800','1767945600','0','a:5:{s:7:\"deposit\";d:10;s:11:\"start_price\";d:10;s:9:\"end_price\";d:200;s:9:\"amplitude\";d:20;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('13','索爱原装M2卡读卡器','','1','5','0','索爱原装M2卡读卡器','1384848000','1953187200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:18;}}s:15:\"restrict_amount\";i:10;s:13:\"gift_integral\";i:20;s:7:\"deposit\";d:20;}');");
E_D("replace into `ecs_goods_activity` values('9','诺基亚N85原装充电器','','1','4','0','诺基亚N85原装充电器','1384848000','1826956800','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:50;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:100;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('10','金立 A30','','1','21','0','金立 A30','1384848000','1921651200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:3;s:5:\"price\";d:78;}}s:15:\"restrict_amount\";i:30;s:13:\"gift_integral\";i:30;s:7:\"deposit\";d:30;}');");
E_D("replace into `ecs_goods_activity` values('14','雅诗兰黛红石榴鲜活晚霜50ml新','','1','35','0','雅诗兰黛红石榴鲜活晚霜50ml新','1384848000','1953187200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:8;s:5:\"price\";d:489;}}s:15:\"restrict_amount\";i:10;s:13:\"gift_integral\";i:489;s:7:\"deposit\";d:489;}');");
E_D("replace into `ecs_goods_activity` values('15','兰蔻超塑颜5D提拉日霜法国版50ml','','1','34','0','兰蔻超塑颜5D提拉日霜法国版50ml','1384848000','1858579200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:589;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:589;s:7:\"deposit\";d:589;}');");
E_D("replace into `ecs_goods_activity` values('16','兰蔻小黑瓶精华肌底液（新版）30ml','','1','33','0','兰蔻小黑瓶精华肌底液（新版）30ml','1384848000','1826956800','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:4;s:5:\"price\";d:498;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:400;s:7:\"deposit\";d:400;}');");
E_D("replace into `ecs_goods_activity` values('17','雅顿保湿调理露200ml','','1','12','0','雅顿保湿调理露200ml','1384848000','1921651200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:5;s:5:\"price\";d:78;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:50;s:7:\"deposit\";d:50;}');");
E_D("replace into `ecs_goods_activity` values('20',' 迪奥EDP真我女士香水50ml','','1','53','0',' 迪奥EDP真我女士香水50ml','1389254400','1390377600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:280;}}s:15:\"restrict_amount\";i:20;s:13:\"gift_integral\";i:300;s:7:\"deposit\";d:300;}');");
E_D("replace into `ecs_goods_activity` values('21','迪奥红毒女士香水EDT 50ml','','1','123','0','迪奥红毒女士香水EDT 50ml','1389254400','1390604400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:260;}}s:15:\"restrict_amount\";i:30;s:13:\"gift_integral\";i:300;s:7:\"deposit\";d:300;}');");

require("../../inc/footer.php");
?>