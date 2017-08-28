<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_feedback`;");
E_C("CREATE TABLE `ecs_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `user_email` varchar(60) NOT NULL DEFAULT '',
  `msg_title` varchar(200) NOT NULL DEFAULT '',
  `msg_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `msg_content` text NOT NULL,
  `msg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `message_img` varchar(255) NOT NULL DEFAULT '0',
  `order_id` int(11) unsigned NOT NULL DEFAULT '0',
  `msg_area` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_feedback` values('1','0','1','ecshop','ecshop@ecshop.com','三星SGH-F258什么时候到','4','0','三星SGH-F258什么时候有货','1242107197','','0','0');");
E_D("replace into `ecs_feedback` values('2','0','0','匿名用户','1111@qq.com','dfadggagag','2','0','agbbfnasfmnfgmndsmjhg,kgliulguilgfuykgjmb kuf','1388963921','','0','1');");
E_D("replace into `ecs_feedback` values('3','0','0','匿名用户','1111@qq.com','adgahgshahrgah','2','1','agna''a gnsd.kmbhas''gla nmknhl','1388964063','','0','1');");
E_D("replace into `ecs_feedback` values('4','0','75','weixin75','824479580@qq.com','哈哈','0','0','哈哈','1422172638','','0','0');");
E_D("replace into `ecs_feedback` values('5','0','75','weixin75','824479580@qq.com','哈哈','0','0','哈哈','1422172650','','0','0');");

require("../../inc/footer.php");
?>