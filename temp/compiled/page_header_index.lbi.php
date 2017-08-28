<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header ">
  <div class="headBody">
    <div class="heads">
      <div class="bookmail">
        <ul>
          <li class="background_ico"><a href="#" target="_blank" rel="nofollow">手机版<span>MIQI</span></a></li>
          <li class="background_line"><a href="#" target="_blank" rel="nofollow">邀请好友</a></li>
          <li><a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">加入收藏</a></li>
          <li class="background_pay">关注<span>MIQI</span><span class="arrow"></span>
            <div class="bookmail_more">
              <ul>
                <li class="more01"><a href="#">新浪微博</a></li>
                <li class="more02"><a href="#">腾讯微博</a></li>
                <li class="more03"><a href="#">QQ空间</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="user_control">
        <ul>
          <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
          <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,ecmoban_common.js')); ?> 
          <font id="ECS_MEMBERZONE" style="display:block; float:left;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
          <?php if ($this->_var['navigator_list']['top']): ?>
          <li id="topNav" class="clearfix">
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" 
            <?php if ($this->_var['nav']['opennew'] == 1): ?>
            target="_blank"
            <?php endif; ?>
            ><?php echo $this->_var['nav']['name']; ?></a>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
            |
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <div class="topNavR"></div>
          </li>
          <?php endif; ?>
          <li><a class="head_blog" href="user.php?act=oath&type=weibo">微博登录</a></li>
          <li><a class="head_qq" href="user.php?act=oath&type=qq"><span class="arial">QQ</span>登录</a></li>
          <li style="background:none;"><a class="head_alipay " href="user.php?act=oath&type=alipay">支付宝登录</a></li>
        </ul>
      </div>
    </div>
    <div class="headBox">
      <div class="logo"><a href="index.php" name="top"><img src="themes/miqinew/images/logo.gif" /></a></div>
      
      <div id="search"  class="headSearch">
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
          <div class="headSearch_input">
            <input name="keywords" type="text" id="keyword" value="美体小铺" onclick="javascript:if(this.value=='美体小铺')this.value=''"  />
          </div>
          <div class="headSearch_btn">
            <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
          </div>
        </form>
      </div>
      
      <div class="shop_txt_out" id="ECS_CARTINFO" >
       <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
    </div>
    <div class="headNav">
      <div class="classNav"> <a class="classNav_a" href="#">全部商品分类</a> </div>
      <div class="subNav">
        <ul>
          <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>> <a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <li <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
          <?php if ($this->_var['nav']['cat_list']): ?>
<div class='sub_nav'>
<dl>
<?php $_from = $this->_var['nav']['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
<dd>
<a class="t" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
</dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
</div>
<?php endif; ?>
          
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="rightNav">
        <ul>
          <li><a href="#">正在购买</a></li>
          <li><a href="#">帮助中心</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
