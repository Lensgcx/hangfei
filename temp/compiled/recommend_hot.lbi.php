<?php if ($this->_var['hot_goods']): ?>

<div class="title_body ">
  <dl class="hot_list01">
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_98437500_1442342405');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_98437500_1442342405']):
?>
    <dd >
      <div class="hot_img"> <span class="hot"></span>
        <div class="pic"><a href="<?php echo $this->_var['goods_0_98437500_1442342405']['url']; ?>"><img src="<?php echo $this->_var['goods_0_98437500_1442342405']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_98437500_1442342405']['name']); ?>" class="goodsimg" /></a></div>
        <div class="text">
          <p class="name"><a href="<?php echo $this->_var['goods_0_98437500_1442342405']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_98437500_1442342405']['name']); ?>"><?php echo $this->_var['goods_0_98437500_1442342405']['short_style_name']; ?></a></p>
          <p class="brife"> <?php echo $this->_var['goods_0_98437500_1442342405']['brief']; ?></p>
          <p class="price" > <font class="aa"> 
            <?php if ($this->_var['goods_0_98437500_1442342405']['promote_price'] != ""): ?> 
            <?php echo $this->_var['goods_0_98437500_1442342405']['promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['goods_0_98437500_1442342405']['shop_price']; ?> 
            <?php endif; ?> 
            
            </font> <font class="bb"><?php echo $this->_var['goods_0_98437500_1442342405']['market_price']; ?></font> </p>
        </div>
      </div>
      <div class="hot_btn"> <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods_0_98437500_1442342405']['id']; ?>,1,'hot')"></a> </div>
      <div class="hot_line" > </div>
      <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_98437500_1442342405']['id']; ?>_hot"></div>
    </dd>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </dl>
</div>

<?php endif; ?>