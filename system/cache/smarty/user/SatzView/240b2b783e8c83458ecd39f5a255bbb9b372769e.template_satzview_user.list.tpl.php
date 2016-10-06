<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:11
         compiled from "template_satzview_user:../field_types/search/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120766770457ee1fff36a648-10260466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240b2b783e8c83458ecd39f5a255bbb9b372769e' => 
    array (
      0 => 'template_satzview_user:../field_types/search/list.tpl',
      1 => 1381743792,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '120766770457ee1fff36a648-10260466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'locationName' => 0,
    'sort_by_alphabet' => 0,
    'list_values' => 0,
    'enabled' => 0,
    'caption' => 0,
    'list_value' => 0,
    'value' => 0,
    'value_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fff3d9234_84618535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fff3d9234_84618535')) {function content_57ee1fff3d9234_84618535($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['parentID']->value) {?>
	<?php $_smarty_tpl->tpl_vars["locationName"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['parentID']->value,''), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["locationName"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['locationName']->value,'_',''), null, 0);?>
<?php }?>
<select name='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[multi_like][]' class="searchList <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value) {?>sortable-select<?php }?>" <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&!$_smarty_tpl->tpl_vars['list_values']->value&&!$_smarty_tpl->tpl_vars['enabled']->value) {?> disabled="disabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&$_smarty_tpl->tpl_vars['locationName']->value=="Country") {?> onchange = "get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(this.value)" <?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['id']->value!='email_frequency') {?>
		<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php  $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['multi_like']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->key => $_smarty_tpl->tpl_vars['value_id']->value) {
$_smarty_tpl->tpl_vars['value_id']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value_id']->value) {?>selected="selected"<?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['multi_like_and']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->key => $_smarty_tpl->tpl_vars['value_id']->value) {
$_smarty_tpl->tpl_vars['value_id']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value_id']->value) {?>selected="selected"<?php }?><?php } ?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>
