<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 14:36:54
         compiled from "template_satzview_user:/home/electrum/public_html/templates/SatzView/classifieds/search_results_jobs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137774019157ee2b2e429d66-96354672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d5cae5060064d223aa043952649ed139001287b' => 
    array (
      0 => 'template_satzview_user:/home/electrum/public_html/templates/SatzView/classifieds/search_results_jobs.tpl',
      1 => 1395111668,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '137774019157ee2b2e429d66-96354672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'searchId' => 0,
    'view' => 0,
    'listing_search' => 0,
    'ERRORS' => 0,
    'errors' => 0,
    'error' => 0,
    'error_msg' => 0,
    'refineSearch' => 0,
    'is_company_profile_page' => 0,
    'listings' => 0,
    'userInfo' => 0,
    'listing_type_id' => 0,
    'acl' => 0,
    'view_on_map' => 0,
    'url' => 0,
    'show_brief_or_detailed' => 0,
    'listings_number' => 0,
    'search_criteria' => 0,
    'METADATA' => 0,
    'index' => 0,
    'listing' => 0,
    'keywordsHighlight' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee2b2e8da1d4_99352960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee2b2e8da1d4_99352960')) {function content_57ee2b2e8da1d4_99352960($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/company/') {?>
	<?php $_smarty_tpl->tpl_vars['refineSearch'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<script type="text/javascript" language="JavaScript">
	$.ui.dialog.prototype.options.bgiframe = true;
	function submitForm(id) {
		lpp = document.getElementById("listings_per_page" + id);
		location.href = '?searchId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchId']->value);?>
&action=search&page=1&listings_per_page=' + lpp.value + '&view=<?php echo rawurlencode($_smarty_tpl->tpl_vars['view']->value);?>
';
	}
	function sortBy(id) {
		lpp = document.getElementById("sort-by-select" + id);
		title = $("#sort-by-select").find(":selected").val();
		if(title == "Location_City") {
			location.href = '?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&action=search&sorting_field[0]=Location_City&sorting_field[1]=Location_State&sorting_order=ASC&page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
';
		}
		else {
			location.href = '?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&action=search&sorting_field='+title+'&sorting_order=ASC&page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
';
		}
	}

	function SaveAd(noteId, url){
		$.get(url, function(data){
			$("#"+noteId).html(data);
		});
	}
	$(function(){
		$("#refineResults .refine_button").each(function(){
			$(this).attr("id", $(this).attr("id") + "-refine");
			$(".refine_icon",this).addClass("more");
		});
	})
</script>

<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['error_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_msg']->_loop = false;
 $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_msg']->key => $_smarty_tpl->tpl_vars['error_msg']->value) {
$_smarty_tpl->tpl_vars['error_msg']->_loop = true;
 $_smarty_tpl->tpl_vars['error']->value = $_smarty_tpl->tpl_vars['error_msg']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='SIMPLY_HIRED_XML_READ_FAILED') {?>
				<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Failed to read XML from url<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 - <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</p>
			<?php }?>
		<?php } ?>
	<?php }?>
	<div <?php if ($_smarty_tpl->tpl_vars['refineSearch']->value||$_smarty_tpl->tpl_vars['view']->value=='map') {?>class="results"<?php } else { ?>class="noRefine"<?php }?>>

	<div id="topResults" <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/search-results-jobs/') {?>class="refine-fix"<?php }?>>
		<div class="headerBgBlock">
			<?php if ($_smarty_tpl->tpl_vars['is_company_profile_page']->value) {?>
				<?php $_smarty_tpl->tpl_vars['tmp_listing'] = new Smarty_variable(current($_smarty_tpl->tpl_vars['listings']->value), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName']!='') {?>
					<?php $_smarty_tpl->tpl_vars["companyName"] = new Smarty_variable($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'], null, 0);?>
					<!-- This page of company profile, with list of vacancy -->
					<?php echo $_smarty_tpl->getSubTemplate ("company_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<div class="Results" id="compProfileInfo"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by $companyName<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<?php }?>
			<?php } else { ?>
				<div class="Results results-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Search Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>

			<!-- TOP QUICK LINKS -->
			<?php if ($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName']=='') {?>
				<div class="topResultsLinks">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['listing_type_id']->value!='') {?>
							<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('save_searches')) {?>
								<li class="saveSearchIco">
									<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save this Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', true, <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>true<?php } else { ?>false<?php }?>); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save this Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php } elseif ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('save_searches')=="message") {?>
								<li class="saveSearchIco">
									<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=save_searches', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save this Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save this Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>
								<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('use_job_alerts')) {?>
									<li class="saveSearchIco">
										<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&alert=1', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', true, <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>true<?php } else { ?>false<?php }?>); return false;"
										   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									</li>
								<?php } elseif ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('use_job_alerts')=="message") {?>
									<li class="saveSearchIco">
										<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=use_job_alerts', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"
										   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/save-search/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									</li>
								<?php }?>
							<?php } else { ?> 
								<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('use_job_alerts')) {?>
									<li class="saveSearchIco">
										<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/guest-alerts/create/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', true, false); return false;"
										   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/guest-alerts/create/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									</li>
								<?php } elseif ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('use_job_alerts')=="message") {?>
									<li class="saveSearchIco">
										<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=use_job_alerts', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', true, false); return false;"
										   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=use_job_alerts"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									</li>
								<?php }?>
							<?php }?> 
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>
							<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('save_job')) {?>
								<li class="savedIco">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-jobs/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php } elseif ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('save_job')=="message") {?>
								<li class="savedIco">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-jobs/"  onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=save_job', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php }?>
						<?php } else { ?>
							<li class="savedIco">
								<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-listings/?listing_type_id=job', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-listings/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</li>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>
							<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('save_searches')) {?>
								<li class="savedIco">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php } elseif ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('save_searches')=="message") {?>
								<li class="savedIco">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/" onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=save_searches', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php }?>
						<?php } else { ?>
							<li class="savedIco">
								<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</li>
						<?php }?>
					</ul>
				</div>
			<?php }?>
			<!-- END TOP QUICK LINKS -->
		</div>
	</div>
	<div class="results-paging">
		<div class="head">
			<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Search Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
			<?php if ($_smarty_tpl->tpl_vars['view_on_map']->value) {?>
				<div id="googleMap-links">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php if ($_smarty_tpl->tpl_vars['url']->value=='/search-results-jobs/') {?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?<?php }?>page=1&amp;view=list&amp;show_brief_or_detailed=brief" id="showBriefOrDetailed" <?php if ($_smarty_tpl->tpl_vars['view']->value=='list'&&$_smarty_tpl->tpl_vars['show_brief_or_detailed']->value=='brief') {?>onclick="return false;" class="listLink-active"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Brief<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &nbsp;
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php if ($_smarty_tpl->tpl_vars['url']->value=='/search-results-jobs/') {?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?<?php }?>page=1&amp;view=list&amp;show_brief_or_detailed=detailed" id="listView-icon" <?php if ($_smarty_tpl->tpl_vars['view']->value=='list'&&$_smarty_tpl->tpl_vars['show_brief_or_detailed']->value=='detailed') {?>onclick="return false;" class="listLink-active"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &nbsp;
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php if ($_smarty_tpl->tpl_vars['url']->value=='/search-results-jobs/') {?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?<?php }?>page=1&amp;view=map" id="mapView-icon" <?php if ($_smarty_tpl->tpl_vars['view']->value=='map') {?>onclick="return false;" class="listLink-active"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Map View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				</div>
				<div class="clr"></div>
			<?php }?>
		</div>

		<!-- TOP RESULTS - PER PAGE - PAGE NAVIGATION -->

		<div class="topNavBar">
			<div class="numberResults">
				<?php $_smarty_tpl->tpl_vars["listings_number"] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['listings_number'], null, 0);?>
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Results:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span><?php echo $_smarty_tpl->tpl_vars['listings_number']->value;?>
</span> <?php if ($_smarty_tpl->tpl_vars['listings_number']->value==1) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></p>
				<?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['ZipCode']['value']['location']&&$_smarty_tpl->tpl_vars['search_criteria']->value['ZipCode']['value']['radius']) {?>
					<?php $_smarty_tpl->tpl_vars["radius"] = new Smarty_variable($_smarty_tpl->tpl_vars['search_criteria']->value['ZipCode']['value']['radius'], null, 0);?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('radius_search_unit', null, null); ob_start(); ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['GLOBALS']['radius_search_unit'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['GLOBALS']['radius_search_unit']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['GLOBALS']['radius_search_unit']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->tpl_vars["radius_search_unit"] = new Smarty_variable(htmlspecialchars(Smarty::$_smarty_vars['capture']['radius_search_unit'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
					<?php $_smarty_tpl->tpl_vars["location"] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['search_criteria']->value['ZipCode']['value']['location'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
within $radius $radius_search_unit of $location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value=='list') {?>
					<div class="sorting"><span>&nbsp;&nbsp;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sort by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
						<form id="sort-by" method="get" action="">
							<select id="sort-by-select" name="sort-by-select" onchange="sortBy(1); return false;">
								<option value="activation_date" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['sorting_field']=='activation_date') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="Location_City" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['sorting_field'][0]=='Location_City') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="CompanyName" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['sorting_field']=='CompanyName') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="Title" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['sorting_field']=='Title') {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							</select>
						</form>
					</div>
				<?php }?>
			</div>
			<div class="numberPerPage">
				<form id="listings_per_page_form" method="get" action="" class="tableSRNavPerPage">
					<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of jobs per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</p>
					<select id="listings_per_page2" name="listings_per_page2" onchange="submitForm(2); return false;">
						<option value="10" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']==10) {?>selected="selected"<?php }?>>10</option>
						<option value="20" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']==20) {?>selected="selected"<?php }?>>20</option>
						<option value="50" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']==50) {?>selected="selected"<?php }?>>50</option>
						<option value="100" <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']==100) {?>selected="selected"<?php }?>>100</option>
					</select>
				</form>
			</div>
			<div class="clr"></div>
		</div>
		<!-- END TOP RESULTS - PER PAGE - PAGE NAVIGATION -->
	</div>

	<!-- START REFINE SEARCH -->
	<?php if ($_smarty_tpl->tpl_vars['refineSearch']->value||$_smarty_tpl->tpl_vars['view']->value=='map') {?>
		<div id="refineResults-block">
			<div id="blockBg">
				<div id="blockTop"></div>
				<div id="blockInner">
					<?php if ($_smarty_tpl->tpl_vars['view']->value=='map'&&$_smarty_tpl->tpl_vars['listings']->value) {?>
						<table cellpadding="0" cellspacing="0" width="100%" id="refineResults">
							<thead>
							<tr>
								<th class="tableLeft"> </th>
								<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Search Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</th>
								<th class="tableRight"> </th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td colspan="3">
									<div id="googleMap-searchResults">
										<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
											<?php if (empty($_smarty_tpl->tpl_vars['index']->value)) {?><?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?><?php }?>
											<div class="mapListings-results <?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
												<div <?php if ($_smarty_tpl->tpl_vars['listing']->value['latitude']&&$_smarty_tpl->tpl_vars['listing']->value['longitude']) {?>class="listingsWithLocation" onmouseover="javascript: google.maps.event.trigger(markersArray[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
], 'click');" onmouseout="javascript: infoWindows[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
].close();"<?php } else { ?>class="listingsWithoutLocation" title="No Location"<?php }?>>
													<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
" target="_blank"><span class="strong"><?php echo $_smarty_tpl->tpl_vars['listing']->value['Title'];?>
</span></a><br />
													<span class="strong">Company:</span>
													<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['id'];?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'],"/[\s\/\\\\]/","-"));?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</a>
													<br />
													<?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['listing']->value['Location'],'format'=>"short"),$_smarty_tpl);?>

												</div>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['listing']->value['latitude']&&$_smarty_tpl->tpl_vars['listing']->value['longitude']) {?><?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?><?php }?>
										<?php } ?>
									</div>
									<div class="clr"></div>
									<div id="googleMap-pagging">
										<span class="prevBtn">
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
prev_btn.png" alt=""/>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
										</span>
										<span class="navigationItems">
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-3>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=1&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
">1</a><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-3>1) {?>...<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2;?>
</a><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
</a><?php }?>
											<span class="strong"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
</span>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
</a><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2;?>
</a><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+3<$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?>...<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+3<$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']+1) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['pages_number'];?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['pages_number'];?>
</a><?php }?>
										</span>
										<span class="nextBtn">
											<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
											<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
next_btn.png" alt=""/>
										</span>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
						<div class="clr"><br/></div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>
						<div id="ajaxRefineSearch">
							<?php echo $_smarty_tpl->getSubTemplate ("search_results_refine_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</div>
					<?php }?>
				</div>
			</div>
		</div>
	<?php }?>
	<!-- END REFINE SEARCH -->

	<!-- LISTINGS TABLE -->
	<div id="listingsResults">
		<?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value=='map') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('google_map_results.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<table cellspacing="0">
					<tbody class="searchResultsJobs">
					<!-- Job Info Start -->
					<?php echo $_smarty_tpl->getSubTemplate ("search_results_jobs_listings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<!-- END Job Info Start -->
					</tbody>
				</table>
				<div class="pageNavigation">
					<span class="prevBtn"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
page-prev.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?></span>
					<span class="navigationItems">
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-3>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=1&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
">1</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-3>1) {?>...<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-2;?>
</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']-1;?>
</a><?php }?>
						<span class="strong"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+2;?>
</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+3<$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?>...<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+3<$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']+1) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['pages_number'];?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_search']->value['pages_number'];?>
</a><?php }?>
					</span>
					<span class="nextBtn"><?php if ($_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1<=$_smarty_tpl->tpl_vars['listing_search']->value['pages_number']) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page']+1;?>
&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
page-next.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/></span>
					<span class="go-up"><a href="#"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Go Up<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></span>
				</div>
			<?php }?>
		<?php } else { ?>
			<div id="noListingsFounds"><p class="information"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no postings meeting the criteria you specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p></div>
			<table cellspacing="0" id="listingsTableResults">
				<tbody>
				<!-- Job Info From Listings Providers Here -->
				<tr id="no_listings_found">
					<td colspan="6" style="display:none;"><p class="information"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no postings meeting the criteria you specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p></td>
				</tr>
				<?php if (!$_smarty_tpl->tpl_vars['is_company_profile_page']->value) {?>
					<!-- preloader row here -->
					<tr id="ajax_preloader_listings_results">
						<td colspan="6" style="text-align:center;">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_32.gif" /></td>
					</tr>
				<?php }?>

				</tbody>
			</table>
		<?php }?>
	</div>
	<!-- END LISTINGS TABLE -->


	<!-- END BOTTOM RESULTS - PER PAGE - PAGE NAVIGATION -->
	</div>
<?php }?>
<script type="text/javascript" language="JavaScript">
	<?php if ($_smarty_tpl->tpl_vars['keywordsHighlight']->value) {?>
		$(".searchResultsJobs").highlight(<?php echo $_smarty_tpl->tpl_vars['keywordsHighlight']->value;?>
);
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_company_profile_page']->value) {?>

		function requestToListingsProviders(page, provider) {
			page = typeof page !== 'undefined' ? page : '<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
';
			provider = typeof provider !== 'undefined' ? provider : '';

			var preloaderSelector = '#ajax_preloader_listings_results';
			if (provider != '') {
				preloaderSelector =  '#' + provider + '_ajax_preloader_listings_results';
			}
			$(preloaderSelector).show();

			// request to listings providers
			var ajaxUrl = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/ajax/";
			var ajaxParams = {
				'action' : 'request_for_listings',
				'listing_type[equal]' : 'Job',
				'searchId' : '<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
',
				'provider' : provider,
				'page' : page
			};

			$.get(ajaxUrl, ajaxParams, function(data) {
				if (data.length > 0) {
					$("#no_listings_found").hide();
					dataText = data.replace(/\s/g, '');
					if (dataText == '') {
						$("#listingsTableResults").hide();
					}

					<?php if (!$_smarty_tpl->tpl_vars['listings']->value) {?>
						$(".topNavBar").hide();
						$(".topNavBarRight").hide();
						$(".topNavBarLeft").hide();
						$("#noListingsFounds").show();
					<?php }?>

				}
				$(preloaderSelector).hide();
				if (provider == 'indeed') {
					$('tr.indeedBlock').remove();
				}
				$('#listingsResults > table > tbody').append(data);
			});
		}

		function showRefineSearch() {
			var ajaxUrl = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/ajax/";
			var ajaxParams = {
				'action' : 'get_refine_search_block',
				'listing_type[equal]' : 'Job',
				'searchId' : '<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
',
				'view' : '<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
',
				'showRefineFields' : (<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['listings_number'];?>
 > 0)
			};

			$.get(ajaxUrl, ajaxParams, function(data) {
				if (data.length > 0) {
					dataText = data.replace(/\s/g, '');
					$('#refineResults-block div#blockBg div#blockInner div#ajaxRefineSearch').html(data);
				}
			});
		}
		// make request to listings providers after page loads
		$(function() {
			requestToListingsProviders();
			showRefineSearch();
		});
	<?php }?>
	$(".go-up a").click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
</script><?php }} ?>
