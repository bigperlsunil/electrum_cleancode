{if $listings}
	{foreach from=$listings item=listing name=listings_block}
		<div class="featuredListings">
			<div class="fl-logo">
				{if $listing.user.Logo.file_url}
					<img src="{$listing.user.Logo.file_url}" alt="" />
				{else}
					<span class="text-center">&nbsp;</span>
				{/if}
			</div>
			<div class="fl-listing">
				<a href="{$GLOBALS.site_url}/display-job/{$listing.id}/{$listing.Title|regex_replace:"/[\\/\\\:*?\"<>|%#$\s]/":"-"}.html"><span class="longtext-30">{$listing.Title|escape:'html'}</span></a>
				<br />
				<span class="listing-name">{$listing.user.CompanyName|escape:'html'}</span>
				<br />
				<span class="listing-location">{locationFormat location=$listing.Location format="short"}</span>
			</div>
			<div class="clr"></div>
		</div>
		{if $smarty.foreach.listings_block.iteration is div by $number_of_cols}<div class="clr"><br/></div>{/if}
	{/foreach}
{else}
	<div class="text-center">[[There are no listings with requested parameters in the system.]]</div>
{/if}