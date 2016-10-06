<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 17:04:08
         compiled from "template_satzview_user:templates/_system/builder/bf_searchform_fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84836533957ee4db0a576b5-44693008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '233767a2b8c549f9b53bdb1b0e07d72e4803e25c' => 
    array (
      0 => 'template_satzview_user:templates/_system/builder/bf_searchform_fieldset.tpl',
      1 => 1379503052,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '84836533957ee4db0a576b5-44693008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'holderType' => 0,
    'fieldsHolderID' => 0,
    'holderTitle' => 0,
    'fields_active' => 0,
    'theField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee4db0a9a900_90362947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee4db0a9a900_90362947')) {function content_57ee4db0a9a900_90362947($_smarty_tpl) {?><div class="builder-col-<?php echo $_smarty_tpl->tpl_vars['holderType']->value;?>
">
	<fieldset id="<?php echo $_smarty_tpl->tpl_vars['fieldsHolderID']->value;?>
" class="active-fields sortable-column">
		<legend class="fh-legend"><?php echo $_smarty_tpl->tpl_vars['holderTitle']->value;?>
&nbsp;</legend>
		<span class="fh-status">&nbsp;</span>
		<?php  $_smarty_tpl->tpl_vars['theField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_active']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theField']->key => $_smarty_tpl->tpl_vars['theField']->value) {
$_smarty_tpl->tpl_vars['theField']->_loop = true;
?>
			<?php if (!($_smarty_tpl->tpl_vars['theField']->value['type']=='complex')) {?>
				<?php echo $_smarty_tpl->getSubTemplate ("../builder/bf_searchform_fieldsblocks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } ?>
	</fieldset>
</div>
<?php }} ?>
