<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_order`;");
E_C("CREATE TABLE `wxch_order` (
  `id` tinyint(1) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `autoload` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_order` values('1','order','发货提醒','images/201401/1388925596106500893.jpg','<p>&nbsp;ffffff</p>','yes');");
E_D("replace into `wxch_order` values('2','reorder','订单确认提醒','images/201401/1389555522246530163.png','fff','yes');");
E_D("replace into `wxch_order` values('3','pay','成功支付','','已经成功支付','yes');");

require("../../inc/footer.php");
?>