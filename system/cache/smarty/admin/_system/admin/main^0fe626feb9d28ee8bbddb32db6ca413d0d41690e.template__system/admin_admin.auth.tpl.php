<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:30:18
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/main/auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23611422357e4d0ced11d95-55445686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe626feb9d28ee8bbddb32db6ca413d0d41690e' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/main/auth.tpl',
      1 => 1474617615,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '23611422357e4d0ced11d95-55445686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4d0ceda6856_90656843',
  'variables' => 
  array (
    'GLOBALS' => 0,
    'form_hidden_params' => 0,
    'ERROR' => 0,
    'errorCode' => 0,
    'isDemo' => 0,
    'url' => 0,
    'params' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4d0ceda6856_90656843')) {function content_57e4d0ceda6856_90656843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Electrum Jobs<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Panel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</title>
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"auth.css"),$_smarty_tpl);?>
"/>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']) {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.js"></script>

	<script type="text/javascript">$(function () {
		$('input[name=username]').focus();
	})</script>
</head>
<body>
	<div id="loginForm">
		<div id="headerLogo">
			<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
authLogo.png" border="0" width="150" /><br/>
			
		</div>
		<div class="clr"></div>
		<div id="authFormLogin">
			<form method="post" action="">
				<?php echo $_smarty_tpl->tpl_vars['form_hidden_params']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['ERROR']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['errorCode'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ERROR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['errorCode']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['errorCode']->value=="NOT_VALID") {?>
							<fieldset id="errorAuth"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Security code is not valid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</fieldset>
						<?php } elseif ($_smarty_tpl->tpl_vars['errorCode']->value=="EMPTY_VALUE") {?>
							<fieldset id="errorAuth"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter Security code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</fieldset>
						<?php } elseif ($_smarty_tpl->tpl_vars['errorCode']->value=="LOGIN_PASS_NOT_CORRECT") {?>
							<fieldset id="errorAuth"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The username or password you entered is incorrect<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</fieldset>
						<?php }?>
					<?php } ?>
				<?php }?>
				<label><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/><input type="text" name="username" <?php if ($_smarty_tpl->tpl_vars['isDemo']->value) {?>value="admin"<?php }?> /></label>
				<label><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/><input type="password" name="password"  <?php if ($_smarty_tpl->tpl_vars['isDemo']->value) {?>value="admin"<?php }?> /></label>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"captcha_handle"),$_smarty_tpl);?>


				<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="loginButton"/>
			</form>

			<form method="get" action="">
				<select id="languages" name="lang" onchange="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?lang='+this.value+'&amp;<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
'">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GLOBALS']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id']==$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
				<?php } ?>
				</select>
			</form>
		</div>
	</div>
	<div class="clr"></div>
	<div id="copyright"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copyright<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  <?php echo smarty_modifier_date_format(time(),"%Y");?>
 &copy; ElectrumJobs.com <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All rights reserved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
</body>
</html><?php }} ?>
