<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:48:52
         compiled from "template_satzview_user:../field_types/input/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210608440457ee1fecb5bc01-00242920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '246a178526fb3f2c9c9cda44e1ae0f55407d5d48' => 
    array (
      0 => 'template_satzview_user:../field_types/input/location.tpl',
      1 => 1405073428,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '210608440457ee1fecb5bc01-00242920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'parentID' => 0,
    'fixInstructionsForComplexField' => 0,
    'GLOBALS' => 0,
    'LocationValues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fecc8d0a3_09086873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fecc8d0a3_09086873')) {function content_57ee1fecc8d0a3_09086873($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["LocationValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<fieldset <?php if ($_smarty_tpl->tpl_vars['form_field']->value['hidden']) {?>style="display:none;"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
">
		<?php $_smarty_tpl->tpl_vars["fixInstructionsForComplexField"] = new Smarty_variable(true, null, 0);?>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></div>
		<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['parentID']->value),$_smarty_tpl);?>
</div>
		<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']&&$_smarty_tpl->tpl_vars['fixInstructionsForComplexField']->value) {?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("../classifieds/instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
		<?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('tree','multilist'))) {?>
			<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
		<?php }?>
	</fieldset>
<?php } ?>
<script language='JavaScript' type='text/javascript'>
function get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(countrySID) {
	<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State') {?>
			$.get("<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/get-states/", { caption: "<?php echo strtr($_smarty_tpl->tpl_vars['form_field']->value['caption'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", country_sid: countrySID, state_sid: "<?php echo strtr($_smarty_tpl->tpl_vars['LocationValues']->value['State'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", parentID: "<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
", display_as: "<?php echo $_smarty_tpl->tpl_vars['form_field']->value['display_as'];?>
" },
				  function(data){
						$("#<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_State .inputField").html(data);
				 });
		<?php }?>
	<?php } ?>
}

get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States("<?php echo strtr($_smarty_tpl->tpl_vars['LocationValues']->value['Country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
</script>
<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"];?> <?php }} ?>
