<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_lang`;");
E_C("CREATE TABLE `wxch_lang` (
  `lang_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(64) NOT NULL,
  `lang_value` text NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_lang` values('1','regmsg','<p>欢迎关注微信公众号</p>');");
E_D("replace into `wxch_lang` values('2','help','功能说明：\r\n输入news显示新品\r\n输入hot显示热销\r\n输入best显示推荐\r\n输入bd进入绑定会员流程\r\n输入ddcx查询最后一个订单\r\n输入kdcx查询最后一个订单中的快递\r\n输入ddlb显示多个订单信息\r\n输入help显示帮助说明');");
E_D("replace into `wxch_lang` values('3','coupon','欢迎关注微信公众号,您已经领取过优惠卷');");
E_D("replace into `wxch_lang` values('4','coupon1','欢迎关注微信公众号,活动期间关注送');");
E_D("replace into `wxch_lang` values('5','coupon2','欢迎关注微信公众号,优惠卷已送完');");
E_D("replace into `wxch_lang` values('6','coupon3','相关功能');");
E_D("replace into `wxch_lang` values('7','qdok','签到成功+');");
E_D("replace into `wxch_lang` values('8','qdno','签到数次已用完');");
E_D("replace into `wxch_lang` values('9','qdstop','已经关闭了签到');");
E_D("replace into `wxch_lang` values('10','bd','快速绑定会员帐号，享受我们提供给你更全面的服务');");
E_D("replace into `wxch_lang` values('11','prize_egg','砸金蛋抽奖规则');");
E_D("replace into `wxch_lang` values('12','prize_dzp','大转盘抽奖活动说明');");

require("../../inc/footer.php");
?>