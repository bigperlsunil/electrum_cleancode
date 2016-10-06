<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 14:00:38
         compiled from "template_satzview_user:templates/_system/classifieds/rss2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119483214957ee22ae9d7767-55035385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5cec87a439d3a6f26185b07dfeaf3bbe4db7fab' => 
    array (
      0 => 'template_satzview_user:templates/_system/classifieds/rss2.tpl',
      1 => 1446020281,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '119483214957ee22ae9d7767-55035385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    'GLOBALS' => 0,
    'DESCRIPTION' => 0,
    'lastBuildDate' => 0,
    'listings' => 0,
    'listing' => 0,
    'METADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee22aea64c06_54080947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee22aea64c06_54080947')) {function content_57ee22aea64c06_54080947($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><?php echo '<?xml';?> version="1.0"<?php echo '?>';?>

<rss version="2.0">
	<channel>
		<title><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</title>
		<link><![CDATA[<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
]]></link>
		<description><![CDATA[<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
]]></description>
		<language><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
-us</language>
		<pubDate><?php echo $_smarty_tpl->tpl_vars['lastBuildDate']->value;?>
 GMT</pubDate>
		<lastBuildDate><?php echo $_smarty_tpl->tpl_vars['lastBuildDate']->value;?>
 GMT</lastBuildDate>
		<docs><![CDATA[<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri'];?>
]]></docs>
		<generator></generator>
		<managingEditor>editor@example.com</managingEditor>
		<webMaster>webmaster@example.com</webMaster>
		<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
			<item>
				<title><![CDATA[<?php echo SJB_HelperFunctions::clearNonPrintedCharacters($_smarty_tpl->tpl_vars['listing']->value['Title']);?>
]]></title>
				<link><![CDATA[<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo SJB_HelperFunctions::clearNonPrintedCharacters(htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#\$\s]/u","-")));?>
.html]]></link>
				<description>
					<![CDATA[<?php echo SJB_HelperFunctions::clearNonPrintedCharacters($_smarty_tpl->tpl_vars['listing']->value['Location']['City']);?>
, <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['Location']['State'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['Location']['State']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing']->value['Location']['State'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['Location']['State']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo SJB_HelperFunctions::clearNonPrintedCharacters($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName']);?>
<br/>
					<?php echo SJB_HelperFunctions::clearNonPrintedCharacters($_smarty_tpl->tpl_vars['listing']->value['JobDescription']);?>
]]>
				</description>
				<pubDate><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['listing']->value['activation_date'],'D, d M Y H:i:s');?>
 GMT</pubDate>
				<guid><![CDATA[<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo SJB_HelperFunctions::clearNonPrintedCharacters(htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#\$\s]/u","-")));?>
.html]]></guid>
			</item>
		<?php } ?>
	</channel>
</rss>
<?php }} ?>
