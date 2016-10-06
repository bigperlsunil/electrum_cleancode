<div id="main-content-page-footer">
	<div class="content-align">
		<div class="footer">
			<div class="footer-column">
				<ul>
					<li><a href="{$GLOBALS.site_url}/">[[Home]]</a></li>
					<li><a href="{$GLOBALS.site_url}/contact/" >[[Contact]]</a></li>
					<li><a href="{$GLOBALS.site_url}/about/">[[About Us]]</a></li>
					<li><a href="{$GLOBALS.site_url}/terms-of-use/">[[Terms of use]]</a></li>
					{if isset($GLOBALS.mobileUrl)}
						<li><a href="{$GLOBALS.main_site}{if $GLOBALS.SessionId}?authId={$GLOBALS.SessionId}{/if}">[[Mobile Version]]</a></li>
					{/if}
					{if $GLOBALS.settings.cookieLaw}
						<li><a href="#" onClick="return cookiePreferencesPopupOpen();">[[Cookie Preferences]]</a></li>
					{/if}
				</ul>
			</div>
			<div class="footer-column">
				<h2>[[Employer]]</h2>
				<ul>
					<li><a href="{$GLOBALS.site_url}/registration/?user_group_id=Employer">[[Register]]</a></li>
					<li><a href="{$GLOBALS.site_url}/login/">[[Sign In]]</a></li>
					<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job" >[[Post Job]]</a></li>
					<li><a href="{$GLOBALS.site_url}/search-resumes/" >[[Search Resumes]]</a></li>
					<li><a href="{$GLOBALS.site_url}/resume-alerts/?action=new">[[Get Resumes by Email]]</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h2>[[Job Seeker]]</h2>
				<ul>
					<li><a href="{$GLOBALS.site_url}/registration/?user_group_id=JobSeeker">[[Register]]</a></li>
					<li><a href="{$GLOBALS.site_url}/login/">[[Sign In]]</a></li>
					<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Resume" >[[Post Resumes]]</a></li>
					<li><a href="{$GLOBALS.site_url}/" >[[Find Jobs]]</a></li>
					<li><a href="{$GLOBALS.site_url}/browse-by-category/">[[Jobs by Category]]</a></li>
					<li><a href="{$GLOBALS.site_url}/browse-by-city/">[[Jobs by City]]</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<ul>
					<li><a href="{$GLOBALS.site_url}/news/">[[News]]</a></li>
				</ul>
			</div>
			<div class="clr"></div>
		</div>
	</div>
</div>
<div id="main-content-page-footer-bottom">
	<div class="content-align">
		<span>2008-{$smarty.now|date_format:"%Y"} [[Powered by]] <a target="_blank" href="http://www.electrumjobs.com" title="Electrum Jobs">Electrum Jobs</a></span>
	</div>
</div>