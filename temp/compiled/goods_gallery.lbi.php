<div class="mod_picfold clearfix">
  <div id="detail_main_img" class="imgbox">
    <div class="layout_wrap">
      <div class="prodimg"  title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>">  <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: on; zoom-distance: 22;zoom-width: 450; zoom-height: 450;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img id="J_prodImg" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a></div>
      <div class="tabbox clearfix">
        <div id="detail_img_slider" class="imgtab">
          <div class="imgtab_clip" id="J_tabSlider">
            <ul class="imgtab_con">
              <?php if ($this->_var['pictures']): ?> 
              <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['foo']['iteration']++;
?>
              <li <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="cur"<?php endif; ?>> <a href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a> </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?>
            </ul>
          </div>
          <div id="detail_imgNextOrPreBtnDiv" class="imgtab_trrigle"> <a href="javascript:void(0);" class="pre_btn"> << </a> <a href="javascript:void(0);" class="next_btn"> >></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>