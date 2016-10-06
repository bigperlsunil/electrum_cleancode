<?php /* Smarty version Smarty-3.1.19, created on 2016-10-01 10:09:51
         compiled from "template_satzview_user:searchFormByCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76399077957ef3e17d526a2-22594199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c3dd739e947a5a183712e7465c580c880b98e4' => 
    array (
      0 => 'template_satzview_user:searchFormByCompany.tpl',
      1 => 1361440388,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '76399077957ef3e17d526a2-22594199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'userGroupFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ef3e17d6e137_05197369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ef3e17d6e137_05197369')) {function content_57ef3e17d6e137_05197369($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/browse-by-company/" id="search_form" >
	<input type="hidden" name="action" value="search" />
	<fieldset>
		<div class="bcName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="bcField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'CompanyName','template'=>"string.like.tpl"),$_smarty_tpl);?>
</div>
	</fieldset>
	<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroupFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['id']=='Location') {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['field']->value['id'],'fields'=>$_smarty_tpl->tpl_vars['field']->value['fields'],'template'=>"locationCompany.tpl"),$_smarty_tpl);?>

		<?php }?>
	<?php } ?>
	<fieldset>
		<div class="bcName">&nbsp;</div>
		<div class="bcField"><input type="submit" class="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /></div>
	</fieldset>
</form><?php }} ?>
