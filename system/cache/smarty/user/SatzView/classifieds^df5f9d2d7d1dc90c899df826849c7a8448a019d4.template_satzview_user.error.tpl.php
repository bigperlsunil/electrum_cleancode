<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 19:56:35
         compiled from "template_satzview_user:error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190992765757ee761b249876-33690765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5f9d2d7d1dc90c899df826849c7a8448a019d4' => 
    array (
      0 => 'template_satzview_user:error.tpl',
      1 => 1405429412,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '190992765757ee761b249876-33690765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERRORS' => 0,
    'error' => 0,
    'error_message' => 0,
    'GLOBALS' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee761b2b25a9_63079216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee761b2b25a9_63079216')) {function content_57ee761b2b25a9_63079216($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["error_message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error_message"]->_loop = false;
 $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ERRORS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error_message"]->key => $_smarty_tpl->tpl_vars["error_message"]->value) {
$_smarty_tpl->tpl_vars["error_message"]->_loop = true;
 $_smarty_tpl->tpl_vars["error"]->value = $_smarty_tpl->tpl_vars["error_message"]->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value=="INVALID_REQUEST") {?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="INVALID_DATA") {?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="PARAMETERS_MISSED") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The key parameters are not specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="MYSQL_ERROR") {?>
		<?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="NOT_LOGGED_IN") {?>
		<?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable(($_smarty_tpl->tpl_vars['GLOBALS']->value['site_url']).("/registration/"), null, 0);?> 
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please log in to place a listing. If you do not have an account, please<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
		<br/><br/>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"login"),$_smarty_tpl);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='DEFAULT_VALUE_NOT_SET') {?>
		<p class="error">Default value for <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
 is not set</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='NOT_SUBSCRIBE') {?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You don't have permissions to access this page.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='COMMENT_HAS_BAD_WORDS') {?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your comment has bad words<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=="NOT_LOGGED_IN_ALERTS") {?>	
		<?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable(($_smarty_tpl->tpl_vars['GLOBALS']->value['site_url']).("/registration/"), null, 0);?> 
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please log in to access this page. If you do not have an account, please<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>		<br/><br/>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"login"),$_smarty_tpl);?>

	<?php }?>
<?php } ?><?php }} ?>
