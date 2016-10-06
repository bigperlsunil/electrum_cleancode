{if $isDemo}{include file="../menu/demo_theme_switcher.tpl"}{/if}
<div id="header-bg"></div>
<div class="header-top-menu">
	<div class="header-top-page">
		<div class="header-user-menu">
			<div class="top-left-menu"><a href="{$GLOBALS.site_url}/"> [[Home]]</a>&nbsp; | &nbsp;<a href="{$GLOBALS.site_url}/contact/" >[[Contact]]</a>&nbsp; | &nbsp;<a href="{$GLOBALS.site_url}/about/">[[About Us]]</a></div>
			{if $GLOBALS.current_user.logged_in}
				<div class="top-right-menu">
					<div id="choose-language">
						<form id="langSwitcherForm" method="get">
							<select name="lang" onchange="location.href='{$GLOBALS.site_url}{$url}?lang='+this.value+'&amp;{$params}'" class="language-switcher">
								{foreach from=$GLOBALS.languages item=language}
									<option value="{$language.id}"{if $language.id == $GLOBALS.current_language} selected="selected"{/if}>{$language.caption}</option>
								{/foreach}
							</select>
						</form>
					</div>
					| &nbsp;[[Welcome]] <span class="longtext-50">{if $GLOBALS.current_user.subuser}{$GLOBALS.current_user.subuser.username}{else}{$GLOBALS.current_user.username}{/if}</span>
					{if $GLOBALS.current_user.new_messages > 0}
						{if $acl->isAllowed('use_private_messages')}
							<a href="{$GLOBALS.site_url}/private-messages/inbox/">&nbsp;<img src="{image}mail.gif" border="0"  alt="[[You have]] {$GLOBALS.current_user.new_messages} [[message]]"  title="[[You have]] {$GLOBALS.current_user.new_messages} [[message]]" />&nbsp;</a>
						{elseif $acl->getPermissionParams('use_private_messages') == "message"}
							<a href="{$GLOBALS.site_url}/private-messages/inbox/" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=use_private_messages', 300, '[[You have]] {$GLOBALS.current_user.new_messages} [[message]]'); return false;"><img src="{image}mail.gif" border="0"  alt="[[You have]] {$GLOBALS.current_user.new_messages} [[message]]"  title="[[You have]] {$GLOBALS.current_user.new_messages} [[message]]" /></a>
						{/if}
					{/if}
					&nbsp;| &nbsp;<a href="{$GLOBALS.site_url}/logout/">[[Logout]]</a>
					<div class="clr"></div>
				</div>
			{else}
				<div class="top-right-menu">
					{* SOCIAL PLUGIN: LOGIN BUTTON *}
					{module name="social" function="social_login"}| &nbsp;
					{* / SOCIAL PLUGIN: LOGIN BUTTON *}
					<div id="chooseLanguage">
						<form id="langSwitcherForm" method="get" >
							<select name="lang" onchange="location.href='{$GLOBALS.site_url}{$url}?lang='+this.value+'&amp;{$params}'" class="language-switcher">
								{foreach from=$GLOBALS.languages item=language}
									<option value="{$language.id}"{if $language.id == $GLOBALS.current_language} selected="selected"{/if}>{$language.caption}</option>
								{/foreach}
							</select>
						</form>
					</div>
					| &nbsp; <a href="{$GLOBALS.site_url}/registration/">[[Register]]</a>
					&nbsp;| &nbsp;<a href="{$GLOBALS.site_url}/login/">[[Sign In]]</a>
					<div class="clr"></div>
				</div>
			{/if}
		</div>
	</div>
	<div class="clr"></div>
</div>
<div class="header-top-page">
	<a href="{$GLOBALS.site_url}/" class="logo"><img src="{image}logo.png" border="0" alt="[[{$GLOBALS.settings.logoAlternativeText}]]" title="[[{$GLOBALS.settings.logoAlternativeText}]]" /></a>
	{module name="payment" function="show_shopping_cart"}
</div>

<script type="text/javascript">
	$(".language-switcher").selectbox({
		change: function (value) {
			location.href='{$GLOBALS.site_url}{$url}?lang='+value+'&{$params}';
		}
	});
</script>