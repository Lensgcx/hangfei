<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_user`;");
E_C("CREATE TABLE `wxch_user` (
  `uid` int(7) NOT NULL AUTO_INCREMENT,
  `subscribe` tinyint(1) unsigned NOT NULL,
  `wxid` char(28) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `subscribe_time` int(10) unsigned NOT NULL,
  `localimgurl` varchar(200) NOT NULL,
  `setp` smallint(2) unsigned NOT NULL,
  `uname` varchar(50) NOT NULL,
  `coupon` varchar(30) NOT NULL,
  `affiliate` int(8) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_user` values('108','1','oog1Yt0AlBCuOEdUMr5AFyst05cM','艾特思瑞商城','1','长沙','中国','湖南','zh_CN','http://wx.qlogo.cn/mmopen/Q3auHgzwzM5ribibHS3Sqliah4ZCNzeWpKW74DwExog3PtVxyc09LNbXs9VEycWDumO3zZYxDswI1Q2SQTB084Vf1Zzs3PvM3FC8NJ9JhVuw7k/0','1421102752','','3','tianxin140','','0','1422311733');");
E_D("replace into `wxch_user` values('107','1','oog1Yty-35BxI97HN2hSDoS-Dyiw','jacky','1','松江','中国','上海','zh_CN','http://wx.qlogo.cn/mmopen/DdpxT0U2tTsa7v3kWiaF0VE1qV2buaxzZOLwx8CBoRsaD63Ea7pN7OVkjBhy4MUiaav0FYdxn1OtGu0xypUsnJ1aKqN89e85sh/0','1421388977','','3','tianxin138','','0','1422311057');");
E_D("replace into `wxch_user` values('106','1','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','小君','1','洛阳','中国','河南','zh_CN','http://wx.qlogo.cn/mmopen/R9SKXNeaXfSt8Y6aFT2FmhibX3nIbyMot6lLwQJF10Ex5MbXwdYGDibNgQMDlf6npGwgJOa3NbNNGTzCLqWiba0eRm8oJExzZFC/0','1422304318','','3','tianxin137','','0','1422313600');");

require("../../inc/footer.php");
?>