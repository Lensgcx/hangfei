<?php echo $this->fetch('pageheader.htm'); ?>
<div class="list-div">
  <div style="background:#FFF; padding: 20px 50px; margin: 2px;">
    <table align="center" width="400">
      <tr>
        <td width="100%" valign="top">
          <img src="images/information.gif" width="32" height="32" border="0" alt="information" />
          <span style="font-size: 14px; font-weight: bold"><?php echo $this->_var['title']; ?></span>
        </td>
      </tr>
      <tr>
        <td>
         <?php if ($this->_var['auto_redirect']): ?>
          <a href="<?php echo $this->_var['auto_link']; ?>"><?php echo $this->_var['lang']['backup_notice']; ?></a>
          <script>setTimeout("window.location.replace('<?php echo $this->_var['auto_link']; ?>');", 1250);</script>
          <?php else: ?>
            <ul>
              <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'file');if (count($_from)):
    foreach ($_from AS $this->_var['file']):
?>
              <li><a href="<?php echo $this->_var['file']['href']; ?>"><?php echo $this->_var['file']['name']; ?></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          <?php endif; ?>
        </td>
      </tr>
    </table>
  </div>
</div>
<?php echo $this->fetch('pagefooter.htm'); ?>