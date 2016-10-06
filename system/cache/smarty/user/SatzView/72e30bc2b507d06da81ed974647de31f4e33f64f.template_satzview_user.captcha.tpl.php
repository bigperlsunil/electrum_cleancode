<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:48:52
         compiled from "template_satzview_user:../field_types/input/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105006357057ee1fecd584b1-08245980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72e30bc2b507d06da81ed974647de31f4e33f64f' => 
    array (
      0 => 'template_satzview_user:../field_types/input/captcha.tpl',
      1 => 1387796226,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '105006357057ee1fecd584b1-08245980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'captchaView' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fecd8ffb6_76351201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fecd8ffb6_76351201')) {function content_57ee1fecd8ffb6_76351201($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value=='reCaptcha') {?>
	<?php echo $_smarty_tpl->tpl_vars['captchaView']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='customCaptcha') {?>
	<script type="text/javascript">
		function refresh_captcha() {
			$.get("<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/reloadCustomCaptcha/", function(data){
				$("#customCaptcha").html(data);
			});
		}
	</script>
	<a href="javascript:refresh_captcha();">
		<span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reload Image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
	</a><br />
	<div id="customCaptcha"><?php echo $_smarty_tpl->tpl_vars['captchaView']->value;?>
</div><br/>
	<input type="text" name="captcha[input]" />
<?php } else { ?>
	<script type="text/javascript">
		function refresh_captcha() {
			document.getElementById('captchaImg').src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/captcha/?hash=" + Math.round(Math.random() * 1000 + 1000);
		}
	</script>
	<a href="javascript:refresh_captcha();">
		<span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reload Image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
	</a>
	<br />
	<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/captcha/?hash=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['php'][0][0]->php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo time();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['php'][0][0]->php(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Captcha<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /><br/>
	<input type="text" name="captcha" size="16" class="captcha" />
<?php }?><?php }} ?>
