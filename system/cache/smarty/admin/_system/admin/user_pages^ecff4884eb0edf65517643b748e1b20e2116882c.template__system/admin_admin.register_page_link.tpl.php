<?php /* Smarty version Smarty-3.1.19, created on 2016-09-27 19:32:32
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/user_pages/register_page_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121456698457ea7bf81606d5-53267584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecff4884eb0edf65517643b748e1b20e2116882c' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/user_pages/register_page_link.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '121456698457ea7bf81606d5-53267584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'pageInfo' => 0,
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ea7bf8193895_17741698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea7bf8193895_17741698')) {function content_57ea7bf8193895_17741698($_smarty_tpl) {?><p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-pages/?module=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['module'];?>
&amp;function=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['function'];?>
&amp;access_type=user&amp;parameters=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['parameters'];?>
&amp;action=new_page">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create a page for this <?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</a></p><?php }} ?>
