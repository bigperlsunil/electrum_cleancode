<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:48:52
         compiled from "template_satzview_user:../field_types/input/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2565765857ee1feca5f352-14162619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7017e29356475eb1711eb5611fd6608472ae2953' => 
    array (
      0 => 'template_satzview_user:../field_types/input/password.tpl',
      1 => 1275887146,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '2565765857ee1feca5f352-14162619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1feca8ba83_49939954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1feca8ba83_49939954')) {function content_57ee1feca8ba83_49939954($_smarty_tpl) {?><input type="password"  name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][original]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]<?php }?>" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" /><br />
<input type="password"  name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][confirmed]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]<?php }?>" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" style="margin-top:2px;" /><br />
<span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><?php }} ?>
