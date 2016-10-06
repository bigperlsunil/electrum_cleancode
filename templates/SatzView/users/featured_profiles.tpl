<ul id="mycarousel" class="jcarousel-skin-tango">
	{foreach from=$profiles item=profile name=profile_block}
		{if $profile.Logo.thumb_file_url}
			{if strpos($profile.CompanyName, '-') !== false}
				<li><a href="{$GLOBALS.site_url}/search-results-jobs/?action=search&amp;username[equal]={$profile.id}"><img src="{$profile.Logo.thumb_file_url}" alt="{$profile.WebSite}" border="0" /></a></li>
			{else}
				<li><a href="{$GLOBALS.site_url}/company/{$profile.id}/{$profile.CompanyName|regex_replace:"/[\s\/\\\\]/":"-"|escape:"url"}/"><img src="{$profile.Logo.thumb_file_url}" border="0" alt="{$profile.WebSite}"/></a></li>
			{/if}
		{/if}
	{/foreach}
</ul>