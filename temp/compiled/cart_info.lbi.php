  <Div class="shop_txt"> <a class="aa" href="flow.php">
<?php echo $this->_var['str']; ?>

  <?php if ($this->_var['goods']): ?>
  <a href="flow.php">
<div class="shopBody" id="shopBody">
<ul>
 <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_14062500_1442342406');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_14062500_1442342406']):
        $this->_foreach['goods']['iteration']++;
?>
 <li class="shopWhite">

 <div class="shopLi_img">
 <a href="<?php echo $this->_var['goods_0_14062500_1442342406']['url']; ?>"><img src="<?php echo $this->_var['goods_0_14062500_1442342406']['goods_thumb']; ?>" style="width:43px; height:43px;" alt="<?php echo $this->_var['goods_0_14062500_1442342406']['goods_name']; ?>"></a>
  </div>
  <div class="shopLi_txt">
 <p><a  href="<?php echo $this->_var['goods_0_14062500_1442342406']['url']; ?>"><?php echo $this->_var['goods_0_14062500_1442342406']['short_name']; ?></a></p>
 
 
<p class="shopLi_pink"><span><?php echo $this->_var['goods_0_14062500_1442342406']['goods_price']; ?></span><span style=" color:#999">×<?php echo $this->_var['goods_0_14062500_1442342406']['goods_number']; ?></span></p> 
 </div>
<div class="shopLi_del"><a  href="javascript:" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_14062500_1442342406']['rec_id']; ?>)">删除</a></div>


</li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </ul>
 <div class="shopSet">
                    <div class="set_txt">
                        <p>共计<span class="arial">¥</span><span class="set_gray"><?php echo $this->_var['amount']; ?></span></p>
                    </div>
                    <div class="set_btn">
                        <a href="flow.php"></a>
                    </div>
                </div>
 
</div>
</a>
<?php else: ?>
<div class="shopBody">

<p class="shopNo">购物袋内还没有商品，赶快选购吧！</p>

</div>
<?php endif; ?>

</a> </Div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>

