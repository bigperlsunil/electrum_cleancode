<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 17:02:23
         compiled from "template_satzview_user:templates/_system/classifieds/tree_display_as_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157040120657ee4d47d9bb85-89415373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9736143dc629df8d6c86b7787bcf73ed51bef2e4' => 
    array (
      0 => 'template_satzview_user:templates/_system/classifieds/tree_display_as_tree.tpl',
      1 => 1385727332,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '157040120657ee4d47d9bb85-89415373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fieldId' => 0,
    'treeValues' => 0,
    'checked' => 0,
    'choiceLimit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee4d47df7a41_96083022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee4d47df7a41_96083022')) {function content_57ee4d47df7a41_96083022($_smarty_tpl) {?><div id="tree-available"></div>
<div id="tree-deselect-all" onclick="treeDeselectAll();">
	<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deselect all<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
</div>
<div class="clr"></div>

<div id="tree-block"></div>
<div id="tree-buttons">
	<input type="button" onClick="saveSelected = true; $('#messageBox').dialog('close');"  value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	<input type="button" onClick="$('#messageBox').dialog('close');"  value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
</div>

<script language='JavaScript' type='text/javascript'>
	saveSelected = false;
	$(document).ready(function() {
		var treeHtml = getTreeHtml("<?php echo $_smarty_tpl->tpl_vars['fieldId']->value;?>
", new Object({ <?php echo $_smarty_tpl->tpl_vars['treeValues']->value;?>
 }), [<?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
], 0, 0);
		$("#tree-block").html(treeHtml);
		changeAvailableCount("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
", <?php echo $_smarty_tpl->tpl_vars['choiceLimit']->value;?>
);
	});
</script>
<?php }} ?>
