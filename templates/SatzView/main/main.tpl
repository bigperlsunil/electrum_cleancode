<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="[[$KEYWORDS]]" />
	<meta name="description" content="[[$DESCRIPTION]]" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>{$GLOBALS.settings.site_title}{if $TITLE ne ""}:&nbsp;&nbsp;[[$TITLE]] {/if}</title>
	<link rel="StyleSheet" type="text/css" href="{image src="design.css"}" />
	<link rel="alternate" type="application/rss+xml" title="RSS2.0" href="{$GLOBALS.site_url}/rss/" />
	{if $GLOBALS.current_language_data.rightToLeft}<link rel="StyleSheet" type="text/css" href="{image src="designRight.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'de'}<link rel="StyleSheet" type="text/css" href="{image src="design-de.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'es'}<link rel="StyleSheet" type="text/css" href="{image src="design-es.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'fr'}<link rel="StyleSheet" type="text/css" href="{image src="design-fr.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'hi'}<link rel="StyleSheet" type="text/css" href="{image src="design-hi.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'pl'}<link rel="StyleSheet" type="text/css" href="{image src="design-pl.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'pt'}<link rel="StyleSheet" type="text/css" href="{image src="design-pt.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'ru'}<link rel="StyleSheet" type="text/css" href="{image src="design-ru.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'sr'}<link rel="StyleSheet" type="text/css" href="{image src="design-sr.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'ro'}<link rel="StyleSheet" type="text/css" href="{image src="design-ro.css"}" />{/if}
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/templates/_system/main/images/css/form.css" />
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery-ui.css"  />
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery.autocomplete.css"  />
	<link rel="Stylesheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery.multiselect.css" />
	<script type="text/javascript" src="{common_js}/main.js"></script>
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.js"></script>
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.autocomplete.pack.js"></script>
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.form.js"></script>
	<script type="text/javascript" src="{image src="js/jquery.selectbox-0.2.min.js"}"></script>
	<script type="text/javascript" src="{image src="js/jquery.lavalamp.min.js"}"></script>
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
    <script type="text/javascript" src="{common_js}/multilist_functions.js"></script>
	<script type="text/javascript" src="{common_js}/autoupload_functions.js"></script>
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/tango/skin.css" />
	<script type="text/javascript" src="{common_js}/autoupload_functions.js"></script>
	<script type="text/javascript" src="{common_js}/jquery.poshytip.min.js"></script>
	<!--[if IE 8]>
		<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/pie-ie.js"></script>
		<script type="text/javascript">
			$(function() {
				if (window.PIE) {
					$('input, .qs-support .find-button-zoom, .middle-content, #quick-search, .qs-main, #top-menu, #top-menu #dropDown ul, .js-emp-menu, #main-menu li.back').each(function() {
						PIE.attach(this);
					});
				}
			});
		</script>
	<![endif]-->
	[[$HEAD]]

	{if $highlight_templates}
		<script type="text/javascript">
			$(document).ready(function(){
				$("html").addClass("highlight-body");
			});
			$(function() {

				$("div.inner_div").bind("mouseenter", function(){
					var width	= $(this).parent().css('width');
					var height	= $(this).parent().css('height');
					var offset	= $(this).parent().offset();

					// inner_block css-class z-index = 11
					// set highlight z-index = 10
					$("#highlighterBlock").css({
						'display':'block',
						'position':'absolute',
						'top':offset.top,
						'left':offset.left,
						'width':width,
						'height':height,
						'z-index': 10
					});
				});
				$("div.inner_div").bind("mouseleave", function(){
					$("#highlighterBlock").css({
						'display':'none'
					});
				});

				// lets catch clicks on 'edit template' links
				$("a.editTemplateLink").click(function() {
					//alert( $(this).attr('title'));
					var templateName	= $(this).attr('title');
					var link			= $(this).attr('href');
					editTemplateMenu(templateName, link);
					return false;
				});

				$(".editTemplateMenu").live('click', function() {
					var url = $(this).attr('href');
					popUpWindow(url, 700, 'Edit Template', true);
					return false;
				});

				function editTemplateMenu(templateName, url) {
					var title = 'Template';
					$("#messageBox").dialog( 'destroy' ).html('<b>Template Name:</b><br />' + templateName + '<br /><br /><a class="editTemplateMenu" style="font-weight: bold; color: #00f;" href="'+url+'" target="_blank">Edit this template</a>');
					$("#messageBox").dialog({
						width: 300,
						height: 150,
						modal: true,
						title: title
					}).dialog( 'open' );

					return false;
				}

			});

		</script>
	{/if}

	<style type="text/css">
		.hint {
			color: #989898;
		}
	</style>
	<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#mycarousel').jcarousel({
					// Configuration goes here
					animation: 1500,
					auto: 1,
					wrap: 'circular',
					start: 7,
					scroll: 1,
					initCallback: function(jc, state) {
						if (state == 'init') {
							jc.startAutoOrig = jc.startAuto;
							jc.startAuto = function() {
								if (!jc.paused) {
									jc.startAutoOrig();
								}
							}
							jc.pause = function() {
								jc.paused = true;
								jc.stopAuto();
							};
							jc.play = function() {
								jc.paused = false;
								jc.startAuto();
							};
							$('.jcarousel-skin-tango').mouseover(function() {
								jc.pause();
							});
							$('.jcarousel-skin-tango').mouseout(function() {
								jc.play();
							});
						}
						jc.play();
					}
				});
			});

			$(function() {
				/* Mailchimp Name Input Hint */
				if ($("#mch_name").val() == '') {
					$("#mch_name").val('[[Your name]]');
					$("#mch_name").addClass('hint');
				}
				$("#mch_name").focus(function(){
					if ($("#mch_name").val()=='[[Your name]]')
						$("#mch_name").val('');
				});

				$("#mch_name").blur(function(){
					$("#mch_name").removeClass('hint');
					if ($("#mch_name").val()=='') {
						$("#mch_name").val('[[Your name]]');
						$("#mch_name").addClass('hint');
					}
				});

				$("#mailchimp-form").submit(function(){
					if ($("#mch_name").val()=='[[Your name]]')
						$("#mch_name").val('');
				});
				/* Mailchimp Email Input Hint */
				if ($("#mch_email").val() == '') {
					$("#mch_email").val('[[Email Address]]');
					$("#mch_email").addClass('hint');
				}
				$("#mch_email").focus(function(){
					if ($("#mch_email").val()=='[[Email Address]]')
						$("#mch_email").val('');
				});

				$("#mch_email").blur(function(){
					$("#mch_email").removeClass('hint');
					if ($("#mch_email").val()=='') {
						$("#mch_email").val('[[Email Address]]');
						$("#mch_email").addClass('hint');
					}
				});

				$("#mailchimp-form").submit(function(){
					if ($("#mch_email").val()=='[[Email Address]]')
						$("#mch_email").val('');
				});
			});
	</script>
	<script type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '{$GLOBALS.site_url}';
		$.ui.dialog.prototype.options.bgiframe = true;
		function popUpWindow(url, widthWin, title, parentReload, userLoggedIn, callbackFunction) {
			reloadPage = false;
			$("#loading").show();
			$("#messageBox").dialog( 'destroy' ).html('{capture name="displayJobProgressBar"}<img style="vertical-align: middle;" src="{$GLOBALS.site_url}/system/ext/jquery/progbar.gif" alt="[[Please wait ...]]" /> [[Please wait ...]]{/capture}{$smarty.capture.displayJobProgressBar|escape:'quotes'}');
			$("#messageBox").dialog({
				autoOpen: false,
				width: widthWin,
				height: 'auto',
				modal: true,
				title: title,
				close: function(event, ui) {
					if (callbackFunction) {
						callbackFunction();
					}
					if (parentReload == true && !userLoggedIn && reloadPage == true) {
						parent.document.location.reload();
					}
				}
			}).hide();

			$.get(url, function(data){
				$("#messageBox").html(data).dialog("open").show();
				$("#loading").hide();
			});

			return false;
		}
	</script>

</head>
<body>
	<div id="loading"></div>
	<div id="messageBox"></div>
	{module name="users" function="cookie_preferences"}
	<div class="header-page">
		{include file="../menu/header.tpl"}
	</div>
	<div id="main-content-page-top">
		<div class="content-align">
			{module name="menu" function="top_menu"}
			<div id="quick-search">
				{$MAIN_CONTENT}
			</div>
			<div id="featured-companies">
				<h2 id="fc-title">[[Featured Companies]]</h2>
				{module name="users" function="featured_profiles" number_of_cols="10" items_count="10"}
			</div>
		</div>
	</div>
	<div id="main-content-page-middle">
		<div class="content-align">
			<div id="featured-jobs-block">
				<h2>[[Featured Jobs]]</h2>
				{module name="classifieds" function="featured_listings" items_count="3" listing_type="Job"}
			</div>

			<div id="latest-jobs-block">
				<h2>[[Latest Jobs]]</h2>
				{module name="classifieds" function="latest_listings" items_count="3" listing_type="Job"}
			</div>
			<div class="clr"></div>
		</div>
	</div>
	<div id="main-content-page-bottom">
		<div class="content-align">
			<div class="middle-content">
				<div class="jobs-by-column">
					<h3>[[Jobs by Category]]</h3>
					{module name="classifieds" function="browse" browseUrl="/browse-by-category/" browse_template="browse_by_category.tpl" recordsNumToDisplay="14"}
					<div class="clr"><br/></div>
				</div>
				<div class="jobs-by-column">
					<h3>[[Jobs by City]]</h3>
					{module name="classifieds" function="browse" browseUrl="/browse-by-city/" browse_template="browse_by_city.tpl" recordsNumToDisplay="14"}
					<div class="clr"><br/></div>
				</div>
				<div class="news-blog-column">
					{if $GLOBALS.settings.show_news_on_main_page}
						<h3>[[News]]</h3>
						{module name="news" function="show_news"}
						<div class="clr"><br/></div>
					{/if}

					{if isset($GLOBALS.plugins.WordPressBridgePlugin) && $GLOBALS.plugins.WordPressBridgePlugin.active && $GLOBALS.settings.display_blog_on_homepage}
						<div id="blog-block">
							<h2>[[Blog Posts]]</h2>
							{module name="miscellaneous" function="blog_page"}
						</div>
					{/if}
				</div>
				<div class="clr"><br/></div>
				<hr size="1"/>
				{module name="miscellaneous" function="mailchimp"}
				{if $GLOBALS.settings.show_polls_on_main_page}
					{module name="polls" function="polls"}
				{/if}
				<div class="clr"><br/></div>
			</div>
		</div>
	</div>
	<div id="grayBgBanner">{module name="banners" function="show_banners" group="Bottom Banners"}</div>

	{include file="../menu/footer.tpl"}

	{module name="miscellaneous" function="profiler"}
	{if $highlight_templates}
		<div id="highlighterBlock"></div>
	{/if}
</body>
</html>