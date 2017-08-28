<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','刘先生','ecshop@ecshop.com','1','2','52','502','海兴大厦','','010-25851234','13986765412','','');");
E_D("replace into `ecs_user_address` values('2','','3','叶先生','text@ecshop.com','1','2','52','510','通州区旗舰凯旋小区','','13588104710','','','');");
E_D("replace into `ecs_user_address` values('3','','9','1111','123456789@qq.com','1','6','82','760','11111111111','11111','11111199999','','','');");
E_D("replace into `ecs_user_address` values('4','','10','11','admin123@qq.com','1','6','82','760','111','','2222','','','');");
E_D("replace into `ecs_user_address` values('5','','8','dagaf','123@qq.com','1','3','37','410','hgahahahahr','','12345678993','','','');");
E_D("replace into `ecs_user_address` values('6','','11','adf adf','adkjfadf@163.com','1','2','52','500','dsafadhhhhhhhhhhhhh','11111241241','124124241245','','','');");
E_D("replace into `ecs_user_address` values('7','','12','1111','1212@qq.com','1','0','52','500','111','','111','','','');");
E_D("replace into `ecs_user_address` values('8','','23','Xzj','','1','22','292','2408','110','','15554119699','','','');");
E_D("replace into `ecs_user_address` values('9','','29','李玟','','1','16','229','1927','南都','','13771626281','','','');");
E_D("replace into `ecs_user_address` values('10','','42','ddg','','1','7','103','912','fhjgfff请假了','','15222555555','','','');");
E_D("replace into `ecs_user_address` values('11','','42','ddg','','1','7','103','912','fhjgfff请假了','','15222555555','','','');");
E_D("replace into `ecs_user_address` values('12','','26','柯生','','1','2','52','500','r那些微妙不可言之有理由','','18612345678','','','');");
E_D("replace into `ecs_user_address` values('13','','26','柯生','','1','2','52','500','r那些微妙不可言之有理由','','18612345678','','','');");
E_D("replace into `ecs_user_address` values('14','','26','柯生','','1','2','52','500','r那些微妙不可言之有理由','','18612346678','','','');");
E_D("replace into `ecs_user_address` values('15','','54','张学友','','1','6','94','837','百花园','','13360251520','','','');");
E_D("replace into `ecs_user_address` values('16','','53','张莹','','1','6','94','837','百花园','','13360231543','','','');");
E_D("replace into `ecs_user_address` values('17','','61','2341321qwdasd','','1','4','54','533','12312321312321','','123123121','','','');");
E_D("replace into `ecs_user_address` values('18','','67','厦门','','1','3','36','399','厦门','','18030077777','','','');");
E_D("replace into `ecs_user_address` values('19','','47','‘a''de','','1','5','67','635','‘a''fei''lo','','711258','','','');");
E_D("replace into `ecs_user_address` values('20','','70','快乐','','1','5','65','628','快乐','','55','','','');");
E_D("replace into `ecs_user_address` values('21','','74','延皋','','1','7','102','906','人格路1235号','','13626830018','','','');");
E_D("replace into `ecs_user_address` values('22','','44','cccc','4554@qq.com','0','7','101','901','ftttt','200688','13255884788','','','');");
E_D("replace into `ecs_user_address` values('23','','44','cccc','4554@qq.com','0','7','101','901','ftttt','200688','13255884788','','','');");
E_D("replace into `ecs_user_address` values('24','','87','Da','','1','14','204','1714','Ttt','','15243990018','','','');");
E_D("replace into `ecs_user_address` values('25','','103','王一帆','','1','2','52','500','故宫','','18660825215','','','');");
E_D("replace into `ecs_user_address` values('26','','105','ggg','','1','6','82','760','tgg','','18788856221','','','');");
E_D("replace into `ecs_user_address` values('27','','77','你就培训','','1','2','52','500','哈皮尽量','','1264856795686565','','','');");
E_D("replace into `ecs_user_address` values('28','','77','你就培训','','1','2','52','500','哈皮尽量','','1264856795686565','','','');");
E_D("replace into `ecs_user_address` values('29','','110','醉了','','1','28','347','2960','哈哈哈','','123456789','','','');");
E_D("replace into `ecs_user_address` values('30','','95','刘6','','1','14','197','1647','来咯五透气孔','','18654215421','','','');");
E_D("replace into `ecs_user_address` values('31','','112','j','','1','6','79','718','jtp','','13528685596','','','');");
E_D("replace into `ecs_user_address` values('34','','13','邬小君','','1','7','102','906','不回家豪哥','','18638660405','','','');");
E_D("replace into `ecs_user_address` values('33','','113','Ghjjk','','1','0','0','0','Chjjk','','15857000026','','','');");
E_D("replace into `ecs_user_address` values('35','','123','uut','','1','5','66','633','yjjh','','12668','','','');");
E_D("replace into `ecs_user_address` values('36','','124','gyyujhg','','1','3','36','398','ghh','','13577575776','','','');");
E_D("replace into `ecs_user_address` values('37','','125','q','','1','6','80','748','qw','','12','','','');");
E_D("replace into `ecs_user_address` values('38','','127','刘先生','','1','4','53','518','铜盘路软件园A区28栋','','13459415539','','','');");
E_D("replace into `ecs_user_address` values('39','','128','李涛','','1','6','88','801','龙眼2巷6号','','13068927736','','','');");
E_D("replace into `ecs_user_address` values('40','','129','zhabg','','1','5','66','633','xensn','','13466579','','','');");
E_D("replace into `ecs_user_address` values('41','','139','邬小君','','1','26','322','2722','18638360405','','18638360405','','','');");

require("../../inc/footer.php");
?>