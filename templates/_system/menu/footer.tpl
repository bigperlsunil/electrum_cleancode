	<div class="Footer">
		<div class="FooterLeft"></div>
			2008-{$smarty.now|date_format:"%Y"} [[Powered by]] <a target="_blank" href="http://www.smartjobboard.com" title="Job Board Software, Script">SmartJobBoard Job Board Software</a> &nbsp; &nbsp; <a href="{$GLOBALS.site_url}/about/">[[About Us]]</a> &nbsp;  <a href="{$GLOBALS.site_url}/site-map/">[[Sitemap]]</a>
			{if isset($GLOBALS.mobileUrl)}
				&nbsp;  <a href="{$GLOBALS.mobileUrl}">[[Mobile Version]]</a>
			{/if}
			{if $GLOBALS.settings.cookieLaw}
				&nbsp;  <a href="#" onClick="return cookiePreferencesPopupOpen();">[[Cookie Preferences]]</a>
			{/if}
		<div class="FooterRight"></div>
	</div>
</div>