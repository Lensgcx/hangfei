<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
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
E_D("replace into `ecs_template` values('index','左边区域','/library/vote_list.lbi','8','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/email_list.lbi','9','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/order_query.lbi','6','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/cart.lbi','0','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/promotion_info.lbi','3','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/auction.lbi','4','0','3','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/group_buy.lbi','5','0','3','0','default','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_hot.lbi','2','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_new.lbi','1','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_best.lbi','0','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/invoice_query.lbi','7','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/top10.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/category_tree.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','11','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/category_tree.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/recommend_best.lbi','0','0','5','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/goods_list.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/pages.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/cart.lbi','0','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/price_grade.lbi','3','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/filter_attr.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('goods','左边区域2','/library/brand_goods.lbi','0','14','5','2','miqinew','');");
E_D("replace into `ecs_template` values('goods','左边区域','/library/goods_related.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','','/library/recommend_hot.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','','/library/top10.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','','/library/recommend_best.lbi','0','0','10','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','','/library/recommend_new.lbi','0','0','10','0','miqinew','');");
E_D("replace into `ecs_template` values('index','商品区域三','/library/cat_goods.lbi','0','16','10','1','miqinew','');");
E_D("replace into `ecs_template` values('index','商品区域四','/library/cat_goods.lbi','0','17','10','1','miqinew','');");
E_D("replace into `ecs_template` values('index','商品区域二','/library/cat_goods.lbi','0','1','10','1','miqinew','');");
E_D("replace into `ecs_template` values('index','商品区域一','/library/cat_goods.lbi','0','6','10','1','miqinew','');");
E_D("replace into `ecs_template` values('index','邮件订阅','/library/email_list.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('index','邮件订阅','/library/order_query.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','25','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','右边可编辑区域','/library/bought_note_guide.lbi','2','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','','/library/recommend_promotion.lbi','0','0','4','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','右边可编辑区域','/library/goods_tags.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','右边可编辑区域','/library/comments.lbi','3','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('goods','右边可编辑区域','/library/bought_goods.lbi','1','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('flow','','/library/recommend_promotion.lbi','0','0','10','0','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_goods','品牌专区','/library/goods_related.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_goods','品牌专区','/library/brands.lbi','0','0','16','0','miqinew','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/history.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','20','0','miqinew','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_hot.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/goods_list.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/pages.lbi','1','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','1','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','3','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','2','0','miqinew','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','2','0','miqinew','');");
E_D("replace into `ecs_template` values('index','热销排行榜','/library/top10.lbi','0','0','0','0','miqinew','');");
E_D("replace into `ecs_template` values('index','商品区域五','/library/cat_goods.lbi','0','12','10','1','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表页右侧广告一','/library/ad_position.lbi','0','11','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表页右侧广告三','/library/ad_position.lbi','0','13','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表页右侧广告二','/library/ad_position.lbi','0','12','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','品牌专区','/library/brands.lbi','0','0','16','0','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表左侧广告一','/library/ad_position.lbi','0','7','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表左侧广告二','/library/ad_position.lbi','0','8','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表左侧广告三','/library/ad_position.lbi','0','9','1','4','miqinew','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表左侧广告四','/library/ad_position.lbi','0','10','1','4','miqinew','');");

require("../../inc/footer.php");
?>