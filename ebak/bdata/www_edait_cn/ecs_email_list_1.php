<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_list`;");
E_C("CREATE TABLE `ecs_email_list` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT '0',
  `hash` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_list` values('1','111@qq.com','0','065506bcbd');");
E_D("replace into `ecs_email_list` values('2','11111@qq.com','0','8b39faed92');");
E_D("replace into `ecs_email_list` values('3','222@qq.com','0','3333a81f35');");

require("../../inc/footer.php");
?>