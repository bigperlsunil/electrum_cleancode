<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:19:31
         compiled from "template_satzview_user:templates/_system/social/login_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158807925157ee190be91616-40307301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809091fa8c33096f78159589af6d0dacfd9a9e3d' => 
    array (
      0 => 'template_satzview_user:templates/_system/social/login_buttons.tpl',
      1 => 1386825802,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '158807925157ee190be91616-40307301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aSocPlugins' => 0,
    'GLOBALS' => 0,
    'plugin' => 0,
    'user_group_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee190bec1cd5_72224485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee190bec1cd5_72224485')) {function content_57ee190bec1cd5_72224485($_smarty_tpl) {?><div class="social_plugins_div">
	<span class="login_buttons_txt"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect with social network<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span>
	<?php  $_smarty_tpl->tpl_vars["plugin"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plugin"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aSocPlugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plugin"]->key => $_smarty_tpl->tpl_vars["plugin"]->value) {
$_smarty_tpl->tpl_vars["plugin"]->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social/?network=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['user_group_id']->value) {?>&amp;user_group_id=<?php echo $_smarty_tpl->tpl_vars['user_group_id']->value;?>
<?php }?>" class="social_login_button slb_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect using $plugin.name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
	<?php } ?>
	<div style="clear:both;"></div>
</div>
<?php }} ?>
