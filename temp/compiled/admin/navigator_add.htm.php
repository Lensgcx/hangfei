<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<div class="main-div">
<form action="navigator.php" method="post" name="form" onSubmit="return checkForm();">
<table cellspacing="1" cellpadding="3" width="100%">
<tr>
    <td><?php echo $this->_var['lang']['system_main']; ?></td> <td>
        <select onchange="add_main(this.value);" name="menulist" id="menulist">
            <option value='-'>-</option>
            <?php $_from = $this->_var['sysmain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
                <option value='<?php echo $this->_var['key']; ?>'><?php if ($this->_var['val']['2']): ?><?php echo $this->_var['val']['2']; ?><?php else: ?><?php echo $this->_var['val']['0']; ?><?php endif; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
    </td>
</tr>
<tr>
    <td><?php echo $this->_var['lang']['item_name']; ?></td> <td><input type="text" name="item_name" value="<?php echo $this->_var['rt']['item_name']; ?>" id="item_name" size="40" onKeyPress="javascript:key();" /></td>
</tr>
<tr>
    <td><a href="javascript:showNotice('notice_url');" title="<?php echo $this->_var['lang']['notice_url']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"><?php echo $this->_var['lang']['item_url']; ?></a></td> <td><input type="text" name="item_url" value="<?php echo $this->_var['rt']['item_url']; ?>" id="item_url" size="40" onKeyPress="javascript:key();" /></td>
</tr>
  <tr>
    <td></td>
    <td>
<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="notice_url"><?php echo $this->_var['lang']['notice_url']; ?></span></td>
  </tr>
<tr>
    <td><?php echo $this->_var['lang']['item_vieworder']; ?></td> <td><input type="text" name="item_vieworder" value="<?php echo $this->_var['rt']['item_vieworder']; ?>" size="40" /></td>
</tr>
<tr>
    <td><?php echo $this->_var['lang']['item_ifshow']; ?></td> <td><select name="item_ifshow">
  <option value='1' <?php echo $this->_var['rt']['item_ifshow_1']; ?>><?php echo $this->_var['lang']['yes']; ?></option><option value='0' <?php echo $this->_var['rt']['item_ifshow_0']; ?>><?php echo $this->_var['lang']['no']; ?></option>
  </select></td>
</tr>
<tr>
    <td><?php echo $this->_var['lang']['item_opennew']; ?></td> <td><select name="item_opennew">
  <option value='0' <?php echo $this->_var['rt']['item_opennew_0']; ?>><?php echo $this->_var['lang']['no']; ?></option><option value='1' <?php echo $this->_var['rt']['item_opennew_1']; ?>><?php echo $this->_var['lang']['yes']; ?></option>
  </select></td>
</tr>
<tr>
    <td><?php echo $this->_var['lang']['item_type']; ?></td> <td><select name="item_type">
  <option value='top' <?php echo $this->_var['rt']['item_type_top']; ?>><?php echo $this->_var['lang']['top']; ?></option><option value='middle' <?php echo $this->_var['rt']['item_type_middle']; ?>><?php echo $this->_var['lang']['middle']; ?></option><option value='bottom' <?php echo $this->_var['rt']['item_type_bottom']; ?>><?php echo $this->_var['lang']['bottom']; ?></option>
  </select></td>
</tr>
<tr align="center">
  <td colspan="2">
    <input type="hidden"  name="id"       value="<?php echo $this->_var['rt']['id']; ?>" />
    <input type="hidden"  name="step"       value="2" />
    <input type="hidden"  name="act"       value="<?php echo $this->_var['rt']['act']; ?>" />
    <input type="submit" class="button" name="Submit"       value="<?php echo $this->_var['lang']['button_submit']; ?>" />
  </td>
</tr>
</table>
</form>
</div>
<script type="Text/Javascript" language="JavaScript">
var last;
function add_main(key)
{
    var sysm = new Object;
    <?php $_from = $this->_var['sysmain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
      sysm[<?php echo $this->_var['key']; ?>] = new Array();
        sysm[<?php echo $this->_var['key']; ?>][0] = '<?php echo $this->_var['val']['0']; ?>';
        sysm[<?php echo $this->_var['key']; ?>][1] = '<?php echo $this->_var['val']['1']; ?>';
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    if (key != '-')
    {
        if(sysm[key][0] != '-')
        {
            document.getElementById('item_name').value = sysm[key][0];
            document.getElementById('item_url').value = sysm[key][1];
            last = document.getElementById('menulist').selectedIndex;
        }
        else
        {
            if(last < document.getElementById('menulist').selectedIndex)
            {
                document.getElementById('menulist').selectedIndex ++;
            }
            else
            {
                document.getElementById('menulist').selectedIndex --;
            }
            last = document.getElementById('menulist').selectedIndex;
            document.getElementById('item_name').value = sysm[last-1][0];
            document.getElementById('item_url').value = sysm[last-1][1];
        }
    }
    else
    {
        last = document.getElementById('menulist').selectedIndex = 1;
        document.getElementById('item_name').value = sysm[last-1][0];
        document.getElementById('item_url').value = sysm[last-1][1];
    }
}
function checkForm()
{
    if(document.getElementById('item_name').value == '')
    {
        alert('<?php echo $this->_var['lang']['namecannotnull']; ?>');
        return false;
    }
    if(document.getElementById('item_url').value == '')
    {
        alert('<?php echo $this->_var['lang']['linkcannotnull']; ?>');
        return false;
    }
    return true;
}

function key()
{
    last = document.getElementById('menulist').selectedIndex = 0;
}
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}
//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>