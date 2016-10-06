<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:30:33
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/social_media/social_media_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14797537157e4ef312bbeb7-67267194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345fa190a3cb3f2c1e57411b2aec7022cbe6cf36' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/social_media/social_media_settings.tpl',
      1 => 1453269654,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '14797537157e4ef312bbeb7-67267194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'error' => 0,
    'messages' => 0,
    'message' => 0,
    'network' => 0,
    'settings' => 0,
    'networkSettings' => 0,
    'pluginSetting' => 0,
    'setting_name' => 0,
    'savedSettings' => 0,
    'list' => 0,
    'selectedItems' => 0,
    'networkFeeds' => 0,
    'feed' => 0,
    'title' => 0,
    'action' => 0,
    'stat' => 0,
    'trRunManually' => 0,
    'Close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4ef315a2010_72771051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef315a2010_72771051')) {function content_57e4ef315a2010_72771051($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social Media<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187; <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$networkName Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/gear32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$networkName Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
?>
	<p class="error">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</p>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
?>
	<p class="message">
		<?php if ($_smarty_tpl->tpl_vars['message']->value=='ACCOUNT_UPDATED') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Account is successfully updated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</p>
<?php } ?>

<div id="social-media">
	<div id="settingsPane">
		<form method="post">
			<?php if ($_smarty_tpl->tpl_vars['network']->value!='twitter'&&$_smarty_tpl->tpl_vars['network']->value!='googleplus'&&$_smarty_tpl->tpl_vars['network']->value!='linkedin') {?>
				<ul class="ui-tabs-nav">
					<li class="ui-tabs-selected"><a href="#connectionSettings"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$networkName Connect Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
					<li class="ui-tabs-unselect"><a href="#postJobs"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post Jobs on $networkName<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
				</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['network']->value=='twitter') {?>
				<ul class="ui-tabs-nav">
					<li class="ui-tabs-selected"><a href="#postJobs"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post Jobs on $networkName<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
				</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['network']->value=='googleplus'||$_smarty_tpl->tpl_vars['network']->value=='linkedin') {?>
				<ul class="ui-tabs-nav">
					<li class="ui-tabs-selected"><a href="#connectionSettings"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$networkName Connect Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
				</ul>
			<?php }?>
			<input type="hidden" name="action" value="save_settings">
			<?php if ($_smarty_tpl->tpl_vars['network']->value!='twitter') {?>
				<div id="connectionSettings" class="ui-tabs-panel">
					<table class="basetable" width="100%">
						<input type="hidden" name="soc_network" value="<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
">
						<input type="hidden" name="submit" value="save">
						<?php  $_smarty_tpl->tpl_vars['networkSettings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['networkSettings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['networkSettings']->key => $_smarty_tpl->tpl_vars['networkSettings']->value) {
$_smarty_tpl->tpl_vars['networkSettings']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="enable_job_sharing_for_users_googleplus") {?>
								<tr>
									<td colspan="4" class="head"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post Jobs on $networkName<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
								</tr>
							<?php }?>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'oddrow,evenrow'),$_smarty_tpl);?>

								<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="oauth2_client_id"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="client_secret"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="developer_key"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="enable_job_sharing_for_users_googleplus"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="facebook_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="linkedin_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_allowPeopleSearch") {?>network-field-oddrow<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="google_plus_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="fb_appID"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="fb_appSecret"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_apiKey"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_secKey") {?>network-field-evenrow<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="developer_key"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_allowPeopleSearch"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="facebook_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="fb_appSecret"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="linkedin_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_secKey"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="google_plus_userGroup") {?>network-field-last<?php }?>">
								<?php $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['networkSettings']->value['id'], null, 0);?>
								<td><label for="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label></td>
								<td valign="top" class="required"><?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['is_required']) {?>*<?php }?></td>
								<td class="clear-border-left"
									<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="oauth2_client_id"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="client_secret"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="developer_key"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="google_plus_userGroup"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="enable_job_sharing_for_users_googleplus"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="fb_appID"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="fb_appSecret"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="facebook_userGroup"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="li_secKey"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="li_apiKey"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="linkedin_userGroup"&&$_smarty_tpl->tpl_vars['networkSettings']->value['id']!=="li_allowPeopleSearch") {?>colspan="2"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['pluginSetting']->value['tabName']['id'];?>

									<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='boolean') {?>
										<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="0" /><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['setting_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]) {?>checked="checked" <?php }?> />
									<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='string') {?>
										<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" />
									<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='text') {?>
										<textarea name="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='integer') {?>
										<input type="text" class="inputInteger" value="<?php echo $_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
"/>
									<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='list') {?>
										<select name="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
">
											<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please Select Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</option>
											<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['networkSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]==$_smarty_tpl->tpl_vars['list']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
</option>
											<?php } ?>
										</select>
									<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['type']=='multilist') {?>
										<select name="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
[]" multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
">
											<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please Select Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</option>
											<?php $_smarty_tpl->tpl_vars['selectedItems'] = new Smarty_variable($_smarty_tpl->tpl_vars['savedSettings']->value[$_smarty_tpl->tpl_vars['setting_name']->value], null, 0);?>
											<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['networkSettings']->value['list_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" <?php if ((is_array($_smarty_tpl->tpl_vars['selectedItems']->value)&&in_array($_smarty_tpl->tpl_vars['list']->value['id'],$_smarty_tpl->tpl_vars['selectedItems']->value))||(!is_array($_smarty_tpl->tpl_vars['selectedItems']->value)&&in_array($_smarty_tpl->tpl_vars['list']->value['id'],explode(',',$_smarty_tpl->tpl_vars['selectedItems']->value)))) {?>selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
											<?php } ?>
										</select>
									<?php }?>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="oauth2_client_id") {?>
									<td rowspan="3" class="comment-td">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['comment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</td>
								<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="fb_appID"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_apiKey") {?>
									<td rowspan="2" class="comment-td">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['comment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</td>
								<?php } elseif ($_smarty_tpl->tpl_vars['networkSettings']->value['id']=="google_plus_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="enable_job_sharing_for_users_googleplus"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="facebook_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="linkedin_userGroup"||$_smarty_tpl->tpl_vars['networkSettings']->value['id']=="li_allowPeopleSearch") {?>
									<td class="comment-td">
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['comment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</td>
								<?php }?>
							</tr>
						<?php } ?>
					</table>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['network']->value!='googleplus'&&$_smarty_tpl->tpl_vars['network']->value!='linkedin') {?>
				<div id="postJobs" class="ui-tabs-panel" <?php if ($_smarty_tpl->tpl_vars['network']->value=='twitter') {?>style="border-top: 1px solid #BEC4C8;"<?php }?>>
					<div style="vertical-align: middle;">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable job sharing for users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php $_smarty_tpl->_capture_stack[0][] = array("jobSharingSettingName", null, null); ob_start(); ?>enable_job_sharing_for_users_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['network']->value, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<input type="hidden" name="<?php echo Smarty::$_smarty_vars['capture']['jobSharingSettingName'];?>
" value="0" />
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['networkSettings']->value['id'];?>
" name="<?php echo Smarty::$_smarty_vars['capture']['jobSharingSettingName'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['savedSettings']->value[Smarty::$_smarty_vars['capture']['jobSharingSettingName']]) {?> checked="checked"<?php }?> />
						<br />
						<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users allowed to post jobs on Social Networks will be able to post jobs on $networkName.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
					</div>
					<br />
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/?action=add_feed&amp;soc_network=<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
" class="grayButton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add New Job Feed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>

					<?php if ($_smarty_tpl->tpl_vars['networkFeeds']->value) {?>
						<br />
						<table>
							<thead>
								<tr>
									<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feed Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
									<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Account name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
									<th class="actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
									<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Status<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['feed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['networkFeeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feed']->key => $_smarty_tpl->tpl_vars['feed']->value) {
$_smarty_tpl->tpl_vars['feed']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['feed']->value['active']==0) {?>
										<?php $_smarty_tpl->tpl_vars["stat"] = new Smarty_variable("off", null, 0);?>
										<?php $_smarty_tpl->tpl_vars["action"] = new Smarty_variable("1", null, 0);?>
										<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Not active. Click to activate";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1, null, 0);?>
									<?php } else { ?>
										<?php $_smarty_tpl->tpl_vars["stat"] = new Smarty_variable("on", null, 0);?>
										<?php $_smarty_tpl->tpl_vars["action"] = new Smarty_variable("0", null, 0);?>
										<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Active. Click to deactivate";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp2, null, 0);?>
									<?php }?>
									<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
										<td width="30%">
											<?php echo $_smarty_tpl->tpl_vars['feed']->value['feed_name'];?>

											<?php if ($_smarty_tpl->tpl_vars['feed']->value['expired']) {?>
												<br />
												<small class="color-red">
													<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The access token for this feed is expired. To activate the feed you need to refresh the token by clicking "Grant Permission" button.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												</small>
											<?php }?>
										</td>
										<td width="30%"><?php echo $_smarty_tpl->tpl_vars['feed']->value['account_id'];?>
</td>
										<td nowrap="nowrap">
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/?action=edit_feed&amp;soc_network=<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
&amp;sid=<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
" class="editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/?action=delete_feed&amp;soc_network=<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
&amp;sid=<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
" onclick="return confirm('Are you sure?');" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/?action=run_manually&amp;soc_network=<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
&amp;sid=<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['feed']->value['expired']) {?>return false;<?php }?> runManually('<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
', 300, 500); return false;" class="editbutton greenbtn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Run<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/?action=authorize&amp;sub_action=grant&amp;soc_network=<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
&amp;sid=<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['feed']->value['expired']) {?>class="redButton"<?php } else { ?>class="grayButton"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Grant permission<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['feed']->value['expired']) {?>
												<img title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" border=0 src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
off.gif">
											<?php } else { ?>
												<a href="?action=status&amp;active=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&amp;sid=<?php echo $_smarty_tpl->tpl_vars['feed']->value['sid'];?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" border=0 src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['stat']->value;?>
.gif"></a>
											<?php }?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php }?>
				</div>
			<?php }?>
			<div class="clr"><br/></div>
			<div style="width: 900px;">
				<div class="floatRight" style="text-align: right;">
					<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" id="applySettings"/>
					<input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
				</div>
			</div>
		</form>
	</div>
</div>
<div id="runManually"></div>
<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Close";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["Close"] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Run Manually";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["trRunManually"] = new Smarty_variable($_tmp4, null, 0);?>
<script type="text/javascript">
	$("#settingsPane").tabs();

	function runManually(sid) {
		url = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/system/classifieds/<?php echo $_smarty_tpl->tpl_vars['network']->value;?>
/";
		$("#runManually").dialog( 'destroy' ).html('<img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
		$("#runManually").dialog({
			width: 500,
			height: 300,
			title: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trRunManually']->value, ENT_QUOTES, 'UTF-8', true);?>
',
			buttons: {
				Ok: function() {
					$('#runManually').dialog( 'destroy' ).html('<img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					$('#runManually').dialog({
						width: 500,
						height: 300,
						title: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trRunManually']->value, ENT_QUOTES, 'UTF-8', true);?>
',
						buttons: {
							'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Close']->value, ENT_QUOTES, 'UTF-8', true);?>
': function() {
								$(this).dialog('close');
							}
						}
					}).dialog( 'open' );

					$.post(url, { action: "run_manually", sid: sid }, function(data) {
						$("#runManually").html(data);
					});
				},
				'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Close']->value, ENT_QUOTES, 'UTF-8', true);?>
': function() {
					$(this).dialog('close');
				}
			}
		}).dialog( 'open' );

		$.post(url, { action: "run_manually_check", sid: sid }, function(data) {
			if (data.match(/^0[^\d]+/)) {
				$(".ui-dialog-buttonpane button:eq(0)").hide();
			}
			$("#runManually").html(data);
		});
	}

	$('#applySettings').click(
		function(){
			$('input[name="submit"]').attr('value', 'apply');
		}
	);
</script>
<?php }} ?>
