<div class="left_nav">
        <div class="leftNav" id="J_mainCata">
          <ul>
            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_95312500_1442342405');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_95312500_1442342405']):
        $this->_foreach['categories_pro']['iteration']++;
?>
            <li>
              <p class="leftNav_p0<?php echo $this->_foreach['categories_pro']['iteration']; ?>"><a class="a1" href="<?php echo $this->_var['cat_0_95312500_1442342405']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat_0_95312500_1442342405']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat_0_95312500_1442342405']['name']); ?></a></p>
              <div class="childer_hide" >
                <?php $_from = $this->_var['cat_0_95312500_1442342405']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                <a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        

          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			          <?php $_from = $this->_var['cat_0_95312500_1442342405']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></p>
                <dl>
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                  <dd><a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  <div class="blank"></div>
                </dl>
              </div>
			     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                <?php $_from = $this->_var['cat_0_95312500_1442342405']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <dd>
                  <?php if ($this->_var['brand']['brand_logo']): ?>
                  <a href="<?php echo $this->_var['brand']['url']; ?>" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /></a>
                  <?php else: ?>
                  <a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a>
                  <?php endif; ?>
                </dd>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </dl>
              <div class="leftSubNav_list_img"> <a href="#" target="_blank"><img src="" border="0" width="296"></a> </div>
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        
        
      </div>