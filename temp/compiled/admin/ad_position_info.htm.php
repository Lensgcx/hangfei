<!-- $Id: ad_position_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
  <form action="ad_position.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
    <table width="100%">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['position_name']; ?></td>
        <td><input type="text" name="position_name" value="<?php echo $this->_var['posit_arr']['position_name']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['ad_width']; ?></td>
        <td><input type="text" name="ad_width" value="<?php echo $this->_var['posit_arr']['ad_width']; ?>" size="30" /> <?php echo $this->_var['lang']['unit_px']; ?></td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['ad_height']; ?></td>
        <td>
          <input type="text" name="ad_height" value="<?php echo $this->_var['posit_arr']['ad_height']; ?>" size="30" /> <?php echo $this->_var['lang']['unit_px']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['position_desc']; ?></td>
        <td>
          <input type="text" name="position_desc" size="55" value="<?php echo $this->_var['posit_arr']['position_desc']; ?>" />
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['posit_style']; ?></td>
        <td>
          <textarea name="position_style" cols="55" rows="6"><?php echo $this->_var['posit_arr']['position_style']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td class="label">&nbsp;</td>
        <td>
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
        </td>
      </tr>
     <tr>
       <td colspan="2">
         <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
         <input type="hidden" name="id" value="<?php echo $this->_var['posit_arr']['position_id']; ?>" />
       </td>
     </tr>
    </table>
  </form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--

document.forms['theForm'].elements['position_name'].focus();

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required("position_name",   posit_name_empty);
    validator.required("ad_width",        ad_width_empty);
    validator.required("ad_height",       ad_height_empty);
    validator.isNumber("ad_width",        ad_width_number, true);
    validator.isNumber("ad_height",       ad_height_number, true);
    validator.required("position_style",  empty_position_style);

    if (document.forms['theForm'].elements['ad_width'].value > 1024 || document.forms['theForm'].elements['ad_width'].value == 0)
    {
        alert(width_value);
        return false;
    }
    if (document.forms['theForm'].elements['ad_height'].value > 1024 || document.forms['theForm'].elements['ad_height'].value == 0)
    {
        alert(height_value);
        return false;
    }

    return validator.passed();
}
//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
