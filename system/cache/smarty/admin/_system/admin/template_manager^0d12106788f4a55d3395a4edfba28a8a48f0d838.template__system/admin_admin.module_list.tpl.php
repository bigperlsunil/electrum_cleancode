<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:06:33
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/module_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180734029657e4db81485773-63123230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d12106788f4a55d3395a4edfba28a8a48f0d838' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/module_list.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '180734029657e4db81485773-63123230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_list' => 0,
    'counter' => 0,
    'module_info' => 0,
    'system_module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4db814ad211_61949778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4db814ad211_61949778')) {function content_57e4db814ad211_61949778($_smarty_tpl) {?><div class="clr"><br/><br/></div>
<table>
	<thead>
		<tr>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Module Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th class="actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		</tr>
	</thead>
	<tbody>
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars["module_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["module_info"]->_loop = false;
 $_smarty_tpl->tpl_vars["system_module_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["module_info"]->key => $_smarty_tpl->tpl_vars["module_info"]->value) {
$_smarty_tpl->tpl_vars["module_info"]->_loop = true;
 $_smarty_tpl->tpl_vars["system_module_name"]->value = $_smarty_tpl->tpl_vars["module_info"]->key;
?>
			<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
			<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['counter']->value)) {?>oddrow<?php } else { ?>evenrow<?php }?>">
				<td><?php echo $_smarty_tpl->tpl_vars['module_info']->value['display_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module_info']->value['description'];?>
</td>
				<td align=center><a href="?module_name=<?php echo $_smarty_tpl->tpl_vars['system_module_name']->value;?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["module_info"]->_loop) {
?>
			<tr><td colspan=3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no modules with templates in the system. If you don't have any, your package either comes without module templates or is damaged.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </td></tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>
