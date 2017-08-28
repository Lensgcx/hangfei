<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` int(3) unsigned NOT NULL DEFAULT '0',
  `is_top_show` int(3) unsigned NOT NULL DEFAULT '0',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','彩妆','','','0','50','','','0','','1','5','172,185,178','0','1','');");
E_D("replace into `ecs_category` values('2','其他彩妆','','','1','50','','','0','','1','0','6','0','0','');");
E_D("replace into `ecs_category` values('3','彩妆套装','','','1','2','','台','1','','1','4','185,189,173,178','0','0','');");
E_D("replace into `ecs_category` values('4','眼部彩妆','','','1','0','','','1','','1','0','28','0','0','');");
E_D("replace into `ecs_category` values('5','面部彩妆','','','1','1','','','0','','1','5','18','0','0','');");
E_D("replace into `ecs_category` values('6','护肤','','','0','50','','','1','','1','5','211,212','1','1','');");
E_D("replace into `ecs_category` values('7','面部护理','','','6','50','','','0','','1','0','','0','1','');");
E_D("replace into `ecs_category` values('8','眼部护理','','','6','50','','','0','','1','0','','1','1','');");
E_D("replace into `ecs_category` values('9','其他护理','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('11','护肤套装','','','6','50','','','0','','1','0','','0','1','');");
E_D("replace into `ecs_category` values('12','男士','','','0','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('13','其他护理','','','12','3','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('14','面部护理','','','12','1','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('15','身体护理','','','12','2','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('16','香氛','','','0','50','','','1','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('17','身体护理','','','0','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('18','美容工具','','','0','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('19','洁面','','','7','50','','','0','','1','5','211,212','0','0','');");
E_D("replace into `ecs_category` values('20','面膜','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('21','卸妆','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('22','防晒','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('23','精华','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('24','化妆水','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('25','乳液','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('26','面霜','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('27','面油','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('28','保湿','','','8','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('29','去浮肿','','','8','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('30','去眼纹','','','8','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('31','去眼袋','','','8','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('32','去黑眼圈','','','8','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('33','护唇','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('34','喷雾','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('35','啫喱','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('36','角质按摩','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('37','祛痘祛斑','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('38','T区护理','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('39','颈霜','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('40','保健食品','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('41','美白','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('42','保湿','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('43','嫩肤','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('44','补水','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('45','紧致去皱','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('46','男士套装','','','12','4','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('47','眼线','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('48','眼影','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('49','睫毛','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('50','眉粉眉笔','','','4','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('51','BB霜','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('52','粉底','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('53','粉饼','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('54','散粉','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('55','隔离霜','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('56','眼影','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('57','修容','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('58','润唇','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('59','卸妆','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('60','浓密卷翘','','','3','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('61','腮红','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('62','唇妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('63','美甲','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('64','修容','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('65','遮瑕','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('66','底妆定妆','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('67','洁面','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('68','爽肤','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('69','乳液','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('70','眼霜','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('71','精华','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('72','面霜','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('73','面膜','','','14','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('74','沐浴','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('75','清洁','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('76','香体喷雾','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('77','阿迪达斯','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('78','防晒','','','13','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('79','剃须','','','13','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('80','BB霜','','','13','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('81','保湿','','','46','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('82','活肤','','','46','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('83','兰芝','','','46','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('84','欧莱雅','','','46','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('85','碧欧泉','','','46','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('86','女士香水','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('87','男士香水','','','16','51','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('88','中性香水','','','16','52','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('89','香水套装','','','16','53','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('90','淡香','','','86','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('91','花香调','','','86','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('92','迪奥','','','86','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('93','安娜苏','','','86','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('94','菲拉格慕','','','86','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('95','淡香','','','87','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('96','海洋香调','','','87','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('97','博柏利','','','87','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('98','宝格丽','','','87','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('99','阿迪达斯','','','87','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('100','淡香','','','88','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('101','花果香调','','','88','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('102','爱马仕','','','88','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('103','凯文克莱','','','88','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('104','淡香','','','89','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('105','香体','','','89','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('106','花香调','','','89','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('107','花果香调','','','89','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('108','草木香调','','','89','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('109','身体护理','','','17','60','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('110','丰胸瘦身','','','17','61','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('111','美发护发','','','17','62','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('112','洗护套装','','','17','63','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('113','沐浴','','','109','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('114','脱毛','','','109','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('115','手足护理','','','109','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('116','香体止汗','','','109','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('117','其他护理','','','109','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('118','丰胸塑臀','','','110','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('119','纤体瘦身','','','110','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('120','精油护理','','','110','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('121','洗发','','','111','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('122','护发','','','111','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('123','染发','','','111','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('124','焗油','','','111','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('125','美发造型','','','111','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('126','保湿','','','112','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('127','沐浴','','','112','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('128','护发养发','','','112','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('129','美体套装','','','112','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('130','美体工具','','','18','70','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('131','化妆工具','','','18','71','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('132','美发工具','','','18','72','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('133','日用收纳','','','18','73','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('134','美甲工具','','','130','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('135','瘦身纤体','','','130','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('136','化妆镜','','','131','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('137','辅助化妆','','','131','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('138','定妆','','','131','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('139','艾黛儿','','','131','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('140','护发养发','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('141','发型定型','','','132','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('142','收纳','','','133','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('143','化妆包','','','133','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('144','雅诗兰黛','','','133','50','','','0','','1','0','','0','0','');");

require("../../inc/footer.php");
?>