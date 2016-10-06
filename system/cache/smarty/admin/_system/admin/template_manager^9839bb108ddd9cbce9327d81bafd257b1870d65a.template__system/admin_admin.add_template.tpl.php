<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:06:33
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6632436657e4db8141ce24-75604836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9839bb108ddd9cbce9327d81bafd257b1870d65a' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/template_manager/add_template.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '6632436657e4db8141ce24-75604836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_error' => 0,
    'theError' => 0,
    'GLOBALS' => 0,
    'template_name' => 0,
    'module_list' => 0,
    'system_module_name' => 0,
    'module_name' => 0,
    'module_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4db814689c7_35309364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4db814689c7_35309364')) {function content_57e4db814689c7_35309364($_smarty_tpl) {?><div class="clr"></div>
<?php  $_smarty_tpl->tpl_vars['theError'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theError']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theError']->key => $_smarty_tpl->tpl_vars['theError']->value) {
$_smarty_tpl->tpl_vars['theError']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['theError']->value=='FILE_EXISTS') {?>
        <p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
such template already exists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['theError']->value=='MODULE_ERROR') {?>
        <p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
there is no such module in system<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['theError']->value=='NOT_VALID_FILENAME_FORMAT') {?>
        <p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
not valid filename format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    <?php }?>
<?php } ?>
<div class="clr"></div>
<form class="add-template" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/" method="post" onsubmit="disableSubmitButton('submitAddTemplate');">
    <fieldset  class="<?php if ($_smarty_tpl->tpl_vars['template_name']->value) {?>edit-template-fieldset<?php } else { ?>add-template-fieldset<?php }?>">
        <legend><?php if ($_smarty_tpl->tpl_vars['template_name']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add a New Template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></legend>
        <label for="templ_name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Template Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" name="templ_name" id="templ_name"/>
        <label for="templ_module"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Module Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
        <select name="templ_module" id="templ_module">
            <?php  $_smarty_tpl->tpl_vars["module_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["module_info"]->_loop = false;
 $_smarty_tpl->tpl_vars["system_module_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["module_info"]->key => $_smarty_tpl->tpl_vars["module_info"]->value) {
$_smarty_tpl->tpl_vars["module_info"]->_loop = true;
 $_smarty_tpl->tpl_vars["system_module_name"]->value = $_smarty_tpl->tpl_vars["module_info"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['system_module_name']->value==$_smarty_tpl->tpl_vars['module_name']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['system_module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['display_name'];?>
</option>
            <?php }
if (!$_smarty_tpl->tpl_vars["module_info"]->_loop) {
?>
            <option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No module is available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
            <?php } ?>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['template_name']->value) {?>
	        <input type="hidden" name="action" value="edit"/>
	        <input type="hidden" name="templ_module_or" value="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"/>
	        <input type="hidden" name="templ_name_or" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
"/>
            <input type="hidden" id="submit" name="submit" value="save_template">
            <input type="submit" id="apply_name" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton"/>
	        <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Changing Template name may affect the front-end pages work. Are you sure you want to rename/move this Template?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');" class="grayButton" />
        <?php } else { ?>
	        <input type="hidden" name="action" value="add"/>
			<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="add_template" class="grayButton" id="submitAddTemplate" />
        <?php }?>
    </fieldset>
</form>

<script>
	$('#apply_name').click(
		function(){
			$('#submit').attr('value', 'apply_template');
		}
	);
</script><?php }} ?>
