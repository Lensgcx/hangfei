<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','1','images/200905/goods_img/1_P_1240902890730.gif','','images/200905/thumb_img/1_thumb_P_1240902890139.jpg','images/200905/source_img/1_P_1240902890193.gif');");
E_D("replace into `ecs_goods_gallery` values('2','1','images/200905/goods_img/1_P_1240904370445.jpg','','images/200905/thumb_img/1_thumb_P_1240904370846.jpg','images/200905/source_img/1_P_1240904370647.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','1','images/200905/goods_img/1_P_1240904371414.jpg','','images/200905/thumb_img/1_thumb_P_1240904371539.jpg','images/200905/source_img/1_P_1240904371019.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','1','images/200905/goods_img/1_P_1240904371355.jpg','','images/200905/thumb_img/1_thumb_P_1240904371335.jpg','images/200905/source_img/1_P_1240904371118.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','1','images/200905/goods_img/1_P_1240904371252.jpg','','images/200905/thumb_img/1_thumb_P_1240904371430.jpg','images/200905/source_img/1_P_1240904371758.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','3','images/200905/goods_img/3_P_1241422082461.jpg','','images/200905/thumb_img/3_thumb_P_1241422082160.jpg','images/200905/source_img/3_P_1241422082816.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','4','images/200905/goods_img/4_P_1241422402169.jpg','','images/200905/thumb_img/4_thumb_P_1241422402909.jpg','images/200905/source_img/4_P_1241422402362.jpg');");
E_D("replace into `ecs_goods_gallery` values('8','5','images/200905/goods_img/5_P_1241422518168.jpg','','images/200905/thumb_img/5_thumb_P_1241422518416.jpg','images/200905/source_img/5_P_1241422518314.jpg');");
E_D("replace into `ecs_goods_gallery` values('9','7','images/200905/goods_img/7_P_1241422785926.jpg','','images/200905/thumb_img/7_thumb_P_1241422785889.jpg','images/200905/source_img/7_P_1241422785172.jpg');");
E_D("replace into `ecs_goods_gallery` values('10','8','images/200905/goods_img/8_P_1241425513388.jpg','','images/200905/thumb_img/8_thumb_P_1241425513834.jpg','images/200905/source_img/8_P_1241425513810.jpg');");
E_D("replace into `ecs_goods_gallery` values('11','8','images/200905/goods_img/8_P_1241425891781.JPG','正面','images/200905/thumb_img/8_thumb_P_1241425891460.jpg','images/200905/source_img/8_P_1241425891321.JPG');");
E_D("replace into `ecs_goods_gallery` values('12','8','images/200905/goods_img/8_P_1241425891193.jpg','背面','images/200905/thumb_img/8_thumb_P_1241425892547.jpg','images/200905/source_img/8_P_1241425891588.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','8','images/200905/goods_img/8_P_1241425892941.JPG','侧面','images/200905/thumb_img/8_thumb_P_1241425892356.jpg','images/200905/source_img/8_P_1241425892999.JPG');");
E_D("replace into `ecs_goods_gallery` values('15','12','images/200905/goods_img/12_P_1241965978060.jpg','','images/200905/thumb_img/12_thumb_P_1241965978845.jpg','images/200905/source_img/12_P_1241965978333.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','12','images/200905/goods_img/12_P_1241966218046.jpg','','images/200905/thumb_img/12_thumb_P_1241966218835.jpg','images/200905/source_img/12_P_1241966218225.jpg');");
E_D("replace into `ecs_goods_gallery` values('17','12','images/200905/goods_img/12_P_1241966218391.jpg','','images/200905/thumb_img/12_thumb_P_1241966218843.jpg','images/200905/source_img/12_P_1241966218859.jpg');");
E_D("replace into `ecs_goods_gallery` values('18','13','images/200905/goods_img/13_P_1241967762510.jpg','','images/200905/thumb_img/13_thumb_P_1241967762510.jpg','images/200905/source_img/13_P_1241967762358.jpg');");
E_D("replace into `ecs_goods_gallery` values('19','13','images/200905/goods_img/13_P_1241968002659.jpg','','images/200905/thumb_img/13_thumb_P_1241968002193.jpg','images/200905/source_img/13_P_1241968002709.jpg');");
E_D("replace into `ecs_goods_gallery` values('20','14','images/200905/goods_img/14_P_1241968492774.jpg','','images/200905/thumb_img/14_thumb_P_1241968492168.jpg','images/200905/source_img/14_P_1241968492973.jpg');");
E_D("replace into `ecs_goods_gallery` values('21','14','images/200905/goods_img/14_P_1241968492721.jpg','','images/200905/thumb_img/14_thumb_P_1241968492995.jpg','images/200905/source_img/14_P_1241968492307.jpg');");
E_D("replace into `ecs_goods_gallery` values('22','14','images/200905/goods_img/14_P_1241968492279.jpg','','images/200905/thumb_img/14_thumb_P_1241968492674.jpg','images/200905/source_img/14_P_1241968492392.jpg');");
E_D("replace into `ecs_goods_gallery` values('23','16','images/200905/goods_img/16_P_1241968949498.jpg','','images/200905/thumb_img/16_thumb_P_1241968949965.jpg','images/200905/source_img/16_P_1241968949069.jpg');");
E_D("replace into `ecs_goods_gallery` values('24','17','images/200905/goods_img/17_P_1241969394354.jpg','','images/200905/thumb_img/17_thumb_P_1241969394537.jpg','images/200905/source_img/17_P_1241969394369.jpg');");
E_D("replace into `ecs_goods_gallery` values('25','19','images/200905/goods_img/19_P_1241970140820.jpg','','images/200905/thumb_img/19_thumb_P_1241970140527.jpg','images/200905/source_img/19_P_1241970139925.jpg');");
E_D("replace into `ecs_goods_gallery` values('26','19','images/200905/goods_img/19_P_1241970140600.jpg','','images/200905/thumb_img/19_thumb_P_1241970140229.jpg','images/200905/source_img/19_P_1241970140187.jpg');");
E_D("replace into `ecs_goods_gallery` values('27','19','images/200905/goods_img/19_P_1241970175007.jpg','','images/200905/thumb_img/19_thumb_P_1241970175086.jpg','images/200905/source_img/19_P_1241970175028.jpg');");
E_D("replace into `ecs_goods_gallery` values('28','22','images/200905/goods_img/22_P_1241971076061.jpg','','images/200905/thumb_img/22_thumb_P_1241971076595.jpg','images/200905/source_img/22_P_1241971076696.jpg');");
E_D("replace into `ecs_goods_gallery` values('29','23','images/200905/goods_img/23_P_1241971556661.jpg','','images/200905/thumb_img/23_thumb_P_1241971556920.jpg','images/200905/source_img/23_P_1241971556122.jpg');");
E_D("replace into `ecs_goods_gallery` values('30','24','images/200905/goods_img/24_P_1241971981420.jpg','','images/200905/thumb_img/24_thumb_P_1241971981834.jpg','images/200905/source_img/24_P_1241971981824.jpg');");
E_D("replace into `ecs_goods_gallery` values('31','25','images/200905/goods_img/25_P_1241972709888.jpg','','images/200905/thumb_img/25_thumb_P_1241972709070.jpg','images/200905/source_img/25_P_1241972709222.jpg');");
E_D("replace into `ecs_goods_gallery` values('32','26','images/200905/goods_img/26_P_1241972789025.jpg','','images/200905/thumb_img/26_thumb_P_1241972789061.jpg','images/200905/source_img/26_P_1241972789731.jpg');");
E_D("replace into `ecs_goods_gallery` values('33','27','images/200905/goods_img/27_P_1241972894128.jpg','','images/200905/thumb_img/27_thumb_P_1241972894915.jpg','images/200905/source_img/27_P_1241972894886.jpg');");
E_D("replace into `ecs_goods_gallery` values('34','28','images/200905/goods_img/28_P_1241972976099.jpg','','images/200905/thumb_img/28_thumb_P_1241972976277.jpg','images/200905/source_img/28_P_1241972976150.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','29','images/200905/goods_img/29_P_1241973022876.jpg','','images/200905/thumb_img/29_thumb_P_1241973022886.jpg','images/200905/source_img/29_P_1241973022880.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','30','images/200905/goods_img/30_P_1241973114554.jpg','','images/200905/thumb_img/30_thumb_P_1241973114166.jpg','images/200905/source_img/30_P_1241973114795.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','20','images/200905/goods_img/20_P_1242106490582.jpg','','images/200905/thumb_img/20_thumb_P_1242106490836.jpg','images/200905/source_img/20_P_1242106490796.jpg');");
E_D("replace into `ecs_goods_gallery` values('39','21','images/200905/goods_img/21_P_1242109298519.jpg','','images/200905/thumb_img/21_thumb_P_1242109298525.jpg','images/200905/source_img/21_P_1242109298459.jpg');");
E_D("replace into `ecs_goods_gallery` values('40','31','images/200905/goods_img/31_P_1242110412503.jpg','','images/200905/thumb_img/31_thumb_P_1242110412614.jpg','images/200905/source_img/31_P_1242110412152.jpg');");
E_D("replace into `ecs_goods_gallery` values('41','32','images/200905/goods_img/32_P_1242110760641.jpg','','images/200905/thumb_img/32_thumb_P_1242110760997.jpg','images/200905/source_img/32_P_1242110760203.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','15','images/200905/goods_img/15_P_1242973362276.jpg','','images/200905/thumb_img/15_thumb_P_1242973362611.jpg','images/200905/source_img/15_P_1242973362172.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','10','images/200905/goods_img/10_P_1242973436620.jpg','','images/200905/thumb_img/10_thumb_P_1242973436219.jpg','images/200905/source_img/10_P_1242973436898.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','9','images/201311/goods_img/9_P_1384986608041.jpg','','images/201311/thumb_img/9_thumb_P_1384986608509.jpg','images/201311/source_img/9_P_1384986608844.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','9','images/201311/goods_img/9_P_1384987018219.jpg','','images/201311/thumb_img/9_thumb_P_1384987018285.jpg','images/201311/source_img/9_P_1384987018317.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','1','images/201311/goods_img/1_P_1384988540992.jpg','','images/201311/thumb_img/1_thumb_P_1384988540797.jpg','images/201311/source_img/1_P_1384988540720.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','8','images/201311/goods_img/8_P_1384988790534.jpg','','images/201311/thumb_img/8_thumb_P_1384988790842.jpg','images/201311/source_img/8_P_1384988790304.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','32','images/201311/goods_img/32_P_1384991764984.jpg','','images/201311/thumb_img/32_thumb_P_1384991764767.jpg','images/201311/source_img/32_P_1384991764847.jpg');");
E_D("replace into `ecs_goods_gallery` values('49','19','images/201311/goods_img/19_P_1384994159375.jpg','','images/201311/thumb_img/19_thumb_P_1384994159656.jpg','images/201311/source_img/19_P_1384994159296.jpg');");
E_D("replace into `ecs_goods_gallery` values('50','20','images/201311/goods_img/20_P_1384994312604.jpg','','images/201311/thumb_img/20_thumb_P_1384994312418.jpg','images/201311/source_img/20_P_1384994312109.jpg');");
E_D("replace into `ecs_goods_gallery` values('51','17','images/201311/goods_img/17_P_1384994573474.jpg','','images/201311/thumb_img/17_thumb_P_1384994573411.jpg','images/201311/source_img/17_P_1384994573368.jpg');");
E_D("replace into `ecs_goods_gallery` values('52','22','images/201311/goods_img/22_P_1384994678624.jpg','','images/201311/thumb_img/22_thumb_P_1384994678264.jpg','images/201311/source_img/22_P_1384994678746.jpg');");
E_D("replace into `ecs_goods_gallery` values('53','16','images/201311/goods_img/16_P_1384995428480.jpg','','images/201311/thumb_img/16_thumb_P_1384995428338.jpg','images/201311/source_img/16_P_1384995428280.jpg');");
E_D("replace into `ecs_goods_gallery` values('54','12','images/201311/goods_img/12_P_1384995644112.jpg','','images/201311/thumb_img/12_thumb_P_1384995644074.jpg','images/201311/source_img/12_P_1384995644361.jpg');");
E_D("replace into `ecs_goods_gallery` values('55','33','images/201311/goods_img/33_P_1384995853099.jpg','','images/201311/thumb_img/33_thumb_P_1384995853449.jpg','images/201311/source_img/33_P_1384995853371.jpg');");
E_D("replace into `ecs_goods_gallery` values('56','34','images/201311/goods_img/34_P_1384996126644.jpg','','images/201311/thumb_img/34_thumb_P_1384996126970.jpg','images/201311/source_img/34_P_1384996126024.jpg');");
E_D("replace into `ecs_goods_gallery` values('57','35','images/201311/goods_img/35_P_1384996219160.jpg','','images/201311/thumb_img/35_thumb_P_1384996219644.jpg','images/201311/source_img/35_P_1384996219237.jpg');");
E_D("replace into `ecs_goods_gallery` values('58','36','images/201311/goods_img/36_P_1385070892592.jpg','','images/201311/thumb_img/36_thumb_P_1385070892453.jpg','images/201311/source_img/36_P_1385070892203.jpg');");
E_D("replace into `ecs_goods_gallery` values('59','37','images/201311/goods_img/37_P_1385071002213.png','','images/201311/thumb_img/37_thumb_P_1385071002211.jpg','images/201311/source_img/37_P_1385071002522.png');");
E_D("replace into `ecs_goods_gallery` values('60','38','images/201311/goods_img/38_P_1385071125350.jpg','','images/201311/thumb_img/38_thumb_P_1385071125370.jpg','images/201311/source_img/38_P_1385071125733.jpg');");
E_D("replace into `ecs_goods_gallery` values('61','39','images/201311/goods_img/39_P_1385071299484.jpg','','images/201311/thumb_img/39_thumb_P_1385071299401.jpg','images/201311/source_img/39_P_1385071299431.jpg');");
E_D("replace into `ecs_goods_gallery` values('62','40','images/201311/goods_img/40_P_1385071423029.jpg','','images/201311/thumb_img/40_thumb_P_1385071423651.jpg','images/201311/source_img/40_P_1385071423087.jpg');");
E_D("replace into `ecs_goods_gallery` values('63','41','images/201311/goods_img/41_P_1385071802579.jpg','','images/201311/thumb_img/41_thumb_P_1385071802370.jpg','images/201311/source_img/41_P_1385071802629.jpg');");
E_D("replace into `ecs_goods_gallery` values('64','41','images/201311/goods_img/41_P_1385071859624.jpg','','images/201311/thumb_img/41_thumb_P_1385071859905.jpg','images/201311/source_img/41_P_1385071859016.jpg');");
E_D("replace into `ecs_goods_gallery` values('65','42','images/201311/goods_img/42_P_1385071984547.jpg','','images/201311/thumb_img/42_thumb_P_1385071984461.jpg','images/201311/source_img/42_P_1385071984604.jpg');");
E_D("replace into `ecs_goods_gallery` values('66','43','images/201311/goods_img/43_P_1385072070127.jpg','','images/201311/thumb_img/43_thumb_P_1385072070504.jpg','images/201311/source_img/43_P_1385072070419.jpg');");
E_D("replace into `ecs_goods_gallery` values('67','44','images/201311/goods_img/44_P_1385072182258.png','','images/201311/thumb_img/44_thumb_P_1385072182592.jpg','images/201311/source_img/44_P_1385072182615.png');");
E_D("replace into `ecs_goods_gallery` values('68','45','images/201311/goods_img/45_P_1385072303927.jpg','','images/201311/thumb_img/45_thumb_P_1385072303676.jpg','images/201311/source_img/45_P_1385072303247.jpg');");
E_D("replace into `ecs_goods_gallery` values('69','46','images/201311/goods_img/46_P_1385072633608.jpg','','images/201311/thumb_img/46_thumb_P_1385072633211.jpg','images/201311/source_img/46_P_1385072633015.jpg');");
E_D("replace into `ecs_goods_gallery` values('70','24','images/201311/goods_img/24_P_1385074818063.png','','images/201311/thumb_img/24_thumb_P_1385074818030.jpg','images/201311/source_img/24_P_1385074818763.png');");
E_D("replace into `ecs_goods_gallery` values('71','23','images/201311/goods_img/23_P_1385075287679.jpg','','images/201311/thumb_img/23_thumb_P_1385075287497.jpg','images/201311/source_img/23_P_1385075287782.jpg');");
E_D("replace into `ecs_goods_gallery` values('72','21','images/201311/goods_img/21_P_1385075715200.png','','images/201311/thumb_img/21_thumb_P_1385075715191.jpg','images/201311/source_img/21_P_1385075715792.png');");
E_D("replace into `ecs_goods_gallery` values('73','14','images/201311/goods_img/14_P_1385076093751.png','','images/201311/thumb_img/14_thumb_P_1385076093573.jpg','images/201311/source_img/14_P_1385076093190.png');");
E_D("replace into `ecs_goods_gallery` values('74','13','images/201311/goods_img/13_P_1385076209186.jpg','','images/201311/thumb_img/13_thumb_P_1385076209603.jpg','images/201311/source_img/13_P_1385076209144.jpg');");
E_D("replace into `ecs_goods_gallery` values('75','10','images/201311/goods_img/10_P_1385076352266.png','','images/201311/thumb_img/10_thumb_P_1385076352398.jpg','images/201311/source_img/10_P_1385076352937.png');");
E_D("replace into `ecs_goods_gallery` values('76','47','images/201311/goods_img/47_P_1385076494768.jpg','','images/201311/thumb_img/47_thumb_P_1385076494414.jpg','images/201311/source_img/47_P_1385076494339.jpg');");
E_D("replace into `ecs_goods_gallery` values('77','48','images/201311/goods_img/48_P_1385076661264.jpg','','images/201311/thumb_img/48_thumb_P_1385076661224.jpg','images/201311/source_img/48_P_1385076661435.jpg');");
E_D("replace into `ecs_goods_gallery` values('78','49','images/201311/goods_img/49_P_1385076741392.jpg','','images/201311/thumb_img/49_thumb_P_1385076741344.jpg','images/201311/source_img/49_P_1385076741941.jpg');");
E_D("replace into `ecs_goods_gallery` values('79','49','images/201311/goods_img/49_P_1385076764916.png','','images/201311/thumb_img/49_thumb_P_1385076764535.jpg','images/201311/source_img/49_P_1385076764695.png');");
E_D("replace into `ecs_goods_gallery` values('80','50','images/201311/goods_img/50_P_1385076903562.jpg','','images/201311/thumb_img/50_thumb_P_1385076903006.jpg','images/201311/source_img/50_P_1385076903275.jpg');");
E_D("replace into `ecs_goods_gallery` values('81','51','images/201311/goods_img/51_P_1385077004408.jpg','','images/201311/thumb_img/51_thumb_P_1385077004463.jpg','images/201311/source_img/51_P_1385077004251.jpg');");
E_D("replace into `ecs_goods_gallery` values('82','52','images/201311/goods_img/52_P_1385077126665.jpg','','images/201311/thumb_img/52_thumb_P_1385077126320.jpg','images/201311/source_img/52_P_1385077126441.jpg');");
E_D("replace into `ecs_goods_gallery` values('83','53','images/201311/goods_img/53_P_1385077221338.jpg','','images/201311/thumb_img/53_thumb_P_1385077221482.jpg','images/201311/source_img/53_P_1385077221763.jpg');");
E_D("replace into `ecs_goods_gallery` values('84','54','images/201311/goods_img/54_P_1385077336951.jpg','','images/201311/thumb_img/54_thumb_P_1385077336088.jpg','images/201311/source_img/54_P_1385077336529.jpg');");
E_D("replace into `ecs_goods_gallery` values('85','55','images/201311/goods_img/55_P_1385077439306.jpg','','images/201311/thumb_img/55_thumb_P_1385077439221.jpg','images/201311/source_img/55_P_1385077439007.jpg');");
E_D("replace into `ecs_goods_gallery` values('86','56','images/201311/goods_img/56_P_1385077565363.jpg','','images/201311/thumb_img/56_thumb_P_1385077565989.jpg','images/201311/source_img/56_P_1385077565270.jpg');");
E_D("replace into `ecs_goods_gallery` values('87','57','images/201311/goods_img/57_P_1385077699351.jpg','','images/201311/thumb_img/57_thumb_P_1385077699763.jpg','images/201311/source_img/57_P_1385077699756.jpg');");
E_D("replace into `ecs_goods_gallery` values('88','58','images/201311/goods_img/58_P_1385078380907.jpg','','images/201311/thumb_img/58_thumb_P_1385078380450.jpg','images/201311/source_img/58_P_1385078380880.jpg');");
E_D("replace into `ecs_goods_gallery` values('89','59','images/201311/goods_img/59_P_1385078635938.png','','images/201311/thumb_img/59_thumb_P_1385078635110.jpg','images/201311/source_img/59_P_1385078635510.png');");
E_D("replace into `ecs_goods_gallery` values('90','60','images/201311/goods_img/60_P_1385078760180.jpg','','images/201311/thumb_img/60_thumb_P_1385078760257.jpg','images/201311/source_img/60_P_1385078760462.jpg');");
E_D("replace into `ecs_goods_gallery` values('91','61','images/201311/goods_img/61_P_1385078916546.jpg','','images/201311/thumb_img/61_thumb_P_1385078916011.jpg','images/201311/source_img/61_P_1385078916134.jpg');");
E_D("replace into `ecs_goods_gallery` values('92','62','images/201311/goods_img/62_P_1385079097901.jpg','','images/201311/thumb_img/62_thumb_P_1385079097191.jpg','images/201311/source_img/62_P_1385079097179.jpg');");
E_D("replace into `ecs_goods_gallery` values('93','63','images/201311/goods_img/63_P_1385079290276.jpg','','images/201311/thumb_img/63_thumb_P_1385079290918.jpg','images/201311/source_img/63_P_1385079290227.jpg');");
E_D("replace into `ecs_goods_gallery` values('94','64','images/201311/goods_img/64_P_1385079432022.jpg','','images/201311/thumb_img/64_thumb_P_1385079432146.jpg','images/201311/source_img/64_P_1385079432743.jpg');");
E_D("replace into `ecs_goods_gallery` values('95','65','images/201311/goods_img/65_P_1385079556757.jpg','','images/201311/thumb_img/65_thumb_P_1385079556738.jpg','images/201311/source_img/65_P_1385079556485.jpg');");
E_D("replace into `ecs_goods_gallery` values('96','66','images/201311/goods_img/66_P_1385079645204.jpg','','images/201311/thumb_img/66_thumb_P_1385079645695.jpg','images/201311/source_img/66_P_1385079645023.jpg');");
E_D("replace into `ecs_goods_gallery` values('97','67','images/201311/goods_img/67_P_1385079757664.png','','images/201311/thumb_img/67_thumb_P_1385079757583.jpg','images/201311/source_img/67_P_1385079757081.png');");
E_D("replace into `ecs_goods_gallery` values('98','68','images/201311/goods_img/68_P_1385079856220.jpg','','images/201311/thumb_img/68_thumb_P_1385079856888.jpg','images/201311/source_img/68_P_1385079856687.jpg');");
E_D("replace into `ecs_goods_gallery` values('99','69','images/201311/goods_img/69_P_1385079988039.jpg','','images/201311/thumb_img/69_thumb_P_1385079988500.jpg','images/201311/source_img/69_P_1385079988727.jpg');");
E_D("replace into `ecs_goods_gallery` values('100','70','images/201311/goods_img/70_P_1385080063533.png','','images/201311/thumb_img/70_thumb_P_1385080063688.jpg','images/201311/source_img/70_P_1385080063106.png');");
E_D("replace into `ecs_goods_gallery` values('101','71','images/201311/goods_img/71_P_1385080144078.png','','images/201311/thumb_img/71_thumb_P_1385080144690.jpg','images/201311/source_img/71_P_1385080144116.png');");
E_D("replace into `ecs_goods_gallery` values('102','72','images/201311/goods_img/72_P_1385080249795.jpg','','images/201311/thumb_img/72_thumb_P_1385080249387.jpg','images/201311/source_img/72_P_1385080249400.jpg');");
E_D("replace into `ecs_goods_gallery` values('103','73','images/201311/goods_img/73_P_1385080404571.jpg','','images/201311/thumb_img/73_thumb_P_1385080404040.jpg','images/201311/source_img/73_P_1385080404196.jpg');");
E_D("replace into `ecs_goods_gallery` values('104','74','images/201311/goods_img/74_P_1385080490716.png','','images/201311/thumb_img/74_thumb_P_1385080490951.jpg','images/201311/source_img/74_P_1385080490195.png');");
E_D("replace into `ecs_goods_gallery` values('105','75','images/201311/goods_img/75_P_1385080576868.jpg','','images/201311/thumb_img/75_thumb_P_1385080576874.jpg','images/201311/source_img/75_P_1385080576485.jpg');");
E_D("replace into `ecs_goods_gallery` values('106','76','images/201311/goods_img/76_P_1385080683405.jpg','','images/201311/thumb_img/76_thumb_P_1385080683777.jpg','images/201311/source_img/76_P_1385080683545.jpg');");
E_D("replace into `ecs_goods_gallery` values('107','77','images/201311/goods_img/77_P_1385080762347.png','','images/201311/thumb_img/77_thumb_P_1385080762888.jpg','images/201311/source_img/77_P_1385080762221.png');");
E_D("replace into `ecs_goods_gallery` values('108','78','images/201311/goods_img/78_P_1385080829431.png','','images/201311/thumb_img/78_thumb_P_1385080829199.jpg','images/201311/source_img/78_P_1385080829444.png');");
E_D("replace into `ecs_goods_gallery` values('109','79','images/201311/goods_img/79_P_1385660900668.png','','images/201311/thumb_img/79_thumb_P_1385660900799.jpg','images/201311/source_img/79_P_1385660900982.png');");
E_D("replace into `ecs_goods_gallery` values('110','80','images/201311/goods_img/80_P_1385662269339.png','','images/201311/thumb_img/80_thumb_P_1385662269531.jpg','images/201311/source_img/80_P_1385662269084.png');");
E_D("replace into `ecs_goods_gallery` values('111','81','images/201311/goods_img/81_P_1385662330754.png','','images/201311/thumb_img/81_thumb_P_1385662330414.jpg','images/201311/source_img/81_P_1385662330511.png');");
E_D("replace into `ecs_goods_gallery` values('112','82','images/201311/goods_img/82_P_1385662403121.png','','images/201311/thumb_img/82_thumb_P_1385662403347.jpg','images/201311/source_img/82_P_1385662403830.png');");
E_D("replace into `ecs_goods_gallery` values('113','83','images/201311/goods_img/83_P_1385662459600.png','','images/201311/thumb_img/83_thumb_P_1385662459294.jpg','images/201311/source_img/83_P_1385662459321.png');");
E_D("replace into `ecs_goods_gallery` values('114','84','images/201311/goods_img/84_P_1385662516968.png','','images/201311/thumb_img/84_thumb_P_1385662516720.jpg','images/201311/source_img/84_P_1385662516667.png');");
E_D("replace into `ecs_goods_gallery` values('115','85','images/201311/goods_img/85_P_1385662574099.png','','images/201311/thumb_img/85_thumb_P_1385662574362.jpg','images/201311/source_img/85_P_1385662574466.png');");
E_D("replace into `ecs_goods_gallery` values('116','86','images/201311/goods_img/86_P_1385662630113.png','','images/201311/thumb_img/86_thumb_P_1385662630581.jpg','images/201311/source_img/86_P_1385662630882.png');");
E_D("replace into `ecs_goods_gallery` values('117','87','images/201311/goods_img/87_P_1385662805351.png','','images/201311/thumb_img/87_thumb_P_1385662805330.jpg','images/201311/source_img/87_P_1385662805656.png');");
E_D("replace into `ecs_goods_gallery` values('118','88','images/201311/goods_img/88_P_1385662944776.png','','images/201311/thumb_img/88_thumb_P_1385662944292.jpg','images/201311/source_img/88_P_1385662944056.png');");
E_D("replace into `ecs_goods_gallery` values('119','89','images/201311/goods_img/89_P_1385663017223.png','','images/201311/thumb_img/89_thumb_P_1385663017382.jpg','images/201311/source_img/89_P_1385663017963.png');");
E_D("replace into `ecs_goods_gallery` values('120','90','images/201311/goods_img/90_P_1385663078516.png','','images/201311/thumb_img/90_thumb_P_1385663078881.jpg','images/201311/source_img/90_P_1385663078725.png');");
E_D("replace into `ecs_goods_gallery` values('121','91','images/201311/goods_img/91_P_1385663130490.png','','images/201311/thumb_img/91_thumb_P_1385663130962.jpg','images/201311/source_img/91_P_1385663130352.png');");
E_D("replace into `ecs_goods_gallery` values('122','92','images/201311/goods_img/92_P_1385663188791.png','','images/201311/thumb_img/92_thumb_P_1385663188541.jpg','images/201311/source_img/92_P_1385663188366.png');");
E_D("replace into `ecs_goods_gallery` values('123','93','images/201311/goods_img/93_P_1385663259994.png','','images/201311/thumb_img/93_thumb_P_1385663259505.jpg','images/201311/source_img/93_P_1385663259500.png');");
E_D("replace into `ecs_goods_gallery` values('124','94','images/201311/goods_img/94_P_1385663305784.png','','images/201311/thumb_img/94_thumb_P_1385663305401.jpg','images/201311/source_img/94_P_1385663305088.png');");
E_D("replace into `ecs_goods_gallery` values('125','95','images/201311/goods_img/95_P_1385663364782.png','','images/201311/thumb_img/95_thumb_P_1385663364562.jpg','images/201311/source_img/95_P_1385663364311.png');");
E_D("replace into `ecs_goods_gallery` values('126','96','images/201311/goods_img/96_P_1385663452318.png','','images/201311/thumb_img/96_thumb_P_1385663452361.jpg','images/201311/source_img/96_P_1385663452238.png');");
E_D("replace into `ecs_goods_gallery` values('127','97','images/201311/goods_img/97_P_1385663513818.png','','images/201311/thumb_img/97_thumb_P_1385663513052.jpg','images/201311/source_img/97_P_1385663513183.png');");
E_D("replace into `ecs_goods_gallery` values('128','98','images/201311/goods_img/98_P_1385663578987.png','','images/201311/thumb_img/98_thumb_P_1385663578866.jpg','images/201311/source_img/98_P_1385663578110.png');");
E_D("replace into `ecs_goods_gallery` values('129','99','images/201311/goods_img/99_P_1385663653442.png','','images/201311/thumb_img/99_thumb_P_1385663653736.jpg','images/201311/source_img/99_P_1385663653681.png');");
E_D("replace into `ecs_goods_gallery` values('130','100','images/201311/goods_img/100_P_1385663712028.png','','images/201311/thumb_img/100_thumb_P_1385663712738.jpg','images/201311/source_img/100_P_1385663712077.png');");
E_D("replace into `ecs_goods_gallery` values('131','101','images/201311/goods_img/101_P_1385663770698.png','','images/201311/thumb_img/101_thumb_P_1385663770244.jpg','images/201311/source_img/101_P_1385663770226.png');");
E_D("replace into `ecs_goods_gallery` values('132','102','images/201311/goods_img/102_P_1385663846204.png','','images/201311/thumb_img/102_thumb_P_1385663846071.jpg','images/201311/source_img/102_P_1385663846314.png');");
E_D("replace into `ecs_goods_gallery` values('133','103','images/201311/goods_img/103_P_1385663900814.png','','images/201311/thumb_img/103_thumb_P_1385663900535.jpg','images/201311/source_img/103_P_1385663900473.png');");
E_D("replace into `ecs_goods_gallery` values('134','104','images/201311/goods_img/104_P_1385663955432.png','','images/201311/thumb_img/104_thumb_P_1385663955509.jpg','images/201311/source_img/104_P_1385663955307.png');");
E_D("replace into `ecs_goods_gallery` values('135','105','images/201311/goods_img/105_P_1385664010650.png','','images/201311/thumb_img/105_thumb_P_1385664010164.jpg','images/201311/source_img/105_P_1385664010792.png');");
E_D("replace into `ecs_goods_gallery` values('136','106','images/201311/goods_img/106_P_1385664056766.png','','images/201311/thumb_img/106_thumb_P_1385664056309.jpg','images/201311/source_img/106_P_1385664056821.png');");
E_D("replace into `ecs_goods_gallery` values('137','107','images/201311/goods_img/107_P_1385664113396.png','','images/201311/thumb_img/107_thumb_P_1385664113907.jpg','images/201311/source_img/107_P_1385664113514.png');");
E_D("replace into `ecs_goods_gallery` values('138','108','images/201311/goods_img/108_P_1385664182316.png','','images/201311/thumb_img/108_thumb_P_1385664182069.jpg','images/201311/source_img/108_P_1385664182702.png');");
E_D("replace into `ecs_goods_gallery` values('139','109','images/201311/goods_img/109_P_1385664262819.png','','images/201311/thumb_img/109_thumb_P_1385664262108.jpg','images/201311/source_img/109_P_1385664262016.png');");
E_D("replace into `ecs_goods_gallery` values('140','110','images/201311/goods_img/110_P_1385664404845.png','','images/201311/thumb_img/110_thumb_P_1385664404679.jpg','images/201311/source_img/110_P_1385664404159.png');");
E_D("replace into `ecs_goods_gallery` values('141','111','images/201311/goods_img/111_P_1385664456529.png','','images/201311/thumb_img/111_thumb_P_1385664456363.jpg','images/201311/source_img/111_P_1385664456571.png');");
E_D("replace into `ecs_goods_gallery` values('142','112','images/201311/goods_img/112_P_1385664523465.png','','images/201311/thumb_img/112_thumb_P_1385664523636.jpg','images/201311/source_img/112_P_1385664523708.png');");
E_D("replace into `ecs_goods_gallery` values('143','113','images/201311/goods_img/113_P_1385664621855.png','','images/201311/thumb_img/113_thumb_P_1385664621766.jpg','images/201311/source_img/113_P_1385664621483.png');");
E_D("replace into `ecs_goods_gallery` values('144','114','images/201311/goods_img/114_P_1385664673819.png','','images/201311/thumb_img/114_thumb_P_1385664673524.jpg','images/201311/source_img/114_P_1385664673838.png');");
E_D("replace into `ecs_goods_gallery` values('145','115','images/201311/goods_img/115_P_1385664721669.png','','images/201311/thumb_img/115_thumb_P_1385664721058.jpg','images/201311/source_img/115_P_1385664721090.png');");
E_D("replace into `ecs_goods_gallery` values('146','116','images/201311/goods_img/116_P_1385664773261.png','','images/201311/thumb_img/116_thumb_P_1385664773026.jpg','images/201311/source_img/116_P_1385664773293.png');");
E_D("replace into `ecs_goods_gallery` values('147','117','images/201311/goods_img/117_P_1385664825443.png','','images/201311/thumb_img/117_thumb_P_1385664825450.jpg','images/201311/source_img/117_P_1385664825444.png');");
E_D("replace into `ecs_goods_gallery` values('148','118','images/201311/goods_img/118_P_1385664875126.png','','images/201311/thumb_img/118_thumb_P_1385664875361.jpg','images/201311/source_img/118_P_1385664875791.png');");
E_D("replace into `ecs_goods_gallery` values('149','119','images/201311/goods_img/119_P_1385664985376.png','','images/201311/thumb_img/119_thumb_P_1385664985509.jpg','images/201311/source_img/119_P_1385664985314.png');");
E_D("replace into `ecs_goods_gallery` values('150','120','images/201311/goods_img/120_P_1385665066816.png','','images/201311/thumb_img/120_thumb_P_1385665066830.jpg','images/201311/source_img/120_P_1385665066680.png');");
E_D("replace into `ecs_goods_gallery` values('151','121','images/201311/goods_img/121_P_1385665117361.png','','images/201311/thumb_img/121_thumb_P_1385665117951.jpg','images/201311/source_img/121_P_1385665117389.png');");
E_D("replace into `ecs_goods_gallery` values('152','122','images/201311/goods_img/122_P_1385665161033.png','','images/201311/thumb_img/122_thumb_P_1385665161835.jpg','images/201311/source_img/122_P_1385665161965.png');");
E_D("replace into `ecs_goods_gallery` values('158','123','images/201312/goods_img/123_P_1385945992047.jpg','','images/201312/thumb_img/123_thumb_P_1385945992666.jpg','images/201312/source_img/123_P_1385945992261.jpg');");
E_D("replace into `ecs_goods_gallery` values('160','123','images/201312/goods_img/123_P_1385946747210.jpg','','images/201312/thumb_img/123_thumb_P_1385946747655.jpg','images/201312/source_img/123_P_1385946747448.jpg');");
E_D("replace into `ecs_goods_gallery` values('161','123','images/201312/goods_img/123_P_1385946897215.jpg','','images/201312/thumb_img/123_thumb_P_1385946897761.jpg','images/201312/source_img/123_P_1385946897260.jpg');");
E_D("replace into `ecs_goods_gallery` values('159','123','images/201312/goods_img/123_P_1385946654885.jpg','','images/201312/thumb_img/123_thumb_P_1385946654808.jpg','images/201312/source_img/123_P_1385946654117.jpg');");
E_D("replace into `ecs_goods_gallery` values('162','123','images/201312/goods_img/123_P_1385947047265.jpg','','images/201312/thumb_img/123_thumb_P_1385947047753.jpg','images/201312/source_img/123_P_1385947047825.jpg');");
E_D("replace into `ecs_goods_gallery` values('163','147','images/201501/goods_img/147_P_1420976327436.gif','','images/201501/thumb_img/147_thumb_P_1420976327116.jpg','images/201501/source_img/147_P_1420976327071.gif');");
E_D("replace into `ecs_goods_gallery` values('164','147','images/201501/goods_img/147_P_1420976360586.jpg','','images/201501/thumb_img/147_thumb_P_1420976360097.jpg','images/201501/source_img/147_P_1420976360215.jpg');");
E_D("replace into `ecs_goods_gallery` values('165','148','images/201501/goods_img/148_P_1422262736032.jpg','','images/201501/thumb_img/148_thumb_P_1422262736064.jpg','images/201501/source_img/148_P_1422262736056.jpg');");

require("../../inc/footer.php");
?>