<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','8','83','1390437384','0');");
E_D("replace into `ecs_collect_goods` values('2','13','114','1421590282','0');");
E_D("replace into `ecs_collect_goods` values('3','78','46','1422178380','0');");
E_D("replace into `ecs_collect_goods` values('4','101','17','1422223758','0');");
E_D("replace into `ecs_collect_goods` values('6','102','117','1422240817','0');");
E_D("replace into `ecs_collect_goods` values('7','139','17','1422283990','0');");

require("../../inc/footer.php");
?>