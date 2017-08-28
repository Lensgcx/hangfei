<!-- $Id: articlecat_info.htm 16752 2009-10-20 09:59:38Z wangleisvn $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<form method="post" action="articlecat.php" name="theForm"  onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['cat_name']; ?></td>
    <td><input type="text" name="cat_name" maxlength="60" size = "30" value="<?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['parent_cat']; ?></td>
    <td>
      <select name="parent_id" onchange="catChanged()" <?php if ($this->_var['disabled']): ?>disabled="disabled"<?php endif; ?> >
        <option value="0"><?php echo $this->_var['lang']['cat_top']; ?></option>
        <?php echo $this->_var['cat_select']; ?>
      </select>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['sort_order']; ?>:</td>
    <td>
      <input type="text" name='sort_order' <?php if ($this->_var['cat']['sort_order']): ?>value='<?php echo $this->_var['cat']['sort_order']; ?>'<?php else: ?> value="50"<?php endif; ?> size="15" />
    </td>
  </tr>
    <tr>
    <td class="label"><?php echo $this->_var['lang']['show_in_nav']; ?>:</td>
    <td>
      <input type="radio" name="show_in_nav" value="1" <?php if ($this->_var['cat']['show_in_nav'] != 0): ?> checked="true"<?php endif; ?>/> <?php echo $this->_var['lang']['yes']; ?>
      <input type="radio" name="show_in_nav" value="0" <?php if ($this->_var['cat']['show_in_nav'] == 0): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
    </td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('notice_keywords');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['cat_keywords']; ?></td>
    <td><input type="text" name="keywords" maxlength="60" size="50" value="<?php echo htmlspecialchars($this->_var['cat']['keywords']); ?>" />
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="notice_keywords"><?php echo $this->_var['lang']['notice_keywords']; ?></span>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['cat_desc']; ?></td>
    <td><textarea  name="cat_desc" cols="60" rows="4"><?php echo htmlspecialchars($this->_var['cat']['cat_desc']); ?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['cat']['cat_id']; ?>" />
      <input type="hidden" name="old_catname" value="<?php echo $this->_var['cat']['cat_name']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required("cat_name",  no_catname);
    return validator.passed();
}

/**
 * 选取上级分类时判断选定的分类是不是底层分类
 */
function catChanged()
{
  var obj = document.forms['theForm'].elements['parent_id'];

  cat_type = obj.options[obj.selectedIndex].getAttribute('cat_type');
  if (cat_type == undefined)
  {
    cat_type = 1;
  }

  if ((obj.selectedIndex > 0) && (cat_type == 2 || cat_type == 3 || cat_type == 5))
  {
    alert(sys_hold);
    obj.selectedIndex = 0;
    return false;
  }

  return true;
}

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>