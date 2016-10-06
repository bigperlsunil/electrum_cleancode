<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:11
         compiled from "template_satzview_user:../field_types/search/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24273263757ee1fff403dc4-15365779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90907edfc00501732c0fb69c01bebe4f0ceb4a03' => 
    array (
      0 => 'template_satzview_user:../field_types/search/tree.tpl',
      1 => 1388055122,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '24273263757ee1fff403dc4-15365779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'sid' => 0,
    'METADATA' => 0,
    'caption' => 0,
    'GLOBALS' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fff472822_24036468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fff472822_24036468')) {function content_57ee1fff472822_24036468($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/tree.js"></script>

<?php $_smarty_tpl->_capture_stack[0][] = array("trLess", null, null); ob_start(); ?>&#171;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
less<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean());} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trMore", null, null); ob_start(); ?>&#187;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
more<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean());} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="tree-input-field">
	<div class="left">
		<a href="#" id="tree-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-options" style="display:inline-block;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click to select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<div id="tree-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-values" class="tree-values"></div>
		<div id="tree-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-values-more" style="display: none;"></div>
		<div id="tree-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-values-more-button" class="more-button" onclick="buttonMoreTreeValuesClick('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo Smarty::$_smarty_vars['capture']['trLess'];?>
', '<?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
');" style="display: none; cursor: pointer;"><?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
</div>
	</div>
	<div class="clr"></div>
</div>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[tree]" id="tree-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-selected" value="" />


<script language='JavaScript' type='text/javascript'>
	var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values = [];

	$("#tree-" + "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" + "-options").click(function(event) {
		event.preventDefault();
		var checked     = $("#tree-" +"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" + "-selected").val();
		var name        = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
		var id          = "<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
";
		var caption     = "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
";
		
		var url = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/tree-options/?check=" + checked + "&name=" + name + "&id=" + id;
		popUpWindow(url, 700, caption, NaN, NaN, popUpClose<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);
	});

	function getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
()
	{
		return new Object({
			"arrayName"      : "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values",
			"fieldId"        : "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
			"trMore"         : "<?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
",
			"availableCount" : 0,
			"availableTitle" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			"default"        : ""
		});
	}

	function popUpClose<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
()
	{
		treePopUpClose(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values, getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
());
	}

	<?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
		addElements(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values, [<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
], getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
());
	<?php }?>
</script><?php }} ?>
