<?xml version="1.0"?>
<rss version="2.0">
	<channel>
		<title>RSS - Saved Search</title>
		<link><![CDATA[{$GLOBALS.site_url}]]></link>
		<description><![CDATA[{$search_name} Saved Search]]></description>
		<language>{$GLOBALS.current_language}-us</language>
		<pubDate>{$lastBuildDate} GMT</pubDate>
		<lastBuildDate>{$lastBuildDate} GMT</lastBuildDate>
		<docs><![CDATA[{$GLOBALS.site_url}/listing-feeds/?{$query_string}]]></docs>
		<generator></generator>
		<managingEditor></managingEditor>
		<webMaster></webMaster>
		{foreach from=$listings item=listing name=listings_block}
			<item>
				<title><![CDATA[{$listing.Title|clrNonPrintedChars}]]></title>
				{if $listing_type_id == 'Resume'}
					<link><![CDATA[{$GLOBALS.site_url}/display-resume/{$listing.id}/{$listing.Title|regex_replace:"/[\\/\\\:*?\"<>|%#\$\s]/u":"-"|clrNonPrintedChars}.html]]></link>
					<description>
						<![CDATA[{$listing.Location.City|clrNonPrintedChars}, [[$listing.Location.State]]
						{$listing.user.FirstName|clrNonPrintedChars} {$listing.user.LastName|clrNonPrintedChars}<br/>
						[[Objective]]: {$listing.Objective|clrNonPrintedChars}<br/>
						[[Work Experience]]: <br />
						{assign var="workExperience" value=$listing.WorkExperience|default:array()}
						{section loop=array_shift($workExperience) name="key"}
							<ul>
								{foreach from=$listing.WorkExperience key="field" item="values"}
									<li>[[{$field}]]: {$values[$smarty.section.key.index_next]|clrNonPrintedChars}</li>
								{/foreach}
							</ul>
						{/section}
						[[Education]]: <br/>
						{assign var="education" value=$listing.Education|default:array()}
						{section loop=array_shift($education) name="key"}
							<ul>
							{foreach from=$listing.Education key="field" item="values"}
								<li>[[{$field}]]: {$values[$smarty.section.key.index_next]|clrNonPrintedChars}</li>
							{/foreach}
							</ul>
						{/section}
						[[Skills]]: {$listing.Skills|clrNonPrintedChars}]]>
					</description>
					<pubDate>{$listing.activation_date|date_format:'D, d M Y H:i:s'} GMT</pubDate>
					<guid><![CDATA[{$GLOBALS.site_url}/display-resume/{$listing.id}/{$listing.Title|regex_replace:"/[\\/\\\:*?\"<>|%#\$\s]/u":"-"|clrNonPrintedChars}.html]]></guid>
				{else}
					<link>
					<![CDATA[{$GLOBALS.site_url}/display-job/{$listing.id}/{$listing.Title|regex_replace:"/[\\/\\\:*?\"<>|%#\$\s]/u":"-"|clrNonPrintedChars}.html]]></link>
					<description>
						<![CDATA[{$listing.Location.City|clrNonPrintedChars}, [[$listing.Location.State]]
						{$listing.user.CompanyName|clrNonPrintedChars}<br/>
						{$listing.JobDescription|clrNonPrintedChars}]]>
					</description>
					<pubDate>{$listing.activation_date|date_format:'D, d M Y H:i:s'} GMT</pubDate>
					<guid><![CDATA[{$GLOBALS.site_url}/display-job/{$listing.id}/{$listing.Title|regex_replace:"/[\\/\\\:*?\"<>|%#\$\s]/u":"-"|clrNonPrintedChars}.html]]></guid>
				{/if}
			</item>
		{/foreach}
	</channel>
</rss>
