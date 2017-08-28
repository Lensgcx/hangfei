<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_point_record`;");
E_C("CREATE TABLE `wxch_point_record` (
  `pr_id` int(7) NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `num` int(5) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `datelinie` int(10) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_point_record` values('1','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','zjd','0','1422303817','1420996206');");
E_D("replace into `wxch_point_record` values('2','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','dzp','0','1422303817','1420996726');");
E_D("replace into `wxch_point_record` values('3','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','news','0','1422303817','1420997126');");
E_D("replace into `wxch_point_record` values('4','oog1Yt9HMMlVwrpJK71bq_XitpVU','news','1','1421002675','1421002675');");
E_D("replace into `wxch_point_record` values('5','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','qiandao','0','1422303817','1421009271');");
E_D("replace into `wxch_point_record` values('6','oog1YtySH4fjAM2uxRlf8ejzlsGc','dzp','1','1421605622','1421605622');");
E_D("replace into `wxch_point_record` values('7','oog1YtySH4fjAM2uxRlf8ejzlsGc','zjd','1','1421605639','1421605639');");
E_D("replace into `wxch_point_record` values('8','oog1Yt9spi8jRGx92QJ-qUkuOhBQ','g_point','5','1422304319','1421619348');");
E_D("replace into `wxch_point_record` values('9','oog1Yt3aN-l5NKzvU2CjxDvj47d4','g_point','1','1421622892','1421622892');");
E_D("replace into `wxch_point_record` values('10','oog1Yt4psiIHq51GV7ByOmr2VIzc','dzp','1','1421623076','1421623076');");
E_D("replace into `wxch_point_record` values('11','oog1Yt4jRDx3y_Li6KQ9dCn_Ljb0','g_point','1','1421623594','1421623594');");
E_D("replace into `wxch_point_record` values('12','oog1Ytx7lWZILKGzU3_Sq77hWbPE','g_point','1','1421626333','1421626333');");
E_D("replace into `wxch_point_record` values('13','oog1Yt_WDKwGom5blzIN3TZjtBnY','g_point','1','1421627078','1421627078');");
E_D("replace into `wxch_point_record` values('14','oog1Yt_WDKwGom5blzIN3TZjtBnY','dzp','1','1421627118','1421627118');");
E_D("replace into `wxch_point_record` values('15','oog1Ytx7lWZILKGzU3_Sq77hWbPE','qiandao','1','1421628312','1421628312');");
E_D("replace into `wxch_point_record` values('16','oog1Ytx7lWZILKGzU3_Sq77hWbPE','hot','1','1421628318','1421628318');");
E_D("replace into `wxch_point_record` values('17','oog1Yt1qul12PUs_jnnK6E3Gsy5g','g_point','1','1422166357','1422166357');");
E_D("replace into `wxch_point_record` values('18','oog1Yt1b7LksklAYJEITWmZ34WMU','g_point','1','1422167130','1422167130');");
E_D("replace into `wxch_point_record` values('19','oog1Yt-P3cfr7Me_KHCsKSpwYyF4','g_point','1','1422167396','1422167396');");
E_D("replace into `wxch_point_record` values('20','oog1Yt1b7LksklAYJEITWmZ34WMU','dzp','1','1422167411','1422167411');");
E_D("replace into `wxch_point_record` values('21','oog1Yt1b7LksklAYJEITWmZ34WMU','zjd','1','1422167442','1422167442');");
E_D("replace into `wxch_point_record` values('22','oog1Yt2ScySRec2adRGM3ILsR8p4','g_point','2','1422169673','1422167836');");
E_D("replace into `wxch_point_record` values('23','oog1Yt2G_W-d7DpWoeV1_5BkGBfc','g_point','2','1422170505','1422168418');");
E_D("replace into `wxch_point_record` values('24','oog1YtwACClU-x8nyfBGh1sm_fK0','qiandao','1','1422168858','1422168858');");
E_D("replace into `wxch_point_record` values('25','oog1YtwACClU-x8nyfBGh1sm_fK0','dzp','1','1422168863','1422168863');");
E_D("replace into `wxch_point_record` values('26','oog1Yt1cq0Zu_J-WN9zf-fkpDGkI','g_point','1','1422168880','1422168880');");
E_D("replace into `wxch_point_record` values('27','oog1Yt1cq0Zu_J-WN9zf-fkpDGkI','dzp','1','1422169153','1422169153');");
E_D("replace into `wxch_point_record` values('28','oog1Yt-lftaSTBf4oNFEeEj9LLq0','g_point','1','1422170867','1422170867');");
E_D("replace into `wxch_point_record` values('29','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','g_point','1','1422171264','1422171264');");
E_D("replace into `wxch_point_record` values('30','oog1Yt8VerApBNAzFsoSYMujjtpE','g_point','1','1422172569','1422172569');");
E_D("replace into `wxch_point_record` values('31','oog1Yt1qul12PUs_jnnK6E3Gsy5g','qiandao','1','1422173248','1422173248');");
E_D("replace into `wxch_point_record` values('32','oog1Yt8W8oqRWgQV-Nk2V6KZvhnE','g_point','1','1422174080','1422174080');");
E_D("replace into `wxch_point_record` values('33','oog1Yt7K7IdGf2SF20TSMkvPX6Pw','qiandao','1','1422174146','1422174146');");
E_D("replace into `wxch_point_record` values('34','oog1YtxSF11WV9tb7p-3Pqm5qo70','g_point','1','1422174253','1422174253');");
E_D("replace into `wxch_point_record` values('35','oog1Yt_CuonxmIzf-1sWUM3GOWTs','g_point','1','1422175035','1422175035');");
E_D("replace into `wxch_point_record` values('36','oog1Yt6nfISEdTfVi1XgO5Wsw5Q0','g_point','1','1422177645','1422177645');");
E_D("replace into `wxch_point_record` values('37','oog1Yt4QS4BVzIOEtqaugrKy7U4k','g_point','1','1422180834','1422180834');");
E_D("replace into `wxch_point_record` values('38','oog1Yt6DcDYYPw5bmNQp9laJd_eM','dzp','1','1422187125','1422187125');");
E_D("replace into `wxch_point_record` values('39','oog1Yt6DcDYYPw5bmNQp9laJd_eM','zjd','1','1422187166','1422187166');");
E_D("replace into `wxch_point_record` values('40','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','dzp','1','1422187206','1422187206');");
E_D("replace into `wxch_point_record` values('41','oog1Yt6DcDYYPw5bmNQp9laJd_eM','best','1','1422188258','1422188258');");
E_D("replace into `wxch_point_record` values('42','oog1Yt7RiWaY4tmsj0kYCXYOphc4','g_point','1','1422188366','1422188366');");
E_D("replace into `wxch_point_record` values('43','oog1Yt7RiWaY4tmsj0kYCXYOphc4','zjd','1','1422188437','1422188437');");
E_D("replace into `wxch_point_record` values('44','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','zjd','1','1422191136','1422191136');");
E_D("replace into `wxch_point_record` values('45','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','dzp','1','1422191149','1422191149');");
E_D("replace into `wxch_point_record` values('46','oog1Yt2tzmcaSysdykRjsjRijkzQ','g_point','1','1422191304','1422191304');");
E_D("replace into `wxch_point_record` values('47','oog1Yt9YJJQOZBn15QGgCOb2uvHw','g_point','1','1422193524','1422193524');");
E_D("replace into `wxch_point_record` values('48','oog1Yt9YJJQOZBn15QGgCOb2uvHw','qiandao','1','1422193541','1422193541');");
E_D("replace into `wxch_point_record` values('49','oog1Yt9YJJQOZBn15QGgCOb2uvHw','dzp','1','1422194082','1422194082');");
E_D("replace into `wxch_point_record` values('50','oog1Yt8cCQG2d_i9TjvzZcHhJbb8','ddcx','1','1422194163','1422194163');");
E_D("replace into `wxch_point_record` values('51','oog1Yt9YJJQOZBn15QGgCOb2uvHw','zjd','1','1422194267','1422194267');");
E_D("replace into `wxch_point_record` values('52','oog1Yt9jDYJuUQsQ190teshbcPsI','g_point','1','1422194503','1422194503');");
E_D("replace into `wxch_point_record` values('53','oog1Yt_KFuKMsn4ey7gyYVdNfcuQ','g_point','1','1422194530','1422194530');");
E_D("replace into `wxch_point_record` values('54','oog1Yt9jDYJuUQsQ190teshbcPsI','news','1','1422194584','1422194584');");
E_D("replace into `wxch_point_record` values('55','oog1Yt9jDYJuUQsQ190teshbcPsI','dzp','1','1422194823','1422194823');");
E_D("replace into `wxch_point_record` values('56','oog1Yt9jDYJuUQsQ190teshbcPsI','qiandao','1','1422194918','1422194918');");
E_D("replace into `wxch_point_record` values('57','oog1Yt6E55xYhp5YF35vTb_IU0u8','g_point','1','1422196994','1422196994');");
E_D("replace into `wxch_point_record` values('58','oog1Yt-W4pqwlOUg6bqvHr9LeyR8','qiandao','1','1422200438','1422200438');");
E_D("replace into `wxch_point_record` values('59','oog1YtyxuY63sZfEKPEM-wVD_Xeg','g_point','1','1422202023','1422202023');");
E_D("replace into `wxch_point_record` values('60','oog1Yt4CiDPmqSjrnBOpHNFHyWEU','g_point','1','1422206233','1422206233');");
E_D("replace into `wxch_point_record` values('61','oog1Yt4CiDPmqSjrnBOpHNFHyWEU','dzp','1','1422206252','1422206252');");
E_D("replace into `wxch_point_record` values('62','oog1Yt2fV-QrHoa_mwAwZa0FazSI','g_point','1','1422210747','1422210747');");
E_D("replace into `wxch_point_record` values('63','oog1Yt7eydZ7jS5V_URlh61e8Ty8','qiandao','1','1422211794','1422211794');");
E_D("replace into `wxch_point_record` values('64','oog1Yt7WPMRGJAxD3UfujE_HBQfc','dzp','1','1422228862','1422228862');");
E_D("replace into `wxch_point_record` values('65','oog1Yt7WPMRGJAxD3UfujE_HBQfc','zjd','1','1422228930','1422228930');");
E_D("replace into `wxch_point_record` values('66','oog1Yt7WPMRGJAxD3UfujE_HBQfc','qiandao','1','1422229016','1422229016');");
E_D("replace into `wxch_point_record` values('67','oog1Yt34nwkmkpjye2jdnCbSIkBw','zjd','1','1422234825','1422234825');");
E_D("replace into `wxch_point_record` values('68','oog1Yt53t0D0QIaq_OS01R-S7lVo','g_point','1','1422236227','1422236227');");
E_D("replace into `wxch_point_record` values('69','oog1Yt3v6KB5hAKkT1rG5-_aEqEM','g_point','1','1422238283','1422238283');");
E_D("replace into `wxch_point_record` values('70','oog1Yt75W3Z-a5-e1GhyTW-S4CA8','g_point','1','1422238574','1422238574');");
E_D("replace into `wxch_point_record` values('71','oog1Yt75W3Z-a5-e1GhyTW-S4CA8','dzp','1','1422238582','1422238582');");
E_D("replace into `wxch_point_record` values('72','oog1Yt065YewJCboUJcw_nfErztk','g_point','1','1422238853','1422238853');");
E_D("replace into `wxch_point_record` values('73','oog1Yt11f_wfa-kG2gER7-lJZdpc','g_point','1','1422240296','1422240296');");
E_D("replace into `wxch_point_record` values('74','oog1YtzaC0aD_iRIb5oQ99CP1PQ0','g_point','1','1422243644','1422243644');");
E_D("replace into `wxch_point_record` values('75','oog1Yt60NuMuRzImlwV6smkAQW84','g_point','1','1422249464','1422249464');");
E_D("replace into `wxch_point_record` values('76','oog1Yt9CQTTFKxIC6sOcyF1PYM-4','zjd','1','1422250656','1422250656');");
E_D("replace into `wxch_point_record` values('77','oog1Yt9CQTTFKxIC6sOcyF1PYM-4','dzp','1','1422250660','1422250660');");
E_D("replace into `wxch_point_record` values('78','oog1Yt9HXaQV8GIrMgGuMrYnDap0','g_point','1','1422250685','1422250685');");
E_D("replace into `wxch_point_record` values('79','oog1Yt_vSftpwM38Lztz_5LiZ5ZM','g_point','1','1422251398','1422251398');");
E_D("replace into `wxch_point_record` values('80','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','g_point','2','1422270107','1422252828');");
E_D("replace into `wxch_point_record` values('81','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','qiandao','1','1422252867','1422252867');");
E_D("replace into `wxch_point_record` values('82','oog1Yt9HXaQV8GIrMgGuMrYnDap0','bd','1','1422252899','1422252899');");
E_D("replace into `wxch_point_record` values('83','oog1Yt1ufY0iqmdta5xuM7-nkKHE','g_point','2','1422254527','1422254518');");
E_D("replace into `wxch_point_record` values('84','oog1Yt7We1qI0a-q24veM2kpXhxU','g_point','1','1422254844','1422254844');");
E_D("replace into `wxch_point_record` values('85','oog1Yt9HXaQV8GIrMgGuMrYnDap0','zjd','1','1422256152','1422256152');");
E_D("replace into `wxch_point_record` values('86','oog1Yt9HXaQV8GIrMgGuMrYnDap0','qiandao','1','1422256185','1422256185');");
E_D("replace into `wxch_point_record` values('87','oog1Ytyt8z8P8Z9OzhX8JnZ0Fhzg','g_point','1','1422256392','1422256392');");
E_D("replace into `wxch_point_record` values('88','oog1Yt6BzI51i740-sqcqfofwzgE','g_point','1','1422257419','1422257419');");
E_D("replace into `wxch_point_record` values('89','oog1Yt6WLtxl3QR4N1hvZ7ybypXA','qiandao','1','1422257678','1422257678');");
E_D("replace into `wxch_point_record` values('90','oog1Yt5NSatHBGLrsv9G16vRrEYw','g_point','1','1422257902','1422257902');");
E_D("replace into `wxch_point_record` values('91','oog1Yt5NSatHBGLrsv9G16vRrEYw','zjd','1','1422257939','1422257939');");
E_D("replace into `wxch_point_record` values('92','oog1YtyRI1phpkBXg33Toze_50Hg','g_point','1','1422258368','1422258368');");
E_D("replace into `wxch_point_record` values('93','oog1Yt4vObN_pWs5ufDqwkT6I71c','zjd','1','1422263611','1422263611');");
E_D("replace into `wxch_point_record` values('94','oog1Yt4vObN_pWs5ufDqwkT6I71c','qiandao','1','1422263638','1422263638');");
E_D("replace into `wxch_point_record` values('95','oog1Yt-vhpdflw8OcUCW9cjI018s','dzp','1','1422266124','1422266124');");
E_D("replace into `wxch_point_record` values('96','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','dzp','1','1422267681','1422267681');");
E_D("replace into `wxch_point_record` values('97','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','zjd','1','1422267684','1422267684');");
E_D("replace into `wxch_point_record` values('98','oog1Yt6iRRDwAbdU3Thn-vJFZxCg','hot','1','1422269848','1422269848');");
E_D("replace into `wxch_point_record` values('99','oog1Yt_ncACMMP6uusPcrXxWrvx4','g_point','1','1422272385','1422272385');");
E_D("replace into `wxch_point_record` values('100','oog1Yt_3IQAN6eLqaNuTUd87KiQU','g_point','1','1422272643','1422272643');");
E_D("replace into `wxch_point_record` values('101','oog1Yt02StOAERFS_LfifGVlk4BM','g_point','1','1422274328','1422274328');");
E_D("replace into `wxch_point_record` values('102','oog1Yt02StOAERFS_LfifGVlk4BM','qiandao','1','1422274353','1422274353');");
E_D("replace into `wxch_point_record` values('103','oog1Yt02StOAERFS_LfifGVlk4BM','dzp','1','1422274392','1422274392');");
E_D("replace into `wxch_point_record` values('104','oog1Yt0S9rhORP3TNUJvyFKzbxno','g_point','1','1422275461','1422275461');");
E_D("replace into `wxch_point_record` values('105','oog1Yt6w4jC73vbVOHoVGNFnG6ic','qiandao','1','1422276228','1422276228');");
E_D("replace into `wxch_point_record` values('106','oog1YtydAlFM2ca-ly3Kz44ImBXU','g_point','1','1422276494','1422276494');");
E_D("replace into `wxch_point_record` values('107','oog1YtzAivAKDUPLnZuD8hKxjRQw','g_point','1','1422276816','1422276816');");
E_D("replace into `wxch_point_record` values('108','oog1Yt7CrufeQfKMmBJabYvRiScI','g_point','2','1422283956','1422283035');");
E_D("replace into `wxch_point_record` values('109','oog1Yt2IZl8OpeWt46lnJMu0wyGM','g_point','1','1422285496','1422285496');");
E_D("replace into `wxch_point_record` values('110','oog1Yt2IZl8OpeWt46lnJMu0wyGM','dzp','1','1422286229','1422286229');");
E_D("replace into `wxch_point_record` values('111','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','ddcx','1','1422288721','1422288721');");
E_D("replace into `wxch_point_record` values('112','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','dzp','1','1422288726','1422288726');");
E_D("replace into `wxch_point_record` values('113','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','zjd','1','1422288731','1422288731');");
E_D("replace into `wxch_point_record` values('114','oog1Yt9X2-OdMue8s8AaYJW_TZ50','dzp','1','1422288733','1422288733');");
E_D("replace into `wxch_point_record` values('115','oog1Yt9X2-OdMue8s8AaYJW_TZ50','zjd','1','1422288740','1422288740');");
E_D("replace into `wxch_point_record` values('116','oog1Yt-qlDzW8J3rV4z0mo1jJeEg','news','1','1422288817','1422288817');");
E_D("replace into `wxch_point_record` values('117','oog1Yt4EmHjQXdbBgByoMHy9O5iw','qiandao','1','1422296008','1422296008');");

require("../../inc/footer.php");
?>