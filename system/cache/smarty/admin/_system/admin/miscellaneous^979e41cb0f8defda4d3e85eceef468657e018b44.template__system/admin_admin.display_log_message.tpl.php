<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:42:30
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/display_log_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117685299657e4e3ee5ade98-99013829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979e41cb0f8defda4d3e85eceef468657e018b44' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/display_log_message.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '117685299657e4e3ee5ade98-99013829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e3ee5fb4d2_42146673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e3ee5fb4d2_42146673')) {function content_57e4e3ee5fb4d2_42146673($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['display_error']->value) {?>
    <p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['email']->value['email'];?>
</p>
    <p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subject<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['email']->value['subject'];?>
</p>
    <br/>
    <br/>
    <p><?php echo $_smarty_tpl->tpl_vars['email']->value['message'];?>
</p>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['email']->value['error_msg']) {?>
        <p class="error"><?php echo $_smarty_tpl->tpl_vars['email']->value['error_msg'];?>
</p>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Couldn't get error message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }?><?php }} ?>
