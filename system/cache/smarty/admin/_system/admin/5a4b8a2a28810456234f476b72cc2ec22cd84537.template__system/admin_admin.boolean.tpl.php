<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:38:12
         compiled from "template__system/admin_admin:../field_types/input/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298590757e4f0fc6590b3-86675423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4b8a2a28810456234f476b72cc2ec22cd84537' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/boolean.tpl',
      1 => 1331110240,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '298590757e4f0fc6590b3-86675423',
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
  'unifunc' => 'content_57e4f0fc6c6e32_34981679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4f0fc6c6e32_34981679')) {function content_57e4f0fc6c6e32_34981679($_smarty_tpl) {?><input type="hidden" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
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
