<?php if ($this->_var['new_goods']): ?>

<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_00000000_1442342406');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_00000000_1442342406']):
?>
<dd >
  <div class="hot_img"> <span class="hot"></span>
    <div class="text">
      <p class="name"><a href="<?php echo $this->_var['goods_0_00000000_1442342406']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_00000000_1442342406']['name']); ?>"><?php echo $this->_var['goods_0_00000000_1442342406']['short_style_name']; ?></a></p>
      <p class="brife"> <?php echo $this->_var['goods_0_00000000_1442342406']['brief']; ?></p>
      <p class="price" > <font class="aa"> 
        <?php if ($this->_var['goods_0_00000000_1442342406']['promote_price'] != ""): ?> 
        <?php echo $this->_var['goods_0_00000000_1442342406']['promote_price']; ?> 
        <?php else: ?> 
        <?php echo $this->_var['goods_0_00000000_1442342406']['shop_price']; ?> 
        <?php endif; ?> 
        </font> <font class="bb"><?php echo $this->_var['goods_0_00000000_1442342406']['market_price']; ?></font> </p>
    </div>
    <div class="pic"> <a href="<?php echo $this->_var['goods_0_00000000_1442342406']['url']; ?>"><img src="<?php echo $this->_var['goods_0_00000000_1442342406']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_00000000_1442342406']['name']); ?>" class="goodsimg" /></a></div>
  </div>
   <div class="hot_btn"> <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods_0_00000000_1442342406']['id']; ?>,1,'new')"  ></a> </div>
      <div class="hot_line" > </div>
      <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_00000000_1442342406']['id']; ?>_new">

</div>
</dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

<?php endif; ?> 
