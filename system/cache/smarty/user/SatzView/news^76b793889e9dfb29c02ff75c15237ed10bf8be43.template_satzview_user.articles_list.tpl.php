<?php /* Smarty version Smarty-3.1.19, created on 2016-10-02 01:54:49
         compiled from "template_satzview_user:templates/_system/news/articles_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180303171257f01b9106c350-48815302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b793889e9dfb29c02ff75c15237ed10bf8be43' => 
    array (
      0 => 'template_satzview_user:templates/_system/news/articles_list.tpl',
      1 => 1415191978,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '180303171257f01b9106c350-48815302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error_code' => 0,
    'show_categories_block' => 0,
    'current_category_sid' => 0,
    'GLOBALS' => 0,
    'categories' => 0,
    'category' => 0,
    'searchText' => 0,
    'pages' => 0,
    'current_page' => 0,
    'articles' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f01b916d6212_41465699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f01b916d6212_41465699')) {function content_57f01b916d6212_41465699($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['error_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['error_code']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } ?>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['show_categories_block']->value) {?>
		<div id="newsCategory">
			<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
News Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
			<?php if (empty($_smarty_tpl->tpl_vars['current_category_sid']->value)) {?>
				<span class="strong">&#187; All</span>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['category']->value['name']!='Archive'&&$_smarty_tpl->tpl_vars['category']->value['count']>0) {?>
					<?php if ($_smarty_tpl->tpl_vars['current_category_sid']->value==$_smarty_tpl->tpl_vars['category']->value['sid']) {?>
						<span class="strong">&#187; <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['sid'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php }?>
				<?php }?>
			<?php } ?>
		</div>
	<?php }?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/">
		<input type="hidden" name="action" value="search" />
		<input type="text" name="search_text" value="<?php echo $_smarty_tpl->tpl_vars['searchText']->value;?>
" /> <input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	</form>
	<br/>

	<?php if ($_smarty_tpl->tpl_vars['pages']->value>1) {?>
		<!-- PAGINATION -->
		<p>
			<form id="news_per_page_form" method="get" action="?">
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>0) {?>&nbsp;<a href="?page=1">1</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>1) {?>&nbsp;...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-2>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
</a><?php }?>
				<span class="strong"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+2<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages']->value+1) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
				<input type="hidden" name="page" value="1" />
			</form>
		</p>
		<!-- END OF PAGINATION -->
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="newsItems">
			<?php if ($_smarty_tpl->tpl_vars['item']->value['link']) {?>
				<h2><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
			<?php } else { ?>
				<h2><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['item']->value['title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/u","-");?>
.html"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
			<?php }?>
			<div class="newsPreview">
				<span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_link'];?>
" align="left" width="100" vspace="5" hspace="5" /><?php }?>
				<br/><?php echo $_smarty_tpl->tpl_vars['item']->value['brief'];?>

				<?php if ($_smarty_tpl->tpl_vars['item']->value['link']) {?>
					<p align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
read more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
				<?php } else { ?>
					<p align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['item']->value['title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/u","-");?>
.html"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
read more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
				<?php }?>
				<div class="clr"></div>
			</div>
		</div>
		<div class="clr"><br/></div>
	<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['pages']->value>1) {?>
		<p>
			<form id="news_per_page_form" method="get" action="?">
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>0) {?>&nbsp;<a href="?page=1">1</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>1) {?>&nbsp;...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-2>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
</a><?php }?>
				<b><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</b>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+2<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages']->value+1) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages']->value) {?>&nbsp;<a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
				<input type="hidden" name="page" value="1" />
			</form>

		</p>
	<?php }?>
<?php }?>
<?php }} ?>
