<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','1','620.00','399.00','颜色:灰色 \n','1','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('2','2','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','5','620.00','399.00','颜色:灰色 \n','5','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('3','3','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('4','3','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('5','3','113',' 希思黎百合保湿洁面乳250ml','ECS000113','0','1','720.00','420.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','4','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('7','5','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','2','820.00','439.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('8','6','57','凯文克莱BE中性香水200ml','ECS000057','0','1','570.00','259.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','7','57','凯文克莱BE中性香水200ml','ECS000057','0','1','570.00','259.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('10','8','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('11','8','53',' 迪奥EDP真我女士香水50ml','ECS000053','0','1','940.00','679.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('12','9','53',' 迪奥EDP真我女士香水50ml','ECS000053','0','3','940.00','679.00','','3','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','10','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','3','950.00','669.00','颜色:白色 \n','3','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('14','11','57','凯文克莱BE中性香水200ml','ECS000057','0','2','570.00','259.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('15','12','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','1','620.00','399.00','颜色:灰色 \n','0','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('16','13','56','范思哲绅情男士香水Q版5ml','ECS000056','0','1','120.00','45.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('17','14','14','谜尚红色BB霜21#50ml','ECS000014','7','1','208.00','99.00','颜色:黑色 \n','0','1','','0','0','213');");
E_D("replace into `ecs_order_goods` values('18','15','120','曼秀雷敦洁清爽卸妆洁面泡200ml','ECS000120','0','1','120.00','45.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','16','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','17','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','1','950.00','669.00','颜色:白色 \n','0','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('21','18','10','思亲肤90度卷长睫毛膏10g','ECS000010','9','1','78.00','49.90','颜色:黑色 \n','0','1','','0','0','239');");
E_D("replace into `ecs_order_goods` values('22','19','65','KOSE高丝美白深层滋润护手霜35g','ECS000065','0','1','49.00','25.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('23','20','47','浮生若梦丝柔蜜粉08#（紫色)28g','ECS000047','0','1','345.00','229.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('24','21','46','香奈儿斜纹软呢星彩腮红30#5.5g','ECS000046','0','1','449.00','339.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('25','22','122','玫琳凯中性洗面乳绿2号','ECS000122','0','1','105.00','69.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('26','23','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','1','950.00','669.00','颜色:白色 \n','0','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('27','24','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('28','25','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('29','26','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','459.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('30','27','109','兰芝多效四合一泡沫洗面奶180ml','ECS000109','0','1','205.00','120.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','27','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','1','620.00','399.00','颜色:灰色 \n','0','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('32','27','116','JUJU透明质酸保湿洗面膏120g','ECS000116','0','1','150.00','69.90','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('33','27','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('34','28','115','DHC橄榄滋养皂90g','ECS000115','0','1','110.00','65.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('35','29','12','雅顿保湿调理露200ml','ECS000012','20','1','200.00','50.00','外        观: 红色','0','1','','0','0','321,2');");
E_D("replace into `ecs_order_goods` values('36','30','16','雅诗兰黛鲜活营养红石榴眼霜15ml','ECS000016','17','1','481.00','355.00','外        观:红色 \n','0','1','','0','0','318');");
E_D("replace into `ecs_order_goods` values('37','31','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('38','32','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('39','33','105','婵真银杏天然泡沫洁面霜200g','ECS000105','0','1','118.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('40','34','66','NYR薰衣草精油10ml','ECS000066','0','1','85.00','65.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('41','35','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','2','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('42','36','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('43','37','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('44','37','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('45','37','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('46','38','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('47','39','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('48','40','10','思亲肤90度卷长睫毛膏10g','ECS000010','9','1','78.00','49.90','颜色:黑色 \n','0','1','','0','0','239');");
E_D("replace into `ecs_order_goods` values('49','41','107','英国AA网洋甘菊手工皂125g','ECS000107','0','1','75.00','29.90','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('50','42','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('51','43','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('52','44','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('53','45','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('54','46','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('55','47','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('56','48','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('57','50','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','1','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('58','51','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','2','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('59','52','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('60','53','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('61','54','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('62','55','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('63','56','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('64','57','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('65','58','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('66','59','149','测试商品','ECS000149','0','2','36.00','30.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('67','60','149','测试商品','ECS000149','0','2','36.00','30.00','','0','1','','0','0','');");

require("../../inc/footer.php");
?>