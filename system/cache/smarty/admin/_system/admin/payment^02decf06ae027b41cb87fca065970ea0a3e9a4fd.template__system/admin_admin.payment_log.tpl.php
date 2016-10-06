<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:30:03
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payment_log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26818685057e4ef13454fe8-00216990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02decf06ae027b41cb87fca065970ea0a3e9a4fd' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payment_log.tpl',
      1 => 1385521488,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '26818685057e4ef13454fe8-00216990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'found_payments' => 0,
    'found_user' => 0,
    'found_payment' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4ef134b2381_93721518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef134b2381_93721518')) {function content_57e4ef134b2381_93721518($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.truncate.php';
?><div class="clr"><br/></div>
<div class="box" id="displayResults">
	<div class="box-header">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

	</div>
	<div class="innerpadding">
		<div id="displayResultsTable">
			<table width=100%<?php ?>>
				<thead>
					<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</thead>
			<?php  $_smarty_tpl->tpl_vars['found_payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['found_payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['found_payment']->key => $_smarty_tpl->tpl_vars['found_payment']->value) {
$_smarty_tpl->tpl_vars['found_payment']->_loop = true;
?>
				<tr id="users[<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
]" class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td width=10%<?php ?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_payment']->value['date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td width=16%<?php ?>><?php echo $_smarty_tpl->tpl_vars['found_payment']->value['gateway'];?>
</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/payment-log/display-message/"
					       onClick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/payment-log/?action=display_message&sid=<?php echo $_smarty_tpl->tpl_vars['found_payment']->value['sid'];?>
',420, 450, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Viewing Gateway Response<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;">
						<pre><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['found_payment']->value['message'],100);?>
</pre>
					</a></td>
					<td width=11%<?php ?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_payment']->value['status'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
	<div class="box-footer">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

	</div>
</div><?php }} ?>
