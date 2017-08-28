<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('28','11','0','团购列表页右侧广告一','#','1390518412643487010.jpg','1390464000','1708588800','','','','1','1');");
E_D("replace into `ecs_ad` values('29','12','0','团购列表页右侧广告二','#','1390518430908793815.jpg','1390464000','1613980800','','','','2','1');");
E_D("replace into `ecs_ad` values('30','13','0','团购列表页右侧广告三','#','1390518446394401991.jpg','1390464000','1645516800','','','','2','1');");
E_D("replace into `ecs_ad` values('4','4','0','c1_6','#','1385061431186132996.jpg','1384761600','1545379200','','','','0','1');");
E_D("replace into `ecs_ad` values('5','4','0','c1_1','#','1385062115512889604.jpg','1385020800','1608537600','','','','0','1');");
E_D("replace into `ecs_ad` values('6','4','0','c2_6','#','1385061779185345983.jpg','1385020800','1829376000','','','','0','1');");
E_D("replace into `ecs_ad` values('7','4','0','c3_6','#','1385061801470000152.jpg','1385020800','1640073600','','','','0','1');");
E_D("replace into `ecs_ad` values('8','4','0','c2_1','#','1385062138557064424.jpg','1385020800','1734768000','','','','0','1');");
E_D("replace into `ecs_ad` values('9','4','0','c3_1','#','1385062158820738155.jpg','1385020800','1734768000','','','','0','1');");
E_D("replace into `ecs_ad` values('10','4','0','c1_16','#','1385062533817611084.jpg','1385020800','1703145600','','','','0','1');");
E_D("replace into `ecs_ad` values('11','4','0','c2_16','#','1385062555075564130.jpg','1385020800','1703145600','','','','0','1');");
E_D("replace into `ecs_ad` values('12','4','0','c3_16','#','1385062574350540187.jpg','1385020800','1671609600','','','','0','1');");
E_D("replace into `ecs_ad` values('13','4','0','c1_17','#','1385063109926844212.jpg','1385020800','1734768000','','','','0','1');");
E_D("replace into `ecs_ad` values('14','4','0','c2_17','#','1385063127710913762.jpg','1385020800','1671609600','','','','0','1');");
E_D("replace into `ecs_ad` values('15','4','0','c3_17','#','1385063145138551529.jpg','1385020800','1608537600','','','','0','1');");
E_D("replace into `ecs_ad` values('16','4','0','c1_12','#','1385063166350123929.jpg','1385020800','1640073600','','','','0','1');");
E_D("replace into `ecs_ad` values('17','4','0','c2_12','#','1385063184197402989.jpg','1385020800','1671609600','','','','0','1');");
E_D("replace into `ecs_ad` values('18','4','0','c3_12','#','1385063201094512286.jpg','1385020800','1671609600','','','','0','1');");
E_D("replace into `ecs_ad` values('19','5','0','cate_1_6','#','1387134240996968982.jpg','1387094400','1831449600','','','','0','1');");
E_D("replace into `ecs_ad` values('20','5','0','cate_2_6','#','1387134436631919403.jpg','1387094400','1673683200','','','','0','1');");
E_D("replace into `ecs_ad` values('21','5','0','cate_3_6','#','1387134610289875197.jpg','1387094400','1673683200','','','','0','1');");
E_D("replace into `ecs_ad` values('22','6','0','sad_1_6','#','1388712037887027364.jpg','1388649600','1549008000','','','','0','1');");
E_D("replace into `ecs_ad` values('23','6','0','sad_2_6','#','1388712059394990489.jpg','1388649600','1580544000','','','','0','1');");
E_D("replace into `ecs_ad` values('24','7','0','团购列表左侧广告一','#','1390350714139310283.jpg','1390291200','1645344000','','','','4','1');");
E_D("replace into `ecs_ad` values('25','8','0','团购列表左侧广告二','#','1390350730168563820.jpg','1390291200','1582185600','','','','1','1');");
E_D("replace into `ecs_ad` values('26','9','0','团购列表左侧广告三','#','1390350744473328295.jpg','1390291200','1392883200','','','','0','1');");
E_D("replace into `ecs_ad` values('27','10','0','团购列表左侧广告四','#','1390350760626738934.jpg','1390291200','1708416000','','','','0','1');");

require("../../inc/footer.php");
?>