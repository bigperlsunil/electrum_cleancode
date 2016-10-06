<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 21:29:45
         compiled from "template_satzview_user:templates/_system/guest_alerts/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144533076757ee8bf168f257-85379894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3b7b020dd06d8ce8fd6eaa8d803f65d55fa32a' => 
    array (
      0 => 'template_satzview_user:templates/_system/guest_alerts/create.tpl',
      1 => 1359362436,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '144533076757ee8bf168f257-85379894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'searchId' => 0,
    'form_fields' => 0,
    'formField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee8bf1725e43_23920378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee8bf1725e43_23920378')) {function content_57ee8bf1725e43_23920378($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.form.js"></script>


<script type="text/javascript">
    function saveSearchSubmit() {
        var saveSearchForm = $("#saveSearchForm");
        var options = {
            target: "#messageBox",
            url:  saveSearchForm.attr("action")
        };
        saveSearchForm.ajaxSubmit(options);
        return false;
    }
</script>


<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("../users/field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/guest-alerts/create/" method="post" id="saveSearchForm" onsubmit="return saveSearchSubmit()">
    <input type="hidden" name="searchId" value="<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
" />
    <input type="hidden" name="action" value="save" />
	<?php  $_smarty_tpl->tpl_vars["formField"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["formField"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["formField"]->key => $_smarty_tpl->tpl_vars["formField"]->value) {
$_smarty_tpl->tpl_vars["formField"]->_loop = true;
?>
		<fieldset>
			<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['formField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['formField']->value['id']),$_smarty_tpl);?>
</div>
		</fieldset>
	<?php } ?>
	<fieldset>
		<div class="inputName">&nbsp;</div>
		<div class="inputButton"><input type="submit" name="save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" /></div>
	</fieldset>
</form><?php }} ?>
