<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:37:15
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31684077957e4e2b3e6da12-81669596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5080788d64d543939eeb9efdbfc1dbc553654bde' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/settings.tpl',
      1 => 1450778394,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '31684077957e4e2b3e6da12-81669596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'GLOBALS' => 0,
    'settings' => 0,
    'listingEmailTemplates' => 0,
    'emailTemplate' => 0,
    'userEmailTemplates' => 0,
    'productEmailTemplates' => 0,
    'otherEmailTemplates' => 0,
    'countries' => 0,
    'country' => 0,
    'i18n_domains' => 0,
    'domain' => 0,
    'i18n_languages' => 0,
    'language' => 0,
    'timezones' => 0,
    'timezone' => 0,
    'disable_bots' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e2b448a4e1_34209078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e2b448a4e1_34209078')) {function content_57e4e2b448a4e1_34209078($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/gear32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/settings/" id="settingsPane">
	<input type="hidden" id="action" name="action" value="save_settings" />
    <input type="hidden" id="page" name="page" value="#generalTab"/>
	<div id="settingsPane">
		<ul class="ui-tabs-nav">
			<li class="ui-tabs-selected"><a href="#generalTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
General<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
            <li class="ui-tabs-unselect"><a href="#performanceTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
            <li class="ui-tabs-unselect"><a href="#notificationsTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notifications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
			<li class="ui-tabs-unselect"><a href="#internationalizationTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Internationalization<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
			<li class="ui-tabs-unselect"><a href="#currencyTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Billing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
			<li class="ui-tabs-unselect"><a href="#securityTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Security<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
			<li class="ui-tabs-unselect"><a href="#mailTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
			<li class="ui-tabs-unselect"><a href="#errorControlTab"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error Control<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a></li>
		</ul>

		<div id="generalTab" class="ui-tabs-panel">
			<table width="100%">
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

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="site_title" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listing Picture Width<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="listing_picture_width" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['listing_picture_width'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listing Picture Height<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="listing_picture_height" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['listing_picture_height'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listing Thumbnail Width<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="listing_thumbnail_width" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['listing_thumbnail_width'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listing Thumbnail Height<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="listing_thumbnail_height" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['listing_thumbnail_height'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Radius Search Unit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><select name="radius_search_unit"><option value="miles"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Miles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option><option value="kilometers"<?php if ($_smarty_tpl->tpl_vars['settings']->value['radius_search_unit']=='kilometers') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kilometers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option></select></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload file types<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="file_valid_types" size="50" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['file_valid_types'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turn Comments on<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="show_comments" value="0" /><input type="checkbox" name="show_comments" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_comments']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turn Ratings on<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="show_rates" value="0" /><input type="checkbox" name="show_rates" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_rates']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show "Terms of Use" check box on registration form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="terms_of_use_check" value="0" /><input type="checkbox" name="terms_of_use_check" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['terms_of_use_check']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Maintenance Mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/?module_name=miscellaneous&template_name=maintenance_mode.tpl" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit maintenance_mode.tpl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a></td>
					<td><input type="hidden" name="maintenance_mode" value="0" /><input id="maintenance_mode_" type="checkbox" name="maintenance_mode" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['maintenance_mode']) {?> checked="checked"<?php }?> /><br/>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
enter IP or IP range to access the site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['maintenance_mode_ip'];?>
" name="maintenance_mode_ip"/><br/>
						<sub><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
use * for replacing one or several digits<br />use comma (,) to specify two or more IPs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</sub>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Automatically Delete Expired Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="automatically_delete_expired_listings" value="0" /><input type="checkbox" name="automatically_delete_expired_listings" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['automatically_delete_expired_listings']) {?> checked="checked"<?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
after<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <input type="text"  style="width:100px" name="period_delete_expired_listings" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['period_delete_expired_listings'];?>
"/> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Autocomplete after<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="min_autocomplete_symbols_quantity" value="0" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
after<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <input type="text"  style="width:100px" name="min_autocomplete_symbols_quantity" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['min_autocomplete_symbols_quantity'];?>
"/> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
symbols<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable autocomplete for 'Keywords' field on search forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="use_autocomplete_for_keywords" value="0" /><input type="checkbox" name="use_autocomplete_for_keywords" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_autocomplete_for_keywords']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Keywords Highlight for search results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="use_highlight_for_keywords" value="0" /><input type="checkbox" name="use_highlight_for_keywords" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_highlight_for_keywords']) {?> checked="checked"<?php }?> /></td>
				</tr>

                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Keywords Search in attached files (doc, docx, xls, xlsx, pdf)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="get_keyword_from_file" value="0" /><input type="checkbox" name="get_keyword_from_file" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['get_keyword_from_file']) {?> checked="checked"<?php }?> /></td>
				</tr>

                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display "Map View" button on search results page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><input type="hidden" name="view_on_map" value="0" /><input type="checkbox" name="view_on_map" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['view_on_map']) {?> checked="checked"<?php }?> /></td>
                </tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allow to post before checkout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="allow_to_post_before_checkout" value="0" /><input type="checkbox" name="allow_to_post_before_checkout" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['allow_to_post_before_checkout']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr id="clearTable">
					<td colspan="2" align="right"><div class="floatRight"><input type="submit" class="greenButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /></div></td>
				</tr>

				</tbody>
			</table>

		</div>

        <div id="performanceTab" class="ui-tabs-panel">

            <table class="basetable" width="100%">

                <tr class="headrow">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                </tr>

                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Caching<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><input type="hidden" name="enableCache" value="0" /><input id="enableCache" type="checkbox" name="enableCache" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['enableCache']) {?> checked="checked"<?php }?> /></td>
                </tr>

                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache Lifetime<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td>
                        <input type="text" style="width: 30px" name="cacheHours" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['cacheHours'];?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
h<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <input type="text" name="cacheMinutes" style="width: 30px" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['cacheMinutes'];?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
m<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </td>
                </tr>

                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 &quot;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Browse by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&quot; <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
counter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><input type="hidden" name="enableBrowseByCounter" value="0" /><input type="checkbox" name="enableBrowseByCounter" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['enableBrowseByCounter']) {?> checked="checked"<?php }?> /></td>
                </tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable gzip-compression for Site Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="gzip_compression" value="0" /><input type="checkbox" name="gzip_compression" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['gzip_compression']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable profiler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="profiler" value="0" /><input type="checkbox" name="profiler" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['profiler']) {?> checked="checked"<?php }?> /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clean up statistics after<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<input type="text" name="statistics_lifetime" style="width: 30px" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['statistics_lifetime'];?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
months<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</td>
				</tr>

				<tr id="clearTable">
                    <td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
                </tr>

            </table>

        </div>

        <div id="notificationsTab" class="ui-tabs-panel ui-tabs-hide">

			<table class="basetable" width="100%">
				<tr class="headrow">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Email to receive Notifications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="notification_email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['notification_email'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2"><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Notifications (marked below) will be sent to this email address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </small></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Test Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="test_email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['test_email'];?>
" /></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Added<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_on_listing_added" class="left">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_added']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_added']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/listing/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_added'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Added<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_on_user_registration" class="left">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_user_registration']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_user_registration']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/user/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_on_user_registration'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Expiration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_on_listing_expiration">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_expiration']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_expiration']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/listing/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_on_listing_expiration'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Expiration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Product Expiration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_on_user_contract_expiration">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_user_contract_expiration']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_on_user_contract_expiration']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/product/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_on_user_contract_expiration'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Product Expiration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Profile Deletion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_admin_on_deleting_user_profile">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_deleting_user_profile']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_deleting_user_profile']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/user/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_deleting_user_profile'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on User Profile Deletion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Flagged<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_admin_on_listing_flagged">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_listing_flagged']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_listing_flagged']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/listing/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_listing_flagged'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Listing Flagged<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Sub-Admin on Account Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<select name="notify_admin_on_subadmin_registration">
							<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php  $_smarty_tpl->tpl_vars["emailTemplate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["emailTemplate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['otherEmailTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["emailTemplate"]->key => $_smarty_tpl->tpl_vars["emailTemplate"]->value) {
$_smarty_tpl->tpl_vars["emailTemplate"]->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_subadmin_registration']==$_smarty_tpl->tpl_vars['emailTemplate']->value['sid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['emailTemplate']->value['name'];?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_subadmin_registration']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/user/<?php echo $_smarty_tpl->tpl_vars['settings']->value['notify_admin_on_subadmin_registration'];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notify Admin on Sub-Admin registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Listings sent in Email Alerts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<input type="text" name="num_of_listings_sent_in_email_alerts" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['num_of_listings_sent_in_email_alerts'];?>
"/>
					</td>
				</tr>

				<tr id="clearTable">
					<td colspan=2 align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>

			</table>
		</div>

		<div id="internationalizationTab" class="ui-tabs-panel">

			<table class="basetable" width="100%">

				<tr class="headrow">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
					    <select name="default_country">
					    	<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
						    	<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['default_country']==$_smarty_tpl->tpl_vars['country']->value['id']) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['country']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						    <?php } ?>
					    </select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Domain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
					    <select name="i18n_default_domain">
						    <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i18n_domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>
						    	<option value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['i18n_default_domain']==$_smarty_tpl->tpl_vars['domain']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						    <?php } ?>
					    </select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
					    <select name="i18n_default_language">
						    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i18n_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						    	<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['i18n_default_language']==$_smarty_tpl->tpl_vars['language']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
						    <?php } ?>
					    </select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mark Phrases That Are Not Translated<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
					    <select name="i18n_display_mode_for_not_translated_phrases">
						    <option value="default"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
default<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						    <option value="highlight"<?php if ($_smarty_tpl->tpl_vars['settings']->value['i18n_display_mode_for_not_translated_phrases']=='highlight') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
highlight<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					    </select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Timezone<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
					    <select name="timezone">
						    <?php  $_smarty_tpl->tpl_vars['timezone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['timezone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['timezone']->key => $_smarty_tpl->tpl_vars['timezone']->value) {
$_smarty_tpl->tpl_vars['timezone']->_loop = true;
?>
						    	<option value="<?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['timezone']==$_smarty_tpl->tpl_vars['timezone']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
</option>
						    <?php } ?>
					    </select>
					</td>
				</tr>

				<tr id="clearTable">
					<td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>

			</table>

		</div>

		<div id="currencyTab" class="ui-tabs-panel">

			<table class="basetable" width="100%">
				<tr class="headrow">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Taxes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="enable_taxes" value="0"/><input type="checkbox" name="enable_taxes" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_taxes']) {?>checked = checked<?php }?>/></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Billing Currency Sign<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" size="3" name="transaction_currency" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['transaction_currency'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2"><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This currency sign will be used for displaying your site services prices<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
				</tr>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send Payment To<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><textarea name="send_payment_to" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['settings']->value['send_payment_to'];?>
</textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><small>*&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This text will be displayed in invoices<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
                </tr>
				<tr id="clearTable">
					<td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>
			</table>

		</div>

		<div id="securityTab" class="ui-tabs-panel">

			<table class="basetable" width="100%">
				<tr class="headrow">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Registration forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="registrationCaptcha" value="0" /><input type="checkbox" name="registrationCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['registrationCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Post Job/Resume forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="postJobCaptcha" value="0" /><input type="checkbox" name="postJobCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['postJobCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Contact us form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="contactUsCaptcha" value="0" /><input type="checkbox" name="contactUsCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['contactUsCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Tell a friend form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="tellFriendCaptcha" value="0" /><input type="checkbox" name="tellFriendCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['tellFriendCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Contact user/Application forms<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="contactUserCaptcha" value="0" /><input type="checkbox" name="contactUserCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['contactUserCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use CAPTCHA for Flag Listing form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="flagListingCaptcha" value="0" /><input type="checkbox" name="flagListingCaptcha" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['flagListingCaptcha']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Cookie Law compatibility<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="cookieLaw" value="0" /><input type="checkbox" name="cookieLaw" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['cookieLaw']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bind session to IP address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="hidden" name="sessionBindIP" value="0" /><input type="checkbox" name="sessionBindIP" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['sessionBindIP']) {?> checked="checked"<?php }?> /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Maximum allowed authentication attempts without captcha<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<div><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Set value 0 or leave it empty if you would like to disabe this setting<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></div>
					</td>
					<td><input type="text" size="3" name="captcha_max_allowed_auth_attempts" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['captcha_max_allowed_auth_attempts'];?>
" /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ban web crawlers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<div><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This setting allows you to disable web crawlers to index pages on your site. This can significantly reduce the load of your site. To disable certain web crawler please enter "User Agent" used by this crawler into the text field on the right side. Use new line sign to separate several web crawlers. To turn off this setting just delete everything from that field.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></div>
					</td>
					<td><textarea name="disable_bots" rows="10" cols="50"><?php echo $_smarty_tpl->tpl_vars['disable_bots']->value;?>
</textarea></td>
				</tr>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Behavior With Escape HTML Tags<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td>
                        <select name="escape_html_tags">
                            <option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Raw output (unsafe, XSS possible)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                            <option value="htmlentities"<?php if ($_smarty_tpl->tpl_vars['settings']->value['escape_html_tags']=='htmlentities') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Convert escape chars to ASCII symbols (beta)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                            <option value="htmlpurifier"<?php if ($_smarty_tpl->tpl_vars['settings']->value['escape_html_tags']=='htmlpurifier') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Strip Tags<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                        </select>
                    </td>
                </tr>
                <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                    <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bad word filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                    <td><textarea name="bad_words"><?php echo $_smarty_tpl->tpl_vars['settings']->value['bad_words'];?>
</textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List undesirable words separated by space<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</small></td>
                </tr>
                <tr id="clearTable">
					<td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>
			</table>

		</div>

		<div id="mailTab" class="ui-tabs-panel">
			<table class="basetable" width="100%">
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="FromName" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['FromName'];?>
" /></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><input type="text" name="system_email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['system_email'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2"><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users will get notifications from this email address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail Signature<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td><textarea cols="80" rows="6" name="system_email_signature"><?php echo $_smarty_tpl->tpl_vars['settings']->value['system_email_signature'];?>
</textarea></td>
				</tr>
			</table>
			<table class="basetable" width="100%" >
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td class="strong"><input type="radio" name="smtp" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==1) {?>checked="checked"<?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
			</table>
			<div class="smtp">
				<table class="basetable" width="100%">
					<tr class="headrow">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Sender Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="text" name="smtp_sender" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_sender'];?>
" /></td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Port<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="text" name="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_port'];?>
" /></td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Host<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="text" name="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_host'];?>
" /></td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Security<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td>
							<input type="radio" name="smtp_security" value="none" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']!='ssl'&&$_smarty_tpl->tpl_vars['settings']->value['smtp_security']!='tls') {?>checked="checked"<?php }?> /><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;&nbsp;
							<input type="radio" name="smtp_security" value="ssl" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']=='ssl') {?>checked="checked"<?php }?> /><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SSL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;&nbsp;
							<input type="radio" name="smtp_security" value="tls" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']=='tls') {?>checked="checked"<?php }?> /><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TLS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						</td>
					</tr>
					<tr>
						<td colspan="2"><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Look for your SMTP mail host requirements<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="text" name="smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_username'];?>
" /></td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="password" name="smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_password'];?>
" /></td>
					</tr>
				</table>
			</div>
			<div class="sendmail">
				<table class="basetable" width="100%">
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td style="font-weight: bold;"><input type="radio" name="smtp" value="0"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==0) {?>checked="checked"<?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					</tr>
				</table>
				<table class="basetable" width="100%">
					<tr class="headrow">
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td width="226px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Path to sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input type="text" name="sendmail_path" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['sendmail_path'];?>
" /></td>
					</tr>
				</table>
			</div>
			<div class='sendmail'>
				<table class="basetable" width="100%">
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td class="strong"><input type="radio" name="smtp" value="3"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==3) {?>checked="checked"<?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
PHP Mail Function<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					</tr>
				</table>
			</div>
			<div class="sendmail">
				<table class="basetable" width="100%">
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td width='226px'><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Email Scheduling<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td>
							<input type="hidden" name="email_scheduling" value="0"/>
							<input type="checkbox" id="email_scheduling" name='email_scheduling' value='1'  <?php if ($_smarty_tpl->tpl_vars['settings']->value['email_scheduling']) {?>checked='checked'<?php }?> /><br/>
							<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of emails to be sent per hour<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><br/>
							<input type="text" id="number_emails" name="number_emails" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['number_emails'];?>
"/><br/>
							<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You need to make additional settings for CRON for this option to work. Use the following link<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/email-scheduling/</small>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<small>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Here is an example of the full CRON script in Unix format to run the email scheduling every hour<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/>
								<strong>0 */1 * * * wget --tries=1 --timeout=99999 -O email_log.txt <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/email-scheduling/</strong>
							</small>
						</td>
					</tr>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td width="226px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Check mail set up<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td><input id="checkMail" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Check<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton"/></td>
					</tr>
				</table>
			</div>
			<table class="basetable" width="100%">
				<tr id="clearTable">
					<td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>
			</table>
		</div>


		<div id="errorControlTab" class="ui-tabs-panel">

			<table class="basetable" width="100%">

				<tr class="headrow">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error Control mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><select name="error_control_mode">
							<option value="production" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_control_mode']=='production') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Production<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<option value="debug" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_control_mode']=='debug') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Debug<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						</select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td></td>
					<td><small>* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Production mode hide runtime errors from page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log Errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<input name="error_logging" type="hidden" value="0" />
						<input name="error_logging" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_logging']=='1') {?> checked="checked"<?php }?> />
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error Level<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td><select name="error_log_level">
							<option value="E_ALL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_log_level']=='E_ALL') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<option value="E_WARNING" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_log_level']=='E_WARNING') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Errors And Warnings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<option value="E_ERROR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['error_log_level']=='E_ERROR') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only Errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						</select>
					</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
					<td colspan="2"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/view-error-log/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View Error Log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>

				<tr id="clearTable">
					<td colspan="2" align="right">
                        <div class="floatRight">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="applySettings(this)"/>
                            <input type="submit" class="grayButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
                        </div>
                    </td>
				</tr>

			</table>

		</div>
</form>
</div>
<br />
<div><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/alphabet-letters/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alphabet Letters for "Search by Company" section<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div>


<script type="text/javascript">
	$(document).ready(function() {
		$("#settingsPane").tabs();
        checkUncheckIPBlock();
        checkUncheckCacheLifetime();
		$("#maintenance_mode_").click(function() {
			checkUncheckIPBlock();
		});
        $("#enableCache").click(function() {
            checkUncheckCacheLifetime();
        });

		$("#checkMail").click(function () {

			var preloader = $(this).after(getPreloaderCodeForFieldId("checkMailLoader"));
			$("#checkMail").attr("disabled", "disabled");

			$.ajax({
				type:"POST",
				url:window.SJB_GlobalSiteUrl + "/system/miscellaneous/mail_check/",
				data:$("#settingsPane").serialize(),
				success:function (html) {
							$(preloader).next("span").remove();
							var result = JSON.parse(html);
							$(".message").remove();
							$(".error").remove();
							if (result["status"] == true) {
								$("#settingsPane").before('<p class="' + result["type"] + '"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your mail is set up correctly and functions fine.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
							}
							if (result["status"] == false) {
								$("#settingsPane").before('<p class="' + result["type"] + '"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your mail is not functioning. Please check Admin Panel and server settings.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
							}
							if (result["status"] == "fieldError") {
								var fieldCaption = {
									"smtp_host" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Host<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"smtp_port" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Port<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"smtp_sender" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Sender Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"smtp_username" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"smtp_password" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"sendmail_path" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Path to sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
									"system_email" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
								};
								var messages = result["message"];
								$.each(messages, function(key) {
									if (key == "EMPTY_VALUE") {
										$.each(messages[key], function(key, value) {
											$("#settingsPane").before('<p class="' + result["type"] + '">"' + fieldCaption[value] + '" <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
field is empty.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
										});
									}

									if (key == "NOT_VALID") {
										$.each(messages[key], function(key, value) {
											$("#settingsPane").before('<p class="' + result["type"] + '">"' + fieldCaption[value] + '" <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
field is not valid.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
										});
									}
								});
							}
							$("#checkMail").attr("disabled", "");
							$(window).scrollTop(0);
						}
			});
			return false;
		});

		$('[type="checkbox"][name="use_autocomplete_for_keywords"]').change(function(e) {
			var self = $(this);
			if (!self.is(':checked')) {
				$("#messageBox").dialog( 'destroy' ).html('<?php $_smarty_tpl->_capture_stack[0][] = array("disableAutocompleteMessage", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You are now going to disable autocomplete for keyword search. This will also remove all keywords collected for this function.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['disableAutocompleteMessage']);?>
');
				$("#messageBox").dialog({
					width: 500,
					height: 150,
					title: '',
					buttons: {
						'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ok<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
': function() {
							self.attr('checked', false);
							$(this).dialog('close');
						},
						'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
': function(){
							self.attr('checked', true);
							$(this).dialog('close');
						}
					}
				}).dialog('open');
			}
		});
	});

	$(".setting_button").click(function(){
		var butt = $(this);
		$(this).next(".setting_block").slideToggle("normal", function(){
            if ($(this).css("display") == "block") {
                butt.children(".setting_icon").html("[-]");
            } else {
                butt.children(".setting_icon").html("[+]");
            }
        });
	});

    function checkUncheckIPBlock() {
        if ($("#maintenance_mode_").attr("checked"))
            $("input[name='maintenance_mode_ip']").removeAttr("disabled");
        else
            $("input[name='maintenance_mode_ip']").attr("disabled", "disabled");
    }

    function checkUncheckCacheLifetime() {
        if ($("#enableCache").attr("checked")) {
            $("input[name='cacheHours']").removeAttr("disabled");
            $("input[name='cacheMinutes']").removeAttr("disabled");
        }
        else {
            $("input[name='cacheHours']").attr("disabled", "disabled");
            $("input[name='cacheMinutes']").attr("disabled", "disabled");
        }
    }

    function applySettings(id) {
        var div_id = $(id).parents('.ui-tabs-panel').attr('id');
        div_id = '#' + div_id;
        $('#page').attr('value', div_id);
        $('#action').attr('value', 'apply_settings');
    }

    $(function() {
        if ($('#email_scheduling').attr('checked')) {
            $('#number_emails').attr('disabled', '');
        } else {
            $('#number_emails').attr('disabled', 'disabled');
        }
    });

    $('#email_scheduling').click(function(){
        var checked = $('#email_scheduling').attr('checked');
        if (checked) {
            $('#number_emails').attr('disabled', '');
        } else {
            $('#number_emails').attr('disabled', 'disabled');
        }
    });

    var page = '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
';
    if (page) {
        $("#settingsPane ul li").each(function(){
            if ($('a', this).attr('href') == page) {
                var cl = $(this).attr('class') + ' ui-tabs-selected';
                $(this).attr('class', cl);
            } else {
                $(this).attr('class', 'ui-tabs-unselect');
            }
        });
    }
</script>

<?php }} ?>
