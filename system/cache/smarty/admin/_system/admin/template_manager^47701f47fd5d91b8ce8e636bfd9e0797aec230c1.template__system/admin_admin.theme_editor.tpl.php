<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:06:36
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139125534257e4db84cb2364-11276833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47701f47fd5d91b8ce8e636bfd9e0797aec230c1' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/theme_editor.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '139125534257e4db84cb2364-11276833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'ERROR' => 0,
    'theme_list' => 0,
    'theme_name' => 0,
    'counter' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4db84d75eb1_94908969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4db84d75eb1_94908969')) {function content_57e4db84d75eb1_94908969($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script type="text/javascript">
	function not(){
		document.img1.src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png"
	}
	function imgOn(imgName) {
		if (document.images) {
			document.img1.src = imgName;
	}}
</script>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/wand32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=="ALREADY_EXISTS") {?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme already exists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['ERROR']->value=="EMPTY_NAME") {?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter a name of the New Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['ERROR']->value=="ACCESS_DENIED") {?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You don't have permissions for it. This is a Demo version of the software.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
	
	<form onsubmit="disableSubmitButton('submitCreate');">
		<fieldset>
			<legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</legend>
			<input type="hidden" name="action" value="copy_theme" />
			<table>
				<tr>
					<td>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
New Theme Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
						<input type="text" name="new_theme" value="" />
					</td>
					<td>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copy from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
						<select name="copy_from_theme">
							<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value) {
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['theme_name']->value) {?> SELECTED<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select>
					</td>
					<td valign="bottom">
						<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton" id="submitCreate" />
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div class="clr"><br/></div>
	
	<div id="themes">
	<table>
		<thead>
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Current Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value) {
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
				<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
				<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['counter']->value)) {?>oddrow<?php } else { ?>evenrow<?php }?>" onmouseover="document.getElementById('pic').src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
.png'" onmouseout="document.getElementById('pic').src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png'">
					<td><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['theme']->value!=$_smarty_tpl->tpl_vars['theme_name']->value) {?>
							<a href="?theme=<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
" class="grayButton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Make current<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						<?php } else { ?>
							<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Current<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
						<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['theme']->value!=$_smarty_tpl->tpl_vars['theme_name']->value) {?><a href="?action=delete_theme&theme_name=<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this Theme?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div id="themesPic"><img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png" id="pic" /></div><?php }} ?>
