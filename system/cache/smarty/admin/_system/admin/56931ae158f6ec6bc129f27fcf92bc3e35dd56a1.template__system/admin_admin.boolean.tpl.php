<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:03:39
         compiled from "template__system/admin_admin:../field_types/search/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84842605257e4e8e3726f12-08458527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56931ae158f6ec6bc129f27fcf92bc3e35dd56a1' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/boolean.tpl',
      1 => 1240380518,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '84842605257e4e8e3726f12-08458527',
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
  'unifunc' => 'content_57e4e8e3743017_13914868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e8e3743017_13914868')) {function content_57e4e8e3743017_13914868($_smarty_tpl) {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" <?php if ($_smarty_tpl->tpl_vars['value']->value['equal']=='1') {?>checked="checked"<?php }?> value="1"/><?php }} ?>
