<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=324 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('238','1','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ecs_goods_attr` values('237','1','185','灰色','');");
E_D("replace into `ecs_goods_attr` values('236','1','191','支持','0');");
E_D("replace into `ecs_goods_attr` values('235','1','190','支持','0');");
E_D("replace into `ecs_goods_attr` values('234','1','189','2.4英寸','0');");
E_D("replace into `ecs_goods_attr` values('233','1','172','2008年04月','0');");
E_D("replace into `ecs_goods_attr` values('228','9','178','滑盖','0');");
E_D("replace into `ecs_goods_attr` values('227','9','185','白色','0');");
E_D("replace into `ecs_goods_attr` values('226','9','185','黑色','10');");
E_D("replace into `ecs_goods_attr` values('232','8','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('231','8','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('230','8','190','支持','0');");
E_D("replace into `ecs_goods_attr` values('229','8','189','1.75英寸','0');");
E_D("replace into `ecs_goods_attr` values('217','13','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('216','13','189','2.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('215','13','172','2008年07月','0');");
E_D("replace into `ecs_goods_attr` values('225','10','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('221','13','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('222','10','172','2008年05月','0');");
E_D("replace into `ecs_goods_attr` values('223','10','189','2.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('224','10','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ecs_goods_attr` values('220','13','175','300小时','0');");
E_D("replace into `ecs_goods_attr` values('219','13','174','4小时','0');");
E_D("replace into `ecs_goods_attr` values('212','14','172','2008年10月','0');");
E_D("replace into `ecs_goods_attr` values('213','14','185','黑色','0');");
E_D("replace into `ecs_goods_attr` values('214','14','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('218','13','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ecs_goods_attr` values('211','15','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('210','15','210','线控耳机','50');");
E_D("replace into `ecs_goods_attr` values('200','17','189','2.8英寸','0');");
E_D("replace into `ecs_goods_attr` values('201','17','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('202','17','173','CDMA','0');");
E_D("replace into `ecs_goods_attr` values('203','17','174','8小时','0');");
E_D("replace into `ecs_goods_attr` values('204','17','175','300小时','0');");
E_D("replace into `ecs_goods_attr` values('205','17','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('206','15','189','2.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('207','15','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('208','15','185','白色','20');");
E_D("replace into `ecs_goods_attr` values('209','15','210','数据线','20');");
E_D("replace into `ecs_goods_attr` values('196','19','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('197','19','185','金色','10');");
E_D("replace into `ecs_goods_attr` values('198','19','185','白色','20');");
E_D("replace into `ecs_goods_attr` values('199','19','178','滑盖','0');");
E_D("replace into `ecs_goods_attr` values('195','20','173','GSM,900,1800,1900,2100','0');");
E_D("replace into `ecs_goods_attr` values('193','20','172','2008年07月','0');");
E_D("replace into `ecs_goods_attr` values('194','20','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('187','21','180','T-Flash','0');");
E_D("replace into `ecs_goods_attr` values('189','21','210','线控耳机','50');");
E_D("replace into `ecs_goods_attr` values('188','21','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('186','22','178','直板','0');");
E_D("replace into `ecs_goods_attr` values('182','22','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('183','22','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ecs_goods_attr` values('184','22','174','6.5小时','0');");
E_D("replace into `ecs_goods_attr` values('185','22','175','450小时','0');");
E_D("replace into `ecs_goods_attr` values('181','22','181','288MB','0');");
E_D("replace into `ecs_goods_attr` values('180','22','180','microSD','0');");
E_D("replace into `ecs_goods_attr` values('179','22','172','2008年12月','0');");
E_D("replace into `ecs_goods_attr` values('192','21','175','100小时','0');");
E_D("replace into `ecs_goods_attr` values('191','21','174','2.5小时','0');");
E_D("replace into `ecs_goods_attr` values('178','23','178','滑盖','0');");
E_D("replace into `ecs_goods_attr` values('190','21','210','数据线','20');");
E_D("replace into `ecs_goods_attr` values('176','23','174','2.5小时','0');");
E_D("replace into `ecs_goods_attr` values('177','23','175','200小时','0');");
E_D("replace into `ecs_goods_attr` values('173','23','188','320×240 像素','0');");
E_D("replace into `ecs_goods_attr` values('174','23','189','2.8英寸','0');");
E_D("replace into `ecs_goods_attr` values('175','23','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('172','23','182','Symbian OS 9.3操作系统','0');");
E_D("replace into `ecs_goods_attr` values('171','23','181','256MB','0');");
E_D("replace into `ecs_goods_attr` values('170','23','172','2008年09月','0');");
E_D("replace into `ecs_goods_attr` values('169','24','179','SMS','0');");
E_D("replace into `ecs_goods_attr` values('166','24','190','支持','0');");
E_D("replace into `ecs_goods_attr` values('167','24','185','灰色','');");
E_D("replace into `ecs_goods_attr` values('168','24','210','数据线','20');");
E_D("replace into `ecs_goods_attr` values('165','24','183','支持','0');");
E_D("replace into `ecs_goods_attr` values('164','24','172','2008年06月','0');");
E_D("replace into `ecs_goods_attr` values('152','32','172','2008年10月','0');");
E_D("replace into `ecs_goods_attr` values('153','32','180','MicroSD','0');");
E_D("replace into `ecs_goods_attr` values('154','32','181','78MB','0');");
E_D("replace into `ecs_goods_attr` values('155','32','182','Symbian OS v9.3','0');");
E_D("replace into `ecs_goods_attr` values('156','32','189','2.6英寸','0');");
E_D("replace into `ecs_goods_attr` values('157','32','210','线控耳机','50');");
E_D("replace into `ecs_goods_attr` values('158','32','210','蓝牙耳机','100');");
E_D("replace into `ecs_goods_attr` values('159','32','210','数据线','12');");
E_D("replace into `ecs_goods_attr` values('160','32','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ecs_goods_attr` values('161','32','174','6.9 小时','0');");
E_D("replace into `ecs_goods_attr` values('162','32','175','363 小时','0');");
E_D("replace into `ecs_goods_attr` values('163','32','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('239','10','185','黑色','');");
E_D("replace into `ecs_goods_attr` values('240','10','185','白色','');");
E_D("replace into `ecs_goods_attr` values('241','122','211','美白','0');");
E_D("replace into `ecs_goods_attr` values('242','122','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('243','121','211','修护','0');");
E_D("replace into `ecs_goods_attr` values('244','121','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('245','120','211','保湿','0');");
E_D("replace into `ecs_goods_attr` values('246','120','212','中性','0');");
E_D("replace into `ecs_goods_attr` values('247','119','211','控油','0');");
E_D("replace into `ecs_goods_attr` values('248','119','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('249','118','211','活肤','0');");
E_D("replace into `ecs_goods_attr` values('250','118','212','敏感性','0');");
E_D("replace into `ecs_goods_attr` values('251','117','211','卸妆','0');");
E_D("replace into `ecs_goods_attr` values('252','117','212','敏感性','0');");
E_D("replace into `ecs_goods_attr` values('253','116','211','收缩','0');");
E_D("replace into `ecs_goods_attr` values('254','116','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('255','115','211','毛孔','0');");
E_D("replace into `ecs_goods_attr` values('256','115','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('257','114','211','抗敏感','0');");
E_D("replace into `ecs_goods_attr` values('258','114','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('259','113','211','排毒','0');");
E_D("replace into `ecs_goods_attr` values('260','113','212','中性','0');");
E_D("replace into `ecs_goods_attr` values('261','112','211','祛斑','0');");
E_D("replace into `ecs_goods_attr` values('262','112','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('263','111','211','抗菌消炎','0');");
E_D("replace into `ecs_goods_attr` values('264','111','212','敏感性','0');");
E_D("replace into `ecs_goods_attr` values('265','110','211','去角质','0');");
E_D("replace into `ecs_goods_attr` values('266','110','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('267','109','211','去黑头','0');");
E_D("replace into `ecs_goods_attr` values('268','109','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('269','108','211','均匀肤色','0');");
E_D("replace into `ecs_goods_attr` values('270','108','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('271','107','211','镇静舒缓','0');");
E_D("replace into `ecs_goods_attr` values('272','107','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('273','106','211','去黑色素','0');");
E_D("replace into `ecs_goods_attr` values('274','106','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('275','105','211','调理肌肤','0');");
E_D("replace into `ecs_goods_attr` values('276','105','212','中性','0');");
E_D("replace into `ecs_goods_attr` values('277','104','211','清洁','0');");
E_D("replace into `ecs_goods_attr` values('278','104','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('279','103','211','抗衰老','0');");
E_D("replace into `ecs_goods_attr` values('280','103','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('281','102','211','祛痘','0');");
E_D("replace into `ecs_goods_attr` values('282','102','212','中性','0');");
E_D("replace into `ecs_goods_attr` values('283','100','211','补水','0');");
E_D("replace into `ecs_goods_attr` values('284','100','212','干性','0');");
E_D("replace into `ecs_goods_attr` values('285','99','211','去死皮','0');");
E_D("replace into `ecs_goods_attr` values('286','99','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('287','98','211','淡斑','0');");
E_D("replace into `ecs_goods_attr` values('288','98','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('289','97','211','提亮肤色','0');");
E_D("replace into `ecs_goods_attr` values('290','97','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('291','96','211','清洁毛孔','0');");
E_D("replace into `ecs_goods_attr` values('292','96','212','油性','0');");
E_D("replace into `ecs_goods_attr` values('293','95','211','抗氧化','0');");
E_D("replace into `ecs_goods_attr` values('294','95','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('295','93','211','水油平衡','0');");
E_D("replace into `ecs_goods_attr` values('296','93','212','混合型','0');");
E_D("replace into `ecs_goods_attr` values('297','123','213','红色','');");
E_D("replace into `ecs_goods_attr` values('298','123','213','黄色','');");
E_D("replace into `ecs_goods_attr` values('299','123','213','金色','');");
E_D("replace into `ecs_goods_attr` values('300','123','214','迪奥(Dior)','0');");
E_D("replace into `ecs_goods_attr` values('301','123','215','东方香调，主要采用苦杏仁、茉莉和香草的香气','0');");
E_D("replace into `ecs_goods_attr` values('302','123','216','50ml','0');");
E_D("replace into `ecs_goods_attr` values('303','123','217','2012年9月','0');");
E_D("replace into `ecs_goods_attr` values('304','123','218','法国','0');");
E_D("replace into `ecs_goods_attr` values('305','123','219','全新专柜正装，有外盒有塑封。产品分有/无标签两种版本，随机发货','0');");
E_D("replace into `ecs_goods_attr` values('306','123','220','所有女性，尤其适合成熟女性','0');");
E_D("replace into `ecs_goods_attr` values('307','123','221','请将本品置于避光处保存，以免变质','0');");
E_D("replace into `ecs_goods_attr` values('308','123','222','本产品属于贵重商品，售出之后无质量问题不支持退换货哦！请MM们注意哦！','0');");
E_D("replace into `ecs_goods_attr` values('309','16','214','雅诗兰黛(ESTEE LAUDER)','0');");
E_D("replace into `ecs_goods_attr` values('310','16','215','排除长期积累的毒素，去除黯沉，令双眼明亮充满朝气','0');");
E_D("replace into `ecs_goods_attr` values('311','16','216','15ml','0');");
E_D("replace into `ecs_goods_attr` values('312','16','217','2011年10月（具体以收到实物为准）','0');");
E_D("replace into `ecs_goods_attr` values('313','16','218','美国','0');");
E_D("replace into `ecs_goods_attr` values('314','16','219','商品全新，有外盒无塑封，两种包装，随机发货，具体以收到的产品为准','0');");
E_D("replace into `ecs_goods_attr` values('315','16','220','适合所有人群，尤其想要双眼明亮充满朝气的MM','0');");
E_D("replace into `ecs_goods_attr` values('316','16','221','请放置于阴凉干燥处，避免阳光直射','0');");
E_D("replace into `ecs_goods_attr` values('317','16','222','本产品属于贵重商品，售出之后无质量问题不支持退换货哦！请MM们注意哦！','0');");
E_D("replace into `ecs_goods_attr` values('318','16','213','红色','');");
E_D("replace into `ecs_goods_attr` values('319','16','213','金色','');");
E_D("replace into `ecs_goods_attr` values('320','16','213','黄色','');");
E_D("replace into `ecs_goods_attr` values('321','12','213','红色','');");
E_D("replace into `ecs_goods_attr` values('322','12','213','金色','');");
E_D("replace into `ecs_goods_attr` values('323','12','213','黄色','');");

require("../../inc/footer.php");
?>