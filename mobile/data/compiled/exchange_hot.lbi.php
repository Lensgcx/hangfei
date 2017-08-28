<?php if ($this->_var['hot_goods']): ?>
<style type="text/css">
.picScroll3 {
	margin:10px auto;
	text-align:center;
}
.picScroll3 .bd ul {
	width:100%;
	float:left;
	padding-top:10px;
}
.picScroll3 .bd li {
	width:33%;
	float:left;
	font-size:14px;
	text-align:center;
}
.picScroll3 .bd li a {
	-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */
}
.picScroll3 .bd li img {
	width:100px;
	height:100px;
}
.picScroll3 .hd {
	display:None
}
</style>
<div class="item_show_box2 box1 region" style="overflow:hidden">
<div id="picScroll3" class="picScroll3">
<div class="hd">
  <ul>
  </ul>
</div>
<div class="bd">
<ul>
   <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <li><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['thumb']; ?>" /></a> 
    <span class="price_s"> <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?> </a></span> <br/>
     <?php echo $this->_var['lang']['exchange_integral']; ?><span class="price_s"><?php echo $this->_var['goods']['exchange_integral']; ?></span> 
  </li>
  <?php if ($this->_foreach['best_goods']['iteration'] % 3 == 0): ?>
</ul>
<ul>
<?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<div class="position_a_lt">
  <div> </div>
  <a href="search.php?intro=best">
  <p> 热卖 </p>
  <p class="ico_04"> </p>
  </a> </div>
<div class="position_a_rb">
  <div> </div>
  <a href="search.php?intro=best">
  <p class="ico_04_b"> </p>
  <p>  </p>
  </a> </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll3",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script> 
<?php endif; ?>