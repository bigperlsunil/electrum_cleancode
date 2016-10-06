<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 19:20:54
         compiled from "template__system/admin_admin:../field_types/search/list_with_reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50210697157e5333e314237-62840527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2cfe15fe2375c5ea227ddeaa63230593a3081a0' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/list_with_reload.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '50210697157e5333e314237-62840527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'caption' => 0,
    'list_values' => 0,
    'list_value' => 0,
    'selected_listing_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e5333e380b93_41547964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e5333e380b93_41547964')) {function content_57e5333e380b93_41547964($_smarty_tpl) {?><select name='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]' onchange="reloadWithParameter(this.value)">
	<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['selected_listing_type_id']->value===$_smarty_tpl->tpl_vars['list_value']->value['id']) {?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_value']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select>
<script language="Javascript">
function reloadWithParameter(param)
{
	window.location = "?listing_type_id="+param;
}
</script><?php }} ?>
