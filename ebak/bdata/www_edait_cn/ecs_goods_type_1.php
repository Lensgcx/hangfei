<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('1','书','1','');");
E_D("replace into `ecs_goods_type` values('2','音乐','1','');");
E_D("replace into `ecs_goods_type` values('3','电影','1','');");
E_D("replace into `ecs_goods_type` values('4','手机','1','');");
E_D("replace into `ecs_goods_type` values('5','笔记本电脑','1','');");
E_D("replace into `ecs_goods_type` values('6','数码相机','1','');");
E_D("replace into `ecs_goods_type` values('7','数码摄像机','1','');");
E_D("replace into `ecs_goods_type` values('8','化妆品','1','');");
E_D("replace into `ecs_goods_type` values('9','精品手机','1','');");
E_D("replace into `ecs_goods_type` values('10','护肤','1','');");
E_D("replace into `ecs_goods_type` values('11','香水','1','');");

require("../../inc/footer.php");
?>