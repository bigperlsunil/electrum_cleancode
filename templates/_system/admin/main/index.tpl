<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Electrum Jobs[[Admin Panel]] {if $TITLE ne ""} :: [[{$TITLE}]] {/if}</title>

	<link rel="StyleSheet" type="text/css" href="{image src="design.css"}" />
	{if $GLOBALS.current_language_data.rightToLeft}<link rel="StyleSheet" type="text/css" href="{image src="designRight.css"}" />{/if}
    <link type="text/css" href="{$GLOBALS.user_site_url}/system/ext/jquery/themes/green/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{image src="jquery-ui-1.8.custom.css"}" />
	<link type="text/css" href="{$GLOBALS.user_site_url}/system/ext/jquery/css/jquery-ui.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.user_site_url}/system/ext/jquery/css/jquery.multiselect.css" />
	<script language="JavaScript" type="text/javascript" src="{common_js}/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/jquery.bgiframe.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/floatnumbers_functions.js"></script>
	{capture name="displayProgressBar"}<img style="vertical-align: middle;" src="{$GLOBALS.user_site_url}/system/ext/jquery/progbar.gif" alt="[[Please wait ...]]" /> [[Please wait ...]]{/capture}
    <script language="JavaScript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '{$GLOBALS.site_url}';
		window.SJB_AdminSiteUrl  = '{$GLOBALS.admin_site_url}';
		window.SJB_UserSiteUrl   = '{$GLOBALS.user_site_url}';

		currentSjbVersion = {
			major: "{$GLOBALS.version.major}",
			minor: "{$GLOBALS.version.minor}",
			build: "{$GLOBALS.version.build}"
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
							'<form style="text-align: center;" name="update_to_version_form" method="post" action="{$GLOBALS.site_url}/update-to-new-version/">' +
								'<input type="submit" name="go_to_update_page" value="[[Update to version]] ' + updateVersion + '" />' +
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
			$("#messageBox").dialog('destroy').html('{$smarty.capture.displayProgressBar|escape:'javascript'}');
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
					<a href="{$GLOBALS.user_site_url}" id="logoLink"></a>
                   
				</div>
				<div class="clr"><br/></div>
				{if $GLOBALS.subAdminSID > 0}
					{module name="menu" function="show_subadmin_menu"}
				{/if}
				{module name="menu" function="show_left_menu"}
				<div class="clr"><br/></div>
			</td>
			<td valign="top" height="100%">
				
				<div id="messageBox"></div>

				<div id="topGray">
					
					<div id="breadCrumbs">
						{if $GLOBALS.user_page_uri !== "/"}<a href="{$GLOBALS.site_url}/">[[Dashboard]]</a> &#187;{/if} [[{$ADMIN_BREADCRUMBS}]]
					</div>
					<div id="topRight">
						[[Welcome back]], {$smarty.session.username}<br/>
						<a href="{$GLOBALS.site_url}/">[[Dashboard]]</a> | <a href="{$GLOBALS.site_url}/system/users/logout/">[[Log out]]</a>
					</div>
					
				</div>
				
				<div class="InContent">
					<div style="margin: 0 215px 0 0">
						{module name='flash_messages' function='display'}
					</div>
					{$MAIN_CONTENT}
					<div class="clr"><br/></div>
				</div>
			
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div id="footer">
					[[Copyright]] &copy;  {$smarty.now|date_format:"%Y"} [[Powered by]] <a href="http://www.electrumjobs.com/">Electrum Jobs</a> 
				</div>
			</td>
		</tr>
	</table>
	{module name="miscellaneous" function="profiler"}
	<script>
		{literal}
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		{/literal}
		ga('create', '{if $isDemo || $isTrial}UA--1{else}UA-{/if}', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>