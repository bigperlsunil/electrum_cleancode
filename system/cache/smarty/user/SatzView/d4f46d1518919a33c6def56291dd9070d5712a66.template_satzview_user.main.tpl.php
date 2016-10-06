<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:49:11
         compiled from "template_satzview_user:main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190411704057ee1fff801295-59289900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f46d1518919a33c6def56291dd9070d5712a66' => 
    array (
      0 => 'template_satzview_user:main.tpl',
      1 => 1475062273,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '190411704057ee1fff801295-59289900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'METADATA' => 0,
    'KEYWORDS' => 0,
    'DESCRIPTION' => 0,
    'GLOBALS' => 0,
    'TITLE' => 0,
    'HEAD' => 0,
    'highlight_templates' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fff93f6e6_77137886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fff93f6e6_77137886')) {function content_57ee1fff93f6e6_77137886($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['KEYWORDS']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	<meta name="description" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
<?php if ($_smarty_tpl->tpl_vars['TITLE']->value!='') {?>:&nbsp;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?></title>
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design.css"),$_smarty_tpl);?>
" />
	<link rel="alternate" type="application/rss+xml" title="RSS2.0" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/rss/" />
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']) {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='de') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-de.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='es') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-es.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='fr') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-fr.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='hi') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-hi.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='pl') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-pl.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='pt') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-pt.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='ru') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-ru.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='sr') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-sr.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='ro') {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-ro.css"),$_smarty_tpl);?>
" /><?php }?>
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/css/form.css" />
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery-ui.css"  />
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery.autocomplete.css"  />
	<link rel="Stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.autocomplete.pack.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.form.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"js/jquery.selectbox-0.2.min.js"),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"js/jquery.lavalamp.min.js"),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/tango/skin.css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/jquery.poshytip.min.js"></script>
	<!--[if IE 8]>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/pie-ie.js"></script>
		<script type="text/javascript">
			$(function() {
				if (window.PIE) {
					$('input, .qs-support .find-button-zoom, .middle-content, #quick-search, .qs-main, #top-menu, #top-menu #dropDown ul, .js-emp-menu, #main-menu li.back').each(function() {
						PIE.attach(this);
					});
				}
			});
		</script>
	<![endif]-->
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['HEAD']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value) {?>
		<script type="text/javascript">
			$(document).ready(function(){
				$("html").addClass("highlight-body");
			});
			$(function() {

				$("div.inner_div").bind("mouseenter", function(){
					var width	= $(this).parent().css('width');
					var height	= $(this).parent().css('height');
					var offset	= $(this).parent().offset();

					// inner_block css-class z-index = 11
					// set highlight z-index = 10
					$("#highlighterBlock").css({
						'display':'block',
						'position':'absolute',
						'top':offset.top,
						'left':offset.left,
						'width':width,
						'height':height,
						'z-index': 10
					});
				});
				$("div.inner_div").bind("mouseleave", function(){
					$("#highlighterBlock").css({
						'display':'none'
					});
				});

				// lets catch clicks on 'edit template' links
				$("a.editTemplateLink").click(function() {
					//alert( $(this).attr('title'));
					var templateName	= $(this).attr('title');
					var link			= $(this).attr('href');
					editTemplateMenu(templateName, link);
					return false;
				});

				$(".editTemplateMenu").live('click', function() {
					var url = $(this).attr('href');
					popUpWindow(url, 700, 'Edit Template', true);
					return false;
				});

				function editTemplateMenu(templateName, url) {
					var title = 'Template';
					$("#messageBox").dialog( 'destroy' ).html('<b>Template Name:</b><br />' + templateName + '<br /><br /><a class="editTemplateMenu" style="font-weight: bold; color: #00f;" href="'+url+'" target="_blank">Edit this template</a>');
					$("#messageBox").dialog({
						width: 300,
						height: 150,
						modal: true,
						title: title
					}).dialog( 'open' );

					return false;
				}

			});

		</script>
	<?php }?>

	<style type="text/css">
		.hint {
			color: #989898;
		}
	</style>
	<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#mycarousel').jcarousel({
					// Configuration goes here
					animation: 1500,
					auto: 1,
					wrap: 'circular',
					start: 7,
					scroll: 1,
					initCallback: function(jc, state) {
						if (state == 'init') {
							jc.startAutoOrig = jc.startAuto;
							jc.startAuto = function() {
								if (!jc.paused) {
									jc.startAutoOrig();
								}
							}
							jc.pause = function() {
								jc.paused = true;
								jc.stopAuto();
							};
							jc.play = function() {
								jc.paused = false;
								jc.startAuto();
							};
							$('.jcarousel-skin-tango').mouseover(function() {
								jc.pause();
							});
							$('.jcarousel-skin-tango').mouseout(function() {
								jc.play();
							});
						}
						jc.play();
					}
				});
			});

			$(function() {
				/* Mailchimp Name Input Hint */
				if ($("#mch_name").val() == '') {
					$("#mch_name").val('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					$("#mch_name").addClass('hint');
				}
				$("#mch_name").focus(function(){
					if ($("#mch_name").val()=='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')
						$("#mch_name").val('');
				});

				$("#mch_name").blur(function(){
					$("#mch_name").removeClass('hint');
					if ($("#mch_name").val()=='') {
						$("#mch_name").val('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
						$("#mch_name").addClass('hint');
					}
				});

				$("#mailchimp-form").submit(function(){
					if ($("#mch_name").val()=='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')
						$("#mch_name").val('');
				});
				/* Mailchimp Email Input Hint */
				if ($("#mch_email").val() == '') {
					$("#mch_email").val('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					$("#mch_email").addClass('hint');
				}
				$("#mch_email").focus(function(){
					if ($("#mch_email").val()=='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')
						$("#mch_email").val('');
				});

				$("#mch_email").blur(function(){
					$("#mch_email").removeClass('hint');
					if ($("#mch_email").val()=='') {
						$("#mch_email").val('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
						$("#mch_email").addClass('hint');
					}
				});

				$("#mailchimp-form").submit(function(){
					if ($("#mch_email").val()=='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')
						$("#mch_email").val('');
				});
			});
	</script>
	<script type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
		$.ui.dialog.prototype.options.bgiframe = true;
		function popUpWindow(url, widthWin, title, parentReload, userLoggedIn, callbackFunction) {
			reloadPage = false;
			$("#loading").show();
			$("#messageBox").dialog( 'destroy' ).html('<?php $_smarty_tpl->_capture_stack[0][] = array("displayJobProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['displayJobProgressBar']);?>
');
			$("#messageBox").dialog({
				autoOpen: false,
				width: widthWin,
				height: 'auto',
				modal: true,
				title: title,
				close: function(event, ui) {
					if (callbackFunction) {
						callbackFunction();
					}
					if (parentReload == true && !userLoggedIn && reloadPage == true) {
						parent.document.location.reload();
					}
				}
			}).hide();

			$.get(url, function(data){
				$("#messageBox").html(data).dialog("open").show();
				$("#loading").hide();
			});

			return false;
		}
	</script>

</head>
<body>
	<div id="loading"></div>
	<div id="messageBox"></div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"cookie_preferences"),$_smarty_tpl);?>

	<div class="header-page">
		<?php echo $_smarty_tpl->getSubTemplate ("../menu/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<div id="main-content-page-top">
		<div class="content-align">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"top_menu"),$_smarty_tpl);?>

			<div id="quick-search">
				<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

			</div>
			<div id="featured-companies">
				<h2 id="fc-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Featured Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"featured_profiles",'number_of_cols'=>"10",'items_count'=>"10"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
	<div id="main-content-page-middle">
		<div class="content-align">
			<div id="featured-jobs-block">
				<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Featured Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"featured_listings",'items_count'=>"3",'listing_type'=>"Job"),$_smarty_tpl);?>

			</div>

			<div id="latest-jobs-block">
				<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Latest Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"latest_listings",'items_count'=>"3",'listing_type'=>"Job"),$_smarty_tpl);?>

			</div>
			<div class="clr"></div>
		</div>
	</div>
	<div id="main-content-page-bottom">
		<div class="content-align">
			<div class="middle-content">
				<div class="jobs-by-column">
					<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'browseUrl'=>"/browse-by-category/",'browse_template'=>"browse_by_category.tpl",'recordsNumToDisplay'=>"14"),$_smarty_tpl);?>

					<div class="clr"><br/></div>
				</div>
				<div class="jobs-by-column">
					<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'browseUrl'=>"/browse-by-city/",'browse_template'=>"browse_by_city.tpl",'recordsNumToDisplay'=>"14"),$_smarty_tpl);?>

					<div class="clr"><br/></div>
				</div>
				<div class="news-blog-column">
					<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['show_news_on_main_page']) {?>
						<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
News<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"news",'function'=>"show_news"),$_smarty_tpl);?>

						<div class="clr"><br/></div>
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['WordPressBridgePlugin'])&&$_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['WordPressBridgePlugin']['active']&&$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['display_blog_on_homepage']) {?>
						<div id="blog-block">
							<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blog Posts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"blog_page"),$_smarty_tpl);?>

						</div>
					<?php }?>
				</div>
				<div class="clr"><br/></div>
				<hr size="1"/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"mailchimp"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['show_polls_on_main_page']) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"polls",'function'=>"polls"),$_smarty_tpl);?>

				<?php }?>
				<div class="clr"><br/></div>
			</div>
		</div>
	</div>
	<div id="grayBgBanner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"banners",'function'=>"show_banners",'group'=>"Bottom Banners"),$_smarty_tpl);?>
</div>

	<?php echo $_smarty_tpl->getSubTemplate ("../menu/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"profiler"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value) {?>
		<div id="highlighterBlock"></div>
	<?php }?>
</body>
</html><?php }} ?>
