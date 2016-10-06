<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:29:59
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147170280657e4ef0f2348e2-65043114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50749a7de746a4d3d2bc3a6fda303078810281fe' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payments.tpl',
      1 => 1385521488,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '147170280657e4ef0f2348e2-65043114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'found_transactions_sids' => 0,
    'trans_sid' => 0,
    'invoice_sid' => 0,
    'paymentAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4ef0f2cf296_72862963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef0f2cf296_72862963')) {function content_57e4ef0f2cf296_72862963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clr"><br/></div>
<form method="get" name="transactions_form" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/payments/">
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
					<?php  $_smarty_tpl->tpl_vars['trans_sid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trans_sid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_transactions_sids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['transactions_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['trans_sid']->key => $_smarty_tpl->tpl_vars['trans_sid']->value) {
$_smarty_tpl->tpl_vars['trans_sid']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['transactions_block']['iteration']++;
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>"oddrow,evenrow"),$_smarty_tpl);?>
">
						<td><input type="checkbox" name="transactions[<?php echo $_smarty_tpl->tpl_vars['trans_sid']->value;?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['transactions_block']['iteration'];?>
" /></td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'date','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
</td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'transaction_id','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'user_sid','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'username','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
</a>
						</td>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'invoice_sid','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value,'assign'=>'invoice_sid'),$_smarty_tpl);?>

						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Payment for Invoice #<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-invoice/?sid=<?php echo $_smarty_tpl->tpl_vars['invoice_sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['invoice_sid']->value;?>
</a></td>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'payment_method','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
</td>
						<td>
							<?php $_smarty_tpl->_capture_stack[0][] = array('default', "paymentAmount", null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'amount','object_sid'=>$_smarty_tpl->tpl_vars['trans_sid']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['paymentAmount']->value),$_smarty_tpl);?>

						</td>
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
