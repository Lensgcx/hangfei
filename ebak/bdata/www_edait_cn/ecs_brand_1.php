<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `brand_banner` varchar(80) NOT NULL COMMENT '商品品牌banner',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','兰蔻','1385070090962310856.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('16','我的美白日记','1385072100245819895.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('2','雅诗兰黛','1385070574091897739.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('14','迪奥','1385071888294863849.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('15','茱莉蔻','1385071998799359953.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('59','英国AA网','','','','50','1','');");
E_D("replace into `ecs_brand` values('60','雅漾','','','','50','1','');");
E_D("replace into `ecs_brand` values('61','契尔氏','','','','50','1','');");
E_D("replace into `ecs_brand` values('62','彼得罗夫','','','','50','1','');");
E_D("replace into `ecs_brand` values('54','欧珀莱','','','','50','1','');");
E_D("replace into `ecs_brand` values('55','丝塔芙','','','','50','1','');");
E_D("replace into `ecs_brand` values('56','植村秀','','','','50','1','');");
E_D("replace into `ecs_brand` values('57','婵真','','','','50','1','');");
E_D("replace into `ecs_brand` values('58','嘉娜宝','','','','50','1','');");
E_D("replace into `ecs_brand` values('50','瑞尔薇黛','','','','50','1','');");
E_D("replace into `ecs_brand` values('51','和汉方','','','','50','1','');");
E_D("replace into `ecs_brand` values('52','可莱丝','','','','50','1','');");
E_D("replace into `ecs_brand` values('53','泊美','','','','50','1','');");
E_D("replace into `ecs_brand` values('45','悠香伊','','','','50','1','');");
E_D("replace into `ecs_brand` values('46','SK-II','','','','50','1','');");
E_D("replace into `ecs_brand` values('47','姗娜','','','','50','1','');");
E_D("replace into `ecs_brand` values('48','韩国思美兰','','','','50','1','');");
E_D("replace into `ecs_brand` values('49','佰草集','','','','50','1','');");
E_D("replace into `ecs_brand` values('7','倩碧','1385070660861937745.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('12','娇兰','1385071326106067039.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('13','雅顿','1385071484398955050.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('43','阿玛尼','1385080708963724707.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('44','欧树','1385662855656952777.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('9','贝玲妃','1385074856935793708.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('20','安娜苏','1385075349519828204.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('22','谜尚','1385076120760632260.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('10','蜜丝佛陀','1385075742122482555.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('21','纪梵希','1385075993147931634.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('40','阿迪达斯','1385080175714409282.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('41','兰芝','1385080502608521813.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('42','科颜氏','1385080599437329243.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('17','美体小铺','1385072216409455201.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('18','碧欧泉','1385072323411408978.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('19','香奈儿','1385074662344849612.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('23','欧莱雅','1385076231378742775.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('24','思亲肤','1385076375210486006.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('25','浮生若梦','1385076518149939285.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('26','博柏利','1385076800385519114.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('27','大卫杜夫','1385076915245433330.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('28','马克.雅克布','1385077155008131442.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('29','菲拉格慕','1385077477188890125.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('30','范思哲','1385077604377412545.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('31','凯文克莱','1385077748974263151.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('32','娇韵诗','1385078397715580649.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('33','资生堂','1385079115095792076.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('34','菲诗小铺','1385079318413536424.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('35','多芬','1385079444533254362.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('36','高丝','1385079568646758244.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('37','NYR','1385079676209216392.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('38','露得清','1385079770833052568.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('39','魅力匙','1385079890162676741.jpg','','http://','50','1','');");
E_D("replace into `ecs_brand` values('63','希思黎','','','','50','1','');");
E_D("replace into `ecs_brand` values('64','DHC','','','','50','1','');");
E_D("replace into `ecs_brand` values('65','JUJU','','','','50','1','');");
E_D("replace into `ecs_brand` values('66','理肤泉','','','','50','1','');");
E_D("replace into `ecs_brand` values('67','蓓丽','','','','50','1','');");
E_D("replace into `ecs_brand` values('68','曼秀雷敦','','','','50','1','');");
E_D("replace into `ecs_brand` values('69','肌研','','','','50','1','');");
E_D("replace into `ecs_brand` values('70','玫琳凯','','','','50','1','');");

require("../../inc/footer.php");
?>