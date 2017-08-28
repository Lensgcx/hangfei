<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_register`;");
E_C("CREATE TABLE `wxch_prize_register` (
  `rid` int(8) NOT NULL AUTO_INCREMENT,
  `pid` int(7) unsigned NOT NULL,
  `wxid` char(28) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `wxid` (`wxid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_register` values('1','3','oog1Yt1b7LksklAYJEITWmZ34WMU','Wilson','5','还','1422167436');");
E_D("replace into `wxch_prize_register` values('2','8','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','A.','15555555555','哈哈','1422187241');");
E_D("replace into `wxch_prize_register` values('3','9','oog1Yt7RiWaY4tmsj0kYCXYOphc4','毛诗茵','1863542197','苏联强','1422188497');");
E_D("replace into `wxch_prize_register` values('4','10','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','老衲很性感','555638','老衲','1422191172');");
E_D("replace into `wxch_prize_register` values('5','13','oog1Yt7WPMRGJAxD3UfujE_HBQfc','非神话（正能量）','6666666','666666','1422228912');");
E_D("replace into `wxch_prize_register` values('6','20','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','笨马','75797678','xnsk','1422288758');");

require("../../inc/footer.php");
?>