<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_cnum`;");
E_C("CREATE TABLE `wxch_prize_cnum` (
  `pcid` int(5) NOT NULL AUTO_INCREMENT,
  `paid` int(5) NOT NULL,
  `pid` int(4) NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  `user_count` int(8) unsigned NOT NULL,
  PRIMARY KEY (`pcid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_cnum` values('1','5','1','未中奖5','4','3');");
E_D("replace into `wxch_prize_cnum` values('2','10','7','未中奖','1000','7');");
E_D("replace into `wxch_prize_cnum` values('3','18','2','甜心10000','9','19');");
E_D("replace into `wxch_prize_cnum` values('4','15','2','甜心10','4','7');");
E_D("replace into `wxch_prize_cnum` values('5','14','2','甜心1','6','5');");
E_D("replace into `wxch_prize_cnum` values('6','6','1','未中奖6','9','15');");
E_D("replace into `wxch_prize_cnum` values('7','16','2','甜心100','9','2');");
E_D("replace into `wxch_prize_cnum` values('8','3','1','Ipad3','3','1');");
E_D("replace into `wxch_prize_cnum` values('9','4','1','话费100元4','3','2');");

require("../../inc/footer.php");
?>