<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_template`;");
E_C("CREATE TABLE `ecs_touch_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/cat_articles.lbi','0','3','4','3','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','touch首页广告区域','/library/ad_position.lbi','0','1','3','4','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_promotion.lbi','2','0','4','0','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/group_buy.lbi','1','0','2','0','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_hot.lbi','5','0','3','0','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_best.lbi','3','0','3','0','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_new.lbi','4','0','3','0','miqinew','');");
E_D("replace into `ecs_touch_template` values('index','touch首页广告区域','/library/ad_position.lbi','0','1','3','4','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/cat_articles.lbi','0','3','4','3','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_promotion.lbi','2','0','4','0','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/group_buy.lbi','1','0','2','0','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_hot.lbi','5','0','3','0','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_best.lbi','3','0','3','0','miqinew','2015-01-27 00:54:55');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_new.lbi','4','0','3','0','miqinew','2015-01-27 00:54:55');");

require("../../inc/footer.php");
?>