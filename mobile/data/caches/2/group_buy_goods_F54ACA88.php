<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:62:"/alidata/www/hangfei/mobile/themes/miqinew/group_buy_goods.dwt";i:1;s:66:"/alidata/www/hangfei/mobile/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1471446372;s:8:"maketime";i:1471442772;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>雅顿保湿调理露200ml_团购商品_创乐惠商城 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/miqinew/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/miqinew/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/miqinew/ectouch.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="data/static/js/common.js"></script><script type="text/javascript" src="data/static/js/lefttime.js"></script><script type="text/javascript">
      var process_request = "正在处理您的请求...";
      var goodsname_not_null = "商品名不能为空！";
  </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="./"> 返回 </a> </div>
    <h1> 团购商品详情 </h1>
  </header>
  
  <section class="goods_slider">
    <div class="blank2"></div>
    <div id="slideBox" class="slideBox">
      <div class="scroller">
        <ul>
          <li><a href="javascript:showPic()"><img alt="雅顿保湿调理露200ml" src="http://hf.zhuzhunet.net/images/201311/thumb_img/12_thumb_G_1384995644320.jpg"/></a></li>
        </ul>
      </div>
    </div>
    <div class="blank2"></div>
  </section>
   
  
  <section class="goodsInfo">
    <div class="title">
      <h1>雅顿保湿调理露200ml</h1>
       
       
       
    </div>
    <ul>
            <li>保证金：￥<span>50.00</span></li>
       
       
            <li> 赠送积分： 50 </li>
       
            <li><font class="f4">该团购活动正在火热进行中，距离结束时间还有： <span id="leftTime" class="price">请稍等, 正在载入中...</span></font></li>
      <li>当前价格： <b class="price">￥<span>78.00</span></b></li>
      <li>当前定购数量： 0</li>
          </ul>
    <table  width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
      <tr>
        <th width="30%" bgcolor="#FFFFFF">数量</th>
        <th width="70%" bgcolor="#FFFFFF">价格</th>
      </tr>
            <tr>
        <td bgcolor="#FFFFFF" align="center" style="padding:5px">5</td>
        <td bgcolor="#FFFFFF" align="center">￥<span>78.00</span></td>
      </tr>
          </table>
  </section>
   
  
  <div class="wrap">
    <section class="goodsBuy radius5">
      <input id="goodsBuy-open" type="checkbox">
      <label class="info" for="goodsBuy-open">
      <div>请选择<span>外        观</span><i></i></div>
      <div class="selected"> </div>
      </label>
      <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
        <div class="fields">
          <ul class="ul1">
            <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price">￥<span>78.00</span></font></li>
          </ul>
          <ul class="ul2">
             
                        <li>
              <h2>外        观：</h2>
              <div class="items"> 
               外        观                                                    <input type="radio" name="spec_213" value="321" id="spec_value_321" checked onclick="changePrice()" />
                    <label for="spec_value_321">红色</label> 
                                         <input type="radio" name="spec_213" value="322" id="spec_value_322"  onclick="changePrice()" />
                    <label for="spec_value_322">金色</label> 
                                         <input type="radio" name="spec_213" value="323" id="spec_value_323"  onclick="changePrice()" />
                    <label for="spec_value_323">黄色</label> 
                                        <input type="hidden" name="spec_list" value="2" />
                             </div>
            </li>
             
            
          </ul>
           
        </div>
        <div class="option" > 
          <script type="text/javascript">
            function showDiv(){
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
                     提示：您需要先注册成为本站会员并且登录后，才能参加商品团购!                    <input type="hidden" name="group_buy_id" value="17" />
        </div>
      </form>
    </section>
    
    
<section class="s-detail">
<div id="tab1">
    <div class="desc wrap">
      <div class="blank2"></div>
          </div>
  </div>
</section>
  </div>
</div>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
 
  <p class="link region"> <!--<a href="http://hf.zhuzhunet.net/?computer=1"> 电脑版 </a> <a href="./"> 触屏版 </a> <a href="#"> 苹果客户端 </a> <a class="#"> Android客户端 </a> --></p>
  <p class="region"> 
     
    &copy; 2005-2016 创乐惠商城 版权所有，并保留所有权利。 </p>
    <br/> 
    <br/>
<div class="favLink region"> </div>
</div>
<link href="themes/miqinew/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav   global-nav--current">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<script type="text/javascript" src="themes/miqinew/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> 
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 
<script type="text/javascript" src="data/static/js/transport.js"></script><script type="text/javascript" src="data/static/js/utils.js"></script> 
<script type="text/javascript">
var gmt_end_time = "1921651200";
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var now_time = 1471413972;
onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}
</script>
</body>
</html>