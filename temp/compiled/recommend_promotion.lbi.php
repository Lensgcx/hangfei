<?php if ($this->_var['promotion_goods']): ?>
<dt>
  <div class="hot_img"> <span class="hot"></span> 
    <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98437500_1442342405');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_98437500_1442342405']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
    <div class="text">
      <p class="name"><a href="<?php echo $this->_var['goods_0_98437500_1442342405']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_98437500_1442342405']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_98437500_1442342405']['short_name']); ?></a></p>
      <p class="brife"> <?php echo $this->_var['goods_0_98437500_1442342405']['brief']; ?></p>
      <p class="price" > <font class="aa"> <?php echo $this->_var['goods_0_98437500_1442342405']['promote_price']; ?></font> <font class="bb"><?php echo $this->_var['goods_0_98437500_1442342405']['market_price']; ?></font> </p>
    </div>
    <div class="pic"> <a href="<?php echo $this->_var['goods_0_98437500_1442342405']['url']; ?>"><img src="<?php echo $this->_var['goods_0_98437500_1442342405']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods_0_98437500_1442342405']['name']); ?>"/></a></div>
    
  <div class="hot_btn"><a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods_0_98437500_1442342405']['id']; ?>,1,'promotion')"  ></a> </div>
  <div class="hot_line" > </div>
  <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_98437500_1442342405']['id']; ?>_promotion">
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  
</div>
</dt>
 
<?php endif; ?>