
<div class="title_list">
  <div class="title_txt"><a href="<?php echo $this->_var['goods_cat']['url']; ?>" ><img src="themes/miqinew/images/cat/<?php echo $this->_var['goods_cat']['id']; ?>.jpg"> </a> </div>
  <div class="title_more"> <a href="<?php echo $this->_var['goods_cat']['url']; ?>" target="_blank">更多<?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></a> </div>
  <div class="title_key">
    <dl>
      <?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_01562500_1442342406');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_01562500_1442342406']):
        $this->_foreach['foo']['iteration']++;
?>
      <dd><a href="<?php echo $this->_var['cat_0_01562500_1442342406']['url']; ?>" target="_blank" title="<?php echo $this->_var['cat_0_01562500_1442342406']['name']; ?>"><?php echo $this->_var['cat_0_01562500_1442342406']['name']; ?></a></dd>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
    </dl>
  </div>
</div>
<div class="title_body">
<div id="slideBox1" class="slideBox1"> <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['adarr'],
  'id' => $this->_var['cat_goods']['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
  <script type="text/javascript">
		jQuery(".slideBox1").slide({mainCell:".bd ul",autoPlay:true});
		</script>
  <div class="brand_right" >
    <div class="brand_list_out"> 
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_01562500_1442342406');$this->_foreach['nocat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocat']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_01562500_1442342406']):
        $this->_foreach['nocat']['iteration']++;
?> 
      <?php if (! ($this->_foreach['nocat']['iteration'] == $this->_foreach['nocat']['total'])): ?>
      <div class="brand_list">
        <div class="brand_img"> <a href="<?php echo $this->_var['goods_0_01562500_1442342406']['url']; ?>"><img src="<?php echo $this->_var['goods_0_01562500_1442342406']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_01562500_1442342406']['name']); ?>" width="170" height="170" /></a></div>
        <div class="brand_txt"> <b><a href="<?php echo $this->_var['goods_0_01562500_1442342406']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_01562500_1442342406']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_01562500_1442342406']['short_name']); ?></a></b>
          <p> 
            <?php if ($this->_var['goods_0_01562500_1442342406']['promote_price'] != ""): ?> 
            <font class="shop_s"><?php echo $this->_var['goods_0_01562500_1442342406']['promote_price']; ?></font> 
            <?php else: ?> 
            <font class="shop_s"><?php echo $this->_var['goods_0_01562500_1442342406']['shop_price']; ?></font> 
            <?php endif; ?> 
            <font class="marker_s"><?php echo $this->_var['goods_0_01562500_1442342406']['market_price']; ?></font> </p>
        </div >
      </div>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
  </div>
  <div class="brand_logo">
    <dl>
    
    <?php $_from = $this->_var['goods_cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brands']):
        $this->_foreach['foo']['iteration']++;
?>
    
    
     <dd> <a href="<?php echo $this->_var['brands']['url']; ?>" target="_blank" title="<?php echo $this->_var['brands']['brand_name']; ?>"> <?php if ($this->_var['brands']['logo'] != 'data/brandlogo/'): ?><img width="78" height="40" border="0" alt="<?php echo $this->_var['brands']['brand_name']; ?>" src="<?php echo $this->_var['brands']['logo']; ?>"><?php else: ?><?php echo $this->_var['brands']['brand_name']; ?><?php endif; ?></a> </dd>
     
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
     
    </dl>
  </div>
</div>
