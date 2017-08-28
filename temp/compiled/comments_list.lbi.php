
     
      
      <div class=" clearfix" style="height:1%;">
       
       <?php if ($this->_var['comments']): ?>
       <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
       <div class="comment_list">
           
            <div onmouseout="this.className='comment_list_right'" onmouseover="this.className='comment_list_pink'" class="comment_list_right">
            <Div class="comment_list_body">
            <div class="comment_list_arrow"> </div>
            <div class="comment_list_box">
        <p>
       <strong> <?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></strong><span>
                                                                        												            												                                                            	
                                                                                                                    </span>：
        <?php echo $this->_var['comment']['content']; ?>
        </p> 
       
				<?php if ($this->_var['comment']['re_content']): ?>
        <p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment']['re_content']; ?> ( <?php echo $this->_var['comment']['add_time']; ?> )  <img src="themes/miqinew/images/stars<?php echo $this->_var['comment']['rank']; ?>.gif" alt="<?php echo $this->_var['comment']['comment_rank']; ?>" /></p>
				<?php endif; ?>
                </div>
                </Div>
        </div>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <li><?php echo $this->_var['lang']['no_comments']; ?></li>
        <?php endif; ?>
       <div class="blank"></div>
       
       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php if ($this->_var['pager']['styleid'] == 0): ?>
        <div id="pager">
          <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_40625000_1442342764');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_40625000_1442342764']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_40625000_1442342764']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php else: ?>

        
         <div id="pager" class="pagebar">
          <span class="f_l f6" style="margin-right:10px;"><?php echo $this->_var['lang']['total']; ?> <b><?php echo $this->_var['pager']['record_count']; ?></b> <?php echo $this->_var['lang']['user_comment_num']; ?></span>
          <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>">1 ...</a><?php endif; ?>
          <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
          <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_40625000_1442342764');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_40625000_1442342764']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <span class="page_now"><?php echo $this->_var['key']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['item_0_40625000_1442342764']; ?>">[<?php echo $this->_var['key']; ?>]</a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['pager']['page_count']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_40625000_1442342764');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_40625000_1442342764']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_40625000_1442342764']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
        

        <?php endif; ?>
        </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
      

<div id="boxOverlay"></div>

      
      <div class="i-zixun" id="commentform">
              <h3><p>发表评论</p><span class="close"></span></h3>
             <form id="commentForm" name="commentForm" method="post" onsubmit="submitComment(this)" action="javascript:;">
                <table cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr class="tr1">
                    <td class="td1">商品满意度：</td>
                    <td>
                      <div class="cmtRank">
                        <span onclick="showrank(this,'1','#Rank','#commentrank')" onmouseover="showrank(this,'1','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'2','#Rank','#commentrank')" onmouseover="showrank(this,'2','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'3','#Rank','#commentrank')" onmouseover="showrank(this,'3','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'4','#Rank','#commentrank')" onmouseover="showrank(this,'4','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'5','#Rank','#commentrank')" onmouseover="showrank(this,'5','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                      </div>
                      <span id="Rank"></span>
                      <span>点击星星就可以评分</span>
                    </td>
                    <input type="hidden" value="" name="comment_rank" id="commentrank">
					<input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
					<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
					
                  </tr>
                  <tr><td class="td1">E-mail：</td><td><input type="text" class="inputBorder text2" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" maxlength="100" id="email" name="email"></td></tr>
                  <tr><td class="td1">商品评论：</td><td><textarea onblur="if(this.value=='') this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue) this.value='';" name="content"><?php if ($this->_var['factor'] == 0): ?>所有用户都可以对该商品发表评论<?php elseif ($this->_var['factor'] == 1): ?>只有登陆的用户才可以对该商品发表评论<?php elseif ($this->_var['factor'] == 2): ?>在本站购买过一次其他商品的用户才可以对该商品发表评论<?php elseif ($this->_var['factor'] == 3): ?>购买过此<?php echo $this->_var['goods_name']; ?>的顾客，在收到商品才可以对该商品发表评论<?php endif; ?></textarea></td></tr>
                  
                 
                  <tr>
                    <td class="td2"></td>
                    <td>
                      <table>
                        <tbody><tr>
                          <td>验证码：</td>
                          <td><input type="text" tabindex="0" name="captcha" value="" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" class="text1"></td>
                          <td><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha"></td>
                          <td><input type="submit" value="" class="sub"></td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </form>
            </div>
      
      </div>
    
    <div class="blank5"></div>
  
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_40625000_1442342764');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_40625000_1442342764']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_40625000_1442342764']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  /*zhou edit start*/
  cmt.rank            = frm.elements['comment_rank'].value ? frm.elements['comment_rank'].value : 0 ;

  if(cmt.rank <= 0)
  {
		alert('请选择评分等级');
		return false;  
  }
  /*zhou edit end*/
/*
  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }
  */
  

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>