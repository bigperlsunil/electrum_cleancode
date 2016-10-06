<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 18:02:32
         compiled from "template_satzview_user:templates/_system/miscellaneous/captchaHandle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59456312257ee5b60ae6e02-37601220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73514155a6a74e9b524987a61140e6474369c21' => 
    array (
      0 => 'template_satzview_user:templates/_system/miscellaneous/captchaHandle.tpl',
      1 => 1389847052,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '59456312257ee5b60ae6e02-37601220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayMode' => 0,
    'METADATA' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee5b60b104e0_92504685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee5b60b104e0_92504685')) {function content_57ee5b60b104e0_92504685($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['displayMode']->value=='fieldset') {?>
	<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['captcha']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'captcha'),$_smarty_tpl);?>
</div>
<?php } else { ?>
	<label><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['captcha']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['captcha']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'captcha'),$_smarty_tpl);?>
</label>
<?php }?>
<?php }} ?>
