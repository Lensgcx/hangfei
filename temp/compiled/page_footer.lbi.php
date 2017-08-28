

<?php if ($this->_var['helps']): ?>
<div class="footTop "> 
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
  <ul>
    <li  class="foot_help foot_help_<?php echo $this->_foreach['no']['iteration']; ?> "><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></li>
    <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>
<?php endif; ?>
<div class="footBottom_blog clearfix">
  <div class="footBlog_01"> </div>
  <div class="footBlog_02"> <a href="http://itunes.apple.com/cn/app/id522502776" target="_blank"></a> </div>
  <div class="footBlog_03"> <a href="http://t.sina.com.cn/miqimm" target="_blank"></a> </div>
  <div class="footBlog_04"> </div>
</div>
<div class="footBottom_line">
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_01.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_02.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_03.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_04.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_05.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_06.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_07.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_08.gif" border="0"> </div>
</div>
<div class="footer_txt">
  <p><span class="arial">© </span><span class="weiruan">2015 HAOID.CN</span> 所有设计和内容保留一切权利 <a href="http://www.miibeian.gov.cn/" target="_blank" style="color:#666;">京ICP备10056078号</a> 京公网安备110105005750  米奇网客服热线：4000-800-777(每天09:00-18:00)</p>
  <p class="lightGrey">CEO邮箱 ceo@miqi.cn   投诉邮箱 tousu@miqi.cn</p>
</div>
<div class="footBottom_list">
  <ul>
    <li>
      <div class="one"><a href="#" target="_blank"></a></div>
    </li>
    <li>
      <div class="two"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
    <li>
      <div class="three"><a href="#" target="_blank"></a></div>
    </li>
    <li>
      <div class="four"><a href="#"></a></div>
    </li>
    <li>
      <div class="five"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
    <li>
      <div class="six"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
  </ul>
</div>

 
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
  <div class="box_1">
    <div class="links clearfix"> 
      <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php if ($this->_var['txt_links']): ?> 
      <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
</div>
<?php endif; ?> 






<div id="bottomNav" class="box" style="display:none">
  <div class="bNavList clearfix">
    <div class="f_l"> 
      <?php if ($this->_var['navigator_list']['bottom']): ?> 
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_07812500_1442342406');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_07812500_1442342406']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav_0_07812500_1442342406']['url']; ?>" <?php if ($this->_var['nav_0_07812500_1442342406']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_07812500_1442342406']['name']; ?></a> 
      <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
      - 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
</div>

<div class="blank"></div>

<div id="footer" style="height:1px; width:1px; overflow:hidden; background:none;">
  <div class="text"> <?php echo $this->_var['copyright']; ?><br />
    <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
    <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?> 
    <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/miqinew/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/miqinew/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
    <?php if ($this->_var['icp_number']): ?> 
    <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
    <?php endif; ?> 
    <?php 
$k = array (
  'name' => 'query_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><br />
    <?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php echo $this->_var['licensed']; ?><br />
    <?php if ($this->_var['stats_code']): ?>
    <div align="left"><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
    <div align="left"  id="rss"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/miqinew/images/xml_rss2.gif" alt="rss" /></a></div>
  </div>
</div>
<div id="topcontrol" style="width:60px;">
  <div class="nreturn"> <a target="_blank" id="sider_talkonline" href="http://www.miqi.cn/order-shoppingcart" class="ntel buy" style="display: block;">购物袋</a> <a target="_blank" id="sider_talkonline" href="http://chat32.live800.com/live800/chatClient/chatbox.jsp?companyID=128742&amp;configID=34167&amp;jid=6712194369" class="ntel kf " style="display: block;">客服</a> <a id="sider_addmark" href="javascript:void(0);" class="ntel sider_addmark" style="display: block;">收藏</a> <a id="sider_returntop" href="javascript:void(0);" class="ntel sider_returntop" style="display: block;">回顶部</a> </div>
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})
</script>