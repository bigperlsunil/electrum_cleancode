<div id="top-menu">
	<ul id="main-menu">
		{if $GLOBALS.user_page_uri != "/search-results-jobs/" && $GLOBALS.user_page_uri != "/display-job/"}
			<li style="display:none;"><a href="#"></a></li>
		{/if}
		{if $GLOBALS.current_user.logged_in}
			{if ($acl->isAllowed('open_job_search_form')) || $GLOBALS.current_user.group.id == "JobSeeker"}
				<li><a href="{$GLOBALS.site_url}/" >[[Find Jobs]]</a></li>
			{/if}
			{if ($acl->isAllowed('open_resume_search_form')) || $GLOBALS.current_user.group.id == "Employer"}
				<li><a href="{$GLOBALS.site_url}/search-resumes/" >[[Search Resumes]]</a></li>
			{/if}
			{foreach from=$listingTypesInfo item="listingTypeInfo"}
				{if ($acl->isAllowed('post_'|cat:$listingTypeInfo.id))
				|| $GLOBALS.current_user.group.id == "Employer" && $listingTypeInfo.id == "Job"
				|| $GLOBALS.current_user.group.id == "JobSeeker" && $listingTypeInfo.id == "Resume"}
					<li>
						<a href="{$GLOBALS.site_url}/add-listing/?listing_type_id={$listingTypeInfo.id}" >
							{if in_array($listingTypeInfo.id, array('Job', 'Resume'))}[[Post {$listingTypeInfo.name}s]]{else}[[Post {$listingTypeInfo.name} Listings]]{/if}
						</a>
					</li>
				{/if}
			{/foreach}
		{else}
			{if $GLOBALS.current_user.group.id != "Employer"}
				<li><a href="{$GLOBALS.site_url}/" >[[Find Jobs]]</a></li>
				<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Resume" >[[Post Resumes]]</a></li>
			{/if}
			{if $GLOBALS.current_user.group.id != "JobSeeker"}
				<li><a href="{$GLOBALS.site_url}/search-resumes/" >[[Search Resumes]]</a></li>
				<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job" >[[Post Jobs]]</a></li>
			{/if}
		{/if}
		<li {if $GLOBALS.user_page_uri == "/product-details/"}class="current"{/if} {if !$GLOBALS.current_user.logged_in}id="dropDown"{/if}>
			{if $GLOBALS.current_user.group.id == "JobSeeker"}
				<a href="{$GLOBALS.site_url}/jobseeker-products/">[[Products]]</a>
			{elseif $GLOBALS.current_user.group.id == "Employer"}
				<a href="{$GLOBALS.site_url}/employer-products/">[[Products]]</a>
			{elseif !$GLOBALS.current_user.group.id}
				<a href="#">[[Products]]</a>
				{include file="drop_down_menu_products.tpl"}
			{else}
				<a href="{$GLOBALS.site_url}/{$GLOBALS.current_user.group.id|lower}-products/">[[Products]]</a>
			{/if}
		</li>
		{if $GLOBALS.current_user.logged_in}
			<li {if $GLOBALS.current_user.logged_in}id="dropDown" class="{if $GLOBALS.user_page_uri == "/general-stats/" || $GLOBALS.user_page_uri == "/job-stats/"}current{/if} drop-down-account"{/if}>
				<a href="{$GLOBALS.site_url}/my-account/">[[My Account]]</a>
				{if $GLOBALS.current_user.group.id == "Employer"}
					{include file="drop_down_menu_employer.tpl"}
				{elseif $GLOBALS.current_user.group.id == "JobSeeker"}
					{include file="drop_down_menu_jobseeker.tpl"}
				{/if}
			</li>
		{/if}
	</ul>
	{if !$GLOBALS.current_user.logged_in}
			{if $GLOBALS.user_page_uri == "/employers/"}
				<div class="js-emp-menu js-only">
					<span class="empljs-title"><a href="{$GLOBALS.site_url}/">[[Job Seekers]]</a></span><div class="empljs-sep"></div>
					<ul>
						<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Resume" >[[Post Resumes]]</a></li>
						<li><a href="{$GLOBALS.site_url}/" >[[Find Jobs]]</a></li>
					</ul>
				</div>
			{else}
				<div class="js-emp-menu">
					<span class="empljs-title"><a href="{$GLOBALS.site_url}/employers/">[[Employers]]</a></span><div class="empljs-sep"></div>
					<ul>
						<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job" >[[Post Jobs]]</a></li>
						<li><a href="{$GLOBALS.site_url}/search-resumes/" >[[Search Resumes]]</a></li>
					</ul>
				</div>
			{/if}
	{else}
		{if $GLOBALS.current_user.group.id == "Employer"}
			<div class="js-emp-menu">
				<span class="empljs-title"><a href="{$GLOBALS.site_url}/employers/">[[Employers]]</a></span><div class="empljs-sep"></div>
				<ul>
					<li><a href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job" >[[Post Jobs]]</a></li>
					<li><a href="{$GLOBALS.site_url}/search-resumes/" >[[Search Resumes]]</a></li>
				</ul>
			</div>
		{/if}
	{/if}

	<div class="clr"></div>
</div>
<script type="text/javascript">
	$(function() {
		$("#main-menu #dropDown li").addClass("noLava");
		var loc = window.location.href;
		var filename = loc.substring(loc.lastIndexOf('{$GLOBALS.site_url}') + 1, loc.length);
		$('#main-menu a').each(function() {
			if ($(this).attr('href').indexOf(filename) > -1) {
				$(this).parent().addClass('current');
			}
		});
		$('#main-menu ul a').each(function() {
			if (($(this).attr('href').indexOf(filename) > -1)) {
				$("#main-menu #dropDown").addClass('current');
			}
		});
		$("#main-menu").lavaLamp({ speed: 300 });
		$("#dropDown ul").width($("#dropDown").width()+"px");

		$('#dropDown').hover(function() {
			var submenu = $(this).find('ul');
			submenu.stop(true, true).slideDown(200, function() {
				$(this).clearQueue();
			});
		}, function() {
			var submenu = $(this).find('ul');
			submenu.slideUp(100, function() {
				$(this).clearQueue();
			});
		});
	});
</script>
