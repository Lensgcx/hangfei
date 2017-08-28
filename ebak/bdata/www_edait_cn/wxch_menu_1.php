<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_menu`;");
E_C("CREATE TABLE `wxch_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_menu` values('1','click','1','商品查看','','0');");
E_D("replace into `wxch_menu` values('2','click','1','会员功能','','0');");
E_D("replace into `wxch_menu` values('3','click','1','更多..','','0');");
E_D("replace into `wxch_menu` values('4','view','2','推广商品','http://wxmiqi.wushuai.net/wechat/oauth/wxch_oauth.php?oid=1','1');");
E_D("replace into `wxch_menu` values('5','view','2','推广教程','http://wxmiqi.wushuai.net/wechat/oauth/wxch_oauth.php?oid=12','1');");
E_D("replace into `wxch_menu` values('6','click','2','','','1');");
E_D("replace into `wxch_menu` values('7','click','2','多客服咨询','kefu','1');");
E_D("replace into `wxch_menu` values('8','click','2','','','1');");
E_D("replace into `wxch_menu` values('9','click','2','会员绑定','bd','2');");
E_D("replace into `wxch_menu` values('10','click','2','我的二维码','qrcode','2');");
E_D("replace into `wxch_menu` values('11','click','2','订单查询','ddcx','2');");
E_D("replace into `wxch_menu` values('12','click','2','大转盘','dzp','2');");
E_D("replace into `wxch_menu` values('13','click','2','砸金蛋','zjd','2');");
E_D("replace into `wxch_menu` values('14','click','2','帮忙说明','help','3');");
E_D("replace into `wxch_menu` values('15','click','2','订单快递','kdcx','3');");
E_D("replace into `wxch_menu` values('16','click','2','菜单回复','cdhf','3');");
E_D("replace into `wxch_menu` values('17','view','2','首页','http://wxmiqi.wushuai.net/wechat/oauth/wxch_oauth.php?oid=1','3');");
E_D("replace into `wxch_menu` values('18','click','2','签到','qiandao','3');");

require("../../inc/footer.php");
?>