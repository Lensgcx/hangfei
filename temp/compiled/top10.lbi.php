<div class="slideTxtBox1">
  <div class="hd">
    <div class="title_txt"> <img src="themes/miqinew/images/title_txt08.jpg" border="0"> </div>
    
  </div>
  <div class="title_body">
    <div class="bd">
      <ul>
        <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_04687500_1442342406');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_04687500_1442342406']):
        $this->_foreach['top_goods']['iteration']++;
?>
        <li>
        
      
          <div class="topimg"> <a href="<?php echo $this->_var['goods_0_04687500_1442342406']['url']; ?>"><img src="<?php echo $this->_var['goods_0_04687500_1442342406']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_04687500_1442342406']['name']); ?>" style="width:220px; height:220px;" /></a>
          
          <div class="top_num01"> <img src="themes/miqinew/images/top_<?php echo $this->_foreach['top_goods']['iteration']; ?>.gif" class="iteration"  /> </div>
          
          
           </div>
         
          <div class="top_txt"> <b><a href="<?php echo $this->_var['goods_0_04687500_1442342406']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_04687500_1442342406']['name']); ?>"><?php echo $this->_var['goods_0_04687500_1442342406']['short_name']; ?></a></b>
            <p><?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['goods_0_04687500_1442342406']['price']; ?></font></p>
            <p><?php echo $this->_var['goods_0_04687500_1442342406']['goods_number']; ?>人已购买</p>
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      
      
       
      
    </div>
  </div>
</div>
<script type="text/javascript">
		jQuery(".slideTxtBox1").slide({trigger:"click"});
		</script>
<div class="blank5"></div>
