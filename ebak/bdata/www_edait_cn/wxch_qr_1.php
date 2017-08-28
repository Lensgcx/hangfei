<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_qr`;");
E_C("CREATE TABLE `wxch_qr` (
  `qid` int(7) NOT NULL AUTO_INCREMENT,
  `type` varchar(2) NOT NULL,
  `expire_seconds` int(4) NOT NULL,
  `action_name` varchar(30) NOT NULL,
  `scene_id` int(7) NOT NULL,
  `ticket` varchar(120) NOT NULL,
  `scene` varchar(200) NOT NULL,
  `qr_path` varchar(200) NOT NULL,
  `subscribe` int(8) unsigned NOT NULL,
  `scan` int(8) unsigned NOT NULL,
  `function` varchar(100) NOT NULL,
  `affiliate` int(8) NOT NULL,
  `endtime` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_qr` values('1','tj','0','QR_LIMIT_SCENE','13','gQEy8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZrd1VtZGptOWRfTVJpZE5NbUJtAAIEQOGyVAMEAAAAAA==','weixin13','http://tx.wushuai.net/images/qrcode/1421009264.jpg','0','0','','13','0','0');");
E_D("replace into `wxch_qr` values('2','tj','0','QR_LIMIT_SCENE','20','gQGo8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL19rd0I1MkhtMTlfdWtUY0VKMkJtAAIEJkC8VAMEAAAAAA==','weixin20','http://wxmiqi.wushuai.net/images/qrcode/1421623334.jpg','0','0','','20','0','0');");
E_D("replace into `wxch_qr` values('3','tj','0','QR_LIMIT_SCENE','26','gQHX8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1pVd3ZlTHJtLWRfRVNxaWZDV0JtAAIE2ofEVAMEAAAAAA==','weixin26','http://wxmiqi.wushuai.net/images/qrcode/1422165978.jpg','0','0','','26','0','0');");
E_D("replace into `wxch_qr` values('4','tj','0','QR_LIMIT_SCENE','27','gQGY8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3BVeEpUVW5ta3QtclRHaWpiMkJtAAIE8sKzVAMEAAAAAA==','weixin27','http://wxmiqi.wushuai.net/images/qrcode/1422166160.jpg','0','0','','27','0','0');");
E_D("replace into `wxch_qr` values('5','tj','0','QR_LIMIT_SCENE','43','gQGL8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1kwd0k5VlRtM3Rfbkw2NFdMbUJtAAIEhuq8VAMEAAAAAA==','weixin43','http://wxmiqi.wushuai.net/images/qrcode/1422171465.jpg','0','0','','43','0','0');");
E_D("replace into `wxch_qr` values('6','tj','0','QR_LIMIT_SCENE','51','gQFn8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3NrdzNUUHJtNnRfVDZYX2tFV0JtAAIEWKvEVAMEAAAAAA==','weixin51','http://wxmiqi.wushuai.net/images/qrcode/1422175064.jpg','0','0','','51','0','0');");
E_D("replace into `wxch_qr` values('7','tj','0','QR_LIMIT_SCENE','60','gQGm8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzQweFRCUC1tZzktNjlTN2hkV0JtAAIEF8TEVAMEAAAAAA==','weixin60','http://wxmiqi.wushuai.net/images/qrcode/1422181399.jpg','0','0','','60','0','0');");
E_D("replace into `wxch_qr` values('8','tj','0','QR_LIMIT_SCENE','63','gQG78DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3pVd3FxeExtd3RfN21RQjJER0JtAAIEn9XEVAMEAAAAAA==','weixin63','http://wxmiqi.wushuai.net/images/qrcode/1422185887.jpg','0','0','','63','0','0');");
E_D("replace into `wxch_qr` values('9','tj','0','QR_LIMIT_SCENE','68','gQEv8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3BFd0Vta2JtMXRfdmxXbDlJbUJtAAIE/erEVAMEAAAAAA==','weixin68','http://wxmiqi.wushuai.net/images/qrcode/1422191357.jpg','0','1','','68','0','0');");
E_D("replace into `wxch_qr` values('10','tj','0','QR_LIMIT_SCENE','67','gQE98DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2Ywd29fQkxtd2RfNGVMSWtEbUJtAAIECjK3VAMEAAAAAA==','weixin67','http://wxmiqi.wushuai.net/images/qrcode/1422193498.jpg','1','1','','67','0','0');");
E_D("replace into `wxch_qr` values('11','tj','0','QR_LIMIT_SCENE','69','gQFG8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2treGNSWjdtc2QtSXBGX2RlbUJtAAIE4gu_VAMEAAAAAA==','weixin69','http://wxmiqi.wushuai.net/images/qrcode/1422194061.jpg','0','0','','69','0','0');");
E_D("replace into `wxch_qr` values('12','tj','0','QR_LIMIT_SCENE','71','gQHk8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2lFd3otay1tMHRfcjFFVXFGV0JtAAIEniu_VAMEAAAAAA==','weixin71','http://wxmiqi.wushuai.net/images/qrcode/1422194811.jpg','0','0','','71','0','0');");
E_D("replace into `wxch_qr` values('13','tj','0','QR_LIMIT_SCENE','77','gQHh7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2VreGZKaUxtdk4tRms3ZndlV0JtAAIEOR/FVAMEAAAAAA==','weixin77','http://wxmiqi.wushuai.net/images/qrcode/1422204729.jpg','0','0','','77','0','0');");
E_D("replace into `wxch_qr` values('14','tj','0','QR_LIMIT_SCENE','78','gQFZ8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0NFeHp4by1tbXQtanJNVWFWV0JtAAIEuiu3VAMEAAAAAA==','weixin78','http://wxmiqi.wushuai.net/images/qrcode/1422206283.jpg','0','0','','78','0','0');");
E_D("replace into `wxch_qr` values('15','tj','0','QR_LIMIT_SCENE','56','gQHp8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2lFd1I4N1hteGRfOEkwVVNOMkJtAAIEPfC1VAMEAAAAAA==','weixin56','http://wxmiqi.wushuai.net/images/qrcode/1422211768.jpg','0','1','','56','0','0');");
E_D("replace into `wxch_qr` values('16','tj','0','QR_LIMIT_SCENE','83','gQGo7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3BVeGFKNWJtanQtM19XakdmR0JtAAIEYn3FVAMEAAAAAA==','weixin83','http://wxmiqi.wushuai.net/images/qrcode/1422228834.jpg','0','0','','83','0','0');");
E_D("replace into `wxch_qr` values('17','tj','0','QR_LIMIT_SCENE','85','gQGz7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZFd2NUY1htOWRfTWpTV1JPbUJtAAIEfWe3VAMEAAAAAA==','weixin85','http://wxmiqi.wushuai.net/images/qrcode/1422231966.jpg','0','0','','85','0','0');");
E_D("replace into `wxch_qr` values('18','tj','0','QR_LIMIT_SCENE','91','gQGM8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0RFd1l0V0htOGRfSU5jRnBQbUJtAAIE//zCVAMEAAAAAA==','weixin91','http://wxmiqi.wushuai.net/images/qrcode/1422239281.jpg','0','0','','91','0','0');");
E_D("replace into `wxch_qr` values('19','tj','0','QR_LIMIT_SCENE','92','gQHh8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1pFd0ZGZGptMmRfZ1JLbjhJMkJtAAIEQ6rFVAMEAAAAAA==','weixin92','http://wxmiqi.wushuai.net/images/qrcode/1422240323.jpg','0','0','','92','0','0');");
E_D("replace into `wxch_qr` values('20','tj','0','QR_LIMIT_SCENE','99','gQGh8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FVeElQOFhtbk4tbHZtVGVibUJtAAIEvtLFVAMEAAAAAA==','weixin99','http://wxmiqi.wushuai.net/images/qrcode/1422250686.jpg','0','0','','99','0','0');");
E_D("replace into `wxch_qr` values('21','tj','0','QR_LIMIT_SCENE','102','gQH37zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL05VeFFhU3ptbk4tbG5maVFkbUJtAAIEpnq4VAMEAAAAAA==','weixin102','http://wxmiqi.wushuai.net/images/qrcode/1422254893.jpg','1','1','','102','0','0');");
E_D("replace into `wxch_qr` values('22','tj','0','QR_LIMIT_SCENE','42','gQH17zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3dVeE1yc2ZtcWQtUVJReF9hbUJtAAIEJNG8VAMEAAAAAA==','weixin42','http://wxmiqi.wushuai.net/images/qrcode/1422257691.jpg','0','0','','42','0','0');");
E_D("replace into `wxch_qr` values('23','tj','0','QR_LIMIT_SCENE','113','gQG38DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FFeC0xTlhtbk4tbFJHVUNXV0JtAAIE7lLAVAMEAAAAAA==','weixin113','http://wxmiqi.wushuai.net/images/qrcode/1422272683.jpg','0','0','','113','0','0');");
E_D("replace into `wxch_qr` values('24','tj','0','QR_LIMIT_SCENE','115','gQGk8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1YweEZTQ1BtcjktVzBacVhZMkJtAAIEIGLAVAMEAAAAAA==','weixin115','http://wxmiqi.wushuai.net/images/qrcode/1422274372.jpg','0','1','','115','0','0');");
E_D("replace into `wxch_qr` values('25','tj','0','QR_LIMIT_SCENE','93','gQFz8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzhFd0lZRXJtMk5faE56MkZMbUJtAAIEIjXGVAMEAAAAAA==','weixin93','http://wxmiqi.wushuai.net/images/qrcode/1422275874.jpg','0','0','','93','0','0');");
E_D("replace into `wxch_qr` values('26','tj','0','QR_LIMIT_SCENE','124','gQFH8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1FVeGg5SHptdmQtRUpJd2RSMkJtAAIERhe6VAMEAAAAAA==','weixin124','http://wxmiqi.wushuai.net/images/qrcode/1422283099.jpg','0','0','','124','0','0');");
E_D("replace into `wxch_qr` values('27','tj','0','QR_LIMIT_SCENE','129','gQHz7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0lVd0tjYzNtNXRfZmNPeW9MR0JtAAIEKFS6VAMEAAAAAA==','weixin129','http://wxmiqi.wushuai.net/images/qrcode/1422288711.jpg','0','0','','129','0','0');");
E_D("replace into `wxch_qr` values('28','tj','0','QR_LIMIT_SCENE','128','gQFt7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL21FeElua1BtbnQtbnFGVjlibUJtAAIEVWfGVAMEAAAAAA==','weixin128','http://wxmiqi.wushuai.net/images/qrcode/1422288725.jpg','0','0','','128','0','0');");
E_D("replace into `wxch_qr` values('29','tj','0','QR_LIMIT_SCENE','62','gQG38DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3lFeGhwSXZtdE4tTkNnVkVSMkJtAAIE6e29VAMEAAAAAA==','weixin62','http://wxmiqi.wushuai.net/images/qrcode/1422296137.jpg','0','1','','62','0','0');");

require("../../inc/footer.php");
?>