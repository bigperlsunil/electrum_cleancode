<?php /* Smarty version Smarty-3.1.19, created on 2016-10-02 01:54:51
         compiled from "template_satzview_user:blank.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173486994957f01b93ad8732-94889584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688a4ac3dc806740cb60ff97961f82862a5b2ef2' => 
    array (
      0 => 'template_satzview_user:blank.tpl',
      1 => 1384429320,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '173486994957f01b93ad8732-94889584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'TITLE' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f01b93b0aa08_24494333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f01b93b0aa08_24494333')) {function content_57f01b93b0aa08_24494333($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	    <title><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
 <?php if ($_smarty_tpl->tpl_vars['TITLE']->value!='') {?> :: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design.css"),$_smarty_tpl);?>
" />
		<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/css/form.css" />
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']) {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
		<style type="text/css">body {background: white !important;}</style>
	</head>
	<body>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

	</body>
</html><?php }} ?>
