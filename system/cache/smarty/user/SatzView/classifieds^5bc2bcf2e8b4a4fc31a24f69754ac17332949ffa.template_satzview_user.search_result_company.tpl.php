<?php /* Smarty version Smarty-3.1.19, created on 2016-10-01 10:09:51
         compiled from "template_satzview_user:templates/_system/classifieds/search_result_company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94769156257ef3e17dc0c23-63944218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bc2bcf2e8b4a4fc31a24f69754ac17332949ffa' => 
    array (
      0 => 'template_satzview_user:templates/_system/classifieds/search_result_company.tpl',
      1 => 1415191978,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '94769156257ef3e17dc0c23-63944218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchId' => 0,
    'ERRORS' => 0,
    'tmp_listing' => 0,
    'usersCount' => 0,
    'companies_per_page' => 0,
    'current_page' => 0,
    'pages_number' => 0,
    'found_users_sids' => 0,
    'sorting_order' => 0,
    'sorting_field' => 0,
    'user_sid' => 0,
    'GLOBALS' => 0,
    'companyNameAlias' => 0,
    'City' => 0,
    'State' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ef3e180c8e45_50620207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ef3e180c8e45_50620207')) {function content_57ef3e180c8e45_50620207($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.regex_replace.php';
?><script type="text/javascript" language="JavaScript">

function submitForm(id) {
	lpp = document.getElementById("companies_per_page" + id);
	location.href = '?searchId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchId']->value);?>
&action=search&page=1&companies_per_page=' + lpp.value;
}
</script>

<div class="SearchResultsCompany">
	<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['tmp_listing']->value['user']['CompanyName']=='') {?>
			<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Search Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
		<?php }?>
	<!-- RESULTS / PER PAGE / NAVIGATION -->
	<div class="topNavBarLeft"></div>
	<div class="topNavBar">
		<div class="numberResults"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Results:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['usersCount']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['usersCount']->value==1) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></div>
		<div class="numberPerPage">
			<form class="companies_per_page_form tableSRNavPerPage" method="get" action="">
				<input type="hidden" name="searchId" value="<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
" />
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of companies per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
				<select id="companies_per_page1" name="companies_per_page1" onchange="submitForm(1); return false;">
					<option value="10" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==10) {?>selected="selected"<?php }?>>10</option>
					<option value="20" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==20) {?>selected="selected"<?php }?>>20</option>
					<option value="50" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==50) {?>selected="selected"<?php }?>>50</option>
					<option value="100" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==100) {?>selected="selected"<?php }?>>100</option>
				</select>
			</form>
		</div>
		<div class="pageNavigation">
			<span class="prevBtn"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
prev_btn.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
			<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?></span>
			<span class="navigationItems">
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=1">1</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>1) {?>...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-2>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
</a><?php }?>
				<span class="strong"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+2<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages_number']->value) {?>...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages_number']->value+1) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['pages_number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages_number']->value;?>
</a><?php }?>
			</span>
			<span class="nextBtn"><?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
			<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
next_btn.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/></span>
		</div>
	</div>
	<div class="topNavBarRight"></div>
	<div class="clr"><br/></div>
	<!-- END RESULTS / PER PAGE / NAVIGATION -->

	<?php if ($_smarty_tpl->tpl_vars['found_users_sids']->value) {?>
	<table cellspacing="0">
		<thead>
			<tr>
				<th class="tableLeft"> </th>
				<th width="10%">&nbsp;</th>
				<th>
					<a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;sorting_field=CompanyName&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='CompanyName') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='CompanyName') {?><?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.png" alt="Up" /><?php } else { ?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.png" alt="Down" /><?php }?><?php }?>
				</th>
				<th>
					<a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;sorting_field[0]=Location_City&amp;sorting_field[1]=Location_State&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value[0]=='Location_City') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value[0]=='Location_City') {?><?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.png" alt="Up" /><?php } else { ?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.png" alt="Down" /><?php }?><?php }?>
				</th>
				<th style="text-align: right !important;">
					<a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;sorting_field=number_of_jobs&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='number_of_jobs') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No of jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='number_of_jobs') {?><?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.png" alt="Up" /><?php } else { ?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.png" alt="Down" /><?php }?><?php }?>
				</th>
				<th class="tableRight"> </th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['user_sid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_sid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_users_sids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_sid']->key => $_smarty_tpl->tpl_vars['user_sid']->value) {
$_smarty_tpl->tpl_vars['user_sid']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'username','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'assign'=>'username'),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'CompanyName','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'assign'=>'companyNameAlias'),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'State.Code','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'parent'=>'Location','assign'=>'State'),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'City','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'parent'=>'Location','assign'=>'City'),$_smarty_tpl);?>

					<td class="compLogo" colspan="2">
						<div class="text-center">
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['companyNameAlias']->value,"/[\s\/\\\\]/u","-"));?>
/"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'Logo','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>
</a>
						</div>
					</td>
					<td>
						<span class="strong">
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['companyNameAlias']->value,"/[\s\/\\\\]/u","-"));?>
/"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'CompanyName','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>
</a>
						</span>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['City']->value;?>
<?php if ($_smarty_tpl->tpl_vars['City']->value&&$_smarty_tpl->tpl_vars['State']->value) {?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['State']->value;?>
</td>
					<td align="right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'countListings','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>
</td>
					<td></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<!-- RESULTS / PER PAGE / NAVIGATION -->
	<div class="clr"><br/></div>
	<div class="topNavBarLeft"></div>
	<div class="topNavBar">
		<div class="numberResults"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Results:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['usersCount']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['usersCount']->value==1) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></div>
		<div class="numberPerPage">
			<form class="companies_per_page_form tableSRNavPerPage" method="get" action="">
				<input type="hidden" name="searchId" value="<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
" />
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of companies per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
				<select id="companies_per_page2" name="companies_per_page2" onchange="submitForm(2); return false;">
				<option value="10" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==10) {?>selected="selected"<?php }?>>10</option>
				<option value="20" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==20) {?>selected="selected"<?php }?>>20</option>
				<option value="50" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==50) {?>selected="selected"<?php }?>>50</option>
				<option value="100" <?php if ($_smarty_tpl->tpl_vars['companies_per_page']->value==100) {?>selected="selected"<?php }?>>100</option>
			</select>
			</form>
		</div>
		<div class="pageNavigation">
			<span class="prevBtn"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
prev_btn.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
		    <?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?></span>
			<span class="navigationItems">
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=1">1</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-3>1) {?>...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-2>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value-1>0) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
</a><?php }?>
				<span class="strong"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+2<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+2;?>
</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages_number']->value) {?>...<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['current_page']->value+3<$_smarty_tpl->tpl_vars['pages_number']->value+1) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['pages_number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages_number']->value;?>
</a><?php }?>
			</span>
			<span class="nextBtn"><?php if ($_smarty_tpl->tpl_vars['current_page']->value+1<=$_smarty_tpl->tpl_vars['pages_number']->value) {?><a href="?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=search&amp;page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?><a><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
			<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
next_btn.png" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/></span>
		</div>
	</div>
	<div class="topNavBarRight"></div>
	<!-- END RESULTS / PER PAGE / NAVIGATION -->
	<?php }?>
	<?php }?>
</div>
<?php }} ?>
