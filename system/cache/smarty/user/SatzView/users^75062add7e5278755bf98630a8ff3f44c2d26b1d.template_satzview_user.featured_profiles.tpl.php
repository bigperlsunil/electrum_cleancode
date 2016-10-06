<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:11
         compiled from "template_satzview_user:/home/electrum/public_html/templates/SatzView/users/featured_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144884869657ee1fff9987d0-85266932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75062add7e5278755bf98630a8ff3f44c2d26b1d' => 
    array (
      0 => 'template_satzview_user:/home/electrum/public_html/templates/SatzView/users/featured_profiles.tpl',
      1 => 1393405710,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '144884869657ee1fff9987d0-85266932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profiles' => 0,
    'profile' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fff9ebb79_21231619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fff9ebb79_21231619')) {function content_57ee1fff9ebb79_21231619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
?><ul id="mycarousel" class="jcarousel-skin-tango">
	<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url']) {?>
			<?php if (strpos($_smarty_tpl->tpl_vars['profile']->value['CompanyName'],'-')!==false) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-results-jobs/?action=search&amp;username[equal]=<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['WebSite'];?>
" border="0" /></a></li>
			<?php } else { ?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['profile']->value['CompanyName'],"/[\s\/\\\\]/","-"));?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url'];?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['WebSite'];?>
"/></a></li>
			<?php }?>
		<?php }?>
	<?php } ?>
</ul><?php }} ?>
