<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 17:04:04
         compiled from "template_satzview_user:templates/_system/classifieds/search_form_resumes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140689044357ee4dac9cc535-52262393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7dd534d0635e4716a12a2e7206d892e4fa11944' => 
    array (
      0 => 'template_satzview_user:templates/_system/classifieds/search_form_resumes.tpl',
      1 => 1402044416,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '140689044357ee4dac9cc535-52262393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_saved' => 0,
    'GLOBALS' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee4dacb5a5d5_02266691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee4dacb5a5d5_02266691')) {function content_57ee4dacb5a5d5_02266691($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['id_saved']->value) {?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Saved Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><?php } else { ?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><?php }?>
<?php if ($_smarty_tpl->tpl_vars['id_saved']->value) {?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/" method="get"  id="search_form">
		<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
		<input type="hidden" name="id_saved" value="<?php echo $_smarty_tpl->tpl_vars['id_saved']->value;?>
" />
<?php } else { ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-results-resumes/"  id="search_form">
		<input type="hidden" name="action" value="search" />
<?php }?>
	<input type="hidden" name="listing_type[equal]" value="Resume" />
	<div id="adMargin">
		<?php if ($_smarty_tpl->tpl_vars['id_saved']->value) {?>
			<fieldset>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'name','template'=>'string.tpl'),$_smarty_tpl);?>
</div>
			</fieldset>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("../builder/bf_searchform_fieldsholders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<fieldset>
			<div class="inputName">&nbsp;</div>
			<div class="inputField">
				<?php if ($_smarty_tpl->tpl_vars['id_saved']->value) {?>
					<input class="button" type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="search_button" />
				<?php } else { ?>
					<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="search_button" />
				<?php }?>
			</div>
		</fieldset>
	</div>
</form>
<div id="adSpace"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"static_content",'function'=>"show_static_content",'pageid'=>"SearchResumesAdSpace"),$_smarty_tpl);?>
</div>
<?php }} ?>
