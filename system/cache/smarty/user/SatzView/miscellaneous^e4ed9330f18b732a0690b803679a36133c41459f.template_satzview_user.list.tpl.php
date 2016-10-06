<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:00
         compiled from "template_satzview_user:templates/_system/field_types/input/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153576961157ee1ff44c3598-62682549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ed9330f18b732a0690b803679a36133c41459f' => 
    array (
      0 => 'template_satzview_user:templates/_system/field_types/input/list.tpl',
      1 => 1381743792,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '153576961157ee1ff44c3598-62682549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort_by_alphabet' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'parentID' => 0,
    'list_values' => 0,
    'enabled' => 0,
    'caption' => 0,
    'list_value' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1ff4566654_49864719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1ff4566654_49864719')) {function content_57ee1ff4566654_49864719($_smarty_tpl) {?><select class="searchList <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value) {?>sortable-select<?php }?> <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&!$_smarty_tpl->tpl_vars['list_values']->value&&!$_smarty_tpl->tpl_vars['enabled']->value) {?> disabled="disabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&$_smarty_tpl->tpl_vars['id']->value=="Country") {?> onchange = "get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(this.value)" <?php }?> >
	<?php if ($_smarty_tpl->tpl_vars['id']->value!=='email_frequency') {?><option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option><?php }?>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>
