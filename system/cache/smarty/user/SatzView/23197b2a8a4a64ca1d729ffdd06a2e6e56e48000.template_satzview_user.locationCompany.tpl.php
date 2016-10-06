<?php /* Smarty version Smarty-3.1.19, created on 2016-10-01 10:09:51
         compiled from "template_satzview_user:../field_types/search/locationCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193943770957ef3e17da4583-49282319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23197b2a8a4a64ca1d729ffdd06a2e6e56e48000' => 
    array (
      0 => 'template_satzview_user:../field_types/search/locationCompany.tpl',
      1 => 1378272714,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '193943770957ef3e17da4583-49282319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ef3e17db7649_74705366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ef3e17db7649_74705366')) {function content_57ef3e17db7649_74705366($_smarty_tpl) {?><fieldset>
<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
		<div class="bcName">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="bcField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'searchWithin'=>true,'template'=>"location.like.tpl"),$_smarty_tpl);?>
</div>
<?php } ?>
</fieldset>
<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 0);?> <?php }} ?>
