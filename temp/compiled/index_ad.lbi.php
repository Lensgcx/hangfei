 
<div id="slideBox" class="slideBox">
  <div class="hd">
    <ul>
      <li class="first"> </li>
      <li> </li>
      <li> </li>
    </ul>
  </div>
  <div class="bd">
    <ul>
    <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_96875000_1442342405');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_96875000_1442342405']):
        $this->_foreach['myflash']['iteration']++;
?>
  <li><A href="<?php echo $this->_var['flash_0_96875000_1442342405']['url']; ?>" target=_blank><IMG height=265 alt="" src="<?php echo $this->_var['flash_0_96875000_1442342405']['src']; ?>" width=725></A> </li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </ul>
  </div>
  
  
  <div class="banner_btn_left" > <a class="prev" href="javascript:void(0)"></a> </div>
  <div class="banner_btn_right"> <a class="next" href="javascript:void(0)"></a> </div>
</div>

<script type="text/javascript">
		jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",trigger:"click"});
		</script> 
