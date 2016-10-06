<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:42:19
         compiled from "template__system/admin_admin:../field_types/search/string.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90259442057e4e3e3136430-52544027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bc5e6ba8a0d0e144501c1e08517d50b68435797' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/string.like.tpl',
      1 => 1402650044,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '90259442057e4e3e3136430-52544027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e3e314bb50_24531470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e3e314bb50_24531470')) {function content_57e4e3e314bb50_24531470($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]" value="<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['like']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['equal']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['equal'];?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?>" /><?php }} ?>
