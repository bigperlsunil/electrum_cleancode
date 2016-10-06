<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:12
         compiled from "template_satzview_user:/home/electrum/public_html/templates/SatzView/news/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119132760357ee2000173b50-17941676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43416797693b74a692e0238b768f6d4f6634661c' => 
    array (
      0 => 'template_satzview_user:/home/electrum/public_html/templates/SatzView/news/news.tpl',
      1 => 1387796226,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '119132760357ee2000173b50-17941676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'news_count' => 0,
    'elem' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee20001ba106_53044838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee20001ba106_53044838')) {function content_57ee20001ba106_53044838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['articles']->value)) {?>
	<div id="news">
		<input type="hidden" name="news_count" id="news_count" value="<?php echo $_smarty_tpl->tpl_vars['news_count']->value;?>
" />
		<ul>
			<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value) {
$_smarty_tpl->tpl_vars['elem']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['elem']->value['link']) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['elem']->value['link'];?>
" target="_blank" class="newsLink"><?php echo $_smarty_tpl->tpl_vars['elem']->value['title'];?>
</a>
					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/<?php echo $_smarty_tpl->tpl_vars['elem']->value['sid'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['elem']->value['title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html" class="newsLink"><?php echo $_smarty_tpl->tpl_vars['elem']->value['title'];?>
</a>
					<?php }?>
					<br />
					<div class="small"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['elem']->value['date'],"%Y - %m - %d");?>
</div>
					<br /><?php echo $_smarty_tpl->tpl_vars['elem']->value['brief'];?>

				</li>
			<?php }
if (!$_smarty_tpl->tpl_vars['elem']->_loop) {
?>
				<li><span class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There is no news in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></li>
			<?php } ?>
		</ul>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/" class="link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View All News<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	</div>
<?php } else { ?>
	<div id="news">
		<ul>
			<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no news in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
		</ul>
	</div>
<?php }?><?php }} ?>
