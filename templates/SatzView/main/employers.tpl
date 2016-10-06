<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=http://www.w3.org/1999/xhtml xml:lang=en-US lang="en-US">
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
	{if $GLOBALS.current_language_data.id == 'hi'}<link rel="StyleSheet" type="text/css" href="{image src="design-hi.css"}" />{/if}
	{if $GLOBALS.current_language_data.id == 'ru'}<link rel="StyleSheet" type="text/css" href="{image src="design-ru.css"}" />{/if}
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/templates/_system/main/images/css/form.css" />
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery-ui.css"  />
	<link rel="StyleSheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery.autocomplete.css"  />
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.autocomplete.pack.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="{image src="js/jquery.selectbox-0.2.min.js"}"></script>
	<script language="JavaScript" type="text/javascript" src="{image src="js/jquery.lavalamp.min.js"}"></script>
	<script language="JavaScript" type="text/javascript" src="{image src="js/jquery.fitvids.js"}"></script>
	<script language="JavaScript" type="text/javascript" src="{image src="js/jquery.bxslider.js"}"></script>
	<script language="JavaScript" type="text/javascript" src="{image src="js/jquery.easing.1.3.js"}"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/jquery.poshytip.min.js"></script>
	<!--[if IE 8]>
		<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/pie-ie.js"></script>
		<script language="JavaScript" type="text/javascript">
			$(function() {
				if (window.PIE) {
					$('input, .qs-main, #top-menu, #top-menu #dropDown ul, .js-emp-menu, #main-menu li.back, .slider-right-buts a, .slider-get-started a').each(function() {
						PIE.attach(this);
					});
				}
			});
		</script>
	<![endif]-->
	[[$HEAD]]
	{if $highlight_templates}
		<!-- AJAX EDIT TEMPLATE SECTION -->
		<script language="javascript" type="text/javascript">
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
		<!-- END OF AJAX EDIT TEMPLATE SECTION -->
	{/if}
	<script language="javascript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '{$GLOBALS.site_url}';
		window.SJB_UserSiteUrl   = '{$GLOBALS.user_site_url}';

		$.ui.dialog.prototype.options.bgiframe = true;

		function popUpWindow(url, widthWin, title, parentReload, userLoggedIn){
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
	{literal}
	<style type="text/css">
		.hint {
			color: #989898;
		}
	</style>
	<script type="text/javascript">

		$(function() {
			/* Mailchimp Name Input Hint */
			if ($("#mch_name").val() == '') {
				$("#mch_name").val('{/literal}[[Your name]]{literal}');
				$("#mch_name").addClass('hint');
			}
			$("#mch_name").focus(function(){
				if ($("#mch_name").val()=='{/literal}[[Your name]]{literal}')
					$("#mch_name").val('');
			});

			$("#mch_name").blur(function(){
				$("#mch_name").removeClass('hint');
				if ($("#mch_name").val()=='') {
					$("#mch_name").val('{/literal}[[Your name]]{literal}');
					$("#mch_name").addClass('hint');
				}
			});

			$("#mailchimp-form").submit(function(){
				if ($("#mch_name").val()=='{/literal}[[Your name]]{literal}')
					$("#mch_name").val('');
			});
			/* Mailchimp Email Input Hint */
			if ($("#mch_email").val() == '') {
				$("#mch_email").val('{/literal}[[Email Address]]{literal}');
				$("#mch_email").addClass('hint');
			}
			$("#mch_email").focus(function(){
				if ($("#mch_email").val()=='{/literal}[[Email Address]]{literal}')
					$("#mch_email").val('');
			});

			$("#mch_email").blur(function(){
				$("#mch_email").removeClass('hint');
				if ($("#mch_email").val()=='') {
					$("#mch_email").val('{/literal}[[Email Address]]{literal}');
					$("#mch_email").addClass('hint');
				}
			});

			$("#mailchimp-form").submit(function(){
				if ($("#mch_email").val()=='{/literal}[[Email Address]]{literal}')
					$("#mch_email").val('');
			});
		});
		$(document).ready(function(){
			$('#top-slider').bxSlider({
				auto: true,
				pager: true,
				pause: 7000,
				mode: "fade"
			});
		});

	</script>
	{/literal}
</head>
<body>
	{module name="users" function="cookie_preferences"}
	<div id="loading"></div>
	<div id="messageBox"></div>
	<div class="header-page">
		{include file="../menu/header.tpl"}
	</div>
	<div id="main-content-page-top">
		<div class="content-align">
			<div id="left-index-shadow"></div>
			<div id="right-index-shadow"></div>
			{module name="menu" function="top_menu"}
			<div class="index-div">
				<div class="index-div-bg"></div>
				<div class="index-wrapper">
					{module name='flash_messages' function='display'}
					<div class="emp-js-slider">
						<div id="top-slider">
							<div id="main-slider">
								<div class="slider-left">
									<h1>[[Easy Job Posting]]</h1>
									<ul>
										<li>[[Shop for products]]</li>
										<li>[[Pay for them]]</li>
										<li>[[Post your jobs]]</li>
									</ul>
								</div>
								<div class="slider-right">
									<img src="{image}1-employers.jpg" border="0" alt=""/>
								</div>
								<div class="slider-right-buts">
									<a class="slider-post-job active" href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job"><span>[[Post Job]]</span></a>
									<a class="slider-search-resume inactive" href="{$GLOBALS.site_url}/search-resumes/"><span>[[Search Resumes]]</span></a>
									<a class="slider-get-resume inactive" href="{$GLOBALS.site_url}/resume-alerts/?action=new"><span>[[Get Resumes by Email]]</span></a>
								</div>
							</div>
							<div>
								<div class="slider-left">
									<h1>[[Free Resume Search]]</h1>
									<ul>
										<li>[[Find right candidates]]</li>
										<li>[[Contact them]]</li>
										<li>[[Hire the best ones]]</li>
									</ul>
								</div>
								<div class="slider-right">
									<img src="{image}2-employers.jpg" border="0" alt=""/>
								</div>
								<div class="slider-right-buts">
									<a class="slider-post-job inactive" href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job"><span>[[Post Job]]</span></a>
									<a class="slider-search-resume active" href="{$GLOBALS.site_url}/search-resumes/"><span>[[Search Resumes]]</span></a>
									<a class="slider-get-resume inactive" href="http://test.smartjobboard.com/sjb/resume-alerts/?action=new"><span>[[Get Resumes by Email]]</span></a>
								</div>
							</div>
							<div>
								<div class="slider-left">
									<h1>[[Regular Resume Alerts]]</h1>
									<ul>
										<li>[[Specify needed criteria]]</li>
										<li>[[Create a resume alert]]</li>
										<li>[[Get new resumes by email]]</li>
									</ul>
								</div>
								<div class="slider-right">
									<img src="{image}3-employers.jpg" border="0" alt=""/>
								</div>
								<div class="slider-right-buts">
									<a class="slider-post-job inactive" href="{$GLOBALS.site_url}/add-listing/?listing_type_id=Job"><span>[[Post Job]]</span></a>
									<a class="slider-search-resume inactive" href="{$GLOBALS.site_url}/search-resumes/"><span>[[Search Resumes]]</span></a>
									<a class="slider-get-resume active" href="http://test.smartjobboard.com/sjb/resume-alerts/?action=new"><span>[[Get Resumes by Email]]</span></a>
								</div>
							</div>
						</div>
						<div class="slider-get-started"><a href="{$GLOBALS.site_url}/employer-products/">[[Get Started]]</a></div>
					</div>
					<div class="emp-js-left">
						{if $GLOBALS.settings.show_news_on_main_page}
							<h3>[[News]]</h3>
							{module name="news" function="show_news"}
						{/if}
						<div id="blogBlock">
							<h2>[[Blog Posts]]</h2>
							{module name="miscellaneous" function="blog_page"}
						</div>
						<div id="grayBgBanner">{module name="banners" function="show_banners" group="Bottom Banners"}</div>
					</div>
					<div class="emp-js-right">
						{if $GLOBALS.settings.show_polls_on_main_page}
							{module name="polls" function="polls"}
						{/if}
						{module name="miscellaneous" function="mailchimp"}
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clr"></div>

	{include file="../menu/footer.tpl"}

	{module name="miscellaneous" function="profiler"}
	{if $highlight_templates}
		<div id="highlighterBlock" style="display:none;background-color: #ccc; opacity: 0.5;"></div>
	{/if}
</body>
</html>
