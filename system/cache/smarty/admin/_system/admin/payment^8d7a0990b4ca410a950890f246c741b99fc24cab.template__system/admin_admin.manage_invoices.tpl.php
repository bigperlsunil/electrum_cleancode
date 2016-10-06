<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:29:09
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/manage_invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105738863857e4eeddaef8d6-78173368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7a0990b4ca410a950890f246c741b99fc24cab' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/manage_invoices.tpl',
      1 => 1405330080,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '105738863857e4eeddaef8d6-78173368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'found_invoices' => 0,
    'invoice' => 0,
    'subuser' => 0,
    'invoiceTotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4eeddb6f5c7_03752958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4eeddb6f5c7_03752958')) {function content_57e4eeddb6f5c7_03752958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<div class="clr"><br/></div>
<form method="post" name="invoices_form" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/">
	<input type="hidden" name="action_name" id="action_name" value="" />
	<div class="box" id="displayResults">
		<div class="box-header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

		</div>
		<div class="innerpadding">
			<div id="displayResultsTable">
				<table width="100%">
					<thead>
						<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invoices_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invoices_block']['iteration']++;
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>"oddrow,evenrow"),$_smarty_tpl);?>
">
						<td><input type="checkbox" name="invoices[<?php echo $_smarty_tpl->tpl_vars['invoice']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invoices_block']['iteration'];?>
" /></td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-invoice/?sid=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['sid'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'sid','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</a></td>
						<td>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'subuser_sid','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid'],'assign'=>'subuser'),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['invoice']->value['userExists']) {?>
								<?php if ($_smarty_tpl->tpl_vars['subuser']->value) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['subuser']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'username','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</a>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'user_sid','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'username','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</a>
								<?php }?>
							<?php } else { ?>
								<span class="invoice-washy"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php }?>
						</td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'date','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'payment_method','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</td>
						<td>
							<?php $_smarty_tpl->_capture_stack[0][] = array('default', "invoiceTotal", null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'total','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['invoiceTotal']->value),$_smarty_tpl);?>

						</td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'status','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</td>
						<td>
						<?php if ($_smarty_tpl->tpl_vars['invoice']->value['status']!='Paid') {?>
							<input type="button" name="action" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mark Paid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="editbutton"  onclick="$('#checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invoices_block']['iteration'];?>
').attr('checked', 'checked'); submitForm('paid');" style="text-align: center;"/>
						<?php } else { ?>
							<input type="button" name="action" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mark Unpaid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="editbutton" onclick="$('#checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invoices_block']['iteration'];?>
').attr('checked', 'checked'); submitForm('unpaid');" style="text-align: center;"/>
						<?php }?>
						</td>
						<?php $_smarty_tpl->_capture_stack[0][] = array('trTextToDelete', null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this invoice?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<td style="border-left: 0px; "><input type="button" name="action" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="deletebutton" onclick="if (confirm('<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trTextToDelete'], ENT_QUOTES, 'UTF-8', true);?>
')) $('#checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invoices_block']['iteration'];?>
').attr('checked', 'checked'); submitForm('delete');" /></td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

		</div>
	</div>
</form>
<?php }} ?>
