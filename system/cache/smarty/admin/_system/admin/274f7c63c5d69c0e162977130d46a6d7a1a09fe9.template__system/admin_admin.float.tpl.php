<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:29:09
         compiled from "template__system/admin_admin:../field_types/display/float.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124043200657e4eedde99558-00684011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '274f7c63c5d69c0e162977130d46a6d7a1a09fe9' => 
    array (
      0 => 'template__system/admin_admin:../field_types/display/float.tpl',
      1 => 1378272714,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '124043200657e4eedde99558-00684011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4eede0129d2_12993697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4eede0129d2_12993697')) {function content_57e4eede0129d2_12993697($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
