<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:48:52
         compiled from "template_satzview_user:../field_types/input/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25481453457ee1fecae03a3-75283373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822d51dd6857f837ecc9c0f9856f90b07f65fcc2' => 
    array (
      0 => 'template_satzview_user:../field_types/input/boolean.tpl',
      1 => 1275887146,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '25481453457ee1fecae03a3-75283373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fecb1a772_99075166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fecb1a772_99075166')) {function content_57ee1fecb1a772_99075166($_smarty_tpl) {?><input type="hidden" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" value="0" />
<input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>checked="checked" <?php }?> value="1" /><?php }} ?>
