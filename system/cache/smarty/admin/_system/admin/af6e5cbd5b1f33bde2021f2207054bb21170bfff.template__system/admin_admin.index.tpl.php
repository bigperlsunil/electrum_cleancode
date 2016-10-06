<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:03:39
         compiled from "template__system/admin_admin:index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153468140657e4d5924b73c6-54379417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af6e5cbd5b1f33bde2021f2207054bb21170bfff' => 
    array (
      0 => 'template__system/admin_admin:index.tpl',
      1 => 1474619381,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '153468140657e4d5924b73c6-54379417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4d5928a9107_56150255',
  'variables' => 
  array (
    'TITLE' => 0,
    'GLOBALS' => 0,
    'ADMIN_BREADCRUMBS' => 0,
    'MAIN_CONTENT' => 0,
    'isDemo' => 0,
    'isTrial' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4d5928a9107_56150255')) {function content_57e4d5928a9107_56150255($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Electrum Jobs<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Panel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['TITLE']->value!='') {?> :: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?></title>

	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design.css"),$_smarty_tpl);?>
" />
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']) {?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/themes/green/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"jquery-ui-1.8.custom.css"),$_smarty_tpl);?>
" />
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/css/jquery-ui.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.bgiframe.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/floatnumbers_functions.js"></script>
	<?php $_smarty_tpl->_capture_stack[0][] = array("displayProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <script language="JavaScript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
		window.SJB_AdminSiteUrl  = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
';
		window.SJB_UserSiteUrl   = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
';

		currentSjbVersion = {
			major: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
",
			minor: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
",
			build: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
"
		};

		$(document).ready(function() {
			// create special service block on page, if not exists
			var n = $("#updateInfoBlockDashboard").length;
			if (n == 0) {
				$("body").append("<div id=\"updateInfoBlockDashboard\" style=\"display:none;\"></div>");
			}

			// check for availabled SJB updates
			$.getJSON(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", function(data) {
				$('#updateProgress').hide();
				if (data.updateStatus == 'available' && !data.closed_by_user) {
					$("#updateInfoBlock").show("slide", { direction: "up"}, 500);
				}

				switch (data.updateStatus) {
					case 'available':
						var updateVersion = data.availableVersion.major + "." + data.availableVersion.minor + " build " + data.availableVersion.build;
						$("#updateInfoBlockDashboard").html(updateVersion);
						$("#updateButtonBlockDashboard").html(
							'<form style="text-align: center;" name="update_to_version_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/update-to-new-version/">' +
								'<input type="submit" name="go_to_update_page" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update to version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 ' + updateVersion + '" />' +
							'</form>'
						);
						break;

					case 'deprecated':
						$('#updateDeprecated').show();
						break;

					case 'none':
						$('#updateNone').show();
						break;

					default:
						$('#updateError').show();
						break;
				}
			});

			$("#closeUpdateInfoBlock").click(function() {
				$("#updateInfoBlock").hide("slide", { direction: "up"}, 500);
				$.post(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", { action: "mark_as_closed"});
			});
		});

		$.extend($.ui.dialog.prototype.options, {
			modal: true
		});

		function popUpWindow(url, widthWin, heightWin, title, iframe, callbackFunction) {
			$("#messageBox").dialog('destroy').html('<?php echo strtr(Smarty::$_smarty_vars['capture']['displayProgressBar'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			$("#messageBox").dialog({
				width: widthWin,
				height: heightWin,
				modal: true,
				title: title,
				close: function(event, ui) {
					if (callbackFunction) {
						callbackFunction();
					}
				}
			}).dialog('open');
			if (iframe) {
				$("#messageBox").html('<iframe border="0" runat="server" width="100%" height="100%" frameborder="0" src="'+url+'"></iframe>');
			} else {
				$.get(url, function(data) {
					$("#messageBox").html(data);
				});
			}
			return false;
		}

		function popUpMessageWindow(widthWin, heightWin, title, message) {
			$("#messageBox").dialog("destroy" ).html(message);
			$("#messageBox").dialog({
				width: widthWin,
				height: heightWin,
				title: title
			}).dialog("open");
			return false;
		}
	</script>
</head><body>
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="structure"  height="100%">
		<tr>
			<td id="left" valign="top" height="100%">
				<div id="leftHeader" style="text-align:right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
" id="logoLink"></a>
                   
				</div>
				<div class="clr"><br/></div>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['subAdminSID']>0) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"show_subadmin_menu"),$_smarty_tpl);?>

				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"show_left_menu"),$_smarty_tpl);?>

				<div class="clr"><br/></div>
			</td>
			<td valign="top" height="100%">
				
				<div id="messageBox"></div>

				<div id="topGray">
					
					<div id="breadCrumbs">
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!=="/") {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187;<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['ADMIN_BREADCRUMBS']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div id="topRight">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Welcome back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
, <?php echo $_SESSION['username'];?>
<br/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/logout/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</div>
					
				</div>
				
				<div class="InContent">
					<div style="margin: 0 215px 0 0">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

					</div>
					<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

					<div class="clr"><br/></div>
				</div>
			
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div id="footer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copyright<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 &copy;  <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Powered by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="http://www.electrumjobs.com/">Electrum Jobs</a> 
				</div>
			</td>
		</tr>
	</table>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"profiler"),$_smarty_tpl);?>

	<script>
		
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', '<?php if ($_smarty_tpl->tpl_vars['isDemo']->value||$_smarty_tpl->tpl_vars['isTrial']->value) {?>UA--1<?php } else { ?>UA-<?php }?>', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html><?php }} ?>
