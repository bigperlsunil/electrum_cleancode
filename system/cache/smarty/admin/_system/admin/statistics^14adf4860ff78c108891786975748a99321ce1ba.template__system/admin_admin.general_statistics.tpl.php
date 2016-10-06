<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:30:14
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/statistics/general_statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120270755657e4ef1e64f5e5-96902962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14adf4860ff78c108891786975748a99321ce1ba' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/statistics/general_statistics.tpl',
      1 => 1452752318,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '120270755657e4ef1e64f5e5-96902962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statistics' => 0,
    'date' => 0,
    'dateStatistic' => 0,
    'event' => 0,
    'statistic' => 0,
    'GLOBALS' => 0,
    'errors' => 0,
    'error' => 0,
    'period' => 0,
    'groupBy' => 0,
    'filter' => 0,
    'listingTypes' => 0,
    'userGroups' => 0,
    'key' => 0,
    'countItems' => 0,
    'listingCount' => 0,
    'rowspan' => 0,
    'listingType' => 0,
    'test' => 0,
    'listingTypeID' => 0,
    'userGroup' => 0,
    'userCount' => 0,
    'statisticTotalAmount' => 0,
    'earningsFromUsers' => 0,
    'promotionDiscount' => 0,
    'listPlugins' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4ef1ecacd22_35693013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4ef1ecacd22_35693013')) {function content_57e4ef1ecacd22_35693013($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("trGenerateGraph", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate Graph<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>

	google.load("visualization", "1", { packages:["corechart"]});
	
	function drawChart(lines, titles, section) {
	  var data = new google.visualization.DataTable();
	  data.addColumn('string', 'Period');
	  for (var i = 0; i < titles.length; i++) {
		  data.addColumn('number', titles[i]);
	  }
	  data.addRows(lines);
	  var options = {
	    title: section
	  };
	  $('#messageBox').html("<div style='width: 99%; height: 99%' id='messageBox1'></div>");
	  var chart = new google.visualization.LineChart(document.getElementById('messageBox1'));
	  chart.draw(data, options);
	  
	  return false
	}
	
	function GenerateGraph(formID, section)
	{
		var titles = new Array();
		var lines = new Array();
		var linesNum = 0;
		var counter = 0;
		var events = new Array();

		<?php  $_smarty_tpl->tpl_vars['dateStatistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dateStatistic']->_loop = false;
 $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dateStatistic']->key => $_smarty_tpl->tpl_vars['dateStatistic']->value) {
$_smarty_tpl->tpl_vars['dateStatistic']->_loop = true;
 $_smarty_tpl->tpl_vars['date']->value = $_smarty_tpl->tpl_vars['dateStatistic']->key;
?>
			if ('<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
' != 'total') {
				lines[linesNum] = new Array();
				var countElements = 0;
				lines[linesNum][countElements] = '<?php echo $_smarty_tpl->tpl_vars['dateStatistic']->value['date'];?>
';
				countElements++;
				<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dateStatistic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['event']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value!='date'&&is_array($_smarty_tpl->tpl_vars['statistic']->value)) {?>
						for (var i = 0; i < document.forms[formID].length; i++) {
							if (document.forms[formID].elements[i].checked) {
								var eventName = document.forms[formID].elements[i].value;
								if (eventName == '<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
') {
									if (!in_array('<?php echo $_smarty_tpl->tpl_vars['statistic']->value['title'];?>
', titles)) {
										titles[countElements - 1] = '<?php echo $_smarty_tpl->tpl_vars['statistic']->value['title'];?>
';
									}
									lines[linesNum][countElements] = parseInt('<?php echo $_smarty_tpl->tpl_vars['statistic']->value['statistic'];?>
');
									countElements++;
								}
							}
						}
					<?php }?>
				<?php } ?>
				linesNum++;
			}
		<?php } ?>
		windowMessage();
		drawChart(lines, titles, section);
		return false;
	 	
	}

	function in_array(what, where) {
	    for(var i=0, length_array=where.length; i<length_array; i++)
	        if(what == where[i]) 
	            return true;
	    return false;
	}
	
	function windowMessage(){
		$("#messageBox").dialog( 'destroy' ).html('<?php $_smarty_tpl->_capture_stack[0][] = array("displayJobProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/../system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['displayJobProgressBar']);?>
');
		$("#messageBox").dialog({
			width: 900,
			height: 600,
			title: 'Graph'
		}).dialog( 'open' );
		return false;
	}
</script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
General Statistics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/risegraph32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
General Statistics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value=='SELECTED_PERIOD_TOO_LONG') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The selected period is too long to display it by days. Please try to select a shorter period or change "Display by" option<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='SELECTED_PERIOD_IS_INCORRECT') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report can not be generated. Please set correct dates.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='EMPTY_PARAMETER') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report can not be generated. Please select needed reports.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>
<?php }?>
<form method="post">
<fieldset style="max-width: 800px;">
	<legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</legend>
	<table>
		<tbody>
			<tr>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate Stats for the Period from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: </td>
				<td class="genStat">
					<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_from", null, null); ob_start(); ?><input type="text" name="period[from]" value="<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
" id="period_notless"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_to", null, null); ob_start(); ?><input type="text" name="period[to]" value="<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
" id="period_notmore"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->tpl_vars["input_text_field_from"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_from']), null, 0);?>
					<?php $_smarty_tpl->tpl_vars["input_text_field_to"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_to']), null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$input_text_field_from to $input_text_field_to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</td>
			</tr>
			<tr>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
				<td>
					<select name="group_by">
						<option value="day" <?php if ($_smarty_tpl->tpl_vars['groupBy']->value=='day') {?> selected = "selected" <?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Day<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<option value="month" <?php if ($_smarty_tpl->tpl_vars['groupBy']->value=='month') {?> selected = "selected" <?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Month<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<option value="quarter" <?php if ($_smarty_tpl->tpl_vars['groupBy']->value=='quarter') {?> selected = "selected" <?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Quarter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<option value="year" <?php if ($_smarty_tpl->tpl_vars['groupBy']->value=='year') {?> selected = "selected" <?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Year<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reports<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:&nbsp;&nbsp;
					 <input type="checkbox" name="filter[popularity]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['popularity']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popularity<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[users]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['users']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[listings]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['listings']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[applications]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['applications']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[alerts]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['alerts']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alerts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[sales]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['sales']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sales<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="checkbox" name="filter[plugins]" value="1" <?php if ($_smarty_tpl->tpl_vars['filter']->value['plugins']==1||!$_smarty_tpl->tpl_vars['filter']->value) {?> checked ="checked" <?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 <input type="hidden" name="filter[general_statistics]" value="1" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
                    <div class="floatRight"><input  type="submit" name="search" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></div>
                </td>
			</tr>
		</tbody>
	</table>
</fieldset>
</form>
<br/>
<?php if (!$_smarty_tpl->tpl_vars['errors']->value&&$_smarty_tpl->tpl_vars['statistics']->value) {?>
<?php $_smarty_tpl->tpl_vars['listingCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['listingTypes']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['userCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['userGroups']->value), null, 0);?>
<table>
	<tr style="font-weight: bold;">
		<td nowrap="nowrap"></td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td style="text-align: center"  nowrap="nowrap">
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='total') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['groupBy']->value=='day') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['groupBy']->value=='month') {?>
				<?php echo $_smarty_tpl->tpl_vars['statistic']->value['month'];?>
, <?php echo $_smarty_tpl->tpl_vars['statistic']->value['year'];?>
 
			<?php } elseif ($_smarty_tpl->tpl_vars['groupBy']->value=='year') {?>
				<?php echo $_smarty_tpl->tpl_vars['statistic']->value['year'];?>
 
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['statistic']->value['quarter'];?>
, <?php echo $_smarty_tpl->tpl_vars['statistic']->value['year'];?>
 
			<?php }?>
			</td>
		<?php } ?>
		<td colspan="2" style="text-align: center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Graphs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
	</tr>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['popularity']==1) {?>
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popularity<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<form method="post" id="formPopularity" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formPopularity', 'Popularity')" >
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Website Views<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['siteView']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="siteView" /></td>
		<?php $_smarty_tpl->tpl_vars['rowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingCount']->value+1, null, 0);?>
		<td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
 Views<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("viewListing".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="viewListing<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
	</tr>
	<?php } ?>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['users']==1) {?>
	<form method="post" id="formUsers" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formUsers', 'Users')" >
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<?php  $_smarty_tpl->tpl_vars['userGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['userGroup']->key => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']++;
?>
	<tr>
		<?php $_smarty_tpl->tpl_vars['userGroupID'] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
		<td  nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['userGroup']->value['key']=='Employer') {?>Employers<?php } elseif ($_smarty_tpl->tpl_vars['userGroup']->value['key']=='JobSeeker') {?>Job Seekers<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['caption'];?>
" Users<?php }?> Registered<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addUser".((string)$_smarty_tpl->tpl_vars['userGroupID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addUser<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['id'];?>
" /></td>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['users_block']['iteration']==1) {?>
			<?php $_smarty_tpl->tpl_vars['rowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['userCount']->value+2, null, 0);?>
			<td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
		<?php }?>
	</tr>
	<?php } ?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Sub-Employers Registered<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['addSubAccount']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addSubAccount" /></td>
	</tr>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Profiles Deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['deleteUser']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="deleteUser" /></td>
	</tr>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['listings']==1) {?>
	<form method="post" id="formListings" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formListings', 'Listings')">
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingType']->value['key']=='Job'||$_smarty_tpl->tpl_vars['listingType']->value['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
" Listings<?php }?> Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addListing".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addListing<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration']==1) {?>
			<?php $_smarty_tpl->tpl_vars['rowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingCount']->value*3+1, null, 0);?>
			<td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
		<?php }?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['listingType']->value['id']==6) {?>
		<tr>
			<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Featured <?php if ($_smarty_tpl->tpl_vars['listingType']->value['key']=='Job'||$_smarty_tpl->tpl_vars['listingType']->value['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
" Listings<?php }?> Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
				<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addListingFeatured".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
			<?php } ?>
			<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addListingFeatured<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
		</tr>
	<?php }?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Priority <?php if ($_smarty_tpl->tpl_vars['listingType']->value['key']=='Job'||$_smarty_tpl->tpl_vars['listingType']->value['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
" Listings<?php }?> Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars['event'] = new Smarty_variable("addListingPriority".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addListingPriority<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
	</tr>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingType']->value['key']=='Job'||$_smarty_tpl->tpl_vars['listingType']->value['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
" Listings<?php }?> Deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("deleteListing".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="deleteListing<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
	</tr>
	<?php } ?>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['applications']==1) {?>
	<form method="post" id="formApplications" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formApplications', 'Applications')" >
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Applications Made<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['apply']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="apply" /></td>
		<td rowspan="3"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
	</tr>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Applications Approved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['applyApproved']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="applyApproved" /></td>
	</tr>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Applications Rejected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['applyRejected']['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="applyRejected" /></td>
	</tr>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['alerts']==1) {?>
	<form method="post" id="formAlerts" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formAlerts', 'Alerts')" >
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alerts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alert_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alert_block']['iteration']++;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
 Alerts Subscribed for<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addAlert".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="addAlert<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['alert_block']['iteration']==1) {?>
			<?php $_smarty_tpl->tpl_vars['rowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingCount']->value*4, null, 0);?>
			<td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
		<?php }?>
	</tr>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
 Alerts Sent<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("sentAlert".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
			<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="sentAlert<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
	</tr>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
		<tr>
			<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Guest<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
 Alerts Sent<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
				<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("GuestAlertsSent".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
			<?php } ?>
			<td><input type="checkbox"  checked = "checked" name="itemName[]" value="GuestAlertsSent<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
		</tr>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
		<tr>
			<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Guest <?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
 Alerts subscribed for<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			<?php $_smarty_tpl->tpl_vars['listingTypeID'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingType']->value['id'], null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
				<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("GuestAlertSubscribed".((string)$_smarty_tpl->tpl_vars['listingTypeID']->value), null, 0);?>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
			<?php } ?>
			<td><input type="checkbox"  checked = "checked" name="itemName[]" value="GuestAlertSubscribed<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /></td>
		</tr>
	<?php } ?>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['sales']==1) {?>
	<form method="post" id="formSales" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formSales', 'Sales')" >
	<tr><td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sales<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td><td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td></tr>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total Sales<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', "statisticTotalAmount", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value['totalAmount']['statistic'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['statisticTotalAmount']->value),$_smarty_tpl);?>

			</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="totalAmount" /></td>
		<?php $_smarty_tpl->tpl_vars['rowspan'] = new Smarty_variable($_smarty_tpl->tpl_vars['userCount']->value+1, null, 0);?>
		<td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan']->value;?>
"><input type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['userGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userGroup']->key => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->_loop = true;
?>
	<tr>
		<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Earnings from <?php if ($_smarty_tpl->tpl_vars['userGroup']->value['key']=='Employer') {?>Employers<?php } elseif ($_smarty_tpl->tpl_vars['userGroup']->value['key']=='JobSeeker') {?>Job Seekers<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['caption'];?>
" Users<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<?php $_smarty_tpl->tpl_vars["group_sid"] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("amount_".((string)$_smarty_tpl->tpl_vars['group_sid']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<td>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', "earningsFromUsers", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['earningsFromUsers']->value),$_smarty_tpl);?>

			</td>
		<?php } ?>
		<td><input type="checkbox"  checked = "checked" name="itemName[]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
" /></td>
	</tr>
	<?php } ?>
		<tr>
			<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Promotion Discount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			<?php  $_smarty_tpl->tpl_vars["statistic"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["statistic"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["statistic"]->key => $_smarty_tpl->tpl_vars["statistic"]->value) {
$_smarty_tpl->tpl_vars["statistic"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["statistic"]->key;
?>
				<td>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "promotionDiscount", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value['promotionUsed']['statistic'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['promotionDiscount']->value),$_smarty_tpl);?>

				</td>
			<?php } ?>
			<td><input type="checkbox"  checked="checked" name="itemName[]" value="promotionUsed" /></td>
		</tr>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['filter']->value['plugins']==1) {?>
		<form method="post" id="formPlugins" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/general-statistics/" onSubmit="return GenerateGraph('formPlugins', 'Plugins')" >
			<tr>
				<td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value;?>
"></td>
			</tr>
			<tr <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['MobilePlugin']['active']) {?>style="color: #A1A1A1"<?php }?>>
				<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Mobile Version Views<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
					<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['viewMobileVersion']['statistic'];?>
</td>
				<?php } ?>
				<td><input type="checkbox"  name="itemName[]" value="viewMobileVersion" <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['MobilePlugin']['active']) {?> disabled = "disabled"<?php } else { ?> checked = "checked" <?php }?> /></td>
				<td rowspan="9"><input type="submit" name="submit" value="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trGenerateGraph'], ENT_QUOTES, 'UTF-8', true);?>
" class="grayButton" /></td>
			</tr>
			<tr <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['IndeedPlugin']['active']&&!$_smarty_tpl->tpl_vars['listPlugins']->value['BeyondPlugin']['active']&&!$_smarty_tpl->tpl_vars['listPlugins']->value['SimplyHiredPlugin']['active']) {?>style="color: #A1A1A1"<?php }?>>
				<td nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Redirects to Partnering Sites<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
					<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['partneringSites']['statistic'];?>
</td>
				<?php } ?>
				<td><input type="checkbox"  name="itemName[]" value="partneringSites" <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['IndeedPlugin']['active']&&!$_smarty_tpl->tpl_vars['listPlugins']->value['BeyondPlugin']['active']&&!$_smarty_tpl->tpl_vars['listPlugins']->value['SimplyHiredPlugin']['active']) {?> disabled = "disabled"<?php } else { ?> checked = "checked" <?php }?> /></td>
			</tr>

			<tr>
				<td style="text-align: center; font-weight: bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['countItems']->value-1;?>
"></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars["userGroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["userGroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["userGroup"]->key => $_smarty_tpl->tpl_vars["userGroup"]->value) {
$_smarty_tpl->tpl_vars["userGroup"]->_loop = true;
?>
				<tr <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['LinkedinSocialPlugin']['active']) {?>style="color: #A1A1A1"<?php }?>>
					<?php $_smarty_tpl->tpl_vars['userGroupID'] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
					<td  nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of "<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['key'];?>
" Users registered through LinkedIn<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php  $_smarty_tpl->tpl_vars["statistic"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["statistic"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["statistic"]->key => $_smarty_tpl->tpl_vars["statistic"]->value) {
$_smarty_tpl->tpl_vars["statistic"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["statistic"]->key;
?>
						<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addUserlinkedin".((string)$_smarty_tpl->tpl_vars['userGroupID']->value), null, 0);?>
						<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
					<?php } ?>
					<td><input type="checkbox" checked = "checked" name="itemName[]" value="addUserlinkedin<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['id'];?>
"
							   <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['LinkedinSocialPlugin']['active']) {?> disabled = "disabled"<?php } else { ?> checked = "checked" <?php }?> /></td>
				</tr>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars["userGroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["userGroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["userGroup"]->key => $_smarty_tpl->tpl_vars["userGroup"]->value) {
$_smarty_tpl->tpl_vars["userGroup"]->_loop = true;
?>
				<tr <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['FacebookSocialPlugin']['active']) {?>style="color: #A1A1A1"<?php }?>>
					<?php $_smarty_tpl->tpl_vars["userGroupID"] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
					<td  nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of "<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['key'];?>
" Users registered through Facebook<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php  $_smarty_tpl->tpl_vars["statistic"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["statistic"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["statistic"]->key => $_smarty_tpl->tpl_vars["statistic"]->value) {
$_smarty_tpl->tpl_vars["statistic"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["statistic"]->key;
?>
						<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addUserfacebook".((string)$_smarty_tpl->tpl_vars['userGroupID']->value), null, 0);?>
						<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
					<?php } ?>
					<td><input type="checkbox" checked = "checked" name="itemName[]" value="addUserfacebook<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['id'];?>
"
							   <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['FacebookSocialPlugin']['active']) {?> disabled = "disabled"<?php } else { ?> checked = "checked" <?php }?> /></td>
				</tr>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars["userGroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["userGroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["userGroup"]->key => $_smarty_tpl->tpl_vars["userGroup"]->value) {
$_smarty_tpl->tpl_vars["userGroup"]->_loop = true;
?>
				<tr <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['GoogleSocialPlugin']['active']) {?>style="color: #A1A1A1"<?php }?>>
					<?php $_smarty_tpl->tpl_vars["userGroupID"] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
					<td  nowrap="nowrap"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of "<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['key'];?>
" Users registered through Google<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php  $_smarty_tpl->tpl_vars["statistic"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["statistic"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["statistic"]->key => $_smarty_tpl->tpl_vars["statistic"]->value) {
$_smarty_tpl->tpl_vars["statistic"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["statistic"]->key;
?>
						<?php $_smarty_tpl->tpl_vars["event"] = new Smarty_variable("addUsergoogle".((string)$_smarty_tpl->tpl_vars['userGroupID']->value), null, 0);?>
						<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value[$_smarty_tpl->tpl_vars['event']->value]['statistic'];?>
</td>
					<?php } ?>
					<td><input type="checkbox" checked = "checked" name="itemName[]" value="addUsergoogle<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['id'];?>
"
							   <?php if (!$_smarty_tpl->tpl_vars['listPlugins']->value['GoogleSocialPlugin']['active']) {?> disabled = "disabled"<?php } else { ?> checked = "checked" <?php }?> /></td>
				</tr>
			<?php } ?>
		</form>
	<?php }?>
</table>

<div id="stat-footer">
	<form method="post">
		<input type="hidden" name="action" value="export" />
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="period[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="filter[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<input type="hidden" name="group_by" value="<?php echo $_smarty_tpl->tpl_vars['groupBy']->value;?>
" />
		<input type="submit" name="export" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Export in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /> &nbsp;
		<select name="type" class="export-select">
			<option value="csv">CSV</option>
			<option value="xls">XLS</option>
		</select>
	</form>
	<div class="clr"></div>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/print-general-statistics/" target="_blank">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="period[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="filter[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<input type="hidden" name="search" value="1" />
		<input type="hidden" name="group_by" value="<?php echo $_smarty_tpl->tpl_vars['groupBy']->value;?>
" />
		<input type="submit" name="print" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Print<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" />
	</form>
</div>
<?php }?>
<script language="Javascript">
$(function() {

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");
	
	$("#period_notless, #period_notmore").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
	});
});
</script><?php }} ?>
