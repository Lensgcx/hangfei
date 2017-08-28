<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_keywords_article`;");
E_C("CREATE TABLE `wxch_keywords_article` (
  `kws_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `article_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`kws_id`,`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_keywords_article` values('95','25');");
E_D("replace into `wxch_keywords_article` values('95','26');");
E_D("replace into `wxch_keywords_article` values('95','27');");
E_D("replace into `wxch_keywords_article` values('95','28');");
E_D("replace into `wxch_keywords_article` values('95','29');");
E_D("replace into `wxch_keywords_article` values('95','30');");
E_D("replace into `wxch_keywords_article` values('95','31');");
E_D("replace into `wxch_keywords_article` values('96','23');");
E_D("replace into `wxch_keywords_article` values('96','24');");
E_D("replace into `wxch_keywords_article` values('96','25');");

require("../../inc/footer.php");
?>