<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 18:02:32
         compiled from "template_satzview_user:templates/_system/miscellaneous/contact_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184401027557ee5b608ee576-12839088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aeb6ed3d77cd4dc1667cebaa55ff564a4bef170' => 
    array (
      0 => 'template_satzview_user:templates/_system/miscellaneous/contact_form.tpl',
      1 => 1390211938,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '184401027557ee5b608ee576-12839088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message_sent' => 0,
    'field_errors' => 0,
    'key' => 0,
    'GLOBALS' => 0,
    'name' => 0,
    'email' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee5b609efbd1_97866432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee5b609efbd1_97866432')) {function content_57ee5b609efbd1_97866432($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message_sent']->value==false) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"static_content",'function'=>"show_static_content",'pageid'=>'Contact'),$_smarty_tpl);?>


	<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='EMAIL') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please specify a valid email address.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='NAME') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please provide your full name.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='COMMENTS') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please include your comments.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='EMPTY_VALUE') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter Security code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='NOT_VALID') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Security code is not valid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>

	<form method="post" action="" onsubmit="disableSubmitButton('submitContact');">
	<input type="hidden" name="action" value="send_message" />
		<table width="95%" border="0" cellspacing="10" cellpadding="1" style="font-size:13px;" class="contact-us" >
			<tr>
				<td width="60%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Salutation First and Last Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
					<input type="text" class="fix" name="name" value="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['FirstName'])." ".((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['LastName']) : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="width:90%" /></td>
				<td width="40%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
					<input type="text" name="email" value="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['email'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" style="width:90%" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br />
					<textarea cols="20" rows="10" style="width:96%" name="comments"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comments']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"captcha_handle",'currentFunction'=>"contact_form"),$_smarty_tpl);?>
</td>
			</tr>
			<tr>
				<td colspan="2">
					<input class="button" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Submit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="submitContact"/>
				</td>
			</tr>
		</table>
	</form>

<?php } else { ?>
	<br />
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Thank you very much for your message. We will respond to you as soon as possible.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<br />
<?php }?><?php }} ?>
