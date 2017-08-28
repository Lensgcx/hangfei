<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','12','ecshop@ecshop.com','ecshop','很好，我很喜欢','5','1242107120','0.0.0.0','1','0','1');");
E_D("replace into `ecs_comment` values('2','0','22','ecshop@ecshop.com','ecshop','这个我不是很适合我','5','1242107295','0.0.0.0','1','0','1');");
E_D("replace into `ecs_comment` values('3','0','123','11111111@qq.com','','瓶身很妖艳 味道真的很特别 有点浓郁 适合冬天 很独特的味道 很瓶子一样妖艳','5','1386112926','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('4','0','123','2222@qq.com','','香水很正，不错','5','1386112950','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('5','0','123','3333@qq.com','','非常棒，就是我要的味道','5','1386112985','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('6','0','123','4444@qq.com','','虽然发货时候的地址出了问题，但是小米的客服态度超级好，帮忙改了一下，味道很女人，给妈妈用了，看起来好神','5','1386113015','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('7','0','123','','admin','谢谢您的购买！','0','1386113062','127.0.0.1','0','6','0');");
E_D("replace into `ecs_comment` values('8','0','123','','admin','谢谢您的购买！','0','1386113073','127.0.0.1','0','5','0');");
E_D("replace into `ecs_comment` values('9','0','123','','admin','谢谢您的购买！','0','1386113081','127.0.0.1','0','4','0');");
E_D("replace into `ecs_comment` values('10','0','123','','admin','谢谢您的购买！','0','1386113089','127.0.0.1','0','3','0');");
E_D("replace into `ecs_comment` values('11','0','22','','admin','谢谢您的购买！','0','1386113099','127.0.0.1','0','2','0');");
E_D("replace into `ecs_comment` values('12','0','9','111@qq.com','','asdasdasdas','2','1387157178','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('13','0','9','222@qq.com','','asdasdas','4','1387157206','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('14','0','9','','admin','谢谢您的购买','0','1388101231','127.0.0.1','0','13','0');");
E_D("replace into `ecs_comment` values('15','0','9','111@qq.com','','阿什顿阿什顿阿什顿','4','1387157178','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('33','0','123','555@qq.com','','44444444','4','1388423820','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('32','0','9','666@qq.com','','3分喔','3','1388345221','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('30','0','9','555@qq.com','','4分喔','4','1388345182','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('31','0','9','555@qq.com','','5分喔','5','1388345193','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('34','0','19','sadsada@qq.com','','asdasdas','3','1389310529','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('35','0','19','sadasd@qq.com','','asdasdas','1','1389310595','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('36','0','19','222@qq.com','','asdasdas','5','1389310636','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('37','0','0','111@qq.com','','dadgahgahg','5','1390353108','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('38','0','0','','admin','tfiyiyi','0','1390353132','127.0.0.1','0','37','0');");

require("../../inc/footer.php");
?>