<?php /* Smarty version Smarty-3.1.19, created on 2016-09-27 19:27:51
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/plugin_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68123254457ea7adfa0ef47-22584475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8b3afe51b98b113662588621cc44909463f949' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/plugin_settings.tpl',
      1 => 1422252556,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '68123254457ea7adfa0ef47-22584475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'plugin' => 0,
    'errors' => 0,
    'error' => 0,
    'messages' => 0,
    'message' => 0,
    'settings' => 0,
    'pluginSettings' => 0,
    'list' => 0,
    'setting_name' => 0,
    'savedSettings' => 0,
    'pluginSetting' => 0,
    'selectedItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ea7adfbe47c5_44321849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea7adfbe47c5_44321849')) {function content_57ea7adfbe47c5_44321849($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><script type="text/javascript">
	function applySettings() {
		$('input[name="submit"]').attr('value', 'apply');
	}
</script>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/plugins/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187; <?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/plug32.png" border="0" alt="" class="titleicon"/><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
	<p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['plugin']->value['name']=="CaptchaPlugin") {?>
	<form method="post">
		<input type="hidden" name="action" value="save_settings">
		<input type="hidden" name="plugin" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
">
        <input type="hidden" name="submit" value="save">
		<table>
			<thead>
				<tr>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['pluginSettings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pluginSettings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pluginSettings']->key => $_smarty_tpl->tpl_vars['pluginSettings']->value) {
$_smarty_tpl->tpl_vars['pluginSettings']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['pluginSettings']->value['id'], null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='separator') {?>
					<tr>
						<td colspan="2"><?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['caption']) {?><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><?php } else { ?>&nbsp;<?php }?></td>
					</tr>
					<?php } else { ?>
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pluginSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]==$_smarty_tpl->tpl_vars['list']->value['id']) {?>checked=checked<?php }?> />&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['list']->value['id']=='kCaptcha') {?>
									<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/../system/miscellaneous/captcha/" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Captcha<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /></td>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['list']->value['view'];?>

								<?php }?>
							<td><?php if ($_smarty_tpl->tpl_vars['list']->value['id']!='kCaptcha') {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/plugins/?action=editCaptcha&amp;type=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
&amp;plugin=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
" class="editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?></td>
						</tr>
						<?php } ?>
					<?php }?>
				<?php } ?>
				<tr id="clearTable">
					<td  colspan="3" align="right">
                        <div class="floatRight">
                            <input type="submit" id="apply" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" />
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>
			</tbody>
		</table>
	</form>

<?php } else { ?>

	<form method="post">
		<input type="hidden" name="action" value="save_settings">
		<input type="hidden" name="plugin" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
">
        <input type="hidden" name="submit" value="save">
		<table>
			<thead>
				<tr>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['pluginSettings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pluginSettings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pluginSettings']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pluginSettings']['total'] = $_smarty_tpl->tpl_vars['pluginSettings']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pluginSettings']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['pluginSettings']->key => $_smarty_tpl->tpl_vars['pluginSettings']->value) {
$_smarty_tpl->tpl_vars['pluginSettings']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pluginSettings']['iteration']++;
?>
					<?php $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['pluginSettings']->value['id'], null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='separator') {?>
						<tr>
							<td colspan="2"><?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['caption']) {?><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><?php } else { ?>&nbsp;<?php }?></td>
						</tr>
						<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['setting_name']->value=='IndeedKeywords'||$_smarty_tpl->tpl_vars['setting_name']->value=='simplyHiredKeyword'||$_smarty_tpl->tpl_vars['setting_name']->value=='JujuKeywords') {?>
						<tr>
							<td colspan="2"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Filtering Parameters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong></td>
						</tr>
						<?php }?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td><?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['is_required']) {?><span class="required">*</span><?php }?><?php echo $_smarty_tpl->tpl_vars['pluginSetting']->value['tabName']['id'];?>

								<?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='boolean') {?>
									<?php if ($_smarty_tpl->tpl_vars['setting_name']->value=='display_for_all_pages') {?>
										<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="0" /><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]) {?>checked="checked" <?php }?> onclick="CheckAll(this)" />
									<?php } else { ?>
										<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="0" /><input type="checkbox" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['pluginSettings']['iteration'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]) {?>checked="checked" <?php }?> />
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['id']=='simplyHiredSiteUrl') {?>
									<select name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
">
										<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pluginSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]) {?><?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]==$_smarty_tpl->tpl_vars['list']->value['id']) {?>selected="selected" <?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['list']->value['id']=='simplyhired.com') {?> selected="selected"<?php }?> <?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
										<?php } ?>
									</select>
									<p> </p>
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='string') {?>
									<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], ENT_QUOTES, 'UTF-8', true);?>
" />
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='text') {?>
									<textarea name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
" style="width: 250px; height: 150px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='integer') {?>
									<input type="text" class="inputInteger" value="<?php echo $_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
" />
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='list') {?>
									<select name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
">
										<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please Select Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</option>
									<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pluginSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]==$_smarty_tpl->tpl_vars['list']->value['id']) {?>selected="selected" <?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
									<?php } ?>
									</select>
								<?php } elseif ($_smarty_tpl->tpl_vars['pluginSettings']->value['type']=='multilist') {?>
									<select name="<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['id'];?>
[]" multiple="multiple">
										<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please Select Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</option>
									<?php $_smarty_tpl->tpl_vars['selectedItems'] = new Smarty_variable($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], null, 0);?>
									<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pluginSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['list']->value['id'],explode(',',$_smarty_tpl->tpl_vars['selectedItems']->value))) {?>selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
									<?php } ?>
									</select>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['pluginSettings']->value['comment']) {?>
								<br/><small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pluginSettings']->value['comment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
								<?php }?>
							</td>
						</tr>
					<?php }?>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['plugin']->value['name']=="MailChimpPlugin") {?>
					<tr><td colspan="2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Important: On Mailchimp list settings please do not change the tag of the First Name field ("FNAME")<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</td></tr>
				<?php }?>
			</tbody>
			<tr id="clearTable">
				<td colspan="2" align="right">
                    <div class="floatRight">
                        <input type="submit" class="grayButton" id="apply" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                    </div>
                </td>
			</tr>
		</table>
	</form>
<?php }?>
<div id="runManually"></div>

<script>
	var total = <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['pluginSettings']['total']) {?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['pluginSettings']['total'];?>
<?php } else { ?>0<?php }?>;

	function CheckAll(obj)
	{
		for (i = 4; i <= total; i++) {
			if (checkbox = document.getElementById('checkbox_' + i))
				checkbox.checked = obj.checked;
		}
	}

    $('#apply').click(
        function(){
            $('input[name="submit"]').attr('value', 'apply');
        }
    );
</script>
<?php }} ?>
