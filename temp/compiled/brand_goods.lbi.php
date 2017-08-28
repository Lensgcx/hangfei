<div class="user_loves lshadow">
 <h2 class="mall_leftTitle c333">同品牌产品推荐</h2>
     <ul class="pro_list">
  
      <?php $_from = $this->_var['brand_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03125000_1442342428');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_03125000_1442342428']):
?>
     <li >
           <a href="<?php echo $this->_var['goods_0_03125000_1442342428']['url']; ?>" class="pro_pic"><img src="<?php echo $this->_var['goods_0_03125000_1442342428']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_03125000_1442342428']['name']); ?>"  width="120" height="120" /></a><br />
           <a href="<?php echo $this->_var['goods_0_03125000_1442342428']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_03125000_1442342428']['name']); ?>" class="pro_title"><?php echo htmlspecialchars($this->_var['goods_0_03125000_1442342428']['short_name']); ?></a>
            <p class="already_sold">已售出 <?php echo $this->_var['goods_0_03125000_1442342428']['sales_volume']; ?> 件</p>
             <p class="pro_price">
              <a  href="<?php echo $this->_var['goods_0_03125000_1442342428']['url']; ?>" >
            <?php if ($this->_var['goods_0_03125000_1442342428']['promote_price'] != ""): ?>
            <font class="shop_s"><?php echo $this->_var['goods_0_03125000_1442342428']['promote_price']; ?></font>
            <?php else: ?>
            <font class="shop_s"><?php echo $this->_var['goods_0_03125000_1442342428']['shop_price']; ?></font>
            <?php endif; ?>
            </a>
            </p>
        </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <div class="more"><a href="<?php echo $this->_var['goods_brand']['url']; ?>">更多</a></div>
 </ul>
</div>
<div class="blank5"></div>
