<div id="displayListing" class="hidden-print">
	{title} {$listing.Title|escape:'html'} {/title}
	{keywords} {$listing.Title|escape:'html'} {/keywords}
	{description} {$listing.Title|escape:'html'} {/description}
	{if $errors}
		<div class="noRefine">
			{foreach from=$errors key=error_code item=error_message}
				<p class="error">
					{if $error_code == 'UNDEFINED_LISTING_ID'} [[Listing ID is not defined]]
						{title} [[404 Not Found]] {/title}
					{elseif $error_code == 'WRONG_LISTING_ID_SPECIFIED'} [[Listing does not exist]]
						{title} [[404 Not Found]] {/title}
					{elseif $error_code == 'LISTING_IS_NOT_ACTIVE'} [[This Resume is no longer available]]
						{title} [[404 Not Found]] {/title}
					{elseif $error_code == 'NOT_OWNER'} [[You're not the owner of this posting]]
					{elseif $error_code == 'LISTING_IS_NOT_APPROVED'} [[Listing with specified ID is not approved by admin]]
						{title} [[404 Not Found]] {/title}
					{elseif $error_code == 'WRONG_DISPLAY_TEMPLATE'} [[Wrong template to display listing]]
					{elseif $error_code == 'NO_SUCH_FILE'} [[No such file found in the system]]
					{/if}
				</p>
			{/foreach}
		</div>
	{else}

		<script type="text/javascript">
			var link = "{$GLOBALS.site_url}/flag-listing/";
			{literal}
			function popUpWindowIframe(url, widthWin, heightWin, title) {
				$("#messageBox").dialog( 'destroy' ).html('{/literal}{$smarty.capture.displayJobProgressBar|escape:'javascript'}{literal}');
				$("#messageBox").dialog({
					width: widthWin,
					height: heightWin,
					modal: true,
					title: title
				}).dialog( 'open' );
				$("#messageBox").html('<iframe border="0" runat="server" height="650" width="750" frameborder="0" src="'+url+'"><\/iframe>');
				return false;
			}

			// send flagForm and show result
			function sendFlagForm() {
				$("#flagForm").ajaxSubmit({
					url : link, 
					success : function (data) {
						$("#messageBox").html(data);
					}
				});
				return false;
			}
			{/literal}
		</script>

	<div class="results">
		<div id="topResults">
			{if $tcpdfError}
				<p class="error">[[Error generating PDF]]</p>
			{/if}
			<!-- SAVE LISTING / PRINT LISTING -->
			<div class="searchResultsHeaderLineNew">
				<div id="header-searchres-left"></div>
				<ul>
					{if $GLOBALS.user_page_uri != "/my-resume-details/" && $GLOBALS.user_page_uri != "/resume-preview/"}
						{if $acl->isAllowed('save_resume')}
							<li class="panelSavedIco">
								<a onclick="popUpWindow('{$GLOBALS.site_url}/saved-ads/?listing_id={$listing.id}&displayForm=1&listing_type=resume', 400, '[[Save this Resume]]', true, {if $GLOBALS.current_user.logged_in}true{else}false{/if}); return false;" href="{$GLOBALS.site_url}/saved-ads/?listing_id={$listing.id}">[[Save this Resume]]</a>
							</li>
						{elseif $acl->getPermissionParams('save_resume') == "message"}
							<li class="panelSavedIco">
								<a onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=save_resume', 400, '[[Save this Resume]]'); return false;" href="{$GLOBALS.site_url}/saved-ads/?listing_id={$listing.id}">[[Save this Resume]]</a>
							</li>
						{/if}
						{if $GLOBALS.current_user.logged_in}
							{if $acl->isAllowed('save_resume')}
								<li class="panelViewDitailsIco">
									<a href="{$GLOBALS.site_url}/saved-resumes/">[[View Saved Resumes]]</a>
								</li>
							{elseif $acl->getPermissionParams('save_resume') == "message"}
								<li class="panelViewDitailsIco">
									<a href="{$GLOBALS.site_url}/saved-resumes/" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=save_resume', 400, '[[View Saved Resumes]]'); return false;">[[View Saved Resumes]]</a>
								</li>
							{/if}
						{else}
							<li class="panelViewDitailsIco">
								<a onclick="popUpWindow('{$GLOBALS.site_url}/saved-listings/?listing_type_id=resume', 400, '[[View Saved Resumes]]'); return false;" href="{$GLOBALS.site_url}/saved-listings/">[[View Saved Resumes]]</a>
							</li>
						{/if}
					{/if}
					{if $acl->isAllowed('flag_resume')}
						<li class="printListingIco">
							<a href="{$GLOBALS.site_url}/flag-listing/?listing_id={$listing.id}" onclick="popUpWindow('{$GLOBALS.site_url}/flag-listing/?listing_id={$listing.id}', 500, '[[Flag This Resume]]'); return false;">[[Flag This Resume]]</a>
						</li>
					{elseif $acl->getPermissionParams('flag_resume') == "message"}
						<li class="printListingIco">
							<a href="{$GLOBALS.site_url}/flag-listing/?listing_id={$listing.id}" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=flag_resume', 400, '[[Flag This Resume]]'); return false;">[[Flag This Resume]]</a>
						</li>
					{/if}
					{if $GLOBALS.user_page_uri == "/display-resume/"}
						<li class="printListingIco">
							<a href="{$GLOBALS.site_url}/display-resume/{$listing.id}?action=download_pdf_version">[[PDF Version]]</a>
						</li>
					{else}
						<li class="printListingIco">
							<a href="{$GLOBALS.site_url}/my-resume-details/{$listing.id}?action=download_pdf_version">[[PDF Version]]</a>
						</li>
					{/if}
						<li class="printListingIco">
							<a href="?listing_id={$listing.id}&amp;print" onClick="window.print(); return false;">[[Print This Ad]]</a>
						</li>
					{if $listing.latitude && $listing.longitude && (!$GLOBALS.settings.cookieLaw || $smarty.cookies.cookiePreferences != "System")}
						<li class="viewMapIco">
							<a href="{$GLOBALS.site_url}/display-resume-map/?listing_id={$listing.id}&amp;searchId={$searchId}&amp;view=map" onclick="popUpWindowIframe('{$GLOBALS.site_url}/display-resume-map/?listing_id={$listing.id}&amp;searchId={$searchId}&amp;view=map&amp;lightbox=1', 810, 710, '[[Map]]'); return false;">[[Map View]]</a>
						</li>
					{/if}
				</ul>
				<div id="header-searchres-right"></div>
			</div>
			<!-- END SAVE LISTING / PRINT LISTING -->
			
			<!-- MODIFY RESULTS / RATING / COMMENTS / PAGGING -->
			<div class="clr"></div>
			<div class="underQuickLinks">
				<div class="ModResults">&nbsp;
					{if $searchId != "" && $GLOBALS.user_page_uri != "/my-resume-details/" && $GLOBALS.user_page_uri != "/resume-preview/"}
						<ul>
							<li class="arrow">
								<a href="{$GLOBALS.site_url}{$search_uri}?action=search&amp;searchId={$searchId}&amp;page={$page}#listing_{$listing.id}">[[Back to Results]]</a>
							</li>
							<li class="modifySearchIco">
								<a href="{$GLOBALS.site_url}/search-resumes/?searchId={$searchId}">[[Modify Search]]</a>
							</li>
						</ul>
					{/if}
				</div>
				<div class="Rating">&nbsp;
					{if $show_rates && $acl->isAllowed('add_resume_ratings')}
						<ul>
							<li class="ratingPanel">
								<p>[[Rate This Resume]]: {include file="rating.tpl" listing=$listing }</p>
							</li>
						</ul>
					{/if}
				</div>
				<div class="Comments">&nbsp;
					{if $show_comments && $acl->isAllowed('add_resume_comments')}
						<ul><li class="comments"><a href="#comment_1">[[Comments]] (+{$listing.comments_num})</a></li></ul>
					{elseif $show_comments && $acl->getPermissionParams('add_resume_comments') == "message"}
						<ul><li class="comments"><a href="#comment_1" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=add_resume_comments', 400, '[[Comments]]'); return false;">[[Comments]] (+{$listing.comments_num})</a></li></ul>
					{/if}
				</div>
				<div class="Pagging">&nbsp;
					{if $searchId != "" || ($GLOBALS.user_page_uri == "/my-resume-details/" && $GLOBALS.user_page_uri != "/resume-preview/")}
						<ul>
							<li class="pagging">
								{if $prev_next_ids.prev}
									<img src="{image}prev_btn.png" alt="[[Previous]]" border="0" />&nbsp;<a href="{$GLOBALS.site_url}/{if $GLOBALS.user_page_uri == "/my-resume-details/"}my-resume-details{else}display-resume{/if}/{$prev_next_ids.prev}/?searchId={$searchId}&amp;page={$page}">[[Previous]]</a> &nbsp;
								{/if}
								{if $prev_next_ids.next}
									<a href="{$GLOBALS.site_url}/{if $GLOBALS.user_page_uri == "/my-resume-details/"}my-resume-details{else}display-resume{/if}/{$prev_next_ids.next}/?searchId={$searchId}&amp;page={$page}">[[Next]]</a>&nbsp;<img src="{image}next_btn.png" alt="[[Next]]" border="0"/>
								{/if}
							</li>
						</ul>
					{/if}
				</div>
			</div>
			<!-- END MODIFY RESULTS / RATING / COMMENTS / PAGGING -->
		</div>
	</div>
	
	<div id="refineResults">
		<!-- PROFILE BLOCK -->
		<div class="userInfo">
			<div id="blockTop">&nbsp;</div>
			<div class="compProfileTitle">[[User Info]]</div>
			<div class="compProfileInfo">
				{if $listing.anonymous != 1 || $applications.anonymous === 0 }
					<span class="strong"><span class="longtext-25">{$listing.user.FirstName|escape:'html'}</span> <span class="longtext-25">{$listing.user.LastName|escape:'html'}</span></span>
					{module name="social" function="member_profile_widget" profileSID=$listing.user.id}

					{if $allowViewContactInfo}<br />{$listing.user.Location.Address|escape:'html'}{/if}
					<br />{locationFormat location=$listing.user.Location format="long"}
					<br /><br />
					{if $allowViewContactInfo}
						<br /><span class="strong">[[Phone]]</span>: <span class="longtext-25">{$listing.user.PhoneNumber}</span>
						<br /><span class="strong">[[Email]]</span>: <a href="mailto:{$listing.user.email}"><span class="longtext-25">{$listing.user.email}</span></a><br/>
					{elseif $acl->getPermissionParams('view_resume_contact_info') == "message"}
						{module name="miscellaneous" function="access_denied" permission="view_resume_contact_info"}<br/>
					{/if}
					{if $acl->isAllowed('use_private_messages')}
						<br /><a href="{$GLOBALS.site_url}/private-messages/contacts/?pm_action=save_contact&amp;user_id={$listing.user.id}" onclick="popUpWindow('{$GLOBALS.site_url}/private-messages/contacts/?pm_action=save_contact&amp;user_id={$listing.user.id}', {if $GLOBALS.current_user.logged_in}400{else}500{/if}, '[[Save Contact]]', true, {if $GLOBALS.current_user.logged_in}true{else}false{/if}); return false;"  class="pmSendLink">[[Save Contact]]</a>
					{elseif $acl->getPermissionParams('use_private_messages') == "message"}
						<br /><a href="#" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=use_private_messages', 400, '<span>[[Apply Now]]</span>: {$listing.Title|escape:"html"}'); return false;"  class="pmSendLink">[[Save Contact]]</a>
					{/if}
					{if $listing.Resume.file_url != ""}
						<br /><a href="?filename={$listing.Resume.saved_file_name|escape:'url'}">[[Download Resume]]</a>
					{/if}
					{if $acl->isAllowed('view_resume_search_results')}
						<br /><a href="{$GLOBALS.site_url}/search-results-resumes/?action=search&amp;username[equal]={$listing.user.id}">[[All resumes by this user]]</a>
					{/if}
					{if $acl->isAllowed('use_private_messages')}
						<br /><a href="{$GLOBALS.site_url}/private-messages/send/?to={$listing.user.id}" onclick="popUpWindow('{$GLOBALS.site_url}/private-messages/aj-send/?to={$listing.user.id}', 700, '[[Send private message]]', true, {if $GLOBALS.current_user.logged_in}true{else}false{/if}); return false;"  class="pm_send_link">[[Send private message]]</a>
					{elseif $acl->getPermissionParams('use_private_messages') == "message"}
						<br /><a href="{$GLOBALS.site_url}/private-messages/send/?to={$listing.user.id}" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=use_private_messages', 400, '[[Send private message]]'); return false;"  class="pm_send_link">[[Send private message]]</a>
					{/if}
				{else}
					<br /><span class="strong">[[Anonymous User Info]]</span>
					{if $listing.Resume.file_url != ""}
						<br /><a href="?filename={$listing.Resume.saved_file_name|escape:'url'}">[[Download Resume]]</a>
					{/if}
					{if $acl->isAllowed('use_private_messages')}
						<br /><span class="strong"><a href="{$GLOBALS.site_url}/private-messages/send/?to={$listing.user.id}&amp;anonym=1" onclick="popUpWindow('{$GLOBALS.site_url}/private-messages/aj-send/?to={$listing.user.id}&anonym=1', 600, '[[Send private message]]', true, {if $GLOBALS.current_user.logged_in}true{else}false{/if}); return false;"  class="pm_send_link">[[Send private message]]</a></span>
					{elseif $acl->getPermissionParams('use_private_messages') == "message"}
						<br /><span class="strong"><a href="{$GLOBALS.site_url}/private-messages/send/?to={$listing.user.id}&amp;anonym=1" onclick="popUpWindow('{$GLOBALS.site_url}/access-denied/?permission=use_private_messages', 400, '[[Send private message]]'); return false;"  class="pm_send_link">[[Send private message]]</a></span>
					{/if}
				{/if}

				<div class="text-center">
                    {foreach from=$listing.pictures key=key item=picture name=picimages }
                        <br/><a target="_blank" href ="{$picture.picture_url}"> <img src="{$picture.thumbnail_url}" border="0" title="{$picture.caption}" alt="{$picture.caption}" /> </a><br/>
                    {/foreach}
                </div>
                <br/>
			</div>
			<div class="compProfileBottom"></div>
		</div>
		<!-- END PROFILE BLOCK -->

		<div class="listingLeftBlock">
			{foreach from=$video_fields item=field_id}
				{if is_array($listing.user.$field_id) && $listing.user.$field_id.file_url != ""}
					<div class="text-center">{include file="video_player_profile.tpl"}</div>
				{/if}
			{/foreach}

			{if $listing.user.youtube && (!$GLOBALS.settings.cookieLaw || $smarty.cookies.cookiePreferences != "System")}
				<br/><div class="text-center">{display property="youtube" object=$listingOwner}</div>
			{/if}
		</div>

	</div>
	
	<div id="listingsResults">
		<!-- LISTING INFO BLOCK -->
		<div class="listingInfo">
			<h2>{$listing.Title|escape:'html'}</h2>

			<div class="clr"></div>
			{* >>>>>>>>>>>>> FIELDS >>>>>>>>>>>>>>>> *}
			{include file="../builder/bf_displaylisting_fieldsholders.tpl"}
			{* <<<<<<<<<<<<< FIELDS <<<<<<<<<<<<<<<< *}
			<div class="clr"><br/></div>

			{* SOCIAL PLUGIN: FACEBOOK LIKE BUTTON *}
			{module name="social" function="facebook_like_button" listing=$listing type="Resume"}
			{* / SOCIAL PLUGIN: FACEBOOK LIKE BUTTON *}
			{if !$myListing && $GLOBALS.plugins.ShareThisPlugin.active == 1 && $GLOBALS.settings.display_on_resume_page == 1}
				{$GLOBALS.settings.header_code}
				{$GLOBALS.settings.code}
			{/if}
			
			<div class="clr"><br/></div>

			{if $show_comments && $acl->isAllowed('add_resume_comments')}
				{include file="listing_comments.tpl" listing=$listing }
			{/if}
		</div>
		<!-- END LISTING INFO BLOCK -->
	</div>
	
	<div id="endResults">
		<ul class="listingLinksBottom">
			{if $searchId != "" || $GLOBALS.user_page_uri == "/my-resume-details/"}
				<li class="paggingBottom">
					<p align="right" class="page_navigator">
						{if $prev_next_ids.prev}
							<img src="{image}prev_btn.png" alt="[[Previous]]" border="0" />&nbsp;<a href="{$GLOBALS.site_url}/{if $GLOBALS.user_page_uri == "/my-resume-details/"}my-resume-details{else}display-resume{/if}/{$prev_next_ids.prev}/?searchId={$searchId}&amp;page={$page}">[[Previous]]</a> &nbsp;
						{/if}
						{if $prev_next_ids.next}
							<a href="{$GLOBALS.site_url}/{if $GLOBALS.user_page_uri == "/my-resume-details/"}my-resume-details{else}display-resume{/if}/{$prev_next_ids.next}/?searchId={$searchId}&amp;page={$page}">[[Next]]</a>&nbsp;<img src="{image}next_btn.png" alt="[[Next]]" border="0"/>
						{/if}
					</p>
				</li>
			{/if}
		</ul>
		<!-- END BOTTOM PAGGING -->
		{* >>>>> LISTING PREVIEW >>>>> *}
		{if $GLOBALS.user_page_uri == '/resume-preview/'}
		<div class="preview-buttons">
			<form action="{$referer}" method="post">
				<input type="hidden" name="from-preview" value="1" />
				<input type="submit" name="edit_temp_listing" value="[[Edit]]" class="button" id="listingPreview"/>
				{if $contract_id == 0 && !$checkouted}
					<input type="hidden" name="proceed_to_checkout" />
					<input type="submit" name="action_add" value="[[Proceed to Checkout]]" class="button" />
				{else}
					<input type="submit" name="action_add" value="[[Post]]" class="button" />
				{/if}
			</form>
		</div>
		{/if}
		{* <<<<< LISTING PREVIEW <<<<< *}
	</div>
	{/if}
</div>
<div class="visible-print-block">
	{include file="print_listing.tpl" listing=$listing }
</div>
<script type="text/javascript">
{if $keywordsHighlight}
	$("#listingsResults").highlight({$keywordsHighlight});
{/if}
</script>
