<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:30:07
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payment_log_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171273491757e4ef17ae8e11-66061272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '133d76e2d68835f3163e9657350efb7d964f2eb7' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/payment/payment_log_details.tpl',
      1 => 1359699224,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '171273491757e4ef17ae8e11-66061272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paymentLogItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4ef17b6ac07_53012890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef17b6ac07_53012890')) {function content_57e4ef17b6ac07_53012890($_smarty_tpl) {?><?php if (!is_callable('smarty_mb_wordwrap')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/shared.mb_wordwrap.php';
?><p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['paymentLogItem']->value['date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gateway<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['paymentLogItem']->value['gateway'];?>
</p>
<p><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Callback Response<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong></p>
<pre><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['paymentLogItem']->value['message'],50,"\n",false);?>
</pre><?php }} ?>
