<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 21:29:45
         compiled from "template_satzview_user:../field_types/input/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176558592157ee8bf17373a5-62180152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749c56b04b9f2efcaea8d84204049e7dbd7afbae' => 
    array (
      0 => 'template_satzview_user:../field_types/input/email.tpl',
      1 => 1373898704,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '176558592157ee8bf17373a5-62180152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'isRequireConfirmation' => 0,
    'editProfile' => 0,
    'confirmed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee8bf1843239_27732507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee8bf1843239_27732507')) {function content_57ee8bf1843239_27732507($_smarty_tpl) {?><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][original]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]<?php }?>" />
<?php if ($_smarty_tpl->tpl_vars['isRequireConfirmation']->value==1) {?>
<br/><input type="text" <?php if ($_smarty_tpl->tpl_vars['editProfile']->value==1) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php } else { ?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['confirmed']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?> class="inputString" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][confirmed]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]<?php }?>" style="margin-top:2px;"/><br />
<span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm E-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
<?php }?><?php }} ?>
