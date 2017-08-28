<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_config`;");
E_C("CREATE TABLE `wxch_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_config` values('1','weixin','wx4053f8763a39e608','b31e4c593d1dbef84966b82a8133b04b','M69aLj9589yXQt11-ZsIaYt5At-VY_QNhWhUYX3_VfALKiQLZaE1CTHFtojwSsyxF5q53H175vtPXPYuBiMZFWxAZMmdWxwqVs1KHM_x4fA','1422313301');");

require("../../inc/footer.php");
?>