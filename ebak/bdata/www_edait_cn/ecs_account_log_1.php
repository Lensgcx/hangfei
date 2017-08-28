<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','5','1100000.00','0.00','0','0','1242140736','11','2');");
E_D("replace into `ecs_account_log` values('2','3','400000.00','0.00','0','0','1242140752','21312','2');");
E_D("replace into `ecs_account_log` values('3','2','300000.00','0.00','0','0','1242140775','300000','2');");
E_D("replace into `ecs_account_log` values('4','1','50000.00','0.00','0','0','1242140811','50','2');");
E_D("replace into `ecs_account_log` values('5','5','0.00','10000.00','0','0','1242140853','32','2');");
E_D("replace into `ecs_account_log` values('6','1','-400.00','0.00','0','0','1242142274','支付订单 2009051298180','99');");
E_D("replace into `ecs_account_log` values('7','1','-975.00','0.00','0','0','1242142324','支付订单 2009051255518','99');");
E_D("replace into `ecs_account_log` values('8','1','0.00','0.00','960','960','1242142390','订单 2009051255518 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('9','1','0.00','0.00','385','385','1242142432','订单 2009051298180 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('10','1','-2310.00','0.00','0','0','1242142549','支付订单 2009051267570','99');");
E_D("replace into `ecs_account_log` values('11','1','0.00','0.00','2300','2300','1242142589','订单 2009051267570 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('12','1','-5989.00','0.00','0','0','1242142681','支付订单 2009051230249','99');");
E_D("replace into `ecs_account_log` values('13','1','-8610.00','0.00','0','0','1242142808','支付订单 2009051276258','99');");
E_D("replace into `ecs_account_log` values('14','1','0.00','0.00','0','-1','1242142910','参加夺宝奇兵夺宝奇兵之夏新N7 ','99');");
E_D("replace into `ecs_account_log` values('15','1','0.00','0.00','0','-1','1242142935','参加夺宝奇兵夺宝奇兵之诺基亚N96 ','99');");
E_D("replace into `ecs_account_log` values('16','1','0.00','0.00','0','100000','1242143867','奖励','2');");
E_D("replace into `ecs_account_log` values('17','1','-10.00','0.00','0','0','1242143920','支付订单 2009051268194','99');");
E_D("replace into `ecs_account_log` values('18','1','0.00','0.00','0','-17000','1242143920','支付订单 2009051268194','99');");
E_D("replace into `ecs_account_log` values('19','1','0.00','0.00','-960','-960','1242144185','由于退货或未发货操作，退回订单 2009051255518 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('20','1','975.00','0.00','0','0','1242144185','由于取消、无效或退货操作，退回支付订单 2009051255518 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('21','1','0.00','0.00','960','960','1242576445','订单 2009051719232 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('22','3','-1000.00','0.00','0','0','1242973612','追加使用余额支付订单：2009051227085','99');");
E_D("replace into `ecs_account_log` values('23','1','-13806.60','0.00','0','0','1242976699','支付订单 2009052224892','99');");
E_D("replace into `ecs_account_log` values('24','1','0.00','0.00','14045','14045','1242976740','订单 2009052224892 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('25','1','0.00','0.00','-2300','-2300','1245045334','由于退货或未发货操作，退回订单 2009051267570 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('26','1','2310.00','0.00','0','0','1245045334','由于取消、无效或退货操作，退回支付订单 2009051267570 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('27','1','0.00','0.00','17044','17044','1245045443','订单 2009061585887 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('28','1','17054.00','0.00','0','0','1245045515','1','99');");
E_D("replace into `ecs_account_log` values('29','1','0.00','0.00','-17044','-17044','1245045515','由于退货或未发货操作，退回订单 2009061585887 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('30','1','-3196.30','0.00','0','0','1245045672','支付订单 2009061525429','99');");
E_D("replace into `ecs_account_log` values('31','1','-1910.00','0.00','0','0','1245047978','支付订单 2009061503335','99');");
E_D("replace into `ecs_account_log` values('32','1','0.00','0.00','1900','1900','1245048189','订单 2009061503335 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('33','1','0.00','0.00','-1900','-1900','1245048212','由于退货或未发货操作，退回订单 2009061503335 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('34','1','1910.00','0.00','0','0','1245048212','由于取消、无效或退货操作，退回支付订单 2009061503335 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('35','1','-500.00','0.00','0','0','1245048585','支付订单 2009061510313','99');");
E_D("replace into `ecs_account_log` values('36','8','0.00','0.00','439','439','1390267904','订单 2014012127768 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('37','8','0.00','0.00','259','259','1390413545','订单 2014012386380 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('38','8','0.00','0.00','1118','1118','1390413621','订单 2014012362771 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('39','8','0.00','0.00','2037','2037','1390413742','订单 2014012338692 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('40','8','0.00','0.00','2007','2007','1390413820','订单 2014012367996 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('41','139','0.00','0.00','2','2','1421594374','','99');");
E_D("replace into `ecs_account_log` values('42','24','0.00','0.00','70','0','1421599763','11','2');");
E_D("replace into `ecs_account_log` values('43','29','0.00','0.00','2','0','1422141711','','99');");
E_D("replace into `ecs_account_log` values('44','29','0.00','0.00','2','0','1422142162','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('45','13','0.00','0.00','2','0','1422145352','','99');");
E_D("replace into `ecs_account_log` values('46','53','0.00','0.00','2','0','1422148876','','99');");
E_D("replace into `ecs_account_log` values('47','113','0.00','0.00','2','0','1422149007','','99');");
E_D("replace into `ecs_account_log` values('48','57','0.00','0.00','2','0','1422151503','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('49','54','0.00','0.00','2','0','1422151787','','99');");
E_D("replace into `ecs_account_log` values('50','58','0.00','0.00','2','0','1422153280','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('51','34','0.00','0.00','2','0','1422158907','','99');");
E_D("replace into `ecs_account_log` values('52','63','0.00','0.00','2','0','1422160312','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('53','44','0.00','0.00','2','0','1422165753','','99');");
E_D("replace into `ecs_account_log` values('54','79','0.00','0.00','2','0','1422178740','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('55','78','0.00','0.00','2','0','1422184871','','99');");
E_D("replace into `ecs_account_log` values('56','44','0.00','0.00','2','0','1422204204','','99');");
E_D("replace into `ecs_account_log` values('57','95','0.00','0.00','0','-10','1422238383','支付订单 2015012683344','99');");
E_D("replace into `ecs_account_log` values('58','88','0.00','0.00','2','0','1422245649','','99');");
E_D("replace into `ecs_account_log` values('59','115','0.00','0.00','2','0','1422246054','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('60','117','0.00','0.00','2','0','1422246961','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('61','93','0.00','0.00','2','0','1422247708','','99');");
E_D("replace into `ecs_account_log` values('62','116','0.00','0.00','2','0','1422249586','','99');");
E_D("replace into `ecs_account_log` values('63','115','0.00','0.00','2','0','1422250727','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('64','123','0.00','0.00','275','275','1422254795','订单 2015012676129 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('65','123','0.00','0.00','2','0','1422256557','推荐会员ID %s ( %s ) 注册送积分','99');");
E_D("replace into `ecs_account_log` values('66','125','0.00','0.00','59','59','1422256640','订单 2015012674208 赠送的积分','99');");

require("../../inc/footer.php");
?>