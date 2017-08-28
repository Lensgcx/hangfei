<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_users`;");
E_C("CREATE TABLE `wxch_prize_users` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL DEFAULT '',
  `fun` varchar(10) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `prize_id` int(5) DEFAULT NULL,
  `prize_name` varchar(64) DEFAULT NULL,
  `prize_sn` varchar(35) NOT NULL,
  `register` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `yn` varchar(3) NOT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prize_id` (`prize_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_users` values('1','oog1YtySH4fjAM2uxRlf8ejzlsGc','egg','Jeremy༻','1','优惠卷5','e4e27cce66018e50ce31942af4107a54','0','0','yes','1421605664');");
E_D("replace into `wxch_prize_users` values('2','oog1Yt_WDKwGom5blzIN3TZjtBnY','dzp','徐之江','2','甜心10','06a47fea93a8cb67f2fc374dd5fd6c81','0','0','yes','1421627129');");
E_D("replace into `wxch_prize_users` values('3','oog1Yt1b7LksklAYJEITWmZ34WMU','dzp','Wilson','2','甜心1','813f9eccc3df5b4709465652f5ff0a45','1','0','yes','1422167417');");
E_D("replace into `wxch_prize_users` values('4','oog1Yt1b7LksklAYJEITWmZ34WMU','egg','Wilson','1','未中奖6','caee03bbe0f541cb8066c8ef3387f0b1','0','1','no','1422167462');");
E_D("replace into `wxch_prize_users` values('5','oog1YtwACClU-x8nyfBGh1sm_fK0','dzp','十堰微营销 宋杰','2','甜心1','9b7420ed884e9d95cc25f6ad78859f25','0','0','yes','1422168873');");
E_D("replace into `wxch_prize_users` values('6','oog1Yt1cq0Zu_J-WN9zf-fkpDGkI','dzp','23cc','2','甜心10','a43c357b0d6719ef3b62eeaba12714dc','0','0','yes','1422169159');");
E_D("replace into `wxch_prize_users` values('7','oog1Yt6DcDYYPw5bmNQp9laJd_eM','dzp','代旭彪37度创业咖啡屋','2','甜心100','3fd7ae848fe5640db5cec9844311e365','0','0','yes','1422187137');");
E_D("replace into `wxch_prize_users` values('8','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','dzp','A.','2','甜心10','fd7753752ff0b410e44f0d3233f5d1a6','1','0','yes','1422187224');");
E_D("replace into `wxch_prize_users` values('9','oog1Yt7RiWaY4tmsj0kYCXYOphc4','egg','毛诗茵','1','Ipad3','2f3f5aa65f7f8554aff882bd407459c5','1','0','yes','1422188458');");
E_D("replace into `wxch_prize_users` values('10','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','dzp','老衲很性感','2','甜心1','e9bbce70bda120612a4117c6fad88c85','1','0','yes','1422191160');");
E_D("replace into `wxch_prize_users` values('11','oog1Yt9YJJQOZBn15QGgCOb2uvHw','dzp','苏道德','2','甜心10000','9d8e04e65dd153c7c41cf4cb655f66e1','0','1','no','1422194097');");
E_D("replace into `wxch_prize_users` values('12','oog1Yt4CiDPmqSjrnBOpHNFHyWEU','dzp','Azariasゞ','2','甜心10','66571a46c564b90599fcd36f9a243a91','0','0','yes','1422206267');");
E_D("replace into `wxch_prize_users` values('13','oog1Yt7WPMRGJAxD3UfujE_HBQfc','dzp','非神话（正能量）','2','甜心10','91e459d99fa54cb34df250a07a96f87c','1','0','yes','1422228893');");
E_D("replace into `wxch_prize_users` values('14','oog1Yt7WPMRGJAxD3UfujE_HBQfc','egg','非神话（正能量）','1','未中奖6','42ceccd7f0ceba71f32f840c383fd628','0','1','no','1422229034');");
E_D("replace into `wxch_prize_users` values('15','oog1Yt75W3Z-a5-e1GhyTW-S4CA8','dzp','飞鸟二世','2','甜心1','5594ba1d47443e61a679a2108ec320e4','0','0','yes','1422238594');");
E_D("replace into `wxch_prize_users` values('16','oog1Yt9CQTTFKxIC6sOcyF1PYM-4','egg','','1','话费100元4','942056916b82026eb5bbd91b2f685b40','0','0','yes','1422250674');");
E_D("replace into `wxch_prize_users` values('17','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','dzp','陈胜刚','2','甜心10','2fa2674f70b2690adf2e08b37d7d95dd','0','0','yes','1422267699');");
E_D("replace into `wxch_prize_users` values('18','oog1Yt02StOAERFS_LfifGVlk4BM','dzp','✨ R雄 ✨','2','甜心10','eac78aff32cb8f5517859aeb2a762979','0','0','yes','1422274399');");
E_D("replace into `wxch_prize_users` values('19','oog1Yt2IZl8OpeWt46lnJMu0wyGM','dzp','刘伟','2','甜心1','bf950be99b1e6dffb1a543ee62460e5d','0','0','yes','1422286258');");
E_D("replace into `wxch_prize_users` values('20','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','egg','笨马','1','话费100元4','4f0c4b045066cb08bedef13325939d39','1','0','yes','1422288743');");
E_D("replace into `wxch_prize_users` values('21','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','dzp','笨马','2','甜心100','7173e2783942198f23ca5a76601937dc','0','0','yes','1422288779');");

require("../../inc/footer.php");
?>