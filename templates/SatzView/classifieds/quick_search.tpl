<div class="searchForm">
	<form action="{$GLOBALS.site_url}/search-results-jobs/" id="quickSearchForm">
		<input type="hidden" name="action" value="search" />
		<input type="hidden" name="listing_type[equal]" value="Job" />
		<div class="qs-main">
			<h1>[[Find a Job]]</h1>
			<div class="qs-left">
				{search property=keywords type="bool" listingType=$listingTypeID}
			</div>
			<div class="qs-right">
				{search property=Location searchWithin=true fields=$locationFields template="location.like.tpl"}
			</div>
		</div>
		<div class="qs-additional">
			<div id="search-fields">
				<fieldset>
					<div class="inputName">[[Category]]</div>
					<div class="inputField">{search property=JobCategory template="list.tpl"}</div>
				</fieldset>
				<fieldset>
					<div class="inputName">[[Occupations]]</div>
					<div class="inputField">{search property=Occupations}</div>
				</fieldset>
				<fieldset>
					<div class="inputName">[[Salary]]</div>
					<div class="inputField">{search property=Salary}</div>
				</fieldset>
				<fieldset>
					<div class="inputName">[[Salary Type]]</div>
					<div class="inputField">{search property=SalaryType}</div>
				</fieldset>
				<fieldset>
					<div class="inputName">[[Employment Type]]</div>
					<div class="inputField">{search property=EmploymentType template="list.tpl"}</div>
				</fieldset>
				<fieldset>
					<div class="inputName">[[Posted Within]]</div>
					<div class="inputField">{search property=PostedWithin template="list.date.tpl"}</div>
				</fieldset>
			</div>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
		<div class="qs-support">
			<p class="more-options">[[More Options]]</p>
			{if $acl->isAllowed('open_search_by_company_form')}
				<a  href="{$GLOBALS.site_url}/browse-by-company/">[[Search by Company]]</a>
			{/if}
			<div class="right">
				<div class="count-listings">{module name="classifieds" function="count_listings"}</div>
				<div><span class="find-button-zoom"><input type="submit" id="quickSearchFind" class="jqtransformdone button" value="[[Find]]" /></span></div>
			</div>

		</div>
	</form>
</div>

<style type="text/css">
	.results {
		margin: 185px 0 0 0;
	}
</style>
<script type="text/javascript">

	$(function() {
		if ($("#keywords").val() == '') {
			$("#keywords").val('[[Keywords]]');
			$("#keywords").addClass('keyword');
		}
		$("#keywords").focus(function(){
			if ($("#keywords").val()=='[[Keywords]]')
				$("#keywords").val('');
		});

		$("#keywords").blur(function(){
			$("#keywords").removeClass('keyword');
			if ($("#keywords").val()=='') {
				$("#keywords").val('[[Keywords]]');
				$("#keywords").addClass('keyword');
			}
		});

		$("#search_form").submit(function(){
			if ($("#keywords").val()=='[[Keywords]]')
				$("#keywords").val('');
		});
		$("#quickSearch").submit(function(){
			if ($("#keywords").val()=='[[Keywords]]')
				$("#keywords").val('');
		});
		$("#quickSearchForm").submit(function(){
			if ($("#keywords").val()=='[[Keywords]]')
				$("#keywords").val('');
		});
	});

	$(document).ready(function(){
		var qs = $("#quick-search"),
		curHeight = qs.height(),
		autoHeight = qs.css("height", "auto").height();

		$(".more-options").toggle( function(){
			qs.height(curHeight).animate({ height: autoHeight, paddingBottom: 70 }, 200, function(){
				qs.css('height', 'auto');
			});
			$(".qs-main").animate({ height:"123px" },300);
			$(".more-options").html("[[Less Options]]");
			$(".qs-additional, .qs-main #searchType-keywords, .qs-main .searchGeoDistance, #helplink").fadeIn(100);
			$(".more-options").css({
				"color":"#43464d",
				"background": "url({image}/delete.png) no-repeat"
			});
		},function(){
			qs.animate({ paddingBottom: 0 },300 );
			$(".qs-main").animate({ height:"73px" },300);
			$(".more-options").html("[[More Options]]");
			$(".qs-additional, .qs-main #searchType-keywords, .qs-main .searchGeoDistance, #helplink").fadeOut(100);
			$(".more-options").css({
				"color":"#CA224A",
				"background": "url({image}/more-opt.png) no-repeat"
			});
		});
	});
</script>