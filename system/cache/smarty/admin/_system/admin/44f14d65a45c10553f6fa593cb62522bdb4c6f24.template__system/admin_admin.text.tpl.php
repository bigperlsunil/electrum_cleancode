<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:29:59
         compiled from "template__system/admin_admin:../field_types/search/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43390967857e4ef0f17e941-86862183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f14d65a45c10553f6fa593cb62522bdb4c6f24' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/text.tpl',
      1 => 1402650044,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '43390967857e4ef0f17e941-86862183',
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
  'unifunc' => 'content_57e4ef0f1b3e78_17029377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef0f1b3e78_17029377')) {function content_57e4ef0f1b3e78_17029377($_smarty_tpl) {?><input type="text" value="<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?><?php echo $_smarty_tpl->tpl_vars['value']->value['all_words'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php }?>"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?>all_words<?php } else { ?>like<?php }?>]"  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<?php }} ?>
