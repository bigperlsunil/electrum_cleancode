{if !empty($articles)}
	<div id="news">
		<input type="hidden" name="news_count" id="news_count" value="{$news_count}" />
		<ul>
			{foreach from=$articles item=elem name=news_block}
				<li>
					{if $elem.link}
						<a href="{$elem.link}" target="_blank" class="newsLink">{$elem.title}</a>
					{else}
						<a href="{$GLOBALS.site_url}/news/{$elem.sid}/{$elem.title|regex_replace:"/[\\/\\\:*?\"<>|%#$\s]/":"-"}.html" class="newsLink">{$elem.title}</a>
					{/if}
					<br />
					<div class="small">{$elem.date|date_format:"%Y - %m - %d"}</div>
					<br />{$elem.brief}
				</li>
			{foreachelse}
				<li><span class="text-center">[[There is no news in the system.]]</span></li>
			{/foreach}
		</ul>
		<a href="{$GLOBALS.site_url}/news/" class="link">[[View All News]]</a>
	</div>
{else}
	<div id="news">
		<ul>
			<li>[[There are no news in the system.]]</li>
		</ul>
	</div>
{/if}