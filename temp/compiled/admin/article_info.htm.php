<!-- $Id: article_info.htm 16780 2009-11-09 09:28:30Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,validator.js')); ?>
<!-- start goods form -->
<div class="tab-div">
  <div id="tabbar-div">
    <p>
      <span class="tab-front" id="general-tab"><?php echo $this->_var['lang']['tab_general']; ?></span><span
      class="tab-back" id="detail-tab"><?php echo $this->_var['lang']['tab_content']; ?></span><span
      class="tab-back" id="goods-tab"><?php echo $this->_var['lang']['tab_goods']; ?></span>
    </p>
  </div>

  <div id="tabbody-div">
    <form  action="article.php" method="post" enctype="multipart/form-data" name="theForm" onsubmit="return validate();">
    <table width="90%" id="general-table">
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['title']; ?></td>
        <td><input type="text" name="title" size ="40" maxlength="60" value="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
      </tr>          
      <!-- <?php if ($this->_var['article']['cat_id'] >= 0): ?> -->
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['cat']; ?> </td>
        <td>
          <select name="article_cat" onchange="catChanged()">
            <option value="0"><?php echo $this->_var['lang']['select_plz']; ?></option>
            <?php echo $this->_var['cat_select']; ?>
          </select>
         <?php echo $this->_var['lang']['require_field']; ?></td>
      </tr>
      <!-- <?php else: ?> -->
      <input type="hidden" name="article_cat" value="-1" />
      <!-- <?php endif; ?> -->
      <?php if ($this->_var['article']['cat_id'] >= 0): ?>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['article_type']; ?></td>
        <td><input type="radio" name="article_type" value="0" <?php if ($this->_var['article']['article_type'] == 0): ?>checked<?php endif; ?>><?php echo $this->_var['lang']['common']; ?>
      <input type="radio" name="article_type" value="1" <?php if ($this->_var['article']['article_type'] == 1): ?>checked<?php endif; ?>><?php echo $this->_var['lang']['top']; ?>
        <?php echo $this->_var['lang']['require_field']; ?>        </td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['is_open']; ?></td>
        <td>
        <input type="radio" name="is_open" value="1" <?php if ($this->_var['article']['is_open'] == 1): ?>checked<?php endif; ?>> <?php echo $this->_var['lang']['isopen']; ?>
      <input type="radio" name="is_open" value="0" <?php if ($this->_var['article']['is_open'] == 0): ?>checked<?php endif; ?>> <?php echo $this->_var['lang']['isclose']; ?><?php echo $this->_var['lang']['require_field']; ?>        </td>
      </tr>
      <?php else: ?>
      <tr style="display:none">
      <td colspan="2"><input type="hidden" name="article_type" value="0" /><input type="hidden" name="is_open" value="1" /></td>
      </tr>
      <?php endif; ?>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['author']; ?></td>
        <td><input type="text" name="author" maxlength="60" value="<?php echo htmlspecialchars($this->_var['article']['author']); ?>" /></td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['email']; ?></td>
        <td><input type="text" name="author_email" maxlength="60" value="<?php echo htmlspecialchars($this->_var['article']['author_email']); ?>" /></td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['keywords']; ?></td>
        <td><input type="text" name="keywords" maxlength="60" value="<?php echo htmlspecialchars($this->_var['article']['keywords']); ?>" /></td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['lable_description']; ?></td>
        <td><textarea name="description" id="description" cols="40" rows="5"><?php echo htmlspecialchars($this->_var['article']['description']); ?></textarea></td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['external_links']; ?></td>
        <td><input name="link_url" type="text" id="link_url" value="<?php if ($this->_var['article']['link'] != ''): ?><?php echo htmlspecialchars($this->_var['article']['link']); ?><?php else: ?>http://<?php endif; ?>" maxlength="60" /></td>
      </tr>
      <tr>
        <td class="narrow-label"><?php echo $this->_var['lang']['upload_file']; ?></td>
        <td><input type="file" name="file">
          <span class="narrow-label"><?php echo $this->_var['lang']['file_url']; ?>
          <input name="file_url" type="text" value="<?php echo htmlspecialchars($this->_var['article']['file_url']); ?>" size="30" maxlength="255" />
          </span></td>
      </tr>
    </table>

    <table width="90%" id="detail-table" style="display:none">
     <tr><td><?php echo $this->_var['FCKeditor']; ?></td></tr>
    </table>

    <table width="90%" id="goods-table" style="display:none">
      <!-- 商品搜索 -->
      <tr>
      <td colspan="5">
        <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
        <!-- 分类 -->
        <select name="cat_id"><option value="0"><?php echo $this->_var['lang']['all_category']; ?></caption><?php echo $this->_var['goods_cat_list']; ?></select>
        <!-- 品牌 -->
        <select name="brand_id"><option value="0"><?php echo $this->_var['lang']['all_brand']; ?></caption><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
        <!-- 关键字 -->
        <input type="text" name="keyword" size="30" />
        <input type="button" value="<?php echo $this->_var['lang']['button_search']; ?>" onclick="searchGoods()" class="button" />
      <td>
      </tr>
      <!-- 商品列表 -->
      <tr>
        <th><?php echo $this->_var['lang']['all_goods']; ?></th>
        <th><?php echo $this->_var['lang']['handler']; ?></th>
        <th><?php echo $this->_var['lang']['send_bouns_goods']; ?></th>
      </tr>
      <tr>
        <td width="45%" align="center">
          <select name="source_select" size="20" style="width:90%" ondblclick="sz.addItem(false, 'add_link_goods', articleId)" multiple="true">
          </select>
        </td>
        <td align="center">
          <p><input type="button" value="&gt;&gt;" onclick="sz.addItem(true, 'add_link_goods', articleId)" class="button" /></p>
          <p><input type="button" value="&gt;" onclick="sz.addItem(false, 'add_link_goods', articleId)" class="button" /></p>
          <p><input type="button" value="&lt;" onclick="sz.dropItem(false, 'drop_link_goods', articleId)" class="button" /></p>
          <p><input type="button" value="&lt;&lt;" onclick="sz.dropItem(true, 'drop_link_goods', articleId)" class="button" /></p>
        </td>
        <td width="45%" align="center">
          <select name="target_select" multiple="true" size="20" style="width:90%" ondblclick="sz.dropItem(false, 'drop_link_goods', articleId)">
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <option value="<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </select>
        </td>
      </tr>
    </table>
    <div class="button-div">
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="old_title" value="<?php echo $this->_var['article']['title']; ?>"/>
      <input type="hidden" name="id" value="<?php echo $this->_var['article']['article_id']; ?>" />
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button"  />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </div>
    </form>
  </div>

</div>
<!-- end goods form -->
<script language="JavaScript">

var articleId = <?php echo empty($this->_var['article']['article_id']) ? '0' : $this->_var['article']['article_id']; ?>;
var elements  = document.forms['theForm'].elements;
var sz        = new SelectZone(1, elements['source_select'], elements['target_select'], '');


onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

function validate()
{
  var validator = new Validator('theForm');
  validator.required('title', no_title);

<?php if ($this->_var['article']['cat_id'] >= 0): ?>
  validator.isNullOption('article_cat',no_cat);
<?php endif; ?>


  return validator.passed();
}

document.getElementById("tabbar-div").onmouseover = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-back")
    {
        obj.className = "tab-hover";
    }
}

document.getElementById("tabbar-div").onmouseout = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-hover")
    {
        obj.className = "tab-back";
    }
}

document.getElementById("tabbar-div").onclick = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-front")
    {
        return;
    }
    else
    {
        objTable = obj.id.substring(0, obj.id.lastIndexOf("-")) + "-table";

        var tables = document.getElementsByTagName("table");
        var spans  = document.getElementsByTagName("span");

        for (i = 0; i < tables.length; i++)
        {
            if (tables[i].id == objTable)
            {
                tables[i].style.display = (Browser.isIE) ? "block" : "table";
            }
            else
            {
                tables[i].style.display = "none";
            }
        }
        for (i = 0; spans.length; i++)
        {
            if (spans[i].className == "tab-front")
            {
                spans[i].className = "tab-back";
                obj.className = "tab-front";
                break;
            }
        }
    }
}

function showNotice(objId)
{
    var obj = document.getElementById(objId);

    if (obj)
    {
        if (obj.style.display != "block")
        {
            obj.style.display = "block";
        }
        else
        {
            obj.style.display = "none";
        }
    }
}

function searchGoods()
{
    var elements  = document.forms['theForm'].elements;
    var filters   = new Object;

    filters.cat_id = elements['cat_id'].value;
    filters.brand_id = elements['brand_id'].value;
    filters.keyword = Utils.trim(elements['keyword'].value);

    sz.loadOptions('get_goods_list', filters);
}


/**
 * 选取上级分类时判断选定的分类是不是底层分类
 */
function catChanged()
{
  var obj = document.forms['theForm'].elements['article_cat'];

  cat_type = obj.options[obj.selectedIndex].getAttribute('cat_type');
  if (cat_type == undefined)
  {
    cat_type = 1;
  }

  if ((obj.selectedIndex > 0) && (cat_type == 2 || cat_type == 4))
  {
    alert(not_allow_add);
    obj.selectedIndex = 0;
    return false;
  }

  return true;
}
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>