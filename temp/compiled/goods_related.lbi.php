<?php if ($this->_var['related_goods']): ?>
<div class="user_loves lshadow">
<h2 class="mall_leftTitle c333"><?php echo $this->_var['lang']['releate_goods']; ?></h2>
 <ul class="pro_list">
     
      <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
       
          <li >
          <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" class="pro_pic"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"  width="120" height="120"/></a>
 
        <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class="pro_title"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a>
        <p class="already_sold">已售出 <?php echo $this->_var['goods']['sales_volume']; ?> 件</p>
        <p class="pro_price">
        <a>
        <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
        <font class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font>
        <?php else: ?>
       <font class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font>
        <?php endif; ?>
        </a>
        </p>
          </li>
       
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
     </div>
<div class="blank5"></div>
<?php endif; ?>
