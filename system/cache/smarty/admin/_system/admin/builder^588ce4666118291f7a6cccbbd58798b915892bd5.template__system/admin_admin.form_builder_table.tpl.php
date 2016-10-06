<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:28:13
         compiled from "template__system/admin_admin:form_builder_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194197020857e4eea55e5a60-86945388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588ce4666118291f7a6cccbbd58798b915892bd5' => 
    array (
      0 => 'template__system/admin_admin:form_builder_table.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '194197020857e4eea55e5a60-86945388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingTypesInfo' => 0,
    'listingTypeInfo' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4eea596c7b9_55749958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4eea596c7b9_55749958')) {function content_57e4eea596c7b9_55749958($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["listingTypeInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["listingTypeInfo"]->key => $_smarty_tpl->tpl_vars["listingTypeInfo"]->value) {
$_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["listingTypeSID"] = new Smarty_variable($_smarty_tpl->tpl_vars['listingTypeInfo']->value['sid'], null, 0);?>
	<div class="listing-type-form">
		<table border="1">
			<colgroup span="2">
				<col width="70%"/>
				<col width="10%"/>
			</colgroup>
			<thead>
				<tr>
					<th colspan="3"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<span class="editbutton" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="search-<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
"
							  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/builder/search-form/<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					</td>
				</tr>
				<tr>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<span class="editbutton" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Display<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="display-<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
"
							  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/builder/display-listing/<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php } ?>


<script type="text/javascript">
	$("document").ready(function(){
		$(".editbutton").each(function(){
			var curElem = $(this);
			curElem.click(function() {
				var elemHref = curElem.attr("href");
				var elemID = curElem.attr("id").replace("-", "_");
				window.open (elemHref,elemID,"status=0,toolbar=0,scrollbars=1,resizable=1,width=1200,height=800");
			});
		});
	});
</script><?php }} ?>
