<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_count`;");
E_C("CREATE TABLE `wxch_prize_count` (
  `cid` int(7) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `wxid` char(28) NOT NULL,
  `num` int(5) NOT NULL,
  `count` int(5) unsigned NOT NULL,
  `lasttime` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_count` values('1','1','oo1v-tir7oHXTL42WpwAlNsLTZlc','0','5','1395980256','1395475456');");
E_D("replace into `wxch_prize_count` values('2','1','oog1YtySH4fjAM2uxRlf8ejzlsGc','1','1','1421605664','1421605664');");
E_D("replace into `wxch_prize_count` values('3','2','oog1Yt_WDKwGom5blzIN3TZjtBnY','1','1','1421627129','1421627129');");
E_D("replace into `wxch_prize_count` values('4','2','oog1Yt1b7LksklAYJEITWmZ34WMU','1','1','1422167417','1422167417');");
E_D("replace into `wxch_prize_count` values('5','1','oog1Yt1b7LksklAYJEITWmZ34WMU','1','1','1422167462','1422167462');");
E_D("replace into `wxch_prize_count` values('6','2','oog1YtwACClU-x8nyfBGh1sm_fK0','1','1','1422168873','1422168873');");
E_D("replace into `wxch_prize_count` values('7','2','oog1Yt1cq0Zu_J-WN9zf-fkpDGkI','1','1','1422169159','1422169159');");
E_D("replace into `wxch_prize_count` values('8','2','oog1Yt6DcDYYPw5bmNQp9laJd_eM','1','1','1422187137','1422187137');");
E_D("replace into `wxch_prize_count` values('9','2','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','1','1','1422187224','1422187224');");
E_D("replace into `wxch_prize_count` values('10','1','oog1Yt7RiWaY4tmsj0kYCXYOphc4','1','1','1422188458','1422188458');");
E_D("replace into `wxch_prize_count` values('11','2','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','1','1','1422191160','1422191160');");
E_D("replace into `wxch_prize_count` values('12','2','oog1Yt9YJJQOZBn15QGgCOb2uvHw','1','1','1422194097','1422194097');");
E_D("replace into `wxch_prize_count` values('13','2','oog1Yt4CiDPmqSjrnBOpHNFHyWEU','1','1','1422206267','1422206267');");
E_D("replace into `wxch_prize_count` values('14','2','oog1Yt7WPMRGJAxD3UfujE_HBQfc','1','1','1422228893','1422228893');");
E_D("replace into `wxch_prize_count` values('15','1','oog1Yt7WPMRGJAxD3UfujE_HBQfc','1','1','1422229034','1422229034');");
E_D("replace into `wxch_prize_count` values('16','2','oog1Yt75W3Z-a5-e1GhyTW-S4CA8','1','1','1422238594','1422238594');");
E_D("replace into `wxch_prize_count` values('17','1','oog1Yt9CQTTFKxIC6sOcyF1PYM-4','1','1','1422250674','1422250674');");
E_D("replace into `wxch_prize_count` values('18','2','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','1','1','1422267699','1422267699');");
E_D("replace into `wxch_prize_count` values('19','2','oog1Yt02StOAERFS_LfifGVlk4BM','1','1','1422274399','1422274399');");
E_D("replace into `wxch_prize_count` values('20','2','oog1Yt2IZl8OpeWt46lnJMu0wyGM','1','1','1422286258','1422286258');");
E_D("replace into `wxch_prize_count` values('21','1','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','1','1','1422288743','1422288743');");
E_D("replace into `wxch_prize_count` values('22','2','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','1','1','1422288779','1422288779');");

require("../../inc/footer.php");
?>