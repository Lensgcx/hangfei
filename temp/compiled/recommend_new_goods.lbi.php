<?php if ($this->_var['new_goods']): ?>
<div class=" top_10_goods lshadow">
   <div class="boxCenterList2"> 
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_04687500_1442342428');$this->_foreach['no2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no2']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_04687500_1442342428']):
        $this->_foreach['no2']['iteration']++;
?>

<ul
  
   
    <?php if (! ($this->_foreach['no2']['iteration'] == $this->_foreach['no2']['total'])): ?>
    style=" border-bottom:1px solid #F2F2F2; "
    <?php endif; ?>
    class="clearfix ul_list"  id=top3s<?php echo $this->_foreach['no2']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['no2']['iteration']; ?>,'top3')">
    <div class="iteration2" > <?php echo $this->_foreach['no2']['iteration']; ?> </div>
    <li  <?php if ($this->_foreach['no2']['iteration'] < 2): ?> class="iteration1"<?php endif; ?> > <a href="<?php echo $this->_var['goods_0_04687500_1442342428']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_04687500_1442342428']['name']); ?>" style="float:left"><?php echo $this->_var['goods_0_04687500_1442342428']['short_style_name']; ?></a>
    </li>
    </ul>
    
     <ul 
  
   
    <?php if (! ($this->_foreach['no2']['iteration'] == $this->_foreach['no2']['total'])): ?>
    style=" border-bottom:1px solid #F2F2F2; "
    <?php endif; ?>
    class="clearfix ul_box"  id=top3b<?php echo $this->_foreach['no2']['iteration']; ?> >
     <div class="iteration"> <?php echo $this->_foreach['no2']['iteration']; ?> </div>
    <div class="rank_txt"><a href="<?php echo $this->_var['goods_0_04687500_1442342428']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_04687500_1442342428']['name']); ?>"><?php echo $this->_var['goods_0_04687500_1442342428']['short_style_name']; ?></a></div>
    <div class="rank_img " > <a href="<?php echo $this->_var['goods_0_04687500_1442342428']['url']; ?>"><img src="<?php echo $this->_var['goods_0_04687500_1442342428']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_04687500_1442342428']['name']); ?>"  width="85" height="85"/></a> </div>
    <li <?php if ($this->_foreach['no2']['iteration'] < 2): ?> class="iteration1" <?php endif; ?> >
    <div class="rank_text left"  ><p class="rank_price"><?php echo $this->_var['goods_0_04687500_1442342428']['shop_price']; ?></p><p class="already_sold">已售出 <?php echo $this->_var['goods_0_04687500_1442342428']['sales_volume']; ?> 件</p></div>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <SCRIPT type=text/javascript> window.onload = show_goodspic(3,'top3');</SCRIPT>
  </div>
</div>

<?php endif; ?> 
