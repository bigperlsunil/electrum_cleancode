<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:29:09
         compiled from "template__system/admin_admin:../field_types/display/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172525187657e4eedde31a04-92659277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028b03227d67fe47ea904b5a9fda031da248ae7e' => 
    array (
      0 => 'template__system/admin_admin:../field_types/display/date.tpl',
      1 => 1378272714,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '172525187657e4eedde31a04-92659277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4eedde5b217_53002213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4eedde5b217_53002213')) {function content_57e4eedde5b217_53002213($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
