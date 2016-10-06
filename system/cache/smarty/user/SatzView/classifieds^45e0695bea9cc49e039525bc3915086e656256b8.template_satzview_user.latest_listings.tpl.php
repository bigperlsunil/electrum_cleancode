<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:11
         compiled from "template_satzview_user:/home/electrum/public_html/templates/SatzView/classifieds/latest_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198744426357ee1fffc0b5b5-02138648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e0695bea9cc49e039525bc3915086e656256b8' => 
    array (
      0 => 'template_satzview_user:/home/electrum/public_html/templates/SatzView/classifieds/latest_listings.tpl',
      1 => 1387796226,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '198744426357ee1fffc0b5b5-02138648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listings' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
    'number_of_cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fffc4db13_97427884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fffc4db13_97427884')) {function content_57ee1fffc4db13_97427884($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
		<div class="featuredListings">
			<div class="fl-logo">
				<?php if ($_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url']) {?>
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
				<?php } else { ?>
					<span class="text-center">&nbsp;</span>
				<?php }?>
			</div>
			<div class="fl-listing">
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html"><span class="longtext-30"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
				<br />
				<span class="listing-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</span>
				<br />
				<span class="listing-location"><?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['listing']->value['Location'],'format'=>"short"),$_smarty_tpl);?>
</span>
			</div>
			<div class="clr"></div>
		</div>
		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration'] % $_smarty_tpl->tpl_vars['number_of_cols']->value)) {?><div class="clr"><br/></div><?php }?>
	<?php } ?>
<?php } else { ?>
	<div class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no listings with requested parameters in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php }?><?php }} ?>
