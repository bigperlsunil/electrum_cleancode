<?php /* Smarty version Smarty-3.1.19, created on 2016-10-02 06:52:24
         compiled from "template_satzview_user:templates/_system/polls/poll_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72896958757f06150edfa62-48947452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd7c9935e3e13d88b6b9fb27f40a96b720c1b82' => 
    array (
      0 => 'template_satzview_user:templates/_system/polls/poll_results.tpl',
      1 => 1343816952,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '72896958757f06150edfa62-48947452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'pollInfo' => 0,
    'result' => 0,
    'poll' => 0,
    'show_total_votes' => 0,
    'count_vote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f06151009b40_95907235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f06151009b40_95907235')) {function content_57f06151009b40_95907235($_smarty_tpl) {?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Poll Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php } ?>
<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pollInfo']->value['question'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
<table style="width:70%">
<tbody>
<?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value) {
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
	<tr>
		<td style="width:30%" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['poll']->value['value'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<td style="width:60%"><?php if ($_smarty_tpl->tpl_vars['poll']->value['vote']!=0) {?><div style="width:<?php echo $_smarty_tpl->tpl_vars['poll']->value['vote'];?>
%;  background-color: #<?php echo $_smarty_tpl->tpl_vars['poll']->value['color'];?>
; border: 1px solid #000;">&nbsp;</div><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['poll']->value['vote'];?>
%</td>
	</tr>
<?php } ?>
</tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['show_total_votes']->value) {?><br/><div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total votes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['count_vote']->value;?>
</div><?php }?>
<?php }} ?>
