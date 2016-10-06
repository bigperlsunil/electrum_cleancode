<?php /* Smarty version Smarty-3.1.19, created on 2016-10-01 10:09:51
         compiled from "template_satzview_user:templates/_system/classifieds/browseCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11122423057ef3e17d075d8-62602026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55e7c9191af3f0c916dd2e5c00c113ae2e82e276' => 
    array (
      0 => 'template_satzview_user:templates/_system/classifieds/browseCompany.tpl',
      1 => 1361440388,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '11122423057ef3e17d075d8-62602026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alphabets' => 0,
    'GLOBALS' => 0,
    'alphabet' => 0,
    'char' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ef3e17d4e9d0_98304442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ef3e17d4e9d0_98304442')) {function content_57ef3e17d4e9d0_98304442($_smarty_tpl) {?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search by Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php  $_smarty_tpl->tpl_vars['alphabet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alphabet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alphabets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alphabet']->key => $_smarty_tpl->tpl_vars['alphabet']->value) {
$_smarty_tpl->tpl_vars['alphabet']->_loop = true;
?>  
<div>
	<div class="browseCompanyAB">
		<a class='browseItem' href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/browse-by-company/?first_char=any_char">#</a>
	</div>
	<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alphabet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>  
	<div class="browseCompanyAB">
		<a class='browseItem' href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/browse-by-company/?first_char=<?php echo $_smarty_tpl->tpl_vars['char']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['char']->value;?>
</a>
	</div>
	<?php } ?>
	<div class="clr"></div>
</div>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("searchFormByCompany.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
